<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* class for inserting sign up data
*/
class Signupmodel extends CI_Model
{
	/**
	*function to insert values into database
    *@param void
    *@return null
	**/ 
	public function insertData($datas)
	{
	    $result=$this->db->insert('user',$datas);
	    return $result;
	}

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
}
?>