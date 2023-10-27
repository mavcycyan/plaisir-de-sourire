( function( $ ) {
    /*anim init*/
    AOS.init();
    /*anim init*/

    /*preloader*/
    $(document).ready(function() {
        clearInterval(prelInterv);
        $('.js-preloader .preloader-wrap').animate({
            width: "84vw"
        }, 1000);

        setTimeout(function() {
            $('.js-preloader').removeClass('loading');
            setTimeout(function() {
                $('.js-preloader').remove();
            }, 500)
        }, 1500)
    });

    /*header*/
    $(window).scroll(function(){
        var hHeight = $('.js-header').outerHeight();
        if ($(window).scrollTop() > hHeight) {
            $('.js-header').addClass('fixed');
        } else {
            $('.js-header').removeClass('fixed');
        }
    });

    $('.js-hMenuBtn').click(function() {
        $(this).toggleClass('active');
        $('.js-hMenu').toggleClass('active');
    });
    /*header*/

    /*video play*/
    $('.js-firstPlay').click(function(){
        $(this).addClass('hidden');
        $('.js-firstPlayImg').addClass('hidden');
        $('.js-firstPlayVid').trigger('play');
    });
    /*video play*/

    /*widget*/
    $('.js-widgToolsBl').click(function(){
        if ($(window).width() <= 991) {
            if ($(this).hasClass('clicked')) {
                $(this).removeClass('clicked');
            } else {
                $('.js-widgToolsBl').removeClass('clicked');
                $(this).addClass('clicked');
            }
        }
    });

    $('body').on('mousedown', function(e){
        if ($(window).width() <= 991) {
            if (!e.target.classList.contains('js-widgToolsBl') && !e.target.closest('.js-widgToolsBl')) {
                $('.js-widgToolsBl').removeClass('clicked');
            }
        }
    });

    /*widget*/

    /*fader*/
    faderWork($('.js-mainBackFader[data-id="1"]'));
    faderWork($('.js-mainBackFader[data-id="2"]'));
    faderWork($('.js-mainBackFader[data-id="3"]'));
    function faderWork(fader) {
        setInterval(function(){
            var next = fader.find('.active').data('fader') + 1;
            if (fader.find('[data-fader="'+next+'"]').length <= 0)
                next = 0;

            fader.find('img').removeClass('active');
            fader.find('[data-fader="'+next+'"]').addClass('active');
        }, 5000)
    }
    /*fader*/

    /*float placeholders*/
    $('body').click(function(){
        $('input[type="text"], textarea, input[type="email"], input[type="number"], input[type="tel"]').each(function(el){
            if ($(this).val() === '')
                $(this).closest('.wpcf7-form-control-wrap').removeClass('active');

        });
    })
    $('input[type="text"], textarea, input[type="email"], input[type="number"], input[type="tel"]').click(function(){
        var _this = $(this);
        setTimeout(function(){
            $('input[type="text"], textarea, input[type="email"], input[type="number"], input[type="tel"]').each(function(el){
                if ($(this).val() === '')
                    $(this).closest('.wpcf7-form-control-wrap').removeClass('active');

            });
            _this.closest('.wpcf7-form-control-wrap').addClass('active');
        }, 5)
    })
    /*float placeholders*/

    /*tratament slider*/
    $(document).ready(function(){
        $('.js-mainTraitementsSlider').mCustomScrollbar({
            axis:"x"
        });
    });
    /*tratament slider*/

    /*devices image worker*/
    $('.js-mainDevicesImgChange').on('mouseover', function(){
        $('.js-mainDevicesImg img').attr('src', $(this).data('img'));
    });
    /*devices image worker*/

    /*cliniques filter*/
    $('.js-catClinTerms').click(function(){
        $('.js-catClinTerms').removeClass('active');
        $(this).addClass('active');
        if ($(this).data('categ') === 'all') {
            $('.js-catClinPosts').addClass('active')
        } else {
            $('.js-catClinPosts').removeClass('active')
            $('.js-catClinPosts[data-categ="' + $(this).data('categ') + '"]').addClass('active')
        }
    })
    /*cliniques filter*/

    /*cliniques sliders*/
    $(".js-catClinSlider").on("init reInit afterChange", function(event, slick) {
        $(this).siblings(".js-catClinSliderCount").html(
            slick.slickCurrentSlide() + 1 + "/" + slick.slideCount
        );
    });
    $( '.js-catClinSlider' ).slick( {
        fade: false,
        dots: false,
        arrows: true,
        infinite: true,
        speed: 700,
        slidesToShow: 1,
        draggable: false,
        variableWidth: false,
        autoplay: false,
        autoplaySpeed: 5000,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        prevArrow: '<button class="arrow prev-arrow"><svg width="52" height="12" viewBox="0 0 52 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M51 6.75C51.4142 6.75 51.75 6.41421 51.75 6C51.75 5.58579 51.4142 5.25 51 5.25L51 6.75ZM0.469669 5.46967C0.176777 5.76257 0.176777 6.23744 0.469669 6.53033L5.24264 11.3033C5.53553 11.5962 6.01041 11.5962 6.3033 11.3033C6.5962 11.0104 6.5962 10.5355 6.3033 10.2426L2.06066 6L6.3033 1.75736C6.59619 1.46447 6.59619 0.989596 6.3033 0.696703C6.01041 0.40381 5.53553 0.40381 5.24264 0.696703L0.469669 5.46967ZM51 5.25L1 5.25L1 6.75L51 6.75L51 5.25Z" fill="#2C3542"/> </svg></button>"',
        nextArrow: '<button class="arrow next-arrow"><svg width="52" height="12" viewBox="0 0 52 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M1 6.75C0.585786 6.75 0.25 6.41421 0.25 6C0.25 5.58579 0.585786 5.25 1 5.25L1 6.75ZM51.5303 5.46967C51.8232 5.76257 51.8232 6.23744 51.5303 6.53033L46.7574 11.3033C46.4645 11.5962 45.9896 11.5962 45.6967 11.3033C45.4038 11.0104 45.4038 10.5355 45.6967 10.2426L49.9393 6L45.6967 1.75736C45.4038 1.46447 45.4038 0.989596 45.6967 0.696703C45.9896 0.40381 46.4645 0.40381 46.7574 0.696703L51.5303 5.46967ZM1 5.25L51 5.25L51 6.75L1 6.75L1 5.25Z" fill="#2C3542"/> </svg></button>',

    } );
    $(document).ready(function(){
        $('.js-catClinTermsScroll').mCustomScrollbar({
            axis:"x"
        });
    });
    /*cliniques sliders*/

    /*main gallery slider*/
    var galSlider = $( '.js-gallerySlider' ).slick( {
        fade: false,
        dots: false,
        arrows: true,
        infinite: true,
        speed: 700,
        slidesToShow: 1,
        draggable: false,
        variableWidth: false,
        autoplay: false,
        autoplaySpeed: 5000,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        prevArrow: '<button class="arrow prev-arrow"><svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M5.5 10L1 5.5L5.5 1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/> </svg></button>"',
        nextArrow: '<button class="arrow next-arrow"><svg width="50" height="11" viewBox="0 0 50 11" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0.5 5.5H40.5" stroke="white" stroke-linecap="round"/> <path d="M44.5 10L49 5.5L44.5 1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/> </svg></button>',

    } );
    $(".js-gallerySlider").on("init reInit afterChange", function(event, slick) {
        $(this).siblings(".js-gallerySliderCount").html(
            slick.slickCurrentSlide() + 1 + " / " + slick.slideCount
        );
    });
    $('.js-gallerySliderPos').click(function(){
        galSlider.slick('slickGoTo', $(this).data('gal_num'));
    })
    /*main gallery slider*/

    /*modal*/
        $('.js-modalOpen').click(function(e){
            e.preventDefault();
            $('.js-modal[data-modal="'+$(this).data('modal')+'"]').addClass('active');
        });
        $('.js-modalClose').click(function(){
            $(this).closest('.js-modal').removeClass('active');
        });
    /*modal*/

}( jQuery ) );
