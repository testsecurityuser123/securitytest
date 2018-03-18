<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/blueprints/modular/project-desktop-slider.yaml',
    'modified' => 1519278993,
    'data' => [
        'title' => 'Project Desktop Slider',
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
                                'header.project_ds_background_image' => [
                                    'type' => 'pagemediaselect',
                                    'size' => 'large',
                                    'label' => 'Background Image'
                                ],
                                'header.project_ds_no_padding' => [
                                    'type' => 'toggle',
                                    'label' => 'Remove Top Padding?',
                                    'default' => 0,
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.project_ds_slides' => [
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
