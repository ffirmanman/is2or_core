{if $faq_block_id}
	{assign var="faq_pref" value=$faq_block_id}
{else}
    {if $product.variation_parent_product_id && $product.variation_group_id}
        {assign var="faq_pref" value=$product.variation_parent_product_id}
	{elseif $product.product_id}
		{assign var="faq_pref" value=$product.product_id}
	{else}
		{assign var="faq_pref" value="faq_pref"}
	{/if}
{/if}
{if $show_block_searh}
	{assign var="show_block_searh" value=$show_block_searh}
{else}
	{if $addons.cp_faq_addon.show_search_on_tab == "Y"}
		{assign var="show_block_searh" value="Y"}
	{else}
		{assign var="show_block_searh" value="N"}
	{/if}
{/if}
{if $req_no_hide_questions}
	{assign var="req_no_h_quest" value=$req_no_hide_questions}
{else}
	{assign var="req_no_h_quest" value="N"}
{/if}
{if $req_no_hide_answers}
	{assign var="req_no_h_answ" value=$req_no_hide_answers}
{else}
	{assign var="req_no_h_answ" value="N"}
{/if}
{if $no_hide_questions}
	{assign var="no_hide_questions" value=$no_hide_questions}
{else}
	{if $addons.cp_faq_addon.show_expanded_sections_tab == "Y"}
		{assign var="no_hide_questions" value="Y"}
	{else}
		{assign var="no_hide_questions" value="N"}
	{/if}
{/if}
{if $no_hide_answers}
	{assign var="no_hide_answers" value=$no_hide_answers}
{else}
	{if $addons.cp_faq_addon.show_expanded_questions == "Y"}
		{assign var="no_hide_answers" value="Y"}
	{else}
		{assign var="no_hide_answers" value="N"}
	{/if}
{/if}
{if $sect_back_items_ids} 
	{assign var="sect_back_items_ids" value=$sect_back_items_ids}
{elseif $product.cp_faq_sections}
	{foreach from=$product.cp_faq_sections item="sect"}
		{if !$sect_back_items_ids}
			{assign var="sect_back_items_ids" value=$sect.back_items_ids}
		{/if}
	{/foreach}
{/if}
{if $quest_back_items_ids} 
	{assign var="quest_back_items_ids" value=$quest_back_items_ids}
{elseif $product.cp_faq_questions}
	{foreach from=$product.cp_faq_questions item="quest"}
		{if !$block_items_ids}
			{assign var="quest_back_items_ids" value=$quest.back_items_ids}
		{/if}
	{/foreach}
{/if}
{if $faq_sections}
	{assign var="faq_sections" value=$faq_sections}
{elseif $product.cp_faq_sections}
	{assign var="faq_sections" value=$product.cp_faq_sections}
{/if}
{if $faq_questions}
	{assign var="faq_questions" value=$faq_questions}
{elseif $product.cp_faq_questions}
	{assign var="faq_questions" value=$product.cp_faq_questions}
{/if}

