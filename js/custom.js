$(document).ready(function () {

    if($item = localStorage.getItem('_stream-coin-url-scroll')){
        $('html, body').animate({
            'scrollTop': $($item).offset().top
        });
        localStorage.removeItem('_stream-coin-url-scroll')
    }

    var btn = $('#button');
    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    var $window = $(window);
    $('section[data-type="background"]').each(function () {
        var $bgObject = $(this);
        $(window).scroll(function () {
            var vPosition = -($window.scrollTop() / $bgObject.data('speed'));
            var newPosition = '50%' + vPosition + 'px';
            $bgObject.css({backgroundPosition: newPosition});
        });
    });

    let CurrentValue = window.pageYOffset;
    var navbar = document.getElementById("nav-parent");
    if (window.innerWidth >= 769) {
        window.addEventListener('scroll', function (e) {
            console.log('workinggggggggg')
            if (window.innerWidth >= 769) {
                if (window.pageYOffset <= 0) {

                    navbar.style.top = '0px';
                    navbar.style.boxShadow = 'none';
                    navbar.style.backgroundColor = 'transparent';
                    return
                }
            }
            if (CurrentValue < window.pageYOffset) {

                navbar.style.top = '-100px';
                CurrentValue = window.pageYOffset;

            } else {

                navbar.style.top = '0px';
                navbar.style.boxShadow = '5px 4px 10px rgb(0 0 0 / 10%)';
                navbar.style.backgroundColor = '#fff';
                CurrentValue = window.pageYOffset
            }
        })
    }


    if (window.innerWidth <= 769) {
        navbar.style.boxShadow = '5px 4px 10px rgb(0 0 0 / 10%)';
        navbar.style.backgroundColor = '#fff';
        navbar.style.top = '0px';
    }

    $('#collapseExample').on('shown.bs.collapse', function () {
        CollapseTextChange('Show')
    })

    $('#collapseExample').on('hidden.bs.collapse', function () {
        CollapseTextChange('Hide')
    })

    function CollapseTextChange (state){
        let $more = $('#collapseExample').data('view-more-text');
        let $less = $('#collapseExample').data('view-less-text');
        $('.show_hide').text(state == 'Show' ? $less : $more);
        if(state=="Show"){
            $("#forclick1").click(function() {
                $('html, body').animate({
                    scrollTop: $("#exchange_sec").offset().top
                }, 500);
            });
        }
    }


    $('#collapseExample2').on('shown.bs.collapse', function () {
        CollapseTextChange2('Show')
    })

    $('#collapseExample2').on('hidden.bs.collapse', function () {
        CollapseTextChange2('Hide')
    })

    function CollapseTextChange2 (state){
        let $more = $('#collapseExample2').data('view-more-text');
        let $less = $('#collapseExample2').data('view-less-text');
        $('.show_hide2').text(state == 'Show' ? $less : $more);
        if(state=="Show"){
            $("#forclick2").click(function() {
                $('html, body').animate({
                    scrollTop: $("#eco_nft_sec2").offset().top
                }, 500);
            });
        }
    }


    $('#collapseExample3').on('shown.bs.collapse', function () {
        CollapseTextChange3('Show')
    })

    $('#collapseExample3').on('hidden.bs.collapse', function () {
        CollapseTextChange3('Hide')
    })

    function CollapseTextChange3 (state){
        let $more = $('#collapseExample3').data('view-more-text');
        let $less = $('#collapseExample3').data('view-less-text');
        $('.show_hide3').text(state == 'Show' ? $less : $more);
        if(state=="Show"){
            $("#forclick3").click(function() {
                $('html, body').animate({
                    scrollTop: $("#eco_real3").offset().top
                }, 500);
            });
        }
    }


    $('#collapseExample4').on('shown.bs.collapse', function () {
        CollapseTextChange4('Show')
    })

    $('#collapseExample4').on('hidden.bs.collapse', function () {
        CollapseTextChange4('Hide')
    })

    function CollapseTextChange4 (state){
        let $more = $('#collapseExample4').data('view-more-text');
        let $less = $('#collapseExample4').data('view-less-text');
        $('.show_hide4').text(state == 'Show' ? $less : $more);
        if(state=="Show"){
            $("#forclick4").click(function() {
                $('html, body').animate({
                    scrollTop: $("#experience-unqiue-section").offset().top
                }, 500);
            });
        }
    }
   

    

    /*  let temp2=false
      let button2=document.getElementsByClassName("show_hide2")[0]
      button2.addEventListener("click",()=>{
        temp2=!temp2
        if(temp2){
          button2.innerText="View Less"
        }else{
          console.log("Here")
          button2.innerText="View More"
        }
      
      })*/


    /*var btn = $('#button');

    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });

    btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({scrollTop:0}, '300');
    });
*/
    var owl3 = $('#vision .owl-carousel');
    owl3.owlCarousel({
        loop: true,
        autoplay: false,
        stagePadding: 120,
        smartSpeed: 1050,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                stagePadding: 50,
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            },
            1500: {
                items: 4
            }
        }
    });
    var prev = document.getElementById("prev")
    if(prev) {
        prev.addEventListener("click", (e) => {
            owl3.trigger('prev.owl.carousel');
        })
    }

    var next = document.getElementById("next")
    next.addEventListener("click", (e) => {
        owl3.trigger('next.owl.carousel');
    })


    var owl4 = $('#send .owl-carousel');
    owl4.owlCarousel({
        loop: true,
        autoplay: false,
        stagePadding: 120,
        smartSpeed: 1050,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                stagePadding: 50,
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            },
            1500: {
                items: 4
            }
        }
    });

    let prev2 = document.getElementById('prev2')
    prev2.addEventListener("click", (e) => {
        owl4.trigger('prev.owl.carousel');
    })

    let next2 = document.getElementById('next2')
    next2.addEventListener("click", (e) => {
        owl4.trigger('next.owl.carousel');
    })

    if($('.holders-transactions').length){
        $.ajax({
            url: "https://bscapi.stream-coin.com/api/",
            type: 'GET',
            success: function (response) {
                console.log(response)
                $('#holders-data').text(response.holders + ' addresses')
                $('#transactions-data').text(response.transactions)
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log('Getting Holders and Transactions details error: '+xhr.status+'. '+thrownError+'. Please contact Admin.');
            }
        })
    }

});

$('body').on('click', 'a[data-scroll]', function (e) {
    e.preventDefault();
    var target = $(this).data('scroll');
    if($(target).length) {
        $('html, body').animate({
            'scrollTop': $(target).offset().top
        });
    }else{
        localStorage.setItem('_stream-coin-url-scroll', target);
        window.location.href = './'
    }
});