<!DOCTYPE html>  
<html>
    <head>  
        <title>Meilleure Offre</title>  
        <meta charset="utf-8">
        <link href="meilleureOffre.css" rel="stylesheet" type="text/css"/>
    </head> 
    <body>
        <!--En-tête de la page web-->
        <div id="fond">
            <div id="titre">
                <h1>Meilleure Offre</h1>
            </div>
            <div id="st">
                <p>Ici vous pouvez acheter vos objets directement</p>
            </div>
            <ul>
                <li><a href="achat.html"><img src="home2.png" width="100" height="50"></a></li>
            </ul>
        </div>
        <HR>
            <!--Présentation du premier item-->

        <?php
        //association database
        $database="EbayEce";
        //connexion à la base donnée
        $db_handle = mysqli_connect('localhost', 'root', '' );  
        $db_found = mysqli_select_db($db_handle, $database); 
        //Si la base est trouvé on va y chercher nos info
        if ($db_found){
            //item est la table qui nous interesse, elle contient 3 entités
            $sql= "SELECT * FROM item WHERE Vente='3'" ;
            $result=mysqli_query($db_handle, $sql);
            $check=0;
            while($data=mysqli_fetch_assoc($result))
            {
                $check=$check+1;
                ?>
                <div id="corp">
                    <p class="nom"><?php echo $data["Nom"];?> <a href="objet1_meilleureOffre.html" target="objet1_meilleureOffre.html" class="button">Faire une offre</a>
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

        <HR>

        <footer>
            
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
    </body>
</html>