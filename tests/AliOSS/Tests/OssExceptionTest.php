<?php

namespace AliOSS\Tests;

use AliOSS\Core\OssException;

class OssExceptionTest extends \PHPUnit_Framework_TestCase
{
    public function testOSS_exception()
    {
        try {
            throw new OssException("ERR");
            $this->assertTrue(false);
        } catch (OssException $e) {
            $this->assertNotNull($e);
            $this->assertEquals($e->getMessage(), "ERR");
        }
    }
}
