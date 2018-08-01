<?php

namespace Eater\AssertSequence;

if (!function_exists(__NAMESPACE__ . "\\createSequenceModel")) {
    function createSequenceModel($phpunit, $model, $func = 'assertEquals')
    {
        return new SequenceModel($phpunit, $model, $func);
    }
}