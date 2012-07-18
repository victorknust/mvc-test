<?php
namespace application\controllers;

use core;

class TestController extends core\Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index() {
		$this->load->view('home/about.php');
	}
}
