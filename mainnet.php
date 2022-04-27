<?php include './functions/fn.php'; ?>
<?php include 'lang/lang_session.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="next-head-count" content="3" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="./stream.ico?v=1.1">

    <title>StreamCoin Mainnet Blockchain Solutions</title>
    <meta name="description" content="StreamCoin Mainnet is being developed to include enhanced features that benefit streamers and viewers alike.">
    <link rel="stylesheet" href="<?= asset('css/owl.carousel.min.css') ?>" />
    <link rel="stylesheet" href="<?= asset('css/owl.theme.default.min.css') ?>" />
    <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('css/style.min.css?ver=22.12') ?>" rel="stylesheet">
    <link href="<?= asset('css/responsive.css?ver=22.2') ?>" rel="stylesheet">
    <link href="<?= asset('font-awesome/css/all.min.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700;800&display=swap" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-684RKD1PES"></script>
    <meta name="naver-site-verification" content="7faa55049f13a3092e99e8847baa8300377021ae" />
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-684RKD1PES');
    </script>

    <style type="text/css">
        @media screen and (max-width: 768px) {
            .technology-page .hero h1 {
                font-size: 24px !important;
                line-height: 38px;
                margin: 0 0 30px;
            }
        }
    </style>
</head>

<body>
    <script>
        function changeLang(lang) {

            // document.getElementById('form_lang').submit();
        }

        function changeLanguage(lang) {
            window.location.href = "<?= ROUTE_PHP_SELF; ?>" + lang + "/mainnet"
        }
    </script>
    <!-- Code here -->

    <div class="technology-page">

        <!----Navbar Sec---->
        <div id="nav-parent">
            <?php include './nav.php'; ?>
        </div>

        <div class="bg">
            <section class="hero">
                <div class="floating-icons">
                    <img src="<?= asset('img/banner/ball_icon.png') ?>" alt="img">
                    <img src="<?= asset('img/icons/dot.png') ?>" alt="img">
                </div>
                <div class="container text-center text-lg-left">
                    <div class="row">
                        <div class="col-12 col-lg-6 col-md-12 col-sm-12">
                            <h1><?= _technology_hero_h1 ?></h1>
                            <p><?= _technology_hero_p ?></p>
                        </div>
                        <div class="col-12 col-lg-6 col-md-12 col-sm-12 text-center text-lg-right">
                            <!-- Video -->
                            <img src="<?= asset('img/technology-page/hero-image-v-2.png?v=1.1') ?>" class="img-fluid mt-3 mt-lg-0 d-none d-md-block d-lg-block" alt="hero-image">
                        </div>
                    </div>
                </div>
            </section>
            <section class="features">
                <div class="floating-icons">
                    <img src="<?= asset('img/icons/circle-check.svg') ?>" alt="img">
                    <img src="<?= asset('img/start/star_n.png') ?>" height="90" alt="img">
                </div>
                <div class="container">
                    <div class="row">
                        <?php
                        $fontSize = "";
                        if (
                            (isset($_SESSION['lang']) && $_SESSION['lang'] == "ru") ||
                            (isset($_GET['lang']) && $_GET['lang'] == "ru")
                        ) {
                            $fontSize = "f-sm";
                        }
                        $featurePoints = array(
                            [
                                "title" => _technology_feature_decentralized_h4,
                                "description" => _technology_feature_decentralized_p,
                                "color" => "",
                            ],
                            [
                                "title" => _technology_feature_tokenized_h4,
                                "description" => _technology_feature_tokenized_p,
                                "color" => "clr-red",
                            ],
                            [
                                "title" => _technology_feature_compatible_h4,
                                "description" => _technology_feature_compatible_p,
                                "color" => "clr-orange",
                            ],
                            [
                                "title" => _technology_feature_scaleable_h4,
                                "description" => _technology_feature_scaleable_p,
                                "color" => "clr-blue",
                            ],
                        );
                        foreach ($featurePoints as $key => &$featurePoint) {
                        ?>
                            <div class="col-12 col-lg-3 col-md-6 col-sm-6 _box">
                                <img src="<?= asset('img/technology-page/feature-' . ($key + 1) . '.svg') ?>" alt="feature-<?= ($key + 1) ?>-image">
                                <h4 class="<?= $featurePoint['color'] ?> <?= $fontSize ?>"><?= $featurePoint['title'] ?></h4>
                                <p><?= $featurePoint['description'] ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <section class="mainnet-section">
                <div class="floating-icons">
                    <img src="<?= asset('img/banner/w_icon.png') ?>" height="115" alt="img">
                    <img src="<?= asset('img/icons/smily-flat.png') ?>" alt="img">
                    <img src="<?= asset('img/token_sale/tokenicon_3.png') ?>" alt="img" height="130">
                </div>
                <div class="container">
                    <div class="head">
                        <h2><?= _technology_mainnet_dection_head_h2 ?></h2>
                        <p><?= _technology_mainnet_dection_head_p ?></p>
                    </div>
                    <div class="body">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-12 col-lg-5 text-center text-md-left">
                                <!-- Image -->
                                <img src="<?= asset('img/technology-page/NFT-Marketplace-image.png') ?>" alt="NFT-Marketplace-image" class="mig-fluid">
                            </div>
                            <div class="col-12 col-md-12 col-lg-7 text-center text-lg-left mt-5 mt-lg-0">
                                <h3><?= _technology_mainnet_dection_body_h3 ?></h3>
                                <p><?= _technology_mainnet_dection_body_p ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include "./includes/footer.php" ?>
    </div>
    <!-- Back to top button -->
    <a id="button"><i class="fas fa-chevron-up"></i></a>


    <script src="<?= asset('js/jquery.js') ?>"></script>
    <script src="<?= asset('js/owl.carousel.min.js') ?>"></script>
    <script src="<?= asset('js/custom.js?ver=10.10') ?>"></script>
    <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
</body>

</html>