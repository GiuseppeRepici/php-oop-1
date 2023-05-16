<?php

class Movie {
    public $name;
    public $genre;
    

    function __construct($_name, $_genre) {
        $this->name = $_name;
        $this->genre = $_genre;
    }


    public function printFullData() {
        return "{$this->name} ; {$this->genre}";
    }
}