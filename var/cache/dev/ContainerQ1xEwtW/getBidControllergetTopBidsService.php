<?php

namespace ContainerQ1xEwtW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBidControllergetTopBidsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cKspZaz.App\Controller\BidController::getTopBids()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cKspZaz.App\\Controller\\BidController::getTopBids()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'bidManager' => ['privates', 'App\\Service\\BidManager', 'getBidManagerService', true],
        ], [
            'bidManager' => 'App\\Service\\BidManager',
        ]))->withContext('App\\Controller\\BidController::getTopBids()', $container);
    }
}
