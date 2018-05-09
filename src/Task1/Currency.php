<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

interface Currency
{
    public function getName(): string;

    public function getDailyPrice(): float;

    public function getLogoUrl(): string;
}

class CryptoCurrency implements Currency
{
    private $dailyPrice;

    public function __construct(int $price)
    {
        $this->dailyPrice = $price;
    }

    public function getName(): string 
    {
        $className = get_class($this);
        $lastBackslash = strrpos($className, '\\');
        $className = substr($className, $lastBackslash + 1);
        return $className;
    }

    public function getDailyPrice(): float
    {
        return (float) $this->dailyPrice;
    }

    public function getLogoUrl(): string
    {
        return 'https://s2.coinmarketcap.com/static/img/coins/32x32/';
    }
}

class Bitcoin extends CryptoCurrency
{
    public function getLogoUrl(): string
    {
        return parent::getLogoUrl() . '1.png';
    }
}

class Ethereum extends CryptoCurrency
{
    public function getLogoUrl(): string
    {
        return parent::getLogoUrl() . '1027.png';
    }
}

class Dogecoin extends CryptoCurrency
{
    public function getLogoUrl(): string
    {
        return parent::getLogoUrl() . '74.png';
    }
}
