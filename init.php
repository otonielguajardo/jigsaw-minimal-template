<?php

return [
    'delete' => [
        'source/_assets/*',
        'source/assets/build',
        'package.json',
        'tailwind.config.js',
        'webpack.mix.js',
    ],
    'ignore' => [
        'LICENSE',
        'README.md',
    ],
    'commands' => [
        'composer install',
    ]
];