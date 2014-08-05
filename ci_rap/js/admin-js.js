
$(document).ready(function(){
	$("#check_all").change(function(){
		if($("#check_all").is(':checked')){
			$('td.checkboxes input').prop('checked', true);
			// attr("checked","checked");
		}else{
			$('td.checkboxes input').removeAttr("checked");
		}
		return false;				
	})
	$('#date').datepicker();
})
