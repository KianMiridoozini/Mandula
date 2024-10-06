<?php
/**
 * Template Name: Contact
 */
get_header();

$contact_title = get_field('contact_title');
$phone = get_field('phone');
$email = get_field('email');
$address = get_field('address');
$contact_image = get_field('contact_image');
?>

<section class="contact-section">
    <h1><?php echo esc_html($contact_title) ?></h1>
    <div class="contact-container">
        <div class="contacts">
            <div class="phone contact">
                <label>Phone:</label>
                <a href="tel: <?php echo esc_html($phone) ?>"><?php echo esc_html($phone) ?></a>
            </div>
            <div class="email contact">
                <label>Email:</label>
                <a href="mailto:<?php echo esc_html($email) ?>"><?php echo esc_html($email) ?></a>
            </div>
            <div class="links contact">
                <label>Social Media:</label>
                <div class="social-media"> 
                    <a class="icon" href="https://www.facebook.com/profile.php?id=100084397537509"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebookIcon.svg" alt=""></a>
                    <a class="icon" href="https://www.instagram.com/mandulatortamuhely/"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagramIcon.svg" alt=""></a>
                    <a class="icon" href="https://www.tiktok.com/@mandulatortamuhely"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/tiktokIcon.svg" alt=""></a>
                </div>
            </div>
            <div class="address contact">
                <label>Address:</label>
                <a href="https://maps.app.goo.gl/FZn7SDT6iDQ66zBN9"><?php echo esc_html($address) ?></a>
            </div>
        </div>
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d337.07816943077!2d19.2634472!3d47.4777297!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741c1e141bb5c1d%3A0x52cb1869b9c64c1e!2sMandula%20Tortam%C5%B1hely!5e0!3m2!1sen!2sdk!4v1727874690395!5m2!1sen!2sdk"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <!-- <div class="contact-img">
            <img src="<?php echo esc_url($contact_image['url']) ?>" alt="">
        </div> -->
    </div>
</section>
<section class="google-maps">
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d337.0781691682647!2d19.26344716051829!3d47.47772974091866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741c1e141bb5c1d%3A0x52cb1869b9c64c1e!2sMandula%20Tortam%C5%B1hely!5e0!3m2!1sen!2sdk!4v1727792655497!5m2!1sen!2sdk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
</section>

<?php get_footer(); // Include the footer ?>
