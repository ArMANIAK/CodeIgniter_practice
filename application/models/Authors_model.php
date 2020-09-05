<?php

class Authors_model extends CI_Model 
{

    public function __construct()
    {
                parent::__construct();
                $this->load->database();
    }

    public function authorsList()
    {
        $sql = "SELECT *
                FROM authors";
        $result = $this->db->query($sql);
        return $result->result();
    }
}