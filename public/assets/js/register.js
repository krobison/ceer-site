//Binds

$('#category').on('change',function(){
	change_category($(this).val(),$("#category :selected").parent('optgroup').attr('label'));
});

$('#csm_checkbox').on('change',function(){
	change_school($(this).is(':checked'));
});

function change_category(category,group){
	$('#university_div').hide('slideUp');
	$('#department_div').hide('slideUp');
	$('#degree_div').hide('slideUp');
	$('#position_div').hide('slideUp');
	$('#industry_div').hide('slideUp');
	$('#description_div').hide('slideUp');

	if (group == "Participant"){
		$('#university_div').show('slideDown');
		$('#department_div').show('slideDown');
		$('#degree_div').show('slideDown');
	}

	if (group == "Judge"){
		$('#description_div').show('slideDown');
		if (category == "Faculty Judge"){
			$('#university_div').show('slideDown');
			$('#department_div').show('slideDown');
			$('#position_div').show('slideDown');
		}else{
			$('#industry_div').show('slideDown');
		}
	}
}

function change_school(isCSM){
	if(isCSM){
		$('#uni_div').hide("slideUp");
	}else{
		$('#uni_div').show("slideDown");
	}
}