{if $category_data.is_virtual=="Y" && fn_cvc_allow_linking()}
	<li class="divider"></li>
 	<li>{btn type="list" text=__("cvc.run_linking") class="cm-confirm" href="cvc.run_linking?cid=`$id`"}</li>
{/if}