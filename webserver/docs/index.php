<?php
$client_ip = $_SERVER['REMOTE_ADDR'];
$client_port = $_SERVER['REMOTE_PORT'];
$server_ip = $_SERVER['SERVER_NAME'];
$container_ip = $_SERVER['SERVER_ADDR'];
$server_port = $_SERVER['SERVER_PORT'];

echo "Welcome to Jaz Web server 2.2.0.1<br><br>";
echo "This image is built using :<br>";
echo "docker.io/jamesbrick/php:latest (for k8s) <br>";
echo "registry.access.redhat.com/ubi10/php-83:latest (for ocp) <br>";
echo "Codes      : https://github.com/jasonwcc/learntocontainerized<br>";
echo "<br>";
echo "System Information:<br>";
echo "Hostname   : " . gethostname() . "<br>";
echo "Server IP  : " . $server_ip . "<br>";
echo "App IP     : " . $container_ip . "<br>";
echo "Client IP  : " . $client_ip . "<br>";
echo "Server Port: " . $server_port . "<br>";
echo "Client Port: " . $client_port . "<br><br>";
echo "Created for training purposes by J"
?>

