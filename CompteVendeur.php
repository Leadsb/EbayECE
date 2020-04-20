<!--Page 26-->
<!DOCTYPE html> 
<html>
    <head>
        <title>Votre compte</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CompteVendeur.css"> 
    </head>

    <body>
        <!--En tête-->
        <div id="section">
            <h2>Gestion de votre compte</h2>
            <h4> Voici votre espace vous pouvez y editer vos données </h4>
            <HR>
        </div>
        
        <h3> Veuillez rappeler votre adresse mail de connexion </h3>
            <form method="post">
                <label>Adresse:</label><input type="text" name="mail">
                <input name = "button1" type="submit" value="Envoyer">
            </form>

        <?php

        if (isset($_POST['mail']))
        {
            $mail=$_POST["mail"];
            echo $mail;
        }
        //association database
        $database="EbayEce";
        //connexion à la base donnée
        $db_handle = mysqli_connect('localhost', 'root', '' );  
        $db_found = mysqli_select_db($db_handle, $database); 
        //Si la base est trouvé on va y chercher nos info
        if ($db_found){
            echo "okok";
            //item est la table qui nous interesse, elle contient qql entités
            $sql= "SELECT * FROM vendeur WHERE mail='$mail' ";
            $result=mysqli_query($db_handle, $sql);
            while($data=mysqli_fetch_assoc($result))
            {
                echo "ok";

                /*Corps*/
                ?>
                <div id="sous-sec">
                    <h3>Informations de connexion</h3>
                </div>
                <div id="texte"><?php
                echo "Mail:", $mail, "</br>";
                echo "Mot de passe:", $data['mdp'], "</br>";
                ?>
                </div>
                <div id="sous-sec">
                    <h3>Informations générales:</h3>
                </div>
                <div id="texte"><?php
                echo "Nom:", $data["nom"], "</br>";
                echo "Prénom:", $data["prenom"], "</br>";
                ?>
                </div>
                <p>Telecharger votre photo de profil:<a href="#" class="button">Télécharger</a></p>
                <p>Télécharger votre photo de fond:<a href="#" class="button">Télécharger</a></p>
                <?php
            }
                
        }//end if 

        //si le BDD n'existe pas  
        else {      
            echo "Database not found";  
        }//end else 
        
        //fermer la connection 
        mysqli_close($db_handle); 
        ?> 
        <div id="sous-sec">
            <h3>Informations de versement</h3>
        </div>
        <p>RIB: &emsp;&emsp;<input type="text" id="RIB"></p>
        <br>
        <p><a href="HomeVendeur.html" class="button">Revenir au compte</a></p>

<!--Footer-->
        <HR> 
            <div class="container">
                <div class="box">
                    <a href="mailto:jean-pierre.segado@ece.fr"><img src="mail.png" alt="mail" height="30" width="30"></a>
                    <a href="https://www.facebook.com/ECE.Paris"><img src="facebook.png" alt="facebook" height="30" width="30"></a>
                    <a href="https://ece.campusonline.me/fr-fr/Pages/home.aspx"><img src="ece.jpg" alt="ece" height="30" width="30"></a>
                </div>
                <div class="box">
                    <p>© 2020 Copyright | Droit d'auteur: Projet piscine</p>
                </div>
            </div>
    </body>
</html>