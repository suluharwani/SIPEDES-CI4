<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $travel = config('Travel');
        return view('travel/home', [
            'travel' => $travel,
            'routes' => $travel->routes,
        ]);
    }
}
