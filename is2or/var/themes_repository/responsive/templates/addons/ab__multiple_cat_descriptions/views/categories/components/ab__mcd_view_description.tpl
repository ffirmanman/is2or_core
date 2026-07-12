{strip}
{if !empty($category_data.ab__mcd_descs) and ((empty($smarty.request.page) or $smarty.request.page == 1) or ($runtime.controller == "product_features" && $runtime.mode == "view"))}
    <div class="ab__mcd_descs ty-mb-s ty-mt-m">
        {$mh=""}
        {if $addons.ab__multiple_cat_descriptions.max_height != "disabled"}
            {$mh="max-height: {$addons.ab__multiple_cat_descriptions.max_height|default:500}px; overflow-y:auto;"}
        {/if}

        {$is_exist_main_description = $category_data.ab__mcd_descs[0].main}
        {$is_exist_multi_descriptions = ($category_data.ab__mcd_descs[0].main && count($category_data.ab__mcd_descs) >= 2) || (!$category_data.ab__mcd_descs[0].main && count($category_data.ab__mcd_descs) >= 1)}

        {if $is_exist_main_description}
            <div class="ty-wysiwyg-content ty-mb-s">{$category_data.ab__mcd_descs[0].description nofilter}</div>
        {/if}

        {if $is_exist_multi_descriptions}
        {capture name="under_accordion"}{/capture}
            {if $category_data.ab__mcd_object}
                <{$category_data.ab__mcd_object.tag} class="ab-md-header">{$category_data.ab__mcd_object.title nofilter}</{$category_data.ab__mcd_object.tag}>
            {/if}

            {$mark_as_faqpage=["@context" => "https://schema.org", "@type" => "FAQPage", "mainEntity" => []]}
            {foreach $category_data.ab__mcd_descs as $d}
                {if $d.main}{continue}{/if}
                {if $d.is_faq == 'Y'}{$mark_as_faqpage['mainEntity'][]=["@type" => "Question", "name" => $d.title, "acceptedAnswer" => ["@type" => "Answer", "text" => $d.description]]}{/if}
                {if $d.position_on_page == "Addons\\Ab_multipleCatDescriptions\\PagePositions::UNDER"|enum}
                    {capture name="under_accordion"}
                        {$smarty.capture.under_accordion nofilter}
                        <div class="ab__mcd_descs-section">
                            <div class="ab__mcd_descs-section-title ty-hand">
                                <{$d.tag|default:'div'}>{$d.title nofilter}</{$d.tag|default:'div'}>
                        </div>

                        <div id="ab__mcd_{$d@key}">
                            <div class="ab__mcd_descs-section-content ty-wysiwyg-content" style="{$mh nofilter}">{$d.description nofilter}</div>
                        </div>
                        </div>
                    {/capture}
                {else}
                <div class="ab__mcd_descs-section">
                    {$is_open = $d.main || $d.is_open == 'Y'}
                    <div class="ab__mcd_descs-section-title cm-combination ty-hand{if $is_open} open{/if}" id="sw_ab__mcd_{$d@key}">
                        <{$d.tag|default:'div'}>{$d.title nofilter}</{$d.tag|default:'div'}>
                        <i id="on_ab__mcd_{$d@key}" class="ty-icon-down-open cm-combination{if $is_open} hidden{/if}"></i>
                        <i id="off_ab__mcd_{$d@key}" class="ty-icon-up-open cm-combination{if !$is_open} hidden{/if}"></i>
                    </div>

                    <div id="ab__mcd_{$d@key}" class="{if !$is_open} hidden{/if}">
                        <div class="ab__mcd_descs-section-content ty-wysiwyg-content" style="{$mh nofilter}">{$d.description nofilter}</div>
                    </div>
                </div>
                {/if}
            {/foreach}
            
            {if $smarty.capture.under_accordion|trim}
                    {$smarty.capture.under_accordion nofilter}
            {/if}
            
            {if !"AJAX_REQUEST"|defined && $mark_as_faqpage['mainEntity']}
                <script type="application/ld+json" data-no-defer>{$mark_as_faqpage|json_encode nofilter}</script>
            {/if}
        {/if}
    </div>

{elseif $category_data.description|trim}
    <div class="ty-wysiwyg-content ty-mb-s">{$category_data.description nofilter}</div>
{else}&nbsp;{/if}
{/strip}
