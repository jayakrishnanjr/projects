<?php
/**
*class for user's home functions
*/
class Homecontroller extends CI_Controller 
{
	public function loadHomeView()
	{
		$this -> load->model('homemodel');
		if ($totalData = $this->homemodel->getTotalCount()) {
			$content_per_page = 15; 
			$data['totaldata'] = ceil($totalData/$content_per_page);
			$this->load->view('userhome', $data);
		}
		else
		{
			$this->load->view('activationexpired');
		}
	
	}
	public function loadData()
    {
    	if ($this->input->is_ajax_request()) {
    		$group_no = $this->input->post('group_no');
    		$content_per_page = 15;
    		$start = ceil($group_no * $content_per_page);
    		$this -> load->model('homemodel');
    		if($all_content = $this->homemodel->getAllContent($start,$content_per_page)){
    		foreach ($all_content as $key => $content) :
    		     echo '<li>'.$content->Post.'</li>';
    		     echo '<p>'.$content->date.'</p>';                 
    		endforeach;
    		}     
    	}
    	else{
    		echo "erro in loading";
    	}                                
    }
	public function loadAboutUsView()
	{
		$this->load->view('aboutus');
	}
	public function loadProfileView()
	{
		$this->load->view('userprofile');
	}
	public function loadContactusView()
	{
		$this->load->view('contactus');
	}
}
?>