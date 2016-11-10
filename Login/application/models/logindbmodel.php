<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*class for login
*It include function for check if email exist,checking password is correct,email activation,updatas
*and check if account activated or not
*/
class Logindbmodel extends CI_Model
{

	/**
	*function to check if email exist or not in database
    *@param void
    *@return null
	**/
	public function checkifEmailExists($email)
	{
	    $this->db->where('Email',$email);
	    $query = $this->db->get('user');
	    
	    if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
	}
	
	/**
	*function to check password match
    *@param email,password
    *@return null
	**/
	public function checkPassword($email,$password)
	{
	   $this->db->select('Password');
	   $this->db->where('Email',$email);
	   $query = $this->db->get('user');
	   foreach ($query->result() as $row){
		    $pass=$row->Password;
		}
		if($password===$pass){
			return true;
		}	 
		else{
			return false;
		}	
	}

	/**
	*function to  email activation
    *@param $datas
    *@return void
	**/
	public function emailActivation($datas)
	{
		if ($this->checkifEmailExists($datas['mail'])) {
			$mail = $datas['mail'];
			$emailstat = $datas['id'];		
		    $this->db->select('Activationcode');
		    $this->db->where('Email',$mail);
		    $query = $this->db->get('user');
		    foreach ($query->result() as $row){
			    $stat=$row->Activationcode;
			}
			if($emailstat==$stat){
				if ($this->updateDatas($datas)) {
					return true;
				}
				else{
					return false;
				}	
			}	 
			else{
				return false;
			}
		}
		else{
			return false;
		}		
	}

	/**
	*function to  update activation code after verification
    *@param $datas
    *@return void
	**/
	public function updateDatas($datas)
	{
		$data=array('Activationcode'=>null);
		$this->db->where('Email',$datas['mail']);
		$query=$this->db->update('user',$data);
		return $query;	
	}

	/**
	*function to  checkifaccount activated or not
    *@param $datas
    *@return void
	**/
	public function checkifAccountActivated($credentials)
	{
		$this->db->select('Activationcode');
	   	$this->db->where('Email',$credentials['Email']);
	   	$query = $this->db->get('user');
	   	foreach ($query->result() as $user)
	   	{
	   	        $val=$user->Activationcode; 
	   	}
	   	if (!empty($val)) {
	   		return false;	
	   	}
	   	else{
	   		return true;
	   	}	
	}
	public function userStatus($credentials)
	{
		$this->db->select('Status');
	   	$this->db->where('Email',$credentials['Email']);
	   	$query = $this->db->get('user');
	   	foreach ($query->result() as $user)
	   	{
	   	        $val=$user->Status; 
	   	}
	   	if ($val==1) {
	   		return false;	
	   	}
	   	else{
	   		return true;
	   	}	
	}				
}
?>