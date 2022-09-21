<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>GSB</title>
    <link rel="stylesheet" href="<?php echo base_url('/public/css/acceuil.css'); ?>" />
  </head>
  <body>
    <header class="page-header">
        <div class='logo'>
          <?php
            echo '<a href="'.base_url().'/public/index.php?action=acceuil">
            <img src="images/gsb.png" alt="logo" class="img"/>
            </a>'
          ?>
            <h1 class="titre">GSB</h1>
        </div>
    </header>
	</br></br><br/><br/><br/></br></br><br/><br/><br/>
	<h1>GSB</h1>
  <div id="cadre">
	  <h2>GSB est une entreprise pharmaceutique qui a pour mission de présenter</br> les produits aux membres du corps médical, à charge pour lui d'enchaîner </br> 
	  les arguments, de répondre aux questions sur leur efficacité, </br> leur tolérance, les éventuels effets secondaires, ou les modalités de prise en charge.</h2>
  </div>
	</br></br></br></br>
	<div class="connexion">
	         <?php echo '<a href="'.base_url().'/public/index.php?action=connexion">Connexion</a>'?>
             
	</div>
	<div id="footer">
      <?php echo '<a href="'.base_url().'/public/index.php?action=cgu">Conditions générales d\'utilisation</a>'?>

  </div>
  </body>
</html>