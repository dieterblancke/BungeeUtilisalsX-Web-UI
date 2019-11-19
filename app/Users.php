<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{

    protected $hidden = ['ip'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->table = config('settings.tables.users');
    }

    public static function last($amount = 10) {
        return self::query()->orderByDesc('firstlogin')->limit($amount)->get();
    }
}
