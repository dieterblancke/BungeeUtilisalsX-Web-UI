<?php

namespace App\Http\Controllers;

use App\Bans;
use App\Kicks;
use App\Mutes;
use App\Users;
use App\Warns;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input;

class ApiController extends Controller
{
    public function getRecentBans()
    {
        return Bans::last(10);
    }

    public function getBansPage() {
        $page = Input::get('page', 1);

        return Bans::getPage($page, 15);
    }

    public function getRecentMutes()
    {
        return Mutes::last(10);
    }

    public function getMutesPage() {
        $page = Input::get('page', 1);

        return Mutes::getPage($page, 15);
    }

    public function getRecentUsers()
    {
        return Users::last(20);
    }

    public function getWarnsPage() {
        $page = Input::get('page', 1);

        return Warns::getPage($page, 15);
    }

    public function getKicksPage() {
        $page = Input::get('page', 1);

        return Kicks::getPage($page, 15);
    }

    public function getRecentKickAndWarns()
    {
        $combined = new Collection();

        foreach (Warns::last(10) as $warn) {
            $warn->setAttribute('type', 'WARN');

            $combined->push($warn);
        }

        foreach (Kicks::last(10) as $kick) {
            $kick->setAttribute('type', 'KICK');

            $combined->push($kick);
        }

        $array = $combined->values()->all();
        usort($array, function ($a, $b) {
            return strtotime($b->date) - strtotime($a->date);
        });

        return array_splice($array, 0, 10);
    }
}
