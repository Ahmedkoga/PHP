<?php
//exo1
$dateCourante = date("d/m/Y").'<br>';
echo $dateCourante;
//exo2
$dateCouranteForme2 = date("d-m-y").'<br>';
echo $dateCouranteForme2;
//exo3
setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
echo strftime("%A %d %B %Y.").'<br>';
//exo4
//1er façon de faireTimestamp
echo 'Timestamp actuel : ' .time().'<br>';
//2eme façon de faireTimestamp
$date = new DateTime();
echo 'Timestamp actuel : ' .$date->getTimestamp().'<br>';
//exo5
$t = strtotime("02 august 2016 15:00");
echo 'Timestamp du 2 aout 2016 a 15:00 (GMT+1): ' .$t.'<br>';
$t1 = mktime(15, 00, 0, 8, 2, 2016);
echo 'Timestamp du 2 aout 2016 a 15:00 (GMT+1): ' .$t1.'<br>';
$t2 = gmmktime(15, 00, 0, 8, 2, 2016);
echo 'Timestamp du 2 aout 2016 a 15:00 (GMT) : ' .$t2.'<br>';
//exo6
$now = time();
$date2 = strtotime('2016-05-16');
echo 'le nombre de jour qui sépare la date du jour avec le 16 mai 2016 est : '.intval(((($now -$date2)/60)/60)/24).' jours <br>';
$date1 = strtotime('2016-02-01');
$date2 = strtotime('2016-03-01');
echo 'le nombre de jour dans le mois de février de l\'année 2016 est : '.intval(((($date2 -$date1)/60)/60)/24).' jours <br>';
echo date('Y-m-d', strtotime(' + 20 days')).'<br>';//20 jours à la date actuelle
echo date('Y-m-d', strtotime(' - 20 days')).'<br>';//-20 jours à la date actuelle

?>