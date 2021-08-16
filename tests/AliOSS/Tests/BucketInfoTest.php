<?php

namespace AliOSS\Tests;

use AliOSS\Model\BucketInfo;

/**
 * Class BucketInfoTest
 * @package AliOSS\Tests
 */
class BucketInfoTest extends \PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $bucketInfo = new BucketInfo('cn-beijing', 'name', 'today');
        $this->assertNotNull($bucketInfo);
        $this->assertEquals('cn-beijing', $bucketInfo->getLocation());
        $this->assertEquals('name', $bucketInfo->getName());
        $this->assertEquals('today', $bucketInfo->getCreateDate());
    }
}
