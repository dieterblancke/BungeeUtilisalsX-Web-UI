<?php

// TODO: Move this into MySQL storage (and use seeder to set default data), user can change through admin panel :)

return [
    'brand' => 'BungeeUtilisalsX',
    'navigation' => [
        'users' => 'Users',
        'bans' => 'Bans',
        'mutes' => 'Mutes',
        'kicks' => 'Kicks',
        'warns' => 'Warns',
        'punishmentactions' => 'Punishment Actions',
    ],
    'other' => [
        'never' => 'Never',
        'active' => 'Active',
        'expired' => 'Expired',
        'removed' => 'Removed',
    ],
    'homepage' => [
        'title' => 'BungeeUtilisalsX - Home',
        'header' => [
            'title' => 'Welcome to the BungeeUtilisals Web UI',
            'text' => 'Welcome to the BungeeUtilisals Web UI, here you can find User data, the latest punishments and more!'
        ],
        'body' => [
            'latestbans' => 'Latest Bans',
            'latestmutes' => 'Latest Mutes',
            'latestkickwarns' => 'Latest Kicks & Warns',
        ],
    ],
    'users' => [
        'title' => 'BungeeUtilisalsX - Users',
        'header' => 'Users',
    ],
    'bans' => [
        'title' => 'BungeeUtilisalsX - Bans',
        'header' => 'Bans',
    ],
    'mutes' => [
        'title' => 'BungeeUtilisalsX - Mutes',
        'header' => 'Mutes',
    ],
    'kicks' => [
        'title' => 'BungeeUtilisalsX - Kicks',
        'header' => 'Kicks',
    ],
    'warns' => [
        'title' => 'BungeeUtilisalsX - Warns',
        'header' => 'Warns',
    ],
    'footer' => '© 2018 - ' . date('Y') . ' BungeeUtilisalsX - Site made with <span style="color: #c60000;">&hearts;</span> by <a href="//www.dbsoftwares.eu">DBSoftwares</a>.',
];
