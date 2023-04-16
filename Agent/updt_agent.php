<?php 

    include '../connexion.php';

    $id=$_GET['updateagentid'];
    $sql = "select * from `agent` where id_agent=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    
        $im_agent=$row['im_agent'];
        $classe_agent=$row['classe_agent'];
        $nom_agent=$row['nom_agent'];
        $prenom_agent=$row['prenom_agent'];

        $eld_agent=$row['eld_agent'];
		$corps_agent=$row['corps_agent'];		

        $date_naiss_agent=$row['date_naiss_agent'];
        $adresse_agent=$row['adresse_agent'];
        $tel_agent=$row['tel_agent'];
        $nom_fonct=$row['nom_fonct'];

    if(isset($_POST['update_agent'])){
        $im_agent=$_POST['im_agent'];
        $classe_agent=$_POST['classe_agent'];
        $nom_agent=$_POST['nom_agent'];
        $prenom_agent=$_POST['prenom_agent'];

        $eld_agent=$_POST['eld_agent'];
		$corps_agent=$_POST['corps_agent'];		

        $date_naiss_agent=$_POST['date_naiss_agent'];
        $adresse_agent=$_POST['adresse_agent'];
        $tel_agent=$_POST['tel_agent'];
        $nom_fonct=$_POST['nom_fonct'];

        $sql="update `agent` set id_agent=$id, im_agent='$im_agent', classe_agent='$classe_agent',
        nom_agent='$nom_agent',prenom_agent='$prenom_agent',date_naiss_agent='$date_naiss_agent',
        adresse_agent='$adresse_agent',tel_agent='$tel_agent',nom_fonct='$nom_fonct',eld_agent='$eld_agent',corps_agent='$corps_agent' where id_agent=$id";

        $result=mysqli_query($con,$sql);
        if($result==true){
            echo "
            <script>
                alert ('Enregistrement modifié avec succès');
                window.location='agents.php';
            </script>                        
            ";            
        }else{
			echo "Une erreur est survenue";
		}
    }

?>