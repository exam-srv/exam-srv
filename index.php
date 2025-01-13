<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Пример записи в MySQL</title>
    <link href="/style.css" rel="stylesheet" />
</head>
<body>
    <br>
    <div class=border>
    <p class=title><h3>Сайт работает на PHP (NGINX) + MySQL</h3></p>
    <p>Введите значения для столбца 1 и столбца 2:</p>
    <form action="/script.php" method="post">
        <input type="text" size="20" name="column1" placeholder="Введите значение column1"><br>
        <br>
        <input type="text" size="20" name="column2" placeholder="Введите значение column2"><br>
        <br><br>
        <button type="submit">Добавить в БД</button>
    </form>
    <br>
    <form action="/out.php" method="post">
        <button type="submit">Вывести данные из БД</button>
    </form>
    <br>
    <form action="/del.php" method="post">
        <button type="submit">Удалить все данные из БД</button>
    </form>
    <br>
    </div>
</body>
</html>
