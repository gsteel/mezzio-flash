<?php

declare(strict_types=1);

namespace MezzioTest\Flash;

use Mezzio\Flash\ConfigProvider;
use PHPUnit\Framework\TestCase;

class ConfigProviderTest extends TestCase
{
    private ConfigProvider $provider;

    public function setUp(): void
    {
        $this->provider = new ConfigProvider();
    }

    public function testReturnedArrayContainsDependencies(): void
    {
        $config = ($this->provider)();
        self::assertArrayHasKey('dependencies', $config);
        self::assertIsArray($config['dependencies']);
    }
}
