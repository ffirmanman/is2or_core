<div class="hidden" id="content_ab__custom_h1">
{$lang_var = 'page'}
{if $page_data.page_type == 'B'}{$lang_var = 'blog'}{/if}
{include file='addons/ab__custom_h1/views/ab__ch1/components/custom_h1_filed.tpl' object_type='page' lang_var=$lang_var hide_header=true}
</div>