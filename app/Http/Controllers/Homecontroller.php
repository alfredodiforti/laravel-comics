<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Homecontroller extends Controller
{
    public function index() {
        $comics = config('minidb');

        foreach ($comics as $key => $comic) {
            $slug = Str::slug($comic['title'], '-');
            $comics[$key]['slug'] = $slug;
        }




        return view('home', compact('comics'));
    }
}
