<?php

namespace App\Http\Controllers\Principal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menuItems = [
            ['icon' => 'fas fa-home', 'route' => 'home'],
            ['icon' => 'fas fa-flag', 'route' => 'reports'],
            ['icon' => 'fas fa-chart-pie', 'route' => 'stats'],
            ['icon' => 'fas fa-envelope', 'route' => 'messages'],
            ['icon' => 'fas fa-image', 'route' => 'gallery'],
            ['icon' => 'fas fa-calendar', 'route' => 'calendar'],
            ['icon' => 'fas fa-users', 'route' => 'users'],
            ['icon' => 'fas fa-cog', 'route' => 'settings']
        ];
        return view('layouts.layout', compact('menuItems')); 
    }
    public function home()
    { 
        $menuItems = [
            ['icon' => 'fas fa-home', 'route' => 'home'],
            ['icon' => 'fas fa-flag', 'route' => 'reports'],
            ['icon' => 'fas fa-chart-pie', 'route' => 'stats'],
            ['icon' => 'fas fa-envelope', 'route' => 'messages'],
            ['icon' => 'fas fa-image', 'route' => 'gallery'],
            ['icon' => 'fas fa-calendar', 'route' => 'calendar'],
            ['icon' => 'fas fa-users', 'route' => 'users'],
            ['icon' => 'fas fa-cog', 'route' => 'settings']
        ]; 
        return view('layouts.inicio', compact('menuItems'));
    }
}

    //
