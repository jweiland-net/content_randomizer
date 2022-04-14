<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Content Randomizer',
    'description' => 'TYPO3 extension to show random content for AB tests.',
    'category' => 'plugin',
    'author' => 'Stefan Froemken',
    'author_email' => 'sfroemken@jweiland.net',
    'clearCacheOnLoad' => 1,
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.19-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
