<?php

namespace App\Docs\Strategies;

use Illuminate\Routing\Route;
use Knuckles\Scribe\Extracting\ParamHelpers;
use Knuckles\Scribe\Extracting\RouteDocBlocker;
use Knuckles\Scribe\Extracting\Strategies\Strategy;
use ReflectionClass;
use ReflectionFunctionAbstract;

/**
 * Class AddPaginationParameters
 * @package App\Docs\Strategies
 *
 * Custom Scribe strategy to add `page` and `pageSize` query parameters to all listing endpoints.
 */
class AddPaginationParameters extends Strategy
{
    public $stage = 'queryParameters';

    /**
     * Trait containing some helper methods for dealing with "parameters".
     * Useful if your strategy extracts information about parameters.
     */
    use ParamHelpers;

    /**
     * @link https://scribe.readthedocs.io/en/latest/plugins.html
     *
     * @param Route $route The route which we are currently extracting queryParameters for.
     * @param ReflectionClass $controller The class handling the current route.
     * @param ReflectionFunctionAbstract $method The method/closure handling the current route.
     * @param array $routeRules Array of rules for the ruleset which this route belongs to.
     * @param array $alreadyExtractedData  Data already extracted from previous stages and earlier strategies in this stage
     *
     * See the documentation linked above for more details about writing custom strategies.
     *
     * @return array|null
     */
    public function __invoke(
        Route $route,
        ReflectionClass $controller,
        ReflectionFunctionAbstract $method,
        array $routeRules,
        array $alreadyExtractedData = []
    )
    {
        $isGetRoute = in_array('GET', $route->methods());
        $isIndexRoute = strpos($route->getName(), '.index') !== false;
        if ($isGetRoute && $isIndexRoute) {
            return [
                'page' => [
                    'description' => 'Page number to return.',
                    'required' => false,
                    'value' => 1,
                ],
                'pageSize' => [
                    'description' => 'Number of items to return in a page. Defaults to 10.',
                    'required' => false,
                    'value' => null,
                ],
            ];
        }

        return null;
    }

}
