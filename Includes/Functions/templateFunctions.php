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
                                    <li><a href="">Beratung?</a></li>
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