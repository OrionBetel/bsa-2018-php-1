<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class CryptoCurrency implements Currency
{
    private $dailyPrice;

    public function __construct(float $price)
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
        return $this->dailyPrice;
    }

    public function getLogoUrl(): string
    {
        return 'https://s2.coinmarketcap.com/static/img/coins/32x32/';
    }
}
