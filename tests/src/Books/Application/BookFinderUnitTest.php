<?php

namespace App\Tests\src\Books\Application;

use App\Books\Domain\BookFinder;
use App\Books\Domain\BookId;
use App\Books\Domain\BookNotFound;
use App\Books\Domain\Title;
use App\Books\Infrastructure\Persistence\DoctrineBookRepository;
use App\Tests\src\Books\Domain\BookMother;
use Ramsey\Uuid\Uuid;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class BookFinderUnitTest extends KernelTestCase
{
    private $bookRep;
    private $BookFinder;

    protected function setUp(): void
    {
        parent::setUp();
        // TODO : Cambiar el DoctrineBookRepository al BookRepository
        $this->bookRep = $this->createMock(DoctrineBookRepository::class);

        $this->BookFinder = new BookFinder(
            $this->bookRep
        );
    }

    public function test_it_find_existing_book()
    {
        $id_uuid = Uuid::uuid4();
        $bookId = new BookId($id_uuid);
        $existingBook = BookMother::create($bookId, new Title("Title"));

        $this->bookRep->expects(self::exactly(1))
            ->method('search')
            ->willReturn($existingBook);

        $book = ($this->BookFinder)($bookId);

        $this->assertNotEmpty($book);
        $this->assertSame($existingBook, $book);
    }

    public function test_it_throws_exception_when_book_not_found()
    {
        $id_uuid = Uuid::uuid4();
        $bookId = new BookId($id_uuid);

        $this->bookRep->expects(self::exactly(1))
            ->method('search')
            ->willReturn(null);

        $this->expectException(BookNotFound::class);

        ($this->BookFinder)($bookId);
    }
}
