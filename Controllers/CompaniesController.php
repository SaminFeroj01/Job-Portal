<?php
namespace app\controllers;

use app\views\View;

class CompaniesController
{
    public function index()
    {
        View::render('companies');
    }
}