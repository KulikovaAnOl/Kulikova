<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Куликова</title>
</head>
<body>
	
		<FORM method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
		(Пример:Анастасия) Введите Логин
		<INPUT type="text" name="a" size="3">
		

		<P> <INPUT type="submit" name="obr" value="Проверить">
	</FORM>
	<?
		if (isset($_POST["obr"])) {
			$s1 = $_POST["a"];
			$logitn = array("Анастасия", "Андрей", "Алексей", "Зухра");
			$answer;
			for ($i=0; $i < count($logitn) ; $i++) { 
				if ($s1 == $logitn[$i]) {
					$answer = "Здравствуйте," . $logitn[$i];
					break;
				} else {
					$answer = "Вы не зарегестрированный пользователь!";
				}
			}
			echo $answer;
	}
	?>
</body>
</html>