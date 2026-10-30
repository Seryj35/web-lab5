
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "lab5_data";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $db = new mysqli($host, $user, $password, $database);
    $db->set_charset("utf8mb4");
} catch (mysqli_sql_exception $e) {
    die("Ошибка подключения к базе данных. Проверьте db.php");
}

$images = [
    "html.png" => "HTML",
    "css.png" => "CSS",
    "javascript.png" => "JavaScript",
    "php.png" => "PHP",
    "mysql.png" => "MySQL",
    "sql.png" => "SQL",
    "server.png" => "Сервер",
    "database.png" => "База данных",
    "browser.png" => "Браузер",
    "url.png" => "URL"
];

function e($text) {
    return htmlspecialchars($text, ENT_QUOTES, "UTF-8");
}
?>
