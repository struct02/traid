/*-----------------------------------------------------------------------------------
    
    Template Name: Sasly - Multipurpose Landing Page HTML Template
    URI: site.com 
    Description: Sasly is a flexible and professional Multipurpose HTML template, ideal for a variety of landing page needs including SaaS, software, fintech, Ai, E-learning, creative agencies, consulting services, software subscriptions, web applications, and digital marketing websites. Designed with all the essential elements to create an impactful landing page or corporate site, Sasly covers every detail to suit your business needs. We have included best practices of web development and you can create a great website layout based on Bootstrap or Grid 1320px.
    Author: Pixelfit
    Author URI: https://themeforest.net/user/pixelfit
    Version: 1.0 

    Note: This is Main Js file

-----------------------------------------------------------------------------------
    ===================
    Js INDEX
    ===================
    ## Main Menu
    ## Document Ready
    ## Nav Overlay
    ## Preloader
    ## Sticky
    ## Back to top
    ## Magnific-popup js
    ## Nice select
    ## Gsap
    ## AOS Js
    
-----------------------------------------------------------------------------------*/

(function($) {
    'use strict';

    //===== Main Menu

    function mainMenu() {
        
        var var_window = $(window),
        navContainer = $('.header-navigation'),
        navbarToggler = $('.navbar-toggler'),
        navMenu = $('.sasly-nav-menu'),
        navMenuLi = $('.sasly-nav-menu ul li ul li'),
        closeIcon = $('.navbar-close');

        navbarToggler.on('click', function() {
            navbarToggler.toggleClass('active');
            navMenu.toggleClass('menu-on');
        });

        closeIcon.on('click', function() {
            navMenu.removeClass('menu-on');
            navbarToggler.removeClass('active');
        });

        navMenu.find("li a").each(function() {
            if ($(this).children('.dd-trigger').length < 1) {
                if ($(this).next().length > 0) {
                    $(this).append('<span class="dd-trigger"><i class="far fa-angle-down"></i></span>')
                }
            }
        });

        navMenu.on('click', '.dd-trigger', function(e) {
            e.preventDefault();
            $(this).parent().parent().siblings().children('ul.sub-menu').slideUp();
            $(this).parent().next('ul.sub-menu').stop(true, true).slideToggle(350);
            $(this).toggleClass('sub-menu-open');
        });

    };

    //===== Offcanvas Overlay

    function offCanvas() {
        const $overlay = $(".offcanvas__overlay");
        const $toggler = $(".navbar-toggler");
        const $menu = $(".sasly-nav-menu");
        $toggler.add($overlay).add(".navbar-close, .panel-close-btn").on("click", function () {
            $overlay.toggleClass("overlay-open");
            if ($(this).is($overlay)) {
                $toggler.removeClass("active");
                $menu.removeClass("menu-on");
            }
        });
        $(window).on("resize", function () {
            if ($(window).width() > 991) $overlay.removeClass("overlay-open");
        });
    }

    //===== Windows load

    $(window).on('load', function(event) {
        //===== Preloader
        $('.preloader').delay(500).fadeOut(500);
    })

    //===== Magnific-popup js
    
    if ($('.video-popup').length){
        $('.video-popup').magnificPopup({
            type: 'iframe',
            removalDelay: 300,
            mainClass: 'mfp-fade'
        });
    }

    if ($('.img-popup').length){
        $(".img-popup").magnificPopup({
            type: "image",
             gallery: { 
              enabled: true 
            }
        });
    }


    //===== Gasp 
    
    gsap.registerPlugin(SplitText, ScrollTrigger, ScrollSmoother);

    // Gsap ScrollSmoother

    ScrollSmoother.create({
    smooth: 1,
    effects: true,
        smoothTouch: 0.1,
    });

    // Gsap SplitText

    if ($('.split').length > 0) {

        // Split text into characters
        let mySplitText = new SplitText(".split", { type: "chars" });
        let chars = mySplitText.chars;

        // GSAP animation
        gsap.from(chars, {
            yPercent: 100,
            stagger: 0.065,
            ease: "back.out",
            duration: 1,
            scrollTrigger: {
                trigger: ".split",
                start: "top 50%",
            }
        });
    }
    
    if ($('.text-anm').length) {				
		let	 staggerAmount 		= 0.02,
        translateXValue	= 20,
        delayValue 		= .2,
        easeType 			= "power2.out",
        animatedTextElements = document.querySelectorAll('.text-anm');
		animatedTextElements.forEach((element) => {
			let animationSplitText = new SplitText(element, { type: "chars, words" });
            gsap.from(animationSplitText.chars, {
                duration: 1,
                delay: delayValue,
                x: translateXValue,
                autoAlpha: 0,
                stagger: staggerAmount,
                ease: easeType,
                scrollTrigger: { trigger: element, start: "top 85%"},
            });
		});		
	}

    if ($('.text-anm-two').length) {				
        let staggerAmount = 0.02,
            translateXValueNegative = -20, // Left side animation
            delayValue = .5,
            easeType = "power2.out",
            animatedTextElements = document.querySelectorAll('.text-anm-two');
    
        animatedTextElements.forEach((element) => {
            let animationSplitText = new SplitText(element, { type: "chars, words" });
            
            gsap.from(animationSplitText.chars, {
                duration: 1,
                delay: delayValue,
                x: translateXValueNegative, // Move to the left
                autoAlpha: 0,
                stagger: staggerAmount,
                ease: easeType,
                scrollTrigger: { trigger: element, start: "top 85%" },
            });
        });
    }



    if ($('.text-anm-three').length) {
        // Select the text container
        const $container = $(".text-anm-three");
        const text = $container.text();
        const characters = text.split("");
        $container.empty();
        characters.forEach(char => {
            $container.append(`<span class='char'>${char}</span>`);
        });
        const $chars = $container.find(".char");
        gsap.timeline({ repeat: -1 })
        .from($chars, {
            y: 50,
            opacity: 0,
            ease: "back.out(2)",
            stagger: 0.08,
            duration: 0.8,
        })
    }
    
    // Gsap ScrollTrigger
    $(function () {
        var width = $(window).width();
        if (width > 991) { 
            "use strict";
            
            $(function () {
                let cards = gsap.utils.toArray(".project-item-list .sasly-project-item");
    
                let stickDistance = 100; 
    
                
                let lastCardST = ScrollTrigger.create({
                    trigger: cards[cards.length - 1],
                    start: "bottom bottom",
                    markers: false 
                });
    
                cards.forEach((card, index) => {
                    ScrollTrigger.create({
                        trigger: card,
                        start: "top top", 
                        end: () => lastCardST.start + stickDistance, 
                        pin: true,      
                        pinSpacing: false, 
                        ease: "none",    
                        scrub: true,     
                        toggleActions: "reverse none none reverse",
                        markers: false 
                    });
                });
            });
        }
    });
    

    //====== Aos 
    
    AOS.init({
        offset: 0
    });

    // Document Ready
    $(function() {
        mainMenu();
        offCanvas();
    });

})(window.jQuery);