<?php 
	include 'connexion.php';
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>ACCUEIL</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="lestyle8.css">
	<link href="../../EXTERNE/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet"/>
	<script src="../../EXTERNE/JSCHART/cdnjs/Chart.js"></script>

</head>

<body>
	<header class="leheader">
		<div class="navig">
			<center>
				<ul>
					<li><a href="accueil.php"><i class="fas fa-home"></i><span> ACCUEIL</span></a></li>
					<li><a href="Agent/agents.php"><i class="fas fa-user-friends"></i> AGENTS</a></li>
					<li><a href="Dossier/dossier.php"><i class="fas fa-file-alt"></i> DOSSIERS ET FLUX</a></li>
					<li><a href="Statistiques.php"><i class="fas fa-chart-bar" style="color:yellow;"></i><span style="color:yellow;"> STATISTIQUES</span></a></li>
					<li><a href="Compte/compte.php"><i class="fas fa-user"></i> VOTRE COMPTE</a></li>
					<div style="float:right;margin-right:15px;color:lightgrey;"><br>| Service Régional du Budget - Haute Matsiatra</div>
				</ul>
			</center>
		</div>
	</header>
<div style="margin-top:50px; color:transparent;">.</div>

<div>
	<img src="images/mef.png" class="limage002">		
	<p style="margin-top:30px;color:transparent;">.</p>		
</div>

<br><br><br>


<div style="margin-left:40px;color:transparent;" class="lestat_back">
	<p>Effectifs des agents par dossier</p>
</div>

<br>

<!--#################################################################################-->

<div style="margin-left:40px;" class="statdiv">

<h1 class="stattext" style="margin-left:70px;">REPRESENTATION GRAPHIQUE <i class="stattext2">Nombre des Agents par nature/type de dossier</i></h1>


<div class="ligne_epaisse"></div>


<!--	STATISTIQUES (START)-->

<?php

	include 'connexion.php';	
	$query = $con->query("SELECT type_dossier, COUNT(im_agent) AS Effectif FROM dossier GROUP BY type_dossier;");
	foreach ($query as $data) {
		$type_dossier[] = $data['type_dossier'];
		$Effectif[] = $data['Effectif'];
	}

?>

<center>
	<div style="width:850px;">
		<canvas id="myChart"></canvas>
	</div>


	<script>
		const labels = <?php echo json_encode($type_dossier) ?>;
		const data = {
			labels: labels,
			datasets: [{
				label: 'Echelle des effectifs',			
				data: <?php echo json_encode($Effectif) ?>,
				backgroundColor: [
					'rgba(0, 153, 204, 0.7)',				
				],
				borderColor:[
					'#0086b3'
				],			
				borderWidth: 2
			}]
		};

	const config = {
		type: 'bar',
		data: data,
		options: {
			scales:{
				y:{
					beginAtZero: true
				}
			}
		},
	};

	var myChart =  new Chart(
		document.getElementById('myChart'),
		config
	);
	
	</script>

	<!--	STATISTIQUES (END)-->
	<br>
	<div class="nb">

		<br><i class="fas fa-arrow-circle-right"></i> 
		L'axe des abscisses (x) désigne le type de dossier.
		<br><i class="fas fa-arrow-circle-up"></i> 
		L'axe des ordonnées (y) désigne l'effectifs des Agents concernés.
	</div>
</center>

<br><br>

<div name="STAT_SIMPLIFIE" id="STAT_SIMPLIFIE" class="statdiv3" >
	<a href="Agent/agents.php"><button class="statdiv3_title" style="color:white;">
		Revoir la liste des Agents
	</button></a>
	
	<a href="Dossier/dossier.php"><button class="statdiv3_title" style="color:white;margin-left:10px;">
		Insérer des nouveaux suivis de dossier
	</button></a>

	<a href="accueil.php"><button class="statdiv3_title" style="color:white;margin-left:10px;">
		Revenir au menu principal
	</button></a>

</div>
<br>
</div>

<!--#################################################################################-->

<br><br><br><br><br><br><br><br><br><br>


<footer>
<div class="lesfooters">
    <center>
        <p>@Copyright: 2022</p>
    </center>
</div>
</footer>

</body>

</html>