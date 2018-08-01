<?php

use function Eater\AssertSequence\createSequenceModel;
use PHPUnit\Framework\TestCase;

class SequenceModelTest extends TestCase
{
    public function testFunc() {
        $assert = createSequenceModel($this, [1, 2, 3]);

        foreach ([1,2,3] as $item) {
            $assert($item);
        }
    }
}
