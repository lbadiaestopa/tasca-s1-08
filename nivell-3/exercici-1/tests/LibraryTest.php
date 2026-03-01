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

    public function testCanAddBook()
    {
        $library = new Library();
        $book = new Book("1984", "George Orwell", "1234567890", Genre::Distopia, 328);

        $library->addBook($book);

        $this->assertSame(1, $library->countBooks());
    }

    public function testCanRemoveBook()
    {
        $library = new Library();
        $book = new Book("1984", "George Orwell", "1234567890", Genre::Distopia, 328);

        $library->addBook($book);

        $this->assertTrue($library->removeBook($book));
    }

    public function testCanFindBookByTitle()
    {
        $library = new Library();
        $book1 = new Book("1984", "George Orwell", 1234567890, Genre::Distopia, 328);
        $book2 = new Book("El Petit Príncep", "Antoine de Saint-Exupéry", 2345678901, Genre::Conte, 96);
        $book3 = new Book("Dune", "Frank Herbert", 3456789012, Genre::CF, 412);
        $book4 = new Book("Sherlock Holmes: Estudi en Escarlata", "Arthur Conan Doyle", 4567890123, Genre::NP, 188);
        $book5 = new Book("Harry Potter i la Pedra Filosofal", "J.K. Rowling", 5678901234, Genre::Fantàstic, 223);
        

        $library->addBook($book1);
        $library->addBook($book2);
        $library->addBook($book3);
        $library->addBook($book4);
        $library->addBook($book5);

        $this->assertSame($book2, $library->findBookByTitle("El Petit Príncep"));
    }

    public function testCanFindBookByGenre()
    {
        $library = new Library();
        $book1 = new Book("1984", "George Orwell", 1234567890, Genre::Distopia, 328);
        $book2 = new Book("El Petit Príncep", "Antoine de Saint-Exupéry", 2345678901, Genre::Conte, 96);
        $book3 = new Book("Dune", "Frank Herbert", 3456789012, Genre::CF, 412);
        $book4 = new Book("Sherlock Holmes: Estudi en Escarlata", "Arthur Conan Doyle", 4567890123, Genre::NP, 188);
        $book5 = new Book("Harry Potter i la Pedra Filosofal", "J.K. Rowling", 5678901234, Genre::Fantàstic, 223);
        

        $library->addBook($book1);
        $library->addBook($book2);
        $library->addBook($book3);
        $library->addBook($book4);
        $library->addBook($book5);

        $this->assertSame($book4, $library->findBookByGenre(Genre::NP)[0]);
    }

    public function testCanFindBookByISBN()
    {
        $library = new Library();
        $book1 = new Book("1984", "George Orwell", 1234567890, Genre::Distopia, 328);
        $book2 = new Book("El Petit Príncep", "Antoine de Saint-Exupéry", 2345678901, Genre::Conte, 96);
        $book3 = new Book("Dune", "Frank Herbert", 3456789012, Genre::CF, 412);
        $book4 = new Book("Sherlock Holmes: Estudi en Escarlata", "Arthur Conan Doyle", 4567890123, Genre::NP, 188);
        $book5 = new Book("Harry Potter i la Pedra Filosofal", "J.K. Rowling", 5678901234, Genre::Fantàstic, 223);
        

        $library->addBook($book1);
        $library->addBook($book2);
        $library->addBook($book3);
        $library->addBook($book4);
        $library->addBook($book5);

        $this->assertSame($book3, $library->findBookByISBN(3456789012));
    }

    public function testCanFindBookByAuthor()
    {
        $library = new Library();
        $book1 = new Book("1984", "George Orwell", 1234567890, Genre::Distopia, 328);
        $book2 = new Book("El Petit Príncep", "Antoine de Saint-Exupéry", 2345678901, Genre::Conte, 96);
        $book3 = new Book("Dune", "Frank Herbert", 3456789012, Genre::CF, 412);
        $book4 = new Book("Sherlock Holmes: Estudi en Escarlata", "Arthur Conan Doyle", 4567890123, Genre::NP, 188);
        $book5 = new Book("Harry Potter i la Pedra Filosofal", "J.K. Rowling", 5678901234, Genre::Fantàstic, 223);
        

        $library->addBook($book1);
        $library->addBook($book2);
        $library->addBook($book3);
        $library->addBook($book4);
        $library->addBook($book5);

        $this->assertSame($book1, $library->findBookByAuthor("George Orwell")[0]);
    }

    public function testCanFilterBookByPages()
    {
        $library = new Library();
        $book1 = new Book("1984", "George Orwell", 1234567890, Genre::Distopia, 328);
        $book2 = new Book("El Petit Príncep", "Antoine de Saint-Exupéry", 2345678901, Genre::Conte, 96);
        $book3 = new Book("Dune", "Frank Herbert", 3456789012, Genre::CF, 412);
        $book4 = new Book("Sherlock Holmes: Estudi en Escarlata", "Arthur Conan Doyle", 4567890123, Genre::NP, 188);
        $book5 = new Book("Harry Potter i la Pedra Filosofal", "J.K. Rowling", 5678901234, Genre::Fantàstic, 568);
        

        $library->addBook($book1);
        $library->addBook($book2);
        $library->addBook($book3);
        $library->addBook($book4);
        $library->addBook($book5);

        $this->assertSame($book5, $library->filterBookByPages()[0]);
    }
}
