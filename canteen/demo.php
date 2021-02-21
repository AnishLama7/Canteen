
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  position: relative;
  align-content :center;
  margin: auto;
}

.mySlides.fade {
  opacity: 1;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: #e0e0e0;
}

/* Caption text */
.text {
  font-size: 18px;
  padding: 8px 12px;
  position: relative;
  width: 100%;
  text-align: center;
  text-transform: uppercase;
  color: black;
  font-weight: bold;
}

span{
  background-color: orange;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}


@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>

<div class="slideshow-container">
  <h3 class="text-center" style="font-weight: bold;">Recommended For You</h3>

<?php 
      $ids = [];
      $query = "SELECT * FROM food_recommend WHERE user_id = '{$_SESSION['user']['id']}' order by count desc LIMIT 0,5";
      $result = db_query($con ,$query);
    
      if($result && db_num_rows($result) > 0 ){
        while( $menu = db_fetch_assoc($result)){
            $ids[]=$menu['menu_id'];
        }?>
    <?php foreach($ids as $id):?>
      
    <?php
            $sql = "SELECT * FROM menu WHERE id = '{$id}'";
            $result = db_query($con,$sql);
            if($result && db_num_rows($result) > 0 ):?>

    <?php $menu = db_fetch_assoc($result);?>
     <?php if ($menu['total'] > 0) {?>

    <div class="mySlides fade">
      <img src="<?php echo url('images/'.$menu['image']); ?>" style="width:100%">
      <div class="text"><span><?php echo $menu['name']; ?></span></div>
    </div>
    <?php }?>

    <?php endif; ?>

    <?php endforeach?>


    <?php  
      
      }else{
        $sql = "SELECT * FROM menu ORDER BY RAND() LIMIT 0,5";
        $result = db_query($con,$sql);
      }

        if($result && db_num_rows($result) > 0 ): ?>
    <?php while( $menu = db_fetch_assoc($result)): ?>
      <div class="mySlides fade">
      <img src="<?php echo url('images/'.$menu['image']); ?>" style="width:100%">
      <h1 class="text" ><span><?php echo $menu['name']; ?></span></h1>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>




<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<!-- <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div> -->

<script>
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
  var dots = document.getElementsByClassName("dot");
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
}
</script>
