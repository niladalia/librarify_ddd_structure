<?php

namespace App\Test\Service\Author;

use App\Authors\Domain\Author;
use App\Authors\Application\Dto\AuthorDto;
use App\Shared\Domain\Exceptions\InvalidArgument;
use App\Authors\Infrastructure\Persistence\DoctrineAuthorRepository;
use App\Authors\Application\Create\AuthorCreator;
use App\Tests\Mother\AuthorIdMother;
use App\Tests\Mother\AuthorNameMother;
use Ramsey\Uuid\Uuid;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Validator\ConstraintViolationList;

class AuthorCreatorUnitTest extends KernelTestCase
{
    private $authorRep;
    private $authorCreator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->authorRep = $this->createMock(DoctrineAuthorRepository::class);

        $this->authorCreator = new AuthorCreator(
            $this->authorRep
        );
    }

    public function test_it_creates_an_author()
    {
        # $this->markTestSkipped('PHPUnit will skip this test method');

        $this->authorRep
        ->expects(self::exactly(1))
        ->method('save')
        ->willReturnCallback(function (Author $authorCallback) {
            return $authorCallback;
        });

        $author = $this->authorCreator->__invoke(AuthorIdMother::create(Uuid::uuid4()),AuthorNameMother::create("J.K. Rowling"));

        $this->assertEquals("J.K. Rowling", $author->getName()->getValue());
        $this->assertInstanceOf(Author::class, $author);
    }

    public function test_it_throws_exception_when_data_is_invalid()
    {
        $this->expectException(InvalidArgument::class);

        $this->authorCreator->__invoke(AuthorNameMother::create("A"));
    }
}