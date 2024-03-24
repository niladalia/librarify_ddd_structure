<?php

namespace App\Tests\src\Authors\Application;

use App\Authors\Application\Create\AuthorCreator;
use App\Authors\Application\Create\CreateAuthorCommandHandler;
use App\Authors\Domain\Author;
use App\Authors\Infrastructure\Persistence\DoctrineAuthorRepository;
use App\Shared\Domain\Exceptions\InvalidArgument;
use App\Tests\src\Authors\Domain\AuthorIdMother;
use App\Tests\src\Authors\Domain\AuthorMother;
use App\Tests\src\Authors\Domain\AuthorNameMother;
use Ramsey\Uuid\Uuid;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CreateAuthorCommandHandlerTest extends KernelTestCase
{
    private $handler;
    private $authorCreator;
    private $repository;
    private $command;

    protected function setUp(): void
    {
        parent::setUp();

        $this->repository = $this->createMock(DoctrineAuthorRepository::class);

        $this->authorCreator = $this->createMock(AuthorCreator::class);

        $this->handler = new CreateAuthorCommandHandler(
            new AuthorCreator($this->repository)
        );
    }

    public function test_it_creates_an_author()
    {

        $command = CreateAuthorCommandMother::create(Uuid::uuid4(),"J.K. Rowling");

        $author = AuthorMother::fromRequest($command);

		$this->repository
            ->expects(self::exactly(1))
			->method('save')
            ->with($this->callback(function (Author $a) use ($author) {
                return $this->areSimilar($a->toArray(), $author->toArray());
            }));

        $this->handler->__invoke($command);
    }

    public function test_it_throws_exception_when_data_is_invalid()
    {
        $this->expectException(InvalidArgument::class);

        $this->authorCreator->__invoke(AuthorIdMother::create(Uuid::uuid4()),AuthorNameMother::create("A"));
    }

    protected function areSimilar(array $a, array $b): bool
    {
        return $a['name'] === $b['name']
            && $a['id'] === $b['id'];
    }

}
