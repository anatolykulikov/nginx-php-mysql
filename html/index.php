<?php

$mysqli = new mysqli('mysql', 'username', 'password', 'wordpress');

if (mysqli_connect_error()) {
    die('Ошибка подключения (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

echo 'Соединение установлено... ' . $mysqli->host_info . "\n";

$mysqli->close();

phpinfo();