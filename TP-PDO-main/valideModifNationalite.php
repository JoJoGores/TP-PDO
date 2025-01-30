<?php include "header.php";
include "connexionpdo.php";
$libelle=$_POST['libelle']; // recup le libelle du formulaire
$bum=$_POST['num'];


$req = $monPdo->prepare("update nationalite set libelle = :libelle where num = :num");
$req->bindParam(':libelle', $libelle);
$req->bindParam(':num', $num);
$nb=$req->execute();

echo '<div class="container mt-5">';
echo '<div class="row">
    <div class="col mt-5">';
if($nb == 1) {
    echo '<div class="alert alert-succes" role="alert">
    La nationalitée a bien été modifiée !
    </div>';
}else{
    echo '<div class="alert alert-danger" role="alert">
    La nationalitée n\'a pas été modifiée !
    </div>';
}
?>
    </div>
</div>
<a href="listenationalites" class="btn btn-primary"> Revenir a la liste des nationalitées </a>

</div>
  

<?php include "footer.php";

?>
