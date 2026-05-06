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

echo "Welcome to Jaz Web server 1.0.0.1\n\n";
echo "This image is built with :\n";
echo "Container  \t: docker.io/jamesbrick/php:7.2-apache\n";
echo "Codes      \t : https://github.com/jasonwcc/learntocontainerized\n";
echo "Hostname   \t : " . gethostname() . "\n";
echo "IP from fx \t : " . $ipaddress . "\n";
echo "Server IP  \t : " . $server_ip . "\n";
echo "Client IP  \t : " . $client_ip . "\n";
echo "Port       \t : " . $client_port . "\n\n";
echo "Created for training purposes by J\n"

?>
