<?php
if(isset($_POST['submit'])){
    echo $_POST['civilite'].'<br>';
    echo $_POST['nom'].'<br>';
    echo $_POST['prenom'].'<br>';
    echo $_POST['age'].'<br>';
    echo $_POST['societe'].'<br>';
}else{
    echo 'error';
}
?>