/*
 * 01 отложенная загрузка изображений
 * 02 табы для услуг
 * 03 инициализация
 */

/*
==========================================================
= 01  Lazy Load XT 1.1.0  https://github.com/ressio/lazy-load-xt  
===================================================================
*/
! function(a, b, c, d) {
    function e(a, b) { return a[b] === d ? t[b] : a[b] }

    function f() { var a = b.pageYOffset; return a === d ? r.scrollTop : a }

    function g(a, b) { var c = t["on" + a];
        c && (w(c) ? c.call(b[0]) : (c.addClass && b.addClass(c.addClass), c.removeClass && b.removeClass(c.removeClass))), b.trigger("lazy" + a, [b]), k() }

    function h(b) { g(b.type, a(this).off(p, h)) }

    function i(c) { if (z.length) { c = c || t.forceLoad, A = 1 / 0; var d, e, i = f(),
                j = b.innerHeight || r.clientHeight,
                k = b.innerWidth || r.clientWidth; for (d = 0, e = z.length; e > d; d++) { var l, m = z[d],
                    q = m[0],
                    s = m[n],
                    u = !1,
                    v = c || y(q, o) < 0; if (a.contains(r, q)) { if (c || !s.visibleOnly || q.offsetWidth || q.offsetHeight) { if (!v) { var x = q.getBoundingClientRect(),
                                B = s.edgeX,
                                C = s.edgeY;
                            l = x.top + i - C - j, v = i >= l && x.bottom > -C && x.left <= k + B && x.right > -B } if (v) { m.on(p, h), g("show", m); var D = s.srcAttr,
                                E = w(D) ? D(m) : q.getAttribute(D);
                            E && (q.src = E), u = !0 } else A > l && (A = l) } } else u = !0;
                u && (y(q, o, 0), z.splice(d--, 1), e--) } e || g("complete", a(r)) } }

    function j() { B > 1 ? (B = 1, i(), setTimeout(j, t.throttle)) : B = 0 }

    function k(a) { z.length && (a && "scroll" === a.type && a.currentTarget === b && A >= f() || (B || setTimeout(j, 0), B = 2)) }

    function l() { v.lazyLoadXT() }

    function m() { i(!0) } var n = "lazyLoadXT",
        o = "lazied",
        p = "load error",
        q = "lazy-hidden",
        r = c.documentElement || c.body,
        s = b.onscroll === d || !!b.operamini || !r.getBoundingClientRect,
        t = { autoInit: !0, selector: "img[data-src]", blankImage: "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7", throttle: 99, forceLoad: s, loadEvent: "pageshow", updateEvent: "load orientationchange resize scroll touchmove focus", forceEvent: "lazyloadall", oninit: { removeClass: "lazy" }, onshow: { addClass: q }, onload: { removeClass: q, addClass: "lazy-loaded" }, onerror: { removeClass: q }, checkDuplicates: !0 },
        u = { srcAttr: "data-src", edgeX: 0, edgeY: 0, visibleOnly: !0 },
        v = a(b),
        w = a.isFunction,
        x = a.extend,
        y = a.data || function(b, c) { return a(b).data(c) },
        z = [],
        A = 0,
        B = 0;
    a[n] = x(t, u, a[n]), a.fn[n] = function(c) { c = c || {}; var d, f = e(c, "blankImage"),
            h = e(c, "checkDuplicates"),
            i = e(c, "scrollContainer"),
            j = e(c, "show"),
            l = {};
        a(i).on("scroll", k); for (d in u) l[d] = e(c, d); return this.each(function(d, e) { if (e === b) a(t.selector).lazyLoadXT(c);
            else { var i = h && y(e, o),
                    m = a(e).data(o, j ? -1 : 1); if (i) return void k();
                f && "IMG" === e.tagName && !e.src && (e.src = f), m[n] = x({}, l), g("init", m), z.push(m), k() } }) }, a(c).ready(function() { g("start", v), v.on(t.updateEvent, k).on(t.forceEvent, m), a(c).on(t.updateEvent, k), t.autoInit && (v.on(t.loadEvent, l), l()) }) }(window.jQuery || window.Zepto || window.$, window, document);
/* data-bg addon */
! function(a) { var b = a.lazyLoadXT,
        c = b.bgAttr || "data-bg";
    b.selector += ",[" + c + "]", a(document).on("lazyshow", function(b) { var d = a(b.target),
            e = d.attr(c);
        e && d.css("background-image", "url('" + e + "')").removeAttr(c).triggerHandler("load") }) }(window.jQuery || window.Zepto || window.$);
