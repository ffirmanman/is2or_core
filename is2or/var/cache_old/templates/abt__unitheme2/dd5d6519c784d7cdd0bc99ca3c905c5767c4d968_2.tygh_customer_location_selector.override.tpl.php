<?php
/* Smarty version 5.4.3, created on 2026-03-09 08:58:39
  from 'tygh:addons/store_locator/hooks/geo_maps/customer_location_selector.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae618fce7589_62606528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd5d6519c784d7cdd0bc99ca3c905c5767c4d968' => 
    array (
      0 => 'addons/store_locator/hooks/geo_maps/customer_location_selector.override.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae618fce7589_62606528 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/store_locator/hooks/geo_maps';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('locations')) {?>
    <ul class="ty-store-locator__geolocation__locations">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('locations'), 'country', false, 'country_id');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country_id')->value => $_smarty_tpl->getVariable('country')->value) {
$foreach0DoElse = false;
?>
            <li class="ty-store-locator__geolocation__location__country">
                <h3 class="ty-store-locator__geolocation__location__country__title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('country')['title']), ENT_QUOTES, 'UTF-8');?>
</h3>
                <ul class="ty-store-locator__geolocation__location__states">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('country')['states'], 'state', false, 'state_id');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('state_id')->value => $_smarty_tpl->getVariable('state')->value) {
$foreach1DoElse = false;
?>
                        <li class="ty-store-locator__geolocation__location__state">
                            <h4 class="ty-store-locator__geolocation__location__state__title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('state')['title']), ENT_QUOTES, 'UTF-8');?>
</h4>
                            <ul class="ty-store-locator__geolocation__location__cities">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('state')['cities'], 'city');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('city')->value) {
$foreach2DoElse = false;
?>
                                    <li class="ty-store-locator__geolocation__location__city">
                                        <a href="#"
                                           data-ca-store-locator-location-element="city"
                                           data-ca-store-locator-location-city="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('city')), ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-state="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('state_id')), ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-state-name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('state')['title']), ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-country="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('country_id')), ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-country-name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('country')['title']), ENT_QUOTES, 'UTF-8');?>
"
                                           class="cm-dialog-closer"
                                        ><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('city')), ENT_QUOTES, 'UTF-8');?>
</a>
                                    </li>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </ul>
                        </li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/hooks/geo_maps/customer_location_selector.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/store_locator/hooks/geo_maps/customer_location_selector.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('locations')) {?>
    <ul class="ty-store-locator__geolocation__locations">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('locations'), 'country', false, 'country_id');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country_id')->value => $_smarty_tpl->getVariable('country')->value) {
$foreach3DoElse = false;
?>
            <li class="ty-store-locator__geolocation__location__country">
                <h3 class="ty-store-locator__geolocation__location__country__title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('country')['title']), ENT_QUOTES, 'UTF-8');?>
</h3>
                <ul class="ty-store-locator__geolocation__location__states">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('country')['states'], 'state', false, 'state_id');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('state_id')->value => $_smarty_tpl->getVariable('state')->value) {
$foreach4DoElse = false;
?>
                        <li class="ty-store-locator__geolocation__location__state">
                            <h4 class="ty-store-locator__geolocation__location__state__title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('state')['title']), ENT_QUOTES, 'UTF-8');?>
</h4>
                            <ul class="ty-store-locator__geolocation__location__cities">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('state')['cities'], 'city');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('city')->value) {
$foreach5DoElse = false;
?>
                                    <li class="ty-store-locator__geolocation__location__city">
                                        <a href="#"
                                           data-ca-store-locator-location-element="city"
                                           data-ca-store-locator-location-city="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('city')), ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-state="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('state_id')), ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-state-name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('state')['title']), ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-country="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('country_id')), ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-country-name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('country')['title']), ENT_QUOTES, 'UTF-8');?>
"
                                           class="cm-dialog-closer"
                                        ><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('city')), ENT_QUOTES, 'UTF-8');?>
</a>
                                    </li>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </ul>
                        </li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
}
}
