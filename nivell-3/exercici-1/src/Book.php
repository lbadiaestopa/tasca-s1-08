<?php

enum Genre: string
{
    case Aventures = 'Aventures';
    case CF = 'Ciència-ficció';
    case Conte = 'Conte';
    case NP = 'Novel·la Policial';
    case Paranormal = 'Paranormal';
    case Distopia = 'Distopia';
    case Fantàstic = 'Fantàstic';
}

class Book {
    private string $title;
    private string $author;
    private int $ISBN;
    private Genre $genre;
    private int $pages;

    public function __construct(string $title, string $author, int $ISBN, Genre $genre, int $pages) {
        $this->title = $title;
        $this->author = $author;
        $this->ISBN = $ISBN;
        $this->genre = $genre;
        $this->pages = $pages;
    }

    // Getters
    public function getTitle(): string {
        return $this->title;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    public function getISBN(): int {
        return $this->ISBN;
    }

    public function getGenre(): Genre {
        return $this->genre;
    }

    public function getPages(): int {
        return $this->pages;
    }

    // Setters
    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function setAuthor(string $author): void {
        $this->author = $author;
    }

    public function setISBN(int $ISBN): void {
        $this->ISBN = $ISBN;
    }

    public function setGenre(Genre $genre): void {
        $this->genre = $genre;
    }

    public function setPages(int $pages): void {
        $this->pages = $pages;
    }

}