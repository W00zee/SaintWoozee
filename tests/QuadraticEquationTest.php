<?php

use PHPUnit\Framework\TestCase;
use levkina\QuadraticEquation;
use levkina\LevkinaException;

final class QuadraticEquationTest extends TestCase {
    public function testSolve() {
        $solver = new QuadraticEquation();

        // 6x-4=0
        $this->assertEquals(
            [4/6],
            $solver->solve(0, 6, -4)
        );
        
        // 2x2+x+0=0
        $this->assertEquals(
            [0, -0.5],
            $solver->solve(2, 1, 0)
        );

        // 2x2-2x+0=0
        $this->assertEquals(
            [1, 0],
            $solver->solve(2, -2, 0)
        );
        
        // a == 0
        $this->expectException(LevkinaException::class);
        $solver->solve(0, 0, 0);
        
        // Дискриминант < 0
        $this->expectException(LevkinaException::class);
        $solver->solve(1, -2, 2);
    }
}
?>