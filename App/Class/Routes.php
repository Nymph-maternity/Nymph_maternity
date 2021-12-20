<?php

// require("Controller.php");

// class Routes
// {
//     protected $routes = [
//         "/nymphmaternity" => "App\Class\Controller@home",
//         "/nymphmaternity/login" => "App\Class\Controller@login",
//         "/nymphmaternity/dashboard" => "App\Class\Controller@dashboard",
//         "/nymphmaternity/details" => "App\Class\Controller@details",
//         "/nymphmaternity/details2" => "App\Class\Controller@details2",
//         "/nymphmaternity/profile" => "App\Class\Controller@profile",
//         "/nymphmaternity/register" => "App\Class\Controller@register",

//     ];

//     public function __construct()
//     {
//         $url = rtrim($_SERVER['REQUEST_URI'], "/");
//         $controllerandMethod = $this->routes[$url];
//         $splitClassAndMethod = explode('@', $controllerandMethod);
//         $controller = $splitClassAndMethod[0];
//         $method = $splitClassAndMethod[1];
//         $instanceController = new $controller;
//         $instanceController->$method();
//     }
// }
// require_once("./vendor/autoload.php");

// use Symfony\Component\Routing\Matcher\UrlMatcher;
// use Symfony\Component\Routing\RequestContext;
// use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\Routing\Exception\ResourceNotFoundException;
// use Symfony\Component\Routing\Loader\YamlFileLoader;
// use Symfony\Component\Config\FileLocator;

// try {
//     $locator = new FileLocator(__DIR__);
//     $yamlLoader = new YamlFileLoader($locator);
//     $routes = $yamlLoader->load("router.yaml");


//     $context = new RequestContext();
//     $context->fromRequest(Request::createFromGlobals());


//     $matcher = new UrlMatcher($routes, $context);
//     $parameters = $matcher->match($context->getPathInfo()); //
//     unset($parameters["_route"]);

//     $controllerInfo = $parameters['controller'];
//     $controllerArray = explode('@', $controllerInfo);
//     $controller = $controllerArray[0];
//     print_r($controller);
//     $method = $controllerArray[1];
//     unset($parameters['controller']);

//     $controllerInstance = new $controller();
//     call_user_func_array([$controllerInstance, $method], $parameters);
// } catch (ResourceNotFoundException $e) {
//     echo "<h1>Route not found</h1>";
// } catch (Exception $exception) {
//     echo "<h1>An error occurred</h1>";
// }
