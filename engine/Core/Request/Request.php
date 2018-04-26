<?php

namespace Engine\Core\Request;


class Request
{

    public $get = [];

    public $post = [];

    public $request = [];

    public $cookie = [];

    public $files = [];

    public $server = [];

    /**
     * Request constructor.
     */
    public function __construct()
    {
        $this->get     = $_GET;
        $this->post    = $_POST;
        $this->request = $_REQUEST;
        $this->files   = $_FILES;
        $this->server  = $_SERVER;
    }


}