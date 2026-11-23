<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function __invoke(string $page): View
    {
        return view('page', ['page' => $page]);
    }
}
