<?php 
$client_ip = $_SERVER['REMOTE_ADDR'];
$client_port = $_SERVER['REMOTE_PORT'];

echo "Welcome to Jaz Web server 1.0.0.1\n\n";
echo "This image is built with :\n";
echo "Container: docker.io/library/php:7.2-apache\n";
echo "Codes    : https://github.com/jasonwcc/learntocontainerized\n";
echo "Hostname : " . gethostname() . "\n";
echo "Server IP: " . $client_ip . "\n";
echo "Port     : " . $client_port . "\n\n";
echo "Created for training purposes by J\n"
?>
