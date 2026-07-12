{style src="addons/ab__fast_navigation/styles.less"}
{if $language_direction == 'rtl' && !in_array($runtime.layout.theme_name, ["abt__unitheme2", "abt__youpitheme"])}
    {style src="addons/ab__fast_navigation/rtl.less"}
{/if}