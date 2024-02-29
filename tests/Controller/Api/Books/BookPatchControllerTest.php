<?php

namespace App\Test\Controller\Api;

use App\Books\Domain\Description;
use App\Books\Domain\Title;
use App\Books\Infrastructure\Persistence\DoctrineBookRepository;
use App\Tests\Mother\BookMother;
use Ramsey\Uuid\Uuid;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BookPatchControllerTest extends WebTestCase
{

    public function test_updates_book_success()
    {
        $id_uuid = Uuid::uuid4();
        
        $client = static::createClient();

        $book = BookMother::create($id_uuid, new Title("Title"),null,null,new Description("Description"),null);
        $bookRep = static::getContainer()->get(DoctrineBookRepository::class);
        $bookRep->save($book);
        
        $client->request(
            'PATCH',
            'api/book/' . $id_uuid->serialize(),
            [],
            [],
            ['CONTENT_TYPE' => 'application/json', "HTTP_X-AUTH-TOKEN" => 'Librarify'],
            '{"title":"New Title"}'
        );
        

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        // Assert  the title has changed correclty
        $this->assertEquals("New Title", $book->getTitle()->getValue());
        // Assert that, since it is a patch call and it updates just the attributes we specify and doesn't change other attributes.
        $this->assertEquals("Description", $book->getDescription()->getValue());
    }
}
