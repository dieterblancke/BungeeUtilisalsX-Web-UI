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
        return view('punishments', ['type' => 'ban']);
    }

    public function mutes()
    {
        return view('punishments', ['type' => 'mute']);
    }

    public function kicks()
    {
        return view('punishments', ['type' => 'kick']);
    }

    public function warns()
    {
        return view('punishments', ['type' => 'warn']);
    }

    public function punishmentactions()
    {
        return view('punishmentactions');
    }
}
