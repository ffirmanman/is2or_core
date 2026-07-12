<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:24
  from 'tygh:addons/is2or_categories_interest/hooks/index/footer.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb210deafb8_57070837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85ad70eb5a2a0e0ca918908d9a37bb295d6cfb50' => 
    array (
      0 => 'addons/is2or_categories_interest/hooks/index/footer.post.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb210deafb8_57070837 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/is2or_categories_interest/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('is2or_categories_interest.categories_interest','is2or_categories_interest.categories_interest'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_SESSION['show_interest_popup'] && $_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('_groups') && !($_smarty_tpl->getValue('runtime')['controller'] == 'profiles' && ($_smarty_tpl->getValue('runtime')['mode'] == 'add' || $_smarty_tpl->getValue('runtime')['mode'] == 'update'))) {?>
    <a href="javascript:;" data-ca-target-id="as_interest_popup" id="as_interest_popup_button" class="hidden cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary" rel="nofollow"></a>
    <div id="as_interest_popup" class="hidden" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_categories_interest.categories_interest", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
        <form name="update_interest_form" method="POST" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="user_data[user_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('auth')['user_id']), ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['current_url'])), ENT_QUOTES, 'UTF-8');?>
" />
            <div class="as_interest_popup_inner">
                <div style="margin-bottom: 15px;">
                    <input type="checkbox" class="categories-interest-checkbox" id="categories_intereset_select_all" />
                    <label class="checkbox" for="categories_intereset_select_all"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('select_all', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
                </div>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_groups'), 'group');
$foreach48DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->value) {
$foreach48DoElse = false;
?>
                    <div style="margin-bottom: 5px;">
                        <input type="checkbox" class="categories-interest-checkbox categories-interest-checkbox__item" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group')['group_id']), ENT_QUOTES, 'UTF-8');?>
" id="tags_group_interest_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group')['group_id']), ENT_QUOTES, 'UTF-8');?>
" name="user_data[tags_group_interest][]" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('group')['group_id'],$_smarty_tpl->getValue('_tags_group_interest'))) {?>checked<?php }?> />
                        <label class="checkbox" for="tags_group_interest_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group')['group_id']), ENT_QUOTES, 'UTF-8');?>
">
                            <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group')['main_pair']['icon']['image_path']), ENT_QUOTES, 'UTF-8');?>
" style="height: 100px; margin: 0 10px;">
                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group')['group_name']), ENT_QUOTES, 'UTF-8');?>

                        </label>
                    </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                            </div>
            <div class="as_interest_popup_footer">
                <button class="ty-btn ty-btn__secondary" type="submit" name="dispatch[profiles.update_categories_interest]"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('save', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</button>
            </div>
        </form>
    </div>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/select2/dist/js/select2.full.min.js"), $_smarty_tpl);?>

    <?php echo '<script'; ?>
>
        $(function() {
            $('#as_interest_popup_button').click();
            // $('#tags_interest').select2();

            $(document).on('click', '#categories_intereset_select_all', function() {
                if ($(this).prop('checked')) {
                    $('.categories-interest-checkbox__item').prop('checked', true);
                } else {
                    $('.categories-interest-checkbox__item').prop('checked', false);
                }
            });

            $.ceEvent('on', 'ce.dialogclose', function() {
                $.ceAjax(
                    'request',
                    '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.close_interest_popup")), ENT_QUOTES, 'UTF-8');?>
',
                    {}
                );
            });

            // $(document).on('change', '.categories-interest-checkbox', function() {
            //     var category_ids = [];
                
            //     $('.categories-interest-checkbox:checkbox:checked').each(function() {
            //         category_ids.push($(this).val());
            //     });

            //     // 'dialogclosed'
                
            //     $.ceAjax(
            //         'request',
            //         '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.tags_interest")), ENT_QUOTES, 'UTF-8');?>
&category_ids=' + category_ids.join(','),
            //         {
            //             callback: function(data) {
            //                 const tags = JSON.parse(data.text);
            //                 const options = Object.keys(tags).map(index => {
            //                     return {
            //                         text: tags[index].tag, 
            //                         id: index
            //                     };
            //                 });

            //                 const currentValue = $('#tags_interest').val();

            //                 $('#tags_interest').empty().select2({
            //                     data: options,
            //                 });

            //                 $('#tags_interest').val(currentValue).change();
            //             }
            //         }
            //     );
            // });
        });
    <?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_categories_interest/hooks/index/footer.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_categories_interest/hooks/index/footer.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_SESSION['show_interest_popup'] && $_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('_groups') && !($_smarty_tpl->getValue('runtime')['controller'] == 'profiles' && ($_smarty_tpl->getValue('runtime')['mode'] == 'add' || $_smarty_tpl->getValue('runtime')['mode'] == 'update'))) {?>
    <a href="javascript:;" data-ca-target-id="as_interest_popup" id="as_interest_popup_button" class="hidden cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary" rel="nofollow"></a>
    <div id="as_interest_popup" class="hidden" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_categories_interest.categories_interest", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
        <form name="update_interest_form" method="POST" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="user_data[user_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('auth')['user_id']), ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['current_url'])), ENT_QUOTES, 'UTF-8');?>
" />
            <div class="as_interest_popup_inner">
                <div style="margin-bottom: 15px;">
                    <input type="checkbox" class="categories-interest-checkbox" id="categories_intereset_select_all" />
                    <label class="checkbox" for="categories_intereset_select_all"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('select_all', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
                </div>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_groups'), 'group');
$foreach49DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->value) {
$foreach49DoElse = false;
?>
                    <div style="margin-bottom: 5px;">
                        <input type="checkbox" class="categories-interest-checkbox categories-interest-checkbox__item" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group')['group_id']), ENT_QUOTES, 'UTF-8');?>
" id="tags_group_interest_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group')['group_id']), ENT_QUOTES, 'UTF-8');?>
" name="user_data[tags_group_interest][]" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('group')['group_id'],$_smarty_tpl->getValue('_tags_group_interest'))) {?>checked<?php }?> />
                        <label class="checkbox" for="tags_group_interest_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group')['group_id']), ENT_QUOTES, 'UTF-8');?>
">
                            <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group')['main_pair']['icon']['image_path']), ENT_QUOTES, 'UTF-8');?>
" style="height: 100px; margin: 0 10px;">
                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group')['group_name']), ENT_QUOTES, 'UTF-8');?>

                        </label>
                    </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                            </div>
            <div class="as_interest_popup_footer">
                <button class="ty-btn ty-btn__secondary" type="submit" name="dispatch[profiles.update_categories_interest]"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('save', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</button>
            </div>
        </form>
    </div>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/select2/dist/js/select2.full.min.js"), $_smarty_tpl);?>

    <?php echo '<script'; ?>
>
        $(function() {
            $('#as_interest_popup_button').click();
            // $('#tags_interest').select2();

            $(document).on('click', '#categories_intereset_select_all', function() {
                if ($(this).prop('checked')) {
                    $('.categories-interest-checkbox__item').prop('checked', true);
                } else {
                    $('.categories-interest-checkbox__item').prop('checked', false);
                }
            });

            $.ceEvent('on', 'ce.dialogclose', function() {
                $.ceAjax(
                    'request',
                    '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.close_interest_popup")), ENT_QUOTES, 'UTF-8');?>
',
                    {}
                );
            });

            // $(document).on('change', '.categories-interest-checkbox', function() {
            //     var category_ids = [];
                
            //     $('.categories-interest-checkbox:checkbox:checked').each(function() {
            //         category_ids.push($(this).val());
            //     });

            //     // 'dialogclosed'
                
            //     $.ceAjax(
            //         'request',
            //         '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.tags_interest")), ENT_QUOTES, 'UTF-8');?>
&category_ids=' + category_ids.join(','),
            //         {
            //             callback: function(data) {
            //                 const tags = JSON.parse(data.text);
            //                 const options = Object.keys(tags).map(index => {
            //                     return {
            //                         text: tags[index].tag, 
            //                         id: index
            //                     };
            //                 });

            //                 const currentValue = $('#tags_interest').val();

            //                 $('#tags_interest').empty().select2({
            //                     data: options,
            //                 });

            //                 $('#tags_interest').val(currentValue).change();
            //             }
            //         }
            //     );
            // });
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
}
