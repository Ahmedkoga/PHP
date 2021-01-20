<!DOCTYPE html>
<?php
    if (isset($_GET['user_agent'])){
        echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
    }
    
    if (isset($_GET['user_IP'])){
    echo $_SERVER['REMOTE_ADDR'];
    }
    
    if (isset($_GET['server_name'])){
        echo $_SERVER['SERVER_NAME'];
    }
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="index.php" method="GET" id="form">
            <p>Bonjour !</p>
            <p>Vous pouvez ici voir votre user agent !</p>
            <input type="submit" name="user_agent" value="Your User Agent">
            <p>Vous pouvez ici voir votre adresse ip !</p>
            <input type="submit" name="user_IP" value="Adress IP">
            <p>Vous pouvez ici voir le nom du serveur !</p>
            <input type="submit" name="server_name" value="Server Name">

        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>