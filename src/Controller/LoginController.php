<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Service\SessionManager;
use Symfony\Component\HttpFoundation\Cookie;

class LoginController extends AbstractController
{
    private SessionManager $sessionManager;

    public function __construct(SessionManager $sessionManager)
    {
        $this->sessionManager = $sessionManager;
    }

    #[Route('/{userId}/login', name: 'login', methods: ['GET'])]
    public function login(int $userId): JsonResponse
    {
        $sessionKey = $this->sessionManager->createSession($userId);

        $cookie = new Cookie('sessionKey', json_encode(['key' => $sessionKey, 'userId' => $userId]), time() + 600, '/', null, false, true);

        $response = new JsonResponse([
            'userId' => $userId,
            'sessionKey' => $sessionKey
        ]);
    
        $response->headers->setCookie($cookie);
    
        return $response;
    }
}
