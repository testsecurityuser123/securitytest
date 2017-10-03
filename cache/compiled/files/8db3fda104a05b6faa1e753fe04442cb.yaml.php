<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav/user/config/plugins/email.yaml',
    'modified' => 1471844753,
    'data' => [
        'enabled' => true,
        'from' => 'Hello@michaelfangman.com',
        'from_name' => 'Michael Fangman',
        'to' => 'fangmanm@gmail.com',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'password' => 'enter'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
