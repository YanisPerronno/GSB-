<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>GSB</title>
    <link rel="stylesheet" href="<?php echo base_url('/public/css/AP.css'); ?>" />
    
  </head>
  <body>
		<?php
               
               if($_SESSION['username'] !== ""){
                   $user = $_SESSION['username'];
                    // afficher un message
                   echo "Bonjour $user, vous êtes connecté";
               }
        ?>
    <header class="page-header">
        <div class='logo'>
        
		<?php
			echo '<a href="'.base_url().'/public/index.php?action=acceuil">
			<img src="images/gsb.png" alt="logo" class="img"/>
			</a>'
			?>
            <h1 class="titre">GSB</h1>
        </div>
        <?php
               
               if($_SESSION['username'] !== ""){
                   $user = $_SESSION['username'];
                    // afficher un message
                   echo "Bonjour $user, vous êtes connecté";
               }
        ?>
    </header>
	</br></br></br></br></br></br>
	<div class="bouton">
		<button><?php echo '<a href="'.base_url().'/public/index.php?action=ajout">ajouter une note de frais </a>'?></button>  
	</div>
  <div id="footer">
      <?php echo '<a href="'.base_url().'/public/index.php?action=cgu">Conditions générales d\'utilisation</a>'?>

  </div>
  </body>
</html>