<?php

namespace App\Http\Controllers;

use App\Bans;
use App\Kicks;
use App\Mutes;
use App\Warns;
use Illuminate\Support\Collection;

class ApiController extends Controller
{
    //
    public function getRecentBans()
    {
        return Bans::last(10);
    }

    public function getRecentMutes()
    {
        return Mutes::last(10);
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
