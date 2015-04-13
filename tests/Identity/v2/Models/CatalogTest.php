<?php

namespace OpenStack\Test\Identity\v2\Models;

use OpenStack\Identity\v2\Models\Catalog;
use OpenStack\Test\TestCase;

class CatalogTest extends TestCase
{
    private $catalog;

    public function setUp()
    {
        parent::setUp();

        $this->catalog = new Catalog($this->client->reveal());
    }

    /**
     * @expectedException \RuntimeException
     */
    public function test_it_throws_exception_when_no_endpoint_url_is_found()
    {
        $this->catalog->getEndpointUrl('foo', 'bar', 'baz');
    }
} 