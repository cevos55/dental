

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
    --color-1                      : #06A3DA;
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
    /* background-image    : url(images/hero-bg.jpg); */
    background-repeat   : no-repeat;
    background-position : center;
    background-size     : cover;
    height              : 100vh;
    width               : calc(55% - 15vw);
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
    /* background-image    : url(images/intro-bg.jpg); */
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
    border-color     : #06A3DA;
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
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>


