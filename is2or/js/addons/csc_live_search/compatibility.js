/* Unitheme 2 floating bottom bar */
if ($('.ut2-btn-search.ut2-sticky-panel__link').length){
	$(document).ready(function(){
		$('.ut2-btn-search.ut2-sticky-panel__link').attr('onclick', '').removeClass('cm-abt--ut2-toggle-scroll');
	});	
	$(document).on('click', '.ut2-sticky-panel__wrap .clsCloser', function(){
		setTimeout(function(){
			$('#off_dropdown_sticky_item_search').click();
		}, 100);
	});
	$(document).on('click', '.ut2-btn-search.ut2-sticky-panel__link:not(#off_dropdown_sticky_item_search)', function(){
		var elm  = $(this).parent().find('.ty-search-block form');		
		setTimeout(function(elm){			
			var input = $(elm).find('.ty-search-block__input')[0];		
			input.focus();			
			strLength = $(input).val().length * 2;
			input.setSelectionRange(strLength, strLength);
			
		}, 200, elm);		
		$(elm).find('.clsNoTransition').trigger('mouseup');
	}); 
}