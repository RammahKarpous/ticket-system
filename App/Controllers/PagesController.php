<?php
    
namespace App\Controllers;

use App\Core\View;
use App\Models\Page;

class PagesController extends Controller {

    public function index() {
        return View::show('index', 'Home', args: [
            'greeting' => "Hello there!",
            'goodby' => "Until tomorrow!",
            'tickets' => Page::all()
        ]);
    }

    public function about() {
        return View::show('about', 'About page');
    }

    public function dashboard() {
        return View::show('dashboard', 'Dashboard', 'admin');
    }
}