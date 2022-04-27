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


    <title>StreamCoin Public Sale (ICO)</title>
    <meta name="description" content="StreamCoin public sale has commenced on the 1st of February. Come, Join us to revolutionize the live streaming industry!">
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
</head>

<body>
    <script>
        function changeLang(lang) {
            // document.getElementById('form_lang').submit();
        }

        function changeLanguage(lang) {
            window.location.href = "<?= ROUTE_PHP_SELF; ?>" + lang + "/public-sale"
        }
    </script>
    <style>
        /*.navbar{min-height: 74px}*/
        /*.navbar-brand img{display: none !important}*/
    </style>


    <!----Navbar Sec---->
    <div id="nav-parent">
        <?php include './nav.php'; ?>
    </div>


    <!---------Platform Sec---------->
    <section id="token_sec">
        <div class="token-bg">
            <div class="container">
                <div class="token_content">
                    <!--<a href="./"><img src="img/logostream.png" alt="img"></a>-->

                    <?php
                    $counter = false;
                    include "./includes/stream-public-sale-content.php";

                    ?>

                    <a target="_blank" class="btn-orange-lg" style="margin:auto" href="https://ico.stream-coin.com">
                        <?= _buystrm; ?></a>

                    <img class="start_w2" src="<?= asset('img/banner/w_icon.png') ?>" alt="img">
                    <div class="ballicon2 "><img src="<?= asset('img/banner/ball_icon.png') ?>" alt="img"></div>
                    <div class="tokenicon3 "><img src="<?= asset('img/token_sale/tokenicon_3.png') ?>" alt="img"></div>
                    <div class="tokenicon4 "><img src="<?= asset('img/token_sale/tokenicon_4.png') ?>" alt="img"></div>
                    <img class="tokenicon5" src="<?= asset('img/start/star_n.png') ?>" alt="img">
                </div>



                <div style="padding-top:40px;" class="token_data">
                    <p style="word-break: break-word">
                        <span style="color: #ED2124">
                            <?= _public_sale_address_note ?>
                            <br>
                            <br>
                            <?= _public_sale_address ?>
                        </span>
                        <a target="_blank" href="https://bscscan.com/address/0xc598275452fa319d75ee5f176fd3b8384925b425">
                            <b>0xC598275452fA319d75ee5f176FD3B8384925b425</b>
                            <svg aria-hidden="true" height="15" style="margin-top: -5px" width="15" focusable="false" data-prefix="fas" data-icon="external-link-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-external-link-alt fa-w-16 fa-2x ml-1">
                                <path fill="currentColor" d="M432,320H400a16,16,0,0,0-16,16V448H64V128H208a16,16,0,0,0,16-16V80a16,16,0,0,0-16-16H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V336A16,16,0,0,0,432,320ZM488,0h-128c-21.37,0-32.05,25.91-17,41l35.73,35.73L135,320.37a24,24,0,0,0,0,34L157.67,377a24,24,0,0,0,34,0L435.28,133.32,471,169c15,15,41,4.5,41-17V24A24,24,0,0,0,488,0Z" class=""></path>
                            </svg>
                        </a>
                    </p>
                    <br>
                    <?= _disclaimer1; ?>
                    <br>
                    <?= _disclaimer2; ?>
                </div>
            </div>
        </div>
        <div class="token_distribution pt-5" id="token-distribution">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="token_head">
                            <?= _tokendist; ?>
                            <?= _token_head_p; ?>
                        </div>

                    </div>
                    <div class="col-md-3">

                        <div class="tokeconimic_sec" style="margin-top: 30px;">
                            <?= _token_nomics; ?>

                            <?= _token_contentt1; ?>

                            <?= _token_contentt22; ?>

                            <?= _token_contentt23; ?>

                            <?= _token_contentt4; ?>

                            <?= _token_contentt5; ?>

                            <!-- <?= _token_contentt2; ?> -->







                            <?= _token_contentt6; ?>
                        </div>



                    </div>


                    <div class="col-md-4  pl-md-5">
                        <div class="tokeconimic_sec tokeconimic_box">
                            <?= _token_burn11; ?>

                        </div>
                    </div>


                    <div class="col-md-5 ">
                        <div class="token_img">

                            <?= _token_months11; ?>
                            <img class='img-fluid mt-md-5' src='<?= asset(_token_2022); ?>' alt='img'>
                            <!-- <p style="font-style: italic;"><b>Vesting Period:</b></p>
                            <p style="font-style: italic;">Advisors and partners allocation will vest one year starting from the listing date, and only 5% will be released every following month.</p>

                            <p style="font-style: italic;">Company allotment will vest two years from the listing date, and only 5% will be released every following month.</p> -->

                        </div>
                    </div>


                    <div class="col-md-12 mt-md-5 mb-md-5">
                        <?= _vesting_period11; ?>
                    </div>











                </div>



            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 pr-md-5">
                        <?= _private_sale11; ?>

                    </div>


                    <div class="col-md-6 pl-md-5">
                        <?= _ecosystem11; ?>

                    </div>
















                </div>
            </div>




        </div>

        <!--------- Send and Receive---------->
        <section id="send_sec" class="d-none d-lg-block">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center ">


                    <div class="col-md-12">
                        <div class="Stream_Platform">
                            <?= _sendreceiveheading; ?>
                            <?= _sendreceivedesc; ?>


                        </div>


                        <div class="send_img">
                            <div class="row d-flex row-lg-item-5  justify-content-center">


                                <div class="col-6 col-md-4 col-lg-3">
                                    <a class="send1_icon" href="https://aladdinprowallet.com/" target="_blank"><img src="<?= asset('img/sendnreceive/send6.png') ?>" alt="img"></a>
                                    <div class="send_mob">
                                        <img class="send11_img" src="<?= asset('img/sendnreceive/send66.png') ?>" alt="">

                                        <div class="overlay">
                                            <ul class="sendul">
                                                <li><a target="_blank" href="https://apps.apple.com/gb/app/aladdin-pro/id1481967751"><img src="<?= asset('img/sendnreceive/apple_icon.svg') ?>" alt=""></a></li>
                                                <li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.abbc.aladdin.pro"><img src="<?= asset('img/sendnreceive/google_icon.svg') ?>" alt=""></a></li>
                                                <!-- <li><a target="_blank" href="https://trustwallet.com/"><img src="<?= asset('img/sendnreceive/window_icon.svg') ?>" alt=""></a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4 col-lg-3">
                                    <a class="send1_icon" href="https://trustwallet.com/" target="_blank"><img src="<?= asset('img/sendnreceive/send5.png') ?>" alt="img"></a>
                                    <div class="send_mob">
                                        <img class="send11_img" src="<?= asset('img/sendnreceive/send55_v1.png') ?>" alt="">

                                        <div class="overlay">
                                            <ul class="sendul">
                                                <li><a target="_blank" href="https://apps.apple.com/app/apple-store/id1288339409?mt=8"><img src="<?= asset('img/sendnreceive/apple_icon.svg') ?>" alt=""></a></li>
                                                <li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.wallet.crypto.trustapp&hl=en&gl=US"><img src="<?= asset('img/sendnreceive/google_icon.svg') ?>" alt=""></a></li>
                                                <li><a target="_blank" href="https://trustwallet.com/"><img src="<?= asset('img/sendnreceive/window_icon.svg') ?>" alt=""></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <a class="send1_icon" href="https://metamask.io/" target="_blank"><img src="<?= asset('img/sendnreceive/send2.png') ?>" alt="img"></a>
                                    <div class="send_mob">
                                        <img class="send11_img" src="<?= asset('img/sendnreceive/send22_v1.png') ?>" alt="">

                                        <div class="overlay">
                                            <ul class="sendul">
                                                <li><a target="_blank" href="https://apps.apple.com/us/app/metamask/id1438144202?_branch_match_id=826070198514554376"><img src="<?= asset('img/sendnreceive/apple_icon.svg') ?>" alt=""></a></li>
                                                <li><a target="_blank" href="https://play.google.com/store/apps/details?id=io.metamask&hl=en_US&ref=producthunt&_branch_match_id=826070198514554376"><img src="<?= asset('img/sendnreceive/google_icon.svg') ?>" alt=""></a></li>
                                                <li><a target="_blank" href="https://metamask.io/"><img src="<?= asset('img/sendnreceive/window_icon.svg') ?>" alt=""></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <a class="send1_icon" href="https://token.im/" target="_blank"><img src="<?= asset('img/sendnreceive/send1.png') ?>" alt="img"></a>
                                    <div class="send_mob">
                                        <img class="send11_img" src="<?= asset('img/sendnreceive/send33_v1.png') ?>" alt="">

                                        <div class="overlay">
                                            <ul class="sendul">
                                                <li><a target="_blank" href="https://apps.apple.com/us/app/imtoken-btc-eth-wallet/id1384798940"><img src="<?= asset('img/sendnreceive/apple_icon.svg') ?>" alt=""></a></li>
                                                <li><a target="_blank" href="https://play.google.com/store/apps/details?id=im.token.app&hl=en&gl=US"><img src="<?= asset('img/sendnreceive/google_icon.svg') ?>" alt=""></a></li>
                                                <li><a target="_blank" href="https://token.im/"><img src="<?= asset('img/sendnreceive/window_icon.svg') ?>" alt=""></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <a class="send1_icon" href="https://www.myetherwallet.com/" target="_blank"><img src="<?= asset('img/sendnreceive/send4.png') ?>" alt="img"></a>
                                    <div class="send_mob">
                                        <img class="send11_img" src="<?= asset('img/sendnreceive/send44_v1.png') ?>" alt="">

                                        <div class="overlay">
                                            <ul class="sendul">
                                                <li><a target="_blank" href="https://apps.apple.com/us/app/mew-wallet-ethereum-and-defi/id1464614025"><img src="<?= asset('img/sendnreceive/apple_icon.svg') ?>" alt=""></a></li>
                                                <li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.myetherwallet.mewwallet&hl=en&gl=US"><img src="<?= asset('img/sendnreceive/google_icon.svg') ?>" alt=""></a></li>
                                                <li><a target="_blank" href="https://www.myetherwallet.com/"><img src="<?= asset('img/sendnreceive/window_icon.svg') ?>" alt=""></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>


                        <div id="send">


                            <div class="owl-carousel owl-theme">

                                <div class="item">
                                    <a class="send1_icon" href="https://trustwallet.com/" target="_blank"><img src="<?= asset('img/sendnreceive/send5.png') ?>" alt="img"></a>
                                    <div class="send_mob">
                                        <img class="send11_img" src="<?= asset('img/sendnreceive/send55.png') ?>" alt="">

                                        <div class="overlay">
                                            <ul class="sendul">
                                                <li><a target="_blank" href="https://apps.apple.com/app/apple-store/id1288339409?mt=8"><img src="<?= asset('img/sendnreceive/apple_icon.svg') ?>" alt=""></a></li>
                                                <li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.wallet.crypto.trustapp&hl=en&gl=US"><img src="<?= asset('img/sendnreceive/google_icon.svg') ?>" alt=""></a></li>
                                                <li><a target="_blank" href="https://trustwallet.com/"><img src="<?= asset('img/sendnreceive/window_icon.svg') ?>" alt=""></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <a class="send1_icon" href="https://metamask.io/" target="_blank"><img src="<?= asset('img/sendnreceive/send2.png') ?>" alt="img"></a>
                                    <div class="send_mob">
                                        <img class="send11_img" src="<?= asset('img/sendnreceive/send22.png') ?>" alt="">

                                        <div class="overlay">
                                            <ul class="sendul">
                                                <li><a target="_blank" href="https://apps.apple.com/us/app/metamask/id1438144202?_branch_match_id=826070198514554376"><img src="<?= asset('img/sendnreceive/apple_icon.svg') ?>" alt=""></a></li>
                                                <li><a target="_blank" href="https://play.google.com/store/apps/details?id=io.metamask&hl=en_US&ref=producthunt&_branch_match_id=826070198514554376"><img src="<?= asset('img/sendnreceive/google_icon.svg') ?>" alt=""></a></li>
                                                <li><a target="_blank" href="https://metamask.io/"><img src="<?= asset('img/sendnreceive/window_icon.svg') ?>" alt=""></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <a class="send1_icon" href="https://token.im/" target="_blank"><img src="<?= asset('img/sendnreceive/send1.png') ?>" alt="img"></a>
                                    <div class="send_mob">
                                        <img class="send11_img" src="<?= asset('img/sendnreceive/send33.png') ?>" alt="">

                                        <div class="overlay">
                                            <ul class="sendul">
                                                <li><a target="_blank" href="https://apps.apple.com/us/app/imtoken-btc-eth-wallet/id1384798940"><img src="<?= asset('img/sendnreceive/apple_icon.svg') ?>" alt=""></a></li>
                                                <li><a target="_blank" href="https://play.google.com/store/apps/details?id=im.token.app&hl=en&gl=US"><img src="<?= asset('img/sendnreceive/google_icon.svg') ?>" alt=""></a></li>
                                                <li><a target="_blank" href="https://token.im/"><img src="<?= asset('img/sendnreceive/window_icon.svg') ?>" alt=""></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <a class="send1_icon" href="https://www.myetherwallet.com/" target="_blank"><img src="<?= asset('img/sendnreceive/send4.png') ?>" alt="img"></a>
                                    <div class="send_mob">
                                        <img class="send11_img" src="<?= asset('img/sendnreceive/send44.png') ?>" alt="">

                                        <div class="overlay">
                                            <ul class="sendul">
                                                <li><a target="_blank" href="https://apps.apple.com/us/app/mew-wallet-ethereum-and-defi/id1464614025"><img src="<?= asset('img/sendnreceive/apple_icon.svg') ?>" alt=""></a></li>
                                                <li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.myetherwallet.mewwallet&hl=en&gl=US"><img src="<?= asset('img/sendnreceive/google_icon.svg') ?>" alt=""></a></li>
                                                <li><a target="_blank" href="https://www.myetherwallet.com/"><img src="<?= asset('img/sendnreceive/window_icon.svg') ?>" alt=""></a></li>
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

    </section>









    <script src="<?= asset('js/jquery.js') ?>"></script>
    <script src="<?= asset('js/owl.carousel.min.js') ?>"></script>
    <script src="<?= asset('js/custom.js?ver=3.7') ?>"></script>
    <script src="<?= asset('js/bootstrap.min.js') ?>"></script>

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
    </script>

</body>

</html>