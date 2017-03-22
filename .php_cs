<?php

$rules = require __DIR__ . '/vendor/arbor-education/php-coding-standard/rules.php';

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('vendor')
;

return PhpCsFixer\Config::create()
    ->setRules($rules)
    ->setFinder($finder)
;
