<?php
    
function getPage($db){

    $lesPages['accueil'] = "accueilControleur";

    if ($db!=null){
        if (isset($_GET['page'])){
            $page = $_GET['page'];
        } else{
            $page = 'accueil';
        }
        if (isset($lesPages[$page])){
            $page = 'accueil';
        } else{
            $contenu = $lesPages['accueil'];
        }    
    return $contenu;
    }
}

?>