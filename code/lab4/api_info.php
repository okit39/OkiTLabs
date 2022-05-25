<?php
require "/vendor/autoload.php";
if($_GET["email"] != "" && $_GET["type"] != "Choose category" && $_GET["headline"] != "" && $_GET["text"] != "")
{
    $email = $_GET["email"];
    $header = $_GET["headline"];
    $category = $_GET["type"];
    $text = $_GET["text"];
    $adFile = fopen("categories/$category/$header.txt" , "w");
    $adText = "$email\n$header\n$text";
    fwrite($adFile, $adText);
    fclose($adFile);
    $client = new Google_Client();
    $client->setApplicationName('Google Sheets API PHP Quickstart');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS);
    $client->setAuthConfig('credentials.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');
    $service = new Google_Service_Sheets($client);
    $spreadsheetId = '13ixJlPRuhkFhySTPfW5Suu65t5iHVZYfPrTC0-y42uE';
    $range = 'AdData';
    $values = [
        [$category, $email, $header, $text],
    ];
    $body = new Google_Service_Sheets_ValueRange([
        "values" => $values
    ]);
    $params = [
        "valueInputOption" => "RAW"
    ];
    $insert = [
        "insertDataOption" => "INSERT_ROWS"
    ];
    $result = $service->spreadsheets_values->append(
        $spreadsheetId,
        $range,
        $body,
        $params,
        $insert
    );
}

header("Location: BulletinBoard.php");
?>