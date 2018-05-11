<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class Ethereum extends CryptoCurrency
{
    public function getLogoUrl(): string
    {
        return parent::getLogoUrl() . '1027.png';
    }
}
