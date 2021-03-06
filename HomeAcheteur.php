<!--Page 24-->
<!DOCTYPE html> 
<html>
    <head>
        <title>Compte Acheteur</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="HomeAcheteur.css"> 
    </head>

    <body>
        <div id="fond">
            <div id="titre">
                <h1>ECE EBAY</h1>
            </div>
            <div id="st">
                <p> La vente aux encheres de la communauté ECE Paris </p>
            </div>
            </div>
            <!-- Barre de navigation -->
            <ul>
                <li><a href="Categorie.html">Catégories</a></li>
                <li><a href="Achat.html">Achat</a></li>
                <li><a>Bienvenue Acheteur</a></li>
                <li><a href="panier.html"><img src="panier.png" alt="panier" height="20" width="20"></a></li>
                <li><a href="home.html">Deconnection</a></li>
            </ul>
            <HR>
        </div>
        
        <div id="section">
            <h3>Mon porte Feuille</h3>
            <h4>Voici les ressources financiéres dont vous disposez actuellement pour effectuer vos achats sur la plateforme</h4>
    
            <h3> Veuillez rappeler votre adresse mail de connexion </h3>
            <form method="post">
                <label>Adresse:</label><input type="text" name="mail">
                <input name = "button1" type="submit" value="Envoyer">
            </form>
        <HR>
        <div class=container>
        <?php

        if (isset($_POST["button1"])) 
        {

            if (isset($_POST['mail']))
            {
                $mail=$_POST["mail"];
            }

            //association database
            $database="EbayEce";
            //connexion à la base donnée
            $db_handle = mysqli_connect('localhost', 'root', '' );  
            $db_found = mysqli_select_db($db_handle, $database); 
            //Si la base est trouvé on va y chercher nos info
            if ($db_found){
                //item est la table qui nous interesse, elle contient 3 entités
                $sql= "SELECT PF FROM acheteur WHERE login='$mail' " ;
                $result=mysqli_query($db_handle, $sql);
                while($data=mysqli_fetch_assoc($result))
                {
                    ?>
                    <div class="box">
                         <?php echo "Vous disposez de ", $data["PF"], "euro sur cette plateforme";?>
                    </div>
                    <?php
                }
                    
            }//end if 

            //si le BDD n'existe pas  
            else {      
                echo "Database not found";  
            }//end else 
            
            //fermer la connection 
            mysqli_close($db_handle); 
        }
        ?> 
            
            <div class="box">
            <p> Souhaitez vous ajouter des fonds? </p>
            <form method="post">
                <label>Montant:</label><input type="text" name="montant">
                <input name = "button2" type="submit" value="Envoyer">
            </form>

            <?php

            if (isset($_POST["button2"])) 
            {       
                if (isset($_POST['montant']))
                    {
                    
                    $montant=$_POST["montant"];
                    }
                //association database
                $database="EbayEce";
                //connexion à la base donnée
                $db_handle = mysqli_connect('localhost', 'root', '' );  
                $db_found = mysqli_select_db($db_handle, $database); 
                //Si la base est trouvé on va y chercher nos info
                if ($db_found){
                    //item est la table qui nous interesse, elle contient 3 entités
                    $sql= "SELECT PF FROM acheteur WHERE login='$mail' " ;
                    $result=mysqli_query($db_handle, $sql);
                    while($data=mysqli_fetch_assoc($result))
                    {
                        $data['PF']=$data['PF']+$montant;
                    
                    }
                    
                }//end if 
                //si le BDD n'existe pas  
                else {      
                    echo "Database not found";  
                }//end else 
         //fermer la connection 
            mysqli_close($db_handle); 
            }
            ?> 
            </div>
        </div>
        <br><br>
        <div id="section">
            <p>><h3>Votre compte</h3></p>
            <h4>Voici les informations saisies lors de votre inscriptions, vous pouvez les editer si besoin</h4>
        </div>
        <HR>
        <div id="sous-sec">
            <h3>Vos informations de connexion</h3>
        </div>
        <p>Login:&emsp;&emsp;<input type="text" id="Login"></p>
        <p>Mot de Passe:&emsp;&emsp;<input type="text" id="mdp"></p>
        <div id="sous-sec">
            <h3>Vos Informations de Livraison</h3>
        </div>
        <p>Nom:&emsp;&emsp;<input type="text" id="nom"></p>
        <p>Prénom:&emsp;&emsp;<input type="text" id="prenom"></p>
        <p>Adresse:&emsp;&emsp;<input type="text" id="adresse"></p>
        <p>Ville:&emsp;&emsp;<input type="text" id="ville"></p>
        <p>Code Postal:&emsp;&emsp;<input type="text" id="postal"></p>
        <p>Pays:&emsp;&emsp;<input type="text" id="pays"></p>
        <p>Numero de téléphone:&emsp;&emsp;<input type="text" id="num"></p>
        <div id="sous-sec">
            <h3>Vos Informations de Payement</h3>
        </div>
        <p><a href="Infpayement.html" class="button">Consulter mes informations</a></p>
        </body>
        <!--Pour le foot-->
        <footer>

        
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
        
        </footer>
</html>