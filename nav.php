<nav class="navbar navbar-expand-xl navbar-light navbg">
    <a class="navbar-brand" href="<?= route('') ?>"><img src="<?= asset('img/logostreamv1.png') ?>"/></a>
    <div class="dropdown language-dropdown d-block d-md-none" style="margin-left: 8px;">
        <?php echo langLists() ?>
    </div>
    <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">


        <ul class="navbar-nav ml-auto" id="myDiv">

            <li class="nav-item active">
                <a class="nav-link" data-scroll="#home" href="javascript:void(0)"><?= _hometab; ?></a>
            </li>

            <li class="nav-item dropdown language-dropdown2">
                <?php echo ecosystemLists() ?>               
            </li>

            <li class="nav-item d-none d-lg-block">
                <a class="nav-link" data-scroll="#partner-sec" href="javascript:void(0)"><?= _partnertab; ?></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-scroll="#vision" href="javascript:void(0)"><?= _vision; ?></a>
            </li>
         
            <li class="nav-item">
                <a class="nav-link" href="<?= route(_technology_link) ?>"><?= _technology ?></a>
            </li>
            
            <li class="nav-item dropdown language-dropdown2">
                <?php echo mediaPressLists() ?>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= route('public-sale') ?>">ICO</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= route('wlsc') ?>">WLSC</a>
            </li>

        </ul>






    </div>
    <div class="dropdown language-dropdown d-none d-md-block" style="margin-left: 8px;">
        <?php echo langLists() ?>
    </div>
</nav>
