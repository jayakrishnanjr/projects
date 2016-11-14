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
}
?>