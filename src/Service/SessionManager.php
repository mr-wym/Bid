<?php

// src/Service/SessionManager.php
namespace App\Service;

use Symfony\Component\HttpFoundation\Request;


class SessionManager
{
    private string $filePath;
    private array $sessions = [];

    public function __construct() {
        $this->filePath = sys_get_temp_dir() . '/BidApi/sessionKey.json';
    }

    public function createSession(int $userId): string {

        $sessionKey = bin2hex(random_bytes(5));
        // a terme on peut imaginer une sessionKey qui est créer par rapport au hash de userId et de l'heure actuelle comme par exemple :
        // "$sessionKey = hash('sha256', $userId . time());"
        $this->sessions[$sessionKey] = [
            'userId' => $userId,
        ];
        return $sessionKey;
    }

    public function userIsValidSession(int $userId): bool {

        if (file_exists($this->filePath)) {
            $data = json_decode(file_get_contents($this->filePath), true);

            foreach ($data as $entry) {
                if (isset($entry['userId']) && $entry['userId'] === $userId) {
                    $expiresAt = \DateTime::createFromFormat('Y-m-d H:i:s', $entry['expiresAt']);
                    error_log("expiresAt: " . $expiresAt->format('Y-m-d H:i:s'));
                    if ($expiresAt !== false && $expiresAt >= new \DateTime()) {
                        return true;
                    } else {
                        return false;
                    }
                }
            }
        }

        return false;
    }

    public function isValid(string $sessionKey): bool {

        if (file_exists($this->filePath)) {
            $existingData = json_decode(file_get_contents($this->filePath), true) ?? [];

            foreach ($existingData as $entry) {
                error_log("ici");

                if (isset($entry['sessionKey']) && $entry['sessionKey'] === $sessionKey) {
                    error_log("là");

                    if (isset($entry['expiresAt'])) {
                        $expiresAt = \DateTime::createFromFormat('Y-m-d H:i:s', $entry['expiresAt']);
                        if ($expiresAt === false || $expiresAt < new \DateTime()) {
                            error_log("sessionKey expired");
                            return false;
                        }
                        return true;
                    } else {
                        error_log("expiresAt not found for sessionKey");
                        return false;
                    }
                }
            }
        }

        return false;
    }

    public function getUserIdFromSession(string $sessionKey): ?int {

        if (!file_exists($this->filePath)) {
            return null;
        }
    
        $data = json_decode(file_get_contents($this->filePath), true);
    
        foreach ($data as $entry) {
            if (isset($entry['sessionKey']) && $entry['sessionKey'] === $sessionKey) {
                return $entry['userId'] ?? null;
            }
        }
    
        return null;
    }
}
