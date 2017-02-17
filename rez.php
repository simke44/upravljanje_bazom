<?php
require 'konekcija.php';


if(isset($_GET['pretraga'])){
    if (!empty($_GET['pretraga'])){
        $pretraga = $_GET ['pretraga'];
        $query = "SELECT * FROM korisnici WHERE ime LIKE '{$pretraga}' OR  prezime LIKE '{$pretraga}'";
        $rezultat =mysqli_query ($conn, $query);
        if(mysqli_num_rows($rezultat )>0){
            while ($row =mysqli_fetch_assoc ($rezultat))
            {
                ?>
                <div >
                    <p>ime:<?php echo $row ['ime'];?> </p>
                    <p>prezime:<?php echo $row ['prezime'];?> </p>
                    <p>email: <?php echo $row ['email'];?> </p>
                    <p>kontakt: <?php echo $row ['kontakt'];?> </p>
                    <p>adresa: <?php echo $row ['adresa'];?></p>
                </div>       
                <?php
            }
        }else {
            echo "nema rezultata";
        }
    }else{
        echo "pretraga je prazna";
    }
}
?>