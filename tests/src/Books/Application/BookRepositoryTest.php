<?php

namespace App\Tests\src\Books\Application;

use App\Books\Domain\BookId;
use App\Books\Domain\BookRepository;
use App\Tests\src\Books\Domain\BookMother;
use App\Tests\src\Shared\Infrastructure\PhpUnit\UnitTestCase;
use Ramsey\Uuid\Nonstandard\Uuid;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class BookRepositoryTest extends UnitTestCase
{
    private $repository;

    protected function setUp(): void
    {
        // $this->createMock(BookRepository::class);
        $this->repository = $this->getContainer()->get(BookRepository::class);
    }

	/** @test */
	public function it_should_save_and_return_an_existing_book(): void
	{
        $bookId = new BookId(Uuid::uuid4());

		$book = BookMother::create($bookId);

        $this->repository->save($book);

		$this->assertEquals($book, $this->repository->search($book->getId()));
	}
}