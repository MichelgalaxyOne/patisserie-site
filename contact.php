<?php

//Connexion à la base de données
$nomserveur='localhost';
$nombd='bd_patisserie';
$utilisateur="root";
$password='';
try{
    $dbo=new PDO("mysql:host=$nomserveur;dbname=$nombd", $utilisateur,$password);
    $dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Récupérer les données saisies
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $numero=$_POST['numero'];
    $adr=$_POST['adresse'];
    $messages=$_POST['messages'];

    //Insertion  dans la base de données: Il s'agit d'une requête préparer(standard)
    $req="INSERT INTO client(nom,prenom,email,numero,adresse,messages)
    VALUES('$nom','$prenom','$email','$numero','$adresse','$messages')";
    $dbo->exec($req);

    //Message de succès
    echo'<div style="text-align: center;position: relative; top: 85px; color: white;  background-color: #73d21a; font-size: 20px;">Votre message à bien été reçu, nous essayerons de vous répondre dans les plus bref délai</div>';
}
//Message d'erreur
catch(PDOException $e) {
    echo'<div style="text-align: center;position: relative; top: 85px; color: white;  background-color: #73d21a; font-size: 20px;">Erreur,Veuillez remplir à nouveau le formulaire!</div>';
}

?>