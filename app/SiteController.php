<?php

namespace App;

class SiteController
{
    public function index() {
        //include __DIR__.'../view/addProduct1.php';
        echo __DIR__.'/view/addProduct1.php';
        //require('view/addProduct1.php');
    }

    public function notFound() {
        include __DIR__.'/view/addProduct1.php';;
    }
}