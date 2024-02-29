<?php

namespace App\Test\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BookGetControllerTest extends WebTestCase
{
    public function test_assert_find_books()
    {
        // Potser tindriem que crear un llibre per a que el test fos complert
        
        $client = static::createClient();

        $client->request(
            'GET',
            'api/books',
            [],
            [], 
            [
                'HTTP_X-AUTH-TOKEN' => 'Librarify',
                'CONTENT_TYPE' => 'application/json',
                'ACCEPT' => 'application/json'
            ]
        );

        $this->assertResponseStatusCodeSame(200);
    }
}
