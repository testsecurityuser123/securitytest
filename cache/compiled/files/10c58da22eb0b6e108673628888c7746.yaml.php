<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav-2016/user/themes/fangman-v1/blueprints/modular/project-intro.yaml',
    'modified' => 1463545266,
    'data' => [
        'title' => 'Project Intro',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages',
            'content' => [
                'items' => [
                    '@taxonomy.category' => 'work'
                ]
            ]
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.project_img_laptop' => [
                                    'type' => 'pagemediaselect',
                                    'size' => 'large',
                                    'label' => 'Project Image Laptop'
                                ],
                                'header.project_img_phone' => [
                                    'type' => 'pagemediaselect',
                                    'size' => 'large',
                                    'label' => 'Project Image Phone'
                                ],
                                'header.project_intro_background_image' => [
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
