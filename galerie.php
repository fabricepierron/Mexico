
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />

<!-- fancybox CSS library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<style type="text/css">
.gallery img {
    width: 150px;
    height: 150px;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
	margin : 5px;
	margin-bottom: 15px;
}
#fancybox-content {
    height: 680px;
    width: 550px;
    padding: 0;
    margin: 0;
    overflow: scroll;
}
.gallery {
		overflow: auto;
}

</style>
<center>
<div id="main">
	<h2><?php echo $xml->galerie->$lang;?></h2><hr>
    <div class="gallery">
        <?php
        //Include database configuration file
        include('db_config.php');
        
        //get images from database
        $query = $db->query("SELECT * FROM photo, photojournaliste WHERE photo.ID_PJ=photojournaliste.ID_PJ;");
		
        
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageThumbURL = 'thumb/'.$row['NOM_PHOTO'];
                $imageURL = 'images/'.$row["NOM_PHOTO"];
				$view= $row['STREET_VIEW'];
				$adresseFr= $row['ADRESSE_FR'];
				$adresseEs= $row['ADRESSE_ES'];
				$date= $row['DATE_PHOTO'];
				$angle= $row['ANGLE_VUE'];
				$descFr= $row['DESCRIPTION_FR'];
				$descEs= $row['DESCRIPTION_ES'];
				$auteurP= $row['PRENOM_PJ'];
				$auteurN= $row['NOM_PJ'];
        ?>
            <a class ="fancybox" href="<?php echo $imageURL; ?>" data-fancybox="group" data-caption="
			<?php if ($getlang == "fr" || $lang == "fr")
{
echo '<strong>DESCRIPTION :&nbsp;</strong>'.$descFr;
}
elseif ($getlang == "es" || $lang == "es")
{
echo '<strong>'.$xml->description_g->$lang.':&nbsp;</strong>'.$descEs;
}
				  echo '<br>';
				  
				  if ($getlang == "fr" || $lang == "fr")
{
echo '<strong>'.$xml->adresse_g->$lang.':&nbsp;</strong>'.$adresseFr;
}
elseif ($getlang == "es" || $lang == "es")
{
echo '<strong>'.$xml->adresse_g->$lang.':&nbsp;</strong>'.$adresseEs;
} 
				  echo '<br>';
				  echo '<strong>'.$xml->date_g->$lang.':&nbsp;</strong>'.$date;
				  echo '<br>';
				  echo '<strong>'.$xml->adresse_g->$lang.':&nbsp;</strong>'.$auteurP.'&nbsp'.$auteurN;
				  
			?> <p><strong>StreetView :&nbsp;<a href=<?php echo $row["STREET_VIEW"].'>'.$xml->pano_g->$lang;?></a></strong></p>" content="text/html";>
            <img src="<?php echo $imageThumbURL; ?>" data-title-id="title-1" alt="" />

			</a>
			
			
			
        <?php }
        } ?>

    </div>
	
	
</div>
</center>

<script>

</script>

<!-- JS library -->
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- fancybox JS library -->
<script src="fancybox/jquery.fancybox.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</html>