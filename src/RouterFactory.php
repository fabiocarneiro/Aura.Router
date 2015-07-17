<?php
/**
 *
 * This file is part of the Aura for PHP.
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 *
 */
namespace Aura\Router;

/**
 *
 * A factory to create a router.
 *
 * @package Aura.Router
 *
 */
class RouterFactory
{
    /**
     *
     * Returns a new Router instance.
     *
     * @return Router
     *
     */
    public function newInstance($basepath = null)
    {
        return new Router(
            new RouteCollection(new RouteFactory),
            new Generator,
            $basepath
        );
    }
}
