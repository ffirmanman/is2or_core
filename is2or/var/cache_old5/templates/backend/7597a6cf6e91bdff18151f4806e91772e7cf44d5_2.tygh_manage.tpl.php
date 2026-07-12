<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:31
  from 'tygh:addons/is2or_channel_integrations/views/is2or_channel_integrations/manage.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133edb88b090_23401121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7597a6cf6e91bdff18151f4806e91772e7cf44d5' => 
    array (
      0 => 'addons/is2or_channel_integrations/views/is2or_channel_integrations/manage.tpl',
      1 => 1779645950,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/mainbox.tpl' => 1,
  ),
))) {
function content_6a133edb88b090_23401121 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/is2or_channel_integrations/views/is2or_channel_integrations';
\Tygh\Languages\Helper::preloadLangVars(array('note','is2or_channel_integrations.integration_page_description','is2or_channel_integrations.salla_channel','is2or_channel_integrations.salla_channel_description','is2or_channel_integrations.connected','is2or_channel_integrations.initial_sync','is2or_channel_integrations.import_products_from_salla','is2or_channel_integrations.import_products_description','is2or_channel_integrations.loading','is2or_channel_integrations.internal_server_error','is2or_channel_integrations.import_products_from_salla','is2or_channel_integrations.import_products_from_salla','is2or_channel_integrations.internal_server_error','is2or_channel_integrations.disconnected','is2or_channel_integrations.connect_salla','is2or_channel_integrations.loading','is2or_channel_integrations.connect_salla','is2or_channel_integrations.failed_get_authorize_url','is2or_channel_integrations.connect_salla','is2or_channel_integrations.internal_server_error','is2or_channel_integrations.sync_settings','is2or_channel_integrations.disconnect','is2or_channel_integrations.zid_channel','is2or_channel_integrations.coming_soon','is2or_channel_integrations.zid_channel_description','is2or_channel_integrations.connect_zid','is2or_channel_integrations.channel_integrations'));
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox", null, null);?>

    <div class="alert alert-info">
        <p>
            <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("note", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</strong>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.integration_page_description", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        </p>
    </div>

    <div class="row-fluid">

                <div class="span6"
             style="border:1px solid #e5e5e5; padding:20px; border-radius:8px; background:#fff;">

            <div class="row-fluid"
                 style="display:flex; align-items:center; justify-content:space-between;">

                <div>
                    <h3 style="margin:0 0 5px 0;">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.salla_channel", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </h3>

                    <p style="color:#666; margin:0;">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.salla_channel_description", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </p>
                </div>

                <div>
                    <?php if ($_smarty_tpl->getValue('salla_status') === 'connected') {?>
                        <span class="label label-success"
                            style="padding:6px 12px; font-size:12px;">

                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.connected", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        </span>

                        <div class="control-group">
                            <label class="control-label">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.initial_sync", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:
                            </label>

                            <div class="controls">

                                <button type="button"
                                        class="btn btn-info"
                                        id="btn_import_salla">

                                    <i class="icon-download-alt"
                                       style="vertical-align:middle; margin-right:6px;"></i>

                                    <span style="vertical-align:middle;">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.import_products_from_salla", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    </span>
                                </button>

                                <p class="muted description">
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.import_products_description", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                </p>

                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
 type="text/javascript">
                                (function(_, $) {

                                    $(document).ready(function() {

                                        $('#btn_import_salla').on('click', function() {

                                            var btn = $(this);

                                            btn.prop('disabled', true)
                                               .find('span').text('<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.loading", [], $_smarty_tpl->getSmarty()->getLanguage());?>
');

                                            $.ajax({
                                                url: fn_url('is2or_channel_integrations.trigger_import'),
                                                type: 'POST',
                                                dataType: 'json',
                                                data: { channel_type: 'salla' },

                                                success: function(response) {

                                                    if (response && response.error) {

                                                        alert(response.message || '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.internal_server_error", [], $_smarty_tpl->getSmarty()->getLanguage());?>
');

                                                        btn.prop('disabled', false)
                                                           .find('span').text('<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.import_products_from_salla", [], $_smarty_tpl->getSmarty()->getLanguage());?>
');

                                                    } else {

                                                        // Reload halaman agar notifikasi CS-Cart tampil
                                                        window.location.reload();
                                                    }
                                                },

                                                error: function(xhr, status, error) {

                                                    btn.prop('disabled', false)
                                                       .find('span').text('<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.import_products_from_salla", [], $_smarty_tpl->getSmarty()->getLanguage());?>
');

                                                    alert('<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.internal_server_error", [], $_smarty_tpl->getSmarty()->getLanguage());?>
');

                                                    console.error(xhr.responseText);
                                                }
                                            });
                                        });
                                    });

                                })(Tygh, Tygh.$);
                                <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                            </div>
                        </div>
                    <?php } else { ?>
                        <span class="label label-important" style="padding: 6px 12px; font-size: 12px;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.disconnected", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                    <?php }?>
                </div>
            </div>

            <hr style="margin:15px 0;">

            <div class="buttons-container">

                <?php if ($_smarty_tpl->getValue('salla_status') !== 'connected') {?>

                    <button type="button"
                            class="btn btn-primary"
                            id="btn_connect_salla">

                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.connect_salla", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </button>

                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
 type="text/javascript">
                    (function(_, $) {

                        $(document).ready(function() {

                            $('#btn_connect_salla').on('click', function() {

                                var btn = $(this);

                                btn.prop('disabled', true)
                                   .text('<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.loading", [], $_smarty_tpl->getSmarty()->getLanguage());?>
');

                                $.ajax({
                                    url: fn_url('is2or_channel_integrations.request_authorize_url'),
                                    type: 'POST',
                                    dataType: 'json',

                                    success: function(response) {
                                        btn.prop('disabled', false)
                                        .text('<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.connect_salla", [], $_smarty_tpl->getSmarty()->getLanguage());?>
');

                                        if (response && response.authorization_url) {
                                            window.location.href = response.authorization_url;
                                        } else {
                                            alert('<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.failed_get_authorize_url", [], $_smarty_tpl->getSmarty()->getLanguage());?>
');
                                        }
                                    },

                                    error: function(xhr, status, error) {
                                        btn.prop('disabled', false)
                                        .text('<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.connect_salla", [], $_smarty_tpl->getSmarty()->getLanguage());?>
');

                                        alert('<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.internal_server_error", [], $_smarty_tpl->getSmarty()->getLanguage());?>
');
                                        console.error(xhr.responseText);
                                    }
                                });
                            });
                        });

                    })(Tygh, Tygh.$);
                    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                <?php } else { ?>

                    <button class="btn btn-secondary" disabled>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.sync_settings", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </button>

                    <a href="#" class="btn btn-danger">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.disconnect", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </a>

                <?php }?>

            </div>
        </div>

                <div class="span6"
             style="border:1px solid #e5e5e5; padding:20px; border-radius:8px; background:#f9f9f9; opacity:0.6;">

            <h3 style="margin:0 0 5px 0;">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.zid_channel", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                <small>
                    (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.coming_soon", [], $_smarty_tpl->getSmarty()->getLanguage());?>
)
                </small>
            </h3>

            <p style="color:#666; margin:0;">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.zid_channel_description", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </p>

            <hr style="margin:15px 0;">

            <button class="btn" disabled>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.connect_zid", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </button>

        </div>
    </div>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_channel_integrations.channel_integrations", [], $_smarty_tpl->getSmarty()->getLanguage()),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'mainbox')), (int) 0, $_smarty_current_dir);
}
}
