<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class Dogecoin extends CryptoCurrency
{
    public function getLogoUrl(): string
    {
        return parent::getLogoUrl() . '74.png';
    }
}
