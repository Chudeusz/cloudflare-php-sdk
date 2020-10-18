<?php

namespace Cloudflare\API\Endpoints;

use Cloudflare\API\Adapter\Adapter;
use Cloudflare\API\Traits\BodyAccessorTrait;

class IPs implements API
{
    use BodyAccessorTrait;

    private $adapter;

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function listIPs(): \stdClass
    {
        $ips = $this->adapter->get('ips');
        $this->body = json_decode($ips->getBody());

        return $this->body->result;
    }
}
