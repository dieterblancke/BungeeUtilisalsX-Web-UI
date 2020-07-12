<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Users extends Model
{

    protected $hidden = ['ip'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->table = config('settings.tables.users');
    }

    public static function getPage(int $page, int $pageSize)
    {
        if (config('settings.cache.enabled')) {
            return Cache::remember('cache_' . static::class . '_page_' . $page, config('settings.cache.duration'), function () use ($page, $pageSize) {
                return parent::query()->orderByDesc('firstlogin')->paginate($pageSize, ['*'], 'page', $page);
            });
        }
        return parent::query()->orderByDesc('firstlogin')->paginate($pageSize, ['*'], 'page', $page);
    }
}
