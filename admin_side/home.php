<?php
	session_start();
	

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/slider.css">
<style>
  body
  {
    overflow-y: hidden;
  }
</style>
</head>
<body>

    <div class="slideshow-container">
  
<h1 class="admin">Welocom <?=?></h1>
    <div class="mySlides fade">
        <img class="image" src="image/slide_img2.jpg" style="width:100%">
        <div class="text">Insert Data
            <a href="insert.php"><input type="submit" class="button1" value="Insert Data"></a>
        </div>
        
    </div>

    <div class="mySlides fade">
        <img class="image" src="image/slide_img3.jpg" style="width:100%">
        <div class="text">Edit Data
          <a href="edit_data.php"><input type="submit" class="button1" value="Edit Data"></a>
        </div>
    </div>

    <div class="mySlides fade">
        <img src="image/slide_img4.jpg" style="width:100%">
        <div class="text">Delete Data
          <a href="delete.php"><input type="submit" class="button1" value="Delete Data"></a>
        </div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    </div>

    

<script>
    let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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

</body>
</html> 
