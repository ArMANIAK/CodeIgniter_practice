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
        $this->db->from('authors');
        $result = $this->db->get();
        return $result->result();
    }

    public function getAuthorInfo($authorId)
    {
        $this->db->from('authors')
                ->where('authorId', $authorId);
        $result = $this->db->get();
        return $result->result();
    }
}