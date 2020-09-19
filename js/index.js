"use strict";
! function() {
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
    }

    new WOW({
        offset: 20
    }).init(), $(".s1").css({
        "margin-top": $(".top-nav").css("height")
    });
    var n = $(".img-slogan"),
        e = $("body").attr("class");
    "HK" == e ? (n.attr("dataimg-pc", "images/hk_slogan.png"), n.attr("dataimg-m", "images/hk_slogan.png")) : "TW" == e ? (n.attr("dataimg-pc", "images/tw_slogan.png"), n.attr("dataimg-m", "images/tw_slogan.png")) : (n.attr("dataimg-pc", "images/" + e + "_slogan.png"), n.attr("dataimg-m", "images/" + e + "_slogan.png")), "id" == e || "th" == e || "TW" == e || "HK" == e ? $(".dny2").remove() : $(".dny1").remove(), setTimeout(function() {
        if ($(window).width() <= 500) {
            var e = n.attr("dataimg-m");
            n.attr("src", e)
        } else {
            var t = n.attr("dataimg-pc");
            n.attr("src", t)
        }
    }, 500);
    var r = !1;

    function o() {
        $(".video-img-box").css("height", $(".s3-rwb.on .s3-video-img").css("height"))
    }($("body").hasClass("TW") || $("body").hasClass("HK")) && (r = !1), setTimeout(function() {
        o(), $(".video-img-box img").css("display", "block")
    }, 100), window.resizefun = function() {
        o(), $(".video-img-box img").css("display", "block"), $(".s1").css({
            "margin-top": $(".top-nav").css("height")
        });
        var i = $(window).width();
        $(window).height();
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) || i <= 500) {
            $("body").addClass("mclass"), $(".s2-video").attr("src", " ").hide();
            var e = n.attr("dataimg-m");
            $(".s3-box-bg").attr("src", $(".s3-box-bg").attr("dataimg-m")), n.attr("src", e), 500 < i && ($(".s2 img").attr("src", "images/s2_bg.jpg"), e = n.attr("dataimg-pc"), n.attr("src", e), $(".s3-box-bg").attr("src", $(".s3-box-bg").attr("dataimg-pc")))
        } else $("body").removeClass("mclass"), r ? ($(".s2 img").attr("src", "images/s2_bg_zh.jpg"), $(".s2-video").attr("src", "images/s2_v_zh.mp4").show()) : ($(".s2 img").attr("src", "images/s2_bg.jpg"), $(".s2-video").attr("src", "images/s2_v.mp4").show());
        for (var t = 0; t < $(".kv-swiper-container .swiper-slide").length; t++) {
            var s, a = $(".kv-swiper-container .swiper-slide").eq(t);
            s = i <= 500 ? r ? a.find("img").attr("dataimg-m-zh") : a.find("img").attr("dataimg-m") : r ? a.find("img").attr("dataimg-pc-zh") : a.find("img").attr("dataimg-pc"), a.find("img").attr("src", s)
        }
        setTimeout(function() {
            for (var e = 0; e < $(".s4-swiper-container li").length; e++) {
                var t, s = $(".s4-swiper-container li").eq(e);
                t = i <= 500 ? s.find("img").attr("dataimg-m") : s.find("img").attr("dataimg-pc"), s.find("img").attr("src", t)
            }
            swiper4.update()
        }, 600), $(".kv").width(i), setTimeout(function() {
            swiper1.update(), swiper4.update(), swiper5.update(), swiper31.update(), swiper32.update()
        }, 800)
    };
    var t = 0;
    $(".s3-nav .s3-nav-btn").click(function() {
        t = $(this).index(), $(this).addClass("on").siblings().removeClass("on"), $(".s3-rwb-box .s3-rwb").eq(t).addClass("on").siblings().removeClass("on"), $(".s3-inner-tab .s3-inner-btns").eq(t).addClass("on").siblings().removeClass("on"), t < 2 && window["swiper3" + (t + 1)].update(), o()
    }), $(".s3-inner-tab .s3-inner-btn").click(function() {
        var e = $(this).index();
        $(this).addClass("on").siblings().removeClass("on"), $(".s3-rwb-box .s3-rwb" + (t + 1) + " .s3-rwb-item").eq(e).addClass("on").siblings().removeClass("on"), o()
    }), $(".showKey").on("click", function() {
        $(".dia1-box .dia1-text").html(["TIFZBHZK4A", "TIFZBIZACG", "TIFZBJZWMN"][parseInt(3 * Math.random())]), $(".bg-color").addClass("on"), $(".dia1").addClass("on")
    }), $(".dia-close").on("click", function() {
        $(".bg-color").removeClass("on"), $(".dia1").removeClass("on")
    }), $(window).on("resize", resizefun).trigger("resize"), $("#scene").parallax();
    var s, i, a, d, p, g, l, c, w, m, b;
    $(".s5-img-item").length;
    $(".tab-bar").on("click", ".tab-bar-item", function(e) {
        var t = $(e.delegateTarget),
            s = $(this),
            i = t.find(".tab-bar-item").index(s),
            a = t.siblings(".tab-container").find(".tab-container-item");
        s.hasClass("on") || (s.addClass("on").siblings().removeClass("on"), a.eq(i).addClass("on").siblings().removeClass("on"))
    }), window.swiper1 = new Swiper(".kv-swiper-container", {
        autoplay: !1,
        speed: 500,
        effect: "fade",
        loop: !1,
        pagination: {
            el: ".kv-pagination"
        }
    }), window.swiper31 = new Swiper(".s3-swiper-container1", {
        effect: "fade",
        loop: !1,
        navigation: {
            nextEl: ".s3-swiper-next1",
            prevEl: ".s3-swiper-prev1"
        },
        pagination: {
            el: ".s3-swiper-pagination1"
        },
        on: {
            init: function() {
                o()
            }
        }
    }), window.swiper32 = new Swiper(".s3-swiper-container2", {
        effect: "fade",
        loop: !1,
        navigation: {
            nextEl: ".s3-swiper-next2",
            prevEl: ".s3-swiper-prev2"
        },
        pagination: {
            el: ".s3-swiper-pagination2"
        },
        on: {
            init: function() {
                o()
            }
        }
    }), window.swiper5 = new Swiper(".s5-swiper-container", {
        loop: !0,
        slidesPerView: 3,
        centeredSlides: !0,
        navigation: {
            nextEl: ".s5-swiper-next",
            prevEl: ".s5-swiper-prev"
        },
        on: {
            slideChangeTransitionEnd: function() {
                $(".s5-title .s5-subheading-item").eq(this.realIndex).addClass("on").siblings().removeClass("on")
            }
        }
    }), window.swiper4 = new Swiper(".s6-swiper-container", {
        autoplay: !1,
        speed: 500,
        loop: !1,
        navigation: {
            nextEl: ".s6-swiper-next",
            prevEl: ".s6-swiper-prev"
        },
        pagination: {
            el: ".s6-swiper-pagination"
        },
        on: {
            slideChangeTransitionEnd: function() {
                $(".s6-title .s6-subheading-item").eq(this.realIndex).addClass("on").siblings().removeClass("on")
            }
        }
    }), $(".share-btn").on("click", function() {
        $(".b-bg").show(), $(".pop-vid,.pop-act").hide(), $(".pop-share").show()
    }), s = document, i = "script", a = "facebook-jssdk", p = s.getElementsByTagName(i)[0], s.getElementById(a) || ((d = s.createElement(i)).id = a, d.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0", p.parentNode.insertBefore(d, p)), window.twttr = (g = document, l = "script", c = "twitter-wjs", m = g.getElementsByTagName(l)[0], b = window.twttr || {}, g.getElementById(c) || ((w = g.createElement(l)).id = c, w.src = "https://platform.twitter.com/widgets.js", m.parentNode.insertBefore(w, m), b._e = [], b.ready = function(e) {
        b._e.push(e)
    }), b), $(".twitter-share-btn").attr("href", "https://twitter.com/intent/tweet?original_referer=" + encodeURIComponent("https://developer.twitter.com/en/docs/twitter-for-websites/tweet-button/overview.html&ref_src=twsrc^tfw&related=twitterapi,twitter") + "&text=" + encodeURIComponent("ROYALE PASS MUSIM 10") + "&url=" + encodeURIComponent("https://www.pubgmobile.com/event/royalepass10/")), $(".facebook-share-btn").attr("href", "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent("https://www.pubgmobile.com/event/royalepass10/") + "&src=sdkpreparse")
}();