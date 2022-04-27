<?php include './functions/fn.php'; ?>
<?php include 'lang/lang_session.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="next-head-count" content="3" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="<?= asset('stream.ico?v=1.1') ?>">

    <title><?= _team_meta_title ?></title>
    <meta name="description" content="We are pleased to introduce the visionaries, leaders, and team members who are the building blocks of StreamCoin (STRM).">
    <link rel="stylesheet" href="<?= asset('css/owl.carousel.min.css') ?>" />
    <link rel="stylesheet" href="<?= asset('css/owl.theme.default.min.css') ?>" />
    <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('css/style.min.css?ver=22.12') ?>" rel="stylesheet">
    <link href="<?= asset('css/responsive.css?ver=22.2') ?>" rel="stylesheet">
    <link href="<?= asset('font-awesome/css/all.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>
<script>
    function changeLang(lang) {

        // document.getElementById('form_lang').submit();
    }

    function changeLanguage(lang) {
        window.location.href = "<?= ROUTE_PHP_SELF; ?>" + lang + "/team"
    }
</script>

<body>
    <!----Navbar Sec---->
    <div id="nav-parent">
        <?php include './nav.php'; ?>
    </div>

    <!----team Sec---->
    <section id="team_sec" class="pb-0">
        <div class="container">
            <div class="team_content">
                <?= _team_head; ?>
                <img class="teamball" src="img/team/teamball.png" alt="">
                <img class="teamtri" src="img/team/teamtri.png" alt="">

            </div>
        </div>
        <div class="team-container">
            <div class="row justify-content-center team-control">
                <div class="col-md-4">
                    <div class="team_member for_icon">
                        <img src="<?= asset('img/team/ceov1.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #AE60BE;">Michael Ein Chaybeh</h2>
                        <p>CEO</p>
                        <a href="https://www.linkedin.com/in/michael-ein-chaybeh" target="_blank"><img src="<?= asset('img/social-icons/ftricon6.svg') ?>" class="img-fluid" alt="img"></a>
                        <?= _ceo_description; ?>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="team_member for_icon">
                        <img src="<?= asset('img/team/cto-awais.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #AE60BE;"> AWAIS SAKHI</h2>
                        <p>CTO (StreamCoin)</p>
                        <a href="https://www.linkedin.com/in/awais-sakhi-b12639156/" target="_blank"><img src="<?= asset('img/social-icons/ftricon6.svg') ?>" class="img-fluid" alt="img"></a>
                        <?= _cto_stream_description; ?>

                    </div>
                </div>



                <div class="col-md-4">
                    <div class="team_member for_icon">
                        <img src="<?= asset('img/team/cto_blockchain.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #AE60BE;"> JIM KWAK</h2>
                        <p>CTO (Stream Chain)</p>
                        <a href="https://www.linkedin.com/in/jim-kwak-495ab422" target="_blank"><img src="<?= asset('img/social-icons/ftricon6.svg') ?>" class="img-fluid" alt="img"></a>
                        <?= _cto_block_description; ?>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="team_member for_icon">
                        <img src="<?= asset('img/team/ctov11.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #AE60BE;">Tom Yun</h2>
                        <p>CTO (MeiTalk)</p>
                        <a href="https://www.linkedin.com/in/tom-yun/" target="_blank"><img src="<?= asset('img/social-icons/ftricon6.svg') ?>" class="img-fluid" alt="img"></a>
                        <?= _cto_description; ?>

                    </div>
                </div>
                <!--           <div class="col-md-4">
                    <div class="team_member for_icon">
                        <img src="<?= asset('img/team/cmov1.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #AE60BE;">Nicholas Menezes</h2>
                        <p>CMO</p>
                        <a href="https://www.linkedin.com/in/nicholas-menezes" target="_blank"><img src="<?= asset('img/social-icons/ftricon6.svg') ?>" class="img-fluid" alt="img"></a>
                        <?= _cmo_description; ?>

                    </div>
                </div> -->
                <div class="col-md-4">
                    <div class="team_member for_icon">
                        <img src="<?= asset('img/team/csov1.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #AE60BE;">G.W Lee</h2>
                        <p>CSO</p>
                        <a class="d-none d-md-block" style="visibility: hidden;" href="" target="_blank"><img src="<?= asset('img/social-icons/ftricon6.svg') ?>" class="img-fluid " alt="img"></a>
                        <?= _cso_description; ?>
                    </div>
                </div>

                <!-- <img class="teamface" src="img/team/smml.png" alt="icon">
                    <img class="teamstar" src="img/team/teamstar.png" alt="icon"> -->
            </div>






            <div class="row row-lg-item-5 mt-5">
                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/1.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #1C8DE3;">EMMA</h2>
                        <p>Business Development Executive<p3>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/2.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #9446A6;">LINA</h2>
                        <p>Business Development Executive<p3>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/25.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #FC47AB;">AMAN</h2>
                        <p>Blockchain Engineer</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/26.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #05D711;">RASH</h2>
                        <p>Blockchain Engineer</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/27.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #8E6AC6;">SHAHID</h2>
                        <p>Blockchain Engineer</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/28.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #FC8C03;">ANKUR</h2>
                        <p>Back End Developer</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/23.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #0086FF;">WALEED</h2>
                        <p>Back End Developer</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/24.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #BE30F9;">SHAH</h2>
                        <p>Back End Developer</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/21.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #D01B1B;">USAMA</h2>
                        <p>Front End Developer</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/22.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #FC8A03;">AQIB</h2>
                        <p>Front End Developer</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/29.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #FC8C03;">MOMIN</h2>
                        <p>Android Developer</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/30.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #00C9FF;">MARINA</h2>
                        <p>Android Developer</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/31.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #9446A6;">AKRAM</h2>
                        <p>iOS Developer</p>
                    </div>
                </div>


                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/33.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #FF7205;">SAM</h2>
                        <p>Cyber Security Engineer</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/20.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #04D811;">JAKE</h2>
                        <p>UI / UX Engineer</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/32.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #D31E1E;">SAKSHI</h2>
                        <p>QA Engineer</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/3.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #FC8902;">WON</h2>
                        <p>Marketing Specialist</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/14.png?ver=1.1') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #02BEC1;">ABEER</h2>
                        <p>Marketing Specialist</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/15.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #2D88DF;">VAI</h2>
                        <p>Marketing Specialist</p>
                    </div>
                </div>

       

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/12.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #0FAEFE;">TRACEY</h2>
                        <p>Marketing Specialist</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/7.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #FF7104;">ASH</h2>
                        <p>Content Specialist</p>
                    </div>
                </div>


                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/6.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #03D911;">HAFSA</h2>
                        <p>Content Specialist</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/4.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #03BEC1;">VANMARC</h2>
                        <p>Content Specialist</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/5.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #FC8902;">SHYLIN</h2>
                        <p>Content Specialist</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/8.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #00D8FF;">SYED</h2>
                        <p>Community Manager (Global)</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/9.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #FB0CC9;">ANU</h2>
                        <p>Community Manager</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/10.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #CF1A1A;">ANGEL</h2>
                        <p>Community Manager</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/11.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #CEA440;">JO</h2>
                        <p>Community Manager</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/16.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #FC8B02;">FARU</h2>
                        <p>Community Manager</p>
                    </div>
                </div>



                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/18.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #FF770E;">RK</h2>
                        <p>Graphic Designer</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/19.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #BE9638;">HENRY</h2>
                        <p>Motion Graphic Designer</p>
                    </div>
                </div>







                <div class="col-6 col-md-3">
                    <div class="dev_member">
                        <img src="<?= asset('img/team/17.png') ?>" class="img-fluid" alt="img">
                        <h2 style="color: #00D1FF;">CHINLAN</h2>
                        <p>Admin</p>
                    </div>
                </div>
            </div>







        </div>


        <!----Footer Sec---->
        <?php include "./includes/footer.php" ?>


    </section>


    <!-- Back to top button -->
    <a id="button"><i class="fas fa-chevron-up"></i></a>


    <script src="<?= asset('js/jquery.js') ?>"></script>
    <script src="<?= asset('js/owl.carousel.min.js') ?>"></script>
    <script src="<?= asset('js/custom.js') ?>"></script>
    <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
    <script src="<?= asset('js/slick.min.js') ?>"></script>

</body>

</html>