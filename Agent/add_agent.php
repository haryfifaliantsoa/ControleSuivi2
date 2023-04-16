<?php 
	include '../connexion.php';

	if (isset($_POST['valider_agent'])){

		//BOUTON AJOUTER AGENT

		$im_agent=$_POST['im_agent'];
		$classe_agent=$_POST['classe_agent'];
		$nom_agent=$_POST['nom_agent'];		
		$prenom_agent=$_POST['prenom_agent'];
		$date_naiss_agent=$_POST['date_naiss_agent'];

		$eld_agent=$_POST['eld_agent'];
		$corps_agent=$_POST['corps_agent'];		

        $adresse_agent=$_POST['adresse_agent'];		
        $tel_agent=$_POST['tel_agent'];		
        $nom_fonct=$_POST['nom_fonct'];		

		$sql="insert into `agent` (im_agent,classe_agent,nom_agent,eld_agent, corps_agent, prenom_agent,
		date_naiss_agent,adresse_agent,tel_agent,
		nom_fonct) values('$im_agent','$classe_agent','$nom_agent','$eld_agent','$corps_agent','$prenom_agent','$date_naiss_agent',
		'$adresse_agent','$tel_agent','$nom_fonct')";

		$result=mysqli_query($con,$sql);
		if ($result){
			?>
				<script>
					
					alert("Agent ajouté avec succès ! "); 
					window.location="agents.php";

				</script>
			<?php

		}else{
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

?>
