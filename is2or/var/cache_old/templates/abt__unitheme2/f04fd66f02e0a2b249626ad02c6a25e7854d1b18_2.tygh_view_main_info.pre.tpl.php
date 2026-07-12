<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:00
  from 'tygh:addons/seo/hooks/products/view_main_info.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1ec975c61_30168637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f04fd66f02e0a2b249626ad02c6a25e7854d1b18' => 
    array (
      0 => 'addons/seo/hooks/products/view_main_info.pre.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ada1ec975c61_30168637 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/seo/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->getValue('is_json_schema_org_markup_displayed')) {?>
    <div itemscope itemtype="http://schema.org/Product" class="hidden">
        <meta itemprop="sku" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['seo_snippet']['sku']), ENT_QUOTES, 'UTF-8');?>
" />
        <meta itemprop="name" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['seo_snippet']['name']), ENT_QUOTES, 'UTF-8');?>
" />
        <meta itemprop="description" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['seo_snippet']['description']), ENT_QUOTES, 'UTF-8');?>
" />
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['seo_snippet']['images'], 'image');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image')->value) {
$foreach0DoElse = false;
?>
            <meta itemprop="image" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')), ENT_QUOTES, 'UTF-8');?>
" />
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
            <link itemprop="url" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['current_url'])), ENT_QUOTES, 'UTF-8');?>
" />
            <link itemprop="availability" href="http://schema.org/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['seo_snippet']['availability']), ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->getValue('product')['seo_snippet']['show_price']) {?>
                <meta itemprop="priceCurrency" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['seo_snippet']['price_currency']), ENT_QUOTES, 'UTF-8');?>
"/>
                <meta itemprop="price" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['seo_snippet']['price']), ENT_QUOTES, 'UTF-8');?>
"/>
            <?php }?>
        </div>

        <?php if ($_smarty_tpl->getValue('product')['seo_snippet']['brand']) {?>
            <div itemprop="brand" itemscope itemtype="http://schema.org/Thing">
                <meta itemprop="name" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['seo_snippet']['brand']), ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        <?php }?>

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:seo_snippet_attributes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:seo_snippet_attributes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/seo/hooks/products/view_main_info.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/seo/hooks/products/view_main_info.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->getValue('is_json_schema_org_markup_displayed')) {?>
    <div itemscope itemtype="http://schema.org/Product" class="hidden">
        <meta itemprop="sku" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['seo_snippet']['sku']), ENT_QUOTES, 'UTF-8');?>
" />
        <meta itemprop="name" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['seo_snippet']['name']), ENT_QUOTES, 'UTF-8');?>
" />
        <meta itemprop="description" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['seo_snippet']['description']), ENT_QUOTES, 'UTF-8');?>
" />
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['seo_snippet']['images'], 'image');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image')->value) {
$foreach1DoElse = false;
?>
            <meta itemprop="image" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')), ENT_QUOTES, 'UTF-8');?>
" />
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
            <link itemprop="url" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['current_url'])), ENT_QUOTES, 'UTF-8');?>
" />
            <link itemprop="availability" href="http://schema.org/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['seo_snippet']['availability']), ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->getValue('product')['seo_snippet']['show_price']) {?>
                <meta itemprop="priceCurrency" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['seo_snippet']['price_currency']), ENT_QUOTES, 'UTF-8');?>
"/>
                <meta itemprop="price" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['seo_snippet']['price']), ENT_QUOTES, 'UTF-8');?>
"/>
            <?php }?>
        </div>

        <?php if ($_smarty_tpl->getValue('product')['seo_snippet']['brand']) {?>
            <div itemprop="brand" itemscope itemtype="http://schema.org/Thing">
                <meta itemprop="name" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['seo_snippet']['brand']), ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        <?php }?>

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:seo_snippet_attributes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:seo_snippet_attributes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>
<?php }
}
}
}
