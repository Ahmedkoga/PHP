<?php
    if(isset($_POST['Submit'])){

        $fileUpload =  $_POST['file'];
        $fileExtension = pathinfo($fileUpload, PATHINFO_EXTENSION);
        if($fileExtension === 'pdf'&&'jpg'){
            echo '<h1>'.$fileExtension.'</h1>';
        }else{
            echo '<p>echec</p>';
        }
        echo 'Bonjour '.$_POST['civilite'].' '. $_POST['userFisrtname'].' '.$_POST['userLastname'].' vous etes ne(é) '.$_POST['date'].' Vous avez telechargé le fichier : '. $_POST['file'];
    }else{
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="mt-5">
        <form method="POST" action="index.php">
        
        <legend class="col-form-label col-sm-2 pt-0">Civilité :</legend>
            <div class="col-sm-10">
                <div class="form-check">
                <input class="form-check-input" type="radio" name="civilite"value=" Mr" checked>
                <label class="form-check-label" for="gridRadios1">
                    Mr
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="civilite" value="Mme">
                <label class="form-check-label" for="gridRadios2">
                    Mme
                </label>
                </div>
            <div class="form-group">
                <label for="userFisrtname">Nom :</label>
                <input type="text" class="form-control" name="userFisrtname" placeholder="Enter votre Nom">
            </div>
            <div class="form-group">
                <label for="userLastname">Prenom :</label>
                <input type="text" class="form-control"name="userLastname" placeholder="Enter votre Prenom">
            </div>
            <div class="form-group">
                <label for="date" class="col-2 col-form-label">Date :</label>
                <input class="form-control" type="date" name="date">
            </div>
            <div class="form-group mt-3">
                <label for="file">Telecharger un fichier :</label>
                <input type="file" class="form-control-file" name="file" id="file">
            </div>
            <button type="submit" name="Submit" class="btn btn-primary mt-3">Submit</button>
        </form>   
        </div>       
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
<?php
}
?>