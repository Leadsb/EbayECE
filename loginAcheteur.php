<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8"/>
       <link rel="stylesheet" href="loginAcheteur.css"/>
       <title>Espace de connexion acheteur</title>
   </head>
 
   <!--En-tête-->
   <body>
      
       <div class="fond">
           <br><br>
           <h1 class="logo">Espace de connexion</h1>
           <h2>Identification vers votre espace</h2>
           <br><br>
       <!--Barre de navigation-->
       <ul>
           <li><a href="home.html">Retour</a></li>
       </ul>
       <br>
        </div>
       <HR>

    <?php
        $login=$_POST["login"];
        $mot_de_passe=$_POST["mot_de_passe"];

        $database="EbayEce";

        $db_handle = mysqli_connect('localhost', 'root', '');  
        $db_found = mysqli_select_db($db_handle, $database); 
        
        if ($db_found) 
            { 
                $sql = "SELECT * FROM acheteur"; 
                if ($login != "") 
                {     
                    $sql .= " WHERE login LIKE '%$login%'";     
                    if ($mot_de_passe != "") 
                    {      
                        $sql .= " AND mot_de_passe LIKE '%$mot_de_passe%'"; 
                    }    
                }    
                $result = mysqli_query($db_handle, $sql);    
                //regarder s'il y a des résultats    
                if (mysqli_num_rows($result) == 0) 
                {   
                    //pas de résultat  
                    ?>  
                    <td> Pas de profil à cette adresse. <br> Veuillez essayer de vous connecter à nouveau </td>
                    
                    <!--Bouton valider-->
                    <div class="button1">
                        <ul>
                            <li><a href="loginAcheteur.html">Nouvelle tentative</a></li>
                        </ul>
                    </div>
                    <?php   
                } 
                else {
                    ?>
                    <td>La connexion à votre compte est en cours </td>
                    <!--Bouton valider-->
                    <div class="button1">
                        <ul>
                            <li><a href="HomeAcheteur.php">Accéder à mon compte</a></li>
                        </ul>
                    </div>
                    <?php
                }
            }
        else 
            {    
                echo "Database not found. <br>";   
            }  
        //fermer la connexion  
        mysqli_close($db_handle); 
    ?>
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