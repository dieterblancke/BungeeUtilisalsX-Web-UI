<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Lang;

class PunishmentActions extends Model
{
    //
    use PageableTrait;

    protected $hidden = ['ip'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->table = config('settings.tables.bans');
    }
}
