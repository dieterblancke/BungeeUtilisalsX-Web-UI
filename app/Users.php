<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->table = config('settings.tables.users');
    }
}
