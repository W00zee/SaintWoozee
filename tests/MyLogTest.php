<?php

use PHPUnit\Framework\TestCase;
use levkina\MyLog;

final class MyLogTest extends TestCase {
    public function testLog(): void {
        $this->expectOutputString("Привет!\n\r");
        MyLog::log("Привет!");
        MyLog::write();
    }

    public function testInstance(): void {
        $this->assertInstanceOf(MyLog::class, MyLog::Instance());
    }
}

?>