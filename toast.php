<?php
require_once 'traitement.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice XHR asynchrone</title>
    
        <script src="js/ajax.js"></script>
    </head>
    <body>
        <div id="iciclic">Cliquez ici<br/></div><hr/>
        <div id="etat">vide</div><hr/>
        <div id="lecontenu" style="overflow-y: auto; height: 300px;">ici le contenu de traitement.php</div>
                
        <form method="POST" action="">
            <input type="text" name="texte" placeholder="texte">
            <input type="text" name="idutil" placeholder="idutil">
            <input type="text" name="titre" placeholder="titre">
            <input id="submit" type="submit" name="submit" onclick="requeteAjax('traitement.php','submit','etat','lecontenu')" >
        </form>
        <?php
            echo $tab;
        ?>
    </body>
</html>
