<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Куликова</title>
</head>
<body>
	
		<FORM method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
		Введите числа
		Первое число <INPUT type="text" name="a" size="3">
		Второе число <INPUT type="text" name="b" size="3">
		<SELECT NAME="z" SIZE="1">
		<OPTION VALUE="1" SELECTED> Умножить
		<OPTION VALUE="2"> Сложить
		<OPTION VALUE="3"> Вычесть
			<OPTION VALUE="4"> Разделить
		</SELECT>

		<P> <INPUT type="submit" name="obr" value="Проверить">
	</FORM>
	<?
		if (isset($_POST["obr"])) {
			$s1 = $_POST["a"];
			$s2 = $_POST["b"];
			$s3=0;
			switch ($_POST["z"]) {
				case 1:
					$s3 = $s1 * $s2;
					break;
				case 2:
					$s3 = $s1 + $s2;
					break;
				case 3:
					$s3 = $s1 - $s2;
					break;
				case 4:
					$s3 = $s1 / $s2;
					break;
				
				default:
					# code...
					break;
			}
			echo "Результат = ". $s3;
	}
	?>
</body>
</html>