<?php include "header.php";
?>

<main role="main">
<div class="container mt-5">

    <form action="valideAjoutNationalite.php" method="post">
        <div class="formg-group">
            <label for ='libelle'> Libellé </label>
            <input type="text" class='form-controle' id='libelle' placeholder='Saisir le libellé' name='libelle'>
        </div>
        <div class="row">
            <div class="col"> <a href=listenationalites.php class='btn btn-warning'> Revenir à la liste</a> </div>
            <div class="col"><button type='submit' class='btn btn-success'> Ajouter </button></div>
        </div>
    </form>
</div>
  
</main>
<?php include "footer.php";

?>
