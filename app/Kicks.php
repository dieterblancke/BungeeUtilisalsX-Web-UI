<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kicks extends Model
{
    //
    use PunishmentModelTrait;

    protected $hidden = ['ip'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->table = config('settings.tables.kicks');
    }
}