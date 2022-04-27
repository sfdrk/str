<?php include './functions/fn.php'; ?>
<?php include './lang/lang_session.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="next-head-count" content="3" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="<?= asset('stream.ico?v=1.1') ?>">
    <title><?= _homepage_meta_title ?></title>
    <meta name="description" content="<?= _homepage_meta_description ?>">
    <meta name="keywords" content="Stream Coin, Stream, STRM, STREAM, Streamcoin">
    <link rel="canonical" href="https://stream-coin.com/">
    <link rel="stylesheet" href="<?= asset('css/owl.carousel.min.css') ?>" />
    <link rel="stylesheet" href="<?= asset('css/owl.theme.default.min.css') ?>" />
    <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('css/style.min.css?ver=23.1') ?>" rel="stylesheet">
    <link href="<?= asset('css/responsive.css?ver=22.5') ?>" rel="stylesheet"> 
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
    <script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Stream-coin",
            "item": "https://stream-coin.com/"
        }, {
            "@type": "ListItem",
            "position": 2,
            "name": "Technology",
            "item": "https://stream-coin.com/technology.php"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Corporation",
        "name": "STREAM COIN",
        "url": "https://stream-coin.com/",
        "logo": "https://stream-coin.com/img/logostream1.png",
        "alternateName": "STREAM",
        "sameAs": [
            "https://www.facebook.com/streamcoinofficial/",
            "https://twitter.com/streamcoin_strm",
            "https://www.linkedin.com/company/streamcoin/",
            "https://www.youtube.com/channel/UCquV6y3rcgPIB_zlqxrFhYw",
            "https://www.instagram.com/streamcoinofficial/"
        ]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "VideoObject",
        "name": "Stream Coin — All-In-One Live Streaming Network",
        "description": "MeiTalk, a Blockchain-based platform that allows multi-streaming, real-time auto-translation, and crypto earnings called STREAM (STRM).",
        "thumbnailUrl": [
            "https://stream-coin.com/img/ifram_overlay1.png"
        ],
        "uploadDate": "2021-12-07",
        "contentUrl": "https://youtu.be/0wL61AwWJ00",
        "embedUrl": "https://www.youtube.com/embed/0wL61AwWJ00",
        "publisher": {
            "@type": "Organization",
            "name": "STREAM-COIN",
            "logo": {
                "@type": "ImageObject",
                "url": "https://stream-coin.com/img/logostream1.png",
                "width": "",
                "height": ""
            }
        },
        "duration": "PT00M46S"
    }
    </script>




</head>

