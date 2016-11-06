<?php
/**
* class for login 
*/
class Logindbmodel extends CI_Model
{

	/**
	*function to check if email exist or not in database
    *@param void
    *@return null
	**/
	public function checkifEmailExists($username)
	{
	    $this->db->where('username',$username);
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
    *@param void
    *@return null
	**/
	public function checkPassword($username,$password)
	{
	   $this->db->select('password');
	   $this->db->where('username',$username);
	   $query = $this->db->get('user');
	   foreach ($query->result() as $row)
		{
		    $pass=$row->password;
		}
		if($password===$pass)
		{
			return true;
		}	 
		else
		{
			return false;
		}	
	}			
}


?>