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

	<title>GaStream (GSTRM) | Get free airdrops by investing $50 in STRM</title>
	<meta name="description" content="GaStream (GSTRM) is a utility token available through an airdrop for the StreamCoin public sale investors who participated with $50 or more worth of STRM.">
	<link rel="stylesheet" href="<?= asset('css/owl.carousel.min.css') ?>" />
	<link rel="stylesheet" href="<?= asset('css/owl.theme.default.min.css') ?>" />
	<link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= asset('css/style.min.css?ver=22.14') ?>" rel="stylesheet">
	<link href="<?= asset('css/responsive.css?ver=22.4') ?>" rel="stylesheet">
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

        .gstrm_coingecko{
                width: 117px;
    margin: 15px 0 10px;
        }
		@media screen and (max-width: 768px) {
			.technology-page .hero h1 {
				font-size: 24px !important;
				line-height: 38px;
				margin: 0 0 30px;
			}

			.technology-page .hero.token_distrib {
				padding-top: 20px !important;
			}
		}

		.technology-page .hero.token_distrib {
			padding-top: 80px;
		}

		.technology-page .mainnet-section .head p {
			max-width: 100%;
			margin: 0 auto;
		}

		.technology-page .mainnet-section .head p {
			font-size: 16px;
			line-height: 27px;
		}

		.gstrm-img {
			width: 60%;
		}

		.technology-page .mainnet-section .head {
			text-align: inherit !important;
		}

		.card {
			position: relative;
			display: -ms-flexbox;
			display: flex;
			-ms-flex-direction: column;
			flex-direction: column;
			min-width: 0;
			word-wrap: break-word;
			background-color: #fff;
			background-clip: border-box;
			border: none;
			border-radius: 23px;
			padding-bottom: 19px;
			box-shadow: 0px 12px 24px #0000000D;
		}

		.investor_sec img {
			text-align: center;
			width: 100%;
			padding: 0px 20px 0px 25px;
		}

		.p-red {
			color: #EA3636;
		}

		.p-yellow {
			color: #FEC601;
		}
	</style>
</head>

