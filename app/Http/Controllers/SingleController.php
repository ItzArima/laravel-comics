<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function show($id){
        $comics = config('db');
        return view('single', [
            'comics' => $comics[$id],
        ]);
    }
}
