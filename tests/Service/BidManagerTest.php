<?php

namespace App\Tests\Service;

use App\Service\BidManager;
use PHPUnit\Framework\TestCase;

class BidManagerTest extends TestCase
{
    private string $testFile;

    protected function setUp(): void {
        $this->testFile = sys_get_temp_dir() . '/BidApi/bid.json';
        if (file_exists($this->testFile)) {
            unlink($this->testFile);
        }
    }

    public function testAddBidStoresDataCorrectly() {
        $manager = new BidManager();
        $manager->addBid(1, 10, 99.99);

        $data = json_decode(file_get_contents($this->testFile), true);
        $this->assertCount(1, $data);
        $this->assertEquals(99.99, $data[0]['bidValue']);
    }

    public function testGetTopBidsReturnsSortedData() {
        $manager = new BidManager();
        $manager->addBid(2, 1, 50);
        $manager->addBid(2, 2, 75);
        $manager->addBid(2, 1, 100);

        $response = $manager->getTopBids(2);
        $content = json_decode($response->getContent(), true);

        $this->assertEquals(["1" => "100", "2" => "75"], $content[0] + $content[1]);
    }

    public function testIsDoubleBidDetectsFloat() {
        $manager = new BidManager();
        $this->assertTrue($manager->isDoubleBid(4.5));
        $this->assertFalse($manager->isDoubleBid("string"));
    }
}
