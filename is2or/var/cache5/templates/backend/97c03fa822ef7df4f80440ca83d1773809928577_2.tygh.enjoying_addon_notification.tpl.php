<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:21:04
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/addons/components/rating/enjoying_addon_notification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc401b1c49_58940674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97c03fa822ef7df4f80440ca83d1773809928577' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/addons/components/rating/enjoying_addon_notification.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
  ),
),false)) {
function content_6835bc401b1c49_58940674 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('addons.is_enjoying_addon_name','addons.is_enjoying_addon','addons.tap_star_to_rate_on_marketplace','addons.name','rating','n_stars','addons.message','cancel','submit','addons.write_review'));
if (!$_smarty_tpl->tpl_vars['addon']->value['is_core_addon'] && $_smarty_tpl->tpl_vars['addon']->value['identified'] && !$_smarty_tpl->tpl_vars['personal_review']->value && !$_smarty_tpl->tpl_vars['addon']->value['hide_post_review']) {?>
    <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['title_full']->value ? $_smarty_tpl->__("addons.is_enjoying_addon_name",array("[addon]"=>$_smarty_tpl->tpl_vars['addon']->value['name'])) : $_smarty_tpl->__("addons.is_enjoying_addon"));?>
    <?php $_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? "addons_write_review" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('ratings', array("1","2","3","4","5"));?>
    <?php $_smarty_tpl->_assignInScope('is_big_heading', (($tmp = $_smarty_tpl->tpl_vars['is_big_heading']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "addons_write_review_title", null, null);?>
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['is_big_heading']->value) {?>
        <h4>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'addons_write_review_title');?>

        </h4>
    <?php } else { ?>
        <div>
            <strong>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'addons_write_review_title');?>

            </strong>
        </div>
    <?php }?>

    <div>
        <?php echo $_smarty_tpl->__("addons.tap_star_to_rate_on_marketplace");?>

    </div>

    <div>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "addons_write_review", null, null);?>

            <div id="addons_review_form_wrapper_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

                <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
                    method="post"
                    enctype="multipart/form-data"
                    name="addons_review_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    class="form-horizontal form-edit cm-processed-form cm-check-changes"
                >
                    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
                    <input type="hidden" name="marketplace_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['marketplace_id'], ENT_QUOTES, 'UTF-8');?>
" />

                    <fieldset>

                        <div class="control-group">
                            <label for="elm_addon_rating_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label">
                                <?php echo $_smarty_tpl->__("addons.name");?>

                            </label>
                            <div class="controls">
                                <p>
                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>

                                </p>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label cm-required cm-multiple-radios" for="elm_addon_rating_value_rating_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <?php echo $_smarty_tpl->__("rating");?>

                            </label>
                            <div class="controls">

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ratings']->value, 'rating');
$_smarty_tpl->tpl_vars['rating']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rating']->value) {
$_smarty_tpl->tpl_vars['rating']->do_else = false;
?>

                                    <label for="elm_addon_rating_value_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rating']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="radio inline">
                                        <?php echo $_smarty_tpl->__("n_stars",array($_smarty_tpl->tpl_vars['rating']->value));?>

                                        <input type="radio"
                                            name="value"
                                            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rating']->value, ENT_QUOTES, 'UTF-8');?>
"
                                            id="elm_addon_rating_value_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rating']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['rating']->value === "5") {?>
                                                checked="checked"
                                            <?php }?>
                                        />
                                    </label>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </div>
                        </div>

                        <div class="control-group">
                            <label for="elm_addon_rating_message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required">
                                <?php echo $_smarty_tpl->__("addons.message");?>

                            </label>
                            <div class="controls">
                                <textarea name="message" id="elm_addon_rating_message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" rows="7" class="input-large"></textarea>
                            </div>
                        </div>

                    </fieldset>

                    <div class="buttons-container">
                        <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("submit"),'but_name'=>"dispatch[addons.set_rating]"), 0, false);
?>
                    </div>

                </form>
            </div>

        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'text'=>$_smarty_tpl->__("addons.write_review"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'addons_write_review'),'link_text'=>"☆☆☆☆☆",'link_class'=>"btn-large btn-link",'act'=>"general",'title'=>false), 0, false);
?>
    </div>
<?php }
}
}
