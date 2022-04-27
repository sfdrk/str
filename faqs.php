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

    <title>Frequently Asked Questions - StreamCoin</title>
    <meta name="description" content="Here we have answered some of the most frequently asked questions from the visitors, users and community members of StreamCoin.">
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
            window.location.href = "<?= ROUTE_PHP_SELF; ?>" + lang + "/faqs"
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
                <div class="col-md-12">
                    <div class="faq_sec">
                        <h2 style="color: #5A86FF;">FAQs</h2>
                        <div class="accordion" id="faq">
                            <div class="card">
                                <div class="card-header" id="faqhead1">
                                    <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1"><?= _faq1; ?></a>
                                </div>

                                <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body">
                                        <?= _faq1_ans; ?>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2" aria-expanded="true" aria-controls="faq2"><?= _faq2; ?></a>
                                </div>

                                <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                    <div class="card-body">
                                        <?= _faq2_ans; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead3">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3" aria-expanded="true" aria-controls="faq3"><?= _faq3; ?></a>
                                </div>

                                <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                    <div class="card-body">
                                        <?= _faq3_ans; ?>

                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header" id="faqhead4">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4" aria-expanded="true" aria-controls="faq4"><?= _faq4; ?></a>
                                </div>

                                <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                                    <div class="card-body">
                                        <?= _faq4_ans; ?>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead5">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5" aria-expanded="true" aria-controls="faq5"><?= _faq5; ?></a>
                                </div>

                                <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                                    <div class="card-body">
                                        <?= _faq5_ans; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead6">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6" aria-expanded="true" aria-controls="faq6"><?= _faq6; ?></a>
                                </div>

                                <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                                    <div class="card-body">
                                        <?= _faq6_ans; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead7">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq7" aria-expanded="true" aria-controls="faq7"><?= _faq7; ?></a>
                                </div>

                                <div id="faq7" class="collapse" aria-labelledby="faqhead7" data-parent="#faq">
                                    <div class="card-body">
                                        <?= _faq7_ans; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="faqhead8">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq8" aria-expanded="true" aria-controls="faq8"><?= _faq8; ?></a>
                                </div>

                                <div id="faq8" class="collapse" aria-labelledby="faqhead8" data-parent="#faq">
                                    <div class="card-body">
                                        <?= _faq8_ans; ?>
                                    </div>
                                </div>
                            </div>

                                                        <div class="card">
                                <div class="card-header" id="faqhead9">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq9" aria-expanded="true" aria-controls="faq9"><?= _faq9; ?></a>
                                </div>

                                <div id="faq9" class="collapse" aria-labelledby="faqhead9" data-parent="#faq">
                                    <div class="card-body">
                                        <?= _faq9_ans; ?>
                                    </div>
                                </div>
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