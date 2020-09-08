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

    public function filterByDate($date) {
        $sql = "SELECT *
                FROM posts
                RIGHT JOIN authors 
                ON posts.author = authors.id
                WHERE posts.date='$date'";
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function filterByAuthor($authorId)
    {
        $sql = "SELECT *
                FROM posts
                RIGHT JOIN authors 
                ON posts.author = authors.id
                WHERE posts.author='$authorId'";
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function getTagsForPost($postId)
    {
        $sql = "SELECT *
                FROM posts_tags
                RIGHT JOIN tags 
                ON tags.id = posts_tags.tag_id
                WHERE posts_tags.post_id='$postId'";
        $result = $this->db->query($sql);
        return $result->result();
    }
}