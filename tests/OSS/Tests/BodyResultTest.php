<?php

namespace AliOSS\Tests;

use AliOSS\Http\ResponseCore;
use AliOSS\Result\BodyResult;


class BodyResultTest extends \PHPUnit_Framework_TestCase
{
    public function testParseValid200()
    {
        $response = new ResponseCore(array(), "hi", 200);
        $result = new BodyResult($response);
        $this->assertTrue($result->isOK());
        $this->assertEquals($result->getData(), "hi");
    }

    public function testParseInvalid404()
    {
        $response = new ResponseCore(array(), null, 200);
        $result = new BodyResult($response);
        $this->assertTrue($result->isOK());
        $this->assertEquals($result->getData(), "");
    }
}
