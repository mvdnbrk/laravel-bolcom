<?php

namespace Mvdnbrk\Laravel\Bolcom\Endpoints;

use Illuminate\Support\Facades\Http;
use Mvdnbrk\Laravel\Bolcom\Resources\Offer;

class Offers extends BaseEndpoint
{
    public function create(Offer $offer): array
    {
        $response = Http::withToken($this->token)
            ->accept('application/vnd.retailer.v4+json')
            ->contentType('application/vnd.retailer.v4+json')
            ->post($this->getApiEndpoint(), $offer->toArray())
            ->throw(function ($response, $e) {
                ray($response->json());
            });

        return $response->json();
    }
}
