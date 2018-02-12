<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css_formulaire.php" />
</head>
<body>
<?php
if ( isset ($_SESSION[ 'PSEUDO' ]) && ! empty ($_SESSION[ 'PSEUDO' ]))
?>
<center>
<div id="main">
<form action= "veriflogin.php" method="post" class="form" role="form">

 <div class="form-group">
    <input id="emailInput" placeholder="<?php echo $xml->identifiant->$lang;?>" class="form-control form-control-sm inline" type="text" required="" name= "PSEUDO">
    </div>
    <div class="form-group">
    <br><input id="passwordInput" placeholder="<?php echo $xml->mdp->$lang;?>" class="form-control form-control-sm inline" required="" type="password" name="MDP">
    </div>
    <div class="form-group">
    <br><button type="submit" class="btn btn-primary btn-block"><?php echo $xml->login->$lang;?></button>
    </div>
</form>
</div>
</center>
</body>
</html>