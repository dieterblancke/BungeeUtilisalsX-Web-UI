<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warns extends Model
{
    //
    use PageableTrait;

    protected $hidden = ['ip'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->table = config('settings.tables.warns');
    }
}
