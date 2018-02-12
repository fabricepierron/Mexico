<?php
//parametres pour la connexion  locale
$host="localhost";     // connexion locale
$user ="root"; // utilisateur par défaut
$pass="";        // pas de mot de passe en local
$dbname="mexico";   // base de données locale   

$dsn = "mysql:host=".$host.";dbname=".$dbname;

try{
$myPDO = new PDO($dsn,$user,$pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
}
catch (PDOException $e) {
    echo 'Échec de la connexion : ' . $e->getMessage();
    exit;
}
// if connexion is ok
finally {
// php equivalent to if __name__ == "__main__" in python : 
if (!debug_backtrace()) {
	echo "connexion ok";
}
}
?>