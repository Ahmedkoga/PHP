<?php
$number = cal_days_in_month(CAL_GREGORIAN,2,2021);
$tab_mois = array("Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre");
$tab_jours = array("","Lu","Ma","Me","Je","Ve","Sa","Di");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="calendrier.php" method="$_POST">
    <select name="mois">
        <?php foreach($tab_mois as $key => $mois){echo '<option value="'.$key.'">'.$mois.'</option>';}?>
    </select>
    <select name="annee">
         <?php for($i = 1970; $i < 2100; $i++){echo '<option value="'.$i.'">'.$i.'</option>';}?>
    </select>
    <button type="submit" name="submit">valider</button>
    </form>
    <table>
    <tr>
    <th>LUN</th><th>MAR</th><th>MER</th><th>JEU</th><th>VEN</th><th>SAM</th><th>DIM</th>
    </tr>
    <tr>
    <?php $num =$number/7; for($i=1; $i<=$num; $i++){for($i=1; $i<=$number; $i++){echo '<td>'.$i.'</td>';}}?>
    </tr>
    </table>
</body>
</html>

