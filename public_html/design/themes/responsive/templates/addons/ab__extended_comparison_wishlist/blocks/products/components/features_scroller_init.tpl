{strip}
<script>
    (function(_, $) {
        var scroller = document.getElementById('scroll_list_{$block.block_id}');
        if (!scroller.classList.contains('inited')) {

            var feature_variants_wrappers = scroller.parentElement.parentElement.querySelectorAll('.ab-ec-comparison-features__variants');
            var feature_variants = scroller.parentElement.parentElement.querySelectorAll('.ab-ec-comparison-features__variant');
            var once_inited = false;

            feature_variants.forEach(variant => {
                variant.style.width = '';
            });

            scroller.classList.add('inited');

            var dots_wrap = document.getElementById('{$block.block_id}_dots');
            var dots = [];

            if (dots_wrap !== undefined && dots_wrap !== null) {
                dots = dots_wrap.querySelectorAll('.ab-ec-dots__item');
            }

            var run_init = function () {
                if (scroller.style.display === 'block') {
                    var $scroller = $(scroller);
                    var owl_settings = $scroller.data('owlCarousel');

                    if (dots.length) {
                        /** TODO: Remove this */
                        $scroller.trigger('owl.goTo', 1);

                        if (owl_settings.visibleItems.length === dots.length) {
                            dots_wrap.style.display = 'none';
                        }

                        owl_settings.options.afterAction = function () {
                            var options = this;
                            if (options.visibleItems.length === dots.length) {
                                dots_wrap.style.display = 'none';
                            } else {
                                dots_wrap.style.display = '';
                                dots.forEach((item, index) => {
                                    if (~options.visibleItems.indexOf(index)) {
                                        item.classList.add('active');
                                    } else {
                                        item.classList.remove('active');
                                    }
                                });
                            }
                        };

                        /** TODO: Remove this */
                        $scroller.trigger('owl.goTo', 0);

                        dots.forEach((item, index) => {
                            item.onclick = function () {
                                if (!item.classList.contains('active')) {
                                    if (index >= owl_settings.visibleItems.length) {
                                        $scroller.trigger('owl.goTo', index + 1 - owl_settings.visibleItems.length);
                                    } else {
                                        $scroller.trigger('owl.goTo', index);
                                    }
                                }
                            };
                        });
                    }

                    var wrapper = owl_settings['$owlWrapper'][0];
                    $scroller.on('owl.next owl.prev touchend mouseup', function () {
                        setTimeout(function(){
                            var transition_speed = wrapper.style.transition;

                            if (transition_speed.length) {
                                var scroll = wrapper.style.transform.split('(')[1].split(',')[0];

                                feature_variants_wrappers.forEach(wrapper => {
                                    wrapper.style.transition = transition_speed;
                                    wrapper.style.transform = 'translateX(' + scroll + ')';
                                });
                            }
                        }, 15);
                    });

                    var recalc_items = function(){
                        setTimeout(function(){
                            var item_width = scroller.querySelector('.owl-item').style.width;
                            feature_variants.forEach(variant => {
                                variant.style.width = item_width;
                                variant.style.minWidth = item_width;

                                if (once_inited === false) {
                                    variant.style.visibility = 'visible';
                                }
                            });

                            once_inited = true;
                        }, 200);
                    };

                    window.onresize = recalc_items;
                    recalc_items();
                } else {
                    setTimeout(function () {
                        run_init();
                    }, 100);
                }
            };

            run_init();
        }
    })(Tygh, Tygh.$);
</script>
{/strip}