<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Пример записи в MySQL</title>
</head>
<body>
    <form action="/script.php" method="post">
        <input type="text" name="column1" placeholder="Введите значение column1"><br>
        <input type="text" name="column2" placeholder="Введите значение column2"><br>
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
</body>
</html>
