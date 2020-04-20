<!--Page 22 : Formulaire d'Inscription Acheteur-->
<!--inscriptionAcheteur.html-->
 
<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8"/>
       <link rel="stylesheet" href="inscriptionAcheteur.css"/>
       <title>Formulaire d'inscription</title>
   </head>
 
   <!--En-tête-->
   <body>
      
       <div class="fond">
           <br><br>
           <h1 class="logo">Formulaire d'inscription</h1>
           <h2>Afin de créer votre compte client, veuillez remplir les champs suivants</h2>
           <br><br>
 
       </div>
 
      
       <!--Barre de navigation-->
       <ul>
           <li><a href="loginAcheteur.html">Retour</a></li>
       </ul>
       <br>
       <HR>
 
 
       <!--Formulaire à remplir-->
       <div class="formulaire">
           <form action="" method="post">
               <div>
                   <p><strong>Informations de connexion</strong></p> <br>
                   <label>Mail :</label>
                   <input type="text" name="login">
               </div>
               <div>
                   <label>Mot de passe :</label>
                   <input type="text" name="mot_de_passe">
               </div>
               <br>
               <div>
 
 
                   <p><strong>Informations client</strong></p><br>
                   <label>Nom :</label>
                   <input type="text" name="a_nom">
               </div>
               <div>
                   <label>Prénom :</label>
                   <input type="text" name="a_prenom">
               </div>
               <div>
                   <label>Adresse :</label>
                   <input type="text" name="adresse">
               </div>
               <div>
                   <label>Ville :</label>
                   <input type="text"  name="ville">
               </div>
               <div>
                   <label>Code Postal :</label>
                   <input type="text"  name="cp">
               </div>
               <div>
                   <label>Pays :</label>
                   <input type="text" name="pays">
               </div>
               <div>
                   <label>Numéro de téléphone :</label>
                   <input type="text"  name="num">
               </div>
 
                <!--Informations de versement-->
               <div>
                   <p><strong>Informations de versement</strong></p><br>
                   <label>Type de carte :</label>
                   <input type="text"  name="tcarte">
               </div>
               <div>
                   <label>Numéro de la carte :</label>
                   <input type="text" name="numcarte">
               </div>
               <div>
                   <label>Nom sur la carte :</label>
                   <input type="name"  name="nomcarte">
               </div>
               <div>
                   <label>Date d'expiration :</label>
                   <input type="text" name="datecarte">
               </div>
               <div>
                   <label>Code de sécurité :</label>
                   <input type="text"  name="codecarte">
               </div>
               <div class="button1">
                    <ul>
                        <li><input type="submit" value="Ajouter"></li>
                    </ul>
                </div>
               <br>
           </form>

           <?php
        $login=$_POST["login"];
        $mot_de_passe=$_POST["mot_de_passe"];
        $a_nom=$_POST["a_nom"];
        $a_prenom=$_POST["a_prenom"];
        $adresse=$_POST["adresse"];
        $ville=$_POST["ville"];
        $cp=$_POST["cp"];
        $pays=$_POST["pays"];
        $num=$_POST["num"];
        $tcarte=$_POST["tcarte"];
        $numcarte=$_POST["numcarte"];
        $nomcarte=$_POST["nomcarte"];
        $datecarte=$_POST["datecarte"];
        $codecarte=$_POST["codecarte"];


        var_dump($login, $mot_de_passe, $a_nom, $a_prenom, $adresse, $ville, $cp, $pays, $num, $tcarte, $numcarte, $nomcarte, $datecarte, $codecarte);


        $db_handle = mysqli_connect('localhost', 'root', '', 'EbayEce' );  
        
        if ($db_handle)
        {
            $sql="INSERT INTO acheteur (login, mot_de_passe, a_nom, a_prenom, adresse, ville, cp, pays, num, tcarte, numcarte, nomcarte, datecarte, codecarte) VALUES ('$login', '$mot_de_passe', '$a_nom', '$a_prenom', '$adresse', '$ville', '$cp', '$pays', '$num', '$tcarte', '$numcarte', '$nomcarte', '$datecarte', '$codecarte')";
            $resultat=mysqli_query($db_handle,$sql);
            if ($resultat <> FALSE)
            {
                echo "vendeur ajouté <br/>";
            }
            mysqli_close($db_handle);
            
        }
        else
        {
            echo "erreur acces base";
        }

		?>
       </div>
 
       <br>
      
       <!--Bouton valider-->
       <div class="button1">
           <ul>
               <li><a href="HomeAcheteur.html">Se connecter</a></li>
           </ul>
       </div>
 
 
       <!--Footer avec liens vers autres sites-->
 
<footer>
   <HR>
       <br><br>
   <div class="container">
       <div class="foot">
       <a href="mailto:jean-pierre.segado@ece.fr">
           <img src="mail.png" alt="mail" height="30" width="30"></a>
       <a href="https://www.facebook.com/ECE.Paris">
           <img src="facebook.png" alt="facebook" height="30" width="30"></a>
       <a href="https://ece.campusonline.me/fr-fr/Pages/home.aspx">
           <img src="ece.jpg" alt="ece" height="30" width="30"></a>
       </div>
       <div class="foot">
           <p>© 2020 Copyright | Droit d'auteur: Projet piscine</p>
          
       </div>
   </div>
 
   </footer>
 
</html>
