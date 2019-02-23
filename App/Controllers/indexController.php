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
			$this->loadTemplate('admin/index');
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

}
