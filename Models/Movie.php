<?php

class Movie{
    public $title;
    public $actor;

    public function __construct($text){
        $this->title = $text;
        $this->actor = $text;
    }

    public function getTitle(){
        echo 'You\'re watching ' . $this->title;
    }

    public function getActor(){
        echo 'The main character in this movie is interpreted by ' . $this->actor;
    }
}