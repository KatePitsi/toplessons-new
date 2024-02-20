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

        $(document).ready(function(){
            var video1 = document.getElementById("ban_video");
            if (video1)
                video1.currentTime = 0;
            $(".mute-bt").click(function(){
                if($(this).hasClass("stop"))
                {
                    var ban_video = document.getElementById("ban_video");
                    $("#ban_video").prop('muted', true);
                    $(this).removeClass("stop");
                }
                else{
                    var ban_video = document.getElementById("ban_video");
                    $("#ban_video").prop('muted', false);
                    $(this).addClass("stop");
                }
            });

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
            $(".stop-bt").click(function(){
                $(".play-bt").show();
                $(".pause-bt").hide();
                $(".pause-bt").removeClass("active");
                $(".stop-bt").addClass("active");
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

    });

})(jQuery);