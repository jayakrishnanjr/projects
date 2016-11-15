<?php
/**
*model for facebook data processing 
*/
class Facebookmodel extends CI_Model
{
	/**
	*function to check if user exist or not
    *@param facebookid
    *@return status
	**/ 
	public function userExists($facebookid)
	{
	    $this->db->where('facebookid',$facebookid);
	    $query = $this->db->get('user');
	    if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
	}
	
	/**
	*function to insert values into database
    *@param datas(facebook)
    *@return result
	**/ 
	public function insertData($datas)
	{
	    $result=$this->db->insert('user',$datas);
	    return $result;
	}

}

?>