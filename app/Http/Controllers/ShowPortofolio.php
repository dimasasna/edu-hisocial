<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class ShowPortofolio extends Controller
{
    public function index()
    {
        return view("portofolio", [
            'title' => 'Portofolio',
            'logo' => 'assets/img/logo-hisocial.png',
            'smm' => Portfolio::whereHas('category', function ($query) {
                $query->where('name', 'Social Media Management');
            })->get(),
            'biv' => Portfolio::whereHas('category', function ($query) {
                $query->where('name', 'Branding Identity Visual');
            })->get(),
            'lbi' => Portfolio::whereHas('category', function ($query) {
                $query->where('name', 'Logo & Branding Identity');
            })->get(),
            'ws' => Portfolio::whereHas('category', function ($query) {
                $query->where('name', 'Website & System Service');
            })->get(),
            'dms' => Portfolio::whereHas('category', function ($query) {
                $query->where('name', 'Digital Marketing Strategy');
            })->get(),
        ]);
    }
}
