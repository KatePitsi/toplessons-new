(function($) {
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

        // Video
        var video1 = document.getElementById("ban_video");
        if (video1)
            video1.currentTime = 0;

        $(".play-bt").click(function(){
            $(".play-bt").hide();
            $(".pause-bt").show();
            var ban_video = document.getElementById("ban_video");
            if($(".stop-bt").hasClass("active")){
                ban_video.currentTime = 0;
            }
            if (typeof ban_video !== "undefined")
                ban_video.play();
        });
        $(".pause-bt").click(function(){
            $(".play-bt").show();
            $(".pause-bt").hide();
            $(".pause-bt").addClass("active");
            $(".stop-bt").removeClass("active");
            var ban_video = document.getElementById("ban_video");
            if (typeof ban_video !== "undefined")
                ban_video.pause();
        });
        if ($(window).width() < 961) {
            $(".play-bt").show();
            $(".pause-bt").show();
            $(".pause-bt").removeClass("active");
            $(".stop-bt").addClass("active");
        } else {
            $(".play-bt").hide();
            $(".pause-bt").show();
            var ban_video = document.getElementById("ban_video");
            if (typeof ban_video !== 'undefined' && ban_video !== null) {
                if($(".stop-bt").hasClass("active")){
                    ban_video.currentTime = 0;
                }
                ban_video.play();
            }
        }
    });

})(jQuery);

document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {
        var nav = document.querySelector('.main-nav');
        var navMobile = document.querySelector('.mobile');
        if (window.pageYOffset >= 10) {
            nav.classList.add('sticky-header');
            navMobile.classList.add('sticky-header');
            var menu = document.querySelector('.top-sticky');
            menu.classList.add('fixed', 'top-0', 'left-0', 'right-0', 'bg-white', 'shadow-xl', 'z-50', 'p-4');
            var menuMobile = document.querySelector('.mobile .top-sticky');
            menuMobile.classList.add('fixed', 'top-0', 'left-0', 'right-0', 'bg-white', 'shadow-xl', 'z-50', 'p-4');
        } else {
            nav.classList.remove('sticky-header');
            navMobile.classList.remove('sticky-header');
            var menu = document.querySelector('.top-sticky');
            menu.classList.remove('fixed', 'top-0', 'left-0', 'right-0', 'bg-white', 'shadow-xl', 'z-50', 'p-4');
            var menuMobile = document.querySelector('.mobile .top-sticky');
            menuMobile.classList.remove('fixed', 'top-0', 'left-0', 'right-0', 'bg-white', 'shadow-xl', 'z-50', 'p-4');
        }
    });
});