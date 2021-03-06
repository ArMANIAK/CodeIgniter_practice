<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authors extends CI_Controller {

	public function index()
	{
		$data['links'] = generateLinksForCalendar();
		$this->load->model('authors_model');
		$this->load->view('templates/header');
		$this->load->view('templates/navbar', $data);
		foreach($this->authors_model->authorsList() as $data['author']) 
		{
			$this->load->view('templates/author', $data);
		}
		$this->load->view('templates/footer');
	}

	public function showAuthorPage($authorId)
	{
		$data['links'] = generateLinksForCalendar();
		$this->load->model('posts_model');
		$this->load->model('authors_model');
		$data['author'] = $this->authors_model->getAuthorInfo($authorId)[0];
		$this->load->view('templates/header');
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/author', $data);
		foreach($this->posts_model->filterByAuthor($authorId) as $data['post']) 
		{
			$data['tags'] = $this->posts_model->getTagsForPost($data['post']->id);
			$this->load->view('templates/post', $data);
		}
		$this->load->view('templates/footer');
	}

	public function viewsIncrement($authorId) 
	{
		$this->load->model('authors_model');
		$this->authors_model->incrementViews($authorId);
	}

}
