<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/ab__seo_brands/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa98b6108_89484362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86930eed0134619fb296ab18f493f36246a6a7d8' => 
    array (
      0 => 'addons/ab__seo_brands/hooks/index/scripts.post.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa98b6108_89484362 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_brands/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
    (function (_,$) {
        function _attachToUrl(url, param, value) {
            var pattern = new RegExp(param + '=[^&$]+');
            return url.search(pattern) > 0 ? url.replace(pattern, param + '=' + value) : $.attachToUrl(url, param + '=' + value);
        }
        $('.ab_sb_filter-wrapper').on('click', '.ab_sb_filter-item', function () {
            var self = $(this);
            var parent = self.closest('.ab_sb_filter');
            var result_ids = parent.data('ca-target-id');
            var base_url = parent.find('input[name="base_url"]');

            if (base_url.length) {
                var url = _attachToUrl(base_url.val(), 'cid', self.data('ca-category-id'));

                $.ceAjax('request', url, {
                    result_ids: result_ids,
                    full_render: true,
                    save_history: true,
                    caching: false,
                    scroll: '.ty-mainbox-title',
                    callback: function (response) {
                        /* workaround for filters base_url */
                        var filter = $('.cm-product-filters');
                        if (filter.length && filter.data('caBaseUrl')) {
                            filter.data('caBaseUrl', _attachToUrl(filter.data('caBaseUrl'), 'cid', self.data('ca-category-id')));
                            $.ceEvent('trigger', 'ce.commoninit', [filter.parent()]);
                        }
                    }
                });
            }

            return false;
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__seo_brands/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__seo_brands/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
    (function (_,$) {
        function _attachToUrl(url, param, value) {
            var pattern = new RegExp(param + '=[^&$]+');
            return url.search(pattern) > 0 ? url.replace(pattern, param + '=' + value) : $.attachToUrl(url, param + '=' + value);
        }
        $('.ab_sb_filter-wrapper').on('click', '.ab_sb_filter-item', function () {
            var self = $(this);
            var parent = self.closest('.ab_sb_filter');
            var result_ids = parent.data('ca-target-id');
            var base_url = parent.find('input[name="base_url"]');

            if (base_url.length) {
                var url = _attachToUrl(base_url.val(), 'cid', self.data('ca-category-id'));

                $.ceAjax('request', url, {
                    result_ids: result_ids,
                    full_render: true,
                    save_history: true,
                    caching: false,
                    scroll: '.ty-mainbox-title',
                    callback: function (response) {
                        /* workaround for filters base_url */
                        var filter = $('.cm-product-filters');
                        if (filter.length && filter.data('caBaseUrl')) {
                            filter.data('caBaseUrl', _attachToUrl(filter.data('caBaseUrl'), 'cid', self.data('ca-category-id')));
                            $.ceEvent('trigger', 'ce.commoninit', [filter.parent()]);
                        }
                    }
                });
            }

            return false;
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php }
}
}
