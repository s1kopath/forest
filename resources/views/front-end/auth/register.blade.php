<!doctype html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Reeve Capital, an investment platform">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, javascript">
    <meta name="author" content="Global fast Coder">
    <meta name="theme-color" content="#091b65" />
    <!-- critical preload -->
    <link rel="preload" href="{{ asset('front-end/js/vendors/uikit.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('front-end/css/style.css') }}" as="style">
    <!-- icon preload -->
    <link rel="preload" href="{{ asset('front-end/fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2"
        crossorigin>
    <link rel="preload" href="{{ asset('front-end/fonts/fa-solid-900.woff2') }}" as="font" type="font/woff2"
        crossorigin>
    <!-- font preload -->
    <link rel="preload" href="{{ asset('front-end/fonts/archivo-v9-latin-regular.woff2') }}" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('front-end/fonts/archivo-v9-latin-300.woff2') }}" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('front-end/fonts/archivo-v9-latin-700.woff2') }}" as="font"
        type="font/woff2" crossorigin>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('front-end/css/style.css') }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('front-end/img/reeve-favicon.png') }}" type="image/x-icon">
    <!-- Touch icon -->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('front-end/img/apple-touch-icon.png') }}">
    <title>Sign in - {{ env('APP_NAME') }}</title>

    {{-- intl-tel plugin --}}
    <link rel="stylesheet" href="{{ asset('front-end/build/css/intlTelInput.css') }}">

    @livewireStyles
    @laravelTelInputStyles
</head>

