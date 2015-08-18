(function($){
    $(document).ready(function(){

    // NiceScroll
        $("html").niceScroll({
            scrollspeed: 60,
            mousescrollstep: 38,
            cursorwidth: 10,
            cursorborder: 0,
            autohidemode: false,
            zindex: 99999,
            horizrailenabled: false,
            cursorborderradius: 0
        });

    // Fire wow.js 
        wow = new WOW();
        wow.init();

    // To top
        var $scrollToTop = $('.to-top');
        function toTopButton(){
            var $topOffset = 400;
            if ( $(this).scrollTop() > $topOffset ) {
                $scrollToTop.addClass('in');
            }
            else {
                $scrollToTop.removeClass('in');
            }
        }
        function toTopClick(){
            $('html, body').animate({scrollTop: 0}, 1000);
            return false;
        }
        $scrollToTop.on("click", toTopClick);

    // Sticky nav
        var $masthead = $('#masthead');
        var $topbar = $("#top-bar");
        var $navbar = $("#site-nav");
        var $navOffset, $scrollPos = 0;

        $masthead.wrap('<div id="header-holder"></div>');
        
        function stickyUtility() {
            if (!$masthead.hasClass("sticky-header") && $("#header-holder").length > 0) {
                $navOffset = $masthead.offset().top;
            }
            $("#header-holder").height($masthead.innerHeight());
        }
        
        stickyUtility();
        
        $(window).resize(function() {
            stickyUtility();
        });

        function stickyHeader(){
            $scrollPos = $(window).scrollTop();

            if ($scrollPos > $navOffset && $("#header-holder").length > 0) {
                $topbar.slideUp(300);
                $masthead.addClass("sticky-header");
                $navbar.css({ 
                    'padding-top' : 5 + "px", 
                    'padding-bottom' : 5 + "px" 
                });
            } else {
                $topbar.slideDown(300);
                $masthead.removeClass("sticky-header");
                $navbar.css({ 
                    'padding-top' : 10 + "px", 
                    'padding-bottom' : 10 + "px" 
                });
            }
        }

        // Trigger To top and sticky Header
        $(window).scroll(function () {
            stickyHeader();
            toTopButton();
        });

    // Bootstrap edit
        $(".comment-reply-link").addClass("btn btn-sm btn-default");
        $("#submit, button[type=submit], html input[type=button], input[type=reset], input[type=submit]").addClass("btn btn-default");
        $(".postform").addClass("form-control");
        $("table").addClass("table table-striped");
        $("#submit, .tagcloud, button[type=submit], .widget_rss ul, .postform, table#wp-calendar").show("fast");
        $('a[data-toggle="tab"]:first').tab("show");
        // Open dropdown menu on hover
        $(".navbar-nav").find('li.dropdown').hover(function(){
            $(this).addClass('open nav-animation');
            }, function(){
            $(this).removeClass('open nav-animation');
        }); 
        // add dropdown class to search dropdown button
        function searchClick(){
            var $animationEnd = 'webkitAnimationEnd animationend';
            $('#dropdown_animation').addClass("search-animation").one($animationEnd, function() {
                $(this).removeClass('search-animation');
                $('.search-pop').focus();
            });
        }
        $("#search_dropdown").find('a').on("click", searchClick);

    });
})(jQuery); 