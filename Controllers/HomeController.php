<?php
namespace app\controllers;

use app\views\View;

class HomeController
{
    public function index()
    {
        View::render('home');
    }
}