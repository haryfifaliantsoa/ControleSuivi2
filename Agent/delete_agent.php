<?php 
    include '../connexion.php';
    

	if (isset($_GET['deleteid'])){
		$id = $_GET['deleteid'];

		$sql = "delete from `agent` where id_agent=$id";
		$result = mysqli_query($con,$sql);
		if ($result){
			
			echo "
				<script>					
					alert('Suppression réussi');
					window.location='agents.php';
				</script>

			";			
							
//			header('location:personnel.php');		
		} else {
			echo "Echec de la suppression";
		}

	}


?>