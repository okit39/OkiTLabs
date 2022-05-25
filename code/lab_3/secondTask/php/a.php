<?php
$text = $_POST['textArea'];
if (!isset($text)) {
    return;
}
echo("Кол-во слов: " . str_word_count($text));
echo nl2br("\n");
echo("Кол-во символов: " . strlen($text));
echo nl2br("\n");