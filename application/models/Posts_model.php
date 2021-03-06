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
        $this->db->from('posts')
                ->join('authors', 'posts.author = authors.authorId', 'right')
                ->order_by('date', 'DESC');
        $result = $this->db->get();
        return $result->result();
    }

    public function getPost($id)
    {
        $this->db->from('posts')
                ->join('authors', 'posts.author = authors.authorId', 'right')
                ->where('posts.id', $id);
        $result = $this->db->get();
        return $result->result();
    }

    public function incrementViews($postId) 
	{
        $this->db->from('posts')
                ->where('id', $postId);
        $result = $this->db->get();
        $posts = $result->result();
        $this->db->where('id', $postId);
        $this->db->update('posts', array('newsViews' => $posts[0]->newsViews + 1));
	}

    public function filterByDate($date) 
    {
        $this->db->from('posts')
                ->join('authors', 'posts.author = authors.authorId', 'right')
                ->where('posts.date', $date);
        $result = $this->db->get();
        return $result->result();
    }

    public function filterByAuthor($authorId)
    {
        $this->db->from('posts')
                ->join('authors', 'posts.author = authors.authorId', 'right')
                ->where('posts.author', $authorId)
                ->order_by('date', 'DESC');
        $result = $this->db->get();
        return $result->result();
    }

    public function filterByTag($tagId)
    {
        $this->db->from('posts')
                ->join('authors', 'posts.author = authors.authorId', 'right')
                ->join('posts_tags', 'posts.id = posts_tags.post_id', 'right')
                ->where('posts_tags.tag_id', $tagId);
        $result = $this->db->get();
        return $result->result();
    }

    public function getTagsForPost($postId)
    {
        $this->db->from('posts_tags')
                ->join('tags', 'tags.id = posts_tags.tag_id', 'right')
                ->where('posts_tags.post_id', $postId);
        $result = $this->db->get();
        return $result->result();
    }

    public function readMore($postId)
    {
        $this->db->from('posts')
                ->join('authors', 'posts.author = authors.authorId', 'right')
                ->where('posts.id !=', $postId)
                ->order_by('newsViews', 'DESC')
                ->limit(2);
        $result = $this->db->get();
        return $result->result();
    }
}