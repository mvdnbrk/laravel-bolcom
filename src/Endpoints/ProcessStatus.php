<?php

namespace Mvdnbrk\Laravel\Bolcom\Endpoints;

use Illuminate\Support\Facades\Http;

class ProcessStatus extends BaseEndpoint
{
    public function get(int $id): array
    {
        $response = Http::withToken($this->token)
            ->accept('application/vnd.retailer.v4+json')
            ->contentType('application/vnd.retailer.v4+json')
            ->get($this->getApiEndpoint().'/'.$id)
            ->throw();

        return $response->json();
    }
}
