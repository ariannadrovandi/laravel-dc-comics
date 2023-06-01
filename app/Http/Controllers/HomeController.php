<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $comics = Comic::inRandomOrder()->limit(3)->get();
        $data = [
            'comics' => $comics
        ];
        return view('home', $data);
    }
}
