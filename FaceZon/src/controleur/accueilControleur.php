<?php

function accueilControleur($twig,$db){
    $form = array(); 
    if (isset($_POST['btInscrire'])){
        $inputEmail = $_POST['inputEmail'];
        $inputPassword = $_POST['inputPassword'];
        $inputPassword2 =$_POST['inputPassword2'];
        $role = $_POST['role'];
        $form['valide'] = true;
        $utilisateur = new Article($db);
        $exec = $utilisateur->insert($Titre, $CTitre);
        if (!$exec){
            $form['valide'] = false;
            $form['message'] = 'Problème d\'insertion dans la table article ';
        }
        $form['email'] = $inputEmail;
        $form['role'] = $role;
    }
    echo $twig->render('accueil.html.twig', array('form'=>$form));
}

?>