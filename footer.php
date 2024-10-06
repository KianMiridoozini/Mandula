<footer>
  <div class="footer-section">
    <a href="<?php echo get_site_url(); ?>">
      <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo/Almond-round.svg" alt="Logo">
    </a>
    <div class="sitemap">
      <a href="<?php echo get_site_url(); ?>">Home</a>
      <a href="<?php echo get_site_url(); ?>/about-us">About Us</a>
      <a href="<?php echo get_site_url(); ?>/contact">Contact</a>
      <a href="<?php echo get_site_url(); ?>/shop">Shop</a>
      <a href="<?php echo get_site_url(); ?>/cart">Cart</a>
      <a href="<?php echo get_site_url(); ?>/checkout">Checkout</a>
    </div>
    <div class="footer-links">
      <a href="">Payment and delivery</a>
      <a href="">Terms of service</a>
      <a href="<?php echo get_site_url(); ?>/privacy-policy">Privacy policy</a>
    </div>

    <div class="footer-icons">
      <a class="footer-icon" href="https://www.facebook.com/profile.php?id=100084397537509"><img
          src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebookIcon-almond.svg" alt=""></a>
      <a class="footer-icon" href="https://www.instagram.com/mandulatortamuhely/"><img
          src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagramIcon-almond.svg" alt=""></a>
      <a class="footer-icon" href="https://www.tiktok.com/@mandulatortamuhely"><img
          src="<?php echo get_template_directory_uri(); ?>/assets/icons/tiktokIcon-almond.svg" alt=""></a>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

<style>
  /* Scoped styles for footer only */
  .footer-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 9vw;
    background-color: rgb(var(--black));
  }

  .footer-logo {
    width: 100px;
  }

  .footer-links {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
  }
  .sitemap {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 1rem;
  }
  .footer-links a, .sitemap a {
    color: rgb(var(--white));
    text-decoration: none;
  }
  .footer-links a:hover, .sitemap a:hover {
    color: rgb(var(--almond));
  }

  .footer-icons {
    display: flex;
    gap: 1rem;
  }

  .footer-icon {
    width: 30px;
  }
  @media screen and (max-width: 1180px) and (orientation: portrait),
  screen and (max-width: 1024px) {
    .footer-section {
      flex-direction: column-reverse;
      gap: 5rem;
    }
    .footer-icon{
      width: 50px;
    }
    .sitemap{
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: center;
      gap: 2rem;
    }
    .sitemap a, .footer-links a {
      font-size: 2rem !important;
    }
  }
  @media only screen and (max-width: 480px) {
    .footer-section {
      flex-direction: column-reverse;
      gap: 5rem;
    }
    .sitemap{
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: center;
    }
    .sitemap a, .footer-links a {
      font-size: 1rem !important;
    }
  }
</style>
</html>