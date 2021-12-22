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
<P> <INPUT type="submit" name="obr" value="Проверить">
</FORM>
<?
if (isset($_POST["obr"])) {
if ($_POST["a"]==$_POST["b"]) { echo("Числа равны");
} elseif ($_POST["a"] > $_POST["b"]) {
echo $_POST["a"]. " Больше ". $_POST["b"];
} elseif ($_POST["a"] < $_POST["b"]) {
echo $_POST["a"]. " Меньше ". $_POST["b"];
				
}
}
?>
</body>
</html>