 <?php
session_start();
require("connexion.php");
require("commande.php");
if(isset($_POST))
{
     
    if(isset($_GET['id']) && !empty($_GET['id']))
    {
        $id=$_GET['id'];
        $req="SELECT * FROM etudiant WHERE id= $id";
        $row = $con->query($req);
        $row->execute();

        $etudiant=$row->fetch();
     
    }
}
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <title>Editer</title>
</head>
<body>
<form method="post" >
    <label>Type identifiant</label><br>
      <select  name="typeId"value='<?= $etudiant['typeId'] ?>' class="form-select" aria-label="Default select example">
                <option selected>selectionner le type de piece</option>
                <option >CNI</option>
                <option >Carte Etudiant</option>
                <option >passeport</option>
                <option >autre</option>
            </select>   
          <label>Numero Identifiant</label><br>
      <input  class="form-control"value='<?= $etudiant['identifiant'] ?>'type="text" name="identifiant">

            <label>nom </label><br>
            <input  class="form-control"value='<?= $etudiant['nom'] ?>'type="text" name="nom">
            <label>prenom</label>
            <input class="form-control"value='<?= $etudiant['prenom'] ?>'type="text" name="prenom">
            <label> mot de passe</label>
            <input class="form-control"value='<?= $etudiant['password'] ?>'type="password" name="password">
      <label> Date de Naissance</label><br>
      <input class="form-control"value='<?= $etudiant['naissance'] ?>'type="date" name="naissance"><br>
      <label>Lieu de Naissance </label><br>
      <input class="form-control"value='<?= $etudiant['lieu'] ?>'type="text" name="lieu"><br> 
      <label> mail</label>
      <input class="form-control"value='<?= $etudiant['mail'] ?>'type="email" name="mail">
      <label> Telephone</label><br>
      <input class="form-control"value='<?= $etudiant['telephone'] ?>'type="number" name="telephone"><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">
            <a href="index.php">Close</a>
        </button>
      </div>
    </form>
    </div>
  </div>
</div>
</body>
</html>




