<?php
/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

/*
 * This file is loaded in the context of the `Application` class.
  * So you can use  `$this` to reference the application class instance
  * if required.
 */
return function (RouteBuilder $routes): void {
    /*
     * The default class to use for all routes
     *
     * The following route classes are supplied with CakePHP and are appropriate
     * to set as the default:
     *
     * - Route
     * - InflectedRoute
     * - DashedRoute
     *
     * If no call is made to `Router::defaultRouteClass()`, the class used is
     * `Route` (`Cake\Routing\Route\Route`)
     *
     * Note that `Route` does not do any inflections on URLs which will result in
     * inconsistently cased URLs when used with `{plugin}`, `{controller}` and
     * `{action}` markers.
     */
    $routes->setRouteClass(DashedRoute::class);

    /*************************************************/
    /* Root -> App\Controller\App\*                  */
    /*************************************************/
    $routes->scope('/', function (RouteBuilder $routes): void {
        // Home
        $routes->connect('/', ['prefix' => 'App', 'controller' => 'Home', 'action' => 'index']);

        // You can define custom routes here if fallback auto-routing below is not working

        // Fallbacks (auto routing)
        $routes->connect('/:controller', ['prefix' => 'App', 'action' => 'index']);
        $routes->connect('/:controller/:action/*', ['prefix' => 'App']);
    });

    /*************************************************/
    /* Root -> App\Controller\App\Admin\*            */
    /*************************************************/
    $routes->scope('/admin', function (RouteBuilder $routes): void {
        // Admin Home
        $routes->connect('/', ['prefix' => 'App/Admin', 'controller' => 'Home', 'action' => 'index']);

        // You can define custom routes here if the following fallback auto-routing is not working

        // Fallbacks (auto routing)
        $routes->connect('/:controller', ['prefix' => 'App/Admin', 'action' => 'index']);
        $routes->connect('/:controller/:action/*', ['prefix' => 'App/Admin']);
    });

    /*************************************************/
    /* /shop -> App\Controller\AppShop\*             */
    /*************************************************/
    $routes->scope('/shop', function (RouteBuilder $routes): void {
        // Shop home
        $routes->connect('/', ['prefix' => 'AppShop', 'controller' => 'Home', 'action' => 'index']);

        // You can define custom routes here if the following fallback auto-routing is not working

        // Fallbacks (auto routing)
        $routes->connect('/:controller', ['prefix' => 'AppShop', 'action' => 'index']);
        $routes->connect('/:controller/:action/*', ['prefix' => 'AppShop']);
    });

    /*************************************************/
    /* /shop/admin -> App\Controller\AppShop\Admin\* */
    /*************************************************/
    $routes->scope('/shop/admin', function (RouteBuilder $routes): void {
        // Shop Admin Home
        $routes->connect('/', ['prefix' => 'AppShop/Admin', 'controller' => 'Home', 'action' => 'index']);

        // You can define custom routes here if the following fallback auto-routing is not working

        // Fallbacks (auto routing)
        $routes->connect('/:controller', ['prefix' => 'AppShop/Admin', 'action' => 'index']);
        $routes->connect('/:controller/:action/*', ['prefix' => 'AppShop/Admin']);
    });
};
