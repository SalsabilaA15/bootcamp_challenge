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
		$result2=$this->Person->region();
		$this->loadTemplate('admin/person',array('result' => $result,'result2' => $result2));
	}
	public function add(){
		$region=$_POST['region'];
		$name=$_POST['name'];
		$address=$_POST['address'];
		$income=$_POST['income'];
		$result=$this->Person->add($region,$name,$address,$income);
	}
	public function delete($id){
		$result=$this->Person->delete($id);
	}

	

}
