<?php
namespace app\controllers;

use app\views\View;

class JobsController
{
    public function index()
    {
        include __DIR__ . '/../Views/jobs.php';
    }
}