<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('vendor')
;

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        'object_operator_without_whitespace' => true,
        'no_unused_imports' => true,
        'no_whitespace_in_blank_line' => true,
        'standardize_not_equals' => true,
    ])
    ->setFinder($finder)
;
