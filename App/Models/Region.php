<?php

namespace App\Models;

use App\Core\Model;

class Region extends Model {
	public function index(){
		$sql = "SELECT * FROM regions";

		$result = $this->db->query($sql);
		
		return $result;
	}
	public function delete($id){

		$sql = "DELETE FROM person where region_id=$id"; 
		$sql = "DELETE FROM regions where id=$id"; 
		$result = $this->db->query($sql);
		header('Location: ' .BASE. '/region');
	}
	public function add($region){
	
		$id=$_SESSION['login']['id'];
		$sql ="INSERT INTO regions (name,created_by) VALUES ('$region','$id')";
		$result = $this->db->query($sql);
		header('Location: ' .BASE. '/region');
	}

}
