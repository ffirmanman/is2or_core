<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:29:22
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/cp_faq_addon/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd829a6497_79930041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '082466523c488caf764701ba90a1d62aacb1ae84' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/cp_faq_addon/hooks/index/scripts.post.tpl',
      1 => 1741861990,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fdd829a6497_79930041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
 language="javascript">
    (function(_,$){
        $(document).on("click", ".cp-fq-generate-anchor", function(){
            var q_id = $(this).attr('data-cp-id');
            var name_id = $(this).attr('data-cp-name-id');
            var anchor_id = $(this).attr('data-cp-anchor-id');
            if (name_id) {
                var q_name = $('#' + name_id).val();
            }
            if (q_name) {
                $.ceAjax('request', fn_url('cp_faq_addon.generate_anchor'), {
                    hidden: true,
                    full_render: false,
                    data: {
                        'q_name': q_name,
                        'id': q_id
                    },
                    callback: function (data) {
                        if (data && data.anchor) {
                            if (anchor_id) {
                                $('#' + anchor_id).val(data.anchor);
                            }
                        }
                    }
                });
            }
        });
    })(Tygh,Tygh.$);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
