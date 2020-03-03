<?php

namespace Fasuto\Learn\Strategies;

include_once __DIR__.'/../Interfaces/BookInterface.php';

use Fasuto\Learn\interfaces\BookInterface;

class BookStars implements BookInterface{
    public function showTitle($book)
    {
        // TODO: Implement showTitle() method.
        $title = $book->getTitle();
        return strtoupper ('Title starts '.$title);
    }
}
