<?php

require_once 'app/view/login.view.php';
require_once 'app/model/users.model.php';

class login_controller {
	
	private $model;
	private $view;
	
	function __construct(){
		
		$this->model = new users_model();
		$this->view = new login_view();
		
	}
	
	function login_form(){
		
		$this->view->login_form();
		
	}

	function show_404() {

		$this->view->show_404();

	}

	function show_admin() {

		$this->view->show_admin();
		
	}

	function show_user() {

		$this->view->show_user();
		
	}

	function show_login_error() {

		$this->view->show_login_error();
		
	}
	
	function login() {
		
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		
		$db_pass = $this->model->get($name);
		
		if (password_verify($pass,$db_pass)){
			$this->view->admin();
		} else {
			$this->view->error();
		}
		
	}	
	
}