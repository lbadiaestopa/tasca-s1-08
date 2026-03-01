<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/Library.php';

class LibraryTest extends TestCase
{
    public function testCanCreateEmptyLibrary()
    {
        $library = new Library();
        $this->assertEmpty($library->getAllBooks());
    }
}