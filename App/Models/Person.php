<?php

namespace App\Models;

use App\Core\Model;

class Person extends Model {

	public function index(){
		$sql = "SELECT * FROM person left join regions on person.region_id=regions.id";

		$result = $this->db->query($sql);
		
		return $result;
	}

}
