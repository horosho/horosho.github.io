<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<script src="<?php echo C_HD_l;?>js/general.js"></script>
	<script src="<?php echo C_HD_l;?>library/calendar/datepicker/ui.datepicker.js"></script><!-- for calendar -->
	
	<link rel="stylesheet" href="<?php echo C_HD_l;?>library/calendar/datepicker/ui.datepicker.css"><!-- for calendar -->
	
</head>
<body>

<?php 


echo date("M-d-Y W H:i", mktime(9, 0, 0, 6, 5, 2015));
echo '<br>';
//echo 'точка отсчета - '.date("M-d-Y H:i", mktime(0, 0, 0, 0, 0, 0)).', что соответствует '.mktime(0, 0, 0, 1, 1, 1970).' c<br>';
//date_default_timezone_set('Europe/London');
echo 'точка отсчета, как прописано, 1 января 1970, (код: '.gmdate("M-d-Y H:i:s", 0).' (на Гринвиче)), что соответствует - 0 c (код: '.mktime(0,0,0,1,1,1970).' c)<br>';
echo 'через одну секунду: '.gmdate("M-d-Y H:i:s", 1).'<br>';
echo 'и вот когда на гринвиче ноль, в этих городах было бы так:<br>';
echo 'Minsk<br>';
date_default_timezone_set('Europe/Minsk');echo date("d.m.y H:i:s",0);
echo'<br>';
echo (mktime(0,0,0,1,1,1970).' c<br>');
echo 'Bishkek<br>';
date_default_timezone_set('Asia/Bishkek');echo date("d.m.y H:i:s",0);
echo'<br>';
echo mktime(0,0,0,1,1,1970).' c<br>';


//Asia/Bishkek
echo'<br><br>Сегодня 15.05.25, Минск, разница с Гринвичем +3 часа (пример: в Минске 10 утра, в это время на Гринвиче 7 утра). Так вот, в Минске 1 янв 1970 в час ночи с учетом разницы показало бы: ';
date_default_timezone_set('Europe/Minsk');echo date("d.m.y H:i:s",0).', что соответствует '.mktime(1,0,0,1,1,1970).' c)<br>';
echo'<br>';

//echo (mktime(9, 0, 0, 6, 5, 2015));
echo '<br>';
echo '<br>';
?>
Сейчас:<br>
На сервере: <?php  echo date("d.m.y H:i");?><br>
По Гринвичу: <?php  echo gmdate("d.m.y H:i");?><br>
В Минске: <?php date_default_timezone_set('Europe/Minsk');echo date("d.m.y H:i");?><br>
<br>

	
Выбор даты и времени<br>
<p>Дата: <input name="date" class="datepickerTimeField" id="datepickerTimeField date" value="<?php  echo date("d.m.y");?>"></p>
<!-- js/general.js -->
<p>Время: 
				<select id="hours">
					<?php
					for ($i=0;$i<24;$i++){
						echo '<option>'.$i.'</option>';
					}
					?>
				</select> ч.
				<select id="minutes">
					<?php
					for ($i=0;$i<60;$i++){
						echo '<option>'.$i.'</option>';
					}
					?>
				</select> мин.
			</p>

	
</body>
</html>