<?php
return [
    'tables' => [
        'users' => 'bu_users',
        'bans' => 'bu_bans',
        'mutes' => 'bu_mutes',
        'kicks' => 'bu_kicks',
        'warns' => 'bu_warns',
    ],
    'cache' => [
        'enabled' => true,
        // time is in seconds
        'duration' => 300,
    ],
    'locale' => 'en'
];
