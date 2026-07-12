{strip}
{if !empty($category_data.ab__mcd_descs) and ((empty($smarty.request.page) or $smarty.request.page == 1) or ($runtime.controller == "product_features" && $runtime.mode == "view"))}
    <div class="ab__mcd_descs row-fluid">
        <div class="row-fluid">
            {$mh=""}
            {if $addons.ab__multiple_cat_descriptions.max_height != "disabled"}
                {$mh="max-height: {$addons.ab__multiple_cat_descriptions.max_height|default:500}px; overflow-y:auto;"}
            {/if}

            {$is_exist_main_description = $category_data.ab__mcd_descs[0].main}
            {$is_exist_multi_descriptions = ($category_data.ab__mcd_descs[0].main && count($category_data.ab__mcd_descs) >= 2) || (!$category_data.ab__mcd_descs[0].main && count($category_data.ab__mcd_descs) >= 1)}
            {$split_block = $is_exist_main_description && $is_exist_multi_descriptions}

            
            {if $is_exist_main_description}
            <div class="{if $split_block}span8 {/if}ab__mcd_descs_left">
                {foreach $category_data.ab__mcd_descs as $d}
                    {if $d.main}
                        <div class="ty-wysiwyg-content ty-mb-s">{$d.description nofilter}</div>
                    {else}{break}{/if}
                {/foreach}
            </div>
            {/if}

            
            {if $is_exist_multi_descriptions}
            {capture name="under_accordion"}{/capture}
            <div class="{if $split_block}span8 {/if}ab__mcd_descs_right">
                {if $category_data.ab__mcd_object}
                    <{$category_data.ab__mcd_object.tag} class="ab-md-header">{$category_data.ab__mcd_object.title nofilter}</{$category_data.ab__mcd_object.tag}>
                {/if}
                <ul>
                {$mark_as_faqpage=["@context" => "https://schema.org", "@type" => "FAQPage", "mainEntity" => []]}
                {foreach $category_data.ab__mcd_descs as $d}
                    {if $d.main}{continue}{/if}
                    {if $d.is_faq == 'Y'}{$mark_as_faqpage['mainEntity'][]=["@type" => "Question", "name" => $d.title, "acceptedAnswer" => ["@type" => "Answer", "text" => $d.description]]}{/if}
                    {if $d.position_on_page == "Addons\\Ab_multipleCatDescriptions\\PagePositions::UNDER"|enum}
                        {capture name="under_accordion"}
                        {$smarty.capture.under_accordion nofilter}
                            <li>
                            <{$d.tag|default:'div'} class="ty-hand ab__mcd_descs_title">{$d.title nofilter}</{$d.tag|default:'div'}>
                                <div id="ab__mcd_{$d@key}" class="">
                                    <div class="ab__mcd_descs-section-content ty-wysiwyg-content" style="{$mh nofilter}">{$d.description nofilter}</div>
                                </div>
                            </li>
                        {/capture}
                    {else}
                    {$is_open = $d.is_open == 'Y'}
                    <li>
                        <{$d.tag|default:'div'} id="sw_ab__mcd_{$d@key}" class="cm-combination ty-hand ab__mcd_descs_title{if $is_open} open{/if}">{$d.title nofilter}</{$d.tag|default:'div'}>
                        <i id="on_ab__mcd_{$d@key}" class="ty-icon-down-open cm-combination{if $is_open} hidden{/if}"></i>
                        <i id="off_ab__mcd_{$d@key}" class="ty-icon-up-open cm-combination{if !$is_open} hidden{/if}"></i>
                        <div id="ab__mcd_{$d@key}" class="{if !$is_open} hidden{/if}">
                            <div class="ab__mcd_descs-section-content ty-wysiwyg-content" style="{$mh nofilter}">{$d.description nofilter}</div>
                        </div>
                    </li>
                    {/if}
                {/foreach}
                    {if $smarty.capture.under_accordion|trim}
                        {$smarty.capture.under_accordion nofilter}
                    {/if}
                </ul>
            </div>

            
            {if !"AJAX_REQUEST"|defined && $mark_as_faqpage['mainEntity']}
                <script type="application/ld+json" data-no-defer>{$mark_as_faqpage|json_encode nofilter}</script>
            {/if}

            {/if}
        </div>
    </div>
{elseif $category_data.description|trim}
    <div class="ty-wysiwyg-content ty-mb-s">{$category_data.description nofilter}</div>
{else}&nbsp;{/if}
{/strip}
