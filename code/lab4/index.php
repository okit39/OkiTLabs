<?php
require "/vendor/autoload.php";
$client = new Google_Client();
$client->setApplicationName('Google Sheets API PHP Quickstart');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);
$client->setAuthConfig('credentials.json');
$client->setAccessType('offline');
$client->setPrompt('select_account consent');
$service = new Google_Service_Sheets($client);
$spreadsheetId = '13ixJlPRuhkFhySTPfW5Suu65t5iHVZYfPrTC0-y42uE';
$range = 'AdData!A1:D';
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();
var_dump($values);
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
			<?php foreach (array_diff(scandir("categories"), array('.', '..')) as $category)
				{
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
$categories = scandir(__DIR__."/categories");
$ads = [];
foreach($categories as $category){
    if ($category != "." && $category != ".."){
        $ads[$category] = scandir("categories/$category");
    }
};
echo "<table border=1><caption>Ads</caption>";
foreach($ads as $category => $arr){
    echo "<tr><th colspan=3 align=center>" . ucfirst($category) . "</th></tr>";
    foreach($arr as $ad){
        if ($ad != "." && $ad != ".."){
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
            <tr><th>Category</th><th>Email</th><th>Header</th><th>Text</th></tr>
            <tbody>

            <?php
            foreach($values as $adData){
                echo "<tr>" . "<td>" . ucfirst($adData[0]) . "</td>";
                echo "<td>" . $adData[1] . "</td>";
                echo "<td>" . $adData[2] . "</td>";
                echo "<td>" . $adData[3] . "</td>" . "</tr>";
            }
            ?>
            </tbody>
        </table>
    </label>
</form>
</body>}