<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" type="image/png" href="" />
</head>
<body>

<?php 

session_start();
$lang = isset($_GET['lang']) ? $_GET['lang'] : substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
//echo $lang;


//else $lang='es';
//$lang ="";
//$lang = isset($_GET['lang']) ? $_GET['lang'] : '';
$langArray = array('fr','es');
$found=false;

if(isset($_GET['lang']) AND in_array($_GET['lang'], $langArray)){
    $_SESSION['lang'] = $_GET['lang'];
}
//if(in_array($lang, $langArray))
	//$found = true;
//if(!$found)
	//$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$xml=simplexml_load_file("langue.xml")or die("xml non trouvé");


include 'menu_ad.html';

if ( isset ($_GET[ 'page' ])) {
$page = $_GET[ 'page' ];
} else {
// set proper default value if it was not set
$page = 'page_admin' ;
}
include ($page . '.php' );

?>
</body>
<?php include 'footer.php';?>

<script>
document.title ="Mexico";
</script>
</html>