<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:30:14
  from 'tygh:common/scroller_init_with_quantity.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9606738765_57953542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '546c8baafdb4ab54fc91228b4b35601e8f686311' => 
    array (
      0 => 'common/scroller_init_with_quantity.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9606738765_57953542 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/common';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('#scroll_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
');

        var item = <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 4 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
            itemsDesktop = <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('itemsDesktop') ?? null)===null||$tmp==='' ? 4 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
            itemsDesktopSmall = <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('itemsDesktopSmall') ?? null)===null||$tmp==='' ? 4 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
            itemsTablet = <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('itemsTablet') ?? null)===null||$tmp==='' ? 3 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
            itemsTabletSmall = <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('itemsTabletSmall') ?? null)===null||$tmp==='' ? 2 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
            itemsMobile = <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('item_quantity_responsive')["mobile"] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;

        if (item === 1) {
            itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
        }

        var desktop = [1366, itemsDesktop],
            desktopSmall = [1200, itemsDesktopSmall],
            tablet = [900, itemsTablet],
            tabletSmall = [768, itemsTabletSmall],
            mobile = [660, itemsMobile];

        <?php if ($_smarty_tpl->getValue('block')['properties']['outside_navigation'] == "Y") {?>
        function outsideNav () {
            if(this.options.items >= this.itemsAmount){
                $("#owl_outside_nav_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
").hide();
            } else {
                $("#owl_outside_nav_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
").show();
            }
        }
        <?php }?>
        if (elm.length) {
            elm.owlCarousel({
                direction: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language_direction')), ENT_QUOTES, 'UTF-8');?>
',
                items: item,
                itemsDesktop: desktop,
                itemsDesktopSmall: desktopSmall,
                itemsTablet: tablet,
                itemsTabletSmall: tabletSmall,
                itemsMobile: mobile,
                addClassActive: true,
                <?php if ($_smarty_tpl->getValue('block')['properties']['scroll_per_page'] == "Y") {?>
                scrollPerPage: true,
                <?php }?>
                <?php if ($_smarty_tpl->getValue('block')['properties']['not_scroll_automatically'] == "Y") {?>
                autoPlay: false,
                <?php } else { ?>
                autoPlay: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['properties']['pause_delay']*(($tmp = 1000 ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
',
                <?php }?>
                slideSpeed: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['speed'] ?? null)===null||$tmp==='' ? 400 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
                stopOnHover: true,
                <?php if ($_smarty_tpl->getValue('block')['properties']['outside_navigation'] == "N") {?>
                navigation: true,
                navigationText: ['<i class="ut2-icon-arrow_back_black"></i>', '<i class="ut2-icon-arrow_forward_black"></i>'],
                <?php }?>
                pagination: false,
                beforeInit: function () {
                    $.ceEvent('trigger', 'ce.scroller_init_with_quantity.beforeInit', [this]);
                },
            <?php if ($_smarty_tpl->getValue('block')['properties']['outside_navigation'] == "Y") {?>
                afterInit: outsideNav,
                afterUpdate : outsideNav
            });

              $('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prev_selector')), ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.prev');
              });
              $('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('next_selector')), ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.next');
              });

            <?php } else { ?>
            });
            <?php }?>
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/scroller_init_with_quantity.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/scroller_init_with_quantity.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('#scroll_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
');

        var item = <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 4 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
            itemsDesktop = <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('itemsDesktop') ?? null)===null||$tmp==='' ? 4 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
            itemsDesktopSmall = <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('itemsDesktopSmall') ?? null)===null||$tmp==='' ? 4 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
            itemsTablet = <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('itemsTablet') ?? null)===null||$tmp==='' ? 3 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
            itemsTabletSmall = <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('itemsTabletSmall') ?? null)===null||$tmp==='' ? 2 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
            itemsMobile = <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('item_quantity_responsive')["mobile"] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;

        if (item === 1) {
            itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
        }

        var desktop = [1366, itemsDesktop],
            desktopSmall = [1200, itemsDesktopSmall],
            tablet = [900, itemsTablet],
            tabletSmall = [768, itemsTabletSmall],
            mobile = [660, itemsMobile];

        <?php if ($_smarty_tpl->getValue('block')['properties']['outside_navigation'] == "Y") {?>
        function outsideNav () {
            if(this.options.items >= this.itemsAmount){
                $("#owl_outside_nav_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
").hide();
            } else {
                $("#owl_outside_nav_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
").show();
            }
        }
        <?php }?>
        if (elm.length) {
            elm.owlCarousel({
                direction: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language_direction')), ENT_QUOTES, 'UTF-8');?>
',
                items: item,
                itemsDesktop: desktop,
                itemsDesktopSmall: desktopSmall,
                itemsTablet: tablet,
                itemsTabletSmall: tabletSmall,
                itemsMobile: mobile,
                addClassActive: true,
                <?php if ($_smarty_tpl->getValue('block')['properties']['scroll_per_page'] == "Y") {?>
                scrollPerPage: true,
                <?php }?>
                <?php if ($_smarty_tpl->getValue('block')['properties']['not_scroll_automatically'] == "Y") {?>
                autoPlay: false,
                <?php } else { ?>
                autoPlay: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['properties']['pause_delay']*(($tmp = 1000 ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
',
                <?php }?>
                slideSpeed: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['speed'] ?? null)===null||$tmp==='' ? 400 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
                stopOnHover: true,
                <?php if ($_smarty_tpl->getValue('block')['properties']['outside_navigation'] == "N") {?>
                navigation: true,
                navigationText: ['<i class="ut2-icon-arrow_back_black"></i>', '<i class="ut2-icon-arrow_forward_black"></i>'],
                <?php }?>
                pagination: false,
                beforeInit: function () {
                    $.ceEvent('trigger', 'ce.scroller_init_with_quantity.beforeInit', [this]);
                },
            <?php if ($_smarty_tpl->getValue('block')['properties']['outside_navigation'] == "Y") {?>
                afterInit: outsideNav,
                afterUpdate : outsideNav
            });

              $('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prev_selector')), ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.prev');
              });
              $('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('next_selector')), ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.next');
              });

            <?php } else { ?>
            });
            <?php }?>
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }
}
}
