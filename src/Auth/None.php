<?php

namespace Cloudflare\API\Auth;

class None implements Auth
{
    public function getHeaders(): array
    {
        return [];
    }
}
