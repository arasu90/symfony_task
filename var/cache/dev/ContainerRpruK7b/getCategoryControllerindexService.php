<?php

namespace ContainerRpruK7b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.T1nRTja.App\Controller\CategoryController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.T1nRTja.App\\Controller\\CategoryController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'serializer' => ['privates', 'serializer', 'getSerializerService', false],
        ], [
            'entityManager' => '?',
            'serializer' => '?',
        ]))->withContext('App\\Controller\\CategoryController::index()', $container);
    }
}
