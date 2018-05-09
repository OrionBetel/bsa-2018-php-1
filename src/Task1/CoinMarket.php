<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class CoinMarket
{
    private $currencies = [];

    public function addCurrency(Currency $currency): void
    {
        $this->currencies[] = $currency;
    }

    public function maxPrice(): float
    {

        $prices = array_map(
            function (Currency $currency)
            {
                return $currency->getDailyPrice();
            }, 
            $this->currencies
        );

        return max($prices);
    }

    public function getCurrencies(): array
    {
        return $this->currencies;
    }
}
