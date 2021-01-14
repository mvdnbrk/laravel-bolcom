<?php

namespace Mvdnbrk\Laravel\Bolcom\Tests\Endpoints;

use Mvdnbrk\Laravel\Bolcom\Endpoints\ProcessStatus;
use Mvdnbrk\Laravel\Bolcom\Tests\TestCase;

class ProcessStatusTest extends TestCase
{
    /** @test */
    public function it_can_get_a_process_status_by_id()
    {
        $statusEndpoint = new ProcessStatus();

        $status = $statusEndpoint->get(1);

        $this->assertSame(1, $status['id']);
    }
}
