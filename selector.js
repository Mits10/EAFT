$(document).ready(function(){
	var patId = 100000001;
    require('investiogationinfo.php');
	$('input[name="patient-id"]').attr('value',patId);
});