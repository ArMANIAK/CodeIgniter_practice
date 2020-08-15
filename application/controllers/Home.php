<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['server_answer'] = 'smth';
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('feed', $data);
		$this->load->view('templates/footer');
	}

	public function getNewsByDate()
	{
		$this->load->model('posts_model');
		$data['server_answer'] = $this->posts_model->test();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('feed', $data);
		$this->load->view('templates/footer');
	}
}
