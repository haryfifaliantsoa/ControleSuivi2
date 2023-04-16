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

</head>

<body>
	<header class="leheader">
		<div class="navig">
			<center>
				<ul>
					<li><a href="accueil.php"><i class="fas fa-home" style="color:yellow;"></i><span style="color:yellow;"> ACCUEIL</span></a></li>
					<li><a href="Agent/agents.php"><i class="fas fa-user-friends"></i> AGENTS</a></li>
					<li><a href="Dossier/dossier.php"><i class="fas fa-file-alt"></i> DOSSIERS ET FLUX</a></li>					
					<li><a href="Statistiques.php"><i class="fas fa-chart-bar"></i> STATISTIQUES</a></li>
					<li><a href="Compte/compte.php"><i class="fas fa-user"></i> VOTRE COMPTE</a></li>
					<div style="float:right;margin-right:15px;color:lightgrey;"><br>| Service Régional du Budget - Haute Matsiatra</div>
				</ul>
			</center>
		</div>
	</header>
<div style="margin-top:50px; color:transparent;">.</div>

<div>
	<img src="images/mef.png" class="limage002">		
	<p style="margin-top:30px;">.</p>
		<p class="title002" style="margin-left: 130px;"><b>CONTROLE DE SUIVI DES DOSSIERS</b></p>
		<center>
		<p class="title003">AU SEIN DU SERVICE REGIONAL DU BUDGET - HAUTE MATSIATRA</p>
		</center>
		
</div>

<div class="lediv01">	
	<a target="_blank" href="http://www.mef.gov.mg" title="M.E.F (Ministère de l'Economie et des Finances)"><img src="images/mef_2/notation_inaugurale.png" class="limage003"></a>
	<p class="text_descri2">Pour en apprendre plus sur le Ministère de l'Economie et des Finances, vous pouvez consulter leur site web officiel ici : <a target="_blank" href="http://www.mef.gov.mg" style="color:#1ad1ff;">mef.gov.mg</a></p>
</div>



<div class="text_descri" style="margin-top: 70px;">
	<p style="color:darkred;"><b><u>Utilité de l'application</u></b></p> 
	<p style="margin-left: 20px;">Cette application a été conçue pour gérer facilement le suivi des dossiers possédant une nature ou type défini.</p>
	<p>Les dossiers concernés ont également des expéditeurs qui sont des personnels, et ce dernier suit un flux qui le <p> dirige vers le desinataire ou l'interessé.</p>
</div>

<div class="text_descri" style="margin-top: 20px;">
	<p style="color:darkred;"><b><u>Mode d'utilisation de l'application</u></b></p> 
	<p style="margin-left: 20px;">Il suffit simplement que l'utilisateur saisisse et enregistre les données sur le personnel, le type du dossier,</p>
	<p>ainsi que la date quand l'expéditeur envoie le dossier.</p>
	<p>Suite à cela, l'utilisateur reçoit une notification lorsque le dossier a bien été reçu (ou pas) par l'interessé lui-même, et en plus il a aussi </p>
	<p>l'aptitude de surveiller où le dossier se trouve à une date donnée (en faisant une recherche sur une date spécifiée).</p>
</div>

<br><br>

<center>
<div class="lesboutons">
		<a href="Agent/agents.php#saisie_agent"><button class="btn_001"><b>SAISIE D'UN AGENT <i class="fas fa-edit"></i></b></button></a>
		<a href="Dossier/dossier.php"><button class="btn_003"><b>ENVOYER UN DOSSIER <i class="fas fa-paper-plane"></i></b></button></a>
		<a href="Dossier/recherche_suivi.php"><button class="btn_002"><b>RECHERCHER UN SUIVI <i class="fas fa-search-circle"></i></b></button></a>
</div>
</center>	

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