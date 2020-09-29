<?php
$name = $_POST["name"];
$subject = $_POST["subject"];
$email = $_POST["email"];
$message = $_POST["message"];

$filename = "../messages/msgs.txt";

$data = "name: {$name} \nsubject: {$subject}\nemail: {$email}\ncontent: \n{$message}\n\n";
$file = fopen($filename, "a+");

if ($_POST['submit']) {
	fwrite($file, $data);
	fclose($file);
}

?>