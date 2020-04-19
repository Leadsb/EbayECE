<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8"/>
       <link rel="stylesheet" href="AjoutItAdmin.css"/>
       <title>Formulaire d'ajout</title>
   </head>
 
   <!--En-tête-->
   <body>
      
       <div class="fond">
           <br><br>
           <h1 class="logo">Formulaire d'ajout d'Item'</h1>
           <h2>Afin d'ajouter des Items à la vente</h2>
           <br><br>
 
       </div>
 
      
       <!--Barre de navigation-->
       <ul>
           <li><a href="ItAdmin.php">Retour</a></li>
       </ul>
       <br>
       <HR>
 
 
       <!--Formulaire à remplir-->
       <div class="formulaire">
           <form method="post">
               <div>
                   <p><strong>Informations de connexion</strong></p> <br>
                   <label>Nom :</label> <input type="text" name="Nom">
               </div>
               <div>
                   <label>Photo :</label> <input type="file" name="Photo" accept="image/png, image/jpeg">
               </div>
               <div>
                   <label>Description :</label><input type="text" name="Description">
               </div>
               <div>
                   <label>Vidéo:</label> <input type="text" name="Video">
               </div>
               <div>
                   <label>Catégorie:</label><select name="Categorie">  
                        <option value="Tresor">Trésor ou Ferrailles</option>
                        <option value="Musee">Bon pour le Musée</option>
                        <option value="Vip">Accessoire VIP</option>
                    </select>
               </div>
               <div>
                   <label>Vente:</label><select name="Vente">  
                        <option value="1">Enchére</option>
                        <option value="2">Meilleure Offre</option>
                        <option value="3">Achat Immédiat</option>
                        <option value="4">Meilleure Offre & Achat Immédiat</option>
                        <option value="5">Enchére & Achat Immédiat</option>
                    </select>
               </div>
               <div>
                   <label>Prix :</label> <input type="text" name="Prix">
               </div>
               <br>
               <div class="button1">
                    <ul>
                        <li><input type="submit" name="button1" value="Ajouter"></li>
                    </ul>
                </div>
           </form>
       </div>
 
       <br>
       
       <?php
        $nom=$_POST["Nom"];
        $photo=$_POST["Photo"];
        $description=$_POST["Description"];
        $video=$_POST["Video"];
        $categorie=$_POST["Categorie"];
        $vente=$_POST["Vente"];
        $prix=$_POST["Prix"];

        var_dump($nom, $description, $categorie, $prix);

        $db_handle = mysqli_connect('localhost', 'root', '', 'EbayEce' );  
        /* si bouton actionné*/
        if (isset($_POST["button1"])) 
        { 
        
            if ($db_handle)
            {
                /* Variable globale */
                

                $sql="INSERT INTO item ( Nom, Photo, Description, Video, Categorie, Vente, Prix) VALUES ('$nom','$photo','$description','$video', '$categorie','$vente','$prix')";
                $resultat=mysqli_query($db_handle,$sql);
                if ($resultat == FALSE)
                {
                    echo "echec<br/>";
                }
                else
                {
                    echo "item enregistré";
                }
                mysqli_close($db_handle);
                
            }
            else
            {
                echo "erreur acces base";
            }
        }
        unset($nom, $photo, $description, $video, $categorie, $vente, $prix);
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
