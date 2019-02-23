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

}
