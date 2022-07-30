<?php
function addUser()
{
      
}

function getAllUser()
{
    try
    {
        require("connexion.php");

        $req= "SELECT * FROM etudiant";
        $row=$con->query($req);
        return $row;
    }
    catch(PDOException $e)
    {
        $e->getMessage();
    }

   
}


function crateUser($nom,$prenom,$sexe,$mail,$password)
{
    try
    {
        require("connexion.php");
        $req=$con->prepare("INSERT INTO etudiant VALUE(nom,prenom,sexe,mail,password)");
        $con->execute($req);
    }
    catch(PDOException $e)
    {
        echo $req."<br>".$e->getMessage();
    }

}
function getRead($id)
{
    require("connexion.php");

    $req = " SELECT * FROM etudiant WHERE id=$id ";
    $row = $con->query($req);
    $row=$req->fetchAll();
    if(!empty($row))
    {
        return $row[0];
    }

}
function getUpdate($id,$nom,$prenom,$sexe,$mail,$password)
{
    require("connexion.php");

    $req="UPDATE etudiant set
    nom=?,
    prenom=?,
    sexe=?,
    mail=?,
    password=? WHERE id=?' ";
    $row = $con->query($req);
    
}
function getDelete($id)
{
    require("connexion.php");

    $req = " DELETE  FROM etudiant WHERE id='$id' ";
    $row = $con->query($req);
    
}
