<?php

if(isset($_POST['titre']) && !empty($_POST['titre']) && isset($_POST['texte']) && !empty($_POST['texte']) && isset($_POST['idutil']) && !empty($_POS['idutil'])){
	$idutil = (int) $_POST['idutil'];
	$texte = htmlspecialchars(strip_tags(trim($_POST['titre'])),ENT_QUOTES);
	$titre = htmlspecialchars(strip_tags(trim($_POST['texte'])),ENT_QUOTES);

	if($texte&&$titre&&$idutil){
		$sql = "INSERT INTO message ('idutil','titre','texte') VALUES ($idutil,'$titre','$texte')";

		$sql_recup = mysqli_query($db,$sql);

		$tab = mysqli_fetch_assoc($sql_recup);
	}else{
		header("Location: ./");
	}
}

