<?php

    session_start();

    error_reporting(0);

    if(!isset($_SESSION['nom_user'])){
        header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BIENVENUE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="lestyle8.css" />
    <script src="main.js"></script>
    <style>
        body{
            background:white;
        }
        .animation_bienvenue{
            left:25px; 
            top:0px;
            color: black;
            -webkit-animation-name: anim_bienvenue; /* Chrome, Safari, Opera */
            -webkit-animation-duration: 4s; /* Chrome, Safari, Opera */
            position: relative;
            animation-name: anim_bienvenue;
            animation-duration: 7s;
        }

        /* Chrome, Safari, Opera */
        @-webkit-keyframes anim_bienvenue {
            0%   {color:transparent; left:0px; top:0px;}
            25%  {color:orange; left:25px; top:0px;}   
            50%  {color:red; left:25px; top:0px;} 
            
        }

        /* Standard syntax */
        @keyframes anim_bienvenue {
            0%   {color:transparent; left:0px; top:0px;}
            25%  {color:orange; left:25px; top:0px;}
            50%  {color:red; left:25px; top:0px;} 
        }

    </style>
</head>
<body>
    
<div class="bienvenues">

    <h1 class="animation_bienvenue" style="margin-right:40px;">BIENVENUE</h1>
        <br>
        <span style="font-size:25px;"><?php echo $_SESSION['nom_user']; ?></span>
        <br>
        <span style="font-size:14px;color:grey;"><?php echo $_SESSION['email_user']; ?></span>
        <br><br><br>
    <a href="accueil.php"><button class="btnappuyer_cont">Appuyez pour continuer</button></a>
    
</div>

</body>
</html>