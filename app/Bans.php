<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Lang;

class Bans extends Model
{
    //
    use PunishmentModelTrait;

    protected $hidden = ['ip'];
    protected $appends = ['expires_at', 'status'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->table = config('settings.tables.bans');
    }

    public function getExpiresAtAttribute()
    {
        $duration = (float)$this->duration;
        if ($duration < 0) {
            return Lang::get('messages.other.never');
        }

        return Carbon::createFromTimestampMs($duration)->setTimezone(config('settings.timezone'))->toDateTimeString();
    }

    public function getStatusAttribute()
    {
        if ($this->active) {
            if (Carbon::parse($this->getExpiresAtAttribute())->isPast()) {
                return Lang::get('messages.other.expired');
            }
            return Lang::get('messages.other.active');
        } else if ($this->removed) {
            return Lang::get('messages.other.removed');
        } else {
            return Lang::get('messages.other.expired');
        }
    }
}
