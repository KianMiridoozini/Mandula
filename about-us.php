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
$paragraph_1 = get_field('about_us_paragraph_1');
$paragraph_2 = get_field('about_us_paragraph_2');
$paragraph_3 = get_field('about_us_paragraph_3');
$paragraph_4 = get_field('about_us_paragraph_4');
?>

<section>
    <div class="about-us-hero">
            <img src="<?php echo esc_url($about_us_img['url']) ?>" alt="About Us Hero Image" style="width:100%">
            <div class="about-us-hero-text">
                <h1><?php echo esc_html($title) ?></h1>
                <h2><?php echo esc_html($headline) ?></h2>
            </div>
    </div>
</section>
<section>
    <div class="about-us-content">
        <h1><?php echo esc_html($title_2) ?></h1>
        <p><?php echo esc_html($paragraph_1) ?></p>
        <p><?php echo esc_html($paragraph_2) ?></p>
        <p><?php echo esc_html($paragraph_3) ?></p>
        <p><?php echo esc_html($paragraph_4) ?></p>
    </div>
</section>





<?php

get_footer();

?>