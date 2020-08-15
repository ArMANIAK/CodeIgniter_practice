<?php

class Posts_model extends CI_Model 
{

    public function __construct()
    {
                parent::__construct();
                $this->load->database();
    }

    public function test()
    {
        return 'Testing db connection from model';
    }
}