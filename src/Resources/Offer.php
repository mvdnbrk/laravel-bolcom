<?php

namespace Mvdnbrk\Laravel\Bolcom\Resources;

class Offer extends BaseResource
{
    public string $ean;
    public array $condition;
    public array $pricing;
    public array $stock;
    public array $fulfilment;

    public function __construct()
    {
        $this->ean = '5053744409290';

        $this->condition = [
            'name' => 'NEW',
        ];

        $this->pricing = [
            'bundlePrices' => [
                'quantity' => 1,
                'unitPrice' => 36.95,
            ],
        ];

        $this->stock = [
            'amount' => 1,
            'managedByRetailer' => false,
        ];

        $this->fulfilment = [
            'method' => 'FBR',
            'deliveryCode' => '24uurs-17',
        ];
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
