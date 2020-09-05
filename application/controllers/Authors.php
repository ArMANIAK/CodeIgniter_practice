<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authors extends CI_Controller {

	public function index()
	{
		$this->load->model('posts_model');
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		foreach($this->posts_model->authorsList() as $data['author']) $this->load->view('templates/author', $data);
		$this->load->view('templates/footer');
	}
}
