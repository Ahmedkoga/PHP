<?php
// define variables and set to empty values
$civilite = $nom = $prenom = $ddNaissance = $pdNaissance = $nationalite = $codePostal = $commune = $rue = $adresse = "";
$email = $tel = $Diplome = $nDPoleEmploi = $numBadge = $LiensCodecademy = $questionHeros = $questionhakes = $questionExperience = "";
$civiliteErr = $nomErr = $prenomErr = $ddNaissanceErr = $pdNaissanceErr = $nationaliteErr = $codePostalErr = $communeErr = $rueErr = $adresseErr = "";
$emailErr = $telErr = $DiplomeErr = $nDPoleEmploiErr = $numBadgeErr = $LiensCodecademyErr = $questionHerosErr = $questionhakesErr = $questionExperienceErr = "";
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['civilite'])) {
        echo $civilite = test_input($_POST["civilite"]) . '<br>';
    } else {
        echo '<div class="alert alert-warning" role="alert">civilité is required</div>';
    }
    if (!empty($_POST['nom'])) {
        echo $nom = test_input($_POST["nom"]) . '<br>';
        if (!preg_match("/^[a-zA-Z-' ]*$/", $nom)) {
            $nomErr = "Only letters and white space allowed";
        }
    } else {
        echo '<div class="alert alert-warning" role="alert">Nom is required</div>';
    }
    if (!empty($_POST['prenom'])) {
        echo $prenom = test_input($_POST["prenom"]) . '<br>';
        if (!preg_match("/^[a-zA-Z-' ]*$/", $prenom)) {
            $prenomErr = "Only letters and white space allowed";
        }
    } else {
        echo '<div class="alert alert-warning" role="alert">Prenom is required</div>';
    }
    if (!empty($_POST['ddNaissance'])) {
        echo $ddNaissance = test_input($_POST["ddNaissance"]) . '<br>';
    } else {
        echo '<div class="alert alert-warning" role="alert">Date de naissance is required</div>';
    }
    if (!empty($_POST['pdNaissance'])) {
        echo $pdNaissance = test_input($_POST["pdNaissance"]) . '<br>';
    } else {
        echo '<div class="alert alert-warning" role="alert">Pays de naissance is required</div>';
    }
    if (!empty($_POST['nationalite'])) {
        echo $nationalite = test_input($_POST["nationalite"]) . '<br>';
        if (!preg_match("/^[a-zA-Z-' ]*$/", $nationalite)) {
            $nationaliteErr = "Only letters and white space allowed";
        }
    } else {
        echo '<div class="alert alert-warning" role="alert">Nationalité is required</div>';
    }
    if (!empty($_POST['codePostal'])) {
        echo $codePostal = test_input($_POST["codePostal"]) . '<br>';
        if (!preg_match("/^[a-zA-Z-' ]*$/", $codePostal)) {
            $codePostalErr = "Only letters and white space allowed";
        }
    } else {
        echo '<div class="alert alert-warning" role="alert">Code Postal is required</div>';
    }
    if (!empty($_POST['commune'])) {
        echo $commune = test_input($_POST["commune"]) . '<br>';
    } else {
        echo '<div class="alert alert-warning" role="alert">Commune is required</div>';
    }
    if (!empty($_POST['rue'])) {
        echo $rue = test_input($_POST["rue"]) . '<br>';
        if (!preg_match("/^[a-zA-Z-' ]*$/", $rue)) {
            $rueErr = "Only letters and white space allowed";
        }
    } else {
        echo '<div class="alert alert-warning" role="alert">rue is required</div>';
    }
    if (!empty($_POST['adresse'])) {
        echo $adresse = test_input($_POST["adresse"]) . '<br>';
        if (!preg_match("/^[a-zA-Z-' ]*$/", $adresse)) {
            $adresseErr = "Only letters and white space allowed";
        }
    } else {
        echo '<div class="alert alert-warning" role="alert">adresse is required</div>';
    }
    if (!empty($_POST['email'])) {
        echo $email = test_input($_POST["email"]) . '<br>';
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    } else {
        echo '<div class="alert alert-warning" role="alert">Email is required</div>';
    }
    if (!empty($_POST['tel'])) {
        echo $tel = test_input($_POST["tel"]) . '<br>';
        if (!preg_match("/^[a-zA-Z-' ]*$/", $tel)) {
            $telErr = "Only letters and white space allowed";
        }
    } else {
        echo '<div class="alert alert-warning" role="alert">Telephone is required</div>';
    }
    if (!empty($_POST['Diplome'])) {
        echo $Diplome = test_input($_POST["Diplome"]) . '<br>';
    } else {
        echo '<div class="alert alert-warning" role="alert">Diplôme is required</div>';
    }
    if (!empty($_POST['nDPoleEmploi'])) {
        echo $nDPoleEmploi = test_input($_POST["nDPoleEmploi"]) . '<br>';
        if (!preg_match("/^[a-zA-Z-' ]*$/", $nDPoleEmploi)) {
            $nDPoleEmploiErr = "Only letters and white space allowed";
        }
    } else {
        echo '<div class="alert alert-warning" role="alert">Numéro pôle emploi is required</div>';
    }
    if (!empty($_POST['numBadge'])) {
        echo $numBadge = test_input($_POST["numBadge"]) . '<br>';
        if (!preg_match("/^[a-zA-Z-' ]*$/", $numBadge)) {
            $numBadgeErr = "Only letters and white space allowed";
        }
    } else {
        echo '<div class="alert alert-warning" role="alert">Nombre de badge is required</div>';
    }
    if (!empty($_POST['LiensCodecademy'])) {
        echo $LiensCodecademy = test_input($_POST["LiensCodecademy"]) . '<br>';
        if (!preg_match("/^[a-zA-Z-' ]*$/", $LiensCodecademy)) {
            $LiensCodecademyErr = "Only letters and white space allowed";
        }
    } else {
        echo '<div class="alert alert-warning" role="alert">Liens codecademy is required</div>';
    }
    if (!empty($_POST['questionHeros'])) {
        echo $questionHeros = test_input($_POST["questionHeros"]) . '<br>';
        if (!preg_match("/^[a-zA-Z-' ]*$/", $questionHeros)) {
            $questionHerosErr = "Only letters and white space allowed";
        }
    } else {
        echo '<div class="alert alert-warning" role="alert">Reponse is required</div>';
    }
    if (!empty($_POST['questionhakes'])) {
        echo $questionhakes = test_input($_POST["questionhakes"]) . '<br>';
        if (!preg_match("/^[a-zA-Z-' ]*$/", $questionhakes)) {
            $questionhakesErr = "Only letters and white space allowed";
        }
    } else {
        echo '<div class="alert alert-warning" role="alert">Reponse is required</div>';
    }
    if (!empty($_POST['questionExperience'])) {
        echo $questionExperience = test_input($_POST["questionExperience"]) . '<br>';
        if (!preg_match("/^[a-zA-Z-' ]*$/", $questionExperience)) {
            $questionExperienceErr = "Only letters and white space allowed";
        }
    } else {
        echo '<div class="alert alert-warning" role="alert">Reponse is required</div>';
    }
} else {
    header('Location: index.html');
    exit();
}
