<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Service\SessionManager;
use App\Service\BidManager;

class BidController extends AbstractController
{

    #[Route('/{itemId}/bid', name: 'post_bid', methods: ['POST'])]
    public function postBid(int $itemId, Request $request, SessionManager $sessionManager, BidManager $bidManager): Response {
        
        $sessionKey = $request->query->get('sessionKey');

        if (!$sessionKey) {
            return new Response('Aucune sessionKey fournie.', 400);
        }

        $isValidSessionKey = $sessionManager->isValid($sessionKey);

        if ($isValidSessionKey) {
            $bidValue = $request->getContent();
            $userId = $sessionManager->getUserIdFromSession($sessionKey);
            $bidManager->addBid($itemId, $userId, $bidValue);
            $isDoubleBid = $bidManager->isDoubleBid($bidValue);

            if (!is_numeric($bidValue) || ((float)$bidValue == (int)$bidValue)) {
                return new Response('L’enchère doit être un float valide.', 400);
            }

            return new Response(null, 200);
        } else {
            return new Response('Session invalide', 401);
        }
    }

    #[Route('/{itemId}/topBidList', name: 'get_top_bid_list', methods: ['GET'])]
    public function getTopBids(int $itemId, BidManager $bidManager): JsonResponse {

        $topBids = $bidManager->getTopBids($itemId);
        
        return $topBids;
    }
}