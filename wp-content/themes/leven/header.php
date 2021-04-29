<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */

$move_effect = ( function_exists('fw_get_db_settings_option') ) ? fw_get_db_settings_option('move_effect') :  'no'; 
$full_width = ( function_exists('fw_get_db_settings_option') ) ? fw_get_db_settings_option('full_width_mode') :  'no';
$page_transition = ( function_exists('fw_get_db_settings_option') ) ? fw_get_db_settings_option('transition_effect') :  'transition-flip-in-right';
$scroll_totop = ( function_exists('fw_get_db_settings_option') ) ? fw_get_db_settings_option('scroll_totop') :  'no';
$theme_style = ( function_exists('fw_get_db_settings_option') ) ? fw_get_db_settings_option('theme_style_picker') :  'light';
if (is_customize_preview()) {
    $move_effect = "no";
}
if ($move_effect == "yes") {
    remove_theme_support( 'custom-background' );
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="profile" href="//gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php 
if ($move_effect == "yes") { ?>
<div class="lm-animated-bg"></div>
    <?php
}
?>

<!-- Loading animation -->
<div class="preloader">
  <div class="preloader-animation">
    <div class="preloader-spinner">
    </div>
  </div>
</div>
<!-- /Loading animation -->

<!-- Scroll To Top Button -->
<?php 
if ($scroll_totop == "yes") { ?>
<div class="lmpixels-scroll-to-top"><i class="lnr lnr-chevron-up"></i></div>
<?php
}
?>
<!-- /Scroll To Top Button -->

<div class="page-scroll">
    <div id="page_container" class="page-container<?php if ( $full_width == "yes" ) { ?> full-width-container<?php } ?><?php if ( $move_effect == "yes" ) { ?> bg-move-effect<?php } ?> theme-style-<?php echo esc_attr($theme_style) ?>" data-animation="<?php echo esc_attr($page_transition); ?>">

        <!-- Header -->
        <header id="site_header" class="header">
            <div class="header-content clearfix">
                <?php
                $logo_img = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('photo') : '';
                if( !empty( $logo_img ) ) :
                    $logo_img_alt = get_post_meta($logo_img['attachment_id'], '_wp_attachment_image_alt', true);
                    if (empty($logo_img_alt)) {
                        $logo_img_alt = esc_attr__('image', 'leven');
                    }
                ?>
                <div class="header-image">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        
																														<svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 282.32 63.92"><defs><style>.cls-1{fill:#000003;}</style></defs><title>mrpixel2</title><path class="cls-1" d="M86.94,21.86h9.81v3.63h2.92v2.4h4.79v-2.4h2.93V21.86h6.89V52.27h-4.93v6h-6.9V51h-1.84v3.63H94.74v3.64H82V27.89h4.93Zm2,2.46V49.81H97.7V42.54h2.87v3.63h3V42.54h2.93V38.91h2.86v10.9h3V24.32h-3V28h-2.91v3.63h-2.91v3.64h-2.92V31.58H97.7V28H94.78V24.32Z" transform="translate(-8.78 -8.54)"/><path class="cls-1" d="M118.17,22h21.47v3.63h2.91V52.43h-4.8v6h-9.81v-6h-1.85v6H113.36V28.05h4.81Zm2,2.46V50h8.79V42.7h5.83V50h5.83V42.7h-2.91V39.07h2.91v-11h-2.91V24.48Zm8.79,7.32h5.83V39c0,.07,0,.11-.09.11h-5.74Z" transform="translate(-8.78 -8.54)"/><path class="cls-1" d="M146.44,40h9.8V52.27h-4.79v6h-9.82V46.07h4.81Zm2,2.45v7.33h5.88V42.6q0-.12-.09-.12Z" transform="translate(-8.78 -8.54)"/><path class="cls-1" d="M167.78,21.86h21.47v3.63h2.91V41.36h-2.91V45h-2v2.41h-2.91v4.86h-8.74v6H162.85V27.89h4.93Zm2,2.46V49.81h8.79V42.54h8.75V38.91h2.91V28h-2.91V24.32Zm8.79,7.32h5.79v7.21h-5.79Z" transform="translate(-8.78 -8.54)"/><path class="cls-1" d="M196.18,21.92H208.9v30.4H204v6H191.24V28h4.94Zm2,2.45V49.86h8.79V24.37Z" transform="translate(-8.78 -8.54)"/><path class="cls-1" d="M212.79,22h9.81V25.6h4.76V22h9.81V34.2h-2.91v5.94h2.91V52.38h-4.8v6h-9.81V54.78H217.8v3.64H208V46.17h2.91V40.24H208V28h4.8Zm2,2.46v7.32h2.93v3.64h2.91V39h-2.91v3.68h-2.93v7.28h5.88V46.29h2.91V42.64h2.88v3.65h2.91v3.63h5.87V42.64h-2.91V39h-2.91V35.38h2.91V31.74h2.91V24.42h-5.87v3.63H226.5a.12.12,0,0,0-.08.12V31.7h-2.88V28.05h-2.91V24.42Z" transform="translate(-8.78 -8.54)"/><path class="cls-1" d="M241.19,22h24.43V34.2h-4.94v5.94h4.94V52.38h-4.94v6H236.25V28h4.94Zm2,2.46v25.5h20.49V42.6h-11.7V39h5.87V35.33h-5.87V31.74h11.7V24.42Z" transform="translate(-8.78 -8.54)"/><path class="cls-1" d="M269.63,21.92h12.73V40.08h8.74V52.32h-4.93v6H264.7V28h4.93Zm2,2.45V49.86h17.54V42.54h-8.75V24.37Z" transform="translate(-8.78 -8.54)"/><path class="cls-1" d="M19.28,8.54H40.73v6.39h10.4V8.54H72.59V30H66.23v10.4h6.36V61.88H62.09V72.46H40.65V66.09H30.24v6.37H8.78V51h6.36V40.59H8.78V19.14h10.5Zm4.3,4.32V25.69H30v6.39h6.37v6.26H30v6.47H23.58V57.56H36.43V51.19h6.36V44.81h6.29v6.38h6.36v6.37H68.28V44.81H61.91V38.34H55.55V32.08h6.36V25.69h6.37V12.86H55.44v6.36H49.26a.2.2,0,0,0-.18.21v6.18H42.79V19.22H36.43V12.86Z" transform="translate(-8.78 -8.54)"/></svg>
                    </a>
                </div>
                <?php endif ?>

                <?php
                $text_logo = ( function_exists('fw_get_db_settings_option') ) ? fw_get_db_settings_option('logo') :  get_bloginfo( 'name' );
                $text_logo_symbol = ( function_exists('fw_get_db_settings_option') ) ? fw_get_db_settings_option('logo_symbol') :  substr(get_bloginfo( 'name' ), 0, 1);

                if( !empty( $text_logo ) || !empty( $text_logo_symbol ) ) :
                ?>
                <!-- Text Logo -->
                <div class="text-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php if( !empty( $text_logo_symbol ) && empty( $logo_img ) ) : ?>
                            <div class="logo-symbol"><?php echo esc_html(substr($text_logo_symbol, 0, 1)); ?></div>
                        <?php endif; ?>
                         <?php if( !empty( $text_logo ) ) : ?>
                            <div class="logo-text"><?php echo wp_kses_post($text_logo); ?></div>
                        <?php endif; ?>
                    </a>
                </div>
                <!-- /Text Logo -->
                <?php endif ?>


                <!-- Navigation -->
                <div class="site-nav mobile-menu-hide">
                    <?php
                        if(has_nav_menu('classic-menu')){ wp_nav_menu( array( 'menu_class' => 'leven-classic-menu site-main-menu', 'theme_location' => 'classic-menu', 'container' => '', 'depth' => 2) ); }
                    ?>
                </div>

                <a class="menu-toggle mobile-visible">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </header>
        <!-- /Header -->
