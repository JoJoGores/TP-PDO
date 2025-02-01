<?php include "header.php";
include "connexionpdo.php";
$action=$_GET['action'];
$num=$_POST['num'];
$libelle=$_POST['libelle']; // recup le libelle du formulaire
$continent=$_POST['continent'];


if($action == "Modifier"){
    $req = $monPdo->prepare("update nationalite set libelle = :libelle, numContinent = :continent where num = :num");
    $req->bindParam(':num', $num);
    $req->bindParam(':libelle', $libelle);
    $req->bindParam(':continent', $continent);
}else{
    $req = $monPdo->prepare("insert into nationalite(libelle, numContinent) values(:libelle, :continent)");
    $req->bindParam(':libelle', $libelle);
    $req->bindParam(':continent', $continent);

}
$nb=$req->execute();
$message= $action == "Modifier" ? "modifiée" : "ajoutée";

echo '<div class="container mt-5">';
echo '<div class="row">
    <div class="col mt-5">';
if($nb == 1) {
    echo '<div class="alert alert-succes" role="alert">
    La nationalitée a bien été '. $message . '</div>';
}else{
    echo '<div class="alert alert-danger " role="alert">
    La nationalitée n\'a pas été '. $message . '</div>';
}
?>
    </div>
</div>
<a href="listenationalites.php" class="btn btn-primary"> Revenir a la liste des nationalitées </a>

</div>
  

<?php include "footer.php";

?>
