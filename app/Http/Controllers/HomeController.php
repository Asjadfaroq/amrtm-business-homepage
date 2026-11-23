<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use App\Models\Partner;
use App\Models\Service;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        return view('home', [
            'entities' => Entity::orderBy('sort_order')->get(),
            'services' => Service::orderBy('sort_order')->get(),
            'partners' => Partner::orderBy('sort_order')->get(),
        ]);
    }
}
