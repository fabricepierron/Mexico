
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<!-- fancybox CSS library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">

<style type="text/css">
.gallery img {
    width: 200px;
    height: 200px;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
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
    <div class="gallery">
        <?php
        //Include database configuration file
        include('db_config.php');
        
        //get images from database
        $query = $db->query("SELECT * FROM photo ORDER BY DATE_PHOTO ASC;");
        
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageThumbURL = 'thumb/'.$row['NOM_PHOTO'];
                $imageURL = 'images/'.$row["NOM_PHOTO"];
        ?>
            <a href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row["DESCRIPTION_FR"]; ?>" content="text/html; charset=UTF-8" >
                <img src="<?php echo $imageThumbURL; ?>" alt="" />
            </a>
        <?php }
        } ?>
    </div>
</div>
</center>
<!-- JS library -->
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- fancybox JS library -->
<script src="fancybox/jquery.fancybox.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</html>