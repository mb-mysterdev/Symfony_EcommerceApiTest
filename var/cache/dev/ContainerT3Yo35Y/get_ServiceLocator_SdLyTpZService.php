<?php

namespace ContainerT3Yo35Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SdLyTpZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SdLyTpZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SdLyTpZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'phoneRepository' => ['privates', '.errored.Gr5k1q_', NULL, 'Cannot determine controller argument for "App\\Controller\\PhoneController::index()": the $phoneRepository argument is type-hinted with the non-existent class or interface: "App\\Controller\\PhoneRepository". Did you forget to add a use statement?'],
            'serializer' => ['privates', '.errored.Rv2nkiU', NULL, 'Cannot determine controller argument for "App\\Controller\\PhoneController::index()": the $serializer argument is type-hinted with the non-existent class or interface: "App\\Controller\\SerializerInterface". Did you forget to add a use statement?'],
        ], [
            'phoneRepository' => '?',
            'serializer' => '?',
        ]);
    }
}
