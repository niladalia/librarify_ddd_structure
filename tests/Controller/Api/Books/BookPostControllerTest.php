<?php

namespace App\Test\Controller\Api;

use App\Authors\Domain\AuthorNotFound;
use App\Authors\Infrastructure\Persistence\DoctrineAuthorRepository;
use App\Tests\Mother\AuthorMother;
use Ramsey\Uuid\Uuid;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BookPostControllerTest extends WebTestCase
{

    public function testCreateComplexBookSuccess()
    {
        $client = static::createClient();

        // Persistim un autor en BD perque pugui adjuntar el book a un author existent
        $author = AuthorMother::create(Uuid::fromString("59aa8278-bd4a-4895-a9e1-5684c89a3627"));
        $authorRep = static::getContainer()->get(DoctrineAuthorRepository::class);
        $authorRep->save($author);

        $this->sendRequest1($client, ["title" => "LIBRO","score" => 3, "description" => "Description", "author_id" => "59aa8278-bd4a-4895-a9e1-5684c89a3627"]);
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }


    public function testCreateSimpleBookSuccess()
    {
        $client = static::createClient();
        $this->sendRequest1($client, ['title' => 'A title']);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testCreateBookWithoutContent()
    {
        $client = static::createClient();

        $client->request('POST', 'api/book', [], [], ["HTTP_X-AUTH-TOKEN" => 'Librarify']);
        $this->assertResponseStatusCodeSame(400);
    }

    public function testCreateBookInvalidData()
    {
        $client = static::createClient();

        $this->sendRequest1($client, ['title' => '']);
        $this->assertResponseStatusCodeSame(400);
    }

    public function testExpectAuthorNotFound()
    {
        $client = static::createClient();

        $this->sendRequest1($client, ['title' => 'LIBRO',"author_id" => "59aa8278-bd4a-4895-a9e1-5684c89a3628"]);

        $this->assertEquals(400, $client->getResponse()->getStatusCode());
        #$this->expectException(AuthorNotFound::class);
    }

    private function sendRequest1(KernelBrowser $client, array $data)
    {
        $client->request(
            'POST',
            '/api/book',
            $data,
            [],
            [
                'CONTENT_TYPE' => 'application/json',
                'HTTP_X-AUTH-TOKEN' => 'Librarify'
            ],
            ''
        );
    }
}
