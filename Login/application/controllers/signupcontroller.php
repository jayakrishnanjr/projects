<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*class for signup*/ 
class Signupcontroller extends CI_Controller 
{
    /**
    *function to check if email activated or not
    *@param void
    *@return void
    */
    public function signUpData()
    {
        if ($this->input->post()){
            $this->form_validation->set_rules('name', 'name', 'required|max_length[25]|min_length[5]|trim');
            $this->form_validation->set_rules('email', 'email', 'required|max_length[50]|min_length[10]|trim|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required|max_length[15]|min_length[5]|trim|alpha_numeric');
            $this->form_validation->set_rules('confirmpassword', 'password confirmation', 'required|max_length[15]|min_length[5]|trim|alpha_numeric|matches[password]');
            $this->session->set_userdata('email',$this->input->post('email'));  
            $data['name']= $this->input->post('name');
            $data['email']=$this->input->post('email'); 
            /*check form validation*/ 
            if ($this->form_validation->run() == FALSE){
                $this->load->view('signup',$data);
            }
            else
            {      
                $activation="dhgffhsfhjh".md5(now())."dfhjhfj";
                $signup=date("Y-m-d h:i:sa");
                $credentials= array(
                'name' =>$this->input->post('name'),   
                'Email' => $this->input->post('email'),
                'Password' => md5($this->input->post('password')),
                'Activationcode' => $activation,
                'SignupTime'=>$signup,
                'Status'=>2,
                'user_type'=>1
                );
                $this->load->model('signupmodel');
                /*check if email exist*/ 
                if ($this->signupmodel->checkifEmailExists($credentials['Email'])) {
                    $this->session->set_flashdata('error','email already exist');
                    $this->load->view('signup');  
                }
                else{
                    $this->load->model('signupmodel');

                    /*for insert credentials into database*/ 
                    if($this->signupmodel->insertData($credentials)){
                        if($this->sendEmail($credentials)){
                            $this->load->view('success');        
                        } 
                        else{
                            $this->session->set_flashdata('error','some technical error please try again');
                            $this->load->view('signup',$data); 
                        }
                    }    
                    else
                    {
                       $this->session->set_flashdata('error','some technical error please try again');
                       $this->load->view('signup',$data);  
                    }       
                }
            }
        }
        // IF NOT FORM POST
        else{
            $this->load->view('signup');
        }
    }
    /**
    *function to send email (gmail smtp is used)
    *if email sented loading success view else loading same page
    *@param credentials
    *@return status
    */ 
    public function sendEmail($credentials)
    {
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com"; /*host name of gmail*/
        $config['smtp_port'] = "465";   /*smtp port number*/
        /*user's mailid and password configuartion*/ 
        $config['smtp_user'] = ""; 


        $config['smtp_pass'] = "";       /*enter the password of gmail here */


        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        $this->email->initialize($config);
        /*message config*/ 
        $this->email->from('jrjayakrishnan6@gmail.com', 'jayakrishnan j r');

        $mailid=$credentials['Email'];
        $this->email->to($mailid);
        $this->email->reply_to('jrjayakrishnan6@gmail.com', 'reply');
        $this->email->subject("activation");
        $code=$credentials['Activationcode'];
        $address['data']="localhost/Login/index.php/activate/".$mailid."/".$code;
        $message="<h1>Thank you for registering with us,please click the below link for activation
                  <h1> 
                  <a href=".$address['data']."><u>click here</u></a>";
        $this->email->message($message);
      
        if ($this->email->send()){
            return true;                 
        }
        else{
            return false;
        }   
    }

    /**
    *function to check if email activated or not
    *@param void
    *@return void
    */
    public function activateEmail()
    {
        $vertificationCredentials=array('mail' => $this->uri->segment(2),
                                        'id' => $this->uri->segment(3)
                                        );
        $mail=$vertificationCredentials['mail'];
        $id=$vertificationCredentials['id'];

        if (!filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
            
            if (ctype_alnum($id)) {
                $this->load->model('logindbmodel');
                if ($this->logindbmodel->emailActivation($vertificationCredentials)) {
                    $this->load->view("activationsuccess");
                }
                else
                {
                    $this->load->view("activationexpired");

                }  
            }
            else {
                $this->load->view("activationexpired");
            }           
        } 
        else {
          $this->load->view("activationexpired");
        }  
    }
}
?>
