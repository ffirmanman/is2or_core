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
namespace Tygh\Addons\Ab_AdvancedSitemap;
use Exception;
use SimpleXMLElement;
use Tygh\Enum\SiteArea;
use Tygh\Enum\YesNo;
use Tygh\Exceptions\DeveloperException;
use Tygh\Languages\Languages;
use Tygh\Registry;
use Tygh\Storefront\Storefront;

class XmlBuilder
{
const SITEMAP_FILE_HEADER = <<<HEAD
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">\n
HEAD;
const IMAGES_FILE_HEADER = <<<HEAD
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">\n
HEAD;
const FILE_FOOTER = <<<FOOT
</urlset>
FOOT;

protected $protocol;

protected $storefront;

protected $sitemap_dir_path;

protected $lang_codes_list;

protected $location;

protected $links_counter = 0;

protected $files_counter = [

'products' => 0,

'categories' => 0,

'feature_variants' => 0,

'custom_links' => 0,

'pages' => 0,

'blog' => 0,

'companies' => 0,

'images' => 0,

'other_links' => 0,
];

protected $image_path_key;

protected $file_handler;

protected $settings;

public function __construct(Storefront $storefront, array $settings)
{
$this->storefront = $storefront;
$this->protocol = fn_get_storefront_protocol(null, $storefront->storefront_id);
$this->sitemap_dir_path = fn_ab__as_get_sitemap_dir($storefront->storefront_id);
$this->lang_codes_list = $this->getStorefrontLanguages();
$this->location = $this->protocol . '://' . $storefront->url;
$this->image_path_key = ($this->protocol == 'http') ? 'http_image_path' : 'image_path';
$this->settings = $settings;
$config = Registry::get('config');
$config['http_location'] = $config['https_location'] = $config['current_location'] = $this->location;
Registry::set('config', $config);
}

public function __get($property)
{
if (property_exists($this, $property)) {
return $this->$property;
}
throw new DeveloperException("Property {$property} does not exist in class " . __CLASS__);
}

public function __isset($property)
{
return property_exists($this, $property);
}

public function buildIndexSitemap()
{
if ($this->isOpenedFile()) {
$this->closeFile();
}
$index_file = new SimpleXMLElement('<sitemapindex></sitemapindex>');
$index_file->addAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
foreach (array_keys($this->files_counter) as $file_type) {
for ($i = 1; $i <= $this->files_counter[$file_type]; $i++) {
$link = $this->location . $this->settings['xml_sitemap_directory'] . $file_type . $i . '.xml';
$index_file->addChild('sitemap')->addChild('loc', $link);
}
}
$filename = $this->sitemap_dir_path . 'sitemap.xml';

fn_set_hook('ab__as_build_index_sitemap', $index_file, $builder, $filename);
$index_file->asXML($filename);
return true;
}

public function writeLinksToFile($object_type, $value)
{
$lang_code = Registry::ifGet('runtime.ab__as.generation.lang_code', '');

fn_set_hook('ab__as_write_links_to_file_pre', $object_type, $value, $lang_code, $this);
$links = $this->generateLinks($object_type, $value, $lang_code);

if (empty($links) || empty($links[DEFAULT_LANGUAGE])) {
return;
}
static $date = null;
if (is_null($date)) {
$date = date('c', TIME);
}
$settings_var = $this->getSettingsObjectFromObjectType($object_type);
$this->checkCounter(count($links), $object_type === 'blog' ? $object_type : $settings_var);
$links[DEFAULT_LANGUAGE] = htmlspecialchars($links[DEFAULT_LANGUAGE], ENT_QUOTES, 'UTF-8');
$text = "<url><loc>{$links[DEFAULT_LANGUAGE]}</loc>\n";
if (!empty($this->settings[$settings_var . '_changefreq']) && $this->settings[$settings_var . '_changefreq'] !== 'do_not_use') {
$text .= "<changefreq>{$this->settings[$settings_var . '_changefreq']}</changefreq>\n";
}
if (!empty($this->settings[$settings_var . '_priority']) && $this->settings[$settings_var . '_priority'] !== 'do_not_use') {
$text .= "<priority>{$this->settings[$settings_var . '_priority']}</priority>\n";
}
if (YesNo::toBool($this->settings['add_lastmod'])) {
$text .= '<lastmod>' . $date . "</lastmod>\n";
}
foreach ($links as $lang_code => $url) {
$url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
if ($lang_code === DEFAULT_LANGUAGE) {
$text .= '<xhtml:link rel="alternate" hreflang="x-default" href="' . $url . '" />' . PHP_EOL;
}
$text .= '<xhtml:link rel="alternate" hreflang="' . $this->settings['languages_locales'][$lang_code] . '" href="' . $url . '" />' . PHP_EOL;
fn_set_hook('ab__advanced_sitemap_write_links_to_file', $object_type, $value, $settings_var, $this->settings, $text);
}
$text .= "</url>\n";
fwrite($this->file_handler, $text);
}

public function writeImagesLinksToFile(array $images, $product_id)
{
foreach ($this->lang_codes_list as $lang_code) {

fn_set_hook('ab__as_write_images_to_file', $images, $product_id, $lang_code, $this);
if (!$images) {
continue;
}
$product_links = $this->generateLinks('product', $product_id, $lang_code);
$images_links = $this->generateImagesLinks($images);
$this->checkCounter(count($product_links) * count($images_links), 'images');
$product_name = fn_get_product_name($product_id, $lang_code);
$original_product_name = $product_name;
foreach ($product_links as $product_link) {
$product_link = htmlspecialchars($product_link, ENT_QUOTES, 'UTF-8');
$text = <<<ITEM
<url>
\t<loc>{$product_link}</loc>\n
ITEM;
foreach ($images_links as $image_id => $image_link) {

fn_set_hook('ab__advanced_sitemap_product_images_title', $image_id, $image_link, $product_id, $lang_code, $product_name, $this->settings);
$image_link = htmlspecialchars($image_link, ENT_QUOTES, 'UTF-8');
$product_name = htmlspecialchars($product_name, ENT_XML1, 'UTF-8');
if (!trim($image_link)) {
continue;
}
$text .= <<<ITEM
\t<image:image><image:loc>{$image_link}</image:loc>\n
ITEM;
if (!empty($product_name) && $this->settings['add_title_and_caption'] === YesNo::YES) {
$text .= <<<ITEM
<image:title>{$product_name}</image:title>\n<image:caption>{$product_name}</image:caption>
ITEM;
}
$text .= <<<ITEM
</image:image>\n
ITEM;
$product_name = $original_product_name;
}
$text .= <<<ITEM
</url>\n
ITEM;
fwrite($this->file_handler, $text);
}
}
}

public function addSitemapFile($filename)
{
if ($this->isOpenedFile()) {
$this->closeFile();
}
if (file_exists($filename) && fn_rename($filename, $this->sitemap_dir_path . 'sitemap ' . ($this->files_counter[$filename] + 1) . '.xml') !== false) {
$this->files_counter[$filename]++;
}
}

protected function generateLinks($object_type, $value, $lang_code = '')
{
switch ($object_type) {
case 'product':
$link = 'products.view?product_id=' . $value;
break;
case 'category':
$link = 'categories.view?category_id=' . $value;
break;
case 'page': case 'blog':
$link = 'pages.view?page_id=' . $value;
break;
case 'extended':
$link = 'product_features.view?variant_id=' . $value;
break;
case 'companies':
$link = 'companies.view?company_id=' . $value;
break;
case 'custom_link':
$link = $value;
break;
default:
fn_set_hook('sitemap_link_object', $link, $object_type, $value);
}
$sep = strpos($link, '?') === false ? '?' : '&';
$default_lang_link = $link . $sep . 'storefront_id=' . $this->storefront->storefront_id;
$links = [];
if ($object_type === 'custom_link' && mb_substr($link, 0, 1) === '/') {
$links[DEFAULT_LANGUAGE] = $this->location . $link;
} elseif (count($this->lang_codes_list) === 1) {
$links[DEFAULT_LANGUAGE] = fn_url($default_lang_link, SiteArea::STOREFRONT, $this->protocol, $this->lang_codes_list[0]);
} elseif (!empty($lang_code)) {
$links[$lang_code] = fn_url($default_lang_link . '&sl=' . $lang_code, SiteArea::STOREFRONT, $this->protocol, $lang_code);
} else {
foreach ($this->lang_codes_list as $lang_code) {
$links[$lang_code] = fn_url($lang_code === DEFAULT_LANGUAGE ? $default_lang_link : $default_lang_link . '&sl=' . $lang_code, SiteArea::STOREFRONT, $this->protocol, $lang_code);
}
}

fn_set_hook('sitemap_link', $link, $object_type, $value, $this->lang_codes_list, $links);
return $links;
}

protected function generateImagesLinks($images)
{
$image_links = [];
foreach ($images as $image) {
fn_attach_absolute_image_paths($image, 'detailed');
$image_links[$image['images_image_id']] = $image[$this->image_path_key];
}
return $image_links;
}

protected function checkCounter($count_links, $filename)
{
$filename_real = $filename;
static $last_name = '';

fn_set_hook('ab__as_check_counter', $count_links, $filename, $filename_real, $last_name, $this);
if ($last_name !== '' && $last_name !== $filename) {
$this->closeFile();
}
$last_name = $filename;
if (!$this->isOpenedFile()) {
$this->files_counter[$filename]++;
$this->links_counter = 0;
$this->openFile($filename_real, $this->files_counter[$filename]);
}
$stat = fstat($this->file_handler);
if (($count_links + $this->links_counter) > 50000 || $stat['size'] >= 10 * 1024 * 1024) {
$this->closeFile();
$this->files_counter[$filename]++;
$this->openFile($filename_real, $this->files_counter[$filename]);
$this->links_counter = $count_links;
} else {
$this->links_counter += $count_links;
}
}

protected function getStorefrontLanguages()
{
$languages_conditions = [
'area' => SiteArea::STOREFRONT,
'include_hidden' => false,
'storefront_id' => $this->storefront->storefront_id,
];
return array_keys(Languages::getAvailable($languages_conditions));
}

protected function isOpenedFile()
{
return is_resource($this->file_handler);
}

protected function openFile($filename, $index)
{
$this->file_handler = fopen($this->sitemap_dir_path . $filename . $index . '.xml', 'wb');
fwrite($this->file_handler, $filename === 'images' ? self::IMAGES_FILE_HEADER : self::SITEMAP_FILE_HEADER);
}

protected function closeFile()
{
fwrite($this->file_handler, self::FILE_FOOTER);
fclose($this->file_handler);
}

protected function getSettingsObjectFromObjectType($object_type)
{
$settings_var = 'other_links';
if ($object_type == 'product') {
$settings_var = 'products';
} elseif ($object_type == 'category' || $object_type == 'ab__seo_filter') {
$settings_var = 'categories';
} elseif ($object_type == 'extended') {
$settings_var = 'feature_variants';
} elseif ($object_type == 'custom_link') {
$settings_var = 'custom_links';
} elseif ($object_type == 'page' || $object_type == 'blog') {
$settings_var = 'pages';
} elseif ($object_type == 'companies') {
$settings_var = 'companies';
} else {
fn_set_hook('ab__as_get_settings_object_from_object_type', $object_type, $this, $settings_var);
}
return $settings_var;
}
}
