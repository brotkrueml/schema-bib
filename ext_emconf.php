<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Schema.org extension for bibliography',
    'description' => 'Extend the schema extension with bibliographic-related terms',
    'category' => 'fe',
    'state' => 'stable',
    'createDirs' => '',
    'clearCacheOnLoad' => true,
    'author' => 'Chris Müller',
    'author_email' => 'typo3@krue.ml',
    'version' => '1.2.0',
    'constraints' => [
        'depends' => [
            'schema' => '1.7.0-2.99.99',
            'typo3' => '10.4.11-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => ['Brotkrueml\\SchemaBib\\' => 'Classes']
    ],
];
