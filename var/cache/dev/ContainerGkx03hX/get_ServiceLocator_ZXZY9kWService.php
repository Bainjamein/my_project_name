<?php

namespace ContainerGkx03hX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZXZY9kWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zXZY9kW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zXZY9kW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'request' => ['privates', '.errored.3MAA_1z', NULL, 'Cannot determine controller argument for "App\\Controller\\PostController::new()": the $request argument is type-hinted with the non-existent class or interface: "App\\Controller\\Request". Did you forget to add a use statement?'],
        ], [
            'em' => '?',
            'request' => '?',
        ]);
    }
}