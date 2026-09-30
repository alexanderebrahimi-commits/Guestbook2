<?php

$name = $_POST["name"];
$comment = $_POST["comment"];

$time = date("Y-m-d H:i:s");

$entry = "Namn: " . $name . "\n";
$entry .= "Kommentar: " . $comment . "\n";
$entry .= "Tidpunkt: " . $time . "\n";
$entry .= "--------------------------\n";

file_put_contents("guestbook.txt", $entry, FILE_APPEND);

header("Location: guestbook.php");
exit();

?>