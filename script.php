<?php

$serverName = "localhost";
$userName = "web_db";
$password = "Msk2025!";
$dbName = "my_db";
$Col1 = $_POST['column1'];
$Col2 = $_POST['column2'];

        // создание соединения
        $conn = mysqli_connect($serverName, $userName, $password, $dbName);

        // проверка соединения
        if (!$conn) {
            die("Соединение не удалось: " . mysqli_connect_error());
        }

        // SQL-запрос для добавления данных
        $sql = "INSERT INTO myTable (column1, column2) VALUES ('$Col1', '$Col2')";

        // добавление данных и проверка результата
        if (mysqli_query($conn, $sql)) {
            $result = 'Операция выполнена';
            echo "Данные внесены";
            goback($result);
        } else {
            echo "Не удалось внести данные. Ошибка: " . mysqli_error($conn);
        }

        // закрытие соединения
        mysqli_close($conn);
            
      function goback($result) {
    header("Location: /index.php?result=$result");
    exit;
}

?>
        <p> <a href="/index.php">Вернуться назад</a> </p>
