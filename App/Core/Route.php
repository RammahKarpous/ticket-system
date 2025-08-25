<?php

namespace App\Core;

use InvalidArgumentException;

class Route
{
    protected static array $routes = [];

    public static function get( string $uri, array $action )
    {
        if ( count( $action ) !== 2 || !is_string( $action[0] ) || !is_string( $action[1] ) ) {
            throw new InvalidArgumentException( 'Action must be an array with [Controller::class, "method"]' );
        }

        self::$routes['GET'][$uri] = [
            'controller' => "$action[0]",
            'method'     => $action[1],
        ];
    }

    public static function dispatch()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        if ( isset( self::$routes[$method][$uri] ) ) {
            $controller = self::$routes[$method][$uri]['controller'];
            $method = self::$routes[$method][$uri]['method'];

            $controllerInstance = new $controller();
            $controllerInstance->$method();
        } else {
            // Handle 404 or other error
        }
    }

    public static function getRoutes(): array
    {
        return self::$routes;
    }
}
