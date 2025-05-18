<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class BidManager
{
    private array $bids = [];

    private string $filePath;

    public function __construct() {
        $this->filePath = sys_get_temp_dir() . '/BidApi/bid.json';
    }

    public function addBid(int $itemId, int $userId, float $bidValue): void {

        $existingData = file_exists($this->filePath)
            ? json_decode(file_get_contents($this->filePath), true)
            : [];

        $newBid = [
            'itemId' => $itemId,
            'userId' => $userId,
            'bidValue' => $bidValue,
            'timestamp' => (new \DateTime())->format('Y-m-d H:i:s')
        ];

        $existingData[] = $newBid;

        file_put_contents($this->filePath, json_encode($existingData, JSON_PRETTY_PRINT));
    }

    public function getTopBids(int $itemId): JsonResponse {

        if (!file_exists($this->filePath)) {
            return false;
        }

        $data = json_decode(file_get_contents($this->filePath), true);
        $bestBids = [];
    
        foreach ($data as $entry) {
            if (isset($entry['itemId']) && $entry['itemId'] === $itemId) {
                $userId = $entry['userId'];
                $bidValue = $entry['bidValue'];
        
                if (!isset($bestBids[$userId]) || $bidValue > $bestBids[$userId]) {
                    $bestBids[$userId] = $bidValue;
                }
            }
        }

        if (empty($bestBids)) {
            return new JsonResponse([]);
        }

        arsort($bestBids);

        $topBids = array_slice($bestBids, 0, 15, true);

        $formatted = [];
        foreach ($topBids as $userId => $bidValue) {
            $formatted[] = [(string)$userId => (string)$bidValue];
        }

        return new JsonResponse($formatted);
    }
}
