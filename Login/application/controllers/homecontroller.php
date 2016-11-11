<?php
/**
*class for user's home functions
*/
class Homecontroller extends CI_Controller 
{
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