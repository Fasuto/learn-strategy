<?php

namespace Fasuto\Learn\Models;

class Book
{
    private $author;
    private $title;
    function __construct($title, $author) {
        $this->author = $author;
        $this->title  = $title;
    }
    function getAuthor() {
        return $this->author;
    }
    function getTitle() {
        return $this->title;
    }
    function getAuthorAndTitle() {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}