<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/blueprints/modular/project-image-right-card-slider.yaml',
    'modified' => 1507608039,
    'data' => [
        'title' => 'Project Image Right – Card Slider',
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
                                'header.project_img_r_cs_img' => [
                                    'type' => 'pagemediaselect',
                                    'size' => 'large',
                                    'label' => 'Image'
                                ],
                                'header.project_img_r_cs_adjust' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'label' => 'Image Top Padding:'
                                ],
                                'header.project_img_r_cs_background_image' => [
                                    'type' => 'pagemediaselect',
                                    'size' => 'large',
                                    'label' => 'Background Image'
                                ],
                                'header.project_img_r_cs_button_text' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'label' => 'Button Text'
                                ],
                                'header.project_img_r_cs_button_link' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'label' => 'Button URL'
                                ],
                                'header.project_img_r_cs_slides' => [
                                    'name' => 'Requirements',
                                    'type' => 'list',
                                    'label' => 'Requirements',
                                    'size' => 'large',
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
