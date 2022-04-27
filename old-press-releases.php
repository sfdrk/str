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
    <title><?= _press_meta_title ?></title>
    <meta name="description" content="<?= _pressrelease_meta_description ?>">
    <meta name="keywords" content="StreamCoin, Stream, STRM, STREAM, Streamcoin">
    <link rel="canonical" href="https://stream-coin.com/">
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
            window.location.href = "<?= ROUTE_PHP_SELF; ?>" + lang + "/press-releases"
        }
    </script>

    <!----Navbar Sec---->
    <div id="nav-parent">
        <?php include './nav.php'; ?>
    </div>






    <div class="bg_holder">






        <section id="send_sec">
            <div class="container">
                <div class="row justify-content-center align-items-center ">


                    <div class="col-md-12 mt-5">

                        <div class="Stream_Platform">
                            <?= _stream_platform_head; ?>


                        </div>


                        <div class="press_img">
                            <div class="row">

                                <!-- media order start -->


                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-24.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin, 유틸리티 토큰 GaStream(GSRM) 출시</p>
                                    <a href="https://www.coinreaders.com/27176" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-24.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin Launches New Utility Token, GaStream (GSTRM)...</p>
                                    <a href="https://zycrypto.com/streamcoin-launches-new-utility-token-gastream-gstrm-to-reward-users-and-power-its-ecosystem/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-24.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">GaStream (GSTRM), StreamCoin’s Latest Utility Token Revealed...</p>
                                    <a href="https://techbullion.com/gastream-gstrm-streamcoins-latest-utility-token-revealed-via-airdrops/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-24.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin Launched GaStream (GSTRM), a New Utility...</p>
                                    <a href="https://finance.yahoo.com/news/streamcoin-launched-gastream-gstrm-utility-210000823.html" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-24.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin Launched GaStream (GSTRM), a New Utility...</p>
                                    <a href="https://news.yahoo.com/news/streamcoin-launched-gastream-gstrm-utility-210000823.html" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-24.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin Launched GaStream (GSTRM), a New Utility...</p>
                                    <a href="https://money.yahoo.com/news/streamcoin-launched-gastream-gstrm-utility-210000823.html" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-24.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin’s latest announcement GaStream utility token...</p>
                                    <a href="https://ambcrypto.com/streamcoins-latest-announcement-gastream-utility-token-with-an-airdrop-to-follow/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-24.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin Announces the Launch of a New Utility Token; GaStream (GSTRM)</p>
                                    <a href="https://cryptomode.com/streamcoin-announces-the-launch-of-a-new-utility-token-gastream-gstrm/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-24.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">GaStream (GSTRM): StreamCoin’s New Utility Token Announced...</p>
                                    <a href="https://coingape.com/gastream-gstrm-streamcoins-new-utility-token-announced-with-a-special-airdrop/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-24.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">GaStream (GSTRM): StreamCoin's New Utility Token Announced...</p>
                                    <a href="https://coincodex.com/article/13994/gastream-gstrm-streamcoins-new-utility-token-announced-with-a-special-airdrop/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-24.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin Launched GaStream (GSTRM), a New Utility Token to Power...</p>
                                    <a href="https://coincodecap.com/streamcoin-launched-gastream-gstrm-a-new-utility-token-to-power-its-ecosystem-and-reward-users" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>



                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-25.jpg') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">GaStream (GSTRM), StreamCoin’s Latest Utility Token Revealed Via Airdrops!</p>
                                    <a href="https://www.thecoinrepublic.com/2022/03/23/gastream-gstrm-streamcoins-latest-utility-token-revealed-via-airdrops/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-25.jpg') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin launches GaStream (GSTRM) utility token with an airdrop...</p>
                                    <a href="https://www.cryptoninjas.net/2022/03/25/streamcoin-launches-gastream-gstrm-utility-token-with-an-airdrop-to-follow/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-25.jpg') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">GaStream (GSTRM), StreamCoin’s Latest Utility Token Revealed...</p>
                                    <a href="https://nulltx.com/gastream-gstrm-streamcoins-latest-utility-token-revealed-via-airdrops/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-25.jpg') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">GaStream (GSTRM), StreamCoin’s Latest Utility Token Revealed...</p>
                                    <a href="https://themerkle.com/gastream-gstrm-streamcoins-latest-utility-token-revealed-via-airdrops/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-25.jpg') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin Announces the Launch Of A New Utility Token; GaStream (GSTRM)</p>
                                    <a href="https://coinpedia.org/press-release/streamcoin-announces-the-launch-of-a-new-utility-token-gastream-gstrm/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-26.jpg') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin Launched GaStream (GSTRM), a New Utility Token to Power...</p>
                                    <a href="https://crypto.news/streamcoin-launched-gastream-gstrm-a-new-utility-token-to-power-its-ecosystem-and-reward-users/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-27.jpg') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin’s Latest Announcement, the GaStream (GSTRM) Utility...</p>
                                    <a href="https://u.today/press-releases/streamcoins-latest-announcement-the-gastream-gstrm-utility-token-with-an-airdrop-to" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>














                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-12.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">STREAMCOIN CEO Michael Ein Chaybeh Speaks On StreamCoin
                                        Burning Among...</p>
                                    <a href="https://zycrypto.com/stream-ceo-michael-ein-chaybeh-speaks-on-stream-coin-burning-among-other-updates/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-7.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">Breaking: STREAMCOIN Announces STRM Coin Burn</p>
                                    <a href="https://www.newsbtc.com/press-releases/breaking-stream-announces-strm-coin-burn/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-11.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin (STRM) CEO Ends 2021 with Groundbreaking
                                        Announcements</p>
                                    <a href="https://www.cryptonewsz.com/stream-coin-ceo-ends-2021-with-groundbreaking-announcements/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-18.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin Burn: Here’s Everything You Need to Know</p>
                                    <a href="https://thenewscrypto.com/stream-coin-burn-heres-everything-you-need-to-know/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-11.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">STREAMCOIN CEO Michael Ein Chaybeh Shares News on StreamCoin
                                        Burning</p>
                                    <a href="https://coinquora.com/stream-ceo-michael-ein-chaybeh-shares-news-on-stream-coin-burning/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-5.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin (STRM) Shifts Gear as Public Sale Approaches in
                                        February</p>
                                    <a href="https://coingape.com/stream-coin-strm-shifts-gear-as-public-sale-approaches-in-february/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>


                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-3.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">Users Voice Their Support StreamCoins’ Upcoming Public Sale
                                    </p>
                                    <a href="https://www.newsbtc.com/press-releases/users-voice-their-support-stream-coins-upcoming-public-sale/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-13.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin Launches Public Sale in February, Integrates
                                        Blockchain With...</p>
                                    <a href="https://btcmanager.com/stream-coin-launches-public-sale-in-february-integrates-blockchain-with-live-streaming/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>


                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-4.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin (STRM) Support Increasing as Public Sale
                                        Approaches</p>
                                    <a href="https://www.livebitcoinnews.com/stream-coin-strm-support-increasing-as-public-sale-approaches/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-1.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin (STRM) A New-Gen Platform for Millennials — Live
                                        Streaming...</p>
                                    <a href="https://bitcoinist.com/stream-strm-a-new-gen-platform-for-millennials-live-streaming-with-blockchain/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-14.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin (STRM) Revolutionizes Live Streaming Industry</p>
                                    <a href="https://www.cryptonewsz.com/stream-coin-revolutionizes-live-streaming-industry/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-16.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title">StreamCoin - An All-in-One Multi-streaming Platform
                                        Empower...</p>
                                    <a href="https://markets.businessinsider.com/news/stocks/StreamCoin---an-all-in-one-multi-streaming-platform-empowering-streamers-and-viewers-1031039449" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-19.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin Integrates Blockchain Technology with Live
                                        Streaming</p>
                                    <a href="https://www.bloomberg.com/press-releases/2021-11-30/StreamCoin-integrates-blockchain-technology-with-live-streaming" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>


                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-1.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">This Blockchain-based Platform Aims To Change the Way You
                                        Stream</p>
                                    <a href="https://www.entrepreneur.com/article/399480" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>


                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-17.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin — A Blockchain-Based Rewarding Live Streaming
                                        Platform</p>
                                    <a href="https://thenewscrypto.com/stream-live-a-blockchain-based-rewarding-live-streaming-platform/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-15.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin — A Unique Live Streaming Turned Profitable
                                        Platform</p>
                                    <a href="https://btcmanager.com/stream-live-a-unique-live-streaming-turned-profitable-platform/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-7.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin — The All-in-One Streaming Platform Powered by
                                        Blockchain</p>
                                    <a href="https://coinquora.com/stream-live-the-all-in-one-streaming-platform-powered-by-blockchain/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-8.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title ">StreamCoin Announces All-in-One Streaming Platform</p>
                                    <a href="https://u.today/press-releases/stream-live-announces-all-in-one-streaming-platform" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>


                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-7.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title">StreamCoin - Innovative Blockchain Solution for Live
                                        Broadcasting Industry
                                    </p>
                                    <a href="https://finance.yahoo.com/news/stream-live-innovative-blockchain-solution-194600648.html" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>


                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-9.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title">StreamCoin — Revolutionising Online Live Streaming Industry
                                    </p>
                                    <a href="https://coinpedia.org/press-release/stream-live-revolutionising-online-streaming/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-19.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title">Ongoing StreamCoin presale gains massive support, gears up
                                        for public...</p>
                                    <a href="https://cointelegraph.com/press-releases/ongoing-stream-live-presale-gains-massive-support-gears-up-for-public-sale-in-february" class="press-a" target="_blank"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-17.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title">StreamCoin — All-in-One Live Streaming Platform Based on
                                        Blockchain Technology</p>
                                    <a href="https://coingape.com/stream-live-all-in-one-live-streaming-platform-based-on-blockchain-technology/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-9.png') ?>" alt="img">
                                    </a>
                                    <p class="press-title">StreamCoin — Innovative Blockchain Solution for Live
                                        Broadcasting Industry</p>
                                    <a href="https://www.newsbtc.com/press-releases/stream-live-innovative-blockchain-solution-for-live-broadcasting-industry/" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-21.jpg') ?>" alt="img">
                                    </a>
                                    <p class="press-title">StreamCoin ICO to Launch on February 1 for Its Web3 Live
                                        Streaming Platform</p>
                                    <a href="https://www.investing.com/news/cryptocurrency-news/stream-ico-to-launch-on-february-1-for-its-web3-live-streaming-platform-2748628" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>


                                <div class="col-md-4 mt-5">
                                    <a class="" href="#">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-23.jpg') ?>" alt="img">
                                    </a>
                                    <p class="press-title">StreamCoin to launch ICO on 1 February followed by listing on
                                        100+ exchanges</p>
                                    <a href="https://ambcrypto.com/stream-coin-to-launch-ico-on-1-february-followed-by-listing-on-100-exchanges" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>


                                <div class="col-md-4 mt-5">
                                    <a class="" href="https://finance.yahoo.com/news/stream-coin-announces-launching-ico-090000476.html">
                                        <img style="border-radius: 10px;" class="img-fluid" src="<?= asset('img/press/press-20.jpg') ?>" alt="img">
                                    </a>
                                    <p class="press-title">StreamCoin Announces Launching of ICO for Its
                                        Blockchain-Based Live Streaming... </p>
                                    <a href="https://finance.yahoo.com/news/stream-coin-announces-launching-ico-090000476.html" target="_blank" class="press-a"><?= _stream_press_link; ?></a>
                                </div>



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



    </div>


    <!-- Back to top button -->
    <a id="button"><i class="fas fa-chevron-up"></i></a>


    <script src="<?= asset('js/jquery-3.2.1.js?v=1.2') ?>"></script>

    <script src="<?= asset('js/owl.carousel.min.js') ?>"></script>
    <script src="<?= asset('js/custom.js?ver=10.15') ?>"></script>

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

        $('.bannerifram_holder span').click(function() {
            $(this).hide();
            let $video = $(".bannerifram_holder iframe")[0];
            var symbol = $video.src.indexOf("?") > -1 ? "&" : "?";
            $video.src += symbol + "autoplay=1";
        })


        var counted = 0;
        $(window).ready(function() {
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


                    counted = 1;

                } // if condition ends here
            } // Scrowll function ends here
            if (document.getElementById('bannervh')) {
                counted_scroll();
            }

        });
    </script>

    <!----Footer Sec---->
    <?php include "./includes/footer.php" ?>


</body>

</html>