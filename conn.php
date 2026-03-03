<?php
try{
    $connexion =new PDO("mysql:localhost,dbname=atlantis,root,");
    
}catch(PDOException $e){
    echo $e->getMessage();
}

?>



