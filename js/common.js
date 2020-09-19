"use strict";

function onYouTubeIframeAPIReady() {
    pop.youtubeFlag = !0
}! function() {
    $(".lang-on").find("em").text("id".toLocaleUpperCase()).end().find("i").removeClass().addClass("id");
    var o = 0;
    window.bodyLock = function() {
        o = $(window).scrollTop(), $("body").css("top", -o), $("body").addClass("lock")
    }, window.bodyUnlock = function() {
        $("body").removeClass("lock"), $("body").css("top", ""), o && ($(window).scrollTop(o), o = 0)
    }, $(".lang-arrow").on("click", function(o) {
        $(".slec").slideUp(), $(".lang-list").slideToggle(), $(".nav-list").removeClass("show"), $(".top-line ul").removeClass("open"), o.stopPropagation(), bodyUnlock()
    }), $(".down").on("click ", function(o) {
        $(".slec").slideToggle(), $(".lang-list").slideUp(), $(".nav-list").removeClass("show"), $(".top-line ul").removeClass("open"), o.stopPropagation(), bodyUnlock()
    }), $(".slide-icon").click(function() {
        $(this).siblings(".slide-icon").find("ul").slideUp(200).end().removeClass("slide-icon-d"), $(this).find("ul").slideToggle(200).end().toggleClass("slide-icon-d")
    }), $(".top-line ul").on("click ", function(o) {
        $("body").hasClass("lock") ? bodyUnlock() : bodyLock(), $(this).toggleClass("open"), $(".nav-list").toggleClass("show"), $(".slec").slideUp(), $(".lang-list").slideUp(), $(".top-nav").toggleClass("fixed"), o.stopPropagation()
    }), $("body").on("click ", function() {
        $(".top-line ul").removeClass("open"), $(".nav-list").removeClass("show"), $(".slec").slideUp(), $(".lang-list").slideUp(), $(".top-nav").removeClass("fixed"), bodyUnlock()
    }), $(".nav-list").on("click ", function(o) {
        o.stopPropagation()
    }), $(".lang-list li,.special-langlist li").click(function() {
        var o = $(this).attr("class");
        window.location.href = "/" + o + "/event/spring2020/"
    });
    var e = {},
        i = document.createElement("script");
    i.src = "https://www.youtube.com/iframe_api";
    var n = document.getElementsByTagName("script")[0];
    n.parentNode.insertBefore(i, n);
    var l, s, a, t = {};

    function d(o) {
        0 == o.data && e.hidevideopop()
    }
    e.youtubeFlag = !1, l = navigator.userAgent, navigator.appVersion, s = -1 < l.indexOf("Android") || -1 < l.indexOf("Adr"), a = !!l.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), s ? ($(".apple-btn").hide(), $(".top-nav .slec li").eq(0).hide()) : a && ($(".apk-btn").hide(), $(".top-nav .slec li").eq(1).hide()), e.pop = function(o) {
        $(o).show(), $(".b-bg").show()
    }, e.hidepop = function() {
        $(".b-bg>div").hide(), $(".b-bg").hide(), $(".pop-cartoon-swiper .swiper-wrapper").html(" ")
    }, e.hidevideopop = function() {
        e.hidepop(), $(".pop-loading").removeClass("loaded"), t && t.destroy()
    }, e.popVid = function(o) {
        o.length < 10 ? alert("Coming soon!") : e.youtubeFlag ? (t = new YT.Player("pop-player", {
            height: "100%",
            width: "100%",
            videoId: o,
            playerVars: {
                rel: 0,
                playsinline: 1
            },
            events: {
                onReady: function(o) {
                    $(".pop-loading").addClass("loaded"), o.target.playVideo()
                },
                onStateChange: d
            }
        }), e.pop(".pop-vid")) : alert("loading...")
    }, window.pop = e, $(".b-bg").on("click", function() {
        e.hidevideopop()
    }), $(".b-bg>div, .pagination").on("click", function(o) {
        o.stopPropagation()
    })
}();