<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{

    /**
     * @param string $setting
     * @param mixed $value
     */
    public function updateSetting(string $setting, $value)
    {
        $settingKey = "setting_$setting";

        Cache::forget($settingKey);
        Cache::put($settingKey, $value, Carbon::now()->addHour());
    }

    /**
     * @param string $setting
     * @return mixed
     */
    public function getSetting(string $setting)
    {
        return Cache::remember("setting_$setting", Carbon::now()->addHour(), function () use ($setting) {
            return self::query()
                ->where( "setting", "=", "setting_$setting")
                ->select('value')
                ->first();
        });
    }
}
