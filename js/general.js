/* first way*/
/*
//когда пользователь кликает по Food
$(document).ready(function(){
	$('#food').click( function(){
		//параметры
		var url = 'food.html';
		var result_id = '#updateInfo';
		// Отсылаем паметры
		$.ajax({
			type: 'POST',
			url: url,
			// Выводим result
			success: function(html){
				//предварительно очищаем нужный элемент страницы
				$(result_id).empty();
				//и выводим ответ php скрипта
				$(result_id).append(html);
			},
			error: function(response) { //Если ошибка 
				document.getElementById('updateInfo').innerHTML = "Ошибка"; 
			}
		});
	});
}); */

/* second way*/
function ajaxWithoutData(url,result_id){
	// Отсылаем паметры
		$.ajax({
			type: 'POST',
			url: url,
			// Выводим result
			success: function(html){
				//предварительно очищаем нужный элемент страницы
				$(result_id).empty();
				//и выводим ответ php скрипта
				$(result_id).append(html);
			},
			error: function(response) { //Если ошибка 
				$(result_id).innerHTML = "Ошибка"; 
			}
		});
};

//когда пользователь кликает по Food
$(document).ready(function(){
	$('#food').click( function(){
		ajaxWithoutData(url = 'food.html',result_id = '#updateInfo');
	});
});