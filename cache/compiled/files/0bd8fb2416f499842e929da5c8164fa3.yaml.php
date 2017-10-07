<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/blueprints/modular/project-image-right.yaml',
    'modified' => 1507413348,
    'data' => [
        'title' => 'Project Image Right',
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
                                'header.project_img_r_img' => [
                                    'type' => 'pagemediaselect',
                                    'size' => 'large',
                                    'label' => 'Image'
                                ],
                                'header.project_img_r_background_image' => [
                                    'type' => 'pagemediaselect',
                                    'size' => 'large',
                                    'label' => 'Background Image'
                                ],
                                'header.project_img_r_button_text' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'label' => 'Button Text'
                                ],
                                'header.project_img_r_button_link' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'label' => 'Button URL'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
