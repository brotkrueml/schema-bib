<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Schema.org extension for bibliography',
    'description' => 'Extend the schema extension with bibliographic-related terms',
    'category' => 'fe',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'author' => 'Chris Müller',
    'author_email' => 'typo3@brotkrueml.dev',
    'version' => '3.0.0-dev',
    'constraints' => [
        'depends' => [
            'php' => '8.2.0-0.0.0',
            'schema' => '4.0.0-4.99.99',
            'typo3' => '13.4.0-14.3.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => ['Brotkrueml\\SchemaBib\\' => 'Classes']
    ],
];
