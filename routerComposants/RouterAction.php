<?php

namespace Amaur\Router\RouterComposants;

use Amaur\Router\RouterComposants\Route;
use Amaur\Router\RouterComposants\Router;

class RouterAction {
    /**
     * Return new router
     * @return Router
     */
    public function newRouter(): Router {
        return new Router();
    }

    /**
     * Return a new route
     * @param $controller
     * @param $path
     * @param $action
     * @return Route
     */
    public function newRoute($controller, $path, $action): Route {
        return new Route($controller, $path, [get_class($controller), $action]);
    }
}