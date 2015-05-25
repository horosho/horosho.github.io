//for datepicker-calendar
$(document).ready(
	function(){

$(".datepickerTimeField").datepicker({
	changeMonth: true,
	changeYear: true,
	dateFormat: 'dd.mm.yy',
	firstDay: 1, changeFirstDay: false,
	navigationAsDateFormat: false,
	duration: 0// отключаем эффект появления
});

			}
);
//end - for datepicker-calendar