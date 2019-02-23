<?php

namespace App\Models;

use App\Core\Model;

class Admin extends Model {

	public function login($email,$password){

		$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$result = $this->db->query($sql);
		$data = mysqli_num_rows($result);
		if ($data==1){
			$_SESSION['login']=$result->fetch_assoc();
			header('location:admin/index');
		}
		else{
			echo "gagal";
			header('location:index');
		}

	}
	public function all(){
		$sql = "SELECT * FROM person";

		$result = $this->db->query($sql);

		return $result;
	}

	public function region(){
		$sql = "SELECT * FROM regions";

		$result = $this->db->query($sql);

		return $result;
	}
	public function search($region){
		$sql = "SELECT * FROM person where region_id=$region ";

		$result = $this->db->query($sql);

		return $result;
	
		header('Location: ' .BASE. '/index/admin');
	}


}
