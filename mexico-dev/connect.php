<?php

$host='localhost';
$dbname='mexico';
$username='root';
$password='Y@w0gan8896';
$port=3306;
$dsn = 'mysql:host='.$host.';dbname='.$dbname.';port='.$port.';charset=utf8';

try {
    $bdd = new PDO($dsn,$username,$password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }
catch (PDOException $e) {
    print "Erreur de connexion : " . $e->getMessage() . "<br/>";
    die();
}
finally {
if (!debug_backtrace()) {
	echo "Connected successfully";
}
}
?>