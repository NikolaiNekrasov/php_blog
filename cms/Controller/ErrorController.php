<?php


namespace Cms\Controller;

use Engine\Controller;


class ErrorController extends Controller
{

    /**
     * ErrorController constructor.
     * @param $di
     */
    public function __construct($di)
    {
        parent::__construct($di);
    }

    public function page404()
    {
        echo '404 Page';
    }


}