<body>
	<script>
		function changeLang(lang) {

            // document.getElementById('form_lang').submit();
        }

        function changeLanguage(lang) {
        	window.location.href = "<?= ROUTE_PHP_SELF; ?>" + lang + "/gstrm"
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
                <!-- <div class="floating-icons">
                    <img src="<?= asset('img/banner/ball_icon.png') ?>" alt="img">
                    <img src="<?= asset('img/icons/dot.png') ?>" alt="img">
                </div> -->
                <div class="container text-center text-lg-left">
                	<div class="row">
                		<div class="col-12 col-lg-6 col-md-12 col-sm-12">
                			<h1 style="color: #ED2124"><?= _gstrm_hero_h1 ?></h1>
                			<?= _gstrm_hero_p ?>

                			<div class="card">

                				<div class="card-body">
                					<p class="card-title"><?= _gstrm_contaddress ?></p>
                					<a href="https://bscscan.com/token/0xA0D2cA44A6880C4703B48B77EFd0F9D6166fc9ab" target="_blank">
                						<p class="card-text">  <b>0xA0D2cA44A6880C4703B48B77EFd0F9D6166fc9ab</b></a> 
                					<!-- <i style="color: #007bff;" class="fas fa-copy" id="btn-copy"></i> -->
                					</p>




                				</div>

                                <?= _gstrm_decimals_ul ?>

                			</div>


                		</div>
                		<div class="col-12 col-lg-6 col-md-12 col-sm-12 text-center text-lg-right">
                			<!-- Video -->
                			<img src="<?= asset('img/gstrm/gstrm-head.png?v=1.1') ?>" class="img-fluid mt-3 mt-lg-5 d-none d-md-block d-lg-block" alt="hero-image">
                			<img src="<?= asset('img/gstrm/gstrm-head-mob.png?v=1.1') ?>" class="img-fluid mt-3 mt-lg-5 d-block d-md-none" alt="hero-image">
                		</div>
                	</div>
                </div>
            </section>



            <section class="mainnet-section mb-md-5">
            	<div class="container" align="center">
            		<div class="head">
            			<h2 class="mt-5" style="color:#7765F8"><?= _gstrm_head_h2 ?></h2>
            			<p class="mb-5"><?= _gstrm_dection_head_p ?></p>
            			<img src="<?= asset('img/gstrm/gstrm-tech.png?v=1.1') ?>" class="gstrm-img img-fluid mt-3 mt-lg-5 d-none d-md-block d-lg-block" alt="hero-image">

            			<img src="<?= asset('img/gstrm/gstrm-tech-mob.png?v=1.1') ?>" class="img-fluid mt-3 mt-lg-5 d-block d-md-none" alt="hero-image">



            			<div class="investor_sec gstrm_logo pt-md-5 mt-md-5" id="partner-sec">
            				<div class="container-fluid">
            					<p><?= _gstrm_wallet_p ?></p>
            					<div class="row align-items-center justify-content-center mt-5">


            						<div class="col-12 col-md-2 mb-3">
            							<a target="_blank" href="https://aladdinprowallet.com/">
            								<img src="<?= asset('img/gstrm/aladdin-pro.png') ?>">
            							</a>
            						</div>

            						<div class="col-12 col-md-2 mb-3">
            							<a target="_blank" href="https://www.myetherwallet.com/">
            								<img src="<?= asset('img/gstrm/mew.png') ?>">
            							</a>
            						</div>

            						<div class="col-12 col-md-2 mb-3">
            							<a target="_blank" href="https://token.im/">
            								<img src="<?= asset('img/gstrm/imtoken.svg') ?>">
            							</a>
            						</div>

            						<div class="col-12 col-md-2 mb-3">
            							<a target="_blank" href="https://metamask.io/">
            								<img src="<?= asset('img/gstrm/mm.svg') ?>">
            							</a>
            						</div>

            						<div class="col-12 col-md-2 mb-3">
            							<a target="_blank" href="https://trustwallet.com/">
            								<img src="<?= asset('img/gstrm/trust.svg') ?>">
            							</a>
            						</div>


            					</div>
            				</div>
            			</div>



            		</div>



            		<div class="uses_benefits">
            			<div class="row">
            				<div class="col-md-12">
                            <?= _gstrm_uses_benefits ?>	
            				</div>
            				<div class="col-md-4">
            					<div class="uses_benefits_points">
            						<div class="row mb-5">
            							<div class="col-1 col-md-2">
            								<h5 style="color:#D52424">1.</h5>
            							</div>
            							<div class="col-11 col-md-10">
                                            <?= _gstrm_uses_1 ?>	
            								
            							</div>
            						</div>
            						<div class="row mb-5">
            							<div class="col-1 col-md-2">
            								<h5 style="color:#29C66C">2.</h5>
            							</div>
            							<div class="col-11 col-md-10">
                                            <?= _gstrm_uses_2 ?>					
            							</div>
            						</div>


            					</div>

            				</div>
            				<div class="col-md-4 d-flex align-items-center">
            					<div class="uses_benefits_points d-none d-md-block">
                                
            						<img class="img-fluid" src="<?= asset('img/gstrm/benefits_img.svg') ?>" alt="img">
            					</div>
            				</div>

            				<div class="col-md-4">
            					<div class="uses_benefits_points">
            						<div class="row mb-5">
            							<div class="col-1 col-md-2">
            								<h5 style="color:#FFA33A">3.</h5>
            							</div>
            							<div class="col-11 col-md-10">
                                            <?= _gstrm_uses_3 ?>   				
                                        </div>
            						</div>
            						<div class="row mb-5">
            							<div class="col-1 col-md-2">
            								<h5 style="color:#2991FF">4.</h5>
            							</div>
            							<div class="col-11 col-md-10">
                                            <?= _gstrm_uses_4 ?>
            								
            							</div>
            						</div>


            					</div>
            				</div>
            			</div>
            		</div>








            		<section class="hero token_distrib">
                        <!-- <div class="floating-icons ">
                    <img src="<?= asset('img/banner/ball_icon.png') ?>" alt="img">
                    <img src="<?= asset('img/icons/dot.png') ?>" alt="img">
                </div> -->

                <h1 class="mb-5" style="color: #ED2124"><?= _gstrm_tokendist ?></h1>


                <div class="text-center text-lg-left mt-3">
                	<div class="row">
                		<div class="col-12 col-lg-6 col-md-12 col-sm-12">
                			<div class="card">
                				<div class="card-body">
                                <?= _gstrm_initial ?>
                				</div>
                			</div>
                			<div class="row-ico mt-3">
                            <?= _gstrm_ico ?>
                			</div>

                		</div>
                		<div class="col-12 col-lg-6 col-md-12 col-sm-12 text-center text-lg-right">
                			<!-- Video -->
                			<img src="<?= asset('img/gstrm/dist-chart.svg?v=1.1') ?>" class="img-fluid mt-lg-0 d-none d-md-block d-lg-block" alt="hero-image">
                		</div>
                	</div>



                	<div class="initial_supply">
                		<div class="row">
                		<!-- 	<div class="col-md-6 pr-md-5 border_line">
                				<div class="initial_supply_content">
                					<p>This supply is distributed as follows:</p> <br>
                					<p><b> 66.66% - 11,300,000,000</b> is allocated to reward the public sale investors through the airdrop event in addition to the presale investors.</p> <br>
                					<p><b> 33.33% - 5,650,000,000 </b> is allocated for future rewards, including yield farming, watching ads on MeiTalk, Real Research surveys, and node forming on Stream Chain (Mainnet 2.0).</p>
                				</div>
                			</div> -->
                			<div class="col-md-12 pr-md-5">
                				<div class="initial_supply_content for_mobleft">
                                <?= _gstrm_supply ?>
                                    <p>
                                    <img style="width:30px" src="<?= asset('img/gstrm/gstrm_bullet.svg') ?>" alt="img">
                                    <?= _gstrm_supply1 ?></p>

                                    <p><img style="width:30px" src="<?= asset('img/gstrm/gstrm_bullet.svg') ?>" alt="img"><?= _gstrm_supply2 ?></p>
                                    <p><img style="width:30px" src="<?= asset('img/gstrm/gstrm_bullet.svg') ?>" alt="img"><?= _gstrm_supply3 ?></p>
                                    <p><img style="width:30px" src="<?= asset('img/gstrm/gstrm_bullet.svg') ?>" alt="img"><?= _gstrm_supply4 ?></p>
                                    <p><img style="width:30px" src="<?= asset('img/gstrm/gstrm_bullet.svg') ?>" alt="img"><?= _gstrm_supply5 ?></p>
                				</div>
                			</div>
                		</div>
                	</div>




                </div>
            </section>



        </div>
    </section>



    <!---------Road map Sec---------->
    <section id="vision" class="gstrm">
    	<div class="title-wrapper">
        <?= _gstrm_tokenburn ?>

    	</div>

    	<div class="title-wrapper mt-5">
    		<h1 style="color: #F3004B"><?= _gstrm_roadmap ?></h1>
    	</div>


    	<div class="owl-carousel owl-theme">
    		<div class="item">
    			<div class="road_padd">
    				<div class="roadmap_holder">
    					<h5>MARCH 2022</h5>
    					<img src="<?= asset('img/gstrm/gstrm_road/march-1.png') ?>" alt="">
    					<div class="road-content">
                        
    						<p><?= _gstrm_march1 ?></p>
    					</div>
    				</div>

    			</div>
    		</div>


    		<div class="item">
    			<div class="road_padd">
    				<div class="roadmap_holder">
    					<h5>MARCH 2022</h5>
    					<img src="<?= asset('img/gstrm/gstrm_road/march-2.jpg') ?>" alt="">
    					<div class="road-content">
    						<p><?= _gstrm_march2 ?></p>
    					</div>
    				</div>

    			</div>


    		</div>
    		<div class="item">
    			<div class="road_padd">
    				<div class="roadmap_holder">
    					<h5>APRIL 2022</h5>
    					<img src="<?= asset('img/gstrm/gstrm_road/april-1.jpg') ?>" alt="">
    					<div class="road-content">
                        <p><?= _gstrm_april1 ?></p>
    					</div>
    				</div>

    			</div>


    		</div>
    		<div class="item">
    			<div class="road_padd ">
    				<div class="roadmap_holder">
    					<h5>APRIL 2022</h5>
    					<img src="<?= asset('img/gstrm/gstrm_road/april-2.png') ?>" alt="">
    					<div class="road-content">
                        <p><?= _gstrm_april2 ?></p>
    					</div>
    				</div>

    			</div>
    		</div>

            <div class="item">
    			<div class="road_padd hidden">
    				<div class="roadmap_holder">
    					<h5>APRIL 2022</h5>
    					<img src="<?= asset('img/gstrm/gstrm_road/airdrop-roadmap.png') ?>" alt="">
    					<div class="road-content">
                        <p><?= _gstrm_april22 ?></p>
    					</div>
    				</div>

    			</div>
    		</div>

    		<div class="item">
    			<div class="road_padd hidden">
    				<div class="roadmap_holder">
    					<h5>MAY 2022</h5>
    					<img src="<?= asset('img/gstrm/gstrm_road/may-1.jpg') ?>" alt="">
    					<div class="road-content">
                        <p><?= _gstrm_may ?></p>
    					</div>
    				</div>

    			</div>
    		</div>

    		<div class="item">
    			<div class="road_padd hidden">
    				<div class="roadmap_holder">
    					<h5>TBA</h5>
    					<img src="<?= asset('img/gstrm/gstrm_road/node-reward.png') ?>" alt="">
    					<div class="road-content">
                        <p><?= _gstrm_tab1 ?></p>
    					</div>
    				</div>

    			</div>
    		</div>

    		<div class="item">
    			<div class="road_padd hidden">
    				<div class="roadmap_holder">
    					<h5>TBA</h5>
    					<img src="<?= asset('img/gstrm/gstrm_road/meitalk-reward.png') ?>" alt="">
    					<div class="road-content">
                        <p><?= _gstrm_tab2 ?></p> 
    					</div>
    				</div>

    			</div>
    		</div>

    		<div class="item">
    			<div class="road_padd hidden">
    				<div class="roadmap_holder">
    					<h5>TBA</h5>
    					<img src="<?= asset('img/gstrm/gstrm_road/stream-awards.jpg') ?>" alt="">
    					<div class="road-content">
                        <p><?= _gstrm_tab3 ?></p>
    					</div>
    				</div>

    			</div>
    		</div>



            

    	</div>

    	<div class="vision_dir">
    		<img id="prev" src="<?= asset('img/roadmap/left_arrow.svg') ?>" alt="">
    		<img id="next" src="<?= asset('img/roadmap/right_arrow.svg') ?>" alt="">
    	</div>

    </section>






</div>
<?php include "./includes/footer.php" ?>
</div>
<!-- Back to top button -->
<a id="button"><i class="fas fa-chevron-up"></i></a>


<script src="<?= asset('js/jquery.js') ?>"></script>
<script src="<?= asset('js/owl.carousel.min.js') ?>"></script>
<script src="<?= asset('js/custom.js?ver=10.11') ?>"></script>
<script src="<?= asset('js/bootstrap.min.js') ?>"></script>
</body>

</html>