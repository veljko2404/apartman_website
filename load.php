<?php

  require "connect.php";

  $query = "SELECT * FROM `slike`";
  $query_run = mysqli_query($conn, $query);
  $num = mysqli_num_rows($query_run);
  ?>

  <span class="close cursor" onclick="closeModal()">&times;</span>
     <div class="modal-content">

  <?php
  while($rows = mysqli_fetch_array($query_run)){
    $data[] = $rows;
  }
  for($i=0;$i<$num;$i++){
    ?>
  <div class="mySlides">
    <div class="numbertext"><?php echo $data[$i]['id']." / ".$num; ?></div>
    <img src="photos/<?php echo $data[$i]['name']; ?>" style="width:100%">
</div>

<?php } ?>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
<div class="caption-container">
     <p id="caption"></p>
</div>

<?php
for($i=0;$i<$num;$i++){
$s = $i + 1;
?>
<div class="column">
  <img class="demo cursor" src="photos/<?php echo $data[$i]['name']; ?>" style="width:100%" onclick="currentSlide(<?php echo $s; ?>)" alt="Slike apartmana">
</div>

<?php } ?>
