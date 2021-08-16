<?php

namespace AliOSS\Tests;

use AliOSS\Result\HeaderResult;
use AliOSS\Http\ResponseCore;

/**
 * Class HeaderResultTest
 * @package AliOSS\Tests
 */
class HeaderResultTest extends \PHPUnit_Framework_TestCase
{
    public function testGetHeader()
    {
        $response = new ResponseCore(array('key' => 'value'), "", 200);
        $result = new HeaderResult($response);
        $this->assertTrue($result->isOK());
        $this->assertTrue(is_array($result->getData()));
        $data = $result->getData();
        $this->assertEquals($data['key'], 'value');
    }
}
