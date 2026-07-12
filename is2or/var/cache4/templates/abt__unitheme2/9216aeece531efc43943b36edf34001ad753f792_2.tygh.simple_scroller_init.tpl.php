<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:51:36
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/common/simple_scroller_init.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683455c8c39ed6_71079610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9216aeece531efc43943b36edf34001ad753f792' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/common/simple_scroller_init.tpl',
      1 => 1747370623,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683455c8c39ed6_71079610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
    (function (_, $) {
        var elementsScroll = <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elements_to_scroll']->value, ENT_QUOTES, 'UTF-8');?>
; // Number of elements to scroll per click

        function simpleSlider(context) {
            var slider = context.attr('id') === '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_id']->value, ENT_QUOTES, 'UTF-8');?>
' ? context : context.find('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_id']->value, ENT_QUOTES, 'UTF-8');?>
');

            if (slider.length) {
                this.id = slider.attr('id');
                const isRTL = $('html').attr('dir') === 'rtl';
                const $scrollContainer = $('.ut2-scroll-content', slider);
                const $scrollLeft = $('.ut2-scroll-left', slider);
                const $scrollRight = $('.ut2-scroll-right', slider);
                const $items = $('.ut2-scroll-item', slider);

                let isScrolling = false;
                let currentIndex = 0; // Tracks the index of the first visible item

                function getContainerPadding() {
                    const style = getComputedStyle($scrollContainer[0]);
                    return {
                        left: parseFloat(style.paddingLeft) || 0,
                        right: parseFloat(style.paddingRight) || 0
                    };
                }

                function getItemFullWidth(index) {
                    if (index >= $items.length) return 0;
                    const $item = $items.eq(index);
                    const style = getComputedStyle($item[0]);
                    const width = $item.outerWidth(false); // Width without margins
                    const margin = parseFloat(isRTL ? style.marginLeft : style.marginRight) || 0;
                    return width + margin;
                }

                let padding = getContainerPadding();

                function updateNavigation() {
                    const scrollLeft = $scrollContainer.scrollLeft();
                    const scrollWidth = $scrollContainer[0].scrollWidth;
                    const clientWidth = $scrollContainer[0].clientWidth;
                    const maxScrollLeft = Math.max(0, scrollWidth - clientWidth);

                    if (isRTL) {
                        const atStart = scrollLeft >= 0; // At the start (rightmost position)
                        const atEnd = Math.abs(scrollLeft) >= maxScrollLeft; // At the end (leftmost position)
                        $scrollLeft.toggle(!atStart);  // Left button (scroll right) visible if not at start
                        $scrollRight.toggle(!atEnd);   // Right button (scroll left) visible if not at end
                    } else {
                        const atStart = scrollLeft <= 0; // At the start (leftmost position)
                        const atEnd = scrollLeft >= maxScrollLeft; // At the end (rightmost position)
                        $scrollLeft.toggle(!atStart);  // Left button visible if not at start
                        $scrollRight.toggle(!atEnd);   // Right button visible if not at end
                    }
                }

                function scrollByStep(direction) {
                    if (isScrolling) return;

                    isScrolling = true;
                    const scrollWidth = $scrollContainer[0].scrollWidth;
                    const clientWidth = $scrollContainer[0].clientWidth;
                    const maxScrollLeft = Math.max(0, scrollWidth - clientWidth);
                    let targetIndex;

                    if (isRTL) {
                        if (direction === 'right') {
                            targetIndex = Math.min(currentIndex + elementsScroll, $items.length - 1); // Move left in RTL
                        } else {
                            targetIndex = Math.max(currentIndex - elementsScroll, 0);                // Move right in RTL
                        }
                    } else {
                        if (direction === 'right') {
                            targetIndex = Math.min(currentIndex + elementsScroll, $items.length - 1); // Move right in LTR
                        } else {
                            targetIndex = Math.max(currentIndex - elementsScroll, 0);                // Move left in LTR
                        }
                    }

                    let targetScroll = 0;
                    for (let i = 0; i < targetIndex; i++) {
                        targetScroll += getItemFullWidth(i);
                    }

                    if (isRTL) {
                        targetScroll = -targetScroll; // Invert for RTL
                        if (Math.abs(targetScroll) > maxScrollLeft) {
                            targetScroll = -maxScrollLeft; // Ensure full scroll to end
                        }
                        targetScroll = Math.max(-maxScrollLeft, Math.min(0, targetScroll));
                    } else {
                        if (targetScroll > maxScrollLeft) {
                            targetScroll = maxScrollLeft; // Ensure full scroll to end
                        }
                        targetScroll = Math.max(0, Math.min(maxScrollLeft, targetScroll));
                    }

                    if (maxScrollLeft === 0) {
                        isScrolling = false;
                        return;
                    }

                    $scrollContainer.animate({ scrollLeft: targetScroll }, 300, () => {
                        currentIndex = targetIndex; // Update the current index after scrolling
                        updateNavigation();
                        isScrolling = false;
                    });
                }

                $scrollRight.on('click', function (e) {
                    e.preventDefault();
                    scrollByStep('right');
                });

                $scrollLeft.on('click', function (e) {
                    e.preventDefault();
                    scrollByStep('left');
                });

                $scrollContainer.on('scroll', function () {
                    if (!isScrolling) {
                        updateNavigation();
                    }
                });

                let resizeTimeout;
                $(window).on('resize', () => {
                    clearTimeout(resizeTimeout);
                    resizeTimeout = setTimeout(() => {
                        padding = getContainerPadding();
                        updateNavigation();
                    }, 200);
                });

                setTimeout(updateNavigation, 100);

                return this;
            }
        }

        $.ceEvent('on', 'ce.commoninit', function (context) {
            let slider = simpleSlider(context);
            if (slider) {
                $.ceEvent('on', 'ce.ajaxdone', function (...args) {
                    if (args[3]?.html?.[slider.id]) {
                        slider = simpleSlider($('#' + slider.id));
                    }
                });
            }
        });

    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/simple_scroller_init.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/simple_scroller_init.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
    (function (_, $) {
        var elementsScroll = <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elements_to_scroll']->value, ENT_QUOTES, 'UTF-8');?>
; // Number of elements to scroll per click

        function simpleSlider(context) {
            var slider = context.attr('id') === '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_id']->value, ENT_QUOTES, 'UTF-8');?>
' ? context : context.find('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_id']->value, ENT_QUOTES, 'UTF-8');?>
');

            if (slider.length) {
                this.id = slider.attr('id');
                const isRTL = $('html').attr('dir') === 'rtl';
                const $scrollContainer = $('.ut2-scroll-content', slider);
                const $scrollLeft = $('.ut2-scroll-left', slider);
                const $scrollRight = $('.ut2-scroll-right', slider);
                const $items = $('.ut2-scroll-item', slider);

                let isScrolling = false;
                let currentIndex = 0; // Tracks the index of the first visible item

                function getContainerPadding() {
                    const style = getComputedStyle($scrollContainer[0]);
                    return {
                        left: parseFloat(style.paddingLeft) || 0,
                        right: parseFloat(style.paddingRight) || 0
                    };
                }

                function getItemFullWidth(index) {
                    if (index >= $items.length) return 0;
                    const $item = $items.eq(index);
                    const style = getComputedStyle($item[0]);
                    const width = $item.outerWidth(false); // Width without margins
                    const margin = parseFloat(isRTL ? style.marginLeft : style.marginRight) || 0;
                    return width + margin;
                }

                let padding = getContainerPadding();

                function updateNavigation() {
                    const scrollLeft = $scrollContainer.scrollLeft();
                    const scrollWidth = $scrollContainer[0].scrollWidth;
                    const clientWidth = $scrollContainer[0].clientWidth;
                    const maxScrollLeft = Math.max(0, scrollWidth - clientWidth);

                    if (isRTL) {
                        const atStart = scrollLeft >= 0; // At the start (rightmost position)
                        const atEnd = Math.abs(scrollLeft) >= maxScrollLeft; // At the end (leftmost position)
                        $scrollLeft.toggle(!atStart);  // Left button (scroll right) visible if not at start
                        $scrollRight.toggle(!atEnd);   // Right button (scroll left) visible if not at end
                    } else {
                        const atStart = scrollLeft <= 0; // At the start (leftmost position)
                        const atEnd = scrollLeft >= maxScrollLeft; // At the end (rightmost position)
                        $scrollLeft.toggle(!atStart);  // Left button visible if not at start
                        $scrollRight.toggle(!atEnd);   // Right button visible if not at end
                    }
                }

                function scrollByStep(direction) {
                    if (isScrolling) return;

                    isScrolling = true;
                    const scrollWidth = $scrollContainer[0].scrollWidth;
                    const clientWidth = $scrollContainer[0].clientWidth;
                    const maxScrollLeft = Math.max(0, scrollWidth - clientWidth);
                    let targetIndex;

                    if (isRTL) {
                        if (direction === 'right') {
                            targetIndex = Math.min(currentIndex + elementsScroll, $items.length - 1); // Move left in RTL
                        } else {
                            targetIndex = Math.max(currentIndex - elementsScroll, 0);                // Move right in RTL
                        }
                    } else {
                        if (direction === 'right') {
                            targetIndex = Math.min(currentIndex + elementsScroll, $items.length - 1); // Move right in LTR
                        } else {
                            targetIndex = Math.max(currentIndex - elementsScroll, 0);                // Move left in LTR
                        }
                    }

                    let targetScroll = 0;
                    for (let i = 0; i < targetIndex; i++) {
                        targetScroll += getItemFullWidth(i);
                    }

                    if (isRTL) {
                        targetScroll = -targetScroll; // Invert for RTL
                        if (Math.abs(targetScroll) > maxScrollLeft) {
                            targetScroll = -maxScrollLeft; // Ensure full scroll to end
                        }
                        targetScroll = Math.max(-maxScrollLeft, Math.min(0, targetScroll));
                    } else {
                        if (targetScroll > maxScrollLeft) {
                            targetScroll = maxScrollLeft; // Ensure full scroll to end
                        }
                        targetScroll = Math.max(0, Math.min(maxScrollLeft, targetScroll));
                    }

                    if (maxScrollLeft === 0) {
                        isScrolling = false;
                        return;
                    }

                    $scrollContainer.animate({ scrollLeft: targetScroll }, 300, () => {
                        currentIndex = targetIndex; // Update the current index after scrolling
                        updateNavigation();
                        isScrolling = false;
                    });
                }

                $scrollRight.on('click', function (e) {
                    e.preventDefault();
                    scrollByStep('right');
                });

                $scrollLeft.on('click', function (e) {
                    e.preventDefault();
                    scrollByStep('left');
                });

                $scrollContainer.on('scroll', function () {
                    if (!isScrolling) {
                        updateNavigation();
                    }
                });

                let resizeTimeout;
                $(window).on('resize', () => {
                    clearTimeout(resizeTimeout);
                    resizeTimeout = setTimeout(() => {
                        padding = getContainerPadding();
                        updateNavigation();
                    }, 200);
                });

                setTimeout(updateNavigation, 100);

                return this;
            }
        }

        $.ceEvent('on', 'ce.commoninit', function (context) {
            let slider = simpleSlider(context);
            if (slider) {
                $.ceEvent('on', 'ce.ajaxdone', function (...args) {
                    if (args[3]?.html?.[slider.id]) {
                        slider = simpleSlider($('#' + slider.id));
                    }
                });
            }
        });

    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php }
}
}
