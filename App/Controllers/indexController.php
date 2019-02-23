<?php

namespace App\Controllers;

use App\Core\Controller,
App\Models\Admin;

class indexController extends Controller {
	public function __construct() {
		$this->Admin = new Admin();
	}

	public function index(){

		$this->loadTemplate('login');
	}
	public function admin(){
		if (empty($_SESSION['login'])) {
			header('location:../');
		}
		else{
			$result=$this->Admin->all();
			$result2=$this->Admin->region();
			$this->loadTemplate('admin/index',array('result' => $result,'result2' => $result2));
		}
	}
	public function logout(){
		session_destroy();
		header('location:index');
	}

	public function login(){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$result=$this->Admin->login($email,$password);
	}
	public function search(){
		$region=$_POST['region'];
			$result2=$this->Admin->region();
		$result=$this->Admin->search($region);
		$this->loadTemplate('admin/index',array('result' => $result,'result2' => $result2));
	}


}
