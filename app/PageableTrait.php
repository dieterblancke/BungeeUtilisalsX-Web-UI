<?php


namespace App;


use Illuminate\Support\Facades\Cache;

trait PageableTrait
{

    public static function last($amount = 10)
    {
        if (config('settings.cache.enabled')) {
            return Cache::remember('cache_' . static::class . '_last', config('settings.cache.duration'), function () use ($amount) {
                return parent::query()->orderByDesc('date')->limit($amount)->get();
            });
        }
        return parent::query()->orderByDesc('date')->limit($amount)->get();
    }

    public static function getPage(int $page, int $pageSize)
    {
        if (config('settings.cache.enabled')) {
            return Cache::remember('cache_' . static::class . '_page_' . $page, config('settings.cache.duration'), function () use ($page, $pageSize) {
                return parent::query()->orderByDesc('date')->paginate($pageSize, ['*'], 'page', $page);
            });
        }
        return parent::query()->orderByDesc('date')->paginate($pageSize, ['*'], 'page', $page);
    }
}
