(function($) {

    $(window).scroll(function(){
        if ($(window).scrollTop() >= 200) {
            $('nav').addClass('sticky-header');
        }
        else {
            $('nav').removeClass('sticky-header');
        }
    });

    function reveal() {
        var reveals = document.querySelectorAll(".reveal");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 1;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }

    window.addEventListener("scroll", reveal);

    $(document).ready(function() {
        for (var i = 1; i <= 20; i++) {
            (function(i) {
                $('.vc_toggle_title' + i).on('click', function() {
                    $('.vc_toggle_title' + i).toggleClass('active');
                    $('.vc_toggle_content' + i).toggleClass('hidden');
                });
            })(i);
        }

        $('.counter').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 2000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });

        $('#menu-other-menu').addClass('hidden absolute top-1/2 inset-y-0 right-0 pr-4 transform -translate-y-1/2  lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-4 desktop-menu');
        $('#footer #menu-other-menu').removeClass();
        $('ol').addClass('list-decimal');
        $('#menu-footer-copyright li').addClass('px-2');

        var max_length = 25;
        $('.post-content').keyup(function () {
            var len = max_length - $(this).val().length;
            $('.GFG').text(len);
        });

    });

    console.log('katerina test new');

})(jQuery);