<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2024   *
* / /_\ | | _____  _| |_/ /_ __ __ _ _ __   __| |_ _ __   __ _   | |_ ___  __ _ _ __ ___   *
* |  _  | |/ _ \ \/ / ___ \ '__/ _` | '_ \ / _` | | '_ \ / _` |  | __/ _ \/ _` | '_ ` _ \  *
* | | | | |  __/>  <| |_/ / | | (_| | | | | (_| | | | | | (_| |  | ||  __/ (_| | | | | | | *
* \_| |_/_|\___/_/\_\____/|_|  \__,_|_| |_|\__,_|_|_| |_|\__, |  \___\___|\__,_|_| |_| |_| *
*                                                         __/ |                            *
*                                                        |___/                             *
* ---------------------------------------------------------------------------------------- *
* This is commercial software, only users who have purchased a valid license and accept    *
* to the terms of the License Agreement can install and use this program.                  *
* ---------------------------------------------------------------------------------------- *
* website: https://cs-cart.alexbranding.com                                                *
*   email: info@alexbranding.com                                                           *
*******************************************************************************************/
namespace Tygh\Enum\Addons\Ab_intelligentAccessories;
class Operators
{
const EQUAL = 'eq';
const NOT_EQUAL = 'neq';
const GREATER_OR_EQUAL = 'gte';
const LESS_OR_EQUAL = 'lte';
const IN = 'in';
const NOT_IN = 'nin';
public static function getAll()
{
return [
self::EQUAL,
self::NOT_EQUAL,
self::GREATER_OR_EQUAL,
self::LESS_OR_EQUAL,
self::IN,
self::NOT_IN,
];
}
public static function getArithmeticAll()
{
return [
self::EQUAL,
self::NOT_EQUAL,
self::GREATER_OR_EQUAL,
self::LESS_OR_EQUAL,
];
}
public static function getArithmeticPositive()
{
return [
self::EQUAL,
self::GREATER_OR_EQUAL,
self::LESS_OR_EQUAL,
];
}
public static function getLogical()
{
return [
self::IN,
self::NOT_IN
];
}
}
