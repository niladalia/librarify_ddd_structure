<?php

namespace App\Tests\src\Authors\Infrastructure\Controllers;

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AuthorPostControllerTest extends WebTestCase
{

    public function test_create_author_success()
    {
        $client = static::createClient();

        $this->sendRequest($client, ["name" => "Nil Adalia Ibarrola"],'00e6ede7-4d25-4706-afaf-dab4e96ace1a');
        
        $this->assertEquals(201, $client->getResponse()->getStatusCode());
    }

    public function test_create_author_invalid_id()
    {
        $client = static::createClient();

        $this->sendRequest($client, ["name" => "Nil Adalia Ibarrola"],'00e6ede7');
        $this->assertResponseStatusCodeSame(400);
    }

    private function sendRequest(KernelBrowser $client, array $request, string $id)
    {
        $client->request(
            'POST',
            sprintf('/api/author/%s', $id),
            [],
            [],
            [
                'CONTENT_TYPE' => 'application/json',   
                'HTTP_X-AUTH-TOKEN' => 'Librarify'
            ],
            json_encode($request)
        );
    }
}
