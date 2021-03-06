<?php
return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'concat_space' => [
            'spacing' => 'one'
        ],
        'ordered_imports' => true,
        'phpdoc_order' => true,
        'strict_comparison' => true,
        'strict_param' => true,
        'array_syntax' => [
            'syntax' => 'short'
        ],
        'php_unit_method_casing' => [
            'case' => 'snake_case'
        ]
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude([
                'vendor',
            ])
            ->in(__DIR__)
    )
    ->setUsingCache(true)
;
