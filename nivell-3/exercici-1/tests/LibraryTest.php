<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/Library.php';
require_once __DIR__ . '/../src/Book.php';

class LibraryTest extends TestCase
{
    public function testCanCreateEmptyLibrary()
    {
        $library = new Library();
        $this->assertEmpty($library->countBooks());
    }

    public function testCanAddBooks()
    {
        $library = new Library();
        $book = new Book("1984", "George Orwell", "1234567890", Genre::Distopia, 328);

        $library->addBook($book);

        $this->assertSame(1, $library->countBooks());
    }

    public function testCanRemoveBooks()
    {
        $library = new Library();
        $book = new Book("1984", "George Orwell", "1234567890", Genre::Distopia, 328);

        $library->addBook($book);
        $library->removeBook(0);

        $this->assertSame(0, $library->countBooks());
    }

}
