<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutes extends Model
{
    //
    use PunishmentModelTrait;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->table = config('settings.tables.mutes');
    }
}
