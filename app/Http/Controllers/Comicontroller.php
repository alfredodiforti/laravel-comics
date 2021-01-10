<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Comicontroller extends Controller
{
    public function show($slug) {

        $comics = config('minidb');

        $comic = [];
        foreach ($comics as $item) {
            $titleslug = Str::slug($item['title'], '-');
            if ($slug == $titleslug) {
                $comic = $item;
                break;
            }
        }
        if(empty($comic)) {
            abort(404);
        }

        return view('comic', compact('comic'));
       }
}
