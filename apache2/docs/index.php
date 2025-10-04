<?php
$client_ip = $_SERVER['REMOTE_ADDR'];
$client_port = $_SERVER['REMOTE_PORT'];
$server_ip = getenv("REMOTE_ADDR");
$server_port = $_SERVER['SERVER_PORT'];

echo "Welcome to Jaz Web server 1.0.0.1<br><br>";
echo "This image is built with :<br>";
echo "Container: docker.io/jamesbrick/php:latest <br>";
echo "Codes      : https://github.com/jasonwcc/learntocontainerized<br>";
echo "Hostname   : " . gethostname() . "<br>";
echo "Server IP  : " . $server_ip . "<br>";
echo "Client IP  : " . $client_ip . "<br>";
echo "Server Port: " . $server_port . "<br>";
echo "Client Port: " . $client_port . "<br><br>";
echo "Created for training purposes by J"
?>

