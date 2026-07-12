<?php

namespace Tygh\Tests\Unit\Addons\RfStockParser;

use Tygh\RfStockParser\PriceDataType\Xml;
use Tygh\RfStockParser\PriceDataType\XmlPreset\PresetDefault;
use Tygh\RfStockParser\ProcessingData;

/**
 * @internal
 *
 * @coversNothing
 */
class XmlTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider elementsProvider
     *
     * @param mixed $fact
     * @param mixed $expected
     * @param mixed $values
     */
    public function testGetElements($fact, $expected, $values = [])
    {
        $preset = new PresetDefault();
        $actual = $preset->getElements($fact[1], $fact[0], $fact[2]);
        $this->assertEquals($expected, $actual[1]);
    }

    /**
     * @dataProvider elementsProvider
     *
     * @param mixed $fact
     * @param mixed $expected
     * @param mixed $values
     */
    public function testGetValues($fact, $expected, $values = [])
    {
        $parser = new Xml();
        $parser
            ->setFilePatch($fact[1])
            ->setColumns($fact[3])
            ->setColumnSettings(['first_row' => 0, 'custom_node_name' => $fact[0]])
            ->setString($fact[1])
        ;
        $processingData = new ProcessingData();

        foreach ($parser->getData($processingData) as $actual) {
            $this->assertEquals($values, $actual);
        }
    }

    public function elementsProvider()
    {
        return [
            [
                [
                    'offers/offer',
                    '<offers>
                        <offer id="offer60" available="true" >
                            <url>https://test.url</url>
                            <price>10</price>
                            <oldprice>15903</oldprice>
                            <picture>https://test.ru/1.png</picture>
                            <stock_quantity>7</stock_quantity>
                        </offer>
                    </offers>',
                    [],
                    [
                        '/offer/@id' => 'manufacturer_code',
                        '/offer/price' => 'price_usergroup0',
                        '/offer/picture' => 'image',
                    ],
                ],
                [
                    '/offer' => ['id', 'available'],
                    '/offer/oldprice' => ['nodeValue'],
                    '/offer/picture' => ['nodeValue'],
                    '/offer/price' => ['nodeValue'],
                    '/offer/stock_quantity' => ['nodeValue'],
                    '/offer/url' => ['nodeValue'],
                ],
                [
                    [
                        'manufacturer_code' => 'offer60',
                        'price_usergroup0' => '10',
                        'image' => [
                            'https://test.ru/1.png',
                        ],
                    ],
                ],
            ],
            [
                [
                    'offers/offer',
                    '<offers>
                        <offer id="offer60" available="true" >
                            <url>https://test.url</url>
                            <price>10</price>
                            <price>15</price>
                            <oldprice>15903</oldprice>
                            <picture>https://test.ru/1.png</picture>
                            <picture>https://test.ru/2.png</picture>
                            <stock_quantity>7</stock_quantity>
                        </offer>
                    </offers>',
                    ['offers/offer/price'],
                    [
                        '/offer/@id' => 'manufacturer_code',
                        '/offer/price[2]' => 'price_usergroup0',
                        '/offer/picture' => 'image',
                    ],
                ],
                [
                    '/offer' => ['id', 'available'],
                    '/offer/oldprice' => ['nodeValue'],
                    '/offer/picture' => ['nodeValue'],
                    '/offer/price[1]' => ['nodeValue'],
                    '/offer/price[2]' => ['nodeValue'],
                    '/offer/stock_quantity' => ['nodeValue'],
                    '/offer/url' => ['nodeValue'],
                ],
                [
                    [
                        'manufacturer_code' => 'offer60',
                        'price_usergroup0' => '15',
                        'image' => [
                            'https://test.ru/1.png',
                            'https://test.ru/2.png',
                        ],
                    ],
                ],
            ],
            [
                [
                    'offers/offer',
                    '<offers>
                        <offer id="offer60" available="true" amount="8">
                            <url>https://test.url</url>
                            <price name="rrc">
                                <value>10</value>
                            </price>
                            <price name="opt">
                                <value>5</value>
                            </price>
                            <oldprice>15903</oldprice>
                            <picture>https://test.ru/1.png</picture>
                            <picture>https://test.ru/2.png</picture>
                            <param name="Ориентация">Правосторонняя</param>
                            <param name="Тип звукоснимателей">Пассивные</param>
                        </offer>
                    </offers>',
                    ['offers/offer/price'],
                    [
                        '/offer/@id' => 'manufacturer_code',
                        '/offer/@amount' => 'amount',
                        '/offer/price[1]/value' => 'price_usergroup0',
                        '/offer/price[2]/value' => 'opt_price',
                    ],
                ],
                [
                    '/offer' => ['id', 'available', 'amount'],
                    '/offer/oldprice' => ['nodeValue'],
                    '/offer/picture' => ['nodeValue'],
                    '/offer/price[1]' => ['name'],
                    '/offer/price[1]/value' => ['nodeValue'],
                    '/offer/price[2]' => ['name'],
                    '/offer/price[2]/value' => ['nodeValue'],
                    '/offer/url' => ['nodeValue'],
                    '/offer/param[@name="Ориентация"]' => ['name', 'nodeValue'],
                    '/offer/param[@name="Тип звукоснимателей"]' => ['name', 'nodeValue'],
                ],
                [
                    [
                        'manufacturer_code' => 'offer60',
                        'amount' => '8',
                        'opt_price' => '5',
                        'price_usergroup0' => '10',
                    ],
                ],
            ],
            [
                [
                    'offers/offer',
                    '<offers>
                        <offer id="offer60" available="true" amount="8">
                            <url>https://test.url</url>
                            <price name="rrc">
                                <value>10</value>
                            </price>
                            <price name="opt">
                                <value>5</value>
                            </price>
                            <images>
                                <image url="http://test.com/1.png"/>
                                <image url="http://test.com/2.png"/>
                                <image url="http://test.com/3.png"/>
                            </images>
                            <oldprice>15903</oldprice>
                            <picture>https://test.ru/1.png</picture>
                            <picture>https://test.ru/2.png</picture>
                            <stock_quantity>7</stock_quantity>
                        </offer>
                    </offers>',
                    ['offers/offer/images/image'],
                    [
                        '/offer/@id' => 'manufacturer_code',
                        '/offer/@amount' => 'amount',
                        '/offer/price[@name="rrc"]/value' => 'price_usergroup0',
                        '/offer/price[@name="opt"]/value' => 'opt_price',
                        '/offer/images/image/@url' => 'image',
                    ],
                ],
                [
                    '/offer' => ['id', 'available', 'amount'],
                    '/offer/oldprice' => ['nodeValue'],
                    '/offer/picture' => ['nodeValue'],
                    '/offer/price[@name="opt"]' => ['name'],
                    '/offer/price[@name="opt"]/value' => ['nodeValue'],
                    '/offer/price[@name="rrc"]' => ['name'],
                    '/offer/price[@name="rrc"]/value' => ['nodeValue'],
                    '/offer/stock_quantity' => ['nodeValue'],
                    '/offer/url' => ['nodeValue'],
                    '/offer/images/image' => ['url'],
                ],
                [
                    [
                        'manufacturer_code' => 'offer60',
                        'amount' => '8',
                        'opt_price' => '5',
                        'price_usergroup0' => '10',
                        'image' => [
                            'http://test.com/1.png',
                            'http://test.com/2.png',
                            'http://test.com/3.png',
                        ],
                    ],
                ],
            ],
            [
                [
                    'Таблица/element',
                    '<Таблица Поставщик="Lightstar" ДатаАкуальности="20.01.2021 17:06:57">
                        <element>
                            <Артикул Артикул="002120"/>
                            <Наименование Наименование="002120 Светильник SOLO RAY CR MR16/HP16 ХРОМ/ПРОЗРАЧНЫЙ (в комплекте)"/>
                            <Статус Статус=""/>
                            <Цены Розничная="929" Оптовая="563"/>
                            <Остаток Остаток="200"/>
                            <Ожидается Всего="200" ПервоеПоступление="200" ДатаПервогоПоступления="31.12.21"/>
                            <Описание Описание="Врезное отверстие: d65 h60; Внешние габариты: D100 H28; Материал - основание/плафон: металл / Crystalline; Цвет-основание/плафон: хром/прозрачный; Лампа: 12В/220В MR16/HP16 Gu5.3/GU10 max 50Вт;"/>
                            <НаименованиеИнтернетМагазина НаименованиеИнтернетМагазина="Светильник точечный встраиваемый декоративный под заменяемые галогенные или LED лампы Solo ray Lightstar 002120"/>
                            <ПроцентСкидки ПроцентСкидки=""/>
                        </element>
                    </Таблица>',
                    [
                        'Таблица/element/Артикул',
                        'Таблица/element/Наименование',
                        'Таблица/element/Цены',
                        'Таблица/element/Статус',
                        'Таблица/element/Остаток',
                        'Таблица/element/Ожидается',
                        'Таблица/element/Описание',
                        'Таблица/element/НаименованиеИнтернетМагазина',
                        'Таблица/element/ПроцентСкидки',
                    ],
                    [
                        '/element/Артикул/@Артикул' => 'manufacturer_code',
                        '/element/Остаток/@Остаток' => 'amount',
                        '/element/Цены/@Розничная' => 'price_usergroup0',
                        '/element/Цены/@Оптовая' => 'price_usergroup1',
                    ],
                ],
                [
                    '/element/Артикул' => ['Артикул'],
                    '/element/Наименование' => ['Наименование'],
                    '/element/Статус' => ['Статус'],
                    '/element/Цены' => ['Розничная', 'Оптовая'],
                    '/element/Остаток' => ['Остаток'],
                    '/element/Ожидается' => ['Всего', 'ПервоеПоступление', 'ДатаПервогоПоступления'],
                    '/element/Описание' => ['Описание'],
                    '/element/НаименованиеИнтернетМагазина' => ['НаименованиеИнтернетМагазина'],
                    '/element/ПроцентСкидки' => ['ПроцентСкидки'],
                ],
                [
                    [
                        'manufacturer_code' => '002120',
                        'amount' => '200',
                        'price_usergroup0' => '929',
                        'price_usergroup1' => '563',
                    ],
                ],
            ],
        ];
    }
}
