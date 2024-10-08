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

$category_1_title = get_field('categories')['category_1_title'];
$category_1_img = get_field('categories')['category_1_img'];
$category_2_title = get_field('categories')['category_2_title'];
$category_2_img = get_field('categories')['category_2_img'];
$category_3_title = get_field('categories')['category_3_title'];
$category_3_img = get_field('categories')['category_3_img'];
$category_4_title = get_field('categories')['category_4_title'];
$category_4_img = get_field('categories')['category_4_img'];
?>



<!-- Slideshow container -->
<div class="hero">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img class="hero-img" src="<?php echo esc_url($hero_img_1['url']); ?>" alt="Hero Image 1">
    <h1 class="hero-title"><?php echo esc_html($hero_txt_1); ?></h1>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img class="hero-img" src="<?php echo esc_url($hero_img_2['url']); ?>" alt="Hero Image 2">
    <h1 class="hero-title"><?php echo esc_html($hero_txt_2); ?></h1>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img class="hero-img" src="<?php echo esc_url($hero_img_3['url']); ?>" alt="Hero Image 3">
    <h1 class="hero-title"><?php echo esc_html($hero_txt_3); ?></h1>
  </div>

  <!-- front-page-next and front-page-previous buttons -->
  <a class="front-page-prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="front-page-next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<!-- Hero section end -->
 <!-- Categories section -->
<section>
  <div class="categories-head">
    <h2 class="categories-title">Categories</h2>
    <a href="<?php echo get_site_url(); ?>/shop">View All</a>
  </div>
  <div class="categories">
    <a href="<?php echo get_site_url(); ?>/shop/?product-categories=<?php echo sanitize_title($category_1_title); ?>">
    <div class="category-1">
      <div class="overlay">
        <h4 class="text"> <?php echo esc_html($category_1_title) ?></h4>
      </div>
      <img src="<?php echo esc_url($category_1_img['url']) ?>" alt="">
    </div>
    </a>
    <a href="<?php echo get_site_url(); ?>/shop/?product-categories=<?php echo sanitize_title($category_2_title) ?>">
    <div class="category-2">
      <div class="overlay">
        <h4 class="text"> <?php echo esc_html($category_2_title) ?></h4>
      </div>
      <img src="<?php echo esc_url($category_2_img['url']) ?>" alt="">
    </div>
    </a>
    <a href="<?php echo get_site_url(); ?>/shop/?product-categories=<?php echo sanitize_title($category_3_title) ?>">
    <div class="category-3">
      <div class="overlay">
        <h4 class="text"> <?php echo esc_html($category_3_title) ?></h4>
      </div>
      <img src="<?php echo esc_url($category_3_img['url']) ?>" alt="">
    </div>
    </a>
    <a href="<?php echo get_site_url(); ?>/shop/?product-categories=<?php echo sanitize_title($category_4_title) ?>">
    <div class="category-4">
      <div class="overlay">
        <h4 class="text"> <?php echo esc_html($category_4_title) ?></h4>
      </div>
      <img src="<?php echo esc_url($category_4_img['url']) ?>" alt="">
    </div>
    </a>
</section>
<!-- Categories section end -->
 <!-- Instagram feed -->
<section>
  <div class="instagram-feed">
    <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
  </div>
</section>
<!-- Instagram feed end -->


<script>
  let slideIndex = 1;
  showSlides(slideIndex);

  // front-page-next/front-page-previous controls
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

    if (n > slides.length) { slideIndex = 1; }
    if (n < 1) { slideIndex = slides.length; }

    // Hide all slides
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    // Remove the active class from all dots
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }

    // Display the current slide and highlight the corresponding dot
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }

</script>
<?php get_footer(); // Include the footer ?>