<?php

use zhigulin\Square;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class SquareTest extends TestCase {
    /**
     * @dataProvider providerSolve
     */
    public function testSolve($a, $b, $c, $d) {
        $FunctionTest = new Square();
        $this->assertEquals($d, $FunctionTest->solve($a, $b, $c));
    }
    public function providerSolve ()
    {
        return array (
            array (9, 2, 1,[-32]),
            array (3, -6, 2,[0.42264973081037427, 1.5773502691896255]),
            array (1, 3, -5,[-4.1926, 1.1926]),
            array (1, 2, 3, [-8]),

        );
    }
    /**
     * @dataProvider providerSolveException
     */
    public function testSolveException($a, $b, $c, $d) {
        $this->expectException(\zhigulin\ZhigulinException::class);
        $FunctionTest = new Square();
        $this->assertEquals($d, $FunctionTest->solve($a, $b, $c));
    }
    public function providerSolveException (): array
    {
        return array (
            array (0, 0, 0, 0),
            array (4, 2, 1, 0),
            array ('a', 'b', 'c', 0),
        );
    }
}
?>