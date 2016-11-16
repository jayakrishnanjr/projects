<?php
/**
*class for home 
*/
class Homemodel extends CI_Model
{
	/**
	*function to get total count
	*@param void
	*@return rowcount
	*/ 
	public function getTotalCount()
	{
		$this->db->from('posts');
		$query = $this->db->get();
		$rowcount = $query->num_rows();
		return $rowcount;
	}

	/**
	*function to get all content
	*@param start and perpage value
	*@return result
	*/ 
	public function getAllContent($start,$perpage)
	{
		$query = $this->db->get('posts', $perpage, $start);
        return $query->result();
	}

	/**
	*function to get user details if normal user
	*@param email
	*@return result
	*/ 
	public function getUserDatas($email)
	{
	    $this->db->select('*');
	    $this->db->where('Email',$email);
	    $query = $this->db->get('user');
	    return $query->result();
	}

	/**
	*function to get user details if facebook user
	*@param email
	*@return result
	*/ 
	public function getFacebookUserDatas($facebookid)
	{
	    $this->db->select('*');
	    $this->db->where('facebookid',$facebookid);
	    $query = $this->db->get('user');
	    return $query->result();
	}

	/**
	*function to get user details if facebook user
	*@param email
	*@return result
	*/ 
	public function getSearchData($search)
	{
	    $searchvalue = $search;
	   	$this->db->where('MATCH (Post) AGAINST ("'. $searchvalue .'")', NULL, FALSE);
	   	$query = $this->db->get('posts');
	   	return $query->result();
	}
}
?>