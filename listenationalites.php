<?php include "header.php";
include "connexionpdo.php";
$req = $monPdo->prepare("select * from nationalite");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesNationalites=$req->fetchAll();
?>

<main role="main">
<div class="container mt-5">
  <div class="row pt-3">
    <div class="col-9"><h2>Liste des nationalitées<h2></div>
    <div class="col-3"><a href="formNationalite.php?action=Ajouter" class='btn btn-success'><i class="fas fa-plus-circle"></i>Créer une nationalitée</a> </div>
  
  </div> 

<table class="table table-hover table-striped">
  <thead>
    <tr class="">
    <tr>
      <th scope="col" class="col-md-2">Numéro</th>
      <th scope="col" class="col-md-8">Libellé</th>
      <th scope="col" class="col-md-2">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($lesNationalites as $nationalite){
        echo "<tr>";
        echo "<td class='col-md-2'>$nationalite->num</td>";
        echo "<td class='col-md-8'>$nationalite->libelle</td>";
        echo "<td class='col-md-2'>
          <a href='formNationalite.php?action=Modifier&num=$nationalite->num' class='btn btn-primary'><i class='fas fa-pen'></i></a>
          <a href='supprimerNationalite.php?num=$nationalite->num' class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
        </td>";
        echo "</tr>";
    }
    ?>

  </tbody>
</table>


</div>
  
</main>

<?php include "footer.php";

?>
