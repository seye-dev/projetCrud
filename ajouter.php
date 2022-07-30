<?php

session_start();
require("connexion.php");
if(!empty($_POST['typeId']) and !empty($_POST['identifiant']) and !empty($_POST['identifiant']) and !empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['password']) and !empty($_POST['naissance']) and !empty($_POST['lieu']) and !empty($_POST['mail']) and !empty($_POST['telephone']))
    {
        
            $req= $con->prepare('INSERT INTO etudiant VALUES(null,:typeId,:identifiant,:nom,:prenom,:password,:naissance,:lieu,:mail,:telephone)');   
            $req->bindvalue(':typeId',$_POST['typeId'],PDO::PARAM_STR);
            $req->bindvalue(':identifiant',$_POST['identifiant'],PDO::PARAM_STR);
            $req->bindvalue(':nom',$_POST['nom'],PDO::PARAM_STR);        
            $req->bindvalue(':prenom',$_POST['prenom'],PDO::PARAM_STR);
            $req->bindvalue(':password',md5($_POST['password']),PDO::PARAM_STR);  
            $req->bindvalue(':naissance',$_POST['naissance'],PDO::PARAM_STR);
            $req->bindvalue(':lieu',$_POST['lieu'],PDO::PARAM_STR);
            $req->bindvalue(':mail',$_POST['mail'],PDO::PARAM_STR);
            $req->bindvalue(':telephone',$_POST['telephone'],PDO::PARAM_STR);
            $reponse1=$req->execute(); 
             header('Location:index.php');

         
    
    }
    else
    {
        echo"veuillez remplir les champs";
    }




?>

