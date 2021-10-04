<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>
	 <h3>Painel do Sistema</h3>
	 <?php 
         echo "Bom dia!...".$_SESSION["nome"];
        
        
         echo "<h4>Menu</h4>";

       if($_SESSION["perfil"] == "adm"){
       	 include_once'menu_adm.php';
       }else{
       	include_once'menu_usuario.php';
       }
       

	  ?>

</body>
</html>
