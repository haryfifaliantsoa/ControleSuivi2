<?php 

include 'connexion.php';

error_reporting(0);

session_start();

if(isset($_SESSION['nom_user'])){
	header("Location:bienvenue.php");
}

if(isset($_POST['connecter_user'])){
	$email_user = $_POST['email_user'];
	$password_user = md5($_POST['password_user']);

	$sql001 = "SELECT * FROM utilisateur WHERE email_user='$email_user' AND password_user='$password_user' ";
	$result001 = mysqli_query($con,$sql001);
	if($result001 -> num_rows >0){			
		$row = mysqli_fetch_assoc($result001);
		$_SESSION['nom_user'] = $row['nom_user'];
		$_SESSION['email_user'] = $row['email_user'];
		?>			
		<script>
						
			/*alert("Vous êtes connecté ! "); */
			window.location="bienvenue.php";
	
		</script>		
		<?php			
		//header("Location: accueil.php");			
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>CONNEXION</title>
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
		<p><b> CONNEXION</b></p><br>		
		<input type="email" placeholder="Adresse e-mail" class="placeholders" name="email_user" id="email_user" value="<?php echo $email_user; ?>" required>
		<br><br>
		<input type="password" placeholder="Mot de passe" class="placeholders" name="password_user" id="password_user" value="<?php echo $_POST['password_user']; ?>" required>
		<br><br><br><br>

	<div class="svg-wrapper">
	<button name="connecter_user" style="height:34px;cursor:pointer;background:none;border:none;">
		<svg src="#" height="30" width="190">
			<rect class="shape" height="30" width="190">
			<div class="text"> Se connecter</div>
		</svg>
	</button>
	</div>



<?php

if(isset($_POST['connecter_user'])){
	$email_user = $_POST['email_user'];
	$password_user = md5($_POST['password_user']);

	$sql001 = "SELECT * FROM utilisateur WHERE email_user='$email_user' AND password_user='$password_user' ";
	$result001 = mysqli_query($con,$sql001);
	if($result001 -> num_rows >0){			
		$row = mysqli_fetch_assoc($result001);
		$_SESSION['nom_user'] = $row['nom_user'];
		$_SESSION['email_user'] = $row['email_user'];
		?>			
		<script>
						
			/*alert("Vous êtes connecté ! "); 
			window.location="bienvenue.php";
			*/
	
		</script>		
		<?php			
		//header("Location: accueil.php");			
	} else{
		echo "
		<center>
		<div style='color:red;'>
		<i class='fas fa-exclamation-circle'></i>
		<script>
			document.writeln('Mot de passe ou e-mail incorrect');			
		</script>
		</div>		
		";
	}
}

?>



		<button name="connecter_user" class="btninscrire_new" style="display:none;">Se connecter</button>
		<br>
		<span>Vous n'avez pas un compte ?</span><span>  <a href="index.php">Inscrivez-vous</a></span>
	</form>
</div>
</center>



</body>

</html>