<html>
<head><title> Сведения о Кинозалах </title></head>
<body>
<h3>Куликова Анастасия ПИ323</h3>
<h2>Сведения о Кинозалах:</h2>
<table border="1">
    <tr>
        <th>id Зала</th>
        <th>Название</th>
        <th>Категория</th>
        <th>Редактировать</th>
    </tr>
    </tr>
    <?php
    include("checks.php");
    require_once 'connect1.php';
    $link = mysqli_connect($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу" . mysqli_error($link));
    $result = mysqli_query($link, "SELECT id_zal, name_z, cat_z FROM zal"); // запрос на выборку сведений о пользователях
    mysqli_select_db($link, "users");

    while ($row = mysqli_fetch_array($result)) {// для каждой строки из запроса
        echo "<tr>";
        echo "<td>" . $row['id_zal'] . "</td>";
        echo "<td>" . $row['name_z'] . "</td>";
        echo "<td>" . $row['cat_z'] . "</td>";
        echo "<td><a href='edit_zal.php?id_zal=" . $row['id_zal']
            . "'>Редактировать</a></td>"; // запуск скрипта для редактирования
        echo "</tr>";
    }
    print "</table>";
    $num_rows = mysqli_num_rows($result); // число записей в таблице БД
    print("<P>Всего Залов: $num_rows </p>");
    echo "<p><a href=new_zal.php> Добавить Кинозал </a>";
    if ($_SESSION['type'] == 1)
        echo "<p><a href=film.php> Вернуться назад </a>";
    elseif ($_SESSION['type'] == 2)
        echo "<p><a href=filmAdm.php> Вернуться назад </a>";
    include("checkSession.php");
    ?>

</body>
</html>