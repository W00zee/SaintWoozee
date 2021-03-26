<?php

use PHPUnit\Framework\TestCase;
use levkina\LinearEquation;
use levkina\LevkinaException;

final class LinearEquationTest extends TestCase {
    public function testSolveLinearEquation() {
        $solver = new LinearEquation();

        // 6x-4=0
        $this->assertEquals(
            [4/6],
            $solver->solveLinearEquation(6, -4)
        );

        // x+2=0
        $this->assertEquals(
            [-2],
            $solver->solveLinearEquation(1, 2)
        );

        // a == 0
        $this->expectException(LevkinaException::class);
        $solver->solveLinearEquation(0, 1);
    }
}

?>