<?php

class NoneTest extends TestCase
{
    public function testGetHeaders()
    {
        $auth    = new \Cloudflare\API\Auth\None();
        $headers = $auth->getHeaders();

        $this->assertEquals([], $headers);
    }
}
