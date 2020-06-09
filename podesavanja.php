<?php

  require "connect.php";
  session_start();

  if(isset($_SESSION['sifra'])){
    $sifra = $_SESSION['sifra'];
  }
  if(isset($_POST['sifra'])){
    $_SESSION['sifra'] = $_POST['sifra'];
    $sifra = $_SESSION['sifra'];
  }
    if($sifra == "dino2019"){

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <title>Podesavanja</title>
    <style media="screen">
    table {
      width:100%;
      text-align: center;
    }
    .termini {
      margin:20px auto;
    }
    .zauzeto {
      background-color:#B33A3A;
      color:white;
      opacity: .75;
      border-top:1px solid gray !important;
      border-bottom:none !important;
    }
    .slobodno {
      background-color: #2d9940;
      color:white;
      opacity: .75;
      border-top:none 1px solid gray;
      border-bottom:none !important;
    }
    td,th {
      padding:1px;
    }
    .text-info {
      display:none;
    }
    .text_ter {
      margin-top:10px;
    }
    @media only screen and (max-width:625px) {
      .text-info {
        display:block;
      }
    }
    .form {
      padding:20px 10px;
    }
    .form input {
      margin:2px 10px;
    }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Termini</h1>
      <div class="table-responsive">
      <table class="table-bordered">
        <?php

          $query = "SELECT * FROM `termini`";
          $query_run = mysqli_query($conn, $query);
          $num_r = mysqli_num_rows($query_run);
          while($a = mysqli_fetch_array($query_run)){
            $termini[] = $a;
          }
         ?>
        <tr>
          <th class="text-center">Smena</th>
          <?php for($s=0;$s<$num_r;$s++){ ?>
            <td <?php if($termini[$s]["slobodno"] == 0){ ?>class="zauzeto"<?php } else {?>class="slobodno"<?php } ?>><?php echo str_replace("-","-<br>",$termini[$s]["datum"]); ?></td>
          <?php } ?>
        </tr>
        <tr>
          <th class="text-center">Cene u €</th>
          <?php for($s=0;$s<$num_r;$s++){ ?>
            <td <?php if($termini[$s]["slobodno"] == 0){ ?>class="zauzeto"<?php } else {?>class="slobodno"<?php } ?>>€ <?php echo $termini[$s]['cena']; ?></td>
          <?php } ?>
        </tr>
        <tr>
          <th class="text-center">Slobodno</th>
          <?php for($s=0;$s<$num_r;$s++){ ?>
          <td <?php if($termini[$s]["slobodno"] == 0){ ?>class="zauzeto"<?php } else {?>class="slobodno"<?php } ?>><?php if($termini[$s]["slobodno"]){echo "Da";} else {echo "Ne";}?></td>
          <?php } ?>
        </tr>
        <tr>
          <th class="text-center">Podesi</th>
          <?php for($s=0;$s<$num_r;$s++){ ?>
            <td><button class="btn btn-primary" type="button" onclick="openForm(<?php echo $termini[$s]["id"]; ?>);"><i class="glyphicon glyphicon-arrow-down"></i></button></td>
          <?php } ?>
        </tr>
      </table>
      <div id="form">
      </div>
      <script type="text/javascript">
          function openForm(id){
            var form = document.getElementById("form").innerHTML = "<form class='form' action='change.php?id=" + id +"' method='post'>  <div class='form-group'>  <label>Unesi smenu:</label><input type='text' name='smena' value='' placeholder='xx.xx-xx.xx'></div><div class='form-group'>  <label>Unesi cenu:</label><input type='text' name='cena' value='' placeholder='€'></div><div class='form-group'>  <label>Slobodno: </label> Da<input type='checkbox' name='slobodno' value='da'>Ne<input type='checkbox' name='slobodno' value='ne'><br><input class='btn btn-primary' type='submit' value='Izmeni'></div></form>";
          }
      </script>
    </div>
    </div>
  </body>
</html>
<?php
} else {
  header("Location: index.php");
}

?>
