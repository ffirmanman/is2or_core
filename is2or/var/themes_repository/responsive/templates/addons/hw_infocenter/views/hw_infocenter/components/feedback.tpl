{if $addons.discussion.status == 'A'}
<div class="hw-infocenter__feedback">
    <h4>{__('infocenter.ask.feedback')}</h4>
    <div id="feedback-step-1">
        <a href="javascript:void(0)" id="feedback-yes">{__('infocenter.ask.yes')}</a>
        <a href="javascript:void(0)" id="feedback-no">{__('infocenter.ask.no')}</a>
    </div>

    <div id="feedback-step-2" class="hidden">
        <p>{__('infocenter.feedback.yes')}</p>
    </div>
    
    <div id="feedback-step-3" class="hidden">
        <p>{__('infocenter.feedback.no')}</p>
        <textarea id="feedback" required></textarea>
        <div>
            <a href="javascript:void(0)" id="feedback-send">{__('infocenter.feedback.send')}</a>
            <p>{__('infocenter.feedback.no.info')}</p>
        </div>
    </div> 
    
    <div id="feedback-step-4" class="hidden">
        <p>{__('infocenter.feedback.thankyou')}</p>
    </div>    
</div>
<script>
(function(_, $) {
    $(document).ready(function () {
        $('#feedback-yes').click(function(){
            $('#feedback-step-1').hide();
            $('#feedback-step-2').removeClass('hidden');
            fn_hw_infocenter_feedback('yes','');
        });
        $('#feedback-no').click(function(){
            $('#feedback-step-1').hide();
            $('#feedback-step-3').removeClass('hidden');
            fn_hw_infocenter_feedback('no','');
        }); 
        $('#feedback-send').click(function(){
            if($('#feedback').val()==''){
                $('#feedback').css('border-color', 'red');
                return false;
            }
            $('#feedback-step-3').hide();
            $('#feedback-step-4').removeClass('hidden');
            fn_hw_infocenter_feedback('no',$('#feedback').val());
        });
        
        function fn_hw_infocenter_feedback(type,message){
            $.ceAjax('request', fn_url('hw_infocenter.feedback') ,{
                data: {
                    'id': {$page.page_id},
                    'type': type,
                    'message': message
                },
                method: 'POST',
                hidden: true
            });
        }
    });
}(Tygh, Tygh.$));
</script>
{/if}