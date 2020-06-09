<?php

  require "connect.php";
  session_start();
  $id = $_GET['id'];

  if(isset($_POST["smena"])){
    if(!empty($_POST["smena"])){
      $smena = $_POST["smena"];
      $query = "UPDATE `termini` SET `datum` = '$smena' WHERE `termini`.`id` = $id";
      if(!mysqli_query($conn, $query)){
        $greska = 1;
      }
    }
  }
  if(isset($_POST["cena"])){
    if(!empty($_POST["cena"])){
      $cena = $_POST["cena"];
      $query = "UPDATE `termini` SET `cena` = '$cena' WHERE `termini`.`id` = $id";
      if(!mysqli_query($conn, $query)){
        $greska = 1;
      }
    }
  }
  if(isset($_POST["slobodno"])){
    if(!empty($_POST["slobodno"])){
      $slob = $_POST["slobodno"];
      if($slob == "da"){
        $slob = 1;
      } elseif($slob == "ne") {
        $slob = 0;
      }
      $query = "UPDATE `termini` SET `slobodno` = '$slob' WHERE `termini`.`id` = $id";
      if(!mysqli_query($conn, $query)){
        $greska = 1;
      }
    }
  }
  if(isset($greska)){
    $_SESSION['greska'] = 1;
  }
  header("Location: podesavanja.php");

 ?>
