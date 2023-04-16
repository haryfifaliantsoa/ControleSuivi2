<!DOCTYPE html>
<html>
<head>
	<title>ACCUEIL</title>
	<meta charset="utf-8">	
	<link rel="stylesheet" href="lestyle8.css">
	<link href="../../EXTERNE/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet"/>
	<style type="text/css">

	*,*:after,*::before{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	}
		
	
		.btn_App{
			color: white;
			font-family: 'Segoe UI';	
			cursor: pointer;
			background-color: orange;
			padding: 12px;
			border: none;
			border-radius: 7px;
			transition: .2s;
		}
		.btn_App:hover{
			transform: scale(1.1);
			background-color: red;
		}
		.papee{
			color: rgba(255, 255, 255, 0.9);
			background: linear-gradient(150deg,rgba(255, 255, 255, 0.2),grey);
			font-size: 30px;
			margin-top: 30px;
			padding-left: 50px;
			letter-spacing: 10px;
		}
	</style>

</head>

<body>
	<header class="leheader">
		<div class="navig">
			<center>
				<ul>
					<li title="A propos de l'entreprise"><a href=""> A propos</a></li>
					<li title="Se connecter si vous disposez déjà d'un compte" style="float:right;margin-left:10px;"><a href="login.php#BtnConn"> Connexion</a></li>
					<li title="Créer un nouvel utilisateur" style="float:right;margin-left:10px;" id="BtnInsc"><a href="#"> Inscription</a></li>
				</ul>
			</center>
		</div>
	</header>
<div style="margin-top:70px;color:transparent;">.</div>


<center>
	<p style="font-size:20px; font-family:'Segoe UI';color: white; cursor: default;">Veuillez vous connecter ou créez un nouveau compte d'utilisateur</p>
</center>

<div class="papee">
	<p>PAGE D'INSCRIPTION</p>
</div>

<center style="margin-top: 200px;">
	<p id="BtnInsc2"><a href="#"><button class="btn_App"><b>APPUYER ICI POUR VOUS INSCRIRE</b></button></a></p>
</center>


<?php 
	include 'CRUD/adduser.php';
?>

<!--	============================================================	-->

<!--	MODAL D'INSCRIPTION	-->

<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">    
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2 style="font-family:'Segoe UI';"><center>Création d'un nouveau compte <i class="fas fa-user"></i></center></h2>
    </div>
	    
	    <div class="modal-body">
	    <center>
	    <br><br><br><br>
			<form method="POST" action="" class="leformulaire1">
				<p>					
					<input type="text" id="nom_user" name="nom_user" class="linput" placeholder="Nom d'utilisateur" required autocomplete="off">
				</p>
				<p>					
					<input type="email" id="email_user" name="email_user" autocomplete="off" class="linput" placeholder="Adresse e-mail" required>	
				</p>
				<p>					
					<input type="password" id="password_user" name="password_user" class="linput" placeholder="Mot de passe" required>	
				</p>
				<p>					
					<input type="password" id="conf_password_user" name="conf_password_user" class="linput" placeholder="Confirmer mot de passe" required>	
				</p>
				<p>
					<input type="submit" name="inscrire_user" id="inscrire_user" value="S'INSCRIRE" class="btn_inscrire_user">
				</p>
			</form>		
			<p style="font-family: 'Segoe UI'; font-size: 14.3px;color: white; margin-top:16px;">Vous disposez déjà d'un compte? <a href="login.php" style="color: lightblue;">Connectez-vous !</a></p>	
		<br><br><br><br>
		</center>
	    </div>    
  </div>
</div>

<!--	============================================================	-->


<script>
	// Get the modal
	var modal = document.getElementById("myModal");

	// Get the button that opens the modal
	var btn = document.getElementById("BtnInsc");
	var btn2 = document.getElementById("BtnInsc2");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function() {
	  modal.style.display = "block";
	}
	btn2.onclick = function() {
	  modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal) {
	    modal.style.display = "none";
	  }
	}

	//Code PHP teo aloha:
	//

</script>



</body>

</html>