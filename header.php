<?php
/**
 * @package Odette Hayas
 */
?>

<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed&family=Dancing+Script&family=Montserrat&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <?php wp_head(); ?>

<body <?php body_class();?>>

    <nav class="nav">
        <div class="nav__navbar">
            <a href="/" class="nav__logo">
                <img class="nav__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                    alt="Odette Hayas DJ">

            </a>
            <button class="nav__btn">
                <div class="nav__btn-box">
                    <div class="nav__btn-bars"></div>
                </div>
            </button>
        </div>
        <div class="nav__list">
            <?php wp_nav_menu(
                            array(
                                'theme_location' => 'odette_main_menu',
                                'menu_class' => 'nav__menu',
                                'container' => 'false',
                                'menu_id' =>  'menu',
                                'add_li_class'  => 'nav__menu-item'
                            )
                        );
                    ?>

        </div>
    </nav>