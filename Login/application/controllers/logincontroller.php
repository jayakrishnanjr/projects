
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*class for session crestion and login and home page loading*/ 

class Logincontroller extends CI_Controller 
{
    /**
    *function to check if session set or not
    *if session is alreasy set loading the profilepage
    *else loading the login page
    *@param void
    *@return void
    */ 
    public function checkSession()
    {
        if(isset($this->session->userdata['logged_in'])&&$this->session->userdata['user_type']==1){
            redirect('home');
        }
        elseif (isset($this->session->userdata['logged_in'])&&$this->session->userdata['user_type']==2){
            redirect('facebook');
        }    
        else{
            $page="login";
            $this->load->view($page);
        }
    }

    /**
    *function to load all views
    *if session is not set calling login
    *checking email is present in db,if present checking password else reloading page with error
    *if session is already set then loading profile page
    *@param void
    *@return void
    */

    public function loginUser()
    {
        if ($this->input->post()){
            $this->form_validation->set_rules('email', 'Email', 'required|max_length[50]|min_length[10]|trim|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required|max_length[15]|min_length[5]|trim|alpha_numeric');
            $data['email']=$this->input->post('email');
            /*check form validation*/ 
            if ($this->form_validation->run() == FALSE){   
                $this->load->view('login',$data);
            }
            else
            {
                $credentials= array(
                    'Email' => $this->input->post('email'),
                    'Password' => md5($this->input->post('password')),  
                    );
                $this->load->model('logindbmodel');
                /*check if email exist*/ 
                if ($this->logindbmodel->checkifEmailExists($credentials['Email'])) 
                {
                    /*check if password is correct*/ 
                    if ($this->logindbmodel->checkPassword($credentials['Email'],$credentials['Password'])) {
                        
                        if($this->logindbmodel->checkifAccountActivated($credentials))
                        {
                            if ($this->logindbmodel->userStatus($credentials)) {
                                $credentials['logged_in']= TRUE;
                                $credentials['user_type']= 1;  
                                $this->sessionData($credentials);
                                $this->checkSession();
                            }
                            else{
                                $this->load->view("accountblock");
                            }
                        }
                        else
                        {
                            $this->load->view('activateaccount');
                        } 
                    }
                    else
                    {
                      $this->session->set_flashdata('errors','Password you entered is wrong');
                      $this->load->view('login',$data);
                    }  
                }
                else
                {
                    $this->session->set_flashdata('errors','Email not exist!');
                    $this->load->view('login',$data);
                }
            }
        }
        else{               
            redirect('login');
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
        $this->session->unset_userdata('user_type');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('Password');
        $this->session->sess_destroy();
        $this->load->library('facebook');
        // Logs off session from website
        $this->facebook->destroySession();
        redirect('login');
    }

    /**
    *function to destroy session data
    *@param credentials
    *@return void
    */
    public function errorMessage()
    {
        $this->load->view('404error');
    }
}
?>