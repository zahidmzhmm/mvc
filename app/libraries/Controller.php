<?php


class Controller
{
    public function __construct()
    {
        $this->userModel = $this->module('User');
    }

    public function module($model)
    {
        require_once APP_ROOT . '/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = array())
    {
        if (file_exists(APP_ROOT . '/views/' . $view . '.php')) {
            require_once APP_ROOT . '/views/' . $view . '.php';
        } else {
            die('View not found');
        }
    }
}