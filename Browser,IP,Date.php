<?php
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $timestamp = date('d/m/Y h:i:s');

    echo "Browser Name: ".$browser."<br>";
    echo "IP Address: ".$ipaddress."<br>";
    echo "Date-Time: ".$timestamp."<br>";
?>