 <?php 
session_start();
require("commande.php");
$etudiants=getAllUser();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<h1>listes des membres</h1>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ajouter un nouveau
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORMULAIRE DE RECHANGEMENTe</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <form method="post" action="ajouter.php">
    <label>Type identifiant</label><br>
      <select  name="typeId" class="form-select" aria-label="Default select example">
                <option selected>selectionner le type de piece</option>
                <option >CNI</option>
                <option >Carte Etudiant</option>
                <option >passeport</option>
                <option >autre</option>
            </select>   
          <label>Numero Identifiant</label><br>
      <input  class="form-control"type="text" name="identifiant">

            <label>nom </label><br>
			<input  class="form-control"type="text" name="nom">
			<label>prenom</label>
			<input class="form-control"type="text" name="prenom">
			<label> mot de passe</label>
			<input class="form-control"type="password" name="password">
      <label> Date de Naissance</label><br>
      <input class="form-control"type="date" name="naissance"><br>
      <label>Lieu de Naissance </label><br>
      <input class="form-control"type="text" name="lieu"><br> 
      <label> mail</label>
      <input class="form-control"type="email" name="mail">
      <label> Telephone</label><br>
      <input class="form-control"type="number" name="telephone"><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        <button type="submit"name="envoyer" class="btn btn-success">enregistrer</button>
      </div>
    </form>
    </div>
  </div>
</div>

<table class="table">
  <thead class="table-dark">
  <tr>  
        <th scope="col">id</th>
       <th scope="col">typeId</th>
        <th scope="col">identifian</th>
        <th scope="col">nom</th>
        <th scope="col">prenom</th>
        <th scope="col">password</th>
        <th scope="col">naissance</th> 
        <th scope="col">lieu</th> 
        <th scope="col">mail</th>
        <th scope="col">telephone</th>
        <th scope="col" colspan="3">operation</th>
      </tr>
  </thead>
  <tbody>
      <?php foreach($etudiants as $etudiant){?>   
        <tr>
          <td scope="col"><?= $etudiant['id'] ?></td>
          <td scope="col"><?= $etudiant['typeId'] ?></td>
          <td scope="col"><?= $etudiant['identifiant'] ?></td>
          <td scope="col"><?= $etudiant['nom'] ?></td>
          <td scope="col"><?= $etudiant['prenom'] ?></td>
          <td scope="col"><?= $etudiant['password'] ?></td>
          <td scope="col"><?= $etudiant['naissance'] ?></td>
          <td scope="col"><?= $etudiant['lieu'] ?></td>
          <td scope="col"><?= $etudiant['mail'] ?></td>
          <td scope="col"><?= $etudiant['telephone'] ?></td>
          <td> 
            <button class="btn btn-success"name="envoyer" type="submit">
            <a href="read.php?id=<?= $etudiant["id"]?>"> read </a> 
             </button>
          </td>
          <td> 
            <button class="btn btn-success"name="envoyer" type="submit">
            <a href="update.php?id=<?= $etudiant["id"]?>"> update </a> 
             </button>
          </td>
          <td>
            <button class="btn btn-danger"name="envoyer" type="submit">
            <a href="supprimer.php?id=<?= $etudiant["id"]?>"> delete</a></td>
          </button>
        </tr>
        
        <?php } ?> 
              
  
  </tbody>
</table>
    
</body>
</html>
