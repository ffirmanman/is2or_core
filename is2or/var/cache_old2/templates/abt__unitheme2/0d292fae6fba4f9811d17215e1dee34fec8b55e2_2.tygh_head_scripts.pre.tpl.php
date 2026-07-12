<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:07
  from 'tygh:addons/abt__unitheme2/hooks/index/head_scripts.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa7b5c831_28424045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d292fae6fba4f9811d17215e1dee34fec8b55e2' => 
    array (
      0 => 'addons/abt__unitheme2/hooks/index/head_scripts.pre.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa7b5c831_28424045 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['bfcache'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
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
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/index/head_scripts.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/hooks/index/head_scripts.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['bfcache'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
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
