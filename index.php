<?php
require_once("./vendor/autoload.php");

use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;


try {
    $locator = new FileLocator(__DIR__);
    $yamlLoader = new YamlFileLoader($locator);
    $routes = $yamlLoader->load("router.yaml");


    $context = new RequestContext();
    $context->fromRequest(Request::createFromGlobals());


    $matcher = new UrlMatcher($routes, $context);
    $parameters = $matcher->match($context->getPathInfo());


    $controllerInfo = $parameters['controller'];
    $controllerArray = explode('@', $controllerInfo);
    $controller = $controllerArray[0];
    $method = $controllerArray[1];

    unset($parameters["_route"]);
    unset($parameters['controller']);

    $controllerInstance = new $controller();
    call_user_func_array([$controllerInstance, $method], $parameters);
} catch (ResourceNotFoundException $e) {
    echo "<h1>Route not found</h1>";
} catch (Exception $exception) {
    echo "<h1>An error occurred</h1>";
    echo $exception->getMessage();
}
