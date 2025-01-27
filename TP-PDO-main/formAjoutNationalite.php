<?php include "header.php";
?>

<main role="main">
<div class="container mt-5">
<h2 class='pt-3 text-center' > Ajouter une nationalité <h2>
    <form action="valideAjoutNationalite.php" method="post" class="col-md-6 offset md-3 border border-primary p-3 rounded">
        <div class="formg-group">
            <label for ='libelle'> Libellé </label>
            <input type="text" class='form-controle' id='libelle' placeholder='Saisir le libellé' name='libelle'>
        </div>
        <div class="row">
            <div class="col"> <a href="listenationalites.php" class='btn btn-warning btn-block'> Revenir à la liste</a> </div>
            <div class="col"><button type='submit' class='btn btn-success btn-block'> Ajouter </button></div>
        </div>
    </form>
</div>
  
</main>
<?php include "footer.php";

?>
