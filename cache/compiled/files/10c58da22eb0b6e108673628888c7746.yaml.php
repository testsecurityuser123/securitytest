<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav-2016/user/themes/fangman-v1/blueprints/modular/project-intro.yaml',
    'modified' => 1460335015,
    'data' => [
        'title' => 'Project Intro',
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
                                'header.project_img' => [
                                    'type' => 'pagemediaselect',
                                    'size' => 'large',
                                    'label' => 'Project Image'
                                ],
                                'header.project_intro_background_color' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'Background Color (Hex)'
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
