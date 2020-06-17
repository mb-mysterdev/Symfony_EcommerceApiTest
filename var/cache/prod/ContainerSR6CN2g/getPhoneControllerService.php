<?php

namespace ContainerSR6CN2g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPhoneControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\PhoneController' shared autowired service.
     *
     * @return \App\Controller\PhoneController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\PhoneController'] = $instance = new \App\Controller\PhoneController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\PhoneController', $container));

        return $instance;
    }
}