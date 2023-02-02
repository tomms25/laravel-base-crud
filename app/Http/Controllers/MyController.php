<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Santi;

class MyController extends Controller
{
    public function home() {

        $santis = Santi::all();
        $data = [
            'santis' => $santis
        ];

        return view('pages.home');
    }
}
