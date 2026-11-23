<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        return view('home', [
            'entities' => Entity::orderBy('sort_order')->get(),
        ]);
    }
}
