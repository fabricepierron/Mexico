<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" type="image/png" href="" />
</head>
<body>
<?php include 'menu_ad.html';

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