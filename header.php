<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body <?php body_class(); ?>>

<header class="header-section">
    <nav class="header-nav">
        <!-- Logo and Hamburger for Mobile -->
        <div class="header-menu-toggle">
            <a href="<?php echo get_site_url(); ?>">
                <img class="header-nav-logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo/Almond.svg" alt="Logo">
            </a>
            <!-- Hamburger Icon -->
            <div class="header-hamburger flex-col" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        
        <!-- Navigation Links -->
        <ul class="header-nav-menu" id="header-nav-menu">
            <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
            <li><a href="<?php echo get_site_url(); ?>/shop">Shop</a></li>
            <li class="header-logo-centered">
                <a href="<?php echo get_site_url(); ?>">
                    <img class="header-nav-logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo/Almond.svg" alt="Logo">
                </a>
            </li>
            <li><a href="<?php echo get_site_url(); ?>/about-us">About Us</a></li>
            <li><a href="<?php echo get_site_url(); ?>/contact">Contact</a></li>
        </ul>
    </nav>
</header>

<?php wp_footer(); ?>

<script>
    function toggleMenu() {
        var navMenu = document.getElementById('header-nav-menu');
        var hamburger = document.querySelector('.header-hamburger');

        // Toggle 'open' class to show or hide the menu
        navMenu.classList.toggle('header-open');
        hamburger.classList.toggle('header-open');
    }

    // Optional: Close menu when clicking outside
    document.addEventListener('click', function(event) {
        var navMenu = document.getElementById('header-nav-menu');
        var hamburger = document.querySelector('.header-hamburger');
        var isClickInside = hamburger.contains(event.target) || navMenu.contains(event.target);

        if (!isClickInside && navMenu.classList.contains('header-open')) {
            navMenu.classList.remove('header-open');
            hamburger.classList.remove('header-open');
        }
    });
</script>

<style>
    /* Scoped styles for header only */
    .header-section {
        position: relative;
        width: 100%;
        z-index: 1000;
    }

    .header-nav {
        height: 4rem;
        background-color: rgba(var(--black), 0.8);
        color: rgba(var(--almond), 1);
        font-size: calc(0.5rem + 1vw);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 20px;
        transition: background-color 0.3s ease;
        
    }

    .header-nav-menu {
        margin: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100%;
        min-width: 80%;
        max-width: 90%px;
        overflow: hidden; /* Ensure the list doesn't overflow */
        list-style: none;
    }

    .header-nav-menu li {
        margin: 0 15px;
        position: relative;
    }

    .header-nav-logo {
        height: 3rem !important;
        vertical-align: middle;
    }

    .header-nav a {
        font-family: var(--font-primary);
        font-weight: var(--font-weight-light);
        color: rgba(var(--almond), 1);
        transition: color 0.3s;
        text-decoration: none;
    }

    .header-nav a:hover {
        color: rgba(var(--white), 0.8);
    }

    /* Hamburger Menu for Mobile */
    .header-hamburger {
        display: none;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        height: 30px;
        width: 30px;
        z-index: 2000;
        position: relative;
    }

    .header-hamburger span {
        display: block;
        width: 100%;
        height: 4px;
        background-color: rgba(var(--almond), 1);
        margin-bottom: 5px;
        transition: transform 0.3s, opacity 0.3s;
    }

    .header-hamburger span:last-child {
        margin-bottom: 0;
    }

    /* Change the appearance of the hamburger when open */
    .header-hamburger.header-open span:nth-child(1) {
        transform: translateY(9px) rotate(45deg);
    }

    .header-hamburger.header-open span:nth-child(2) {
        opacity: 0;
    }

    .header-hamburger.header-open span:nth-child(3) {
        transform: translateY(-9px) rotate(-45deg);
    }

    /* Responsive styles */
    @media screen and (max-width: 1180px) and (orientation: portrait){
        
        a{
            font-size: calc(1rem + 1vw)  !important;
        }
    }

    @media (max-width: 800px) {
        .header-nav {
            justify-content: space-between;
            padding: 0 20px;
        }

        .header-hamburger {
            display: flex;
        }

        /* Hide the centered logo in mobile view */
        .header-logo-centered {
            display: none;
        }

        .header-nav-menu {
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            background-color: rgba(var(--black), 0.9);
            width: 100%;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            overflow: hidden;
            max-height: 0;
            transition: max-height 0.5s ease;
            z-index: 1000;
        }

        .header-open {
            max-height: 100vh;
            height: auto;
        }

        .header-nav-menu li {
            width: 100%;
            margin: 0;
            padding: 10px 20px;
            box-sizing: border-box;
        }

        .header-nav-menu a {
            display: block;
            width: 100%;
            color: rgba(var(--almond), 1);
        }

        .header-menu-toggle {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .header-menu-toggle img {
            margin-right: 10px;
        }
    }

    @media (min-width: 801px) {
        /* Hide the mobile logo in desktop view */
        .header-menu-toggle img {
            display: none;
        }
    }

</style>

</body>
</html>
