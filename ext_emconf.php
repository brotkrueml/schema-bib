<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Schema.org extension for bibliography',
    'description' => 'Extend the schema extension with bibliographic-related terms',
    'category' => 'fe',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'author' => 'Chris Müller',
    'author_email' => 'typo3@brotkrueml.dev',
    'version' => '2.4.0',
    'constraints' => [
        'depends' => [
            'php' => '8.1.0-0.0.0',
            'schema' => '3.10.0-3.99.99',
            'typo3' => '11.5.19-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => ['Brotkrueml\\SchemaBib\\' => 'Classes']
    ],
];
