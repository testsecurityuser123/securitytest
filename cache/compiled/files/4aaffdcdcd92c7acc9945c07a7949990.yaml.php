<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav-2016/user/config/site.yaml',
    'modified' => 1458432579,
    'data' => [
        'title' => 'Michael Fangman | Portfolio',
        'author' => [
            'name' => 'Michael Fangman',
            'email' => 'hello@michaelfangman.com'
        ],
        'taxonomies' => [
            0 => 'category'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
