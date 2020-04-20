<html>
    <head>
        <title>Gestion des items</title>
        <meta charset="utf-8"> 
        <link rel="stylesheet" type="text/css" href="ItAdmin.css"> 
    </head>
    <body>
        <div id="section">
            <h2>Gestion des Items de la plateforme</h2>
            <h4>Vous retrouverez ici l'ensemble des items mis en vente sur la plateforme</h4>
        </div>
        <ul>
            <li><a href="HomeAdmin.html">Retour</a></li>
            <li><a href="AjoutItAdmin.php">Ajouter</a></li>
        </ul>
        <HR>
        <table>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Photo</th>
                <th>Description</th>
                <th>Vidéo</th>
                <th>Catégorie</th>
                <th>Prix</th>
                <th>Gestion</th>
            </tr>        
        <?php
        //association database
        $database="EbayEce";
        //connexion à la base donnée
        $db_handle = mysqli_connect('localhost', 'root', '' );  
        $db_found = mysqli_select_db($db_handle, $database); 
        //Si la base est trouvé on va y chercher nos info
        if ($db_found){
            //item est la table qui nous interesse, elle contient 3 entités
            $sql= "SELECT * FROM item";
            $result=mysqli_query($db_handle, $sql);
            while($data=mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                    echo "<td>-", $data["ID"], "</td>";
                    echo "<td>-", $data["Nom"], "</td>";
                    echo "<td>-", $data["Photo"], "</td>";
                    echo "<td>-", $data["Description"], "</td>";
                    echo "<td>-", $data["Video"], "</td>";
                    echo "<td>-", $data["Categorie"], "</td>";
                    echo "<td>", $data["Prix"], "</td>";
                    echo "<td>"?> <a href="#" class="button"e>Supprimer</a><?php "</td>";
                echo "</tr>";
            }
                
        }//end if 

        //si le BDD n'existe pas  
        else {      
            echo "Database not found";  
        }//end else 
        
        //fermer la connection 
        mysqli_close($db_handle); 
        ?> 
        </table>
    <br>
    <HR>
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
    </body>
</html>

        