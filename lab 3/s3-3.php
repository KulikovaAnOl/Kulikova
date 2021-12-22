<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Куликова</title>
</head>
<body>

		<FORM method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
		Введите число <INPUT type="text" name="a" size="3">
		<SELECT NAME="z" SIZE="1">
			<OPTION VALUE="1" SELECTED> Четные делители
			<OPTION VALUE="2"> Нечетные делители
			<OPTION VALUE="3"> Простые делители
			<OPTION VALUE="4"> составные делители
			<OPTION VALUE="5"> Все делители
		</SELECT>

		<P> <INPUT type="submit" name="obr" value="Проверить">
	</FORM>
	<?
		if (isset($_POST["obr"])) {
			$s1 = $_POST["a"];
			$s2 = array();
			for ($i=1; $i < $s1 ; $i++) { 
				if ($s1 % $i == 0) {
					$s2[] = $i;
				}
			}
			echo "результат <br>" ;
			switch ($_POST["z"]) {
				case 1:
				for ($i=0; $i < count($s2) ; $i++) { 
					if ($s2[$i] % 2 == 0 and  $s1 % $s2[$i] == 0) {
						echo $s2[$i] . " ";
					}
				}
				break;
				case 2:
					for ($i=0; $i < count($s2) ; $i++) { 
						if ($s2[$i] % 2 != 0 and $s1 % $s2[$i] == 0) {
							echo $s2[$i] . " ";
						}
					}
					break;
				case 3:
					for ($i=0; $i < count($s2) ; $i++) { 
						if ($s1 % $s2[$i] == 0) {
							for ($k=2; $k < $s2[$i] ; $k++) { 
								if ($s2[$i] % $k == 0 ) {
									return false;
								}
							}
							echo $s2[$i] . " ";
						}
					}
					break;
				case 4:
					for ($i=0; $i < count($s2) ; $i++) { 
							for ($k=2; $k < $s2[$i] ; $k++) { 
								if ($s2[$i] % $k == 0 ) {
									echo $s2[$i] . " ";
								} else {
									continue;
								}
								
							}

					}
					break;
					case 5:
					for ($i=0; $i < count($s2) ; $i++) { 
						echo $s2[$i] . " ";
					}
					break;
				
			}
	}
	?>
</body>
</html>