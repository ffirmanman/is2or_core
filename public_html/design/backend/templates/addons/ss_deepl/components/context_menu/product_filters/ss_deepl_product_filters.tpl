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
                text=__("ss_deepl_button_product_filters")
                dispatch="dispatch[ss_deepl.product_filters]"
            }
        </li>
    </ul>
</li>