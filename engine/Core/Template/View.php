<?php


namespace Engine\Core\Template;


class View
{
    public function __construct()
    {
    }

    public function  render($template, $vars = [])
    {
        $templatePath = ROOT_DIR . '/content/themes/default/' . $template . '.php';
    }


}