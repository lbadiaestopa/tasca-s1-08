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
        return count($this->books);
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

    public function findBookByGenre(Genre $genre)
    {
        $booksByGenre = [];
        foreach ($this->books as $book) {
            if ($book->getGenre() === $genre) 
            {
                $booksByGenre[] = $book;   
            }     
        }
        return $booksByGenre;
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

     public function findBookByAuthor(string $author)
    {
        $booksByAuthor = [];
        foreach ($this->books as $book) {
            if ($book->getAuthor() === $author) 
            {
                $booksByAuthor[] = $book;   
            }     
        }
        return $booksByAuthor;
    }
}
