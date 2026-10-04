<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View { return view('site.index'); }
    public function inscription(): View { return view('site.inscription'); }
    public function apropos(): View { return view('site.a-propos'); }
}
