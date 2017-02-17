<!DOCTYPE html>

    <head>
        <title></title>
        <meta charset="UTF-8">
   <link href="style.css" rel="stylesheet">
    </head>
    <body>
    <fieldset>

        <form action="#" method="GET">
            <input type="text"  name="pretraga" placeholder="pretraga">
            <input type="submit" value="pretraga">
        </form>

         <a href="add.php">  <button type="dodaj">dodaj</button> </a>
        <a href="index.php" ><button type="obrisi" >pocetna</button></a>
    </fieldset>  
<?php

 include 'konekcija.php';

 $query = "SELECT * FROM korisnici";
        $rezultat =mysqli_query ($conn, $query);
        if(mysqli_num_rows($rezultat )>0){
            while ($row =mysqli_fetch_assoc ($rezultat))
            {
                ?>
                <div  >
                    <a href="obrisi.php?id=<?php echo $row['id'];?>"><button type="obrisi">obrisi</button></a>
                    <p>ime:<?php echo $row ['ime'];?> </p>
                    <p>prezime:<?php echo $row ['prezime'];?> </p>
                    <p>email: <?php echo $row ['email'];?> </p>
                    <p>kontakt: <?php echo $row ['kontakt'];?> </p>
                    <p>adresa: <?php echo $row ['adresa'];?></p>
                </div>       
                <?php
            }
        }

?>
    </body>
</html>
