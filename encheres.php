<!--Page 14 : "Page de vente d'achats aux enchères-->
<!--encheres.php-->
 
<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8"/>
       <link rel="stylesheet" href="encheres.css"/>
       <title>Enchères</title>
   </head>
 
   <!--En-tête-->
   <body>
      
       <div class="fond">
           <br><br>
           <h1 class="logo">Enchères</h1>
           <h2>Ici vous pouvez enchérir les objets qui vous intéressent</h2>
           <br><br>
 
       </div>
 
      
       <!--Barre de navigation-->
       <div class="barre">
           <ul>
               <li><a href="achat.html">Retour</a></li>
           </ul>
 
       </div>
      
       <br>
       <HR>
 
       <!--Liste objets avec photos, descriptions, période pour enchérir-->   
        <?php
            //association database
            $database="EbayEce";
            //connexion à la base donnée
            $db_handle = mysqli_connect('localhost', 'root', '' );  
            $db_found = mysqli_select_db($db_handle, $database); 
            //Si la base est trouvé on va y chercher nos info
            if ($db_found){
                //item est la table qui nous interesse, elle contient 3 entités
                $sql= "SELECT * FROM item WHERE Vente='1'";
                $result=mysqli_query($db_handle, $sql);
                $check=0;
                while($data=mysqli_fetch_assoc($result))
                {
                    $check=$check+1;
                    ?>
                    <div class="encadrement">
                        <p class="nom"><?php echo $data["Nom"];?></p>
                        <table>
                            <tr>
                                <?php
                                $image=$data["Photo"];
                                ?>
                                <td><?php echo "<img id='item' src='$image'>"; ?></td>
                                <td><?php echo $data["Description"];?></td>
                                <td><?php echo "Au prix de: ", $data["Prix"], "€";?></td>
                            </tr>
                        </table>
                        <!--Bouton enchérir-->
                        <div class="button">
                            <ul>
                                <li><a href="#">Enchérir</a></li>
                            </ul>
                        </div>
                    </div>
                <?php
                }
            }
            else{
                echo "erreur";
            }
            if ($check==0){
                echo "Il n'y a pas de produit dans cette catégorie à ce jour";
            }
            //fermer la connection 
            mysqli_close($db_handle); 
            ?>
        <br><br>
    </body>
 
 <!--Footer avec liens vers autres sites-->
 
    <footer>
        <HR>
        <br><br>
        <div class="container">
            <div class="foot">
                <a href="mailto:jean-pierre.segado@ece.fr"><img src="mail.png" alt="mail" height="30" width="30"></a>
                <a href="https://www.facebook.com/ECE.Paris"><img src="facebook.png" alt="facebook" height="30" width="30"></a>
                <a href="https://ece.campusonline.me/fr-fr/Pages/home.aspx"><img src="ece.jpg" alt="ece" height="30" width="30"></a>
            </div>
            <div class="foot">
                <p>© 2020 Copyright | Droit d'auteur: Projet piscine</p> 
            </div>
        </div>
   </footer>
</html>
