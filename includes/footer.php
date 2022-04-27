<!----Footer Sec---->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="ftr_txt">
                    <h2 style="color:#CE00FF"><?= _hometab; ?></h2>
                    <ul class="ftr_ul">
                        <li><a data-scroll="#home" href="javascript:void(0);"><?= _hometab; ?></a></li>
                        <li><a data-scroll="#platform_sec" href="javascript:void(0);"><?= _streamtab; ?></a></li>
                        <li><a data-scroll="#how_it_work" href="javascript:void(0);"><?= _howitworks; ?></a></li>
                        <li><a href="<?= route(_technology_link) ?>"><?= _technology ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-6 col-md-3 ">
                <div class="ftr_txt">
                    <h2 style="color:#FA7D0F"><?= _res; ?></h2>
                    <ul class="ftr_ul">
                        <li><a target="_blank" href="<?= route(_whitepaperfile, false); ?>"><?= _whitepaper; ?></a></li>
                        <li><a href="<?= route('privacy-policy') ?>" target="_blank"><?= _privacy; ?></a></li>
                        <li><a href="<?= route('terms-of-use') ?>" target="_blank"><?= _terms; ?></a></li>
                        
                        <li><a href="<?= route('faqs') ?>" target="_blank"><?= _faqnav; ?></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-6 col-md-3 ">
                <div class="ftr_txt">
                    <h2 style="color: #36E165;"><?= _other; ?></h2>
                    <ul class="ftr_ul">
                        <li><a data-scroll="#platform" href="javascript:void(0);"><?= _platform; ?></a></li>
                        <li><a data-scroll="#vision" href="javascript:void(0);"><?= _vision; ?></a></li>
                        <!-- <li><a href="mailto:support@stream-coin.com"><?= _contact_us_text ?></a></li> -->
                        <li><a href="<?= route(_team_ftr) ?>"><?= _team_text ?></a></li>
                        <li><a href="mailto:hr@stream-coin.com"><?= _career_text ?></a></li>
                        <!-- <li><a href="<?= route(_videos_ftr) ?>"><?= _videoftr_text ?></a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-3 text-center text-lg-left">
               <div class="ftr_txt mb-1 mb-lg-3">
                <h2 style="color:#62DEFE"><?= _contact; ?></h2>
                <div class="ftr_ul">

                    <a class="d-inline" href="https://www.facebook.com/streamcoinofficial/" target="_blank"><img src="<?= asset('img/social-icons/ftricon1.svg') ?>" class="social" /></a>
                    <a class="d-inline" href="https://www.youtube.com/c/STREAMSTRM" target="_blank"><img src="<?= asset('img/social-icons/ftricon2.svg') ?>" class="social" /></a>
                    <a class="d-inline" href="https://www.instagram.com/streamcoinofficial/ " target="_blank"><img src="<?= asset('img/social-icons/ftricon3.png') ?>" class="social" /></a>
                    <a class="d-inline" href="https://twitter.com/streamcoin_strm " target="_blank"><img src="<?= asset('img/social-icons/ftricon4.svg') ?>" class="social" /></a>
                    <a class="d-inline" href="https://www.linkedin.com/company/streamcoin/" target="_blank"><img src="<?= asset('img/social-icons/ftricon6.svg') ?>" class="social" /></a>

                    <a class="d-inline" href="https://medium.com/streamcoin" target="_blank"><img src="<?= asset('img/social-icons/ftricon7.svg') ?>" class="social" /></a>

                    <a class="d-inline" href="https://discord.gg/zNH8PHcP4n" target="_blank"><img src="<?= asset('img/social-icons/discord.svg') ?>" class="social" /></a> 

                    <!-- <a class="d-inline" href="https://coinmarketcap.com/currencies/stream-coin/" target="_blank"><img src="<?= asset('img/social-icons/cmc.svg') ?>" class="social" /></a>  -->


                </div>
            </div>
            <div class="ftr_txt social-link mt-2">

                <div class="d-flex justify-content-center justify-content-lg-start social-tk-link social-tk-link-sm">
                    <a class="mt-0 mr-3 t-icon" target="_blank" href="https://t.me/StreamCoin_Official_Community">
                        <i class="fab fa-telegram-plane"></i>
                        Telegram
                    </a>
                    <a class="mt-0 k-icon" target="_blank" href="https://open.kakao.com/o/gpO7ww1d">
                        <img src="<?= asset('img/social-icons/kakao-icon.png') ?>" alt="">
                        KakaoTalk
                    </a>
                </div>

            </div>
            <br>
            <a class="" href="mailto:support@stream-coin.com" target="_blank" style="color:#3649cf;list-style: none; margin-top: 20px;">support@stream-coin.com</a>
        </div>

        <div class="col-md-12">
            <div class="ftr_copy">
                <p><?= _copyright; ?></p>
            </div>
        </div>
    </div>
</div>
</div>
<a href="mailto:support@stream-coin.com" class="floating-email-btn"><img src="<?= asset('img/icons/email-floating-icon.svg') ?>" alt="email-floating-icon"></a>