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
    <title><?= _video_meta_title ?></title>
    <meta name="description" content="<?= _officalvideo_meta_description ?>">
    <meta name="keywords" content="Stream Coin, Stream, STRM, STREAM, Streamcoin">
    <link rel="canonical" href="https://stream-coin.com/">
    <link rel="stylesheet" href="<?= asset('css/owl.carousel.min.css') ?>" />
    <link rel="stylesheet" href="<?= asset('css/owl.theme.default.min.css') ?>" />
    <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('css/style.min.css?ver=17.9') ?>" rel="stylesheet">
    <link href="<?= asset('css/responsive.css?ver=15.28') ?>" rel="stylesheet">
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
            window.location.href = "<?= ROUTE_PHP_SELF; ?>" + lang + "/official-videos"
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
                            <?= _stream_video_head; ?>
                            
                            

                        </div>


                        <div class="press_img">
                            <div class="row">


                                <!-- .. -->
                                <div class="col-md-4 mt-5">
                                    <iframe width="100%" height="198" src="https://www.youtube.com/embed/R954cgPDkHc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p class="press-title">MeiTalk Alpha Ver. Launch by CEO Michael Ein Chaybeh at WLSC 2022</p>
                                    <a href="https://www.youtube.com/watch?v=R954cgPDkHc" target="_blank" class="press-a video_btn"><?= _stream_video_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <iframe width="100%" height="198" src="https://www.youtube.com/embed/vYnKCfQVhCY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p class="press-title">World Live Streamers Conference in Dubai (WLSC) 2022 - Day 2</p>
                                    <a href="https://www.youtube.com/watch?v=vYnKCfQVhCY&t=9732s" target="_blank" class="press-a video_btn"><?= _stream_video_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <iframe width="100%" height="198" src="https://www.youtube.com/embed/c9TWRM89o2Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p class="press-title">World Live Streamers Conference in Dubai (WLSC) 2022 - Day 1</p>
                                    <a href="https://www.youtube.com/watch?v=c9TWRM89o2Q" target="_blank" class="press-a video_btn"><?= _stream_video_link; ?></a>
                                </div>
                                
                                <!-- .. -->

                                <div class="col-md-4 mt-5">
                                    <iframe width="100%" height="198" src="https://www.youtube.com/embed/uQfCLdFC_wE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p class="press-title">AskMeAnyThing with StreamCoin's CSO | GW Lee's First live AMA session on MeiTalk</p>
                                    <a href="https://www.youtube.com/watch?v=uQfCLdFC_wE" target="_blank" class="press-a video_btn"><?= _stream_video_link; ?></a>
                                </div>


                                <div class="col-md-4 mt-5">
                                    <iframe width="100%" height="198" src="https://www.youtube.com/embed/YPYxfjpkW1I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p class="press-title">Michael Ein Chaybeh at the #SuperVerse 2022 Dubai | #NFTs | #MetaVerse | #DAOs</p>
                                    <a href="https://www.youtube.com/watch?v=YPYxfjpkW1I" target="_blank" class="press-a video_btn"><?= _stream_video_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <iframe width="100%" height="198" src="https://www.youtube.com/embed/8UIPqxaANo4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p class="press-title">StreamCoin | First ever Meitalk Stream | Launch of Meitalk...</p>
                                    <a href="https://www.youtube.com/watch?v=8UIPqxaANo4" target="_blank" class="press-a video_btn"><?= _stream_video_link; ?></a>
                                </div>

                                <div class="col-md-4 mt-5">
                                    <iframe width="100%" height="198" src="https://www.youtube.com/embed/CqN31S1iGZ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p class="press-title">AskMeAnything With StreamCoin's CEO | Michael’s First...</p>
                                    <a href="https://www.youtube.com/watch?v=CqN31S1iGZ0" target="_blank" class="press-a video_btn"><?= _stream_video_link; ?></a>
                                </div>
                                

                                <div class="col-md-4 mt-5">
                                  <iframe width="100%" height="198" src="https://www.youtube.com/embed/exSdqe8OjIE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                  <p class="press-title">ICO Participation Guide | ICO Referral Program</p>
                                  <a href="https://www.youtube.com/watch?v=exSdqe8OjIE" target="_blank" class="press-a video_btn video_btn"><?= _stream_video_link; ?></a>
                              </div>
                              <div class="col-md-4 mt-5">
                                <iframe width="100%" height="198" src="https://www.youtube.com/embed/XKd8_uWX3gI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="press-title">StreamCoin CEO Announcement | MeiTalk Platform | RR Partnership | ICO Referral...</p>
                                <a href="https://www.youtube.com/watch?v=XKd8_uWX3gI" target="_blank" class="press-a video_btn"><?= _stream_video_link; ?></a>
                            </div>
                            <div class="col-md-4 mt-5">
                                <iframe width="100%" height="198" src="https://www.youtube.com/embed/1HU3ifihrxE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="press-title">StreamCoin Burn |CEO's message for the New Year 2022</p>
                                <a href="https://www.youtube.com/watch?v=1HU3ifihrxE" target="_blank" class="press-a video_btn"><?= _stream_video_link; ?></a>
                            </div>
                            <div class="col-md-4 mt-5">
                                <iframe width="100%" height="198" src="https://www.youtube.com/embed/CwtT4axed1g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="press-title">50 Days Left Before StreamCoin(STRM)'s Public Sale</p>
                                <a href="https://www.youtube.com/watch?v=CwtT4axed1g" target="_blank" class="press-a video_btn"><?= _stream_video_link; ?></a>
                            </div>
                            <div class="col-md-4 mt-5">
                                <iframe width="100%" height="198" src="https://www.youtube.com/embed/0wL61AwWJ00" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="press-title">StreamCoin | LiveView and StreamCoin(STRM)</p>
                                <a href="https://www.youtube.com/watch?v=0wL61AwWJ00" target="_blank" class="press-a video_btn"><?= _stream_video_link; ?></a>
                            </div>

                            <div class="col-md-4 mt-5">
                                <iframe width="100%" height="198" src="https://www.youtube.com/embed/5qZZiBQwgQg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="press-title">StreamCoin | Blockchain-based Multi-streaming Platform</p>
                                <a href="https://www.youtube.com/watch?v=5qZZiBQwgQg" target="_blank" class="press-a video_btn"><?= _stream_video_link; ?></a>
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

    <!----Footer Sec---->
    <?php include "./includes/footer.php" ?>

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

    


</body>

</html>