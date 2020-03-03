<?php

include_once __DIR__.'/Models/Book.php';
include_once __DIR__.'/Contexts/BookContext.php';

use Fasuto\Learn\Models\Book;
use Fasuto\Learn\Contexts\BookContext;

$book = new Book('Learn Strategy Pattern','SourceMaking');

$bookContextCaps = new BookContext('C');
$bookContextExclaim = new BookContext('E');
$bookContextStars = new BookContext('S');

echo $bookContextCaps->showBookTitle($book);
echo "\n\t\r";
echo $bookContextExclaim->showBookTitle($book);
echo "\n\t\r";
echo $bookContextStars->showBookTitle($book);
echo "\n\t\r";