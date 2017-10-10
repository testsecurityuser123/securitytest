<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/blueprints/modular/project-card-slider-right.yaml',
    'modified' => 1507617818,
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
                                'header.project_r_cs_adjust' => [
                                    'type' => 'text',
                                    'size' => 'long',
                                    'label' => 'Slider Top Margin:'
                                ],
                                'header.project_img_r_cs_background_image' => [
                                    'type' => 'pagemediaselect',
                                    'size' => 'long',
                                    'label' => 'Background Image'
                                ],
                                'header.project_img_r_cs_button_text' => [
                                    'type' => 'text',
                                    'size' => 'long',
                                    'label' => 'Button Text'
                                ],
                                'header.project_img_r_cs_button_link' => [
                                    'type' => 'text',
                                    'size' => 'long',
                                    'label' => 'Button URL'
                                ],
                                'header.project_img_r_cs_slides' => [
                                    'name' => 'Requirements',
                                    'type' => 'list',
                                    'label' => 'Requirements',
                                    'fields' => [
                                        '.subhead' => [
                                            'type' => 'text',
                                            'label' => 'Subheadline'
                                        ],
                                        '.headline' => [
                                            'type' => 'textarea',
                                            'label' => 'Headline'
                                        ],
                                        '.users' => [
                                            'type' => 'list',
                                            'label' => 'User Images',
                                            'fields' => [
                                                '.image' => [
                                                    'type' => 'pagemediaselect',
                                                    'label' => 'Image'
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
        ]
    ]
];
