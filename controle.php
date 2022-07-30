<?php
  require("connexion.php");
  $req=$con->prepare('INSERT INTO etudiant Values (null,:nom,:prenom,:sexe,:mail,:password)');
  $req->bindvalue('nom',$_POST['nom'],PDO::PARAM_STR);
  $req->bindvalue('prenom',$_POST['prenom'],PDO::PARAM_STR);
  $req->bindvalue('sexe',$_POST['sexe'],PDO::PARAM_STR);
  $req->bindvalue('mail',$_POST['mail'],PDO::PARAM_STR);
  $req->bindvalue('password',md5($_POST['password']),PDO::PARAM_STR);
  
  $req= $req->execute();
  if ($req)
{
     echo"donnes entregistrer avec succe";
     header("Location:index.php");
  }
  else
  {
     echo"erreur";
  }


  ?>