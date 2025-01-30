<?php
$hostname = 'host=srvmysql.btssio.dedyn.io';
$usernom = 'GORESJO';
$password = '18112006';
$bdd = 'GORESJO_biblio';

try {
    $monPdo = new PDO("mysql:$hostname;dbname=$bdd;charset=utf8", $usernom, $password);
    $monPdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo $e-> getMessage();
    $monPDO = null;
}
?>