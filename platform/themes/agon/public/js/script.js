(()=>{function e(){$("input[name=billed_type]").on("change",(function(e){for(var s=$(this),i=s.closest("section").find(".for-month"),n=s.closest("section").find(".for-year"),t=s.closest("section").find(".text-billed-month"),a=s.closest("section").find(".text-billed-year"),o=0;o<i.length;o++)s.is(":checked")?(n.eq(o).addClass("display-year"),i.eq(o).removeClass("display-month"),a.addClass("active"),t.removeClass("active")):(n.eq(o).removeClass("display-year"),i.eq(o).addClass("display-month"),t.addClass("active"),a.removeClass("active"))})),$(document).on("click",".block-price-item",(function(){var e=$(this),s=e.closest("section");s.find(".block-price-item").removeClass("active"),e.addClass("active"),s.find(".list-package-feature").html(e.find(".block-package-feature").html())}))}!function(s){"use strict";s(window).on("load",(function(){s("#preloader-active").fadeOut("slow")}));var i,n,t,a=s(".sticky-bar"),o=s(window);(o.on("scroll",(function(){o.scrollTop()<200?(a.removeClass("stick"),s(".header-style-2 .categories-dropdown-active-large").removeClass("open"),s(".header-style-2 .categories-button-active").removeClass("open")):a.addClass("stick")})),(new WOW).init(),s(".sticky-sidebar").length&&s(".sticky-sidebar").theiaStickySidebar(),s(".categories-button-active").length)&&s(".categories-button-active").on("click",(function(e){e.preventDefault(),s(this).hasClass("open")?(s(this).removeClass("open"),s(this).siblings(".categories-dropdown-active-large").removeClass("open")):(s(this).addClass("open"),s(this).siblings(".categories-dropdown-active-large").addClass("open"))}));s(".select-active").length&&s(".select-active").select2(),s(".grid").length&&s(".grid").imagesLoaded((function(){s(".grid").isotope({itemSelector:".grid-item",percentPosition:!0,layoutMode:"masonry",masonry:{columnWidth:".grid-item"}})})),i=s(".search-active"),n=s(".search-close"),t=s(".main-search-active"),i.on("click",(function(e){e.preventDefault(),t.addClass("search-visible")})),n.on("click",(function(){t.removeClass("search-visible")})),function(){var e=s(".burger-icon"),i=s(".mobile-menu-close"),n=s(".mobile-header-active"),t=s("body");t.prepend('<div class="body-overlay-1"></div>'),e.on("click",(function(s){e.toggleClass("burger-close"),s.preventDefault(),n.toggleClass("sidebar-visible"),t.toggleClass("mobile-menu-active")})),i.on("click",(function(){n.removeClass("sidebar-visible"),t.removeClass("mobile-menu-active")})),s(".body-overlay-1").on("click",(function(){n.removeClass("sidebar-visible"),t.removeClass("mobile-menu-active"),e.removeClass("burger-close")}))}();var l=s(".mobile-menu"),r=l.find(".sub-menu");r.parent().prepend('<span class="menu-expand"><i class="fi-rr-angle-small-down"></i></span>'),r.slideUp(),l.on("click","li a, li .menu-expand",(function(e){var i=s(this);i.parent().attr("class").match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)&&("#"===i.attr("href")||i.hasClass("menu-expand"))&&(e.preventDefault(),i.siblings("ul:visible").length?(i.parent("li").removeClass("active"),i.siblings("ul").slideUp()):(i.parent("li").addClass("active"),i.closest("li").siblings("li").removeClass("active").find("li").removeClass("active"),i.closest("li").siblings("li").find("ul:visible").slideUp(),i.siblings("ul").slideDown()))})),s(".mobile-language-active").on("click",(function(e){e.preventDefault(),s(".lang-dropdown-active").slideToggle(900)})),s(".categories-button-active-2").on("click",(function(e){e.preventDefault(),s(".categori-dropdown-active-small").slideToggle(900)}));var c=s(".tm-demo-options-wrapper");s(".view-demo-btn-active").on("click",(function(e){e.preventDefault(),c.toggleClass("demo-open")})),s(".more_slide_open").slideUp(),s(".more_categories").on("click",(function(){s(this).toggleClass("show"),s(".more_slide_open").slideToggle()})),s(".list-tags-job .remove-tags-job").on("click",(function(e){e.preventDefault(),s(this).closest(".job-tag").remove()})),s((function(){s(".count").length&&s(".count").counterUp({delay:10,time:600}),s(".popup-youtube").length&&s(".popup-youtube").magnificPopup({type:"iframe",mainClass:"mfp-fade",removalDelay:160,preloader:!1,fixedContentPos:!1}),s(".swiper-group-6").each((function(){var e=s(this),i=s(this).closest(".box-swiper");new Swiper(e[0],{spaceBetween:30,slidesPerView:6,slidesPerGroup:2,loop:!0,navigation:{nextEl:i.find(".swiper-button-next")[0],prevEl:i.find(".swiper-button-prev")[0]},autoplay:{delay:1e4},breakpoints:{1199:{slidesPerView:6},800:{slidesPerView:4},400:{slidesPerView:2},350:{slidesPerView:2,slidesPerGroup:1,spaceBetween:15}}})})),s(".swiper-group-4").each((function(){var e=s(this),i=s(this).closest(".box-swiper");new Swiper(e[0],{spaceBetween:20,slidesPerView:4,slidesPerGroup:1,loop:!0,navigation:{nextEl:i.find(".swiper-button-next")[0],prevEl:i.find(".swiper-button-prev")[0]},autoplay:{delay:1e4},breakpoints:{1299:{slidesPerView:4},1150:{slidesPerView:4},750:{slidesPerView:2},600:{slidesPerView:1},550:{slidesPerView:1},300:{slidesPerView:1},200:{slidesPerView:1}}})})),s(".swiper-group-3").each((function(){var e=s(this),i=s(this).closest(".box-swiper");new Swiper(e[0],{spaceBetween:30,slidesPerView:3,slidesPerGroup:1,loop:!0,navigation:{nextEl:i.find(".swiper-button-next")[0],prevEl:i.find(".swiper-button-prev")[0]},pagination:{el:".swiper-pagination",type:"bullets",bulletActiveClass:"swiper-pagination-customs-active",bulletClass:"swiper-pagination-customs",clickable:!0},autoplay:{delay:1e4},breakpoints:{1199:{slidesPerView:3},800:{slidesPerView:2},600:{slidesPerView:1},350:{slidesPerView:1},310:{slidesPerView:1},200:{slidesPerView:1}}})})),s(".swiper-group-2").each((function(){var e=s(this),i=s(this).closest(".box-swiper");new Swiper(e[0],{spaceBetween:30,slidesPerView:2,slidesPerGroup:1,loop:!0,navigation:{nextEl:i.find(".swiper-button-next")[0],prevEl:i.find(".swiper-button-prev")[0]},pagination:{el:".swiper-pagination",type:"bullets",bulletActiveClass:"swiper-pagination-customs-active",bulletClass:"swiper-pagination-customs",clickable:!0},autoplay:{delay:1e4},breakpoints:{1199:{slidesPerView:2},800:{slidesPerView:1},600:{slidesPerView:1},400:{slidesPerView:1},350:{slidesPerView:1}}})})),s(".swiper-group-1").each((function(){var e=s(this),i=s(this).closest(".box-swiper");new Swiper(e[0],{spaceBetween:0,slidesPerView:1,slidesPerGroup:1,loop:!0,navigation:{nextEl:i.find(".swiper-button-next")[0],prevEl:i.find(".swiper-button-prev")[0]},autoplay:{delay:1e4}})})),s("[data-countdown]").each((function(){var e=s(this),i=e.data("countdown");e.countdown(i,(function(e){s(this).html(e.strftime("<span class='countdown-section'><span class='countdown-amount hover-up'>%D</span><span class='countdown-period'> ".concat(window.trans.days," </span></span>\n              <span class='countdown-section'><span class='countdown-amount hover-up'>%H</span><span class='countdown-period'> ").concat(window.trans.hours," </span></span>\n              <span class='countdown-section'><span class='countdown-amount hover-up'>%M</span><span class='countdown-period'> ").concat(window.trans.mins," </span></span>\n              <span class='countdown-section'><span class='countdown-amount hover-up'>%S</span><span class='countdown-period'> ").concat(window.trans.sec," </span></span>")))}))})),e()}))}(jQuery),$(".mobile-header-wrapper-inner").length&&new PerfectScrollbar(".mobile-header-wrapper-inner"),$(document).ready((function(){$(".product-info .anchor-link").on("click",(function(e){e.preventDefault();var s=$(this).attr("href");$(".product-description ul.nav li a").removeClass("active"),$(s).addClass("active"),$(".product-description .tab-content > .tab-pane").removeClass("active show"),$($(s).attr("href")).addClass("active show"),$("html, body").animate({scrollTop:$(s).offset().top-$("body > .header").height()-120+"px"},0)}))}))})();