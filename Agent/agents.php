<?php 
	include '../connexion.php';

	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>AGENTS</title>
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
					<li><a href="../Agent/agents.php"><i class="fas fa-user-friends" style="color:yellow;"></i><span style="color:yellow;"> AGENTS </span></a></li>
					<li><a href="../Dossier/dossier.php"><i class="fas fa-file-alt"></i> DOSSIERS ET FLUX</a></li>					
					<li><a href="../Statistiques.php"><i class="fas fa-chart-bar"></i> STATISTIQUES</a></li>
					<li><a href="../Compte/compte.php"><i class="fas fa-user"></i> VOTRE COMPTE</a></li>
					<div style="float:right;margin-right:15px;color:lightgrey;"><br>| Service Régional du Budget - Haute Matsiatra</div>
				</ul>
			</center>
		</div>
	</header>



<div class="agent_agent" id="agent_agent">

<div style="margin-top:50px; color:transparent;">.</div>

<div id="liste_agents">
	<img src="../images/mef.png" class="limage002">		
	<p style="margin-top:30px;">.</p>
		<p class="title002" style="margin-left: 130px;"><b>LES AGENTS EXISTANTS</b></p>
		<center>
		<p class="title003">LISTE DES AGENTS A ENTREPRENDRE</p>
		</center>		
</div>



<br><br><br>

<!--	BOUTONS MANOKATRA NY MODALS		-->

<div style="float:left;margin-top:10px;">
	<div style="margin-top:60px;margin-left:10px;">		
		<form action="" method="POST">
			<span class="btn_008" style="margin-left:30px;">
				Rechercher un agent: 
				<input type="search" name="num_agent" id="num_agent" placeholder="N° immatriculation" class="linput03">
				<button name="search_agent" style="background:none;border:none;color:white;">
					<i class="fas fa-search" title="Rechercher" style="margin-left:10px; cursor:pointer;"></i>
				</button>
			</span>
		</form>

		<br><br><br>

		<button class="modals-open btn_ajouter_agent" data-modal="modals1" style="width:330px;"><b>AJOUTER UN NOUVEL AGENT <i class="fas fa-edit"></i></b></button>

		<br><br><br>

		<button style="margin-left:30px;width:330px;" class="btn_imprimer_agent" id="imprimer_agent" name="imprimer_agent" onclick="PrintTable();">IMPRIMER</button>
		<br><br><br>
		<a href="javascript:history.back()" ><button style="margin-left:30px;width:330px;padding:9px;color:white;background-color:darkorange;border:none;cursor:pointer;">Retour</button></a>
		<button class="modals-open" data-modal="modals2" style="display:none;">Modal 2</button>
	</div>
</div>



<!--##############################################################################################-->

