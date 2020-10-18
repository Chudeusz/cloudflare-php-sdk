<?php

namespace Cloudflare\API\Auth;

class APIKey implements Auth
{
    private $email;
    private $apiKey;

    public function __construct(string $email, string $apiKey)
    {
        $this->email  = $email;
        $this->apiKey = $apiKey;
    }

    public function getHeaders(): array
    {
        return [
            'X-Auth-Email'   => $this->email,
            'X-Auth-Key' => $this->apiKey
        ];
    }
}
