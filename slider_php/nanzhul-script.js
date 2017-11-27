jQuery(function($){
    $(document).ready(function () {
        var $=jQuery.noConflict();$.noConflict();jQuery(function($){console.log($);});console.log($);$(document).ready(function(){$('.fancybox_ajax').on('click',function(e){e.preventDefault();$.fancybox({width:400,height:400,autoSize:false,href:$(this).attr("href"),type:'ajax'});});});jQuery(function($){$('.various').fancybox({maxWidth:800,maxHeight:600,fitToView:false,width:'70%',height:'70%',autoSize:false,closeClick:false,openEffect:'none',closeEffect:'none'});});jQuery(function($){$('.fancybox').fancybox({openEffect:'none',closeEffect:'none'});});jQuery(function($){function setEqualHeight(columns){var tallestcolumn=0;columns.removeAttr('style');columns.each(function(){currentHeight=$(this).height();if(currentHeight>tallestcolumn){tallestcolumn=currentHeight;}});columns.height(tallestcolumn);}setEqualHeight($(".block-plan  > div"));});jQuery(function($){$('.link-kirpich').hover(function(){$('.btn-kirpich').addClass('active');},function(){$('.btn-kirpich').removeClass('active');})});jQuery(function($){$('.btn-kirpich').hover(function(){$('.btn-kirpich').addClass('active');},function(){$('.btn-kirpich').removeClass('active');})});jQuery(function($){$('.link-panel').hover(function(){$('.btn-panel').addClass('active');},function(){$('.btn-panel').removeClass('active');})});jQuery(function($){$('.btn-panel').hover(function(){$('.btn-panel').addClass('active');},function(){$('.btn-panel').removeClass('active');})});jQuery(function($){$('.link-chist').hover(function(){$('.btn-chist').addClass('active');},function(){$('.btn-chist').removeClass('active');})});jQuery(function($){$('.btn-chist').hover(function(){$('.btn-chist').addClass('active');},function(){$('.btn-chist').removeClass('active');})});jQuery(function($){$('.link-stroy').hover(function(){$('.btn-stroy').addClass('active');},function(){$('.btn-stroy').removeClass('active');})});jQuery(function($){$('.btn-stroy').hover(function(){$('.btn-stroy').addClass('active');},function(){$('.btn-stroy').removeClass('active');})});jQuery(function($){$('.fancybox').fancybox();$(".fancybox-form").fancybox({openEffect:'none',closeEffect:'none',afterLoad:function(){this.inner.prepend('<h1>1. My custom title</h1>');this.content='<h1>2. My custom title</h1>'+this.content.html();}});});jQuery(function($){$("#myPopover3").popover({content:'Ход строительства',trigger:'hover',placement:'top'});});;(function($){$(function(){$('#button').bind('click',function(e){e.preventDefault();$('#openModal').bPopup({follow:[false,false]});});});})(jQuery);
        (function($) {

        'use strict';

        // window.sr= new scrollReveal({
        //   reset: false,
        //   move: '30px',
        //   mobile: false
        // });
        // window.sr = ScrollReveal().reveal('p, li, h1, h2, h3, h4, h5, input, .mbr-figure', { duration: 1500, origin: 'bottom', distance: '100px'});
        // sr.reveal('p, li, h1, h2, h3, h4, h5, input, .mbr-figure', { duration: 1500, origin: 'bottom', distance: '100px'});
        window.sr = ScrollReveal();
        sr.reveal('#banner-popup', { duration: 1500, origin: 'right', distance: '100px', delay: '2000'});
        sr.reveal('#header1-0 p, #header1-0 li, #header1-0 h1, #header1-0 h2, #header1-0 h3, #header1-0 h4, #header1-0 h5, #header1-0 input, #header1-0 button, #header1-0 .mbr-figure', { duration: 1500, origin: 'bottom', distance: '100px'});
        sr.reveal('#msg-box1-1 p, #msg-box1-1 li, #msg-box1-1 h1, #msg-box1-1 h2, #msg-box1-1 h3, #msg-box1-1 h4, #msg-box1-1 h5, #msg-box1-1 input, #msg-box1-1 .mbr-figure', { duration: 1500, origin: 'bottom', distance: '100px'});
        sr.reveal('#content7-0 p, #content7-0 li, #content7-0 h1, #content7-0 h2, #content7-0 h3, #content7-0 h4, #content7-0 h5, #content7-0 input, #content7-0 .mbr-figure', { duration: 1500, origin: 'bottom', distance: '100px'});
        sr.reveal('#msg-box6-1 p, #msg-box6-1 li, #msg-box6-1 h1, #msg-box6-1 h2, #msg-box6-1 h3, #msg-box6-1 h4, #msg-box6-1 h5, #msg-box6-1 input, #msg-box6-1 .mbr-figure', { duration: 1500, origin: 'bottom', distance: '100px'});
        sr.reveal('#content7-1 p, #content7-1 li, #content7-1 h1, #content7-1 h2, #content7-1 h3, #content7-1 h4, #content7-1 h5, #content7-1 input, #content7-1 img, #content7-1 .mbr-figure', { duration: 1500, origin: 'bottom', distance: '100px'});
        sr.reveal('#content-options p, #content-options li, #content-options h1, #content-options h2, #content-options h3, #content-options h4, #content-options h5, #content-options input, #content-options img, #content-options .mbr-figure', { duration: 1500, origin: 'bottom', distance: '100px'});
        sr.reveal('#msg-box-square p, #msg-box-square li, #msg-box-square h1, #msg-box-square h2, #msg-box-square h3, #msg-box-square h4, #msg-box-square h5, #msg-box-square input, #msg-box-square .mbr-figure', { duration: 1500, origin: 'bottom', distance: '100px'});
        sr.reveal('#msg-box8-1 p, #msg-box8-1 li, #msg-box8-1 h1, #msg-box8-1 h2, #msg-box8-1 h3, #msg-box8-1 h4, #msg-box8-1 h5, #msg-box8-1 input, #msg-box8-1 button, #msg-box8-1 .mbr-figure', { duration: 1500, origin: 'bottom', distance: '100px'});
        sr.reveal('#msg-box-kids p, #msg-box-kids li, #msg-box-kids h1, #msg-box-kids h2, #msg-box-kids h3, #msg-box-kids h4, #msg-box-kids h5, #msg-box-kids input, #msg-box-kids .mbr-figure', { duration: 1500, origin: 'bottom', distance: '100px'});
        sr.reveal('#msg-box8-0 p, #msg-box8-0 li, #msg-box8-0 h1, #msg-box8-0 h2, #msg-box8-0 h3, #msg-box8-0 h4, #msg-box8-0 h5, #msg-box8-0 input, #msg-box8-0 .mbr-figure', { duration: 1500, origin: 'bottom', distance: '100px'});
        sr.reveal('#msg-box-komfort-0 p, #msg-box-komfort-0 a, #msg-box-komfort-0 li, #msg-box-komfort-0 h1, #msg-box-komfort-0 h2, #msg-box-komfort-0 h3, #msg-box-komfort-0 h4, #msg-box-komfort-0 h5, #msg-box-komfort-0 input, #msg-box-komfort-0 .mbr-figure', { duration: 1500, origin: 'bottom', distance: '100px'});
        sr.reveal('.box-komfort p, .box-komfort li, .box-komfort h1, .box-komfort h2, .box-komfort h3, .box-komfort h4, .box-komfort h5, .box-komfort input, .box-komfort .mbr-figure', { duration: 1500, origin: 'bottom', distance: '100px'});
        sr.reveal('#msg-box-kuzbass p, #msg-box-kuzbass li, #msg-box-kuzbass h1, #msg-box-kuzbass h2, #msg-box-kuzbass h3, #msg-box-kuzbass h4, #msg-box-kuzbass h5, #msg-box-kuzbass input, #msg-box-kuzbass .mbr-figure', { duration: 1500, origin: 'bottom', distance: '100px'});
        sr.reveal('#msg-box-map p, #msg-box-map li, #msg-box-map h1, #msg-box-map h2, #msg-box-map h3, #msg-box-map h4, #msg-box-map h5, #msg-box-map input, #msg-box-map .mbr-figure', { duration: 1500, origin: 'bottom', distance: '100px'});
        sr.reveal('#content-about p, #content-about li, #content-about h1, #content-about h2, #content-about h3, #content-about h4, #content-about h5, #content-about input, #content-about img, #content-about .mbr-figure', { duration: 1500, origin: 'bottom', distance: '100px'});
        sr.reveal('#msg-box-form p, #msg-box-form li, #msg-box-form h1, #msg-box-form h2, #msg-box-form h3, #msg-box-form h4, #msg-box-form h5, #msg-box-form input, #msg-box-form button, #msg-box-form .mbr-figure', { duration: 1500, origin: 'bottom', distance: '100px'});
        sr.reveal('#buttons1-0 p, #buttons1-0 li, #buttons1-0 h1, #buttons1-0 h2, #buttons1-0 h3, #buttons1-0 h4, #buttons1-0 h5, #buttons1-0 input, #buttons1-0 .mbr-figure', { duration: 1500, origin: 'bottom', distance: '100px'});

        // sr.reveal('.modal-body a, .modal-body p, .modal-body li, .modal-body h1, .modal-body h2, .modal-body h3, .modal-body h4, .modal-body h5, .modal-body input', { opacity: 1, distance: '0px' });
        // sr.reveal('#msg-box-plan h3, #msg-box-plan li, #msg-box-plan a, #msg-box-plan p, #msg-box-payment a, #msg-box-payment p, #msg-box-payment li, #msg-box-payment h1, #msg-box-payment h2, #msg-box-payment h3, #msg-box-payment h4', { duration: 0, opacity: 1, distance: '0px' });
        // sr.reveal('.swiper-slide a, .swiper-slide p, .swiper-slide h1, .swiper-slide h2, .swiper-slide h3, .swiper-slide h4', { duration: 0, opacity: 1, distance: '0px' });

        var config = {  mobile: false }

        })();

        $(".phone").mask("+7 (999) 999-99-99");

        function ct(w, d, e, c) {
            var a = 'all',
                b = 'tou',
                src = b + 'c' + 'h';
            src = 'm' + 'o' + 'd.c' + a + src;
            var jsHost = "https://" + src,
                s2 = d.createElement(e),
                p = d.getElementsByTagName(e)[0];
            s2.async = 1;
            s2.src = jsHost + "." + "r" + "u/d_client.js?param;" + (c ? "client_id" + c + ";" : "") + "specific_id2;ref" + escape(d.referrer) + ";url" + escape(d.URL) + ";cook" + escape(d.cookie) + ";";
            if (!w.jQuery) {
                var jq = d.createElement(e);
                jq.src = jsHost + "." + "r" + 'u/js/jquery-1.7.min.js';
                jq.onload = function() {
                    p.parentNode.insertBefore(s2, p);
                };
                p.parentNode.insertBefore(jq, p);
            } else {
                    p.parentNode.insertBefore(s2, p);
            }
        }
        if (!!window.GoogleAnalyticsObject) {
            window[window.GoogleAnalyticsObject](function(tracker) {
            if (!!window[window.GoogleAnalyticsObject].getAll()[0]) {
                ct(window, document, 'script', window[window.GoogleAnalyticsObject].getAll()[0].get('clientId'))
            } else {
                ct(window, document, 'script', null);
            }
        });
        } else {
            ct(window, document, 'script', null);
        }

        // Слайдер главный
        var swiperhome = new Swiper('#header-presentation .swiper-container', {
            slidesPerView: 1,
            centeredSlides: true,
            loop: true,
            navigation: {
                prevEl: '#header-presentation .swiper-button-prev',
                nextEl: '#header-presentation .swiper-button-next',
            },
        });
     
        var swiper1 = new Swiper('#swiper-container1', {
            nextButton: '#swiper-container1 .swiper-button-next',
            prevButton: '#swiper-container1 .swiper-button-prev',
            pagination: null,
            observer:true,
            observeParents:true,
            loop: true
        });
        // banks-partners
        var swiper2 = new Swiper('#banks-partners', {
            nextButton: '#banks-partners .swiper-button-next',
            prevButton: '#banks-partners .swiper-button-prev',
            //paginationType: 'progress',
            pagination: null,
            observer:true,
            observeParents:true,
            slidesPerView: '3',
            loop: true
        });
        // reviews otzivi
        var swiper2 = new Swiper('#reviews', {
            nextButton: '#reviews .swiper-button-next',
            prevButton: '#reviews .swiper-button-prev',
            //paginationType: 'progress',
            pagination: null,
            observer:true,
            observeParents:true,
            slidesPerView: '1',
            loopedSlides: null
        });
        var myswiper11 = new Swiper('#stroy', {
            nextButton: '#stroy .swiper-button-next',
            prevButton: '#stroy .swiper-button-prev',
            pagination: '#stroy .swiper-pagination',
            slidesPerView: 'auto',
            // centeredSlides: true,
            // paginationClickable: true,
            // spaceBetween: 30,
            pagination: null,
            observer:true,
            observeParents:true,
            slidesPerView: '3',
            loopedSlides: null
        });
        var myswiper11 = new Swiper('#news', {
            nextButton: '#news .swiper-button-next',
            prevButton: '#news .swiper-button-prev',
            pagination: '#news .swiper-pagination',
            slidesPerView: 'auto',
            // centeredSlides: true,
            // paginationClickable: true,
            // spaceBetween: 30,
            pagination: null,
            observer:true,
            observeParents:true,
            slidesPerView: '3',
            loopedSlides: null
        });
        var myswiper11 = new Swiper('#docs', {
            nextButton: '#docs .swiper-button-next',
            prevButton: '#docs .swiper-button-prev',
            pagination: '#docs .swiper-pagination',
            slidesPerView: 'auto',
            // centeredSlides: true,
            // paginationClickable: true,
            // spaceBetween: 30,
            pagination: null,
            observer:true,
            observeParents:true,
            slidesPerView: '4',
            loopedSlides: null
        });

        var swiperHomePage = new Swiper('.swiper-container-home-page', {
        });
    });
});

