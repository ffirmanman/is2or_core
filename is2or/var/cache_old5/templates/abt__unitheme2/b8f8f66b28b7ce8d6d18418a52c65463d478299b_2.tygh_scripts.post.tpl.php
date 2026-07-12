<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:12:01
  from 'tygh:addons/ab__category_banners/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f713104b4_94959846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8f8f66b28b7ce8d6d18418a52c65463d478299b' => 
    array (
      0 => 'addons/ab__category_banners/hooks/index/scripts.post.tpl',
      1 => 1777315961,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f713104b4_94959846 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__category_banners/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
    (function (_, $) {
        <?php $_smarty_tpl->assign('productColumns', $_smarty_tpl->getValue('settings')['Appearance']['columns_in_products_list'], false, NULL);?>
        <?php if ($_smarty_tpl->getValue('category_data')['product_columns']) {?>
            <?php $_smarty_tpl->assign('productColumns', $_smarty_tpl->getValue('category_data')['product_columns'], false, NULL);?>
        <?php }?>
        const productColumns = <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('productColumns')), ENT_QUOTES, 'UTF-8');?>
;

        const getNumberPerRow = () => {
            let MIN_WIDTH_BREAKPOINT = 218;
            const container = document.querySelector("#pagination_contents .grid-list > #categories_view_pagination_contents") || document.querySelector("#pagination_contents .grid-list > .ut2-gl__wrap") || document.querySelector('#pagination_contents .grid-list');
            const minElems = container.querySelectorAll(':scope > :not(.full-width)')
            if (minElems) {
                MIN_WIDTH_BREAKPOINT = Math.min(...(Array.from(minElems).slice(0, 10).map(e => parseInt(window.getComputedStyle(e).width)).filter(i => i)))
            }
            const calculatedPerRow = Math.floor((container.clientWidth || container.parentElement.clientWidth) / MIN_WIDTH_BREAKPOINT);
            return Math.min(productColumns, calculatedPerRow);
        }


        const findInitialIndex = (items, node) => {
            let initialIndex = 1
            for (const item of items) {
                if (!item.classList.contains('full-width') && item !== node) {
                    initialIndex++
                } else if (item === node) {
                    return initialIndex
                }
            }
        }

        const moveBanners = $.debounce(() => {
            const $allItems = $('.category-banner-block.full-width').parent().children(':not(:empty)')
            const $banners = $allItems.filter('.category-banner-block.full-width')

            if (!$allItems.length || !$banners.length) return

            const $items = $allItems.filter(':not(.category-banner-block.full-width)')
            const itemsInRow = getNumberPerRow()

            $banners.each((index, banner) => {
                const $banner = $(banner)
                const initialIndex = $banner.data('ca-position') || findInitialIndex($allItems.get(), banner)

                if (!$(banner).data('ca-position')) $banner.data('ca-position', initialIndex)

                const targetRow = Math.ceil(initialIndex / itemsInRow)
                const insertIndex = (targetRow - 1) * itemsInRow

                if ($banner.data('ca-current-position') !== insertIndex) {
                    $(banner).insertBefore($items[insertIndex]).data('ca-current-position', insertIndex)
                }
            })
        })

        $(document).ready(function (e) {
            moveBanners();
            $(window).on('resize', moveBanners);
        })

    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__category_banners/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__category_banners/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
    (function (_, $) {
        <?php $_smarty_tpl->assign('productColumns', $_smarty_tpl->getValue('settings')['Appearance']['columns_in_products_list'], false, NULL);?>
        <?php if ($_smarty_tpl->getValue('category_data')['product_columns']) {?>
            <?php $_smarty_tpl->assign('productColumns', $_smarty_tpl->getValue('category_data')['product_columns'], false, NULL);?>
        <?php }?>
        const productColumns = <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('productColumns')), ENT_QUOTES, 'UTF-8');?>
;

        const getNumberPerRow = () => {
            let MIN_WIDTH_BREAKPOINT = 218;
            const container = document.querySelector("#pagination_contents .grid-list > #categories_view_pagination_contents") || document.querySelector("#pagination_contents .grid-list > .ut2-gl__wrap") || document.querySelector('#pagination_contents .grid-list');
            const minElems = container.querySelectorAll(':scope > :not(.full-width)')
            if (minElems) {
                MIN_WIDTH_BREAKPOINT = Math.min(...(Array.from(minElems).slice(0, 10).map(e => parseInt(window.getComputedStyle(e).width)).filter(i => i)))
            }
            const calculatedPerRow = Math.floor((container.clientWidth || container.parentElement.clientWidth) / MIN_WIDTH_BREAKPOINT);
            return Math.min(productColumns, calculatedPerRow);
        }


        const findInitialIndex = (items, node) => {
            let initialIndex = 1
            for (const item of items) {
                if (!item.classList.contains('full-width') && item !== node) {
                    initialIndex++
                } else if (item === node) {
                    return initialIndex
                }
            }
        }

        const moveBanners = $.debounce(() => {
            const $allItems = $('.category-banner-block.full-width').parent().children(':not(:empty)')
            const $banners = $allItems.filter('.category-banner-block.full-width')

            if (!$allItems.length || !$banners.length) return

            const $items = $allItems.filter(':not(.category-banner-block.full-width)')
            const itemsInRow = getNumberPerRow()

            $banners.each((index, banner) => {
                const $banner = $(banner)
                const initialIndex = $banner.data('ca-position') || findInitialIndex($allItems.get(), banner)

                if (!$(banner).data('ca-position')) $banner.data('ca-position', initialIndex)

                const targetRow = Math.ceil(initialIndex / itemsInRow)
                const insertIndex = (targetRow - 1) * itemsInRow

                if ($banner.data('ca-current-position') !== insertIndex) {
                    $(banner).insertBefore($items[insertIndex]).data('ca-current-position', insertIndex)
                }
            })
        })

        $(document).ready(function (e) {
            moveBanners();
            $(window).on('resize', moveBanners);
        })

    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php }
}
}
