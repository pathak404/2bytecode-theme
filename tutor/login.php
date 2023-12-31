<?php

/**
 * Display single login
 *
 * @since v.1.0.0
 * @author themeum
 * @url https://themeum.com
 *
 * @package TutorLMS/Templates
 * @version 1.4.3
 */

if ( ! defined( 'ABSPATH' ) )
	exit;


if(!tutor_utils()->get_option('enable_tutor_native_login', null, true, true)) {
    // Refer to login oage
    header('Location: '.wp_login_url($_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']));
    exit;
}
    
tutor_utils()->tutor_custom_header();
$login_url = tutor_utils()->get_option('enable_tutor_native_login', null, true, true) ? '' : wp_login_url(tutor()->current_url);
?>

<div class="login-page-container">
<div class="login-page-wrapper">
<div class="sec-1">
    <div class="sec-container">
    <h3>Grab Your</h3>
    <img src="<?php echo get_template_directory_uri() . '/images/auth-banner.jpeg' ?>">
    <h3>Free Course</h3>
    </div>
</div>

<?php do_action('tutor/template/login/before/wrap'); ?>
<div <?php tutor_post_class('tutor-page-wrap'); ?>>
    <div class="tutor-template-segment tutor-login-wrap">
        <div class="tutor-login-form-wrapper">
            <div class="tutor-fs-5 tutor-color-black tutor-mb-32">
                <?php // esc_html_e( 'Hi, Welcome back!', 'tutor' ); ?>
                <p class="lead pb-0 mb-0">LOGIN To</p>
                <h2>2ByteCode</h2>
            </div>
            <?php
                // load form template.
                // $login_form = trailingslashit( tutor()->path ) . 'templates/login-form.php';
                // tutor_load_template_from_custom_path(
                //     $login_form,
                //     false
                // );

                tutor_load_template( 'login-form' );

            ?>
            <?php do_action("tutor_after_login_form"); ?>
        </div>
    </div>
</div>

                </div>
                </div>
<?php 
    do_action('tutor/template/login/after/wrap');
    //tutor_load_template_from_custom_path(tutor()->path . '/views/modal/login.php');
    tutor_utils()->tutor_custom_footer();
?>
