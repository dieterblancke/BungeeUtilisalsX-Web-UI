<?php


namespace App;


trait PunishmentModelTrait
{
    public static function last($amount = 10) {
        return parent::query()->orderByDesc('date')->limit($amount)->get();
    }
}
