<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Montserrat Alternates' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="style.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head> 
<?php 
include('db_config.php');
$query = $db->query("SELECT * FROM photojournaliste;");
		
        
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $desfr = $row['DESCRIPTION_PJ_FR'];
                $deses = $row["DESCRIPTION_PJ_ES"];
				
		
			}
		}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Montserrat Alternates' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="style.css">
</head> 
<style>

</style>
<center>
<body>
<div id="main">
<div id="cont_2">
	<h2><?php echo $xml->photoj->$lang;?></h2><hr>  
	<h3><strong>Elsa Medina</strong></h3></br>
	<p id="p_al"><?php echo $xml->p_photoj_1_1->$lang;?></p></br>
	<p id="p_al"><?php echo $xml->p_photoj_1_2->$lang;?></p></br>
	<p id="p_al"><?php echo $xml->p_photoj_1_3->$lang;?></p></br>
	<p id="p_al">
	
<?php if ($getlang == "fr" || $lang == "fr")
{
echo $desfr;
}
elseif ($getlang == "es" || $lang == "es")
{
echo $deses;
}?>
</p></br>
</div>
</div>
</center>
</body>
</html>