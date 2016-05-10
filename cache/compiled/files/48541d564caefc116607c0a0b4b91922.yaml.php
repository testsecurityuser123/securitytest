<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav-2016/user/themes/fangman-v1/blueprints/modular/project-gallery.yaml',
    'modified' => 1462848807,
    'data' => [
        'title' => 'Project Gallery',
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
                                'header.project_gal_half_1' => [
                                    'type' => 'pagemediaselect',
                                    'size' => 'large',
                                    'label' => 'Half Gallery Image 1'
                                ],
                                'header.project_gal_half_2' => [
                                    'type' => 'pagemediaselect',
                                    'size' => 'large',
                                    'label' => 'Half Gallery Image 2'
                                ],
                                'header.project_gal_full' => [
                                    'type' => 'pagemediaselect',
                                    'size' => 'large',
                                    'label' => 'Full Gallery Image'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
