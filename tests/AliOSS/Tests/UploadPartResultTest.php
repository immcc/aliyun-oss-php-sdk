<?php

namespace AliOSS\Tests;


use AliOSS\Core\OssException;
use AliOSS\Result\UploadPartResult;
use AliOSS\Http\ResponseCore;

class UploadPartResultTest extends \PHPUnit_Framework_TestCase
{
    private $validHeader = array('etag' => '7265F4D211B56873A381D321F586E4A9');
    private $invalidHeader = array();

    public function testParseValidHeader()
    {
        $response = new ResponseCore($this->validHeader, "", 200);
        $result = new UploadPartResult($response);
        $eTag = $result->getData();
        $this->assertEquals('7265F4D211B56873A381D321F586E4A9', $eTag);
    }

    public function testParseInvalidHeader()
    {
        $response = new ResponseCore($this->invalidHeader, "", 200);
        try {
            new UploadPartResult($response);
            $this->assertTrue(false);
        } catch (OssException $e) {
            $this->assertEquals('cannot get ETag', $e->getMessage());
        }
    }
}
