<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post {

    public $id;
    public $title;
    public $body;
    public $preview;
    public $image;
    public $author;
    public $date;
    public $tags;

    public function __construct($id, $title, $body, $preview, $image, $author, $date, $tags)
    {
        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->preview = $preview;
        $this->image = $image;
        $this->author = $author;
        $this->date = $date;
        $this->tags = $tags;
    }
}