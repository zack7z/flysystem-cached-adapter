<?php

use TSLeague\Flysystem\Cached\CachedAdapter;
use PHPUnit\Framework\TestCase;

class InspectionTests extends TestCase {

    public function testGetAdapter()
    {
        $adapter = Mockery::mock('TSLeague\Flysystem\AdapterInterface');
        $cache = Mockery::mock('TSLeague\Flysystem\Cached\CacheInterface');
        $cache->shouldReceive('load')->once();
        $cached_adapter = new CachedAdapter($adapter, $cache);
        $this->assertInstanceOf('TSLeague\Flysystem\AdapterInterface', $cached_adapter->getAdapter());
    }
}
