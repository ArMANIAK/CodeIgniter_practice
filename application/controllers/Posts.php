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

}
