<?php 
class Course extends CI_Model
{
	public function get_all_courses()
	{
		$query = "SELECT * FROM courses";
		return $this->db->query($query)->result_array();
	}
	public function confirm($id)
	{
		$query = "SELECT * FROM courses WHERE id = ?";
		return $this->db->query($query, $id)->row_array();
	}
	public function destroy($id)
	{
		$query = "DELETE FROM courses WHERE id= ?";
		$this->db->query($query, $id);
	}
}
 ?>