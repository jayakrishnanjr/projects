
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*class for session crestion and login and home page loading*/ 
class Ajaxlogincontroller extends CI_Controller 
    {
        /**
        *function to check if session set or not
        *if session is alreasy set loading the profilepage
        *else loading the login page
        *@param void
        *@return void
        */ 
        public function sessionSetting()
        {
            if(isset($this->session->userdata['logged_in'])){
            $this->load->view('home');
            }
            else{
            $this->load->view('login');
            }
        }

        /**
        *function to load all views
        *if session is not set calling login
        *checking username is present in db,if present checking password else reloading page with error
        *if session is already set then loading profile page
        *@param void
        *@return void
        */

        public function showProfile()
        {
            if ($this->input->post()){
                $this->form_validation->set_rules('username', 'Username', 'required|max_length[15]|min_length[5]|trim|alpha_numeric');
                $this->form_validation->set_rules('password', 'Password', 'required|max_length[15]|min_length[5]|trim|alpha_numeric');
                    
                /*check form validation*/ 
                if ($this->form_validation->run() == FALSE){
                     $this->sessionSetting();
                }
                else
                {
                    $credentials= array(
                        'username' => $this->input->post('username'),
                        'password' => $this->input->post('password'),
                        'logged_in' => TRUE
                        );

                    $this->load->model('logindbmodel');
                    /*check if email exist*/ 
                    if ($this->logindbmodel->checkifEmailExists($credentials['username'])) 
                    {
                        /*check if password is correct*/ 
                        if ($this->logindbmodel->checkPassword($credentials['username'],$credentials['password'])) {
                          $this->sessionData($credentials);    /*calling function to set session*/
                          $this->sessionSetting();  
                        }
                        else
                        {
                          $this->sessionSetting(); 
                        }  
                    }
                    else
                    {
                        $this->sessionSetting();
                    }
                }
            }
            // IF NOT FORM POST
            else{
                $this->sessionSetting();
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

        /**
        *function to destroy session data
        *@param credentials
        *@return void
        */
        public function deleteSessionData()
        {
            $this->session->unset_userdata('logged_in');
            $this->session->sess_destroy();
            $this->sessionSetting();
        }
    }
?>