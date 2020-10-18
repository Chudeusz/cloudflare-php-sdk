<?php

namespace Cloudflare\API\Configurations;

class UARules implements Configurations
{
    private $configs = [];

    public function addUA(string $value)
    {
        $this->configs[] = ['target' => 'ua', 'value' => $value];
    }

    public function getArray(): array
    {
        return $this->configs;
    }
}
