<?php

namespace App\Tests\Infrastructure\Books;

use App\Books\Domain\Book;
use App\Books\Domain\BookId;
use App\Books\Domain\BookRepository;
use App\Tests\Mother\BookMother;
use Ramsey\Uuid\Nonstandard\Uuid;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class BookRepositoryTest extends KernelTestCase
{
    private $repository;

    protected function setUp(): void
    {
        // $this->createMock(BookRepository::class);
        $this->repository = $this->getContainer()->get(BookRepository::class);
    }

    /** @test */
	public function it_should_save_a_book(): void
	{
        $this->markTestSkipped('PHPUnit will skip this test method');

		$book = BookMother::create();

		$this->repository->save($book);
	}

	/** @test */
	public function it_should_return_an_existing_book(): void
	{
        $bookId = new BookId(Uuid::uuid4());

		$book = BookMother::create($bookId);

        $this->repository->save($book);

		$this->assertEquals($book, $this->repository->search($book->getId()));
	}
}