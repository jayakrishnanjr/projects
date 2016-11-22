<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'libraries/facebook.php';

/*
*class for facebook login operation
*/ 
class Facebooklogincontroller extends CI_Controller 
{    
    /**
    *function for facebook login
    *@param void
    *@return void
    */ 
    public function login(){
        // Automatically picks appId and secret from config 
        $this->load->library('facebook');
        $user = $this->facebook->getUser();
        $fbPermissions = 'email';

        if ($user) {    
            $data['user_profile'] = $this->facebook->api('/me/');
            $signup=date("Y-m-d h:i:sa");

            $credentials = array(
                               'name' => $data['user_profile']['name'],
                               'email' =>$data['user_profile']['email'],
                               'facebookid' => $data['user_profile']['id'],
                               'SignupTime'=>$signup,
                               'Status'=>2,
                               'user_type'=>2
                           );

            $this->load->model('facebookmodel');

            if ($this->facebookmodel->userExists($credentials['facebookid'])) {
                // Get logout url of facebook
                // $data['logout_url'] = $this->facebook->getLogoutUrl(array('next' => base_url() . 'index.php/facebooklogincontroller/logout'));
                if ($this->logindbmodel->userStatus($credentials)) {
                    
                    $credentials['logged_in']= TRUE;
                    $credentials['user_type']= 2;  
                    $this->sessionData($credentials);
                    redirect('home');
                }
                else{
                    $this->load->view("accountblock");
                } 
            }
            else
            {

                if ($this->facebookmodel->insertData($credentials)) {
                    $credentials['logged_in']= TRUE;
                    $credentials['user_type']= 2;  
                    $this->sessionData($credentials);
                    redirect('home');
                }
                else{
                    echo "Some connection problem, Please try again later";
                }
            }
        } 
        else {
            $data['login_url'] = $this->facebook->getLoginUrl();
            redirect($data['login_url']);
        }
    }
    
    /**
    *function to set session data
    *@param credentials
    *@return void
    */ 
    public function sessionData($credentials)
    {
        $this->session->set_userdata($credentials);    
    }
}