<?php

namespace Cloudflare\API\Configurations;

class ZoneLockdown implements Configurations
{
    private $configs = [];

    public function addIP(string $value)
    {
        $this->configs[] = ['target' => 'ip', 'value' => $value];
    }

    public function addIPRange(string $value)
    {
        $this->configs[] = ['target' => 'ip_range', 'value' => $value];
    }

    public function getArray(): array
    {
        return $this->configs;
    }
}
