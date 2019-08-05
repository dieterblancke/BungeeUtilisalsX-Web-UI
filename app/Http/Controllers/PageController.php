<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function users()
    {
        return view('users');
    }

    public function bans()
    {
        return view('bans');
    }

    public function mutes()
    {
        return view('mutes');
    }

    public function kicks()
    {
        return view('kicks');
    }

    public function warns()
    {
        return view('warns');
    }

    public function punishmentactions()
    {
        return view('punishmentactions');
    }
}
