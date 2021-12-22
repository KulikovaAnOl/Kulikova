<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Куликова</title>
</head>
<body>
		<FORM method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
			Введите ваше имя(либо псевдоним) <br>
			<input type="text" name="name">
			<div>
				1.Считаете ли Вы, что у многих ваших знакомых хороший характер?
				<br>
				Да<INPUT type="radio" name="1" size="3" value="plus">
				Нет<INPUT type="radio" name="1" size="3" value="minus">
			</div>
			<div>
				2.Раздражают ли Вас мелкие повседневные обязанности?<br>
				Да<INPUT type="radio" name="2" size="3" value="plus">
				Нет<INPUT type="radio" name="2" size="3" value="minus">
			</div>
			<div>
				3 Верите ли Вы, что ваши друзья преданы Вам?<br>
				Да<INPUT type="radio" name="3" size="3" value="plus">
				Нет<INPUT type="radio" name="3" size="3" value="minus">
			</div>
			<div>
				4 Неприятно ли Вам, когда незнакомый человек делает Вам замечание?<br>
				Да<INPUT type="radio" name="4" size="3" value="plus">
				Нет<INPUT type="radio" name="4" size="3" value="minus">
			</div>
			<div>
				5 Способны ли Вы ударить собаку или кошку?<br>
				Да<INPUT type="radio" name="5" size="3" value="plus">
				Нет<INPUT type="radio" name="5" size="3" value="minus">
			</div>
			<div>
				6 Часто ли Вы принимаете лекарства?<br>
				Да<INPUT type="radio" name="6" size="3" value="plus">
				Нет<INPUT type="radio" name="6" size="3" value="minus">
			</div>
			<div>
				7 Часто ли Вы меняете магазин, в который ходите за продуктами?<br>
				Да<INPUT type="radio" name="7" size="3" value="plus">
				Нет<INPUT type="radio" name="7" size="3" value="minus">
			</div>
			<div>
				8 Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?<br>
				Да<INPUT type="radio" name="8" size="3" value="plus">
				Нет<INPUT type="radio" name="8" size="3" value="minus">
			</div>
			<div>
				9 Тяготят ли Вас общественные обязанности?<br>
				Да<INPUT type="radio" name="9" size="3" value="plus">
				Нет<INPUT type="radio" name="9" size="3" value="minus">
			</div>
			<div>
				10 Способны ли Вы ждать более 5 минут, не проявляя беспокойства?<br>
				Да<INPUT type="radio" name="10" size="3" value="plus">
				Нет<INPUT type="radio" name="10" size="3" value="minus">
			</div>
			<div>
				11 Часто ли Вам приходят в голову мысли о Вашей невезучести?<br>
				Да<INPUT type="radio" name="11" size="3" value="plus">
				Нет<INPUT type="radio" name="11" size="3" value="minus">
			</div>
			<div>
				12 Сохранилась ли у Вас фигура по сравнению с прошлым?<br>
				Да<INPUT type="radio" name="12" size="3" value="plus">
				Нет<INPUT type="radio" name="12" size="3" value="minus">
			</div>
			<div>
				13 Можете ли Вы с улыбкой воспринимать подтрунивание друзей?<br>
				Да<INPUT type="radio" name="13" size="3" value="plus">
				Нет<INPUT type="radio" name="13" size="3" value="minus">
			</div>
			<div>
				14 Нравится ли Вам семейная жизнь?<br>
				Да<INPUT type="radio" name="14" size="3" value="plus">
				Нет<INPUT type="radio" name="14" size="3" value="minus">
			</div>
			<div>
				15 Злопамятны ли Вы?<br>
				Да<INPUT type="radio" name="15" size="3" value="plus">
				Нет<INPUT type="radio" name="15" size="3" value="minus">
			</div>
			<div>
				16 Находите ли Вы, что стоит погода, типичная для данного времени года?<br>
				Да<INPUT type="radio" name="16" size="3" value="plus">
				Нет<INPUT type="radio" name="16" size="3" value="minus">
			</div>
			<div>
				17 Случается ли Вам с утра быть в плохом настроении?<br>
				Да<INPUT type="radio" name="17" size="3" value="plus">
				Нет<INPUT type="radio" name="17" size="3" value="minus">
			</div>
			<div>
				18 Раздражает ли Вас современная живопись?<br>
				Да<INPUT type="radio" name="18" size="3" value="plus">
				Нет<INPUT type="radio" name="18" size="3" value="minus">
			</div>
			<div>
				19 Надоедает ли Вам присутствие чужих детей в доме более одного часа?<br>
				Да<INPUT type="radio" name="19" size="3" value="plus">
				Нет<INPUT type="radio" name="19" size="3" value="minus">
			</div>
			<div>
				20 Надоедает ли Вам делать лабораторные по PHP?<br>
				Да<INPUT type="radio" name="20" size="3" value="plus">
				Нет<INPUT type="radio" name="20" size="3" value="minus">
			</div>
		
		

		<P> <INPUT type="submit" name="obr" value="Проверить">
	</FORM>
	<?
		if (isset($_POST["obr"])) {
			$sum=0;
			for ($i=1; $i < 21 ; $i++) { 
				if ($_POST[$i] == "plus") {
					$sum++;
				} else {
					$sum--;
				}
			}
			echo $_POST["name"] . "<br>"; 
			if ($sum > 15) {
				echo "У Вас покладистый характер";
			} elseif ($sum < 15 and $sum > 8) {
				echo "Вы не лишены недостатков, но с вами можно ладить";
			} else {
				echo "Вашим друзьям можно посочувствовать";
			}
		}
	?>
</body>
</html>