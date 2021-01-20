<?php
    if(isset($_POST['submit'])){
        setcookie('email',  $_POST['emailL'], time() + 1600, null, null, false, true);
        setcookie('password', $_POST['password'], time() + 1600, null, null, false, true);
        echo '<p>'.$_COOKIE['email'].'</p>';
        echo '<p>'.$_COOKIE['password'].'</p>';
        $_COOKIE['email'] = 'egedf';
        $_COOKIE['password'] ='vdffd';
        echo '<p>'.$_COOKIE['email'].'</p>';
        echo '<p>'.$_COOKIE['password'].'</p>';

    }
    
?> 

