<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav-2016/user/themes/fangman-v1/blueprints/modular/project-next-link.yaml',
    'modified' => 1466738500,
    'data' => [
        'title' => 'Project Next Link',
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
                                'header.project_nl_project_link' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'label' => 'Project URL'
                                ],
                                'header.project_nl_bkg_image' => [
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
