<?php

require_once 'Book.php';

class Library
{
    private array $books;

    public function __construct()
    {
        $this->books = [];
    }

    public function countBooks(): int
    {
        $totalBooks = 0;
        foreach ($this->books as $book) {
            $totalBooks++;
        }
        return $totalBooks;
    }

    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function removeBook(int $index)
    {
        unset($this->books[$index]);
        $this->books = array_values($this->books);
    }

    public function findBookByTitle(string $title)
    {
        foreach ($this->books as $book) {
            if ($book->getTitle() === $title) 
            {
                return $book;
            }
        }
        return null;
    }

    public function findBookByISBN(int $ISBN)
    {
        foreach ($this->books as $book) {
            if ($book->getISBN() === $ISBN) 
            {
                return $book;
            }
        }
        return null;
    }
}