<body>
    <script>
    function changeLang(lang) {

        // document.getElementById('form_lang').submit();
    }

    function changeLanguage(lang) {
        window.location.href = "<?= ROUTE_PHP_SELF; ?>" + lang + "/"
    }
    </script>

    <!----Navbar Sec---->
    <div id="nav-parent">
        <?php include './nav.php'; ?>
    </div>


    <!---------Banner Sec---------->
    <section id="home">
        <div id="bannervh">
            <div class="overlayone">
                <div class="banner-icons d-none d-lg-block">
                    <!-- <img height="116px" src="img/banner/w_icon.png" alt="img"> -->
                    <img height="110px" src="<?= asset('img/token_sale/tiktok.png') ?>" alt="img">
                </div>
                <div class="container px-0">
                    <div class="row justify-content-center align-items-center ">
                        <div class="col-md-12">
                            <div class="banner_content">
                                <div class="banner-inner">
                                    <div class="banner-icons d-none d-lg-block">
                                        <img height="74px" src="<?= asset('img/banner/w_icon.png') ?>" alt="img">
                                        <img src="<?= asset('img/token_sale/twitch.png') ?>" alt="img">
                                        <img src="<?= asset('img/icons/dot.png') ?>" alt="img">
                                    </div>
                                    <div class="text-content">
                                        <?= _landingheading; ?>
                                        <a href="<?= route(_whitepaperfile, false); ?>" class="btn text-center"
                                            target="_blank"> <?= _whitepaper; ?></a>
                                        <div class="cleartip"></div>
                                        <p class="mb-3 mb-lg-2 mt-5"><?= _contact ?></p>
                                        <div
                                            class="d-lg-flex justify-content-center justify-content-lg-start social-tk-link">
                                            <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target=".bs-example-modal-new">Open Modal</button> -->
                                            <a class="mt-0 mr-lg-3 t-icon" data-toggle="modal"
                                                data-target=".bs-example-modal-new">
                                                <i class="fab fa-telegram-plane"></i>
                                                Telegram
                                            </a>



                                            <div id="telegram_modal" class="modal bs-example-modal-new" tabindex="-1"
                                                role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                                                <div class="modal-dialog">

                                                    <!-- Modal Content: begins -->
                                                    <div class="modal-content">

                                                        <!-- Modal Body -->
                                                        <div class="modal-body">
                                                            <button type="button" class="close cross_btn"
                                                                data-dismiss="modal" aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                            <div class="body-message">
                                                                <?= _country_txt ?>


                                                                <ul>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/StreamCoin_Official_Community">
                                                                            <img src="<?= asset('img/telegram_popup/global.png') ?>"
                                                                                alt="img">
                                                                            <?= _global_con ?>

                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcoinindia">
                                                                            <img src="<?= asset('img/telegram_popup/india.png') ?>"
                                                                                alt="img">
                                                                            <?= _india_con ?>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcoinfilipino">
                                                                            <img src="<?= asset('img/telegram_popup/philippines.png') ?>"
                                                                                alt="img">
                                                                            <?= _philippines_con ?>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcoinpakistan">
                                                                            <img src="<?= asset('img/telegram_popup/pakistan.png') ?>"
                                                                                alt="img">
                                                                            <?= _pakistan_con ?>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcoinrussia">
                                                                            <img src="<?= asset('img/telegram_popup/russia.png') ?>"
                                                                                alt="img">
                                                                            <?= _russia_con ?>

                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcoinmena">
                                                                            <img src="<?= asset('img/telegram_popup/mena.png') ?>"
                                                                                alt="img">
                                                                            <?= _mena_con ?>

                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href=" https://t.me/streamcoinfrench">
                                                                            <img src="<?= asset('img/telegram_popup/france.png') ?>"
                                                                                alt="img">

                                                                            <?= _france_con ?>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcoinindonesia">
                                                                            <img src="<?= asset('img/telegram_popup/indonesia.png') ?>"
                                                                                alt="img">

                                                                            <?= _indonesia_con ?>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcoinkorean">
                                                                            <img src="<?= asset('img/telegram_popup/korea.png') ?>"
                                                                                alt="img">

                                                                            <?= _korea_con ?>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcoinjapan">
                                                                            <img src="<?= asset('img/telegram_popup/japan.png') ?>"
                                                                                alt="img">

                                                                            <?= _japan_con ?>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcoinchina">
                                                                            <img src="<?= asset('img/telegram_popup/china.png') ?>"
                                                                                alt="img">

                                                                            <?= _china_con ?>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcoinspain">
                                                                            <img src="<?= asset('img/telegram_popup/espanol.png') ?>"
                                                                                alt="img">

                                                                            <?= _spain_con ?>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcoindutch">
                                                                            <img src="<?= asset('img/telegram_popup/dutch.png') ?>"
                                                                                alt="img">

                                                                            <?= _dutch_con ?>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcoingermany">
                                                                            <img src="<?= asset('img/telegram_popup/germany.png') ?>"
                                                                                alt="img">

                                                                            <?= _germany_con ?>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcointurkey">
                                                                            <img src="<?= asset('img/telegram_popup/turkey.png') ?>"
                                                                                alt="img">

                                                                            <?= _turkey_con ?>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcointhailand">
                                                                            <img src="<?= asset('img/telegram_popup/thailand.png') ?>"
                                                                                alt="img">

                                                                            <?= _thailand_con ?>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcoinromania">
                                                                            <img src="<?= asset('img/telegram_popup/romania.png') ?>"
                                                                                alt="img">

                                                                            <?= _romania_con ?>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcoinarabia">
                                                                            <img src="<?= asset('img/telegram_popup/saudi.png') ?>"
                                                                                alt="img">
                                                                            <?= _arabic_con ?>

                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcoinnigeria">
                                                                            <img src="<?= asset('img/telegram_popup/nigeria.png') ?>"
                                                                                alt="img">
                                                                            <?= _nigeria_con ?>

                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcoinnepal">
                                                                            <img src="<?= asset('img/telegram_popup/nepal.png') ?>"
                                                                                alt="img">

                                                                            <?= _nepal_con ?>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcoinbangladesh">
                                                                            <img src="<?= asset('img/telegram_popup/bangladesh.png') ?>"
                                                                                alt="img">
                                                                            <?= _bangladesh_con ?>

                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a target="_blank"
                                                                            href="https://t.me/streamcoinvietnam">
                                                                            <img src="<?= asset('img/telegram_popup/Vietnam.png') ?>"
                                                                                alt="img">
                                                                            <?= _vietnam_con ?>

                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

      										<a class="mt-3 mr-lg-3 mt-lg-0" target="_blank" style="background-color: #5865f2ba; box-shadow: 0 18px 42px #7e83f085;" 
                                                href="https://discord.gg/zNH8PHcP4n">
                                                <img src="<?= asset('img/social-icons/discord.svg') ?>" alt="">
                                                Discord
                                            </a>



                                            <a class="mt-3 mt-lg-0 k-icon" target="_blank"
                                                href="https://open.kakao.com/o/gpO7ww1d">
                                                <img src="<?= asset('img/social-icons/kakao-icon.png') ?>" alt="">
                                                KakaoTalk
                                            </a> &nbsp



                                      


                                        </div>
                                    </div>
                                    <div class="home-public-sale">
                                        <?php
                                        $para = _hdesc;
                                        include "./includes/stream-public-sale-content.php";
                                        ?>
                                    </div>
                                </div>





                                <!-- <div class="bannerifram_holder">
                                    <iframe width="100%" height="700" src="https://www.youtube.com/embed/0wL61AwWJ00"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                    <span><img src="<?= asset('img/ifram_overlay1.png') ?>"></span>
                                    <img class="imgicon1" src="<?= asset('img/token_sale/youtube.png') ?>" alt="img">
                                    <img class="imgicon2" src="<?= asset('img/token_sale/instagram.png') ?>" alt="img">
                                    <img class="imgicon3" src="<?= asset('img/token_sale/facebook.png') ?>" alt="img">
                                </div> -->


                            </div>
                        </div>
                    </div>
                </div>






                <div id="eco_sec">

                    <div class="col-12">
                        <div class="eco_explore_tv">


                            <div class="inner-wrapper2">

                                <video src="<?= asset('img/eco_system/eco_real_video.mp4') ?>" playsinline=""
                                    autoplay="" muted="" loop=""></video>

                            </div>








                            <div class="eco_nft_icons22">
                                <img src="<?= asset('img/start/like_icon.png') ?>">
                                <img src="<?= asset('img/banner/heart_icon.png') ?>">
                                <img src="<?= asset('img/connecting/connecting_commts.svg') ?>">
                                <img src="<?= asset('img/start/smml.png') ?>">
                            </div>

                        </div>
                    </div>


                </div>








            </div>
        </div>
    </section>



    <div class="bg_holder">
        <!---------Platform Sec---------->
        <!-- <section id="platform_sec">
            <div class="container">
                <div class="row justify-content-center align-items-center ">
                    <div class="col-md-12">
                        <div class="platform_content">
                            <?= _golivedesc; ?>
                            <div class="platform_holder">
                                <div class="platform_video">
                                    <video src="<?= asset('img/platforms/liveviewplatform-vid-v2.mp4') ?>"
                                        playsinline="" autoplay="" muted="" loop=""></video>
                                </div>
                                <div class="tri_icon "><img src="<?= asset('img/platforms/platform_tri.svg') ?>"
                                        alt="img"></div>
                                <div class="like_icon "><img src="<?= asset('img/platforms/like_icon.png') ?>"
                                        alt="img"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="platheart_icon "><img src="<?= asset('img/platforms/platform_heart.svg') ?>" alt="img"></div>
        </section> -->





        <!---------Connecting Sec---------->
        <!-- <section id="connecting_sec" class="d-block d-lg-none">
            <div class="container">
                <div class="row justify-content-center align-items-center ">


                    <div class="col-md-12">
                        <div class="platform_content">
                            <?= _connectinghead; ?>
                            <?= _connectingdesc; ?>
                            <div class="platform_holder">
                                <div class="connecting_video">
                                    <video width="600" height="100%" autoplay="" loop="" muted="" playsinline="">
                                        <source src="<?= asset('img/connecting/connecting_img-v2.webm') ?>" type="video/webm">
                                    </video>
                                </div>
                                <div class="connecting_videomob">
                                    <video width="100%" height="100%" autoplay="" loop="" muted="" playsinline="">
                                        <source src="<?= asset('img/connecting/connecting_mobtv.mp4') ?>" type="video/mp4">
                                    </video>
                                </div>
                                <div class="comment_icon "><img src="<?= asset('img/connecting/connecting_commts.svg') ?>" alt="img"></div>
                                <div class="like_icon "><img src="<?= asset('img/platforms/like_icon.png') ?>" alt="img"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="platheart_icon "><img src="<?= asset('img/platforms/platform_heart.svg') ?>" alt="img"></div>
        </section> -->






        <!---------stream tabs Sec---------->
        <!-- <div class="stream_tabs d-block d-lg-none" id="how_it_work">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="nav_tab_holder d-none d-lg-block">
                        </div>

                        <div class="tab-content" id="mytab_content">
                            <button class="d-block d-lg-none mobtab_button" id="mobtab_button3"><?= _multihead; ?></button>
                            <div>
                                <div class="mytab_contentholder">
                                    <?= _multidesc; ?>
                                    <img src="<?= asset('img/start/start3-v3.png?v=1.3') ?>" class="img-fluid" alt="Stream coin-multi platform streaming">

                                </div>
                            </div>
                            <button class="d-block d-lg-none mobtab_button" id="mobtab_button2"><?= _starthead; ?></button>
                            <div>
                                <div class="mytab_contentholder">
                                    <?= _startdesc; ?>
                                    <img loading="lazy" src="<?= asset('img/banner/start-your-live.png?v=1.2') ?>" class="img-fluid" alt="">
                                </div>

                            </div>
                            <button class="d-block d-lg-none mobtab_button" id="mobtab_button1"><?= _pickhead; ?></button>
                            <div>
                                <div class="mytab_contentholder">
                                    <?= _pickdesc; ?>
                                    <img src="<?= asset('img/start/pick1.png?v=1.3') ?>" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="streamtab_icons">
                <img src="<?= asset('img/start/heartt.png') ?>">
                <img src="<?= asset('img/connecting/connecting_commts.svg') ?>">
                <img src="<?= asset('img/platforms/platform_tri.svg') ?>">
                <img src="<?= asset('img/start/start_like.png') ?>">
            </div>
        </div> -->




        <section id="send_block">

            <div class="container">

                <div class="row justify-content-center align-items-center ">

                    <div id="eco_sec" class="eco_sec_pb pb-0">
                        <div class="eco_head d-none d-lg-block">
                            <?= _eco_head; ?>

                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="Stream_Platform" id="streamblockchain">
                            <?= _streamblockchainheading; ?>
                            <?= _streamblockchaindesc; ?>


                        </div>


                        <div class="blockchain_img">
                            <div class="blockchain_holder">

                                <div class="row">
                                    <div class="col-md-8 pr-md-5 pb-5">
                                        <img class="img-fluid" src="<?= asset('img/sendnreceive/feature_v1.png') ?>">
                                    </div>
                                    <div class="col-md-4 pl-md-5">
                                        <div class="blockchain_content">
                                            <img class="img-fluid"
                                                src="<?= asset('img/sendnreceive/block_icon1.png') ?>">
                                            <h5 style="color:#63BDFC"><?= _seamless_txt; ?></h5>
                                        </div>
                                        <div class="blockchain_content">
                                            <img class="img-fluid"
                                                src="<?= asset('img/sendnreceive/block_icon2.png') ?>">
                                            <h5 style="color:#37E465"><?= _sendstream_txt; ?></h5>
                                        </div>
                                        <div class="blockchain_content">
                                            <img class="img-fluid"
                                                src="<?= asset('img/sendnreceive/block_icon4.png') ?>">
                                            <h5 style="color:#FACB00"><?= _directviewer_txt; ?></h5>
                                        </div>
                                        <div class="blockchain_content">
                                            <img class="img-fluid"
                                                src="<?= asset('img/sendnreceive/block_icon3.png') ?>">
                                            <h5 style="color:#D8004D"><?= _highspeed_txt; ?></h5>
                                        </div>

                                    </div>
                                </div>






                            </div>
                            <a class="see_our_tech" href="<?= route(_technology_link) ?>"><?= _seetech; ?></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="sendblock_icons">
                <img src="<?= asset('img/start/playbtn.png') ?>">
                <img src="<?= asset('img/banner/heart_icon.png') ?>">
                <img src="<?= asset('img/start/heartt.png') ?>">
                <img src="<?= asset('img/start/like_icon.png') ?>">
            </div>
        </section>





        <!---------stream platform Sec---------->
        <section id="platform" class="pb-0">
            <div class="container">
                <div class="row justify-content-center align-items-center ">


                    <div class="col-md-12">
                        <div class="Stream_Platform">
                            <?= _mainnet_sec; ?>
                            <?= _mainnet_desc; ?>


                        </div>


                        <div class="s_platform_bg">
                            <img class="stream_circle img-fluid" src="<?= asset(_img_stream_nft_v1) ?>" alt="img">
                        </div>


                        <div class="exchange_img_mob2">
                            <img class="streamingplatform " src="<?= asset(_img_stream_nft_mob_1) ?>" alt="img">

                            <img class="streamingplatform " src="<?= asset(_img_stream_nft_mob_2) ?>" alt="img">
                        </div>


                    </div>
                </div>
            </div>
            <div class="platform_icons">
                <img src="<?= asset('img/start/hert.png') ?>">
                <img src="<?= asset('img/banner/ball_icon.png') ?>">
                <img src="<?= asset('img/start/start_star.png') ?>">
                <img src="<?= asset('img/receive/receivechat.png') ?>">
            </div>
        </section>

        <!---------stream platform Sec---------->
        <section id="stream_bridge" class="pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <h4><?= _strmcoin_h4; ?></h4>
                        <p><?= _strmcoin_p; ?></p>
                        <img class="img-fluid d-none d-lg-block" src="<?= asset('img/wlsc/strm_bridge1.png') ?>">

                        <img class="img-fluid d-block d-lg-none" src="<?= asset('img/wlsc/strm_bridge1mob.png') ?>">

                        <h4><?= _strmbridge_h4; ?></h4>
                        <p><?= _strmbridge_p; ?></p>
                        <img class="img-fluid mb-0 d-none d-lg-block" src="<?= asset('img/wlsc/strm_bridge2.png') ?>">

                        <img class="img-fluid mb-0 d-block d-lg-none" src="<?= asset('img/wlsc/strm_bridge2mob.png') ?>">

                    </div>
                </div>
            </div>
        </section>

        <!---------ECO system Sec---------->
        <section id="eco_sec" class="d-none d-lg-block pb-0">


            <div class="eco_nft_sec" id="nft_market">

                <div class="row align-items-center">



                    <div class="col-md-12">
                        <div class="eco_nft_content d-none d-lg-block">
                            <?= _eco_nft_content; ?>

                        </div>
                        <div class="eco_nft_content d-block d-lg-none">
                            <?= _eco_nft_content_2; ?>
                        </div>



                        <div class="col-12 d-block d-lg-none">
                            <div class="eco_explore_tv">


                                <div class="inner-wrapper2">

                                    <video src="<?= asset('img/eco_system/eco_real_video.mp4') ?>" playsinline=""
                                        autoplay="" muted="" loop=""></video>

                                </div>








                                <div class="eco_nft_icons2">
                                    <img src="<?= asset('img/start/like_icon.png') ?>">
                                    <img src="<?= asset('img/banner/heart_icon.png') ?>">
                                    <img src="<?= asset('img/connecting/connecting_commts.svg') ?>">
                                    <img src="<?= asset('img/start/smml.png') ?>">
                                </div>

                            </div>
                        </div>






                        <div class="container">
                            <div class="row align-items-center">



                                <div class="col-md-12">
                                    <div class="eco_nft_sideimg">
                                        <img class="d-none d-lg-block"
                                            src="<?= asset('img/eco_system/eco_nft2_v1.png') ?>" alt="img">
                                        <img class="d-block d-lg-none"
                                            src="<?= asset('img/eco_system/eco_nft2_mob.png') ?>" alt="img">
                                        <?= _eco_click_mint; ?>

                                    </div>
                                </div>

                                <!-- <div class="col-md-6">
                                    <div class="eco_nft_sideimg2">
                                        <img class="d-none d-lg-block" src="<?= asset('img/eco_system/eco_nft1.png') ?>" alt="img">
                                        <img class="d-block d-lg-none" src="<?= asset('img/eco_system/eco_nft1_mob.png') ?>" alt="img">
                                        <?= _eco_nft_stream; ?>

                                    </div>
                                </div> -->
                            </div>
                        </div>





                        <div class="eco_explore">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="eco_explore_content">
                                        <?= _eco_explore_content; ?>

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="eco_explore2">
                                        <img class="img-fluid" src="<?= asset('img/eco_system/eco_explore2.png') ?>"
                                            alt="img">

                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="eco_explore1">
                                        <img class="img-fluid" src="<?= asset('img/eco_system/eco_explore1.png') ?>"
                                            alt="img">

                                    </div>

                                </div>

                                <!-- <div class="container d-none d-lg-block">
                                    <div class="col-12">
                                        <div class="eco_explore_tv">


                                            <div class="inner-wrapper2">

                                                <video src="<?= asset('img/eco_system/eco_real_video.mp4') ?>"
                                                    playsinline="" autoplay="" muted="" loop=""></video>

                                            </div>








                                            <div class="eco_nft_icons2">
                                                <img src="<?= asset('img/start/like_icon.png') ?>">
                                                <img src="<?= asset('img/banner/heart_icon.png') ?>">
                                                <img src="<?= asset('img/connecting/connecting_commts.svg') ?>">
                                                <img src="<?= asset('img/start/smml.png') ?>">
                                            </div>

                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>



















                    </div>

                </div>




            </div>








        </section>






        <section id="eco_sec" class="d-none d-lg-block pb-0">


            <div class="experience-unqiue-section" id="meitalk-btn">
                <div class="container position-relative meitalk_holder">
                    <h3 class="mb-5"><?= _experience_h3 ?></h3>
                    <p style="padding: 0 10%;" class="d-none d-lg-block"><?= _eco_content1 ?></p>
                    <!--    <div class="gif-wrapper">
                        <div class="laptop-gif mb-0">
                            <div></div>
                        </div>
                        <div class="mobile-mockup d-none d-lg-block">
                            <div class="img-1">
                                <div class="img-2"></div>
                            </div>
                        </div>
                    </div> -->








                </div>
            </div>





            <p style="padding: 0 10%;" class="d-block d-lg-none mt-5"><?= _eco_content1 ?></p>



            <!---------hand video Sec---------->
            <div class="meitalk-video">
                <div class="container">
                    <!--   <h2><?= _link_platform ?></h2>
                        <p><?= _link_platform_desc ?></p> -->
                    <div class="inner-wrapper">
                        <video autoplay="" loop="" muted="" playsinline="">
                            <source src="<?= asset('img/eco_system/meitalk-vid.mp4') ?>" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
            <!---------hand video Sec---------->



            <div class="eco_meitalk_sec">
                <div class="container">

                    <div class="row justify-content-center align-items-center mb-5">
                        <div class="col-md-6 order-md-2">
                            <div class="eco_sideimg"><img src="<?= asset('img/eco_system/eco-side-1.png') ?>" alt="img">
                            </div>
                        </div>
                        <div class="col-md-6 order-md-1">
                            <div class="eco_content">
                                <?= _eco_content3; ?>

                                <div class="eco_arrow">
                                    <img src="<?= asset('img/eco_system/eco_arrow2.png') ?>" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row justify-content-center align-items-center mb-5">
                        <div class="col-md-6 ">

                            <div class="eco_sideimg2"><img src="<?= asset('img/eco_system/eco-side-2.png') ?>"
                                    alt="img">
                            </div>

                        </div>
                        <div class="col-md-6 ">
                            <div class="eco_content">
                                <?= _eco_content2; ?>

                                <div class="eco_arrow2">
                                    <img src="<?= asset('img/eco_system/eco_arrow3.png') ?>" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>















            <!---------Connecting Sec---------->
            <!-- <section id="connecting_sec" class="d-none d-lg-block">
                <div class="container">
                    <div class="row justify-content-center align-items-center ">


                        <div class="col-md-12">
                            <div class="platform_content">
                                <?= _connectinghead; ?>
                                <?= _connectingdesc; ?>
                                <div class="platform_holder">
                                    <div class="connecting_video">
                                        <video width="600" height="100%" autoplay="" loop="" muted="" playsinline="">
                                            <source src="<?= asset('img/connecting/connecting_img-v2.webm') ?>" type="video/webm">
                                        </video>
                                    </div>
                                    <div class="connecting_videomob">
                                        <video width="100%" height="100%" autoplay="" loop="" muted="" playsinline="">
                                            <source src="<?= asset('img/connecting/connecting_mobtv.mp4') ?>" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="comment_icon "><img src="<?= asset('img/connecting/connecting_commts.svg') ?>" alt="img"></div>
                                    <div class="like_icon "><img src="<?= asset('img/platforms/like_icon.png') ?>" alt="img"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platheart_icon "><img src="<?= asset('img/platforms/platform_heart.svg') ?>" alt="img"></div>
            </section> -->






            <!---------stream tabs Sec---------->
            <!-- <div class="stream_tabs d-none d-lg-block" id="how_it_work">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="nav_tab_holder d-none d-lg-block">

                                <ul class="nav nav-tabs " id="mytabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs-3" role="tab"><?= _multihead; ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"><?= _starthead; ?></a>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-1" role="tab"><?= _pickhead; ?></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content" id="mytab_content">
                                <button class="d-block d-lg-none mobtab_button" id="mobtab_button3"><?= _multihead; ?></button>
                                <div class="tab-pane active" id="tabs-3" role="tabpanel">
                                    <div class="mytab_contentholder">
                                        <?= _multidesc; ?>
                                        <img src="<?= asset('img/start/start3-v3.png?v=1.3') ?>" alt="Stream coin-multi platform streaming">

                                    </div>
                                </div>
                                <button class="d-block d-lg-none mobtab_button" id="mobtab_button2"><?= _starthead; ?></button>
                                <div class="tab-pane" id="tabs-2" role="tabpanel">
                                    <div class="mytab_contentholder">
                                        <?= _startdesc; ?>
                                        <img loading="lazy" src="<?= asset('img/banner/start-your-live.png?v=1.2') ?>" class="img-fluid" alt="">
                                    </div>

                                </div>
                                <button class="d-block d-lg-none mobtab_button" id="mobtab_button1"><?= _pickhead; ?></button>
                                <div class="tab-pane" id="tabs-1" role="tabpanel">
                                    <div class="mytab_contentholder">
                                        <?= _pickdesc; ?>
                                        <img src="<?= asset('img/start/pick1.png?v=1.3') ?>">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="streamtab_icons">
                    <img src="<?= asset('img/start/heartt.png') ?>">
                    <img src="<?= asset('img/connecting/connecting_commts.svg') ?>">
                    <img src="<?= asset('img/platforms/platform_tri.svg') ?>">
                    <img src="<?= asset('img/start/start_like.png') ?>">
                </div>
            </div> -->









            <section id="platform">
                <div class="container">
                    <div class="row justify-content-center align-items-center ">


                        <div class="col-md-12">
                            <div class="Stream_Platform">
                                <?= _meitalk_reward_sec; ?>
                                <?= _meitalk_reward_desc; ?>


                            </div>


                            <div class="s_platform_bg">

                                <img class="stream_circle img-fluid" src="<?= asset(_img_meitalk_wallet) ?>" alt="img">
                            </div>


                            <div class="exchange_img_mob2">
                                <img class="streamingplatform img-fluid" src="<?= asset(_img_meitalk_rewards_mob) ?>"
                                    alt="img">



                            </div>


                        </div>
                    </div>
                </div>
                <div class="platform_icons">

                    <img src="<?= asset('img/start/start_star.png') ?>">
                    <img src="<?= asset('img/receive/receivechat.png') ?>">
                </div>
            </section>

            <section id="platform" class="pb-0">
                <div class="container">
                    <div class="row justify-content-center align-items-center ">


                        <div class="col-md-12">
                            <div class="Stream_Platform">
                                <?= _meitalk_wallet_sec; ?>
                                <?= _meitalk_wallet_desc; ?>


                            </div>


                            <div class="s_platform_bg">
                                <img class="stream_circle img-fluid" src="<?= asset(_img_meitalk_rewards) ?>" alt="img">
                            </div>


                            <div class="exchange_img_mob2">
                                <img class="streamingplatform img-fluid" src="<?= asset(_img_meitalk_wallet_mob_1) ?>"
                                    alt="img">

                                <img class="streamingplatform img-fluid" src="<?= asset(_img_meitalk_wallet_mob_2) ?>"
                                    alt="img">



                            </div>


                        </div>
                    </div>
                </div>
                <div class="platform_icons">
                    <img src="<?= asset('img/start/hert.png') ?>">
                    <img src="<?= asset('img/banner/ball_icon.png') ?>">

                </div>
            </section>





            <!---------hand video Sec---------->
            <!-- <div class="hand-video">
                <div class="container">
                    <h2><?= _link_platform ?></h2>
                    <p><?= _link_platform_desc ?></p>
                    <div class="inner-wrapper">
                        <video autoplay="" loop="" muted="" playsinline="">
                            <source src="<?= asset('img/start/iconvideomob-v-1.mp4') ?>" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div> -->






            <!---------Receive stream Sec---------->
            <!-- <section id="receive_sec">
                <div class="container">
                    <div class="row justify-content-center align-items-center ">
                        <div class="col-md-6">
                            <div class="reveice_img1">
                                <img src="<?= asset(_receive1img); ?>" alt="Get STREAM coin When You Go Live">
                                <div class="receivechat_icon"><img src="<?= asset('img/receive/receivechat.png') ?>"
                                        alt="img"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="receive_content">
                                <?= _receivehead; ?>
                                <?= _receivebtn; ?>
                                <?= _receivedesc; ?>

                            </div>
                        </div>


                        <div class="col-md-6 order-md-2">
                            <div class="reveice_img1">
                                <img src="<?= asset(_receive2img); ?>" alt="Earn STREAM While YouWatch">
                                <div class="receivechat_icon2"><img src="<?= asset('img/start/start_star.png') ?>"
                                        alt="img"></div>
                            </div>
                        </div>
                        <div class="col-md-6 order-md-1">
                            <div class="receive_content content2">
                                <?= _earnhead; ?>

                                <?= _earndesc; ?>
                                <?= _earnbtn; ?>

                            </div>
                        </div>


                    </div>
                </div>
                <div class="receive_icons">
                    <img src="<?= asset('img/start/like_icon.png') ?>">
                    <img src="<?= asset('img/banner/heart_icon.png') ?>">
                    <img src="<?= asset('img/start/sml.png') ?>">
                    <img src="<?= asset('img/start/smml.png') ?>">
                </div>
            </section> -->

        </section>



        <section id="eco_sec" class="d-none d-lg-block">

            <div id="eco_realresearch3" class="eco_realresearch">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-12">
                            <div class="realtime_head">
                                <h3>Real Research</h3>
                            </div>

                            <div class="inner-wrapper d-block d-lg-none mb-5">

                                <video src="<?= asset('img/eco_system/eco_realresearchv1.mp4') ?>" playsinline=""
                                    autoplay="" muted="" loop=""></video>

                            </div>

                        </div>
                    </div>









                    <div class="row mb-md-5 pb-md-5  align-items-center">
                        <div class="col-md-7 order-md-2">

                            <div class="inner-wrapper d-none d-lg-block">

                                <video src="<?= asset('img/eco_system/eco_realresearchv1.mp4') ?>" playsinline=""
                                    autoplay="" muted="" loop=""></video>


                            </div>


                        </div>
                        <div class="col-md-5 order-md-1 mt-md-5">
                            <div class="eco_real_head">
                                <?= _eco_real_head; ?>

                            </div>
                            <div class="eco_real_content ">
                                <?= _eco_real_content3; ?>

                            </div>

                        </div>



                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <ul class="global_num2">
                                <li>
                                    <div class="gobal_icon2"><img src="<?= asset('img/eco_system/real_icon1.svg') ?>">
                                    </div>
                                    <span>
                                        <h2 class="count4" data-count="3000000"></h2>
                                        <?= _num_user; ?>

                                    </span>
                                </li>




                                <li>
                                    <div class="gobal_icon2"><img src="<?= asset('img/eco_system/real_icon2.svg') ?>">
                                    </div>
                                    <span>
                                        <h2 class="count6" data-count="250000"></h2>
                                        <?= _num_strmissued; ?>

                                    </span>
                                </li>

                                <li>
                                    <div class="gobal_icon2"><img src="<?= asset('img/eco_system/real_icon3.svg') ?>">
                                    </div>
                                    <span>
                                        <h2 class="count5" data-count="165"></h2>
                                        <?= _num_countries; ?>

                                    </span>
                                </li>

                            </ul>
                        </div>
                    </div>


                    <div class="row align-items-center">

                        <div class="col-md-6 order-md-2 mt-5 pl-md-5">
                            <div class="eco_real_content">
                                <img src="<?= asset('img/eco_system/real_cup1.png') ?>" alt="img">

                                <?= _eco_real_content; ?>

                            </div>

                        </div>
                        <div class="col-md-5 order-md-1 pr-md-5 mb-5">
                            <img class="img-fluid" src="<?= asset('img/eco_system/eco_real1v1.png') ?>" alt="img">
                        </div>
                    </div>




















                </div>


                <div class="eco_nft_icons3">
                    <img src="<?= asset('img/platforms/platform_tri.svg') ?>">
                    <img src="<?= asset('img/banner/heart_icon.png') ?>">
                    <img src="<?= asset('img/banner/ball_icon.png') ?>">
                    <img src="<?= asset('img/start/smml.png') ?>">
                </div>


            </div>

        </section>














        <!---------stream platform Sec---------->
        <section id="platform">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center ">


                    <div class="col-md-12">
                        <div class="Stream_Platform">
                            <?= _streamingplatform; ?>
                            <?= _streamingdesc; ?>


                        </div>


                        <div class="s_platform_bg">
                            <img class="stream_circle img-fluid"
                                src="<?= asset('img/stream_platform/icons_circle-v5_latest.png') ?>"
                                alt="Stream coin live streaming platforms">
                        </div>


                        <div class="exchange_img_mob2">
                            <img class="streamingplatform "
                                src="<?= asset('img/stream_platform/streaming_mobimg-v7.gif') ?>" alt="">



                        </div>


                    </div>
                </div>
            </div>
            <div class="platform_icons">
                <img src="<?= asset('img/start/hert.png') ?>">
                <img src="<?= asset('img/banner/ball_icon.png') ?>">
                <img src="<?= asset('img/start/start_star.png') ?>">
                <img src="<?= asset('img/receive/receivechat.png') ?>">
            </div>
        </section>


        <!---------Road map Sec---------->
        <section id="vision">
            <div class="title-wrapper">
                <?= _visionheading; ?>
                <?= _visiondesc; ?>

            </div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="road_padd">
                        <div class="roadmap_holder">
                            <img src="<?= asset('img/roadmap/july2021.jpg') ?>" alt="">
                            <div class="road-content">
                                <?= _vision1; ?>
                            </div>
                        </div>
                        <div class="road_round july">
                            <span></span>
                            <?= _vision1d; ?>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="road_padd">
                        <div class="roadmap_holder">
                            <img src="<?= asset('img/roadmap/aug2021.jpg') ?>" alt="">
                            <div class="road-content">
                                <?= _vision2; ?>
                            </div>
                        </div>
                        <div class="road_round aug">
                            <span></span>
                            <?= _vision2d; ?>
                        </div>
                    </div>


                </div>
                <div class="item">
                    <div class="road_padd">
                        <div class="roadmap_holder">
                            <img src="<?= asset('img/roadmap/sep2021.jpg') ?>" alt="">
                            <div class="road-content">
                                <?= _vision3; ?>
                            </div>
                        </div>
                        <div class="road_round sep">
                            <span></span>
                            <?= _vision3d; ?>
                        </div>
                    </div>


                </div>
                <div class="item">
                    <div class="road_padd roadmap-purple">
                        <div class="roadmap_holder">
                            <img src="<?= asset('img/roadmap/november2021.png') ?>" alt="">
                            <div class="road-content">
                                <?= _vision_nov_2021_text ?>
                            </div>
                        </div>
                        <div class="road_round nov2021">
                            <span></span>
                            <?= _vision_nov_2021_date ?>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="road_padd roadmap-blue">
                        <div class="roadmap_holder">
                            <img src="<?= asset('img/roadmap/oct2021.jpg') ?>" alt="">
                            <div class="road-content">
                                <?= _vision4; ?>
                            </div>
                        </div>
                        <div class="road_round dec2021">
                            <span></span>
                            <?= _vision4d; ?>
                        </div>
                    </div>


                </div>
                <div class="item">
                    <div class="road_padd roadmap-yellow">
                        <div class="roadmap_holder">
                            <img src="<?= asset('img/roadmap/january2022.jpg') ?>" alt="">
                            <div class="road-content">
                                <?= _vision_jan2022_dec; ?>
                            </div>
                        </div>
                        <div class="road_round jan2022">
                            <span></span>
                            <?= _vision_jan2022; ?>
                        </div>
                    </div>


                </div>
                <div class="item">
                    <div class="road_padd">
                        <div class="roadmap_holder">
                            <img src="<?= asset('img/roadmap/february2022.jpg') ?>" alt="">
                            <div class="road-content">
                                <?= _vision_feb2022_dec; ?>
                            </div>
                        </div>
                        <div class="road_round july">
                            <span></span>
                            <?= _vision_feb2022; ?>
                        </div>
                    </div>


                </div>


                <div class="item">
                    <div class="road_padd roadmap-blue">
                        <div class="roadmap_holder">
                            <img src="<?= asset('img/roadmap/march2022.png') ?>" alt="">

                            <div class="road-content">
                                <?= _vision_march2022_dec; ?>

                            </div>
                        </div>
                        <div class="road_round dec2021">
                            <span></span>
                            <?= _vision_march2022; ?>

                        </div>
                    </div>


                </div>




                <div class="item">
                    <div class="road_padd roadmap-yellow">
                        <div class="roadmap_holder">
                            <img src="<?= asset('img/roadmap/nov2021.jpg') ?>" alt="">
                            <div class="road-content">
                                <?= _vision5; ?>
                            </div>
                        </div>
                        <div class="road_round jan2022">
                            <span></span>
                            <?= _vision5d; ?>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="road_padd">
                        <div class="roadmap_holder">
                            <img src="<?= asset('img/roadmap/may2022.png') ?>" alt="">
                            <div class="road-content">
                                <?= _vision_may_2022_text ?>
                            </div>
                        </div>
                        <div class="road_round">
                            <span></span>
                            <?= _vision_may_2022_date ?>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="road_padd">
                        <div class="roadmap_holder">
                            <img src="<?= asset('img/roadmap/dec2021.jpg') ?>" alt="">
                            <div class="road-content">
                                <?= _vision6; ?>
                            </div>
                        </div>
                        <div class="road_round">
                            <span></span>
                            <?= _vision6d; ?>
                        </div>
                    </div>


                </div>


                <div class="item">
                    <div class="road_padd">
                        <div class="roadmap_holder">
                            <img src="<?= asset('img/roadmap/oct2022.jpg') ?>" alt="">
                            <div class="road-content">
                                <?= _vision7; ?>
                            </div>
                        </div>
                        <div class="road_round">
                            <span></span>
                            <?= _vision7d; ?>
                        </div>
                    </div>


                </div>


                <div class="item">
                    <div class="road_padd">
                        <div class="roadmap_holder">
                            <img src="<?= asset('img/roadmap/dec2022.jpg') ?>" alt="">
                            <div class="road-content">
                                <?= _vision8; ?>
                            </div>
                        </div>
                        <div class="road_round">
                            <span></span>
                            <?= _vision8d; ?>
                        </div>
                    </div>


                </div>


                <div class="item">
                    <div class="road_padd">
                        <div class="roadmap_holder">
                            <img src="<?= asset('img/roadmap/jan2023.jpg') ?>" alt="">
                            <div class="road-content">
                                <?= _vision9; ?>
                            </div>
                        </div>
                        <div class="road_round">
                            <span></span>
                            <?= _vision9d; ?>
                        </div>
                    </div>


                </div>


                <div class="item">
                    <div class="road_padd">
                        <div class="roadmap_holder">
                            <img src="<?= asset('img/roadmap/may-2023.png') ?>" alt="">
                            <div class="road-content">
                                <?= _vision_may_2023_text; ?>
                            </div>
                        </div>
                        <div class="road_round">
                            <span></span>
                            <?= _vision_may_2023_date; ?>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="road_padd">
                        <div class="roadmap_holder">
                            <img src="<?= asset('img/roadmap/july-2023.png') ?>" alt="">
                            <div class="road-content">
                                <?= _vision_july_2023_text; ?>
                            </div>
                        </div>
                        <div class="road_round">
                            <span></span>
                            <?= _vision_july_2023_date; ?>
                        </div>
                    </div>
                </div>


            </div>

            <div class="vision_dir">
                <img id="prev" src="<?= asset('img/roadmap/left_arrow.svg') ?>" alt="">
                <img id="next" src="<?= asset('img/roadmap/right_arrow.svg') ?>" alt="">
            </div>

        </section>




        <!--------- Send and Receive---------->
        <section id="send_sec" class="d-block d-sm-none">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center ">


                    <div class="col-md-12">
                        <div class="Stream_Platform">
                            <?= _sendreceiveheading; ?>
                            <?= _sendreceivedesc; ?>


                        </div>


                        <div class="send_img">
                            <div class="row d-flex justify-content-center">

                                <div class="col-md-3">
                                    <a class="send1_icon" href="https://trustwallet.com/" target="_blank"><img
                                            src="<?= asset('img/sendnreceive/send5.png') ?>" alt="img"></a>
                                    <div class="send_mob">
                                        <img class="send11_img" src="<?= asset('img/sendnreceive/send55.png') ?>"
                                            alt="">

                                        <div class="overlay">
                                            <ul class="sendul">
                                                <li><a target="_blank"
                                                        href="https://apps.apple.com/app/apple-store/id1288339409?mt=8"><img
                                                            src="<?= asset('img/sendnreceive/apple_icon.svg') ?>"
                                                            alt=""></a></li>
                                                <li><a target="_blank"
                                                        href="https://play.google.com/store/apps/details?id=com.wallet.crypto.trustapp&hl=en&gl=US"><img
                                                            src="<?= asset('img/sendnreceive/google_icon.svg') ?>"
                                                            alt=""></a></li>
                                                <li><a target="_blank" href="https://trustwallet.com/"><img
                                                            src="<?= asset('img/sendnreceive/window_icon.svg') ?>"
                                                            alt=""></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <a class="send1_icon" href="https://metamask.io/" target="_blank"><img
                                            src="<?= asset('img/sendnreceive/send2.png') ?>" alt="img"></a>
                                    <div class="send_mob">
                                        <img class="send11_img" src="<?= asset('img/sendnreceive/send22.png') ?>"
                                            alt="">

                                        <div class="overlay">
                                            <ul class="sendul">
                                                <li><a target="_blank"
                                                        href="https://apps.apple.com/us/app/metamask/id1438144202?_branch_match_id=826070198514554376"><img
                                                            src="<?= asset('img/sendnreceive/apple_icon.svg') ?>"
                                                            alt=""></a></li>
                                                <li><a target="_blank"
                                                        href="https://play.google.com/store/apps/details?id=io.metamask&hl=en_US&ref=producthunt&_branch_match_id=826070198514554376"><img
                                                            src="<?= asset('img/sendnreceive/google_icon.svg') ?>"
                                                            alt=""></a></li>
                                                <li><a target="_blank" href="https://metamask.io/"><img
                                                            src="<?= asset('img/sendnreceive/window_icon.svg') ?>"
                                                            alt=""></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <a class="send1_icon" href="https://token.im/" target="_blank"><img
                                            src="<?= asset('img/sendnreceive/send1.png') ?>" alt="img"></a>
                                    <div class="send_mob">
                                        <img class="send11_img" src="<?= asset('img/sendnreceive/send33.png') ?>"
                                            alt="">

                                        <div class="overlay">
                                            <ul class="sendul">
                                                <li><a target="_blank"
                                                        href="https://apps.apple.com/us/app/imtoken-btc-eth-wallet/id1384798940"><img
                                                            src="<?= asset('img/sendnreceive/apple_icon.svg') ?>"
                                                            alt=""></a></li>
                                                <li><a target="_blank"
                                                        href="https://play.google.com/store/apps/details?id=im.token.app&hl=en&gl=US"><img
                                                            src="<?= asset('img/sendnreceive/google_icon.svg') ?>"
                                                            alt=""></a></li>
                                                <li><a target="_blank" href="https://token.im/"><img
                                                            src="<?= asset('img/sendnreceive/window_icon.svg') ?>"
                                                            alt=""></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <a class="send1_icon" href="https://www.myetherwallet.com/" target="_blank"><img
                                            src="<?= asset('img/sendnreceive/send4.png') ?>" alt="img"></a>
                                    <div class="send_mob">
                                        <img class="send11_img" src="<?= asset('img/sendnreceive/send44.png') ?>"
                                            alt="">

                                        <div class="overlay">
                                            <ul class="sendul">
                                                <li><a target="_blank"
                                                        href="https://apps.apple.com/us/app/mew-wallet-ethereum-and-defi/id1464614025"><img
                                                            src="<?= asset('img/sendnreceive/apple_icon.svg') ?>"
                                                            alt=""></a></li>
                                                <li><a target="_blank"
                                                        href="https://play.google.com/store/apps/details?id=com.myetherwallet.mewwallet&hl=en&gl=US"><img
                                                            src="<?= asset('img/sendnreceive/google_icon.svg') ?>"
                                                            alt=""></a></li>
                                                <li><a target="_blank" href="https://www.myetherwallet.com/"><img
                                                            src="<?= asset('img/sendnreceive/window_icon.svg') ?>"
                                                            alt=""></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>


                        <div id="send">


                            <div class="owl-carousel owl-theme">

                                <div class="item">
                                    <a class="send1_icon" href="https://aladdinprowallet.com/" target="_blank"><img
                                            src="<?= asset('img/sendnreceive/send6.png') ?>" alt="img"></a>
                                    <div class="send_mob">
                                        <img class="send11_img" src="<?= asset('img/sendnreceive/send66.png') ?>"
                                            alt="">

                                        <div class="overlay">
                                            <ul class="sendul">
                                                <li><a target="_blank"
                                                        href="https://apps.apple.com/gb/app/aladdin-pro/id1481967751"><img
                                                            src="<?= asset('img/sendnreceive/apple_icon.svg') ?>"
                                                            alt=""></a></li>
                                                <li><a target="_blank"
                                                        href="https://play.google.com/store/apps/details?id=com.abbc.aladdin.pro"><img
                                                            src="<?= asset('img/sendnreceive/google_icon.svg') ?>"
                                                            alt=""></a></li>
                                                <!-- <li><a target="_blank" href="https://trustwallet.com/"><img src="<?= asset('img/sendnreceive/window_icon.svg') ?>" alt=""></a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <a class="send1_icon" href="https://trustwallet.com/" target="_blank"><img
                                            src="<?= asset('img/sendnreceive/send5.png') ?>" alt="img"></a>
                                    <div class="send_mob">
                                        <img class="send11_img" src="<?= asset('img/sendnreceive/send55_v1.png') ?>"
                                            alt="">

                                        <div class="overlay">
                                            <ul class="sendul">
                                                <li><a target="_blank"
                                                        href="https://apps.apple.com/app/apple-store/id1288339409?mt=8"><img
                                                            src="<?= asset('img/sendnreceive/apple_icon.svg') ?>"
                                                            alt=""></a></li>
                                                <li><a target="_blank"
                                                        href="https://play.google.com/store/apps/details?id=com.wallet.crypto.trustapp&hl=en&gl=US"><img
                                                            src="<?= asset('img/sendnreceive/google_icon.svg') ?>"
                                                            alt=""></a></li>
                                                <li><a target="_blank" href="https://trustwallet.com/"><img
                                                            src="<?= asset('img/sendnreceive/window_icon.svg') ?>"
                                                            alt=""></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <a class="send1_icon" href="https://metamask.io/" target="_blank"><img
                                            src="<?= asset('img/sendnreceive/send2.png') ?>" alt="img"></a>
                                    <div class="send_mob">
                                        <img class="send11_img" src="<?= asset('img/sendnreceive/send22_v1.png') ?>"
                                            alt="">

                                        <div class="overlay">
                                            <ul class="sendul">
                                                <li><a target="_blank"
                                                        href="https://apps.apple.com/us/app/metamask/id1438144202?_branch_match_id=826070198514554376"><img
                                                            src="<?= asset('img/sendnreceive/apple_icon.svg') ?>"
                                                            alt=""></a></li>
                                                <li><a target="_blank"
                                                        href="https://play.google.com/store/apps/details?id=io.metamask&hl=en_US&ref=producthunt&_branch_match_id=826070198514554376"><img
                                                            src="<?= asset('img/sendnreceive/google_icon.svg') ?>"
                                                            alt=""></a></li>
                                                <li><a target="_blank" href="https://metamask.io/"><img
                                                            src="<?= asset('img/sendnreceive/window_icon.svg') ?>"
                                                            alt=""></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <a class="send1_icon" href="https://token.im/" target="_blank"><img
                                            src="<?= asset('img/sendnreceive/send1.png') ?>" alt="img"></a>
                                    <div class="send_mob">
                                        <img class="send11_img" src="<?= asset('img/sendnreceive/send33_v1.png') ?>"
                                            alt="">

                                        <div class="overlay">
                                            <ul class="sendul">
                                                <li><a target="_blank"
                                                        href="https://apps.apple.com/us/app/imtoken-btc-eth-wallet/id1384798940"><img
                                                            src="<?= asset('img/sendnreceive/apple_icon.svg') ?>"
                                                            alt=""></a></li>
                                                <li><a target="_blank"
                                                        href="https://play.google.com/store/apps/details?id=im.token.app&hl=en&gl=US"><img
                                                            src="<?= asset('img/sendnreceive/google_icon.svg') ?>"
                                                            alt=""></a></li>
                                                <li><a target="_blank" href="https://token.im/"><img
                                                            src="<?= asset('img/sendnreceive/window_icon.svg') ?>"
                                                            alt=""></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <a class="send1_icon" href="https://www.myetherwallet.com/" target="_blank"><img
                                            src="<?= asset('img/sendnreceive/send4.png') ?>" alt="img"></a>
                                    <div class="send_mob">
                                        <img class="send11_img" src="<?= asset('img/sendnreceive/send44_v1.png') ?>"
                                            alt="">

                                        <div class="overlay">
                                            <ul class="sendul">
                                                <li><a target="_blank"
                                                        href="https://apps.apple.com/us/app/mew-wallet-ethereum-and-defi/id1464614025"><img
                                                            src="<?= asset('img/sendnreceive/apple_icon.svg') ?>"
                                                            alt=""></a></li>
                                                <li><a target="_blank"
                                                        href="https://play.google.com/store/apps/details?id=com.myetherwallet.mewwallet&hl=en&gl=US"><img
                                                            src="<?= asset('img/sendnreceive/google_icon.svg') ?>"
                                                            alt=""></a></li>
                                                <li><a target="_blank" href="https://www.myetherwallet.com/"><img
                                                            src="<?= asset('img/sendnreceive/window_icon.svg') ?>"
                                                            alt=""></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vision_dir">
                                <img id="prev2" src="<?= asset('img/roadmap/left_arrow.svg') ?>" alt="">
                                <img id="next2" src="<?= asset('img/roadmap/right_arrow.svg') ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="send_icons">
                <img src="<?= asset('img/start/start_like.png') ?>">
                <img src="<?= asset('img/start/dot.png') ?>">
                <img src="<?= asset('img/platforms/platform_tri.svg') ?>">
            </div>
        </section>





        <!---------Exchanges Footer Sec---------->
        <section id="exchange_sec">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center ">

                    <div class="col-md-12">
                        <div class="Stream_Platform">
                            <h2 style="color: #FF4B70;"><?= _infonet; ?></h2>
                            <div class="exchange_img">

                                <ul>

                                    <li><a target="_blank" href="https://icoholder.com/en/stream-strm-1008213"><img
                                                loading="lazy" class="yahoo-news-logo-img"
                                                src="<?= asset('img/informationnetwork/Canvas.png') ?>" alt="img"></a>
                                    </li>
                                    <li><a target="_blank"
                                            href="https://coincodex.com/article/13560/stream-coin-ico-goes-live-strm-rewards-available-for-referrers/"><img
                                                loading="lazy" class="benzinga-logo-img"
                                                src="<?= asset('img/informationnetwork/coincodex.png') ?>"
                                                alt="img"></a></li>
                                    <li><a target="_blank" href="https://cryptototem.com/stream-strm/"><img
                                                loading="lazy" class="bitcoin-com-logo-img"
                                                src="<?= asset('img/informationnetwork/cryptototem.png') ?>"
                                                alt="img"></a></li>

                                    <li><a target="_blank" href="https://foundico.com/ico/stream-strm.html"><img
                                                loading="lazy" class="blockonomi-logo-img"
                                                src="<?= asset('img/informationnetwork/foundio.png') ?>" alt="img"></a>
                                    </li>



                                    <li><a target="_blank"
                                            href=" https://coinquora.com/stream-ico-to-launch-on-february-1-for-its-web3-live-streaming-platform/"><img
                                                loading="lazy" class="newsbtc-logo-img"
                                                src="<?= asset('img/informationnetwork/Group1.png') ?>" alt="img"></a>
                                    </li>
                                    <li><a target="_blank"
                                            href="https://coinpedia.org/press-release/stream-live-revolutionising-online-streaming/"><img
                                                loading="lazy" class="the-news-crypto-logo-img"
                                                src="<?= asset('img/informationnetwork/Group5.png') ?>" alt="img"></a>
                                    </li>

                                    <li><a target="_blank"
                                            href=" https://coingape.com/stream-coin-ico-goes-live-strm-rewards-available-for-referrers/"><img
                                                loading="lazy" class="yahoo-logo-img"
                                                src="<?= asset('img/informationnetwork/Group6.png') ?>" alt="img"></a>
                                    </li>



                                    <li><a target="_blank" href="https://coinmarketcap.com/currencies/stream-coin/"><img loading="lazy"
                                                class="coinmarket-img"
                                                src="<?= asset('img/informationnetwork/coinmarket.png') ?>"
                                                alt="img"></a>
                                    </li>




                                </ul>
                                <div class="collapse show" data-view-more-text="<?= _viewMore ?>"
                                    data-view-less-text="<?= _viewLess ?>" id="collapseExample">
                                    <ul>








                                        <li class=""><a target="_blank"
                                                href="https://www.newsbtc.com/news/company/michael-ein-chaybeh-ceo-of-streamcoin-simulcasted-live-ama-on-meitalk-youtube-and-twitch/"><img
                                                    loading="lazy" class="coinqoura-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group7.png') ?>"
                                                    alt="img"></a></li>





                                        <li><a target="_blank" href="https://topicolist.com/stream-coin/"><img
                                                    loading="lazy" class="ico-img"
                                                    src="<?= asset('img/informationnetwork/ico_logo.png') ?>"
                                                    alt="img"></a></li>


                                        <li><a target="_blank"
                                                href="https://www.icolistingonline.com/ico/stream-coin/"><img
                                                    loading="lazy" class="listing-img"
                                                    src="<?= asset('img/informationnetwork/listing_logo.png') ?>"
                                                    alt="img"></a></li>




                                        <li><a target="_blank"
                                                href="https://cointelegraph.com/press-releases/ongoing-stream-live-presale-gains-massive-support-gears-up-for-public-sale-in-february"><img
                                                    loading="lazy" class="coinpaprika-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group12.png') ?>"
                                                    alt="img"></a></li>
                                        <li><a target="_blank"
                                                href=" https://btcmanager.com/breaking-stream-announces-strm-coin-burn/"><img
                                                    loading="lazy" class="bitcoinist-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group13.png') ?>"
                                                    alt="img"></a></li>
                                        <li><a target="_blank"
                                                href="https://u.today/streamcoin-ceo-multicasts-ama-session-on-meitalk"><img
                                                    loading="lazy" class="coindesk-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group15.png') ?>"
                                                    alt="img"></a></li>
                                        <li><a target="_blank"
                                                href="https://thenewscrypto.com/stream-live-a-blockchain-based-rewarding-live-streaming-platform/"><img
                                                    loading="lazy" class="coin360-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group18.png') ?>"
                                                    alt="img"></a></li>
                                        <li class=""><a target="_blank"
                                                href=" https://uk.finance.yahoo.com/news/stream-coin-ico-commence-february-191400130.html"><img
                                                    loading="lazy" class="morningstar-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group16.png') ?>"
                                                    alt="img"></a></li>
                                        <!-- <li class="d-block d-lg-none"><a target="_blank" href="https://money.yahoo.com/news/stream-live-innovative-blockchain-solution-194600648.html"><img loading="lazy" class="marketwatch-logo-img" src="<?= asset('img/informationnetwork/Group22.png') ?>" alt="img"></a></li> -->



                                    </ul>
                                    <ul>

                                        <li class=""><a target="_blank"
                                                href="https://money.yahoo.com/news/stream-live-innovative-blockchain-solution-194600648.html"><img
                                                    loading="lazy" class="marketwatch-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group22.png') ?>"
                                                    alt="img"></a></li>
                                        <li><a target="_blank" href="#" onclick="return false;"><img loading="lazy"
                                                    class="utoday-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group2.png') ?>"
                                                    alt="img"></a></li>
                                        <li><a target="_blank" href="#" onclick="return false;"><img loading="lazy"
                                                    class="cointelegraph-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group3.png') ?>"
                                                    alt="img"></a></li>

                                        <li><a target="_blank" href="#" onclick="return false;"><img loading="lazy"
                                                    class="coingape-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group4.png') ?>"
                                                    alt="img"></a></li>
                                        <li><a target="_blank" href="#" onclick="return false;"><img loading="lazy"
                                                    class="yahoo-money-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group8.png') ?>"
                                                    alt="img"></a></li>
                                        <li><a target="_blank" href="#" onclick="return false;"><img loading="lazy"
                                                    class="btc-manger-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group9.png') ?>"
                                                    alt="img"></a></li>
                                        <li><a target="_blank" href="#" onclick="return false;"><img loading="lazy"
                                                    class="code-pedia-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group10.png') ?>"
                                                    alt="img"></a></li>

                                        <li class="d-block d-lg-none"><a target="_blank"
                                                href="https://blockonomi.com/stream-coin-to-launch-ico-on-february-1-followed-by-listing-on-100-exchanges/"><img
                                                    loading="lazy" class="yahoo-news-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group11.png') ?>"
                                                    alt="img"></a></li>


                                    </ul>





                                    <ul>


                                        <li class="d-none d-lg-block"><a target="_blank"
                                                href="https://blockonomi.com/stream-coin-to-launch-ico-on-february-1-followed-by-listing-on-100-exchanges/"><img
                                                    loading="lazy" class="yahoo-news-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group11.png') ?>"
                                                    alt="img"></a></li>
                                        <li><a target="_blank" href="#" onclick="return false;"><img loading="lazy"
                                                    class="bitcoin-com-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group14.png') ?>"
                                                    alt="img"></a></li>

                                        <li><a target="_blank" href="#" onclick="return false;"><img loading="lazy"
                                                    class="benzinga-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group17.png') ?>"
                                                    alt="img"></a></li>
                                        <li><a target="_blank" href="#" onclick="return false;"><img loading="lazy"
                                                    class="blockonomi-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group19.png') ?>"
                                                    alt="img"></a></li>
                                        <li><a target="_blank" href="#" onclick="return false;"><img loading="lazy"
                                                    class="coinmarkcap-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group20.png') ?>"
                                                    alt="img"></a></li>
                                        <li><a target="_blank"
                                                href=" https://bitcoinist.com/meitalk-test-run-streamcoin-ceo-multicasted-ama-session-on-16th-february-2022/"><img
                                                    loading="lazy" class="zycrypto-logo-img"
                                                    src="<?= asset('img/informationnetwork/Group21.png') ?>"
                                                    alt="img"></a></li>


                                    </ul>









                                </div>
                                <div class="readmorebtn d-block d-md-none">
                                    <button id="forclick1" class="btn btn-primary show_hide read_style2" type="button"
                                        data-toggle="collapse" data-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        <?= _viewMore ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>





                    <section id="eco_sec" class="d-block d-lg-none">

                        <div class="container">
                            <div class="row justify-content-center align-items-center ">
                                <div class="col-md-12">
                                    <div class="eco_head">
                                        <?= _eco_head; ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="eco_nft_sec" id="eco_nft_sec2">

                            <div class="row align-items-center" id="nft_market_mobile">



                                <div class="col-md-12">
                                    <div class="eco_nft_content d-none d-lg-block">
                                        <h4>Stream NFT Marketplace</h4>
                                        <p>Live streamers can also immortalize their most unforgettable on-cam moments
                                            through our very own Stream NFT Marketplace. With a click of a button, you
                                            can turn your video into an NFT and sell it to your fans for STRM tokens.
                                        </p>
                                    </div>
                                    <div class="eco_nft_content d-block d-lg-none">
                                        <?= _eco_nft_content_2; ?>
                                    </div>



                                    <div class="col-12 d-block d-lg-none">
                                        <div class="eco_explore_tv">


                                            <div class="inner-wrapper2">

                                                <video src="<?= asset('img/eco_system/eco_real_video.mp4') ?>"
                                                    playsinline="" autoplay="" muted="" loop=""></video>

                                            </div>








                                            <div class="eco_nft_icons2">
                                                <img src="<?= asset('img/start/like_icon.png') ?>">
                                                <img src="<?= asset('img/banner/heart_icon.png') ?>">
                                                <img src="<?= asset('img/connecting/connecting_commts.svg') ?>">
                                                <img src="<?= asset('img/start/smml.png') ?>">
                                            </div>

                                        </div>
                                    </div>



                                    <div class="collapse show" data-view-more-text="<?= _viewMore ?>"
                                        data-view-less-text="<?= _viewLess ?>" id="collapseExample2">





                                        <div class="container">
                                            <div class="row align-items-center">



                                                <div class="col-md-6">
                                                    <div class="eco_nft_sideimg">
                                                        <img class="d-none d-lg-block"
                                                            src="<?= asset('img/eco_system/eco_nft2.png') ?>" alt="img">
                                                        <img class="d-block d-lg-none"
                                                            src="<?= asset('img/eco_system/eco_nft2_v1.png') ?>"
                                                            alt="img">
                                                        <h5>One-Click Mint!</h5>
                                                    </div>
                                                </div>

                                                <!-- <div class="col-md-6">
                                                    <div class="eco_nft_sideimg2">
                                                        <img class="d-none d-lg-block" src="<?= asset('img/eco_system/eco_nft1.png') ?>" alt="img">
                                                        <img class="d-block d-lg-none" src="<?= asset('img/eco_system/eco_nft1_mob.png') ?>" alt="img">
                                                        <h6><b>STREAM</b> NFT</h6>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>





                                        <div class="eco_explore">
                                            <div class="row align-items-center">
                                                <div class="col-md-6">
                                                    <div class="eco_explore_content">
                                                        <?= _eco_explore_content; ?>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="eco_explore2" id="eco_explore2_mobmove">
                                                        <img class="img-fluid"
                                                            src="<?= asset('img/eco_system/eco_explore2.png') ?>"
                                                            alt="img">

                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div class="eco_explore1" id="eco_explore1_mobmove">
                                                        <img class="img-fluid"
                                                            src="<?= asset('img/eco_system/eco_explore1.png') ?>"
                                                            alt="img">

                                                    </div>

                                                </div>

                                                <div class="container d-none d-lg-block">
                                                    <div class="col-12">
                                                        <div class="eco_explore_tv">


                                                            <div class="inner-wrapper2">

                                                                <video
                                                                    src="<?= asset('img/eco_system/eco_real_video.mp4') ?>"
                                                                    playsinline="" autoplay="" muted="" loop=""></video>

                                                            </div>








                                                            <div class="eco_nft_icons2">
                                                                <img src="<?= asset('img/start/like_icon.png') ?>">
                                                                <img src="<?= asset('img/banner/heart_icon.png') ?>">
                                                                <img
                                                                    src="<?= asset('img/connecting/connecting_commts.svg') ?>">
                                                                <img src="<?= asset('img/start/smml.png') ?>">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>



                                    <div class="readmorebtn d-block d-md-none">
                                        <button id="forclick2" class="btn btn-primary show_hide2 read_style2"
                                            type="button" data-toggle="collapse" data-target="#collapseExample2"
                                            aria-expanded="true"
                                            aria-controls="collapseExample2"><?= _viewMore ?></button>
                                    </div>







                                </div>

                            </div>




                        </div>














                    </section>






                    <section id="eco_sec" class="d-block d-lg-none">
                        <div id="eco_sec_mob">








                            <div class="experience-unqiue-section" id="experience-unqiue-section">
                                <div class="container position-relative meitalk_holder" id="meitalk-btn_mobile">
                                    <h3 class="mb-5 mt-2"><?= _experience_h3 ?></h3>
                                    <p style="padding: 0 10%;" class="d-none d-lg-block"><?= _eco_content1 ?></p>




                                    <div class="inner-wrapper d-block d-lg-none mb-5">

                                        <video src="<?= asset('img/eco_system/meitalk-vid.mp4') ?>" playsinline=""
                                            autoplay="" muted="" loop=""></video>

                                    </div>
                                    <!-- .. -->







                                </div>
                            </div>



                            <div class="collapse show" data-view-more-text="<?= _viewMore ?>"
                                data-view-less-text="<?= _viewLess ?>" id="collapseExample4">



                                <p style="padding: 0 10%;" class="d-block d-lg-none mt-5">
                                    <?= _eco_content1 ?></p>







                                <div class="eco_meitalk_sec">
                                    <div class="container">

                                        <div class="row justify-content-center align-items-center mb-5">
                                            <div class="col-md-6 order-md-2">
                                                <div class="eco_sideimg"><img
                                                        src="<?= asset('img/eco_system/eco-side-1.png') ?>" alt="img">
                                                </div>
                                            </div>
                                            <div class="col-md-6 order-md-1">

                                                <div class="eco_content">
                                                    <?= _eco_content3; ?>

                                                    <div class="eco_arrow">
                                                        <img src="<?= asset('img/eco_system/eco_arrow2.png') ?>"
                                                            alt="img">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row justify-content-center align-items-center mb-5">
                                            <div class="col-md-6 ">



                                                <div class="eco_sideimg2"><img
                                                        src="<?= asset('img/eco_system/eco-side-2.png') ?>" alt="img">
                                                </div>

                                            </div>
                                            <div class="col-md-6 ">

                                                <div class="eco_content">
                                                    <?= _eco_content2; ?>
                                                    <div class="eco_arrow2">
                                                        <img src="<?= asset('img/eco_system/eco_arrow3.png') ?>"
                                                            alt="img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>








                                        <section id="platform">
                                            <div class="row justify-content-center align-items-center ">


                                                <div class="col-md-12">
                                                    <div class="Stream_Platform">
                                                        <?= _meitalk_reward_sec; ?>
                                                        <?= _meitalk_reward_desc; ?>


                                                    </div>


                                                    <div class="s_platform_bg">
                                                        <img class="stream_circle img-fluid"
                                                            src="<?= asset(_img_meitalk_rewards) ?>" alt="img">
                                                    </div>


                                                    <div class="exchange_img_mob2">
                                                        <img class="streamingplatform img-fluid mb-5"
                                                            src="<?= asset(_img_meitalk_wallet_mob_1) ?>" alt="img">

                                                        <img class="streamingplatform img-fluid"
                                                            src="<?= asset(_img_meitalk_wallet_mob_2) ?>" alt="img">



                                                    </div>



                                                </div>
                                            </div>

                                            <div class="platform_icons">

                                                <img src="<?= asset('img/start/start_star.png') ?>">
                                                <img src="<?= asset('img/receive/receivechat.png') ?>">
                                            </div>
                                        </section>

                                        <section id="platform">

                                            <div class="row justify-content-center align-items-center ">


                                                <div class="col-md-12">
                                                    <div class="Stream_Platform">
                                                        <?= _meitalk_wallet_sec; ?>
                                                        <?= _meitalk_wallet_desc; ?>


                                                    </div>


                                                    <div class="s_platform_bg">
                                                        <img class="stream_circle img-fluid"
                                                            src="<?= asset(_img_meitalk_wallet) ?>" alt="img">
                                                    </div>



                                                    <div class="exchange_img_mob2">
                                                        <img class="streamingplatform img-fluid"
                                                            src="<?= asset(_img_meitalk_rewards_mob) ?>" alt="img">



                                                    </div>


                                                </div>
                                            </div>

                                            <div class="platform_icons">
                                                <img src="<?= asset('img/start/hert.png') ?>">
                                                <img src="<?= asset('img/banner/ball_icon.png') ?>">

                                            </div>
                                        </section>










                                    </div>
                                </div>





















                                <!---------hand video Sec---------->
                                <!-- <div class="hand-video">
                                    <div class="container">
                                        <h2><?= _link_platform ?></h2>
                                        <p><?= _link_platform_desc ?></p>
                                        <div class="inner-wrapper">
                                            <video autoplay="" loop="" muted="" playsinline="">
                                                <source src="<?= asset('img/start/iconvideomob-v-1.mp4') ?>"
                                                    type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div> -->






                                <!---------Receive stream Sec---------->
                                <!-- <section id="receive_sec">
                                    <div class="container">
                                        <div class="row justify-content-center align-items-center ">
                                            <div class="col-md-6">
                                                <div class="reveice_img1">
                                                    <img src="<?= asset('img/receive/eng1_v1.png') ?>" alt="img">



                                                    <div class="receivechat_icon"><img
                                                            src="<?= asset('img/receive/receivechat.png') ?>" alt="img">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="receive_content">
                                                    <?= _receivehead; ?>
                                                    <?= _receivebtn; ?>
                                                    <?= _receivedesc; ?>

                                                </div>
                                            </div>


                                            <div class="col-md-6 order-md-2">
                                                <div class="reveice_img1">
                                                    <img src="<?= asset('img/receive/eng2_v1.png') ?>" alt="img">


                                                    <div class="receivechat_icon2"><img
                                                            src="<?= asset('img/start/start_star.png') ?>" alt="img">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 order-md-1">
                                                <div class="receive_content content2">
                                                    <?= _earnhead; ?>
                                                    <?= _earnbtn; ?>
                                                    <?= _earndesc; ?>

                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="receive_icons">
                                        <img src="<?= asset('img/start/like_icon.png') ?>">
                                        <img src="<?= asset('img/banner/heart_icon.png') ?>">
                                        <img src="<?= asset('img/start/sml.png') ?>">
                                        <img src="<?= asset('img/start/smml.png') ?>">
                                    </div>
                                </section> -->

                            </div>
                            <div class="readmorebtn d-block d-md-none mt-4">
                                <button id="forclick4" class="btn btn-primary show_hide4 read_style2" type="button"
                                    data-toggle="collapse" data-target="#collapseExample4" aria-expanded="true"
                                    aria-controls="collapseExample4"><?= _viewMore ?></button>
                            </div>


                        </div>

                    </section>




                    <section id="eco_sec" class="d-block d-lg-none">

                        <div id="eco_real3" class="eco_realresearch">
                            <div class="container">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-md-12">
                                        <div class="realtime_head">
                                            <h3>Real Research</h3>
                                        </div>

                                        <div class="inner-wrapper d-block d-lg-none mb-5">

                                            <video src="<?= asset('img/eco_system/eco_realresearchv1.mp4') ?>"
                                                playsinline="" autoplay="" muted="" loop=""></video>

                                        </div>

                                    </div>
                                </div>



                                <div class="collapse show" data-view-more-text="<?= _viewMore ?>"
                                    data-view-less-text="<?= _viewLess ?>" id="collapseExample3">





                                    <div class="row mb-md-5 pb-md-5  align-items-center">
                                        <div class="col-md-6 order-md-2">

                                            <div class="inner-wrapper d-none d-lg-block">

                                                <video src="<?= asset('img/eco_system/eco_realresearchv1.mp4') ?>"
                                                    playsinline="" autoplay="" muted="" loop=""></video>


                                            </div>







                                        </div>
                                        <div class="col-md-6 order-md-1 mt-md-5">
                                            <div class="eco_real_head">
                                                <?= _eco_real_head; ?>

                                            </div>
                                            <div class="eco_real_content ">

                                                <?= _eco_real_content3; ?>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="global_num2">
                                                    <li>
                                                        <div class="gobal_icon2"><img
                                                                src="<?= asset('img/eco_system/real_icon1.svg') ?>">
                                                        </div>
                                                        <span>
                                                            <h2 class="count4" data-count="3000000"></h2>
                                                            <?= _num_user; ?>
                                                        </span>
                                                    </li>




                                                    <li>
                                                        <div class="gobal_icon2"><img
                                                                src="<?= asset('img/eco_system/real_icon2.svg') ?>">
                                                        </div>
                                                        <span>
                                                            <h2 class="count6" data-count="250000"></h2>
                                                            <?= _num_strmissued; ?>
                                                        </span>
                                                    </li>

                                                    <li>
                                                        <div class="gobal_icon2"><img
                                                                src="<?= asset('img/eco_system/real_icon3.svg') ?>">
                                                        </div>
                                                        <span>
                                                            <h2 class="count5" data-count="165"></h2>
                                                            <?= _num_countries; ?>
                                                        </span>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row align-items-center">

                                        <div class="col-md-6 order-md-2 mt-5 pl-md-5">
                                            <div class="eco_real_content">
                                                <img src="<?= asset('img/eco_system/real_cup1.png') ?>" alt="img">



                                                <?= _eco_real_content; ?>
                                            </div>

                                        </div>
                                        <div class="col-md-5 order-md-1 pr-md-5 mb-5">
                                            <img class="img-fluid" src="<?= asset('img/eco_system/eco_real1v1.png') ?>"
                                                alt="img">
                                        </div>
                                    </div>



                                </div>

                                <div class="readmorebtn d-block d-md-none">
                                    <button id="forclick3" class="btn btn-primary show_hide3 read_style2" type="button"
                                        data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false"
                                        aria-controls="collapseExample3">
                                        <?= _viewMore ?> </button>
                                </div>











                            </div>


                            <div class="eco_nft_icons3">
                                <img src="<?= asset('img/platforms/platform_tri.svg') ?>">
                                <img src="<?= asset('img/banner/heart_icon.png') ?>">
                                <img src="<?= asset('img/banner/ball_icon.png') ?>">
                                <img src="<?= asset('img/start/smml.png') ?>">
                            </div>


                        </div>







                    </section>







                    <div class="counter-container wow fadeInUp" id="test1" data-wow-delay="0.3s">
                        <div class="col-md-12">
                                 <div class="wlsc_sec">
                                <?= _wlsc_sec ?>


                            </div> 
                            <!-- <div class="Content">
                                <ul>
                                    <li id="days-timer" class="ProgressBar" data-progress="24">
                                        <svg class="ProgressBar-contentCircle">
                                            <circle transform="rotate(-90, 86, 100)" class="ProgressBar-background"
                                                cx="101" cy="99" r="82.5" />
                                            <circle data-color="yellow" transform="rotate(-90, 86, 100)"
                                                class="ProgressBar-circle" cx="101" cy="99" r="82.5" />
                                            <div class="text-wrapper">
                                                <span
                                                    class="ProgressBar-percentage ProgressBar-percentage--count">-</span>
                                                <span class="progress-title">Days</span>
                                            </div>
                                        </svg>
                                    </li>
                                    <li id="hours-timer" class="ProgressBar" data-progress="17">
                                        <svg class="ProgressBar-contentCircle">
                                            <circle transform="rotate(-90, 86, 100)" class="ProgressBar-background"
                                                cx="101" cy="99" r="82.5" />
                                            <circle data-color="success" transform="rotate(-90, 86, 100)"
                                                class="ProgressBar-circle" cx="101" cy="99" r="82.5" />
                                            <div class="text-wrapper">
                                                <span
                                                    class="ProgressBar-percentage ProgressBar-percentage--count">-</span>
                                                <span class="progress-title">Hours</span>
                                            </div>
                                        </svg>
                                    </li>
                                    <li id="min-timer" class="ProgressBar" data-progress="02">
                                        <svg class="ProgressBar-contentCircle">
                                            <circle transform="rotate(-90, 86, 100)" class="ProgressBar-background"
                                                cx="101" cy="99" r="82.5" />
                                            <circle data-color="primary" transform="rotate(-90, 86, 100)"
                                                class="ProgressBar-circle" cx="101" cy="99" r="82.5" />
                                            <div class="text-wrapper">
                                                <span
                                                    class="ProgressBar-percentage ProgressBar-percentage--count">-</span>
                                                <span class="progress-title">Min</span>
                                            </div>
                                        </svg>
                                    </li>
                                    <li id="sec-timer" class="ProgressBar" data-progress="13">
                                        <svg class="ProgressBar-contentCircle">
                                            <circle transform="rotate(-90, 86, 100)" class="ProgressBar-background"
                                                cx="101" cy="99" r="82.5" />
                                            <circle data-color="pink" transform="rotate(-90, 86, 100)"
                                                class="ProgressBar-circle" cx="101" cy="99" r="82.5" />
                                            <div class="text-wrapper">
                                                <span
                                                    class="ProgressBar-percentage ProgressBar-percentage--count">-</span>
                                                <span class="progress-title">SEC</span>
                                            </div>
                                        </svg>
                                    </li>
                                </ul>
                            </div> -->
                        </div>

                         <div class="sites_btn">
                            <?= _wlsc_site_btn ?>

                        </div> 
                        <!-- 
                        <div class="wlsc_video">
                            <video src="<?= asset('img/eco_system/wlsc1v1.mp4') ?>" playsinline="" autoplay="" muted=""
                                loop=""></video>
                        </div> -->


                        <div class="investor_sec pt-5" id="partner-sec">
                            <div class="container">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-md-12 mb-5">
                                        <?= _strategic_text ?>

                                    </div>

                                    <div class="col-6 col-md-4 mb-5">
                                        <a target="_blank" href="https://www.bnbchain.world/en/smartChain"><img
                                                src="<?= asset('img/investor/i1.png') ?>"></a>
                                    </div>
                                    <div class="col-6 col-md-4 mb-5">
                                        <a target="_blank" href="https://tncitgroup.com/"><img
                                                src="<?= asset('img/investor/i2.png') ?>"></a>
                                    </div>
                                    <div class="col-6 col-md-4 mb-5">
                                        <a target="_blank" href="https://meitalktv.com/"><img
                                                src="<?= asset('img/investor/i7.png') ?>"></a>
                                    </div>

                                    <div class="col-6 col-md-4 mb-5">
                                        <a target="_blank" href="https://www.slowmist.com/en/"><img
                                                src="<?= asset('img/investor/i4.png') ?>"></a>
                                    </div>
                                    <div class="col-6 col-md-4 mb-5">
                                        <a target="_blank" href="https://www.weblock.vip/"><img
                                                src="<?= asset('img/investor/i9.png') ?>"></a>
                                    </div>

                                    <div class="col-6 col-md-4 mb-5">
                                        <a target="_blank" href="https://twitter.com/akgventures"><img
                                                src="<?= asset('img/investor/i6.png') ?>"></a>
                                    </div>

                                    <div class="col-6 col-md-4 mb-5">
                                        <a target="_blank" href="https://realresearcher.com/"><img
                                                src="<?= asset('img/investor/i3.png') ?>"></a>
                                    </div>

                                    <div class="col-6 col-md-4 mb-5">
                                        <a target="_blank" href="https://daoverse.capital/"><img
                                                src="<?= asset('img/investor/i8.png') ?>"></a>
                                    </div>

                                    <div class="col-6 col-md-4 mb-5">
                                        <a target="_blank" href="https://metabasenet.work/"><img class="metalogo"
                                                src="<?= asset('img/investor/i5.png') ?>"></a>
                                    </div>



                                </div>
                            </div>
                        </div>


                        <div class="charity_sec pt-5">
                            <div class="container">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-md-12 mb-5">
                                        <?= _charity_text ?>

                                    </div>

                                    <div class="col-6 col-md-3 mb-5">
                                        <a target="_blank" href="https://archive.org/"><img
                                                src="<?= asset('img/charity/internetarchive.png') ?>"></a>
                                    </div>
                                    <div class="col-6 col-md-3 mb-5">
                                        <a target="_blank" href="https://www.givecrypto.org/"><img
                                                src="<?= asset('img/charity/givecrypto.png') ?>"></a>
                                    </div>
                                    <div class="col-6 col-md-3 mb-5">
                                        <a target="_blank" href="https://www.worldvision.org/"><img
                                                src="<?= asset('img/charity/worldvision.png') ?>"></a>
                                    </div>
                                    <div class="col-6 col-md-3 mb-5">
                                        <a target="_blank" href="https://onetreeplanted.org/pages/donate-crypto"><img
                                                src="<?= asset('img/charity/onetreeplanted.png') ?>"></a>
                                    </div>
                                    <div class="col-6 col-md-3 mb-5">
                                        <a target="_blank" href="https://www.thegivingblock.com/"><img
                                                src="<?= asset('img/charity/givingblock.png') ?>"></a>
                                    </div>
                                    <div class="col-6 col-md-3 mb-5">
                                        <a target="_blank" href="https://www.bitgivefoundation.org/"><img
                                                src="<?= asset('img/charity/bitgive.png') ?>"></a>
                                    </div>
                                    <div class="col-6 col-md-3 mb-5">
                                        <a target="_blank" href="https://www.unicef.org/"><img
                                                src="<?= asset('img/charity/unicef.png') ?>"></a>
                                    </div>


                                    <div class="col-6 col-md-3 mb-5">
                                        <a target="_blank" href="https://www.savethechildren.org/"><img
                                                src="<?= asset('img/charity/savethechildren.png') ?>"></a>
                                    </div>
                                    <div class="col-6 col-md-3 mb-5">
                                        <a target="_blank" href="https://www.pathwaystoeducation.ca/#donate"><img
                                                src="<?= asset('img/charity/pathwaystoeducation.png') ?>"></a>
                                    </div>

                                    <div class="col-6 col-md-3 mb-5">
                                        <a target="_blank" href="http://cryptocharityfund.com/"><img
                                                src="<?= asset('img/charity/cryptocharityfund.png') ?>"></a>
                                    </div>

                                    <div class="col-6 col-md-3 mb-5">
                                        <a target="_blank" href="https://www.directrelief.org/"><img
                                                src="<?= asset('img/charity/directrelief.png') ?>"></a>
                                    </div>
                                    <div class="col-6 col-md-3 mb-5">
                                        <a target="_blank" href="https://bithope.org/"><img
                                                src="<?= asset('img/charity/bithope.png') ?>"></a>
                                    </div>
                                </div>
                            </div>
                        </div>












                    </div>












                </div>
            </div>
























            <?php include "./includes/footer.php" ?>

        </section>









    </div>


    <!-- Back to top button -->
    <a id="button"><i class="fas fa-chevron-up"></i></a>


    <script src="<?= asset('js/jquery-3.2.1.js?v=1.2') ?>"></script>

    <script src="<?= asset('js/owl.carousel.min.js') ?>"></script>
    <script src="<?= asset('js/custom.js?ver=10.20') ?>"></script>

    <script src="<?= asset('js/bootstrap.min.js?ver=1.1') ?>"></script>


    <script>
    $(function() {
        if ($(window).width() <= 768) {
            $('#collapseExample').removeClass('show')
            $('.stream_tabs .tab-pane').addClass('active')
        }

        const sectionScroll = localStorage.getItem('_stream-coin-section-scroll')
        if (sectionScroll) {
            $('html, body').animate({
                scrollTop: $(sectionScroll).offset().top
            }, 500);
            localStorage.removeItem('_stream-coin-section-scroll')
        }
    })





    $(function() {
        if ($(window).width() <= 768) {
            $('#collapseExample2').removeClass('show')
        }
    })

    $(function() {
        if ($(window).width() <= 768) {
            $('#collapseExample3').removeClass('show')
        }
    })

    $(function() {
        if ($(window).width() <= 768) {
            $('#collapseExample4').removeClass('show')
        }

    })













    $('.bannerifram_holder span').click(function() {
        $(this).hide();
        let $video = $(".bannerifram_holder iframe")[0];
        var symbol = $video.src.indexOf("?") > -1 ? "&" : "?";
        $video.src += symbol + "autoplay=1";
    })


    var counted = 0;

    function counted_scroll() {
        var oTop = $('#bannervh').offset().top - window.innerHeight;
        if (counted == 0 && $(window).scrollTop() > oTop) {
            $('.count1').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                commaCount1 = $this.attr('data-count').replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                // console.log($this.attr('data-count').replace(/(\d{3}(?!,))/g, "$1,"));
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(commaCount1);
                    }
                });
            });
            $('.count2').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                commaCount2 = $this.attr('data-count').replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(commaCount2);
                    }
                });
            });
            $('.count3').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                commaCount3 = $this.attr('data-count').replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(commaCount3);
                    }
                });
            });

            $('.count4').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                commaCount4 = $this.attr('data-count').replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(commaCount4 + "+");
                    }
                });
            });
            $('.count5').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                commaCount5 = $this.attr('data-count').replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(commaCount5 + "+");
                    }
                });
            });
            $('.count6').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                commaCount6 = $this.attr('data-count').replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(commaCount6 + "+");
                    }
                });
            });
            counted = 1;

        } // if condition ends here
    }
    //counted_scroll();
    if (true) {
        $.ajax({
            url: "https://api.stream-live.io/",
            method: "GET",
            success: function(response) {
                $(".global_num li span h6.count1").attr('data-count', response[0].receiver_count)
                $(".global_num li span h6.count2").attr('data-count', response[0].count)
                counted_scroll();
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr)
                //alert('Error Code: '+xhr.status+'. '+thrownError+'. Please contact Admin.');
            }
        })
    }
    </script>





    <script>
    (function() {
        $(window).scroll(function(e) {
            var scroll = $(window).scrollTop();
            $(".navbar").removeClass("navbar-dark");
            if (scroll >= 100) {
                $(".navbar").addClass("navbar-dark");
            }
        })

        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        let birthday = "2022-03-25T00:00:00+04:00";
        countDown = new Date(birthday).getTime();
        x = setInterval(function() {

            let now = new Date().getTime(),
                distance = countDown - now;

            let $days = Math.floor(distance / (day));
            let $hours = Math.floor((distance % (day)) / (hour));
            let $min = Math.floor((distance % (hour)) / (minute));
            let $sec = Math.floor((distance % (minute)) / second);

            let timerArr = ['days-timer', 'hours-timer', 'min-timer', 'sec-timer'];

            $.each(timerArr, function(ii, ele) {
                let $element = $("#" + ele);
                let $value = eval('$' + ele.split('-')[0]);
                $element.find(".ProgressBar-percentage--count").text($value);
                let $circle = $element.find('.ProgressBar-circle');
                let radius = $circle.attr('r');
                let diameter = radius * 2;
                let circumference = Math.round(Math.PI * diameter);
                let total = 0;
                if (ele == "days-timer") {
                    total = 100;
                } else {
                    total = 60;
                }
                let percentage = circumference * $value / total;
                $circle.css({
                    'stroke-dasharray': circumference,
                    'stroke-dashoffset': percentage
                })
            })
        }, 0)
        $('[data-toggle="popover"]').popover()

        $('.page-loader').fadeOut();

    }());

    $("body").on('click', '[data-toggle="popover"]', function(e) {
        e.preventDefault();
        let $this = $(this);
        setTimeout(function() {
            $this.popover('hide')
        }, 1000)
    });

    if ($(window).width() < 768) {
        $('.ProgressBar circle').attr('cx', 115).attr('cy', 84).attr('r', 68)
    }
    wow = new WOW({
        mobile: false, // default
        live: true // default
    })
    wow.init();
    </script>







</body>

</html>