<?php 	

	if (isset($_POST['search_agent']))
	{
		$num_agent = $_POST['num_agent'];

		$mquery = "SELECT * FROM agent where im_agent='$num_agent' ";
		$mquery_run = mysqli_query($con,$mquery);

		if ($mquery_run){

		while($row=mysqli_fetch_assoc($mquery_run)){
			?>

<center>
<div class="container">
	<div style="width:1050px;height:510px;overflow:auto;border:none;padding:10px;padding-left:0.2px;padding-right:0.2px;">
		<table id="monTableau" name="monTableau" class="letableau01" style="font-size:13px;text-align:center;">
		  <tr style="">
		  	<th style="padding-left:15px; padding-right:15px;display:none;">ID</th>
		  	<th style="background:#4d4d4d;color:white;">Immatriculation</th>
		    <th style="background:#4d4d4d;color:white;">Nom</th>
		    <th style="background:#4d4d4d;color:white;">Prénoms</th>
		    <th style="background:#4d4d4d;color:white;padding-left:35px; padding-right:35px;">Grade et Echelon</th>
			<th style="background:#4d4d4d;color:white;">ELD</th>
			<th style="background:#4d4d4d;color:white;">Corps</th>
		    <th style="background:#4d4d4d;color:white;padding-left:22px;;">Date de naissance</th>
		    <th style="background:#4d4d4d;color:white;display:none;">Adresse</th>
            <th style="background:#4d4d4d;color:white;">Téléphone</th>		    
            <th style="background:#4d4d4d;color:white;">Fonction</th>
			<th style="background:#4d4d4d;color:white;padding-right:30px; padding-left:30px;">ACTION</th>
		  </tr>

	<?php 			
			
			$id=$row['id_agent'];
			$im_agent=$row['im_agent'];
			$classe_agent=$row['classe_agent'];
			$eld_agent=$row['eld_agent'];
			$corps_agent=$row['corps_agent'];
			$nom_agent=$row['nom_agent'];
			$prenom_agent=$row['prenom_agent'];
			$date_naiss_agent=$row['date_naiss_agent'];
			$adresse_agent=$row['adresse_agent'];
			$tel_agent=$row['tel_agent'];
			$nom_fonct=$row['nom_fonct'];

			echo '
			<tr>
					<th style="display:none;"><center>'.$id.'</center></th>
					<th>'.$im_agent.'</th>
	    			<td>'.$nom_agent.'</td>
	    			<td>'.$prenom_agent.'</td>
					<td>'.$classe_agent.'</td>
					<td>'.$eld_agent.'</td>
					<td>'.$corps_agent.'</td>
					<td>'.$date_naiss_agent.'</td>
                    <td style="display:none;">'.$adresse_agent.'</td>
                    <td>'.$tel_agent.'</td>
                    <td>'.$nom_fonct.'</td>
					<td><center>
						<a href="update_agent.php?updateagentid='.$id.'"><span style="margin-right:15px;" title="Editer" data-modal="modals2" class="modals-open" id="modifier_agent" name="modifier_agent"><i class="fas fa-edit btn_modifier_agent"></i></span></a>
						<a href="delete_agent.php?deleteid='.$id.'"><span style="margin-right:15px;" title="Supprimer"><i class="fas fa-trash-alt btn_supprimer_agent modals3-open" data-modal="modals3"></i></span></a>
					</td>
  			</tr>
				';

			}

		}else{
			echo 'Aucun résultat';
		}



	?>

		</table>	





		</div>
</div>
</center>

			<?php
		}
			

	
?>


<!--##############################################################################################-->


<!--	PREMIER MODAL	-->

