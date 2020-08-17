<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author {

    public $id;
    public $name;
    public $avatar;
    public $socialNetworks;

    public function __construct($id, $name, $avatar, $socialNetworks)
    {
        $this->id = $id;
        $this->name = $name;
        $this->avatar = $avatar;
        $this->socialNetworks = $socialNetworks;
    }
}