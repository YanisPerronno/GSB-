<?php
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
	die('connexion impossible' . mysql_error());
	}

	mysql_select_db("gsbv2", $con);

	mysql_query("INSERT INTO `FicheFrais` (`mois`, `nbJustificatif`,'montantValide','dateModif')
	VALUES ('','$_POST[mois]','$_POST[nbJustificatif]','$_POST[montantValide]','$_POST[dateModif]')";

	mysql_close($con);
?> 