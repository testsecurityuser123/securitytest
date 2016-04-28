<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav-2016/user/themes/fangman-v1/blueprints/modular/project-phone-feature.yaml',
    'modified' => 1461816679,
    'data' => [
        'title' => 'Project Phone Feature',
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
                                'header.project_pf_button_text' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'label' => 'Buttom Text'
                                ],
                                'header.project_pf_button_link' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'label' => 'Button URL'
                                ],
                                'header.project_pf_iframe' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'label' => 'Phone iFrame URL'
                                ],
                                'header.project_pf_phoneimg' => [
                                    'type' => 'pagemediaselect',
                                    'size' => 'large',
                                    'label' => 'Phone Image'
                                ],
                                'header.project_pf_background_image' => [
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
