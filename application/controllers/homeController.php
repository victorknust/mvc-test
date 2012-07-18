<?php
/**
 * Example home controller for MVC-test
 * @package MVC-test
 * @author Ryan Marshall <ryan@irealms.co.uk>
 */
namespace application\controllers;

use core;

class HomeController extends core\Controller
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

    public function about($first = null, $last = null)
    {
        if ($first && $last)
        {
            $data = array(
                'first' => $first,
                'last'  => $last
                );
        }
        
    	$this->load->view('home/about.php', $data);
    }
}
