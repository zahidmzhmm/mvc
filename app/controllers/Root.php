<?php


class Root extends Controller
{
    public function index()
    {
        $this->view('root/index');
    }

    public function about()
    {
        $this->view('root/about');
    }
}