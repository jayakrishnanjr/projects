<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*class for signup*/ 
class Signupcontroller extends CI_Controller 
    {
        public function signUp()
        {
            $this->signUpData();
        }

        public function signUpData()
        {
            if ($this->input->post()){
                $this->form_validation->set_rules('username', 'Username', 'required|max_length[35]|min_length[5]|trim|alpha_numeric');
                $this->form_validation->set_rules('password', 'Password', 'required|max_length[15]|min_length[5]|trim|alpha_numeric');
                $this->form_validation->set_rules('confirmpassword', 'password confirmation', 'required|max_length[15]|min_length[5]|trim|alpha_numeric');
                    
                /*check form validation*/ 
                if ($this->form_validation->run() == FALSE){
                     $this->load->view('signup');
                }
                else
                {
                    if ($this->input->post('password')==$this->input->post('confirmpassword')) {
                        $credentials= array(
                        'username' => $this->input->post('username'),
                        'password' => $this->input->post('password')
                        );
                        $this->load->model('signupmodel');
                        /*check if email exist*/ 
                        if ($this->signupmodel->checkifEmailExists($credentials['username'])) 
                        {
                            $this->load->view('signup');  
                        }
                        else
                        {
                        $this->signupmodel->insertData($credentials);
                        $this->load->view('success');
                        }
                    }
                    else{
                        $this->load->view('signup');
                    }
                }
            }
            // IF NOT FORM POST
            else{
                $this->load->view('signup');
            }
        }
    }
?>