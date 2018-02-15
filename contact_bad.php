    <?php    
    include('db_config.php');
    while($row = mysql_fetch_object($result)){    
        
        
    ?>  
	<div id="main">
        <tr>  
            <td>  
                <?php echo $row->id_photo;?>  
            </td>  
            <td>  
                <?php echo $row->id_auteur;?>  
            </td>  
            <td>  
                <?php echo $row->id_utilisateur;?>  
            </td>  
            <td>  
                <?php echo $row->repertoire;?>  
            </td>  
            <td>  
                <?php echo $row->nom_photo;?>  
            </td>  
            <td>  
                <?php echo $row->coordonnee_x;?>  
            </td>  
            <td>  
                <?php echo $row->coordonne_y;?>  
            </td>  
            <td>  
                <?php echo $row->niveau_de_precision;?>  
            </td>  
            <td>G  
                <?php echo $row->localisation;?>  
            </td>  
            <td>  
                <?php echo $row->description_es;?>  
            </td>  
            <td>  
                <?php echo $row->description_fr;?>  
            </td>  
            <td>  
                <?php echo $row->date_photo;?>  
            </td>  
            <td>  
                <?php echo $row->street_view;?>  
            </td>  
            <td>  
                <?php echo $row->angle_vue;?>  
            </td>  
            <td>  
                <?php echo $row->attach_file;?>  
            </td>  
            <td><a href="index.php?id =     
                <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Edit    
            </a> </td>  
            </tr>  
			<?php } ?>  
 
  
            <link href = "registration.css" type = "text/css" rel = "stylesheet" />    
            <h2>Sign Up</h2>    
            <form name = "form1" action="modified.php" method = "post" enctype = "multipart/form-data" >    
                <div class = "container">    
                    <div class = "form_group">    
                        <label>Nom:</label>    
                        <input type = "text" name = "fname" value = "" required/>    
                    </div>    
                    <div class = "form_group">    
                        <label>Prenom:</label>    
                        <input type = "text" name = "mname" value = "" required />    
                    </div>    
                    <div class = "form_group">    
                        <p>importer une ou plusieurs photos:<button type="submit" form="form1" value="Submit">ouvrir</button></p>    
                          
                    </div>    
                    <div class = "form_group">    
                        <label>Commentaire:</label>    
                        <input type = "password" name = "pwd" value = "" required/>    
                    </div>    
                </div>    
            </form>  
</div>			
        </body>    
    </html>    
