<?php
$client_ip = $_SERVER['REMOTE_ADDR'];
$client_port = $_SERVER['REMOTE_PORT'];
$server_ip = $_SERVER['SERVER_NAME'];
$container_ip = $_SERVER['SERVER_ADDR'];
$server_port = $_SERVER['SERVER_PORT'];

echo "Welcome to Jaz Web server 2.2.0.1<\n><\n>";
echo "This image is built using :<\n>";
echo "docker.io/jamesbrick/php:latest (for k8s) <\n>";
echo "registry.access.redhat.com/ubi10/php-83:latest (for ocp) <\n>";
echo "Codes      : https://github.com/jasonwcc/learntocontainerized<\n>";
echo "<\n>";
echo "System Information:<\n>";
echo "Hostname   : " . gethostname() . "<\n>";
echo "Server IP  : " . $server_ip . "<\n>";
echo "App IP     : " . $container_ip . "<\n>";
echo "Client IP  : " . $client_ip . "<\n>";
echo "Server Port: " . $server_port . "<\n>";
echo "Client Port: " . $client_port . "<\n><\n>";
echo "Created for training purposes by J"
?>

