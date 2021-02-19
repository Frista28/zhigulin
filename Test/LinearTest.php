<?php

use zhigulin\Linear;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class LinearTest extends TestCase {
    /**
     * @dataProvider providerLinear
     */
    public function testlinear($a, $b, $res) {
        $FunctionTest = new Linear();
        $this->assertEquals($res, $FunctionTest->linear($a, $b));
    }
    public function providerLinear ()
    {
        return array (
            array (5, -2, 0.4),array (-2, 6, 3),array (934, 28, -3),
        );
    }
    /**
     * @dataProvider providerLinearException
     */
    public function testLinearException($a, $b, $res) {
        $this->expectException(\zhigulin\ZhigulinException::class);
        $FunctionTest = new Linear();
        $this->assertEquals($res, $FunctionTest->linear($a, $b));
    }
    public function providerLinearException ()
    {
        return array (
            array (0, 1, -1),array (0, 0, 0),array (null, null, 0),
        );
    }
}
?>