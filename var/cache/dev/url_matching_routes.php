<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/([^/]++)/(?'
                    .'|topBidList(?'
                        .'|(*:68)'
                    .')'
                    .'|login(*:81)'
                    .'|bid(*:91)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        68 => [
            [['_route' => 'get_top_bid_list', '_controller' => 'App\\Controller\\BidController::getTopBids'], ['itemId'], ['GET' => 0], null, false, false, null],
            [['_route' => 'top_bids', '_controller' => 'App\\Controller\\BidController::getTopBids'], ['itemId'], ['GET' => 0], null, false, false, null],
        ],
        81 => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::login'], ['userId'], null, null, false, false, null]],
        91 => [
            [['_route' => 'post_bid', '_controller' => 'App\\Controller\\BidController::postBid'], ['itemId'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
