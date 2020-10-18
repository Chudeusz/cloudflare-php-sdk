<?php

use Cloudflare\API\Configurations\PageRulesTargets;

class PageRulesTargetTest extends TestCase
{
    public function testGetArray()
    {
        $targets = new PageRulesTargets('junade.com/*');
        $array = $targets->getArray();

        $this->assertCount(1, $array);
        $this->assertEquals('junade.com/*', $array[0]['constraint']['value']);
        $this->assertEquals('matches', $array[0]['constraint']['operator']);
    }
}
