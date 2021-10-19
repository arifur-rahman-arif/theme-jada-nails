<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jada Nails</title>
    <link rel="shortcut icon" href="<?php echo get_site_icon_url() ?>" />
    <title><?php bloginfo('name');?><?php wp_title('|')?></title>
    <?php wp_head()?>
</head>

<body>
    <!-- Header start -->
    <header>
        <div class="backgroud_overlay"></div>
        <div class="logo_section">
            <a href="<?php echo site_url() ?>">
                <img src="<?php echo JADA_NAILS_URL . 'Public/Assets/logo.svg' ?>" alt="header_logo" />
            </a>
        </div>
        <nav class="menu">
            <ul class="links">
                <li><a href="">Anmelden</a></li>
                <li>
                    <a href="">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.632" height="14.635"
                                viewBox="0 0 14.632 14.635">
                                <path id="Pfad_124" data-name="Pfad 124"
                                    d="M173.521,657.434c.039-.209.071-.419.117-.627a1.526,1.526,0,0,1,.7-1q.647-.4,1.307-.788a.628.628,0,0,1,.887.2q1.014,1.51,2.018,3.027a.627.627,0,0,1-.14.889c-.348.281-.706.55-1.058.826a.66.66,0,0,0-.2.948,11.587,11.587,0,0,0,2.243,2.865,12.4,12.4,0,0,0,2.015,1.7c.272.174.555.332.84.484a.614.614,0,0,0,.8-.173c.273-.342.54-.69.808-1.036a.67.67,0,0,1,1.045-.175l2.873,1.915a.661.661,0,0,1,.231,1.011c-.217.363-.445.72-.651,1.09a1.736,1.736,0,0,1-1.36.9c-.121.017-.242.039-.363.059h-.772a.711.711,0,0,0-.08-.024c-.312-.057-.63-.093-.937-.172a9.737,9.737,0,0,1-3.087-1.5,23.159,23.159,0,0,1-3.993-3.593,16.086,16.086,0,0,1-2.339-3.245,7.765,7.765,0,0,1-.744-1.92c-.066-.295-.111-.595-.166-.892Z"
                                    transform="translate(-173.521 -654.914)" fill="#fff" />
                            </svg>
                        </span>
                        <span>Beratung?</span></a>
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
            <div class="hamburger_menu">
                <span class="deskop_menu active">
                    <i class="fas fa-bars"></i>
                </span>
                <span class="mobile_menu">
                    <i class="fas fa-times"></i>
                </span>
            </div>
        </nav>

        <div class="primary_menu">
            <?php displayHeaderMenu()?>
        </div>
    </header>
    <!-- End of header -->