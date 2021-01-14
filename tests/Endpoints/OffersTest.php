<?php

namespace Mvdnbrk\Laravel\Bolcom\Tests\Endpoints;

use Mvdnbrk\Laravel\Bolcom\Endpoints\Offers;
use Mvdnbrk\Laravel\Bolcom\Resources\Offer;
use Mvdnbrk\Laravel\Bolcom\Tests\TestCase;

class OffersTest extends TestCase
{
    /** @test */
    public function it_can_create_an_offer()
    {
        $offersEndpoint = new Offers();

        $offer = $offersEndpoint->create(new Offer);

        $this->assertSame('CREATE_OFFER', $offer['eventType']);
    }
}
