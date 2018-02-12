
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
.hidden {
 display: none;   
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
        $query = $db->query("SELECT * FROM photo ORDER BY DATE_PHOTO ASC;");
		
        
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageThumbURL = 'thumb/'.$row['NOM_PHOTO'];
                $imageURL = 'images/'.$row["NOM_PHOTO"];
				$view= $row['STREET_VIEW'];
        ?>
            <a class ="fancybox" href="<?php echo $imageURL; ?>" data-fancybox="group" data-caption="<?php echo $row["DESCRIPTION_FR"].
			'<br>'.$view; ?>" content="text/html";>
            <img src="<?php echo $imageThumbURL; ?>" data-title-id="title-1" alt="" />
			</a>
			
			<div id="title-1" class="hidden">
			Lien G.StreetView : <a href="<?php echo $row["STREET_VIEW"]; ?>">Voir le panorama</a>
			</div>
			
        <?php }
        } ?>
    </div>
	
	<a class="fancybox" data-title-id="title-1" href="http://fancyapps.com/fancybox/demo/1_b.jpg"><img src="http://fancyapps.com/fancybox/demo/1_s.jpg" alt=""/></a>
	<div id="title-1" class="hidden">
    This is 1st title. <a href="http://google.com">Some link</a>
	</div>

	<a class="fancybox" data-title-id="title-2" href="http://fancyapps.com/fancybox/demo/2_b.jpg"><img src="http://fancyapps.com/fancybox/demo/2_s.jpg" alt=""/></a>

	<div id="title-2" class="hidden">
    This is <b>2nd title</b>. <a href="http://google.com">Some link</a>
	</div>
	
</div>
</center>

<script>
$(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        beforeLoad: function() {
            var el, id = $(this.element).data('title-id');

            if (id) {
                el = $('#' + id);
            
                if (el.length) {
                    this.title = el.html();
                }
            }
        }
    });
</script>

<!-- JS library -->
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- fancybox JS library -->
<script src="fancybox/jquery.fancybox.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</html>