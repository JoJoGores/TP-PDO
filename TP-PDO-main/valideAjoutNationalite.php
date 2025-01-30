<?php include "header.php";
include "connexionpdo.php";
$libelle=$_POST['libelle']; // recup le libelle du formulaire

$req = $monPdo->prepare("insert into nationalite(libelle) values(:libelle)");
$req->bindParam(':libelle', $libelle);
$nb=$req->execute();

echo '<div class="container mt-5">';
echo '<div class="row">
    <div class="col mt-5">';
if($nb == 1) {
    echo '<div class="alert alert-succes" role="alert">
    La nationalitée a bien été ajoutée !
    </div>';
}else{
    echo '<div class="alert alert-danger" role="alert">
    La nationalitée n\'a pas été ajoutée !
    </div>';
}
?>
    </div>
</div>
<a href="listenationalites" class="btn btn-primary"> Revenir a la liste des nationalitées </a>

</div>
  

<?php include "footer.php";

?>