<!--	NY MODALS MISOKATRA		-->
<div class="modals_bg" id="modals1">
	<div class="modals-content">
		<div class="modals-close closebtn" title="Fermer la fenêtre">x</div><br>

                <form action="" method="POST">
                <p style="font-size:30px;color:white;"><b>SAISIE D'UN AGENT</b></p>
                <p style="font-size:13px;color:white;"><i class="fas fa-exclamation-triangle"></i><i> Tous les champs sont obligatoires </i></p>
                <br>
                    <input type="text" class="linput04" id="im_agent" name="im_agent" placeholder="N° d'immatriculation" autocomplete="off" required style="margin-top:9px;">
                    <br>
                    <p><input type="text" class="linput04" id="nom_agent" name="nom_agent" placeholder="Nom" required style="margin-top:9px;" autocomplete="off" maxlength=40></p>
                    <p><input type="text" class="linput04" id="prenom_agent" name="prenom_agent" placeholder="Prénoms" required style="margin-top:9px;" autocomplete="off" maxlength=60></p>
                    <span style="color:white;">Grade et Echelon : </span>
					<select class="linput04b" id="classe_agent" name="classe_agent" style="margin-top:9px;width:185px;">
						<option selected disabled style="color:white;background-color:grey;">Choisissez le grade</option>
						<option value="Stagiaire">Stagiaire</option>
						<option value="2e classe 1e Echelon">2° classe 1° Echelon</option>						
						<option value="2e classe 2e Echelon">2° classe 2° Echelon</option>
                        <option value="2e classe 3e Echelon">2° classe 3° Echelon</option>
                        <option value="1e classe 1e Echelon">1° classe 1° Echelon</option>
                        <option value="1e classe 2e Echelon">1° classe 2° Echelon</option>
                        <option value="1e classe 3e Echelon">1° classe 3° Echelon</option>
						<option value="Principal 1e Echelon">Principal 1° Echelon</option>
						<option value="Principal 2e Echelon">Principal 2° Echelon</option>
						<option value="Principal 3e Echelon">Principal 3° Echelon</option>
						<option value="Classe Exceptionnelle 1e Echelon">Classe Exceptionnelle 1° Echelon</option>
						<option value="Classe Exceptionnelle 2e Echelon">Classe Exceptionnelle 2° Echelon</option>						
                    
						<option disabled style="color:white;background-color:grey;">Autres</option>
						<option value="A41E">A41E</option>
						<option value="A42E">A42E</option>
						<option value="A43E">A43E</option>
						<option value="A44E">A44E</option>
						<option value="A31E">A31E</option>
						<option value="A32E">A32E</option>
						<option value="A33E">A33E</option>
						<option value="A34E">A34E</option>
						<option value="A21E">A21E</option>
						<option value="A22E">A22E</option>
						<option value="A23E">A23E</option>
						<option value="A24E">A24E</option>
						<option value="" style="color:red;">(Aucune)</option>
					</select>
					<br>
					<span style="color:white;">ELD : </span>           
					<select class="linput04b" id="eld_agent" name="eld_agent" style="margin-top:9px;width:340px;">						
						<option value="MJ 00" selected>MJ 00</option>
						<option value="MJ 10">MJ 10</option>
						<option value="MJ 20">MJ 20</option>
						<option value="MJ 30">MJ 30</option>
						<option value="MJ 40">MJ 40</option>
						<option value="MJ 50">MJ 50</option>						
                    </select>
					<br>
					<span style="color:white;">Corps : </span>           
					<select class="linput04b" id="corps_agent" name="corps_agent" style="margin-top:9px;width:325px;">
						<option selected disabled style="color:white;background-color:grey;">Choisissez le corps</option>
						<option value="Sous-opérateur">Sous-opérateur</option>
						<option value="Opérateur">Opérateur</option>
						<option value="Encadreur">Encadreur</option>
						<option value="Technicien Supérieur">Technicien Supérieur</option>
						<option value="Réalisateur adjoint">Réalisateur adjoint</option>
						<option value="Réalisateur">Réalisateur</option>
						<option value="Concepteur">Concepteur</option>
						<option value="ASF">ASF</option>
						<option value="Employé de Service">Employé de Service</option>
						<option value="Assistant d Administration">Assistant d'Administration</option>
						<option value="Adjoint d Administration">Adjoint d'Administration</option>
						<option value="Employé d Administration">Employé d'Administration</option>
						<option value="Attaché de Service">Attaché de Service</option>
						<option value="Attaché d Administration">Attaché d'Administration</option>
                    </select>
                    <p>
                    <span style="color:white;">Date de naissance : </span>
                    <input type="date" class="linput04c" id="date_naiss_agent" name="date_naiss_agent" placeholder="Date de naissance" required style="margin-top:9px;width:240px;"></p>
                    <p><input type="text" class="linput04" id="adresse_agent" name="adresse_agent" placeholder="Adresse" required style="margin-top:9px;" autocomplete="off"></p>
                    <p><input type="number" class="linput04" id="tel_agent" name="tel_agent" placeholder="Téléphone" required style="margin-top:9px;" autocomplete="off"></p>
                    <p><input type="text" class="linput04" id="nom_fonct" name="nom_fonct" placeholder="Fonction" required style="margin-top:9px;"></p>
                    <br>
                    <button type="submit" id="valider_agent" name="valider_agent" class="btn_009" style="color:white;"><b>VALIDER</b></button>
                    <button class="modals-close btn_003" style="color:white;"><b>FERMER</b></button>
                    <br><br>                
                </form>


		<span style="display:none;"><b>INDRO ARY ILAY MODAL VOALOHANY</b></span>		
	</div>	
</div>


<script src="modales.js" defer></script>


<?php
	include 'delete_agent.php';
?>

<!--########################################################################################################-->

<br>

<center>
<div style="margin-left:1250px;">
	<?php
			$sql2="select count(im_agent) as total from agent";
			$result2=mysqli_query($con,$sql2);


			if ($result2){
				while($row2=mysqli_fetch_assoc($result2)){
					$total=$row2['total'];

					echo '<p style="font-family:Segoe UI; margin-bottom:10px;">Effectif total: '.$total.'</p>';
				}			
			}
	?>
</div>
</center>

<br>

