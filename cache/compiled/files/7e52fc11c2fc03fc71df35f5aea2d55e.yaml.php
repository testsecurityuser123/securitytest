<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav-2016/user/themes/fangman-v1/blueprints/modular/project-description.yaml',
    'modified' => 1460431949,
    'data' => [
        'title' => 'Project Description',
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
                                'header.project_attributes' => [
                                    'name' => 'Project Attributes',
                                    'type' => 'list',
                                    'label' => 'Project Attributes',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Title'
                                        ],
                                        '.description' => [
                                            'type' => 'text',
                                            'label' => 'Description'
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
