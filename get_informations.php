<?php
include 'connexion.php';
$ri_range = $_POST['ri_range'];
$ri_range_array = explode(';',$ri_range);

$min_RI = $ri_range_array[0];
$max_RI = $ri_range_array[1];

//echo $min_RI;
//echo('<br/>');
//echo $max_RI;

//*
set_time_limit(0);
//debut de code de parcours de ttes les pages pour avoir acces aux tableaux.
$q=$min_RI;
while ( $q <= $max_RI) {
	//VERIFIER SI CET RI N'EST PAS DEJA RECUPERE
	$resultat = $conn->query("SELECT * FROM infanterie WHERE num_ri = $q ;");
	if ($resultat->fetchColumn() > 0) {
		//Deja alors on passe au RI suivant
		//die('STOPPPPP');
		$q++;
		continue;
	}

suite:
// $contenu = file_get_contents("file:///C:/wamp/www/aspirer/site.php"); //Recuperer le contenu de la page
$contenu = file_get_contents("http://www.francegenweb.org/b1914-1918/resultrgt.php?act=view&arme=Infanterie&n=$q&type=R.I.&AN=&M=&J=&tri=nom,%20prenom&debut=0"); //Recuperer le contenu de la page
$p = explode('<table class="tableau">',$contenu); //Decouper le fichier recuperé par <table class="tableau">
//Verifier si le tableau est vide.
if (empty($p[1])) {
	# code...
	$q++;
	goto suite;
} else {
$p2 = explode('</tbody></table>',$p[1]); //Decouper $p[1] par </tbody></table>
$p3 = explode('<tr>',$p2[0]); //Decouper $p2[0] par <tr>  

// ------------------------récupérer la taille du tableau-----------------------
$tp = explode('<table class="tableau">',$contenu); //Decouper le fichier recuperé par <table class="tableau">
$tp2 = explode('</tbody></table>',$tp[0]); //Decouper $p[1] par </tbody></table>
$tp3 = explode('<tr>',$tp2[0]); //Decouper $p2[0] par <tr>  
$tdTaille = explode('<td class="left">',$tp3[1]); //Decouper $p2[0] par <tr>  
$bTaille = explode("<b>",$tdTaille[1]); 
$taille = $bTaille[3];
$taille =(int)strip_tags($taille);
// ------------------------récupérer la taille du tableau-----------------------
//-------------parcourir du tableau  qui se trouve sur chaque page-------
$e = 0;
while ($e <= $taille) {
	# code...
$contenu = file_get_contents( "http://www.francegenweb.org/b1914-1918/resultrgt.php?act=view&arme=Infanterie&n=$q&type=R.I.&AN=&M=&J=&tri=nom,%20prenom&debut=$e"); //Recuperer le contenu de la page
$p = explode('<table class="tableau">',$contenu); //Decouper le fichier recuperé par <table class="tableau">
$p2 = explode('</tbody></table>',$p[1]); //Decouper $p[1] par </tbody></table>
$p3 = explode('<tr>',$p2[0]);

// var_dump($p3);
$c = array();
$l = array();
$tab = array();
for ($i=2; $i < count($p3)-1 ; $i++) { // ligne du tableau
	# code...
	$td = explode("<td class='corptable2'>",$p3[$i]);//Decouper par <td class='corptable2'>
$sql = '';
	for ($j=1; $j < count($td) ; $j++) { // colonne du tableau

		$txt = explode("</td>",$td[$j]); //Récupérer le contenu des cellules

		if ($j==1) {
			# code...
			$GIO = $txt[0];
			$GIO =strip_tags($GIO,'<i><b><br>');
			$GIO = str_replace("'", "\'", $GIO);
			$GIO = str_replace("&nbsp;", "", $GIO);
		}
		if ($j==2) {
			# code...
			$Affectation = $txt[0];
			$Affectation =strip_tags($Affectation,'<i><b><br>');
			$Affectation = str_replace("'", "\'", $Affectation);
			$Affectation = str_replace("&nbsp;", "", $Affectation);
		}

		if ($j==3) {
			# code...
			$dateInf = $txt[0];
			$dateInf =strip_tags($dateInf,'<i><b><br>');
			$dateInf = str_replace(' ', '', $dateInf);
			$dateInf = str_replace("&nbsp;", "", $dateInf);
			if ((int)$dateInf <= 0) {
				# code...
			}
		}
		if ($j==4) {
			# code...
			$CLD = $txt[0];
			$CLD =strip_tags($CLD,'<i><b><br>');
			$CLD = str_replace("'", "\'", $CLD);
			$CLD = str_replace("&nbsp;", "", $CLD);
		}


	}

		try{
				# code...
			$sql = "INSERT INTO infanterie (num_ri,grade,affectation, dateInf,conditionsInf) VALUES ($q,'$GIO','$Affectation', '$dateInf','$CLD')";
			// print_r($sql);
		    // use exec() because no results are returned
			$conn->exec($sql);
			
		}
		catch(PDOException $e)
		{
			echo $sql . "<br>" . $e->getMessage();
		}
	
	}
	$e = $e+100;
}

echo "Régiment d'infanterie N° ".$q.": Données récupérées ".'<br>';
$q++;
# fermeture de la balise de vérification de l'existance des données.
}
//fin de code de parcours de ttes les pages.
}
		try{
						# code...
			$sql = "UPDATE Infanterie SET dateInf='' WHERE dateInf='01/01/2018'";
					// print_r($sql);
				    // use exec() because no results are returned
			$conn->exec($sql);

		}
		catch(PDOException $e)
		{
			echo $sql . "<br>" . $e->getMessage();
		}
		//*/
		
	echo('<div class="alert alert-success fade in" role="alert">
            <strong>Récupération terminée!</strong>
         </div>');
?>