<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2023   *
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
namespace Ab_extendedComparisonWishlist;
use Ab_extendedComparisonWishlist\ComparisonPages\Repository as ComparisonPagesRepository;
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Tygh\Registry;

class ServiceProvider implements ServiceProviderInterface
{

public function register(Container $app)
{
$settings = Registry::ifGet('addons.ab__extended_comparison_wishlist', []);

$app['addons.ab__extended_comparison_wishlist.service'] = function () use ($settings) {
return new Service($settings, \Tygh::$app['session']);
};

$app['addons.ab__extended_comparison_wishlist.repository'] = function () use ($settings) {
return new Repository($settings, \Tygh::$app['db']);
};

$app['addons.ab__ecw_comparison_pages.repository'] = function () use ($settings) {
return new ComparisonPagesRepository($settings, \Tygh::$app['db']);
};

$app['addons.ab__ecw_comparison_pages.demodata_service'] = function () {
return new Demodata\DemodataService();
};
}
}
