<?php

namespace App\Models;

use App\Core\Model;

class Region extends Model {
	public function index(){
		$sql = "SELECT * FROM regions";

		$result = $this->db->query($sql);
		
		return $result;
	}

}
