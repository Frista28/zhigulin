<?php
use zhigulin\MyLog;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class MyLogTest extends TestCase
{
    /**
     * @dataProvider providerLog
     */
    public function testMyLog($str)
    {
        $this->assertEquals('',  \zhigulin\MyLog::log($str));
    }
    public function providerLog ()
    {
        return array (
            array ("testA"),
            array ("testB"),
            array (123456),
            array (true),
        );
    }
    public function testLog()
    {
        $this->expectException(TypeError::class);
        $this->assertEquals('',  \zhigulin\MyLog::log(null));
        $this->assertEquals('',  \zhigulin\MyLog::log());
    }
    public function testWrite()
    {
        $this->assertEquals('',   \zhigulin\MyLog::write(123));
        $this->assertEquals('',   \zhigulin\MyLog::write("test"));
        $this->assertEquals('',   \zhigulin\MyLog::write());
    }
}
?>