<?php

namespace Support;

use Illuminate\Routing\Route;
use Mpociot\ApiDoc\Strategies\Strategy;

class AddOrganizationIdBodyParameter extends Strategy
{
    public function __invoke(Route $route, \ReflectionClass $controller, \ReflectionMethod $method, array $routeRules, array $context = [])
    {
        return [
            'organizationId' => [
                'type' => 'integer',
                'description' => 'The ID of the organization',
                'required' => true,
                'value' => 2,
            ]
        ];
    }
}
