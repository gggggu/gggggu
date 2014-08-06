
$(document).ready(function(){
	$("#check_all").change(function(){
		if($("#check_all").is(':checked')){
			$('td.checkboxes input').prop('checked', true);			
		}else{
			$('td.checkboxes input').removeAttr("checked");
		}
		return false;				
	})
	$('#date').datepicker();	
	
var $submit = $("input[type=submit]");
if ( $("input:empty").length > 0 ) {
   $submit.prop('disabled', true);
} else {
   $submit.removeAttr("disabled");
}
})
