<?php
/**
 * Template Name: privacy-policy
 */
get_header();

$privacy_policy = get_field('privacy_policy');

?>
<section class="privacy-policy-container">
      <p> <?php echo esc_html($privacy_policy) ?> </p> 
</section>
<?php get_footer(); // Include the footer ?>

<style>
    .privacy-policy-container {
        border: 1px solid rgb(var(--black));
        margin: 20px 5vw;
        padding: 20px;
        border-radius: 10px;
        background-color: rgb(var(--white));

    }
    p {
        font-size: 1.2rem;
        line-height: 1.5;
        white-space: pre-line;
    }
    @media screen and (max-width: 1180px) and (orientation: portrait),
  screen and (max-width: 1024px) {
    .privacy-policy-container {
      margin: 20px 2vw;
    }
    p{
        font-size: 0.8rem;
    }
  }
</style>