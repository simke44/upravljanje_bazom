<!DOCTYPE html>
<html>
    <head>
        <title>podaci</title>
        <meta charset="UTF-8">
        
    </head>
    <body>

    <fieldset><legend>unesite podatke</legend>
        <form action="#" method="POST">
            <label>ime:</label>
            <input type="text" name="ime" >
            <br><br>
            <label>prezime:</label>
            <input type="text" name="prezime" >
            <br><br>
            <label>email:</label>
            <input type="text" name="email" >
            <br><br>
            <label>kontakt:</label>
            <input type="text" name="kontakt">
            <br><br>
            <label>adresa:</label>
            <input type="text" name="adresa">
            <br><br>
           
            <input type="submit" name="dodaj" value="dodaj"><br>
            
        </form>
            <br>
         <a href="index.php"> <button >glavna</button> </a>
      </fieldset>
    
<?php

    if(isset($_POST['dodaj'])){
        if(isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['email']) && isset($_POST['kontakt']) && isset($_POST['adresa'])){
            if(!empty($_POST['ime']) && !empty($_POST['prezime']) && !empty($_POST['email']) && !empty($_POST['kontakt']) && !empty($_POST['adresa'])){
                $ime= $_POST ['ime'];
                $prezime= $_POST ['prezime'];
                 $email= $_POST ['email'];
                 $kontakt=  $_POST ['kontakt'];
                 $adresa=  $_POST ['adresa'];
                 require 'konekcija.php';

                 $query = "INSERT INTO korisnici (ime, prezime, email, kontakt, adresa) VALUES ( '{$ime}','{$prezime}', '{$email}','{$kontakt}','{$adresa}')";
               if ( mysqli_query($conn, $query)===true){
                    echo "kontakt uspesno dodat";
               }
            }else{
                echo "popuni polja";
            }

        }else {
            echo "prazno polje";
        }
    }
    
?>
</body>
</html>