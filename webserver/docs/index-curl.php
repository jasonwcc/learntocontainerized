<?php
$client_ip = $_SERVER['REMOTE_ADDR'];
$client_port = $_SERVER['REMOTE_PORT'];
$server_ip = $_SERVER['SERVER_ADDR'];
$server_port = $_SERVER['SERVER_PORT'];

echo "Welcome to J Web server 1.0.9.9\n\n";
echo "This image is built with :\n";
echo "Container  : docker.io/jamesbrick/php:7.2-apache\n";
echo "Codes      : https://github.com/jasonwcc/learntocontainerized\n";
echo "Hostname   : " . gethostname() . "\n";
echo "Server IP  : " . $server_ip . "\n";
echo "Client IP  : " . $client_ip . "\n";
echo "Server Port: " . $server_port . "\n";
echo "Client Port: " . $client_port . "\n\n";
echo "Created for training purposes by J\n"
?>

