<?php

namespace Admin\Controller;


class LoginController extends AdminController
{
    public function form()
    {
       // print_r($this->request);
        $this->view->render('login');
    }

}