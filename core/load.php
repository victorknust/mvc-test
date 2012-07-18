<?php
namespace core;

class Load 
{
    public function __construct()
    {

    }

    public function view($file = null, $data = null)
    {
        if (is_array($data))
        {
            // Take array and allow direct access to variables
            extract($data);
        }
        include '/views/'.$file;
    }
}
