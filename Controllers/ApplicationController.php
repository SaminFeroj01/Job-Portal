<?php
namespace app\controllers;

use app\views\View;

class ApplicationController
{
    public function index()
    {
        View::render('application');
    }
}