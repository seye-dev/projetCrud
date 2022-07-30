 <?php

session_start();
require("commande.php");
require("connexion.php");

if(isset($_GET['id']) && !empty(($_GET['id'])))
{
    @$id=$_GET['id'];
$delete="DELETE FROM etudiant WHERE id= $id";
$row = $con->query($delete);
$row->execute();
header("Location:index.php");



}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <title>supprimer</title>
</head>
<body>

    <form action="supprimer.php"  method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>">
                          
        etes vous sur de vouloir supprimer ?

        <br />
        <div >
            <button type="submit" class="btn btn-danger">oui</button>
            <a class="btn" href="index.php">non</a>
        </div>
        <p>
     </form>
</body>
</html>