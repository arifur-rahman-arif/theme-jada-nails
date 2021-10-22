<?php
// Display wordpress post
function displayPosts() {
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            load_template(JADA_NAILS_PATH . 'Includes/Templates/template-post.php', false, [
                'title'     => get_the_title(),
                'permalink' => get_the_permalink(),
                'imgURL'    => get_the_post_thumbnail_url()
            ]);
        }
    }
}

function displayHeaderMenu() {
    wp_nav_menu([
        'theme_location' => 'headerMenu',
        'menu_class'     => 'overlay_menu',
        'container'      => '',
        'wp_page_menu'   => false,
        'items_wrap'     => '<ul id="%1$s" class="%2$s">
                            <li class="mobile_version">
                                <ul class="links">
                                    <li><a href="">Anmelden</a></li>
                                    <li><a href="">
                                            <span class="icon_wrapper">

                                                <span class="call_icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.632" height="14.635"
                                                        viewBox="0 0 14.632 14.635">
                                                        <path id="Pfad_124" data-name="Pfad 124"
                                                            d="M173.521,657.434c.039-.209.071-.419.117-.627a1.526,1.526,0,0,1,.7-1q.647-.4,1.307-.788a.628.628,0,0,1,.887.2q1.014,1.51,2.018,3.027a.627.627,0,0,1-.14.889c-.348.281-.706.55-1.058.826a.66.66,0,0,0-.2.948,11.587,11.587,0,0,0,2.243,2.865,12.4,12.4,0,0,0,2.015,1.7c.272.174.555.332.84.484a.614.614,0,0,0,.8-.173c.273-.342.54-.69.808-1.036a.67.67,0,0,1,1.045-.175l2.873,1.915a.661.661,0,0,1,.231,1.011c-.217.363-.445.72-.651,1.09a1.736,1.736,0,0,1-1.36.9c-.121.017-.242.039-.363.059h-.772a.711.711,0,0,0-.08-.024c-.312-.057-.63-.093-.937-.172a9.737,9.737,0,0,1-3.087-1.5,23.159,23.159,0,0,1-3.993-3.593,16.086,16.086,0,0,1-2.339-3.245,7.765,7.765,0,0,1-.744-1.92c-.066-.295-.111-.595-.166-.892Z"
                                                            transform="translate(-173.521 -654.914)" fill="#fff" />
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="btn_text">Beratung?</span>
                                        </a>
                                    </li>
                                    <div class="mailbox"><i class="fas fa-envelope"></i></div>
                                </ul>
                                <ul class="second_list">
                                    <li>
                                        <a href=""><i class="fas fa-search"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fas fa-user-circle"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                    </li>
                                </ul>
                            </li>
                        %3$s</ul>'
    ]);
}

// Display footer menu
function displayFooterMenu() {
    wp_nav_menu([
        'theme_location' => 'footerMenu',
        'menu_class'     => 'footer_menu',
        'container'      => '',
        'wp_page_menu'   => false
    ]);
}