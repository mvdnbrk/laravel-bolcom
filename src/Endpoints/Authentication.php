<?php

namespace Mvdnbrk\Laravel\Bolcom\Endpoints;

use Illuminate\Support\Facades\Http;

class Authentication
{
    public function token(): string
    {
        return cache()->get(
            $this->accessTokenCacheKey(),
            fn () => $this->cacheToken()
        );
    }

    private function cacheToken(): string
    {
        $value = $this->requestToken();
        $token = data_get($value, 'access_token');

        cache()->put($this->accessTokenCacheKey(), $token, data_get($value, 'expires_in'));

        return $token;
    }

    private function requestToken(): array
    {
        return Http::withBasicAuth(config('bol.key'), config('bol.secret'))
            ->post($this->getApiEndpoint())
            ->throw()
            ->json();
    }

    private function getApiEndpoint(): string
    {
        return 'https://login.bol.com/token?grant_type=client_credentials';
    }

    private function accessTokenCacheKey(): string
    {
        return 'mvdnbrk.laravel.bolcom.access_token';
    }
}
