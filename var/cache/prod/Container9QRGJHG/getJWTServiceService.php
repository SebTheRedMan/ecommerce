<?php

namespace Container9QRGJHG;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJWTServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Service\JWTService' shared autowired service.
     *
     * @return \App\Service\JWTService
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Service\\JWTService'] = new \App\Service\JWTService();
    }
}