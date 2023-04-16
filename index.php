<?php 

include 'CRUD/adduser.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>INSCRIPTION</title>
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


<div>	
	<img src="images/mef.png" class="limage002">			
</div>

<div style="background-color:rgba(64, 64, 64,0.7);width:480px;color:white;font-size:20px;font-weight:bold;padding-left:30px;padding-bottom:10px;border-radius:0px 0px 40px 0px;"><br>| Service Régional du Budget - Haute Matsiatra <br></div>	

<center>
<div class="divinsc">
	<form action="" method="POST">
		<p><b> INSCRIPTION</b></p><br>
		<input type="text" placeholder="Nom d'utilisateur" class="placeholders" name="nom_user" id="nom_user" value="<?php echo $nom_user; ?>" required autocomplete="off">
		<br><br>
		<input type="email" placeholder="Adresse e-mail" class="placeholders" name="email_user" id="email_user" 
		value="<?php echo $email_user; ?>" required autocomplete="off">
		<br><br>
		<input type="password" placeholder="Mot de passe" class="placeholders" name="password_user" id="password_user" 
		value="<?php echo $_POST['password_user']; ?>" required autocomplete="off">
		<br><br>
		<input type="password" placeholder="Confirmer le mot de passe" class="placeholders" name="cpassword_user" id="cpassword_user" value="<?php echo $_POST['cpassword_user']; ?>" required autocomplete="off">
		<br><br>

		<button name="inscrire_user" class="btninscrire_new" style="display:none;">S'inscrire</button>
<br><br>
	
	<div class="svg-wrapper">
	<button name="inscrire_user" style="height:34px;cursor:pointer;background:none;border:none;">
		<svg src="#" height="30" width="190">
			<rect class="shape" height="30" width="190">
			<div class="text"> S'inscrire</div>
		</svg>
	</button>
	</div>

<!--###############################################################################-->

<?php 
	include 'connexion.php';

	session_start();

	error_reporting(0);	

	if (isset($_POST['inscrire_user'])){

		//BOUTON AJOUTER

		$nom_user=$_POST['nom_user'];
		$email_user=$_POST['email_user'];
		$password_user=md5($_POST['password_user']);
		$cpassword_user=md5($_POST['cpassword_user']);

		$sql="insert into `utilisateur` (nom_user,email_user,password_user) values('$nom_user','$email_user','$password_user')";

		if($password_user!=$cpassword_user){
			echo '
			<div style="font-family:Segoe UI;color:red;">
			<i class="fas fa-exclamation-circle"></i>
				<script>
					document.writeln("Veuillez vérifier votre mot de passe !");
				</script>
			</div>
			';
		}else{
			$result=mysqli_query($con,$sql);
			if ($result){					
				?>
					<script>
						
						alert("Inscription terminée avec succès ! "); 
						window.location="bienvenue.php";
	
					</script>
				<?php	
			}
			
			else{
				?>		
				<div style="color: red; font-family: 'Arial Rounded MT'; margin-left: 20px; cursor: default; font-size:14px;">	
					<i class="fas fa-exclamation-circle"></i>
					<script >
	
						document.writeln("Une erreur est survenue");
			
					</script>
				</div>
	
				<?php
			}
		}


	}

?>


<!--###############################################################################-->


<br>
		<span>Vous avez déjà un compte ?</span><span>  <a href="login.php">Connectez-vous</a></span>
	</form>
</div>
</center>



</body>

</html>