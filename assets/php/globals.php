<?php
    date_default_timezone_set('America/Lima');

	$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/.env", true);
    extract($config);

    header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: Accept, Authorization, Accept-Language, Content-Type, Origin, User-Agent");
	header("Access-Control-Allow-Methods: OPTIONS, GET");
	header("Access-Control-Max-Age: 1000");
	header("Allow: OPTIONS, GET");
	header("Cache-Control: public, max-age=180");
	header("Content-Type: text/html; charset=UTF-8");
	header("Referrer-Policy: strict-origin-when-cross-origin");
	header("Strict-transport-security: max-age=15724800, includeSubdomains");
	header("X-Content-Type-Options: nosniff");
	header("X-Permitted-Cross-Domain-Policies: none");
	header("X-XSS-Protection: 1; mode=block");

    $brand_camelcase = "Gugol Quants";
    $brand_uppercase = "GUGOL QUANTS";

    $brand_camelcase_latam = "Gugol Quants Latam";
    $brand_uppercase_latam = "GUGOL QUANTS LATAM";

    $phone_number = "+51 992 072 046";
    $email_info = "info@gugol-quants.com";

    $url = ($MASTER_ENVIRONMENT == "prod" ? strval("https://gugol-quants.com") : strval("https://www-testing.gugol-quants.com"));
    $url_latam = ($MASTER_ENVIRONMENT == "prod" ? strval("https://gugol-quants.com/latam") : strval("https://www-testing.gugol-quants.com/latam"));

    $path = "/";
    $path_latam = "/latam";

    $url_facebook = "";
    $url_instagram = "https://instagram.com/gugol_quants?igshid=YmMyMTA2M2Y=";
    $url_whatsapp = "https://wa.me/51992072046";
    $url_twitter = "https://twitter.com/gugol_quants?s=11";
    $url_telegram = "https://t.me/gugol_quants";
    $url_discord = "https://discord.gg/F9bjDjQ4";
    $url_youtube = "https://www.youtube.com/@gugol_quants";
    $url_video_home = "https://www.youtube.com/embed/O2mN2t4iWo8?autoplay=1&mute=1&loop=1";
    $url_video_about_us = "https://www.youtube.com/embed/dZosdU7fFzw";

    $header_gtag = "
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T4D22WBG');</script>
        <!-- End Google Tag Manager -->
    ";

    $header_public = '
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>' . $brand_camelcase . '</title>

        <meta name="description" content="✅ ' . $brand_camelcase . ': Algorithmic trading based on math varieties, developed on MQL (MT5). [With faith and honesty, success will always be on your side]. Join, invest and grow.">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
        <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

        <!-- DC metatags -->
        <meta name="dc.title" content="' . $brand_camelcase . '">
        <meta name="dc.description" content="✅ ' . $brand_camelcase . ': Algorithmic trading based on math varieties, developed on MQL (MT5). [With faith and honesty, success will always be on your side]. Join, invest and grow.">
        <meta name="dc.relation" content="https://gugol-quants.com/">
        <meta name="dc.source" content="https://gugol-quants.com/">
        <meta name="dc.language" content="es_ES">

        <link rel="canonical" href="https://gugol-quants.com/">
        <!--
        <script type="application/ld+json">
            {
                "@context":"https://schema.org",
                "@type":"WebSite",
                "url" :"https:\/\/gugol-quants.com",
                "potentialAction": {
                    "@type":"SearchAction",
                    "target":"https:\/\/gugol-quants.com\/?s={search_term_string}",
                    "query-input":"required name=search_term_string"
                }
            }
        </script>
        -->

        <!-- Open Graph metatags -->
        <meta property="og:url" content="https://gugol-quants.com/">
        <meta property="og:site_name" content="' . $brand_camelcase . '">
        <meta property="og:locale" content="es_ES">
        <meta property="og:type" content="website">
        <meta property="og:title" content="' . $brand_camelcase . '">
        <meta property="og:description" content="✅ ' . $brand_camelcase . ': Algorithmic trading based on math varieties, developed on MQL (MT5). [With faith and honesty, success will always be on your side]. Join, invest and grow.">
        <meta property="og:image" content="/img/imagotipo-alternative.png">
        <meta property="og:image:secure_url" content="/img/imagotipo-alternative.png">
        <meta property="og:image:width" content="1086">
        <meta property="og:image:height" content="230">

        <!-- Twitter metatags -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@gugol_quants">
        <meta name="twitter:creator" content="@gugol_quants">
        <meta name="twitter:title" content="' . $brand_camelcase . '">
        <meta name="twitter:description" content="✅ ' . $brand_camelcase . ': Algorithmic trading based on math varieties, developed on MQL (MT5). [With faith and honesty, success will always be on your side]. Join, invest and grow.">
        <meta name="twitter:image" content="' . $url . '/img/logo-icon-v1.jpg">

        <link rel="shortlink" href="https://gugol-quants.com/">

        <!-- Images -->
        <link rel="apple-touch-icon" sizes="57x57" href="/img/icons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/img/icons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/img/icons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/img/icons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/img/icons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/img/icons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/img/icons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/img/icons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/img/icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/icons/favicon-16x16.png">
        <link rel="icon" type="image/x-icon" href="/img/icons/favicon.ico">
        <link rel="manifest" href="/img/icons/site.webmanifest">
        <link rel="mask-icon" href="/img/icons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#00aba9">
        <meta name="msapplication-TileImage" content="img/icons/mstile-144x144.png">
        <meta name="theme-color" content="#ff0000">

        <style type="text/css">
            img.wp-smiley, img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>

        <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Heebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CInter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.0.1" type="text/css" media="all">

        <link rel="stylesheet" href="/css/www.css" type="text/css" media="all">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <link rel="stylesheet" id="argpd-informbox-css" href="/css/inform-box-simple.css" type="text/css" media="all">
        <link rel="stylesheet" id="argpd-cookies-eu-banner-css" href="/css/cookies-banner-modern-light.css" type="text/css" media="all">
        <link rel="stylesheet" id="elementor-frontend-legacy-css" href="/css/frontend-legacy.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="elementor-frontend-css" href="/css/frontend.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="wp-block-library-css" href="/css/style.min_1.css" type="text/css" media="all">
        <link rel="stylesheet" id="wc-blocks-vendors-style-css" href="/css/wc-blocks-vendors-style.css" type="text/css" media="all">
        <link rel="stylesheet" id="wc-blocks-style-css" href="/css/wc-blocks-style.css" type="text/css" media="all">
        <link rel="stylesheet" id="contact-form-7-css" href="/css/styles.css" type="text/css" media="all">
        <link rel="stylesheet" id="hello-elementor-css" href="/css/style.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="hello-elementor-theme-style-css" href="/css/theme.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="elementor-icons-ekiticons-css" href="/css/ekiticons.css" type="text/css" media="all">
        <link rel="stylesheet" id="elementor-icons-css" href="/css/elementor-icons.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="typing-effect-css" href="/css/typing-effect.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="jet-sticky-frontend-css" href="/css/jet-sticky-frontend.css" type="text/css" media="all">
        <link rel="stylesheet" id="ekit-widget-styles-css" href="/css/widget-styles.css" type="text/css" media="all">
        <link rel="stylesheet" id="ekit-responsive-css" href="/css/responsive.css" type="text/css" media="all">
        <link rel="stylesheet" id="elementor-icons-shared-0-css" href="/css/fontawesome.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="/css/brands.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="/css/solid.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="elementor-icons-fa-regular-css" href="/css/regular.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/6.6.6/css/flag-icons.min.css" integrity="sha512-uvXdJud8WaOlQFjlz9B15Yy2Au/bMAvz79F7Xa6OakCl2jvQPdHD0hb3dEqZRdSwG4/sknePXlE7GiarwA/9Wg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

        <!-- <script type="text/javascript" src="/js/jquery.min.js" id="jquery-core-js"></script> -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js" id="jquery-core-js"></script>
        <!-- <script type="text/javascript" src="/js/jquery-migrate.min.js" id="jquery-migrate-js"></script> -->
        <script type="text/javascript" src="/js/cookies-eu-banner.js" id="argpd-cookies-eu-banner-js"></script>
        <script type="text/javascript" src="/js/chart.js" id="elementor-chart-js-js"></script>
        <script type="text/javascript" src="/js/js.cookie.min.js" id="js-cookie-js"></script>
        <script type="text/javascript" src="/js/jquery.bind-first-0.2.3.min.js" id="jquery-bind-first-js"></script>
        <script type="text/javascript" src="/js/public.js" id="pys-js"></script>

        <link href="/css/rvslider.min.css" rel="stylesheet">
        <script src="/js/rvslider.min.js"></script>

        <noscript>
            <style>
                .woocommerce-product-gallery {
                    opacity: 1 !important;
                }
            </style>
        </noscript>
        <noscript>
            <style>
                .lazyload[data-src] {
                    display: none !important;
                }
            </style>
        </noscript>
        <style>
            .lazyload {
                background-image: none !important;
            }

            .lazyload:before {
                background-image: none !important;
            }
        </style>

        <style id="global-styles-inline-css" type="text/css">
            body {
                --wp--preset--color--black: #000000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #ffffff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
                --wp--preset--duotone--dark-grayscale: url("index_1.html#wp-duotone-dark-grayscale");
                --wp--preset--duotone--grayscale: url("index_1.html#wp-duotone-grayscale");
                --wp--preset--duotone--purple-yellow: url("index_1.html#wp-duotone-purple-yellow");
                --wp--preset--duotone--blue-red: url("index_1.html#wp-duotone-blue-red");
                --wp--preset--duotone--midnight: url("index_1.html#wp-duotone-midnight");
                --wp--preset--duotone--magenta-yellow: url("index_1.html#wp-duotone-magenta-yellow");
                --wp--preset--duotone--purple-green: url("index_1.html#wp-duotone-purple-green");
                --wp--preset--duotone--blue-orange: url("index_1.html#wp-duotone-blue-orange");
                --wp--preset--font-size--small: 13px;
                --wp--preset--font-size--medium: 20px;
                --wp--preset--font-size--large: 36px;
                --wp--preset--font-size--x-large: 42px;
            }

            .has-black-color {
                color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-color {
                color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-color {
                color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-color {
                color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-color {
                color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-color {
                color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-color {
                color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-color {
                color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-color {
                color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-color {
                color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-color {
                color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-color {
                color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-background-color {
                background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-background-color {
                background-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-background-color {
                background-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-background-color {
                background-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-background-color {
                background-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-background-color {
                background-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-background-color {
                background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-background-color {
                background-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-border-color {
                border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-border-color {
                border-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-border-color {
                border-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-border-color {
                border-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-border-color {
                border-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-border-color {
                border-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-border-color {
                border-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-border-color {
                border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
            }

            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
            }

            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
            }

            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
            }

            .has-cool-to-warm-spectrum-gradient-background {
                background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
            }

            .has-blush-light-purple-gradient-background {
                background: var(--wp--preset--gradient--blush-light-purple) !important;
            }

            .has-blush-bordeaux-gradient-background {
                background: var(--wp--preset--gradient--blush-bordeaux) !important;
            }

            .has-luminous-dusk-gradient-background {
                background: var(--wp--preset--gradient--luminous-dusk) !important;
            }

            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important;
            }

            .has-electric-grass-gradient-background {
                background: var(--wp--preset--gradient--electric-grass) !important;
            }

            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important;
            }

            .has-small-font-size {
                font-size: var(--wp--preset--font-size--small) !important;
            }

            .has-medium-font-size {
                font-size: var(--wp--preset--font-size--medium) !important;
            }

            .has-large-font-size {
                font-size: var(--wp--preset--font-size--large) !important;
            }

            .has-x-large-font-size {
                font-size: var(--wp--preset--font-size--x-large) !important;
            }
        </style>

        <script id="pixel-chaty" async="true" src="https://cdn.chaty.app/pixel.js?id=CVzYh9Nv"></script>
    ' . $header_gtag;

    $header_public_latam = '
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>' . $brand_camelcase_latam . '</title>

        <meta name="description" content="✅ ' . $brand_camelcase_latam . ': Trading algorítmico basado en variedades matemáticas, desarrollado en MQL (MT5). [Con fé y honestidad, el éxito siempre estará de tu lado]. Únete, invierte y crece.">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
        <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

        <!-- DC metatags -->
        <meta name="dc.title" content="' . $brand_camelcase_latam . '">
        <meta name="dc.description" content="✅ ' . $brand_camelcase_latam . ': Trading algorítmico basado en variedades matemáticas, desarrollado en MQL (MT5). [Con fé y honestidad, el éxito siempre estará de tu lado]. Únete, invierte y crece.">
        <meta name="dc.relation" content="https://gugol-quants.com/">
        <meta name="dc.source" content="https://gugol-quants.com/">
        <meta name="dc.language" content="es_ES">

        <link rel="canonical" href="https://gugol-quants.com/">
        <!--
        <script type="application/ld+json">
            {
                "@context":"https://schema.org",
                "@type":"WebSite",
                "url" :"https:\/\/gugol-quants.com",
                "potentialAction": {
                    "@type":"SearchAction",
                    "target":"https:\/\/gugol-quants.com\/?s={search_term_string}",
                    "query-input":"required name=search_term_string"
                }
            }
        </script>
        -->

        <!-- Open Graph metatags -->
        <meta property="og:url" content="https://gugol-quants.com/">
        <meta property="og:site_name" content="' . $brand_camelcase_latam . '">
        <meta property="og:locale" content="es_ES">
        <meta property="og:type" content="website">
        <meta property="og:title" content="' . $brand_camelcase_latam . '">
        <meta property="og:description" content="✅ ' . $brand_camelcase_latam . ': Trading algorítmico basado en variedades matemáticas, desarrollado en MQL (MT5). [Con fé y honestidad, el éxito siempre estará de tu lado]. Únete, invierte y crece.">
        <meta property="og:image" content="/img/imagotipo-alternative.png">
        <meta property="og:image:secure_url" content="/img/imagotipo-alternative.png">
        <meta property="og:image:width" content="1086">
        <meta property="og:image:height" content="230">

        <!-- Twitter metatags -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@gugol_quants">
        <meta name="twitter:creator" content="@gugol_quants">
        <meta name="twitter:title" content="' . $brand_camelcase_latam . '">
        <meta name="twitter:description" content="✅ ' . $brand_camelcase_latam . ': Trading algorítmico basado en variedades matemáticas, desarrollado en MQL (MT5). [Con fé y honestidad, el éxito siempre estará de tu lado]. Únete, invierte y crece.">
        <meta name="twitter:image" content="' . $url . '/img/logo-icon-v1.jpg">

        <link rel="shortlink" href="https://gugol-quants.com/">

        <!-- Images -->
        <link rel="apple-touch-icon" sizes="57x57" href="/img/icons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/img/icons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/img/icons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/img/icons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/img/icons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/img/icons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/img/icons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/img/icons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/img/icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/icons/favicon-16x16.png">
        <link rel="icon" type="image/x-icon" href="/img/icons/favicon.ico">
        <link rel="manifest" href="/img/icons/site.webmanifest">
        <link rel="mask-icon" href="/img/icons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#00aba9">
        <meta name="msapplication-TileImage" content="/img/icons/mstile-144x144.png">
        <meta name="theme-color" content="#ff0000">

        <style type="text/css">
            img.wp-smiley, img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>

        <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Heebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CInter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.0.1" type="text/css" media="all">

        <link rel="stylesheet" href="/css/www.css" type="text/css" media="all">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <link rel="stylesheet" id="argpd-informbox-css" href="/css/inform-box-simple.css" type="text/css" media="all">
        <link rel="stylesheet" id="argpd-cookies-eu-banner-css" href="/css/cookies-banner-modern-light.css" type="text/css" media="all">
        <link rel="stylesheet" id="elementor-frontend-legacy-css" href="/css/frontend-legacy.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="elementor-frontend-css" href="/css/frontend.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="wp-block-library-css" href="/css/style.min_1.css" type="text/css" media="all">
        <link rel="stylesheet" id="wc-blocks-vendors-style-css" href="/css/wc-blocks-vendors-style.css" type="text/css" media="all">
        <link rel="stylesheet" id="wc-blocks-style-css" href="/css/wc-blocks-style.css" type="text/css" media="all">
        <link rel="stylesheet" id="contact-form-7-css" href="/css/styles.css" type="text/css" media="all">
        <link rel="stylesheet" id="hello-elementor-css" href="/css/style.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="hello-elementor-theme-style-css" href="/css/theme.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="elementor-icons-ekiticons-css" href="/css/ekiticons.css" type="text/css" media="all">
        <link rel="stylesheet" id="elementor-icons-css" href="/css/elementor-icons.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="typing-effect-css" href="/css/typing-effect.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="jet-sticky-frontend-css" href="/css/jet-sticky-frontend.css" type="text/css" media="all">
        <link rel="stylesheet" id="ekit-widget-styles-css" href="/css/widget-styles.css" type="text/css" media="all">
        <link rel="stylesheet" id="ekit-responsive-css" href="/css/responsive.css" type="text/css" media="all">
        <link rel="stylesheet" id="elementor-icons-shared-0-css" href="/css/fontawesome.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="/css/brands.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="/css/solid.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="elementor-icons-fa-regular-css" href="/css/regular.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/6.6.6/css/flag-icons.min.css" integrity="sha512-uvXdJud8WaOlQFjlz9B15Yy2Au/bMAvz79F7Xa6OakCl2jvQPdHD0hb3dEqZRdSwG4/sknePXlE7GiarwA/9Wg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

        <!-- <script type="text/javascript" src="/js/jquery.min.js" id="jquery-core-js"></script> -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js" id="jquery-core-js"></script>
        <!-- <script type="text/javascript" src="/js/jquery-migrate.min.js" id="jquery-migrate-js"></script> -->
        <script type="text/javascript" src="/js/cookies-eu-banner.js" id="argpd-cookies-eu-banner-js"></script>
        <script type="text/javascript" src="/js/chart.js" id="elementor-chart-js-js"></script>
        <script type="text/javascript" src="/js/js.cookie.min.js" id="js-cookie-js"></script>
        <script type="text/javascript" src="/js/jquery.bind-first-0.2.3.min.js" id="jquery-bind-first-js"></script>
        <script type="text/javascript" src="/js/public.js" id="pys-js"></script>

        <link href="/css/rvslider.min.css" rel="stylesheet">
        <script src="/js/rvslider.min.js"></script>

        <noscript>
            <style>
                .woocommerce-product-gallery {
                    opacity: 1 !important;
                }
            </style>
        </noscript>
        <noscript>
            <style>
                .lazyload[data-src] {
                    display: none !important;
                }
            </style>
        </noscript>
        <style>
            .lazyload {
                background-image: none !important;
            }

            .lazyload:before {
                background-image: none !important;
            }
        </style>

        <style id="global-styles-inline-css" type="text/css">
            body {
                --wp--preset--color--black: #000000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #ffffff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
                --wp--preset--duotone--dark-grayscale: url("index_1.html#wp-duotone-dark-grayscale");
                --wp--preset--duotone--grayscale: url("index_1.html#wp-duotone-grayscale");
                --wp--preset--duotone--purple-yellow: url("index_1.html#wp-duotone-purple-yellow");
                --wp--preset--duotone--blue-red: url("index_1.html#wp-duotone-blue-red");
                --wp--preset--duotone--midnight: url("index_1.html#wp-duotone-midnight");
                --wp--preset--duotone--magenta-yellow: url("index_1.html#wp-duotone-magenta-yellow");
                --wp--preset--duotone--purple-green: url("index_1.html#wp-duotone-purple-green");
                --wp--preset--duotone--blue-orange: url("index_1.html#wp-duotone-blue-orange");
                --wp--preset--font-size--small: 13px;
                --wp--preset--font-size--medium: 20px;
                --wp--preset--font-size--large: 36px;
                --wp--preset--font-size--x-large: 42px;
            }

            .has-black-color {
                color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-color {
                color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-color {
                color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-color {
                color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-color {
                color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-color {
                color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-color {
                color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-color {
                color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-color {
                color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-color {
                color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-color {
                color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-color {
                color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-background-color {
                background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-background-color {
                background-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-background-color {
                background-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-background-color {
                background-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-background-color {
                background-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-background-color {
                background-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-background-color {
                background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-background-color {
                background-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-border-color {
                border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-border-color {
                border-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-border-color {
                border-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-border-color {
                border-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-border-color {
                border-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-border-color {
                border-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-border-color {
                border-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-border-color {
                border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
            }

            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
            }

            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
            }

            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
            }

            .has-cool-to-warm-spectrum-gradient-background {
                background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
            }

            .has-blush-light-purple-gradient-background {
                background: var(--wp--preset--gradient--blush-light-purple) !important;
            }

            .has-blush-bordeaux-gradient-background {
                background: var(--wp--preset--gradient--blush-bordeaux) !important;
            }

            .has-luminous-dusk-gradient-background {
                background: var(--wp--preset--gradient--luminous-dusk) !important;
            }

            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important;
            }

            .has-electric-grass-gradient-background {
                background: var(--wp--preset--gradient--electric-grass) !important;
            }

            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important;
            }

            .has-small-font-size {
                font-size: var(--wp--preset--font-size--small) !important;
            }

            .has-medium-font-size {
                font-size: var(--wp--preset--font-size--medium) !important;
            }

            .has-large-font-size {
                font-size: var(--wp--preset--font-size--large) !important;
            }

            .has-x-large-font-size {
                font-size: var(--wp--preset--font-size--x-large) !important;
            }
        </style>

        <script id="pixel-chaty" async="true" src="https://cdn.chaty.app/pixel.js?id=CVzYh9Nv"></script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({"gtm.start":
        new Date().getTime(),event:"gtm.js"});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!="dataLayer"?"&l="+l:"";j.async=true;j.src=
        "https://www.googletagmanager.com/gtm.js?id="+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,"script","dataLayer","GTM-KZTLTH3");</script>
        <!-- End Google Tag Manager -->
    ';

    $body_public = '
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T4D22WBG"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    ';

    $section_header = '
        <section class="elementor-section elementor-top-section elementor-element elementor-element-48cf08b8 elementor-section-content-middle elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="48cf08b8" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;jet_sticky_section_sticky&quot;:&quot;yes&quot;,&quot;jet_sticky_section_sticky_visibility&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-57d95c5" data-id="57d95c5" data-element_type="column">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-39e97165 elementor-icon-list--layout-inline elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="39e97165" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <a href="' . $url_whatsapp . '" target="_blank">
                                                    <span class="icon-white">
                                                        <i class="ri-whatsapp-line"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text">&nbsp;' . $phone_number . '</span>
                                                </a>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <a href="mailto:' . $email_info . '">
                                                    <span class="icon-white">
                                                        <i class="ri-mail-fill"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text">&nbsp;' . $email_info . '</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1fce57a1" data-id="1fce57a1" data-element_type="column">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-66f6f399 elementor-icon-list--layout-inline elementor-align-right elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="66f6f399" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <span class="elementor-icon-list-text">
                                                    Follow us:
                                                </span>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <a href="' . $url_telegram . '" target="_blank">
                                                    <span class="elementor-icon-list-icon">
                                                        <i class="ri-telegram-fill"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text"></span>
                                                </a>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <a href="' . $url_instagram . '" target="_blank">
                                                    <span class="elementor-icon-list-icon">
                                                        <i class="ri-instagram-line"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text"></span>
                                                </a>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <a href="' . $url_twitter . '" target="_blank">
                                                    <span class="elementor-icon-list-icon">
                                                        <i class="ri-twitter-fill"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text"></span>
                                                </a>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <a href="' . $url_discord . '" target="_blank">
                                                    <span class="elementor-icon-list-icon">
                                                        <i class="ri-discord-fill"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text"></span>
                                                </a>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <a href="' . $url_youtube . '" target="_blank">
                                                    <span class="elementor-icon-list-icon">
                                                        <i class="ri-youtube-fill"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ';

    $section_header_latam = '
        <section class="elementor-section elementor-top-section elementor-element elementor-element-48cf08b8 elementor-section-content-middle elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="48cf08b8" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;jet_sticky_section_sticky&quot;:&quot;yes&quot;,&quot;jet_sticky_section_sticky_visibility&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
            <!-- <div class="elementor-container elementor-column-gap-default"> -->
            <div class="container-fluid">
                <!-- <div class="elementor-row"> -->
                <div class="row align-items-center">

                    <!-- <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-57d95c5" data-id="57d95c5" data-element_type="column"> -->
                    <div class="col-md-4">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-39e97165 elementor-icon-list--layout-inline elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="39e97165" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <a href="' . $url_whatsapp . '" target="_blank">
                                                    <span class="icon-white">
                                                        <i class="ri-whatsapp-line"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text">&nbsp;' . $phone_number . '</span>
                                                </a>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <a href="mailto:' . $email_info . '">
                                                    <span class="icon-white">
                                                        <i class="ri-mail-fill"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text">&nbsp;' . $email_info . '</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="elementor-column elementor-col-33"> -->
                    <div class="col-md-4">
                        <div class="container-fluid text-center">
                            <p class="fs-1 m-0 fw-bold text-white" style="text-transform: uppercase; font-family: Montserrat;">| Latam |</p>
                        </div>
                    </div>

                    <!-- <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1fce57a1" data-id="1fce57a1" data-element_type="column"> -->
                    <div class="col-md-4">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-66f6f399 elementor-icon-list--layout-inline elementor-align-right elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="66f6f399" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <span class="elementor-icon-list-text">
                                                    S&iacute;guenos:
                                                </span>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <a href="' . $url_telegram . '" target="_blank">
                                                    <span class="elementor-icon-list-icon">
                                                        <i class="ri-telegram-fill"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text"></span>
                                                </a>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <a href="' . $url_instagram . '" target="_blank">
                                                    <span class="elementor-icon-list-icon">
                                                        <i class="ri-instagram-line"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text"></span>
                                                </a>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <a href="' . $url_twitter . '" target="_blank">
                                                    <span class="elementor-icon-list-icon">
                                                        <i class="ri-twitter-fill"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text"></span>
                                                </a>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <a href="' . $url_discord . '" target="_blank">
                                                    <span class="elementor-icon-list-icon">
                                                        <i class="ri-discord-fill"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text"></span>
                                                </a>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <a href="' . $url_youtube . '" target="_blank">
                                                    <span class="elementor-icon-list-icon">
                                                        <i class="ri-youtube-fill"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text"></span>
                                                </a>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <span class="elementor-icon-list-text">
                                                    <a href="' . $path . '" class="lang-en" data-lang="en" style="color:#FFFFFF !important; text-decoration:underline !important; font-weight:bold !important;">
                                                        ENG&nbsp;&nbsp;<span class="fi fi-us"></span>
                                                    </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ';

    $section_menu = '
        <section class="elementor-section elementor-top-section elementor-element elementor-element-249711f4 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="249711f4" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;jet_sticky_section_sticky&quot;:&quot;yes&quot;,&quot;jet_sticky_section_sticky_visibility&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-row">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-21683e33" data-id="21683e33" data-element_type="column">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-63a395bd elementor-widget elementor-widget-image" data-id="63a395bd" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image">
                                            <a href="' . $path . '">
                                                <img width="300" height="132" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAACEAQAAAACW9EBYAAAAAnRSTlMAAHaTzTgAAAAdSURBVFjD7cGBAAAAAMOg+VNf4AhVAQAAAAAAwDcaTAABvFCOkwAAAABJRU5ErkJggg==" class="attachment-full size-full lazyload img-header" alt data-src="/img/imagotipo.png" loading="lazy" data-srcset="/img/imagotipo.png 400w, /img/imagotipo.png 300w" data-sizes="auto">
                                                <noscript>
                                                    <img width="300" height="132" src="/img/imagotipo.png" class="attachment-full size-full" alt srcset="/img/imagotipo.png 400w, /img/imagotipo.png 300w" sizes="(max-width: 300px) 100vw, 300px"
                                                    data-eio="l">
                                                </noscript>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-312bf48c" data-id="312bf48c" data-element_type="column">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-5c3405d elementor-widget elementor-widget-ekit-nav-menu" data-id="5c3405d" data-element_type="widget" data-widget_type="ekit-nav-menu.default">
                                    <div class="elementor-widget-container">
                                        <div class="ekit-wid-con ekit_menu_responsive_tablet" data-hamburger-icon data-hamburger-icon-type="icon" data-responsive-breakpoint="1024"> 
                                            <button class="elementskit-menu-hamburger elementskit-menu-toggler">
                                                <span class="elementskit-menu-hamburger-icon"></span>
                                                <span class="elementskit-menu-hamburger-icon"></span>
                                                <span class="elementskit-menu-hamburger-icon"></span>
                                            </button>
                                            <div id="ekit-megamenu-menu-principal" class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default elementskit_line_arrow ekit-nav-menu-one-page-no ekit-nav-dropdown-hover">
                                                <ul id="menu-menu-principal" class="elementskit-navbar-nav elementskit-menu-po-right submenu-click-on-icon">
        ';

        if ($_SERVER['PHP_SELF'] == strtolower("/index.php")) {
            $section_menu = $section_menu . '
                                                    <li id="menu-item-26975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1076 current_page_item menu-item-26975 nav-item elementskit-mobile-builder-content active" data-vertical-menu="750px">
                                                        <a href="' . $path . '" class="ekit-menu-nav-link active">
                                                            Home
                                                        </a>
                                                    </li>
            ';
        }
        else {
            $section_menu = $section_menu . '
                                                    <li id="menu-item menu-item-type-post_type menu-item-object-page menu-item-26978 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                                        <a href="' . $path . '" class="ekit-menu-nav-link">
                                                            Home
                                                        </a>
                                                    </li>
            ';
        }

        if ($_SERVER['PHP_SELF'] == strtolower("/about-us.php")) {
            $section_menu = $section_menu . '
                                                    <li id="menu-item-26975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1076 current_page_item menu-item-26975 nav-item elementskit-mobile-builder-content active" data-vertical-menu="750px">
                                                        <a href="about-us" class="ekit-menu-nav-link active">
                                                            About Us
                                                        </a>
                                                    </li>
            ';
        }
        else {
            $section_menu = $section_menu . '
                                                    <li id="menu-item menu-item-type-post_type menu-item-object-page menu-item-26978 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                                        <a href="about-us" class="ekit-menu-nav-link">
                                                            About Us
                                                        </a>
                                                    </li>
            ';
        }

        if ($_SERVER['PHP_SELF'] == strtolower("/results.php")) {
            $section_menu = $section_menu . '
                                                    <li id="menu-item-26975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1076 current_page_item menu-item-26975 nav-item elementskit-mobile-builder-content active" data-vertical-menu="750px">
                                                        <a href="results" class="ekit-menu-nav-link active">
                                                            Results
                                                        </a>
                                                    </li>
            ';
        }
        else {
            $section_menu = $section_menu . '
                                                    <li id="menu-item menu-item-type-post_type menu-item-object-page menu-item-26978 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                                        <a href="results" class="ekit-menu-nav-link">
                                                            Results
                                                        </a>
                                                    </li>
            ';
        }

        if ($_SERVER['PHP_SELF'] == strtolower("/store.php")) {
            $section_menu = $section_menu . '
                                                    <li id="menu-item-26975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1076 current_page_item menu-item-26975 nav-item elementskit-mobile-builder-content active" data-vertical-menu="750px">
                                                        <a href="store" class="ekit-menu-nav-link active">
                                                            Store
                                                        </a>
                                                    </li>
            ';
        }
        else {
            $section_menu = $section_menu . '
                                                    <li id="menu-item menu-item-type-post_type menu-item-object-page menu-item-26978 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                                        <a href="store" class="ekit-menu-nav-link">
                                                            Store
                                                        </a>
                                                    </li>
            ';
        }

        if ($_SERVER['PHP_SELF'] == strtolower("/faq.php")) {
            $section_menu = $section_menu . '
                                                    <li id="menu-item-26975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1076 current_page_item menu-item-26975 nav-item elementskit-mobile-builder-content active" data-vertical-menu="750px">
                                                        <a href="faq" class="ekit-menu-nav-link active">
                                                            F.A.Q.
                                                        </a>
                                                    </li>
            ';
        }
        else {
            $section_menu = $section_menu . '
                                                    <li id="menu-item menu-item-type-post_type menu-item-object-page menu-item-26978 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                                        <a href="faq" class="ekit-menu-nav-link">
                                                            F.A.Q.
                                                        </a>
                                                    </li>
            ';
        }

        if ($_SERVER['PHP_SELF'] == strtolower("/contact.php")) {
            $section_menu = $section_menu . '
                                                    <li id="menu-item-26975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1076 current_page_item menu-item-26975 nav-item elementskit-mobile-builder-content active" data-vertical-menu="750px">
                                                        <a href="contact" class="ekit-menu-nav-link active">
                                                            Contact Us
                                                        </a>
                                                    </li>
            ';
        }
        else {
            $section_menu = $section_menu . '
                                                    <li id="menu-item menu-item-type-post_type menu-item-object-page menu-item-26978 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                                        <a href="contact" class="ekit-menu-nav-link">
                                                            Contact Us
                                                        </a>
                                                    </li>
            ';
        }

        $section_menu = $section_menu . '
                                                    <li id="menu-item menu-item-type-post_type menu-item-object-page menu-item-26978 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                                        <a href="' . $path_latam . '" class="elementor-button-link elementor-button elementor-size-sm" id="store-button" role="button" style="height: 50px;
                                                        margin: 15px 0px 15px 0; color: #FFFFFF; font-size: 20px; font-family:Montserrat; background-color: var(--global-color-blue); border-style: solid; border-width: 0px 0px 0px 0px;">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">
                                                                    LATAM
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>

                                                <div class="elementskit-nav-identity-panel">
                                                    <div class="elementskit-site-title">
                                                        <a class="elementskit-nav-logo" href="' . $path . '" target="_self" rel>
                                                            <img width="400" height="132" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAACEAQAAAACW9EBYAAAAAnRSTlMAAHaTzTgAAAAdSURBVFjD7cGBAAAAAMOg+VNf4AhVAQAAAAAAwDcaTAABvFCOkwAAAABJRU5ErkJggg==" class="attachment-full size-full lazyload" alt data-src="/img/imagotipo.png" loading="lazy" data-srcset="/img/imagotipo.png 400w, /img/imagotipo.png 300w" data-sizes="auto">
                                                            <noscript>
                                                                <img width="400" height="132" src="/img/imagotipo.png" class="attachment-full size-full" alt srcset="/img/imagotipo.png 400w, /img/imagotipo.png 300w" sizes="(max-width: 400px) 100vw, 400px" data-eio="l">
                                                            </noscript>
                                                        </a>
                                                    </div>
                                                    <button class="elementskit-menu-close elementskit-menu-toggler" type="button">X</button>
                                                </div>
                                            </div>
                                            <div class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler ekit-nav-menu--overlay"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3114ee7f elementor-hidden-tablet elementor-hidden-phone" data-id="3114ee7f" data-element_type="column">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-2e16793 elementor-align-right elementor-widget elementor-widget-button" data-id="2e16793" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a href="store" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-float" id="store-button" role="button">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text">
                                                        plans
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ';

    $section_menu_latam = '
        <section class="elementor-section elementor-top-section elementor-element elementor-element-249711f4 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="249711f4" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;jet_sticky_section_sticky&quot;:&quot;yes&quot;,&quot;jet_sticky_section_sticky_visibility&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-row">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-21683e33" data-id="21683e33" data-element_type="column">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-63a395bd elementor-widget elementor-widget-image" data-id="63a395bd" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image">
                                            <a href="' . $path_latam . '">
                                                <img width="300" height="132" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAACEAQAAAACW9EBYAAAAAnRSTlMAAHaTzTgAAAAdSURBVFjD7cGBAAAAAMOg+VNf4AhVAQAAAAAAwDcaTAABvFCOkwAAAABJRU5ErkJggg==" class="attachment-full size-full lazyload img-header" alt data-src="/img/imagotipo.png" loading="lazy" data-srcset="/img/imagotipo.png 400w, /img/imagotipo.png 300w" data-sizes="auto">
                                                <noscript>
                                                    <img width="300" height="132" src="/img/imagotipo.png" class="attachment-full size-full" alt srcset="/img/imagotipo.png 400w, /img/imagotipo.png 300w" sizes="(max-width: 300px) 100vw, 300px"
                                                    data-eio="l">
                                                </noscript>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-312bf48c" data-id="312bf48c" data-element_type="column">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-5c3405d elementor-widget elementor-widget-ekit-nav-menu" data-id="5c3405d" data-element_type="widget" data-widget_type="ekit-nav-menu.default">
                                    <div class="elementor-widget-container">
                                        <div class="ekit-wid-con ekit_menu_responsive_tablet" data-hamburger-icon data-hamburger-icon-type="icon" data-responsive-breakpoint="1024"> 
                                            <button class="elementskit-menu-hamburger elementskit-menu-toggler">
                                                <span class="elementskit-menu-hamburger-icon"></span>
                                                <span class="elementskit-menu-hamburger-icon"></span>
                                                <span class="elementskit-menu-hamburger-icon"></span>
                                            </button>
                                            <div id="ekit-megamenu-menu-principal" class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default elementskit_line_arrow ekit-nav-menu-one-page-no ekit-nav-dropdown-hover">
                                                <ul id="menu-menu-principal" class="elementskit-navbar-nav elementskit-menu-po-right submenu-click-on-icon">
        ';

        if ($_SERVER['PHP_SELF'] == strtolower("/latam/index.php")) {
            $section_menu_latam = $section_menu_latam . '
                                                    <li id="menu-item-26975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1076 current_page_item menu-item-26975 nav-item elementskit-mobile-builder-content active" data-vertical-menu="750px">
                                                        <a href="' . $path_latam . '/" class="ekit-menu-nav-link active">
                                                            Inicio
                                                        </a>
                                                    <li>
            ';
        }
        else {
            $section_menu_latam = $section_menu_latam . '
                                                    <li id="menu-item menu-item-type-post_type menu-item-object-page menu-item-26978 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                                        <a href="' . $path_latam . '/" class="ekit-menu-nav-link">
                                                            Inicio
                                                        </a>
                                                    <li>
            ';
        }

        if ($_SERVER['PHP_SELF'] == strtolower("/latam/nosotros.php")) {
            $section_menu_latam = $section_menu_latam . '
                                                    <li id="menu-item-26975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1076 current_page_item menu-item-26975 nav-item elementskit-mobile-builder-content active" data-vertical-menu="750px">
                                                        <a href="' . $path_latam . '/nosotros" class="ekit-menu-nav-link active">
                                                            Quienes Somos
                                                        </a>
                                                    </li>
            ';
        }
        else {
            $section_menu_latam = $section_menu_latam . '
                                                    <li id="menu-item menu-item-type-post_type menu-item-object-page menu-item-26978 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                                        <a href="' . $path_latam . '/nosotros" class="ekit-menu-nav-link">
                                                            Quienes Somos
                                                        </a>
                                                    </li>
            ';
        }

        if ($_SERVER['PHP_SELF'] == strtolower("/latam/resultados.php")) {
            $section_menu_latam = $section_menu_latam . '
                                                    <li id="menu-item-26975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1076 current_page_item menu-item-26975 nav-item elementskit-mobile-builder-content active" data-vertical-menu="750px">
                                                        <a href="' . $path_latam . '/resultados" class="ekit-menu-nav-link active">
                                                            Resultados
                                                        </a>
                                                    </li>
            ';
        }
        else {
            $section_menu_latam = $section_menu_latam . '
                                                    <li id="menu-item menu-item-type-post_type menu-item-object-page menu-item-26978 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                                        <a href="' . $path_latam . '/resultados" class="ekit-menu-nav-link">
                                                            Resultados
                                                        </a>
                                                    </li>
            ';
        }

        if ($_SERVER['PHP_SELF'] == strtolower("/latam/tienda.php")) {
            $section_menu_latam = $section_menu_latam . '
                                                    <li id="menu-item-26975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1076 current_page_item menu-item-26975 nav-item elementskit-mobile-builder-content active" data-vertical-menu="750px">
                                                        <a href="' . $path_latam . '/tienda" class="ekit-menu-nav-link active">
                                                            Tienda
                                                        </a>
                                                    </li>
            ';
        }
        else {
            $section_menu_latam = $section_menu_latam . '
                                                    <li id="menu-item menu-item-type-post_type menu-item-object-page menu-item-26978 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                                        <a href="' . $path_latam . '/tienda" class="ekit-menu-nav-link">
                                                            Tienda
                                                        </a>
                                                    </li>
            ';
        }

        if ($_SERVER['PHP_SELF'] == strtolower("/latam/preguntas-y-respuestas.php")) {
            $section_menu_latam = $section_menu_latam . '
                                                    <li id="menu-item-26975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1076 current_page_item menu-item-26975 nav-item elementskit-mobile-builder-content active" data-vertical-menu="750px">
                                                        <a href="' . $path_latam . '/preguntas-y-respuestas" class="ekit-menu-nav-link active">F.A.Q</a>
                                                    </li>
            ';
        }
        else {
            $section_menu_latam = $section_menu_latam . '
                                                    <li id="menu-item menu-item-type-post_type menu-item-object-page menu-item-26978 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                                        <a href="' . $path_latam . '/preguntas-y-respuestas" class="ekit-menu-nav-link">F.A.Q</a>
                                                    </li>
            ';
        }

        if ($_SERVER['PHP_SELF'] == strtolower("/latam/contacto.php")) {
            $section_menu_latam = $section_menu_latam . '
                                                    <li id="menu-item-26975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1076 current_page_item menu-item-26975 nav-item elementskit-mobile-builder-content active" data-vertical-menu="750px">
                                                        <a href="' . $path_latam . '/contacto" class="ekit-menu-nav-link active">
                                                            Contacto
                                                        </a>
                                                    </li>
            ';
        }
        else {
            $section_menu_latam = $section_menu_latam . '
                                                    <li id="menu-item menu-item-type-post_type menu-item-object-page menu-item-26978 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                                        <a href="' . $path_latam . '/contacto" class="ekit-menu-nav-link">
                                                            Contacto
                                                        </a>
                                                    </li>
            ';
        }

        $section_menu_latam = $section_menu_latam . '
                                                    <br><br>
                                                    <li id="menu-item menu-item-type-post_type menu-item-object-page menu-item-26978 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px" class="elementor-hidden-desktop">
                                                        <a href="' . $path . '" class="ekit-menu-nav-link lang-en" data-lang="en" style="color:#000000 !important; text-decoration:underline !important; font-weight:bold !important;">
                                                            ENG&nbsp;&nbsp;<span class="fi fi-us"></span>
                                                        </a>
                                                    </li>
                                                </ul>

                                                <div class="elementskit-nav-identity-panel">
                                                    <div class="elementskit-site-title">
                                                        <a class="elementskit-nav-logo" href="/latam/" target="_self" rel>
                                                            <img width="400" height="132" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAACEAQAAAACW9EBYAAAAAnRSTlMAAHaTzTgAAAAdSURBVFjD7cGBAAAAAMOg+VNf4AhVAQAAAAAAwDcaTAABvFCOkwAAAABJRU5ErkJggg==" class="attachment-full size-full lazyload" alt data-src="/img/imagotipo.png" loading="lazy" data-srcset="/img/imagotipo.png 400w, /img/imagotipo.png 300w" data-sizes="auto">
                                                            <noscript>
                                                                <img width="400" height="132" src="/img/imagotipo.png" class="attachment-full size-full" alt srcset="/img/imagotipo.png 400w, /img/imagotipo.png 300w" sizes="(max-width: 400px) 100vw, 400px" data-eio="l">
                                                            </noscript>
                                                        </a>
                                                    </div>
                                                    <button class="elementskit-menu-close elementskit-menu-toggler" type="button">X</button>
                                                </div>
                                            </div>
                                            <div class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler ekit-nav-menu--overlay"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3114ee7f elementor-hidden-tablet elementor-hidden-phone" data-id="3114ee7f" data-element_type="column">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-2e16793 elementor-align-right elementor-widget elementor-widget-button" data-id="2e16793" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a href="' . $path_latam . '/tienda" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-float" id="store-button" role="button">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text">
                                                        planes
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ';

    $section_risk_statement = '
        <section class="elementor-section elementor-top-section elementor-element elementor-element-3935f19 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3935f19" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3757b9f" data-id="3757b9f" data-element_type="column">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-5275abf elementor-widget elementor-widget-spacer" data-id="5275abf" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="elementor-element elementor-element-390d620 elementor-widget elementor-widget-accordion" data-id="390d620" data-element_type="widget" data-widget_type="accordion.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-accordion" role="tablist">
                                            <div class="elementor-accordion-item">
                                                <div id="elementor-tab-title-5981" class="elementor-tab-title" data-tab="1" role="tab" aria-controls="elementor-tab-content-5981" aria-expanded="false">
                                                    <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
                                                        <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
                                                        <span class="elementor-accordion-icon-opened"><i class="fas fa-caret-up"></i></span>
                                                    </span>
                                                    <a class="elementor-accordion-title" href>
                                                        <div class="en">RISK STATEMENT:</div>
                                                        <div class="es">DECLARACI&oacute;N DE RIESGO:</div>
                                                    </a>
                                                </div>
                                                <div id="elementor-tab-content-5981" class="elementor-tab-content elementor-clearfix" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-5981">
                                                    <div style="text-align: justify;">
                                                        <p class="en">
                                                            Between 74% and 89% of retail investor accounts lose money when trading CFDs. You should consider whether you can afford to take the high risk of losing your money.
                                                            <br>
                                                            Trading Forex/CFDs and other derivatives is highly speculative and carries a high level of risk. It is possible to lose all your capital. These products may not be suitable for everyone and you should make sure you understand the risks involved. Seek independent advice if necessary. Speculate only with funds you can afford to lose.
                                                            <br>
                                                            ' . $brand_uppercase . ' does not offer trading ideas, trading suggestions or any investment advice. We are an educational community and a research community. Our posts, blogs and thoughts are our own and should not be taken as any kind of advice to buy or sell a stock or futures contract or anything.
                                                        </p>
                                                        <p class="es">
                                                            Entre el 74% y el 89% de las cuentas de inversores minoristas pierden dinero al operar con CFD. Debe considerar si puede permitirse asumir el alto riesgo de perder su dinero.
                                                            <br>
                                                            El comercio de Forex/CFD y otros derivados es altamente especulativo y conlleva un alto nivel de riesgo. Es posible perder todo su capital. Es posible que estos productos no sean adecuados para todos y debe asegurarse de comprender los riesgos involucrados. Busque asesoramiento independiente si es necesario. Especule solo con fondos que pueda permitirse perder.
                                                            <br>
                                                            ' . $brand_uppercase . ' no ofrece ideas comerciales, sugerencias comerciales ni ningún consejo de inversión. Somos una comunidad educativa y una comunidad de investigación. Nuestras publicaciones, blogs y pensamientos son nuestros y no deben tomarse como ningún tipo de consejo para comprar o vender un contrato de valores o futuros, ni nada.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="elementor-element elementor-element-1ca1880 elementor-widget elementor-widget-spacer" data-id="1ca1880" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="elementor-section elementor-top-section elementor-element elementor-element-910ae46 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="910ae46" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ab6131c" data-id="ab6131c" data-element_type="column">
                        <div class="elementor-column-wrap">
                            <div class="elementor-widget-wrap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ';

    $section_risk_statement_latam = '
        <section class="elementor-section elementor-top-section elementor-element elementor-element-3935f19 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3935f19" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3757b9f" data-id="3757b9f" data-element_type="column">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-5275abf elementor-widget elementor-widget-spacer" data-id="5275abf" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="elementor-element elementor-element-390d620 elementor-widget elementor-widget-accordion" data-id="390d620" data-element_type="widget" data-widget_type="accordion.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-accordion" role="tablist">
                                            <div class="elementor-accordion-item">
                                                <div id="elementor-tab-title-5981" class="elementor-tab-title" data-tab="1" role="tab" aria-controls="elementor-tab-content-5981" aria-expanded="false">
                                                    <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
                                                        <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
                                                        <span class="elementor-accordion-icon-opened"><i class="fas fa-caret-up"></i></span>
                                                    </span>
                                                    <a class="elementor-accordion-title" href>
                                                        <div class="en">RISK STATEMENT:</div>
                                                        <div class="es">DECLARACI&oacute;N DE RIESGO:</div>
                                                    </a>
                                                </div>
                                                <div id="elementor-tab-content-5981" class="elementor-tab-content elementor-clearfix" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-5981">
                                                    <div style="text-align: justify;">
                                                        <p class="en">
                                                            Between 74% and 89% of retail investor accounts lose money when trading CFDs. You should consider whether you can afford to take the high risk of losing your money.
                                                            <br>
                                                            Trading Forex/CFDs and other derivatives is highly speculative and carries a high level of risk. It is possible to lose all your capital. These products may not be suitable for everyone and you should make sure you understand the risks involved. Seek independent advice if necessary. Speculate only with funds you can afford to lose.
                                                            <br>
                                                            ' . $brand_uppercase . ' does not offer trading ideas, trading suggestions or any investment advice. We are an educational community and a research community. Our posts, blogs and thoughts are our own and should not be taken as any kind of advice to buy or sell a stock or futures contract or anything.
                                                        </p>
                                                        <p class="es">
                                                            Entre el 74% y el 89% de las cuentas de inversores minoristas pierden dinero al operar con CFD. Debe considerar si puede permitirse asumir el alto riesgo de perder su dinero.
                                                            <br>
                                                            El comercio de Forex/CFD y otros derivados es altamente especulativo y conlleva un alto nivel de riesgo. Es posible perder todo su capital. Es posible que estos productos no sean adecuados para todos y debe asegurarse de comprender los riesgos involucrados. Busque asesoramiento independiente si es necesario. Especule solo con fondos que pueda permitirse perder.
                                                            <br>
                                                            ' . $brand_uppercase . ' no ofrece ideas comerciales, sugerencias comerciales ni ningún consejo de inversión. Somos una comunidad educativa y una comunidad de investigación. Nuestras publicaciones, blogs y pensamientos son nuestros y no deben tomarse como ningún tipo de consejo para comprar o vender un contrato de valores o futuros, ni nada.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="elementor-element elementor-element-1ca1880 elementor-widget elementor-widget-spacer" data-id="1ca1880" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="elementor-section elementor-top-section elementor-element elementor-element-910ae46 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="910ae46" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ab6131c" data-id="ab6131c" data-element_type="column">
                        <div class="elementor-column-wrap">
                            <div class="elementor-widget-wrap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ';

    $section_footer = '
        <div class="ekit-template-content-markup ekit-template-content-footer ekit-template-content-theme-support">
            <div data-elementor-type="wp-post" data-elementor-id="27713" class="elementor elementor-27713" data-elementor-settings="[]">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-76e4991f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="76e4991f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-35535d41" data-id="35535d41" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-7bc23d3d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7bc23d3d" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-21fa9571" data-id="21fa9571" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-7ba82d88 elementor-widget elementor-widget-text-editor" data-id="7ba82d88" data-element_type="widget" data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-text-editor elementor-clearfix">
                                                                                    <p>' . $brand_camelcase . '</p>
                                                                                    <p>Company of direction, management and maintenance of trading EA</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="elementor-element elementor-element-ebe888d elementor-icon-list--layout-inline elementor-align-left elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="ebe888d" data-element_type="widget" data-widget_type="icon-list.default">
                                                                            <div class="elementor-widget-container">
                                                                                <ul class="elementor-icon-list-items elementor-inline-items">
                                                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                                                        <span class="elementor-icon-list-text">
                                                                                            Follow us:
                                                                                        </span>
                                                                                    </li>

                                                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                                                        <a href="' . $url_telegram . '" target="_blank">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i class="ri-telegram-fill"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text"></span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                                                        <a href="' . $url_instagram . '" target="_blank">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i class="ri-instagram-line"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text"></span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                                                        <a href="' . $url_twitter . '" target="_blank">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i class="ri-twitter-fill"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text"></span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                                                        <a href="' . $url_discord . '" target="_blank">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i class="ri-discord-fill"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text"></span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-71b33db2" data-id="71b33db2" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-5778d742 elementor-widget elementor-widget-heading" data-id="5778d742" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">Legal</h2>
                                                                            </div>
                                                                        </div>

                                                                        <div class="elementor-element elementor-element-23f33425 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="23f33425" data-element_type="widget" data-widget_type="icon-list.default">
                                                                            <div class="elementor-widget-container">
                                                                                <ul class="elementor-icon-list-items">
                                                                                    <!--
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i aria-hidden="true" class="fas fa-angle-right"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text">
                                                                                                Legal Warning
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    -->

                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="privacy-policy">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i aria-hidden="true" class="fas fa-angle-right"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text">
                                                                                                Privacy Policy
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="cookies-policy">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i aria-hidden="true" class="fas fa-angle-right"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text">
                                                                                                Cookies Policy
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <!--
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i aria-hidden="true" class="fas fa-angle-right"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text">
                                                                                                Terms & Conditions
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    -->
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6011e049" data-id="6011e049" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-63e23787 elementor-widget elementor-widget-heading" data-id="63e23787" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                                    Menu
                                                                                </h2>
                                                                            </div>
                                                                        </div>

                                                                        <div class="elementor-element elementor-element-34c242 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="34c242" data-element_type="widget" data-widget_type="icon-list.default">
                                                                            <div class="elementor-widget-container">
                                                                                <ul class="elementor-icon-list-items">
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="about-us">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i aria-hidden="true" class="fas fa-angle-right"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text">
                                                                                                About Us
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="store">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i aria-hidden="true" class="fas fa-angle-right"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text">
                                                                                                Store
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="faq">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i aria-hidden="true" class="fas fa-angle-right"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text">F.A.Q.</span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="contact">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i aria-hidden="true" class="fas fa-angle-right"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text">
                                                                                                Contact us
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1f9921b8" data-id="1f9921b8" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-1f45ab95 elementor-widget elementor-widget-heading" data-id="1f45ab95" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">Newsletter</h2>
                                                                            </div>
                                                                        </div>

                                                                        <div class="elementor-element elementor-element-3e49dec1 elementor-widget elementor-widget-text-editor" data-id="3e49dec1" data-element_type="widget" data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Coming Soon</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                                <div class="elementor-element elementor-element-593cc89c elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="593cc89c" data-element_type="widget" data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-6b2d055d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6b2d055d" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-24f8c874" data-id="24f8c874" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-4e7446b6 elementor-widget elementor-widget-text-editor" data-id="4e7446b6" data-element_type="widget" data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Copyright © ' . date("Y") . '. All rights reserved.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    ';

    $section_footer_latam = '
        <div class="ekit-template-content-markup ekit-template-content-footer ekit-template-content-theme-support">
            <div data-elementor-type="wp-post" data-elementor-id="27713" class="elementor elementor-27713" data-elementor-settings="[]">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-76e4991f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="76e4991f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-35535d41" data-id="35535d41" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-7bc23d3d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7bc23d3d" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-21fa9571" data-id="21fa9571" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-7ba82d88 elementor-widget elementor-widget-text-editor" data-id="7ba82d88" data-element_type="widget" data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-text-editor elementor-clearfix">
                                                                                    <p>' . $brand_camelcase . '</p>
                                                                                    <p>Empresa de creaci&oacute;n, gesti&oacute;n y mantenimiento de EA de trading</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="elementor-element elementor-element-ebe888d elementor-icon-list--layout-inline elementor-align-left elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="ebe888d" data-element_type="widget" data-widget_type="icon-list.default">
                                                                            <div class="elementor-widget-container">
                                                                                <ul class="elementor-icon-list-items elementor-inline-items">
                                                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                                                        <span class="elementor-icon-list-text">
                                                                                            S&iacute;guenos:
                                                                                        </span>
                                                                                    </li>

                                                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                                                        <a href="' . $url_telegram . '" target="_blank">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i class="ri-telegram-fill"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text"></span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                                                        <a href="' . $url_instagram . '" target="_blank">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i class="ri-instagram-line"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text"></span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                                                        <a href="' . $url_twitter . '" target="_blank">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i class="ri-twitter-fill"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text"></span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                                                        <a href="' . $url_discord . '" target="_blank">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i class="ri-discord-fill"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text"></span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-71b33db2" data-id="71b33db2" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-5778d742 elementor-widget elementor-widget-heading" data-id="5778d742" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">Legal</h2>
                                                                            </div>
                                                                        </div>

                                                                        <div class="elementor-element elementor-element-23f33425 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="23f33425" data-element_type="widget" data-widget_type="icon-list.default">
                                                                            <div class="elementor-widget-container">
                                                                                <ul class="elementor-icon-list-items">
                                                                                    <!--
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i aria-hidden="true" class="fas fa-angle-right"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text">
                                                                                                Aviso Legal
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    -->

                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="politica-de-privacidad">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i aria-hidden="true" class="fas fa-angle-right"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text">
                                                                                                Pol&iacute;tica de Privacidad
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="politica-de-cookies">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i aria-hidden="true" class="fas fa-angle-right"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text">
                                                                                                Pol&iacute;tica de Cookies
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <!--
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i aria-hidden="true" class="fas fa-angle-right"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text">
                                                                                                T&eacute;rminos y Condiciones
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    -->
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6011e049" data-id="6011e049" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-63e23787 elementor-widget elementor-widget-heading" data-id="63e23787" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                                    Men&uacute;
                                                                                </h2>
                                                                            </div>
                                                                        </div>

                                                                        <div class="elementor-element elementor-element-34c242 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="34c242" data-element_type="widget" data-widget_type="icon-list.default">
                                                                            <div class="elementor-widget-container">
                                                                                <ul class="elementor-icon-list-items">
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="nosotros">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i aria-hidden="true" class="fas fa-angle-right"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text">
                                                                                                ¿Quieres Somos?
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="tienda">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i aria-hidden="true" class="fas fa-angle-right"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text">
                                                                                                Tienda
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="preguntas-y-respuestas">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i aria-hidden="true" class="fas fa-angle-right"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text">F.A.Q.</span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="contacto">
                                                                                            <span class="elementor-icon-list-icon">
                                                                                                <i aria-hidden="true" class="fas fa-angle-right"></i>
                                                                                            </span>
                                                                                            <span class="elementor-icon-list-text">
                                                                                                Contacto
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1f9921b8" data-id="1f9921b8" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-1f45ab95 elementor-widget elementor-widget-heading" data-id="1f45ab95" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">Newsletter</h2>
                                                                            </div>
                                                                        </div>

                                                                        <div class="elementor-element elementor-element-3e49dec1 elementor-widget elementor-widget-text-editor" data-id="3e49dec1" data-element_type="widget" data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Pr&oacute;ximamente</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                                <div class="elementor-element elementor-element-593cc89c elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="593cc89c" data-element_type="widget" data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-6b2d055d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6b2d055d" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-24f8c874" data-id="24f8c874" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-4e7446b6 elementor-widget elementor-widget-text-editor" data-id="4e7446b6" data-element_type="widget" data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Copyright © ' . date("Y") . '. Todos los derechos reservados.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    ';
?>