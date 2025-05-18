<?php

namespace App\Tests\Service;

use App\Service\SessionManager;
use PHPUnit\Framework\TestCase;

class SessionManagerTest extends TestCase
{
    public function testCreateSessionReturnsAString() {
        $manager = new SessionManager();
        $sessionKey = $manager->createSession(123);
        $this->assertIsString($sessionKey);
    }

    public function testSessionIsValidAfterCreation() {
        $manager = new SessionManager();
        $userId = 123;
        $sessionKey = $manager->createSession($userId);

        $this->assertTrue($manager->isValid($userId, $sessionKey));
    }

    public function testSessionIsInvalidAfterTimeout() {
        $manager = new SessionManager();
        $userId = 123;
        $sessionKey = $manager->createSession($userId);

        $reflection = new \ReflectionClass($manager);
        $prop = $reflection->getProperty('sessions');
        $prop->setAccessible(true);

        $sessions = $prop->getValue($manager);
        $sessions[$userId]['createdAt'] = time() - 601;
        $prop->setValue($manager, $sessions);

        $this->assertFalse($manager->isValid($userId, $sessionKey));
    }
}
