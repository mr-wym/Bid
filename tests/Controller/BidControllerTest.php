<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BidControllerTest extends WebTestCase
{
    public function testPostBidWithValidSession() {
        $client = static::createClient();

        $client->request('GET', '/123/login');
        $sessionKey = $client->getResponse()->getContent();

        $client->request(
            'POST',
            "/2/bid?sessionKey=$sessionKey",
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            '45.5'
        );

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testTopBidListReturnsCorrectJson() {
        $client = static::createClient();

        $client->request('GET', '/321/login');
        $sessionKey = $client->getResponse()->getContent();

        $client->request(
            'POST',
            "/5/bid?sessionKey=$sessionKey",
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            '88.88'
        );

        $client->request('GET', '/5/topBidList');
        $response = $client->getResponse();

        $this->assertResponseIsSuccessful();
        $content = json_decode($response->getContent(), true);

        $this->assertNotEmpty($content);
        $this->assertArrayHasKey('321', $content[0]);
    }
}
