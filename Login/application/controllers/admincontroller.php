<?php
/**
*class for admin 
*/
class Admincontroller extends CI_controller
{
	/**
	*function to get all users from db
    *@param void
    *@return void
	**/
	public function viewAllUserDetails()
	{
		if($this->input->is_ajax_request()){
			$this->load->model('adminmodel');
			$credentials['result']=$this->adminmodel->getAllUserDatas();
			echo json_encode($credentials);
		}
		else
		{
			$this->load->view('activationexpired');
		}
	}

	/**
	*function to check if session set or not
	*if session is alreasy set loading the profilepage
	*else loading the login page
	*@param void
	*@return void
	*/ 
	public function checkSession()
	{
	    if(isset($this->session->userdata['logged_in'])&&$this->session->userdata['user_type']==2){
	        $this->load->view('adminhome');
	    }
	    else{
	        $page="adminlogin";
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
	        $this->form_validation->set_rules('email', 'Email', 'required|max_length[55]|min_length[8]|trim|valid_email');
	        $this->form_validation->set_rules('password', 'Password', 'required|max_length[20]|min_length[8]|trim|alpha_numeric');
	            
	        /*check form validation*/ 
	        if ($this->form_validation->run() == FALSE){   
	            $this->load->view('adminlogin');
	        }
	        else
	        {
	            $credentials= array(
	                'Email' => $this->input->post('email'),
	                'Password' => md5($this->input->post('password')),  
	                );
	            $this->load->model('adminmodel');
	            /*check if email exist*/ 
	            if ($this->adminmodel->checkifEmailExists($credentials['Email'])) 
	            {
	                /*check if password is correct*/ 
	                if ($this->adminmodel->checkPassword($credentials['Email'],$credentials['Password'])) {
                            $credentials['logged_in']= TRUE;
                            $credentials['user_type']= 2;  
                            $this->sessionData($credentials);
                            $this->load->view('adminhome'); 
	                }
	                else
	                {
	                  $this->session->set_flashdata('errors','Password you entered is wrong');
	                  $this->load->view('adminlogin');
	                }  
	            }
	            else
	            {
	                $this->session->set_flashdata('errors','Email not exist!');
	                redirect('adminlogin');
	            }
	        }
	    }
	    // IF NOT FORM POST
	    else{
	       
	        redirect('adminlogin');
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
	    $this->session->sess_destroy();
	    redirect('adminlogin');
	}

	/**
	*function to change user status
    *@param void
    *@return void
	**/
	public function enableStatus()
	{

		$credentials=array('id' => $this->uri->segment(3));
		$this->load->model('adminmodel');
		if($this->adminmodel->enableUserStatus($credentials))
		{
			$this->load->view('adminhome');
		}
		else
		{
			$this->load->view('activationexpired');
		}
	}
	/**
	*function to change user status
    *@param void
    *@return void
	**/
	public function disableStatus()
	{
		$credentials=array('id' => $this->uri->segment(3));
		$this->load->model('adminmodel');
		if($this->adminmodel->disableUserStatus($credentials))
		{
			$this->load->view('adminhome');
		}
		else
		{
			$this->load->view('activationexpired');
		}
	}
}
?>