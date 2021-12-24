<html>
<head><title>Киносеансы</title></head>
<body>
<h2>Киносеансы:</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Дата</th>
        <th>Фильм</th>
        <th>Кинозал</th>
        <th>Всего мест</th>
        <th>Занятых мест</th>
        <th>Редактировать</th>
        <th>Уничтожить</th>
    </tr>
    </tr>
    <?php
    require_once 'connect1.php';
    $mysqli = new mysqli($host, $user, $password, $database);
    if ($mysqli->connect_errno) {
        echo "Невозможно подключиться к серверу";
    }

    $result = $mysqli->query("SELECT seans.id, seans.date_seans, films.name_film as films, 
       zal.name_z as zal, seans.count_svob, seans.count_zan
FROM seans
LEFT JOIN films ON seans.id_film=films.id_film
LEFT JOIN zal ON seans.id_zal=zal.id_zal");

    $counter = 0;
    if ($result) {
        while ($row = $result->fetch_array()) {
            $id = $row['id'];
            $date_seans = $row['date_seans'];
            $films = $row['films'];
            $zal = $row['zal'];
            $count_svob = $row['count_svob'];
            $count_zan = $row['count_zan'];

            echo "<tr>";
            echo "<td>$id</td><td>$date_seans</td><td>$films</td><td>$zal</td><td>$count_svob</td><td>$count_zan</td>";

            echo "<td><a href='edit_seans.php?id=" . $row['id']
                . "'>Редактировать</a></td>"; //Запуск редактирования
            echo "<td><a href='delete_seans.php?id=" . $row['id']
                . "'>Удалить</a></td>"; //запуск удаления
            echo "</tr>";
            $counter++;
        }
    }
    print "</table>";
    print("<p>Всего Сеансов: $counter </p>");
    ?>
    <p><a href="new_seans.php"> Добавить Сеанс </a>
    <p><a href="index.php"> Вернуться назад </a>
</body>
</html>
