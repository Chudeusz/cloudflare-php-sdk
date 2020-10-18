<?php

namespace Cloudflare\API\Endpoints;

use Cloudflare\API\Adapter\Adapter;

interface API
{
    public function __construct(Adapter $adapter);
}
