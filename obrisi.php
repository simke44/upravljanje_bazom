<?php


if(isset($_GET['id'])){
    $id = $_GET['id'];
    require 'konekcija.php';
    $query = "DELETE FROM korisnici WHERE  id = {$id}";
  if(mysqli_query($conn, $query)){
       header ("location: remove.php");
  } 
   else{
       echo "greska";
   }
 
}