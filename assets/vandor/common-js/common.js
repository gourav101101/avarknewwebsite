/***************************************************
==================== JS INDEX ======================
01. Data Background Set
02. Sticky Header
03. GSAP Plugins Register
04. Smooth Scroll
05. Fade Animation
06. Preloader
07. Side Info Toggle
08. Mean Menu Init
09. Video Popup
10. Text Invert Scroll Effect
11. Smooth Anchor Scroll
12. Nice Select Init
****************************************************/

(function ($) {
    "use strict";

    var windowOn = $(window);
    let mm = gsap.matchMedia();

    /* === Data Css Js (index 01) === */
    $("[data-background]").each(function () {
        $(this).css(
            "background-image",
            "url( " + $(this).attr("data-background") + "  )"
        );
    });

    /* === sticky header Js (index 02) === */
    function pinned_header() {
        var lastScrollTop = 0;
        var ticking = false;
        var stickyHeader = document.querySelector('.header-sticky');
        var sideInfo = document.querySelector('.side-info');
        var offcanvasOverlay = document.querySelector('.offcanvas-overlay');

        if (!stickyHeader) return;

        function updateHeader() {
            var currentScrollTop = window.scrollY || document.documentElement.scrollTop;
            if (currentScrollTop > lastScrollTop) {
                stickyHeader.classList.remove('sticky');
                stickyHeader.classList.add('transformed');
            } else if (currentScrollTop <= 500) {
                stickyHeader.classList.remove('sticky', 'transformed');
            } else {
                stickyHeader.classList.add('sticky');
                stickyHeader.classList.remove('transformed');
            }
            if (sideInfo && sideInfo.classList.contains('info-open')) {
                sideInfo.classList.remove('info-open');
                if (offcanvasOverlay) offcanvasOverlay.classList.remove('overlay-open');
            }
            lastScrollTop = currentScrollTop;
            ticking = false;
        }

        window.addEventListener('scroll', function () {
            if (!ticking) {
                window.requestAnimationFrame(updateHeader);
                ticking = true;
            }
        }, { passive: true });
    }
    pinned_header();

    /* === Register GSAP Plugins Js (index 02) === */
    gsap.registerPlugin(ScrollTrigger);

    /* === GSAP Fade Animation Js (index 04) === */
    let fadeArray_items = document.querySelectorAll(".fade-anim");
    if (fadeArray_items.length > 0) {
        const fadeArray = gsap.utils.toArray(".fade-anim")
        fadeArray.forEach((item, i) => {
            var fade_direction = "bottom"
            var onscroll_value = 1
            var duration_value = 1.15
            var fade_offset = 50
            var delay_value = 0.15
            var ease_value = "power2.out"
            if (item.getAttribute("data-offset")) {
                fade_offset = item.getAttribute("data-offset");
            }
            if (item.getAttribute("data-duration")) {
                duration_value = item.getAttribute("data-duration");
            }
            if (item.getAttribute("data-direction")) {
                fade_direction = item.getAttribute("data-direction");
            }
            if (item.getAttribute("data-on-scroll")) {
                onscroll_value = item.getAttribute("data-on-scroll");
            }
            if (item.getAttribute("data-delay")) {
                delay_value = item.getAttribute("data-delay");
            }
            if (item.getAttribute("data-ease")) {
                ease_value = item.getAttribute("data-ease");
            }
            let animation_settings = {
                opacity: 0,
                ease: ease_value,
                duration: duration_value,
                delay: delay_value,
            }
            if (fade_direction == "top") {
                animation_settings['y'] = -fade_offset
            }
            if (fade_direction == "left") {
                animation_settings['x'] = -fade_offset;
            }
            if (fade_direction == "bottom") {
                animation_settings['y'] = fade_offset;
            }
            if (fade_direction == "right") {
                animation_settings['x'] = fade_offset;
            }
            if (onscroll_value == 1) {
                animation_settings['scrollTrigger'] = {
                    trigger: item,
                    start: 'top 85%',
                }
            }
            gsap.from(item, animation_settings);
        })
    }

    /* === Preloader Animation  Js (index 05) === */
    if (document.querySelectorAll(".loader-wrap").length > 0) {
        $(document).ready(function () {
            setTimeout(function () {
                $('#container').addClass('loaded');
            }, 200);

            setTimeout(function () {
                $('.loader-wrap').fadeOut(250, function () {
                    $(this).remove();
                });
            }, 1800);

            $('.odometer').waypoint(function (direction) {
                if (direction === 'down') {
                    let countNumber = $(this.element).attr("data-count");
                    $(this.element).html(countNumber);
                }
            }, {
                offset: '80%'
            });

        });

        const svg = document.getElementById("svg");
        const tl = gsap.timeline();
        const curve = "M0 502S175 272 500 272s500 230 500 230V0H0Z";
        const flat = "M0 2S175 1 500 1s500 1 500 1V0H0Z";

        tl.to(".loader-wrap-heading .load-text , .loader-wrap-heading .cont", {
            delay: 0.45,
            duration: 0.3,
            y: -60,
            opacity: 0,
        });
        tl.to(svg, {
            duration: 0.25,
            attr: {
                d: curve
            },
            ease: "power2.easeIn",
        }).to(svg, {
            duration: 0.25,
            attr: {
                d: flat
            },
            ease: "power2.easeOut",
        });
        tl.to(".loader-wrap", {
            duration: 0.35,
            y: -1500,
        });
        tl.to(".loader-wrap", {
            zIndex: -1,
            display: "none",
        });
        tl.from(
            "main", {
            y: 0,
            opacity: 0,
            delay: 0.3,
        },
            "-=1.5"
        );

    }

    /* === Side Info  Js (index 06) === */
    $(".side-info-close,.offcanvas-overlay").on("click", function () {
        $(".side-info").removeClass("info-open");
        $(".offcanvas-overlay").removeClass("overlay-open");
    });
    $(".side-toggle").on("click", function () {
        $(".side-info").addClass("info-open");
        $(".offcanvas-overlay").addClass("overlay-open");
    });

    /* === Mean menu activation  Js (index 07) === */
    $('.main-menu').meanmenu({
        meanScreenWidth: "1199",
        meanMenuContainer: '.mobile-menu',
        meanMenuCloseSize: '28px',
    });
    $('.main-menu-all').meanmenu({
        meanScreenWidth: "5000",
        meanMenuContainer: '.mobile-menu',
        meanMenuCloseSize: '28px',
    });

    /* === Magnific Video popup Js (index 08) === */
    if ($('.video-popup').length && 'magnificPopup' in jQuery) {
        $('.video-popup').magnificPopup({
            type: 'iframe',
        });
    }

    /* === gsap nav Js (index 10) === */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth',
                });
            }
        });
    });

    /* === Nice Select Js (index 11) === */
    $("select").niceSelect();


    /* ========  main Js ======== */


})(jQuery);

