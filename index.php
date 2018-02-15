<html >
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" type="image/png" href="" />
</head>
<body>
<?php 


session_start();

function set_cookie($lang)
{
$expire = 365*24*3600;

if (setcookie("CHOIXlang", $lang, time() + $expire) != TRUE)
{
}
else
{
setcookie("CHOIXlang", $lang, time() + $expire);
}
} 

$getlang = isset($_GET['lang']) ? $_GET['lang']:'';  //substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
//echo $lang;

if (isset ($_COOKIE['CHOIXlang']) && $getlang != 'fr' && $getlang != 'es')
{
$lang = $_COOKIE['CHOIXlang'];
} 

else if ($getlang == 'es' || $getlang == 'fr')
{
$lang = $getlang;
set_cookie($lang);
}
else
{
$lang = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
$lang = strtolower(substr(chop($lang[0]),0,2));
set_cookie($lang);
} 

$xml=simplexml_load_file("langue.xml")or die("xml non trouvé");


include 'menu.html';


if ( isset ($_GET[ 'page' ])) {
$page = $_GET[ 'page' ];
} else {
// set proper default value if it was not set
$page = 'accueil' ;
}
include ($page . '.php' );

?>
</body>
<?php include 'footer.php';?>

<script>
document.title ="Mexico";
</script>
</html>