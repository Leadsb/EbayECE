<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8"/>
       <link rel="stylesheet" href="AjoutVend.css"/>
       <title>Formulaire d'ajout</title>
   </head>
 
   <!--En-tête-->
   <body>
      
       <div class="fond">
           <br><br>
           <h1 class="logo">Formulaire d'ajout de Vendeurs</h1>
           <h2>Afin d'ajouter des vendeurs à votre base de données'</h2>
           <br><br>
 
       </div>
 
      
       <!--Barre de navigation-->
       <ul>
           <li><a href="VendAdmin.php">Retour</a></li>
       </ul>
       <br>
       <HR>
 
 
       <!--Formulaire à remplir-->
       <div class="formulaire">
           <form method="post">
               <div>
                   <p><strong>Informations de connexion</strong></p> <br>
                   <label>Nom :</label> <input type="text" name="nom">
               </div>
               <div>
                   <label>Prénom :</label> <input type="text" name="prenom">
               </div>
               <div>
                   <label>E-mail :</label> <input type="email" name="mail">
               </div>
               <div>
                   <label>Mot de Passe:</label> <input type="text" name="mdp">
               </div>
               <br>
               <div class="button1">
                    <ul>
                        <li><input type="submit" value="Ajouter"></li>
                    </ul>
                </div>
           </form>
       </div>
 
       <br>
       
       <?php
        $nom=ISSET($_POST["nom"]);
        $prenom=ISSET($_POST["prenom"]);
        $mail=ISSET($_POST["mail"]);
        $mdp=ISSET($_POST["mdp"]);

        $db_handle = mysqli_connect('localhost', 'root', '', 'EbayEce' );  
        
        if ($db_handle)
        {
            $sql="INSERT INTO vendeur (mail, mdp, nom, prenom) VALUES ('$mail','$mdp','$nom','$prenom')";
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

        unset($nom, $prenom,$mail, $mdp);
		?>
 
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
