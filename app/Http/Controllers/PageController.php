<?php

namespace App\Http\Controllers;

use App\Bans;

class PageController extends Controller
{
    //
    public function home()
    {
        var_dump(Bans::last(10));
        return view('home');
    }
}
