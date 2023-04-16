<?php 
    include '../connexion.php';

    error_reporting(0);

    session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>VOTRE COMPTE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../lestyle8.css">
	<link href="../../../EXTERNE/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet"/>

</head>

<body>
	<header class="leheader">
		<div class="navig">
			<center>
				<ul>
					<li><a href="../accueil.php"><i class="fas fa-home"></i> ACCUEIL</a></li>
					<li><a href="../Agent/agents.php"><i class="fas fa-user-friends"></i> AGENTS </span></a></li>
					<li><a href="../Dossier/dossier.php"><i class="fas fa-file-alt"></i> DOSSIERS ET FLUX</a></li>					
                    <li><a href="../Statistiques.php"><i class="fas fa-chart-bar"></i> STATISTIQUES</a></li>
                    <li><a href="../Compte/compte.php"><i class="fas fa-user" style="color:yellow;"></i><span style="color:yellow;"> VOTRE COMPTE</a></li>
                    <div style="float:right;margin-right:15px;color:lightgrey;"><br>| Service Régional du Budget - Haute Matsiatra</div>
				</ul>
			</center>
		</div>
    </header>

<div style="margin-top:50px; color:transparent;">.</div>

<div id="liste_agents">
	<img src="../images/mef.png" class="limage002">

</div>

<div>
    <center>
        <img src="../images/templates/user.png" class="limageuser">
        <br>
        <span style="margin-top:70px;font-family:'Segoe UI';font-size:24px; font-weight:bold;"><?php echo $_SESSION['nom_user']; ?></span>   
        <br> 
        <span style="margin-top:70px;font-family:'Segoe UI';font-size:17px;"><?php echo $_SESSION['email_user']; ?></span>   
    </center>
</div>
    


<div style="margin-top:160px;margin-right:70px;">
    <center>    
    <button onclick="return logout();" class="btn_connect" style="font-size:18px;float:right;"><a href="../logout.php" style="text-decoration:none;color:white;">
        Se déconnecter
        </a></button>
    
    </center>
</div>

<script>
    function logout(){
        return confirm('Souhaitez-vous vraiment vous déconnecter ?');
    }
</script>

<!--
    FANOKAFANA LIEN AMINA ONGLET VAOVAO:

    <a target="_blank" href=""></a>

-->

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