<?php
/* Smarty version 5.4.3, created on 2026-03-09 17:31:40
  from 'tygh:views/addons/components/addons/addon_icon.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aed9cc9944b9_83765017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b3c2bf886632cb89424930915628fcb57c32773' => 
    array (
      0 => 'views/addons/components/addons/addon_icon.tpl',
      1 => 1767831035,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69aed9cc9944b9_83765017 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/addons/components/addons';
$_smarty_tpl->assign('LABEL_LENGTH', 2, false, NULL);
$_smarty_tpl->assign('ICON_SIZE_MEDIUM', 60, false, NULL);
$_smarty_tpl->assign('ICON_SIZE_LARGE', 192, false, NULL);?>

<?php $_smarty_tpl->assign('size', ($_smarty_tpl->getValue('icon_large')) ? "large" : "medium", false, NULL);
$_smarty_tpl->assign('icon_width', ($_smarty_tpl->getValue('icon_large')) ? $_smarty_tpl->getValue('ICON_SIZE_LARGE') : $_smarty_tpl->getValue('ICON_SIZE_MEDIUM'), false, NULL);
$_smarty_tpl->assign('addon_status', ($_smarty_tpl->getValue('addon')['status']) ? (mb_strtolower((string) $_smarty_tpl->getValue('addon')['status'], 'UTF-8')) : '', false, NULL);?>

<?php $_smarty_tpl->assign('wrapper_class', "addons-addon-icon__wrapper addons-addon-icon__wrapper--".((string)$_smarty_tpl->getValue('addon_status'))." addons-addon-icon__wrapper--".((string)$_smarty_tpl->getValue('size')), false, NULL);
$_smarty_tpl->assign('title', ($_smarty_tpl->getValue('show_description')) ? $_smarty_tpl->getValue('addon_full_description') : '', false, NULL);?>

<?php if ($_smarty_tpl->getValue('href') === true && $_smarty_tpl->getValue('is_marketplace_addons')) {?>
    <?php $_smarty_tpl->assign('href', $_smarty_tpl->getValue('a')['addon_marketplace_page'], false, NULL);
} elseif ($_smarty_tpl->getValue('href') === true && $_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && $_smarty_tpl->getValue('selected_storefront_id')) {?>
    <?php $_smarty_tpl->assign('href', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("addons.update?addon=".((string)$_smarty_tpl->getValue('addon')['addon'])),"storefront_id=".((string)$_smarty_tpl->getValue('selected_storefront_id'))), false, NULL);
} elseif ($_smarty_tpl->getValue('href') === true) {?>
    <?php $_smarty_tpl->assign('href', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("addons.update?addon=".((string)$_smarty_tpl->getValue('addon')['addon'])), false, NULL);
}?>

<?php $_smarty_tpl->assign('image_dir_path', ((string)$_smarty_tpl->getValue('images_dir'))."/addons/".((string)$_smarty_tpl->getValue('addon')['addon']), false, NULL);
$_smarty_tpl->assign('icon_class', "addons-addon-icon__image addons-addon-icon__image--".((string)$_smarty_tpl->getValue('addon_status'))." addons-addon-icon__image--".((string)$_smarty_tpl->getValue('size')), false, NULL);?>

<?php if ($_smarty_tpl->getValue('is_marketplace_addons')) {?>
    <?php $_smarty_tpl->assign('is_open_new_tab', true, false, NULL);?>
    <?php $_smarty_tpl->assign('icon_width', "241", false, NULL);?>
    <?php $_smarty_tpl->assign('icon_height', "95", false, NULL);?>
    <?php $_smarty_tpl->assign('wrapper_class', ((string)$_smarty_tpl->getValue('wrapper_class'))." addons-addon-icon__wrapper--marketplace", false, NULL);
}?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "icon", null, null);?>
    <?php if ($_smarty_tpl->getValue('addon')['icon_path']) {?>
        <picture>
            <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images_dir')), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addon')['icon_path']), ENT_QUOTES, 'UTF-8');?>
"
                width="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('icon_width')), ENT_QUOTES, 'UTF-8');?>
"
                height="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('icon_height')), ENT_QUOTES, 'UTF-8');?>
"
                class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('icon_class')), ENT_QUOTES, 'UTF-8');?>
"
            />
        </picture>
    <?php } elseif ($_smarty_tpl->getValue('is_marketplace_addons')) {?>
        <picture>
            <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addon')['addon_marketplace_image']), ENT_QUOTES, 'UTF-8');?>
"
                width="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('icon_width')), ENT_QUOTES, 'UTF-8');?>
"
                height="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('icon_height')), ENT_QUOTES, 'UTF-8');?>
"
                class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('icon_class')), ENT_QUOTES, 'UTF-8');?>
"
            />
        </picture>
    <?php } elseif ($_smarty_tpl->getValue('addon')['has_icon']) {?>
        <picture>
            <?php if ($_smarty_tpl->getValue('addon')['has_svg_icon']) {?>
                <source srcset="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_dir_path')), ENT_QUOTES, 'UTF-8');?>
/icon.svg" type="image/svg+xml">
            <?php }?>
            <?php if ($_smarty_tpl->getValue('addon')['has_avif_icon']) {?>
                <source srcset="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_dir_path')), ENT_QUOTES, 'UTF-8');?>
/icon.avif" type="image/avif">
            <?php }?>
            <?php if ($_smarty_tpl->getValue('addon')['has_webp_icon']) {?>
                <source srcset="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_dir_path')), ENT_QUOTES, 'UTF-8');?>
/icon.webp" type="image/webp">
            <?php }?>
            <source srcset="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_dir_path')), ENT_QUOTES, 'UTF-8');?>
/icon.png" type="image/png"> 
            <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_dir_path')), ENT_QUOTES, 'UTF-8');?>
/icon.png"
                width="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('icon_width')), ENT_QUOTES, 'UTF-8');?>
"
                height="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('icon_width')), ENT_QUOTES, 'UTF-8');?>
"
                class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('icon_class')), ENT_QUOTES, 'UTF-8');?>
"
            />
        </picture>
    <?php } else { ?>
        <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('icon_class')), ENT_QUOTES, 'UTF-8');?>
 addons-addon-icon__image--label">
            <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('truncate')(mb_strtoupper((string) $_smarty_tpl->getValue('addon')['name'] ?? '', 'UTF-8'),$_smarty_tpl->getValue('LABEL_LENGTH'),'')), ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('href')) {?>
    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('href')), ENT_QUOTES, 'UTF-8');?>
"
        class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('wrapper_class')), ENT_QUOTES, 'UTF-8');?>
 addons-addon-icon__wrapper--link"
        <?php if ($_smarty_tpl->getValue('title')) {?>
            title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
"
        <?php }?>
        <?php if ($_smarty_tpl->getValue('is_open_new_tab')) {?>
            target="_blank"
        <?php }?>
    >
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'icon');?>

    </a>
<?php } else { ?>
    <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('wrapper_class')), ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->getValue('title')) {?>
            title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
"
        <?php }?>
    >
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'icon');?>

    </div>
<?php }
}
}
