<?php

namespace App\Controllers;

use App\Core\Controller,
App\Models\Region;

class regionController extends Controller {
	public function __construct() {
		$this->Region = new Region();
	}

	public function index(){
		$result=$this->Region->index();
		$this->loadTemplate('admin/region',array('result' => $result));
	}
	public function delete($id){
		$result=$this->Region->delete($id);
		
	}

}
