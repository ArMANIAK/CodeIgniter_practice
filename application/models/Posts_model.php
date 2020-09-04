<?php

class Posts_model extends CI_Model 
{

    public function __construct()
    {
                parent::__construct();
                $this->load->database();
    }

    public function getAllPosts()
    {
        $sql = "SELECT *
                FROM posts
                RIGHT JOIN authors 
                ON posts.author = authors.id";
        $result = $this->db->query($sql);
        return $result->result();
    }

}