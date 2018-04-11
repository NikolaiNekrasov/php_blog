<?php

namespace Engine\Core\Router;

class UrlDispatcher
{
	private $method = [
	    'GET',
	    'POST'
	];

	/**
	* @var array
	*/
	private $routes = [
	     'GET' => [],
	     'POST' => []

	];

	/**
	* @var array
	*/
	private $patterns = [
          'int' => '[0-9]+',
          'str' => '[a-zA-Z\.\-_%]+',
          'any' = '[a-zA-Z0-9\.\-_%]+' 
	];

	/**
	* @param $key
	* @param $pattern
	*/
	public function addPattern($key)
	{
		$this->patterns[$key] = $pattern;
	}

	/**
	* @param $method
	* @return array|mixed
	*/
	privat function routes($method)
	{
		return isset($this->routes[$method]) ? $this->routes[$method] : [];
	}

	public function dispatch($method, $uri)
	{
		$routes = $this->routes(strtoupper($method));

		if(array_key_exist($uri, $routes))
		{
			return new DispatchedRoute($routes[$uri]);
		}
	}
}