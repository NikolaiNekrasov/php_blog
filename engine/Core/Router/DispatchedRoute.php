<?php

namespace Engine\Core\Router;

class DispatchedRoute
{
	private $controller;
	private $parametrs;

	/**
	* DispatshedRoute constructor
	* @param $controller
	* @param array $parametrs
	*/
	public function __construct($controller, $parametrs = [])
	{
		$this->controller = $controller;
		$this->parametrs = $parametrs;
	}

	/**
	* @return mixed
	*/
	public function getController()
	{
		return $this->controller;
	}

	/**
	* @return array
	*/
	public function getParameters()
	{
		return $this->parametrs;
	}
}