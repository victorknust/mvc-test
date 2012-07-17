<?php
class TestController extends Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index() {
		$this->load->view('home/about.php');
	}
}
