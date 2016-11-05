<?php



$botToken = "298096789:AAGW_nrSPiMDVaUPH7xVd1KgumV6drzvJAk";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents("php://input");

$updateArray = json_decode($update, TRUE);

$chatId = $updateArray["result"][0]["message"]["chat"]["id"];

file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=Now Im alive!")

?>
