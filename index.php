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
<div class="hero_section"
    style="background-image: url(<?php echo JADA_NAILS_URL . 'Public/Assets/Bilder/Header.png' ?>)">
    <div class="content_wrapper">
        <div class="inner_wrapper">
            <h1 class="hero_text">Ihr Fachhandel für nageldesign</h1>
            <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quidem sequi
                mollitia numquam odit aliquid, repudiandae corrupti possimus laudantium, sit
                commodi consequatur laborum maxime eius.
            </p>
            <a class="hero_btn">direkt zum Shop</a>
            <img class="scroller" src="<?php echo JADA_NAILS_URL . 'Public/Assets/Icons/scroller.svg' ?>"
                alt="scroller" />
        </div>
    </div>
</div>
<!-- End of hero section -->



<!-- Section 2 -->
<div class="section_2">
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
    <img class="post_bg_waves wave_3" src="<?php echo JADA_NAILS_URL . 'Public/Assets/wave_2.svg' ?>" alt="" />

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
        <div class="color_box" style="background-color: #f295ae"></div>
        <!-- End color box -->
        <!-- Start color box -->
        <div class="color_box" style="background-color: #efa045"></div>
        <!-- End color box -->
        <!-- Start color box -->
        <div class="color_box" style="background-color: #8e2f24"></div>
        <!-- End color box -->
        <!-- Start color box -->
        <div class="color_box" style="background-color: #f295ae"></div>
        <!-- End color box -->
        <!-- Start color box -->
        <div class="color_box" style="background-color: #ffffff"></div>
        <!-- End color box -->
        <!-- Start color box -->
        <div class="color_box" style="background-color: #a7ccd9"></div>
        <!-- End color box -->
        <!-- Start color box -->
        <div class="color_box" style="background-color: #607aaf"></div>
        <!-- End color box -->
        <!-- Start color box -->
        <div class="color_box" style="background-color: #9b8f82"></div>
        <!-- End color box -->
        <!-- Start color box -->
        <div class="color_box" style="background-color: #fbd026"></div>
        <!-- End color box -->
        <!-- Start color box -->
        <div class="color_box" style="background-color: #cfcfcf"></div>
        <!-- End color box -->
        <!-- Start color box -->
        <div class="color_box" style="background-color: #d4cec2"></div>
        <!-- End color box -->
        <!-- Start color box -->
        <div class="color_box" style="background-color: #802e51"></div>
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