{if $show_block_searh && $show_block_searh == "Y" && ($faq_sections || $faq_questions)}
    <div class="ty-search-block cp-faq__search">
        <form action="{""|fn_url}" method="post" name="search_faq_quest_form" id="search_faq_quest_form" class="cm-ajax cm-submit">
            <input type="hidden" name="result_ids" value="cp_product_faq_tab_{$faq_pref}">
            
            {if $no_hide_questions}
                <input type="hidden" id="faq_hide_questions" name="faq_hide_questions" value="{$no_hide_questions}">
            {/if}
            {if $no_hide_answers}
                <input type="hidden" id="faq_hide_answers" name="faq_hide_answers" value="{$no_hide_answers}">
            {/if}
            {if $faq_pref}
                <input type="hidden" id="faq_block_id" name="faq_block_id" value="{$faq_pref}">
            {/if}
            {if $sect_back_items_ids}
                <input type="hidden" id="faq_block_sections_items" name="block_sect_items_ids" value="{$sect_back_items_ids}">
            {/if}
            {if $quest_back_items_ids}
                <input type="hidden" id="faq_block_questions_items" name="block_quest_items_ids" value="{$quest_back_items_ids}">
            {/if}
            {if $product.variation_parent_product_id && $product.variation_group_id}
                <input type="hidden" name="product_id" value="{$product.variation_parent_product_id}">
            {elseif $product}
                <input type="hidden" name="product_id" value="{$product.product_id}">
            {/if}
            {if $show_block_searh}
                <input type="hidden" id="show_block_searh" name="show_block_searh" value="{$show_block_searh}">
            {/if}
                {strip}
                <div id="magnifere_but">{include file="buttons/magnifier.tpl" but_name="cp_faq_addon.tab_faq_search" alt=__("search") }</div>
                <input type="text" name="faq_request" id="elm_faq_search_{$faq_pref}" value="{$search_back}" size="5" placeholder="{__("search")}" class="ty-search-block__input cm-hint" />
            {/strip}
        </form>
    </div>
{/if}
{if $faq_sections || $faq_questions || $search_done}
<div id="cp_product_faq_tab_{$faq_pref}">
    {if $faq_sections || $faq_questions}
        {if $faq_sections}
            <div class="cp-faq__list-block" id="all_faq_{$faq_pref}">
                {foreach from=$faq_sections key="sect_id" item="faq_section"}
                    {if $faq_section.faq_questions}
                        <div class="cm-combination cp-faq__section {if $no_hide_questions && $no_hide_questions == "N" && $req_no_h_quest && $req_no_h_quest == "N"}{else}open{/if}" id="sw_section_{$faq_section.faq_section_id}_{$faq_pref}">
                            <div class="cp-faq__section-element">
                                {if $faq_section.icon_class}
                                    <div class="cp-faq__section-icon">
                                        <span><i class="cp-faq__icon {$faq_section.icon_class}"></i></span>
                                    </div>                                  
                                {/if}
                                <div class="cp-faq__section-name">
                                    <span>{$faq_section.faq_section_name nofilter}</span>
                                </div>
                            </div>
                        </div>                        
                        <div id="section_{$faq_section.faq_section_id}_{$faq_pref}" class="{if $no_hide_questions && $no_hide_questions == "N" && $req_no_h_quest && $req_no_h_quest == "N"}hidden{/if}">
                            <div class="cp-faq__questions">
                                <span class=" caret-top"><span class=" caret-outer"></span><span class=" caret-inner"></span></span>
                                {foreach from=$faq_section.faq_questions item="faq_question"}
                                    <div class="cp-faq__question-element">
                                        <div id="sw_sec_question_{$faq_question.faq_question_id}_{$faq_pref}" class="cm-combination {if $no_hide_answers && $no_hide_answers == "N" && $req_no_h_answ && $req_no_h_answ == "N"}{else}open{/if}">
                                            {if $faq_question.qu_icon_class}
                                                <div class="cp-faq__question-icon">
                                                    <span><i class="cp-faq__icon {$faq_question.qu_icon_class}"></i></span>
                                                </div>
                                            {/if}
                                            <div class="cp-faq__question-name">
                                                <span {if $faq_question.qu_anchor}data-scroll-id="{$faq_question.qu_anchor}"{/if} data-pref="{$faq_pref}" data-sec-id="{$faq_section.faq_section_id}" data-quest-id="{$faq_question.faq_question_id}">{$faq_question.faq_question}</span>
                                            </div>
                                        </div>
                                        <div class="cp-faq__answer ty-wysiwyg-content {if $no_hide_answers && $no_hide_answers == "N" && $req_no_h_answ && $req_no_h_answ == "N"}hidden{/if}" id="sec_question_{$faq_question.faq_question_id}_{$faq_pref}">
                                            <span>{$faq_question.faq_answer nofilter}</span>
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                        </div>
                    {/if}
                {/foreach}
            </div>
        {/if}
        {if $faq_questions}
            <div class="cp-faq__questions" id="faq_questions_{$faq_pref}">
                {foreach from=$faq_questions item=item}
                    <div class="cp-faq__question-element">
                        <div id="sw_question_{$item.faq_question_id}_{$faq_pref}" class="cm-combination">
                            {if $item.qu_icon_class}
                                <div class="cp-faq__question-icon">
                                    <span><i class="cp-faq__icon {$item.qu_icon_class}"></i></span>
                                </div>
                            {/if}
                            <div class="cp-faq__question-name">
                                 <span {if $item.qu_anchor}data-scroll-id="{$item.qu_anchor}"{/if} data-pref="{$faq_pref}" data-quest-id="{$item.faq_question_id}" class="faq-landing-ico-list__item-title cp-faq-pointer">{$item.faq_question}</span>
                            </div>
                        </div>
                        <div class="cp-faq__answer ty-wysiwyg-content {if $no_hide_answers && $no_hide_answers == "N" && $req_no_h_answ && $req_no_h_answ == "N"}hidden{/if}" id="question_{$item.faq_question_id}_{$faq_pref}">
                            <span>{$item.faq_answer nofilter}</span>
                        </div>
                    </div>
                {/foreach}
            </div>
        {/if}
    {else}
        <div class="cp-no-items">{__("no_data")}</div>
    {/if}
<!--cp_product_faq_tab_{$faq_pref}--></div>
<script language="javascript">
    (function(_,$){
        $(document).ready(function(){
            var target= window.location.hash;
            var split = target.split("#");
            var data_id = split[1];
            var $target =  $('[data-scroll-id ='+data_id+']');
            var sec_id = $('[data-scroll-id ='+data_id+']').attr("data-sec-id");
            var quest_id = $('[data-scroll-id ='+data_id+']').attr("data-quest-id");
            var prefix = $('[data-scroll-id ='+data_id+']').attr("data-pref");
            $('#sec_question_'+quest_id+'_'+prefix).removeClass("hidden");
            if (sec_id) {
                $('#section_'+sec_id+'_'+prefix).removeClass("hidden");
            }
            if (quest_id) {
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top - 30
                }, 900, 'swing', function () {
                    window.location.hash = target;
                });
            }
        });
    })(Tygh,Tygh.$);
</script>
{/if}