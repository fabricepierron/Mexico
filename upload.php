<?php 
mysql_connect("localhost", "root", "")or die("cannot connect to server"); 
mysql_select_db("mexico")or die("cannot select DB");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form action="upload2.php" method="post" enctype="multipart/form-data">
<input type="file" name="file_img" />
<input type="submit" name="btn_upload" value="Upload">    
</form>

<?php
if(isset($_POST['btn_upload']))
{
    $filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "images";
	$filepath = "images";
    
    move_uploaded_file($filetmp,$filepath);
    
    $sql = "INSERT INTO photo (NOM_PHOTO,REPERTOIRE,FORMAT) VALUES ('$filename','$filepath','$filetype')";
    $result = mysql_query($sql);
}
?>

</body>
</html>
