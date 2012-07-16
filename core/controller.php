<?php
class Controller
{
    public $load;
    public $model;

    public function __construct()
    {
        $this->load  = new Load();
        $this->model = new Model();
    }

    public function defaultHome()
    {
        $data = $this->model->dummy_data();
        $this->load->view('defaultHome.php', $data);
    }

    public function show404()
    {
        $this->load->view('errors/404.php');
    }
}
