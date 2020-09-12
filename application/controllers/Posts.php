<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function index()
	{
		$this->load->model('posts_model');
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		foreach($this->posts_model->getAllPosts() as $data['post']) 
		{
			$data['tags'] = $this->posts_model->getTagsForPost($data['post']->id);
			$this->load->view('templates/post', $data);
		}
		$this->load->view('templates/footer');
	}

	public function getPostsByDate($date = '2020-08-31')
	{
		$this->load->model('posts_model');
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		foreach($this->posts_model->filterByDate($date) as $data['post']) 
		{
			$data['tags'] = $this->posts_model->getTagsForPost($data['post']->id);
			$this->load->view('templates/post', $data);
		}
		$this->load->view('templates/footer');
	}

	public function getPostsByAuthor($authorId)
	{
		$this->load->model('posts_model');
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		foreach($this->posts_model->filterByAuthor($authorId) as $data['post']) 
		{
			$data['tags'] = $this->posts_model->getTagsForPost($data['post']->id);
			$this->load->view('templates/post', $data);
		}
		$this->load->view('templates/footer');
	}

	public function getPostsByTag($tagId)
	{
		$this->load->model('posts_model');
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		foreach($this->posts_model->filterByTag($tagId) as $data['post']) 
		{
			$data['tags'] = $this->posts_model->getTagsForPost($data['post']->id);
			$this->load->view('templates/post', $data);
		}
		$this->load->view('templates/footer');
	}
}
