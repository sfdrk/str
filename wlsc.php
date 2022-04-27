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

    <title>StreamCoin at World Live Streamers Conference (WLSC) 2022</title>
    <meta name="description" content="StreamCoin participation at WLSC 2022 comprised the CEO Keynote speeches, a panel discussion about NFT, MeiTalk's Alpha launch, and more.">
    <link rel="stylesheet" href="<?= asset('css/owl.carousel.min.css') ?>" />
    <link rel="stylesheet" href="<?= asset('css/owl.theme.default.min.css') ?>" />
    <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('css/style.min.css?ver=23.1') ?>" rel="stylesheet">
    <link href="<?= asset('css/responsive.css?ver=23.1') ?>" rel="stylesheet">
    <link href="<?= asset('font-awesome/css/all.min.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" type="text/css" media="screen" />



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
            window.location.href = "<?= ROUTE_PHP_SELF; ?>" + lang + "/wlsc"
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
                <section class="wlsc_section">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-12">
                                <div class="wlsc_head">
                                <?= _wlsc_headtext; ?>

                                </div>
                                <img class="img-fluid" src="<?= asset('img/wlsc/wlsc_group.png') ?>">

                                <div class="gallery">
                                    <a id="wlsc_gallary" href="<?= asset('img/wlsc/wlsc1.jpg') ?>" class="wlsc_view_btn">View More</a>
                                </div>



                                <div style="display:none" class="gallery">
                                    <a href="<?= asset('img/wlsc/wlsc2.jpg') ?>"><img class="img-fluid" src="<?= asset('img/wlsc/wlsc2.jpg') ?>"></a>
                                    <a href="<?= asset('img/wlsc/wlsc3.jpg') ?>"><img class="img-fluid" src="<?= asset('img/wlsc/wlsc3.jpg') ?>"></a>
                                 

                
                                    <a href="<?= asset('img/wlsc/wlsc9.jpg') ?>"><img class="img-fluid" src="<?= asset('img/wlsc/wlsc9.jpg') ?>"></a>
                                    <a href="<?= asset('img/wlsc/wlsc10.jpg') ?>"><img class="img-fluid" src="<?= asset('img/wlsc/wlsc10.jpg') ?>"></a>
                                    <a href="<?= asset('img/wlsc/wlsc11.jpg') ?>"><img class="img-fluid" src="<?= asset('img/wlsc/wlsc11.jpg') ?>"></a>
                                    <a href="<?= asset('img/wlsc/wlsc12.jpg') ?>"><img class="img-fluid" src="<?= asset('img/wlsc/wlsc12.jpg') ?>"></a>
                                    <a href="<?= asset('img/wlsc/wlsc13.jpg') ?>"><img class="img-fluid" src="<?= asset('img/wlsc/wlsc13.jpg') ?>"></a>
                                    <a href="<?= asset('img/wlsc/wlsc14.jpg') ?>"><img class="img-fluid" src="<?= asset('img/wlsc/wlsc14.jpg') ?>"></a>
                                    <a href="<?= asset('img/wlsc/wlsc15.jpg') ?>"><img class="img-fluid" src="<?= asset('img/wlsc/wlsc15.jpg') ?>"></a>
                                    <!-- <a href="<?= asset('img/wlsc/wlsc16.jpg') ?>"><img class="img-fluid" src="<?= asset('img/wlsc/wlsc16.jpg') ?>"></a> -->
                                    <a href="<?= asset('img/wlsc/wlsc17.jpg') ?>"><img class="img-fluid" src="<?= asset('img/wlsc/wlsc17.jpg') ?>"></a>
                                    <a href="<?= asset('img/wlsc/wlsc18.jpg') ?>"><img class="img-fluid" src="<?= asset('img/wlsc/wlsc18.jpg') ?>"></a>
                                    <a href="<?= asset('img/wlsc/wlsc19.jpg') ?>"><img class="img-fluid" src="<?= asset('img/wlsc/wlsc19.jpg') ?>"></a>
                                    <a href="<?= asset('img/wlsc/wlsc20.jpg') ?>"><img class="img-fluid" src="<?= asset('img/wlsc/wlsc20.jpg') ?>"></a>

                                </div>



                                <div class="wlsc_days">

                                    <?= _wlsc_day1; ?>

                                    <iframe width="100%" height="580" src="https://www.youtube.com/embed/c9TWRM89o2Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                    <?= _wlsc_day2; ?>

                                    <iframe width="100%" height="580" src="https://www.youtube.com/embed/vYnKCfQVhCY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>


                                <div class="wlsc_top100">
                                    <h4>Top 100 Influencers Awards</h4>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <iframe width="100%" height="450" src="https://www.youtube.com/embed/uvoHGH7pDgk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <iframe width="100%" height="450" src="https://www.youtube.com/embed/5Zet5slJ67Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <?php include "./includes/footer.php" ?>
        </div>

    </div>
    <!-- Back to top button -->
    <a id="button"><i class="fas fa-chevron-up"></i></a>


    <script src="<?= asset('js/jquery.js') ?>"></script>
    <script src="<?= asset('js/owl.carousel.min.js') ?>"></script>
    <script src="<?= asset('js/custom.js?ver=10.11') ?>"></script>
    <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <script>
        $(document).ready(function() {
            // add all to same gallery
            $(".gallery a").attr("data-fancybox", "mygallery");
            // assign captions and title from alt-attributes of images:
            $(".gallery a").each(function() {
                $(this).attr("data-caption", $(this).find("img").attr("alt"));
                $(this).attr("title", $(this).find("img").attr("alt"));
            });
            // start fancybox:
            $(".gallery a").fancybox();
        });
    </script>


</body>

</html>