/* video addon */
! function(a) { var b = a.lazyLoadXT;
    b.selector += ",video,iframe[data-src]", b.videoPoster = "data-poster", a(document).on("lazyshow", "video", function(c, d) { var e = d.lazyLoadXT.srcAttr,
            f = a.isFunction(e),
            g = !1;
        d.attr("poster", d.attr(b.videoPoster)), d.children("source,track").each(function(b, c) { var d = a(c),
                h = f ? e(d) : d.attr(e);
            h && (d.attr("src", h), g = !0) }), g && this.load() }) }(window.jQuery || window.Zepto || window.$);

/*
=================
= 02 Табы для услуг
====================
*/
+
function(t) { "use strict"; var e = function(e) { this.element = t(e) };
    e.prototype.show = function() { var e = this.element,
            i = e.closest("ul:not(.dropdown-menu)"),
            n = e.data("target"); if (n || (n = e.attr("href"), n = n && n.replace(/.*(?=#[^\s]*$)/, "")), !e.parent("li").hasClass("active")) { var o = i.find(".active:last a")[0],
                s = t.Event("show.bs.tab", { relatedTarget: o }); if (e.trigger(s), !s.isDefaultPrevented()) { var a = t(n);
                this.activate(e.parent("li"), i), this.activate(a, a.parent(), function() { e.trigger({ type: "shown.bs.tab", relatedTarget: o }) }) } } }, e.prototype.activate = function(e, i, n) {
        function o() { s.removeClass("active").find("> .dropdown-menu > .active").removeClass("active"), e.addClass("active"), a ? (e[0].offsetWidth, e.addClass("in")) : e.removeClass("fade"), e.parent(".dropdown-menu") && e.closest("li.dropdown").addClass("active"), n && n() } var s = i.find("> .active"),
            a = n && t.support.transition && s.hasClass("fade");
        a ? s.one(t.support.transition.end, o).emulateTransitionEnd(150) : o(), s.removeClass("in") }; var i = t.fn.tab;
    t.fn.tab = function(i) { return this.each(function() { var n = t(this),
                o = n.data("bs.tab");
            o || n.data("bs.tab", o = new e(this)), "string" == typeof i && o[i]() }) }, t.fn.tab.Constructor = e, t.fn.tab.noConflict = function() { return t.fn.tab = i, this }, t(document).on("click.bs.tab.data-api", '[data-toggle="tab"], [data-toggle="pill"]', function(e) { e.preventDefault(), t(this).tab("show") }) }(jQuery),

/*
=================
= 03 инициализация
====================
*/
jQuery(document).ready(function($) {

    // lazyload
    $(window).lazyLoadXT({
        edgeY: 100,
        srcAttr: 'data-src',
    });
    $(window).on('ajaxComplete', function() {
        setTimeout(function() {
            $(window).lazyLoadXT();
        }, 50);
    });

    // открываем меню
    var $hamburger = $(".hamburger");
    $hamburger.on("click", function() {
        $hamburger.toggleClass("is-active");
        $('.mob-menu').slideToggle();
        //$('.overlay').slideToggle();
    });

    // кнопка Вверх
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('.backtop').fadeIn(100);
        } else {
            $('.backtop').fadeOut(100);
        }
    });
    $('.backtop').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        return false;
    });

    // кнопка скроллинга
    var $root = $('html, body');
    $('a[href^="#toform"]').click(function() {
        $root.animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 'slow');
        return false;
    });

    // дочерние пункты в моб меню
    $('.mob-menu .sub-menu, .widget_nav_menu .sub-menu').parent().click(function(e) {
        var submenu = $(this).children('.sub-menu');
        if ($(submenu).is(':hidden')) {
            $(submenu).slideToggle();
        } else {
            $(submenu).slideToggle();
        }
        e.stopPropagation();
    });

    // открываем поп-ап
    $('.open_modal').click(function() {
        var popup_id = $('#' + $(this).attr("rel"));
        $(popup_id).show('fast');
        $('.overlay_popup').show();
    })
    // закрываем поп-ап
    $('.overlay_popup, .popup .close').click(function() {
        $('.overlay_popup, .popup').hide();
    });

    // табы для услуг
    $(".tabs-post:first-of-type").addClass("active in");
    $(".tabs li:first-child").addClass("active");

}); // конец