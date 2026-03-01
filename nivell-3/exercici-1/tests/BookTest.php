<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/Book.php';

class BookTest extends TestCase
{
    public function testCanCreateBook()
    {
        $book = new Book(
            "1984",
            "George Orwell",
            "1234567890",
            Genre::Distopia,
            328
        );
        $this->assertSame("1984", $book->getTitle());
        $this->assertEquals("George Orwell", $book->getAuthor());
        $this->assertEquals("1234567890", $book->getISBN());
        $this->assertEquals(Genre::Distopia, $book->getGenre());
        $this->assertEquals(328, $book->getPages());
    }

    public function testCanModifyBook()
    {
        $book = new Book(
            "1984",
            "George Orwell",
            "1234567890",
            Genre::Distopia,
            328
        );
        
        $book->setTitle("Animal Farm");
        $book->setAuthor("G. Orwell");
        $book->setISBN(654321);
        $book->setGenre(Genre::Conte);
        $book->setPages(112);


        $this->assertSame("Animal Farm", $book->getTitle());
        $this->assertEquals("G. Orwell", $book->getAuthor());
        $this->assertEquals("654321", $book->getISBN());
        $this->assertEquals(Genre::Conte, $book->getGenre());
        $this->assertEquals(112, $book->getPages());
    }
}
