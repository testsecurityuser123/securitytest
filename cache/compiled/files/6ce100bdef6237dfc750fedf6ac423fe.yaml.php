<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav-2016/user/themes/fangman-v1/blueprints/modular/project-phone-slider.yaml',
    'modified' => 1470974563,
    'data' => [
        'title' => 'Project Phone Slider',
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
                                'header.project_ps_button_text' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'label' => 'Button Text'
                                ],
                                'header.project_ps_button_link' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'label' => 'Button URL'
                                ],
                                'header.project_ps_background_image' => [
                                    'type' => 'pagemediaselect',
                                    'size' => 'large',
                                    'label' => 'Background Image'
                                ],
                                'header.project_ps_slides' => [
                                    'name' => 'Desktop Slider Slides',
                                    'type' => 'list',
                                    'label' => 'Desktop Slider Slides',
                                    'fields' => [
                                        '.image' => [
                                            'type' => 'pagemediaselect',
                                            'label' => 'Project Image Laptop'
                                        ],
                                        '.alt' => [
                                            'type' => 'text',
                                            'label' => 'Project Image Alt Text'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