<body>
    <!-- page loader begin -->
    <div class="in-page-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- page loader end -->
    <main>
        <!-- section content begin -->
        <div class="uk-section uk-section-secondary uk-light uk-padding-remove-vertical">
            <div class="uk-container uk-container-expand"
                style="background-image: url({{ asset('front-end/img/darkbg.png') }}); background-repeat: no-repeat; background-size: cover;">
                <div class="uk-grid uk-flex uk-flex-center" data-uk-height-viewport="expand: true">
                    <div class="uk-width-1-2@l uk-flex uk-flex-middle">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-3-5@m">

                                @livewire('registration')

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
    <!-- javascript -->
    <script src="{{ asset('front-end/js/vendors/uikit.min.js') }}"></script>
    <script src="{{ asset('front-end/js/utilities.min.js') }}"></script>
    <script src="{{ asset('front-end/js/config-theme.js') }}"></script>

    <script type="text/javascript" src="{{ asset('back-end/bower_components/jquery/js/jquery.min.js') }}"></script>

    {{-- intl-tel plugin --}}
    <script src="{{ asset('front-end/build/js/intlTelInput.js') }}"></script>
    <script src="{{ asset('front-end/build/js/utils.js') }}"></script>

    @stack('scripts')

    @livewireScripts
    @laravelTelInputScripts


    <script async>
        var laravelTelInputConfig = {
            "allowDropdown": true,
            "autoHideDialCode": true,
            "autoPlaceholder": "aggressive",
            "customContainer": "",
            "customPlaceholder": null,
            "dropdownContainer": null,
            "excludeCountries": [],
            "formatOnDisplay": true,
            "geoIpLookup": "ipinfo",
            "initialCountry": "auto",
            "localizedCountries": [],
            "nationalMode": true,
            "onlyCountries": [],
            "placeholderNumberType": "MOBILE",
            "preferredCountries": ["CN", "NG", "US", "GB"],
            "separateDialCode": false,
            "utilsScript": "\/vendor\/intl-tel-input\/build\/js\/utils.js"
        };
        (() => {
            var e, t = {
                    166: () => {
                        ! function() {
                            "use strict";

                            function e(e, t) {
                                var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : null,
                                    o = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : null,
                                    i = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : null,
                                    a = "".concat(e, "=").concat(t, ";");
                                if (n) {
                                    var r = new Date;
                                    r.setTime(r.getTime() + 24 * n * 60 * 60 * 1e3), a += "expires=".concat(r
                                        .toUTCString(), ";")
                                }
                                o && (a += "path=".concat(o, ";")), i && (a += "domain=".concat(i, ";")), document
                                    .cookie = a
                            }

                            function t(e) {
                                for (var t = e + "=", n = document.cookie.split(";"), o = 0; o < n.length; o++) {
                                    for (var i = n[o];
                                        " " == i.charAt(0);) i = i.substring(1);
                                    if (0 == i.indexOf(t)) return i.substring(t.length, i.length)
                                }
                                return ""
                            }

                            function n(n) {
                                var o = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                                    i = "IntlTelInputSelectedCountry_".concat(n.dataset.phoneInputId);
                                window.intlTelInputGlobals.autoCountry = t(i) || window.intlTelInputGlobals
                                    .autoCountry;
                                var a = n.closest("form");
                                if (a && a.setAttribute("autocomplete", "off"), null == o.geoIpLookup) delete o
                                    .geoIpLookup;
                                else if ("ipinfo" === o.geoIpLookup) o.geoIpLookup = function(n, o) {
                                    var a = t(i);
                                    a ? n(a) : fetch("https://ipinfo.io/json").then((function(e) {
                                        return e.json()
                                    })).then((function(e) {
                                        return e
                                    })).then((function(t) {
                                        var o, a = null === (o = t.country) || void 0 === o ?
                                            void 0 : o.toUpperCase();
                                        n(a), e(i, a)
                                    })).catch((function(e) {
                                        return n("US")
                                    }))
                                };
                                else if ("function" == typeof window[o.geoIpLookup]) o.geoIpLookup = window[o
                                    .geoIpLookup];
                                else {
                                    if ("function" != typeof o.geoIpLookup) throw new TypeError(
                                        "Laravel-Tel-Input: Undefined function '".concat(o.geoIpLookup,
                                            "' specified in tel-input.options.geoIpLookup."));
                                    delete o.geoIpLookup
                                }
                                if (null == o.customPlaceholder) delete o.customPlaceholder;
                                else if ("function" == typeof window[o.customPlaceholder]) o.customPlaceholder =
                                    window[o.customPlaceholder];
                                else {
                                    if ("function" != typeof o.customPlaceholder) throw new TypeError(
                                        "Laravel-Tel-Input: Undefined function '".concat(o
                                            .customPlaceholder,
                                            "' specified in tel-input.options.customPlaceholder."));
                                    delete o.customPlaceholder
                                }
                                o.utilsScript && (o.utilsScript = "/" == o.utilsScript.charAt(0) ? o.utilsScript :
                                    "/" + o.utilsScript);
                                var r = window.intlTelInput(n, o),
                                    u = function() {
                                        var t = r.getSelectedCountryData();
                                        if (t.iso2) {
                                            var o;
                                            if (e(i, null === (o = t.iso2) || void 0 === o ? void 0 : o
                                                .toUpperCase()), this.dataset.phoneCountryInput && t.iso2) {
                                                var a = document.querySelector(this.dataset.phoneCountryInput);
                                                if (a) {
                                                    var u, l, d = null === (u = a.value) || void 0 === u ? void 0 :
                                                        u.trim();
                                                    a.value = null === (l = t.iso2) || void 0 === l ? void 0 : l
                                                        .toUpperCase(), a.value === d && "" == a.value || a
                                                        .dispatchEvent(new KeyboardEvent("change"))
                                                }
                                            }
                                            if (this.dataset.phoneDialCodeInput && t.dialCode) {
                                                var c = document.querySelector(this.dataset.phoneDialCodeInput);
                                                if (c) {
                                                    var v = c.value;
                                                    c.value = t.dialCode, c.value === v && "" == c.value || c
                                                        .dispatchEvent(new KeyboardEvent("change"))
                                                }
                                            }
                                            n.dispatchEvent(new KeyboardEvent("change"))
                                        }
                                    },
                                    l = function() {
                                        if (this.dataset.phoneInput) {
                                            var e = document.querySelector(this.dataset.phoneInput);
                                            if (e) {
                                                var t, n, o, i, a = null === (t = e.value) || void 0 === t ?
                                                    void 0 : t.trim();
                                                if ("" != a && "+" != a.charAt(0) && "0" != a.charAt(0) && null ===
                                                    r.isValidNumber() && (a = "+".concat(a), e.value = a), "" != (
                                                        null === (n = r.getNumber()) || void 0 === n ? void 0 : n
                                                        .trim()) ? r.isValidNumber() ? e.value = r.getNumber() : e
                                                    .value = "" : "" != a && null === r.isValidNumber() && (r
                                                        .setNumber(a), e.value = r.getNumber()), e.value === a ||
                                                    "" == e.value || !0 !== r.isValidNumber() && null !== r
                                                    .isValidNumber()) {
                                                    if (!1 === r.isValidNumber()) e.dispatchEvent(new KeyboardEvent(
                                                        "change")), e.dispatchEvent(new CustomEvent(
                                                    "telchange", {
                                                        detail: {
                                                            valid: !1,
                                                            validNumber: e.value,
                                                            number: r.getNumber(),
                                                            country: null === (o = r
                                                                    .getSelectedCountryData().iso2) ||
                                                                void 0 === o ? void 0 : o.toUpperCase(),
                                                            countryName: r.getSelectedCountryData()
                                                                .name,
                                                            dialCode: r.getSelectedCountryData()
                                                                .dialCode
                                                        }
                                                    }))
                                                } else e.dispatchEvent(new KeyboardEvent("change")), e
                                                    .dispatchEvent(new CustomEvent("telchange", {
                                                        detail: {
                                                            valid: !0,
                                                            validNumber: e.value,
                                                            number: r.getNumber(),
                                                            country: null === (i = r
                                                                .getSelectedCountryData().iso2) ||
                                                                void 0 === i ? void 0 : i.toUpperCase(),
                                                            countryName: r.getSelectedCountryData().name,
                                                            dialCode: r.getSelectedCountryData().dialCode
                                                        }
                                                    }))
                                            }
                                        }
                                    };
                                if (n.addEventListener("countrychange", u), n.addEventListener("change", l), n
                                    .dataset.phoneInput) {
                                    var d = document.querySelector(n.dataset.phoneInput);
                                    if (d) {
                                        var c, v = null === (c = d.value) || void 0 === c ? void 0 : c.trim();
                                        "" != v && "+" != v.charAt(0) && "0" != v.charAt(0) && (v = "+".concat(v)),
                                            d.addEventListener("change", (function() {
                                                var e, t = null === (e = this.value) || void 0 === e ?
                                                    void 0 : e.trim();
                                                t != v && "" != t && r.setNumber(t)
                                            }))
                                    }
                                }
                                if (n.dataset.phoneCountryInput) {
                                    var p = document.querySelector(n.dataset.phoneCountryInput);
                                    p && p.addEventListener("change", (function() {
                                        var e;
                                        r.setCountry(null === (e = this.value) || void 0 === e ?
                                            void 0 : e.trim())
                                    }))
                                }
                                n.dispatchEvent(new KeyboardEvent("countrychange")), document.addEventListener(
                                    "turbolinks:load", (function() {
                                        n && n.dispatchEvent(new KeyboardEvent("countrychange"))
                                    })), document.addEventListener("turbo:load", (function() {
                                    n && n.dispatchEvent(new KeyboardEvent("countrychange"))
                                }))
                            }

                            function o() {
                                if ("function" != typeof window.intlTelInput) throw new TypeError(
                                    "Laravel-Tel-Input: requires International Telephone Input (https://github.com/jackocnr/intl-tel-input). Please install with NPM or include the CDN."
                                    );
                                var e = laravelTelInputConfig,
                                    t = document.querySelectorAll(".iti--laravel-tel-input");
                                if (t.length > 0)
                                    for (var o = 0; o < t.length; o++) n(t[o], e)
                            }
                            document.addEventListener("DOMContentLoaded", (function() {
                                o(), document.addEventListener("telDOMChanged", (function() {
                                    o()
                                })), window.Livewire && window.Livewire.hook(
                                    "component.initialized", (function(e) {
                                        o()
                                    }))
                            }))
                        }()
                    },
                    76: () => {}
                },
                n = {};

            function o(e) {
                var i = n[e];
                if (void 0 !== i) return i.exports;
                var a = n[e] = {
                    exports: {}
                };
                return t[e](a, a.exports, o), a.exports
            }
            o.m = t, e = [], o.O = (t, n, i, a) => {
                if (!n) {
                    var r = 1 / 0;
                    for (c = 0; c < e.length; c++) {
                        for (var [n, i, a] = e[c], u = !0, l = 0; l < n.length; l++)(!1 & a || r >= a) && Object
                            .keys(o.O).every((e => o.O[e](n[l]))) ? n.splice(l--, 1) : (u = !1, a < r && (r = a));
                        if (u) {
                            e.splice(c--, 1);
                            var d = i();
                            void 0 !== d && (t = d)
                        }
                    }
                    return t
                }
                a = a || 0;
                for (var c = e.length; c > 0 && e[c - 1][2] > a; c--) e[c] = e[c - 1];
                e[c] = [n, i, a]
            }, o.o = (e, t) => Object.prototype.hasOwnProperty.call(e, t), (() => {
                var e = {
                    237: 0,
                    960: 0
                };
                o.O.j = t => 0 === e[t];
                var t = (t, n) => {
                        var i, a, [r, u, l] = n,
                            d = 0;
                        for (i in u) o.o(u, i) && (o.m[i] = u[i]);
                        if (l) var c = l(o);
                        for (t && t(n); d < r.length; d++) a = r[d], o.o(e, a) && e[a] && e[a][0](), e[r[d]] =
                        0;
                        return o.O(c)
                    },
                    n = self.webpackChunk = self.webpackChunk || [];
                n.forEach(t.bind(null, 0)), n.push = t.bind(null, n.push.bind(n))
            })(), o.O(void 0, [960], (() => o(166)));
            var i = o.O(void 0, [960], (() => o(76)));
            i = o.O(i)
        })();
    </script>

    <script>
        $('.iti--allow-dropdown').change(function(e) {
            console.log('asdbj');;

        });

        $('.iti__selected-flag').html();
    </script>
</body>

</html>
