<?php
namespace Application\Controllers;

class HomeController extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function home()
    {
        $data = $this->model->dummy_data();
        $this->load->view('/home/home.php', $data);
    }
}
