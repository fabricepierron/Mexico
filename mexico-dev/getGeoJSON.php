<?php

include('connect.php');

$sql="SELECT repertoire, nom_photo, longitude as lon, latitude as lat, description_fr, description_es, adresse_fr, adresse_es, precisionloc, date_photo, street_view, 
ordre, angle_vue, CONCAT(prenom_pj,' ',nom_pj) as nomprenom
FROM photo as ph, photojournaliste as pj
WHERE ph.id_pj=pj.id_pj
ORDER BY id_photo";

$requete=$bdd-> prepare($sql);
$requete->setFetchMode(PDO::FETCH_ASSOC);
$requete->execute();

//Génération de la chaîne GeoJSON
$str = 'var photos =';
	$str .= '{
	"type": "FeatureCollection",
	"features": [';
	$i = 1;
	while ($resultat = $requete->fetch()) {
		$str .= '{
			"geometry":{"type":"Point","coordinates":['.$resultat['lon'].','.$resultat['lat'].']},
			"id": '.$i++.',
			"type": "Feature",'.
			'"properties": {
			"repertoire": "'.$resultat['repertoire'].'",
			"nom_photo": "'.$resultat['nom_photo'].'",
			"description_fr": "'.$resultat['description_fr'].'",
			"description_es": "'.$resultat['description_es'].'",
			"adresse_fr": "'.$resultat['adresse_fr'].'",
			"adresse_es": "'.$resultat['adresse_es'].'",
			"precisionloc": "'.$resultat['precisionloc'].'",
			"date_photo": "'.$resultat['date_photo'].'",
			"street_view": "'.$resultat['street_view'].'",
			"ordre": "'.$resultat['ordre'].'",
			"angle_vue": "'.$resultat['angle_vue'].'",
			"photojournaliste": "'.$resultat['nomprenom'].'"
			}
		},';
	}
$str2 = substr($str,0,strlen($str)-1);
$str2 .= ']}';

$requete = null;
$bdd = null;

echo $str2;

?>