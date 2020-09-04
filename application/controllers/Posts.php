<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function index()
	{
		$this->load->model('posts_model');
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		foreach($this->posts_model->getAllPosts() as $data['post']) $this->load->view('templates/post', $data);
		$this->load->view('templates/footer');
	}

	public function getPostsByDate($date = '2020-08-31')
	{
		$this->load->model('posts_model');
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		foreach($this->posts_model->filterByDate($date) as $data['post']) $this->load->view('templates/post', $data);
		$this->load->view('templates/footer');
	}

	public function getAuthorsList()
	{
		$this->load->model('posts_model');
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		foreach($this->posts_model->authorsList() as $data['author']) $this->load->view('templates/author', $data);
		$this->load->view('templates/footer');
	}

	public function getPostsByAuthor($authorId)
	{
		$this->load->model('posts_model');
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		foreach($this->posts_model->filterByAuthor($authorId) as $data['post']) $this->load->view('templates/post', $data);
		$this->load->view('templates/footer');
	}
}
