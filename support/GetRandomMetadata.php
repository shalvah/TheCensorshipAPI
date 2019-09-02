<?php

namespace Support;

use ReflectionClass;
use ReflectionMethod;
use Illuminate\Routing\Route;
use Mpociot\ApiDoc\Strategies\Strategy;

class GetRandomMetadata extends Strategy
{
    public function __invoke(Route $route, ReflectionClass $controller, ReflectionMethod $method, array $routeRules, array $context = [])
    {
        return [
            'groupName' => "YESSSSSS!",
            'groupDescription' => '',
            'title' => '',
            'description' => '',
            'authenticated' => true,
        ];
    }
}