<center>
<div class="container" >
	<div style="width:1050px;height:510px;overflow:auto;border:solid grey;padding:10px;padding-left:0.2px;padding-right:0.2px;">
		<table id="monTableau" name="monTableau" class="letableau01" style="font-size:13px;text-align:center;">
		  <tr style="">
		  	<th style="padding-left:15px; padding-right:15px;display:none;">ID</th>
		  	<th style="background:#4d4d4d;color:white;">Immatriculation</th>
		    <th style="background:#4d4d4d;color:white;">Nom</th>
		    <th style="background:#4d4d4d;color:white;">Prénoms</th>
		    <th style="background:#4d4d4d;color:white;padding-left:35px; padding-right:35px;">Grade et Echelon</th>
			<th style="background:#4d4d4d;color:white;">ELD</th>
			<th style="background:#4d4d4d;color:white;">Corps</th>
		    <th style="background:#4d4d4d;color:white;padding-left:22px;;">Date de naissance</th>
		    <th style="background:#4d4d4d;color:white;display:none;">Adresse</th>
            <th style="background:#4d4d4d;color:white;">Téléphone</th>		    
            <th style="background:#4d4d4d;color:white;">Fonction</th>
			<th style="background:#4d4d4d;color:white;padding-right:30px; padding-left:30px;">ACTION</th>
		  </tr>

	<?php 
		include '../connexion.php';
		$sql="select * from `agent` group by id_agent";
		$result=mysqli_query($con,$sql);

		if ($result){

			while($row=mysqli_fetch_assoc($result)){
				$id=$row['id_agent'];
				$im_agent=$row['im_agent'];
				$classe_agent=$row['classe_agent'];
				$eld_agent=$row['eld_agent'];
				$corps_agent=$row['corps_agent'];
				$nom_agent=$row['nom_agent'];
				$prenom_agent=$row['prenom_agent'];
				$date_naiss_agent=$row['date_naiss_agent'];
                $adresse_agent=$row['adresse_agent'];
                $tel_agent=$row['tel_agent'];
                $nom_fonct=$row['nom_fonct'];

			echo '
			<tr>
					<th style="display:none;"><center>'.$id.'</center></th>
					<th>'.$im_agent.'</th>
	    			<td>'.$nom_agent.'</td>
	    			<td>'.$prenom_agent.'</td>
					<td>'.$classe_agent.'</td>  
					<td>'.$eld_agent.'</td>
					<td>'.$corps_agent.'</td>
					<td>'.$date_naiss_agent.'</td>
                    <td style="display:none;">'.$adresse_agent.'</td>
                    <td>'.$tel_agent.'</td>
                    <td>'.$nom_fonct.'</td>
					<td><center>
						<a href="update_agent.php?updateagentid='.$id.'"><span style="margin-right:15px;" title="Editer" data-modal="modals2" class="modals-open" id="modifier_agent" name="modifier_agent"><i class="fas fa-edit btn_modifier_agent"></i></span></a>
						<a href="delete_agent.php?deleteid='.$id.'"><span style="margin-right:15px;" title="Supprimer"><i class="fas fa-trash-alt btn_supprimer_agent modals3-open" data-modal="modals3"></i></span></a>
					</td>
  			</tr>
				';

			}

		}



	?>

		</table>	
		</div>
</div>
<br>
<p style="font-family:'Segoe UI';"><i class="fas fa-mouse"></i> Défilez en bas (ou utilisez la molette de votre souris) pour voir la suite de la liste</p>
</center>



<br><br><br><br><br><br><br><br><br><br>

<?php 
	include 'add_agent.php';
?>


<script>
	var btns = document.getElementById('modifier_agent');
	var btnx = document.getElementById('monTableau');

	btnx.addEventListener('mouseover',action);

	function action(){
		var table = document.getElementById('monTableau'), rindex;
		for (var i=0; i >table.rows.length; i++){
			table.rows[i].onclick=function(){
				rindex=this.rowIndex;
				document.getElementById('im_agent').value=this.cells[0].innerHTML;
				document.getElementById('nom_agent').value=this.cells[1].innerHTML;
				document.getElementById('prenom_agent').value=this.cells[2].innerHTML;
				document.getElementById('classe_agent').value=this.cells[3].innerHTML;
				document.getElementById('date_naiss_agent').value=this.cells[4].innerHTML;
				document.getElementById('adresse_agent').value=this.cells[5].innerHTML;
				document.getElementById('tel_agent').value=this.cells[6].innerHTML;
				document.getElementById('nom_fonct').value=this.cells[7].innerHTML;
			}
		}
	}
