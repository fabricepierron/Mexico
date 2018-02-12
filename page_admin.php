<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Montserrat Alternates' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>
<div id="main">
<p class="container2">Vous êtes connecté(e) sous l'indentifiant <strong><?php echo $_SESSION['PSEUDO']; ?></strong> <br/> Vous avez maintenant accès aux formulaires d'administration</p>
<div class = "container"> 
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="formulaire_user.php">Ajouter des utilisateurs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active"" href="formulaire_photographe.php">Ajouter des photographes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active"" href="formulaire_photo.php"> Ajouter des photos</a>
  </li>
   <li class="nav-item">
    <a class="nav-link active"" href="formulaire_theme.php"> Ajouter des thèmes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active"" href="form_photo_tag.php"> Ajouter des tags à des photos</a>
  </li><br>
</ul>
</center>
</div>
</div>
</body>
</html>

