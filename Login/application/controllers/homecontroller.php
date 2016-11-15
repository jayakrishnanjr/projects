<?php
/**
*class for user's home functions
*/
class Homecontroller extends CI_Controller 
{
	/**
	*function to load home view
	*@param void
	*@return void
	*/ 
	public function loadHomeView()
	{
		$this -> load->model('homemodel');
		if($data=$this->userData()){
			
			if ($totalData = $this->homemodel->getTotalCount()) {
				$content_per_page = 15; 
				$data['totaldata'] = ceil($totalData/$content_per_page);
				$this->load->view('userhome', $data);
			}
		    else{
		    	$this->load->view('404error');
		    }
		}    
		else{
			$this->load->view('404error');
		}
	}

	/**
	*controller function to load Data from db
	*@param void
	*@return void
	*/ 
	public function loadData()
    {
    	if ($this->input->is_ajax_request()) {
    		
    		$group_no = $this->input->post('group_no');
    		$content_per_page = 15;
    		$start = ceil($group_no * $content_per_page);
    		$this -> load->model('homemodel');
    		
    		if($all_content = $this->homemodel->getAllContent($start,$content_per_page)){
	    		
	    		foreach ($all_content as $key => $content){
	    			echo '<div class="ex-testimonial">
	    			    <div class="ex-testimonial-inner">
	    			        <div class="ex-profile">
	    			            <img class="example-thumb" src="/Login/assets/img/image2.jpg">
	    			            <p class="example-name"><i class="fa fa-caret-right"></i> MyCompany <br><span class="example-date"><a>'.$content->date.'</a> · <i class=""></i></span></p>
	    			        </div>
	    			        <div class="ex-testimonial-copy">
	    			            <p>'.$content->Post.'</p>
	    			        </div>
	    			    </div>
	    			</div>';             
	    		}
    	    }
    	    else{
    	    	echo "erro in loading";
    	    }     
    	}
    	else{
    		echo "erro in loading";
    	}                                
    }

    /**
	*function load aboutus view 
	*@param void
	*@return void
	*/ 
	public function loadAboutUsView()
	{
		
		if($data=$this->userData()){
				$this->load->view('aboutus', $data);
		}
	    else{
	    	$this->load->view('404error');
	    }
 
	}

	/**
	*function load profile view
	*@param void
	*@return void
	*/ 
	public function loadProfileView()
	{
		
		if($data=$this->userData()){
				$this->load->view('userprofile', $data);
		}
	    else{
	    	$this->load->view('404error');
	    }
	}

	/**
	*function load contactus view 
	*@param void
	*@return void
	*/ 
	public function loadContactusView()
	{
		
		if($data=$this->userData()){
				$this->load->view('contactus', $data);
		}
	    else{
	    	$this->load->view('404error');
	    }
	}

	/**
	*function load user information (if usertype is 1 email is used)
	*else if usertype=2 then facebookid is used
	*@param void
	*@return user data users image url and name
	*/ 
	public function userdata()
	{
		if ($this->session->userdata['user_type']==1){
			$this -> load->model('homemodel');
			$email=$this->session->userdata['Email'];
			
			if($dat['result']=$this->homemodel->getUserDatas($email)){
				$data['image_url']="/Login/assets/img/image2.jpg";
				
				foreach($dat['result'] as $key) {
				   $data['name']=$key->name;
				   $data['id']=$key->Id;
				}
					return $data;
			}
			else{
				return false;
			}
		}
		
		elseif ($this->session->userdata['user_type']==2) {
			$this -> load->model('homemodel');
			$facebookid=$this->session->userdata['facebookid'];
			
			if($dat['result']=$this->homemodel->getFacebookUserDatas($facebookid)){
				$data['image_url']="https://graph.facebook.com/".$facebookid."/picture";
			    
			    foreach($dat['result'] as $key) {
				  $data['name']=$key->name;
				}
				return $data;
			}
			else{
				return false;
			}
		}
		else{
			$this->load->view('404error');
		}	
	}
}
?>