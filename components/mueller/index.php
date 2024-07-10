<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dental</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <!-- <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css"> -->
<style>
    /* ===================================================================
 * Mueller Third-party Stylesheets
 * Template Ver. 1.0.0
 * 06-21-2022
 * -------------------------------------------------------------------
 *
 * TOC:
 * 
 * # PrismJS
 * # Swiper
 * # Basiclightbox
 *
 * ------------------------------------------------------------------- */

/* ===================================================================
 * # PrismJS 1.20.0
 *   https://prismjs.com/download.html#themes=prism-okaidia&languages=markup+css+clike+javascript+markup-templating+php 
 *   
 *   okaidia theme for JavaScript, CSS and HTML
 *   Loosely based on Monokai textmate theme by http://www.monokai.nl/
 *   @author ocodia
 * ------------------------------------------------------------------- */
code[class*="language-"],
pre[class*="language-"] {
    color           : #f8f8f2;
    background      : none;
    text-shadow     : 0 1px rgba(0, 0, 0, 0.3);
    font-family     : var(--font-mono);
    font-size       : calc(var(--text-size) * 0.9444);
    text-align      : left;
    white-space     : pre;
    word-spacing    : normal;
    word-break      : normal;
    word-wrap       : normal;
    line-height     : var(--vspace-1);
    -moz-tab-size   : 4;
    -o-tab-size     : 4;
    tab-size        : 4;
    -webkit-hyphens : none;
    -moz-hyphens    : none;
    -ms-hyphens     : none;
    hyphens         : none;
}

/* Code blocks */
pre[class*="language-"] {
    padding  : var(--vspace-0_5) 0 var(--vspace-1);
    margin   : var(--vspace-1) 0;
    overflow : auto;
}

:not(pre)>code[class*="language-"],
pre[class*="language-"] {
    background : #272822;
}

/* Inline code */
:not(pre)>code[class*="language-"] {
    padding     : .1em;
    white-space : normal;
}

.token.comment,
.token.prolog,
.token.doctype,
.token.cdata {
    color : slategray;
}

.token.punctuation {
    color : #f8f8f2;
}

.token.namespace {
    opacity : .7;
}

.token.property,
.token.tag,
.token.constant,
.token.symbol,
.token.deleted {
    color : #f92672;
}

.token.boolean,
.token.number {
    color : #ae81ff;
}

.token.selector,
.token.attr-name,
.token.string,
.token.char,
.token.builtin,
.token.inserted {
    color : #a6e22e;
}

.token.operator,
.token.entity,
.token.url,
.language-css .token.string,
.style .token.string,
.token.variable {
    color : #f8f8f2;
}

.token.atrule,
.token.attr-value,
.token.function,
.token.class-name {
    color : #e6db74;
}

.token.keyword {
    color : #66d9ef;
}

.token.regex,
.token.important {
    color : #fd971f;
}

.token.important,
.token.bold {
    font-weight : bold;
}

.token.italic {
    font-style : italic;
}

.token.entity {
    cursor : help;
}


/* ===================================================================
 * # Swiper 6.4.5
 *   Most modern mobile touch slider and framework with hardware accelerated transitions
 *   https://swiperjs.com
 *
 *   Copyright 2014-2020 Vladimir Kharlampidi
 *
 *   Released under the MIT License
 *
 *   Released on: December 18, 2020
 * ------------------------------------------------------------------- */
@font-face {
    font-family : "swiper-icons";
    src         : url("data:application/font-woff;charset=utf-8;base64, d09GRgABAAAAAAZgABAAAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAAGRAAAABoAAAAci6qHkUdERUYAAAWgAAAAIwAAACQAYABXR1BPUwAABhQAAAAuAAAANuAY7+xHU1VCAAAFxAAAAFAAAABm2fPczU9TLzIAAAHcAAAASgAAAGBP9V5RY21hcAAAAkQAAACIAAABYt6F0cBjdnQgAAACzAAAAAQAAAAEABEBRGdhc3AAAAWYAAAACAAAAAj//wADZ2x5ZgAAAywAAADMAAAD2MHtryVoZWFkAAABbAAAADAAAAA2E2+eoWhoZWEAAAGcAAAAHwAAACQC9gDzaG10eAAAAigAAAAZAAAArgJkABFsb2NhAAAC0AAAAFoAAABaFQAUGG1heHAAAAG8AAAAHwAAACAAcABAbmFtZQAAA/gAAAE5AAACXvFdBwlwb3N0AAAFNAAAAGIAAACE5s74hXjaY2BkYGAAYpf5Hu/j+W2+MnAzMYDAzaX6QjD6/4//Bxj5GA8AuRwMYGkAPywL13jaY2BkYGA88P8Agx4j+/8fQDYfA1AEBWgDAIB2BOoAeNpjYGRgYNBh4GdgYgABEMnIABJzYNADCQAACWgAsQB42mNgYfzCOIGBlYGB0YcxjYGBwR1Kf2WQZGhhYGBiYGVmgAFGBiQQkOaawtDAoMBQxXjg/wEGPcYDDA4wNUA2CCgwsAAAO4EL6gAAeNpj2M0gyAACqxgGNWBkZ2D4/wMA+xkDdgAAAHjaY2BgYGaAYBkGRgYQiAHyGMF8FgYHIM3DwMHABGQrMOgyWDLEM1T9/w8UBfEMgLzE////P/5//f/V/xv+r4eaAAeMbAxwIUYmIMHEgKYAYjUcsDAwsLKxc3BycfPw8jEQA/gZBASFhEVExcQlJKWkZWTl5BUUlZRVVNXUNTQZBgMAAMR+E+gAEQFEAAAAKgAqACoANAA+AEgAUgBcAGYAcAB6AIQAjgCYAKIArAC2AMAAygDUAN4A6ADyAPwBBgEQARoBJAEuATgBQgFMAVYBYAFqAXQBfgGIAZIBnAGmAbIBzgHsAAB42u2NMQ6CUAyGW568x9AneYYgm4MJbhKFaExIOAVX8ApewSt4Bic4AfeAid3VOBixDxfPYEza5O+Xfi04YADggiUIULCuEJK8VhO4bSvpdnktHI5QCYtdi2sl8ZnXaHlqUrNKzdKcT8cjlq+rwZSvIVczNiezsfnP/uznmfPFBNODM2K7MTQ45YEAZqGP81AmGGcF3iPqOop0r1SPTaTbVkfUe4HXj97wYE+yNwWYxwWu4v1ugWHgo3S1XdZEVqWM7ET0cfnLGxWfkgR42o2PvWrDMBSFj/IHLaF0zKjRgdiVMwScNRAoWUoH78Y2icB/yIY09An6AH2Bdu/UB+yxopYshQiEvnvu0dURgDt8QeC8PDw7Fpji3fEA4z/PEJ6YOB5hKh4dj3EvXhxPqH/SKUY3rJ7srZ4FZnh1PMAtPhwP6fl2PMJMPDgeQ4rY8YT6Gzao0eAEA409DuggmTnFnOcSCiEiLMgxCiTI6Cq5DZUd3Qmp10vO0LaLTd2cjN4fOumlc7lUYbSQcZFkutRG7g6JKZKy0RmdLY680CDnEJ+UMkpFFe1RN7nxdVpXrC4aTtnaurOnYercZg2YVmLN/d/gczfEimrE/fs/bOuq29Zmn8tloORaXgZgGa78yO9/cnXm2BpaGvq25Dv9S4E9+5SIc9PqupJKhYFSSl47+Qcr1mYNAAAAeNptw0cKwkAAAMDZJA8Q7OUJvkLsPfZ6zFVERPy8qHh2YER+3i/BP83vIBLLySsoKimrqKqpa2hp6+jq6RsYGhmbmJqZSy0sraxtbO3sHRydnEMU4uR6yx7JJXveP7WrDycAAAAAAAH//wACeNpjYGRgYOABYhkgZgJCZgZNBkYGLQZtIJsFLMYAAAw3ALgAeNolizEKgDAQBCchRbC2sFER0YD6qVQiBCv/H9ezGI6Z5XBAw8CBK/m5iQQVauVbXLnOrMZv2oLdKFa8Pjuru2hJzGabmOSLzNMzvutpB3N42mNgZGBg4GKQYzBhYMxJLMlj4GBgAYow/P/PAJJhLM6sSoWKfWCAAwDAjgbRAAB42mNgYGBkAIIbCZo5IPrmUn0hGA0AO8EFTQAA") format("woff");
    font-weight : 400;
    font-style  : normal;
}

:root {
    --swiper-theme-color : #007aff;
}

.swiper-container {
    margin-left  : auto;
    margin-right : auto;
    position     : relative;
    overflow     : hidden;
    list-style   : none;
    padding      : 0;
    /* Fix of Webkit flickering */
    z-index      : 1;
}

.swiper-container-vertical>.swiper-wrapper {
    flex-direction : column;
}

.swiper-wrapper {
    position            : relative;
    width               : 100%;
    height              : 100%;
    z-index             : 1;
    display             : flex;
    transition-property : transform;
    box-sizing          : content-box;
}

.swiper-container-android .swiper-slide,
.swiper-wrapper {
    transform : translate3d(0px, 0, 0);
}

.swiper-container-multirow>.swiper-wrapper {
    flex-wrap : wrap;
}

.swiper-container-multirow-column>.swiper-wrapper {
    flex-wrap      : wrap;
    flex-direction : column;
}

.swiper-container-free-mode>.swiper-wrapper {
    transition-timing-function : ease-out;
    margin                     : 0 auto;
}

.swiper-slide {
    flex-shrink         : 0;
    width               : 100%;
    height              : 100%;
    position            : relative;
    transition-property : transform;
}

.swiper-slide-invisible-blank {
    visibility : hidden;
}

/* Auto Height */
.swiper-container-autoheight,
.swiper-container-autoheight .swiper-slide {
    height : auto;
}

.swiper-container-autoheight .swiper-wrapper {
    align-items         : flex-start;
    transition-property : transform, height;
}

/* 3D Effects */
.swiper-container-3d {
    perspective : 1200px;
}

.swiper-container-3d .swiper-wrapper,
.swiper-container-3d .swiper-slide,
.swiper-container-3d .swiper-slide-shadow-left,
.swiper-container-3d .swiper-slide-shadow-right,
.swiper-container-3d .swiper-slide-shadow-top,
.swiper-container-3d .swiper-slide-shadow-bottom,
.swiper-container-3d .swiper-cube-shadow {
    transform-style : preserve-3d;
}

.swiper-container-3d .swiper-slide-shadow-left,
.swiper-container-3d .swiper-slide-shadow-right,
.swiper-container-3d .swiper-slide-shadow-top,
.swiper-container-3d .swiper-slide-shadow-bottom {
    position       : absolute;
    left           : 0;
    top            : 0;
    width          : 100%;
    height         : 100%;
    pointer-events : none;
    z-index        : 10;
}

.swiper-container-3d .swiper-slide-shadow-left {
    background-image : linear-gradient(to left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
}

.swiper-container-3d .swiper-slide-shadow-right {
    background-image : linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
}

.swiper-container-3d .swiper-slide-shadow-top {
    background-image : linear-gradient(to top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
}

.swiper-container-3d .swiper-slide-shadow-bottom {
    background-image : linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
}

/* CSS Mode */
.swiper-container-css-mode>.swiper-wrapper {
    overflow           : auto;
    scrollbar-width    : none;
    /* For Firefox */
    -ms-overflow-style : none;
    /* For Internet Explorer and Edge */
}

.swiper-container-css-mode>.swiper-wrapper::-webkit-scrollbar {
    display : none;
}

.swiper-container-css-mode>.swiper-wrapper>.swiper-slide {
    scroll-snap-align : start start;
}

.swiper-container-horizontal.swiper-container-css-mode>.swiper-wrapper {
    scroll-snap-type : x mandatory;
}

.swiper-container-vertical.swiper-container-css-mode>.swiper-wrapper {
    scroll-snap-type : y mandatory;
}

:root {
    --swiper-navigation-size  : 44px;
    /*
    --swiper-navigation-color : var(--swiper-theme-color);
    */
}

.swiper-button-prev,
.swiper-button-next {
    position        : absolute;
    top             : 50%;
    width           : calc(var(--swiper-navigation-size) / 44 * 27);
    height          : var(--swiper-navigation-size);
    margin-top      : calc(-1 * var(--swiper-navigation-size) / 2);
    z-index         : 10;
    cursor          : pointer;
    display         : flex;
    align-items     : center;
    justify-content : center;
    color           : var(--swiper-navigation-color, var(--swiper-theme-color));
}

.swiper-button-prev.swiper-button-disabled,
.swiper-button-next.swiper-button-disabled {
    opacity        : 0.35;
    cursor         : auto;
    pointer-events : none;
}

.swiper-button-prev:after,
.swiper-button-next:after {
    font-family    : swiper-icons;
    font-size      : var(--swiper-navigation-size);
    text-transform : none !important;
    letter-spacing : 0;
    text-transform : none;
    font-variant   : initial;
    line-height    : 1;
}

.swiper-button-prev,
.swiper-container-rtl .swiper-button-next {
    left  : 10px;
    right : auto;
}

.swiper-button-prev:after,
.swiper-container-rtl .swiper-button-next:after {
    content : "prev";
}

.swiper-button-next,
.swiper-container-rtl .swiper-button-prev {
    right : 10px;
    left  : auto;
}

.swiper-button-next:after,
.swiper-container-rtl .swiper-button-prev:after {
    content : "next";
}

.swiper-button-prev.swiper-button-white,
.swiper-button-next.swiper-button-white {
    --swiper-navigation-color : #ffffff;
}

.swiper-button-prev.swiper-button-black,
.swiper-button-next.swiper-button-black {
    --swiper-navigation-color : #000000;
}

.swiper-button-lock {
    display : none;
}

:root {
    /*
    --swiper-pagination-color: var(--swiper-theme-color);
    */
}

.swiper-pagination {
    position   : absolute;
    text-align : center;
    transition : 300ms opacity;
    transform  : translate3d(0, 0, 0);
    z-index    : 10;
}

.swiper-pagination.swiper-pagination-hidden {
    opacity : 0;
}

/* Common Styles */
.swiper-pagination-fraction,
.swiper-pagination-custom,
.swiper-container-horizontal>.swiper-pagination-bullets {
    bottom : 10px;
    left   : 0;
    width  : 100%;
}

/* Bullets */
.swiper-pagination-bullets-dynamic {
    overflow  : hidden;
    font-size : 0;
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
    transform : scale(0.33);
    position  : relative;
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active {
    transform : scale(1);
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
    transform : scale(1);
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev {
    transform : scale(0.66);
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev {
    transform : scale(0.33);
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next {
    transform : scale(0.66);
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next {
    transform : scale(0.33);
}

.swiper-pagination-bullet {
    width         : 8px;
    height        : 8px;
    display       : inline-block;
    border-radius : 100%;
    background    : #000;
    opacity       : 0.2;
}

button.swiper-pagination-bullet {
    border             : none;
    margin             : 0;
    padding            : 0;
    box-shadow         : none;
    -webkit-appearance : none;
    -moz-appearance    : none;
    appearance         : none;
}

.swiper-pagination-clickable .swiper-pagination-bullet {
    cursor : pointer;
}

.swiper-pagination-bullet-active {
    opacity    : 1;
    background : var(--swiper-pagination-color, var(--swiper-theme-color));
}

.swiper-container-vertical>.swiper-pagination-bullets {
    right     : 10px;
    top       : 50%;
    transform : translate3d(0px, -50%, 0);
}

.swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
    margin  : 6px 0;
    display : block;
}

.swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
    top       : 50%;
    transform : translateY(-50%);
    width     : 8px;
}

.swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
    display    : inline-block;
    transition : 200ms transform, 200ms top;
}

.swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
    margin : 0 4px;
}

.swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
    left        : 50%;
    transform   : translateX(-50%);
    white-space : nowrap;
}

.swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
    transition : 200ms transform, 200ms left;
}

.swiper-container-horizontal.swiper-container-rtl>.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
    transition : 200ms transform, 200ms right;
}

/* Progress */
.swiper-pagination-progressbar {
    background : rgba(0, 0, 0, 0.25);
    position   : absolute;
}

.swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
    background       : var(--swiper-pagination-color, var(--swiper-theme-color));
    position         : absolute;
    left             : 0;
    top              : 0;
    width            : 100%;
    height           : 100%;
    transform        : scale(0);
    transform-origin : left top;
}

.swiper-container-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
    transform-origin : right top;
}

.swiper-container-horizontal>.swiper-pagination-progressbar,
.swiper-container-vertical>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
    width  : 100%;
    height : 4px;
    left   : 0;
    top    : 0;
}

.swiper-container-vertical>.swiper-pagination-progressbar,
.swiper-container-horizontal>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
    width  : 4px;
    height : 100%;
    left   : 0;
    top    : 0;
}

.swiper-pagination-white {
    --swiper-pagination-color : #ffffff;
}

.swiper-pagination-black {
    --swiper-pagination-color : #000000;
}

.swiper-pagination-lock {
    display : none;
}

/* Scrollbar */
.swiper-scrollbar {
    border-radius    : 10px;
    position         : relative;
    -ms-touch-action : none;
    background       : rgba(0, 0, 0, 0.1);
}

.swiper-container-horizontal>.swiper-scrollbar {
    position : absolute;
    left     : 1%;
    bottom   : 3px;
    z-index  : 50;
    height   : 5px;
    width    : 98%;
}

.swiper-container-vertical>.swiper-scrollbar {
    position : absolute;
    right    : 3px;
    top      : 1%;
    z-index  : 50;
    width    : 5px;
    height   : 98%;
}

.swiper-scrollbar-drag {
    height        : 100%;
    width         : 100%;
    position      : relative;
    background    : rgba(0, 0, 0, 0.5);
    border-radius : 10px;
    left          : 0;
    top           : 0;
}

.swiper-scrollbar-cursor-drag {
    cursor : move;
}

.swiper-scrollbar-lock {
    display : none;
}

.swiper-zoom-container {
    width           : 100%;
    height          : 100%;
    display         : flex;
    justify-content : center;
    align-items     : center;
    text-align      : center;
}

.swiper-zoom-container>img,
.swiper-zoom-container>svg,
.swiper-zoom-container>canvas {
    max-width  : 100%;
    max-height : 100%;
    object-fit : contain;
}

.swiper-slide-zoomed {
    cursor : move;
}

/* Preloader */
:root {
    /*
    --swiper-preloader-color: var(--swiper-theme-color);
    */
}

.swiper-lazy-preloader {
    width            : 42px;
    height           : 42px;
    position         : absolute;
    left             : 50%;
    top              : 50%;
    margin-left      : -21px;
    margin-top       : -21px;
    z-index          : 10;
    transform-origin : 50%;
    animation        : swiper-preloader-spin 1s infinite linear;
    box-sizing       : border-box;
    border           : 4px solid var(--swiper-preloader-color, var(--swiper-theme-color));
    border-radius    : 50%;
    border-top-color : transparent;
}

.swiper-lazy-preloader-white {
    --swiper-preloader-color : #fff;
}

.swiper-lazy-preloader-black {
    --swiper-preloader-color : #000;
}

@keyframes swiper-preloader-spin {
    100% {
        transform : rotate(360deg);
    }
}

/* a11y */
.swiper-container .swiper-notification {
    position       : absolute;
    left           : 0;
    top            : 0;
    pointer-events : none;
    opacity        : 0;
    z-index        : -1000;
}

.swiper-container-fade.swiper-container-free-mode .swiper-slide {
    transition-timing-function : ease-out;
}

.swiper-container-fade .swiper-slide {
    pointer-events      : none;
    transition-property : opacity;
}

.swiper-container-fade .swiper-slide .swiper-slide {
    pointer-events : none;
}

.swiper-container-fade .swiper-slide-active,
.swiper-container-fade .swiper-slide-active .swiper-slide-active {
    pointer-events : auto;
}

.swiper-container-cube {
    overflow : visible;
}

.swiper-container-cube .swiper-slide {
    pointer-events              : none;
    -webkit-backface-visibility : hidden;
    backface-visibility         : hidden;
    z-index                     : 1;
    visibility                  : hidden;
    transform-origin            : 0 0;
    width                       : 100%;
    height                      : 100%;
}

.swiper-container-cube .swiper-slide .swiper-slide {
    pointer-events : none;
}

.swiper-container-cube.swiper-container-rtl .swiper-slide {
    transform-origin : 100% 0;
}

.swiper-container-cube .swiper-slide-active,
.swiper-container-cube .swiper-slide-active .swiper-slide-active {
    pointer-events : auto;
}

.swiper-container-cube .swiper-slide-active,
.swiper-container-cube .swiper-slide-next,
.swiper-container-cube .swiper-slide-prev,
.swiper-container-cube .swiper-slide-next+.swiper-slide {
    pointer-events : auto;
    visibility     : visible;
}

.swiper-container-cube .swiper-slide-shadow-top,
.swiper-container-cube .swiper-slide-shadow-bottom,
.swiper-container-cube .swiper-slide-shadow-left,
.swiper-container-cube .swiper-slide-shadow-right {
    z-index                     : 0;
    -webkit-backface-visibility : hidden;
    backface-visibility         : hidden;
}

.swiper-container-cube .swiper-cube-shadow {
    position       : absolute;
    left           : 0;
    bottom         : 0px;
    width          : 100%;
    height         : 100%;
    background     : #000;
    opacity        : 0.6;
    -webkit-filter : blur(50px);
    filter         : blur(50px);
    z-index        : 0;
}

.swiper-container-flip {
    overflow : visible;
}

.swiper-container-flip .swiper-slide {
    pointer-events              : none;
    -webkit-backface-visibility : hidden;
    backface-visibility         : hidden;
    z-index                     : 1;
}

.swiper-container-flip .swiper-slide .swiper-slide {
    pointer-events : none;
}

.swiper-container-flip .swiper-slide-active,
.swiper-container-flip .swiper-slide-active .swiper-slide-active {
    pointer-events : auto;
}

.swiper-container-flip .swiper-slide-shadow-top,
.swiper-container-flip .swiper-slide-shadow-bottom,
.swiper-container-flip .swiper-slide-shadow-left,
.swiper-container-flip .swiper-slide-shadow-right {
    z-index                     : 0;
    -webkit-backface-visibility : hidden;
    backface-visibility         : hidden;
}


/* ===================================================================
 * # Basiclightbox
 *
 *
 * ------------------------------------------------------------------- */
.basicLightbox {
    position        : fixed;
    display         : flex;
    justify-content : center;
    align-items     : center;
    top             : 0;
    left            : 0;
    width           : 100%;
    height          : 100vh;
    background      : var(--color-gray-19);
    opacity         : 0.01;
    transition      : opacity 0.4s ease;
    z-index         : 1000;
    will-change     : opacity;
}

.basicLightbox::after {
    content             : "";
    position            : absolute;
    top                 : 1.6rem;
    right               : 1.8rem;
    width               : 2em;
    height              : 2em;
    /* background          : url(../images/icons/icon-close-2.svg); */
    background          : url(images/icons/icon-close-2.svg);
    background-position : center;
    background-size     : 1.6rem 1.6rem;
    background-repeat   : no-repeat;
    cursor              : pointer;
}

.basicLightbox--visible {
    opacity : 1;
}

.basicLightbox__placeholder {
    max-width   : 100%;
    transform   : scale(0.9);
    transition  : all 0.4s ease;
    z-index     : 1;
    will-change : transform;
    opacity     : 0;
}

.basicLightbox__placeholder>iframe:first-child:last-child,
.basicLightbox__placeholder>img:first-child:last-child,
.basicLightbox__placeholder>video:first-child:last-child {
    display    : block;
    position   : absolute;
    top        : 0;
    right      : 0;
    bottom     : 0;
    left       : 0;
    margin     : auto;
    max-width  : 95%;
    max-height : 95%;
}

.basicLightbox__placeholder>iframe:first-child:last-child,
.basicLightbox__placeholder>video:first-child:last-child {
    pointer-events : auto;
}

.basicLightbox__placeholder>img:first-child:last-child,
.basicLightbox__placeholder>video:first-child:last-child {
    width  : auto;
    height : auto;
}

.basicLightbox--iframe .basicLightbox__placeholder,
.basicLightbox--img .basicLightbox__placeholder,
.basicLightbox--video .basicLightbox__placeholder {
    width          : 100%;
    height         : 100%;
    pointer-events : none;
}

.basicLightbox--visible .basicLightbox__placeholder {
    transform : scale(1);
    opacity   : 1;
}
    @charset "UTF-8";
/* =================================================================== 
 * Mueller Main Stylesheet
 * Template Ver. 1.0.0
 * 06-21-2022
 * ------------------------------------------------------------------
 *
 * TOC:
 *
 * # SETTINGS
 *      ## fonts 
 *      ## colors
 *      ## spacing and typescale
 *      ## grid variables
 * # NORMALIZE
 * # BASE SETUP
 * # GRID
 *      ## large screen devices
 *      ## medium screen devices 
 *      ## tablet devices 
 *      ## mobile devices 
 *      ## small screen devices
 *      ## additional column stackpoints
 * # UTILITY CLASSES
 * # TYPOGRAPHY
 *      ## base type styles
 *      ## additional typography & helper classes
 *      ## lists
 *      ## spacing
 * # PRELOADER
 *      ## page loaded
 * # FORM
 *      ## style placeholder text
 *      ## change autocomplete styles in Chrome
 * # BUTTONS
 * # TABLE
 * # COMPONENTS
 *      ## pagination
 *      ## alert box 
 *      ## skillbars
 *      ## stats tabs
 * # PROJECT-WIDE SHARED STYLES
 *      ## theme-specific typography classes
 *      ## media classes
 *      ## section header
 *      ## list block
 *      ## swiper overrides
 * # PAGE WRAP
 * # SITE HEADER
 *      ## logo
 *      ## main navigation
 *      ## header social
 *      ## mobile menu toggle
 * # INTRO
 *      ## intro background
 *      ## intro content
 *      ## intro scroll down
 *      ## intro transitions
 * # ABOUT
 * # SERVICES
 * # PORTFOLIO
 *      ## bricks masonry 
 *      ## masonry entries 
 *      ## modal popup
 * # CLIENTS
 * # TESTIMONIALS
 *      ## testimonial slider 
 * # FOOTER
 *      ## contact btn
 *      ## subscription form
 *      ## footer social
 *      ## copyright
 *      ## go top
 *
 * ------------------------------------------------------------------ */


/* ===================================================================
 * # SETTINGS
 *
 *
 * ------------------------------------------------------------------- */

/* ------------------------------------------------------------------- 
 * ## fonts 
 * ------------------------------------------------------------------- */
@import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Manrope:wght@500;600;700&display=swap");

:root {
    --font-1    : "Inter", sans-serif;
    --font-2    : "Manrope", sans-serif;

    /* monospace
     */
    --font-mono : Consolas, "Andale Mono", Courier, "Courier New", monospace;
}

/* ------------------------------------------------------------------- 
 * ## colors
 * ------------------------------------------------------------------- */
:root {

    /* color-1(#f26522)
     * color-2(#035d5c)
     */
    --color-1                      : hsla(19, 89%, 54%, 1);
    --color-2                      : hsla(179, 94%, 19%, 1);

    /* theme color variations
     */
    --color-1-lightest             : hsla(19, 89%, 84%, 1);
    --color-1-lighter              : hsla(19, 89%, 74%, 1);
    --color-1-light                : hsla(19, 89%, 64%, 1);
    --color-1-dark                 : hsla(19, 89%, 44%, 1);
    --color-1-darker               : hsla(19, 89%, 34%, 1);
    --color-1-darkest              : hsla(19, 89%, 24%, 1);
    --color-2-lightest             : hsla(179, 94%, 49%, 1);
    --color-2-lighter              : hsla(179, 94%, 39%, 1);
    --color-2-light                : hsla(179, 94%, 29%, 1);
    --color-2-dark                 : hsla(179, 94%, 9%, 1);
    --color-2-darker               : hsla(179, 94%, 1%, 1);

    /* feedback colors
     * color-error(#ffd1d2), color-success(#c8e675), 
     * color-info(#d7ecfb), color-notice(#fff099)
     */
    --color-error                  : hsla(359, 100%, 91%, 1);
    --color-success                : hsla(76, 69%, 68%, 1);
    --color-info                   : hsla(205, 82%, 91%, 1);
    --color-notice                 : hsla(51, 100%, 80%, 1);
    --color-error-content          : hsla(359, 50%, 50%, 1);
    --color-success-content        : hsla(76, 29%, 28%, 1);
    --color-info-content           : hsla(205, 32%, 31%, 1);
    --color-notice-content         : hsla(51, 30%, 30%, 1);

    /* shades 
     * generated using 
     * Tint & Shade Generator 
     * (https://maketintsandshades.com/)
     */
    --color-black                  : #000000;
    --color-gray-19                : #161616;
    --color-gray-18                : #2c2c2c;
    --color-gray-17                : #424241;
    --color-gray-16                : #585857;
    --color-gray-15                : #6e6e6d;
    --color-gray-14                : #848383;
    --color-gray-13                : #9a9999;
    --color-gray-12                : #b0afae;
    --color-gray-11                : #c6c5c4;
    --color-gray-10                : #dcdbda;
    --color-gray-9                 : #e0dfde;
    --color-gray-8                 : #e3e2e1;
    --color-gray-7                 : #e7e6e5;
    --color-gray-6                 : #eae9e9;
    --color-gray-5                 : #eeeded;
    --color-gray-4                 : #f1f1f0;
    --color-gray-3                 : #f5f4f4;
    --color-gray-2                 : #f8f8f8;
    --color-gray-1                 : #fcfbfb;
    --color-white                  : #ffffff;

    /* text
     */
    --color-text                   : var(--color-gray-19);
    --color-text-dark              : var(--color-black);
    --color-text-light             : var(--color-gray-14);
    --color-placeholder            : var(--color-gray-14);

    /* buttons
     */
    --color-btn                    : var(--color-gray-6);
    --color-btn-text               : var(--color-black);
    --color-btn-hover              : var(--color-gray-8);
    --color-btn-hover-text         : var(--color-gray-19);
    --color-btn-primary            : var(--color-1);
    --color-btn-primary-text       : var(--color-white);
    --color-btn-primary-hover      : var(--color-gray-19);
    --color-btn-primary-hover-text : var(--color-white);
    --color-btn-stroke             : var(--color-gray-19);
    --color-btn-stroke-text        : var(--color-gray-19);
    --color-btn-stroke-hover       : var(--color-gray-19);
    --color-btn-stroke-hover-text  : var(--color-white);

    /* preloader
     */
    --color-preloader-bg           : var(--color-gray-19);
    --color-loader                 : white;
    --color-loader-light           : rgba(255, 255, 255, 0.1);

    /* others
     */
    --color-body                   : white;
    --color-border                 : rgba(0, 0, 0, .08);
    --border-radius                : 3px;
}

/* ------------------------------------------------------------------- 
 * ## spacing and typescale
 * ------------------------------------------------------------------- */
:root {

    /* spacing
     * base font size: 18px 
     * vertical space unit : 32px
     */
    --base-size        : 62.5%;
    --multiplier       : 1;
    --base-font-size   : calc(1.8rem * var(--multiplier));
    --space            : calc(3.2rem * var(--multiplier));

    /* vertical spacing 
     */
    --vspace-0_125     : calc(0.125 * var(--space));
    --vspace-0_25      : calc(0.25 * var(--space));
    --vspace-0_375     : calc(0.375 * var(--space));
    --vspace-0_5       : calc(0.5 * var(--space));
    --vspace-0_625     : calc(0.625 * var(--space));
    --vspace-0_75      : calc(0.75 * var(--space));
    --vspace-0_875     : calc(0.875 * var(--space));
    --vspace-1         : calc(var(--space));
    --vspace-1_25      : calc(1.25 * var(--space));
    --vspace-1_5       : calc(1.5 * var(--space));
    --vspace-1_75      : calc(1.75 * var(--space));
    --vspace-2         : calc(2 * var(--space));
    --vspace-2_5       : calc(2.5 * var(--space));
    --vspace-3         : calc(3 * var(--space));
    --vspace-3_5       : calc(3.5 * var(--space));
    --vspace-4         : calc(4 * var(--space));
    --vspace-4_5       : calc(4.5 * var(--space));
    --vspace-5         : calc(5 * var(--space));

    /* type scale
     * ratio 1:2 | base: 18px
     * -------------------------------------------------------
     *
     * --text-display-3 = (77.40px)
     * --text-display-2 = (64.50px)
     * --text-display-1 = (53.75px)
     * --text-xxxl      = (44.79px)
     * --text-xxl       = (37.32px)
     * --text-xl        = (31.10px)
     * --text-lg        = (25.92px)
     * --text-md        = (21.60px)
     * --text-size      = (18.00px) BASE
     * --text-sm        = (15.00px)
     * --text-xs        = (12.50px)
     *
     * ---------------------------------------------------------
     */
    --text-scale-ratio : 1.2;
    --text-size        : var(--base-font-size);
    --text-xs          : calc((var(--text-size) / var(--text-scale-ratio)) / var(--text-scale-ratio));
    --text-sm          : calc(var(--text-xs) * var(--text-scale-ratio));
    --text-md          : calc(var(--text-sm) * var(--text-scale-ratio) * var(--text-scale-ratio));
    --text-lg          : calc(var(--text-md) * var(--text-scale-ratio));
    --text-xl          : calc(var(--text-lg) * var(--text-scale-ratio));
    --text-xxl         : calc(var(--text-xl) * var(--text-scale-ratio));
    --text-xxxl        : calc(var(--text-xxl) * var(--text-scale-ratio));
    --text-display-1   : calc(var(--text-xxxl) * var(--text-scale-ratio));
    --text-display-2   : calc(var(--text-display-1) * var(--text-scale-ratio));
    --text-display-3   : calc(var(--text-display-2) * var(--text-scale-ratio));

    /* default button height
     */
    --vspace-btn       : var(--vspace-2);
}

/* on mobile devices below 600px, change the value of '--multiplier' 
 * to adjust the values of base font size and vertical space unit.
 */
@media screen and (max-width: 600px) {
    :root {
        --multiplier : .9375;
    }
}

/* ------------------------------------------------------------------- 
 * ## grid variables
 * ------------------------------------------------------------------- */
:root {

    /* widths for rows and containers
     */
    --width-full     : 100%;
    --width-max      : 1180px;
    --width-wide     : 1400px;
    --width-wider    : 1600px;
    --width-widest   : 1800px;
    --width-narrow   : 1000px;
    --width-narrower : 800px;
    --width-grid-max : var(--width-max);

    /* gutter
     */
    --gutter         : 2.2rem;
}

/* on medium screen devices
 */
@media screen and (max-width: 1200px) {
    :root {
        --gutter : 2rem;
    }
}

/* on mobile devices
 */
@media screen and (max-width: 600px) {
    :root {
        --gutter : 1rem;
    }
}


/* ====================================================================
 * # NORMALIZE
 *
 *
 * --------------------------------------------------------------------
 * normalize.css v8.0.1 | MIT License |
 * github.com/necolas/normalize.css
 * -------------------------------------------------------------------- */
html {
    line-height              : 1.15;
    -webkit-text-size-adjust : 100%;
}

body {
    margin : 0;
}

main {
    display : block;
}

h1 {
    font-size : 2em;
    margin    : 0.67em 0;
}

hr {
    box-sizing : content-box;
    height     : 0;
    overflow   : visible;
}

pre {
    font-family : monospace, monospace;
    font-size   : 1em;
}

a {
    background-color : transparent;
}

abbr[title] {
    border-bottom   : none;
    text-decoration : underline;
    text-decoration : underline dotted;
}

b,
strong {
    font-weight : bolder;
}

code,
kbd,
samp {
    font-family : monospace, monospace;
    font-size   : 1em;
}

small {
    font-size : 80%;
}

sub,
sup {
    font-size      : 75%;
    line-height    : 0;
    position       : relative;
    vertical-align : baseline;
}

sub {
    bottom : -0.25em;
}

sup {
    top : -0.5em;
}

img {
    border-style : none;
}

button,
input,
optgroup,
select,
textarea {
    font-family : inherit;
    font-size   : 100%;
    line-height : 1.15;
    margin      : 0;
}

button,
input {
    overflow : visible;
}

button,
select {
    text-transform : none;
}

button,
[type="button"],
[type="reset"],
[type="submit"] {
    -webkit-appearance : button;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
    border-style : none;
    padding      : 0;
}

button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="reset"]:-moz-focusring,
[type="submit"]:-moz-focusring {
    outline : 1px dotted ButtonText;
}

fieldset {
    padding : 0.35em 0.75em 0.625em;
}

legend {
    box-sizing  : border-box;
    color       : inherit;
    display     : table;
    max-width   : 100%;
    padding     : 0;
    white-space : normal;
}

progress {
    vertical-align : baseline;
}

textarea {
    overflow : auto;
}

[type="checkbox"],
[type="radio"] {
    box-sizing : border-box;
    padding    : 0;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
    height : auto;
}

[type="search"] {
    -webkit-appearance : textfield;
    outline-offset     : -2px;
}

[type="search"]::-webkit-search-decoration {
    -webkit-appearance : none;
}

::-webkit-file-upload-button {
    -webkit-appearance : button;
    font               : inherit;
}

details {
    display : block;
}

summary {
    display : list-item;
}

template {
    display : none;
}

[hidden] {
    display : none;
}


/* ===================================================================
 * # BASE SETUP
 *
 *
 * ------------------------------------------------------------------- */
html {
    font-size  : var(--base-size);
    box-sizing : border-box;
}

*,
*::before,
*::after {
    box-sizing : inherit;
}

html,
body {
    height : 100%;
}

body {
    background-color            : var(--color-body);
    -webkit-overflow-scrolling  : touch;
    -webkit-text-size-adjust    : 100%;
    -webkit-tap-highlight-color : rgba(0, 0, 0, 0);
    -webkit-font-smoothing      : antialiased;
    -moz-osx-font-smoothing     : grayscale;
}

p {
    font-size      : inherit;
    text-rendering : optimizeLegibility;
}

a {
    text-decoration : none;
}

svg,
img,
video {
    max-width : 100%;
    height    : auto;
}

pre {
    overflow : auto;
}

div,
dl,
dt,
dd,
ul,
ol,
li,
h1,
h2,
h3,
h4,
h5,
h6,
pre,
form,
p,
blockquote,
th,
td {
    margin  : 0;
    padding : 0;
}

input[type="email"],
input[type="number"],
input[type="search"],
input[type="text"],
input[type="tel"],
input[type="url"],
input[type="password"],
textarea {
    -webkit-appearance : none;
    -moz-appearance    : none;
    appearance         : none;
}


/* ===================================================================
 * # GRID v4.0.0
 *
 *
 *   -----------------------------------------------------------------
 * - Grid breakpoints are based on MAXIMUM WIDTH media queries, 
 *   meaning they apply to that one breakpoint and ALL THOSE BELOW IT.
 * - Grid columns without a specified width will automatically layout 
 *   as equal width columns.
 *
 * - BLOCK GRID columns(columns inside BLOCK GRID containers) are 
 *   equally-sized columns define at parent/row level. 
 *   A BLOCK GRID container's class attribute value begins with "block-".
 *
 * ------------------------------------------------------------------- */

/* row 
 */
.row {
    width     : 92%;
    max-width : var(--width-grid-max);
    margin    : 0 auto;
    display   : flex;
    flex-flow : row wrap;
}

.row .row {
    width        : auto;
    max-width    : none;
    margin-left  : calc(var(--gutter) * -1);
    margin-right : calc(var(--gutter) * -1);
}

/* column
 */
.column {
    display : block;
    flex    : 1 1 0%;
    padding : 0 var(--gutter);
}

.collapse>.column,
.column.collapse {
    padding : 0;
}

/* row utility classes
 */
.row.row-wrap {
    flex-wrap : wrap;
}

.row.row-nowrap {
    flex-wrap : nowrap;
}

.row.row-y-top {
    align-items : flex-start;
}

.row.row-y-bottom {
    align-items : flex-end;
}

.row.row-y-center {
    align-items : center;
}

.row.row-stretch {
    align-items : stretch;
}

.row.row-baseline {
    align-items : baseline;
}

.row.row-x-left {
    justify-content : flex-start;
}

.row.row-x-right {
    justify-content : flex-end;
}

.row.row-x-center {
    justify-content : center;
}

/* --------------------------------------------------------------------
 * ## large screen devices 
 * -------------------------------------------------------------------- */
.lg-1 {
    flex  : none;
    width : 8.33333%;
}

.lg-2 {
    flex  : none;
    width : 16.66667%;
}

.lg-3 {
    flex  : none;
    width : 25%;
}

.lg-4 {
    flex  : none;
    width : 33.33333%;
}

.lg-5 {
    flex  : none;
    width : 41.66667%;
}

.lg-6 {
    flex  : none;
    width : 50%;
}

.lg-7 {
    flex  : none;
    width : 58.33333%;
}

.lg-8 {
    flex  : none;
    width : 66.66667%;
}

.lg-9 {
    flex  : none;
    width : 75%;
}

.lg-10 {
    flex  : none;
    width : 83.33333%;
}

.lg-11 {
    flex  : none;
    width : 91.66667%;
}

.lg-12 {
    flex  : none;
    width : 100%;
}

.block-lg-one-eight>.column {
    flex  : none;
    width : 12.5%;
}

.block-lg-one-sixth>.column {
    flex  : none;
    width : 16.66667%;
}

.block-lg-one-fifth>.column {
    flex  : none;
    width : 20%;
}

.block-lg-one-fourth>.column {
    flex  : none;
    width : 25%;
}

.block-lg-one-third>.column {
    flex  : none;
    width : 33.33333%;
}

.block-lg-one-half>.column {
    flex  : none;
    width : 50%;
}

.block-lg-whole>.column {
    flex  : none;
    width : 100%;
}

/* --------------------------------------------------------------------
 * ## medium screen devices 
 * -------------------------------------------------------------------- */
@media screen and (max-width: 1200px) {
    .md-1 {
        flex  : none;
        width : 8.33333%;
    }

    .md-2 {
        flex  : none;
        width : 16.66667%;
    }

    .md-3 {
        flex  : none;
        width : 25%;
    }

    .md-4 {
        flex  : none;
        width : 33.33333%;
    }

    .md-5 {
        flex  : none;
        width : 41.66667%;
    }

    .md-6 {
        flex  : none;
        width : 50%;
    }

    .md-7 {
        flex  : none;
        width : 58.33333%;
    }

    .md-8 {
        flex  : none;
        width : 66.66667%;
    }

    .md-9 {
        flex  : none;
        width : 75%;
    }

    .md-10 {
        flex  : none;
        width : 83.33333%;
    }

    .md-11 {
        flex  : none;
        width : 91.66667%;
    }

    .md-12 {
        flex  : none;
        width : 100%;
    }

    .block-md-one-eight>.column {
        flex  : none;
        width : 12.5%;
    }

    .block-md-one-sixth>.column {
        flex  : none;
        width : 16.66667%;
    }

    .block-md-one-fifth>.column {
        flex  : none;
        width : 20%;
    }

    .block-md-one-fourth>.column {
        flex  : none;
        width : 25%;
    }

    .block-md-one-third>.column {
        flex  : none;
        width : 33.33333%;
    }

    .block-md-one-half>.column {
        flex  : none;
        width : 50%;
    }

    .block-md-whole>.column {
        flex  : none;
        width : 100%;
    }

    .hide-on-md {
        display : none;
    }
}

/* --------------------------------------------------------------------
 * ## tablet devices 
 * -------------------------------------------------------------------- */
@media screen and (max-width: 800px) {
    .tab-1 {
        flex  : none;
        width : 8.33333%;
    }

    .tab-2 {
        flex  : none;
        width : 16.66667%;
    }

    .tab-3 {
        flex  : none;
        width : 25%;
    }

    .tab-4 {
        flex  : none;
        width : 33.33333%;
    }

    .tab-5 {
        flex  : none;
        width : 41.66667%;
    }

    .tab-6 {
        flex  : none;
        width : 50%;
    }

    .tab-7 {
        flex  : none;
        width : 58.33333%;
    }

    .tab-8 {
        flex  : none;
        width : 66.66667%;
    }

    .tab-9 {
        flex  : none;
        width : 75%;
    }

    .tab-10 {
        flex  : none;
        width : 83.33333%;
    }

    .tab-11 {
        flex  : none;
        width : 91.66667%;
    }

    .tab-12 {
        flex  : none;
        width : 100%;
    }

    .block-tab-one-eight>.column {
        flex  : none;
        width : 12.5%;
    }

    .block-tab-one-sixth>.column {
        flex  : none;
        width : 16.66667%;
    }

    .block-tab-one-fifth>.column {
        flex  : none;
        width : 20%;
    }

    .block-tab-one-fourth>.column {
        flex  : none;
        width : 25%;
    }

    .block-tab-one-third>.column {
        flex  : none;
        width : 33.33333%;
    }

    .block-tab-one-half>.column {
        flex  : none;
        width : 50%;
    }

    .block-tab-whole>.column {
        flex  : none;
        width : 100%;
    }

    .hide-on-tab {
        display : none;
    }
}

/* --------------------------------------------------------------------
 * ## mobile devices 
 * -------------------------------------------------------------------- */
@media screen and (max-width: 600px) {
    .row {
        width         : 100%;
        padding-left  : 6vw;
        padding-right : 6vw;
    }

    .row .row {
        padding-left  : 0;
        padding-right : 0;
    }

    .mob-1 {
        flex  : none;
        width : 8.33333%;
    }

    .mob-2 {
        flex  : none;
        width : 16.66667%;
    }

    .mob-3 {
        flex  : none;
        width : 25%;
    }

    .mob-4 {
        flex  : none;
        width : 33.33333%;
    }

    .mob-5 {
        flex  : none;
        width : 41.66667%;
    }

    .mob-6 {
        flex  : none;
        width : 50%;
    }

    .mob-7 {
        flex  : none;
        width : 58.33333%;
    }

    .mob-8 {
        flex  : none;
        width : 66.66667%;
    }

    .mob-9 {
        flex  : none;
        width : 75%;
    }

    .mob-10 {
        flex  : none;
        width : 83.33333%;
    }

    .mob-11 {
        flex  : none;
        width : 91.66667%;
    }

    .mob-12 {
        flex  : none;
        width : 100%;
    }

    .block-mob-one-eight>.column {
        flex  : none;
        width : 12.5%;
    }

    .block-mob-one-sixth>.column {
        flex  : none;
        width : 16.66667%;
    }

    .block-mob-one-fifth>.column {
        flex  : none;
        width : 20%;
    }

    .block-mob-one-fourth>.column {
        flex  : none;
        width : 25%;
    }

    .block-mob-one-third>.column {
        flex  : none;
        width : 33.33333%;
    }

    .block-mob-one-half>.column {
        flex  : none;
        width : 50%;
    }

    .block-mob-whole>.column {
        flex  : none;
        width : 100%;
    }

    .hide-on-mob {
        display : none;
    }
}

/* --------------------------------------------------------------------
 * ## small screen devices 
 * --------------------------------------------------------------------*/

/* stack columns on small screen devices
 */
@media screen and (max-width: 400px) {
    .row .row {
        margin-left  : 0;
        margin-right : 0;
    }

    .block-stack>.column,
    .column {
        flex         : none;
        width        : 100%;
        margin-left  : 0;
        margin-right : 0;
        padding      : 0;
    }

    .hide-on-sm {
        display : none;
    }
}

/* --------------------------------------------------------------------
 * ## additional column stackpoints 
 * -------------------------------------------------------------------- */
@media screen and (max-width: 1100px) {

    .stack-on-1100,
    .block-stack-on-1100>.column {
        flex         : none;
        width        : 100%;
        margin-left  : 0;
        margin-right : 0;
    }
}

@media screen and (max-width: 1000px) {

    .stack-on-1000,
    .block-stack-on-1000>.column {
        flex         : none;
        width        : 100%;
        margin-left  : 0;
        margin-right : 0;
    }
}

@media screen and (max-width: 900px) {

    .stack-on-900,
    .block-stack-on-900>.column {
        flex         : none;
        width        : 100%;
        margin-left  : 0;
        margin-right : 0;
    }
}

@media screen and (max-width: 700px) {

    .stack-on-700,
    .block-stack-on-700>.column {
        flex         : none;
        width        : 100%;
        margin-left  : 0;
        margin-right : 0;
    }
}

@media screen and (max-width: 500px) {

    .stack-on-500,
    .block-stack-on-500>.column {
        flex         : none;
        width        : 100%;
        margin-left  : 0;
        margin-right : 0;
    }
}


/* ===================================================================
 * # UTILITY CLASSES
 *
 *
 * ------------------------------------------------------------------- */

/* flex item alignment classes
 */
.u-flexitem-center {
    margin     : auto;
    align-self : center;
}

.u-flexitem-left {
    margin-right : auto;
    align-self   : center;
}

.u-flexitem-right {
    margin-left : auto;
    align-self  : center;
}

.u-flexitem-x-center {
    margin-right : auto;
    margin-left  : auto;
}

.u-flexitem-x-left {
    margin-right : auto;
}

.u-flexitem-x-right {
    margin-left : auto;
}

.u-flexitem-y-center {
    align-self : center;
}

.u-flexitem-y-top {
    align-self : flex-start;
}

.u-flexitem-y-bottom {
    align-self : flex-end;
}

/* misc helper classes
 */
.u-screen-reader-text {
    clip      : rect(1px, 1px, 1px, 1px);
    clip-path : inset(50%);
    height    : 1px;
    width     : 1px;
    margin    : -1px;
    overflow  : hidden;
    padding   : 0;
    border    : 0;
    position  : absolute;
    word-wrap : normal !important;
}

.u-clearfix:after {
    content : "";
    display : table;
    clear   : both;
}

.u-hidden {
    display : none;
}

.u-invisible {
    visibility : hidden;
}

.u-antialiased {
    -webkit-font-smoothing  : antialiased;
    -moz-osx-font-smoothing : grayscale;
}

.u-overflow-hidden {
    overflow : hidden;
}

.u-remove-top {
    margin-top : 0;
}

.u-remove-bottom {
    margin-bottom : 0;
}

.u-add-half-bottom {
    margin-bottom : var(--vspace-0_5);
}

.u-add-bottom {
    margin-bottom : var(--vspace-1);
}

.u-no-border {
    border : none;
}

.u-fullwidth {
    width : 100%;
}

.u-pull-left {
    float : left;
}

.u-pull-right {
    float : right;
}


/* ===================================================================
 * # TYPOGRAPHY 
 *
 *
 * ------------------------------------------------------------------- 
 * type scale - ratio 1:2 | base: 18px
 * -------------------------------------------------------------------
 *
 * --text-display-3 = (77.40px)
 * --text-display-2 = (64.50px)
 * --text-display-1 = (53.75px)
 * --text-xxxl      = (44.79px)
 * --text-xxl       = (37.32px)
 * --text-xl        = (31.10px)
 * --text-lg        = (25.92px)
 * --text-md        = (21.60px)
 * --text-size      = (18.00px) BASE
 * --text-sm        = (15.00px)
 * --text-xs        = (12.50px)
 *
 * -------------------------------------------------------------------- */

/* --------------------------------------------------------------------
 * ## base type styles
 * -------------------------------------------------------------------- */
body {
    font-family : var(--font-1);
    font-size   : var(--base-font-size);
    font-weight : 400;
    line-height : var(--vspace-1);
    color       : var(--color-text);
}

/* links
 */
a {
    color      : var(--color-1);
    transition : all 0.3s ease-in-out;
}

a:focus,
a:hover,
a:active {
    color : var(--color-2);
}

a:hover,
a:active {
    outline : 0;
}

/* headings
 */
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
    font-family            : var(--font-2);
    font-weight            : 600;
    color                  : var(--color-text-dark);
    font-variant-ligatures : common-ligatures;
    text-rendering         : optimizeLegibility;
    letter-spacing         : -.010em;
}

h1,
.h1 {
    margin-top    : var(--vspace-2_5);
    margin-bottom : var(--vspace-0_75);
}

h2,
.h2,
h3,
.h3,
h4,
.h4 {
    margin-top    : var(--vspace-2);
    margin-bottom : var(--vspace-0_75);
}

h5,
.h5,
h6,
.h6 {
    margin-top    : var(--vspace-1_75);
    margin-bottom : var(--vspace-0_5);
}

h1,
.h1 {
    font-size      : var(--text-display-2);
    line-height    : calc(2.25 * var(--space));
    letter-spacing : -.020em;
}

@media screen and (max-width: 500px) {

    h1,
    .h1 {
        font-size   : var(--text-display-1);
        line-height : calc(1.875 * var(--space));
    }
}

h2,
.h2 {
    font-size      : var(--text-xxl);
    line-height    : calc(1.375 * var(--space));
    letter-spacing : -.015em;
}

h3,
.h3 {
    font-size   : var(--text-xl);
    line-height : calc(1.125 * var(--space));
}

h4,
.h4 {
    font-size   : var(--text-lg);
    line-height : var(--vspace-1);
}

h5,
.h5 {
    font-size   : var(--text-md);
    line-height : var(--vspace-0_875);
}

h6,
.h6 {
    font-weight    : 700;
    font-size      : var(--text-sm);
    line-height    : var(--vspace-0_75);
    text-transform : uppercase;
    letter-spacing : .2rem;
}

/* emphasis, italic,
 * strong, bold and small text
 */
em,
i,
strong,
b {
    font-size   : inherit;
    line-height : inherit;
}

em,
i {
    font-style : italic;
}

strong,
b {
    font-weight : 600;
}

small {
    font-size   : 80%;
    font-weight : 400;
    line-height : var(--vspace-0_5);
}

/* blockquotes
 */
blockquote {
    margin      : 0 0 var(--vspace-1) 0;
    padding     : var(--vspace-1) var(--vspace-1_5);
    border-left : 2px solid var(--color-text-dark);
    position    : relative;
}

blockquote p {
    font-family : var(--font-1);
    font-weight : 400;
    font-size   : var(--text-lg);
    font-style  : normal;
    line-height : var(--vspace-1_25);
    color       : var(--color-text-dark);
    padding     : 0;
}

blockquote cite {
    display     : block;
    font-family : var(--font-2);
    font-weight : 400;
    font-size   : var(--text-sm);
    line-height : var(--vspace-0_75);
    font-style  : normal;
}

blockquote cite:before {
    content : "\2014 \0020";
}

blockquote cite,
blockquote cite a,
blockquote cite a:visited {
    color  : var(--color-text-light);
    border : none;
}

@media screen and (max-width: 500px) {
    blockquote {
        padding : var(--vspace-0_75) var(--vspace-0_75);
    }

    blockquote p {
        font-size   : var(--text-md);
        line-height : var(--vspace-1);
    }
}

/* figures
 */
figure img,
p img {
    margin         : 0;
    vertical-align : bottom;
}

figure {
    display      : block;
    margin-left  : 0;
    margin-right : 0;
}

figure img+figcaption {
    margin-top : var(--vspace-1);
}

figcaption {
    /* font-style: italic; */
    font-size     : var(--text-sm);
    text-align    : center;
    margin-bottom : 0;
}

/* preformatted, code
 */
var,
kbd,
samp,
code,
pre {
    font-family : var(--font-mono);
}

pre {
    padding    : var(--vspace-0_75) var(--vspace-1) var(--vspace-1);
    background : var(--color-gray-6);
    overflow-x : auto;
}

code {
    font-size     : var(--text-sm);
    line-height   : 1.6rem;
    margin        : 0 .2rem;
    padding       : calc(((var(--vspace-1) - 1.6rem) / 2) - .1rem) calc(.8rem - .1rem);
    white-space   : nowrap;
    background    : var(--color-gray-6);
    border        : 1px solid var(--color-gray-10);
    color         : var(--color-text-dark);
    border-radius : 3px;
}

pre>code {
    display     : block;
    white-space : pre;
    line-height : var(--vspace-1);
    padding     : 0;
    margin      : 0;
    border      : none;
}

/* deleted text, abbreviation,
 * & mark text
 */
del {
    text-decoration : line-through;
}

abbr {
    font-family    : var(--font-1);
    font-weight    : 600;
    font-variant   : small-caps;
    text-transform : lowercase;
    letter-spacing : .1em;
}

abbr[title],
dfn[title] {
    border-bottom   : 1px dotted;
    cursor          : help;
    text-decoration : none;
}

mark {
    background : var(--color-2-lightest);
    color      : var(--color-black);
}

/* horizontal rule
 */
hr {
    border       : solid var(--color-border);
    border-width : .1rem 0 0;
    clear        : both;
    margin       : var(--vspace-2) 0 calc(var(--vspace-2) - 1px);
    height       : 0;
}

hr.fancy {
    border     : none;
    margin     : var(--vspace-2) 0;
    height     : var(--vspace-1);
    text-align : center;
}

hr.fancy::before {
    content        : "*****";
    letter-spacing : .3em;
}

/* --------------------------------------------------------------------
 * ## additional typography & helper classes
 * -------------------------------------------------------------------- */
.lead,
.attention-getter {
    font-family : var(--font-2);
    font-weight : 300;
    font-size   : var(--text-md);
    line-height : var(--vspace-1_25);
    color       : var(--color-text);
}

@media screen and (max-width: 800px) {

    .lead,
    .attention-getter {
        font-size   : calc(var(--text-size) * 1.0556);
        line-height : calc(1.125 * var(--space));
    }
}

@media screen and (max-width: 400px) {

    .lead,
    .attention-getter {
        font-size   : var(--text-size);
        line-height : var(--vspace-1);
    }
}

.pull-quote {
    position   : relative;
    padding    : 0;
    margin-top : 0;
    text-align : center;
}

.pull-quote blockquote {
    border      : none;
    margin      : 0 auto;
    max-width   : 62rem;
    padding-top : var(--vspace-2_5);
    position    : relative;
}

.pull-quote blockquote p {
    font-weight : 400;
    color       : var(--color-text-dark);
}

.pull-quote blockquote:before {
    content           : "";
    display           : block;
    height            : var(--vspace-1);
    width             : var(--vspace-1);
    background-repeat : no-repeat;
    background        : center center;
    background-size   : contain;
    /* background-image  : url(../images/icons/icon-quote.svg); */
    background-image  : url(images/icons/icon-quote.svg);
    transform         : translate(-50%, 0, 0);
    position          : absolute;
    top               : var(--vspace-1);
    left              : 50%;
}

.drop-cap:first-letter {
    float          : left;
    font-family    : var(--font-2);
    font-weight    : 700;
    font-size      : calc(3 * var(--space));
    line-height    : 1;
    padding        : 0 0.125em 0 0;
    text-transform : uppercase;
    background     : transparent;
    color          : var(--color-text-dark);
}

.text-center {
    text-align : center;
}

.text-left {
    text-align : left;
}

.text-right {
    text-align : right;
}

/* --------------------------------------------------------------------
 * ## lists
 * -------------------------------------------------------------------- */
ol {
    list-style : decimal;
}

ul {
    list-style : disc;
}

li {
    display : list-item;
}

ol,
ul {
    margin-left : 1.6rem;
}

ul li {
    padding-left : .4rem;
}

ul ul,
ul ol,
ol ol,
ol ul {
    margin : 1.6rem 0 1.6rem 1.6rem;
}

ul.disc li {
    display    : list-item;
    list-style : none;
    padding    : 0 0 0 .8rem;
    position   : relative;
}

ul.disc li::before {
    content        : "";
    display        : inline-block;
    width          : 8px;
    height         : 8px;
    border-radius  : 50%;
    background     : var(--color-1);
    position       : absolute;
    left           : -.9em;
    top            : 11px;
    vertical-align : middle;
}

dt {
    margin : 0;
    color  : var(--color-1);
}

dd {
    margin : 0 0 0 2rem;
}

/* definition list line style 
 */
.lining dt,
.lining dd {
    display : inline;
    margin  : 0;
}

.lining dt+dt:before,
.lining dd+dt:before {
    content     : "\A";
    white-space : pre;
}

.lining dd+dd:before {
    content : ", ";
}

.lining dd+dd:before {
    content : ", ";
}

.lining dd:before {
    content     : ": ";
    margin-left : -0.2em;
}

/* definition list dictionary style 
 */
.dictionary-style dt {
    display       : inline;
    counter-reset : definitions;
}

.dictionary-style dt+dt:before {
    content     : ", ";
    margin-left : -0.2em;
}

.dictionary-style dd {
    display           : block;
    counter-increment : definitions;
}

.dictionary-style dd:before {
    content : counter(definitions, decimal) ". ";
}

/* --------------------------------------------------------------------
 * ## spacing
 * -------------------------------------------------------------------- */
fieldset,
button,
.btn {
    margin-bottom : var(--vspace-0_5);
}

input,
textarea,
select,
pre,
blockquote,
figure,
figcaption,
table,
p,
ul,
ol,
dl,
form,
img,
.video-container,
.ss-custom-select {
    margin-bottom : var(--vspace-1);
}


/* =================================================================== 
 * # PRELOADER
 * 
 * 
 * -------------------------------------------------------------------
 * - markup:
 *
 * <div id="preloader">
 *    <div id="loader"></div>
 * </div>
 *
 * ------------------------------------------------------------------- */
#preloader {
    position        : fixed;
    display         : flex;
    flex-flow       : row wrap;
    justify-content : center;
    align-items     : center;
    background      : var(--color-preloader-bg);
    z-index         : 500;
    height          : 100vh;
    width           : 100%;
    opacity         : 1;
}

.no-js #preloader {
    display : none;
}

#loader {
    width   : var(--vspace-1_5);
    height  : var(--vspace-1_5);
    padding : 0;
    opacity : 1;
}

#loader:before {
    content           : "";
    border-top        : 4px solid var(--color-loader-light);
    border-right      : 4px solid var(--color-loader-light);
    border-bottom     : 4px solid var(--color-loader-light);
    border-left       : 4px solid var(--color-loader);
    -webkit-animation : load 1.1s infinite linear;
    animation         : load 1.1s infinite linear;
    display           : block;
    border-radius     : 50%;
    width             : 100%;
    height            : 100%;
}

@-webkit-keyframes load {
    0% {
        -webkit-transform : rotate(0deg);
        transform         : rotate(0deg);
    }

    100% {
        -webkit-transform : rotate(360deg);
        transform         : rotate(360deg);
    }
}

@keyframes load {
    0% {
        transform : rotate(0deg);
    }

    100% {
        transform : rotate(360deg);
    }
}

/* ------------------------------------------------------------------- 
 * ## page loaded
 * ------------------------------------------------------------------- */
.ss-loaded #preloader {
    opacity    : 0;
    visibility : hidden;
    transition : all .6s .9s ease-in-out;
}

.ss-loaded #preloader #loader {
    opacity    : 0;
    transition : opacity .6s ease-in-out;
}


/* ===================================================================
 * # FORM
 *
 *
 * ------------------------------------------------------------------- */
fieldset {
    border  : none;
    padding : 0;
}

input[type="email"],
input[type="number"],
input[type="search"],
input[type="text"],
input[type="tel"],
input[type="url"],
input[type="password"],
textarea,
select {
    --input-height      : var(--vspace-2);
    --input-line-height : var(--vspace-1);
    --input-vpadding    : calc(((var(--input-height) - var(--input-line-height)) / 2) - 1px);
    display             : block;
    height              : var(--input-height);
    padding             : var(--input-vpadding) calc(2.4rem - 1px);
    border              : 0;
    outline             : 0;
    color               : var(--color-placeholder);
    font-family         : var(--font-1);
    font-size           : var(--text-sm);
    font-size           : calc(var(--text-size) * 0.8889);
    line-height         : var(--input-line-height);
    max-width           : 100%;
    background-color    : var(--color-gray-5);
    border              : 1px solid transparent;
    transition          : all .3s ease-in-out;
}

.ss-custom-select {
    position : relative;
    padding  : 0;
}

.ss-custom-select select {
    -webkit-appearance : none;
    -moz-appearance    : none;
    appearance         : none;
    text-indent        : 0.01px;
    text-overflow      : '';
    margin             : 0;
    vertical-align     : middle;
}

.ss-custom-select select option {
    padding-left  : 2rem;
    padding-right : 2rem;
}

.ss-custom-select select::-ms-expand {
    display : none;
}

.ss-custom-select::after {
    border-bottom    : 2px solid black;
    border-right     : 2px solid black;
    content          : '';
    display          : block;
    height           : 8px;
    width            : 8px;
    margin-top       : -7px;
    pointer-events   : none;
    position         : absolute;
    right            : 2.4rem;
    top              : 50%;
    transition       : all 0.15s ease-in-out;
    transform-origin : 66% 66%;
    transform        : rotate(45deg);
}

textarea {
    min-height : calc(8 * var(--space));
}

input[type="email"]:focus,
input[type="number"]:focus,
input[type="search"]:focus,
input[type="text"]:focus,
input[type="tel"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
textarea:focus,
select:focus {
    color            : var(--color-black);
    background-color : white;
    box-shadow       : 0 0 5px var(--color-1);
    border           : 1px solid var(--color-1-light);
}

label,
legend {
    font-family   : var(--font-1);
    font-weight   : 600;
    font-size     : var(--text-sm);
    line-height   : var(--vspace-0_5);
    margin-bottom : var(--vspace-0_5);
    color         : var(--color-text-dark);
    display       : block;
}

input[type="checkbox"],
input[type="radio"] {
    display : inline;
}

label>.label-text {
    display     : inline-block;
    margin-left : 1rem;
    font-family : var(--font-1);
    line-height : inherit;
}

label>input[type="checkbox"],
label>input[type="radio"] {
    margin   : 0;
    position : relative;
    top      : 2px;
}

/* ------------------------------------------------------------------- 
 * ## style placeholder text
 * ------------------------------------------------------------------- */
::-webkit-input-placeholder {
    /* WebKit, Blink, Edge */
    color : var(--color-placeholder);
}

:-moz-placeholder {
    /* Mozilla Firefox 4 to 18 */
    color   : var(--color-placeholder);
    opacity : 1;
}

::-moz-placeholder {
    /* Mozilla Firefox 19+ */
    color   : var(--color-placeholder);
    opacity : 1;
}

:-ms-input-placeholder {
    /* Internet Explorer 10-11 */
    color : var(--color-placeholder);
}

::-ms-input-placeholder {
    /* Microsoft Edge */
    color : var(--color-placeholder);
}

::placeholder {
    /* Most modern browsers support this now. */
    color : var(--color-placeholder);
}

/* ------------------------------------------------------------------- 
 * ## change autocomplete styles in Chrome
 * ------------------------------------------------------------------- */
input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus,
select:-webkit-autofill,
select:-webkit-autofill:hover,
select:-webkit-autofill:focus {
    -webkit-text-fill-color : var(--color-1);
    transition              : background-color 5000s ease-in-out 0s;
}


/* ===================================================================
 * # BUTTONS
 *
 *
 * ------------------------------------------------------------------- */
.btn,
button,
input[type="submit"],
input[type="reset"],
input[type="button"] {
    --btn-height            : var(--vspace-btn);
    display                 : inline-block;
    font-family             : var(--font-2);
    font-weight             : 400;
    font-size               : calc(var(--text-size) * 0.6667);
    text-transform          : uppercase;
    letter-spacing          : .3em;
    height                  : var(--btn-height);
    line-height             : calc(var(--btn-height) - 4px);
    padding                 : 0 3.6rem;
    margin                  : 0 0.4rem var(--vspace-0_5) 0;
    color                   : var(--color-btn-text);
    text-decoration         : none;
    text-align              : center;
    white-space             : nowrap;
    cursor                  : pointer;
    transition              : all .3s;
    background-color        : var(--color-btn);
    border                  : 2px solid var(--color-btn);
    -webkit-font-smoothing  : antialiased;
    -moz-osx-font-smoothing : grayscale;
}

.btn:focus,
button:focus,
input[type="submit"]:focus,
input[type="reset"]:focus,
input[type="button"]:focus,
.btn:hover,
button:hover,
input[type="submit"]:hover,
input[type="reset"]:hover,
input[type="button"]:hover {
    background-color : var(--color-btn-hover);
    border-color     : var(--color-btn-hover);
    color            : var(--color-btn-hover-text);
    outline          : 0;
}

/* button primary
 */
.btn.btn--primary,
button.btn--primary,
input[type="submit"].btn--primary,
input[type="reset"].btn--primary,
input[type="button"].btn--primary {
    background   : var(--color-btn-primary);
    border-color : var(--color-btn-primary);
    color        : var(--color-btn-primary-text);
}

.btn.btn--primary:focus,
button.btn--primary:focus,
input[type="submit"].btn--primary:focus,
input[type="reset"].btn--primary:focus,
input[type="button"].btn--primary:focus,
.btn.btn--primary:hover,
button.btn--primary:hover,
input[type="submit"].btn--primary:hover,
input[type="reset"].btn--primary:hover,
input[type="button"].btn--primary:hover {
    background   : var(--color-btn-primary-hover);
    border-color : var(--color-btn-primary-hover);
    color        : var(--color-btn-primary-hover-text);
}

/* button modifiers
 */
.btn.u-fullwidth,
button.u-fullwidth {
    width        : 100%;
    margin-right : 0;
}

.btn--small,
button.btn--small {
    --btn-height : calc(var(--vspace-btn) - 1.6rem);
}

.btn--medium,
button.btn--medium {
    --btn-height : calc(var(--vspace-btn) + .8rem);
}

.btn--large,
button.btn--large {
    --btn-height : calc(var(--vspace-btn) + 1.6rem);
}

.btn--stroke,
button.btn--stroke {
    background  : transparent !important;
    font-weight : 400;
    border      : 2px solid var(--color-btn-stroke);
    color       : var(--color-btn-stroke-text);
}

.btn--stroke:focus,
button.btn--stroke:focus,
.btn--stroke:hover,
button.btn--stroke:hover {
    background : var(--color-btn-stroke-hover) !important;
    border     : 2px solid var(--color-btn-stroke-hover);
    color      : var(--color-btn-stroke-hover-text);
}

.btn--pill,
button.btn--pill {
    padding-left  : 3.2rem !important;
    padding-right : 3.2rem !important;
    border-radius : 1000px !important;
}


/* ===================================================================
 * # TABLE
 *
 *
 * ------------------------------------------------------------------- */
table {
    border-width    : 0;
    width           : 100%;
    max-width       : 100%;
    font-family     : var(--font-1);
    border-collapse : collapse;
}

th,
td {
    padding       : var(--vspace-0_5) 3.2rem calc(var(--vspace-0_5) - 1px);
    text-align    : left;
    border-bottom : 1px solid var(--color-border);
}

th {
    padding     : var(--vspace-0_5) 3.2rem;
    color       : var(--color-text-dark);
    font-family : var(--font-2);
    font-weight : 500;
}

th:first-child,
td:first-child {
    padding-left : 0;
}

th:last-child,
td:last-child {
    padding-right : 0;
}

.table-responsive {
    overflow-x                 : auto;
    -webkit-overflow-scrolling : touch;
}


/* ===================================================================
 * # COMPONENTS
 *
 *
 * ------------------------------------------------------------------- */

/* -------------------------------------------------------------------
 * ## pagination
 * ------------------------------------------------------------------- */
.pgn {
    --pgn-num-height : calc(var(--vspace-1) + .4rem);
    margin           : 0 auto var(--vspace-1);
    text-align       : center;
}

.pgn ul {
    display         : inline-flex;
    flex-flow       : row wrap;
    justify-content : center;
    list-style      : none;
    margin-left     : 0;
    position        : relative;
    padding         : 0 6rem;
}

.pgn ul li {
    margin  : 0;
    padding : 0;
}

.pgn__num {
    font-family   : var(--font-2);
    font-weight   : 600;
    font-size     : var(--text-size);
    line-height   : var(--vspace-1);
    display       : block;
    padding       : .2rem 1.2rem;
    height        : var(--pgn-num-height);
    margin        : .2rem .2rem;
    color         : var(--color-text-dark);
    border-radius : var(--border-radius);
    transition    : all, .3s, ease-in-out;
}

.pgn__num:focus,
.pgn__num:hover {
    background : var(--color-text-dark);
    color      : var(--color-white);
}

.pgn .current,
.pgn .current:focus,
.pgn .current:hover {
    background : var(--color-text-dark);
    color      : var(--color-white);
}

.pgn .inactive,
.pgn .inactive:focus,
.pgn .inactive:hover {
    opacity : 0.4;
    cursor  : default;
}

.pgn__prev,
.pgn__next {
    display         : inline-flex;
    flex-flow       : row wrap;
    justify-content : center;
    align-items     : center;
    height          : var(--pgn-num-height);
    width           : 4.8rem;
    line-height     : var(--vspace-1);
    border-radius   : 4px;
    padding         : 0;
    margin          : 0;
    opacity         : 1;
    font            : 0/0 a;
    text-shadow     : none;
    color           : transparent;
    transition      : all, .3s, ease-in-out;
    position        : absolute;
    top             : 50%;
    transform       : translate(0, -50%);
}

.pgn__prev:focus,
.pgn__prev:hover,
.pgn__next:focus,
.pgn__next:hover {
    background : var(--color-text-dark);
}

.pgn__prev svg,
.pgn__next svg {
    height     : 2.4rem;
    width      : 2.4rem;
    transition : all, .3s, ease-in-out;
}

.pgn__prev svg path,
.pgn__next svg path {
    fill : var(--color-text-dark);
}

.pgn__prev:focus svg path,
.pgn__prev:hover svg path,
.pgn__next:focus svg path,
.pgn__next:hover svg path {
    fill : white;
}

.pgn__prev {
    left : 0;
}

.pgn__next {
    right : 0;
}

.pgn__prev.inactive,
.pgn__next.inactive {
    opacity : 0.4;
    cursor  : default;
}

.pgn__prev.inactive:focus,
.pgn__prev.inactive:hover,
.pgn__next.inactive:focus,
.pgn__next.inactive:hover {
    background-color : transparent;
}

/* ------------------------------------------------------------------- 
 * responsive:
 * pagination
 * ------------------------------------------------------------------- */
@media screen and (max-width: 600px) {
    .pgn ul {
        padding : 0 5.2rem;
    }
}

/* ------------------------------------------------------------------- 
 * ## alert box 
 * ------------------------------------------------------------------- */
.alert-box {
    padding       : var(--vspace-0_75) 4rem var(--vspace-0_75) 3.2rem;
    margin-bottom : var(--vspace-1);
    border-radius : var(--border-radius);
    font-family   : var(--font-1);
    font-weight   : 400;
    font-size     : var(--text-sm);
    line-height   : var(--vspace-0_75);
    opacity       : 1;
    visibility    : visible;
    position      : relative;
}

.alert-box__close {
    position : absolute;
    display  : block;
    right    : 1.6rem;
    top      : 1.6rem;
    cursor   : pointer;
    width    : 12px;
    height   : 12px;
}

.alert-box__close::before,
.alert-box__close::after {
    content  : '';
    display  : inline-block;
    width    : 1px;
    height   : 12px;
    position : absolute;
    top      : 0;
    left     : 5px;
}

.alert-box__close::before {
    transform : rotate(45deg);
}

.alert-box__close::after {
    transform : rotate(-45deg);
}

.alert-box--error {
    background-color : var(--color-error);
    color            : var(--color-error-content);
}

.alert-box--error .alert-box__close::before,
.alert-box--error .alert-box__close::after {
    background-color : var(--color-error-content);
}

.alert-box--success {
    background-color : var(--color-success);
    color            : var(--color-success-content);
}

.alert-box--success .alert-box__close::before,
.alert-box--success .alert-box__close::after {
    background-color : var(--color-success-content);
}

.alert-box--info {
    background-color : var(--color-info);
    color            : var(--color-info-content);
}

.alert-box--info .alert-box__close::before,
.alert-box--info .alert-box__close::after {
    background-color : var(--color-info-content);
}

.alert-box--notice {
    background-color : var(--color-notice);
    color            : var(--color-notice-content);
}

.alert-box--notice .alert-box__close::before,
.alert-box--notice .alert-box__close::after {
    background-color : var(--color-notice-content);
}

.alert-box.hideit {
    opacity    : 0;
    visibility : hidden;
    transition : all .5s;
}

/* ------------------------------------------------------------------- 
 * ## skillbars
 * ------------------------------------------------------------------- */
.skill-bars {
    list-style : none;
    margin     : var(--vspace-2) 0 var(--vspace-1);
}

.skill-bars li {
    height        : .4rem;
    background    : var(--color-gray-9);
    width         : 100%;
    margin-bottom : calc(var(--vspace-2) - .4rem);
    padding       : 0;
    position      : relative;
}

.skill-bars li strong {
    position       : absolute;
    left           : 0;
    top            : calc((var(--vspace-1) * 1.25) * -1);
    font-family    : var(--font-2);
    font-weight    : 600;
    color          : var(--color-text-dark);
    text-transform : uppercase;
    letter-spacing : .2em;
    font-size      : var(--text-xs);
    line-height    : var(--vspace-0_75);
}

.skill-bars li .progress {
    background : var(--color-black);
    position   : relative;
    height     : 100%;
}

.skill-bars li .progress span {
    display       : block;
    font-family   : var(--font-1);
    color         : white;
    font-size     : 1rem;
    line-height   : 1;
    background    : var(--color-black);
    padding       : var(--vspace-0_25);
    border-radius : 4px;
    position      : absolute;
    right         : 0;
    top           : calc((var(--vspace-1) + .8rem) * -1);
}

.skill-bars li .progress span::after {
    position         : absolute;
    left             : 50%;
    bottom           : -10px;
    margin-left      : -5px;
    width            : 0;
    height           : 0;
    border           : 5px solid transparent;
    border-top-color : var(--color-black, var(--color-black));
    content          : "";
}

.skill-bars li .percent5 {
    width : 5%;
}

.skill-bars li .percent10 {
    width : 10%;
}

.skill-bars li .percent15 {
    width : 15%;
}

.skill-bars li .percent20 {
    width : 20%;
}

.skill-bars li .percent25 {
    width : 25%;
}

.skill-bars li .percent30 {
    width : 30%;
}

.skill-bars li .percent35 {
    width : 35%;
}

.skill-bars li .percent40 {
    width : 40%;
}

.skill-bars li .percent45 {
    width : 45%;
}

.skill-bars li .percent50 {
    width : 50%;
}

.skill-bars li .percent55 {
    width : 55%;
}

.skill-bars li .percent60 {
    width : 60%;
}

.skill-bars li .percent65 {
    width : 65%;
}

.skill-bars li .percent70 {
    width : 70%;
}

.skill-bars li .percent75 {
    width : 75%;
}

.skill-bars li .percent80 {
    width : 80%;
}

.skill-bars li .percent85 {
    width : 85%;
}

.skill-bars li .percent90 {
    width : 90%;
}

.skill-bars li .percent95 {
    width : 95%;
}

.skill-bars li .percent100 {
    width : 100%;
}

/* --------------------------------------------------------------------
 * ## stats tabs
 * -------------------------------------------------------------------- */
.stats-tabs {
    padding : 0;
    margin  : var(--vspace-1) 0;
}

.stats-tabs li {
    display      : inline-block;
    margin       : 0 1.6rem var(--vspace-0_5) 0;
    padding      : 0 1.5rem 0 0;
    border-right : 1px solid var(--color-border);
}

.stats-tabs li:last-child {
    margin  : 0;
    padding : 0;
    border  : none;
}

.stats-tabs li a {
    display     : block;
    font-family : var(--font-2);
    font-size   : var(--text-lg);
    font-weight : 600;
    line-height : var(--vspace-1_5);
    border      : none;
    color       : var(--color-text-dark);
}

.stats-tabs li a:hover {
    color : var(--color-1);
}

.stats-tabs li a em {
    display     : block;
    margin      : 0;
    font-family : var(--font-1);
    font-size   : var(--text-sm);
    line-height : var(--vspace-0_5);
    font-weight : 300;
    font-style  : normal;
    color       : var(--color-text-light);
}


/* ===================================================================
 * # PROJECT-WIDE SHARED STYLES
 *
 *
 * ------------------------------------------------------------------- */
.wide {
    max-width : var(--width-wide);
}

.wider {
    max-width : var(--width-wider);
}

.narrow {
    max-width : var(--width-narrow);
}

.basicLightbox iframe {
    width        : 880px;
    aspect-ratio : 16/9;
}

/* ------------------------------------------------------------------- 
 * ## theme-specific typography classes
 * ------------------------------------------------------------------- */
.body-text-2 {
    font-size   : calc(var(--text-size) * 0.9444);
    line-height : calc(0.9375 * var(--space));
}

.body-text-3 {
    font-size   : calc(var(--text-size) * 0.8889);
    line-height : calc(0.9375 * var(--space));
}

.text-pretitle {
    font-weight    : 600;
    font-size      : var(--text-sm);
    text-transform : uppercase;
    letter-spacing : .3em;
    color          : var(--color-1);
    margin-top     : 0;
}

.text-display-1 {
    font-size   : var(--text-xxl);
    font-weight : 500;
    line-height : 1.5;
    margin-top  : 0;
}

/* ------------------------------------------------------------------- 
 * ## media classes
 * ------------------------------------------------------------------- */

/* floated image
 */
img.u-pull-right {
    margin : var(--vspace-0_5) 0 var(--vspace-0_5) var(--vspace-0_875);
}

img.u-pull-left {
    margin : var(--vspace-0_5) var(--vspace-0_875) var(--vspace-0_5) 0;
}

/* responsive video container
  */
.video-container {
    --aspect-ratio : 16/9;
    position       : relative;
    height         : 0;
    overflow       : hidden;
    padding-bottom : calc(100%/(var(--aspect-ratio)));
}

.video-container iframe,
.video-container object,
.video-container embed,
.video-container video {
    position : absolute;
    top      : 0;
    left     : 0;
    width    : 100%;
    height   : 100%;
}

/* ------------------------------------------------------------------- 
 * ## section header
 * ------------------------------------------------------------------- */
.section-header {
    padding-top   : var(--vspace-2_5);
    margin-bottom : var(--vspace-1_75);
    position      : relative;
}

.section-header__pretitle,
.section-header__primary,
.section-header__secondary {
    z-index  : 1;
    position : relative;
}

.section-header__pretitle {
    margin-bottom : var(--vspace-1_5);
}

.section-header__secondary {
    padding-right : calc(var(--gutter) * 2);
    padding-left  : calc(var(--gutter) * 2);
    margin-top    : var(--vspace-0_25);
}

.section-header .desc {
    font-family : var(--font-1);
    font-size   : calc(var(--text-size) * 1.1111);
    font-weight : 300;
    line-height : 1.8;
    color       : var(--color-text-light);
}

.section-header::before {
    content        : attr(data-num);
    font-family    : var(--font-2);
    font-weight    : 600;
    font-size      : 8em;
    letter-spacing : -0.03em;
    line-height    : 1;
    color          : var(--color-gray-9);
    position       : absolute;
    top            : 0;
    left           : var(--gutter);
}

.section-header.light-on-dark .title {
    color : white;
}

.section-header.light-on-dark .desc {
    color : var(--color-gray-15);
}

.section-header.light-on-dark::before {
    color   : var(--color-gray-18);
    opacity : .75;
}

/* ------------------------------------------------------------------- 
 * ## list block
 * ------------------------------------------------------------------- */
.list-block h3 {
    margin : 0;
}

.list-block .column:nth-child(2n + 1) {
    padding-right : 4.4rem;
}

.list-block .column:nth-child(2n + 2) {
    padding-left : 4.4rem;
}

.list-block.show-ctr {
    counter-reset : ctr;
}

.list-block__item {
    margin-bottom : var(--vspace-0_25);
}

.list-block__title {
    margin-bottom : var(--vspace-0_5);
}

.show-ctr .list-block__title::before {
    content           : counter(ctr, decimal-leading-zero) ".";
    counter-increment : ctr;
    display           : block;
    font-family       : var(--font-2);
    font-weight       : 600;
    font-size         : 1.25em;
    line-height       : 1;
    color             : var(--color-1);
    margin-bottom     : var(--vspace-0_25);
}

.list-block__icon {
    display          : flex;
    align-items      : center;
    justify-content  : center;
    height           : var(--vspace-1_75);
    width            : var(--vspace-1_75);
    border-radius    : 50%;
    background-color : var(--color-gray-6);
    margin-bottom    : var(--vspace-0_25);
}

.list-block__icon svg {
    height : var(--vspace-0_875);
    width  : var(--vspace-0_875);
}

.list-block__icon svg path,
.list-block__icon svg circle {
    fill : var(--color-1);
}

/* ------------------------------------------------------------------- 
 * ## swiper overrides
 * ------------------------------------------------------------------- */
.swiper-container .swiper-pagination-bullets .swiper-pagination-bullet {
    margin : 0 1.2rem;
}

.swiper-container .swiper-pagination-bullet {
    width      : 8px;
    height     : 8px;
    background : var(--color-gray-12);
    opacity    : 1;
}

.swiper-container .swiper-pagination-bullet-active {
    background : var(--color-gray-19);
    opacity    : 1;
}

/* ------------------------------------------------------------------- 
 * responsive:
 * project-wide and shared styles
 * ------------------------------------------------------------------- */
@media screen and (max-width: 1200px) {
    .section-header__secondary {
        padding-right : var(--gutter);
        padding-left  : var(--gutter);
    }

    .list-block .column:nth-child(2n + 1) {
        padding-right : var(--gutter);
    }

    .list-block .column:nth-child(2n + 2) {
        padding-left : var(--gutter);
    }
}

@media screen and (max-width: 600px) {
    .section-header::before {
        left : calc(var(--gutter) + 6vw);
    }
}

@media screen and (max-width: 500px) {
    .section-header {
        padding-top : var(--vspace-2);
    }

    .section-header .title {
        font-size : 3rem;
    }

    .section-header::before {
        font-size : 6.8em;
    }

    .list-block__icon {
        height : var(--vspace-1_5);
        width  : var(--vspace-1_5);
    }

    .list-block__icon svg {
        height : var(--vspace-0_875);
        width  : var(--vspace-0_875);
    }
}

@media screen and (max-width: 400px) {
    .section-header::before {
        left : 4.6vw;
    }

    .list-block .column:nth-child(2n + 1) {
        padding-right : 0;
    }

    .list-block .column:nth-child(2n + 2) {
        padding-left : 0;
    }
}


/* ===================================================================
 * # PAGE WRAP
 *
 *
 * ------------------------------------------------------------------- */
.s-pagewrap {
    display        : flex;
    flex-direction : column;
    min-height     : 100%;
    overflow       : hidden;
    position       : relative;
}


/* ===================================================================
 * # SITE HEADER
 *
 *
 * ------------------------------------------------------------------- */
.s-header {
    --header-height  : 80px;
    --logo-width     : 40px;
    z-index          : 100;
    background-color : transparent;
    height           : var(--header-height);
    width            : 100%;
    position         : absolute;
    top              : var(--vspace-0_5);
    left             : 0;
}

.s-header.offset {
    transform           : translateY(-100%);
    transition-property : transform, background-color;
    transition-duration : .5s;
}

.s-header.scrolling {
    transform : translateY(0);
}

.s-header.sticky {
    opacity          : 0;
    visibility       : hidden;
    background-color : var(--color-gray-19);
    position         : fixed;
    top              : 0;
    left             : 0;
}

.s-header.sticky .s-header__inner {
    max-width : var(--width-grid-max);
}

.s-header.sticky.scrolling {
    opacity    : 1;
    visibility : visible;
}

.s-header__inner {
    max-width   : 1400px;
    height      : var(--header-height);
    align-items : center;
    padding     : 0 var(--gutter);
}

.s-header__block {
    z-index : 101; 
    width: max-content;
}
.logBlock{
    
    width: auto;
}
/* --------------------------------------------------------------------
 * ## logo
 * -------------------------------------------------------------------- */
.s-header__logo {
    z-index     : 3;
    line-height : 1;
    transform   : translate(4px, 0);
}

.s-header__logo a {
    display : block;
    margin  : 0;
    padding : 0;
    outline : 0;
    border  : none;
}

.s-header__logo img {
    width          : var(--logo-width);
    margin         : 0;
    vertical-align : bottom;
}

/* --------------------------------------------------------------------
 * ## main navigation
 * -------------------------------------------------------------------- */
.s-header__nav {
    margin-left     : var(--vspace-1);
    display         : flex;
    flex            : 1 1 0%;
    align-items     : center;
    justify-content : space-between;
}

.s-header__menu-links {
    list-style : none;
    display    : inline-flex;
    flex-flow  : row nowrap;
    margin     : 0 4rem 0 0;
    padding    : 0;
}

.s-header__menu-links li {
    padding-left : 0;
}

.s-header__menu-links a {
    display             : block;
    font-family         : var(--font-2);
    font-size           : 1.4rem;
    font-weight         : 400;
    line-height         : var(--vspace-1);
    color               : rgba(255, 255, 255, 0.6);
    padding             : 0 1.2rem;
    transition-property : color, background-color;
}

.s-header__menu-links .current a {
    color : white;
}

/* --------------------------------------------------------------------
 * ## header social
 * -------------------------------------------------------------------- */
.s-header__social {
    list-style  : none;
    display     : flex;
    line-height : 1;
    margin      : 0;
}

.s-header__social li {
    padding-left : 0;
    margin-right : .8rem;
}

.s-header__social a {
    display : block;
}

.s-header__social svg {
    height : var(--vspace-0_75);
    width  : var(--vspace-0_75);
}

.s-header__social svg path {
    fill : white;
}

/* --------------------------------------------------------------------
 * ## mobile menu toggle
 * -------------------------------------------------------------------- */
.s-header__menu-toggle {
    display  : none;
    width    : 6.8rem;
    height   : var(--header-height);
    position : absolute;
    top      : 0;
    right    : 2.2rem;
}

.s-header__menu-toggle span {
    display          : block;
    background-color : white;
    width            : 22px;
    height           : 2px;
    margin-top       : -1px;
    font             : 0/0 a;
    text-shadow      : none;
    color            : transparent;
    transition       : background-color 0.2s ease-in-out;
    position         : absolute;
    right            : 23px;
    top              : 50%;
    bottom           : auto;
    left             : auto;
}

.s-header__menu-toggle span::before,
.s-header__menu-toggle span::after {
    content             : "";
    width               : 100%;
    height              : 100%;
    background-color    : inherit;
    transition-duration : 0.2s, 0.2s;
    transition-delay    : 0.2s, 0s;
    position            : absolute;
    left                : 0;
}

.s-header__menu-toggle span::before {
    top                 : -8px;
    transition-property : top, transform;
}

.s-header__menu-toggle span::after {
    bottom              : -8px;
    transition-property : bottom, transform;
}

/* is clicked 
 */
.s-header__menu-toggle.is-clicked span {
    background-color : rgba(255, 255, 255, 0);
}

.s-header__menu-toggle.is-clicked span::before,
.s-header__menu-toggle.is-clicked span::after {
    background-color : white;
    transition-delay : 0s, 0.2s;
}

.s-header__menu-toggle.is-clicked span::before {
    top       : 0;
    transform : rotate(45deg);
}

.s-header__menu-toggle.is-clicked span::after {
    bottom    : 0;
    transform : rotate(-45deg);
}

/* ------------------------------------------------------------------- 
 * responsive:
 * site-header
 * ------------------------------------------------------------------- */
@media screen and (max-width: 1600px) {
    .s-header__inner {
        max-width : var(--width-grid-max);
    }
}

@media screen and (max-width: 1100px) {
    .s-header__inner {
        max-width : 900px;
    }
}
@media screen and (min-width: 801px) {
    .s-header__block {
        width            : max-content;
    }
}
@media screen and (max-width: 800px) {
    .s-header {
        --logo-width : 36px;
        top          : var(--vspace-0_25);
    }

    .s-header__inner {
        max-width : none;
        width     : 100%;
        margin    : 0;
        padding   : 0;
    }

    .s-header__block {
        width            : 100%;
        height           : var(--header-height);
        background-color : transparent;
    }

    .s-header__logo {
        position  : absolute;
        left      : 0;
        top       : 50%;
        transform : translate(4rem, -50%);
    }

    .s-header__nav {
        transform        : scaleY(0);
        transform-origin : center top;
        display          : block;
        background-color : var(--color-gray-19);
        width            : 100%;
        padding-top      : calc(var(--header-height) + var(--vspace-1_25));
        padding-right    : 4.4rem;
        padding-left     : 4.4rem;
        padding-bottom   : 4rem;
        margin           : 0;
        position         : absolute;
        top              : calc(var(--vspace-0_5) * -1);
        left             : 0;
    }

    .s-header__nav a {
        display     : inline-block;
        font-size   : calc(var(--text-size) * 0.9444);
        line-height : 1;
        padding     : var(--vspace-0_5) 0;
    }

    .s-header__menu-links,
    .s-header__social {
        margin     : 0;
        transform  : translateY(-2rem);
        opacity    : 0;
        visibility : hidden;
    }

    .s-header__menu-links {
        display       : block;
        margin-bottom : var(--vspace-1);
    }

    .s-header__menu-toggle {
        display : block;
    }

    .menu-is-open .s-header {
        height : auto;
    }

    .menu-is-open .s-header__nav {
        transform        : scaleY(1);
        transition       : transform 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
        transition-delay : 0s;
    }

    .menu-is-open .s-header__menu-links,
    .menu-is-open .s-header__social {
        transform        : translateY(0);
        opacity          : 1;
        visibility       : visible;
        transition       : all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
        transition-delay : .4s;
    }
}

@media screen and (max-width: 500px) {
    .s-header.sticky {
        --header-height : 76px;
    }
}

@media screen and (max-width: 400px) {
    .s-header__logo {
        transform : translate(7vw, -50%);
    }

    .s-header__nav {
        padding-right : 7vw;
        padding-left  : 7vw;
    }

    .s-header__menu-toggle {
        right : 0.8rem;
    }
}


/* ===================================================================
 * # INTRO
 *
 *
 * ------------------------------------------------------------------- */
.s-intro {
    --content-padding-top    : 20vh;
    --content-padding-bottom : 9.6rem;
    z-index                  : 3;
    background-color         : #1C1C24;
    width                    : 100%;
    height                   : 100vh;
    min-height               : calc(25.5 * var(--space));
    overflow                 : hidden;
    position                 : relative;
}

/* --------------------------------------------------------------------
 * ## intro background
 * -------------------------------------------------------------------- */
.s-intro__bg {
    display             : block;
    /* background-image    : url(../images/hero-bg.jpg); */
    background-image    : url(images/carousel-2.jpg);
    background-repeat   : no-repeat;
    background-position : center;
    background-size     : cover;
    height              : 100vh;
    width               : calc(50% - 15vw);
    position            : absolute;
    top                 : 0;
    right               : 0;
    bottom              : 0;
    left                : auto;
}

.s-intro__bg::before {
    display        : block;
    content        : "";
    position       : absolute;
    top            : 0;
    left           : 0;
    right          : 0;
    bottom         : 0;
    width          : 100%;
    height         : 100%;
    background     : black;
    pointer-events : none;
    opacity        : .5;
}

.s-intro__bg::after {
    display        : block;
    content        : "";
    position       : absolute;
    top            : 0;
    left           : 0;
    right          : 0;
    bottom         : 0;
    width          : 100%;
    height         : 100%;
    background     : linear-gradient(0deg, black 15%, rgba(0, 0, 0, 0) 100%);
    pointer-events : none;
    opacity        : .3;
}

/* --------------------------------------------------------------------
 * ## intro content
 * -------------------------------------------------------------------- */
.s-intro__content {
    z-index        : 2;
    align-items    : flex-end;
    max-width      : 1400px;
    height         : 100%;
    color          : white;
    padding-top    : var(--content-padding-top);
    padding-bottom : var(--content-padding-bottom);
    position       : relative;
}

.s-intro__content-bg {
    display             : block;
    /* background-image    : url(../images/intro-bg.jpg); */
    background-image    : url(images/team-4.jpg);
    background-repeat   : no-repeat;
    background-position : center;
    background-size     : cover;
    width               : 500px;
    position            : absolute;
    top                 : var(--content-padding-top);
    right               : var(--gutter);
    bottom              : var(--content-padding-bottom);
    left                : auto;
}

.s-intro__content-bg::before {
    display        : block;
    content        : "";
    position       : absolute;
    top            : 0;
    left           : 0;
    right          : 0;
    bottom         : 0;
    width          : 100%;
    height         : 100%;
    background     : linear-gradient(90deg, black 20%, rgba(0, 0, 0, 0) 100%);
    pointer-events : none;
    opacity        : 0;
}

.s-intro__content-title {
    --text-title-size : 8.8rem;
    --text-multiplier : 1;
    font-weight       : 600;
    font-size         : calc(var(--text-title-size) * var(--text-multiplier));
    line-height       : 1.227;
    color             : white;
    padding-top       : var(--vspace-0_75);
    padding-right     : 10vw;
    margin-top        : 0;
    margin-bottom     : var(--vspace-2);
    position          : relative;
}

.s-intro__content-title::before {
    display          : block;
    content          : "";
    height           : 1px;
    width            : 7.2rem;
    background-color : var(--color-1);
    position         : absolute;
    top              : 0;
    left             : 4px;
}

.s-intro__content-buttons {
    z-index       : 2;
    display       : flex;
    margin-bottom : var(--vspace-1);
    position      : relative;
}

.s-intro__content-btn {
    color            : white;
    background-color : white;
    border-color     : white;
    margin-right     : var(--vspace-1);
    margin-bottom    : 0;
}

.s-intro__content-video-btn {
    height          : var(--vspace-btn);
    width           : var(--vspace-btn);
    border          : 2px solid white;
    border-radius   : 50%;
    display         : flex;
    align-items     : center;
    justify-content : center;
}

.s-intro__content-video-btn svg {
    height    : var(--vspace-1);
    width     : var(--vspace-1);
    transform : translate(2px, 0);
}

.s-intro__content-video-btn svg path {
    fill : white;
}

.s-intro__content-video-btn:focus,
.s-intro__content-video-btn:hover {
    background-color : var(--color-1);
    border-color     : var(--color-1);
}

.s-intro__content-video-btn:focus svg path,
.s-intro__content-video-btn:hover svg path {
    fill : white;
}

/* --------------------------------------------------------------------
 * ## intro scroll down
 * -------------------------------------------------------------------- */
.s-intro__scroll-down {
    z-index          : 2;
    display          : flex;
    align-items      : center;
    transform        : translateX(-7.6rem) rotate(90deg);
    transform-origin : right bottom;
    padding-right    : var(--content-padding-bottom);
    position         : absolute;
    bottom           : 0;
    right            : 0;
}

.s-intro__scroll-down span {
    font-family    : var(--font-2);
    font-size      : 10px;
    font-weight    : 300;
    text-transform : uppercase;
    letter-spacing : .5em;
    color          : white;
    line-height    : var(--vspace-1);
}

.s-intro__scroll-down::before {
    display          : block;
    content          : "";
    height           : 1px;
    width            : calc(var(--content-padding-bottom) - 1.6rem);
    background-color : rgba(255, 255, 255, 0.3);
    position         : absolute;
    top              : 50%;
    right            : 0;
}

.s-intro__scroll-down:focus,
.s-intro__scroll-down:hover {
    color : var(--color-1);
}

/* --------------------------------------------------------------------
 * ## intro transitions
 * -------------------------------------------------------------------- */
.s-header__inner,
.s-intro__bg,
.s-intro__content-bg,
.s-intro__content-title,
.s-intro__content-buttons,
.s-intro__scroll-down {
    transition-timing-function : cubic-bezier(0.28, 0.12, 0.22, 1);
    transition-duration        : .8s;
    transition-delay           : 0s;
    opacity                    : 0;
}

.s-header__inner,
.s-intro__bg {
    transition-duration : .6s;
}

.s-header__inner {
    transition-property : opacity;
}

.s-intro__content-bg,
.s-intro__content-title,
.s-intro__content-buttons {
    transition-property : opacity, transform;
    transform           : translate(0, 100%);
}

.s-intro__scroll-down {
    transition-property : opacity, bottom;
    bottom              : -150px;
}

.no-js .s-intro__bg,
.no-js .s-intro__scroll-down,
.ss-show .s-intro__bg,
.ss-show .s-intro__scroll-down {
    opacity : 1;
}

.no-js .s-header__inner,
.no-js .s-intro__content-bg,
.no-js .s-intro__content-title,
.no-js .s-intro__content-buttons,
.ss-show .s-header__inner,
.ss-show .s-intro__content-bg,
.ss-show .s-intro__content-title,
.ss-show .s-intro__content-buttons {
    opacity   : 1;
    transform : translate(0, 0);
}

.no-js .s-intro__bg,
.ss-show .s-intro__bg {
    transition-delay : .2s;
}

.no-js .s-intro__content-bg,
.ss-show .s-intro__content-bg {
    transition-delay : .4s;
}

.no-js .s-intro__content-title,
.ss-show .s-intro__content-title {
    transition-delay : .8s;
}

.no-js .s-intro__content-buttons,
.ss-show .s-intro__content-buttons {
    transition-delay : 1.2s;
}

.no-js .s-intro__scroll-down,
.ss-show .s-intro__scroll-down {
    transition-delay : 1.4s;
    bottom           : 0;
}

/* ------------------------------------------------------------------- 
 * responsive:
 * intro
 * ------------------------------------------------------------------- */
@media screen and (max-width: 1600px) {
    .s-intro__content {
        max-width : var(--width-grid-max);
    }

    .s-intro__content-title {
        --text-multiplier : .86;
    }
}

@media screen and (max-width: 1400px) {
    .s-intro__content {
        max-width : 1080px;
    }

    .s-intro__content-bg {
        width : 440px;
    }

    .s-intro__content-title {
        --text-multiplier : .74;
    }
}

@media screen and (max-width: 1200px) {
    .s-intro__content {
        max-width : 960px;
    }

    .s-intro__content-title {
        --text-multiplier : .68;
    }
}

@media screen and (max-width: 1100px) {
    .s-intro__content {
        max-width : 900px;
    }

    .s-intro__scroll-down {
        transform : translateX(-5.6rem) rotate(90deg);
    }
}

@media screen and (max-width: 1000px) {
    .s-intro__content-title br {
        display : none;
    }

    .s-intro__scroll-down {
        transform : translateX(-12rem) rotate(90deg);
    }
}

@media screen and (max-width: 900px) {
    .s-intro__content-title {
        --text-multiplier : .62;
    }

    .s-intro__content-bg {
        width : 420px;
    }
}

@media screen and (max-width: 800px) {
    .s-intro__content-title {
        --text-multiplier : .58;
    }

    .s-intro__content-title::before {
        width : var(--vspace-1_25);
    }
}

@media screen and (max-width: 700px) {
    .s-intro__content-title {
        --text-multiplier : .5;
    }
}

@media screen and (max-width: 600px) {
    .s-intro__content-bg {
        width  : 67vw;
        right  : 0;
        bottom : 0;
    }

    .s-intro__content-bg::before {
        opacity : .5;
    }

    .s-intro__scroll-down {
        transform : translateX(-4.8rem) rotate(90deg);
    }
}

@media screen and (max-width: 500px) {
    .s-intro__content-title {
        --text-multiplier : .48;
    }

    .s-intro__social {
        display : none;
    }
}

@media screen and (max-width: 400px) {
    .s-intro {
        --content-padding-top : 15vh;
    }

    .s-intro__content-bg {
        width : 90vw;
    }

    .s-intro__content-title {
        --text-multiplier : .42;
        padding-right     : 0;
    }

    .s-intro__content-buttons {
        --btn-height : var(--vspace-1_5);
    }

    .s-intro__content-btn {
        font-size    : 1rem;
        padding      : 0 2.8rem;
        margin-right : var(--vspace-0_625);
    }

    .s-intro__scroll-down {
        display : none;
    }
}


/* ===================================================================
 * # ABOUT
 *
 *
 * ------------------------------------------------------------------- */
.s-about {
    padding-top    : var(--vspace-5);
    padding-bottom : var(--vspace-5);
}

/* ------------------------------------------------------------------- 
 * responsive:
 * about
 * ------------------------------------------------------------------- */
@media screen and (max-width: 800px) {
    .s-about {
        padding-top    : var(--vspace-4);
        padding-bottom : var(--vspace-4_5);
    }
}


/* ===================================================================
 * # SERVICES
 *
 *
 * ------------------------------------------------------------------- */
.s-services {
    background-color : var(--color-gray-2);
    padding-top      : var(--vspace-5);
    padding-bottom   : var(--vspace-5);
}

.s-services .list-block__item {
    margin-bottom : 0;
}

/* ------------------------------------------------------------------- 
 * responsive:
 * services
 * ------------------------------------------------------------------- */
@media screen and (max-width: 800px) {
    .s-services {
        padding-top    : var(--vspace-4);
        padding-bottom : var(--vspace-4_5);
    }
}


/* ===================================================================
 * # PORTFOLIO
 *
 *
 * ------------------------------------------------------------------- */
.s-folio {
    background-color : var(--color-gray-19);
    padding-top      : var(--vspace-5);
    padding-bottom   : var(--vspace-5);
}

/* ------------------------------------------------------------------- 
 * ## bricks masonry 
 * ------------------------------------------------------------------- */
.bricks {
    max-width     : var(--width-wide);
    margin-top    : var(--vspace-3);
    margin-bottom : var(--vspace-3);
}

.bricks .masonry {
    overflow : hidden;
}

.bricks-wrapper {
    display  : block;
    position : relative;
}

.bricks-wrapper .grid-sizer,
.bricks-wrapper .brick {
    width : 25%;
}

.bricks-wrapper .grid-sizer--double,
.bricks-wrapper .brick--double {
    width : 50%;
}

.bricks-wrapper .brick {
    float   : left;
    padding : 0;
}

/* ------------------------------------------------------------------- 
 * ## masonry entries 
 * ------------------------------------------------------------------- */
.bricks-wrapper .entry {
    overflow : hidden;
    position : relative;
}

.bricks-wrapper .entry__link {
    display  : block;
    position : relative;
}

.bricks-wrapper .entry__link img {
    vertical-align : bottom;
    transition     : all 0.3s ease-in-out;
    margin         : 0;
}

.bricks-wrapper .entry__link::before {
    z-index    : 1;
    content    : "";
    display    : block;
    background : rgba(0, 0, 0, 0.6);
    opacity    : 0;
    visibility : hidden;
    width      : 100%;
    height     : 100%;
    transition : all, 0.5s cubic-bezier(0.215, 0.61, 0.355, 1);
    position   : absolute;
    top        : 0;
    left       : 0;
}

.bricks-wrapper .entry__link::after {
    z-index        : 1;
    display        : block;
    content        : "...";
    font-family    : georgia, serif;
    font-size      : 2.4rem;
    height         : 90px;
    width          : 90px;
    letter-spacing : .2rem;
    line-height    : 90px;
    margin-left    : -45px;
    margin-top     : -55px;
    text-align     : center;
    color          : white;
    opacity        : 0;
    visibility     : hidden;
    transform      : scale(0.5);
    transition     : all, 0.5s cubic-bezier(0.215, 0.61, 0.355, 1);
    position       : absolute;
    left           : 50%;
    top            : 50%;
}

.bricks-wrapper .entry {
    position : relative;
}

.bricks-wrapper .entry__info {
    z-index    : 2;
    transform  : translateY(-100%);
    opacity    : 0;
    visibility : hidden;
    transition : all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1);
    position   : absolute;
    top        : var(--vspace-0_75);
    left       : var(--vspace-0_75);
}

.bricks-wrapper .entry__cat,
.bricks-wrapper .entry__title {
    font-family : var(--font-2);
}

.bricks-wrapper .entry__cat {
    font-size   : calc(var(--text-size) * 0.7778);
    line-height : 1.8;
    color       : rgba(255, 255, 255, 0.3);
}

.bricks-wrapper .entry__title {
    font-weight : 500;
    font-size   : calc(var(--text-size) * 0.9444);
    line-height : 1.2;
    margin      : 0;
    color       : white;
}

/* on hover
 */
.bricks-wrapper .entry:hover .entry__link::before {
    opacity    : 1;
    visibility : visible;
}

.bricks-wrapper .entry:hover .entry__link::after {
    opacity    : 1;
    visibility : visible;
    transform  : scale(1);
}

.bricks-wrapper .entry:hover .entry__link img {
    transform : scale(1.05);
}

.bricks-wrapper .entry:hover .entry__info {
    opacity    : 1;
    visibility : visible;
    transform  : translateY(0);
}

/* ------------------------------------------------------------------- 
 * ## modal popup
 * ------------------------------------------------------------------- */
.modal-popup {
    max-width        : 680px;
    background-color : white;
    font-size        : calc(var(--text-size) * 0.9447);
    line-height      : var(--vspace-0_875);
    color            : rgba(0, 0, 0, 0.75);
    overflow-y       : auto;
    position         : relative;
}

.modal-popup img {
    margin-bottom : var(--vspace-0_75);
}

.modal-popup h5 {
    font-family   : var(--font-1);
    font-size     : var(--text-size);
    line-height   : var(--vspace-1);
    font-weight   : 500;
    color         : black;
    margin-top    : 0;
    margin-bottom : var(--vspace-0_25);
}

.modal-popup__desc {
    padding : 0 var(--vspace-1_25) var(--vspace-0_25);
}

.modal-popup__cat {
    list-style   : none;
    margin-left  : 0;
    font-size    : var(--text-sm);
    line-height  : var(--vspace-0_5);
    color        : rgba(0, 0, 0, 0.6);
    padding-left : calc(0.875 * var(--space));
    position     : relative;
}

.modal-popup__cat::before {
    content             : "";
    display             : block;
    height              : calc(0.625 * var(--space));
    width               : calc(0.625 * var(--space));
    background-repeat   : no-repeat;
    background-position : center;
    background-size     : contain;
    /* background-image    : url(../images/icons/icon-tag.svg); */
    background-image    : url(images/icons/icon-tag.svg);
    position            : absolute;
    left                : 0;
    top                 : -0.15em;
}

.modal-popup__cat li {
    display      : inline;
    padding-left : 0;
}

.modal-popup__cat li::after {
    content : ", ";
}

.modal-popup__cat li:last-child::after {
    display : none;
}

.modal-popup__details {
    background-color : rgba(0, 0, 0, 0.3);
    font-size        : var(--text-xs);
    line-height      : var(--vspace-1_25);
    color            : white;
    padding          : 0 1.2rem;
    position         : absolute;
    top              : var(--vspace-1);
    left             : var(--vspace-1);
}

.modal-popup__details:focus,
.modal-popup__details:hover {
    background-color : var(--color-gray-19);
    color            : white;
}

/* ------------------------------------------------------------------- 
 * responsive:
 * portfolio
 * ------------------------------------------------------------------- */
@media screen and (max-width: 1200px) {
    .bricks-wrapper .entry__cat {
        font-size : calc(var(--text-size) * 0.6667);
    }

    .bricks-wrapper .entry__title {
        font-size : calc(var(--text-size) * 0.8333);
    }
}

@media screen and (max-width: 1000px) {

    .bricks-wrapper .grid-sizer,
    .bricks-wrapper .brick {
        width : 50%;
    }
}

@media screen and (max-width: 800px) {
    .s-folio {
        padding-top    : var(--vspace-4);
        padding-bottom : var(--vspace-4_5);
    }

    .bricks {
        margin-top    : var(--vspace-1_75);
        margin-bottom : var(--vspace-2);
    }
}

@media screen and (max-width: 550px) {

    .bricks-wrapper .grid-sizer,
    .bricks-wrapper .brick {
        width : 100%;
        float : none;
    }
}


/* ===================================================================
 * # CLIENTS
 *
 *
 * ------------------------------------------------------------------- */
.s-clients {
    padding-top : var(--vspace-2);
}

.s-clients .section-header {
    max-width    : var(--width-narrower);
    text-align   : center;
    padding-top  : 0;
    margin-right : auto;
    margin-left  : auto;
}

.s-clients .section-header::before {
    display : none;
}

.s-clients h3 {
    color      : white;
    text-align : center;
    margin-top : 0;
}

.clients-list {
    position   : relative;
    margin-top : var(--vspace-2);
    border-top : 1px solid rgba(255, 255, 255, 0.05);
}

.clients-list__item {
    border-color : rgba(255, 255, 255, 0.05);
    border-width : 1px;
    text-align   : center;
    padding      : 0;
}

.clients-list__item a {
    display    : block;
    padding    : var(--vspace-0_75) var(--vspace-0_75);
    transition : all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.clients-list__item a:focus,
.clients-list__item a:hover {
    background-color : var(--color-gray-18);
}

.clients-list__item a:focus img,
.clients-list__item a:hover img {
    opacity : 1;
}

.clients-list__item img {
    margin     : 0;
    transition : all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1);
    opacity    : .5;
}

.clients-list__item:nth-child(n) {
    border-style : none solid solid none;
}

.clients-list__item:nth-child(4n + 4) {
    border-style : none none solid none;
}

/* ------------------------------------------------------------------- 
 * responsive:
 * clients
 * ------------------------------------------------------------------- */
@media screen and (max-width: 1200px) {
    .clients-list__item a {
        padding : var(--vspace-0_75) var(--vspace-1);
    }

    .clients-list__item:nth-child(n) {
        border-style : none solid solid none;
    }

    .clients-list__item:nth-child(3n + 3) {
        border-style : none none solid none;
    }
}

@media screen and (max-width: 1000px) {
    .clients-list__item a {
        padding : var(--vspace-0_75) var(--vspace-0_625);
    }
}

@media screen and (max-width: 800px) {
    .clients-list__item a {
        padding : var(--vspace-0_75) var(--vspace-1);
    }

    .clients-list__item:nth-child(n) {
        border-style : none solid solid none;
    }

    .clients-list__item:nth-child(2n + 2) {
        border-style : none none solid none;
    }
}

@media screen and (max-width: 600px) {
    .clients-list__item a {
        padding : var(--vspace-0_5) var(--vspace-0_625);
    }
}

@media screen and (max-width: 500px) {
    .clients-list {
        margin-top : var(--vspace-1_75);
    }

    .clients-list__item a {
        padding : var(--vspace-0_5) var(--vspace-0_375);
    }
}

@media screen and (max-width: 400px) {
    .clients-list__item:nth-child(n) {
        border-style : none none solid none;
    }

    .clients-list__item a {
        padding : var(--vspace-0_5) 18vw;
    }
}


/* ===================================================================
 * # TESTIMONIALS
 *
 *
 * ------------------------------------------------------------------- */
.s-testimonials {
    padding-top    : var(--vspace-4_5);
    padding-bottom : var(--vspace-4);
}

.s-testimonials .swiper-container {
    padding-bottom : var(--vspace-2);
}

/* ------------------------------------------------------------------- 
 * ## testimonial slider 
 * ------------------------------------------------------------------- */
.s-testimonials__slide {
    position : relative;
}

.s-testimonials__author {
    display       : inline-block;
    min-height    : var(--vspace-2);
    margin-bottom : var(--vspace-0_625);
    padding-left  : calc(2.25 * var(--space));
    position      : relative;
}

.s-testimonials__avatar {
    width         : var(--vspace-1_75);
    height        : var(--vspace-1_75);
    border-radius : 100%;
    outline       : none;
    position      : absolute;
    top           : 0;
    left          : 0;
}

.s-testimonials__cite {
    display : block;
}

.s-testimonials__cite strong,
.s-testimonials__cite span {
    font-style : normal;
    transition : all 0.3s ease-in-out;
}

.s-testimonials__cite strong {
    font-size   : calc(var(--text-size) * 0.9444);
    font-weight : 500;
    line-height : var(--vspace-0_75);
    color       : var(--color-text-dark);
}

.s-testimonials__cite span {
    display     : block;
    font-size   : var(--text-xs);
    font-weight : 400;
    line-height : var(--vspace-0_5);
    color       : var(--color-text-light);
}

/* ------------------------------------------------------------------- 
 * responsive:
 * testimonials
 * ------------------------------------------------------------------- */
@media screen and (max-width: 1200px) {
    .s-testimonials__content {
        max-width : 960px;
    }
}

@media screen and (max-width: 800px) {
    .s-testimonials__content {
        max-width : 600px;
    }

    .s-testimonials__slide {
        text-align : center;
    }

    .s-testimonials__cite {
        text-align : left;
    }
}


/* ===================================================================
 * # FOOTER
 *
 *
 * ------------------------------------------------------------------- */
.s-footer {
    background-color : var(--color-gray-2);
    padding-top      : calc(5.5 * var(--space));
    padding-bottom   : var(--vspace-3);
    margin-top       : auto;
    position         : relative;
}

.s-footer h6 {
    margin-top : 0;
}

.s-footer__btns {
    margin-top  : var(--vspace-3_5);
    align-items : flex-start;
}

.s-footer .contact-list {
    list-style  : none;
    margin-left : 0;
}

.s-footer .contact-list a {
    color : var(--color-text);
}

.s-footer .contact-list a:focus,
.s-footer .contact-list a:hover {
    color : var(--color-1);
}

.s-footer .contact-list li {
    padding-left : 0;
}

.s-footer__bottom {
    border-top  : 1px solid var(--color-gray-10);
    margin-top  : var(--vspace-2);
    padding-top : var(--vspace-1);
}

.s-footer__bottom-left {
    padding-right : 4.4rem;
}

.s-footer__bottom-right {
    padding-left : 4.4rem;
}

/* ------------------------------------------------------------------- 
 * ## contact btn
 * ------------------------------------------------------------------- */
.s-footer__contact-btn {
    --color-btn-primary       : var(--color-gray-19);
    --color-btn-primary-hover : var(--color-1);
    padding-top               : calc(var(--vspace-0_75) + var(--vspace-0_75));
    padding-bottom            : var(--vspace-0_5);
}

.s-footer__contact-btn .btn {
    --btn-height : 7.2rem;
    margin       : 0;
}

/* ------------------------------------------------------------------- 
 * ## subscription form
 * ------------------------------------------------------------------- */
.s-footer__subscribe {
    --input-height : 7.2rem;
    --btn-width    : 180px;
}

.s-footer__subscribe h6 {
    margin-bottom : var(--vspace-0_75);
}

.s-footer__subscribe form {
    display       : flex;
    flex-flow     : row wrap;
    margin-bottom : 0;
}

.s-footer__subscribe input[type="email"],
.s-footer__subscribe input[type="submit"],
.s-footer__subscribe .ms-status {
    flex : none;
}

.s-footer__subscribe input[type="email"] {
    --input-height   : 7.2rem;
    width            : calc(100% - var(--btn-width));
    background-color : var(--color-gray-6);
    color            : var(--color-text);
    border           : none;
    padding          : var(--input-vpadding) calc(2.8rem - 1px);
    text-align       : left;
    margin           : 0;
}

.s-footer__subscribe input[type="email"]:focus,
.s-footer__subscribe input[type="email"]:hover {
    box-shadow : none;
}

.s-footer__subscribe input[type="submit"] {
    --btn-height : var(--input-height);
    width        : var(--btn-width);
    margin       : 0;
}

.s-footer__subscribe .mc-status {
    width       : 100%;
    margin-top  : var(--vspace-0_5);
    font-size   : var(--text-sm);
    font-weight : 400;
    color       : var(--color-1);
}

/* ------------------------------------------------------------------- 
 * ## footer social
 * ------------------------------------------------------------------- */
.s-footer__social {
    list-style  : none;
    display     : flex;
    margin-left : 0;
}

.s-footer__social li {
    padding-left : 0;
    margin-right : .8rem;
}

.s-footer__social svg {
    height : var(--vspace-1);
    width  : var(--vspace-1);
}

.s-footer__social svg path {
    fill : var(--color-text);
}

/* ------------------------------------------------------------------- 
 * ## copyright
 * ------------------------------------------------------------------- */
.ss-copyright span {
    font-size   : calc(var(--text-size) * 0.8889);
    line-height : var(--vspace-1);
    display     : inline-block;
}

.ss-copyright span::after {
    content : "·";
    display : inline-block;
    padding : 0 1rem 0 1.2rem;
    color   : var(--color-gray-19);
}

.ss-copyright span:last-child::after {
    display : none;
}

/* ------------------------------------------------------------------- 
 * ## go top
 * ------------------------------------------------------------------- */
.ss-go-top {
    z-index    : 2;
    opacity    : 0;
    visibility : hidden;
    transform  : translate(0, 200%);
    transition : all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1);
    position   : fixed;
    bottom     : 6rem;
    right      : 4rem;
}

.ss-go-top a {
    display          : flex;
    align-items      : center;
    justify-content  : center;
    text-decoration  : none;
    border           : none;
    height           : calc(1.875 * var(--space));
    width            : calc(1.875 * var(--space));
    border-radius    : 50%;
    background-color : #0C0C0C;
    transition       : all .3s;
    position         : relative;
}

.ss-go-top a:focus svg path,
.ss-go-top a:hover svg path {
    fill : white;
}

.ss-go-top svg {
    height : var(--vspace-0_75);
    width  : var(--vspace-0_75);
}

.ss-go-top svg path {
    fill : white;
}

.ss-go-top.link-is-visible {
    opacity    : 1;
    visibility : visible;
    transform  : translate(0, 0);
}

/* ------------------------------------------------------------------- 
 * responsive:
 * footer
 * ------------------------------------------------------------------- */
@media screen and (max-width: 1200px) {
    .s-footer__bottom-left {
        padding-right : var(--gutter);
    }

    .s-footer__bottom-right {
        padding-left : var(--gutter);
    }
}

@media screen and (max-width: 1000px) {
    .s-footer__btns {
        margin-top : var(--vspace-1);
    }

    .s-footer__contact-btn {
        margin-bottom : var(--vspace-0_5);
    }
}

@media screen and (max-width: 800px) {
    .s-footer {
        padding-top    : var(--vspace-4);
        padding-bottom : var(--vspace-2_5);
    }

    .ss-go-top {
        right  : var(--vspace-1);
        bottom : var(--vspace-1);
    }

    .ss-go-top a {
        height : var(--vspace-1_75);
        width  : var(--vspace-1_75);
    }

    .ss-go-top svg {
        height : var(--vspace-0_625);
        width  : var(--vspace-0_625);
    }
}

@media screen and (max-width: 600px) {
    .s-footer__subscribe form {
        display : block;
    }

    .s-footer__subscribe input[type="email"],
    .s-footer__subscribe input[type="submit"] {
        width      : 100%;
        text-align : center;
    }

    .s-footer__subscribe input[type="email"] {
        margin-bottom : var(--vspace-0_625);
    }

    .ss-go-top {
        right  : var(--vspace-0_75);
        bottom : var(--vspace-0_75);
    }
}

@media screen and (max-width: 400px) {
    .s-footer__bottom-left {
        padding-right : 0;
    }

    .s-footer__bottom-right {
        padding-left : 0;
    }

    .ss-go-top a {
        height : var(--vspace-1_5);
        width  : var(--vspace-1_5);
    }
}
</style>
    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="tooth.png">
    <link rel="icon" type="image/png" sizes="32x32" href="tooth.png">
    <link rel="icon" type="image/png" sizes="16x16" href="tooth.png">
    <link rel="manifest" href="site.webmanifest">

</head>


<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap">


        <!-- # site header 
        ================================================== -->
        <header class="s-header">

            <div style="flex-wrap:nowrap" class="row s-header__inner">

                <div class="s-header__block  logBlock" style="">
                    <div class="s-header__logo">
                        <a class="logo" href="index.html">
                            <img src="images/tooth.png" alt="Homepage">
                        </a>
                    </div>

                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->

                <nav class="s-header__nav">
    
                    <ul class="s-header__menu-links">
                        <li class="current"><a href="#intro" class="smoothscroll">Acceuil</a></li> 
                        <li><a href="#" class="smoothscroll">Services</a></li>
                        <li><a href="#" class="smoothscroll">tarification</a></li>
                        <li><a href="#" class="smoothscroll">Contact</a></li>
                    </ul> <!-- s-header__menu-links -->

                    <ul class="s-header__social">
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                                <span class="u-screen-reader-text">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                                <span class="u-screen-reader-text">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                <span class="u-screen-reader-text">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z"></path></svg>
                                <span class="u-screen-reader-text">Dribbble</span>
                            </a>
                        </li>
                    </ul> <!-- s-header__social -->
    
                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->

        </header> <!-- end s-header -->


        <!-- # site-content
        ================================================== -->
        <section id="content" class="s-content">


            <!-- intro
            ----------------------------------------------- -->
            <section id="intro" class="s-intro target-section">

                <div class="s-intro__bg"></div>

                <div class="row s-intro__content">

                    <div class="s-intro__content-bg"></div>

                    <div class="column lg-12 s-intro__content-inner">
                        
                        <h1 class="s-intro__content-title">
                        Take The Best <br>
                        Quality Dental <br>
                        Treatment.
                        </h1>
                         
                        <div class="s-intro__content-buttons">
                            <a href="#download" class="btn btn--stroke s-intro__content-btn smoothscroll">Contact Us</a>
                          
                        </div>
                        
                    </div> <!-- s-intro__content-inner -->

                </div> <!-- s-intro__content -->

                <div class="s-intro__scroll-down">
                    <a href="#about" class="smoothscroll">
                        <span>Scroll Down</span>
                    </a>
                </div> <!-- s-intro__scroll-down -->

            </section> <!-- end s-intro -->


        </section>  <!-- end content -->


    <!-- Java Script
    ================================================== -->
    <script >
        /* ===================================================================
 * Mueller 1.0.0 - Main JS
 *
 * ------------------------------------------------------------------- */
/* ===================================================================
 * javascript plugins
 *
 * ------------------------------------------------------------------- */


/* PrismJS 1.20.0
 * https://prismjs.com/download.html#themes=prism&languages=markup+css+clike+javascript+markup-templating+php 
 */
 var _self="undefined"!=typeof window?window:"undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?self:{},Prism=function(u){var c=/\blang(?:uage)?-([\w-]+)\b/i,n=0,C={manual:u.Prism&&u.Prism.manual,disableWorkerMessageHandler:u.Prism&&u.Prism.disableWorkerMessageHandler,util:{encode:function e(n){return n instanceof _?new _(n.type,e(n.content),n.alias):Array.isArray(n)?n.map(e):n.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/\u00a0/g," ")},type:function(e){return Object.prototype.toString.call(e).slice(8,-1)},objId:function(e){return e.__id||Object.defineProperty(e,"__id",{value:++n}),e.__id},clone:function t(e,r){var a,n,l=C.util.type(e);switch(r=r||{},l){case"Object":if(n=C.util.objId(e),r[n])return r[n];for(var i in a={},r[n]=a,e)e.hasOwnProperty(i)&&(a[i]=t(e[i],r));return a;case"Array":return n=C.util.objId(e),r[n]?r[n]:(a=[],r[n]=a,e.forEach(function(e,n){a[n]=t(e,r)}),a);default:return e}},getLanguage:function(e){for(;e&&!c.test(e.className);)e=e.parentElement;return e?(e.className.match(c)||[,"none"])[1].toLowerCase():"none"},currentScript:function(){if("undefined"==typeof document)return null;if("currentScript"in document)return document.currentScript;try{throw new Error}catch(e){var n=(/at [^(\r\n]*\((.*):.+:.+\)$/i.exec(e.stack)||[])[1];if(n){var t=document.getElementsByTagName("script");for(var r in t)if(t[r].src==n)return t[r]}return null}}},languages:{extend:function(e,n){var t=C.util.clone(C.languages[e]);for(var r in n)t[r]=n[r];return t},insertBefore:function(t,e,n,r){var a=(r=r||C.languages)[t],l={};for(var i in a)if(a.hasOwnProperty(i)){if(i==e)for(var o in n)n.hasOwnProperty(o)&&(l[o]=n[o]);n.hasOwnProperty(i)||(l[i]=a[i])}var s=r[t];return r[t]=l,C.languages.DFS(C.languages,function(e,n){n===s&&e!=t&&(this[e]=l)}),l},DFS:function e(n,t,r,a){a=a||{};var l=C.util.objId;for(var i in n)if(n.hasOwnProperty(i)){t.call(n,i,n[i],r||i);var o=n[i],s=C.util.type(o);"Object"!==s||a[l(o)]?"Array"!==s||a[l(o)]||(a[l(o)]=!0,e(o,t,i,a)):(a[l(o)]=!0,e(o,t,null,a))}}},plugins:{},highlightAll:function(e,n){C.highlightAllUnder(document,e,n)},highlightAllUnder:function(e,n,t){var r={callback:t,container:e,selector:'code[class*="language-"], [class*="language-"] code, code[class*="lang-"], [class*="lang-"] code'};C.hooks.run("before-highlightall",r),r.elements=Array.prototype.slice.apply(r.container.querySelectorAll(r.selector)),C.hooks.run("before-all-elements-highlight",r);for(var a,l=0;a=r.elements[l++];)C.highlightElement(a,!0===n,r.callback)},highlightElement:function(e,n,t){var r=C.util.getLanguage(e),a=C.languages[r];e.className=e.className.replace(c,"").replace(/\s+/g," ")+" language-"+r;var l=e.parentNode;l&&"pre"===l.nodeName.toLowerCase()&&(l.className=l.className.replace(c,"").replace(/\s+/g," ")+" language-"+r);var i={element:e,language:r,grammar:a,code:e.textContent};function o(e){i.highlightedCode=e,C.hooks.run("before-insert",i),i.element.innerHTML=i.highlightedCode,C.hooks.run("after-highlight",i),C.hooks.run("complete",i),t&&t.call(i.element)}if(C.hooks.run("before-sanity-check",i),!i.code)return C.hooks.run("complete",i),void(t&&t.call(i.element));if(C.hooks.run("before-highlight",i),i.grammar)if(n&&u.Worker){var s=new Worker(C.filename);s.onmessage=function(e){o(e.data)},s.postMessage(JSON.stringify({language:i.language,code:i.code,immediateClose:!0}))}else o(C.highlight(i.code,i.grammar,i.language));else o(C.util.encode(i.code))},highlight:function(e,n,t){var r={code:e,grammar:n,language:t};return C.hooks.run("before-tokenize",r),r.tokens=C.tokenize(r.code,r.grammar),C.hooks.run("after-tokenize",r),_.stringify(C.util.encode(r.tokens),r.language)},tokenize:function(e,n){var t=n.rest;if(t){for(var r in t)n[r]=t[r];delete n.rest}var a=new l;return M(a,a.head,e),function e(n,t,r,a,l,i,o){for(var s in r)if(r.hasOwnProperty(s)&&r[s]){var u=r[s];u=Array.isArray(u)?u:[u];for(var c=0;c<u.length;++c){if(o&&o==s+","+c)return;var g=u[c],f=g.inside,h=!!g.lookbehind,d=!!g.greedy,v=0,p=g.alias;if(d&&!g.pattern.global){var m=g.pattern.toString().match(/[imsuy]*$/)[0];g.pattern=RegExp(g.pattern.source,m+"g")}g=g.pattern||g;for(var y=a.next,k=l;y!==t.tail;k+=y.value.length,y=y.next){var b=y.value;if(t.length>n.length)return;if(!(b instanceof _)){var x=1;if(d&&y!=t.tail.prev){g.lastIndex=k;var w=g.exec(n);if(!w)break;var A=w.index+(h&&w[1]?w[1].length:0),P=w.index+w[0].length,S=k;for(S+=y.value.length;S<=A;)y=y.next,S+=y.value.length;if(S-=y.value.length,k=S,y.value instanceof _)continue;for(var O=y;O!==t.tail&&(S<P||"string"==typeof O.value&&!O.prev.value.greedy);O=O.next)x++,S+=O.value.length;x--,b=n.slice(k,S),w.index-=k}else{g.lastIndex=0;var w=g.exec(b)}if(w){h&&(v=w[1]?w[1].length:0);var A=w.index+v,w=w[0].slice(v),P=A+w.length,E=b.slice(0,A),N=b.slice(P),j=y.prev;E&&(j=M(t,j,E),k+=E.length),W(t,j,x);var L=new _(s,f?C.tokenize(w,f):w,p,w,d);if(y=M(t,j,L),N&&M(t,y,N),1<x&&e(n,t,r,y.prev,k,!0,s+","+c),i)break}else if(i)break}}}}}(e,a,n,a.head,0),function(e){var n=[],t=e.head.next;for(;t!==e.tail;)n.push(t.value),t=t.next;return n}(a)},hooks:{all:{},add:function(e,n){var t=C.hooks.all;t[e]=t[e]||[],t[e].push(n)},run:function(e,n){var t=C.hooks.all[e];if(t&&t.length)for(var r,a=0;r=t[a++];)r(n)}},Token:_};function _(e,n,t,r,a){this.type=e,this.content=n,this.alias=t,this.length=0|(r||"").length,this.greedy=!!a}function l(){var e={value:null,prev:null,next:null},n={value:null,prev:e,next:null};e.next=n,this.head=e,this.tail=n,this.length=0}function M(e,n,t){var r=n.next,a={value:t,prev:n,next:r};return n.next=a,r.prev=a,e.length++,a}function W(e,n,t){for(var r=n.next,a=0;a<t&&r!==e.tail;a++)r=r.next;(n.next=r).prev=n,e.length-=a}if(u.Prism=C,_.stringify=function n(e,t){if("string"==typeof e)return e;if(Array.isArray(e)){var r="";return e.forEach(function(e){r+=n(e,t)}),r}var a={type:e.type,content:n(e.content,t),tag:"span",classes:["token",e.type],attributes:{},language:t},l=e.alias;l&&(Array.isArray(l)?Array.prototype.push.apply(a.classes,l):a.classes.push(l)),C.hooks.run("wrap",a);var i="";for(var o in a.attributes)i+=" "+o+'="'+(a.attributes[o]||"").replace(/"/g,"&quot;")+'"';return"<"+a.tag+' class="'+a.classes.join(" ")+'"'+i+">"+a.content+"</"+a.tag+">"},!u.document)return u.addEventListener&&(C.disableWorkerMessageHandler||u.addEventListener("message",function(e){var n=JSON.parse(e.data),t=n.language,r=n.code,a=n.immediateClose;u.postMessage(C.highlight(r,C.languages[t],t)),a&&u.close()},!1)),C;var e=C.util.currentScript();function t(){C.manual||C.highlightAll()}if(e&&(C.filename=e.src,e.hasAttribute("data-manual")&&(C.manual=!0)),!C.manual){var r=document.readyState;"loading"===r||"interactive"===r&&e&&e.defer?document.addEventListener("DOMContentLoaded",t):window.requestAnimationFrame?window.requestAnimationFrame(t):window.setTimeout(t,16)}return C}(_self);"undefined"!=typeof module&&module.exports&&(module.exports=Prism),"undefined"!=typeof global&&(global.Prism=Prism);
Prism.languages.markup={comment:/<!--[\s\S]*?-->/,prolog:/<\?[\s\S]+?\?>/,doctype:{pattern:/<!DOCTYPE(?:[^>"'[\]]|"[^"]*"|'[^']*')+(?:\[(?:[^<"'\]]|"[^"]*"|'[^']*'|<(?!!--)|<!--(?:[^-]|-(?!->))*-->)*\]\s*)?>/i,greedy:!0,inside:{"internal-subset":{pattern:/(\[)[\s\S]+(?=\]>$)/,lookbehind:!0,greedy:!0,inside:null},string:{pattern:/"[^"]*"|'[^']*'/,greedy:!0},punctuation:/^<!|>$|[[\]]/,"doctype-tag":/^DOCTYPE/,name:/[^\s<>'"]+/}},cdata:/<!\[CDATA\[[\s\S]*?]]>/i,tag:{pattern:/<\/?(?!\d)[^\s>\/=$<%]+(?:\s(?:\s*[^\s>\/=]+(?:\s*=\s*(?:"[^"]*"|'[^']*'|[^\s'">=]+(?=[\s>]))|(?=[\s/>])))+)?\s*\/?>/,greedy:!0,inside:{tag:{pattern:/^<\/?[^\s>\/]+/,inside:{punctuation:/^<\/?/,namespace:/^[^\s>\/:]+:/}},"attr-value":{pattern:/=\s*(?:"[^"]*"|'[^']*'|[^\s'">=]+)/,inside:{punctuation:[{pattern:/^=/,alias:"attr-equals"},/"|'/]}},punctuation:/\/?>/,"attr-name":{pattern:/[^\s>\/]+/,inside:{namespace:/^[^\s>\/:]+:/}}}},entity:[{pattern:/&[\da-z]{1,8};/i,alias:"named-entity"},/&#x?[\da-f]{1,8};/i]},Prism.languages.markup.tag.inside["attr-value"].inside.entity=Prism.languages.markup.entity,Prism.languages.markup.doctype.inside["internal-subset"].inside=Prism.languages.markup,Prism.hooks.add("wrap",function(a){"entity"===a.type&&(a.attributes.title=a.content.replace(/&amp;/,"&"))}),Object.defineProperty(Prism.languages.markup.tag,"addInlined",{value:function(a,e){var s={};s["language-"+e]={pattern:/(^<!\[CDATA\[)[\s\S]+?(?=\]\]>$)/i,lookbehind:!0,inside:Prism.languages[e]},s.cdata=/^<!\[CDATA\[|\]\]>$/i;var n={"included-cdata":{pattern:/<!\[CDATA\[[\s\S]*?\]\]>/i,inside:s}};n["language-"+e]={pattern:/[\s\S]+/,inside:Prism.languages[e]};var t={};t[a]={pattern:RegExp("(<__[^]*?>)(?:<!\\[CDATA\\[(?:[^\\]]|\\](?!\\]>))*\\]\\]>|(?!<!\\[CDATA\\[)[^])*?(?=</__>)".replace(/__/g,function(){return a}),"i"),lookbehind:!0,greedy:!0,inside:n},Prism.languages.insertBefore("markup","cdata",t)}}),Prism.languages.html=Prism.languages.markup,Prism.languages.mathml=Prism.languages.markup,Prism.languages.svg=Prism.languages.markup,Prism.languages.xml=Prism.languages.extend("markup",{}),Prism.languages.ssml=Prism.languages.xml,Prism.languages.atom=Prism.languages.xml,Prism.languages.rss=Prism.languages.xml;
!function(s){var e=/("|')(?:\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1/;s.languages.css={comment:/\/\*[\s\S]*?\*\//,atrule:{pattern:/@[\w-]+[\s\S]*?(?:;|(?=\s*\{))/,inside:{rule:/^@[\w-]+/,"selector-function-argument":{pattern:/(\bselector\s*\((?!\s*\))\s*)(?:[^()]|\((?:[^()]|\([^()]*\))*\))+?(?=\s*\))/,lookbehind:!0,alias:"selector"}}},url:{pattern:RegExp("url\\((?:"+e.source+"|[^\n\r()]*)\\)","i"),greedy:!0,inside:{function:/^url/i,punctuation:/^\(|\)$/}},selector:RegExp("[^{}\\s](?:[^{};\"']|"+e.source+")*?(?=\\s*\\{)"),string:{pattern:e,greedy:!0},property:/[-_a-z\xA0-\uFFFF][-\w\xA0-\uFFFF]*(?=\s*:)/i,important:/!important\b/i,function:/[-a-z0-9]+(?=\()/i,punctuation:/[(){};:,]/},s.languages.css.atrule.inside.rest=s.languages.css;var t=s.languages.markup;t&&(t.tag.addInlined("style","css"),s.languages.insertBefore("inside","attr-value",{"style-attr":{pattern:/\s*style=("|')(?:\\[\s\S]|(?!\1)[^\\])*\1/i,inside:{"attr-name":{pattern:/^\s*style/i,inside:t.tag.inside},punctuation:/^\s*=\s*['"]|['"]\s*$/,"attr-value":{pattern:/.+/i,inside:s.languages.css}},alias:"language-css"}},t.tag))}(Prism);
Prism.languages.clike={comment:[{pattern:/(^|[^\\])\/\*[\s\S]*?(?:\*\/|$)/,lookbehind:!0},{pattern:/(^|[^\\:])\/\/.*/,lookbehind:!0,greedy:!0}],string:{pattern:/(["'])(?:\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1/,greedy:!0},"class-name":{pattern:/(\b(?:class|interface|extends|implements|trait|instanceof|new)\s+|\bcatch\s+\()[\w.\\]+/i,lookbehind:!0,inside:{punctuation:/[.\\]/}},keyword:/\b(?:if|else|while|do|for|return|in|instanceof|function|new|try|throw|catch|finally|null|break|continue)\b/,boolean:/\b(?:true|false)\b/,function:/\w+(?=\()/,number:/\b0x[\da-f]+\b|(?:\b\d+\.?\d*|\B\.\d+)(?:e[+-]?\d+)?/i,operator:/[<>]=?|[!=]=?=?|--?|\+\+?|&&?|\|\|?|[?*/~^%]/,punctuation:/[{}[\];(),.:]/};
Prism.languages.javascript=Prism.languages.extend("clike",{"class-name":[Prism.languages.clike["class-name"],{pattern:/(^|[^$\w\xA0-\uFFFF])[_$A-Z\xA0-\uFFFF][$\w\xA0-\uFFFF]*(?=\.(?:prototype|constructor))/,lookbehind:!0}],keyword:[{pattern:/((?:^|})\s*)(?:catch|finally)\b/,lookbehind:!0},{pattern:/(^|[^.]|\.\.\.\s*)\b(?:as|async(?=\s*(?:function\b|\(|[$\w\xA0-\uFFFF]|$))|await|break|case|class|const|continue|debugger|default|delete|do|else|enum|export|extends|for|from|function|get|if|implements|import|in|instanceof|interface|let|new|null|of|package|private|protected|public|return|set|static|super|switch|this|throw|try|typeof|undefined|var|void|while|with|yield)\b/,lookbehind:!0}],number:/\b(?:(?:0[xX](?:[\dA-Fa-f](?:_[\dA-Fa-f])?)+|0[bB](?:[01](?:_[01])?)+|0[oO](?:[0-7](?:_[0-7])?)+)n?|(?:\d(?:_\d)?)+n|NaN|Infinity)\b|(?:\b(?:\d(?:_\d)?)+\.?(?:\d(?:_\d)?)*|\B\.(?:\d(?:_\d)?)+)(?:[Ee][+-]?(?:\d(?:_\d)?)+)?/,function:/#?[_$a-zA-Z\xA0-\uFFFF][$\w\xA0-\uFFFF]*(?=\s*(?:\.\s*(?:apply|bind|call)\s*)?\()/,operator:/--|\+\+|\*\*=?|=>|&&|\|\||[!=]==|<<=?|>>>?=?|[-+*/%&|^!=<>]=?|\.{3}|\?[.?]?|[~:]/}),Prism.languages.javascript["class-name"][0].pattern=/(\b(?:class|interface|extends|implements|instanceof|new)\s+)[\w.\\]+/,Prism.languages.insertBefore("javascript","keyword",{regex:{pattern:/((?:^|[^$\w\xA0-\uFFFF."'\])\s])\s*)\/(?:\[(?:[^\]\\\r\n]|\\.)*]|\\.|[^/\\\[\r\n])+\/[gimyus]{0,6}(?=(?:\s|\/\*(?:[^*]|\*(?!\/))*\*\/)*(?:$|[\r\n,.;:})\]]|\/\/))/,lookbehind:!0,greedy:!0},"function-variable":{pattern:/#?[_$a-zA-Z\xA0-\uFFFF][$\w\xA0-\uFFFF]*(?=\s*[=:]\s*(?:async\s*)?(?:\bfunction\b|(?:\((?:[^()]|\([^()]*\))*\)|[_$a-zA-Z\xA0-\uFFFF][$\w\xA0-\uFFFF]*)\s*=>))/,alias:"function"},parameter:[{pattern:/(function(?:\s+[_$A-Za-z\xA0-\uFFFF][$\w\xA0-\uFFFF]*)?\s*\(\s*)(?!\s)(?:[^()]|\([^()]*\))+?(?=\s*\))/,lookbehind:!0,inside:Prism.languages.javascript},{pattern:/[_$a-z\xA0-\uFFFF][$\w\xA0-\uFFFF]*(?=\s*=>)/i,inside:Prism.languages.javascript},{pattern:/(\(\s*)(?!\s)(?:[^()]|\([^()]*\))+?(?=\s*\)\s*=>)/,lookbehind:!0,inside:Prism.languages.javascript},{pattern:/((?:\b|\s|^)(?!(?:as|async|await|break|case|catch|class|const|continue|debugger|default|delete|do|else|enum|export|extends|finally|for|from|function|get|if|implements|import|in|instanceof|interface|let|new|null|of|package|private|protected|public|return|set|static|super|switch|this|throw|try|typeof|undefined|var|void|while|with|yield)(?![$\w\xA0-\uFFFF]))(?:[_$A-Za-z\xA0-\uFFFF][$\w\xA0-\uFFFF]*\s*)\(\s*)(?!\s)(?:[^()]|\([^()]*\))+?(?=\s*\)\s*\{)/,lookbehind:!0,inside:Prism.languages.javascript}],constant:/\b[A-Z](?:[A-Z_]|\dx?)*\b/}),Prism.languages.insertBefore("javascript","string",{"template-string":{pattern:/`(?:\\[\s\S]|\${(?:[^{}]|{(?:[^{}]|{[^}]*})*})+}|(?!\${)[^\\`])*`/,greedy:!0,inside:{"template-punctuation":{pattern:/^`|`$/,alias:"string"},interpolation:{pattern:/((?:^|[^\\])(?:\\{2})*)\${(?:[^{}]|{(?:[^{}]|{[^}]*})*})+}/,lookbehind:!0,inside:{"interpolation-punctuation":{pattern:/^\${|}$/,alias:"punctuation"},rest:Prism.languages.javascript}},string:/[\s\S]+/}}}),Prism.languages.markup&&Prism.languages.markup.tag.addInlined("script","javascript"),Prism.languages.js=Prism.languages.javascript;
!function(h){function v(e,n){return"___"+e.toUpperCase()+n+"___"}Object.defineProperties(h.languages["markup-templating"]={},{buildPlaceholders:{value:function(a,r,e,o){if(a.language===r){var c=a.tokenStack=[];a.code=a.code.replace(e,function(e){if("function"==typeof o&&!o(e))return e;for(var n,t=c.length;-1!==a.code.indexOf(n=v(r,t));)++t;return c[t]=e,n}),a.grammar=h.languages.markup}}},tokenizePlaceholders:{value:function(p,k){if(p.language===k&&p.tokenStack){p.grammar=h.languages[k];var m=0,d=Object.keys(p.tokenStack);!function e(n){for(var t=0;t<n.length&&!(m>=d.length);t++){var a=n[t];if("string"==typeof a||a.content&&"string"==typeof a.content){var r=d[m],o=p.tokenStack[r],c="string"==typeof a?a:a.content,i=v(k,r),u=c.indexOf(i);if(-1<u){++m;var g=c.substring(0,u),l=new h.Token(k,h.tokenize(o,p.grammar),"language-"+k,o),s=c.substring(u+i.length),f=[];g&&f.push.apply(f,e([g])),f.push(l),s&&f.push.apply(f,e([s])),"string"==typeof a?n.splice.apply(n,[t,1].concat(f)):a.content=f}}else a.content&&e(a.content)}return n}(p.tokens)}}}})}(Prism);
!function(n){n.languages.php=n.languages.extend("clike",{keyword:/\b(?:__halt_compiler|abstract|and|array|as|break|callable|case|catch|class|clone|const|continue|declare|default|die|do|echo|else|elseif|empty|enddeclare|endfor|endforeach|endif|endswitch|endwhile|eval|exit|extends|final|finally|for|foreach|function|global|goto|if|implements|include|include_once|instanceof|insteadof|interface|isset|list|namespace|new|or|parent|print|private|protected|public|require|require_once|return|static|switch|throw|trait|try|unset|use|var|while|xor|yield)\b/i,boolean:{pattern:/\b(?:false|true)\b/i,alias:"constant"},constant:[/\b[A-Z_][A-Z0-9_]*\b/,/\b(?:null)\b/i],comment:{pattern:/(^|[^\\])(?:\/\*[\s\S]*?\*\/|\/\/.*)/,lookbehind:!0}}),n.languages.insertBefore("php","string",{"shell-comment":{pattern:/(^|[^\\])#.*/,lookbehind:!0,alias:"comment"}}),n.languages.insertBefore("php","comment",{delimiter:{pattern:/\?>$|^<\?(?:php(?=\s)|=)?/i,alias:"important"}}),n.languages.insertBefore("php","keyword",{variable:/\$+(?:\w+\b|(?={))/i,package:{pattern:/(\\|namespace\s+|use\s+)[\w\\]+/,lookbehind:!0,inside:{punctuation:/\\/}}}),n.languages.insertBefore("php","operator",{property:{pattern:/(->)[\w]+/,lookbehind:!0}});var e={pattern:/{\$(?:{(?:{[^{}]+}|[^{}]+)}|[^{}])+}|(^|[^\\{])\$+(?:\w+(?:\[[^\r\n\[\]]+\]|->\w+)*)/,lookbehind:!0,inside:n.languages.php};n.languages.insertBefore("php","string",{"nowdoc-string":{pattern:/<<<'([^']+)'[\r\n](?:.*[\r\n])*?\1;/,greedy:!0,alias:"string",inside:{delimiter:{pattern:/^<<<'[^']+'|[a-z_]\w*;$/i,alias:"symbol",inside:{punctuation:/^<<<'?|[';]$/}}}},"heredoc-string":{pattern:/<<<(?:"([^"]+)"[\r\n](?:.*[\r\n])*?\1;|([a-z_]\w*)[\r\n](?:.*[\r\n])*?\2;)/i,greedy:!0,alias:"string",inside:{delimiter:{pattern:/^<<<(?:"[^"]+"|[a-z_]\w*)|[a-z_]\w*;$/i,alias:"symbol",inside:{punctuation:/^<<<"?|[";]$/}},interpolation:e}},"single-quoted-string":{pattern:/'(?:\\[\s\S]|[^\\'])*'/,greedy:!0,alias:"string"},"double-quoted-string":{pattern:/"(?:\\[\s\S]|[^\\"])*"/,greedy:!0,alias:"string",inside:{interpolation:e}}}),delete n.languages.php.string,n.hooks.add("before-tokenize",function(e){if(/<\?/.test(e.code)){n.languages["markup-templating"].buildPlaceholders(e,"php",/<\?(?:[^"'/#]|\/(?![*/])|("|')(?:\\[\s\S]|(?!\1)[^\\])*\1|(?:\/\/|#)(?:[^?\n\r]|\?(?!>))*(?=$|\?>|[\r\n])|\/\*[\s\S]*?(?:\*\/|$))*?(?:\?>|$)/gi)}}),n.hooks.add("after-tokenize",function(e){n.languages["markup-templating"].tokenizePlaceholders(e,"php")})}(Prism);


/**
 * Basic Lightbox
 * v. 5.0.3
 * https://basiclightbox.electerious.com/
 * 
 */
 !function(e){if("object"==typeof exports&&"undefined"!=typeof module)module.exports=e();else if("function"==typeof define&&define.amd)define([],e);else{("undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self?self:this).basicLightbox=e()}}((function(){return function e(n,t,o){function r(c,u){if(!t[c]){if(!n[c]){var s="function"==typeof require&&require;if(!u&&s)return s(c,!0);if(i)return i(c,!0);var a=new Error("Cannot find module '"+c+"'");throw a.code="MODULE_NOT_FOUND",a}var l=t[c]={exports:{}};n[c][0].call(l.exports,(function(e){return r(n[c][1][e]||e)}),l,l.exports,e,n,t,o)}return t[c].exports}for(var i="function"==typeof require&&require,c=0;c<o.length;c++)r(o[c]);return r}({1:[function(e,n,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.create=t.visible=void 0;var o=function(e){var n=arguments.length>1&&void 0!==arguments[1]&&arguments[1],t=document.createElement("div");return t.innerHTML=e.trim(),!0===n?t.children:t.firstChild},r=function(e,n){var t=e.children;return 1===t.length&&t[0].tagName===n},i=function(e){return null!=(e=e||document.querySelector(".basicLightbox"))&&!0===e.ownerDocument.body.contains(e)};t.visible=i;t.create=function(e,n){var t=function(e,n){var t=o('\n\t\t<div class="basicLightbox '.concat(n.className,'">\n\t\t\t<div class="basicLightbox__placeholder" role="dialog"></div>\n\t\t</div>\n\t')),i=t.querySelector(".basicLightbox__placeholder");e.forEach((function(e){return i.appendChild(e)}));var c=r(i,"IMG"),u=r(i,"VIDEO"),s=r(i,"IFRAME");return!0===c&&t.classList.add("basicLightbox--img"),!0===u&&t.classList.add("basicLightbox--video"),!0===s&&t.classList.add("basicLightbox--iframe"),t}(e=function(e){var n="string"==typeof e,t=e instanceof HTMLElement==!0;if(!1===n&&!1===t)throw new Error("Content must be a DOM element/node or string");return!0===n?Array.from(o(e,!0)):"TEMPLATE"===e.tagName?[e.content.cloneNode(!0)]:Array.from(e.children)}(e),n=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};if(null==(e=Object.assign({},e)).closable&&(e.closable=!0),null==e.className&&(e.className=""),null==e.onShow&&(e.onShow=function(){}),null==e.onClose&&(e.onClose=function(){}),"boolean"!=typeof e.closable)throw new Error("Property `closable` must be a boolean");if("string"!=typeof e.className)throw new Error("Property `className` must be a string");if("function"!=typeof e.onShow)throw new Error("Property `onShow` must be a function");if("function"!=typeof e.onClose)throw new Error("Property `onClose` must be a function");return e}(n)),c=function(e){return!1!==n.onClose(u)&&function(e,n){return e.classList.remove("basicLightbox--visible"),setTimeout((function(){return!1===i(e)||e.parentElement.removeChild(e),n()}),410),!0}(t,(function(){if("function"==typeof e)return e(u)}))};!0===n.closable&&t.addEventListener("click",(function(e){e.target===t&&c()}));var u={element:function(){return t},visible:function(){return i(t)},show:function(e){return!1!==n.onShow(u)&&function(e,n){return document.body.appendChild(e),setTimeout((function(){requestAnimationFrame((function(){return e.classList.add("basicLightbox--visible"),n()}))}),10),!0}(t,(function(){if("function"==typeof e)return e(u)}))},close:c};return u}},{}]},{},[1])(1)}));



/**
 * Swiper 6.4.5
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * https://swiperjs.com
 *
 * Copyright 2014-2020 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: December 18, 2020
 */
!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e="undefined"!=typeof globalThis?globalThis:e||self).Swiper=t()}(this,(function(){"use strict";function e(e,t){for(var a=0;a<t.length;a++){var i=t[a];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}function t(){return(t=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var a=arguments[t];for(var i in a)Object.prototype.hasOwnProperty.call(a,i)&&(e[i]=a[i])}return e}).apply(this,arguments)}function a(e){return null!==e&&"object"==typeof e&&"constructor"in e&&e.constructor===Object}function i(e,t){void 0===e&&(e={}),void 0===t&&(t={}),Object.keys(t).forEach((function(s){void 0===e[s]?e[s]=t[s]:a(t[s])&&a(e[s])&&Object.keys(t[s]).length>0&&i(e[s],t[s])}))}var s={body:{},addEventListener:function(){},removeEventListener:function(){},activeElement:{blur:function(){},nodeName:""},querySelector:function(){return null},querySelectorAll:function(){return[]},getElementById:function(){return null},createEvent:function(){return{initEvent:function(){}}},createElement:function(){return{children:[],childNodes:[],style:{},setAttribute:function(){},getElementsByTagName:function(){return[]}}},createElementNS:function(){return{}},importNode:function(){return null},location:{hash:"",host:"",hostname:"",href:"",origin:"",pathname:"",protocol:"",search:""}};function r(){var e="undefined"!=typeof document?document:{};return i(e,s),e}var n={document:s,navigator:{userAgent:""},location:{hash:"",host:"",hostname:"",href:"",origin:"",pathname:"",protocol:"",search:""},history:{replaceState:function(){},pushState:function(){},go:function(){},back:function(){}},CustomEvent:function(){return this},addEventListener:function(){},removeEventListener:function(){},getComputedStyle:function(){return{getPropertyValue:function(){return""}}},Image:function(){},Date:function(){},screen:{},setTimeout:function(){},clearTimeout:function(){},matchMedia:function(){return{}},requestAnimationFrame:function(e){return"undefined"==typeof setTimeout?(e(),null):setTimeout(e,0)},cancelAnimationFrame:function(e){"undefined"!=typeof setTimeout&&clearTimeout(e)}};function l(){var e="undefined"!=typeof window?window:{};return i(e,n),e}function o(e){return(o=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}function d(e,t){return(d=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}function p(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(e){return!1}}function u(e,t,a){return(u=p()?Reflect.construct:function(e,t,a){var i=[null];i.push.apply(i,t);var s=new(Function.bind.apply(e,i));return a&&d(s,a.prototype),s}).apply(null,arguments)}function c(e){var t="function"==typeof Map?new Map:void 0;return(c=function(e){if(null===e||(a=e,-1===Function.toString.call(a).indexOf("[native code]")))return e;var a;if("function"!=typeof e)throw new TypeError("Super expression must either be null or a function");if(void 0!==t){if(t.has(e))return t.get(e);t.set(e,i)}function i(){return u(e,arguments,o(this).constructor)}return i.prototype=Object.create(e.prototype,{constructor:{value:i,enumerable:!1,writable:!0,configurable:!0}}),d(i,e)})(e)}var h=function(e){var t,a;function i(t){var a,i,s;return a=e.call.apply(e,[this].concat(t))||this,i=function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(a),s=i.__proto__,Object.defineProperty(i,"__proto__",{get:function(){return s},set:function(e){s.__proto__=e}}),a}return a=e,(t=i).prototype=Object.create(a.prototype),t.prototype.constructor=t,t.__proto__=a,i}(c(Array));function v(e){void 0===e&&(e=[]);var t=[];return e.forEach((function(e){Array.isArray(e)?t.push.apply(t,v(e)):t.push(e)})),t}function f(e,t){return Array.prototype.filter.call(e,t)}function m(e,t){var a=l(),i=r(),s=[];if(!t&&e instanceof h)return e;if(!e)return new h(s);if("string"==typeof e){var n=e.trim();if(n.indexOf("<")>=0&&n.indexOf(">")>=0){var o="div";0===n.indexOf("<li")&&(o="ul"),0===n.indexOf("<tr")&&(o="tbody"),0!==n.indexOf("<td")&&0!==n.indexOf("<th")||(o="tr"),0===n.indexOf("<tbody")&&(o="table"),0===n.indexOf("<option")&&(o="select");var d=i.createElement(o);d.innerHTML=n;for(var p=0;p<d.childNodes.length;p+=1)s.push(d.childNodes[p])}else s=function(e,t){if("string"!=typeof e)return[e];for(var a=[],i=t.querySelectorAll(e),s=0;s<i.length;s+=1)a.push(i[s]);return a}(e.trim(),t||i)}else if(e.nodeType||e===a||e===i)s.push(e);else if(Array.isArray(e)){if(e instanceof h)return e;s=e}return new h(function(e){for(var t=[],a=0;a<e.length;a+=1)-1===t.indexOf(e[a])&&t.push(e[a]);return t}(s))}m.fn=h.prototype;var g,y,w,b={addClass:function(){for(var e=arguments.length,t=new Array(e),a=0;a<e;a++)t[a]=arguments[a];var i=v(t.map((function(e){return e.split(" ")})));return this.forEach((function(e){var t;(t=e.classList).add.apply(t,i)})),this},removeClass:function(){for(var e=arguments.length,t=new Array(e),a=0;a<e;a++)t[a]=arguments[a];var i=v(t.map((function(e){return e.split(" ")})));return this.forEach((function(e){var t;(t=e.classList).remove.apply(t,i)})),this},hasClass:function(){for(var e=arguments.length,t=new Array(e),a=0;a<e;a++)t[a]=arguments[a];var i=v(t.map((function(e){return e.split(" ")})));return f(this,(function(e){return i.filter((function(t){return e.classList.contains(t)})).length>0})).length>0},toggleClass:function(){for(var e=arguments.length,t=new Array(e),a=0;a<e;a++)t[a]=arguments[a];var i=v(t.map((function(e){return e.split(" ")})));this.forEach((function(e){i.forEach((function(t){e.classList.toggle(t)}))}))},attr:function(e,t){if(1===arguments.length&&"string"==typeof e)return this[0]?this[0].getAttribute(e):void 0;for(var a=0;a<this.length;a+=1)if(2===arguments.length)this[a].setAttribute(e,t);else for(var i in e)this[a][i]=e[i],this[a].setAttribute(i,e[i]);return this},removeAttr:function(e){for(var t=0;t<this.length;t+=1)this[t].removeAttribute(e);return this},transform:function(e){for(var t=0;t<this.length;t+=1)this[t].style.transform=e;return this},transition:function(e){for(var t=0;t<this.length;t+=1)this[t].style.transitionDuration="string"!=typeof e?e+"ms":e;return this},on:function(){for(var e=arguments.length,t=new Array(e),a=0;a<e;a++)t[a]=arguments[a];var i=t[0],s=t[1],r=t[2],n=t[3];function l(e){var t=e.target;if(t){var a=e.target.dom7EventData||[];if(a.indexOf(e)<0&&a.unshift(e),m(t).is(s))r.apply(t,a);else for(var i=m(t).parents(),n=0;n<i.length;n+=1)m(i[n]).is(s)&&r.apply(i[n],a)}}function o(e){var t=e&&e.target&&e.target.dom7EventData||[];t.indexOf(e)<0&&t.unshift(e),r.apply(this,t)}"function"==typeof t[1]&&(i=t[0],r=t[1],n=t[2],s=void 0),n||(n=!1);for(var d,p=i.split(" "),u=0;u<this.length;u+=1){var c=this[u];if(s)for(d=0;d<p.length;d+=1){var h=p[d];c.dom7LiveListeners||(c.dom7LiveListeners={}),c.dom7LiveListeners[h]||(c.dom7LiveListeners[h]=[]),c.dom7LiveListeners[h].push({listener:r,proxyListener:l}),c.addEventListener(h,l,n)}else for(d=0;d<p.length;d+=1){var v=p[d];c.dom7Listeners||(c.dom7Listeners={}),c.dom7Listeners[v]||(c.dom7Listeners[v]=[]),c.dom7Listeners[v].push({listener:r,proxyListener:o}),c.addEventListener(v,o,n)}}return this},off:function(){for(var e=arguments.length,t=new Array(e),a=0;a<e;a++)t[a]=arguments[a];var i=t[0],s=t[1],r=t[2],n=t[3];"function"==typeof t[1]&&(i=t[0],r=t[1],n=t[2],s=void 0),n||(n=!1);for(var l=i.split(" "),o=0;o<l.length;o+=1)for(var d=l[o],p=0;p<this.length;p+=1){var u=this[p],c=void 0;if(!s&&u.dom7Listeners?c=u.dom7Listeners[d]:s&&u.dom7LiveListeners&&(c=u.dom7LiveListeners[d]),c&&c.length)for(var h=c.length-1;h>=0;h-=1){var v=c[h];r&&v.listener===r||r&&v.listener&&v.listener.dom7proxy&&v.listener.dom7proxy===r?(u.removeEventListener(d,v.proxyListener,n),c.splice(h,1)):r||(u.removeEventListener(d,v.proxyListener,n),c.splice(h,1))}}return this},trigger:function(){for(var e=l(),t=arguments.length,a=new Array(t),i=0;i<t;i++)a[i]=arguments[i];for(var s=a[0].split(" "),r=a[1],n=0;n<s.length;n+=1)for(var o=s[n],d=0;d<this.length;d+=1){var p=this[d];if(e.CustomEvent){var u=new e.CustomEvent(o,{detail:r,bubbles:!0,cancelable:!0});p.dom7EventData=a.filter((function(e,t){return t>0})),p.dispatchEvent(u),p.dom7EventData=[],delete p.dom7EventData}}return this},transitionEnd:function(e){var t=this;return e&&t.on("transitionend",(function a(i){i.target===this&&(e.call(this,i),t.off("transitionend",a))})),this},outerWidth:function(e){if(this.length>0){if(e){var t=this.styles();return this[0].offsetWidth+parseFloat(t.getPropertyValue("margin-right"))+parseFloat(t.getPropertyValue("margin-left"))}return this[0].offsetWidth}return null},outerHeight:function(e){if(this.length>0){if(e){var t=this.styles();return this[0].offsetHeight+parseFloat(t.getPropertyValue("margin-top"))+parseFloat(t.getPropertyValue("margin-bottom"))}return this[0].offsetHeight}return null},styles:function(){var e=l();return this[0]?e.getComputedStyle(this[0],null):{}},offset:function(){if(this.length>0){var e=l(),t=r(),a=this[0],i=a.getBoundingClientRect(),s=t.body,n=a.clientTop||s.clientTop||0,o=a.clientLeft||s.clientLeft||0,d=a===e?e.scrollY:a.scrollTop,p=a===e?e.scrollX:a.scrollLeft;return{top:i.top+d-n,left:i.left+p-o}}return null},css:function(e,t){var a,i=l();if(1===arguments.length){if("string"!=typeof e){for(a=0;a<this.length;a+=1)for(var s in e)this[a].style[s]=e[s];return this}if(this[0])return i.getComputedStyle(this[0],null).getPropertyValue(e)}if(2===arguments.length&&"string"==typeof e){for(a=0;a<this.length;a+=1)this[a].style[e]=t;return this}return this},each:function(e){return e?(this.forEach((function(t,a){e.apply(t,[t,a])})),this):this},html:function(e){if(void 0===e)return this[0]?this[0].innerHTML:null;for(var t=0;t<this.length;t+=1)this[t].innerHTML=e;return this},text:function(e){if(void 0===e)return this[0]?this[0].textContent.trim():null;for(var t=0;t<this.length;t+=1)this[t].textContent=e;return this},is:function(e){var t,a,i=l(),s=r(),n=this[0];if(!n||void 0===e)return!1;if("string"==typeof e){if(n.matches)return n.matches(e);if(n.webkitMatchesSelector)return n.webkitMatchesSelector(e);if(n.msMatchesSelector)return n.msMatchesSelector(e);for(t=m(e),a=0;a<t.length;a+=1)if(t[a]===n)return!0;return!1}if(e===s)return n===s;if(e===i)return n===i;if(e.nodeType||e instanceof h){for(t=e.nodeType?[e]:e,a=0;a<t.length;a+=1)if(t[a]===n)return!0;return!1}return!1},index:function(){var e,t=this[0];if(t){for(e=0;null!==(t=t.previousSibling);)1===t.nodeType&&(e+=1);return e}},eq:function(e){if(void 0===e)return this;var t=this.length;if(e>t-1)return m([]);if(e<0){var a=t+e;return m(a<0?[]:[this[a]])}return m([this[e]])},append:function(){for(var e,t=r(),a=0;a<arguments.length;a+=1){e=a<0||arguments.length<=a?void 0:arguments[a];for(var i=0;i<this.length;i+=1)if("string"==typeof e){var s=t.createElement("div");for(s.innerHTML=e;s.firstChild;)this[i].appendChild(s.firstChild)}else if(e instanceof h)for(var n=0;n<e.length;n+=1)this[i].appendChild(e[n]);else this[i].appendChild(e)}return this},prepend:function(e){var t,a,i=r();for(t=0;t<this.length;t+=1)if("string"==typeof e){var s=i.createElement("div");for(s.innerHTML=e,a=s.childNodes.length-1;a>=0;a-=1)this[t].insertBefore(s.childNodes[a],this[t].childNodes[0])}else if(e instanceof h)for(a=0;a<e.length;a+=1)this[t].insertBefore(e[a],this[t].childNodes[0]);else this[t].insertBefore(e,this[t].childNodes[0]);return this},next:function(e){return this.length>0?e?this[0].nextElementSibling&&m(this[0].nextElementSibling).is(e)?m([this[0].nextElementSibling]):m([]):this[0].nextElementSibling?m([this[0].nextElementSibling]):m([]):m([])},nextAll:function(e){var t=[],a=this[0];if(!a)return m([]);for(;a.nextElementSibling;){var i=a.nextElementSibling;e?m(i).is(e)&&t.push(i):t.push(i),a=i}return m(t)},prev:function(e){if(this.length>0){var t=this[0];return e?t.previousElementSibling&&m(t.previousElementSibling).is(e)?m([t.previousElementSibling]):m([]):t.previousElementSibling?m([t.previousElementSibling]):m([])}return m([])},prevAll:function(e){var t=[],a=this[0];if(!a)return m([]);for(;a.previousElementSibling;){var i=a.previousElementSibling;e?m(i).is(e)&&t.push(i):t.push(i),a=i}return m(t)},parent:function(e){for(var t=[],a=0;a<this.length;a+=1)null!==this[a].parentNode&&(e?m(this[a].parentNode).is(e)&&t.push(this[a].parentNode):t.push(this[a].parentNode));return m(t)},parents:function(e){for(var t=[],a=0;a<this.length;a+=1)for(var i=this[a].parentNode;i;)e?m(i).is(e)&&t.push(i):t.push(i),i=i.parentNode;return m(t)},closest:function(e){var t=this;return void 0===e?m([]):(t.is(e)||(t=t.parents(e).eq(0)),t)},find:function(e){for(var t=[],a=0;a<this.length;a+=1)for(var i=this[a].querySelectorAll(e),s=0;s<i.length;s+=1)t.push(i[s]);return m(t)},children:function(e){for(var t=[],a=0;a<this.length;a+=1)for(var i=this[a].children,s=0;s<i.length;s+=1)e&&!m(i[s]).is(e)||t.push(i[s]);return m(t)},filter:function(e){return m(f(this,e))},remove:function(){for(var e=0;e<this.length;e+=1)this[e].parentNode&&this[e].parentNode.removeChild(this[e]);return this}};function E(e,t){return void 0===t&&(t=0),setTimeout(e,t)}function x(){return Date.now()}function T(e,t){void 0===t&&(t="x");var a,i,s,r=l(),n=r.getComputedStyle(e,null);return r.WebKitCSSMatrix?((i=n.transform||n.webkitTransform).split(",").length>6&&(i=i.split(", ").map((function(e){return e.replace(",",".")})).join(", ")),s=new r.WebKitCSSMatrix("none"===i?"":i)):a=(s=n.MozTransform||n.OTransform||n.MsTransform||n.msTransform||n.transform||n.getPropertyValue("transform").replace("translate(","matrix(1, 0, 0, 1,")).toString().split(","),"x"===t&&(i=r.WebKitCSSMatrix?s.m41:16===a.length?parseFloat(a[12]):parseFloat(a[4])),"y"===t&&(i=r.WebKitCSSMatrix?s.m42:16===a.length?parseFloat(a[13]):parseFloat(a[5])),i||0}function C(e){return"object"==typeof e&&null!==e&&e.constructor&&e.constructor===Object}function S(){for(var e=Object(arguments.length<=0?void 0:arguments[0]),t=1;t<arguments.length;t+=1){var a=t<0||arguments.length<=t?void 0:arguments[t];if(null!=a)for(var i=Object.keys(Object(a)),s=0,r=i.length;s<r;s+=1){var n=i[s],l=Object.getOwnPropertyDescriptor(a,n);void 0!==l&&l.enumerable&&(C(e[n])&&C(a[n])?S(e[n],a[n]):!C(e[n])&&C(a[n])?(e[n]={},S(e[n],a[n])):e[n]=a[n])}}return e}function M(e,t){Object.keys(t).forEach((function(a){C(t[a])&&Object.keys(t[a]).forEach((function(i){"function"==typeof t[a][i]&&(t[a][i]=t[a][i].bind(e))})),e[a]=t[a]}))}function z(){return g||(g=function(){var e=l(),t=r();return{touch:!!("ontouchstart"in e||e.DocumentTouch&&t instanceof e.DocumentTouch),pointerEvents:!!e.PointerEvent&&"maxTouchPoints"in e.navigator&&e.navigator.maxTouchPoints>=0,observer:"MutationObserver"in e||"WebkitMutationObserver"in e,passiveListener:function(){var t=!1;try{var a=Object.defineProperty({},"passive",{get:function(){t=!0}});e.addEventListener("testPassiveListener",null,a)}catch(e){}return t}(),gestures:"ongesturestart"in e}}()),g}function P(e){return void 0===e&&(e={}),y||(y=function(e){var t=(void 0===e?{}:e).userAgent,a=z(),i=l(),s=i.navigator.platform,r=t||i.navigator.userAgent,n={ios:!1,android:!1},o=i.screen.width,d=i.screen.height,p=r.match(/(Android);?[\s\/]+([\d.]+)?/),u=r.match(/(iPad).*OS\s([\d_]+)/),c=r.match(/(iPod)(.*OS\s([\d_]+))?/),h=!u&&r.match(/(iPhone\sOS|iOS)\s([\d_]+)/),v="Win32"===s,f="MacIntel"===s;return!u&&f&&a.touch&&["1024x1366","1366x1024","834x1194","1194x834","834x1112","1112x834","768x1024","1024x768","820x1180","1180x820","810x1080","1080x810"].indexOf(o+"x"+d)>=0&&((u=r.match(/(Version)\/([\d.]+)/))||(u=[0,1,"13_0_0"]),f=!1),p&&!v&&(n.os="android",n.android=!0),(u||h||c)&&(n.os="ios",n.ios=!0),n}(e)),y}function k(){return w||(w=function(){var e,t=l();return{isEdge:!!t.navigator.userAgent.match(/Edge/g),isSafari:(e=t.navigator.userAgent.toLowerCase(),e.indexOf("safari")>=0&&e.indexOf("chrome")<0&&e.indexOf("android")<0),isWebView:/(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(t.navigator.userAgent)}}()),w}Object.keys(b).forEach((function(e){m.fn[e]=b[e]}));var L={name:"resize",create:function(){var e=this;S(e,{resize:{resizeHandler:function(){e&&!e.destroyed&&e.initialized&&(e.emit("beforeResize"),e.emit("resize"))},orientationChangeHandler:function(){e&&!e.destroyed&&e.initialized&&e.emit("orientationchange")}}})},on:{init:function(e){var t=l();t.addEventListener("resize",e.resize.resizeHandler),t.addEventListener("orientationchange",e.resize.orientationChangeHandler)},destroy:function(e){var t=l();t.removeEventListener("resize",e.resize.resizeHandler),t.removeEventListener("orientationchange",e.resize.orientationChangeHandler)}}},$={attach:function(e,t){void 0===t&&(t={});var a=l(),i=this,s=new(a.MutationObserver||a.WebkitMutationObserver)((function(e){if(1!==e.length){var t=function(){i.emit("observerUpdate",e[0])};a.requestAnimationFrame?a.requestAnimationFrame(t):a.setTimeout(t,0)}else i.emit("observerUpdate",e[0])}));s.observe(e,{attributes:void 0===t.attributes||t.attributes,childList:void 0===t.childList||t.childList,characterData:void 0===t.characterData||t.characterData}),i.observer.observers.push(s)},init:function(){var e=this;if(e.support.observer&&e.params.observer){if(e.params.observeParents)for(var t=e.$el.parents(),a=0;a<t.length;a+=1)e.observer.attach(t[a]);e.observer.attach(e.$el[0],{childList:e.params.observeSlideChildren}),e.observer.attach(e.$wrapperEl[0],{attributes:!1})}},destroy:function(){this.observer.observers.forEach((function(e){e.disconnect()})),this.observer.observers=[]}},I={name:"observer",params:{observer:!1,observeParents:!1,observeSlideChildren:!1},create:function(){M(this,{observer:t({},$,{observers:[]})})},on:{init:function(e){e.observer.init()},destroy:function(e){e.observer.destroy()}}};function O(e){var t=this,a=r(),i=l(),s=t.touchEventsData,n=t.params,o=t.touches;if(!t.animating||!n.preventInteractionOnTransition){var d=e;d.originalEvent&&(d=d.originalEvent);var p=m(d.target);if("wrapper"!==n.touchEventsTarget||p.closest(t.wrapperEl).length)if(s.isTouchEvent="touchstart"===d.type,s.isTouchEvent||!("which"in d)||3!==d.which)if(!(!s.isTouchEvent&&"button"in d&&d.button>0))if(!s.isTouched||!s.isMoved)if(!!n.noSwipingClass&&""!==n.noSwipingClass&&d.target&&d.target.shadowRoot&&e.path&&e.path[0]&&(p=m(e.path[0])),n.noSwiping&&p.closest(n.noSwipingSelector?n.noSwipingSelector:"."+n.noSwipingClass)[0])t.allowClick=!0;else if(!n.swipeHandler||p.closest(n.swipeHandler)[0]){o.currentX="touchstart"===d.type?d.targetTouches[0].pageX:d.pageX,o.currentY="touchstart"===d.type?d.targetTouches[0].pageY:d.pageY;var u=o.currentX,c=o.currentY,h=n.edgeSwipeDetection||n.iOSEdgeSwipeDetection,v=n.edgeSwipeThreshold||n.iOSEdgeSwipeThreshold;if(!h||!(u<=v||u>=i.innerWidth-v)){if(S(s,{isTouched:!0,isMoved:!1,allowTouchCallbacks:!0,isScrolling:void 0,startMoving:void 0}),o.startX=u,o.startY=c,s.touchStartTime=x(),t.allowClick=!0,t.updateSize(),t.swipeDirection=void 0,n.threshold>0&&(s.allowThresholdMove=!1),"touchstart"!==d.type){var f=!0;p.is(s.formElements)&&(f=!1),a.activeElement&&m(a.activeElement).is(s.formElements)&&a.activeElement!==p[0]&&a.activeElement.blur();var g=f&&t.allowTouchMove&&n.touchStartPreventDefault;!n.touchStartForcePreventDefault&&!g||p[0].isContentEditable||d.preventDefault()}t.emit("touchStart",d)}}}}function A(e){var t=r(),a=this,i=a.touchEventsData,s=a.params,n=a.touches,l=a.rtlTranslate,o=e;if(o.originalEvent&&(o=o.originalEvent),i.isTouched){if(!i.isTouchEvent||"touchmove"===o.type){var d="touchmove"===o.type&&o.targetTouches&&(o.targetTouches[0]||o.changedTouches[0]),p="touchmove"===o.type?d.pageX:o.pageX,u="touchmove"===o.type?d.pageY:o.pageY;if(o.preventedByNestedSwiper)return n.startX=p,void(n.startY=u);if(!a.allowTouchMove)return a.allowClick=!1,void(i.isTouched&&(S(n,{startX:p,startY:u,currentX:p,currentY:u}),i.touchStartTime=x()));if(i.isTouchEvent&&s.touchReleaseOnEdges&&!s.loop)if(a.isVertical()){if(u<n.startY&&a.translate<=a.maxTranslate()||u>n.startY&&a.translate>=a.minTranslate())return i.isTouched=!1,void(i.isMoved=!1)}else if(p<n.startX&&a.translate<=a.maxTranslate()||p>n.startX&&a.translate>=a.minTranslate())return;if(i.isTouchEvent&&t.activeElement&&o.target===t.activeElement&&m(o.target).is(i.formElements))return i.isMoved=!0,void(a.allowClick=!1);if(i.allowTouchCallbacks&&a.emit("touchMove",o),!(o.targetTouches&&o.targetTouches.length>1)){n.currentX=p,n.currentY=u;var c=n.currentX-n.startX,h=n.currentY-n.startY;if(!(a.params.threshold&&Math.sqrt(Math.pow(c,2)+Math.pow(h,2))<a.params.threshold)){var v;if(void 0===i.isScrolling)a.isHorizontal()&&n.currentY===n.startY||a.isVertical()&&n.currentX===n.startX?i.isScrolling=!1:c*c+h*h>=25&&(v=180*Math.atan2(Math.abs(h),Math.abs(c))/Math.PI,i.isScrolling=a.isHorizontal()?v>s.touchAngle:90-v>s.touchAngle);if(i.isScrolling&&a.emit("touchMoveOpposite",o),void 0===i.startMoving&&(n.currentX===n.startX&&n.currentY===n.startY||(i.startMoving=!0)),i.isScrolling)i.isTouched=!1;else if(i.startMoving){a.allowClick=!1,!s.cssMode&&o.cancelable&&o.preventDefault(),s.touchMoveStopPropagation&&!s.nested&&o.stopPropagation(),i.isMoved||(s.loop&&a.loopFix(),i.startTranslate=a.getTranslate(),a.setTransition(0),a.animating&&a.$wrapperEl.trigger("webkitTransitionEnd transitionend"),i.allowMomentumBounce=!1,!s.grabCursor||!0!==a.allowSlideNext&&!0!==a.allowSlidePrev||a.setGrabCursor(!0),a.emit("sliderFirstMove",o)),a.emit("sliderMove",o),i.isMoved=!0;var f=a.isHorizontal()?c:h;n.diff=f,f*=s.touchRatio,l&&(f=-f),a.swipeDirection=f>0?"prev":"next",i.currentTranslate=f+i.startTranslate;var g=!0,y=s.resistanceRatio;if(s.touchReleaseOnEdges&&(y=0),f>0&&i.currentTranslate>a.minTranslate()?(g=!1,s.resistance&&(i.currentTranslate=a.minTranslate()-1+Math.pow(-a.minTranslate()+i.startTranslate+f,y))):f<0&&i.currentTranslate<a.maxTranslate()&&(g=!1,s.resistance&&(i.currentTranslate=a.maxTranslate()+1-Math.pow(a.maxTranslate()-i.startTranslate-f,y))),g&&(o.preventedByNestedSwiper=!0),!a.allowSlideNext&&"next"===a.swipeDirection&&i.currentTranslate<i.startTranslate&&(i.currentTranslate=i.startTranslate),!a.allowSlidePrev&&"prev"===a.swipeDirection&&i.currentTranslate>i.startTranslate&&(i.currentTranslate=i.startTranslate),s.threshold>0){if(!(Math.abs(f)>s.threshold||i.allowThresholdMove))return void(i.currentTranslate=i.startTranslate);if(!i.allowThresholdMove)return i.allowThresholdMove=!0,n.startX=n.currentX,n.startY=n.currentY,i.currentTranslate=i.startTranslate,void(n.diff=a.isHorizontal()?n.currentX-n.startX:n.currentY-n.startY)}s.followFinger&&!s.cssMode&&((s.freeMode||s.watchSlidesProgress||s.watchSlidesVisibility)&&(a.updateActiveIndex(),a.updateSlidesClasses()),s.freeMode&&(0===i.velocities.length&&i.velocities.push({position:n[a.isHorizontal()?"startX":"startY"],time:i.touchStartTime}),i.velocities.push({position:n[a.isHorizontal()?"currentX":"currentY"],time:x()})),a.updateProgress(i.currentTranslate),a.setTranslate(i.currentTranslate))}}}}}else i.startMoving&&i.isScrolling&&a.emit("touchMoveOpposite",o)}function D(e){var t=this,a=t.touchEventsData,i=t.params,s=t.touches,r=t.rtlTranslate,n=t.$wrapperEl,l=t.slidesGrid,o=t.snapGrid,d=e;if(d.originalEvent&&(d=d.originalEvent),a.allowTouchCallbacks&&t.emit("touchEnd",d),a.allowTouchCallbacks=!1,!a.isTouched)return a.isMoved&&i.grabCursor&&t.setGrabCursor(!1),a.isMoved=!1,void(a.startMoving=!1);i.grabCursor&&a.isMoved&&a.isTouched&&(!0===t.allowSlideNext||!0===t.allowSlidePrev)&&t.setGrabCursor(!1);var p,u=x(),c=u-a.touchStartTime;if(t.allowClick&&(t.updateClickedSlide(d),t.emit("tap click",d),c<300&&u-a.lastClickTime<300&&t.emit("doubleTap doubleClick",d)),a.lastClickTime=x(),E((function(){t.destroyed||(t.allowClick=!0)})),!a.isTouched||!a.isMoved||!t.swipeDirection||0===s.diff||a.currentTranslate===a.startTranslate)return a.isTouched=!1,a.isMoved=!1,void(a.startMoving=!1);if(a.isTouched=!1,a.isMoved=!1,a.startMoving=!1,p=i.followFinger?r?t.translate:-t.translate:-a.currentTranslate,!i.cssMode)if(i.freeMode){if(p<-t.minTranslate())return void t.slideTo(t.activeIndex);if(p>-t.maxTranslate())return void(t.slides.length<o.length?t.slideTo(o.length-1):t.slideTo(t.slides.length-1));if(i.freeModeMomentum){if(a.velocities.length>1){var h=a.velocities.pop(),v=a.velocities.pop(),f=h.position-v.position,m=h.time-v.time;t.velocity=f/m,t.velocity/=2,Math.abs(t.velocity)<i.freeModeMinimumVelocity&&(t.velocity=0),(m>150||x()-h.time>300)&&(t.velocity=0)}else t.velocity=0;t.velocity*=i.freeModeMomentumVelocityRatio,a.velocities.length=0;var g=1e3*i.freeModeMomentumRatio,y=t.velocity*g,w=t.translate+y;r&&(w=-w);var b,T,C=!1,S=20*Math.abs(t.velocity)*i.freeModeMomentumBounceRatio;if(w<t.maxTranslate())i.freeModeMomentumBounce?(w+t.maxTranslate()<-S&&(w=t.maxTranslate()-S),b=t.maxTranslate(),C=!0,a.allowMomentumBounce=!0):w=t.maxTranslate(),i.loop&&i.centeredSlides&&(T=!0);else if(w>t.minTranslate())i.freeModeMomentumBounce?(w-t.minTranslate()>S&&(w=t.minTranslate()+S),b=t.minTranslate(),C=!0,a.allowMomentumBounce=!0):w=t.minTranslate(),i.loop&&i.centeredSlides&&(T=!0);else if(i.freeModeSticky){for(var M,z=0;z<o.length;z+=1)if(o[z]>-w){M=z;break}w=-(w=Math.abs(o[M]-w)<Math.abs(o[M-1]-w)||"next"===t.swipeDirection?o[M]:o[M-1])}if(T&&t.once("transitionEnd",(function(){t.loopFix()})),0!==t.velocity){if(g=r?Math.abs((-w-t.translate)/t.velocity):Math.abs((w-t.translate)/t.velocity),i.freeModeSticky){var P=Math.abs((r?-w:w)-t.translate),k=t.slidesSizesGrid[t.activeIndex];g=P<k?i.speed:P<2*k?1.5*i.speed:2.5*i.speed}}else if(i.freeModeSticky)return void t.slideToClosest();i.freeModeMomentumBounce&&C?(t.updateProgress(b),t.setTransition(g),t.setTranslate(w),t.transitionStart(!0,t.swipeDirection),t.animating=!0,n.transitionEnd((function(){t&&!t.destroyed&&a.allowMomentumBounce&&(t.emit("momentumBounce"),t.setTransition(i.speed),setTimeout((function(){t.setTranslate(b),n.transitionEnd((function(){t&&!t.destroyed&&t.transitionEnd()}))}),0))}))):t.velocity?(t.updateProgress(w),t.setTransition(g),t.setTranslate(w),t.transitionStart(!0,t.swipeDirection),t.animating||(t.animating=!0,n.transitionEnd((function(){t&&!t.destroyed&&t.transitionEnd()})))):t.updateProgress(w),t.updateActiveIndex(),t.updateSlidesClasses()}else if(i.freeModeSticky)return void t.slideToClosest();(!i.freeModeMomentum||c>=i.longSwipesMs)&&(t.updateProgress(),t.updateActiveIndex(),t.updateSlidesClasses())}else{for(var L=0,$=t.slidesSizesGrid[0],I=0;I<l.length;I+=I<i.slidesPerGroupSkip?1:i.slidesPerGroup){var O=I<i.slidesPerGroupSkip-1?1:i.slidesPerGroup;void 0!==l[I+O]?p>=l[I]&&p<l[I+O]&&(L=I,$=l[I+O]-l[I]):p>=l[I]&&(L=I,$=l[l.length-1]-l[l.length-2])}var A=(p-l[L])/$,D=L<i.slidesPerGroupSkip-1?1:i.slidesPerGroup;if(c>i.longSwipesMs){if(!i.longSwipes)return void t.slideTo(t.activeIndex);"next"===t.swipeDirection&&(A>=i.longSwipesRatio?t.slideTo(L+D):t.slideTo(L)),"prev"===t.swipeDirection&&(A>1-i.longSwipesRatio?t.slideTo(L+D):t.slideTo(L))}else{if(!i.shortSwipes)return void t.slideTo(t.activeIndex);t.navigation&&(d.target===t.navigation.nextEl||d.target===t.navigation.prevEl)?d.target===t.navigation.nextEl?t.slideTo(L+D):t.slideTo(L):("next"===t.swipeDirection&&t.slideTo(L+D),"prev"===t.swipeDirection&&t.slideTo(L))}}}function G(){var e=this,t=e.params,a=e.el;if(!a||0!==a.offsetWidth){t.breakpoints&&e.setBreakpoint();var i=e.allowSlideNext,s=e.allowSlidePrev,r=e.snapGrid;e.allowSlideNext=!0,e.allowSlidePrev=!0,e.updateSize(),e.updateSlides(),e.updateSlidesClasses(),("auto"===t.slidesPerView||t.slidesPerView>1)&&e.isEnd&&!e.isBeginning&&!e.params.centeredSlides?e.slideTo(e.slides.length-1,0,!1,!0):e.slideTo(e.activeIndex,0,!1,!0),e.autoplay&&e.autoplay.running&&e.autoplay.paused&&e.autoplay.run(),e.allowSlidePrev=s,e.allowSlideNext=i,e.params.watchOverflow&&r!==e.snapGrid&&e.checkOverflow()}}function N(e){var t=this;t.allowClick||(t.params.preventClicks&&e.preventDefault(),t.params.preventClicksPropagation&&t.animating&&(e.stopPropagation(),e.stopImmediatePropagation()))}function B(){var e=this,t=e.wrapperEl,a=e.rtlTranslate;e.previousTranslate=e.translate,e.isHorizontal()?e.translate=a?t.scrollWidth-t.offsetWidth-t.scrollLeft:-t.scrollLeft:e.translate=-t.scrollTop,-0===e.translate&&(e.translate=0),e.updateActiveIndex(),e.updateSlidesClasses();var i=e.maxTranslate()-e.minTranslate();(0===i?0:(e.translate-e.minTranslate())/i)!==e.progress&&e.updateProgress(a?-e.translate:e.translate),e.emit("setTranslate",e.translate,!1)}var H=!1;function X(){}var Y={init:!0,direction:"horizontal",touchEventsTarget:"container",initialSlide:0,speed:300,cssMode:!1,updateOnWindowResize:!0,nested:!1,width:null,height:null,preventInteractionOnTransition:!1,userAgent:null,url:null,edgeSwipeDetection:!1,edgeSwipeThreshold:20,freeMode:!1,freeModeMomentum:!0,freeModeMomentumRatio:1,freeModeMomentumBounce:!0,freeModeMomentumBounceRatio:1,freeModeMomentumVelocityRatio:1,freeModeSticky:!1,freeModeMinimumVelocity:.02,autoHeight:!1,setWrapperSize:!1,virtualTranslate:!1,effect:"slide",breakpoints:void 0,spaceBetween:0,slidesPerView:1,slidesPerColumn:1,slidesPerColumnFill:"column",slidesPerGroup:1,slidesPerGroupSkip:0,centeredSlides:!1,centeredSlidesBounds:!1,slidesOffsetBefore:0,slidesOffsetAfter:0,normalizeSlideIndex:!0,centerInsufficientSlides:!1,watchOverflow:!1,roundLengths:!1,touchRatio:1,touchAngle:45,simulateTouch:!0,shortSwipes:!0,longSwipes:!0,longSwipesRatio:.5,longSwipesMs:300,followFinger:!0,allowTouchMove:!0,threshold:0,touchMoveStopPropagation:!1,touchStartPreventDefault:!0,touchStartForcePreventDefault:!1,touchReleaseOnEdges:!1,uniqueNavElements:!0,resistance:!0,resistanceRatio:.85,watchSlidesProgress:!1,watchSlidesVisibility:!1,grabCursor:!1,preventClicks:!0,preventClicksPropagation:!0,slideToClickedSlide:!1,preloadImages:!0,updateOnImagesReady:!0,loop:!1,loopAdditionalSlides:0,loopedSlides:null,loopFillGroupWithBlank:!1,loopPreventsSlide:!0,allowSlidePrev:!0,allowSlideNext:!0,swipeHandler:null,noSwiping:!0,noSwipingClass:"swiper-no-swiping",noSwipingSelector:null,passiveListeners:!0,containerModifierClass:"swiper-container-",slideClass:"swiper-slide",slideBlankClass:"swiper-slide-invisible-blank",slideActiveClass:"swiper-slide-active",slideDuplicateActiveClass:"swiper-slide-duplicate-active",slideVisibleClass:"swiper-slide-visible",slideDuplicateClass:"swiper-slide-duplicate",slideNextClass:"swiper-slide-next",slideDuplicateNextClass:"swiper-slide-duplicate-next",slidePrevClass:"swiper-slide-prev",slideDuplicatePrevClass:"swiper-slide-duplicate-prev",wrapperClass:"swiper-wrapper",runCallbacksOnInit:!0,_emitClasses:!1},V={modular:{useParams:function(e){var t=this;t.modules&&Object.keys(t.modules).forEach((function(a){var i=t.modules[a];i.params&&S(e,i.params)}))},useModules:function(e){void 0===e&&(e={});var t=this;t.modules&&Object.keys(t.modules).forEach((function(a){var i=t.modules[a],s=e[a]||{};i.on&&t.on&&Object.keys(i.on).forEach((function(e){t.on(e,i.on[e])})),i.create&&i.create.bind(t)(s)}))}},eventsEmitter:{on:function(e,t,a){var i=this;if("function"!=typeof t)return i;var s=a?"unshift":"push";return e.split(" ").forEach((function(e){i.eventsListeners[e]||(i.eventsListeners[e]=[]),i.eventsListeners[e][s](t)})),i},once:function(e,t,a){var i=this;if("function"!=typeof t)return i;function s(){i.off(e,s),s.__emitterProxy&&delete s.__emitterProxy;for(var a=arguments.length,r=new Array(a),n=0;n<a;n++)r[n]=arguments[n];t.apply(i,r)}return s.__emitterProxy=t,i.on(e,s,a)},onAny:function(e,t){var a=this;if("function"!=typeof e)return a;var i=t?"unshift":"push";return a.eventsAnyListeners.indexOf(e)<0&&a.eventsAnyListeners[i](e),a},offAny:function(e){var t=this;if(!t.eventsAnyListeners)return t;var a=t.eventsAnyListeners.indexOf(e);return a>=0&&t.eventsAnyListeners.splice(a,1),t},off:function(e,t){var a=this;return a.eventsListeners?(e.split(" ").forEach((function(e){void 0===t?a.eventsListeners[e]=[]:a.eventsListeners[e]&&a.eventsListeners[e].forEach((function(i,s){(i===t||i.__emitterProxy&&i.__emitterProxy===t)&&a.eventsListeners[e].splice(s,1)}))})),a):a},emit:function(){var e,t,a,i=this;if(!i.eventsListeners)return i;for(var s=arguments.length,r=new Array(s),n=0;n<s;n++)r[n]=arguments[n];"string"==typeof r[0]||Array.isArray(r[0])?(e=r[0],t=r.slice(1,r.length),a=i):(e=r[0].events,t=r[0].data,a=r[0].context||i),t.unshift(a);var l=Array.isArray(e)?e:e.split(" ");return l.forEach((function(e){i.eventsAnyListeners&&i.eventsAnyListeners.length&&i.eventsAnyListeners.forEach((function(i){i.apply(a,[e].concat(t))})),i.eventsListeners&&i.eventsListeners[e]&&i.eventsListeners[e].forEach((function(e){e.apply(a,t)}))})),i}},update:{updateSize:function(){var e,t,a=this,i=a.$el;e=void 0!==a.params.width&&null!==a.params.width?a.params.width:i[0].clientWidth,t=void 0!==a.params.height&&null!==a.params.height?a.params.height:i[0].clientHeight,0===e&&a.isHorizontal()||0===t&&a.isVertical()||(e=e-parseInt(i.css("padding-left")||0,10)-parseInt(i.css("padding-right")||0,10),t=t-parseInt(i.css("padding-top")||0,10)-parseInt(i.css("padding-bottom")||0,10),Number.isNaN(e)&&(e=0),Number.isNaN(t)&&(t=0),S(a,{width:e,height:t,size:a.isHorizontal()?e:t}))},updateSlides:function(){var e=this,t=l(),a=e.params,i=e.$wrapperEl,s=e.size,r=e.rtlTranslate,n=e.wrongRTL,o=e.virtual&&a.virtual.enabled,d=o?e.virtual.slides.length:e.slides.length,p=i.children("."+e.params.slideClass),u=o?e.virtual.slides.length:p.length,c=[],h=[],v=[];function f(e,t){return!a.cssMode||t!==p.length-1}var m=a.slidesOffsetBefore;"function"==typeof m&&(m=a.slidesOffsetBefore.call(e));var g=a.slidesOffsetAfter;"function"==typeof g&&(g=a.slidesOffsetAfter.call(e));var y=e.snapGrid.length,w=e.slidesGrid.length,b=a.spaceBetween,E=-m,x=0,T=0;if(void 0!==s){var C,M;"string"==typeof b&&b.indexOf("%")>=0&&(b=parseFloat(b.replace("%",""))/100*s),e.virtualSize=-b,r?p.css({marginLeft:"",marginTop:""}):p.css({marginRight:"",marginBottom:""}),a.slidesPerColumn>1&&(C=Math.floor(u/a.slidesPerColumn)===u/e.params.slidesPerColumn?u:Math.ceil(u/a.slidesPerColumn)*a.slidesPerColumn,"auto"!==a.slidesPerView&&"row"===a.slidesPerColumnFill&&(C=Math.max(C,a.slidesPerView*a.slidesPerColumn)));for(var z,P=a.slidesPerColumn,k=C/P,L=Math.floor(u/a.slidesPerColumn),$=0;$<u;$+=1){M=0;var I=p.eq($);if(a.slidesPerColumn>1){var O=void 0,A=void 0,D=void 0;if("row"===a.slidesPerColumnFill&&a.slidesPerGroup>1){var G=Math.floor($/(a.slidesPerGroup*a.slidesPerColumn)),N=$-a.slidesPerColumn*a.slidesPerGroup*G,B=0===G?a.slidesPerGroup:Math.min(Math.ceil((u-G*P*a.slidesPerGroup)/P),a.slidesPerGroup);O=(A=N-(D=Math.floor(N/B))*B+G*a.slidesPerGroup)+D*C/P,I.css({"-webkit-box-ordinal-group":O,"-moz-box-ordinal-group":O,"-ms-flex-order":O,"-webkit-order":O,order:O})}else"column"===a.slidesPerColumnFill?(D=$-(A=Math.floor($/P))*P,(A>L||A===L&&D===P-1)&&(D+=1)>=P&&(D=0,A+=1)):A=$-(D=Math.floor($/k))*k;I.css("margin-"+(e.isHorizontal()?"top":"left"),0!==D&&a.spaceBetween&&a.spaceBetween+"px")}if("none"!==I.css("display")){if("auto"===a.slidesPerView){var H=t.getComputedStyle(I[0],null),X=I[0].style.transform,Y=I[0].style.webkitTransform;if(X&&(I[0].style.transform="none"),Y&&(I[0].style.webkitTransform="none"),a.roundLengths)M=e.isHorizontal()?I.outerWidth(!0):I.outerHeight(!0);else if(e.isHorizontal()){var V=parseFloat(H.getPropertyValue("width")||0),F=parseFloat(H.getPropertyValue("padding-left")||0),R=parseFloat(H.getPropertyValue("padding-right")||0),W=parseFloat(H.getPropertyValue("margin-left")||0),q=parseFloat(H.getPropertyValue("margin-right")||0),j=H.getPropertyValue("box-sizing");if(j&&"border-box"===j)M=V+W+q;else{var _=I[0],U=_.clientWidth;M=V+F+R+W+q+(_.offsetWidth-U)}}else{var K=parseFloat(H.getPropertyValue("height")||0),Z=parseFloat(H.getPropertyValue("padding-top")||0),J=parseFloat(H.getPropertyValue("padding-bottom")||0),Q=parseFloat(H.getPropertyValue("margin-top")||0),ee=parseFloat(H.getPropertyValue("margin-bottom")||0),te=H.getPropertyValue("box-sizing");if(te&&"border-box"===te)M=K+Q+ee;else{var ae=I[0],ie=ae.clientHeight;M=K+Z+J+Q+ee+(ae.offsetHeight-ie)}}X&&(I[0].style.transform=X),Y&&(I[0].style.webkitTransform=Y),a.roundLengths&&(M=Math.floor(M))}else M=(s-(a.slidesPerView-1)*b)/a.slidesPerView,a.roundLengths&&(M=Math.floor(M)),p[$]&&(e.isHorizontal()?p[$].style.width=M+"px":p[$].style.height=M+"px");p[$]&&(p[$].swiperSlideSize=M),v.push(M),a.centeredSlides?(E=E+M/2+x/2+b,0===x&&0!==$&&(E=E-s/2-b),0===$&&(E=E-s/2-b),Math.abs(E)<.001&&(E=0),a.roundLengths&&(E=Math.floor(E)),T%a.slidesPerGroup==0&&c.push(E),h.push(E)):(a.roundLengths&&(E=Math.floor(E)),(T-Math.min(e.params.slidesPerGroupSkip,T))%e.params.slidesPerGroup==0&&c.push(E),h.push(E),E=E+M+b),e.virtualSize+=M+b,x=M,T+=1}}if(e.virtualSize=Math.max(e.virtualSize,s)+g,r&&n&&("slide"===a.effect||"coverflow"===a.effect)&&i.css({width:e.virtualSize+a.spaceBetween+"px"}),a.setWrapperSize&&(e.isHorizontal()?i.css({width:e.virtualSize+a.spaceBetween+"px"}):i.css({height:e.virtualSize+a.spaceBetween+"px"})),a.slidesPerColumn>1&&(e.virtualSize=(M+a.spaceBetween)*C,e.virtualSize=Math.ceil(e.virtualSize/a.slidesPerColumn)-a.spaceBetween,e.isHorizontal()?i.css({width:e.virtualSize+a.spaceBetween+"px"}):i.css({height:e.virtualSize+a.spaceBetween+"px"}),a.centeredSlides)){z=[];for(var se=0;se<c.length;se+=1){var re=c[se];a.roundLengths&&(re=Math.floor(re)),c[se]<e.virtualSize+c[0]&&z.push(re)}c=z}if(!a.centeredSlides){z=[];for(var ne=0;ne<c.length;ne+=1){var le=c[ne];a.roundLengths&&(le=Math.floor(le)),c[ne]<=e.virtualSize-s&&z.push(le)}c=z,Math.floor(e.virtualSize-s)-Math.floor(c[c.length-1])>1&&c.push(e.virtualSize-s)}if(0===c.length&&(c=[0]),0!==a.spaceBetween&&(e.isHorizontal()?r?p.filter(f).css({marginLeft:b+"px"}):p.filter(f).css({marginRight:b+"px"}):p.filter(f).css({marginBottom:b+"px"})),a.centeredSlides&&a.centeredSlidesBounds){var oe=0;v.forEach((function(e){oe+=e+(a.spaceBetween?a.spaceBetween:0)}));var de=(oe-=a.spaceBetween)-s;c=c.map((function(e){return e<0?-m:e>de?de+g:e}))}if(a.centerInsufficientSlides){var pe=0;if(v.forEach((function(e){pe+=e+(a.spaceBetween?a.spaceBetween:0)})),(pe-=a.spaceBetween)<s){var ue=(s-pe)/2;c.forEach((function(e,t){c[t]=e-ue})),h.forEach((function(e,t){h[t]=e+ue}))}}S(e,{slides:p,snapGrid:c,slidesGrid:h,slidesSizesGrid:v}),u!==d&&e.emit("slidesLengthChange"),c.length!==y&&(e.params.watchOverflow&&e.checkOverflow(),e.emit("snapGridLengthChange")),h.length!==w&&e.emit("slidesGridLengthChange"),(a.watchSlidesProgress||a.watchSlidesVisibility)&&e.updateSlidesOffset()}},updateAutoHeight:function(e){var t,a=this,i=[],s=0;if("number"==typeof e?a.setTransition(e):!0===e&&a.setTransition(a.params.speed),"auto"!==a.params.slidesPerView&&a.params.slidesPerView>1)if(a.params.centeredSlides)a.visibleSlides.each((function(e){i.push(e)}));else for(t=0;t<Math.ceil(a.params.slidesPerView);t+=1){var r=a.activeIndex+t;if(r>a.slides.length)break;i.push(a.slides.eq(r)[0])}else i.push(a.slides.eq(a.activeIndex)[0]);for(t=0;t<i.length;t+=1)if(void 0!==i[t]){var n=i[t].offsetHeight;s=n>s?n:s}s&&a.$wrapperEl.css("height",s+"px")},updateSlidesOffset:function(){for(var e=this.slides,t=0;t<e.length;t+=1)e[t].swiperSlideOffset=this.isHorizontal()?e[t].offsetLeft:e[t].offsetTop},updateSlidesProgress:function(e){void 0===e&&(e=this&&this.translate||0);var t=this,a=t.params,i=t.slides,s=t.rtlTranslate;if(0!==i.length){void 0===i[0].swiperSlideOffset&&t.updateSlidesOffset();var r=-e;s&&(r=e),i.removeClass(a.slideVisibleClass),t.visibleSlidesIndexes=[],t.visibleSlides=[];for(var n=0;n<i.length;n+=1){var l=i[n],o=(r+(a.centeredSlides?t.minTranslate():0)-l.swiperSlideOffset)/(l.swiperSlideSize+a.spaceBetween);if(a.watchSlidesVisibility||a.centeredSlides&&a.autoHeight){var d=-(r-l.swiperSlideOffset),p=d+t.slidesSizesGrid[n];(d>=0&&d<t.size-1||p>1&&p<=t.size||d<=0&&p>=t.size)&&(t.visibleSlides.push(l),t.visibleSlidesIndexes.push(n),i.eq(n).addClass(a.slideVisibleClass))}l.progress=s?-o:o}t.visibleSlides=m(t.visibleSlides)}},updateProgress:function(e){var t=this;if(void 0===e){var a=t.rtlTranslate?-1:1;e=t&&t.translate&&t.translate*a||0}var i=t.params,s=t.maxTranslate()-t.minTranslate(),r=t.progress,n=t.isBeginning,l=t.isEnd,o=n,d=l;0===s?(r=0,n=!0,l=!0):(n=(r=(e-t.minTranslate())/s)<=0,l=r>=1),S(t,{progress:r,isBeginning:n,isEnd:l}),(i.watchSlidesProgress||i.watchSlidesVisibility||i.centeredSlides&&i.autoHeight)&&t.updateSlidesProgress(e),n&&!o&&t.emit("reachBeginning toEdge"),l&&!d&&t.emit("reachEnd toEdge"),(o&&!n||d&&!l)&&t.emit("fromEdge"),t.emit("progress",r)},updateSlidesClasses:function(){var e,t=this,a=t.slides,i=t.params,s=t.$wrapperEl,r=t.activeIndex,n=t.realIndex,l=t.virtual&&i.virtual.enabled;a.removeClass(i.slideActiveClass+" "+i.slideNextClass+" "+i.slidePrevClass+" "+i.slideDuplicateActiveClass+" "+i.slideDuplicateNextClass+" "+i.slideDuplicatePrevClass),(e=l?t.$wrapperEl.find("."+i.slideClass+'[data-swiper-slide-index="'+r+'"]'):a.eq(r)).addClass(i.slideActiveClass),i.loop&&(e.hasClass(i.slideDuplicateClass)?s.children("."+i.slideClass+":not(."+i.slideDuplicateClass+')[data-swiper-slide-index="'+n+'"]').addClass(i.slideDuplicateActiveClass):s.children("."+i.slideClass+"."+i.slideDuplicateClass+'[data-swiper-slide-index="'+n+'"]').addClass(i.slideDuplicateActiveClass));var o=e.nextAll("."+i.slideClass).eq(0).addClass(i.slideNextClass);i.loop&&0===o.length&&(o=a.eq(0)).addClass(i.slideNextClass);var d=e.prevAll("."+i.slideClass).eq(0).addClass(i.slidePrevClass);i.loop&&0===d.length&&(d=a.eq(-1)).addClass(i.slidePrevClass),i.loop&&(o.hasClass(i.slideDuplicateClass)?s.children("."+i.slideClass+":not(."+i.slideDuplicateClass+')[data-swiper-slide-index="'+o.attr("data-swiper-slide-index")+'"]').addClass(i.slideDuplicateNextClass):s.children("."+i.slideClass+"."+i.slideDuplicateClass+'[data-swiper-slide-index="'+o.attr("data-swiper-slide-index")+'"]').addClass(i.slideDuplicateNextClass),d.hasClass(i.slideDuplicateClass)?s.children("."+i.slideClass+":not(."+i.slideDuplicateClass+')[data-swiper-slide-index="'+d.attr("data-swiper-slide-index")+'"]').addClass(i.slideDuplicatePrevClass):s.children("."+i.slideClass+"."+i.slideDuplicateClass+'[data-swiper-slide-index="'+d.attr("data-swiper-slide-index")+'"]').addClass(i.slideDuplicatePrevClass)),t.emitSlidesClasses()},updateActiveIndex:function(e){var t,a=this,i=a.rtlTranslate?a.translate:-a.translate,s=a.slidesGrid,r=a.snapGrid,n=a.params,l=a.activeIndex,o=a.realIndex,d=a.snapIndex,p=e;if(void 0===p){for(var u=0;u<s.length;u+=1)void 0!==s[u+1]?i>=s[u]&&i<s[u+1]-(s[u+1]-s[u])/2?p=u:i>=s[u]&&i<s[u+1]&&(p=u+1):i>=s[u]&&(p=u);n.normalizeSlideIndex&&(p<0||void 0===p)&&(p=0)}if(r.indexOf(i)>=0)t=r.indexOf(i);else{var c=Math.min(n.slidesPerGroupSkip,p);t=c+Math.floor((p-c)/n.slidesPerGroup)}if(t>=r.length&&(t=r.length-1),p!==l){var h=parseInt(a.slides.eq(p).attr("data-swiper-slide-index")||p,10);S(a,{snapIndex:t,realIndex:h,previousIndex:l,activeIndex:p}),a.emit("activeIndexChange"),a.emit("snapIndexChange"),o!==h&&a.emit("realIndexChange"),(a.initialized||a.params.runCallbacksOnInit)&&a.emit("slideChange")}else t!==d&&(a.snapIndex=t,a.emit("snapIndexChange"))},updateClickedSlide:function(e){var t=this,a=t.params,i=m(e.target).closest("."+a.slideClass)[0],s=!1;if(i)for(var r=0;r<t.slides.length;r+=1)t.slides[r]===i&&(s=!0);if(!i||!s)return t.clickedSlide=void 0,void(t.clickedIndex=void 0);t.clickedSlide=i,t.virtual&&t.params.virtual.enabled?t.clickedIndex=parseInt(m(i).attr("data-swiper-slide-index"),10):t.clickedIndex=m(i).index(),a.slideToClickedSlide&&void 0!==t.clickedIndex&&t.clickedIndex!==t.activeIndex&&t.slideToClickedSlide()}},translate:{getTranslate:function(e){void 0===e&&(e=this.isHorizontal()?"x":"y");var t=this,a=t.params,i=t.rtlTranslate,s=t.translate,r=t.$wrapperEl;if(a.virtualTranslate)return i?-s:s;if(a.cssMode)return s;var n=T(r[0],e);return i&&(n=-n),n||0},setTranslate:function(e,t){var a=this,i=a.rtlTranslate,s=a.params,r=a.$wrapperEl,n=a.wrapperEl,l=a.progress,o=0,d=0;a.isHorizontal()?o=i?-e:e:d=e,s.roundLengths&&(o=Math.floor(o),d=Math.floor(d)),s.cssMode?n[a.isHorizontal()?"scrollLeft":"scrollTop"]=a.isHorizontal()?-o:-d:s.virtualTranslate||r.transform("translate3d("+o+"px, "+d+"px, 0px)"),a.previousTranslate=a.translate,a.translate=a.isHorizontal()?o:d;var p=a.maxTranslate()-a.minTranslate();(0===p?0:(e-a.minTranslate())/p)!==l&&a.updateProgress(e),a.emit("setTranslate",a.translate,t)},minTranslate:function(){return-this.snapGrid[0]},maxTranslate:function(){return-this.snapGrid[this.snapGrid.length-1]},translateTo:function(e,t,a,i,s){void 0===e&&(e=0),void 0===t&&(t=this.params.speed),void 0===a&&(a=!0),void 0===i&&(i=!0);var r=this,n=r.params,l=r.wrapperEl;if(r.animating&&n.preventInteractionOnTransition)return!1;var o,d=r.minTranslate(),p=r.maxTranslate();if(o=i&&e>d?d:i&&e<p?p:e,r.updateProgress(o),n.cssMode){var u,c=r.isHorizontal();if(0===t)l[c?"scrollLeft":"scrollTop"]=-o;else if(l.scrollTo)l.scrollTo(((u={})[c?"left":"top"]=-o,u.behavior="smooth",u));else l[c?"scrollLeft":"scrollTop"]=-o;return!0}return 0===t?(r.setTransition(0),r.setTranslate(o),a&&(r.emit("beforeTransitionStart",t,s),r.emit("transitionEnd"))):(r.setTransition(t),r.setTranslate(o),a&&(r.emit("beforeTransitionStart",t,s),r.emit("transitionStart")),r.animating||(r.animating=!0,r.onTranslateToWrapperTransitionEnd||(r.onTranslateToWrapperTransitionEnd=function(e){r&&!r.destroyed&&e.target===this&&(r.$wrapperEl[0].removeEventListener("transitionend",r.onTranslateToWrapperTransitionEnd),r.$wrapperEl[0].removeEventListener("webkitTransitionEnd",r.onTranslateToWrapperTransitionEnd),r.onTranslateToWrapperTransitionEnd=null,delete r.onTranslateToWrapperTransitionEnd,a&&r.emit("transitionEnd"))}),r.$wrapperEl[0].addEventListener("transitionend",r.onTranslateToWrapperTransitionEnd),r.$wrapperEl[0].addEventListener("webkitTransitionEnd",r.onTranslateToWrapperTransitionEnd))),!0}},transition:{setTransition:function(e,t){var a=this;a.params.cssMode||a.$wrapperEl.transition(e),a.emit("setTransition",e,t)},transitionStart:function(e,t){void 0===e&&(e=!0);var a=this,i=a.activeIndex,s=a.params,r=a.previousIndex;if(!s.cssMode){s.autoHeight&&a.updateAutoHeight();var n=t;if(n||(n=i>r?"next":i<r?"prev":"reset"),a.emit("transitionStart"),e&&i!==r){if("reset"===n)return void a.emit("slideResetTransitionStart");a.emit("slideChangeTransitionStart"),"next"===n?a.emit("slideNextTransitionStart"):a.emit("slidePrevTransitionStart")}}},transitionEnd:function(e,t){void 0===e&&(e=!0);var a=this,i=a.activeIndex,s=a.previousIndex,r=a.params;if(a.animating=!1,!r.cssMode){a.setTransition(0);var n=t;if(n||(n=i>s?"next":i<s?"prev":"reset"),a.emit("transitionEnd"),e&&i!==s){if("reset"===n)return void a.emit("slideResetTransitionEnd");a.emit("slideChangeTransitionEnd"),"next"===n?a.emit("slideNextTransitionEnd"):a.emit("slidePrevTransitionEnd")}}}},slide:{slideTo:function(e,t,a,i){if(void 0===e&&(e=0),void 0===t&&(t=this.params.speed),void 0===a&&(a=!0),"number"!=typeof e&&"string"!=typeof e)throw new Error("The 'index' argument cannot have type other than 'number' or 'string'. ["+typeof e+"] given.");if("string"==typeof e){var s=parseInt(e,10);if(!isFinite(s))throw new Error("The passed-in 'index' (string) couldn't be converted to 'number'. ["+e+"] given.");e=s}var r=this,n=e;n<0&&(n=0);var l=r.params,o=r.snapGrid,d=r.slidesGrid,p=r.previousIndex,u=r.activeIndex,c=r.rtlTranslate,h=r.wrapperEl;if(r.animating&&l.preventInteractionOnTransition)return!1;var v=Math.min(r.params.slidesPerGroupSkip,n),f=v+Math.floor((n-v)/r.params.slidesPerGroup);f>=o.length&&(f=o.length-1),(u||l.initialSlide||0)===(p||0)&&a&&r.emit("beforeSlideChangeStart");var m,g=-o[f];if(r.updateProgress(g),l.normalizeSlideIndex)for(var y=0;y<d.length;y+=1)-Math.floor(100*g)>=Math.floor(100*d[y])&&(n=y);if(r.initialized&&n!==u){if(!r.allowSlideNext&&g<r.translate&&g<r.minTranslate())return!1;if(!r.allowSlidePrev&&g>r.translate&&g>r.maxTranslate()&&(u||0)!==n)return!1}if(m=n>u?"next":n<u?"prev":"reset",c&&-g===r.translate||!c&&g===r.translate)return r.updateActiveIndex(n),l.autoHeight&&r.updateAutoHeight(),r.updateSlidesClasses(),"slide"!==l.effect&&r.setTranslate(g),"reset"!==m&&(r.transitionStart(a,m),r.transitionEnd(a,m)),!1;if(l.cssMode){var w,b=r.isHorizontal(),E=-g;if(c&&(E=h.scrollWidth-h.offsetWidth-E),0===t)h[b?"scrollLeft":"scrollTop"]=E;else if(h.scrollTo)h.scrollTo(((w={})[b?"left":"top"]=E,w.behavior="smooth",w));else h[b?"scrollLeft":"scrollTop"]=E;return!0}return 0===t?(r.setTransition(0),r.setTranslate(g),r.updateActiveIndex(n),r.updateSlidesClasses(),r.emit("beforeTransitionStart",t,i),r.transitionStart(a,m),r.transitionEnd(a,m)):(r.setTransition(t),r.setTranslate(g),r.updateActiveIndex(n),r.updateSlidesClasses(),r.emit("beforeTransitionStart",t,i),r.transitionStart(a,m),r.animating||(r.animating=!0,r.onSlideToWrapperTransitionEnd||(r.onSlideToWrapperTransitionEnd=function(e){r&&!r.destroyed&&e.target===this&&(r.$wrapperEl[0].removeEventListener("transitionend",r.onSlideToWrapperTransitionEnd),r.$wrapperEl[0].removeEventListener("webkitTransitionEnd",r.onSlideToWrapperTransitionEnd),r.onSlideToWrapperTransitionEnd=null,delete r.onSlideToWrapperTransitionEnd,r.transitionEnd(a,m))}),r.$wrapperEl[0].addEventListener("transitionend",r.onSlideToWrapperTransitionEnd),r.$wrapperEl[0].addEventListener("webkitTransitionEnd",r.onSlideToWrapperTransitionEnd))),!0},slideToLoop:function(e,t,a,i){void 0===e&&(e=0),void 0===t&&(t=this.params.speed),void 0===a&&(a=!0);var s=this,r=e;return s.params.loop&&(r+=s.loopedSlides),s.slideTo(r,t,a,i)},slideNext:function(e,t,a){void 0===e&&(e=this.params.speed),void 0===t&&(t=!0);var i=this,s=i.params,r=i.animating,n=i.activeIndex<s.slidesPerGroupSkip?1:s.slidesPerGroup;if(s.loop){if(r&&s.loopPreventsSlide)return!1;i.loopFix(),i._clientLeft=i.$wrapperEl[0].clientLeft}return i.slideTo(i.activeIndex+n,e,t,a)},slidePrev:function(e,t,a){void 0===e&&(e=this.params.speed),void 0===t&&(t=!0);var i=this,s=i.params,r=i.animating,n=i.snapGrid,l=i.slidesGrid,o=i.rtlTranslate;if(s.loop){if(r&&s.loopPreventsSlide)return!1;i.loopFix(),i._clientLeft=i.$wrapperEl[0].clientLeft}function d(e){return e<0?-Math.floor(Math.abs(e)):Math.floor(e)}var p,u=d(o?i.translate:-i.translate),c=n.map((function(e){return d(e)})),h=(n[c.indexOf(u)],n[c.indexOf(u)-1]);return void 0===h&&s.cssMode&&n.forEach((function(e){!h&&u>=e&&(h=e)})),void 0!==h&&(p=l.indexOf(h))<0&&(p=i.activeIndex-1),i.slideTo(p,e,t,a)},slideReset:function(e,t,a){return void 0===e&&(e=this.params.speed),void 0===t&&(t=!0),this.slideTo(this.activeIndex,e,t,a)},slideToClosest:function(e,t,a,i){void 0===e&&(e=this.params.speed),void 0===t&&(t=!0),void 0===i&&(i=.5);var s=this,r=s.activeIndex,n=Math.min(s.params.slidesPerGroupSkip,r),l=n+Math.floor((r-n)/s.params.slidesPerGroup),o=s.rtlTranslate?s.translate:-s.translate;if(o>=s.snapGrid[l]){var d=s.snapGrid[l];o-d>(s.snapGrid[l+1]-d)*i&&(r+=s.params.slidesPerGroup)}else{var p=s.snapGrid[l-1];o-p<=(s.snapGrid[l]-p)*i&&(r-=s.params.slidesPerGroup)}return r=Math.max(r,0),r=Math.min(r,s.slidesGrid.length-1),s.slideTo(r,e,t,a)},slideToClickedSlide:function(){var e,t=this,a=t.params,i=t.$wrapperEl,s="auto"===a.slidesPerView?t.slidesPerViewDynamic():a.slidesPerView,r=t.clickedIndex;if(a.loop){if(t.animating)return;e=parseInt(m(t.clickedSlide).attr("data-swiper-slide-index"),10),a.centeredSlides?r<t.loopedSlides-s/2||r>t.slides.length-t.loopedSlides+s/2?(t.loopFix(),r=i.children("."+a.slideClass+'[data-swiper-slide-index="'+e+'"]:not(.'+a.slideDuplicateClass+")").eq(0).index(),E((function(){t.slideTo(r)}))):t.slideTo(r):r>t.slides.length-s?(t.loopFix(),r=i.children("."+a.slideClass+'[data-swiper-slide-index="'+e+'"]:not(.'+a.slideDuplicateClass+")").eq(0).index(),E((function(){t.slideTo(r)}))):t.slideTo(r)}else t.slideTo(r)}},loop:{loopCreate:function(){var e=this,t=r(),a=e.params,i=e.$wrapperEl;i.children("."+a.slideClass+"."+a.slideDuplicateClass).remove();var s=i.children("."+a.slideClass);if(a.loopFillGroupWithBlank){var n=a.slidesPerGroup-s.length%a.slidesPerGroup;if(n!==a.slidesPerGroup){for(var l=0;l<n;l+=1){var o=m(t.createElement("div")).addClass(a.slideClass+" "+a.slideBlankClass);i.append(o)}s=i.children("."+a.slideClass)}}"auto"!==a.slidesPerView||a.loopedSlides||(a.loopedSlides=s.length),e.loopedSlides=Math.ceil(parseFloat(a.loopedSlides||a.slidesPerView,10)),e.loopedSlides+=a.loopAdditionalSlides,e.loopedSlides>s.length&&(e.loopedSlides=s.length);var d=[],p=[];s.each((function(t,a){var i=m(t);a<e.loopedSlides&&p.push(t),a<s.length&&a>=s.length-e.loopedSlides&&d.push(t),i.attr("data-swiper-slide-index",a)}));for(var u=0;u<p.length;u+=1)i.append(m(p[u].cloneNode(!0)).addClass(a.slideDuplicateClass));for(var c=d.length-1;c>=0;c-=1)i.prepend(m(d[c].cloneNode(!0)).addClass(a.slideDuplicateClass))},loopFix:function(){var e=this;e.emit("beforeLoopFix");var t,a=e.activeIndex,i=e.slides,s=e.loopedSlides,r=e.allowSlidePrev,n=e.allowSlideNext,l=e.snapGrid,o=e.rtlTranslate;e.allowSlidePrev=!0,e.allowSlideNext=!0;var d=-l[a]-e.getTranslate();if(a<s)t=i.length-3*s+a,t+=s,e.slideTo(t,0,!1,!0)&&0!==d&&e.setTranslate((o?-e.translate:e.translate)-d);else if(a>=i.length-s){t=-i.length+a+s,t+=s,e.slideTo(t,0,!1,!0)&&0!==d&&e.setTranslate((o?-e.translate:e.translate)-d)}e.allowSlidePrev=r,e.allowSlideNext=n,e.emit("loopFix")},loopDestroy:function(){var e=this,t=e.$wrapperEl,a=e.params,i=e.slides;t.children("."+a.slideClass+"."+a.slideDuplicateClass+",."+a.slideClass+"."+a.slideBlankClass).remove(),i.removeAttr("data-swiper-slide-index")}},grabCursor:{setGrabCursor:function(e){var t=this;if(!(t.support.touch||!t.params.simulateTouch||t.params.watchOverflow&&t.isLocked||t.params.cssMode)){var a=t.el;a.style.cursor="move",a.style.cursor=e?"-webkit-grabbing":"-webkit-grab",a.style.cursor=e?"-moz-grabbin":"-moz-grab",a.style.cursor=e?"grabbing":"grab"}},unsetGrabCursor:function(){var e=this;e.support.touch||e.params.watchOverflow&&e.isLocked||e.params.cssMode||(e.el.style.cursor="")}},manipulation:{appendSlide:function(e){var t=this,a=t.$wrapperEl,i=t.params;if(i.loop&&t.loopDestroy(),"object"==typeof e&&"length"in e)for(var s=0;s<e.length;s+=1)e[s]&&a.append(e[s]);else a.append(e);i.loop&&t.loopCreate(),i.observer&&t.support.observer||t.update()},prependSlide:function(e){var t=this,a=t.params,i=t.$wrapperEl,s=t.activeIndex;a.loop&&t.loopDestroy();var r=s+1;if("object"==typeof e&&"length"in e){for(var n=0;n<e.length;n+=1)e[n]&&i.prepend(e[n]);r=s+e.length}else i.prepend(e);a.loop&&t.loopCreate(),a.observer&&t.support.observer||t.update(),t.slideTo(r,0,!1)},addSlide:function(e,t){var a=this,i=a.$wrapperEl,s=a.params,r=a.activeIndex;s.loop&&(r-=a.loopedSlides,a.loopDestroy(),a.slides=i.children("."+s.slideClass));var n=a.slides.length;if(e<=0)a.prependSlide(t);else if(e>=n)a.appendSlide(t);else{for(var l=r>e?r+1:r,o=[],d=n-1;d>=e;d-=1){var p=a.slides.eq(d);p.remove(),o.unshift(p)}if("object"==typeof t&&"length"in t){for(var u=0;u<t.length;u+=1)t[u]&&i.append(t[u]);l=r>e?r+t.length:r}else i.append(t);for(var c=0;c<o.length;c+=1)i.append(o[c]);s.loop&&a.loopCreate(),s.observer&&a.support.observer||a.update(),s.loop?a.slideTo(l+a.loopedSlides,0,!1):a.slideTo(l,0,!1)}},removeSlide:function(e){var t=this,a=t.params,i=t.$wrapperEl,s=t.activeIndex;a.loop&&(s-=t.loopedSlides,t.loopDestroy(),t.slides=i.children("."+a.slideClass));var r,n=s;if("object"==typeof e&&"length"in e){for(var l=0;l<e.length;l+=1)r=e[l],t.slides[r]&&t.slides.eq(r).remove(),r<n&&(n-=1);n=Math.max(n,0)}else r=e,t.slides[r]&&t.slides.eq(r).remove(),r<n&&(n-=1),n=Math.max(n,0);a.loop&&t.loopCreate(),a.observer&&t.support.observer||t.update(),a.loop?t.slideTo(n+t.loopedSlides,0,!1):t.slideTo(n,0,!1)},removeAllSlides:function(){for(var e=[],t=0;t<this.slides.length;t+=1)e.push(t);this.removeSlide(e)}},events:{attachEvents:function(){var e=this,t=r(),a=e.params,i=e.touchEvents,s=e.el,n=e.wrapperEl,l=e.device,o=e.support;e.onTouchStart=O.bind(e),e.onTouchMove=A.bind(e),e.onTouchEnd=D.bind(e),a.cssMode&&(e.onScroll=B.bind(e)),e.onClick=N.bind(e);var d=!!a.nested;if(!o.touch&&o.pointerEvents)s.addEventListener(i.start,e.onTouchStart,!1),t.addEventListener(i.move,e.onTouchMove,d),t.addEventListener(i.end,e.onTouchEnd,!1);else{if(o.touch){var p=!("touchstart"!==i.start||!o.passiveListener||!a.passiveListeners)&&{passive:!0,capture:!1};s.addEventListener(i.start,e.onTouchStart,p),s.addEventListener(i.move,e.onTouchMove,o.passiveListener?{passive:!1,capture:d}:d),s.addEventListener(i.end,e.onTouchEnd,p),i.cancel&&s.addEventListener(i.cancel,e.onTouchEnd,p),H||(t.addEventListener("touchstart",X),H=!0)}(a.simulateTouch&&!l.ios&&!l.android||a.simulateTouch&&!o.touch&&l.ios)&&(s.addEventListener("mousedown",e.onTouchStart,!1),t.addEventListener("mousemove",e.onTouchMove,d),t.addEventListener("mouseup",e.onTouchEnd,!1))}(a.preventClicks||a.preventClicksPropagation)&&s.addEventListener("click",e.onClick,!0),a.cssMode&&n.addEventListener("scroll",e.onScroll),a.updateOnWindowResize?e.on(l.ios||l.android?"resize orientationchange observerUpdate":"resize observerUpdate",G,!0):e.on("observerUpdate",G,!0)},detachEvents:function(){var e=this,t=r(),a=e.params,i=e.touchEvents,s=e.el,n=e.wrapperEl,l=e.device,o=e.support,d=!!a.nested;if(!o.touch&&o.pointerEvents)s.removeEventListener(i.start,e.onTouchStart,!1),t.removeEventListener(i.move,e.onTouchMove,d),t.removeEventListener(i.end,e.onTouchEnd,!1);else{if(o.touch){var p=!("onTouchStart"!==i.start||!o.passiveListener||!a.passiveListeners)&&{passive:!0,capture:!1};s.removeEventListener(i.start,e.onTouchStart,p),s.removeEventListener(i.move,e.onTouchMove,d),s.removeEventListener(i.end,e.onTouchEnd,p),i.cancel&&s.removeEventListener(i.cancel,e.onTouchEnd,p)}(a.simulateTouch&&!l.ios&&!l.android||a.simulateTouch&&!o.touch&&l.ios)&&(s.removeEventListener("mousedown",e.onTouchStart,!1),t.removeEventListener("mousemove",e.onTouchMove,d),t.removeEventListener("mouseup",e.onTouchEnd,!1))}(a.preventClicks||a.preventClicksPropagation)&&s.removeEventListener("click",e.onClick,!0),a.cssMode&&n.removeEventListener("scroll",e.onScroll),e.off(l.ios||l.android?"resize orientationchange observerUpdate":"resize observerUpdate",G)}},breakpoints:{setBreakpoint:function(){var e=this,t=e.activeIndex,a=e.initialized,i=e.loopedSlides,s=void 0===i?0:i,r=e.params,n=e.$el,l=r.breakpoints;if(l&&(!l||0!==Object.keys(l).length)){var o=e.getBreakpoint(l);if(o&&e.currentBreakpoint!==o){var d=o in l?l[o]:void 0;d&&["slidesPerView","spaceBetween","slidesPerGroup","slidesPerGroupSkip","slidesPerColumn"].forEach((function(e){var t=d[e];void 0!==t&&(d[e]="slidesPerView"!==e||"AUTO"!==t&&"auto"!==t?"slidesPerView"===e?parseFloat(t):parseInt(t,10):"auto")}));var p=d||e.originalParams,u=r.slidesPerColumn>1,c=p.slidesPerColumn>1;u&&!c?(n.removeClass(r.containerModifierClass+"multirow "+r.containerModifierClass+"multirow-column"),e.emitContainerClasses()):!u&&c&&(n.addClass(r.containerModifierClass+"multirow"),"column"===p.slidesPerColumnFill&&n.addClass(r.containerModifierClass+"multirow-column"),e.emitContainerClasses());var h=p.direction&&p.direction!==r.direction,v=r.loop&&(p.slidesPerView!==r.slidesPerView||h);h&&a&&e.changeDirection(),S(e.params,p),S(e,{allowTouchMove:e.params.allowTouchMove,allowSlideNext:e.params.allowSlideNext,allowSlidePrev:e.params.allowSlidePrev}),e.currentBreakpoint=o,e.emit("_beforeBreakpoint",p),v&&a&&(e.loopDestroy(),e.loopCreate(),e.updateSlides(),e.slideTo(t-s+e.loopedSlides,0,!1)),e.emit("breakpoint",p)}}},getBreakpoint:function(e){var t=l();if(e){var a=!1,i=Object.keys(e).map((function(e){if("string"==typeof e&&0===e.indexOf("@")){var a=parseFloat(e.substr(1));return{value:t.innerHeight*a,point:e}}return{value:e,point:e}}));i.sort((function(e,t){return parseInt(e.value,10)-parseInt(t.value,10)}));for(var s=0;s<i.length;s+=1){var r=i[s],n=r.point;r.value<=t.innerWidth&&(a=n)}return a||"max"}}},checkOverflow:{checkOverflow:function(){var e=this,t=e.params,a=e.isLocked,i=e.slides.length>0&&t.slidesOffsetBefore+t.spaceBetween*(e.slides.length-1)+e.slides[0].offsetWidth*e.slides.length;t.slidesOffsetBefore&&t.slidesOffsetAfter&&i?e.isLocked=i<=e.size:e.isLocked=1===e.snapGrid.length,e.allowSlideNext=!e.isLocked,e.allowSlidePrev=!e.isLocked,a!==e.isLocked&&e.emit(e.isLocked?"lock":"unlock"),a&&a!==e.isLocked&&(e.isEnd=!1,e.navigation&&e.navigation.update())}},classes:{addClasses:function(){var e=this,t=e.classNames,a=e.params,i=e.rtl,s=e.$el,r=e.device,n=[];n.push("initialized"),n.push(a.direction),a.freeMode&&n.push("free-mode"),a.autoHeight&&n.push("autoheight"),i&&n.push("rtl"),a.slidesPerColumn>1&&(n.push("multirow"),"column"===a.slidesPerColumnFill&&n.push("multirow-column")),r.android&&n.push("android"),r.ios&&n.push("ios"),a.cssMode&&n.push("css-mode"),n.forEach((function(e){t.push(a.containerModifierClass+e)})),s.addClass(t.join(" ")),e.emitContainerClasses()},removeClasses:function(){var e=this,t=e.$el,a=e.classNames;t.removeClass(a.join(" ")),e.emitContainerClasses()}},images:{loadImage:function(e,t,a,i,s,r){var n,o=l();function d(){r&&r()}m(e).parent("picture")[0]||e.complete&&s?d():t?((n=new o.Image).onload=d,n.onerror=d,i&&(n.sizes=i),a&&(n.srcset=a),t&&(n.src=t)):d()},preloadImages:function(){var e=this;function t(){null!=e&&e&&!e.destroyed&&(void 0!==e.imagesLoaded&&(e.imagesLoaded+=1),e.imagesLoaded===e.imagesToLoad.length&&(e.params.updateOnImagesReady&&e.update(),e.emit("imagesReady")))}e.imagesToLoad=e.$el.find("img");for(var a=0;a<e.imagesToLoad.length;a+=1){var i=e.imagesToLoad[a];e.loadImage(i,i.currentSrc||i.getAttribute("src"),i.srcset||i.getAttribute("srcset"),i.sizes||i.getAttribute("sizes"),!0,t)}}}},F={},R=function(){function t(){for(var e,a,i=arguments.length,s=new Array(i),r=0;r<i;r++)s[r]=arguments[r];1===s.length&&s[0].constructor&&s[0].constructor===Object?a=s[0]:(e=s[0],a=s[1]),a||(a={}),a=S({},a),e&&!a.el&&(a.el=e);var n=this;n.support=z(),n.device=P({userAgent:a.userAgent}),n.browser=k(),n.eventsListeners={},n.eventsAnyListeners=[],void 0===n.modules&&(n.modules={}),Object.keys(n.modules).forEach((function(e){var t=n.modules[e];if(t.params){var i=Object.keys(t.params)[0],s=t.params[i];if("object"!=typeof s||null===s)return;if(!(i in a)||!("enabled"in s))return;!0===a[i]&&(a[i]={enabled:!0}),"object"!=typeof a[i]||"enabled"in a[i]||(a[i].enabled=!0),a[i]||(a[i]={enabled:!1})}}));var l=S({},Y);n.useParams(l),n.params=S({},l,F,a),n.originalParams=S({},n.params),n.passedParams=S({},a),n.params&&n.params.on&&Object.keys(n.params.on).forEach((function(e){n.on(e,n.params.on[e])})),n.params&&n.params.onAny&&n.onAny(n.params.onAny),n.$=m;var o=m(n.params.el);if(e=o[0]){if(o.length>1){var d=[];return o.each((function(e){var i=S({},a,{el:e});d.push(new t(i))})),d}var p,u,c;return e.swiper=n,e&&e.shadowRoot&&e.shadowRoot.querySelector?(p=m(e.shadowRoot.querySelector("."+n.params.wrapperClass))).children=function(e){return o.children(e)}:p=o.children("."+n.params.wrapperClass),S(n,{$el:o,el:e,$wrapperEl:p,wrapperEl:p[0],classNames:[],slides:m(),slidesGrid:[],snapGrid:[],slidesSizesGrid:[],isHorizontal:function(){return"horizontal"===n.params.direction},isVertical:function(){return"vertical"===n.params.direction},rtl:"rtl"===e.dir.toLowerCase()||"rtl"===o.css("direction"),rtlTranslate:"horizontal"===n.params.direction&&("rtl"===e.dir.toLowerCase()||"rtl"===o.css("direction")),wrongRTL:"-webkit-box"===p.css("display"),activeIndex:0,realIndex:0,isBeginning:!0,isEnd:!1,translate:0,previousTranslate:0,progress:0,velocity:0,animating:!1,allowSlideNext:n.params.allowSlideNext,allowSlidePrev:n.params.allowSlidePrev,touchEvents:(u=["touchstart","touchmove","touchend","touchcancel"],c=["mousedown","mousemove","mouseup"],n.support.pointerEvents&&(c=["pointerdown","pointermove","pointerup"]),n.touchEventsTouch={start:u[0],move:u[1],end:u[2],cancel:u[3]},n.touchEventsDesktop={start:c[0],move:c[1],end:c[2]},n.support.touch||!n.params.simulateTouch?n.touchEventsTouch:n.touchEventsDesktop),touchEventsData:{isTouched:void 0,isMoved:void 0,allowTouchCallbacks:void 0,touchStartTime:void 0,isScrolling:void 0,currentTranslate:void 0,startTranslate:void 0,allowThresholdMove:void 0,formElements:"input, select, option, textarea, button, video, label",lastClickTime:x(),clickTimeout:void 0,velocities:[],allowMomentumBounce:void 0,isTouchEvent:void 0,startMoving:void 0},allowClick:!0,allowTouchMove:n.params.allowTouchMove,touches:{startX:0,startY:0,currentX:0,currentY:0,diff:0},imagesToLoad:[],imagesLoaded:0}),n.useModules(),n.emit("_swiper"),n.params.init&&n.init(),n}}var a,i,s,r=t.prototype;return r.emitContainerClasses=function(){var e=this;if(e.params._emitClasses&&e.el){var t=e.el.className.split(" ").filter((function(t){return 0===t.indexOf("swiper-container")||0===t.indexOf(e.params.containerModifierClass)}));e.emit("_containerClasses",t.join(" "))}},r.getSlideClasses=function(e){var t=this;return e.className.split(" ").filter((function(e){return 0===e.indexOf("swiper-slide")||0===e.indexOf(t.params.slideClass)})).join(" ")},r.emitSlidesClasses=function(){var e=this;e.params._emitClasses&&e.el&&e.slides.each((function(t){var a=e.getSlideClasses(t);e.emit("_slideClass",t,a)}))},r.slidesPerViewDynamic=function(){var e=this,t=e.params,a=e.slides,i=e.slidesGrid,s=e.size,r=e.activeIndex,n=1;if(t.centeredSlides){for(var l,o=a[r].swiperSlideSize,d=r+1;d<a.length;d+=1)a[d]&&!l&&(n+=1,(o+=a[d].swiperSlideSize)>s&&(l=!0));for(var p=r-1;p>=0;p-=1)a[p]&&!l&&(n+=1,(o+=a[p].swiperSlideSize)>s&&(l=!0))}else for(var u=r+1;u<a.length;u+=1)i[u]-i[r]<s&&(n+=1);return n},r.update=function(){var e=this;if(e&&!e.destroyed){var t=e.snapGrid,a=e.params;a.breakpoints&&e.setBreakpoint(),e.updateSize(),e.updateSlides(),e.updateProgress(),e.updateSlidesClasses(),e.params.freeMode?(i(),e.params.autoHeight&&e.updateAutoHeight()):(("auto"===e.params.slidesPerView||e.params.slidesPerView>1)&&e.isEnd&&!e.params.centeredSlides?e.slideTo(e.slides.length-1,0,!1,!0):e.slideTo(e.activeIndex,0,!1,!0))||i(),a.watchOverflow&&t!==e.snapGrid&&e.checkOverflow(),e.emit("update")}function i(){var t=e.rtlTranslate?-1*e.translate:e.translate,a=Math.min(Math.max(t,e.maxTranslate()),e.minTranslate());e.setTranslate(a),e.updateActiveIndex(),e.updateSlidesClasses()}},r.changeDirection=function(e,t){void 0===t&&(t=!0);var a=this,i=a.params.direction;return e||(e="horizontal"===i?"vertical":"horizontal"),e===i||"horizontal"!==e&&"vertical"!==e||(a.$el.removeClass(""+a.params.containerModifierClass+i).addClass(""+a.params.containerModifierClass+e),a.emitContainerClasses(),a.params.direction=e,a.slides.each((function(t){"vertical"===e?t.style.width="":t.style.height=""})),a.emit("changeDirection"),t&&a.update()),a},r.init=function(){var e=this;e.initialized||(e.emit("beforeInit"),e.params.breakpoints&&e.setBreakpoint(),e.addClasses(),e.params.loop&&e.loopCreate(),e.updateSize(),e.updateSlides(),e.params.watchOverflow&&e.checkOverflow(),e.params.grabCursor&&e.setGrabCursor(),e.params.preloadImages&&e.preloadImages(),e.params.loop?e.slideTo(e.params.initialSlide+e.loopedSlides,0,e.params.runCallbacksOnInit):e.slideTo(e.params.initialSlide,0,e.params.runCallbacksOnInit),e.attachEvents(),e.initialized=!0,e.emit("init"),e.emit("afterInit"))},r.destroy=function(e,t){void 0===e&&(e=!0),void 0===t&&(t=!0);var a,i=this,s=i.params,r=i.$el,n=i.$wrapperEl,l=i.slides;return void 0===i.params||i.destroyed||(i.emit("beforeDestroy"),i.initialized=!1,i.detachEvents(),s.loop&&i.loopDestroy(),t&&(i.removeClasses(),r.removeAttr("style"),n.removeAttr("style"),l&&l.length&&l.removeClass([s.slideVisibleClass,s.slideActiveClass,s.slideNextClass,s.slidePrevClass].join(" ")).removeAttr("style").removeAttr("data-swiper-slide-index")),i.emit("destroy"),Object.keys(i.eventsListeners).forEach((function(e){i.off(e)})),!1!==e&&(i.$el[0].swiper=null,a=i,Object.keys(a).forEach((function(e){try{a[e]=null}catch(e){}try{delete a[e]}catch(e){}}))),i.destroyed=!0),null},t.extendDefaults=function(e){S(F,e)},t.installModule=function(e){t.prototype.modules||(t.prototype.modules={});var a=e.name||Object.keys(t.prototype.modules).length+"_"+x();t.prototype.modules[a]=e},t.use=function(e){return Array.isArray(e)?(e.forEach((function(e){return t.installModule(e)})),t):(t.installModule(e),t)},a=t,s=[{key:"extendedDefaults",get:function(){return F}},{key:"defaults",get:function(){return Y}}],(i=null)&&e(a.prototype,i),s&&e(a,s),t}();Object.keys(V).forEach((function(e){Object.keys(V[e]).forEach((function(t){R.prototype[t]=V[e][t]}))})),R.use([L,I]);var W={update:function(e){var t=this,a=t.params,i=a.slidesPerView,s=a.slidesPerGroup,r=a.centeredSlides,n=t.params.virtual,l=n.addSlidesBefore,o=n.addSlidesAfter,d=t.virtual,p=d.from,u=d.to,c=d.slides,h=d.slidesGrid,v=d.renderSlide,f=d.offset;t.updateActiveIndex();var m,g,y,w=t.activeIndex||0;m=t.rtlTranslate?"right":t.isHorizontal()?"left":"top",r?(g=Math.floor(i/2)+s+o,y=Math.floor(i/2)+s+l):(g=i+(s-1)+o,y=s+l);var b=Math.max((w||0)-y,0),E=Math.min((w||0)+g,c.length-1),x=(t.slidesGrid[b]||0)-(t.slidesGrid[0]||0);function T(){t.updateSlides(),t.updateProgress(),t.updateSlidesClasses(),t.lazy&&t.params.lazy.enabled&&t.lazy.load()}if(S(t.virtual,{from:b,to:E,offset:x,slidesGrid:t.slidesGrid}),p===b&&u===E&&!e)return t.slidesGrid!==h&&x!==f&&t.slides.css(m,x+"px"),void t.updateProgress();if(t.params.virtual.renderExternal)return t.params.virtual.renderExternal.call(t,{offset:x,from:b,to:E,slides:function(){for(var e=[],t=b;t<=E;t+=1)e.push(c[t]);return e}()}),void(t.params.virtual.renderExternalUpdate&&T());var C=[],M=[];if(e)t.$wrapperEl.find("."+t.params.slideClass).remove();else for(var z=p;z<=u;z+=1)(z<b||z>E)&&t.$wrapperEl.find("."+t.params.slideClass+'[data-swiper-slide-index="'+z+'"]').remove();for(var P=0;P<c.length;P+=1)P>=b&&P<=E&&(void 0===u||e?M.push(P):(P>u&&M.push(P),P<p&&C.push(P)));M.forEach((function(e){t.$wrapperEl.append(v(c[e],e))})),C.sort((function(e,t){return t-e})).forEach((function(e){t.$wrapperEl.prepend(v(c[e],e))})),t.$wrapperEl.children(".swiper-slide").css(m,x+"px"),T()},renderSlide:function(e,t){var a=this,i=a.params.virtual;if(i.cache&&a.virtual.cache[t])return a.virtual.cache[t];var s=i.renderSlide?m(i.renderSlide.call(a,e,t)):m('<div class="'+a.params.slideClass+'" data-swiper-slide-index="'+t+'">'+e+"</div>");return s.attr("data-swiper-slide-index")||s.attr("data-swiper-slide-index",t),i.cache&&(a.virtual.cache[t]=s),s},appendSlide:function(e){var t=this;if("object"==typeof e&&"length"in e)for(var a=0;a<e.length;a+=1)e[a]&&t.virtual.slides.push(e[a]);else t.virtual.slides.push(e);t.virtual.update(!0)},prependSlide:function(e){var t=this,a=t.activeIndex,i=a+1,s=1;if(Array.isArray(e)){for(var r=0;r<e.length;r+=1)e[r]&&t.virtual.slides.unshift(e[r]);i=a+e.length,s=e.length}else t.virtual.slides.unshift(e);if(t.params.virtual.cache){var n=t.virtual.cache,l={};Object.keys(n).forEach((function(e){var t=n[e],a=t.attr("data-swiper-slide-index");a&&t.attr("data-swiper-slide-index",parseInt(a,10)+1),l[parseInt(e,10)+s]=t})),t.virtual.cache=l}t.virtual.update(!0),t.slideTo(i,0)},removeSlide:function(e){var t=this;if(null!=e){var a=t.activeIndex;if(Array.isArray(e))for(var i=e.length-1;i>=0;i-=1)t.virtual.slides.splice(e[i],1),t.params.virtual.cache&&delete t.virtual.cache[e[i]],e[i]<a&&(a-=1),a=Math.max(a,0);else t.virtual.slides.splice(e,1),t.params.virtual.cache&&delete t.virtual.cache[e],e<a&&(a-=1),a=Math.max(a,0);t.virtual.update(!0),t.slideTo(a,0)}},removeAllSlides:function(){var e=this;e.virtual.slides=[],e.params.virtual.cache&&(e.virtual.cache={}),e.virtual.update(!0),e.slideTo(0,0)}},q={name:"virtual",params:{virtual:{enabled:!1,slides:[],cache:!0,renderSlide:null,renderExternal:null,renderExternalUpdate:!0,addSlidesBefore:0,addSlidesAfter:0}},create:function(){M(this,{virtual:t({},W,{slides:this.params.virtual.slides,cache:{}})})},on:{beforeInit:function(e){if(e.params.virtual.enabled){e.classNames.push(e.params.containerModifierClass+"virtual");var t={watchSlidesProgress:!0};S(e.params,t),S(e.originalParams,t),e.params.initialSlide||e.virtual.update()}},setTranslate:function(e){e.params.virtual.enabled&&e.virtual.update()}}},j={handle:function(e){var t=this,a=l(),i=r(),s=t.rtlTranslate,n=e;n.originalEvent&&(n=n.originalEvent);var o=n.keyCode||n.charCode,d=t.params.keyboard.pageUpDown,p=d&&33===o,u=d&&34===o,c=37===o,h=39===o,v=38===o,f=40===o;if(!t.allowSlideNext&&(t.isHorizontal()&&h||t.isVertical()&&f||u))return!1;if(!t.allowSlidePrev&&(t.isHorizontal()&&c||t.isVertical()&&v||p))return!1;if(!(n.shiftKey||n.altKey||n.ctrlKey||n.metaKey||i.activeElement&&i.activeElement.nodeName&&("input"===i.activeElement.nodeName.toLowerCase()||"textarea"===i.activeElement.nodeName.toLowerCase()))){if(t.params.keyboard.onlyInViewport&&(p||u||c||h||v||f)){var m=!1;if(t.$el.parents("."+t.params.slideClass).length>0&&0===t.$el.parents("."+t.params.slideActiveClass).length)return;var g=a.innerWidth,y=a.innerHeight,w=t.$el.offset();s&&(w.left-=t.$el[0].scrollLeft);for(var b=[[w.left,w.top],[w.left+t.width,w.top],[w.left,w.top+t.height],[w.left+t.width,w.top+t.height]],E=0;E<b.length;E+=1){var x=b[E];if(x[0]>=0&&x[0]<=g&&x[1]>=0&&x[1]<=y){if(0===x[0]&&0===x[1])continue;m=!0}}if(!m)return}t.isHorizontal()?((p||u||c||h)&&(n.preventDefault?n.preventDefault():n.returnValue=!1),((u||h)&&!s||(p||c)&&s)&&t.slideNext(),((p||c)&&!s||(u||h)&&s)&&t.slidePrev()):((p||u||v||f)&&(n.preventDefault?n.preventDefault():n.returnValue=!1),(u||f)&&t.slideNext(),(p||v)&&t.slidePrev()),t.emit("keyPress",o)}},enable:function(){var e=this,t=r();e.keyboard.enabled||(m(t).on("keydown",e.keyboard.handle),e.keyboard.enabled=!0)},disable:function(){var e=this,t=r();e.keyboard.enabled&&(m(t).off("keydown",e.keyboard.handle),e.keyboard.enabled=!1)}},_={name:"keyboard",params:{keyboard:{enabled:!1,onlyInViewport:!0,pageUpDown:!0}},create:function(){M(this,{keyboard:t({enabled:!1},j)})},on:{init:function(e){e.params.keyboard.enabled&&e.keyboard.enable()},destroy:function(e){e.keyboard.enabled&&e.keyboard.disable()}}};var U={lastScrollTime:x(),lastEventBeforeSnap:void 0,recentWheelEvents:[],event:function(){return l().navigator.userAgent.indexOf("firefox")>-1?"DOMMouseScroll":function(){var e=r(),t="onwheel",a=t in e;if(!a){var i=e.createElement("div");i.setAttribute(t,"return;"),a="function"==typeof i.onwheel}return!a&&e.implementation&&e.implementation.hasFeature&&!0!==e.implementation.hasFeature("","")&&(a=e.implementation.hasFeature("Events.wheel","3.0")),a}()?"wheel":"mousewheel"},normalize:function(e){var t=0,a=0,i=0,s=0;return"detail"in e&&(a=e.detail),"wheelDelta"in e&&(a=-e.wheelDelta/120),"wheelDeltaY"in e&&(a=-e.wheelDeltaY/120),"wheelDeltaX"in e&&(t=-e.wheelDeltaX/120),"axis"in e&&e.axis===e.HORIZONTAL_AXIS&&(t=a,a=0),i=10*t,s=10*a,"deltaY"in e&&(s=e.deltaY),"deltaX"in e&&(i=e.deltaX),e.shiftKey&&!i&&(i=s,s=0),(i||s)&&e.deltaMode&&(1===e.deltaMode?(i*=40,s*=40):(i*=800,s*=800)),i&&!t&&(t=i<1?-1:1),s&&!a&&(a=s<1?-1:1),{spinX:t,spinY:a,pixelX:i,pixelY:s}},handleMouseEnter:function(){this.mouseEntered=!0},handleMouseLeave:function(){this.mouseEntered=!1},handle:function(e){var t=e,a=this,i=a.params.mousewheel;a.params.cssMode&&t.preventDefault();var s=a.$el;if("container"!==a.params.mousewheel.eventsTarget&&(s=m(a.params.mousewheel.eventsTarget)),!a.mouseEntered&&!s[0].contains(t.target)&&!i.releaseOnEdges)return!0;t.originalEvent&&(t=t.originalEvent);var r=0,n=a.rtlTranslate?-1:1,l=U.normalize(t);if(i.forceToAxis)if(a.isHorizontal()){if(!(Math.abs(l.pixelX)>Math.abs(l.pixelY)))return!0;r=-l.pixelX*n}else{if(!(Math.abs(l.pixelY)>Math.abs(l.pixelX)))return!0;r=-l.pixelY}else r=Math.abs(l.pixelX)>Math.abs(l.pixelY)?-l.pixelX*n:-l.pixelY;if(0===r)return!0;i.invert&&(r=-r);var o=a.getTranslate()+r*i.sensitivity;if(o>=a.minTranslate()&&(o=a.minTranslate()),o<=a.maxTranslate()&&(o=a.maxTranslate()),(!!a.params.loop||!(o===a.minTranslate()||o===a.maxTranslate()))&&a.params.nested&&t.stopPropagation(),a.params.freeMode){var d={time:x(),delta:Math.abs(r),direction:Math.sign(r)},p=a.mousewheel.lastEventBeforeSnap,u=p&&d.time<p.time+500&&d.delta<=p.delta&&d.direction===p.direction;if(!u){a.mousewheel.lastEventBeforeSnap=void 0,a.params.loop&&a.loopFix();var c=a.getTranslate()+r*i.sensitivity,h=a.isBeginning,v=a.isEnd;if(c>=a.minTranslate()&&(c=a.minTranslate()),c<=a.maxTranslate()&&(c=a.maxTranslate()),a.setTransition(0),a.setTranslate(c),a.updateProgress(),a.updateActiveIndex(),a.updateSlidesClasses(),(!h&&a.isBeginning||!v&&a.isEnd)&&a.updateSlidesClasses(),a.params.freeModeSticky){clearTimeout(a.mousewheel.timeout),a.mousewheel.timeout=void 0;var f=a.mousewheel.recentWheelEvents;f.length>=15&&f.shift();var g=f.length?f[f.length-1]:void 0,y=f[0];if(f.push(d),g&&(d.delta>g.delta||d.direction!==g.direction))f.splice(0);else if(f.length>=15&&d.time-y.time<500&&y.delta-d.delta>=1&&d.delta<=6){var w=r>0?.8:.2;a.mousewheel.lastEventBeforeSnap=d,f.splice(0),a.mousewheel.timeout=E((function(){a.slideToClosest(a.params.speed,!0,void 0,w)}),0)}a.mousewheel.timeout||(a.mousewheel.timeout=E((function(){a.mousewheel.lastEventBeforeSnap=d,f.splice(0),a.slideToClosest(a.params.speed,!0,void 0,.5)}),500))}if(u||a.emit("scroll",t),a.params.autoplay&&a.params.autoplayDisableOnInteraction&&a.autoplay.stop(),c===a.minTranslate()||c===a.maxTranslate())return!0}}else{var b={time:x(),delta:Math.abs(r),direction:Math.sign(r),raw:e},T=a.mousewheel.recentWheelEvents;T.length>=2&&T.shift();var C=T.length?T[T.length-1]:void 0;if(T.push(b),C?(b.direction!==C.direction||b.delta>C.delta||b.time>C.time+150)&&a.mousewheel.animateSlider(b):a.mousewheel.animateSlider(b),a.mousewheel.releaseScroll(b))return!0}return t.preventDefault?t.preventDefault():t.returnValue=!1,!1},animateSlider:function(e){var t=this,a=l();return!(this.params.mousewheel.thresholdDelta&&e.delta<this.params.mousewheel.thresholdDelta)&&(!(this.params.mousewheel.thresholdTime&&x()-t.mousewheel.lastScrollTime<this.params.mousewheel.thresholdTime)&&(e.delta>=6&&x()-t.mousewheel.lastScrollTime<60||(e.direction<0?t.isEnd&&!t.params.loop||t.animating||(t.slideNext(),t.emit("scroll",e.raw)):t.isBeginning&&!t.params.loop||t.animating||(t.slidePrev(),t.emit("scroll",e.raw)),t.mousewheel.lastScrollTime=(new a.Date).getTime(),!1)))},releaseScroll:function(e){var t=this,a=t.params.mousewheel;if(e.direction<0){if(t.isEnd&&!t.params.loop&&a.releaseOnEdges)return!0}else if(t.isBeginning&&!t.params.loop&&a.releaseOnEdges)return!0;return!1},enable:function(){var e=this,t=U.event();if(e.params.cssMode)return e.wrapperEl.removeEventListener(t,e.mousewheel.handle),!0;if(!t)return!1;if(e.mousewheel.enabled)return!1;var a=e.$el;return"container"!==e.params.mousewheel.eventsTarget&&(a=m(e.params.mousewheel.eventsTarget)),a.on("mouseenter",e.mousewheel.handleMouseEnter),a.on("mouseleave",e.mousewheel.handleMouseLeave),a.on(t,e.mousewheel.handle),e.mousewheel.enabled=!0,!0},disable:function(){var e=this,t=U.event();if(e.params.cssMode)return e.wrapperEl.addEventListener(t,e.mousewheel.handle),!0;if(!t)return!1;if(!e.mousewheel.enabled)return!1;var a=e.$el;return"container"!==e.params.mousewheel.eventsTarget&&(a=m(e.params.mousewheel.eventsTarget)),a.off(t,e.mousewheel.handle),e.mousewheel.enabled=!1,!0}},K={update:function(){var e=this,t=e.params.navigation;if(!e.params.loop){var a=e.navigation,i=a.$nextEl,s=a.$prevEl;s&&s.length>0&&(e.isBeginning?s.addClass(t.disabledClass):s.removeClass(t.disabledClass),s[e.params.watchOverflow&&e.isLocked?"addClass":"removeClass"](t.lockClass)),i&&i.length>0&&(e.isEnd?i.addClass(t.disabledClass):i.removeClass(t.disabledClass),i[e.params.watchOverflow&&e.isLocked?"addClass":"removeClass"](t.lockClass))}},onPrevClick:function(e){var t=this;e.preventDefault(),t.isBeginning&&!t.params.loop||t.slidePrev()},onNextClick:function(e){var t=this;e.preventDefault(),t.isEnd&&!t.params.loop||t.slideNext()},init:function(){var e,t,a=this,i=a.params.navigation;(i.nextEl||i.prevEl)&&(i.nextEl&&(e=m(i.nextEl),a.params.uniqueNavElements&&"string"==typeof i.nextEl&&e.length>1&&1===a.$el.find(i.nextEl).length&&(e=a.$el.find(i.nextEl))),i.prevEl&&(t=m(i.prevEl),a.params.uniqueNavElements&&"string"==typeof i.prevEl&&t.length>1&&1===a.$el.find(i.prevEl).length&&(t=a.$el.find(i.prevEl))),e&&e.length>0&&e.on("click",a.navigation.onNextClick),t&&t.length>0&&t.on("click",a.navigation.onPrevClick),S(a.navigation,{$nextEl:e,nextEl:e&&e[0],$prevEl:t,prevEl:t&&t[0]}))},destroy:function(){var e=this,t=e.navigation,a=t.$nextEl,i=t.$prevEl;a&&a.length&&(a.off("click",e.navigation.onNextClick),a.removeClass(e.params.navigation.disabledClass)),i&&i.length&&(i.off("click",e.navigation.onPrevClick),i.removeClass(e.params.navigation.disabledClass))}},Z={update:function(){var e=this,t=e.rtl,a=e.params.pagination;if(a.el&&e.pagination.el&&e.pagination.$el&&0!==e.pagination.$el.length){var i,s=e.virtual&&e.params.virtual.enabled?e.virtual.slides.length:e.slides.length,r=e.pagination.$el,n=e.params.loop?Math.ceil((s-2*e.loopedSlides)/e.params.slidesPerGroup):e.snapGrid.length;if(e.params.loop?((i=Math.ceil((e.activeIndex-e.loopedSlides)/e.params.slidesPerGroup))>s-1-2*e.loopedSlides&&(i-=s-2*e.loopedSlides),i>n-1&&(i-=n),i<0&&"bullets"!==e.params.paginationType&&(i=n+i)):i=void 0!==e.snapIndex?e.snapIndex:e.activeIndex||0,"bullets"===a.type&&e.pagination.bullets&&e.pagination.bullets.length>0){var l,o,d,p=e.pagination.bullets;if(a.dynamicBullets&&(e.pagination.bulletSize=p.eq(0)[e.isHorizontal()?"outerWidth":"outerHeight"](!0),r.css(e.isHorizontal()?"width":"height",e.pagination.bulletSize*(a.dynamicMainBullets+4)+"px"),a.dynamicMainBullets>1&&void 0!==e.previousIndex&&(e.pagination.dynamicBulletIndex+=i-e.previousIndex,e.pagination.dynamicBulletIndex>a.dynamicMainBullets-1?e.pagination.dynamicBulletIndex=a.dynamicMainBullets-1:e.pagination.dynamicBulletIndex<0&&(e.pagination.dynamicBulletIndex=0)),l=i-e.pagination.dynamicBulletIndex,d=((o=l+(Math.min(p.length,a.dynamicMainBullets)-1))+l)/2),p.removeClass(a.bulletActiveClass+" "+a.bulletActiveClass+"-next "+a.bulletActiveClass+"-next-next "+a.bulletActiveClass+"-prev "+a.bulletActiveClass+"-prev-prev "+a.bulletActiveClass+"-main"),r.length>1)p.each((function(e){var t=m(e),s=t.index();s===i&&t.addClass(a.bulletActiveClass),a.dynamicBullets&&(s>=l&&s<=o&&t.addClass(a.bulletActiveClass+"-main"),s===l&&t.prev().addClass(a.bulletActiveClass+"-prev").prev().addClass(a.bulletActiveClass+"-prev-prev"),s===o&&t.next().addClass(a.bulletActiveClass+"-next").next().addClass(a.bulletActiveClass+"-next-next"))}));else{var u=p.eq(i),c=u.index();if(u.addClass(a.bulletActiveClass),a.dynamicBullets){for(var h=p.eq(l),v=p.eq(o),f=l;f<=o;f+=1)p.eq(f).addClass(a.bulletActiveClass+"-main");if(e.params.loop)if(c>=p.length-a.dynamicMainBullets){for(var g=a.dynamicMainBullets;g>=0;g-=1)p.eq(p.length-g).addClass(a.bulletActiveClass+"-main");p.eq(p.length-a.dynamicMainBullets-1).addClass(a.bulletActiveClass+"-prev")}else h.prev().addClass(a.bulletActiveClass+"-prev").prev().addClass(a.bulletActiveClass+"-prev-prev"),v.next().addClass(a.bulletActiveClass+"-next").next().addClass(a.bulletActiveClass+"-next-next");else h.prev().addClass(a.bulletActiveClass+"-prev").prev().addClass(a.bulletActiveClass+"-prev-prev"),v.next().addClass(a.bulletActiveClass+"-next").next().addClass(a.bulletActiveClass+"-next-next")}}if(a.dynamicBullets){var y=Math.min(p.length,a.dynamicMainBullets+4),w=(e.pagination.bulletSize*y-e.pagination.bulletSize)/2-d*e.pagination.bulletSize,b=t?"right":"left";p.css(e.isHorizontal()?b:"top",w+"px")}}if("fraction"===a.type&&(r.find("."+a.currentClass).text(a.formatFractionCurrent(i+1)),r.find("."+a.totalClass).text(a.formatFractionTotal(n))),"progressbar"===a.type){var E;E=a.progressbarOpposite?e.isHorizontal()?"vertical":"horizontal":e.isHorizontal()?"horizontal":"vertical";var x=(i+1)/n,T=1,C=1;"horizontal"===E?T=x:C=x,r.find("."+a.progressbarFillClass).transform("translate3d(0,0,0) scaleX("+T+") scaleY("+C+")").transition(e.params.speed)}"custom"===a.type&&a.renderCustom?(r.html(a.renderCustom(e,i+1,n)),e.emit("paginationRender",r[0])):e.emit("paginationUpdate",r[0]),r[e.params.watchOverflow&&e.isLocked?"addClass":"removeClass"](a.lockClass)}},render:function(){var e=this,t=e.params.pagination;if(t.el&&e.pagination.el&&e.pagination.$el&&0!==e.pagination.$el.length){var a=e.virtual&&e.params.virtual.enabled?e.virtual.slides.length:e.slides.length,i=e.pagination.$el,s="";if("bullets"===t.type){for(var r=e.params.loop?Math.ceil((a-2*e.loopedSlides)/e.params.slidesPerGroup):e.snapGrid.length,n=0;n<r;n+=1)t.renderBullet?s+=t.renderBullet.call(e,n,t.bulletClass):s+="<"+t.bulletElement+' class="'+t.bulletClass+'"></'+t.bulletElement+">";i.html(s),e.pagination.bullets=i.find("."+t.bulletClass.replace(/ /g,"."))}"fraction"===t.type&&(s=t.renderFraction?t.renderFraction.call(e,t.currentClass,t.totalClass):'<span class="'+t.currentClass+'"></span> / <span class="'+t.totalClass+'"></span>',i.html(s)),"progressbar"===t.type&&(s=t.renderProgressbar?t.renderProgressbar.call(e,t.progressbarFillClass):'<span class="'+t.progressbarFillClass+'"></span>',i.html(s)),"custom"!==t.type&&e.emit("paginationRender",e.pagination.$el[0])}},init:function(){var e=this,t=e.params.pagination;if(t.el){var a=m(t.el);0!==a.length&&(e.params.uniqueNavElements&&"string"==typeof t.el&&a.length>1&&(a=e.$el.find(t.el)),"bullets"===t.type&&t.clickable&&a.addClass(t.clickableClass),a.addClass(t.modifierClass+t.type),"bullets"===t.type&&t.dynamicBullets&&(a.addClass(""+t.modifierClass+t.type+"-dynamic"),e.pagination.dynamicBulletIndex=0,t.dynamicMainBullets<1&&(t.dynamicMainBullets=1)),"progressbar"===t.type&&t.progressbarOpposite&&a.addClass(t.progressbarOppositeClass),t.clickable&&a.on("click","."+t.bulletClass.replace(/ /g,"."),(function(t){t.preventDefault();var a=m(this).index()*e.params.slidesPerGroup;e.params.loop&&(a+=e.loopedSlides),e.slideTo(a)})),S(e.pagination,{$el:a,el:a[0]}))}},destroy:function(){var e=this,t=e.params.pagination;if(t.el&&e.pagination.el&&e.pagination.$el&&0!==e.pagination.$el.length){var a=e.pagination.$el;a.removeClass(t.hiddenClass),a.removeClass(t.modifierClass+t.type),e.pagination.bullets&&e.pagination.bullets.removeClass(t.bulletActiveClass),t.clickable&&a.off("click","."+t.bulletClass.replace(/ /g,"."))}}},J={setTranslate:function(){var e=this;if(e.params.scrollbar.el&&e.scrollbar.el){var t=e.scrollbar,a=e.rtlTranslate,i=e.progress,s=t.dragSize,r=t.trackSize,n=t.$dragEl,l=t.$el,o=e.params.scrollbar,d=s,p=(r-s)*i;a?(p=-p)>0?(d=s-p,p=0):-p+s>r&&(d=r+p):p<0?(d=s+p,p=0):p+s>r&&(d=r-p),e.isHorizontal()?(n.transform("translate3d("+p+"px, 0, 0)"),n[0].style.width=d+"px"):(n.transform("translate3d(0px, "+p+"px, 0)"),n[0].style.height=d+"px"),o.hide&&(clearTimeout(e.scrollbar.timeout),l[0].style.opacity=1,e.scrollbar.timeout=setTimeout((function(){l[0].style.opacity=0,l.transition(400)}),1e3))}},setTransition:function(e){var t=this;t.params.scrollbar.el&&t.scrollbar.el&&t.scrollbar.$dragEl.transition(e)},updateSize:function(){var e=this;if(e.params.scrollbar.el&&e.scrollbar.el){var t=e.scrollbar,a=t.$dragEl,i=t.$el;a[0].style.width="",a[0].style.height="";var s,r=e.isHorizontal()?i[0].offsetWidth:i[0].offsetHeight,n=e.size/e.virtualSize,l=n*(r/e.size);s="auto"===e.params.scrollbar.dragSize?r*n:parseInt(e.params.scrollbar.dragSize,10),e.isHorizontal()?a[0].style.width=s+"px":a[0].style.height=s+"px",i[0].style.display=n>=1?"none":"",e.params.scrollbar.hide&&(i[0].style.opacity=0),S(t,{trackSize:r,divider:n,moveDivider:l,dragSize:s}),t.$el[e.params.watchOverflow&&e.isLocked?"addClass":"removeClass"](e.params.scrollbar.lockClass)}},getPointerPosition:function(e){return this.isHorizontal()?"touchstart"===e.type||"touchmove"===e.type?e.targetTouches[0].clientX:e.clientX:"touchstart"===e.type||"touchmove"===e.type?e.targetTouches[0].clientY:e.clientY},setDragPosition:function(e){var t,a=this,i=a.scrollbar,s=a.rtlTranslate,r=i.$el,n=i.dragSize,l=i.trackSize,o=i.dragStartPos;t=(i.getPointerPosition(e)-r.offset()[a.isHorizontal()?"left":"top"]-(null!==o?o:n/2))/(l-n),t=Math.max(Math.min(t,1),0),s&&(t=1-t);var d=a.minTranslate()+(a.maxTranslate()-a.minTranslate())*t;a.updateProgress(d),a.setTranslate(d),a.updateActiveIndex(),a.updateSlidesClasses()},onDragStart:function(e){var t=this,a=t.params.scrollbar,i=t.scrollbar,s=t.$wrapperEl,r=i.$el,n=i.$dragEl;t.scrollbar.isTouched=!0,t.scrollbar.dragStartPos=e.target===n[0]||e.target===n?i.getPointerPosition(e)-e.target.getBoundingClientRect()[t.isHorizontal()?"left":"top"]:null,e.preventDefault(),e.stopPropagation(),s.transition(100),n.transition(100),i.setDragPosition(e),clearTimeout(t.scrollbar.dragTimeout),r.transition(0),a.hide&&r.css("opacity",1),t.params.cssMode&&t.$wrapperEl.css("scroll-snap-type","none"),t.emit("scrollbarDragStart",e)},onDragMove:function(e){var t=this,a=t.scrollbar,i=t.$wrapperEl,s=a.$el,r=a.$dragEl;t.scrollbar.isTouched&&(e.preventDefault?e.preventDefault():e.returnValue=!1,a.setDragPosition(e),i.transition(0),s.transition(0),r.transition(0),t.emit("scrollbarDragMove",e))},onDragEnd:function(e){var t=this,a=t.params.scrollbar,i=t.scrollbar,s=t.$wrapperEl,r=i.$el;t.scrollbar.isTouched&&(t.scrollbar.isTouched=!1,t.params.cssMode&&(t.$wrapperEl.css("scroll-snap-type",""),s.transition("")),a.hide&&(clearTimeout(t.scrollbar.dragTimeout),t.scrollbar.dragTimeout=E((function(){r.css("opacity",0),r.transition(400)}),1e3)),t.emit("scrollbarDragEnd",e),a.snapOnRelease&&t.slideToClosest())},enableDraggable:function(){var e=this;if(e.params.scrollbar.el){var t=r(),a=e.scrollbar,i=e.touchEventsTouch,s=e.touchEventsDesktop,n=e.params,l=e.support,o=a.$el[0],d=!(!l.passiveListener||!n.passiveListeners)&&{passive:!1,capture:!1},p=!(!l.passiveListener||!n.passiveListeners)&&{passive:!0,capture:!1};l.touch?(o.addEventListener(i.start,e.scrollbar.onDragStart,d),o.addEventListener(i.move,e.scrollbar.onDragMove,d),o.addEventListener(i.end,e.scrollbar.onDragEnd,p)):(o.addEventListener(s.start,e.scrollbar.onDragStart,d),t.addEventListener(s.move,e.scrollbar.onDragMove,d),t.addEventListener(s.end,e.scrollbar.onDragEnd,p))}},disableDraggable:function(){var e=this;if(e.params.scrollbar.el){var t=r(),a=e.scrollbar,i=e.touchEventsTouch,s=e.touchEventsDesktop,n=e.params,l=e.support,o=a.$el[0],d=!(!l.passiveListener||!n.passiveListeners)&&{passive:!1,capture:!1},p=!(!l.passiveListener||!n.passiveListeners)&&{passive:!0,capture:!1};l.touch?(o.removeEventListener(i.start,e.scrollbar.onDragStart,d),o.removeEventListener(i.move,e.scrollbar.onDragMove,d),o.removeEventListener(i.end,e.scrollbar.onDragEnd,p)):(o.removeEventListener(s.start,e.scrollbar.onDragStart,d),t.removeEventListener(s.move,e.scrollbar.onDragMove,d),t.removeEventListener(s.end,e.scrollbar.onDragEnd,p))}},init:function(){var e=this;if(e.params.scrollbar.el){var t=e.scrollbar,a=e.$el,i=e.params.scrollbar,s=m(i.el);e.params.uniqueNavElements&&"string"==typeof i.el&&s.length>1&&1===a.find(i.el).length&&(s=a.find(i.el));var r=s.find("."+e.params.scrollbar.dragClass);0===r.length&&(r=m('<div class="'+e.params.scrollbar.dragClass+'"></div>'),s.append(r)),S(t,{$el:s,el:s[0],$dragEl:r,dragEl:r[0]}),i.draggable&&t.enableDraggable()}},destroy:function(){this.scrollbar.disableDraggable()}},Q={setTransform:function(e,t){var a=this.rtl,i=m(e),s=a?-1:1,r=i.attr("data-swiper-parallax")||"0",n=i.attr("data-swiper-parallax-x"),l=i.attr("data-swiper-parallax-y"),o=i.attr("data-swiper-parallax-scale"),d=i.attr("data-swiper-parallax-opacity");if(n||l?(n=n||"0",l=l||"0"):this.isHorizontal()?(n=r,l="0"):(l=r,n="0"),n=n.indexOf("%")>=0?parseInt(n,10)*t*s+"%":n*t*s+"px",l=l.indexOf("%")>=0?parseInt(l,10)*t+"%":l*t+"px",null!=d){var p=d-(d-1)*(1-Math.abs(t));i[0].style.opacity=p}if(null==o)i.transform("translate3d("+n+", "+l+", 0px)");else{var u=o-(o-1)*(1-Math.abs(t));i.transform("translate3d("+n+", "+l+", 0px) scale("+u+")")}},setTranslate:function(){var e=this,t=e.$el,a=e.slides,i=e.progress,s=e.snapGrid;t.children("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]").each((function(t){e.parallax.setTransform(t,i)})),a.each((function(t,a){var r=t.progress;e.params.slidesPerGroup>1&&"auto"!==e.params.slidesPerView&&(r+=Math.ceil(a/2)-i*(s.length-1)),r=Math.min(Math.max(r,-1),1),m(t).find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]").each((function(t){e.parallax.setTransform(t,r)}))}))},setTransition:function(e){void 0===e&&(e=this.params.speed);this.$el.find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]").each((function(t){var a=m(t),i=parseInt(a.attr("data-swiper-parallax-duration"),10)||e;0===e&&(i=0),a.transition(i)}))}},ee={getDistanceBetweenTouches:function(e){if(e.targetTouches.length<2)return 1;var t=e.targetTouches[0].pageX,a=e.targetTouches[0].pageY,i=e.targetTouches[1].pageX,s=e.targetTouches[1].pageY;return Math.sqrt(Math.pow(i-t,2)+Math.pow(s-a,2))},onGestureStart:function(e){var t=this,a=t.support,i=t.params.zoom,s=t.zoom,r=s.gesture;if(s.fakeGestureTouched=!1,s.fakeGestureMoved=!1,!a.gestures){if("touchstart"!==e.type||"touchstart"===e.type&&e.targetTouches.length<2)return;s.fakeGestureTouched=!0,r.scaleStart=ee.getDistanceBetweenTouches(e)}r.$slideEl&&r.$slideEl.length||(r.$slideEl=m(e.target).closest("."+t.params.slideClass),0===r.$slideEl.length&&(r.$slideEl=t.slides.eq(t.activeIndex)),r.$imageEl=r.$slideEl.find("img, svg, canvas, picture, .swiper-zoom-target"),r.$imageWrapEl=r.$imageEl.parent("."+i.containerClass),r.maxRatio=r.$imageWrapEl.attr("data-swiper-zoom")||i.maxRatio,0!==r.$imageWrapEl.length)?(r.$imageEl&&r.$imageEl.transition(0),t.zoom.isScaling=!0):r.$imageEl=void 0},onGestureChange:function(e){var t=this,a=t.support,i=t.params.zoom,s=t.zoom,r=s.gesture;if(!a.gestures){if("touchmove"!==e.type||"touchmove"===e.type&&e.targetTouches.length<2)return;s.fakeGestureMoved=!0,r.scaleMove=ee.getDistanceBetweenTouches(e)}r.$imageEl&&0!==r.$imageEl.length?(a.gestures?s.scale=e.scale*s.currentScale:s.scale=r.scaleMove/r.scaleStart*s.currentScale,s.scale>r.maxRatio&&(s.scale=r.maxRatio-1+Math.pow(s.scale-r.maxRatio+1,.5)),s.scale<i.minRatio&&(s.scale=i.minRatio+1-Math.pow(i.minRatio-s.scale+1,.5)),r.$imageEl.transform("translate3d(0,0,0) scale("+s.scale+")")):"gesturechange"===e.type&&s.onGestureStart(e)},onGestureEnd:function(e){var t=this,a=t.device,i=t.support,s=t.params.zoom,r=t.zoom,n=r.gesture;if(!i.gestures){if(!r.fakeGestureTouched||!r.fakeGestureMoved)return;if("touchend"!==e.type||"touchend"===e.type&&e.changedTouches.length<2&&!a.android)return;r.fakeGestureTouched=!1,r.fakeGestureMoved=!1}n.$imageEl&&0!==n.$imageEl.length&&(r.scale=Math.max(Math.min(r.scale,n.maxRatio),s.minRatio),n.$imageEl.transition(t.params.speed).transform("translate3d(0,0,0) scale("+r.scale+")"),r.currentScale=r.scale,r.isScaling=!1,1===r.scale&&(n.$slideEl=void 0))},onTouchStart:function(e){var t=this.device,a=this.zoom,i=a.gesture,s=a.image;i.$imageEl&&0!==i.$imageEl.length&&(s.isTouched||(t.android&&e.cancelable&&e.preventDefault(),s.isTouched=!0,s.touchesStart.x="touchstart"===e.type?e.targetTouches[0].pageX:e.pageX,s.touchesStart.y="touchstart"===e.type?e.targetTouches[0].pageY:e.pageY))},onTouchMove:function(e){var t=this,a=t.zoom,i=a.gesture,s=a.image,r=a.velocity;if(i.$imageEl&&0!==i.$imageEl.length&&(t.allowClick=!1,s.isTouched&&i.$slideEl)){s.isMoved||(s.width=i.$imageEl[0].offsetWidth,s.height=i.$imageEl[0].offsetHeight,s.startX=T(i.$imageWrapEl[0],"x")||0,s.startY=T(i.$imageWrapEl[0],"y")||0,i.slideWidth=i.$slideEl[0].offsetWidth,i.slideHeight=i.$slideEl[0].offsetHeight,i.$imageWrapEl.transition(0),t.rtl&&(s.startX=-s.startX,s.startY=-s.startY));var n=s.width*a.scale,l=s.height*a.scale;if(!(n<i.slideWidth&&l<i.slideHeight)){if(s.minX=Math.min(i.slideWidth/2-n/2,0),s.maxX=-s.minX,s.minY=Math.min(i.slideHeight/2-l/2,0),s.maxY=-s.minY,s.touchesCurrent.x="touchmove"===e.type?e.targetTouches[0].pageX:e.pageX,s.touchesCurrent.y="touchmove"===e.type?e.targetTouches[0].pageY:e.pageY,!s.isMoved&&!a.isScaling){if(t.isHorizontal()&&(Math.floor(s.minX)===Math.floor(s.startX)&&s.touchesCurrent.x<s.touchesStart.x||Math.floor(s.maxX)===Math.floor(s.startX)&&s.touchesCurrent.x>s.touchesStart.x))return void(s.isTouched=!1);if(!t.isHorizontal()&&(Math.floor(s.minY)===Math.floor(s.startY)&&s.touchesCurrent.y<s.touchesStart.y||Math.floor(s.maxY)===Math.floor(s.startY)&&s.touchesCurrent.y>s.touchesStart.y))return void(s.isTouched=!1)}e.cancelable&&e.preventDefault(),e.stopPropagation(),s.isMoved=!0,s.currentX=s.touchesCurrent.x-s.touchesStart.x+s.startX,s.currentY=s.touchesCurrent.y-s.touchesStart.y+s.startY,s.currentX<s.minX&&(s.currentX=s.minX+1-Math.pow(s.minX-s.currentX+1,.8)),s.currentX>s.maxX&&(s.currentX=s.maxX-1+Math.pow(s.currentX-s.maxX+1,.8)),s.currentY<s.minY&&(s.currentY=s.minY+1-Math.pow(s.minY-s.currentY+1,.8)),s.currentY>s.maxY&&(s.currentY=s.maxY-1+Math.pow(s.currentY-s.maxY+1,.8)),r.prevPositionX||(r.prevPositionX=s.touchesCurrent.x),r.prevPositionY||(r.prevPositionY=s.touchesCurrent.y),r.prevTime||(r.prevTime=Date.now()),r.x=(s.touchesCurrent.x-r.prevPositionX)/(Date.now()-r.prevTime)/2,r.y=(s.touchesCurrent.y-r.prevPositionY)/(Date.now()-r.prevTime)/2,Math.abs(s.touchesCurrent.x-r.prevPositionX)<2&&(r.x=0),Math.abs(s.touchesCurrent.y-r.prevPositionY)<2&&(r.y=0),r.prevPositionX=s.touchesCurrent.x,r.prevPositionY=s.touchesCurrent.y,r.prevTime=Date.now(),i.$imageWrapEl.transform("translate3d("+s.currentX+"px, "+s.currentY+"px,0)")}}},onTouchEnd:function(){var e=this.zoom,t=e.gesture,a=e.image,i=e.velocity;if(t.$imageEl&&0!==t.$imageEl.length){if(!a.isTouched||!a.isMoved)return a.isTouched=!1,void(a.isMoved=!1);a.isTouched=!1,a.isMoved=!1;var s=300,r=300,n=i.x*s,l=a.currentX+n,o=i.y*r,d=a.currentY+o;0!==i.x&&(s=Math.abs((l-a.currentX)/i.x)),0!==i.y&&(r=Math.abs((d-a.currentY)/i.y));var p=Math.max(s,r);a.currentX=l,a.currentY=d;var u=a.width*e.scale,c=a.height*e.scale;a.minX=Math.min(t.slideWidth/2-u/2,0),a.maxX=-a.minX,a.minY=Math.min(t.slideHeight/2-c/2,0),a.maxY=-a.minY,a.currentX=Math.max(Math.min(a.currentX,a.maxX),a.minX),a.currentY=Math.max(Math.min(a.currentY,a.maxY),a.minY),t.$imageWrapEl.transition(p).transform("translate3d("+a.currentX+"px, "+a.currentY+"px,0)")}},onTransitionEnd:function(){var e=this,t=e.zoom,a=t.gesture;a.$slideEl&&e.previousIndex!==e.activeIndex&&(a.$imageEl&&a.$imageEl.transform("translate3d(0,0,0) scale(1)"),a.$imageWrapEl&&a.$imageWrapEl.transform("translate3d(0,0,0)"),t.scale=1,t.currentScale=1,a.$slideEl=void 0,a.$imageEl=void 0,a.$imageWrapEl=void 0)},toggle:function(e){var t=this.zoom;t.scale&&1!==t.scale?t.out():t.in(e)},in:function(e){var t,a,i,s,r,n,l,o,d,p,u,c,h,v,f,m,g=this,y=g.zoom,w=g.params.zoom,b=y.gesture,E=y.image;(b.$slideEl||(g.params.virtual&&g.params.virtual.enabled&&g.virtual?b.$slideEl=g.$wrapperEl.children("."+g.params.slideActiveClass):b.$slideEl=g.slides.eq(g.activeIndex),b.$imageEl=b.$slideEl.find("img, svg, canvas, picture, .swiper-zoom-target"),b.$imageWrapEl=b.$imageEl.parent("."+w.containerClass)),b.$imageEl&&0!==b.$imageEl.length)&&(b.$slideEl.addClass(""+w.zoomedSlideClass),void 0===E.touchesStart.x&&e?(t="touchend"===e.type?e.changedTouches[0].pageX:e.pageX,a="touchend"===e.type?e.changedTouches[0].pageY:e.pageY):(t=E.touchesStart.x,a=E.touchesStart.y),y.scale=b.$imageWrapEl.attr("data-swiper-zoom")||w.maxRatio,y.currentScale=b.$imageWrapEl.attr("data-swiper-zoom")||w.maxRatio,e?(f=b.$slideEl[0].offsetWidth,m=b.$slideEl[0].offsetHeight,i=b.$slideEl.offset().left+f/2-t,s=b.$slideEl.offset().top+m/2-a,l=b.$imageEl[0].offsetWidth,o=b.$imageEl[0].offsetHeight,d=l*y.scale,p=o*y.scale,h=-(u=Math.min(f/2-d/2,0)),v=-(c=Math.min(m/2-p/2,0)),(r=i*y.scale)<u&&(r=u),r>h&&(r=h),(n=s*y.scale)<c&&(n=c),n>v&&(n=v)):(r=0,n=0),b.$imageWrapEl.transition(300).transform("translate3d("+r+"px, "+n+"px,0)"),b.$imageEl.transition(300).transform("translate3d(0,0,0) scale("+y.scale+")"))},out:function(){var e=this,t=e.zoom,a=e.params.zoom,i=t.gesture;i.$slideEl||(e.params.virtual&&e.params.virtual.enabled&&e.virtual?i.$slideEl=e.$wrapperEl.children("."+e.params.slideActiveClass):i.$slideEl=e.slides.eq(e.activeIndex),i.$imageEl=i.$slideEl.find("img, svg, canvas, picture, .swiper-zoom-target"),i.$imageWrapEl=i.$imageEl.parent("."+a.containerClass)),i.$imageEl&&0!==i.$imageEl.length&&(t.scale=1,t.currentScale=1,i.$imageWrapEl.transition(300).transform("translate3d(0,0,0)"),i.$imageEl.transition(300).transform("translate3d(0,0,0) scale(1)"),i.$slideEl.removeClass(""+a.zoomedSlideClass),i.$slideEl=void 0)},toggleGestures:function(e){var t=this,a=t.zoom,i=a.slideSelector,s=a.passiveListener;t.$wrapperEl[e]("gesturestart",i,a.onGestureStart,s),t.$wrapperEl[e]("gesturechange",i,a.onGestureChange,s),t.$wrapperEl[e]("gestureend",i,a.onGestureEnd,s)},enableGestures:function(){this.zoom.gesturesEnabled||(this.zoom.gesturesEnabled=!0,this.zoom.toggleGestures("on"))},disableGestures:function(){this.zoom.gesturesEnabled&&(this.zoom.gesturesEnabled=!1,this.zoom.toggleGestures("off"))},enable:function(){var e=this,t=e.support,a=e.zoom;if(!a.enabled){a.enabled=!0;var i=!("touchstart"!==e.touchEvents.start||!t.passiveListener||!e.params.passiveListeners)&&{passive:!0,capture:!1},s=!t.passiveListener||{passive:!1,capture:!0},r="."+e.params.slideClass;e.zoom.passiveListener=i,e.zoom.slideSelector=r,t.gestures?(e.$wrapperEl.on(e.touchEvents.start,e.zoom.enableGestures,i),e.$wrapperEl.on(e.touchEvents.end,e.zoom.disableGestures,i)):"touchstart"===e.touchEvents.start&&(e.$wrapperEl.on(e.touchEvents.start,r,a.onGestureStart,i),e.$wrapperEl.on(e.touchEvents.move,r,a.onGestureChange,s),e.$wrapperEl.on(e.touchEvents.end,r,a.onGestureEnd,i),e.touchEvents.cancel&&e.$wrapperEl.on(e.touchEvents.cancel,r,a.onGestureEnd,i)),e.$wrapperEl.on(e.touchEvents.move,"."+e.params.zoom.containerClass,a.onTouchMove,s)}},disable:function(){var e=this,t=e.zoom;if(t.enabled){var a=e.support;e.zoom.enabled=!1;var i=!("touchstart"!==e.touchEvents.start||!a.passiveListener||!e.params.passiveListeners)&&{passive:!0,capture:!1},s=!a.passiveListener||{passive:!1,capture:!0},r="."+e.params.slideClass;a.gestures?(e.$wrapperEl.off(e.touchEvents.start,e.zoom.enableGestures,i),e.$wrapperEl.off(e.touchEvents.end,e.zoom.disableGestures,i)):"touchstart"===e.touchEvents.start&&(e.$wrapperEl.off(e.touchEvents.start,r,t.onGestureStart,i),e.$wrapperEl.off(e.touchEvents.move,r,t.onGestureChange,s),e.$wrapperEl.off(e.touchEvents.end,r,t.onGestureEnd,i),e.touchEvents.cancel&&e.$wrapperEl.off(e.touchEvents.cancel,r,t.onGestureEnd,i)),e.$wrapperEl.off(e.touchEvents.move,"."+e.params.zoom.containerClass,t.onTouchMove,s)}}},te={loadInSlide:function(e,t){void 0===t&&(t=!0);var a=this,i=a.params.lazy;if(void 0!==e&&0!==a.slides.length){var s=a.virtual&&a.params.virtual.enabled?a.$wrapperEl.children("."+a.params.slideClass+'[data-swiper-slide-index="'+e+'"]'):a.slides.eq(e),r=s.find("."+i.elementClass+":not(."+i.loadedClass+"):not(."+i.loadingClass+")");!s.hasClass(i.elementClass)||s.hasClass(i.loadedClass)||s.hasClass(i.loadingClass)||r.push(s[0]),0!==r.length&&r.each((function(e){var r=m(e);r.addClass(i.loadingClass);var n=r.attr("data-background"),l=r.attr("data-src"),o=r.attr("data-srcset"),d=r.attr("data-sizes"),p=r.parent("picture");a.loadImage(r[0],l||n,o,d,!1,(function(){if(null!=a&&a&&(!a||a.params)&&!a.destroyed){if(n?(r.css("background-image",'url("'+n+'")'),r.removeAttr("data-background")):(o&&(r.attr("srcset",o),r.removeAttr("data-srcset")),d&&(r.attr("sizes",d),r.removeAttr("data-sizes")),p.length&&p.children("source").each((function(e){var t=m(e);t.attr("data-srcset")&&(t.attr("srcset",t.attr("data-srcset")),t.removeAttr("data-srcset"))})),l&&(r.attr("src",l),r.removeAttr("data-src"))),r.addClass(i.loadedClass).removeClass(i.loadingClass),s.find("."+i.preloaderClass).remove(),a.params.loop&&t){var e=s.attr("data-swiper-slide-index");if(s.hasClass(a.params.slideDuplicateClass)){var u=a.$wrapperEl.children('[data-swiper-slide-index="'+e+'"]:not(.'+a.params.slideDuplicateClass+")");a.lazy.loadInSlide(u.index(),!1)}else{var c=a.$wrapperEl.children("."+a.params.slideDuplicateClass+'[data-swiper-slide-index="'+e+'"]');a.lazy.loadInSlide(c.index(),!1)}}a.emit("lazyImageReady",s[0],r[0]),a.params.autoHeight&&a.updateAutoHeight()}})),a.emit("lazyImageLoad",s[0],r[0])}))}},load:function(){var e=this,t=e.$wrapperEl,a=e.params,i=e.slides,s=e.activeIndex,r=e.virtual&&a.virtual.enabled,n=a.lazy,l=a.slidesPerView;function o(e){if(r){if(t.children("."+a.slideClass+'[data-swiper-slide-index="'+e+'"]').length)return!0}else if(i[e])return!0;return!1}function d(e){return r?m(e).attr("data-swiper-slide-index"):m(e).index()}if("auto"===l&&(l=0),e.lazy.initialImageLoaded||(e.lazy.initialImageLoaded=!0),e.params.watchSlidesVisibility)t.children("."+a.slideVisibleClass).each((function(t){var a=r?m(t).attr("data-swiper-slide-index"):m(t).index();e.lazy.loadInSlide(a)}));else if(l>1)for(var p=s;p<s+l;p+=1)o(p)&&e.lazy.loadInSlide(p);else e.lazy.loadInSlide(s);if(n.loadPrevNext)if(l>1||n.loadPrevNextAmount&&n.loadPrevNextAmount>1){for(var u=n.loadPrevNextAmount,c=l,h=Math.min(s+c+Math.max(u,c),i.length),v=Math.max(s-Math.max(c,u),0),f=s+l;f<h;f+=1)o(f)&&e.lazy.loadInSlide(f);for(var g=v;g<s;g+=1)o(g)&&e.lazy.loadInSlide(g)}else{var y=t.children("."+a.slideNextClass);y.length>0&&e.lazy.loadInSlide(d(y));var w=t.children("."+a.slidePrevClass);w.length>0&&e.lazy.loadInSlide(d(w))}},checkInViewOnLoad:function(){var e=l(),t=this;if(t&&!t.destroyed){var a=t.params.lazy.scrollingElement?m(t.params.lazy.scrollingElement):m(e),i=a[0]===e,s=i?e.innerWidth:a[0].offsetWidth,r=i?e.innerHeight:a[0].offsetHeight,n=t.$el.offset(),o=!1;t.rtlTranslate&&(n.left-=t.$el[0].scrollLeft);for(var d=[[n.left,n.top],[n.left+t.width,n.top],[n.left,n.top+t.height],[n.left+t.width,n.top+t.height]],p=0;p<d.length;p+=1){var u=d[p];if(u[0]>=0&&u[0]<=s&&u[1]>=0&&u[1]<=r){if(0===u[0]&&0===u[1])continue;o=!0}}o?(t.lazy.load(),a.off("scroll",t.lazy.checkInViewOnLoad)):t.lazy.scrollHandlerAttached||(t.lazy.scrollHandlerAttached=!0,a.on("scroll",t.lazy.checkInViewOnLoad))}}},ae={LinearSpline:function(e,t){var a,i,s,r,n,l=function(e,t){for(i=-1,a=e.length;a-i>1;)e[s=a+i>>1]<=t?i=s:a=s;return a};return this.x=e,this.y=t,this.lastIndex=e.length-1,this.interpolate=function(e){return e?(n=l(this.x,e),r=n-1,(e-this.x[r])*(this.y[n]-this.y[r])/(this.x[n]-this.x[r])+this.y[r]):0},this},getInterpolateFunction:function(e){var t=this;t.controller.spline||(t.controller.spline=t.params.loop?new ae.LinearSpline(t.slidesGrid,e.slidesGrid):new ae.LinearSpline(t.snapGrid,e.snapGrid))},setTranslate:function(e,t){var a,i,s=this,r=s.controller.control,n=s.constructor;function l(e){var t=s.rtlTranslate?-s.translate:s.translate;"slide"===s.params.controller.by&&(s.controller.getInterpolateFunction(e),i=-s.controller.spline.interpolate(-t)),i&&"container"!==s.params.controller.by||(a=(e.maxTranslate()-e.minTranslate())/(s.maxTranslate()-s.minTranslate()),i=(t-s.minTranslate())*a+e.minTranslate()),s.params.controller.inverse&&(i=e.maxTranslate()-i),e.updateProgress(i),e.setTranslate(i,s),e.updateActiveIndex(),e.updateSlidesClasses()}if(Array.isArray(r))for(var o=0;o<r.length;o+=1)r[o]!==t&&r[o]instanceof n&&l(r[o]);else r instanceof n&&t!==r&&l(r)},setTransition:function(e,t){var a,i=this,s=i.constructor,r=i.controller.control;function n(t){t.setTransition(e,i),0!==e&&(t.transitionStart(),t.params.autoHeight&&E((function(){t.updateAutoHeight()})),t.$wrapperEl.transitionEnd((function(){r&&(t.params.loop&&"slide"===i.params.controller.by&&t.loopFix(),t.transitionEnd())})))}if(Array.isArray(r))for(a=0;a<r.length;a+=1)r[a]!==t&&r[a]instanceof s&&n(r[a]);else r instanceof s&&t!==r&&n(r)}},ie={getRandomNumber:function(e){void 0===e&&(e=16);return"x".repeat(e).replace(/x/g,(function(){return Math.round(16*Math.random()).toString(16)}))},makeElFocusable:function(e){return e.attr("tabIndex","0"),e},makeElNotFocusable:function(e){return e.attr("tabIndex","-1"),e},addElRole:function(e,t){return e.attr("role",t),e},addElRoleDescription:function(e,t){return e.attr("aria-role-description",t),e},addElControls:function(e,t){return e.attr("aria-controls",t),e},addElLabel:function(e,t){return e.attr("aria-label",t),e},addElId:function(e,t){return e.attr("id",t),e},addElLive:function(e,t){return e.attr("aria-live",t),e},disableEl:function(e){return e.attr("aria-disabled",!0),e},enableEl:function(e){return e.attr("aria-disabled",!1),e},onEnterKey:function(e){var t=this,a=t.params.a11y;if(13===e.keyCode){var i=m(e.target);t.navigation&&t.navigation.$nextEl&&i.is(t.navigation.$nextEl)&&(t.isEnd&&!t.params.loop||t.slideNext(),t.isEnd?t.a11y.notify(a.lastSlideMessage):t.a11y.notify(a.nextSlideMessage)),t.navigation&&t.navigation.$prevEl&&i.is(t.navigation.$prevEl)&&(t.isBeginning&&!t.params.loop||t.slidePrev(),t.isBeginning?t.a11y.notify(a.firstSlideMessage):t.a11y.notify(a.prevSlideMessage)),t.pagination&&i.is("."+t.params.pagination.bulletClass.replace(/ /g,"."))&&i[0].click()}},notify:function(e){var t=this.a11y.liveRegion;0!==t.length&&(t.html(""),t.html(e))},updateNavigation:function(){var e=this;if(!e.params.loop&&e.navigation){var t=e.navigation,a=t.$nextEl,i=t.$prevEl;i&&i.length>0&&(e.isBeginning?(e.a11y.disableEl(i),e.a11y.makeElNotFocusable(i)):(e.a11y.enableEl(i),e.a11y.makeElFocusable(i))),a&&a.length>0&&(e.isEnd?(e.a11y.disableEl(a),e.a11y.makeElNotFocusable(a)):(e.a11y.enableEl(a),e.a11y.makeElFocusable(a)))}},updatePagination:function(){var e=this,t=e.params.a11y;e.pagination&&e.params.pagination.clickable&&e.pagination.bullets&&e.pagination.bullets.length&&e.pagination.bullets.each((function(a){var i=m(a);e.a11y.makeElFocusable(i),e.params.pagination.renderBullet||(e.a11y.addElRole(i,"button"),e.a11y.addElLabel(i,t.paginationBulletMessage.replace(/\{\{index\}\}/,i.index()+1)))}))},init:function(){var e=this,t=e.params.a11y;e.$el.append(e.a11y.liveRegion);var a=e.$el;t.containerRoleDescriptionMessage&&e.a11y.addElRoleDescription(a,t.containerRoleDescriptionMessage),t.containerMessage&&e.a11y.addElLabel(a,t.containerMessage);var i,s,r,n=e.$wrapperEl,l=n.attr("id")||"swiper-wrapper-"+e.a11y.getRandomNumber(16);e.a11y.addElId(n,l),i=e.params.autoplay&&e.params.autoplay.enabled?"off":"polite",e.a11y.addElLive(n,i),t.itemRoleDescriptionMessage&&e.a11y.addElRoleDescription(m(e.slides),t.itemRoleDescriptionMessage),e.a11y.addElRole(m(e.slides),"group"),e.slides.each((function(t){var a=m(t);e.a11y.addElLabel(a,a.index()+1+" / "+e.slides.length)})),e.navigation&&e.navigation.$nextEl&&(s=e.navigation.$nextEl),e.navigation&&e.navigation.$prevEl&&(r=e.navigation.$prevEl),s&&s.length&&(e.a11y.makeElFocusable(s),"BUTTON"!==s[0].tagName&&(e.a11y.addElRole(s,"button"),s.on("keydown",e.a11y.onEnterKey)),e.a11y.addElLabel(s,t.nextSlideMessage),e.a11y.addElControls(s,l)),r&&r.length&&(e.a11y.makeElFocusable(r),"BUTTON"!==r[0].tagName&&(e.a11y.addElRole(r,"button"),r.on("keydown",e.a11y.onEnterKey)),e.a11y.addElLabel(r,t.prevSlideMessage),e.a11y.addElControls(r,l)),e.pagination&&e.params.pagination.clickable&&e.pagination.bullets&&e.pagination.bullets.length&&e.pagination.$el.on("keydown","."+e.params.pagination.bulletClass.replace(/ /g,"."),e.a11y.onEnterKey)},destroy:function(){var e,t,a=this;a.a11y.liveRegion&&a.a11y.liveRegion.length>0&&a.a11y.liveRegion.remove(),a.navigation&&a.navigation.$nextEl&&(e=a.navigation.$nextEl),a.navigation&&a.navigation.$prevEl&&(t=a.navigation.$prevEl),e&&e.off("keydown",a.a11y.onEnterKey),t&&t.off("keydown",a.a11y.onEnterKey),a.pagination&&a.params.pagination.clickable&&a.pagination.bullets&&a.pagination.bullets.length&&a.pagination.$el.off("keydown","."+a.params.pagination.bulletClass.replace(/ /g,"."),a.a11y.onEnterKey)}},se={init:function(){var e=this,t=l();if(e.params.history){if(!t.history||!t.history.pushState)return e.params.history.enabled=!1,void(e.params.hashNavigation.enabled=!0);var a=e.history;a.initialized=!0,a.paths=se.getPathValues(e.params.url),(a.paths.key||a.paths.value)&&(a.scrollToSlide(0,a.paths.value,e.params.runCallbacksOnInit),e.params.history.replaceState||t.addEventListener("popstate",e.history.setHistoryPopState))}},destroy:function(){var e=l();this.params.history.replaceState||e.removeEventListener("popstate",this.history.setHistoryPopState)},setHistoryPopState:function(){var e=this;e.history.paths=se.getPathValues(e.params.url),e.history.scrollToSlide(e.params.speed,e.history.paths.value,!1)},getPathValues:function(e){var t=l(),a=(e?new URL(e):t.location).pathname.slice(1).split("/").filter((function(e){return""!==e})),i=a.length;return{key:a[i-2],value:a[i-1]}},setHistory:function(e,t){var a=this,i=l();if(a.history.initialized&&a.params.history.enabled){var s;s=a.params.url?new URL(a.params.url):i.location;var r=a.slides.eq(t),n=se.slugify(r.attr("data-history"));s.pathname.includes(e)||(n=e+"/"+n);var o=i.history.state;o&&o.value===n||(a.params.history.replaceState?i.history.replaceState({value:n},null,n):i.history.pushState({value:n},null,n))}},slugify:function(e){return e.toString().replace(/\s+/g,"-").replace(/[^\w-]+/g,"").replace(/--+/g,"-").replace(/^-+/,"").replace(/-+$/,"")},scrollToSlide:function(e,t,a){var i=this;if(t)for(var s=0,r=i.slides.length;s<r;s+=1){var n=i.slides.eq(s);if(se.slugify(n.attr("data-history"))===t&&!n.hasClass(i.params.slideDuplicateClass)){var l=n.index();i.slideTo(l,e,a)}}else i.slideTo(0,e,a)}},re={onHashCange:function(){var e=this,t=r();e.emit("hashChange");var a=t.location.hash.replace("#","");if(a!==e.slides.eq(e.activeIndex).attr("data-hash")){var i=e.$wrapperEl.children("."+e.params.slideClass+'[data-hash="'+a+'"]').index();if(void 0===i)return;e.slideTo(i)}},setHash:function(){var e=this,t=l(),a=r();if(e.hashNavigation.initialized&&e.params.hashNavigation.enabled)if(e.params.hashNavigation.replaceState&&t.history&&t.history.replaceState)t.history.replaceState(null,null,"#"+e.slides.eq(e.activeIndex).attr("data-hash")||""),e.emit("hashSet");else{var i=e.slides.eq(e.activeIndex),s=i.attr("data-hash")||i.attr("data-history");a.location.hash=s||"",e.emit("hashSet")}},init:function(){var e=this,t=r(),a=l();if(!(!e.params.hashNavigation.enabled||e.params.history&&e.params.history.enabled)){e.hashNavigation.initialized=!0;var i=t.location.hash.replace("#","");if(i)for(var s=0,n=e.slides.length;s<n;s+=1){var o=e.slides.eq(s);if((o.attr("data-hash")||o.attr("data-history"))===i&&!o.hasClass(e.params.slideDuplicateClass)){var d=o.index();e.slideTo(d,0,e.params.runCallbacksOnInit,!0)}}e.params.hashNavigation.watchState&&m(a).on("hashchange",e.hashNavigation.onHashCange)}},destroy:function(){var e=l();this.params.hashNavigation.watchState&&m(e).off("hashchange",this.hashNavigation.onHashCange)}},ne={run:function(){var e=this,t=e.slides.eq(e.activeIndex),a=e.params.autoplay.delay;t.attr("data-swiper-autoplay")&&(a=t.attr("data-swiper-autoplay")||e.params.autoplay.delay),clearTimeout(e.autoplay.timeout),e.autoplay.timeout=E((function(){var t;e.params.autoplay.reverseDirection?e.params.loop?(e.loopFix(),t=e.slidePrev(e.params.speed,!0,!0),e.emit("autoplay")):e.isBeginning?e.params.autoplay.stopOnLastSlide?e.autoplay.stop():(t=e.slideTo(e.slides.length-1,e.params.speed,!0,!0),e.emit("autoplay")):(t=e.slidePrev(e.params.speed,!0,!0),e.emit("autoplay")):e.params.loop?(e.loopFix(),t=e.slideNext(e.params.speed,!0,!0),e.emit("autoplay")):e.isEnd?e.params.autoplay.stopOnLastSlide?e.autoplay.stop():(t=e.slideTo(0,e.params.speed,!0,!0),e.emit("autoplay")):(t=e.slideNext(e.params.speed,!0,!0),e.emit("autoplay")),(e.params.cssMode&&e.autoplay.running||!1===t)&&e.autoplay.run()}),a)},start:function(){var e=this;return void 0===e.autoplay.timeout&&(!e.autoplay.running&&(e.autoplay.running=!0,e.emit("autoplayStart"),e.autoplay.run(),!0))},stop:function(){var e=this;return!!e.autoplay.running&&(void 0!==e.autoplay.timeout&&(e.autoplay.timeout&&(clearTimeout(e.autoplay.timeout),e.autoplay.timeout=void 0),e.autoplay.running=!1,e.emit("autoplayStop"),!0))},pause:function(e){var t=this;t.autoplay.running&&(t.autoplay.paused||(t.autoplay.timeout&&clearTimeout(t.autoplay.timeout),t.autoplay.paused=!0,0!==e&&t.params.autoplay.waitForTransition?(t.$wrapperEl[0].addEventListener("transitionend",t.autoplay.onTransitionEnd),t.$wrapperEl[0].addEventListener("webkitTransitionEnd",t.autoplay.onTransitionEnd)):(t.autoplay.paused=!1,t.autoplay.run())))},onVisibilityChange:function(){var e=this,t=r();"hidden"===t.visibilityState&&e.autoplay.running&&e.autoplay.pause(),"visible"===t.visibilityState&&e.autoplay.paused&&(e.autoplay.run(),e.autoplay.paused=!1)},onTransitionEnd:function(e){var t=this;t&&!t.destroyed&&t.$wrapperEl&&e.target===t.$wrapperEl[0]&&(t.$wrapperEl[0].removeEventListener("transitionend",t.autoplay.onTransitionEnd),t.$wrapperEl[0].removeEventListener("webkitTransitionEnd",t.autoplay.onTransitionEnd),t.autoplay.paused=!1,t.autoplay.running?t.autoplay.run():t.autoplay.stop())}},le={setTranslate:function(){for(var e=this,t=e.slides,a=0;a<t.length;a+=1){var i=e.slides.eq(a),s=-i[0].swiperSlideOffset;e.params.virtualTranslate||(s-=e.translate);var r=0;e.isHorizontal()||(r=s,s=0);var n=e.params.fadeEffect.crossFade?Math.max(1-Math.abs(i[0].progress),0):1+Math.min(Math.max(i[0].progress,-1),0);i.css({opacity:n}).transform("translate3d("+s+"px, "+r+"px, 0px)")}},setTransition:function(e){var t=this,a=t.slides,i=t.$wrapperEl;if(a.transition(e),t.params.virtualTranslate&&0!==e){var s=!1;a.transitionEnd((function(){if(!s&&t&&!t.destroyed){s=!0,t.animating=!1;for(var e=["webkitTransitionEnd","transitionend"],a=0;a<e.length;a+=1)i.trigger(e[a])}}))}}},oe={setTranslate:function(){var e,t=this,a=t.$el,i=t.$wrapperEl,s=t.slides,r=t.width,n=t.height,l=t.rtlTranslate,o=t.size,d=t.browser,p=t.params.cubeEffect,u=t.isHorizontal(),c=t.virtual&&t.params.virtual.enabled,h=0;p.shadow&&(u?(0===(e=i.find(".swiper-cube-shadow")).length&&(e=m('<div class="swiper-cube-shadow"></div>'),i.append(e)),e.css({height:r+"px"})):0===(e=a.find(".swiper-cube-shadow")).length&&(e=m('<div class="swiper-cube-shadow"></div>'),a.append(e)));for(var v=0;v<s.length;v+=1){var f=s.eq(v),g=v;c&&(g=parseInt(f.attr("data-swiper-slide-index"),10));var y=90*g,w=Math.floor(y/360);l&&(y=-y,w=Math.floor(-y/360));var b=Math.max(Math.min(f[0].progress,1),-1),E=0,x=0,T=0;g%4==0?(E=4*-w*o,T=0):(g-1)%4==0?(E=0,T=4*-w*o):(g-2)%4==0?(E=o+4*w*o,T=o):(g-3)%4==0&&(E=-o,T=3*o+4*o*w),l&&(E=-E),u||(x=E,E=0);var C="rotateX("+(u?0:-y)+"deg) rotateY("+(u?y:0)+"deg) translate3d("+E+"px, "+x+"px, "+T+"px)";if(b<=1&&b>-1&&(h=90*g+90*b,l&&(h=90*-g-90*b)),f.transform(C),p.slideShadows){var S=u?f.find(".swiper-slide-shadow-left"):f.find(".swiper-slide-shadow-top"),M=u?f.find(".swiper-slide-shadow-right"):f.find(".swiper-slide-shadow-bottom");0===S.length&&(S=m('<div class="swiper-slide-shadow-'+(u?"left":"top")+'"></div>'),f.append(S)),0===M.length&&(M=m('<div class="swiper-slide-shadow-'+(u?"right":"bottom")+'"></div>'),f.append(M)),S.length&&(S[0].style.opacity=Math.max(-b,0)),M.length&&(M[0].style.opacity=Math.max(b,0))}}if(i.css({"-webkit-transform-origin":"50% 50% -"+o/2+"px","-moz-transform-origin":"50% 50% -"+o/2+"px","-ms-transform-origin":"50% 50% -"+o/2+"px","transform-origin":"50% 50% -"+o/2+"px"}),p.shadow)if(u)e.transform("translate3d(0px, "+(r/2+p.shadowOffset)+"px, "+-r/2+"px) rotateX(90deg) rotateZ(0deg) scale("+p.shadowScale+")");else{var z=Math.abs(h)-90*Math.floor(Math.abs(h)/90),P=1.5-(Math.sin(2*z*Math.PI/360)/2+Math.cos(2*z*Math.PI/360)/2),k=p.shadowScale,L=p.shadowScale/P,$=p.shadowOffset;e.transform("scale3d("+k+", 1, "+L+") translate3d(0px, "+(n/2+$)+"px, "+-n/2/L+"px) rotateX(-90deg)")}var I=d.isSafari||d.isWebView?-o/2:0;i.transform("translate3d(0px,0,"+I+"px) rotateX("+(t.isHorizontal()?0:h)+"deg) rotateY("+(t.isHorizontal()?-h:0)+"deg)")},setTransition:function(e){var t=this,a=t.$el;t.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e),t.params.cubeEffect.shadow&&!t.isHorizontal()&&a.find(".swiper-cube-shadow").transition(e)}},de={setTranslate:function(){for(var e=this,t=e.slides,a=e.rtlTranslate,i=0;i<t.length;i+=1){var s=t.eq(i),r=s[0].progress;e.params.flipEffect.limitRotation&&(r=Math.max(Math.min(s[0].progress,1),-1));var n=-180*r,l=0,o=-s[0].swiperSlideOffset,d=0;if(e.isHorizontal()?a&&(n=-n):(d=o,o=0,l=-n,n=0),s[0].style.zIndex=-Math.abs(Math.round(r))+t.length,e.params.flipEffect.slideShadows){var p=e.isHorizontal()?s.find(".swiper-slide-shadow-left"):s.find(".swiper-slide-shadow-top"),u=e.isHorizontal()?s.find(".swiper-slide-shadow-right"):s.find(".swiper-slide-shadow-bottom");0===p.length&&(p=m('<div class="swiper-slide-shadow-'+(e.isHorizontal()?"left":"top")+'"></div>'),s.append(p)),0===u.length&&(u=m('<div class="swiper-slide-shadow-'+(e.isHorizontal()?"right":"bottom")+'"></div>'),s.append(u)),p.length&&(p[0].style.opacity=Math.max(-r,0)),u.length&&(u[0].style.opacity=Math.max(r,0))}s.transform("translate3d("+o+"px, "+d+"px, 0px) rotateX("+l+"deg) rotateY("+n+"deg)")}},setTransition:function(e){var t=this,a=t.slides,i=t.activeIndex,s=t.$wrapperEl;if(a.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e),t.params.virtualTranslate&&0!==e){var r=!1;a.eq(i).transitionEnd((function(){if(!r&&t&&!t.destroyed){r=!0,t.animating=!1;for(var e=["webkitTransitionEnd","transitionend"],a=0;a<e.length;a+=1)s.trigger(e[a])}}))}}},pe={setTranslate:function(){for(var e=this,t=e.width,a=e.height,i=e.slides,s=e.slidesSizesGrid,r=e.params.coverflowEffect,n=e.isHorizontal(),l=e.translate,o=n?t/2-l:a/2-l,d=n?r.rotate:-r.rotate,p=r.depth,u=0,c=i.length;u<c;u+=1){var h=i.eq(u),v=s[u],f=(o-h[0].swiperSlideOffset-v/2)/v*r.modifier,g=n?d*f:0,y=n?0:d*f,w=-p*Math.abs(f),b=r.stretch;"string"==typeof b&&-1!==b.indexOf("%")&&(b=parseFloat(r.stretch)/100*v);var E=n?0:b*f,x=n?b*f:0,T=1-(1-r.scale)*Math.abs(f);Math.abs(x)<.001&&(x=0),Math.abs(E)<.001&&(E=0),Math.abs(w)<.001&&(w=0),Math.abs(g)<.001&&(g=0),Math.abs(y)<.001&&(y=0),Math.abs(T)<.001&&(T=0);var C="translate3d("+x+"px,"+E+"px,"+w+"px)  rotateX("+y+"deg) rotateY("+g+"deg) scale("+T+")";if(h.transform(C),h[0].style.zIndex=1-Math.abs(Math.round(f)),r.slideShadows){var S=n?h.find(".swiper-slide-shadow-left"):h.find(".swiper-slide-shadow-top"),M=n?h.find(".swiper-slide-shadow-right"):h.find(".swiper-slide-shadow-bottom");0===S.length&&(S=m('<div class="swiper-slide-shadow-'+(n?"left":"top")+'"></div>'),h.append(S)),0===M.length&&(M=m('<div class="swiper-slide-shadow-'+(n?"right":"bottom")+'"></div>'),h.append(M)),S.length&&(S[0].style.opacity=f>0?f:0),M.length&&(M[0].style.opacity=-f>0?-f:0)}}},setTransition:function(e){this.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e)}},ue={init:function(){var e=this,t=e.params.thumbs;if(e.thumbs.initialized)return!1;e.thumbs.initialized=!0;var a=e.constructor;return t.swiper instanceof a?(e.thumbs.swiper=t.swiper,S(e.thumbs.swiper.originalParams,{watchSlidesProgress:!0,slideToClickedSlide:!1}),S(e.thumbs.swiper.params,{watchSlidesProgress:!0,slideToClickedSlide:!1})):C(t.swiper)&&(e.thumbs.swiper=new a(S({},t.swiper,{watchSlidesVisibility:!0,watchSlidesProgress:!0,slideToClickedSlide:!1})),e.thumbs.swiperCreated=!0),e.thumbs.swiper.$el.addClass(e.params.thumbs.thumbsContainerClass),e.thumbs.swiper.on("tap",e.thumbs.onThumbClick),!0},onThumbClick:function(){var e=this,t=e.thumbs.swiper;if(t){var a=t.clickedIndex,i=t.clickedSlide;if(!(i&&m(i).hasClass(e.params.thumbs.slideThumbActiveClass)||null==a)){var s;if(s=t.params.loop?parseInt(m(t.clickedSlide).attr("data-swiper-slide-index"),10):a,e.params.loop){var r=e.activeIndex;e.slides.eq(r).hasClass(e.params.slideDuplicateClass)&&(e.loopFix(),e._clientLeft=e.$wrapperEl[0].clientLeft,r=e.activeIndex);var n=e.slides.eq(r).prevAll('[data-swiper-slide-index="'+s+'"]').eq(0).index(),l=e.slides.eq(r).nextAll('[data-swiper-slide-index="'+s+'"]').eq(0).index();s=void 0===n?l:void 0===l?n:l-r<r-n?l:n}e.slideTo(s)}}},update:function(e){var t=this,a=t.thumbs.swiper;if(a){var i="auto"===a.params.slidesPerView?a.slidesPerViewDynamic():a.params.slidesPerView,s=t.params.thumbs.autoScrollOffset,r=s&&!a.params.loop;if(t.realIndex!==a.realIndex||r){var n,l,o=a.activeIndex;if(a.params.loop){a.slides.eq(o).hasClass(a.params.slideDuplicateClass)&&(a.loopFix(),a._clientLeft=a.$wrapperEl[0].clientLeft,o=a.activeIndex);var d=a.slides.eq(o).prevAll('[data-swiper-slide-index="'+t.realIndex+'"]').eq(0).index(),p=a.slides.eq(o).nextAll('[data-swiper-slide-index="'+t.realIndex+'"]').eq(0).index();n=void 0===d?p:void 0===p?d:p-o==o-d?o:p-o<o-d?p:d,l=t.activeIndex>t.previousIndex?"next":"prev"}else l=(n=t.realIndex)>t.previousIndex?"next":"prev";r&&(n+="next"===l?s:-1*s),a.visibleSlidesIndexes&&a.visibleSlidesIndexes.indexOf(n)<0&&(a.params.centeredSlides?n=n>o?n-Math.floor(i/2)+1:n+Math.floor(i/2)-1:n>o&&(n=n-i+1),a.slideTo(n,e?0:void 0))}var u=1,c=t.params.thumbs.slideThumbActiveClass;if(t.params.slidesPerView>1&&!t.params.centeredSlides&&(u=t.params.slidesPerView),t.params.thumbs.multipleActiveThumbs||(u=1),u=Math.floor(u),a.slides.removeClass(c),a.params.loop||a.params.virtual&&a.params.virtual.enabled)for(var h=0;h<u;h+=1)a.$wrapperEl.children('[data-swiper-slide-index="'+(t.realIndex+h)+'"]').addClass(c);else for(var v=0;v<u;v+=1)a.slides.eq(t.realIndex+v).addClass(c)}}},ce=[q,_,{name:"mousewheel",params:{mousewheel:{enabled:!1,releaseOnEdges:!1,invert:!1,forceToAxis:!1,sensitivity:1,eventsTarget:"container",thresholdDelta:null,thresholdTime:null}},create:function(){M(this,{mousewheel:{enabled:!1,lastScrollTime:x(),lastEventBeforeSnap:void 0,recentWheelEvents:[],enable:U.enable,disable:U.disable,handle:U.handle,handleMouseEnter:U.handleMouseEnter,handleMouseLeave:U.handleMouseLeave,animateSlider:U.animateSlider,releaseScroll:U.releaseScroll}})},on:{init:function(e){!e.params.mousewheel.enabled&&e.params.cssMode&&e.mousewheel.disable(),e.params.mousewheel.enabled&&e.mousewheel.enable()},destroy:function(e){e.params.cssMode&&e.mousewheel.enable(),e.mousewheel.enabled&&e.mousewheel.disable()}}},{name:"navigation",params:{navigation:{nextEl:null,prevEl:null,hideOnClick:!1,disabledClass:"swiper-button-disabled",hiddenClass:"swiper-button-hidden",lockClass:"swiper-button-lock"}},create:function(){M(this,{navigation:t({},K)})},on:{init:function(e){e.navigation.init(),e.navigation.update()},toEdge:function(e){e.navigation.update()},fromEdge:function(e){e.navigation.update()},destroy:function(e){e.navigation.destroy()},click:function(e,t){var a,i=e.navigation,s=i.$nextEl,r=i.$prevEl;!e.params.navigation.hideOnClick||m(t.target).is(r)||m(t.target).is(s)||(s?a=s.hasClass(e.params.navigation.hiddenClass):r&&(a=r.hasClass(e.params.navigation.hiddenClass)),!0===a?e.emit("navigationShow"):e.emit("navigationHide"),s&&s.toggleClass(e.params.navigation.hiddenClass),r&&r.toggleClass(e.params.navigation.hiddenClass))}}},{name:"pagination",params:{pagination:{el:null,bulletElement:"span",clickable:!1,hideOnClick:!1,renderBullet:null,renderProgressbar:null,renderFraction:null,renderCustom:null,progressbarOpposite:!1,type:"bullets",dynamicBullets:!1,dynamicMainBullets:1,formatFractionCurrent:function(e){return e},formatFractionTotal:function(e){return e},bulletClass:"swiper-pagination-bullet",bulletActiveClass:"swiper-pagination-bullet-active",modifierClass:"swiper-pagination-",currentClass:"swiper-pagination-current",totalClass:"swiper-pagination-total",hiddenClass:"swiper-pagination-hidden",progressbarFillClass:"swiper-pagination-progressbar-fill",progressbarOppositeClass:"swiper-pagination-progressbar-opposite",clickableClass:"swiper-pagination-clickable",lockClass:"swiper-pagination-lock"}},create:function(){M(this,{pagination:t({dynamicBulletIndex:0},Z)})},on:{init:function(e){e.pagination.init(),e.pagination.render(),e.pagination.update()},activeIndexChange:function(e){(e.params.loop||void 0===e.snapIndex)&&e.pagination.update()},snapIndexChange:function(e){e.params.loop||e.pagination.update()},slidesLengthChange:function(e){e.params.loop&&(e.pagination.render(),e.pagination.update())},snapGridLengthChange:function(e){e.params.loop||(e.pagination.render(),e.pagination.update())},destroy:function(e){e.pagination.destroy()},click:function(e,t){e.params.pagination.el&&e.params.pagination.hideOnClick&&e.pagination.$el.length>0&&!m(t.target).hasClass(e.params.pagination.bulletClass)&&(!0===e.pagination.$el.hasClass(e.params.pagination.hiddenClass)?e.emit("paginationShow"):e.emit("paginationHide"),e.pagination.$el.toggleClass(e.params.pagination.hiddenClass))}}},{name:"scrollbar",params:{scrollbar:{el:null,dragSize:"auto",hide:!1,draggable:!1,snapOnRelease:!0,lockClass:"swiper-scrollbar-lock",dragClass:"swiper-scrollbar-drag"}},create:function(){M(this,{scrollbar:t({isTouched:!1,timeout:null,dragTimeout:null},J)})},on:{init:function(e){e.scrollbar.init(),e.scrollbar.updateSize(),e.scrollbar.setTranslate()},update:function(e){e.scrollbar.updateSize()},resize:function(e){e.scrollbar.updateSize()},observerUpdate:function(e){e.scrollbar.updateSize()},setTranslate:function(e){e.scrollbar.setTranslate()},setTransition:function(e,t){e.scrollbar.setTransition(t)},destroy:function(e){e.scrollbar.destroy()}}},{name:"parallax",params:{parallax:{enabled:!1}},create:function(){M(this,{parallax:t({},Q)})},on:{beforeInit:function(e){e.params.parallax.enabled&&(e.params.watchSlidesProgress=!0,e.originalParams.watchSlidesProgress=!0)},init:function(e){e.params.parallax.enabled&&e.parallax.setTranslate()},setTranslate:function(e){e.params.parallax.enabled&&e.parallax.setTranslate()},setTransition:function(e,t){e.params.parallax.enabled&&e.parallax.setTransition(t)}}},{name:"zoom",params:{zoom:{enabled:!1,maxRatio:3,minRatio:1,toggle:!0,containerClass:"swiper-zoom-container",zoomedSlideClass:"swiper-slide-zoomed"}},create:function(){var e=this;M(e,{zoom:t({enabled:!1,scale:1,currentScale:1,isScaling:!1,gesture:{$slideEl:void 0,slideWidth:void 0,slideHeight:void 0,$imageEl:void 0,$imageWrapEl:void 0,maxRatio:3},image:{isTouched:void 0,isMoved:void 0,currentX:void 0,currentY:void 0,minX:void 0,minY:void 0,maxX:void 0,maxY:void 0,width:void 0,height:void 0,startX:void 0,startY:void 0,touchesStart:{},touchesCurrent:{}},velocity:{x:void 0,y:void 0,prevPositionX:void 0,prevPositionY:void 0,prevTime:void 0}},ee)});var a=1;Object.defineProperty(e.zoom,"scale",{get:function(){return a},set:function(t){if(a!==t){var i=e.zoom.gesture.$imageEl?e.zoom.gesture.$imageEl[0]:void 0,s=e.zoom.gesture.$slideEl?e.zoom.gesture.$slideEl[0]:void 0;e.emit("zoomChange",t,i,s)}a=t}})},on:{init:function(e){e.params.zoom.enabled&&e.zoom.enable()},destroy:function(e){e.zoom.disable()},touchStart:function(e,t){e.zoom.enabled&&e.zoom.onTouchStart(t)},touchEnd:function(e,t){e.zoom.enabled&&e.zoom.onTouchEnd(t)},doubleTap:function(e,t){e.params.zoom.enabled&&e.zoom.enabled&&e.params.zoom.toggle&&e.zoom.toggle(t)},transitionEnd:function(e){e.zoom.enabled&&e.params.zoom.enabled&&e.zoom.onTransitionEnd()},slideChange:function(e){e.zoom.enabled&&e.params.zoom.enabled&&e.params.cssMode&&e.zoom.onTransitionEnd()}}},{name:"lazy",params:{lazy:{checkInView:!1,enabled:!1,loadPrevNext:!1,loadPrevNextAmount:1,loadOnTransitionStart:!1,scrollingElement:"",elementClass:"swiper-lazy",loadingClass:"swiper-lazy-loading",loadedClass:"swiper-lazy-loaded",preloaderClass:"swiper-lazy-preloader"}},create:function(){M(this,{lazy:t({initialImageLoaded:!1},te)})},on:{beforeInit:function(e){e.params.lazy.enabled&&e.params.preloadImages&&(e.params.preloadImages=!1)},init:function(e){e.params.lazy.enabled&&!e.params.loop&&0===e.params.initialSlide&&(e.params.lazy.checkInView?e.lazy.checkInViewOnLoad():e.lazy.load())},scroll:function(e){e.params.freeMode&&!e.params.freeModeSticky&&e.lazy.load()},resize:function(e){e.params.lazy.enabled&&e.lazy.load()},scrollbarDragMove:function(e){e.params.lazy.enabled&&e.lazy.load()},transitionStart:function(e){e.params.lazy.enabled&&(e.params.lazy.loadOnTransitionStart||!e.params.lazy.loadOnTransitionStart&&!e.lazy.initialImageLoaded)&&e.lazy.load()},transitionEnd:function(e){e.params.lazy.enabled&&!e.params.lazy.loadOnTransitionStart&&e.lazy.load()},slideChange:function(e){e.params.lazy.enabled&&e.params.cssMode&&e.lazy.load()}}},{name:"controller",params:{controller:{control:void 0,inverse:!1,by:"slide"}},create:function(){M(this,{controller:t({control:this.params.controller.control},ae)})},on:{update:function(e){e.controller.control&&e.controller.spline&&(e.controller.spline=void 0,delete e.controller.spline)},resize:function(e){e.controller.control&&e.controller.spline&&(e.controller.spline=void 0,delete e.controller.spline)},observerUpdate:function(e){e.controller.control&&e.controller.spline&&(e.controller.spline=void 0,delete e.controller.spline)},setTranslate:function(e,t,a){e.controller.control&&e.controller.setTranslate(t,a)},setTransition:function(e,t,a){e.controller.control&&e.controller.setTransition(t,a)}}},{name:"a11y",params:{a11y:{enabled:!0,notificationClass:"swiper-notification",prevSlideMessage:"Previous slide",nextSlideMessage:"Next slide",firstSlideMessage:"This is the first slide",lastSlideMessage:"This is the last slide",paginationBulletMessage:"Go to slide {{index}}",containerMessage:null,containerRoleDescriptionMessage:null,itemRoleDescriptionMessage:null}},create:function(){M(this,{a11y:t({},ie,{liveRegion:m('<span class="'+this.params.a11y.notificationClass+'" aria-live="assertive" aria-atomic="true"></span>')})})},on:{afterInit:function(e){e.params.a11y.enabled&&(e.a11y.init(),e.a11y.updateNavigation())},toEdge:function(e){e.params.a11y.enabled&&e.a11y.updateNavigation()},fromEdge:function(e){e.params.a11y.enabled&&e.a11y.updateNavigation()},paginationUpdate:function(e){e.params.a11y.enabled&&e.a11y.updatePagination()},destroy:function(e){e.params.a11y.enabled&&e.a11y.destroy()}}},{name:"history",params:{history:{enabled:!1,replaceState:!1,key:"slides"}},create:function(){M(this,{history:t({},se)})},on:{init:function(e){e.params.history.enabled&&e.history.init()},destroy:function(e){e.params.history.enabled&&e.history.destroy()},transitionEnd:function(e){e.history.initialized&&e.history.setHistory(e.params.history.key,e.activeIndex)},slideChange:function(e){e.history.initialized&&e.params.cssMode&&e.history.setHistory(e.params.history.key,e.activeIndex)}}},{name:"hash-navigation",params:{hashNavigation:{enabled:!1,replaceState:!1,watchState:!1}},create:function(){M(this,{hashNavigation:t({initialized:!1},re)})},on:{init:function(e){e.params.hashNavigation.enabled&&e.hashNavigation.init()},destroy:function(e){e.params.hashNavigation.enabled&&e.hashNavigation.destroy()},transitionEnd:function(e){e.hashNavigation.initialized&&e.hashNavigation.setHash()},slideChange:function(e){e.hashNavigation.initialized&&e.params.cssMode&&e.hashNavigation.setHash()}}},{name:"autoplay",params:{autoplay:{enabled:!1,delay:3e3,waitForTransition:!0,disableOnInteraction:!0,stopOnLastSlide:!1,reverseDirection:!1}},create:function(){M(this,{autoplay:t({},ne,{running:!1,paused:!1})})},on:{init:function(e){e.params.autoplay.enabled&&(e.autoplay.start(),r().addEventListener("visibilitychange",e.autoplay.onVisibilityChange))},beforeTransitionStart:function(e,t,a){e.autoplay.running&&(a||!e.params.autoplay.disableOnInteraction?e.autoplay.pause(t):e.autoplay.stop())},sliderFirstMove:function(e){e.autoplay.running&&(e.params.autoplay.disableOnInteraction?e.autoplay.stop():e.autoplay.pause())},touchEnd:function(e){e.params.cssMode&&e.autoplay.paused&&!e.params.autoplay.disableOnInteraction&&e.autoplay.run()},destroy:function(e){e.autoplay.running&&e.autoplay.stop(),r().removeEventListener("visibilitychange",e.autoplay.onVisibilityChange)}}},{name:"effect-fade",params:{fadeEffect:{crossFade:!1}},create:function(){M(this,{fadeEffect:t({},le)})},on:{beforeInit:function(e){if("fade"===e.params.effect){e.classNames.push(e.params.containerModifierClass+"fade");var t={slidesPerView:1,slidesPerColumn:1,slidesPerGroup:1,watchSlidesProgress:!0,spaceBetween:0,virtualTranslate:!0};S(e.params,t),S(e.originalParams,t)}},setTranslate:function(e){"fade"===e.params.effect&&e.fadeEffect.setTranslate()},setTransition:function(e,t){"fade"===e.params.effect&&e.fadeEffect.setTransition(t)}}},{name:"effect-cube",params:{cubeEffect:{slideShadows:!0,shadow:!0,shadowOffset:20,shadowScale:.94}},create:function(){M(this,{cubeEffect:t({},oe)})},on:{beforeInit:function(e){if("cube"===e.params.effect){e.classNames.push(e.params.containerModifierClass+"cube"),e.classNames.push(e.params.containerModifierClass+"3d");var t={slidesPerView:1,slidesPerColumn:1,slidesPerGroup:1,watchSlidesProgress:!0,resistanceRatio:0,spaceBetween:0,centeredSlides:!1,virtualTranslate:!0};S(e.params,t),S(e.originalParams,t)}},setTranslate:function(e){"cube"===e.params.effect&&e.cubeEffect.setTranslate()},setTransition:function(e,t){"cube"===e.params.effect&&e.cubeEffect.setTransition(t)}}},{name:"effect-flip",params:{flipEffect:{slideShadows:!0,limitRotation:!0}},create:function(){M(this,{flipEffect:t({},de)})},on:{beforeInit:function(e){if("flip"===e.params.effect){e.classNames.push(e.params.containerModifierClass+"flip"),e.classNames.push(e.params.containerModifierClass+"3d");var t={slidesPerView:1,slidesPerColumn:1,slidesPerGroup:1,watchSlidesProgress:!0,spaceBetween:0,virtualTranslate:!0};S(e.params,t),S(e.originalParams,t)}},setTranslate:function(e){"flip"===e.params.effect&&e.flipEffect.setTranslate()},setTransition:function(e,t){"flip"===e.params.effect&&e.flipEffect.setTransition(t)}}},{name:"effect-coverflow",params:{coverflowEffect:{rotate:50,stretch:0,depth:100,scale:1,modifier:1,slideShadows:!0}},create:function(){M(this,{coverflowEffect:t({},pe)})},on:{beforeInit:function(e){"coverflow"===e.params.effect&&(e.classNames.push(e.params.containerModifierClass+"coverflow"),e.classNames.push(e.params.containerModifierClass+"3d"),e.params.watchSlidesProgress=!0,e.originalParams.watchSlidesProgress=!0)},setTranslate:function(e){"coverflow"===e.params.effect&&e.coverflowEffect.setTranslate()},setTransition:function(e,t){"coverflow"===e.params.effect&&e.coverflowEffect.setTransition(t)}}},{name:"thumbs",params:{thumbs:{swiper:null,multipleActiveThumbs:!0,autoScrollOffset:0,slideThumbActiveClass:"swiper-slide-thumb-active",thumbsContainerClass:"swiper-container-thumbs"}},create:function(){M(this,{thumbs:t({swiper:null,initialized:!1},ue)})},on:{beforeInit:function(e){var t=e.params.thumbs;t&&t.swiper&&(e.thumbs.init(),e.thumbs.update(!0))},slideChange:function(e){e.thumbs.swiper&&e.thumbs.update()},update:function(e){e.thumbs.swiper&&e.thumbs.update()},resize:function(e){e.thumbs.swiper&&e.thumbs.update()},observerUpdate:function(e){e.thumbs.swiper&&e.thumbs.update()},setTransition:function(e,t){var a=e.thumbs.swiper;a&&a.setTransition(t)},beforeDestroy:function(e){var t=e.thumbs.swiper;t&&e.thumbs.swiperCreated&&t&&t.destroy()}}}];return R.use(ce),R}));


/*!
 * Masonry PACKAGED v4.2.2
 * Cascading grid layout library
 * https://masonry.desandro.com
 * MIT License
 * by David DeSandro
 */

!function(t,e){"function"==typeof define&&define.amd?define("jquery-bridget/jquery-bridget",["jquery"],function(i){return e(t,i)}):"object"==typeof module&&module.exports?module.exports=e(t,require("jquery")):t.jQueryBridget=e(t,t.jQuery)}(window,function(t,e){"use strict";function i(i,r,a){function h(t,e,n){var o,r="$()."+i+'("'+e+'")';return t.each(function(t,h){var u=a.data(h,i);if(!u)return void s(i+" not initialized. Cannot call methods, i.e. "+r);var d=u[e];if(!d||"_"==e.charAt(0))return void s(r+" is not a valid method");var l=d.apply(u,n);o=void 0===o?l:o}),void 0!==o?o:t}function u(t,e){t.each(function(t,n){var o=a.data(n,i);o?(o.option(e),o._init()):(o=new r(n,e),a.data(n,i,o))})}a=a||e||t.jQuery,a&&(r.prototype.option||(r.prototype.option=function(t){a.isPlainObject(t)&&(this.options=a.extend(!0,this.options,t))}),a.fn[i]=function(t){if("string"==typeof t){var e=o.call(arguments,1);return h(this,t,e)}return u(this,t),this},n(a))}function n(t){!t||t&&t.bridget||(t.bridget=i)}var o=Array.prototype.slice,r=t.console,s="undefined"==typeof r?function(){}:function(t){r.error(t)};return n(e||t.jQuery),i}),function(t,e){"function"==typeof define&&define.amd?define("ev-emitter/ev-emitter",e):"object"==typeof module&&module.exports?module.exports=e():t.EvEmitter=e()}("undefined"!=typeof window?window:this,function(){function t(){}var e=t.prototype;return e.on=function(t,e){if(t&&e){var i=this._events=this._events||{},n=i[t]=i[t]||[];return-1==n.indexOf(e)&&n.push(e),this}},e.once=function(t,e){if(t&&e){this.on(t,e);var i=this._onceEvents=this._onceEvents||{},n=i[t]=i[t]||{};return n[e]=!0,this}},e.off=function(t,e){var i=this._events&&this._events[t];if(i&&i.length){var n=i.indexOf(e);return-1!=n&&i.splice(n,1),this}},e.emitEvent=function(t,e){var i=this._events&&this._events[t];if(i&&i.length){i=i.slice(0),e=e||[];for(var n=this._onceEvents&&this._onceEvents[t],o=0;o<i.length;o++){var r=i[o],s=n&&n[r];s&&(this.off(t,r),delete n[r]),r.apply(this,e)}return this}},e.allOff=function(){delete this._events,delete this._onceEvents},t}),function(t,e){"function"==typeof define&&define.amd?define("get-size/get-size",e):"object"==typeof module&&module.exports?module.exports=e():t.getSize=e()}(window,function(){"use strict";function t(t){var e=parseFloat(t),i=-1==t.indexOf("%")&&!isNaN(e);return i&&e}function e(){}function i(){for(var t={width:0,height:0,innerWidth:0,innerHeight:0,outerWidth:0,outerHeight:0},e=0;u>e;e++){var i=h[e];t[i]=0}return t}function n(t){var e=getComputedStyle(t);return e||a("Style returned "+e+". Are you running this code in a hidden iframe on Firefox? See https://bit.ly/getsizebug1"),e}function o(){if(!d){d=!0;var e=document.createElement("div");e.style.width="200px",e.style.padding="1px 2px 3px 4px",e.style.borderStyle="solid",e.style.borderWidth="1px 2px 3px 4px",e.style.boxSizing="border-box";var i=document.body||document.documentElement;i.appendChild(e);var o=n(e);s=200==Math.round(t(o.width)),r.isBoxSizeOuter=s,i.removeChild(e)}}function r(e){if(o(),"string"==typeof e&&(e=document.querySelector(e)),e&&"object"==typeof e&&e.nodeType){var r=n(e);if("none"==r.display)return i();var a={};a.width=e.offsetWidth,a.height=e.offsetHeight;for(var d=a.isBorderBox="border-box"==r.boxSizing,l=0;u>l;l++){var c=h[l],f=r[c],m=parseFloat(f);a[c]=isNaN(m)?0:m}var p=a.paddingLeft+a.paddingRight,g=a.paddingTop+a.paddingBottom,y=a.marginLeft+a.marginRight,v=a.marginTop+a.marginBottom,_=a.borderLeftWidth+a.borderRightWidth,z=a.borderTopWidth+a.borderBottomWidth,E=d&&s,b=t(r.width);b!==!1&&(a.width=b+(E?0:p+_));var x=t(r.height);return x!==!1&&(a.height=x+(E?0:g+z)),a.innerWidth=a.width-(p+_),a.innerHeight=a.height-(g+z),a.outerWidth=a.width+y,a.outerHeight=a.height+v,a}}var s,a="undefined"==typeof console?e:function(t){console.error(t)},h=["paddingLeft","paddingRight","paddingTop","paddingBottom","marginLeft","marginRight","marginTop","marginBottom","borderLeftWidth","borderRightWidth","borderTopWidth","borderBottomWidth"],u=h.length,d=!1;return r}),function(t,e){"use strict";"function"==typeof define&&define.amd?define("desandro-matches-selector/matches-selector",e):"object"==typeof module&&module.exports?module.exports=e():t.matchesSelector=e()}(window,function(){"use strict";var t=function(){var t=window.Element.prototype;if(t.matches)return"matches";if(t.matchesSelector)return"matchesSelector";for(var e=["webkit","moz","ms","o"],i=0;i<e.length;i++){var n=e[i],o=n+"MatchesSelector";if(t[o])return o}}();return function(e,i){return e[t](i)}}),function(t,e){"function"==typeof define&&define.amd?define("fizzy-ui-utils/utils",["desandro-matches-selector/matches-selector"],function(i){return e(t,i)}):"object"==typeof module&&module.exports?module.exports=e(t,require("desandro-matches-selector")):t.fizzyUIUtils=e(t,t.matchesSelector)}(window,function(t,e){var i={};i.extend=function(t,e){for(var i in e)t[i]=e[i];return t},i.modulo=function(t,e){return(t%e+e)%e};var n=Array.prototype.slice;i.makeArray=function(t){if(Array.isArray(t))return t;if(null===t||void 0===t)return[];var e="object"==typeof t&&"number"==typeof t.length;return e?n.call(t):[t]},i.removeFrom=function(t,e){var i=t.indexOf(e);-1!=i&&t.splice(i,1)},i.getParent=function(t,i){for(;t.parentNode&&t!=document.body;)if(t=t.parentNode,e(t,i))return t},i.getQueryElement=function(t){return"string"==typeof t?document.querySelector(t):t},i.handleEvent=function(t){var e="on"+t.type;this[e]&&this[e](t)},i.filterFindElements=function(t,n){t=i.makeArray(t);var o=[];return t.forEach(function(t){if(t instanceof HTMLElement){if(!n)return void o.push(t);e(t,n)&&o.push(t);for(var i=t.querySelectorAll(n),r=0;r<i.length;r++)o.push(i[r])}}),o},i.debounceMethod=function(t,e,i){i=i||100;var n=t.prototype[e],o=e+"Timeout";t.prototype[e]=function(){var t=this[o];clearTimeout(t);var e=arguments,r=this;this[o]=setTimeout(function(){n.apply(r,e),delete r[o]},i)}},i.docReady=function(t){var e=document.readyState;"complete"==e||"interactive"==e?setTimeout(t):document.addEventListener("DOMContentLoaded",t)},i.toDashed=function(t){return t.replace(/(.)([A-Z])/g,function(t,e,i){return e+"-"+i}).toLowerCase()};var o=t.console;return i.htmlInit=function(e,n){i.docReady(function(){var r=i.toDashed(n),s="data-"+r,a=document.querySelectorAll("["+s+"]"),h=document.querySelectorAll(".js-"+r),u=i.makeArray(a).concat(i.makeArray(h)),d=s+"-options",l=t.jQuery;u.forEach(function(t){var i,r=t.getAttribute(s)||t.getAttribute(d);try{i=r&&JSON.parse(r)}catch(a){return void(o&&o.error("Error parsing "+s+" on "+t.className+": "+a))}var h=new e(t,i);l&&l.data(t,n,h)})})},i}),function(t,e){"function"==typeof define&&define.amd?define("outlayer/item",["ev-emitter/ev-emitter","get-size/get-size"],e):"object"==typeof module&&module.exports?module.exports=e(require("ev-emitter"),require("get-size")):(t.Outlayer={},t.Outlayer.Item=e(t.EvEmitter,t.getSize))}(window,function(t,e){"use strict";function i(t){for(var e in t)return!1;return e=null,!0}function n(t,e){t&&(this.element=t,this.layout=e,this.position={x:0,y:0},this._create())}function o(t){return t.replace(/([A-Z])/g,function(t){return"-"+t.toLowerCase()})}var r=document.documentElement.style,s="string"==typeof r.transition?"transition":"WebkitTransition",a="string"==typeof r.transform?"transform":"WebkitTransform",h={WebkitTransition:"webkitTransitionEnd",transition:"transitionend"}[s],u={transform:a,transition:s,transitionDuration:s+"Duration",transitionProperty:s+"Property",transitionDelay:s+"Delay"},d=n.prototype=Object.create(t.prototype);d.constructor=n,d._create=function(){this._transn={ingProperties:{},clean:{},onEnd:{}},this.css({position:"absolute"})},d.handleEvent=function(t){var e="on"+t.type;this[e]&&this[e](t)},d.getSize=function(){this.size=e(this.element)},d.css=function(t){var e=this.element.style;for(var i in t){var n=u[i]||i;e[n]=t[i]}},d.getPosition=function(){var t=getComputedStyle(this.element),e=this.layout._getOption("originLeft"),i=this.layout._getOption("originTop"),n=t[e?"left":"right"],o=t[i?"top":"bottom"],r=parseFloat(n),s=parseFloat(o),a=this.layout.size;-1!=n.indexOf("%")&&(r=r/100*a.width),-1!=o.indexOf("%")&&(s=s/100*a.height),r=isNaN(r)?0:r,s=isNaN(s)?0:s,r-=e?a.paddingLeft:a.paddingRight,s-=i?a.paddingTop:a.paddingBottom,this.position.x=r,this.position.y=s},d.layoutPosition=function(){var t=this.layout.size,e={},i=this.layout._getOption("originLeft"),n=this.layout._getOption("originTop"),o=i?"paddingLeft":"paddingRight",r=i?"left":"right",s=i?"right":"left",a=this.position.x+t[o];e[r]=this.getXValue(a),e[s]="";var h=n?"paddingTop":"paddingBottom",u=n?"top":"bottom",d=n?"bottom":"top",l=this.position.y+t[h];e[u]=this.getYValue(l),e[d]="",this.css(e),this.emitEvent("layout",[this])},d.getXValue=function(t){var e=this.layout._getOption("horizontal");return this.layout.options.percentPosition&&!e?t/this.layout.size.width*100+"%":t+"px"},d.getYValue=function(t){var e=this.layout._getOption("horizontal");return this.layout.options.percentPosition&&e?t/this.layout.size.height*100+"%":t+"px"},d._transitionTo=function(t,e){this.getPosition();var i=this.position.x,n=this.position.y,o=t==this.position.x&&e==this.position.y;if(this.setPosition(t,e),o&&!this.isTransitioning)return void this.layoutPosition();var r=t-i,s=e-n,a={};a.transform=this.getTranslate(r,s),this.transition({to:a,onTransitionEnd:{transform:this.layoutPosition},isCleaning:!0})},d.getTranslate=function(t,e){var i=this.layout._getOption("originLeft"),n=this.layout._getOption("originTop");return t=i?t:-t,e=n?e:-e,"translate3d("+t+"px, "+e+"px, 0)"},d.goTo=function(t,e){this.setPosition(t,e),this.layoutPosition()},d.moveTo=d._transitionTo,d.setPosition=function(t,e){this.position.x=parseFloat(t),this.position.y=parseFloat(e)},d._nonTransition=function(t){this.css(t.to),t.isCleaning&&this._removeStyles(t.to);for(var e in t.onTransitionEnd)t.onTransitionEnd[e].call(this)},d.transition=function(t){if(!parseFloat(this.layout.options.transitionDuration))return void this._nonTransition(t);var e=this._transn;for(var i in t.onTransitionEnd)e.onEnd[i]=t.onTransitionEnd[i];for(i in t.to)e.ingProperties[i]=!0,t.isCleaning&&(e.clean[i]=!0);if(t.from){this.css(t.from);var n=this.element.offsetHeight;n=null}this.enableTransition(t.to),this.css(t.to),this.isTransitioning=!0};var l="opacity,"+o(a);d.enableTransition=function(){if(!this.isTransitioning){var t=this.layout.options.transitionDuration;t="number"==typeof t?t+"ms":t,this.css({transitionProperty:l,transitionDuration:t,transitionDelay:this.staggerDelay||0}),this.element.addEventListener(h,this,!1)}},d.onwebkitTransitionEnd=function(t){this.ontransitionend(t)},d.onotransitionend=function(t){this.ontransitionend(t)};var c={"-webkit-transform":"transform"};d.ontransitionend=function(t){if(t.target===this.element){var e=this._transn,n=c[t.propertyName]||t.propertyName;if(delete e.ingProperties[n],i(e.ingProperties)&&this.disableTransition(),n in e.clean&&(this.element.style[t.propertyName]="",delete e.clean[n]),n in e.onEnd){var o=e.onEnd[n];o.call(this),delete e.onEnd[n]}this.emitEvent("transitionEnd",[this])}},d.disableTransition=function(){this.removeTransitionStyles(),this.element.removeEventListener(h,this,!1),this.isTransitioning=!1},d._removeStyles=function(t){var e={};for(var i in t)e[i]="";this.css(e)};var f={transitionProperty:"",transitionDuration:"",transitionDelay:""};return d.removeTransitionStyles=function(){this.css(f)},d.stagger=function(t){t=isNaN(t)?0:t,this.staggerDelay=t+"ms"},d.removeElem=function(){this.element.parentNode.removeChild(this.element),this.css({display:""}),this.emitEvent("remove",[this])},d.remove=function(){return s&&parseFloat(this.layout.options.transitionDuration)?(this.once("transitionEnd",function(){this.removeElem()}),void this.hide()):void this.removeElem()},d.reveal=function(){delete this.isHidden,this.css({display:""});var t=this.layout.options,e={},i=this.getHideRevealTransitionEndProperty("visibleStyle");e[i]=this.onRevealTransitionEnd,this.transition({from:t.hiddenStyle,to:t.visibleStyle,isCleaning:!0,onTransitionEnd:e})},d.onRevealTransitionEnd=function(){this.isHidden||this.emitEvent("reveal")},d.getHideRevealTransitionEndProperty=function(t){var e=this.layout.options[t];if(e.opacity)return"opacity";for(var i in e)return i},d.hide=function(){this.isHidden=!0,this.css({display:""});var t=this.layout.options,e={},i=this.getHideRevealTransitionEndProperty("hiddenStyle");e[i]=this.onHideTransitionEnd,this.transition({from:t.visibleStyle,to:t.hiddenStyle,isCleaning:!0,onTransitionEnd:e})},d.onHideTransitionEnd=function(){this.isHidden&&(this.css({display:"none"}),this.emitEvent("hide"))},d.destroy=function(){this.css({position:"",left:"",right:"",top:"",bottom:"",transition:"",transform:""})},n}),function(t,e){"use strict";"function"==typeof define&&define.amd?define("outlayer/outlayer",["ev-emitter/ev-emitter","get-size/get-size","fizzy-ui-utils/utils","./item"],function(i,n,o,r){return e(t,i,n,o,r)}):"object"==typeof module&&module.exports?module.exports=e(t,require("ev-emitter"),require("get-size"),require("fizzy-ui-utils"),require("./item")):t.Outlayer=e(t,t.EvEmitter,t.getSize,t.fizzyUIUtils,t.Outlayer.Item)}(window,function(t,e,i,n,o){"use strict";function r(t,e){var i=n.getQueryElement(t);if(!i)return void(h&&h.error("Bad element for "+this.constructor.namespace+": "+(i||t)));this.element=i,u&&(this.$element=u(this.element)),this.options=n.extend({},this.constructor.defaults),this.option(e);var o=++l;this.element.outlayerGUID=o,c[o]=this,this._create();var r=this._getOption("initLayout");r&&this.layout()}function s(t){function e(){t.apply(this,arguments)}return e.prototype=Object.create(t.prototype),e.prototype.constructor=e,e}function a(t){if("number"==typeof t)return t;var e=t.match(/(^\d*\.?\d*)(\w*)/),i=e&&e[1],n=e&&e[2];if(!i.length)return 0;i=parseFloat(i);var o=m[n]||1;return i*o}var h=t.console,u=t.jQuery,d=function(){},l=0,c={};r.namespace="outlayer",r.Item=o,r.defaults={containerStyle:{position:"relative"},initLayout:!0,originLeft:!0,originTop:!0,resize:!0,resizeContainer:!0,transitionDuration:"0.4s",hiddenStyle:{opacity:0,transform:"scale(0.001)"},visibleStyle:{opacity:1,transform:"scale(1)"}};var f=r.prototype;n.extend(f,e.prototype),f.option=function(t){n.extend(this.options,t)},f._getOption=function(t){var e=this.constructor.compatOptions[t];return e&&void 0!==this.options[e]?this.options[e]:this.options[t]},r.compatOptions={initLayout:"isInitLayout",horizontal:"isHorizontal",layoutInstant:"isLayoutInstant",originLeft:"isOriginLeft",originTop:"isOriginTop",resize:"isResizeBound",resizeContainer:"isResizingContainer"},f._create=function(){this.reloadItems(),this.stamps=[],this.stamp(this.options.stamp),n.extend(this.element.style,this.options.containerStyle);var t=this._getOption("resize");t&&this.bindResize()},f.reloadItems=function(){this.items=this._itemize(this.element.children)},f._itemize=function(t){for(var e=this._filterFindItemElements(t),i=this.constructor.Item,n=[],o=0;o<e.length;o++){var r=e[o],s=new i(r,this);n.push(s)}return n},f._filterFindItemElements=function(t){return n.filterFindElements(t,this.options.itemSelector)},f.getItemElements=function(){return this.items.map(function(t){return t.element})},f.layout=function(){this._resetLayout(),this._manageStamps();var t=this._getOption("layoutInstant"),e=void 0!==t?t:!this._isLayoutInited;this.layoutItems(this.items,e),this._isLayoutInited=!0},f._init=f.layout,f._resetLayout=function(){this.getSize()},f.getSize=function(){this.size=i(this.element)},f._getMeasurement=function(t,e){var n,o=this.options[t];o?("string"==typeof o?n=this.element.querySelector(o):o instanceof HTMLElement&&(n=o),this[t]=n?i(n)[e]:o):this[t]=0},f.layoutItems=function(t,e){t=this._getItemsForLayout(t),this._layoutItems(t,e),this._postLayout()},f._getItemsForLayout=function(t){return t.filter(function(t){return!t.isIgnored})},f._layoutItems=function(t,e){if(this._emitCompleteOnItems("layout",t),t&&t.length){var i=[];t.forEach(function(t){var n=this._getItemLayoutPosition(t);n.item=t,n.isInstant=e||t.isLayoutInstant,i.push(n)},this),this._processLayoutQueue(i)}},f._getItemLayoutPosition=function(){return{x:0,y:0}},f._processLayoutQueue=function(t){this.updateStagger(),t.forEach(function(t,e){this._positionItem(t.item,t.x,t.y,t.isInstant,e)},this)},f.updateStagger=function(){var t=this.options.stagger;return null===t||void 0===t?void(this.stagger=0):(this.stagger=a(t),this.stagger)},f._positionItem=function(t,e,i,n,o){n?t.goTo(e,i):(t.stagger(o*this.stagger),t.moveTo(e,i))},f._postLayout=function(){this.resizeContainer()},f.resizeContainer=function(){var t=this._getOption("resizeContainer");if(t){var e=this._getContainerSize();e&&(this._setContainerMeasure(e.width,!0),this._setContainerMeasure(e.height,!1))}},f._getContainerSize=d,f._setContainerMeasure=function(t,e){if(void 0!==t){var i=this.size;i.isBorderBox&&(t+=e?i.paddingLeft+i.paddingRight+i.borderLeftWidth+i.borderRightWidth:i.paddingBottom+i.paddingTop+i.borderTopWidth+i.borderBottomWidth),t=Math.max(t,0),this.element.style[e?"width":"height"]=t+"px"}},f._emitCompleteOnItems=function(t,e){function i(){o.dispatchEvent(t+"Complete",null,[e])}function n(){s++,s==r&&i()}var o=this,r=e.length;if(!e||!r)return void i();var s=0;e.forEach(function(e){e.once(t,n)})},f.dispatchEvent=function(t,e,i){var n=e?[e].concat(i):i;if(this.emitEvent(t,n),u)if(this.$element=this.$element||u(this.element),e){var o=u.Event(e);o.type=t,this.$element.trigger(o,i)}else this.$element.trigger(t,i)},f.ignore=function(t){var e=this.getItem(t);e&&(e.isIgnored=!0)},f.unignore=function(t){var e=this.getItem(t);e&&delete e.isIgnored},f.stamp=function(t){t=this._find(t),t&&(this.stamps=this.stamps.concat(t),t.forEach(this.ignore,this))},f.unstamp=function(t){t=this._find(t),t&&t.forEach(function(t){n.removeFrom(this.stamps,t),this.unignore(t)},this)},f._find=function(t){return t?("string"==typeof t&&(t=this.element.querySelectorAll(t)),t=n.makeArray(t)):void 0},f._manageStamps=function(){this.stamps&&this.stamps.length&&(this._getBoundingRect(),this.stamps.forEach(this._manageStamp,this))},f._getBoundingRect=function(){var t=this.element.getBoundingClientRect(),e=this.size;this._boundingRect={left:t.left+e.paddingLeft+e.borderLeftWidth,top:t.top+e.paddingTop+e.borderTopWidth,right:t.right-(e.paddingRight+e.borderRightWidth),bottom:t.bottom-(e.paddingBottom+e.borderBottomWidth)}},f._manageStamp=d,f._getElementOffset=function(t){var e=t.getBoundingClientRect(),n=this._boundingRect,o=i(t),r={left:e.left-n.left-o.marginLeft,top:e.top-n.top-o.marginTop,right:n.right-e.right-o.marginRight,bottom:n.bottom-e.bottom-o.marginBottom};return r},f.handleEvent=n.handleEvent,f.bindResize=function(){t.addEventListener("resize",this),this.isResizeBound=!0},f.unbindResize=function(){t.removeEventListener("resize",this),this.isResizeBound=!1},f.onresize=function(){this.resize()},n.debounceMethod(r,"onresize",100),f.resize=function(){this.isResizeBound&&this.needsResizeLayout()&&this.layout()},f.needsResizeLayout=function(){var t=i(this.element),e=this.size&&t;return e&&t.innerWidth!==this.size.innerWidth},f.addItems=function(t){var e=this._itemize(t);return e.length&&(this.items=this.items.concat(e)),e},f.appended=function(t){var e=this.addItems(t);e.length&&(this.layoutItems(e,!0),this.reveal(e))},f.prepended=function(t){var e=this._itemize(t);if(e.length){var i=this.items.slice(0);this.items=e.concat(i),this._resetLayout(),this._manageStamps(),this.layoutItems(e,!0),this.reveal(e),this.layoutItems(i)}},f.reveal=function(t){if(this._emitCompleteOnItems("reveal",t),t&&t.length){var e=this.updateStagger();t.forEach(function(t,i){t.stagger(i*e),t.reveal()})}},f.hide=function(t){if(this._emitCompleteOnItems("hide",t),t&&t.length){var e=this.updateStagger();t.forEach(function(t,i){t.stagger(i*e),t.hide()})}},f.revealItemElements=function(t){var e=this.getItems(t);this.reveal(e)},f.hideItemElements=function(t){var e=this.getItems(t);this.hide(e)},f.getItem=function(t){for(var e=0;e<this.items.length;e++){var i=this.items[e];if(i.element==t)return i}},f.getItems=function(t){t=n.makeArray(t);var e=[];return t.forEach(function(t){var i=this.getItem(t);i&&e.push(i)},this),e},f.remove=function(t){var e=this.getItems(t);this._emitCompleteOnItems("remove",e),e&&e.length&&e.forEach(function(t){t.remove(),n.removeFrom(this.items,t)},this)},f.destroy=function(){var t=this.element.style;t.height="",t.position="",t.width="",this.items.forEach(function(t){t.destroy()}),this.unbindResize();var e=this.element.outlayerGUID;delete c[e],delete this.element.outlayerGUID,u&&u.removeData(this.element,this.constructor.namespace)},r.data=function(t){t=n.getQueryElement(t);var e=t&&t.outlayerGUID;return e&&c[e]},r.create=function(t,e){var i=s(r);return i.defaults=n.extend({},r.defaults),n.extend(i.defaults,e),i.compatOptions=n.extend({},r.compatOptions),i.namespace=t,i.data=r.data,i.Item=s(o),n.htmlInit(i,t),u&&u.bridget&&u.bridget(t,i),i};var m={ms:1,s:1e3};return r.Item=o,r}),function(t,e){"function"==typeof define&&define.amd?define(["outlayer/outlayer","get-size/get-size"],e):"object"==typeof module&&module.exports?module.exports=e(require("outlayer"),require("get-size")):t.Masonry=e(t.Outlayer,t.getSize)}(window,function(t,e){var i=t.create("masonry");i.compatOptions.fitWidth="isFitWidth";var n=i.prototype;return n._resetLayout=function(){this.getSize(),this._getMeasurement("columnWidth","outerWidth"),this._getMeasurement("gutter","outerWidth"),this.measureColumns(),this.colYs=[];for(var t=0;t<this.cols;t++)this.colYs.push(0);this.maxY=0,this.horizontalColIndex=0},n.measureColumns=function(){if(this.getContainerWidth(),!this.columnWidth){var t=this.items[0],i=t&&t.element;this.columnWidth=i&&e(i).outerWidth||this.containerWidth}var n=this.columnWidth+=this.gutter,o=this.containerWidth+this.gutter,r=o/n,s=n-o%n,a=s&&1>s?"round":"floor";r=Math[a](r),this.cols=Math.max(r,1)},n.getContainerWidth=function(){var t=this._getOption("fitWidth"),i=t?this.element.parentNode:this.element,n=e(i);this.containerWidth=n&&n.innerWidth},n._getItemLayoutPosition=function(t){t.getSize();var e=t.size.outerWidth%this.columnWidth,i=e&&1>e?"round":"ceil",n=Math[i](t.size.outerWidth/this.columnWidth);n=Math.min(n,this.cols);for(var o=this.options.horizontalOrder?"_getHorizontalColPosition":"_getTopColPosition",r=this[o](n,t),s={x:this.columnWidth*r.col,y:r.y},a=r.y+t.size.outerHeight,h=n+r.col,u=r.col;h>u;u++)this.colYs[u]=a;return s},n._getTopColPosition=function(t){var e=this._getTopColGroup(t),i=Math.min.apply(Math,e);return{col:e.indexOf(i),y:i}},n._getTopColGroup=function(t){if(2>t)return this.colYs;for(var e=[],i=this.cols+1-t,n=0;i>n;n++)e[n]=this._getColGroupY(n,t);return e},n._getColGroupY=function(t,e){if(2>e)return this.colYs[t];var i=this.colYs.slice(t,t+e);return Math.max.apply(Math,i)},n._getHorizontalColPosition=function(t,e){var i=this.horizontalColIndex%this.cols,n=t>1&&i+t>this.cols;i=n?0:i;var o=e.size.outerWidth&&e.size.outerHeight;return this.horizontalColIndex=o?i+t:this.horizontalColIndex,{col:i,y:this._getColGroupY(i,t)}},n._manageStamp=function(t){var i=e(t),n=this._getElementOffset(t),o=this._getOption("originLeft"),r=o?n.left:n.right,s=r+i.outerWidth,a=Math.floor(r/this.columnWidth);a=Math.max(0,a);var h=Math.floor(s/this.columnWidth);h-=s%this.columnWidth?0:1,h=Math.min(this.cols-1,h);for(var u=this._getOption("originTop"),d=(u?n.top:n.bottom)+i.outerHeight,l=a;h>=l;l++)this.colYs[l]=Math.max(d,this.colYs[l])},n._getContainerSize=function(){this.maxY=Math.max.apply(Math,this.colYs);var t={height:this.maxY};return this._getOption("fitWidth")&&(t.width=this._getContainerFitWidth()),t},n._getContainerFitWidth=function(){for(var t=0,e=this.cols;--e&&0===this.colYs[e];)t++;return(this.cols-t)*this.columnWidth-this.gutter},n.needsResizeLayout=function(){var t=this.containerWidth;return this.getContainerWidth(),t!=this.containerWidth},i});


/*!
 * imagesLoaded PACKAGED v4.1.4
 * JavaScript is all like "You images are done yet or what?"
 * MIT License
 */
!function(e,t){"function"==typeof define&&define.amd?define("ev-emitter/ev-emitter",t):"object"==typeof module&&module.exports?module.exports=t():e.EvEmitter=t()}("undefined"!=typeof window?window:this,function(){function e(){}var t=e.prototype;return t.on=function(e,t){if(e&&t){var i=this._events=this._events||{},n=i[e]=i[e]||[];return n.indexOf(t)==-1&&n.push(t),this}},t.once=function(e,t){if(e&&t){this.on(e,t);var i=this._onceEvents=this._onceEvents||{},n=i[e]=i[e]||{};return n[t]=!0,this}},t.off=function(e,t){var i=this._events&&this._events[e];if(i&&i.length){var n=i.indexOf(t);return n!=-1&&i.splice(n,1),this}},t.emitEvent=function(e,t){var i=this._events&&this._events[e];if(i&&i.length){i=i.slice(0),t=t||[];for(var n=this._onceEvents&&this._onceEvents[e],o=0;o<i.length;o++){var r=i[o],s=n&&n[r];s&&(this.off(e,r),delete n[r]),r.apply(this,t)}return this}},t.allOff=function(){delete this._events,delete this._onceEvents},e}),function(e,t){"use strict";"function"==typeof define&&define.amd?define(["ev-emitter/ev-emitter"],function(i){return t(e,i)}):"object"==typeof module&&module.exports?module.exports=t(e,require("ev-emitter")):e.imagesLoaded=t(e,e.EvEmitter)}("undefined"!=typeof window?window:this,function(e,t){function i(e,t){for(var i in t)e[i]=t[i];return e}function n(e){if(Array.isArray(e))return e;var t="object"==typeof e&&"number"==typeof e.length;return t?d.call(e):[e]}function o(e,t,r){if(!(this instanceof o))return new o(e,t,r);var s=e;return"string"==typeof e&&(s=document.querySelectorAll(e)),s?(this.elements=n(s),this.options=i({},this.options),"function"==typeof t?r=t:i(this.options,t),r&&this.on("always",r),this.getImages(),h&&(this.jqDeferred=new h.Deferred),void setTimeout(this.check.bind(this))):void a.error("Bad element for imagesLoaded "+(s||e))}function r(e){this.img=e}function s(e,t){this.url=e,this.element=t,this.img=new Image}var h=e.jQuery,a=e.console,d=Array.prototype.slice;o.prototype=Object.create(t.prototype),o.prototype.options={},o.prototype.getImages=function(){this.images=[],this.elements.forEach(this.addElementImages,this)},o.prototype.addElementImages=function(e){"IMG"==e.nodeName&&this.addImage(e),this.options.background===!0&&this.addElementBackgroundImages(e);var t=e.nodeType;if(t&&u[t]){for(var i=e.querySelectorAll("img"),n=0;n<i.length;n++){var o=i[n];this.addImage(o)}if("string"==typeof this.options.background){var r=e.querySelectorAll(this.options.background);for(n=0;n<r.length;n++){var s=r[n];this.addElementBackgroundImages(s)}}}};var u={1:!0,9:!0,11:!0};return o.prototype.addElementBackgroundImages=function(e){var t=getComputedStyle(e);if(t)for(var i=/url\((['"])?(.*?)\1\)/gi,n=i.exec(t.backgroundImage);null!==n;){var o=n&&n[2];o&&this.addBackground(o,e),n=i.exec(t.backgroundImage)}},o.prototype.addImage=function(e){var t=new r(e);this.images.push(t)},o.prototype.addBackground=function(e,t){var i=new s(e,t);this.images.push(i)},o.prototype.check=function(){function e(e,i,n){setTimeout(function(){t.progress(e,i,n)})}var t=this;return this.progressedCount=0,this.hasAnyBroken=!1,this.images.length?void this.images.forEach(function(t){t.once("progress",e),t.check()}):void this.complete()},o.prototype.progress=function(e,t,i){this.progressedCount++,this.hasAnyBroken=this.hasAnyBroken||!e.isLoaded,this.emitEvent("progress",[this,e,t]),this.jqDeferred&&this.jqDeferred.notify&&this.jqDeferred.notify(this,e),this.progressedCount==this.images.length&&this.complete(),this.options.debug&&a&&a.log("progress: "+i,e,t)},o.prototype.complete=function(){var e=this.hasAnyBroken?"fail":"done";if(this.isComplete=!0,this.emitEvent(e,[this]),this.emitEvent("always",[this]),this.jqDeferred){var t=this.hasAnyBroken?"reject":"resolve";this.jqDeferred[t](this)}},r.prototype=Object.create(t.prototype),r.prototype.check=function(){var e=this.getIsImageComplete();return e?void this.confirm(0!==this.img.naturalWidth,"naturalWidth"):(this.proxyImage=new Image,this.proxyImage.addEventListener("load",this),this.proxyImage.addEventListener("error",this),this.img.addEventListener("load",this),this.img.addEventListener("error",this),void(this.proxyImage.src=this.img.src))},r.prototype.getIsImageComplete=function(){return this.img.complete&&this.img.naturalWidth},r.prototype.confirm=function(e,t){this.isLoaded=e,this.emitEvent("progress",[this,this.img,t])},r.prototype.handleEvent=function(e){var t="on"+e.type;this[t]&&this[t](e)},r.prototype.onload=function(){this.confirm(!0,"onload"),this.unbindEvents()},r.prototype.onerror=function(){this.confirm(!1,"onerror"),this.unbindEvents()},r.prototype.unbindEvents=function(){this.proxyImage.removeEventListener("load",this),this.proxyImage.removeEventListener("error",this),this.img.removeEventListener("load",this),this.img.removeEventListener("error",this)},s.prototype=Object.create(r.prototype),s.prototype.check=function(){this.img.addEventListener("load",this),this.img.addEventListener("error",this),this.img.src=this.url;var e=this.getIsImageComplete();e&&(this.confirm(0!==this.img.naturalWidth,"naturalWidth"),this.unbindEvents())},s.prototype.unbindEvents=function(){this.img.removeEventListener("load",this),this.img.removeEventListener("error",this)},s.prototype.confirm=function(e,t){this.isLoaded=e,this.emitEvent("progress",[this,this.element,t])},o.makeJQueryPlugin=function(t){t=t||e.jQuery,t&&(h=t,h.fn.imagesLoaded=function(e,t){var i=new o(this,e,t);return i.jqDeferred.promise(h(this))})},o.makeJQueryPlugin(),o});



/*!
 * MoveTo - A lightweight scroll animation javascript library without any dependency.
 * Version 1.8.2 (28-06-2019 14:30)
 * Licensed under MIT
 * Copyright 2019 Hasan Aydoğdu <hsnaydd@gmail.com>
 */
"use strict";var MoveTo=function(){var e={tolerance:0,duration:800,easing:"easeOutQuart",container:window,callback:function(){}};function o(t,n,e,o){return t/=o,-e*(--t*t*t*t-1)+n}function v(n,e){var o={};return Object.keys(n).forEach(function(t){o[t]=n[t]}),Object.keys(e).forEach(function(t){o[t]=e[t]}),o}function d(t){return t instanceof HTMLElement?t.scrollTop:t.pageYOffset}function t(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{},n=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{};this.options=v(e,t),this.easeFunctions=v({easeOutQuart:o},n)}return t.prototype.registerTrigger=function(t,n){var e=this;if(t){var o=t.getAttribute("href")||t.getAttribute("data-target"),r=o&&"#"!==o?document.getElementById(o.substring(1)):document.body,i=v(this.options,function(e,t){var o={};return Object.keys(t).forEach(function(t){var n=e.getAttribute("data-mt-".concat(function(t){return t.replace(/([A-Z])/g,function(t){return"-"+t.toLowerCase()})}(t)));n&&(o[t]=isNaN(n)?n:parseInt(n,10))}),o}(t,this.options));"function"==typeof n&&(i.callback=n);var a=function(t){t.preventDefault(),e.move(r,i)};return t.addEventListener("click",a,!1),function(){return t.removeEventListener("click",a,!1)}}},t.prototype.move=function(i){var a=this,c=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{};if(0===i||i){c=v(this.options,c);var u,s="number"==typeof i?i:i.getBoundingClientRect().top,f=d(c.container),l=null;s-=c.tolerance;window.requestAnimationFrame(function t(n){var e=d(a.options.container);l||(l=n-1);var o=n-l;if(u&&(0<s&&e<u||s<0&&u<e))return c.callback(i);u=e;var r=a.easeFunctions[c.easing](o,f,s,c.duration);c.container.scroll(0,r),o<c.duration?window.requestAnimationFrame(t):(c.container.scroll(0,s+f),c.callback(i))})}},t.prototype.addEaseFunction=function(t,n){this.easeFunctions[t]=n},t}();"undefined"!=typeof module?module.exports=MoveTo:window.MoveTo=MoveTo;



(function(html) {

'use strict';

const cfg = {
    
    // MailChimp URL
    mailChimpURL : 'https://facebook.us1.list-manage.com/subscribe/post?u=1abf75f6981256963a47d197a&amp;id=37c6d8f4d6' 

};


/* preloader
* -------------------------------------------------- */
const ssPreloader = function() {

    const siteBody = document.querySelector('body');
    const preloader = document.querySelector('#preloader');
    if (!preloader) return;

    html.classList.add('ss-preload');
    
    window.addEventListener('load', function() {
        html.classList.remove('ss-preload');
        html.classList.add('ss-loaded');

        preloader.addEventListener('transitionend', function afterTransition(e) {
            if (e.target.matches('#preloader'))  {
                siteBody.classList.add('ss-show');
                e.target.style.display = 'none';
                preloader.removeEventListener(e.type, afterTransition);
            }
        });
    });

    // window.addEventListener('beforeunload' , function() {
    //     siteBody.classList.remove('ss-show');
    // });

}; // end ssPreloader


/* move header
* -------------------------------------------------- */
const ssMoveHeader = function () {

    const hdr = document.querySelector('.s-header');
    const hero = document.querySelector('#intro');
    let triggerHeight;

    if (!(hdr && hero)) return;

    setTimeout(function() {
        triggerHeight = hero.offsetHeight - 170;
    }, 300);

    window.addEventListener('scroll', function () {

        let loc = window.scrollY;

        if (loc > triggerHeight) {
            hdr.classList.add('sticky');
        } else {
            hdr.classList.remove('sticky');
        }

        if (loc > triggerHeight + 20) {
            hdr.classList.add('offset');
        } else {
            hdr.classList.remove('offset');
        }

        if (loc > triggerHeight + 150) {
            hdr.classList.add('scrolling');
        } else {
            hdr.classList.remove('scrolling');
        }

    });

}; // end ssMoveHeader


/* mobile menu
* ---------------------------------------------------- */ 
const ssMobileMenu = function() {

    const toggleButton = document.querySelector('.s-header__menu-toggle');
    const mainNavWrap = document.querySelector('.s-header__nav');
    const siteBody = document.querySelector('body');

    if (!(toggleButton && mainNavWrap)) return;

    toggleButton.addEventListener('click', function(event) {
        event.preventDefault();
        toggleButton.classList.toggle('is-clicked');
        siteBody.classList.toggle('menu-is-open');
    });

    mainNavWrap.querySelectorAll('.s-header__nav a').forEach(function(link) {

        link.addEventListener("click", function(event) {

            // at 800px and below
            if (window.matchMedia('(max-width: 800px)').matches) {
                toggleButton.classList.toggle('is-clicked');
                siteBody.classList.toggle('menu-is-open');
            }
        });
    });

    window.addEventListener('resize', function() {

        // above 800px
        if (window.matchMedia('(min-width: 801px)').matches) {
            if (siteBody.classList.contains('menu-is-open')) siteBody.classList.remove('menu-is-open');
            if (toggleButton.classList.contains('is-clicked')) toggleButton.classList.remove('is-clicked');
        }
    });

}; // end ssMobileMenu


/* highlight active menu link on pagescroll
* ------------------------------------------------------ */
const ssScrollSpy = function() {

    const sections = document.querySelectorAll('.target-section');

    // Add an event listener listening for scroll
    window.addEventListener('scroll', navHighlight);

    function navHighlight() {
    
        // Get current scroll position
        let scrollY = window.pageYOffset;
    
        // Loop through sections to get height(including padding and border), 
        // top and ID values for each
        sections.forEach(function(current) {
            const sectionHeight = current.offsetHeight;
            const sectionTop = current.offsetTop - 50;
            const sectionId = current.getAttribute('id');
        
           /* If our current scroll position enters the space where current section 
            * on screen is, add .current class to parent element(li) of the thecorresponding 
            * navigation link, else remove it. To know which link is active, we use 
            * sectionId variable we are getting while looping through sections as 
            * an selector
            */
            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                document.querySelector('.s-header__nav a[href*=' + sectionId + ']').parentNode.classList.add('current');
            } else {
                document.querySelector('.s-header__nav a[href*=' + sectionId + ']').parentNode.classList.remove('current');
            }
        });
    }

}; // end ssScrollSpy


/* masonry
* ------------------------------------------------------ */
 const ssMasonry = function() {

    const containerBricks = document.querySelector('.bricks-wrapper');
    if (!containerBricks) return;

    imagesLoaded(containerBricks, function() {

        const msnry = new Masonry(containerBricks, {
            itemSelector: '.entry',
            columnWidth: '.grid-sizer',
            percentPosition: true,
            resize: true
        });

    });

}; // end ssMasonry


/* swiper
* ------------------------------------------------------ */ 
const ssSwiper = function() {

    const testimonialsSwiper = new Swiper('.s-testimonials__slider', {

        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            // when window width is > 400px
            401: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // when window width is > 800px
            801: {
                slidesPerView: 2,
                spaceBetween: 50
            },
            // when window width is > 1180px
            1181: {
                slidesPerView: 2,
                spaceBetween: 100
            }
        }
    });

}; // end ssSwiper


/* mailchimp form
* ---------------------------------------------------- */ 
const ssMailChimpForm = function() {

    const mcForm = document.querySelector('#mc-form');

    if (!mcForm) return;

    // Add novalidate attribute
    mcForm.setAttribute('novalidate', true);

    // Field validation
    function hasError(field) {

        // Don't validate submits, buttons, file and reset inputs, and disabled fields
        if (field.disabled || field.type === 'file' || field.type === 'reset' || field.type === 'submit' || field.type === 'button') return;

        // Get validity
        let validity = field.validity;

        // If valid, return null
        if (validity.valid) return;

        // If field is required and empty
        if (validity.valueMissing) return 'Please enter an email address.';

        // If not the right type
        if (validity.typeMismatch) {
            if (field.type === 'email') return 'Please enter a valid email address.';
        }

        // If pattern doesn't match
        if (validity.patternMismatch) {

            // If pattern info is included, return custom error
            if (field.hasAttribute('title')) return field.getAttribute('title');

            // Otherwise, generic error
            return 'Please match the requested format.';
        }

        // If all else fails, return a generic catchall error
        return 'The value you entered for this field is invalid.';

    };

    // Show error message
    function showError(field, error) {

        // Get field id or name
        let id = field.id || field.name;
        if (!id) return;

        let errorMessage = field.form.querySelector('.mc-status');

        // Update error message
        errorMessage.classList.remove('success-message');
        errorMessage.classList.add('error-message');
        errorMessage.innerHTML = error;

    };

    // Display form status (callback function for JSONP)
    window.displayMailChimpStatus = function (data) {

        // Make sure the data is in the right format and that there's a status container
        if (!data.result || !data.msg || !mcStatus ) return;

        // Update our status message
        mcStatus.innerHTML = data.msg;

        // If error, add error class
        if (data.result === 'error') {
            mcStatus.classList.remove('success-message');
            mcStatus.classList.add('error-message');
            return;
        }

        // Otherwise, add success class
        mcStatus.classList.remove('error-message');
        mcStatus.classList.add('success-message');
    };

    // Submit the form 
    function submitMailChimpForm(form) {

        let url = cfg.mailChimpURL;
        let emailField = form.querySelector('#mce-EMAIL');
        let serialize = '&' + encodeURIComponent(emailField.name) + '=' + encodeURIComponent(emailField.value);

        if (url == '') return;

        url = url.replace('/post?u=', '/post-json?u=');
        url += serialize + '&c=displayMailChimpStatus';

        // Create script with url and callback (if specified)
        var ref = window.document.getElementsByTagName( 'script' )[ 0 ];
        var script = window.document.createElement( 'script' );
        script.src = url;

        // Create global variable for the status container
        window.mcStatus = form.querySelector('.mc-status');
        window.mcStatus.classList.remove('error-message', 'success-message')
        window.mcStatus.innerText = 'Submitting...';

        // Insert script tag into the DOM
        ref.parentNode.insertBefore( script, ref );

        // After the script is loaded (and executed), remove it
        script.onload = function () {
            this.remove();
        };

    };

    // Check email field on submit
    mcForm.addEventListener('submit', function (event) {

        event.preventDefault();

        let emailField = event.target.querySelector('#mce-EMAIL');
        let error = hasError(emailField);

        if (error) {
            showError(emailField, error);
            emailField.focus();
            return;
        }

        submitMailChimpForm(this);

    }, false);

}; // end ssMailChimpForm


/* Lightbox
* ------------------------------------------------------ */
const ssLightbox = function() {

    // video lightbox
    const videoLightbox = function() {

        const videoLink = document.querySelector('.s-intro__content-video-btn');
        if (!videoLink) return;

        videoLink.addEventListener('click', function(event) {

            const vLink = this.getAttribute('href');
            const iframe = "<iframe src='" + vLink + "' frameborder='0'></iframe>";

            event.preventDefault();

            const instance = basicLightbox.create(iframe);
            instance.show()

        });

    };

    // portfolio lightbox
    const folioLightbox = function() {

        const folioLinks = document.querySelectorAll('.brick .entry__link');
        const modals = [];

        folioLinks.forEach(function(link) {
            let modalbox = link.getAttribute('href');
            let instance = basicLightbox.create(
                document.querySelector(modalbox),
                {
                    onShow: function(instance) {
                        //detect Escape key press
                        document.addEventListener("keydown", function(event) {
                            event = event || window.event;
                            if (event.key === "Escape") {
                                instance.close();
                            }
                        });
                    }
                }
            )
            modals.push(instance);
        });

        folioLinks.forEach(function(link, index) {
            link.addEventListener("click", function(event) {
                event.preventDefault();
                modals[index].show();
            });
        });

    };

    videoLightbox();
    folioLightbox();

}; // ssLightbox


/* alert boxes
* ------------------------------------------------------ */
const ssAlertBoxes = function() {

    const boxes = document.querySelectorAll('.alert-box');

    boxes.forEach(function(box){

        box.addEventListener('click', function(event) {
            if (event.target.matches('.alert-box__close')) {
                event.stopPropagation();
                event.target.parentElement.classList.add('hideit');

                setTimeout(function(){
                    box.style.display = 'none';
                }, 500)
            }
        });
    })

}; // end ssAlertBoxes


/* Back to Top
* ------------------------------------------------------ */
const ssBackToTop = function() {

    const pxShow = 900;
    const goTopButton = document.querySelector(".ss-go-top");

    if (!goTopButton) return;

    // Show or hide the button
    if (window.scrollY >= pxShow) goTopButton.classList.add("link-is-visible");

    window.addEventListener('scroll', function() {
        if (window.scrollY >= pxShow) {
            if(!goTopButton.classList.contains('link-is-visible')) goTopButton.classList.add("link-is-visible")
        } else {
            goTopButton.classList.remove("link-is-visible")
        }
    });

}; // end ssBackToTop


/* smoothscroll
* ------------------------------------------------------ */
const ssMoveTo = function(){

    const easeFunctions = {
        easeInQuad: function (t, b, c, d) {
            t /= d;
            return c * t * t + b;
        },
        easeOutQuad: function (t, b, c, d) {
            t /= d;
            return -c * t* (t - 2) + b;
        },
        easeInOutQuad: function (t, b, c, d) {
            t /= d/2;
            if (t < 1) return c/2*t*t + b;
            t--;
            return -c/2 * (t*(t-2) - 1) + b;
        },
        easeInOutCubic: function (t, b, c, d) {
            t /= d/2;
            if (t < 1) return c/2*t*t*t + b;
            t -= 2;
            return c/2*(t*t*t + 2) + b;
        }
    }

    const triggers = document.querySelectorAll('.smoothscroll');
    
    const moveTo = new MoveTo({
        tolerance: 0,
        duration: 1200,
        easing: 'easeInOutCubic',
        container: window
    }, easeFunctions);

    triggers.forEach(function(trigger) {
        moveTo.registerTrigger(trigger);
    });

}; // end ssMoveTo


/* Initialize
* ------------------------------------------------------ */
(function ssInit() {

    ssPreloader();
    ssMoveHeader();
    ssMobileMenu();
    ssScrollSpy();
    ssMasonry();
    ssSwiper();
    ssMailChimpForm();
    ssLightbox();
    ssAlertBoxes();
    ssBackToTop();
    ssMoveTo();

})();

})(document.documentElement);
    </script>

</body>
</html>