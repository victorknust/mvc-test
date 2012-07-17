<?php
/**
 * Example home controller for MVC-test
 * @package MVC-test
 * @author Ryan Marshall <ryan@irealms.co.uk>
 */
class HomeController extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
    {
        $data = $this->model->dummy_data();
        $this->load->view('home/home.php', $data);
    }

    public function about()
    {
    	$this->load->view('home/about.php');
    }
}
