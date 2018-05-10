<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {
        $table = "<table class=\"table table-striped\" style=\"width:500px; margin:25px auto 0;\">
                    <thead>
                        <tr>
                            <th scope=\"col\">Logo</th>
                            <th scope=\"col\">Name and Price</th>
                        </tr>
                    </thead>
                 <tbody>";

        foreach ($market->getCurrencies() as $currency) {
            $table .= "<tr>
                          <td>
                              <img src=\"{$currency->getLogoUrl()}\">
                          </td>
                          <td>{$currency->getName()}: {$currency->getDailyPrice()}</td>
                       </tr>";
        }            
        
        $table .= '</tbody></table>';

        return $table;
    }
}