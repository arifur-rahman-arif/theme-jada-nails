<?php

/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * @since VMH Hub 1.0.0
 */

?>

<?php get_header('header.php')?>

<!-- Hero section  -->
<div class="hero_section">
    <img src="<?php echo get_theme_mod('bannerBackground', JADA_NAILS_URL . 'Public/Assets/Bilder/Header.png') ?>"
        alt="banner_header">
    <div class="content_wrapper">
        <div class="inner_wrapper">
            <!-- <h1 class="hero_text">Ihr Fachhandel für nageldesign</h1> -->
            <h1 class="hero_text">
                <?php echo esc_html(get_theme_mod('bannerHeader', 'Ihr Fachhandel für nageldesign')) ?></h1>
            <p class="description">
                <?php echo esc_html(get_theme_mod('bannerDescription', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy')) ?>
            </p>
            <a class="hero_btn" href="<?php echo get_theme_mod('bannerBtnURL', '#') ?>">direkt zum Shop</a>

            <svg class="scroller" id="Komponente_2_2" data-name="Komponente 2 – 2" xmlns="http://www.w3.org/2000/svg"
                width="35" height="49" viewBox="0 0 35 49">
                <g id="Gruppe_10" data-name="Gruppe 10" transform="translate(424.082 -496.869)">

                    <path id="Pfad_19" data-name="Pfad 19"
                        d="M-406.9,537.838a2.759,2.759,0,0,1-.932-.708q-3.136-3.16-6.278-6.315a1.294,1.294,0,0,1-.076-1.888,1.283,1.283,0,0,1,1.888.049q1.65,1.646,3.288,3.3l1.145,1.153v-.446q0-13.357,0-26.714a1.263,1.263,0,0,1,.689-1.212,1.222,1.222,0,0,1,1.336.084,1.3,1.3,0,0,1,.552,1.163q-.008,9.58,0,19.159v7.9a.746.746,0,0,0,.305-.244c1.377-1.381,2.747-2.769,4.128-4.146a1.288,1.288,0,0,1,2.214.529,1.293,1.293,0,0,1-.4,1.313q-1.942,1.945-3.877,3.9c-.8.805-1.606,1.607-2.4,2.416a2.757,2.757,0,0,1-.933.707Z"
                        transform="translate(0 0)" fill="#8f9083" />
                </g>
                <g id="Rechteck_13" data-name="Rechteck 13" fill="none" stroke="#8f9083" stroke-width="1">
                    <rect width="35" height="49" rx="17.5" stroke="none" />
                    <rect x="0.5" y="0.5" width="34" height="48" rx="17" fill="none" />
                </g>
            </svg>

        </div>
    </div>
</div>
<!-- End of hero section -->



<!-- Section 2 -->
<div class="section_2 mt-5">
    <h1>Das ist JAda Nails</h1>
    <p>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
        eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
        takimata
    </p>
</div>
<!-- End of section 2 -->

<!-- Post box container -->
<div class="post_box">
    <h1>Kategorien</h1>
    <img class="post_bg_waves wave_1" src="<?php echo JADA_NAILS_URL . 'Public/Assets/wave_1.svg' ?>" alt="" />
    <img class="post_bg_waves wave_2" src="<?php echo JADA_NAILS_URL . 'Public/Assets/wave_2.svg' ?>" alt="" />
    <img class="post_bg_waves wave_3" src="<?php echo JADA_NAILS_URL . 'Public/Assets/wave_3.svg' ?>" alt="" />

    <div class="web_box_container">
        <?php displayPosts()?>
    </div>
</div>
<!-- End of post box container -->

<!-- Start color section -->
<div class="color_section">
    <h1>Neuste Farben</h1>
    <div class="color_box_container">
        <!-- Start color box -->
        <div class="color_box_wrapper">
            <div class="color_box" style="background-color: #f295ae"></div>
            <div class="color_name">Pink Peony</div>
        </div>
        <!-- End color box -->

        <!-- Start color box -->
        <div class="color_box_wrapper">
            <div class="color_box" style="background-color: #efa045"></div>
            <div class="color_name">Orange</div>
        </div>
        <!-- End color box -->

        <!-- Start color box -->
        <div class="color_box_wrapper">
            <div class="color_box" style="background-color: #8e2f24"></div>
            <div class="color_name">Mint</div>
        </div>
        <!-- End color box -->

        <!-- Start color box -->
        <div class="color_box_wrapper">
            <div class="color_box" style="background-color: #f295ae"></div>
            <div class="color_name">Red Wine</div>
        </div>
        <!-- End color box -->

        <!-- Start color box -->
        <div class="color_box_wrapper">
            <div class="color_box" style="background-color: #ffffff"></div>
            <div class="color_name">Marshmellow</div>
        </div>
        <!-- End color box -->

        <!-- Start color box -->
        <div class="color_box_wrapper">
            <div class="color_box" style="background-color: #a7ccd9"></div>
            <div class="color_name">Sky</div>
        </div>
        <!-- End color box -->

        <!-- Start color box -->
        <div class="color_box_wrapper">
            <div class="color_box" style="background-color: #607aaf"></div>
            <div class="color_name">Royayl Blue</div>
        </div>
        <!-- End color box -->

        <!-- Start color box -->
        <div class="color_box_wrapper">
            <div class="color_box" style="background-color: #9b8f82"></div>
            <div class="color_name">Earth</div>
        </div>
        <!-- End color box -->

        <!-- Start color box -->
        <div class="color_box_wrapper">
            <div class="color_box" style="background-color: #fbd026"></div>
            <div class="color_name">Bright Sun</div>
        </div>
        <!-- End color box -->

        <!-- Start color box -->
        <div class="color_box_wrapper">
            <div class="color_box" style="background-color: #cfcfcf"></div>
            <div class="color_name">cloudy</div>
        </div>
        <!-- End color box -->


        <!-- Start color box -->
        <div class="color_box_wrapper">
            <div class="color_box" style="background-color: #d4cec2"></div>
            <div class="color_name">Beige</div>
        </div>
        <!-- End color box -->

        <!-- Start color box -->
        <div class="color_box_wrapper">
            <div class="color_box" style="background-color: #802e51"></div>
            <div class="color_name">Grape</div>
        </div>
        <!-- End color box -->

    </div>
</div>
<!-- End of color section -->

<!-- Start shipment sectiom -->
<div class="shipment_section">
    <h1>Was zeichnet uns aus?</h1>

    <div class="shipment_icons">
        <!-- Shipment bopx -->
        <div class="icon_box">
            <div class="icon">
                <img src="<?php echo JADA_NAILS_URL . 'Public/Assets/Icons/shipment_box.svg' ?>" alt="" />
            </div>
            <p>Versandkosten freie Lieferung innerhalb Deutschlands</p>
        </div>
        <!-- End shipment box -->

        <!-- Shipment bopx -->
        <div class="icon_box">
            <div class="icon">
                <img src="<?php echo JADA_NAILS_URL . 'Public/Assets/Icons/truck.svg' ?>" alt="" />
            </div>
            <p>Telefonische Verkaufsberatung</p>
        </div>
        <!-- End shipment box -->

        <!-- Shipment bopx -->
        <div class="icon_box">
            <div class="icon">
                <img src="<?php echo JADA_NAILS_URL . 'Public/Assets/Icons/telephone.svg' ?>" alt="" />
            </div>
            <p>Transparente und faire Versandkosten</p>
        </div>
        <!-- End shipment box -->

        <!-- Shipment bopx -->
        <div class="icon_box">
            <div class="icon">
                <img src="<?php echo JADA_NAILS_URL . 'Public/Assets/Icons/car.svg' ?>" alt="" />
            </div>
            <p>Unser Außendienst besucht Sie vor-Ort</p>
        </div>
        <!-- End shipment box -->
    </div>
</div>
<!-- End of shipment section -->

<!-- Start newsletter section -->
<div class="newsletter_section">
    <!-- Top section -->
    <div class="top_section row"
        style="background-image: url(<?php echo JADA_NAILS_URL . 'Public/Assets/Icons/Newsletter.svg' ?>)">
        <div class="text_section col-12 col-md-6 col-lg-6">
            <h2>mit unserem Newsletter nichts mehr verpassen!</h2>
        </div>
        <div class="btn_section col-12 col-md-6 col-lg-6">
            <button>anmelden</button>
        </div>
    </div>
    <!-- End of top section -->

    <form class="newsletter_form" id="newsletter_form">
        <h1>Sind noch fragen offen?</h1>

        <div class="side_container">
            <div class="left_side">
                <input type="text" name="name" id="name" placeholder="Vorname*" required />
                <input type="text" name="nickname" id="nickname" placeholder="Nachname*" required />
                <input type="email" name="email" id="email" placeholder="E-Mail Adresse*" required />
            </div>

            <div class="right_side">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Nachricht*"></textarea>

                <label for="checkbox" class="checkbox_container">
                    <input type="checkbox" class="checkbox" name="checkbox" id="checkbox" />
                    <p>Ja, ich habe die Datenschutzerklärung gelesen und verstanden</p>
                </label>

                <button class="submit_btn" type="submit">Senden</button>
            </div>
        </div>
    </form>
</div>
<!-- End of newsletter section -->


<?php get_footer('header.php')?>