<?php
    
namespace App\Controllers;

use App\Core\View;

class PagesController {

    public function index() {
        return View::show('index', 'Home');
    }

    public function about() {
        return View::show('about', 'About page');
    }
}