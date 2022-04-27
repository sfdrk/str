<div class="token-inner-content">
    <?= _publicsalehead ?>
    <?= isset($para) ? $para : _publicsaledesc; ?>
    <?= _publicsaleprice; ?>
    <div class="stream_timer">
        <?= _publicsalestart; ?>
        <div id="countdown">
            <ul>
                <li><span id="days"></span> <?= _days; ?></li>
                <li class="for_colon">:</li>
                <li><span id="hours"></span><?= _hours; ?></li>
                <li class="for_colon">:</li>
                <li><span id="minutes"></span><?= _minutes; ?></li>
                <li class="for_colon">:</li>
                <li><span id="seconds"></span><?= _second; ?></li>
            </ul>

            
        </div>
















    </div>

    <?php
    if (!isset($counter)) {
    ?>
        <ul class="global_num">
            <li>
                <div class="gobal_icon"><img src="<?= asset('img/icons/h1.svg') ?>"></div>
                <span>
                    
                    <p style="color:#FA9B1B"><?= _holders_txt ?></p>
                    <h6 class="count1" data-count=""></h6>
                </span>
            </li>

            <li>
                <div class="gobal_icon"><img src="<?= asset('img/icons/t1.svg') ?>"></div>
                <span>
                
                    <p style="color:#00A8FF"><?= _transations_txt ?></p>
                    <h6 class="count2" data-count=""></h6>
                </span>
            </li>
        </ul>
    <?php } ?>














    <a target="_blank" class="btn-orange-lg" style="display: none" href="https://ico.stream-coin.com"> <?= _buystrm; ?></a>
</div>
<script>
    (function() {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        let birthday = "2022-04-30T18:00:00+04:00",
        // 2022-02-01T11:00:00+04:00
            countDown = new Date(birthday).getTime(),
            x = setInterval(function() {

                let now = new Date().getTime(),
                    distance = countDown - now;

                document.getElementById("days").innerText = Math.floor(distance / (day)),
                    document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                    document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                    document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);


                //seconds
            }, 0)
    }());
</script>