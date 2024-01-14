<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        return view("dashboard.index", [
            "title" => "Dashboard",
            'logo' => 'assets/img/logo-hisocial.png',
            'users' => User::get(),
            'portfolios' => Portfolio::get(),
            'categories' => Category::get(),
            'testimonials' => Testimonial::get(),
            // 'testimonials' => Testimonial::take(5)->get(),
        ]);
    }
}
