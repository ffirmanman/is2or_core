{include file="addons/ab__seo_for_blog/blocks/static_templates/ab__sfb_author_data.tpl" page=['author_data'=>$author_data] author_full=true}

{$page=[
    "page_type" => $smarty.const.PAGE_TYPE_BLOG
]}

{include file="views/pages/view.tpl" page=$page subpages=$pages }