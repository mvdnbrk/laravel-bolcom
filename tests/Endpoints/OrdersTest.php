<?php

namespace Mvdnbrk\Laravel\Bolcom\Tests\Endpoints;

use Mvdnbrk\Laravel\Bolcom\Endpoints\Orders;
use Mvdnbrk\Laravel\Bolcom\Tests\TestCase;

class OrdersTest extends TestCase
{
    /** @test */
    public function it_can_get_open_orders()
    {
        $ordersEndpoint = new Orders();

        $orders = $ordersEndpoint->get();

        $this->assertArrayHasKey('orders', $orders);
    }
}
