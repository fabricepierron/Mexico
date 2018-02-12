<?php
include('connexion_bd.php');

if (isset($_POST['PSEUDO']) && isset($_POST['MDP'])) {
    $PSEUDO = $_POST['PSEUDO'];
    $MDP = ($_POST['MDP']);
    $sql = "SELECT PSEUDO,MDP FROM utilisateur WHERE PSEUDO='".$PSEUDO."' and MDP = '".$MDP."'";

    if ($res = $myPDO->query($sql)) {
        if($res->rowCount() > 0) // if found a result
            {
            session_start ();
          
            $_SESSION['PSEUDO'] = $_POST['PSEUDO'];
            $_SESSION['MDP'] = $_POST['MDP'];

            // on redirige notre visiteur vers une page de notre section membre
            echo '<meta http-equiv="refresh" content="0;URL=index_admin.php">';
            }    
            else    {
                
                echo '<body onLoad="alert(\'Membre non reconnu...\')">';
                
                echo '<meta http-equiv="refresh" content="0;URL=connexion_prive.php">';
                }
            }
    }
?>
