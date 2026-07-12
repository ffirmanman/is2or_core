<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:41
  from 'tygh:addons/ab__seo_for_blog/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a01f12839_92459342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37e937dc9020c8274c2a8cd76af4db3aec082ee9' => 
    array (
      0 => 'addons/ab__seo_for_blog/hooks/index/scripts.post.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a01f12839_92459342 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_for_blog/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('runtime')['controller'] == "pages" && $_smarty_tpl->getValue('runtime')['mode'] == "view") {?>
    <?php echo '<script'; ?>
>
        (function (_, $) {
        const CONTENTS_CONTAINER_SELECTOR = '.ab__sfb-contents';
        const contentsContainer = document.querySelector('.ab__sfb-aside ' + CONTENTS_CONTAINER_SELECTOR) || document.querySelector(CONTENTS_CONTAINER_SELECTOR);
        const PROGRESS_CLASS = 'ab--sfb-active-scroll';
        const getContentsMargin = ()=> getComputedStyle(contentsContainer).getPropertyValue('--ab-sfb-top') || 70;
        const contentLinks = contentsContainer?.querySelectorAll('a');
        const isMobile = window.matchMedia('(max-width: 899px) and (max-height: 899px)').matches;
        let links = [];
        if (contentLinks?.length && !isMobile) {
            const ARTICLE_CONTAINER = document.querySelector('.ty-mainbox-container .ty-wysiwyg-content');
            contentsContainer.classList.add(PROGRESS_CLASS);

            function throttle(func, ms) {
                let isThrottled = false,
                    savedArgs,
                    savedThis;

                function wrapper() {
                    if (isThrottled) {
                        savedArgs = arguments;
                        savedThis = this;
                        return;
                    }

                    func.apply(this, arguments);

                    isThrottled = true;

                    setTimeout(function () {
                        isThrottled = false;
                        if (savedArgs) {
                            wrapper.apply(savedThis, savedArgs);
                            savedArgs = savedThis = null;
                        }
                    }, ms);
                }

                return wrapper;
            }

            const debouncedCallback = $.debounce(function (e, $container) {
                $container.data('active')?.removeClass('active');
                $container.data('active', $(e.target).addClass('active')).addClass('ab--sfb-scrolling');
                $('html, body').animate({
                        scrollTop: $($(e.target).attr('href')).offset().top - getContentsMargin()
                    },
                    199,
                    function () {
                        $container.removeClass('ab--sfb-scrolling');
                    })

            }, 200);

            function addLinksClickListener() {
                const $container = $(contentsContainer);
                $container.on('click', 'a', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    debouncedCallback(e, $container);
                })
            }

            function mapLinks(){
                const contentHeight = ARTICLE_CONTAINER.offsetHeight;
                links = mapContents(contentHeight);
            }

            function mapContents(contentHeight) {
                const map = [];
                contentLinks.forEach(function (el, index) {
                    const $el = $(el);
                    const $heading =  $($el.attr('href'));

                    if (!$heading.length) {
                        return;
                    }

                    const offsetTop = Math.floor($heading.offset().top);

                    map.push({
                        el: $el,
                        link: $el.attr('href'),
                        offsetTop,
                        offsetBottom: $(document).scrollTop() + contentHeight - offsetTop,
                        progress: 0,
                        toggle: $el.next('.ab--sfb-toggle')
                    })

                    if (index) {
                        map[index - 1].height = offsetTop - map[index - 1].offsetTop;
                        map[index - 1].offsetBottom = offsetTop;
                    }
                    if (index === contentLinks.length - 1) {
                        map[index].offsetBottom = Infinity
                    }
                })

                return map;
            }

            function initSticky() {
                const aside = $('.ab__sfb-aside');
                const offset = aside.length ? $(contentsContainer).parentsUntil('.ab__sfb-aside').last().offset().top - aside.offset().top : 0;
                $('.ab__sfb-aside').css('--content-top', offset);
            }

            function checkScrollWatch(){
                const { top: cTop, bottom:cBottom } = contentsContainer.getBoundingClientRect();
                const { top: aTop, bottom: aBottom } = ARTICLE_CONTAINER.getBoundingClientRect();

                if (aBottom < cTop || cBottom < aTop ) {
                    contentsContainer.classList.remove(PROGRESS_CLASS);
                    return false
                }
                contentsContainer.classList.add(PROGRESS_CLASS);

                return  true
            }

            function mainCalculation(){
                const $container = $(contentsContainer);
                const containerActive = $container.hasClass('ab--sfb-scrolling');
                const scroll = $(document).scrollTop();
                const verticalOffset = Math.floor(window.innerHeight / 2);
                const totalOffset = scroll + (containerActive ? 0 : verticalOffset);
                const scrollProgress = ($(window).scrollTop() / ($(document).height() - $(window).height())).toFixed(3)
                $container.css('--ab-sfb-read', scrollProgress);
                if (containerActive) return;

                links.forEach((link, index) => {
                    if (totalOffset > link.offsetTop && totalOffset < link.offsetBottom) {
                        link.el.parentsUntil(CONTENTS_CONTAINER_SELECTOR + '>ul').each(function () {
                            const toggle = $(this).children('.ab--sfb-toggle')?.get(0);
                            if (!toggle || toggle.classList.contains('open')) return;
                            toggle.click();
                        })

                        link.el.addClass('active');
                        $container.data('active', link.el);
                        $container.data('activeIndex', index);
                        $container.data('read',scrollProgress);
                    } else {
                        link.el.removeClass('active');
                    }
                })
            }


                const contentObserver = new ResizeObserver($.debounce(()=>{
                    mapLinks();
                    initSticky();
                    }, 200));

                contentObserver.observe(ARTICLE_CONTAINER);

                mapLinks();
                addLinksClickListener();

                function scrollContents(){
                    const $container = $(contentsContainer);
                    const index =  $container.data('activeIndex');
                    const target = links[index];
                    if (!target) return;
                    const prevEl = links[index-1] || target;
                    const nextEl =  links[index+1] || target;
                    const { top, height } = contentsContainer.getBoundingClientRect();
                    const { top:prevTop, height: prevHeight } =  prevEl.el.get(0).getBoundingClientRect()
                    const { top:nextTop, height: nextHeight } = nextEl.el.get(0).getBoundingClientRect();

                    if (top > prevTop) {
                        prevEl.el.get(0).scrollIntoView({
                            behavior: 'smooth',
                            block:'nearest'
                        });
                    }else if (top+height < nextTop + nextHeight){
                        nextEl.el.get(0).scrollIntoView({
                            behavior: 'smooth',
                            block:'nearest'
                        });
                    }
                }

                function onScroll() {
                    checkScrollWatch() && mainCalculation()
                }

                $(document).ready(function () {
                    $(window).on('resize scroll', throttle(onScroll, 200));
                    onScroll();
                    $(window).on('scroll', $.debounce(scrollContents, 500));
                });

            }
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__seo_for_blog/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__seo_for_blog/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('runtime')['controller'] == "pages" && $_smarty_tpl->getValue('runtime')['mode'] == "view") {?>
    <?php echo '<script'; ?>
>
        (function (_, $) {
        const CONTENTS_CONTAINER_SELECTOR = '.ab__sfb-contents';
        const contentsContainer = document.querySelector('.ab__sfb-aside ' + CONTENTS_CONTAINER_SELECTOR) || document.querySelector(CONTENTS_CONTAINER_SELECTOR);
        const PROGRESS_CLASS = 'ab--sfb-active-scroll';
        const getContentsMargin = ()=> getComputedStyle(contentsContainer).getPropertyValue('--ab-sfb-top') || 70;
        const contentLinks = contentsContainer?.querySelectorAll('a');
        const isMobile = window.matchMedia('(max-width: 899px) and (max-height: 899px)').matches;
        let links = [];
        if (contentLinks?.length && !isMobile) {
            const ARTICLE_CONTAINER = document.querySelector('.ty-mainbox-container .ty-wysiwyg-content');
            contentsContainer.classList.add(PROGRESS_CLASS);

            function throttle(func, ms) {
                let isThrottled = false,
                    savedArgs,
                    savedThis;

                function wrapper() {
                    if (isThrottled) {
                        savedArgs = arguments;
                        savedThis = this;
                        return;
                    }

                    func.apply(this, arguments);

                    isThrottled = true;

                    setTimeout(function () {
                        isThrottled = false;
                        if (savedArgs) {
                            wrapper.apply(savedThis, savedArgs);
                            savedArgs = savedThis = null;
                        }
                    }, ms);
                }

                return wrapper;
            }

            const debouncedCallback = $.debounce(function (e, $container) {
                $container.data('active')?.removeClass('active');
                $container.data('active', $(e.target).addClass('active')).addClass('ab--sfb-scrolling');
                $('html, body').animate({
                        scrollTop: $($(e.target).attr('href')).offset().top - getContentsMargin()
                    },
                    199,
                    function () {
                        $container.removeClass('ab--sfb-scrolling');
                    })

            }, 200);

            function addLinksClickListener() {
                const $container = $(contentsContainer);
                $container.on('click', 'a', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    debouncedCallback(e, $container);
                })
            }

            function mapLinks(){
                const contentHeight = ARTICLE_CONTAINER.offsetHeight;
                links = mapContents(contentHeight);
            }

            function mapContents(contentHeight) {
                const map = [];
                contentLinks.forEach(function (el, index) {
                    const $el = $(el);
                    const $heading =  $($el.attr('href'));

                    if (!$heading.length) {
                        return;
                    }

                    const offsetTop = Math.floor($heading.offset().top);

                    map.push({
                        el: $el,
                        link: $el.attr('href'),
                        offsetTop,
                        offsetBottom: $(document).scrollTop() + contentHeight - offsetTop,
                        progress: 0,
                        toggle: $el.next('.ab--sfb-toggle')
                    })

                    if (index) {
                        map[index - 1].height = offsetTop - map[index - 1].offsetTop;
                        map[index - 1].offsetBottom = offsetTop;
                    }
                    if (index === contentLinks.length - 1) {
                        map[index].offsetBottom = Infinity
                    }
                })

                return map;
            }

            function initSticky() {
                const aside = $('.ab__sfb-aside');
                const offset = aside.length ? $(contentsContainer).parentsUntil('.ab__sfb-aside').last().offset().top - aside.offset().top : 0;
                $('.ab__sfb-aside').css('--content-top', offset);
            }

            function checkScrollWatch(){
                const { top: cTop, bottom:cBottom } = contentsContainer.getBoundingClientRect();
                const { top: aTop, bottom: aBottom } = ARTICLE_CONTAINER.getBoundingClientRect();

                if (aBottom < cTop || cBottom < aTop ) {
                    contentsContainer.classList.remove(PROGRESS_CLASS);
                    return false
                }
                contentsContainer.classList.add(PROGRESS_CLASS);

                return  true
            }

            function mainCalculation(){
                const $container = $(contentsContainer);
                const containerActive = $container.hasClass('ab--sfb-scrolling');
                const scroll = $(document).scrollTop();
                const verticalOffset = Math.floor(window.innerHeight / 2);
                const totalOffset = scroll + (containerActive ? 0 : verticalOffset);
                const scrollProgress = ($(window).scrollTop() / ($(document).height() - $(window).height())).toFixed(3)
                $container.css('--ab-sfb-read', scrollProgress);
                if (containerActive) return;

                links.forEach((link, index) => {
                    if (totalOffset > link.offsetTop && totalOffset < link.offsetBottom) {
                        link.el.parentsUntil(CONTENTS_CONTAINER_SELECTOR + '>ul').each(function () {
                            const toggle = $(this).children('.ab--sfb-toggle')?.get(0);
                            if (!toggle || toggle.classList.contains('open')) return;
                            toggle.click();
                        })

                        link.el.addClass('active');
                        $container.data('active', link.el);
                        $container.data('activeIndex', index);
                        $container.data('read',scrollProgress);
                    } else {
                        link.el.removeClass('active');
                    }
                })
            }


                const contentObserver = new ResizeObserver($.debounce(()=>{
                    mapLinks();
                    initSticky();
                    }, 200));

                contentObserver.observe(ARTICLE_CONTAINER);

                mapLinks();
                addLinksClickListener();

                function scrollContents(){
                    const $container = $(contentsContainer);
                    const index =  $container.data('activeIndex');
                    const target = links[index];
                    if (!target) return;
                    const prevEl = links[index-1] || target;
                    const nextEl =  links[index+1] || target;
                    const { top, height } = contentsContainer.getBoundingClientRect();
                    const { top:prevTop, height: prevHeight } =  prevEl.el.get(0).getBoundingClientRect()
                    const { top:nextTop, height: nextHeight } = nextEl.el.get(0).getBoundingClientRect();

                    if (top > prevTop) {
                        prevEl.el.get(0).scrollIntoView({
                            behavior: 'smooth',
                            block:'nearest'
                        });
                    }else if (top+height < nextTop + nextHeight){
                        nextEl.el.get(0).scrollIntoView({
                            behavior: 'smooth',
                            block:'nearest'
                        });
                    }
                }

                function onScroll() {
                    checkScrollWatch() && mainCalculation()
                }

                $(document).ready(function () {
                    $(window).on('resize scroll', throttle(onScroll, 200));
                    onScroll();
                    $(window).on('scroll', $.debounce(scrollContents, 500));
                });

            }
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }
}
}
}
