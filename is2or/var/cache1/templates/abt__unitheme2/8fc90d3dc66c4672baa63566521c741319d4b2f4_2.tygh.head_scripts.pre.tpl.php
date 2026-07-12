<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:29:15
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/index/head_scripts.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd7b737aa5_84211848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fc90d3dc66c4672baa63566521c741319d4b2f4' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/index/head_scripts.pre.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fdd7b737aa5_84211848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['bfcache'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo '<script'; ?>
 data-no-defer>
        
        window.WebSocket = new Proxy(window.WebSocket, {
            construct(target, args) {
                const ws = new target(...args);
                const wsEvents = ['close', 'error', 'message', 'open'];

                window._websockets = window._websockets || new Map();
                window._websockets.set(ws, {});

                const removeWs = (target) => {
                    window._websockets.remove(target);
                }

                ws.close = new Proxy(ws.close, {
                    apply(target, thisArg, args) {
                        if (args[0] !== 4444) removeWs(thisArg);
                        return target.apply(thisArg, args);
                    }
                });

                const addEventListenerProxy = new Proxy(ws.addEventListener, {
                    apply(target, thisArg, args) {
                        const [e, func] = args;
                        if (window._websockets.has(thisArg)) {
                            window._websockets.get(thisArg)[e]?.push(func) || (window._websockets.get(thisArg)[e] = [func]);
                        }

                        return target.apply(thisArg, args);
                    }
                });

                ws.addEventListener = addEventListenerProxy;

                wsEvents.forEach((e) => {
                    Object.defineProperty(ws, 'on' + e, {
                        set(func) {
                            const callback = function (event) {
                                func.call(this, event);
                            };
                            return addEventListenerProxy.apply(this, [
                                e,
                                callback,
                                false
                            ]);
                        }
                    });
                });

                return ws;
            }
        });
        
    <?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/index/head_scripts.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/hooks/index/head_scripts.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['bfcache'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo '<script'; ?>
 data-no-defer>
        
        window.WebSocket = new Proxy(window.WebSocket, {
            construct(target, args) {
                const ws = new target(...args);
                const wsEvents = ['close', 'error', 'message', 'open'];

                window._websockets = window._websockets || new Map();
                window._websockets.set(ws, {});

                const removeWs = (target) => {
                    window._websockets.remove(target);
                }

                ws.close = new Proxy(ws.close, {
                    apply(target, thisArg, args) {
                        if (args[0] !== 4444) removeWs(thisArg);
                        return target.apply(thisArg, args);
                    }
                });

                const addEventListenerProxy = new Proxy(ws.addEventListener, {
                    apply(target, thisArg, args) {
                        const [e, func] = args;
                        if (window._websockets.has(thisArg)) {
                            window._websockets.get(thisArg)[e]?.push(func) || (window._websockets.get(thisArg)[e] = [func]);
                        }

                        return target.apply(thisArg, args);
                    }
                });

                ws.addEventListener = addEventListenerProxy;

                wsEvents.forEach((e) => {
                    Object.defineProperty(ws, 'on' + e, {
                        set(func) {
                            const callback = function (event) {
                                func.call(this, event);
                            };
                            return addEventListenerProxy.apply(this, [
                                e,
                                callback,
                                false
                            ]);
                        }
                    });
                });

                return ws;
            }
        });
        
    <?php echo '</script'; ?>
>
<?php }
}
}
}
