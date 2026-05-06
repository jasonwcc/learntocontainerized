<?php
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
$client_ip = $_SERVER['REMOTE_ADDR'];
$client_port = $_SERVER['REMOTE_PORT'];
$server_ip = getenv("REMOTE_ADDR");
$http_client_ip = getenv('HTTP_CLIENT_IP');

echo "Welcome to Jaz Web server 1.0.0.1<br><br>";
echo "This image is built with :<br>";
echo "Container: docker.io/jamesbrick/php:7.2-apache<br>";
echo "Codes    : https://github.com/jasonwcc/learntocontainerized<br>";
echo "Hostname : <t>" . gethostname() . "<br>";
echo "Server IP: " . $server_ip . "<br>";
echo "Client IP: " . $client_ip . "<br>";
echo "HTTP client IP: " . $http_client_ip . "<br>";
echo "Port     : " . $client_port . "<br><br>";
echo "Created for training purposes by J<br>"

?>
