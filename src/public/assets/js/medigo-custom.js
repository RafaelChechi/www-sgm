jQuery(document).ready(function ($) {


    $(window).resize(function () {
        if ($(window).width() >= 768) {
            $(".responsive_menu").hide();
        }
    });

    /************** SuperFish Menu *********************/
    function initSuperFish() {

        $(".sf-menu").superfish({
            delay: 50,
            autoArrows: true,
            animation: {opacity: 'show'}
            //cssArrows: true
        });

        // Replace SuperFish CSS Arrows to Font Awesome Icons
        $('nav > ul.sf-menu > li').each(function () {
            $(this).find('.sf-with-ul').append('<i class="fa fa-angle-down"></i>');
        });
    }

    initSuperFish();


    /************** Portfolio Carousel *********************/
    function initOwlCarousel() {

        $("#portfolio-carousel").owlCarousel({
            items: 4,
            navigation: false,
            pagination: false,
            autoPlay: true,
            navigationText: ["", ""],
        });

    }

    initOwlCarousel();


    /************** bxSlider (Testimonials) *********************/
    function initbxSlider() {

        $('.bxslider').bxSlider({
            adaptiveHeight: true,
            controls: false,
            auto: true,
            mode: 'fade',
        });

    }

    initbxSlider();


    /************** FlexSlider *********************/
    function initFlexSlider() {

        $('.flexslider').flexslider({
            controlNav: false,
            animation: 'slide',
            prevText: '',
            nextText: ''
        });

    }

    initFlexSlider();


    /************** FancyBox *********************/
    function initFancyBox() {

        $(".fancybox").fancybox({
            padding: 5,
            titlePosition: 'over'
        });

    }

    initFancyBox();


    /************** MixitUp *********************/
    $('#Grid').mixitup({
        effects: ['fade', 'grayscale'],
        easing: 'snap',
        transitionSpeed: 400
    });


    /************** Flickr Feed *********************/
    function initFlickrFeed() {

        $('#flickr-feed').jflickrfeed({
            limit: 8,
            qstrings: {
                id: '44802888@N04'
            },
            itemTemplate:
                '<li>' +
                '<a href="{{image_b}}" class="fancybox"><img src="{{image_s}}" alt="{{title}}" /></a>' +
                '</li>'
        });

    }

    initFlickrFeed();


    /************** Parallax Scrolling Backgrounds *********************/
    $('#homeIntro').parallax("50%", 0.3);
    $('#blogPosts').parallax("80%", 0.3);
    $('.pageTitle').parallax("50%", 0.3);


    /************** Responsive Navigation *********************/
    $('.menu-toggle-btn').click(function () {
        $('.responsive_menu').slideToggle();
    });


    /************** Contact Form *********************/
    $(function () { //shorthand document.ready function
        $('#contact-form').on('submit', function (e) { //use on if jQuery 1.7+
            e.preventDefault();  //prevent form from submitting
            var cpf = $("#contact-form input[name='cpf']").val().replaceAll(".", "").replaceAll("-", "");
            console.log("cpf", cpf); //use the console for debugging, F12 in Chrome, not alerts

            $(".tbody").find("tr").remove();
            if (cpf != "") {
                $.ajax({
                    method: "GET",
                    url: "https://iptu-sgm.3head.com.br/api/iptu/" + cpf,
                    success: function (items) {
                        if (items.length > 0) {
                            $("table").show();
                        } else {
                            $("table").hide();
                        }
                        items.forEach(function (item) {
                            $(".tbody").append("<tr>\n" +
                                "                            <th scope=\"row\">1</th>\n" +
                                "                            <td>" + item.full_name + "</td>\n" +
                                "                            <td>" + item.immobile + "</td>\n" +
                                "                            <td>" + item.city + "</td>\n" +
                                "                            <td>" + item.address + "</td>\n" +
                                "                            <td>" + item.amount + "</td>\n" +
                                "                        </tr>");

                        })

                    }
                });
            }
        });
    });
});
