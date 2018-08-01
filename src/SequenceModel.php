<?php

namespace Eater\AssertSequence;

class SequenceModel
{
    private $phpunit;
    private $model;
    private $func;
    private $pointer = 0;

    /**
     * SequenceModel constructor.
     * @param $phpunit
     * @param $model
     * @param $func
     */
    public function __construct($phpunit, $model, $func)
    {
        $this->phpunit = $phpunit;
        $this->model = $model;
        $this->func = $func;
    }

    public function __invoke($value, $message = '')
    {
        return $this->phpunit->{$this->func}($this->model[$this->pointer++], $value, $message);
    }
}