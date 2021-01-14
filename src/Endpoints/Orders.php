<?php

namespace Mvdnbrk\Laravel\Bolcom\Endpoints;

use Illuminate\Support\Facades\Http;

class Orders extends BaseEndpoint
{
    public function get(): array
    {
        $response = Http::withToken($this->token)
            ->accept('application/vnd.retailer.v4+json')
            ->contentType('application/vnd.retailer.v4+json')
            ->get($this->getApiEndpoint())
            ->throw();

        return $response->json();
    }
}
