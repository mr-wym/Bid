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

    public function __construct(SessionManager $sessionManager) {
        $this->sessionManager = $sessionManager;

        // j'ai fait le choix de d'utiliser un fichier temporaire pour stocker les clef de session ainsi que les bid 
        // mais pour un projet complet a déployer j'utiliserais une base de données
        $directory = sys_get_temp_dir() . '/BidApi';
        
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }
    }

    #[Route('/{userId}/login', name: 'login', methods: ['GET'])]
    public function login(int $userId): JsonResponse {
        $userExists = $this->sessionManager->userIsValidSession($userId);

        if ($userExists) {
            return new JsonResponse(['success' => false, 'message' => 'User already exists'], JsonResponse::HTTP_CONFLICT);
        } else {
            $sessionKey = $this->sessionManager->createSession($userId);

            $data = [
                'sessionKey' => $sessionKey,
                'userId' => $userId,
                'expiresAt' => (new \DateTime('+10 minutes'))->format('Y-m-d H:i:s') 
            ];
    
            $filePath = sys_get_temp_dir() . '/BidApi/sessionKey' . '.json';
    
            if (!file_exists($filePath)) {
                file_put_contents($filePath, json_encode([$data], JSON_PRETTY_PRINT));
            } else {
                $existingData = json_decode(file_get_contents($filePath), true) ?? [];
                $existingData[] = $data;
                file_put_contents($filePath, json_encode($existingData, JSON_PRETTY_PRINT));
            }
    
            $response = new JsonResponse([
                'userId' => $userId,
                'sessionKey' => $sessionKey
            ]);
        }

        return $response;
    }
}
