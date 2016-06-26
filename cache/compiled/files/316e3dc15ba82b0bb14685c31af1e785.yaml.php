<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav-2016/user/config/plugins/private.yaml',
    'modified' => 1466959289,
    'data' => [
        'enabled' => true,
        'routes' => [
            'login' => '/login',
            'logout' => '/logout'
        ],
        'session_ss' => 'random_value',
        'private_site' => true,
        'private_tag' => 'hidden',
        'enable_username' => false,
        'users' => [
            'no_user' => '3674951ec264a72168cb2d89a5f634e512f6629d'
        ],
        'texts' => [
            'h1' => 'Michael Fangman | UX/UI Designer',
            'h2' => '<strong>Welcome.</strong> This site is private, please enter your password:'
        ],
        'fields' => [
            'username' => [
                'label' => 'Username',
                'placeholder' => 'Enter your username'
            ],
            'password' => [
                'label' => 'Password',
                'placeholder' => 'Enter your password'
            ],
            'antispam' => [
                'label' => 'Antispam',
                'placeholder' => 'Please leave this field empty for Antispam'
            ],
            'login' => [
                'label' => 'Login'
            ]
        ],
        'messages' => [
            'success' => 'You are logged.',
            'error' => 'Oops! There was a problem with your submission. Please try again or <a href=\'https://github.com/Diyzzuf/grav-plugin-private/issues\' target=\'_blank\'>report an issue </a>',
            'fail' => 'Oops! Something went wrong.. Try Again !'
        ]
    ]
];
