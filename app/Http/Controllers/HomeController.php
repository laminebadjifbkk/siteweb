<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View { return view('site.index'); }
    public function inscription(): View { return view('site.inscription'); }
    public function apropos(): View { return view('site.a-propos'); }
    public function polesregionaux(): View { return view('site.poles-regionaux'); }
    public function missions(): View { return view('site.missions'); }
    public function documentation(): View { return view('site.documentation'); }
    public function actualites(): View { return view('site.actualites'); }
    public function operateurs(): View { return view('site.operateurs'); }
    public function formations(): View { return view('site.formations'); }
    public function marchespublics(): View { return view('site.marches-publics'); }
    public function contact(): View { return view('site.contact'); }
    public function certification(): View { return view('site.certification'); }
    public function entreprises(): View { return view('site.entreprises'); }
}
