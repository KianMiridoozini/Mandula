<?php
/**
 * Template Name: Front Page
 */
get_header(); // Include the header

// Retrieve ACF field group for the front page
$hero_img_1 = get_field('hero_section')['hero_img_1'];
$hero_txt_1 = get_field('hero_section')['hero_txt_1'];
$hero_img_2 = get_field('hero_section')['hero_img_2'];
$hero_txt_2 = get_field('hero_section')['hero_txt_2'];
$hero_img_3 = get_field('hero_section')['hero_img_3'];
$hero_txt_3 = get_field('hero_section')['hero_txt_3'];
?>



<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img class="hero-img" src="<?php echo esc_url($hero_img_1['url'])  ?>" style="width:100%">
    <h1 class="hero-text"><?php echo esc_html($hero_txt_1)  ?></h1>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img class="hero-img" src="<?php echo esc_url($hero_img_2['url'])  ?>" style="width:100%">
    <h1 class="hero-text"><?php echo esc_html($hero_txt_2)  ?></h1>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img class="hero-img" src="<?php echo esc_url($hero_img_3['url'])  ?>" style="width:100%">
    <h1 class="hero-text"><?php echo esc_html($hero_txt_3)  ?></h1>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>


<script>
    let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
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
<?php get_footer(); // Include the footer ?>
