<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:08
  from 'tygh:addons/is2or_voice_search/components/voice_search.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa8b51a68_75881962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ad0238117fb78fb98e5ce25b2c2fdd75e5a24a1' => 
    array (
      0 => 'addons/is2or_voice_search/components/voice_search.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa8b51a68_75881962 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/is2or_voice_search/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><style>
.voice-search {
    position: absolute;
    top: 50%;
    right: 40px;
    transform: translateY(-50%);
    cursor: pointer;
    background: transparent !important;
    border: none !important;
}

.voice-search.listening {
    color: #FF5401;
}
</style>

<button type="button" class="voice-search" id="voice_search_btn">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 11a2 2 0 0 0 2-2V4a2 2 0 1 0-4 0v5a2 2 0 0 0 2 2z"/>
        <path d="M5 10a3 3 0 0 0 6 0h1a4 4 0 0 1-8 0h1z"/>
        <path d="M10 10a2 2 0 0 1-4 0H5a3 3 0 0 0 6 0h-1z"/>
    </svg>
</button>

<?php echo '<script'; ?>
>
(function(_, $) {
    $(document).ready(function() {
        var micBtn = $('#voice_search_btn');
        var inputSearch = micBtn.parent().find('input.ty-search-block__input').first();

        if (!('webkitSpeechRecognition' in window)) {
            console.warn('Your browser does not support speech recognition');
            micBtn.hide();

            return;
        }

        var recognition = new webkitSpeechRecognition();
        recognition.interimResults = false;
        recognition.continuous = false;
        recognition.maxAlternatives = 1;

        var listening = false;

        micBtn.on('click', function() {
            if (listening) {
                recognition.stop();
            } else {
                recognition.start();
                micBtn.addClass('listening');
            }

            listening = !listening;
        });

        recognition.onresult = function(event) {
            var text = event.results[0][0].transcript;
            inputSearch.focus().val(text);
            recognition.stop();
            micBtn.removeClass('listening');

            if (text.length) {
                inputSearch.closest('form').find('button[type="submit"]').trigger('click');
            }
        };

        recognition.onend = function() {
            micBtn.removeClass('listening');
        }
    })
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_voice_search/components/voice_search.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_voice_search/components/voice_search.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><style>
.voice-search {
    position: absolute;
    top: 50%;
    right: 40px;
    transform: translateY(-50%);
    cursor: pointer;
    background: transparent !important;
    border: none !important;
}

.voice-search.listening {
    color: #FF5401;
}
</style>

<button type="button" class="voice-search" id="voice_search_btn">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 11a2 2 0 0 0 2-2V4a2 2 0 1 0-4 0v5a2 2 0 0 0 2 2z"/>
        <path d="M5 10a3 3 0 0 0 6 0h1a4 4 0 0 1-8 0h1z"/>
        <path d="M10 10a2 2 0 0 1-4 0H5a3 3 0 0 0 6 0h-1z"/>
    </svg>
</button>

<?php echo '<script'; ?>
>
(function(_, $) {
    $(document).ready(function() {
        var micBtn = $('#voice_search_btn');
        var inputSearch = micBtn.parent().find('input.ty-search-block__input').first();

        if (!('webkitSpeechRecognition' in window)) {
            console.warn('Your browser does not support speech recognition');
            micBtn.hide();

            return;
        }

        var recognition = new webkitSpeechRecognition();
        recognition.interimResults = false;
        recognition.continuous = false;
        recognition.maxAlternatives = 1;

        var listening = false;

        micBtn.on('click', function() {
            if (listening) {
                recognition.stop();
            } else {
                recognition.start();
                micBtn.addClass('listening');
            }

            listening = !listening;
        });

        recognition.onresult = function(event) {
            var text = event.results[0][0].transcript;
            inputSearch.focus().val(text);
            recognition.stop();
            micBtn.removeClass('listening');

            if (text.length) {
                inputSearch.closest('form').find('button[type="submit"]').trigger('click');
            }
        };

        recognition.onend = function() {
            micBtn.removeClass('listening');
        }
    })
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php }
}
}
