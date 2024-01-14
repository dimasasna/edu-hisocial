<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home', [
            'title' => 'Home',
            'logo' => 'assets/img/logo-hisocial.png',
            'testimonials' => Testimonial::all()
        ]);
    }
}
