<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'libraries/facebook.php';
class Facebooklogincontroller extends CI_Controller {
    public function login(){
        // $this->load->library('facebook'); // Automatically picks appId and secret from 
        $this->load->library('facebook');
           //  , array(
           // 'appId' => '698513370313214',
           // 'secret' => '2efe79ef2b192c9aac290fa2c96ceca9',
           // ));
        $user = $this->facebook->getUser();
        // var_dump($user);
        if ($user) {
        $data['user_profile'] = $this->facebook->api('/me/');
        var_dump($data);

        // Get logout url of facebook
        $data['logout_url'] = $this->facebook->getLogoutUrl(array('next' => base_url() . 'index.php/facebooklogincontroller/logout'));

        // Send data to profile page
        $this->load->view('profile', $data);
        } 
        else {

        // Store users facebook login url
        $data['login_url'] = $this->facebook->getLoginUrl();
        $this->load->view('facebooklogin', $data);
        }
    }
    public function logout(){
        $this->load->library('facebook');
        // Logs off session from website
        $this->facebook->destroySession();
        // Make sure you destory website session as well.
        redirect('facebooklogincontroller/login');
    }
}