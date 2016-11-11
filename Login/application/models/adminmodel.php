<?php
/**
* 
*/
class Adminmodel extends CI_Model
{
	/**
	*function to get all users from db
    *@param void
    *@return null
	**/
	public function getAllUserDatas()
	{
		$this->db->select('*');
       	$this->db->from('user');
       	$query = $this->db->get();
       	return $query->result();
       	
	}

	/**
	*function to check if email exist or not in database
    *@param void
    *@return null
	**/
	public function checkifEmailExists($email)
	{
	    $this->db->where('Email',$email);
	    $query = $this->db->get('admin');
	    
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
	   $query = $this->db->get('admin');
	   foreach ($query->result() as $row){
		    $pass=$row->Password;
		}
		if($password==$pass){
			return true;
		}	 
		else{
			return false;
		}	
	}

	/**
	*function to  disable user status
    *@param $datas
    *@return void
	**/
	public function disableUserStatus($datas)
	{
		$credentials=array('Status'=>2);
		$this->db->where('Id',$datas['id']);
		$query=$this->db->update('user',$credentials);
		return $query;	
	}

	/**
	*function to  enaable user status
    *@param $datas
    *@return void
	**/
	public function enableUserStatus($datas)
	{
		$credentials=array('Status'=>1);
		$this->db->where('Id',$datas['id']);
		$query=$this->db->update('user',$credentials);
		return $query;	
	}		
}
?>