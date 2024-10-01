<?php
/**
 * Template Name: About Us
 */
get_header();

// $hero_img_1 = get_field('hero_section')['hero_img_1'];
$about_us_img = get_field('about_us_img');
$title = get_field('about_us_title');
$headline = get_field('about_us_headline');
$title_2 = get_field('about_us_title_2');
$about_us_img_2 = get_field('about_us_img_2');
$paragraph_1 = get_field('about_us_paragraph_1');
$paragraph_2 = get_field('about_us_paragraph_2');
$about_us_img_3 = get_field('about_us_img_3');
$paragraph_3 = get_field('about_us_paragraph_3');
$paragraph_4 = get_field('about_us_paragraph_4');
?>

<section>
    <div class="hero">
        <img class="hero-img" src="<?php echo esc_url($about_us_img['url']) ?>" alt="About Us Hero Image"
            style="width:100%">
        <div class="hero-text">
            <h1 class="hero-title"><?php echo esc_html($title) ?></h1>
            <h2 class="hero-headline"><?php echo esc_html($headline) ?></h2>
        </div>
    </div>
</section>
<section>
    <div class="about-us-content">
        <h1><?php echo esc_html($title_2) ?></h1>
        <div class="about-us-part-1">
            <img class="about-us-img-2" src="<?php echo esc_url($about_us_img_2['url']) ?>" alt="About Us Image 3">
            <div class="about-us-part-1-text">
                <p><?php echo esc_html($paragraph_1) ?></p>
                <p><?php echo esc_html($paragraph_2) ?></p>
            </div>
        </div>
        <div class="about-us-part-2">
            <div class="about-us-part-2-text">
                <p><?php echo esc_html($paragraph_3) ?></p>
                <p><?php echo esc_html($paragraph_4) ?></p>
            </div>
            <img class="about-us-img-3" src="<?php echo esc_url($about_us_img_3['url']) ?>" alt="About Us Image 3">
        </div>
    </div>
</section>





<?php

get_footer();

?>