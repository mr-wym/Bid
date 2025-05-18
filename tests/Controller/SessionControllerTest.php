<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SessionControllerTest extends WebTestCase
{
    public function testLoginReturnsSessionKey() {
        $client = static::createClient();
        $client->request('GET', '/123/login');

        $this->assertResponseIsSuccessful();
        $content = $client->getResponse()->getContent();

        $this->assertMatchesRegularExpression('/^[a-zA-Z0-9]+$/', $content);
    }
}
