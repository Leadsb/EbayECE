<?php

    $db_handle = mysqli_connect('localhost', 'root', '', 'EbayEce' );  
        
    if ($db_handle)
    {
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
      