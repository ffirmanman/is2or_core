<?php
/* Smarty version 5.4.3, created on 2026-03-09 08:57:38
  from 'tygh:/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_for_blog/overrides/addons/blog/hooks/pages/page_extra.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae6152577a45_66672298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf5cb2a1891a21375861a0ce0432534d96826683' => 
    array (
      0 => '/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_for_blog/overrides/addons/blog/hooks/pages/page_extra.pre.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 4,
    'tygh:common/image.tpl' => 4,
  ),
))) {
function content_69ae6152577a45_66672298 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_for_blog/overrides/addons/blog/hooks/pages';
\Tygh\Languages\Helper::preloadLangVars(array('blog.read_more','blog.read_more'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('page')['page_type'] == (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>

    <?php if ($_smarty_tpl->getValue('subpages')) {?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <div class="ab--sfb-articles">
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('subpages'), 'subpage');
$foreach16DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('subpage')->value) {
$foreach16DoElse = false;
?>
                <div class="ab--sfb__item">
                    <?php if ($_smarty_tpl->getValue('subpage')['main_pair']) {?>
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("pages.view?page_id=".((string)$_smarty_tpl->getValue('subpage')['page_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ab--sfb-post-image">
                            <div class="ab--sfb__img-block">
                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('subpage')['page_id'],'images'=>$_smarty_tpl->getValue('subpage')['main_pair']), (int) 0, $_smarty_current_dir);
?>
                            </div>
                        </a>
                    <?php }?>
                    <div>
                        <?php if ($_smarty_tpl->getValue('subpage')['author_data']) {?>
                        <div>
                            <?php if ($_smarty_tpl->getValue('subpage')['author_data']['main_pair']) {?>
                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('subpage')['author_data']['author_id'],'images'=>$_smarty_tpl->getValue('subpage')['author_data']['main_pair'],'class'=>"ab--sfb-author-img",'image_width'=>60), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                                <span class="ty-icon ty-icon-user ab--sfb-author-img"></span>
                            <?php }?>

                            <span>&nbsp;&bullet;&nbsp;</span>
                            <a class="ab--sfb-author" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("ab__sfb_authors.view?author_id=".((string)$_smarty_tpl->getValue('subpage')['author_data']['author_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subpage')['author_data']['name']), ENT_QUOTES, 'UTF-8');?>
</a>
                            <span>&nbsp;&bullet;&nbsp;</span>
                            <span class="ab--sfb__date"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('subpage')['timestamp'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']))), ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                        <?php } else { ?>
                            <div class="ab--sfb__date"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('subpage')['timestamp'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']))), ENT_QUOTES, 'UTF-8');?>
</div>
                        <?php }?>


                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("pages.view?page_id=".((string)$_smarty_tpl->getValue('subpage')['page_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ab--sfb-post-title">
                            <h2 class="ab--sfb__post-title">
                                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subpage')['page']), ENT_QUOTES, 'UTF-8');?>

                            </h2>
                        </a>

                        <div class="ab--sfb__description">
                            <div class="ty-wysiwyg-content">
                                <div><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('truncate')(preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('subpage')['spoiler']),260)), ENT_QUOTES, 'UTF-8');?>
</div>
                            </div>
                            <div class="ab--sfb__read-more ty-mt-l">
                                <a class="ty-btn ty-btn__secondary"
                                   href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("pages.view?page_id=".((string)$_smarty_tpl->getValue('subpage')['page_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("blog.read_more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if (!$_smarty_tpl->getVariable('item')->last) {?><hr/><?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

            <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('page')['description']) {?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);?><span
            class="ab--sfb__post-title" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"page:page:".((string)$_smarty_tpl->getValue('page')['page_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page')['page']), ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php }?>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_for_blog/overrides/addons/blog/hooks/pages/page_extra.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_for_blog/overrides/addons/blog/hooks/pages/page_extra.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('page')['page_type'] == (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>

    <?php if ($_smarty_tpl->getValue('subpages')) {?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <div class="ab--sfb-articles">
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('subpages'), 'subpage');
$foreach17DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('subpage')->value) {
$foreach17DoElse = false;
?>
                <div class="ab--sfb__item">
                    <?php if ($_smarty_tpl->getValue('subpage')['main_pair']) {?>
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("pages.view?page_id=".((string)$_smarty_tpl->getValue('subpage')['page_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ab--sfb-post-image">
                            <div class="ab--sfb__img-block">
                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('subpage')['page_id'],'images'=>$_smarty_tpl->getValue('subpage')['main_pair']), (int) 0, $_smarty_current_dir);
?>
                            </div>
                        </a>
                    <?php }?>
                    <div>
                        <?php if ($_smarty_tpl->getValue('subpage')['author_data']) {?>
                        <div>
                            <?php if ($_smarty_tpl->getValue('subpage')['author_data']['main_pair']) {?>
                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('subpage')['author_data']['author_id'],'images'=>$_smarty_tpl->getValue('subpage')['author_data']['main_pair'],'class'=>"ab--sfb-author-img",'image_width'=>60), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                                <span class="ty-icon ty-icon-user ab--sfb-author-img"></span>
                            <?php }?>

                            <span>&nbsp;&bullet;&nbsp;</span>
                            <a class="ab--sfb-author" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("ab__sfb_authors.view?author_id=".((string)$_smarty_tpl->getValue('subpage')['author_data']['author_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subpage')['author_data']['name']), ENT_QUOTES, 'UTF-8');?>
</a>
                            <span>&nbsp;&bullet;&nbsp;</span>
                            <span class="ab--sfb__date"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('subpage')['timestamp'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']))), ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                        <?php } else { ?>
                            <div class="ab--sfb__date"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('subpage')['timestamp'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']))), ENT_QUOTES, 'UTF-8');?>
</div>
                        <?php }?>


                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("pages.view?page_id=".((string)$_smarty_tpl->getValue('subpage')['page_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ab--sfb-post-title">
                            <h2 class="ab--sfb__post-title">
                                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subpage')['page']), ENT_QUOTES, 'UTF-8');?>

                            </h2>
                        </a>

                        <div class="ab--sfb__description">
                            <div class="ty-wysiwyg-content">
                                <div><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('truncate')(preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('subpage')['spoiler']),260)), ENT_QUOTES, 'UTF-8');?>
</div>
                            </div>
                            <div class="ab--sfb__read-more ty-mt-l">
                                <a class="ty-btn ty-btn__secondary"
                                   href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("pages.view?page_id=".((string)$_smarty_tpl->getValue('subpage')['page_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("blog.read_more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if (!$_smarty_tpl->getVariable('item')->last) {?><hr/><?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

            <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('page')['description']) {?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);?><span
            class="ab--sfb__post-title" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"page:page:".((string)$_smarty_tpl->getValue('page')['page_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page')['page']), ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php }?>

<?php }
}
}
}
