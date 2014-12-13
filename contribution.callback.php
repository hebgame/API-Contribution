<?php
// Importation de la connexion à la base de données ou à l'API Commande.
$security_key = "*****************************";
if(isset($_POST['server_id'],$_POST['server_ip'],$_POST['server_port'],$_POST['mc_pseudo'],$_POST['sys_time'],$_POST['type'],$_POST['tokens'],$_POST['sys_security_key']) && !empty($_POST['server_id']) && !empty($_POST['server_ip']) && !empty($_POST['server_port']) && !empty($_POST['mc_pseudo']) && !empty($_POST['sys_time']) && !empty($_POST['type']) && !empty($_POST['tokens']) && !empty($_POST['sys_security_key']))
{
    // Vérification que les données proviennent bien d'HebGame.
    if($_POST['sys_security_key'] == $security_key)
    {
    	$server_id = $_POST['server_id'];
        $server_ip = $_POST['server_ip'];
        $server_port = $_POST['server_port'];
        $mc_pseudo = $_POST['mc_pseudo'];
        $time = $_POST['sys_time'];
        $type = $_POST['type'];
        $tokens = $_POST['tokens'];
        // Traitement des données ..
        // Enregistrement dans une base de données ou utilisation de l'API Commande par exemple.
    }
}
?>
