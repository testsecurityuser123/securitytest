<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav-2016/user/themes/fangman-v1/blueprints/home.yaml',
    'modified' => 1458878430,
    'data' => [
        'title' => 'Home',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.background_img' => [
                                    'type' => 'pagemediaselect',
                                    'size' => 'large',
                                    'label' => 'Background Image'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
