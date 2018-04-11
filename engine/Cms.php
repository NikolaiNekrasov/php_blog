<?php 

namespace Engine;

use Engine\Helper\Common;

class Cms
{
	/**
     * @var DI
    */
	private $di;

	public $router;
	/**
     * Cms constructor
     * @param  $di
    */
	public function __construct($di)
	{
		$this->di = $di;
		$this->router = $this->di->get('router');
	}
	/**
	* Run Cms
	*/
	public function run() 
	{
		$this->router->add('home', '/', 'HomeController:index');
        $this->router->add('news', '/news', 'HomeController:news');
		//$this->router->add('product', '/user/12', 'ProductController:index');

		$routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());

		list($class, $action) = explode(':', $routerDispatch->getController(), 2);

		$controller = '\\Cms\\Controller\\' . $class;

		call_user_func_array([new $controller($this->di), $action], $routerDispatch->getParameters());

		//print_r($routerDispatch);
        //print_r($class);
        //echo '<br>';
        //print_r($action);


		
	}
}
