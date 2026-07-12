<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2025   *
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
namespace Tygh\Addons\Ab_seoBrands\SmartyEngine\Filters\Pre;
use Smarty\Filter\FilterInterface;
class AddHook implements FilterInterface
{
public function filter($code, \Smarty\Template $template)
{
if (strpos($template->template_resource, 'views/product_filters/manage.tpl') !== false) {
$code = str_replace(
'href="product_filters.update?filter_id=`$filter.filter_id`&return_url=$r_url&in_popup"'
, 'href="product_filters.update?filter_id=`$filter.filter_id`&return_url=$r_url" no_popup=true'
, $code
);
}
if (strpos($template->template_resource, 'views/product_filters/update.tpl') !== false) {
$code = preg_replace('/<ul class="nav nav-tabs">(.+)<\/ul>/sU', '<ul class="nav nav-tabs">'.PHP_EOL.'{hook name="product_filters:ab__sf_tabs"}$1{/hook}'.PHP_EOL.'</ul>', $code);
$code = preg_replace('/(<div class="hidden" id="content_tab_categories)/', '{hook name="product_filters:ab__sf_tabs_content"}{/hook}'.PHP_EOL.'$1', $code);
$code = preg_replace('/{capture name="buttons"}(.+){\/capture}/sU', '{capture name="buttons"}'.PHP_EOL.'{hook name="product_filters:ab__sf_buttons"}$1{/hook}'.PHP_EOL.'{/capture}', $code);
}
return $code;
}
}
