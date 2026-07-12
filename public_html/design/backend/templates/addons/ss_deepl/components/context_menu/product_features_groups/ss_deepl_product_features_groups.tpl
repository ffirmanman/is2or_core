<li class="btn bulk-edit__btn bulk-edit__btn--actions dropleft-mod">
    <span class="bulk-edit__btn-content dropdown-toggle"
          data-toggle="dropdown"
    >
        {__("ss_deepl_context_menu")}
        <span class="caret mobile-hide"></span>
    </span>

    <ul class="dropdown-menu">
        <li>
            {btn type="list"
                text=__("ss_deepl_button_product_features_groups")
                dispatch="dispatch[ss_deepl.product_features_groups]"
            }
        </li>
    </ul>
</li>