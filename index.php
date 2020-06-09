<?php

  include 'connect.php';

 ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/global.css" />
  <link rel="icon" href="photos/logo_new.png">
  <link rel="apple-touch-icon" href="photos/logo.PNG">
  <meta name="apple-mobile-web-app-title" content="Apartman Dino">
  <meta name="description" content="Apartman sadrži francuski ležaj i ležaj na razvlacenje, kuhinju, sa kompletnim posuđem, šporet sa rernom, frižider sa zamrzivačem, veš mašinu, sto sa 4 stolice, TV sa srpskim kanalima, WI-FI, klimu... Za vise informacija posetite sajt." />
  <meta name="viewport" content="width=device-width" />
  <meta name="viewport" content="initial-scale=1.0">
  <meta name="keywords" content="Nea kalikratija apartman, grcka apartman, nea kalikratija studio, grcka iznajmljivanje apartmana" />
  <meta charset="UTF-8" />

  <script src="slide.js"></script>

  <title>Iznajmite apartman u Grckoj, u mestu Nea Kalikratija.</title>
</head>
<body>

    <nav class="navbar navbar-default navbar-fixed-top" id="nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="login.php"> <img src="photos/logo_new.png" alt=""> </a>
          <p class="text_name">DINO</p>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#opis">OPIS</a></li>
            <li><a href="#slike">SLIKE</a></li>
            <li><a href="#lokacija">LOKACIJA</a></li>
            <li><a href="#termini">TERMINI</a></li>
            <li><a href="#kontakt">KONTAKT</a></li>
          </ul>
        </div>
      </div>
    </nav>

  <div class="container opis" id="opis">
    <h1>Opis apartmana</h1>
    <p>Apartman sadrži francuski ležaj i ležaj na razvlacenje, kuhinju, sa kompletnim posuđem, šporet sa rernom, frižider sa zamrzivačem, veš mašinu, sto sa 4 stolice, TV sa srpskim kanalima, WI-FI, klimu (korišćenje je ukljuceno u cenu), veliku terasu sa plasticnim stolom i stolicama, novo kupatilo sa tuš kadom. Parking je obezbeđen u sklopu zgrade. Nalazi se na 2 spratu i udaljen je od plaže oko 250m. U blizini je market Masutis. Pesčana plaža je dužine oko 800m, u središnjem delu mesta, blizu  gradskog trga. Nea kalikratija je živo i urbano mesto koje ima i Lidl. Od Soluna je udaljena oko 30km.</p>
  </div>
  <div class="container slike" id="slike">
    <h1 class="text_slike">Slike</h1>
    <?php

      $query = "SELECT * FROM `slike`";
      $query_run = mysqli_query($conn, $query);
      while($rows = mysqli_fetch_array($query_run)){
        $data[] = $rows;
      }

     ?>
    <div class="row">
      <?php for($i=0;$i<4;$i++){
        $s = $i + 1;
       ?>
  <div class="column">
    <img src="photos/<?php echo $data[$i]["name"]; ?>" style="width:100%;" onclick="openModal();currentSlide(<?php echo $s; ?>)" class="hover-shadow cursor">
  </div>
  <?php } ?>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
   <div class="modal-content">

  <div class="mySlides">
  <div class="numbertext">1 / 11</div>
  <img src="photos/1.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">2 / 11</div>
  <img src="photos/2.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">3 / 11</div>
  <img src="photos/3.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">4 / 11</div>
  <img src="photos/4.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">5 / 11</div>
  <img src="photos/6.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">6 / 11</div>
  <img src="photos/8.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">7 / 11</div>
  <img src="photos/9.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">8 / 11</div>
  <img src="photos/16.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">9 / 11</div>
  <img src="photos/10.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">10 / 11</div>
  <img src="photos/11.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">11 / 11</div>
  <img src="photos/12.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
<div class="caption-container">
   <p id="caption"></p>
</div>

<div class="column pics">
<img class="demo cursor" src="photos/1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Slike apartmana">
</div>

<div class="column pics">
<img class="demo cursor" src="photos/2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Slike apartmana">
</div>

<div class="column pics">
<img class="demo cursor" src="photos/3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Slike apartmana">
</div>

<div class="column pics">
<img class="demo cursor" src="photos/4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Slike apartmana">
</div>

<div class="column pics" pics>
<img class="demo cursor" src="photos/6.jpg" style="width:100%" onclick="currentSlide(5)" alt="Slike apartmana">
</div>

<div class="column pics">
<img class="demo cursor" src="photos/8.jpg" style="width:100%" onclick="currentSlide(6)" alt="Slike apartmana">
</div>

<div class="column pics">
<img class="demo cursor" src="photos/9.jpg" style="width:100%" onclick="currentSlide(7)" alt="Slike apartmana">
</div>

<div class="column pics">
<img class="demo cursor" src="photos/16.jpg" style="width:100%" onclick="currentSlide(8)" alt="Slike apartmana">
</div>

<div class="column pics">
<img class="demo cursor" src="photos/10.jpg" style="width:100%" onclick="currentSlide(9)" alt="Slike apartmana">
</div>

<div class="column pics">
<img class="demo cursor" src="photos/11.jpg" style="width:100%" onclick="currentSlide(10)" alt="Slike apartmana">
</div>

<div class="column pics">
<img class="demo cursor" src="photos/12.jpg" style="width:100%" onclick="currentSlide(11)" alt="Slike apartmana">
</div>

</div>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
  document.getElementById("nav").style.display = "none";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
  document.getElementById("nav").style.display = "block";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
  </div>
</div>
  <div class="container lokacija" id="lokacija">
    <h1>Lokacija</h1>
    <div id="guglmapa">
    </div>
    <script type="text/javascript">
      function myMap(){
        var myCenter = new google.maps.LatLng(40.3100126, 23.0710400);
        var mapCanvas = document.getElementById("guglmapa");
        var mapOptions = {
          center: myCenter,
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.HYBRID
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({
          position:myCenter,
          animation: google.maps.Animation.BOUNCE});
          marker.setMap(map);
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWzngxcS4_reS6OGgrTl_N8p7XMnYSa1Y&callback=myMap"></script>

  </div>
  <div class="container termini" id="termini">
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
    </table>
  </div>
  <p class="text-info">Prevuci na desno da vidis celu tabelu</p>
  <p class="text_ter"><strong>*</strong>Cene se odnose na najam apartmana za <strong>10 nocenja</strong>, odnosno <strong>11 dana</strong>.</p>
  </div>
  <div class="container-fluid kontakt"  id="kontakt">
    <h1>Kontakt</h1>
    <h3>Telefon: <a href="tel:+381656744847">+381 65 6744 847</a></h3>
    <p class="text-center">Developed by Veljko Petkovic</p>
  </div>

</body>
</html>
