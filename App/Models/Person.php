<?php

namespace App\Models;

use App\Core\Model;

class Person extends Model {

	public function index(){
		$sql = "SELECT * FROM person left join regions on person.region_id=regions.id";

		$result = $this->db->query($sql);

		return $result;
	}
	public function add($region,$name,$address,$income){
	
		$id=$_SESSION['login']['id'];
		$sql ="INSERT INTO person (name,created_by,region_id,address,income) VALUES ('$name','$id','$region','$address','$income')";
		$result = $this->db->query($sql);
		var_dump($region,$name,$address,$income);	
		// header('Location: ' .BASE. '/person');
	}
	public function region(){
		$sql = "SELECT * FROM regions";

		$result = $this->db->query($sql);

		return $result;
	}
	public function delete($id){
		$sql = "DELETE FROM person where id=$id"; 
		$result = $this->db->query($sql);
		header('Location: ' .BASE. '/person');
	}

}