</script>


<!--############################################################################################################################################################-->
	
	<!--IMPRESSION-->

<!--############################################################################################################################################################-->

<style type="text/css" id="style_tableau_impr1">
    table.monTableau2{  
        text-align:center;  
        border-collapse: collapse; 			          
    }
    table.monTableau2 th,table.monTableau2 td{
		text-align:center;
        font-family:'Segoe UI';
        border-collapse: collapse; 			  
        border:solid 0.4px;
        background:white;
    }
</style>

<center>
<div class="container" id="tableau_agent_impr" style="display:none;">
    <img src="../images/mef.png"  style="margin-top:50px; width:110px;float: right; margin-right: 30px;">		
	
	<br><br><br><br><br><br><br><br>
	
	<center>
		<p>Liste de tous les agents</p>
	</center>

	<div style="width:1000px;height:510px;padding:3px;">
	<center>	
		<table id="monTableau2" name="monTableau2" class="monTableau2" style="font-size:13px;text-align:center;">
		  <tr>		  	
		  	<th>Immatriculation</th>
		    <th>Nom</th>
		    <th>Prénoms</th>
		    <th style="padding-left:35px; padding-right:35px;">Grade et Echelon</th>
			<th>ELD</th>
			<th>Corps</th>
		    <th style="padding-left:22px;;">Date de naissance</th>		    
            <th>Téléphone</th>		    
            <th>Fonction</th>			
		  </tr>

	<?php 
		include '../connexion.php';
		$sql="select * from `agent` group by id_agent";
		$result=mysqli_query($con,$sql);

		if ($result){

			while($row=mysqli_fetch_assoc($result)){
				$id=$row['id_agent'];
				$im_agent=$row['im_agent'];
				$classe_agent=$row['classe_agent'];
				$eld_agent=$row['eld_agent'];
				$corps_agent=$row['corps_agent'];
				$nom_agent=$row['nom_agent'];
				$prenom_agent=$row['prenom_agent'];
				$date_naiss_agent=$row['date_naiss_agent'];
                $adresse_agent=$row['adresse_agent'];
                $tel_agent=$row['tel_agent'];
                $nom_fonct=$row['nom_fonct'];

			echo '
			<tr>
					<th style="display:none;"><center>'.$id.'</center></th>
					<th>'.$im_agent.'</th>
	    			<td>'.$nom_agent.'</td>
	    			<td>'.$prenom_agent.'</td>
					<td>'.$classe_agent.'</td>  
					<td>'.$eld_agent.'</td>
					<td>'.$corps_agent.'</td>
					<td>'.$date_naiss_agent.'</td>                    
                    <td>'.$tel_agent.'</td>
                    <td>'.$nom_fonct.'</td>					
  			</tr>
				';

			}

		}



	?>

		</table>	
		</center>
		</div>
</div>
</center>



<!--###  IMPRESSION   ###-->

<script type="text/javascript">
    function PrintTable() {
        var printWindow = window.open('', '', 'height=800,width=1000');
        printWindow.document.write('<html><head><title></title>');        
 

        //Print the Table CSS.
        var table_style = document.getElementById("style_tableau_impr1").innerHTML;
        printWindow.document.write('<style type = "text/css">');
        printWindow.document.write(table_style);
        printWindow.document.write('</style>');
        printWindow.document.write('</head>');

        //Print the DIV contents i.e. the HTML Table.
        printWindow.document.write('<body>');        
        var divContents = document.getElementById("tableau_agent_impr").innerHTML;        
        printWindow.document.write(divContents);        
        printWindow.document.write('</body>');
 
        printWindow.document.write('</html>');
        printWindow.document.close();
        printWindow.print();
    }
</script>

<!--###  IMPRESSION   ###-->


<!--############################################################################################################################################################-->
	
	<!--IMPRESSION-->
	
<!--############################################################################################################################################################-->



<br><br><br><br><br><br>
<footer>
<div class="lesfooters">
    <center>
        <p>@Copyright: 2022</p>
    </center>
</div>
</footer>

</div>

</body>

</html>