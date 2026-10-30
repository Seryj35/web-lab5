<?php
require_once "db.php";

$result = $db->query("SELECT * FROM lab5_terms ORDER BY id ASC");

$terms = [];

while ($row = $result->fetch_assoc()) {
    $terms[] = $row;
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Справочник веб-терминов</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Справочник веб-терминов</h1>
        <p>Лабораторная работа №5</p>
    </header>

    <main class="container">

        <section>
            <h2>Термины и определения</h2>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Термин</th>
                            <th>Определение</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($terms as $term): ?>
                            <tr>
                                <td><?= e($term["name"]) ?></td>
                                <td><?= e($term["definition"]) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section>
            <h2>Изображения терминов</h2>

            <div class="gallery">
                <?php foreach ($terms as $term): ?>
                    <div class="image-card">
                        <img
                            src="images/<?= e($term["img"]) ?>"
                            alt="<?= e($term["name"]) ?>"
                            title="<?= e($term["name"]) ?>"
                        >

                        <p><?= e($term["name"]) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section>
            <h2>Добавить новый термин</h2>

            <form action="add.php" method="POST">

                <label for="name">Название термина</label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    maxlength="100"
                    placeholder="Введите термин"
                    required
                >

                <label for="definition">Определение</label>

                <textarea
                    id="definition"
                    name="definition"
                    maxlength="1000"
                    placeholder="Введите определение"
                    required
                ></textarea>

                <label for="img">Изображение</label>

                <select id="img" name="img" required>
                    <option value="">Выберите изображение</option>

                    <?php foreach ($images as $file => $title): ?>
                        <option value="<?= e($file) ?>">
                            <?= e($title) ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <button type="submit">Добавить термин</button>

            </form>
        </section>

    </main>

    <footer><p>Лабораторная работа № 5</p></footer>

</body>
</html>
