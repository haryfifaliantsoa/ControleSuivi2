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