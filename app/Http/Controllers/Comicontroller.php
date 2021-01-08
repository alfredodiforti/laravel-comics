<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Comicontroller extends Controller
{
    public function show($id) {

        $comics = config('minidb');

        $comic = [];
        foreach ($comics as $item) {
            if ($id == $item['id']) {
                $comic = $item;
            }
        }
        return view('comic', compact('comic'));
       }
}
