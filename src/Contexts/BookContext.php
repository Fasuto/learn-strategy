<?php

namespace Fasuto\Learn\Contexts;

include_once __DIR__.'/../Strategies/BookCaps.php';
include_once __DIR__.'/../Strategies/BookExclaim.php';
include_once __DIR__.'/../Strategies/BookStars.php';

use Fasuto\Learn\Strategies\BookCaps;
use Fasuto\Learn\Strategies\BookExclaim;
use Fasuto\Learn\Strategies\BookStars;

class BookContext
{
    private $strategy = null;

    public function __construct($strategy)
    {
        switch ($strategy){
            case "C":
                $this->strategy = new BookCaps();
                break;
            case "E":
                $this->strategy = new BookExclaim();
                break;
            case "S":
                $this->strategy = new BookStars();
                break;
        }
    }

    public function showBookTitle($book)
    {
        return $this->strategy->showTitle($book);
    }
}