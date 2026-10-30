<?php
require_once "db.php";

$success = false;
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"] ?? "");
    $definition = trim($_POST["definition"] ?? "");
    $img = $_POST["img"] ?? "";

    if ($name === "" || $definition === "" || !isset($images[$img])) {

        $message = "Заполните все поля правильно.";

    } elseif (
        mb_strlen($name, "UTF-8") > 100 ||
        mb_strlen($definition, "UTF-8") > 1000
    ) {

        $message = "Превышена допустимая длина текста.";

    } else {

        try {
            $sql = "INSERT INTO lab5_terms (name, definition, img)
                    VALUES (?, ?, ?)";

            $stmt = $db->prepare($sql);
            $stmt->bind_param("sss", $name, $definition, $img);
            $stmt->execute();
            $stmt->close();

            $success = true;
            $message = "Новый термин успешно добавлен!";

        } catch (mysqli_sql_exception $e) {

            if ($e->getCode() == 1062) {
                $message = "Такой термин уже существует.";
            } else {
                $message = "Ошибка при добавлении данных.";
            }
        }
    }

} else {
    $message = "Сначала заполните форму на главной странице.";
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат добавления</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Справочник веб-терминов</h1>
        <p>Лабораторная работа №5</p>
    </header>

    <main class="container">

        <div class="message-box">

            <?php if ($success): ?>
                <h2>Успешно!</h2>
            <?php else: ?>
                <h2>Сообщение</h2>
            <?php endif; ?>

            <p><?= e($message) ?></p>

            <a href="index.php" class="button">
                Вернуться на главную
            </a>

        </div>

    </main>

    <footer>
        <p>Лабораторная работа №5 | PHP и MySQL</p>
    </footer>

</body>
</html>
