<?php

namespace App\Controllers;

use App\Core\Controller,
App\Models\Person;

class personController extends Controller {
	public function __construct() {
		$this->Person = new Person();
	}
	public function index(){
		$result=$this->Person->index();
		$this->loadTemplate('admin/person',array('result' => $result));
	}

	

}
