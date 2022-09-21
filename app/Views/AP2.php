<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>GSB</title>
    <link rel="stylesheet" href="<?php echo base_url('/public/css/AP2.css'); ?>" />
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

  <div class="connexion">
   <form action="index.php?action=testconnexion" method="post"> 
  <h1>Connexion</h2>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="user" >
				</br>
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" >
				</br>
        <input type="submit" id='submit' value='LOGIN' name="login">
        </form>
      </div>
      <div id="footer">
      <?php echo '<a href="'.base_url().'/public/index.php?action=cgu">Conditions générales d\'utilisation</a>'?>

  </div>
    </body>
</html>