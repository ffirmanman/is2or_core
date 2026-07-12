<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:addons/cp_faq_addon/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed2f0eed6_05523049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d1c78457ad27a6b0f4f6a8abdcc84e5cea67157' => 
    array (
      0 => 'addons/cp_faq_addon/hooks/index/scripts.post.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed2f0eed6_05523049 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/cp_faq_addon/hooks/index';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
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
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
