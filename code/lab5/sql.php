<?php
$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (!empty($_POST["email"]) and !empty($_POST["category"]) and !empty($_POST["header"]) and !empty($_POST["text"])) {
    $mysqli->query("INSERT INTO ad (email, category, header, text) VALUES ('{$_POST['email']}', '{$_POST['category']}', '{$_POST['header']}', '{$_POST['text']}')");
}
?>

<!DOCTYPE html>
<html lang="ru" class="page">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3</title>
</head>

<body>
    <form name="adv" action="api_info.php" method="POST">
        <label>Ваша почта </label>
        <input type="email" name="email" />
        <br><br>
        <label>Категория</label>
        <select name="category">
            <option selected disabled>Категория</option>
            <?php foreach (array_diff(scandir("categories"), array('.', '..')) as $category) {
                echo "<option>{$category}</option>";
            } ?>
        </select>
        <br><br>
        <label>Заголовок</label>
        <input type="text" name="header" />
        <br><br>
        <label>Описание</label>
        <textarea name="text" rows="10" cols="50"></textarea>
        <br><br>
        <input type="submit" value="Добавить" />
    </form>
</body>

</html>

<?php
$categories = scandir(__DIR__ . "/categories");
$ads = [];
foreach ($categories as $category) {
    if ($category != "." && $category != "..") {
        $ads[$category] = scandir("categories/$category");
    }
};
echo "<table border=1><caption>Ads</caption>";
foreach ($ads as $category => $arr) {
    echo "<tr><th colspan=3 align=center>" . ucfirst($category) . "</th></tr>";
    foreach ($arr as $ad) {
        if ($ad != "." && $ad != "..") {
            $file = fopen("categories/$category/$ad", "r");
            $email = fgets($file);
            $headline = fgets($file);
            $Text = fgets($file);
            echo "<tr><td>$email</td><td>$headline</td><td>$Text</td></tr>";
        }
    }
}
echo "</table>";
?>

<body>
    <form>
        <label>
            <h1>Ads from GoogleSheets</h1>
            <table border=1>
                <tr>
                    <th>Category</th>
                    <th>Email</th>
                    <th>Header</th>
                    <th>Text</th>
                </tr>
                <tbody>

                    <?php
                    $result = mysqli_query($mysqli, "SELECT*FROM ad");
                    while ($item = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row['email'] . '</td>';
                        echo '<td>' . $row['category'] . '</td>';
                        echo '<td>' . $row['header'] . '</td>';
                        echo '<td>' . $row['text'] . '</td>';
                        echo '</tr>';
                    }
                    $result->close();
                    $mysqli->close();
                    ?>
                </tbody>
            </table>
        </label>
    </form>
</body>}