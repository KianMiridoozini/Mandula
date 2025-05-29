<?php
/**
 * Template Name: Contact
 */
get_header();

$fields = get_field_objects(); // Get all ACF fields for the current page
$social_fields = get_field_objects('social_media_options'); // Replace with correct field group key

if ($fields): ?>
    <section class="contact-section">
        <h1><?php echo esc_html($fields['contact_title']['value'] ?? ''); ?></h1>
        <div class="contact-container">
            <div class="contacts">
                <?php foreach ($fields as $field): ?>
                    <?php 
                    // Skip contact_title to avoid duplicate output
                    if (!empty($field['value']) && $field['name'] !== 'contact_title' && $field['name'] !== 'contact_image'): ?>
                        <div class="contact">
                            <label><?php echo esc_html($field['label']); ?>:</label>
                            <?php if ($field['type'] === 'email'): ?>
                                <a href="mailto:<?php echo esc_html($field['value']); ?>">
                                    <?php echo esc_html($field['value']); ?>
                                </a>
                            <?php elseif ($field['type'] === 'url'): ?>
                                <a href="<?php echo esc_url($field['value']); ?>" target="_blank">
                                    <?php echo esc_html($field['value']); ?>
                                </a>
                            <?php elseif ($field['type'] === 'text' || $field['type'] === 'textarea'): ?>
                                <span><?php echo esc_html($field['value']); ?></span>
                            <?php elseif ($field['type'] === 'image' && is_array($field['value'])): ?>
                                <div class="contact-img">
                                    <img src="<?php echo esc_url($field['value']['url']); ?>" alt="<?php echo esc_attr($field['label']); ?>">
                                </div>
                            <?php else: ?>
                                <span><?php echo esc_html($field['value']); ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>

                <!-- Social Media Links -->
                <div class="links contact">
                <label>Social Media:</label>
                <div class="social-media"> 
                    <a class="icon" href="https://www.facebook.com/profile.php?id=100084397537509"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebookIcon.svg" alt=""></a>
                    <a class="icon" href="https://www.instagram.com/mandulatortamuhely/"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagramIcon.svg" alt=""></a>
                    <a class="icon" href="https://www.tiktok.com/@mandulatortamuhely"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/tiktokIcon.svg" alt=""></a>
                </div>
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
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>