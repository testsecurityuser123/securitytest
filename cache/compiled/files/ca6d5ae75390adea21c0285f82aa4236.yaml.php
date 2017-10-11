<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/blueprints/modular/project-next-link.yaml',
    'modified' => 1507735088,
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
                                    'size' => 'long',
                                    'label' => 'Project URL'
                                ],
                                'header.project_nl_bkg_image' => [
                                    'type' => 'pagemediaselect',
                                    'size' => 'long',
                                    'label' => 'Background Image'
                                ],
                                'header.project_nl_padding' => [
                                    'type' => 'text',
                                    'size' => 'long',
                                    'label' => 'Padding Top (90px min)'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
