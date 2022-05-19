<?php
namespace controllers;

class HomeController
{
    public function index()
    {
        // return view('index');
        var_dump(request());
    }


    public function post()
    {
        var_dump(request());
    }
}