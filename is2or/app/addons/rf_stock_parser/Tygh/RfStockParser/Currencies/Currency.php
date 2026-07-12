<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser\Currencies;

use Tygh\RfStockParser\Currencies\Sources\Source;

class Currency
{
    private $source;

    public function __construct($source)
    {
        $this->source = $source;
    }

    public static function getDefaultCurrency()
    {
        static $defaultCurrency;

        if (empty($defaultCurrency)) {
            $defaultCurrency = db_get_field('SELECT currency_code FROM ?:currencies WHERE is_primary = "Y"');
        }

        return $defaultCurrency;
    }

    // при неудачной конвертации возвращает 0
    public function convert($price, $toCurrency)
    {
        $defaultCurrency = $this->getDefaultCurrency();

        // тут нечего конвертировать
        if ($defaultCurrency == $toCurrency) {
            return $price;
        }

        /** @var Source $source */
        $source = Source::getSource($this->source);
        $currencies = $source->getList();

        if (!isset($currencies[$toCurrency])) {
            return 0;
        }

        // если дефолтная валюта не является базовой валютой источника вычислим значение валюты на основе базы
        // таким образом мы может сменить базовую валюту источника
        // и при желании можно будет менять источники, не привязываясь к базовой валюте источника
        if ($defaultCurrency != $source->getBase()) {
            $rateByDefault = 1 / $currencies[$toCurrency];
            return $price * $rateByDefault * ($currencies[$defaultCurrency] ?? 0);
        }

        return $price * $currencies[$toCurrency];
    }
}
