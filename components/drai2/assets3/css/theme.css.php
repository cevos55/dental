<?php

echo '

<style>


@charset "UTF-8";
/* -------------------------------------------------------------------------- */
/*                                 Theme                                      */
/* -------------------------------------------------------------------------- */
/* prettier-ignore */ /* -------------------------------------------------------------------------- */
/*                                brainwaveio Button                               */
/* -------------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/*                                  Utilities                                 */
/* -------------------------------------------------------------------------- */
:root,
[data-bs-theme=light] {
  --brainwaveio-blue: #473BF0;
  --brainwaveio-indigo: #727cf5;
  --brainwaveio-purple: #6b5eae;
  --brainwaveio-pink: #F74D4D;
  --brainwaveio-red: #f71C1C;
  --brainwaveio-orange: #E3A476;
  --brainwaveio-yellow: #FFDA91;
  --brainwaveio-green: #68D585;
  --brainwaveio-teal: #02a8b5;
  --brainwaveio-cyan: #27bcfd;
  --brainwaveio-black: #000;
  --brainwaveio-white: #fff;
  --brainwaveio-gray: #748194;
  --brainwaveio-gray-dark: #4d5969;
  --brainwaveio-gray-100: #f9fafd;
  --brainwaveio-gray-200: #edf2f9;
  --brainwaveio-gray-300: #F4F7FA;
  --brainwaveio-gray-400: #E3E6ED;
  --brainwaveio-gray-500: #E7E9ED;
  --brainwaveio-gray-600: #748194;
  --brainwaveio-gray-700: #5e6e82;
  --brainwaveio-gray-800: #4d5969;
  --brainwaveio-gray-900: #535353;
  --brainwaveio-gray-1000: #2E2F33;
  --brainwaveio-gray-1100: #161C2D;
  --brainwaveio-primary: #F74D4D;
  --brainwaveio-secondary: #2E2F33;
  --brainwaveio-success: #68D585;
  --brainwaveio-info: #473BF0;
  --brainwaveio-warning: #FFDA91;
  --brainwaveio-danger: #f71C1C;
  --brainwaveio-light: #f9fafd;
  --brainwaveio-dark: #2E2F33;
  --brainwaveio-primary-rgb: 247, 77, 77;
  --brainwaveio-secondary-rgb: 46, 47, 51;
  --brainwaveio-success-rgb: 104, 213, 133;
  --brainwaveio-info-rgb: 71, 59, 240;
  --brainwaveio-warning-rgb: 255, 218, 145;
  --brainwaveio-danger-rgb: 247, 28, 28;
  --brainwaveio-light-rgb: 249, 250, 253;
  --brainwaveio-dark-rgb: 46, 47, 51;
  --brainwaveio-primary-text-emphasis: #b93a3a;
  --brainwaveio-secondary-text-emphasis: #252629;
  --brainwaveio-success-text-emphasis: #448a56;
  --brainwaveio-info-text-emphasis: #2e269c;
  --brainwaveio-warning-text-emphasis: #b39966;
  --brainwaveio-danger-text-emphasis: #c61616;
  --brainwaveio-light-text-emphasis: #646465;
  --brainwaveio-dark-text-emphasis: #a1a1a3;
  --brainwaveio-primary-bg-subtle: #fedfdf;
  --brainwaveio-secondary-bg-subtle: #d9dada;
  --brainwaveio-success-bg-subtle: #e8f9ed;
  --brainwaveio-info-bg-subtle: #dedcfc;
  --brainwaveio-warning-bg-subtle: #fff8e9;
  --brainwaveio-danger-bg-subtle: #fed6d6;
  --brainwaveio-light-bg-subtle: #fdfefe;
  --brainwaveio-dark-bg-subtle: #202124;
  --brainwaveio-primary-border-subtle: #fcb8b8;
  --brainwaveio-secondary-border-subtle: #abacad;
  --brainwaveio-success-border-subtle: #c3eece;
  --brainwaveio-info-border-subtle: #b5b1f9;
  --brainwaveio-warning-border-subtle: #fff0d3;
  --brainwaveio-danger-border-subtle: #fca4a4;
  --brainwaveio-light-border-subtle: #edf2f9;
  --brainwaveio-dark-border-subtle: #E7E9ED;
  --brainwaveio-white-rgb: 255, 255, 255;
  --brainwaveio-black-rgb: 0, 0, 0;
  --brainwaveio-font-sans-serif: "Rubik", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  --brainwaveio-font-monospace: "SFMono-Regular", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --brainwaveio-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
  --brainwaveio-body-font-family: "Figtree", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  --brainwaveio-body-font-size: 1rem;
  --brainwaveio-body-font-weight: 400;
  --brainwaveio-body-line-height: 1.084;
  --brainwaveio-body-color: #4d5969;
  --brainwaveio-body-color-rgb: 77, 89, 105;
  --brainwaveio-body-bg: #fff;
  --brainwaveio-body-bg-rgb: 255, 255, 255;
  --brainwaveio-emphasis-color: #000;
  --brainwaveio-emphasis-color-rgb: 0, 0, 0;
  --brainwaveio-secondary-color: #161C2D;
  --brainwaveio-secondary-color-rgb: 22, 28, 45;
  --brainwaveio-secondary-bg: #F4F7FA;
  --brainwaveio-secondary-bg-rgb: 244, 247, 250;
  --brainwaveio-tertiary-color: #748194;
  --brainwaveio-tertiary-color-rgb: 116, 129, 148;
  --brainwaveio-tertiary-bg: #f9fafd;
  --brainwaveio-tertiary-bg-rgb: 249, 250, 253;
  --brainwaveio-heading-color: var(--brainwaveio-gray-1100);
  --brainwaveio-link-color: #161C2D;
  --brainwaveio-link-color-rgb: 22, 28, 45;
  --brainwaveio-link-decoration: none;
  --brainwaveio-link-hover-color: #F74D4D;
  --brainwaveio-link-hover-color-rgb: 247, 77, 77;
  --brainwaveio-link-hover-decoration: underline;
  --brainwaveio-code-color: #F74D4D;
  --brainwaveio-highlight-bg: #fff8e9;
  --brainwaveio-border-width: 1px;
  --brainwaveio-border-style: solid;
  --brainwaveio-border-color: #E7E9ED;
  --brainwaveio-border-color-translucent: rgba(0, 0, 0, 0.175);
  --brainwaveio-border-radius: 0.625rem;
  --brainwaveio-border-radius-sm: 0.5rem;
  --brainwaveio-border-radius-lg: 0.75rem;
  --brainwaveio-border-radius-xl: 1.25rem;
  --brainwaveio-border-radius-xxl: 2rem;
  --brainwaveio-border-radius-2xl: var(--brainwaveio-border-radius-xxl);
  --brainwaveio-border-radius-pill: 50rem;
  --brainwaveio-box-shadow: 0 7px 14px 0 rgba(65, 69, 88, 0.1), 0 3px 6px 0 rgba(0, 0, 0, 0.07);
  --brainwaveio-box-shadow-sm: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
  --brainwaveio-box-shadow-lg: 0 1rem 4rem rgba(0, 0, 0, 0.175);
  --brainwaveio-box-shadow-inset: inset 0 1px 2px rgba(0, 0, 0, 0.075);
  --brainwaveio-focus-ring-width: 0.25rem;
  --brainwaveio-focus-ring-opacity: 0.25;
  --brainwaveio-focus-ring-color: rgba(247, 77, 77, 0.25);
  --brainwaveio-form-valid-color: #68D585;
  --brainwaveio-form-valid-border-color: #68D585;
  --brainwaveio-form-invalid-color: #f71C1C;
  --brainwaveio-form-invalid-border-color: #f71C1C;
}

[data-bs-theme=dark] {
  color-scheme: dark;
  --brainwaveio-body-color: #F4F7FA;
  --brainwaveio-body-color-rgb: 244, 247, 250;
  --brainwaveio-body-bg: #535353;
  --brainwaveio-body-bg-rgb: 83, 83, 83;
  --brainwaveio-emphasis-color: #fff;
  --brainwaveio-emphasis-color-rgb: 255, 255, 255;
  --brainwaveio-secondary-color: rgba(244, 247, 250, 0.75);
  --brainwaveio-secondary-color-rgb: 244, 247, 250;
  --brainwaveio-secondary-bg: #4d5969;
  --brainwaveio-secondary-bg-rgb: 77, 89, 105;
  --brainwaveio-tertiary-color: rgba(244, 247, 250, 0.5);
  --brainwaveio-tertiary-color-rgb: 244, 247, 250;
  --brainwaveio-tertiary-bg: #50565e;
  --brainwaveio-tertiary-bg-rgb: 80, 86, 94;
  --brainwaveio-primary-text-emphasis: #fa9494;
  --brainwaveio-secondary-text-emphasis: #828285;
  --brainwaveio-success-text-emphasis: #a4e6b6;
  --brainwaveio-info-text-emphasis: #9189f6;
  --brainwaveio-warning-text-emphasis: #ffe9bd;
  --brainwaveio-danger-text-emphasis: #fa7777;
  --brainwaveio-light-text-emphasis: #f9fafd;
  --brainwaveio-dark-text-emphasis: #F4F7FA;
  --brainwaveio-primary-bg-subtle: #310f0f;
  --brainwaveio-secondary-bg-subtle: #09090a;
  --brainwaveio-success-bg-subtle: #152b1b;
  --brainwaveio-info-bg-subtle: #0e0c30;
  --brainwaveio-warning-bg-subtle: #332c1d;
  --brainwaveio-danger-bg-subtle: #310606;
  --brainwaveio-light-bg-subtle: #4d5969;
  --brainwaveio-dark-bg-subtle: #272d35;
  --brainwaveio-primary-border-subtle: #942e2e;
  --brainwaveio-secondary-border-subtle: #1c1c1f;
  --brainwaveio-success-border-subtle: #3e8050;
  --brainwaveio-info-border-subtle: #2b2390;
  --brainwaveio-warning-border-subtle: #998357;
  --brainwaveio-danger-border-subtle: #941111;
  --brainwaveio-light-border-subtle: #5e6e82;
  --brainwaveio-dark-border-subtle: #4d5969;
  --brainwaveio-heading-color: inherit;
  --brainwaveio-link-color: #fa9494;
  --brainwaveio-link-hover-color: #fba9a9;
  --brainwaveio-link-color-rgb: 250, 148, 148;
  --brainwaveio-link-hover-color-rgb: 251, 169, 169;
  --brainwaveio-code-color: #fa9494;
  --brainwaveio-border-color: #5e6e82;
  --brainwaveio-border-color-translucent: rgba(255, 255, 255, 0.15);
  --brainwaveio-form-valid-color: #a4e6b6;
  --brainwaveio-form-valid-border-color: #a4e6b6;
  --brainwaveio-form-invalid-color: #fa7777;
  --brainwaveio-form-invalid-border-color: #fa7777;
}

:root,
[data-bs-theme=light] {
  --brainwaveio-facebook: #3c5a99;
  --brainwaveio-google-plus: #dd4b39;
  --brainwaveio-twitter: #1da1f2;
  --brainwaveio-linkedin: #0077b5;
  --brainwaveio-youtube: #ff0001;
  --brainwaveio-github: #333333;
  --brainwaveio-gray-100-rgb: 249, 250, 253;
  --brainwaveio-gray-200-rgb: 237, 242, 249;
  --brainwaveio-gray-300-rgb: 244, 247, 250;
  --brainwaveio-gray-400-rgb: 227, 230, 237;
  --brainwaveio-gray-500-rgb: 231, 233, 237;
  --brainwaveio-gray-600-rgb: 116, 129, 148;
  --brainwaveio-gray-700-rgb: 94, 110, 130;
  --brainwaveio-gray-800-rgb: 77, 89, 105;
  --brainwaveio-gray-900-rgb: 83, 83, 83;
  --brainwaveio-gray-1000-rgb: 46, 47, 51;
  --brainwaveio-gray-1100-rgb: 22, 28, 45;
  --brainwaveio-facebook-rgb: 60, 90, 153;
  --brainwaveio-google-plus-rgb: 221, 75, 57;
  --brainwaveio-twitter-rgb: 29, 161, 242;
  --brainwaveio-linkedin-rgb: 0, 119, 181;
  --brainwaveio-youtube-rgb: 255, 0, 1;
  --brainwaveio-github-rgb: 51, 51, 51;
  --brainwaveio-gray-link-hover-100: RGBA(250, 251, 253, var(--brainwaveio-link-opacity, 1)) !important;
  --brainwaveio-gray-link-hover-200: RGBA(241, 245, 250, var(--brainwaveio-link-opacity, 1)) !important;
  --brainwaveio-gray-link-hover-300: RGBA(246, 249, 251, var(--brainwaveio-link-opacity, 1)) !important;
  --brainwaveio-gray-link-hover-400: RGBA(233, 235, 241, var(--brainwaveio-link-opacity, 1)) !important;
  --brainwaveio-gray-link-hover-500: RGBA(236, 237, 241, var(--brainwaveio-link-opacity, 1)) !important;
  --brainwaveio-gray-link-hover-600: RGBA(93, 103, 118, var(--brainwaveio-link-opacity, 1)) !important;
  --brainwaveio-gray-link-hover-700: RGBA(75, 88, 104, var(--brainwaveio-link-opacity, 1)) !important;
  --brainwaveio-gray-link-hover-800: RGBA(62, 71, 84, var(--brainwaveio-link-opacity, 1)) !important;
  --brainwaveio-gray-link-hover-900: RGBA(66, 66, 66, var(--brainwaveio-link-opacity, 1)) !important;
  --brainwaveio-gray-link-hover-1000: RGBA(37, 38, 41, var(--brainwaveio-link-opacity, 1)) !important;
  --brainwaveio-gray-link-hover-1100: RGBA(18, 22, 36, var(--brainwaveio-link-opacity, 1)) !important;
  --brainwaveio-quaternary-bg: #fff;
  --brainwaveio-quaternary-bg-rgb: 255, 255, 255;
  --brainwaveio-emphasis-bg: #fff;
  --brainwaveio-emphasis-bg-rgb: 255, 255, 255;
  --brainwaveio-blockquote-footer-color: #748194;
  --brainwaveio-hr-opacity: 1;
  --brainwaveio-mark-bg: #fcf8e3;
  --brainwaveio-font-base: "Figtree", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  --brainwaveio-btn-disabled-border-color: transparent;
  --brainwaveio-btn-reveal-color: #748194;
  --brainwaveio-btn-reveal-hover-color: #5e6e82;
  --brainwaveio-btn-reveal-focus-bg: #e6e6e6;
  --brainwaveio-btn-reveal-hover-shadow: 0 0 0 1px rgba(43, 45, 80, 0.1),
  0 2px 5px 0 rgba(43, 45, 80, 0.08), 0 1px 1.5px 0 rgba(0, 0, 0, 0.07),
  0 1px 2px 0 rgba(0, 0, 0, 0.08);
  --brainwaveio-btn-reveal-focus-border-color: #dfdfdf;
  --brainwaveio-btn-brainwaveio-background: var(--brainwaveio-quaternary-bg);
  --brainwaveio-btn-disabled-color: #4d5969;
  --brainwaveio-btn-brainwaveio-box-shadow: 0 0 0 1px rgba(43, 45, 80, 0.1), 0 2px 5px 0 rgba(43, 45, 80, 0.08), 0 1px 1.5px 0 rgba(0, 0, 0, 0.07), 0 1px 2px 0 rgba(0, 0, 0, 0.08);
  --brainwaveio-btn-brainwaveio-hover-box-shadow: 0 0 0 1px rgba(43, 45, 80, 0.1), 0 2px 5px 0 rgba(43, 45, 80, 0.1), 0 3px 9px 0 rgba(43, 45, 80, 0.08), 0 1px 1.5px 0 rgba(0, 0, 0, 0.08), 0 1px 2px 0 rgba(0, 0, 0, 0.08);
  --brainwaveio-btn-brainwaveio-default-color: var(--brainwaveio-gray-800);
  --brainwaveio-btn-brainwaveio-default-hover-color: #404a57;
  --brainwaveio-btn-brainwaveio-default-active-background: #e6e6e6;
  --brainwaveio-btn-brainwaveio-default-active-border: #404a57;
  --brainwaveio-btn-active-border-color: transparent;
  --brainwaveio-btn-brainwaveio-primary-color: var(--brainwaveio-primary);
  --brainwaveio-btn-brainwaveio-primary-hover-color: #cd4040;
  --brainwaveio-btn-brainwaveio-primary-active-background: #fddbdb;
  --brainwaveio-btn-brainwaveio-primary-active-color: #cd4040;
  --brainwaveio-btn-brainwaveio-secondary-color: var(--brainwaveio-secondary);
  --brainwaveio-btn-brainwaveio-secondary-hover-color: #26272a;
  --brainwaveio-btn-brainwaveio-secondary-active-background: #d5d5d6;
  --brainwaveio-btn-brainwaveio-secondary-active-color: #26272a;
  --brainwaveio-btn-brainwaveio-success-color: var(--brainwaveio-success);
  --brainwaveio-btn-brainwaveio-success-hover-color: #56b16e;
  --brainwaveio-btn-brainwaveio-success-active-background: #e1f7e7;
  --brainwaveio-btn-brainwaveio-success-active-color: #56b16e;
  --brainwaveio-btn-brainwaveio-info-color: var(--brainwaveio-info);
  --brainwaveio-btn-brainwaveio-info-hover-color: #3b31c7;
  --brainwaveio-btn-brainwaveio-info-active-background: #dad8fc;
  --brainwaveio-btn-brainwaveio-info-active-color: #3b31c7;
  --brainwaveio-btn-brainwaveio-warning-color: var(--brainwaveio-warning);
  --brainwaveio-btn-brainwaveio-warning-hover-color: #d4b578;
  --brainwaveio-btn-brainwaveio-warning-active-background: #fff8e9;
  --brainwaveio-btn-brainwaveio-warning-active-color: #d4b578;
  --brainwaveio-btn-brainwaveio-danger-color: var(--brainwaveio-danger);
  --brainwaveio-btn-brainwaveio-danger-hover-color: #cd1717;
  --brainwaveio-btn-brainwaveio-danger-active-background: #fdd2d2;
  --brainwaveio-btn-brainwaveio-danger-active-color: #cd1717;
  --brainwaveio-btn-brainwaveio-light-color: var(--brainwaveio-light);
  --brainwaveio-btn-brainwaveio-light-hover-color: #cfd0d2;
  --brainwaveio-btn-brainwaveio-light-active-background: #fefeff;
  --brainwaveio-btn-brainwaveio-light-active-color: #cfd0d2;
  --brainwaveio-btn-brainwaveio-dark-color: var(--brainwaveio-dark);
  --brainwaveio-btn-brainwaveio-dark-hover-color: #26272a;
  --brainwaveio-btn-brainwaveio-dark-active-background: #d5d5d6;
  --brainwaveio-btn-brainwaveio-dark-active-color: #26272a;
  --brainwaveio-input-btn-focus-color: rgba(247, 77, 77, 0.25);
  --brainwaveio-btn-link-color: var(--brainwaveio-link-color);
  --brainwaveio-btn-link-hover-color: #F74D4D;
  --brainwaveio-btn-disabled-color: #748194;
  --brainwaveio-input-focus-border-color-global: #fba6a6;
  --brainwaveio-input-placeholder-color-global: var(--brainwaveio-gray-400);
  --brainwaveio-bg-navbar-glass: rgba(237, 242, 249, 0.96);
  --brainwaveio-navbar-vertical-default-bg-color: var(--brainwaveio-bg-navbar-glass);
  --brainwaveio-navbar-vertical-default-link-color: #5e6e82;
  --brainwaveio-navbar-vertical-default-link-hover-color: #2E2F33;
  --brainwaveio-navbar-vertical-default-link-active-color: #F74D4D;
  --brainwaveio-navbar-vertical-default-link-disable-color: #E3E6ED;
  --brainwaveio-navbar-vertical-default-hr-color: rgba(0, 0, 0, 0.08);
  --brainwaveio-navbar-vertical-default-scrollbar-color: rgba(116, 129, 148, 0.3);
  --brainwaveio-navbar-vertical-default-label-color: var(--brainwaveio-gray-500);
  --brainwaveio-navbar-vertical-inverted-bg-color: #2E2F33;
  --brainwaveio-navbar-vertical-inverted-link-color: #E7E9ED;
  --brainwaveio-navbar-vertical-inverted-link-hover-color: #edf2f9;
  --brainwaveio-navbar-vertical-inverted-link-active-color: #edf2f9;
  --brainwaveio-navbar-vertical-inverted-link-disable-color: #5e6e82;
  --brainwaveio-navbar-vertical-inverted-hr-color: rgba(255, 255, 255, 0.08);
  --brainwaveio-navbar-vertical-inverted-scrollbar-color: #E3E6ED;
  --brainwaveio-navbar-vertical-inverted-label-color: #5e6e82;
  --brainwaveio-navbar-vertical-vibrant-bg-image: linear-gradient(-45deg, rgba(0, 160, 255, 0.86), #0048a2), url(../img/generic/bg-navbar.png);
  --brainwaveio-navbar-vertical-vibrant-link-color: rgba(255, 255, 255, 0.75);
  --brainwaveio-navbar-vertical-vibrant-link-hover-color: #fff;
  --brainwaveio-navbar-vertical-vibrant-link-active-color: #fff;
  --brainwaveio-navbar-vertical-vibrant-link-disable-color: rgba(255, 255, 255, 0.45);
  --brainwaveio-navbar-vertical-vibrant-hr-color: rgba(255, 255, 255, 0.2);
  --brainwaveio-navbar-vertical-vibrant-scrollbar-color: #E3E6ED;
  --brainwaveio-navbar-vertical-vibrant-label-color: rgba(255, 255, 255, 0.4);
  --brainwaveio-navbar-vertical-card-bg-color: #fff;
  --brainwaveio-navbar-vertical-card-link-color: var(--brainwaveio-gray-700);
  --brainwaveio-navbar-vertical-card-link-hover-color: var(--brainwaveio-gray-900);
  --brainwaveio-navbar-vertical-card-link-active-color: var(--brainwaveio-primary);
  --brainwaveio-navbar-vertical-card-link-disable-color: var(--brainwaveio-gray-400);
  --brainwaveio-navbar-vertical-card-hr-color: rgba(0, 0, 0, 0.08);
  --brainwaveio-navbar-vertical-card-scrollbar-color: rgba(116, 129, 148, 0.3);
  --brainwaveio-navbar-vertical-card-label-color: var(--brainwaveio-gray-500);
  --brainwaveio-avatar-status-border-color: var(--brainwaveio-quaternary-bg);
  --brainwaveio-avatar-name-bg: #535353;
  --brainwaveio-avatar-button-bg: var(--brainwaveio-gray-400);
  --brainwaveio-avatar-button-hover-bg: var(--brainwaveio-gray-500);
  --brainwaveio-notification-bg: var(--brainwaveio-emphasis-bg);
  --brainwaveio-notification-title-bg: #f9fafd;
  --brainwaveio-notification-unread-bg: var(--brainwaveio-gray-200);
  --brainwaveio-notification-unread-hover-bg: #dae4f3;
  --brainwaveio-notification-indicator-border-color: var(--brainwaveio-body-bg);
  --brainwaveio-kanban-bg: #f9fafd;
  --brainwaveio-kanban-header-bg: var(--brainwaveio-kanban-bg);
  --brainwaveio-kanban-item-bg: #fff;
  --brainwaveio-kanban-item-color: var(--brainwaveio-gray-900);
  --brainwaveio-kanban-btn-add-hover-bg: var(--brainwaveio-gray-200);
  --brainwaveio-kanban-draggable-source-dragging-bg: var(--brainwaveio-body-bg);
  --brainwaveio-kanban-bg-attachment-bg: var(--brainwaveio-gray-300);
  --brainwaveio-kanban-footer-color: var(--brainwaveio-gray-600);
  --brainwaveio-kanban-nav-link-card-details-color: var(--brainwaveio-gray-700);
  --brainwaveio-kanban-nav-link-card-details-hover-bg: #edf2f9;
  --brainwaveio-bg-shape-bg: #4695ff;
  --brainwaveio-bg-shape-bg-ltd: linear-gradient(-45deg, #4695ff, #1970e2);
  --brainwaveio-bg-shape-bg-dtl: linear-gradient(-45deg, #1970e2, #4695ff);
  --brainwaveio-line-chart-gradient: linear-gradient(-45deg, #014ba7, #0183d0);
  --brainwaveio-card-gradient: linear-gradient(-45deg, #1970e2, #4695ff);
  --brainwaveio-progress-gradient: linear-gradient(-45deg, #1970e2, #4695ff);
  --brainwaveio-bg-circle-shape: none;
  --brainwaveio-bg-circle-shape-bg: #4695ff;
  --brainwaveio-modal-shape-header: linear-gradient(-45deg, #1970e2, #4695ff);
  --brainwaveio-modal-shape-header-bg: #4494ff;
  --fc-button-bg-color: #535353;
  --fc-button-border-color: #535353;
  --fc-button-hover-bg-color: #2E2F33;
  --fc-button-hover-border-color: #2E2F33;
  --fc-button-active-bg-color: #2E2F33;
  --fc-button-active-border-color: #2E2F33;
  --fc-button-list-day-cushion: var(--brainwaveio-quaternary-bg);
  --brainwaveio-flatpickr-calendar-bg: var(--brainwaveio-quaternary-bg);
  --brainwaveio-leaflet-bar-bg: #fff;
  --brainwaveio-leaflet-popup-content-wrapper-bg: var(--brainwaveio-quaternary-bg);
  --brainwaveio-choices-item-selectable-highlighted-bg: #fff;
  --brainwaveio-choices-item-has-no-choices-bg: var(--brainwaveio-quaternary-bg);
  --brainwaveio-bg-choices-close-button: #edf2f9;
  --brainwaveio-thumbnail-bg-global: #fff;
  --brainwaveio-chat-contact-bg: var(--brainwaveio-emphasis-bg);
  --brainwaveio-tinymce-bg: var(--brainwaveio-quaternary-bg);
  --brainwaveio-swiper-nav-bg: rgba(var(--brainwaveio-quaternary-bg-rgb), 0.8);
  --brainwaveio-star-rating-bg-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFdElEQVR4nO2aXWxURRTH/2dut58Imho1SgStuit+vBo0BkgkRjDog+VBiJEXqJhKK21x+7EdUu5u2W1Uqi8Qo4YQY6gQDQlRn9RENGoMD0a7RCzGRCJGBLRF9mOOD+waKHe7e2f23mt0f4/zceY/Z2fmzJm7QI0aNWr8j6EgBu3sHG9oXHC2gxQvJ/CUhbpUPD5wMggtwv8hmZrmn3mHmF8G4XEm6s5R/kinlPP91xKAA7YN2A8CeHRW8eLmrOjwWwsQgAMYqs+xnLGls3O8wW89vjqgp1/eDWC1YyXhxqYFvz/ppx7AZwcIsnrmbMDUK6X0V5NfA/VJuRDgdWWa3Tmds1b5IqiAf97OUReAunLNCOx4RniFL/eALimvrs+KnwDMq6yHWJq0Bz/3VFRxJD8GabgY4iqcPABWvd6puRzPV4CUsnEmK6YA3OCiG1tKRRIJecwrXUU8XwHTGbEe7iYPAJQXYqsXeq4YyEvjUkoxkxXfAbhDo/uFOrYWxeMDv1Rb16V4ugJmctYa6E0eABpyItdZTT1OeLwFDEMa02YpZeWHpwaeOaBncOQhMJYamrnmvMdJUtXOgI0bd4daW0+25S0rAoV7iLiHgWqkuDkChjik9ibl8EmAuAo2/8G1A7ZKea24IMJkcQRAmJkiBIQBtAGwqiluNgScU4w0EU2CkWZSk8ycnleP76WUf2nadCYajbfmrfwDxIWJgiMAhQG06k7AQxSAEwAmiTnNRJMEMWkxpePx/lNzrRpHB7wwOLJcMR+Cm9vbv5cZAK81h1S3lFLNrnQ8BBVjF/4bkweAZgDPnc+IJ5wqS0QBDnsoKBAYdLtTubMDCF95qiYAhMUfOpY7FSqlOgCc9lSRjzDR86MjsS+d6hwdMBaX3zCrlQDOeKrMBwiIpnYMvVSqvuRNMBWXXwPiYQB/eKLMBxgY3mnHRudqM+dVOGkPfsEKjwCYrqoyHyAgnrKHRipoV57CveAwgCZjZT7AwFjKHuqr5Npc8VW4r3/7ShAdAuD7xwuXjCftoa5KcwZXuUDv4MgqYn4XQEhLmscw8+5UPPaMm4TJVTqc2jF0GERrAeRcq/MceqOlnje7zRa10uHege3tBHobgXxdvhIm7DuRjjw9MbE277av1gRS9vAEwE8BqGpurgVhf0ud2qAz+YvdDegb3L4BTK+b2DCBgffO/np9+549m7K6NoweMD795KOj9y9bcRsB95rY0SRTp+qW7drV/aeJEeM9TMzvm9rQg48mEv2/mVoxP8RYLDa2oYWor4oVYwuEu6qgQwOOtLfvN36DrEIY4yXmNrRobGv79hZTI0YOKPwCEVMRurBFxqvPyAGLw+lbEWBuoBCwAwhB7f/i+GS8/YwcwBzY/i8S7AoILgIUMY8EZluAzZegIY2Fc0gbbQdc9DwHFgGKCFZGP4K2AwoxuFGz+xkCehFSNxHzKoCO6uowjQRl/7dXCs0YnCXmVwWH7Evu8T9LKT+Yzoj1BNggLHRl0fAc0ncAiyVuHl8INKEI0aQdOz67rvDRcm9394sToabpLhBHAVxVkV02c4D2e0DfwMi+Cv76CoCPKEU9Y4nYZ5Xa7pHyOpEVwwA2oXzKfmHqWKRF90FEewVUkAMcZ/C2lB076PadbkzKUwCejUblK3kSO0FYM0fzhkXh9M0AptyMUcQkDJY6AE8D2NIcUktS9vABk7+0JBJyMhmPPcYKywEu9cGWQ3nrnO4Y2g5gYN+sogyIU5mQakvasXEpZUbX9mxSidjHzSG+jxjrAPx4eS29afIwor0FWkJq9HzOOsvMq5n5B0vx2OioPKFrrxyFg/ItKeXBmazoAGMFQEea6/MlP3zWqFGjRo0y/A3lxcMNXfCjjAAAAABJRU5ErkJggg==");
  --brainwaveio-theme-wizard-nav-item-circle-bg: var(--brainwaveio-quaternary-bg);
  --brainwaveio-card-span-img-bg: var(--brainwaveio-quaternary-bg);
  --brainwaveio-card-span-img-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
  --brainwaveio-card-span-img-hover-box-shadow: 0 1rem 4rem rgba(0, 0, 0, 0.175);
  --brainwaveio-setting-toggle-shadow: 0 -7px 14px 0 rgba(65, 69, 88, 0.1), 0 3px 6px 0 rgba(0, 0, 0, 0.07);
  --brainwaveio-scrollbar-bg: rgba(227, 230, 237, 0.55);
  --brainwaveio-simplebar-bg: #e3e6ed;
  --brainwaveio-nav-pills-brainwaveio-active-bg-color: var(--brainwaveio-quaternary-bg);
  --brainwaveio-btn-disabled-custom-background: rgba(249, 250, 253, 0.55);
  --brainwaveio-btn-disabled-custom-color: rgba(46, 47, 51, 0.3);
  --brainwaveio-dropdown-bg-global: #fff;
  --brainwaveio-dropdown-link-hover-color-global: #464646;
  --brainwaveio-dropdown-link-hover-bg-global: #f9fafd;
  --brainwaveio-popover-header-bg-global: #f9fafd;
  --brainwaveio-top-nav-height: 4rem;
  --brainwaveio-toast-bg-global: rgba(255, 255, 255, 0.85);
  --brainwaveio-toast-header-bg-global: rgba(255, 255, 255, 0.85);
  --brainwaveio-list-group-bg-global: var(--brainwaveio-emphasis-bg);
  --brainwaveio-accordion-btn-color-global: #5e6e82;
  --brainwaveio-alert-link-color: #F74D4D;
}
:root [class^=btn-brainwaveio-].show,
[data-bs-theme=light] [class^=btn-brainwaveio-].show {
  --brainwaveio-btn-active-shadow: var(--brainwaveio-btn-brainwaveio-box-shadow);
}
:root .table-primary,
[data-bs-theme=light] .table-primary {
  --brainwaveio-table-bg: #fddbdb;
  --brainwaveio-table-color: #4d5969;
  --brainwaveio-table-hover-bg: #f0d1d2;
  --brainwaveio-table-hover-color: #4d5969;
  --brainwaveio-table-striped-bg: #f4d5d5;
  --brainwaveio-table-striped-color: #4d5969;
  --brainwaveio-table-active-bg: #ebced0;
  --brainwaveio-table-active-color: #4d5969;
  --brainwaveio-table-border-color: rgba(235, 206, 208, 0.05);
}
:root .table-secondary,
[data-bs-theme=light] .table-secondary {
  --brainwaveio-table-bg: #d5d5d6;
  --brainwaveio-table-color: #4d5969;
  --brainwaveio-table-hover-bg: #cbccce;
  --brainwaveio-table-hover-color: #4d5969;
  --brainwaveio-table-striped-bg: #cecfd1;
  --brainwaveio-table-striped-color: #4d5969;
  --brainwaveio-table-active-bg: #c7c9cb;
  --brainwaveio-table-active-color: #4d5969;
  --brainwaveio-table-border-color: rgba(199, 201, 203, 0.05);
}
:root .table-success,
[data-bs-theme=light] .table-success {
  --brainwaveio-table-bg: #e1f7e7;
  --brainwaveio-table-color: #4d5969;
  --brainwaveio-table-hover-bg: #d6ebde;
  --brainwaveio-table-hover-color: #4d5969;
  --brainwaveio-table-striped-bg: #daefe1;
  --brainwaveio-table-striped-color: #4d5969;
  --brainwaveio-table-active-bg: #d2e7da;
  --brainwaveio-table-active-color: #4d5969;
  --brainwaveio-table-border-color: rgba(210, 231, 218, 0.05);
}
:root .table-info,
[data-bs-theme=light] .table-info {
  --brainwaveio-table-bg: #dad8fc;
  --brainwaveio-table-color: #4d5969;
  --brainwaveio-table-hover-bg: #cfcef1;
  --brainwaveio-table-hover-color: #4d5969;
  --brainwaveio-table-striped-bg: #d3d2f5;
  --brainwaveio-table-striped-color: #4d5969;
  --brainwaveio-table-active-bg: #cccbed;
  --brainwaveio-table-active-color: #4d5969;
  --brainwaveio-table-border-color: rgba(204, 203, 237, 0.05);
}
:root .table-warning,
[data-bs-theme=light] .table-warning {
  --brainwaveio-table-bg: #fff8e9;
  --brainwaveio-table-color: #4d5969;
  --brainwaveio-table-hover-bg: #f2ecdf;
  --brainwaveio-table-hover-color: #4d5969;
  --brainwaveio-table-striped-bg: #f6f0e3;
  --brainwaveio-table-striped-color: #4d5969;
  --brainwaveio-table-active-bg: #ede8dc;
  --brainwaveio-table-active-color: #4d5969;
  --brainwaveio-table-border-color: rgba(237, 232, 220, 0.05);
}
:root .table-danger,
[data-bs-theme=light] .table-danger {
  --brainwaveio-table-bg: #fdd2d2;
  --brainwaveio-table-color: #4d5969;
  --brainwaveio-table-hover-bg: #f0c9ca;
  --brainwaveio-table-hover-color: #4d5969;
  --brainwaveio-table-striped-bg: #f4cccd;
  --brainwaveio-table-striped-color: #4d5969;
  --brainwaveio-table-active-bg: #ebc6c8;
  --brainwaveio-table-active-color: #4d5969;
  --brainwaveio-table-border-color: rgba(235, 198, 200, 0.05);
}
:root .table-light,
[data-bs-theme=light] .table-light {
  --brainwaveio-table-bg: #f9fafd;
  --brainwaveio-table-color: #4d5969;
  --brainwaveio-table-hover-bg: #eceef2;
  --brainwaveio-table-hover-color: #4d5969;
  --brainwaveio-table-striped-bg: #f0f2f6;
  --brainwaveio-table-striped-color: #4d5969;
  --brainwaveio-table-active-bg: #e8eaee;
  --brainwaveio-table-active-color: #4d5969;
  --brainwaveio-table-border-color: rgba(232, 234, 238, 0.05);
}
:root .table-dark,
[data-bs-theme=light] .table-dark {
  --brainwaveio-table-bg: #2E2F33;
  --brainwaveio-table-color: #fff;
  --brainwaveio-table-hover-bg: #3e3f42;
  --brainwaveio-table-hover-color: #fff;
  --brainwaveio-table-striped-bg: #38393d;
  --brainwaveio-table-striped-color: #fff;
  --brainwaveio-table-active-bg: #434447;
  --brainwaveio-table-active-color: #fff;
  --brainwaveio-table-border-color: rgba(67, 68, 71, 0.05);
}

/*-----------------------------------------------
|   Bootstrap Styles
-----------------------------------------------*/
*,
*::before,
*::after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: smooth;
  }
}

body {
  margin: 0;
  font-family: var(--brainwaveio-body-font-family);
  font-size: var(--brainwaveio-body-font-size);
  font-weight: var(--brainwaveio-body-font-weight);
  line-height: var(--brainwaveio-body-line-height);
  color: var(--brainwaveio-body-color);
  text-align: var(--brainwaveio-body-text-align);
  background-color: var(--brainwaveio-body-bg);
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

hr {
  margin: 0.5rem 0;
  color: var(--brainwaveio-border-color);
  border: 0;
  border-top: var(--brainwaveio-border-width) solid;
  opacity: var(--brainwaveio-hr-opacity);
}

h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
  margin-top: 0;
  margin-bottom: 0.25rem;
  font-family: var(--brainwaveio-font-family-base);
  font-weight: 500;
  line-height: 1.2;
  color: var(--brainwaveio-heading-color);
}

h1, .h1 {
  font-size: calc(1.375rem + 1.5vw);
}
@media (min-width: 1200px) {
  h1, .h1 {
    font-size: 2.5rem;
  }
}

h2, .h2 {
  font-size: calc(1.3375rem + 1.05vw);
}
@media (min-width: 1200px) {
  h2, .h2 {
    font-size: 2.125rem;
  }
}

h3, .h3 {
  font-size: calc(1.3125rem + 0.75vw);
}
@media (min-width: 1200px) {
  h3, .h3 {
    font-size: 1.875rem;
  }
}

h4, .h4 {
  font-size: calc(1.275rem + 0.3vw);
}
@media (min-width: 1200px) {
  h4, .h4 {
    font-size: 1.5rem;
  }
}

h5, .h5 {
  font-size: 1.25rem;
}

h6, .h6 {
  font-size: 0.875rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title] {
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
  -webkit-text-decoration-skip-ink: none;
  text-decoration-skip-ink: none;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul {
  padding-left: 2rem;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: 0.5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: 800;
}

small, .small {
  font-size: 75%;
}

mark, .mark {
  padding: 0.1875em;
  background-color: var(--brainwaveio-highlight-bg);
}

sub,
sup {
  position: relative;
  font-size: 0.75em;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

a {
  color: rgba(var(--brainwaveio-link-color-rgb), var(--brainwaveio-link-opacity, 1));
  text-decoration: none;
}
a:hover {
  --brainwaveio-link-color-rgb: var(--brainwaveio-link-hover-color-rgb);
  text-decoration: underline;
}

a:not([href]):not([class]), a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}

pre,
code,
kbd,
samp {
  font-family: var(--brainwaveio-font-monospace);
  font-size: 1em;
}

pre {
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  font-size: 75%;
}
pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

code {
  font-size: 75%;
  color: var(--brainwaveio-code-color);
  word-wrap: break-word;
}
a > code {
  color: inherit;
}

kbd {
  padding: 0.1875rem 0.375rem;
  font-size: 75%;
  color: var(--brainwaveio-body-bg);
  background-color: var(--brainwaveio-body-color);
  border-radius: 0.5rem;
}
kbd kbd {
  padding: 0;
  font-size: 1em;
}

figure {
  margin: 0 0 1rem;
}

img,
svg {
  vertical-align: middle;
}

table {
  caption-side: bottom;
  border-collapse: collapse;
}

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #E7E9ED;
  text-align: left;
}

th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}

thead,
tbody,
tfoot,
tr,
td,
th {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

label {
  display: inline-block;
}

button {
  border-radius: 0;
}

button:focus:not(:focus-visible) {
  outline: 0;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
select {
  text-transform: none;
}

[role=button] {
  cursor: pointer;
}

select {
  word-wrap: normal;
}
select:disabled {
  opacity: 1;
}

[list]:not([type=date]):not([type=datetime-local]):not([type=month]):not([type=week]):not([type=time])::-webkit-calendar-picker-indicator {
  display: none !important;
}

button,
[type=button],
[type=reset],
[type=submit] {
  -webkit-appearance: button;
}
button:not(:disabled),
[type=button]:not(:disabled),
[type=reset]:not(:disabled),
[type=submit]:not(:disabled) {
  cursor: pointer;
}

::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

textarea {
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: calc(1.275rem + 0.3vw);
  line-height: inherit;
}
@media (min-width: 1200px) {
  legend {
    font-size: 1.5rem;
  }
}
legend + * {
  clear: left;
}

::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-year-field {
  padding: 0;
}

::-webkit-inner-spin-button {
  height: auto;
}

[type=search] {
  -webkit-appearance: textfield;
  outline-offset: -2px;
}

/* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-color-swatch-wrapper {
  padding: 0;
}

::file-selector-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

iframe {
  border: 0;
}

summary {
  display: list-item;
  cursor: pointer;
}

progress {
  vertical-align: baseline;
}

[hidden] {
  display: none !important;
}

.lead {
  font-size: 1.2rem;
  font-weight: 400;
}

.display-1 {
  font-size: calc(1.5rem + 3vw);
  font-weight: 900;
  line-height: 1;
}
@media (min-width: 1200px) {
  .display-1 {
    font-size: 3.75rem;
  }
}

.display-2 {
  font-size: calc(1.475rem + 2.7vw);
  font-weight: 900;
  line-height: 1;
}
@media (min-width: 1200px) {
  .display-2 {
    font-size: 3.5rem;
  }
}

.display-3 {
  font-size: calc(1.425rem + 2.1vw);
  font-weight: 900;
  line-height: 1;
}
@media (min-width: 1200px) {
  .display-3 {
    font-size: 3rem;
  }
}

.display-4 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 900;
  line-height: 1;
}
@media (min-width: 1200px) {
  .display-4 {
    font-size: 2.5rem;
  }
}

.display-5 {
  font-size: calc(1.3375rem + 1.05vw);
  font-weight: 900;
  line-height: 1;
}
@media (min-width: 1200px) {
  .display-5 {
    font-size: 2.125rem;
  }
}

.display-6 {
  font-size: calc(1.3125rem + 0.75vw);
  font-weight: 900;
  line-height: 1;
}
@media (min-width: 1200px) {
  .display-6 {
    font-size: 1.875rem;
  }
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}
.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 75%;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 0.5rem;
  font-size: 1.2rem;
}
.blockquote > :last-child {
  margin-bottom: 0;
}

.blockquote-footer {
  margin-top: -0.5rem;
  margin-bottom: 0.5rem;
  font-size: 75%;
  color: #748194;
}
.blockquote-footer::before {
  content: "— ";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: var(--brainwaveio-thumbnail-bg-global);
  border: 3px solid var(--brainwaveio-thumbnail-bg-global);
  border-radius: var(--brainwaveio-border-radius);
  -webkit-box-shadow: var(--brainwaveio-box-shadow-sm);
  box-shadow: var(--brainwaveio-box-shadow-sm);
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.25rem;
  line-height: 1;
}

.figure-caption {
  font-size: 75%;
  color: var(--brainwaveio-gray-600);
}

.container,
.container-fluid,
.container-xl,
.container-lg,
.container-md,
.container-sm {
  --brainwaveio-gutter-x: 2rem;
  --brainwaveio-gutter-y: 0;
  width: 100%;
  padding-right: calc(var(--brainwaveio-gutter-x) * 0.5);
  padding-left: calc(var(--brainwaveio-gutter-x) * 0.5);
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container-sm, .container {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .container-md, .container-sm, .container {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .container-lg, .container-md, .container-sm, .container {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1110px;
  }
}
:root {
  --brainwaveio-breakpoint-xs: 0;
  --brainwaveio-breakpoint-sm: 576px;
  --brainwaveio-breakpoint-md: 768px;
  --brainwaveio-breakpoint-lg: 992px;
  --brainwaveio-breakpoint-xl: 1200px;
}

.row {
  --brainwaveio-gutter-x: 2rem;
  --brainwaveio-gutter-y: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-top: calc(-1 * var(--brainwaveio-gutter-y));
  margin-right: calc(-0.5 * var(--brainwaveio-gutter-x));
  margin-left: calc(-0.5 * var(--brainwaveio-gutter-x));
}
.row > * {
  -ms-flex-negative: 0;
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--brainwaveio-gutter-x) * 0.5);
  padding-left: calc(var(--brainwaveio-gutter-x) * 0.5);
  margin-top: var(--brainwaveio-gutter-y);
}

.col {
  -webkit-box-flex: 1;
  -ms-flex: 1 0 0%;
  flex: 1 0 0%;
}

.row-cols-auto > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto;
}

.row-cols-1 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 100%;
}

.row-cols-2 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 50%;
}

.row-cols-3 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 33.3333333333%;
}

.row-cols-4 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 25%;
}

.row-cols-5 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 20%;
}

.row-cols-6 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 16.6666666667%;
}

.col-auto {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto;
}

.col-1 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 8.33333333%;
}

.col-2 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 16.66666667%;
}

.col-3 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 25%;
}

.col-4 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 33.33333333%;
}

.col-5 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 41.66666667%;
}

.col-6 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 50%;
}

.col-7 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 58.33333333%;
}

.col-8 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 66.66666667%;
}

.col-9 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 75%;
}

.col-10 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 83.33333333%;
}

.col-11 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 91.66666667%;
}

.col-12 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 100%;
}

.offset-1 {
  margin-left: 8.33333333%;
}

.offset-2 {
  margin-left: 16.66666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.33333333%;
}

.offset-5 {
  margin-left: 41.66666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.33333333%;
}

.offset-8 {
  margin-left: 66.66666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.33333333%;
}

.offset-11 {
  margin-left: 91.66666667%;
}

.g-0,
.gx-0 {
  --brainwaveio-gutter-x: 0;
}

.g-0,
.gy-0 {
  --brainwaveio-gutter-y: 0;
}

.g-1,
.gx-1 {
  --brainwaveio-gutter-x: 0.5rem;
}

.g-1,
.gy-1 {
  --brainwaveio-gutter-y: 0.5rem;
}

.g-2,
.gx-2 {
  --brainwaveio-gutter-x: 1rem;
}

.g-2,
.gy-2 {
  --brainwaveio-gutter-y: 1rem;
}

.g-3,
.gx-3 {
  --brainwaveio-gutter-x: 2rem;
}

.g-3,
.gy-3 {
  --brainwaveio-gutter-y: 2rem;
}

.g-4,
.gx-4 {
  --brainwaveio-gutter-x: 2.5rem;
}

.g-4,
.gy-4 {
  --brainwaveio-gutter-y: 2.5rem;
}

.g-5,
.gx-5 {
  --brainwaveio-gutter-x: 3rem;
}

.g-5,
.gy-5 {
  --brainwaveio-gutter-y: 3rem;
}

.g-6,
.gx-6 {
  --brainwaveio-gutter-x: 3.5rem;
}

.g-6,
.gy-6 {
  --brainwaveio-gutter-y: 3.5rem;
}

.g-7,
.gx-7 {
  --brainwaveio-gutter-x: 4rem;
}

.g-7,
.gy-7 {
  --brainwaveio-gutter-y: 4rem;
}

.g-8,
.gx-8 {
  --brainwaveio-gutter-x: 4.5rem;
}

.g-8,
.gy-8 {
  --brainwaveio-gutter-y: 4.5rem;
}

.g-9,
.gx-9 {
  --brainwaveio-gutter-x: 6rem;
}

.g-9,
.gy-9 {
  --brainwaveio-gutter-y: 6rem;
}

.g-10,
.gx-10 {
  --brainwaveio-gutter-x: 7rem;
}

.g-10,
.gy-10 {
  --brainwaveio-gutter-y: 7rem;
}

.g-11,
.gx-11 {
  --brainwaveio-gutter-x: 8rem;
}

.g-11,
.gy-11 {
  --brainwaveio-gutter-y: 8rem;
}

.g-12,
.gx-12 {
  --brainwaveio-gutter-x: 9rem;
}

.g-12,
.gy-12 {
  --brainwaveio-gutter-y: 9rem;
}

.g-13,
.gx-13 {
  --brainwaveio-gutter-x: 9.5rem;
}

.g-13,
.gy-13 {
  --brainwaveio-gutter-y: 9.5rem;
}

.g-x1,
.gx-x1 {
  --brainwaveio-gutter-x: 1.5rem;
}

.g-x1,
.gy-x1 {
  --brainwaveio-gutter-y: 1.5rem;
}

@media (min-width: 576px) {
  .col-sm {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%;
  }
  .row-cols-sm-auto > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-sm-1 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-sm-2 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-sm-3 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-sm-4 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-sm-5 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-sm-6 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-sm-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
  }
  .col-sm-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-sm-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-sm-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%;
  }
  .col-sm-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-sm-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-sm-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%;
  }
  .col-sm-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-sm-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-sm-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%;
  }
  .col-sm-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-sm-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-sm-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.33333333%;
  }
  .offset-sm-2 {
    margin-left: 16.66666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.33333333%;
  }
  .offset-sm-5 {
    margin-left: 41.66666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.33333333%;
  }
  .offset-sm-8 {
    margin-left: 66.66666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.33333333%;
  }
  .offset-sm-11 {
    margin-left: 91.66666667%;
  }
  .g-sm-0,
  .gx-sm-0 {
    --brainwaveio-gutter-x: 0;
  }
  .g-sm-0,
  .gy-sm-0 {
    --brainwaveio-gutter-y: 0;
  }
  .g-sm-1,
  .gx-sm-1 {
    --brainwaveio-gutter-x: 0.5rem;
  }
  .g-sm-1,
  .gy-sm-1 {
    --brainwaveio-gutter-y: 0.5rem;
  }
  .g-sm-2,
  .gx-sm-2 {
    --brainwaveio-gutter-x: 1rem;
  }
  .g-sm-2,
  .gy-sm-2 {
    --brainwaveio-gutter-y: 1rem;
  }
  .g-sm-3,
  .gx-sm-3 {
    --brainwaveio-gutter-x: 2rem;
  }
  .g-sm-3,
  .gy-sm-3 {
    --brainwaveio-gutter-y: 2rem;
  }
  .g-sm-4,
  .gx-sm-4 {
    --brainwaveio-gutter-x: 2.5rem;
  }
  .g-sm-4,
  .gy-sm-4 {
    --brainwaveio-gutter-y: 2.5rem;
  }
  .g-sm-5,
  .gx-sm-5 {
    --brainwaveio-gutter-x: 3rem;
  }
  .g-sm-5,
  .gy-sm-5 {
    --brainwaveio-gutter-y: 3rem;
  }
  .g-sm-6,
  .gx-sm-6 {
    --brainwaveio-gutter-x: 3.5rem;
  }
  .g-sm-6,
  .gy-sm-6 {
    --brainwaveio-gutter-y: 3.5rem;
  }
  .g-sm-7,
  .gx-sm-7 {
    --brainwaveio-gutter-x: 4rem;
  }
  .g-sm-7,
  .gy-sm-7 {
    --brainwaveio-gutter-y: 4rem;
  }
  .g-sm-8,
  .gx-sm-8 {
    --brainwaveio-gutter-x: 4.5rem;
  }
  .g-sm-8,
  .gy-sm-8 {
    --brainwaveio-gutter-y: 4.5rem;
  }
  .g-sm-9,
  .gx-sm-9 {
    --brainwaveio-gutter-x: 6rem;
  }
  .g-sm-9,
  .gy-sm-9 {
    --brainwaveio-gutter-y: 6rem;
  }
  .g-sm-10,
  .gx-sm-10 {
    --brainwaveio-gutter-x: 7rem;
  }
  .g-sm-10,
  .gy-sm-10 {
    --brainwaveio-gutter-y: 7rem;
  }
  .g-sm-11,
  .gx-sm-11 {
    --brainwaveio-gutter-x: 8rem;
  }
  .g-sm-11,
  .gy-sm-11 {
    --brainwaveio-gutter-y: 8rem;
  }
  .g-sm-12,
  .gx-sm-12 {
    --brainwaveio-gutter-x: 9rem;
  }
  .g-sm-12,
  .gy-sm-12 {
    --brainwaveio-gutter-y: 9rem;
  }
  .g-sm-13,
  .gx-sm-13 {
    --brainwaveio-gutter-x: 9.5rem;
  }
  .g-sm-13,
  .gy-sm-13 {
    --brainwaveio-gutter-y: 9.5rem;
  }
  .g-sm-x1,
  .gx-sm-x1 {
    --brainwaveio-gutter-x: 1.5rem;
  }
  .g-sm-x1,
  .gy-sm-x1 {
    --brainwaveio-gutter-y: 1.5rem;
  }
}
@media (min-width: 768px) {
  .col-md {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%;
  }
  .row-cols-md-auto > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-md-1 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-md-2 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-md-3 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-md-4 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-md-5 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-md-6 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-md-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
  }
  .col-md-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-md-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-md-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%;
  }
  .col-md-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-md-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-md-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%;
  }
  .col-md-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-md-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-md-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%;
  }
  .col-md-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-md-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-md-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.33333333%;
  }
  .offset-md-2 {
    margin-left: 16.66666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.33333333%;
  }
  .offset-md-5 {
    margin-left: 41.66666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.33333333%;
  }
  .offset-md-8 {
    margin-left: 66.66666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.33333333%;
  }
  .offset-md-11 {
    margin-left: 91.66666667%;
  }
  .g-md-0,
  .gx-md-0 {
    --brainwaveio-gutter-x: 0;
  }
  .g-md-0,
  .gy-md-0 {
    --brainwaveio-gutter-y: 0;
  }
  .g-md-1,
  .gx-md-1 {
    --brainwaveio-gutter-x: 0.5rem;
  }
  .g-md-1,
  .gy-md-1 {
    --brainwaveio-gutter-y: 0.5rem;
  }
  .g-md-2,
  .gx-md-2 {
    --brainwaveio-gutter-x: 1rem;
  }
  .g-md-2,
  .gy-md-2 {
    --brainwaveio-gutter-y: 1rem;
  }
  .g-md-3,
  .gx-md-3 {
    --brainwaveio-gutter-x: 2rem;
  }
  .g-md-3,
  .gy-md-3 {
    --brainwaveio-gutter-y: 2rem;
  }
  .g-md-4,
  .gx-md-4 {
    --brainwaveio-gutter-x: 2.5rem;
  }
  .g-md-4,
  .gy-md-4 {
    --brainwaveio-gutter-y: 2.5rem;
  }
  .g-md-5,
  .gx-md-5 {
    --brainwaveio-gutter-x: 3rem;
  }
  .g-md-5,
  .gy-md-5 {
    --brainwaveio-gutter-y: 3rem;
  }
  .g-md-6,
  .gx-md-6 {
    --brainwaveio-gutter-x: 3.5rem;
  }
  .g-md-6,
  .gy-md-6 {
    --brainwaveio-gutter-y: 3.5rem;
  }
  .g-md-7,
  .gx-md-7 {
    --brainwaveio-gutter-x: 4rem;
  }
  .g-md-7,
  .gy-md-7 {
    --brainwaveio-gutter-y: 4rem;
  }
  .g-md-8,
  .gx-md-8 {
    --brainwaveio-gutter-x: 4.5rem;
  }
  .g-md-8,
  .gy-md-8 {
    --brainwaveio-gutter-y: 4.5rem;
  }
  .g-md-9,
  .gx-md-9 {
    --brainwaveio-gutter-x: 6rem;
  }
  .g-md-9,
  .gy-md-9 {
    --brainwaveio-gutter-y: 6rem;
  }
  .g-md-10,
  .gx-md-10 {
    --brainwaveio-gutter-x: 7rem;
  }
  .g-md-10,
  .gy-md-10 {
    --brainwaveio-gutter-y: 7rem;
  }
  .g-md-11,
  .gx-md-11 {
    --brainwaveio-gutter-x: 8rem;
  }
  .g-md-11,
  .gy-md-11 {
    --brainwaveio-gutter-y: 8rem;
  }
  .g-md-12,
  .gx-md-12 {
    --brainwaveio-gutter-x: 9rem;
  }
  .g-md-12,
  .gy-md-12 {
    --brainwaveio-gutter-y: 9rem;
  }
  .g-md-13,
  .gx-md-13 {
    --brainwaveio-gutter-x: 9.5rem;
  }
  .g-md-13,
  .gy-md-13 {
    --brainwaveio-gutter-y: 9.5rem;
  }
  .g-md-x1,
  .gx-md-x1 {
    --brainwaveio-gutter-x: 1.5rem;
  }
  .g-md-x1,
  .gy-md-x1 {
    --brainwaveio-gutter-y: 1.5rem;
  }
}
@media (min-width: 992px) {
  .col-lg {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%;
  }
  .row-cols-lg-auto > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-lg-1 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-lg-2 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-lg-3 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-lg-4 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-lg-5 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-lg-6 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-lg-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
  }
  .col-lg-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-lg-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-lg-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%;
  }
  .col-lg-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-lg-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-lg-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%;
  }
  .col-lg-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-lg-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-lg-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%;
  }
  .col-lg-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-lg-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-lg-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.33333333%;
  }
  .offset-lg-2 {
    margin-left: 16.66666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.33333333%;
  }
  .offset-lg-5 {
    margin-left: 41.66666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.33333333%;
  }
  .offset-lg-8 {
    margin-left: 66.66666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.33333333%;
  }
  .offset-lg-11 {
    margin-left: 91.66666667%;
  }
  .g-lg-0,
  .gx-lg-0 {
    --brainwaveio-gutter-x: 0;
  }
  .g-lg-0,
  .gy-lg-0 {
    --brainwaveio-gutter-y: 0;
  }
  .g-lg-1,
  .gx-lg-1 {
    --brainwaveio-gutter-x: 0.5rem;
  }
  .g-lg-1,
  .gy-lg-1 {
    --brainwaveio-gutter-y: 0.5rem;
  }
  .g-lg-2,
  .gx-lg-2 {
    --brainwaveio-gutter-x: 1rem;
  }
  .g-lg-2,
  .gy-lg-2 {
    --brainwaveio-gutter-y: 1rem;
  }
  .g-lg-3,
  .gx-lg-3 {
    --brainwaveio-gutter-x: 2rem;
  }
  .g-lg-3,
  .gy-lg-3 {
    --brainwaveio-gutter-y: 2rem;
  }
  .g-lg-4,
  .gx-lg-4 {
    --brainwaveio-gutter-x: 2.5rem;
  }
  .g-lg-4,
  .gy-lg-4 {
    --brainwaveio-gutter-y: 2.5rem;
  }
  .g-lg-5,
  .gx-lg-5 {
    --brainwaveio-gutter-x: 3rem;
  }
  .g-lg-5,
  .gy-lg-5 {
    --brainwaveio-gutter-y: 3rem;
  }
  .g-lg-6,
  .gx-lg-6 {
    --brainwaveio-gutter-x: 3.5rem;
  }
  .g-lg-6,
  .gy-lg-6 {
    --brainwaveio-gutter-y: 3.5rem;
  }
  .g-lg-7,
  .gx-lg-7 {
    --brainwaveio-gutter-x: 4rem;
  }
  .g-lg-7,
  .gy-lg-7 {
    --brainwaveio-gutter-y: 4rem;
  }
  .g-lg-8,
  .gx-lg-8 {
    --brainwaveio-gutter-x: 4.5rem;
  }
  .g-lg-8,
  .gy-lg-8 {
    --brainwaveio-gutter-y: 4.5rem;
  }
  .g-lg-9,
  .gx-lg-9 {
    --brainwaveio-gutter-x: 6rem;
  }
  .g-lg-9,
  .gy-lg-9 {
    --brainwaveio-gutter-y: 6rem;
  }
  .g-lg-10,
  .gx-lg-10 {
    --brainwaveio-gutter-x: 7rem;
  }
  .g-lg-10,
  .gy-lg-10 {
    --brainwaveio-gutter-y: 7rem;
  }
  .g-lg-11,
  .gx-lg-11 {
    --brainwaveio-gutter-x: 8rem;
  }
  .g-lg-11,
  .gy-lg-11 {
    --brainwaveio-gutter-y: 8rem;
  }
  .g-lg-12,
  .gx-lg-12 {
    --brainwaveio-gutter-x: 9rem;
  }
  .g-lg-12,
  .gy-lg-12 {
    --brainwaveio-gutter-y: 9rem;
  }
  .g-lg-13,
  .gx-lg-13 {
    --brainwaveio-gutter-x: 9.5rem;
  }
  .g-lg-13,
  .gy-lg-13 {
    --brainwaveio-gutter-y: 9.5rem;
  }
  .g-lg-x1,
  .gx-lg-x1 {
    --brainwaveio-gutter-x: 1.5rem;
  }
  .g-lg-x1,
  .gy-lg-x1 {
    --brainwaveio-gutter-y: 1.5rem;
  }
}
@media (min-width: 1200px) {
  .col-xl {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%;
  }
  .row-cols-xl-auto > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xl-1 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xl-2 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xl-3 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-xl-4 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xl-5 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xl-6 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-xl-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
  }
  .col-xl-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-xl-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xl-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xl-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-xl-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-xl-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xl-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-xl-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-xl-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xl-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-xl-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-xl-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xl-11 {
    margin-left: 91.66666667%;
  }
  .g-xl-0,
  .gx-xl-0 {
    --brainwaveio-gutter-x: 0;
  }
  .g-xl-0,
  .gy-xl-0 {
    --brainwaveio-gutter-y: 0;
  }
  .g-xl-1,
  .gx-xl-1 {
    --brainwaveio-gutter-x: 0.5rem;
  }
  .g-xl-1,
  .gy-xl-1 {
    --brainwaveio-gutter-y: 0.5rem;
  }
  .g-xl-2,
  .gx-xl-2 {
    --brainwaveio-gutter-x: 1rem;
  }
  .g-xl-2,
  .gy-xl-2 {
    --brainwaveio-gutter-y: 1rem;
  }
  .g-xl-3,
  .gx-xl-3 {
    --brainwaveio-gutter-x: 2rem;
  }
  .g-xl-3,
  .gy-xl-3 {
    --brainwaveio-gutter-y: 2rem;
  }
  .g-xl-4,
  .gx-xl-4 {
    --brainwaveio-gutter-x: 2.5rem;
  }
  .g-xl-4,
  .gy-xl-4 {
    --brainwaveio-gutter-y: 2.5rem;
  }
  .g-xl-5,
  .gx-xl-5 {
    --brainwaveio-gutter-x: 3rem;
  }
  .g-xl-5,
  .gy-xl-5 {
    --brainwaveio-gutter-y: 3rem;
  }
  .g-xl-6,
  .gx-xl-6 {
    --brainwaveio-gutter-x: 3.5rem;
  }
  .g-xl-6,
  .gy-xl-6 {
    --brainwaveio-gutter-y: 3.5rem;
  }
  .g-xl-7,
  .gx-xl-7 {
    --brainwaveio-gutter-x: 4rem;
  }
  .g-xl-7,
  .gy-xl-7 {
    --brainwaveio-gutter-y: 4rem;
  }
  .g-xl-8,
  .gx-xl-8 {
    --brainwaveio-gutter-x: 4.5rem;
  }
  .g-xl-8,
  .gy-xl-8 {
    --brainwaveio-gutter-y: 4.5rem;
  }
  .g-xl-9,
  .gx-xl-9 {
    --brainwaveio-gutter-x: 6rem;
  }
  .g-xl-9,
  .gy-xl-9 {
    --brainwaveio-gutter-y: 6rem;
  }
  .g-xl-10,
  .gx-xl-10 {
    --brainwaveio-gutter-x: 7rem;
  }
  .g-xl-10,
  .gy-xl-10 {
    --brainwaveio-gutter-y: 7rem;
  }
  .g-xl-11,
  .gx-xl-11 {
    --brainwaveio-gutter-x: 8rem;
  }
  .g-xl-11,
  .gy-xl-11 {
    --brainwaveio-gutter-y: 8rem;
  }
  .g-xl-12,
  .gx-xl-12 {
    --brainwaveio-gutter-x: 9rem;
  }
  .g-xl-12,
  .gy-xl-12 {
    --brainwaveio-gutter-y: 9rem;
  }
  .g-xl-13,
  .gx-xl-13 {
    --brainwaveio-gutter-x: 9.5rem;
  }
  .g-xl-13,
  .gy-xl-13 {
    --brainwaveio-gutter-y: 9.5rem;
  }
  .g-xl-x1,
  .gx-xl-x1 {
    --brainwaveio-gutter-x: 1.5rem;
  }
  .g-xl-x1,
  .gy-xl-x1 {
    --brainwaveio-gutter-y: 1.5rem;
  }
}
.table {
  --brainwaveio-table-color-type: initial;
  --brainwaveio-table-bg-type: initial;
  --brainwaveio-table-color-state: initial;
  --brainwaveio-table-bg-state: initial;
  --brainwaveio-table-color: #5e6e82;
  --brainwaveio-table-bg: transparent;
  --brainwaveio-table-border-color: var(--brainwaveio-body-bg);
  --brainwaveio-table-accent-bg: transparent;
  --brainwaveio-table-striped-color: #5e6e82;
  --brainwaveio-table-striped-bg: var(--brainwaveio-gray-100);
  --brainwaveio-table-active-color: var(--brainwaveio-body-color);
  --brainwaveio-table-active-bg: rgba(0, 0, 0, 0.1);
  --brainwaveio-table-hover-color: var(--brainwaveio-body-color);
  --brainwaveio-table-hover-bg: rgba(0, 0, 0, 0.075);
  width: 100%;
  margin-bottom: 0.5rem;
  vertical-align: top;
  border-color: var(--brainwaveio-table-border-color);
}
.table > :not(caption) > * > * {
  padding: 0.75rem 0.75rem;
  color: var(--brainwaveio-table-color-state, var(--brainwaveio-table-color-type, var(--brainwaveio-table-color)));
  background-color: var(--brainwaveio-table-bg);
  border-bottom-width: var(--brainwaveio-border-width);
  -webkit-box-shadow: inset 0 0 0 9999px var(--brainwaveio-table-bg-state, var(--brainwaveio-table-bg-type, var(--brainwaveio-table-accent-bg)));
  box-shadow: inset 0 0 0 9999px var(--brainwaveio-table-bg-state, var(--brainwaveio-table-bg-type, var(--brainwaveio-table-accent-bg)));
}
.table > tbody {
  vertical-align: inherit;
}
.table > thead {
  vertical-align: bottom;
}

.table-group-divider {
  border-top: calc(var(--brainwaveio-border-width) * 2) solid inherit;
}

.caption-top {
  caption-side: top;
}

.table-sm > :not(caption) > * > * {
  padding: 0.25rem 0.25rem;
}

.table-bordered > :not(caption) > * {
  border-width: var(--brainwaveio-border-width) 0;
}
.table-bordered > :not(caption) > * > * {
  border-width: 0 var(--brainwaveio-border-width);
}

.table-borderless > :not(caption) > * > * {
  border-bottom-width: 0;
}
.table-borderless > :not(:first-child) {
  border-top-width: 0;
}

.table-striped > tbody > tr:nth-of-type(even) > * {
  --brainwaveio-table-color-type: var(--brainwaveio-table-striped-color);
  --brainwaveio-table-bg-type: var(--brainwaveio-table-striped-bg);
}

.table-striped-columns > :not(caption) > tr > :nth-child(even) {
  --brainwaveio-table-color-type: var(--brainwaveio-table-striped-color);
  --brainwaveio-table-bg-type: var(--brainwaveio-table-striped-bg);
}

.table-active {
  --brainwaveio-table-color-state: var(--brainwaveio-table-active-color);
  --brainwaveio-table-bg-state: var(--brainwaveio-table-active-bg);
}

.table-hover > tbody > tr:hover > * {
  --brainwaveio-table-color-state: var(--brainwaveio-table-hover-color);
  --brainwaveio-table-bg-state: var(--brainwaveio-table-hover-bg);
}

.table-primary {
  --brainwaveio-table-color: #4d5969;
  --brainwaveio-table-bg: #fddbdb;
  --brainwaveio-table-border-color: #ebced0;
  --brainwaveio-table-striped-bg: #f4d5d5;
  --brainwaveio-table-striped-color: #4d5969;
  --brainwaveio-table-active-bg: #ebced0;
  --brainwaveio-table-active-color: #4d5969;
  --brainwaveio-table-hover-bg: #f0d1d2;
  --brainwaveio-table-hover-color: #4d5969;
  color: var(--brainwaveio-table-color);
  border-color: var(--brainwaveio-table-border-color);
}

.table-secondary {
  --brainwaveio-table-color: #4d5969;
  --brainwaveio-table-bg: #d5d5d6;
  --brainwaveio-table-border-color: #c7c9cb;
  --brainwaveio-table-striped-bg: #cecfd1;
  --brainwaveio-table-striped-color: #4d5969;
  --brainwaveio-table-active-bg: #c7c9cb;
  --brainwaveio-table-active-color: #4d5969;
  --brainwaveio-table-hover-bg: #cbccce;
  --brainwaveio-table-hover-color: #4d5969;
  color: var(--brainwaveio-table-color);
  border-color: var(--brainwaveio-table-border-color);
}

.table-success {
  --brainwaveio-table-color: #4d5969;
  --brainwaveio-table-bg: #e1f7e7;
  --brainwaveio-table-border-color: #d2e7da;
  --brainwaveio-table-striped-bg: #daefe1;
  --brainwaveio-table-striped-color: #4d5969;
  --brainwaveio-table-active-bg: #d2e7da;
  --brainwaveio-table-active-color: #4d5969;
  --brainwaveio-table-hover-bg: #d6ebde;
  --brainwaveio-table-hover-color: #4d5969;
  color: var(--brainwaveio-table-color);
  border-color: var(--brainwaveio-table-border-color);
}

.table-info {
  --brainwaveio-table-color: #4d5969;
  --brainwaveio-table-bg: #dad8fc;
  --brainwaveio-table-border-color: #cccbed;
  --brainwaveio-table-striped-bg: #d3d2f5;
  --brainwaveio-table-striped-color: #4d5969;
  --brainwaveio-table-active-bg: #cccbed;
  --brainwaveio-table-active-color: #4d5969;
  --brainwaveio-table-hover-bg: #cfcef1;
  --brainwaveio-table-hover-color: #4d5969;
  color: var(--brainwaveio-table-color);
  border-color: var(--brainwaveio-table-border-color);
}

.table-warning {
  --brainwaveio-table-color: #4d5969;
  --brainwaveio-table-bg: #fff8e9;
  --brainwaveio-table-border-color: #ede8dc;
  --brainwaveio-table-striped-bg: #f6f0e3;
  --brainwaveio-table-striped-color: #4d5969;
  --brainwaveio-table-active-bg: #ede8dc;
  --brainwaveio-table-active-color: #4d5969;
  --brainwaveio-table-hover-bg: #f2ecdf;
  --brainwaveio-table-hover-color: #4d5969;
  color: var(--brainwaveio-table-color);
  border-color: var(--brainwaveio-table-border-color);
}

.table-danger {
  --brainwaveio-table-color: #4d5969;
  --brainwaveio-table-bg: #fdd2d2;
  --brainwaveio-table-border-color: #ebc6c8;
  --brainwaveio-table-striped-bg: #f4cccd;
  --brainwaveio-table-striped-color: #4d5969;
  --brainwaveio-table-active-bg: #ebc6c8;
  --brainwaveio-table-active-color: #4d5969;
  --brainwaveio-table-hover-bg: #f0c9ca;
  --brainwaveio-table-hover-color: #4d5969;
  color: var(--brainwaveio-table-color);
  border-color: var(--brainwaveio-table-border-color);
}

.table-light {
  --brainwaveio-table-color: #4d5969;
  --brainwaveio-table-bg: #f9fafd;
  --brainwaveio-table-border-color: #e8eaee;
  --brainwaveio-table-striped-bg: #f0f2f6;
  --brainwaveio-table-striped-color: #4d5969;
  --brainwaveio-table-active-bg: #e8eaee;
  --brainwaveio-table-active-color: #4d5969;
  --brainwaveio-table-hover-bg: #eceef2;
  --brainwaveio-table-hover-color: #4d5969;
  color: var(--brainwaveio-table-color);
  border-color: var(--brainwaveio-table-border-color);
}

.table-dark {
  --brainwaveio-table-color: #fff;
  --brainwaveio-table-bg: #2E2F33;
  --brainwaveio-table-border-color: #434447;
  --brainwaveio-table-striped-bg: #38393d;
  --brainwaveio-table-striped-color: #fff;
  --brainwaveio-table-active-bg: #434447;
  --brainwaveio-table-active-color: #fff;
  --brainwaveio-table-hover-bg: #3e3f42;
  --brainwaveio-table-hover-color: #fff;
  color: var(--brainwaveio-table-color);
  border-color: var(--brainwaveio-table-border-color);
}

.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 767.98px) {
  .table-responsive-md {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 991.98px) {
  .table-responsive-lg {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1199.98px) {
  .table-responsive-xl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
.form-label {
  margin-bottom: 1rem;
  font-size: 0.875rem;
  font-weight: 500;
}

.col-form-label {
  padding-top: calc(0.3125rem + var(--brainwaveio-border-width));
  padding-bottom: calc(0.3125rem + var(--brainwaveio-border-width));
  margin-bottom: 0;
  font-size: inherit;
  font-weight: 500;
  line-height: 1.084;
}

.col-form-label-lg {
  padding-top: calc(0.375rem + var(--brainwaveio-border-width));
  padding-bottom: calc(0.375rem + var(--brainwaveio-border-width));
  font-size: 1.2rem;
}

.col-form-label-sm {
  padding-top: calc(0.1875rem + var(--brainwaveio-border-width));
  padding-bottom: calc(0.1875rem + var(--brainwaveio-border-width));
  font-size: 0.875rem;
}

.form-text {
  margin-top: 0.25rem;
  font-size: 75%;
  color: #E7E9ED;
}

.form-control {
  display: block;
  width: 100%;
  padding: 0.3125rem 1rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.084;
  color: var(--brainwaveio-gray-900);
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: var(--brainwaveio-quaternary-bg);
  background-clip: padding-box;
  border: var(--brainwaveio-border-width) solid var(--brainwaveio-gray-300);
  border-radius: var(--brainwaveio-border-radius);
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
.form-control[type=file] {
  overflow: hidden;
}
.form-control[type=file]:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control:focus {
  color: var(--brainwaveio-gray-900);
  background-color: var(--brainwaveio-quaternary-bg);
  border-color: var(--brainwaveio-input-focus-border-color-global);
  outline: 0;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 0 0.25rem rgba(247, 77, 77, 0.25);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 0 0.25rem rgba(247, 77, 77, 0.25);
}
.form-control::-webkit-date-and-time-value {
  min-width: 85px;
  height: 1.084em;
  margin: 0;
}
.form-control::-webkit-datetime-edit {
  display: block;
  padding: 0;
}
.form-control::-webkit-input-placeholder {
  color: var(--brainwaveio-input-placeholder-color-global);
  opacity: 1;
}
.form-control::-moz-placeholder {
  color: var(--brainwaveio-input-placeholder-color-global);
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: var(--brainwaveio-input-placeholder-color-global);
  opacity: 1;
}
.form-control::-ms-input-placeholder {
  color: var(--brainwaveio-input-placeholder-color-global);
  opacity: 1;
}
.form-control::placeholder {
  color: var(--brainwaveio-input-placeholder-color-global);
  opacity: 1;
}
.form-control:disabled {
  background-color: var(--brainwaveio-gray-200);
  opacity: 1;
}
.form-control::file-selector-button {
  padding: 0.3125rem 1rem;
  margin: -0.3125rem -1rem;
  -webkit-margin-end: 1rem;
  margin-inline-end: 1rem;
  color: #F4F7FA;
  background-color: #535353;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: var(--brainwaveio-border-width);
  border-radius: 0;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control::file-selector-button {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
.form-control:hover:not(:disabled):not([readonly])::file-selector-button {
  background-color: #535353;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.3125rem 0;
  margin-bottom: 0;
  line-height: 1.084;
  color: #5e6e82;
  background-color: transparent;
  border: solid transparent;
  border-width: var(--brainwaveio-border-width) 0;
}
.form-control-plaintext:focus {
  outline: 0;
}
.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  min-height: calc(1.084em + 0.375rem + calc(var(--brainwaveio-border-width) * 2));
  padding: 0.1875rem 0.75rem;
  font-size: 0.875rem;
  border-radius: var(--brainwaveio-border-radius-sm);
}
.form-control-sm::file-selector-button {
  padding: 0.1875rem 0.75rem;
  margin: -0.1875rem -0.75rem;
  -webkit-margin-end: 0.75rem;
  margin-inline-end: 0.75rem;
}

.form-control-lg {
  min-height: calc(1.084em + 0.75rem + calc(var(--brainwaveio-border-width) * 2));
  padding: 0.375rem 1.25rem;
  font-size: 1.2rem;
  border-radius: var(--brainwaveio-border-radius-lg);
}
.form-control-lg::file-selector-button {
  padding: 0.375rem 1.25rem;
  margin: -0.375rem -1.25rem;
  -webkit-margin-end: 1.25rem;
  margin-inline-end: 1.25rem;
}

textarea.form-control {
  min-height: calc(1.084em + 0.625rem + calc(var(--brainwaveio-border-width) * 2));
}
textarea.form-control-sm {
  min-height: calc(1.084em + 0.375rem + calc(var(--brainwaveio-border-width) * 2));
}
textarea.form-control-lg {
  min-height: calc(1.084em + 0.75rem + calc(var(--brainwaveio-border-width) * 2));
}

.form-control-color {
  width: 3rem;
  height: calc(1.084em + 0.625rem + calc(var(--brainwaveio-border-width) * 2));
  padding: 0.3125rem;
}
.form-control-color:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control-color::-moz-color-swatch {
  border: 0 !important;
  border-radius: var(--brainwaveio-border-radius);
}
.form-control-color::-webkit-color-swatch {
  border: 0 !important;
  border-radius: var(--brainwaveio-border-radius);
}
.form-control-color.form-control-sm {
  height: calc(1.084em + 0.375rem + calc(var(--brainwaveio-border-width) * 2));
}
.form-control-color.form-control-lg {
  height: calc(1.084em + 0.75rem + calc(var(--brainwaveio-border-width) * 2));
}

.form-select {
  --brainwaveio-form-select-bg-img: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"%3e%3cpath fill="none" stroke="%234d5969" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m2 5 6 6 6-6"/%3e%3c/svg%3e");
  display: block;
  width: 100%;
  padding: 0.3125rem 3rem 0.3125rem 1rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.084;
  color: var(--brainwaveio-gray-900);
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: var(--brainwaveio-quaternary-bg);
  background-image: var(--brainwaveio-form-select-bg-img), var(--brainwaveio-form-select-bg-icon, none);
  background-repeat: no-repeat;
  background-position: right 1rem center;
  background-size: 16px 12px;
  border: var(--brainwaveio-border-width) solid var(--brainwaveio-gray-300);
  border-radius: var(--brainwaveio-border-radius);
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-select {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
.form-select:focus {
  border-color: var(--brainwaveio-input-focus-border-color-global);
  outline: 0;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 0 0.25rem rgba(247, 77, 77, 0.25);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 0 0.25rem rgba(247, 77, 77, 0.25);
}
.form-select[multiple], .form-select[size]:not([size="1"]) {
  padding-right: 1rem;
  background-image: none;
}
.form-select:disabled {
  background-color: var(--brainwaveio-gray-200);
}
.form-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 var(--brainwaveio-gray-900);
}

.form-select-sm {
  padding-top: 0.1875rem;
  padding-bottom: 0.1875rem;
  padding-left: 0.75rem;
  font-size: 0.875rem;
  border-radius: var(--brainwaveio-border-radius-sm);
}

.form-select-lg {
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  padding-left: 1.25rem;
  font-size: 1.2rem;
  border-radius: var(--brainwaveio-border-radius-lg);
}

[data-bs-theme=dark] .form-select {
  --brainwaveio-form-select-bg-img: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"%3e%3cpath fill="none" stroke="%23F4F7FA" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m2 5 6 6 6-6"/%3e%3c/svg%3e");
}

.form-check {
  display: block;
  min-height: 1.084rem;
  padding-left: 1.5em;
  margin-bottom: 0.34375rem;
}
.form-check .form-check-input {
  float: left;
  margin-left: -1.5em;
}

.form-check-reverse {
  padding-right: 1.5em;
  padding-left: 0;
  text-align: right;
}
.form-check-reverse .form-check-input {
  float: right;
  margin-right: -1.5em;
  margin-left: 0;
}

.form-check-input {
  --brainwaveio-form-check-bg: transparent;
  width: 1em;
  height: 1em;
  margin-top: 0.042em;
  vertical-align: top;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: var(--brainwaveio-form-check-bg);
  background-image: var(--brainwaveio-form-check-bg-image);
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  border: 1px solid var(--brainwaveio-gray-400);
  print-color-adjust: exact;
}
.form-check-input[type=checkbox] {
  border-radius: 0.25em;
}
.form-check-input[type=radio] {
  border-radius: 50%;
}
.form-check-input:active {
  -webkit-filter: brightness(90%);
  filter: brightness(90%);
}
.form-check-input:focus {
  border-color: var(--brainwaveio-input-focus-border-color-global);
  outline: 0;
  -webkit-box-shadow: 0 0 0 0.25rem rgba(247, 77, 77, 0.25);
  box-shadow: 0 0 0 0.25rem rgba(247, 77, 77, 0.25);
}
.form-check-input:checked {
  background-color: #F74D4D;
  border-color: #F74D4D;
}
.form-check-input:checked[type=checkbox] {
  --brainwaveio-form-check-bg-image: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"%3e%3cpath fill="none" stroke="%23fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m6 10 3 3 6-6"/%3e%3c/svg%3e");
}
.form-check-input:checked[type=radio] {
  --brainwaveio-form-check-bg-image: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="-4 -4 8 8"%3e%3ccircle r="2" fill="%23fff"/%3e%3c/svg%3e");
}
.form-check-input[type=checkbox]:indeterminate {
  background-color: #F74D4D;
  border-color: #F74D4D;
  --brainwaveio-form-check-bg-image: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"%3e%3cpath fill="none" stroke="%23fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 10h8"/%3e%3c/svg%3e");
}
.form-check-input:disabled {
  pointer-events: none;
  -webkit-filter: none;
  filter: none;
  opacity: 0.5;
}
.form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
  cursor: default;
  opacity: 0.5;
}

.form-switch {
  padding-left: 2.5em;
}
.form-switch .form-check-input {
  --brainwaveio-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="-4 -4 8 8"%3e%3ccircle r="3" fill="%23E7E9ED"/%3e%3c/svg%3e");
  width: 2em;
  margin-left: -2.5em;
  background-image: var(--brainwaveio-form-switch-bg);
  background-position: left center;
  border-radius: 2em;
  -webkit-transition: background-position 0.15s ease-in-out;
  -o-transition: background-position 0.15s ease-in-out;
  transition: background-position 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-switch .form-check-input {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
.form-switch .form-check-input:focus {
  --brainwaveio-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="-4 -4 8 8"%3e%3ccircle r="3" fill="var%28--brainwaveio-input-focus-border-color-global%29"/%3e%3c/svg%3e");
}
.form-switch .form-check-input:checked {
  background-position: right center;
  --brainwaveio-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="-4 -4 8 8"%3e%3ccircle r="3" fill="%23fff"/%3e%3c/svg%3e");
}
.form-switch.form-check-reverse {
  padding-right: 2.5em;
  padding-left: 0;
}
.form-switch.form-check-reverse .form-check-input {
  margin-right: -2.5em;
  margin-left: 0;
}

.form-check-inline {
  display: inline-block;
  margin-right: 1rem;
}

.btn-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.btn-check[disabled] + .btn, .btn-check:disabled + .btn {
  pointer-events: none;
  -webkit-filter: none;
  filter: none;
  opacity: 0.5;
}

[data-bs-theme=dark] .form-switch .form-check-input:not(:checked):not(:focus) {
  --brainwaveio-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="-4 -4 8 8"%3e%3ccircle r="3" fill="rgba%28255, 255, 255, 0.25%29"/%3e%3c/svg%3e");
}

.form-range {
  width: 100%;
  height: 1.5rem;
  padding: 0;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: transparent;
}
.form-range:focus {
  outline: 0;
}
.form-range:focus::-webkit-slider-thumb {
  -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(247, 77, 77, 0.25);
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(247, 77, 77, 0.25);
}
.form-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(247, 77, 77, 0.25);
}
.form-range::-moz-focus-outer {
  border: 0;
}
.form-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  -webkit-appearance: none;
  appearance: none;
  background-color: #F74D4D;
  border: 0;
  border-radius: 1rem;
  -webkit-box-shadow: 0 0.1rem 0.25rem rgba(0, 0, 0, 0.1);
  box-shadow: 0 0.1rem 0.25rem rgba(0, 0, 0, 0.1);
  -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-webkit-slider-thumb {
    -webkit-transition: none;
    transition: none;
  }
}
.form-range::-webkit-slider-thumb:active {
  background-color: #fff8f8;
}
.form-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: var(--brainwaveio-gray-300);
  border-color: transparent;
  border-radius: 1rem;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
}
.form-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  -moz-appearance: none;
  appearance: none;
  background-color: #F74D4D;
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.1rem 0.25rem rgba(0, 0, 0, 0.1);
  -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-moz-range-thumb {
    -moz-transition: none;
    transition: none;
  }
}
.form-range::-moz-range-thumb:active {
  background-color: #fff8f8;
}
.form-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: var(--brainwaveio-gray-300);
  border-color: transparent;
  border-radius: 1rem;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
}
.form-range:disabled {
  pointer-events: none;
}
.form-range:disabled::-webkit-slider-thumb {
  background-color: #E7E9ED;
}
.form-range:disabled::-moz-range-thumb {
  background-color: #E7E9ED;
}

.form-floating {
  position: relative;
}
.form-floating > .form-control,
.form-floating > .form-control-plaintext,
.form-floating > .form-select {
  height: calc(3.5rem + calc(var(--brainwaveio-border-width) * 2));
  min-height: calc(3.5rem + calc(var(--brainwaveio-border-width) * 2));
  line-height: 1.25;
}
.form-floating > label {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2;
  height: 100%;
  padding: 1rem 1rem;
  overflow: hidden;
  text-align: start;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  white-space: nowrap;
  pointer-events: none;
  border: var(--brainwaveio-border-width) solid transparent;
  -webkit-transform-origin: 0 0;
  -ms-transform-origin: 0 0;
  transform-origin: 0 0;
  -webkit-transition: opacity 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
  transition: opacity 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
  -o-transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
  transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
  transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-floating > label {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
.form-floating > .form-control,
.form-floating > .form-control-plaintext {
  padding: 1rem 1rem;
}
.form-floating > .form-control::-webkit-input-placeholder, .form-floating > .form-control-plaintext::-webkit-input-placeholder {
  color: transparent;
}
.form-floating > .form-control::-moz-placeholder, .form-floating > .form-control-plaintext::-moz-placeholder {
  color: transparent;
}
.form-floating > .form-control:-ms-input-placeholder, .form-floating > .form-control-plaintext:-ms-input-placeholder {
  color: transparent;
}
.form-floating > .form-control::-ms-input-placeholder, .form-floating > .form-control-plaintext::-ms-input-placeholder {
  color: transparent;
}
.form-floating > .form-control::placeholder,
.form-floating > .form-control-plaintext::placeholder {
  color: transparent;
}
.form-floating > .form-control:not(:-moz-placeholder-shown), .form-floating > .form-control-plaintext:not(:-moz-placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:not(:-ms-input-placeholder), .form-floating > .form-control-plaintext:not(:-ms-input-placeholder) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:focus, .form-floating > .form-control:not(:placeholder-shown),
.form-floating > .form-control-plaintext:focus,
.form-floating > .form-control-plaintext:not(:placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:-webkit-autofill,
.form-floating > .form-control-plaintext:-webkit-autofill {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-select {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:not(:-moz-placeholder-shown) ~ label {
  color: rgba(var(--brainwaveio-body-color-rgb), 0.65);
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:not(:-ms-input-placeholder) ~ label {
  color: rgba(var(--brainwaveio-body-color-rgb), 0.65);
  -ms-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-control-plaintext ~ label,
.form-floating > .form-select ~ label {
  color: rgba(var(--brainwaveio-body-color-rgb), 0.65);
  -webkit-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
  -ms-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:not(:-moz-placeholder-shown) ~ label::after {
  position: absolute;
  inset: 1rem 0.5rem;
  z-index: -1;
  height: 1.5em;
  content: "";
  background-color: var(--brainwaveio-quaternary-bg);
  border-radius: var(--brainwaveio-border-radius);
}
.form-floating > .form-control:not(:-ms-input-placeholder) ~ label::after {
  position: absolute;
  inset: 1rem 0.5rem;
  z-index: -1;
  height: 1.5em;
  content: "";
  background-color: var(--brainwaveio-quaternary-bg);
  border-radius: var(--brainwaveio-border-radius);
}
.form-floating > .form-control:focus ~ label::after,
.form-floating > .form-control:not(:placeholder-shown) ~ label::after,
.form-floating > .form-control-plaintext ~ label::after,
.form-floating > .form-select ~ label::after {
  position: absolute;
  inset: 1rem 0.5rem;
  z-index: -1;
  height: 1.5em;
  content: "";
  background-color: var(--brainwaveio-quaternary-bg);
  border-radius: var(--brainwaveio-border-radius);
}
.form-floating > .form-control:-webkit-autofill ~ label {
  color: rgba(var(--brainwaveio-body-color-rgb), 0.65);
  -webkit-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control-plaintext ~ label {
  border-width: var(--brainwaveio-border-width) 0;
}
.form-floating > :disabled ~ label,
.form-floating > .form-control:disabled ~ label {
  color: #748194;
}
.form-floating > :disabled ~ label::after,
.form-floating > .form-control:disabled ~ label::after {
  background-color: var(--brainwaveio-gray-200);
}

.input-group {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: stretch;
  -ms-flex-align: stretch;
  align-items: stretch;
  width: 100%;
}
.input-group > .form-control,
.input-group > .form-select,
.input-group > .form-floating {
  position: relative;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0;
}
.input-group > .form-control:focus,
.input-group > .form-select:focus,
.input-group > .form-floating:focus-within {
  z-index: 5;
}
.input-group .btn {
  position: relative;
  z-index: 2;
}
.input-group .btn:focus {
  z-index: 5;
}

.input-group-text {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.3125rem 1rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.084;
  color: var(--brainwaveio-gray-900);
  text-align: center;
  white-space: nowrap;
  background-color: var(--brainwaveio-gray-200);
  border: var(--brainwaveio-border-width) solid var(--brainwaveio-gray-300);
  border-radius: var(--brainwaveio-border-radius);
}

.input-group-lg > .form-control,
.input-group-lg > .form-select,
.input-group-lg > .input-group-text,
.input-group-lg > .btn {
  padding: 0.375rem 1.25rem;
  font-size: 1.2rem;
  border-radius: var(--brainwaveio-border-radius-lg);
}

.input-group-sm > .form-control,
.input-group-sm > .form-select,
.input-group-sm > .input-group-text,
.input-group-sm > .btn {
  padding: 0.1875rem 0.75rem;
  font-size: 0.875rem;
  border-radius: var(--brainwaveio-border-radius-sm);
}

.input-group-lg > .form-select,
.input-group-sm > .form-select {
  padding-right: 4rem;
}

.input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
.input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n+3),
.input-group:not(.has-validation) > .form-floating:not(:last-child) > .form-control,
.input-group:not(.has-validation) > .form-floating:not(:last-child) > .form-select {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group.has-validation > :nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
.input-group.has-validation > .dropdown-toggle:nth-last-child(n+4),
.input-group.has-validation > .form-floating:nth-last-child(n+3) > .form-control,
.input-group.has-validation > .form-floating:nth-last-child(n+3) > .form-select {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: calc(var(--brainwaveio-border-width) * -1);
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group > .form-floating:not(:first-child) > .form-control,
.input-group > .form-floating:not(:first-child) > .form-select {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 75%;
  color: var(--brainwaveio-form-valid-color);
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.5rem 0.25rem;
  margin-top: 0.1rem;
  font-size: 0.875rem;
  color: #fff;
  background-color: var(--brainwaveio-success);
  border-radius: var(--brainwaveio-border-radius);
}

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-control:valid, .form-control.is-valid {
  border-color: var(--brainwaveio-form-valid-border-color);
  padding-right: calc(1.084em + 0.625rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 8"%3e%3cpath fill="%2368D585" d="M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z"/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.271em + 0.15625rem) center;
  background-size: calc(0.542em + 0.3125rem) calc(0.542em + 0.3125rem);
}
.was-validated .form-control:valid:focus, .form-control.is-valid:focus {
  border-color: var(--brainwaveio-form-valid-border-color);
  -webkit-box-shadow: 0 0 0 0.25rem rgba(var(--brainwaveio-success-rgb), 0.25);
  box-shadow: 0 0 0 0.25rem rgba(var(--brainwaveio-success-rgb), 0.25);
}

.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
  padding-right: calc(1.084em + 0.625rem);
  background-position: top calc(0.271em + 0.15625rem) right calc(0.271em + 0.15625rem);
}

.was-validated .form-select:valid, .form-select.is-valid {
  border-color: var(--brainwaveio-form-valid-border-color);
}
.was-validated .form-select:valid:not([multiple]):not([size]), .was-validated .form-select:valid:not([multiple])[size="1"], .form-select.is-valid:not([multiple]):not([size]), .form-select.is-valid:not([multiple])[size="1"] {
  --brainwaveio-form-select-bg-icon: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 8"%3e%3cpath fill="%2368D585" d="M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z"/%3e%3c/svg%3e");
  padding-right: 5.5rem;
  background-position: right 1rem center, center right 3rem;
  background-size: 16px 12px, calc(0.542em + 0.3125rem) calc(0.542em + 0.3125rem);
}
.was-validated .form-select:valid:focus, .form-select.is-valid:focus {
  border-color: var(--brainwaveio-form-valid-border-color);
  -webkit-box-shadow: 0 0 0 0.25rem rgba(var(--brainwaveio-success-rgb), 0.25);
  box-shadow: 0 0 0 0.25rem rgba(var(--brainwaveio-success-rgb), 0.25);
}

.was-validated .form-control-color:valid, .form-control-color.is-valid {
  width: calc(3rem + calc(1.084em + 0.625rem));
}

.was-validated .form-check-input:valid, .form-check-input.is-valid {
  border-color: var(--brainwaveio-form-valid-border-color);
}
.was-validated .form-check-input:valid:checked, .form-check-input.is-valid:checked {
  background-color: var(--brainwaveio-form-valid-color);
}
.was-validated .form-check-input:valid:focus, .form-check-input.is-valid:focus {
  -webkit-box-shadow: 0 0 0 0.25rem rgba(var(--brainwaveio-success-rgb), 0.25);
  box-shadow: 0 0 0 0.25rem rgba(var(--brainwaveio-success-rgb), 0.25);
}
.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: var(--brainwaveio-form-valid-color);
}

.form-check-inline .form-check-input ~ .valid-feedback {
  margin-left: 0.5em;
}

.was-validated .input-group > .form-control:not(:focus):valid, .input-group > .form-control:not(:focus).is-valid,
.was-validated .input-group > .form-select:not(:focus):valid,
.input-group > .form-select:not(:focus).is-valid,
.was-validated .input-group > .form-floating:not(:focus-within):valid,
.input-group > .form-floating:not(:focus-within).is-valid {
  z-index: 3;
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 75%;
  color: var(--brainwaveio-form-invalid-color);
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.5rem 0.25rem;
  margin-top: 0.1rem;
  font-size: 0.875rem;
  color: #fff;
  background-color: var(--brainwaveio-danger);
  border-radius: var(--brainwaveio-border-radius);
}

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control:invalid, .form-control.is-invalid {
  border-color: var(--brainwaveio-form-invalid-border-color);
  padding-right: calc(1.084em + 0.625rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" width="12" height="12" fill="none" stroke="%23f71C1C"%3e%3ccircle cx="6" cy="6" r="4.5"/%3e%3cpath stroke-linejoin="round" d="M5.8 3.6h.4L6 6.5z"/%3e%3ccircle cx="6" cy="8.2" r=".6" fill="%23f71C1C" stroke="none"/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.271em + 0.15625rem) center;
  background-size: calc(0.542em + 0.3125rem) calc(0.542em + 0.3125rem);
}
.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
  border-color: var(--brainwaveio-form-invalid-border-color);
  -webkit-box-shadow: 0 0 0 0.25rem rgba(var(--brainwaveio-danger-rgb), 0.25);
  box-shadow: 0 0 0 0.25rem rgba(var(--brainwaveio-danger-rgb), 0.25);
}

.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
  padding-right: calc(1.084em + 0.625rem);
  background-position: top calc(0.271em + 0.15625rem) right calc(0.271em + 0.15625rem);
}

.was-validated .form-select:invalid, .form-select.is-invalid {
  border-color: var(--brainwaveio-form-invalid-border-color);
}
.was-validated .form-select:invalid:not([multiple]):not([size]), .was-validated .form-select:invalid:not([multiple])[size="1"], .form-select.is-invalid:not([multiple]):not([size]), .form-select.is-invalid:not([multiple])[size="1"] {
  --brainwaveio-form-select-bg-icon: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" width="12" height="12" fill="none" stroke="%23f71C1C"%3e%3ccircle cx="6" cy="6" r="4.5"/%3e%3cpath stroke-linejoin="round" d="M5.8 3.6h.4L6 6.5z"/%3e%3ccircle cx="6" cy="8.2" r=".6" fill="%23f71C1C" stroke="none"/%3e%3c/svg%3e");
  padding-right: 5.5rem;
  background-position: right 1rem center, center right 3rem;
  background-size: 16px 12px, calc(0.542em + 0.3125rem) calc(0.542em + 0.3125rem);
}
.was-validated .form-select:invalid:focus, .form-select.is-invalid:focus {
  border-color: var(--brainwaveio-form-invalid-border-color);
  -webkit-box-shadow: 0 0 0 0.25rem rgba(var(--brainwaveio-danger-rgb), 0.25);
  box-shadow: 0 0 0 0.25rem rgba(var(--brainwaveio-danger-rgb), 0.25);
}

.was-validated .form-control-color:invalid, .form-control-color.is-invalid {
  width: calc(3rem + calc(1.084em + 0.625rem));
}

.was-validated .form-check-input:invalid, .form-check-input.is-invalid {
  border-color: var(--brainwaveio-form-invalid-border-color);
}
.was-validated .form-check-input:invalid:checked, .form-check-input.is-invalid:checked {
  background-color: var(--brainwaveio-form-invalid-color);
}
.was-validated .form-check-input:invalid:focus, .form-check-input.is-invalid:focus {
  -webkit-box-shadow: 0 0 0 0.25rem rgba(var(--brainwaveio-danger-rgb), 0.25);
  box-shadow: 0 0 0 0.25rem rgba(var(--brainwaveio-danger-rgb), 0.25);
}
.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: var(--brainwaveio-form-invalid-color);
}

.form-check-inline .form-check-input ~ .invalid-feedback {
  margin-left: 0.5em;
}

.was-validated .input-group > .form-control:not(:focus):invalid, .input-group > .form-control:not(:focus).is-invalid,
.was-validated .input-group > .form-select:not(:focus):invalid,
.input-group > .form-select:not(:focus).is-invalid,
.was-validated .input-group > .form-floating:not(:focus-within):invalid,
.input-group > .form-floating:not(:focus-within).is-invalid {
  z-index: 4;
}

.btn {
  --brainwaveio-btn-padding-x: 1rem;
  --brainwaveio-btn-padding-y: 0.3125rem;
  --brainwaveio-btn-font-family: ;
  --brainwaveio-btn-font-size: 1rem;
  --brainwaveio-btn-font-weight: 700;
  --brainwaveio-btn-line-height: 1.084;
  --brainwaveio-btn-color: #fff;
  --brainwaveio-btn-bg: transparent;
  --brainwaveio-btn-border-width: var(--brainwaveio-border-width);
  --brainwaveio-btn-border-color: transparent;
  --brainwaveio-btn-border-radius: var(--brainwaveio-border-radius);
  --brainwaveio-btn-hover-border-color: transparent;
  --brainwaveio-btn-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
  --brainwaveio-btn-disabled-opacity: 0.5;
  --brainwaveio-btn-focus-box-shadow: 0 0 0 0 rgba(var(--brainwaveio-btn-focus-shadow-rgb), .5);
  display: inline-block;
  padding: var(--brainwaveio-btn-padding-y) var(--brainwaveio-btn-padding-x);
  font-family: var(--brainwaveio-btn-font-family);
  font-size: var(--brainwaveio-btn-font-size);
  font-weight: var(--brainwaveio-btn-font-weight);
  line-height: var(--brainwaveio-btn-line-height);
  color: var(--brainwaveio-btn-color);
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  border: var(--brainwaveio-btn-border-width) solid var(--brainwaveio-btn-border-color);
  border-radius: var(--brainwaveio-btn-border-radius);
  background-color: var(--brainwaveio-btn-bg);
  -webkit-box-shadow: var(--brainwaveio-btn-box-shadow);
  box-shadow: var(--brainwaveio-btn-box-shadow);
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .btn {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
.btn:hover {
  color: var(--brainwaveio-btn-hover-color);
  text-decoration: none;
  background-color: var(--brainwaveio-btn-hover-bg);
  border-color: var(--brainwaveio-btn-hover-border-color);
}
.btn-check + .btn:hover {
  color: var(--brainwaveio-btn-color);
  background-color: var(--brainwaveio-btn-bg);
  border-color: var(--brainwaveio-btn-border-color);
}
.btn:focus-visible {
  color: var(--brainwaveio-btn-hover-color);
  background-color: var(--brainwaveio-btn-hover-bg);
  border-color: var(--brainwaveio-btn-hover-border-color);
  outline: 0;
  -webkit-box-shadow: var(--brainwaveio-btn-box-shadow), var(--brainwaveio-btn-focus-box-shadow);
  box-shadow: var(--brainwaveio-btn-box-shadow), var(--brainwaveio-btn-focus-box-shadow);
}
.btn-check:focus-visible + .btn {
  border-color: var(--brainwaveio-btn-hover-border-color);
  outline: 0;
  -webkit-box-shadow: var(--brainwaveio-btn-box-shadow), var(--brainwaveio-btn-focus-box-shadow);
  box-shadow: var(--brainwaveio-btn-box-shadow), var(--brainwaveio-btn-focus-box-shadow);
}
.btn-check:checked + .btn, :not(.btn-check) + .btn:active, .btn:first-child:active, .btn.active, .btn.show {
  color: var(--brainwaveio-btn-active-color);
  background-color: var(--brainwaveio-btn-active-bg);
  border-color: var(--brainwaveio-btn-active-border-color);
  -webkit-box-shadow: var(--brainwaveio-btn-active-shadow);
  box-shadow: var(--brainwaveio-btn-active-shadow);
}
.btn-check:checked + .btn:focus-visible, :not(.btn-check) + .btn:active:focus-visible, .btn:first-child:active:focus-visible, .btn.active:focus-visible, .btn.show:focus-visible {
  -webkit-box-shadow: var(--brainwaveio-btn-active-shadow), var(--brainwaveio-btn-focus-box-shadow);
  box-shadow: var(--brainwaveio-btn-active-shadow), var(--brainwaveio-btn-focus-box-shadow);
}
.btn:disabled, .btn.disabled, fieldset:disabled .btn {
  color: var(--brainwaveio-btn-disabled-color);
  pointer-events: none;
  background-color: var(--brainwaveio-btn-disabled-bg);
  border-color: var(--brainwaveio-btn-disabled-border-color);
  opacity: var(--brainwaveio-btn-disabled-opacity);
  -webkit-box-shadow: none;
  box-shadow: none;
}

.btn-primary {
  --brainwaveio-btn-color: #fff;
  --brainwaveio-btn-bg: #F74D4D;
  --brainwaveio-btn-border-color: #F74D4D;
  --brainwaveio-btn-hover-color: #fff;
  --brainwaveio-btn-hover-bg: #d24141;
  --brainwaveio-btn-hover-border-color: #c63e3e;
  --brainwaveio-btn-focus-shadow-rgb: 248, 104, 104;
  --brainwaveio-btn-active-color: #fff;
  --brainwaveio-btn-active-bg: #c63e3e;
  --brainwaveio-btn-active-border-color: #b93a3a;
  --brainwaveio-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --brainwaveio-btn-disabled-color: #fff;
  --brainwaveio-btn-disabled-bg: #F74D4D;
  --brainwaveio-btn-disabled-border-color: #F74D4D;
}

.btn-secondary {
  --brainwaveio-btn-color: #fff;
  --brainwaveio-btn-bg: #2E2F33;
  --brainwaveio-btn-border-color: #2E2F33;
  --brainwaveio-btn-hover-color: #fff;
  --brainwaveio-btn-hover-bg: #27282b;
  --brainwaveio-btn-hover-border-color: #252629;
  --brainwaveio-btn-focus-shadow-rgb: 77, 78, 82;
  --brainwaveio-btn-active-color: #fff;
  --brainwaveio-btn-active-bg: #252629;
  --brainwaveio-btn-active-border-color: #232326;
  --brainwaveio-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --brainwaveio-btn-disabled-color: #fff;
  --brainwaveio-btn-disabled-bg: #2E2F33;
  --brainwaveio-btn-disabled-border-color: #2E2F33;
}

.btn-success {
  --brainwaveio-btn-color: #4d5969;
  --brainwaveio-btn-bg: #68D585;
  --brainwaveio-btn-border-color: #68D585;
  --brainwaveio-btn-hover-color: #4d5969;
  --brainwaveio-btn-hover-bg: #7fdb97;
  --brainwaveio-btn-hover-border-color: #77d991;
  --brainwaveio-btn-focus-shadow-rgb: 100, 194, 129;
  --brainwaveio-btn-active-color: #4d5969;
  --brainwaveio-btn-active-bg: #86dd9d;
  --brainwaveio-btn-active-border-color: #77d991;
  --brainwaveio-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --brainwaveio-btn-disabled-color: #4d5969;
  --brainwaveio-btn-disabled-bg: #68D585;
  --brainwaveio-btn-disabled-border-color: #68D585;
}

.btn-info {
  --brainwaveio-btn-color: #fff;
  --brainwaveio-btn-bg: #473BF0;
  --brainwaveio-btn-border-color: #473BF0;
  --brainwaveio-btn-hover-color: #fff;
  --brainwaveio-btn-hover-bg: #3c32cc;
  --brainwaveio-btn-hover-border-color: #392fc0;
  --brainwaveio-btn-focus-shadow-rgb: 99, 88, 242;
  --brainwaveio-btn-active-color: #fff;
  --brainwaveio-btn-active-bg: #392fc0;
  --brainwaveio-btn-active-border-color: #352cb4;
  --brainwaveio-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --brainwaveio-btn-disabled-color: #fff;
  --brainwaveio-btn-disabled-bg: #473BF0;
  --brainwaveio-btn-disabled-border-color: #473BF0;
}

.btn-warning {
  --brainwaveio-btn-color: #4d5969;
  --brainwaveio-btn-bg: #FFDA91;
  --brainwaveio-btn-border-color: #FFDA91;
  --brainwaveio-btn-hover-color: #4d5969;
  --brainwaveio-btn-hover-bg: #ffe0a2;
  --brainwaveio-btn-hover-border-color: #ffde9c;
  --brainwaveio-btn-focus-shadow-rgb: 228, 199, 139;
  --brainwaveio-btn-active-color: #4d5969;
  --brainwaveio-btn-active-bg: #ffe1a7;
  --brainwaveio-btn-active-border-color: #ffde9c;
  --brainwaveio-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --brainwaveio-btn-disabled-color: #4d5969;
  --brainwaveio-btn-disabled-bg: #FFDA91;
  --brainwaveio-btn-disabled-border-color: #FFDA91;
}

.btn-danger {
  --brainwaveio-btn-color: #fff;
  --brainwaveio-btn-bg: #f71C1C;
  --brainwaveio-btn-border-color: #f71C1C;
  --brainwaveio-btn-hover-color: #fff;
  --brainwaveio-btn-hover-bg: #d21818;
  --brainwaveio-btn-hover-border-color: #c61616;
  --brainwaveio-btn-focus-shadow-rgb: 248, 62, 62;
  --brainwaveio-btn-active-color: #fff;
  --brainwaveio-btn-active-bg: #c61616;
  --brainwaveio-btn-active-border-color: #b91515;
  --brainwaveio-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --brainwaveio-btn-disabled-color: #fff;
  --brainwaveio-btn-disabled-bg: #f71C1C;
  --brainwaveio-btn-disabled-border-color: #f71C1C;
}

.btn-light {
  --brainwaveio-btn-color: #4d5969;
  --brainwaveio-btn-bg: #f9fafd;
  --brainwaveio-btn-border-color: #f9fafd;
  --brainwaveio-btn-hover-color: #4d5969;
  --brainwaveio-btn-hover-bg: #d4d5d7;
  --brainwaveio-btn-hover-border-color: #c7c8ca;
  --brainwaveio-btn-focus-shadow-rgb: 223, 226, 231;
  --brainwaveio-btn-active-color: #4d5969;
  --brainwaveio-btn-active-bg: #c7c8ca;
  --brainwaveio-btn-active-border-color: #bbbcbe;
  --brainwaveio-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --brainwaveio-btn-disabled-color: #4d5969;
  --brainwaveio-btn-disabled-bg: #f9fafd;
  --brainwaveio-btn-disabled-border-color: #f9fafd;
}

.btn-dark {
  --brainwaveio-btn-color: #fff;
  --brainwaveio-btn-bg: #2E2F33;
  --brainwaveio-btn-border-color: #2E2F33;
  --brainwaveio-btn-hover-color: #fff;
  --brainwaveio-btn-hover-bg: #4d4e52;
  --brainwaveio-btn-hover-border-color: #434447;
  --brainwaveio-btn-focus-shadow-rgb: 77, 78, 82;
  --brainwaveio-btn-active-color: #fff;
  --brainwaveio-btn-active-bg: #58595c;
  --brainwaveio-btn-active-border-color: #434447;
  --brainwaveio-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --brainwaveio-btn-disabled-color: #fff;
  --brainwaveio-btn-disabled-bg: #2E2F33;
  --brainwaveio-btn-disabled-border-color: #2E2F33;
}

.btn-outline-primary {
  --brainwaveio-btn-color: #F74D4D;
  --brainwaveio-btn-border-color: #F74D4D;
  --brainwaveio-btn-hover-color: #fff;
  --brainwaveio-btn-hover-bg: #F74D4D;
  --brainwaveio-btn-hover-border-color: #F74D4D;
  --brainwaveio-btn-focus-shadow-rgb: 247, 77, 77;
  --brainwaveio-btn-active-color: #fff;
  --brainwaveio-btn-active-bg: #F74D4D;
  --brainwaveio-btn-active-border-color: #F74D4D;
  --brainwaveio-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --brainwaveio-btn-disabled-color: #F74D4D;
  --brainwaveio-btn-disabled-bg: transparent;
  --brainwaveio-btn-disabled-border-color: #F74D4D;
  --brainwaveio-gradient: none;
}

.btn-outline-secondary {
  --brainwaveio-btn-color: #2E2F33;
  --brainwaveio-btn-border-color: #2E2F33;
  --brainwaveio-btn-hover-color: #fff;
  --brainwaveio-btn-hover-bg: #2E2F33;
  --brainwaveio-btn-hover-border-color: #2E2F33;
  --brainwaveio-btn-focus-shadow-rgb: 46, 47, 51;
  --brainwaveio-btn-active-color: #fff;
  --brainwaveio-btn-active-bg: #2E2F33;
  --brainwaveio-btn-active-border-color: #2E2F33;
  --brainwaveio-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --brainwaveio-btn-disabled-color: #2E2F33;
  --brainwaveio-btn-disabled-bg: transparent;
  --brainwaveio-btn-disabled-border-color: #2E2F33;
  --brainwaveio-gradient: none;
}

.btn-outline-success {
  --brainwaveio-btn-color: #68D585;
  --brainwaveio-btn-border-color: #68D585;
  --brainwaveio-btn-hover-color: #4d5969;
  --brainwaveio-btn-hover-bg: #68D585;
  --brainwaveio-btn-hover-border-color: #68D585;
  --brainwaveio-btn-focus-shadow-rgb: 104, 213, 133;
  --brainwaveio-btn-active-color: #4d5969;
  --brainwaveio-btn-active-bg: #68D585;
  --brainwaveio-btn-active-border-color: #68D585;
  --brainwaveio-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --brainwaveio-btn-disabled-color: #68D585;
  --brainwaveio-btn-disabled-bg: transparent;
  --brainwaveio-btn-disabled-border-color: #68D585;
  --brainwaveio-gradient: none;
}

.btn-outline-info {
  --brainwaveio-btn-color: #473BF0;
  --brainwaveio-btn-border-color: #473BF0;
  --brainwaveio-btn-hover-color: #fff;
  --brainwaveio-btn-hover-bg: #473BF0;
  --brainwaveio-btn-hover-border-color: #473BF0;
  --brainwaveio-btn-focus-shadow-rgb: 71, 59, 240;
  --brainwaveio-btn-active-color: #fff;
  --brainwaveio-btn-active-bg: #473BF0;
  --brainwaveio-btn-active-border-color: #473BF0;
  --brainwaveio-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --brainwaveio-btn-disabled-color: #473BF0;
  --brainwaveio-btn-disabled-bg: transparent;
  --brainwaveio-btn-disabled-border-color: #473BF0;
  --brainwaveio-gradient: none;
}

.btn-outline-warning {
  --brainwaveio-btn-color: #FFDA91;
  --brainwaveio-btn-border-color: #FFDA91;
  --brainwaveio-btn-hover-color: #4d5969;
  --brainwaveio-btn-hover-bg: #FFDA91;
  --brainwaveio-btn-hover-border-color: #FFDA91;
  --brainwaveio-btn-focus-shadow-rgb: 255, 218, 145;
  --brainwaveio-btn-active-color: #4d5969;
  --brainwaveio-btn-active-bg: #FFDA91;
  --brainwaveio-btn-active-border-color: #FFDA91;
  --brainwaveio-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --brainwaveio-btn-disabled-color: #FFDA91;
  --brainwaveio-btn-disabled-bg: transparent;
  --brainwaveio-btn-disabled-border-color: #FFDA91;
  --brainwaveio-gradient: none;
}

.btn-outline-danger {
  --brainwaveio-btn-color: #f71C1C;
  --brainwaveio-btn-border-color: #f71C1C;
  --brainwaveio-btn-hover-color: #fff;
  --brainwaveio-btn-hover-bg: #f71C1C;
  --brainwaveio-btn-hover-border-color: #f71C1C;
  --brainwaveio-btn-focus-shadow-rgb: 247, 28, 28;
  --brainwaveio-btn-active-color: #fff;
  --brainwaveio-btn-active-bg: #f71C1C;
  --brainwaveio-btn-active-border-color: #f71C1C;
  --brainwaveio-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --brainwaveio-btn-disabled-color: #f71C1C;
  --brainwaveio-btn-disabled-bg: transparent;
  --brainwaveio-btn-disabled-border-color: #f71C1C;
  --brainwaveio-gradient: none;
}

.btn-outline-light {
  --brainwaveio-btn-color: #f9fafd;
  --brainwaveio-btn-border-color: #f9fafd;
  --brainwaveio-btn-hover-color: #4d5969;
  --brainwaveio-btn-hover-bg: #f9fafd;
  --brainwaveio-btn-hover-border-color: #f9fafd;
  --brainwaveio-btn-focus-shadow-rgb: 249, 250, 253;
  --brainwaveio-btn-active-color: #4d5969;
  --brainwaveio-btn-active-bg: #f9fafd;
  --brainwaveio-btn-active-border-color: #f9fafd;
  --brainwaveio-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --brainwaveio-btn-disabled-color: #f9fafd;
  --brainwaveio-btn-disabled-bg: transparent;
  --brainwaveio-btn-disabled-border-color: #f9fafd;
  --brainwaveio-gradient: none;
}

.btn-outline-dark {
  --brainwaveio-btn-color: #2E2F33;
  --brainwaveio-btn-border-color: #2E2F33;
  --brainwaveio-btn-hover-color: #fff;
  --brainwaveio-btn-hover-bg: #2E2F33;
  --brainwaveio-btn-hover-border-color: #2E2F33;
  --brainwaveio-btn-focus-shadow-rgb: 46, 47, 51;
  --brainwaveio-btn-active-color: #fff;
  --brainwaveio-btn-active-bg: #2E2F33;
  --brainwaveio-btn-active-border-color: #2E2F33;
  --brainwaveio-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --brainwaveio-btn-disabled-color: #2E2F33;
  --brainwaveio-btn-disabled-bg: transparent;
  --brainwaveio-btn-disabled-border-color: #2E2F33;
  --brainwaveio-gradient: none;
}

.btn-link {
  --brainwaveio-btn-font-weight: 400;
  --brainwaveio-btn-color: var(--brainwaveio-link-color);
  --brainwaveio-btn-bg: transparent;
  --brainwaveio-btn-border-color: transparent;
  --brainwaveio-btn-hover-color: var(--brainwaveio-link-hover-color);
  --brainwaveio-btn-hover-border-color: transparent;
  --brainwaveio-btn-active-color: var(--brainwaveio-link-hover-color);
  --brainwaveio-btn-active-border-color: transparent;
  --brainwaveio-btn-disabled-color: #748194;
  --brainwaveio-btn-disabled-border-color: transparent;
  --brainwaveio-btn-box-shadow: 0 0 0 #000;
  --brainwaveio-btn-focus-shadow-rgb: 57, 62, 77;
  text-decoration: none;
}
.btn-link:hover, .btn-link:focus-visible {
  text-decoration: underline;
}
.btn-link:focus-visible {
  color: var(--brainwaveio-btn-color);
}
.btn-link:hover {
  color: var(--brainwaveio-btn-hover-color);
}

.btn-lg, .btn-group-lg > .btn {
  --brainwaveio-btn-padding-y: 0.875rem;
  --brainwaveio-btn-padding-x: 3rem;
  --brainwaveio-btn-font-size: 1rem;
  --brainwaveio-btn-border-radius: var(--brainwaveio-border-radius-lg);
}

.btn-sm, .btn-group-sm > .btn {
  --brainwaveio-btn-padding-y: 0.95rem;
  --brainwaveio-btn-padding-x: 1.5rem;
  --brainwaveio-btn-font-size: 1rem;
  --brainwaveio-btn-border-radius: var(--brainwaveio-border-radius-sm);
}

.fade {
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}
@media (prefers-reduced-motion: reduce) {
  .fade {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
  -o-transition: height 0.35s ease;
  transition: height 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
.collapsing.collapse-horizontal {
  width: 0;
  height: auto;
  -webkit-transition: width 0.35s ease;
  -o-transition: width 0.35s ease;
  transition: width 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing.collapse-horizontal {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}

.dropup,
.dropend,
.dropdown,
.dropstart,
.dropup-center,
.dropdown-center {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;
}
.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}
.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  --brainwaveio-dropdown-zindex: 1000;
  --brainwaveio-dropdown-min-width: 10rem;
  --brainwaveio-dropdown-padding-x: 0;
  --brainwaveio-dropdown-padding-y: 2rem;
  --brainwaveio-dropdown-spacer: 0.125rem;
  --brainwaveio-dropdown-font-size: 0.875rem;
  --brainwaveio-dropdown-color: var(--brainwaveio-gray-300);
  --brainwaveio-dropdown-bg: var(--brainwaveio-dropdown-bg-global);
  --brainwaveio-dropdown-border-color: var(--brainwaveio-border-color);
  --brainwaveio-dropdown-border-radius: var(--brainwaveio-border-radius);
  --brainwaveio-dropdown-border-width: var(--brainwaveio-border-width);
  --brainwaveio-dropdown-inner-border-radius: calc(var(--brainwaveio-border-radius) - var(--brainwaveio-border-width));
  --brainwaveio-dropdown-divider-bg: var(--brainwaveio-border-color);
  --brainwaveio-dropdown-divider-margin-y: 0.25rem;
  --brainwaveio-dropdown-box-shadow: var(--brainwaveio-box-shadow);
  --brainwaveio-dropdown-link-color: var(--brainwaveio-gray-900);
  --brainwaveio-dropdown-link-hover-color: var(--brainwaveio-dropdown-link-hover-color-global);
  --brainwaveio-dropdown-link-hover-bg: var(--brainwaveio-dropdown-link-hover-bg-global);
  --brainwaveio-dropdown-link-active-color: #fff;
  --brainwaveio-dropdown-link-active-bg: #F74D4D;
  --brainwaveio-dropdown-link-disabled-color: var(--brainwaveio-gray-600);
  --brainwaveio-dropdown-item-padding-x: 2rem;
  --brainwaveio-dropdown-item-padding-y: 0.5rem;
  --brainwaveio-dropdown-header-color: var(--brainwaveio-gray-600);
  --brainwaveio-dropdown-header-padding-x: 2rem;
  --brainwaveio-dropdown-header-padding-y: 2rem;
  position: absolute;
  z-index: var(--brainwaveio-dropdown-zindex);
  display: none;
  min-width: var(--brainwaveio-dropdown-min-width);
  padding: var(--brainwaveio-dropdown-padding-y) var(--brainwaveio-dropdown-padding-x);
  margin: 0;
  font-size: var(--brainwaveio-dropdown-font-size);
  color: var(--brainwaveio-dropdown-color);
  text-align: left;
  list-style: none;
  background-color: var(--brainwaveio-dropdown-bg);
  background-clip: padding-box;
  border: var(--brainwaveio-dropdown-border-width) solid var(--brainwaveio-dropdown-border-color);
  border-radius: var(--brainwaveio-dropdown-border-radius);
  -webkit-box-shadow: var(--brainwaveio-dropdown-box-shadow);
  box-shadow: var(--brainwaveio-dropdown-box-shadow);
}
.dropdown-menu[data-bs-popper] {
  top: 100%;
  left: 0;
  margin-top: var(--brainwaveio-dropdown-spacer);
}

.dropdown-menu-start {
  --bs-position: start;
}
.dropdown-menu-start[data-bs-popper] {
  right: auto;
  left: 0;
}

.dropdown-menu-end {
  --bs-position: end;
}
.dropdown-menu-end[data-bs-popper] {
  right: 0;
  left: auto;
}

@media (min-width: 576px) {
  .dropdown-menu-sm-start {
    --bs-position: start;
  }
  .dropdown-menu-sm-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-sm-end {
    --bs-position: end;
  }
  .dropdown-menu-sm-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 768px) {
  .dropdown-menu-md-start {
    --bs-position: start;
  }
  .dropdown-menu-md-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-md-end {
    --bs-position: end;
  }
  .dropdown-menu-md-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 992px) {
  .dropdown-menu-lg-start {
    --bs-position: start;
  }
  .dropdown-menu-lg-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-lg-end {
    --bs-position: end;
  }
  .dropdown-menu-lg-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1200px) {
  .dropdown-menu-xl-start {
    --bs-position: start;
  }
  .dropdown-menu-xl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xl-end {
    --bs-position: end;
  }
  .dropdown-menu-xl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
.dropup .dropdown-menu[data-bs-popper] {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: var(--brainwaveio-dropdown-spacer);
}
.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}
.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropend .dropdown-menu[data-bs-popper] {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: var(--brainwaveio-dropdown-spacer);
}
.dropend .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}
.dropend .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropend .dropdown-toggle::after {
  vertical-align: 0;
}

.dropstart .dropdown-menu[data-bs-popper] {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: var(--brainwaveio-dropdown-spacer);
}
.dropstart .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}
.dropstart .dropdown-toggle::after {
  display: none;
}
.dropstart .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}
.dropstart .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropstart .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-divider {
  height: 0;
  margin: var(--brainwaveio-dropdown-divider-margin-y) 0;
  overflow: hidden;
  border-top: 1px solid var(--brainwaveio-dropdown-divider-bg);
  opacity: 1;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: var(--brainwaveio-dropdown-item-padding-y) var(--brainwaveio-dropdown-item-padding-x);
  clear: both;
  font-weight: 400;
  color: var(--brainwaveio-dropdown-link-color);
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
  border-radius: var(--brainwaveio-dropdown-item-border-radius, 0);
}
.dropdown-item:hover, .dropdown-item:focus {
  color: var(--brainwaveio-dropdown-link-hover-color);
  text-decoration: none;
  background-color: var(--brainwaveio-dropdown-link-hover-bg);
}
.dropdown-item.active, .dropdown-item:active {
  color: var(--brainwaveio-dropdown-link-active-color);
  text-decoration: none;
  background-color: var(--brainwaveio-dropdown-link-active-bg);
}
.dropdown-item.disabled, .dropdown-item:disabled {
  color: var(--brainwaveio-dropdown-link-disabled-color);
  pointer-events: none;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: var(--brainwaveio-dropdown-header-padding-y) var(--brainwaveio-dropdown-header-padding-x);
  margin-bottom: 0;
  font-size: 0.875rem;
  color: var(--brainwaveio-dropdown-header-color);
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: var(--brainwaveio-dropdown-item-padding-y) var(--brainwaveio-dropdown-item-padding-x);
  color: var(--brainwaveio-dropdown-link-color);
}

.dropdown-menu-dark {
  --brainwaveio-dropdown-color: #F4F7FA;
  --brainwaveio-dropdown-bg: #4d5969;
  --brainwaveio-dropdown-border-color: var(--brainwaveio-border-color);
  --brainwaveio-dropdown-box-shadow: ;
  --brainwaveio-dropdown-link-color: #F4F7FA;
  --brainwaveio-dropdown-link-hover-color: #fff;
  --brainwaveio-dropdown-divider-bg: var(--brainwaveio-border-color);
  --brainwaveio-dropdown-link-hover-bg: rgba(255, 255, 255, 0.15);
  --brainwaveio-dropdown-link-active-color: #fff;
  --brainwaveio-dropdown-link-active-bg: #F74D4D;
  --brainwaveio-dropdown-link-disabled-color: #E7E9ED;
  --brainwaveio-dropdown-header-color: #E7E9ED;
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
}
.btn-group > .btn-check:checked + .btn,
.btn-group > .btn-check:focus + .btn,
.btn-group > .btn:hover,
.btn-group > .btn:focus,
.btn-group > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn-check:checked + .btn,
.btn-group-vertical > .btn-check:focus + .btn,
.btn-group-vertical > .btn:hover,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
  z-index: 1;
}

.btn-toolbar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
}
.btn-toolbar .input-group {
  width: auto;
}

.btn-group {
  border-radius: var(--brainwaveio-border-radius);
}
.btn-group > :not(.btn-check:first-child) + .btn,
.btn-group > .btn-group:not(:first-child) {
  margin-left: calc(var(--brainwaveio-border-width) * -1);
}
.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn.dropdown-toggle-split:first-child,
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn:nth-child(n+3),
.btn-group > :not(.btn-check) + .btn,
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem;
}
.dropdown-toggle-split::after, .dropup .dropdown-toggle-split::after, .dropend .dropdown-toggle-split::after {
  margin-left: 0;
}
.dropstart .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 1.125rem;
  padding-left: 1.125rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 2.25rem;
  padding-left: 2.25rem;
}

.btn-group.show .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn-group.show .dropdown-toggle.btn-link {
  -webkit-box-shadow: none;
  box-shadow: none;
}

.btn-group-vertical {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
  width: 100%;
}
.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) {
  margin-top: calc(var(--brainwaveio-border-width) * -1);
}
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn ~ .btn,
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav {
  --brainwaveio-nav-link-padding-x: 1rem;
  --brainwaveio-nav-link-padding-y: 0.5rem;
  --brainwaveio-nav-link-font-size: 0.9375rem;
  --brainwaveio-nav-link-font-weight: 700;
  --brainwaveio-nav-link-color: #E3E6ED;
  --brainwaveio-nav-link-hover-color: #fff;
  --brainwaveio-nav-link-disabled-color: var(--brainwaveio-gray-600);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: var(--brainwaveio-nav-link-padding-y) var(--brainwaveio-nav-link-padding-x);
  font-size: var(--brainwaveio-nav-link-font-size);
  font-weight: var(--brainwaveio-nav-link-font-weight);
  color: var(--brainwaveio-nav-link-color);
  background: none;
  border: 0;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
  -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .nav-link {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
.nav-link:hover, .nav-link:focus {
  color: var(--brainwaveio-nav-link-hover-color);
  text-decoration: none;
}
.nav-link:focus-visible {
  outline: 0;
  -webkit-box-shadow: 0 0 0 0.25rem rgba(247, 77, 77, 0.25);
  box-shadow: 0 0 0 0.25rem rgba(247, 77, 77, 0.25);
}
.nav-link.disabled, .nav-link:disabled {
  color: var(--brainwaveio-nav-link-disabled-color);
  pointer-events: none;
  cursor: default;
}

.nav-tabs {
  --brainwaveio-nav-tabs-border-width: var(--brainwaveio-border-width);
  --brainwaveio-nav-tabs-border-color: var(--brainwaveio-border-color);
  --brainwaveio-nav-tabs-border-radius: var(--brainwaveio-border-radius);
  --brainwaveio-nav-tabs-link-hover-border-color: #edf2f9 #edf2f9 var(--brainwaveio-border-color);
  --brainwaveio-nav-tabs-link-active-color: var(--brainwaveio-emphasis-color);
  --brainwaveio-nav-tabs-link-active-bg: var(--brainwaveio-body-bg);
  --brainwaveio-nav-tabs-link-active-border-color: var(--brainwaveio-border-color) var(--brainwaveio-border-color) var(--brainwaveio-body-bg);
  border-bottom: var(--brainwaveio-nav-tabs-border-width) solid var(--brainwaveio-nav-tabs-border-color);
}
.nav-tabs .nav-link {
  margin-bottom: calc(-1 * var(--brainwaveio-nav-tabs-border-width));
  border: var(--brainwaveio-nav-tabs-border-width) solid transparent;
  border-top-left-radius: var(--brainwaveio-nav-tabs-border-radius);
  border-top-right-radius: var(--brainwaveio-nav-tabs-border-radius);
}
.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  isolation: isolate;
  border-color: var(--brainwaveio-nav-tabs-link-hover-border-color);
}
.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: var(--brainwaveio-nav-tabs-link-active-color);
  background-color: var(--brainwaveio-nav-tabs-link-active-bg);
  border-color: var(--brainwaveio-nav-tabs-link-active-border-color);
}
.nav-tabs .dropdown-menu {
  margin-top: calc(-1 * var(--brainwaveio-nav-tabs-border-width));
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills {
  --brainwaveio-nav-pills-border-radius: var(--brainwaveio-border-radius);
  --brainwaveio-nav-pills-link-active-color: #fff;
  --brainwaveio-nav-pills-link-active-bg: #F74D4D;
}
.nav-pills .nav-link {
  border-radius: var(--brainwaveio-nav-pills-border-radius);
}
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: var(--brainwaveio-nav-pills-link-active-color);
  background-color: var(--brainwaveio-nav-pills-link-active-bg);
}

.nav-underline {
  --brainwaveio-nav-underline-gap: 1rem;
  --brainwaveio-nav-underline-border-width: 0.125rem;
  --brainwaveio-nav-underline-link-active-color: var(--brainwaveio-emphasis-color);
  gap: var(--brainwaveio-nav-underline-gap);
}
.nav-underline .nav-link {
  padding-right: 0;
  padding-left: 0;
  border-bottom: var(--brainwaveio-nav-underline-border-width) solid transparent;
}
.nav-underline .nav-link:hover, .nav-underline .nav-link:focus {
  border-bottom-color: currentcolor;
}
.nav-underline .nav-link.active,
.nav-underline .show > .nav-link {
  font-weight: 700;
  color: var(--brainwaveio-nav-underline-link-active-color);
  border-bottom-color: currentcolor;
}

.nav-fill > .nav-link,
.nav-fill .nav-item {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  text-align: center;
}

.nav-justified > .nav-link,
.nav-justified .nav-item {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  text-align: center;
}

.nav-fill .nav-item .nav-link,
.nav-justified .nav-item .nav-link {
  width: 100%;
}

.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}

.navbar {
  --brainwaveio-navbar-padding-x: 1rem;
  --brainwaveio-navbar-padding-y: 1rem;
  --brainwaveio-navbar-color: #E3E6ED;
  --brainwaveio-navbar-hover-color: #fff;
  --brainwaveio-navbar-disabled-color: rgba(var(--brainwaveio-emphasis-color-rgb), 0.3);
  --brainwaveio-navbar-active-color: #fff;
  --brainwaveio-navbar-brand-padding-y: 0.229rem;
  --brainwaveio-navbar-brand-margin-end: 1rem;
  --brainwaveio-navbar-brand-font-size: 1.5rem;
  --brainwaveio-navbar-brand-color: #fff;
  --brainwaveio-navbar-brand-hover-color: #fff;
  --brainwaveio-navbar-nav-link-padding-x: 0;
  --brainwaveio-navbar-toggler-padding-y: 0.25rem;
  --brainwaveio-navbar-toggler-padding-x: 0.75rem;
  --brainwaveio-navbar-toggler-font-size: 1.2rem;
  --brainwaveio-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"%3e%3cpath stroke="%23fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"/%3e%3c/svg%3e");
  --brainwaveio-navbar-toggler-border-color: rgba(var(--brainwaveio-emphasis-color-rgb), 0.1);
  --brainwaveio-navbar-toggler-border-radius: var(--brainwaveio-border-radius);
  --brainwaveio-navbar-toggler-focus-width: 0;
  --brainwaveio-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: var(--brainwaveio-navbar-padding-y) var(--brainwaveio-navbar-padding-x);
}
.navbar > .container,
.navbar > .container-fluid,
.navbar > .container-sm,
.navbar > .container-md,
.navbar > .container-lg,
.navbar > .container-xl {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: inherit;
  flex-wrap: inherit;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}
.navbar-brand {
  padding-top: var(--brainwaveio-navbar-brand-padding-y);
  padding-bottom: var(--brainwaveio-navbar-brand-padding-y);
  margin-right: var(--brainwaveio-navbar-brand-margin-end);
  font-size: var(--brainwaveio-navbar-brand-font-size);
  color: var(--brainwaveio-navbar-brand-color);
  white-space: nowrap;
}
.navbar-brand:hover, .navbar-brand:focus {
  color: var(--brainwaveio-navbar-brand-hover-color);
  text-decoration: none;
}

.navbar-nav {
  --brainwaveio-nav-link-padding-x: 0;
  --brainwaveio-nav-link-padding-y: 0.5rem;
  --brainwaveio-nav-link-font-size: 0.9375rem;
  --brainwaveio-nav-link-font-weight: 700;
  --brainwaveio-nav-link-color: var(--brainwaveio-navbar-color);
  --brainwaveio-nav-link-hover-color: var(--brainwaveio-navbar-hover-color);
  --brainwaveio-nav-link-disabled-color: var(--brainwaveio-navbar-disabled-color);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.navbar-nav .nav-link.active, .navbar-nav .nav-link.show {
  color: var(--brainwaveio-navbar-active-color);
}
.navbar-nav .dropdown-menu {
  position: static;
}

.navbar-text {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  color: var(--brainwaveio-navbar-color);
}
.navbar-text a,
.navbar-text a:hover,
.navbar-text a:focus {
  color: var(--brainwaveio-navbar-active-color);
}

.navbar-collapse {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.navbar-toggler {
  padding: var(--brainwaveio-navbar-toggler-padding-y) var(--brainwaveio-navbar-toggler-padding-x);
  font-size: var(--brainwaveio-navbar-toggler-font-size);
  line-height: 1;
  color: var(--brainwaveio-navbar-color);
  background-color: transparent;
  border: var(--brainwaveio-border-width) solid var(--brainwaveio-navbar-toggler-border-color);
  border-radius: var(--brainwaveio-navbar-toggler-border-radius);
  -webkit-transition: var(--brainwaveio-navbar-toggler-transition);
  -o-transition: var(--brainwaveio-navbar-toggler-transition);
  transition: var(--brainwaveio-navbar-toggler-transition);
}
@media (prefers-reduced-motion: reduce) {
  .navbar-toggler {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
.navbar-toggler:hover {
  text-decoration: none;
}
.navbar-toggler:focus {
  text-decoration: none;
  outline: 0;
  -webkit-box-shadow: 0 0 0 var(--brainwaveio-navbar-toggler-focus-width);
  box-shadow: 0 0 0 var(--brainwaveio-navbar-toggler-focus-width);
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  background-image: var(--brainwaveio-navbar-toggler-icon-bg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
}

.navbar-nav-scroll {
  max-height: var(--brainwaveio-scroll-height, 75vh);
  overflow-y: auto;
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: var(--brainwaveio-navbar-nav-link-padding-x);
    padding-left: var(--brainwaveio-navbar-nav-link-padding-x);
  }
  .navbar-expand-sm .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-sm .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
  .navbar-expand-sm .offcanvas {
    position: static;
    z-index: auto;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    -webkit-transform: none !important;
    -ms-transform: none !important;
    transform: none !important;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
  .navbar-expand-sm .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-sm .offcanvas .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 768px) {
  .navbar-expand-md {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: var(--brainwaveio-navbar-nav-link-padding-x);
    padding-left: var(--brainwaveio-navbar-nav-link-padding-x);
  }
  .navbar-expand-md .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-md .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
  .navbar-expand-md .offcanvas {
    position: static;
    z-index: auto;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    -webkit-transform: none !important;
    -ms-transform: none !important;
    transform: none !important;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
  .navbar-expand-md .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-md .offcanvas .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 992px) {
  .navbar-expand-lg {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: var(--brainwaveio-navbar-nav-link-padding-x);
    padding-left: var(--brainwaveio-navbar-nav-link-padding-x);
  }
  .navbar-expand-lg .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-lg .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
  .navbar-expand-lg .offcanvas {
    position: static;
    z-index: auto;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    -webkit-transform: none !important;
    -ms-transform: none !important;
    transform: none !important;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
  .navbar-expand-lg .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-lg .offcanvas .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 1200px) {
  .navbar-expand-xl {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: var(--brainwaveio-navbar-nav-link-padding-x);
    padding-left: var(--brainwaveio-navbar-nav-link-padding-x);
  }
  .navbar-expand-xl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xl .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xl .offcanvas {
    position: static;
    z-index: auto;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    -webkit-transform: none !important;
    -ms-transform: none !important;
    transform: none !important;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
  .navbar-expand-xl .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-xl .offcanvas .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
.navbar-expand {
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
}
.navbar-expand .navbar-nav {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
  padding-right: var(--brainwaveio-navbar-nav-link-padding-x);
  padding-left: var(--brainwaveio-navbar-nav-link-padding-x);
}
.navbar-expand .navbar-nav-scroll {
  overflow: visible;
}
.navbar-expand .navbar-collapse {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important;
  -ms-flex-preferred-size: auto;
  flex-basis: auto;
}
.navbar-expand .navbar-toggler {
  display: none;
}
.navbar-expand .offcanvas {
  position: static;
  z-index: auto;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  width: auto !important;
  height: auto !important;
  visibility: visible !important;
  background-color: transparent !important;
  border: 0 !important;
  -webkit-transform: none !important;
  -ms-transform: none !important;
  transform: none !important;
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-transition: none;
  -o-transition: none;
  transition: none;
}
.navbar-expand .offcanvas .offcanvas-header {
  display: none;
}
.navbar-expand .offcanvas .offcanvas-body {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 0;
  -ms-flex-positive: 0;
  flex-grow: 0;
  padding: 0;
  overflow-y: visible;
}

.navbar-dark,
.navbar[data-bs-theme=dark] {
  --brainwaveio-navbar-color: rgba(255, 255, 255, 0.55);
  --brainwaveio-navbar-hover-color: rgba(255, 255, 255, 0.75);
  --brainwaveio-navbar-disabled-color: rgba(255, 255, 255, 0.25);
  --brainwaveio-navbar-active-color: #fff;
  --brainwaveio-navbar-brand-color: #fff;
  --brainwaveio-navbar-brand-hover-color: #fff;
  --brainwaveio-navbar-toggler-border-color: rgba(255, 255, 255, 0.1);
  --brainwaveio-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"%3e%3cpath stroke="rgba%28255, 255, 255, 0.55%29" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"/%3e%3c/svg%3e");
}

[data-bs-theme=dark] .navbar-toggler-icon {
  --brainwaveio-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"%3e%3cpath stroke="rgba%28255, 255, 255, 0.55%29" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"/%3e%3c/svg%3e");
}

.card {
  --brainwaveio-card-spacer-y: 1.25rem;
  --brainwaveio-card-spacer-x: 1.5rem;
  --brainwaveio-card-title-spacer-y: 0.25rem;
  --brainwaveio-card-title-color: var(--brainwaveio-gray-1100);
  --brainwaveio-card-subtitle-color: ;
  --brainwaveio-card-border-width: 0px;
  --brainwaveio-card-border-color: rgba(var(--brainwaveio-emphasis-color-rgb), 0.125);
  --brainwaveio-card-border-radius: 0.75rem;
  --brainwaveio-card-box-shadow: ;
  --brainwaveio-card-inner-border-radius: calc(0.75rem - 0px);
  --brainwaveio-card-cap-padding-y: 0.5rem;
  --brainwaveio-card-cap-padding-x: 1.25rem;
  --brainwaveio-card-cap-bg: rgba(0, 0, 0, 0);
  --brainwaveio-card-cap-color: ;
  --brainwaveio-card-height: ;
  --brainwaveio-card-color: ;
  --brainwaveio-card-bg: #fff;
  --brainwaveio-card-img-overlay-padding: 0.5rem;
  --brainwaveio-card-group-margin: 1rem;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  height: var(--brainwaveio-card-height);
  color: var(--brainwaveio-body-color);
  word-wrap: break-word;
  background-color: var(--brainwaveio-card-bg);
  background-clip: border-box;
  border: var(--brainwaveio-card-border-width) solid var(--brainwaveio-card-border-color);
  border-radius: var(--brainwaveio-card-border-radius);
  -webkit-box-shadow: var(--brainwaveio-card-box-shadow);
  box-shadow: var(--brainwaveio-card-box-shadow);
}
.card > hr {
  margin-right: 0;
  margin-left: 0;
}
.card > .list-group {
  border-top: inherit;
  border-bottom: inherit;
}
.card > .list-group:first-child {
  border-top-width: 0;
  border-top-left-radius: var(--brainwaveio-card-inner-border-radius);
  border-top-right-radius: var(--brainwaveio-card-inner-border-radius);
}
.card > .list-group:last-child {
  border-bottom-width: 0;
  border-bottom-right-radius: var(--brainwaveio-card-inner-border-radius);
  border-bottom-left-radius: var(--brainwaveio-card-inner-border-radius);
}
.card > .card-header + .list-group,
.card > .list-group + .card-footer {
  border-top: 0;
}

.card-body {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: var(--brainwaveio-card-spacer-y) var(--brainwaveio-card-spacer-x);
  color: var(--brainwaveio-card-color);
}

.card-title {
  margin-bottom: var(--brainwaveio-card-title-spacer-y);
  color: var(--brainwaveio-card-title-color);
}

.card-subtitle {
  margin-top: calc(-0.5 * var(--brainwaveio-card-title-spacer-y));
  margin-bottom: 0;
  color: var(--brainwaveio-card-subtitle-color);
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link:hover {
  text-decoration: none;
}
.card-link + .card-link {
  margin-left: var(--brainwaveio-card-spacer-x);
}

.card-header {
  padding: var(--brainwaveio-card-cap-padding-y) var(--brainwaveio-card-cap-padding-x);
  margin-bottom: 0;
  color: var(--brainwaveio-card-cap-color);
  background-color: var(--brainwaveio-card-cap-bg);
  border-bottom: var(--brainwaveio-card-border-width) solid var(--brainwaveio-card-border-color);
}
.card-header:first-child {
  border-radius: var(--brainwaveio-card-inner-border-radius) var(--brainwaveio-card-inner-border-radius) 0 0;
}

.card-footer {
  padding: var(--brainwaveio-card-cap-padding-y) var(--brainwaveio-card-cap-padding-x);
  color: var(--brainwaveio-card-cap-color);
  background-color: var(--brainwaveio-card-cap-bg);
  border-top: var(--brainwaveio-card-border-width) solid var(--brainwaveio-card-border-color);
}
.card-footer:last-child {
  border-radius: 0 0 var(--brainwaveio-card-inner-border-radius) var(--brainwaveio-card-inner-border-radius);
}

.card-header-tabs {
  margin-right: calc(-0.5 * var(--brainwaveio-card-cap-padding-x));
  margin-bottom: calc(-1 * var(--brainwaveio-card-cap-padding-y));
  margin-left: calc(-0.5 * var(--brainwaveio-card-cap-padding-x));
  border-bottom: 0;
}
.card-header-tabs .nav-link.active {
  background-color: var(--brainwaveio-card-bg);
  border-bottom-color: var(--brainwaveio-card-bg);
}

.card-header-pills {
  margin-right: calc(-0.5 * var(--brainwaveio-card-cap-padding-x));
  margin-left: calc(-0.5 * var(--brainwaveio-card-cap-padding-x));
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: var(--brainwaveio-card-img-overlay-padding);
  border-radius: var(--brainwaveio-card-inner-border-radius);
}

.card-img,
.card-img-top,
.card-img-bottom {
  width: 100%;
}

.card-img,
.card-img-top {
  border-top-left-radius: var(--brainwaveio-card-inner-border-radius);
  border-top-right-radius: var(--brainwaveio-card-inner-border-radius);
}

.card-img,
.card-img-bottom {
  border-bottom-right-radius: var(--brainwaveio-card-inner-border-radius);
  border-bottom-left-radius: var(--brainwaveio-card-inner-border-radius);
}

.card-group > .card {
  margin-bottom: var(--brainwaveio-card-group-margin);
}
@media (min-width: 576px) {
  .card-group {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
  }
  .card-group > .card {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-top,
  .card-group > .card:not(:last-child) .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-bottom,
  .card-group > .card:not(:last-child) .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-top,
  .card-group > .card:not(:first-child) .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-bottom,
  .card-group > .card:not(:first-child) .card-footer {
    border-bottom-left-radius: 0;
  }
}

.accordion {
  --brainwaveio-accordion-color: var(--brainwaveio-body-color);
  --brainwaveio-accordion-bg: #fff;
  --brainwaveio-accordion-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
  --brainwaveio-accordion-border-color: rgba(var(--brainwaveio-emphasis-color-rgb), 1);
  --brainwaveio-accordion-border-width: var(--brainwaveio-border-width);
  --brainwaveio-accordion-border-radius: var(--brainwaveio-border-radius);
  --brainwaveio-accordion-inner-border-radius: calc(var(--brainwaveio-border-radius) - (var(--brainwaveio-border-width)));
  --brainwaveio-accordion-btn-padding-x: 0;
  --brainwaveio-accordion-btn-padding-y: 1.25rem;
  --brainwaveio-accordion-btn-color: #161C2D;
  --brainwaveio-accordion-btn-bg: var(--brainwaveio-accordion-bg);
  --brainwaveio-accordion-btn-icon: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTUwIiBoZWlnaHQ9IjE1MCIgdmlld0JveD0iMCAwIDE1MCAxNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik00Ni44NzUgMTguNzVMMTAzLjEyNSA3NUw0Ni44NzUgMTMxLjI1IiBzdHJva2U9IiMxNjFDMkQiIHN0cm9rZS13aWR0aD0iMTguNzUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K");
  --brainwaveio-accordion-btn-icon-width: 1.25rem;
  --brainwaveio-accordion-btn-icon-transform: rotate(90deg);
  --brainwaveio-accordion-btn-icon-transition: transform 0.3s ease-in-out;
  --brainwaveio-accordion-btn-active-icon: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTUwIiBoZWlnaHQ9IjE1MCIgdmlld0JveD0iMCAwIDE1MCAxNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik00Ni44NzUgMTguNzVMMTAzLjEyNSA3NUw0Ni44NzUgMTMxLjI1IiBzdHJva2U9IiMxNjFDMkQiIHN0cm9rZS13aWR0aD0iMTguNzUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K");
  --brainwaveio-accordion-btn-focus-border-color: var(--brainwaveio-input-focus-border-color-global);
  --brainwaveio-accordion-btn-focus-box-shadow: none;
  --brainwaveio-accordion-body-padding-x: 0;
  --brainwaveio-accordion-body-padding-y: 1.25rem;
  --brainwaveio-accordion-active-color: #161C2D;
  --brainwaveio-accordion-active-bg: var(--brainwaveio-emphasis-bg);
}

.accordion-button {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  width: 100%;
  padding: var(--brainwaveio-accordion-btn-padding-y) var(--brainwaveio-accordion-btn-padding-x);
  font-size: 1rem;
  color: var(--brainwaveio-accordion-btn-color);
  text-align: left;
  background-color: var(--brainwaveio-accordion-btn-bg);
  border: 0;
  border-radius: 0;
  overflow-anchor: none;
  -webkit-transition: var(--brainwaveio-accordion-transition);
  -o-transition: var(--brainwaveio-accordion-transition);
  transition: var(--brainwaveio-accordion-transition);
}
@media (prefers-reduced-motion: reduce) {
  .accordion-button {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
.accordion-button:not(.collapsed) {
  color: var(--brainwaveio-accordion-active-color);
  background-color: var(--brainwaveio-accordion-active-bg);
  -webkit-box-shadow: inset 0 calc(-1 * var(--brainwaveio-accordion-border-width)) 0 var(--brainwaveio-accordion-border-color);
  box-shadow: inset 0 calc(-1 * var(--brainwaveio-accordion-border-width)) 0 var(--brainwaveio-accordion-border-color);
}
.accordion-button:not(.collapsed)::after {
  background-image: var(--brainwaveio-accordion-btn-active-icon);
  -webkit-transform: var(--brainwaveio-accordion-btn-icon-transform);
  -ms-transform: var(--brainwaveio-accordion-btn-icon-transform);
  transform: var(--brainwaveio-accordion-btn-icon-transform);
}
.accordion-button::after {
  -ms-flex-negative: 0;
  flex-shrink: 0;
  width: var(--brainwaveio-accordion-btn-icon-width);
  height: var(--brainwaveio-accordion-btn-icon-width);
  margin-left: auto;
  content: "";
  background-image: var(--brainwaveio-accordion-btn-icon);
  background-repeat: no-repeat;
  background-size: var(--brainwaveio-accordion-btn-icon-width);
  -webkit-transition: var(--brainwaveio-accordion-btn-icon-transition);
  -o-transition: var(--brainwaveio-accordion-btn-icon-transition);
  transition: var(--brainwaveio-accordion-btn-icon-transition);
}
@media (prefers-reduced-motion: reduce) {
  .accordion-button::after {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
.accordion-button:hover {
  z-index: 2;
}
.accordion-button:focus {
  z-index: 3;
  border-color: var(--brainwaveio-accordion-btn-focus-border-color);
  outline: 0;
  -webkit-box-shadow: var(--brainwaveio-accordion-btn-focus-box-shadow);
  box-shadow: var(--brainwaveio-accordion-btn-focus-box-shadow);
}

.accordion-header {
  margin-bottom: 0;
}

.accordion-item {
  color: var(--brainwaveio-accordion-color);
  background-color: var(--brainwaveio-accordion-bg);
  border: var(--brainwaveio-accordion-border-width) solid var(--brainwaveio-accordion-border-color);
}
.accordion-item:first-of-type {
  border-top-left-radius: var(--brainwaveio-accordion-border-radius);
  border-top-right-radius: var(--brainwaveio-accordion-border-radius);
}
.accordion-item:first-of-type .accordion-button {
  border-top-left-radius: var(--brainwaveio-accordion-inner-border-radius);
  border-top-right-radius: var(--brainwaveio-accordion-inner-border-radius);
}
.accordion-item:not(:first-of-type) {
  border-top: 0;
}
.accordion-item:last-of-type {
  border-bottom-right-radius: var(--brainwaveio-accordion-border-radius);
  border-bottom-left-radius: var(--brainwaveio-accordion-border-radius);
}
.accordion-item:last-of-type .accordion-button.collapsed {
  border-bottom-right-radius: var(--brainwaveio-accordion-inner-border-radius);
  border-bottom-left-radius: var(--brainwaveio-accordion-inner-border-radius);
}
.accordion-item:last-of-type .accordion-collapse {
  border-bottom-right-radius: var(--brainwaveio-accordion-border-radius);
  border-bottom-left-radius: var(--brainwaveio-accordion-border-radius);
}

.accordion-body {
  padding: var(--brainwaveio-accordion-body-padding-y) var(--brainwaveio-accordion-body-padding-x);
}

.accordion-flush .accordion-collapse {
  border-width: 0;
}
.accordion-flush .accordion-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}
.accordion-flush .accordion-item:first-child {
  border-top: 0;
}
.accordion-flush .accordion-item:last-child {
  border-bottom: 0;
}
.accordion-flush .accordion-item .accordion-button, .accordion-flush .accordion-item .accordion-button.collapsed {
  border-radius: 0;
}

[data-bs-theme=dark] .accordion-button::after {
  --brainwaveio-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="%23fa9494"%3e%3cpath fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/%3e%3c/svg%3e");
  --brainwaveio-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="%23fa9494"%3e%3cpath fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/%3e%3c/svg%3e");
}

.breadcrumb {
  --brainwaveio-breadcrumb-padding-x: 0;
  --brainwaveio-breadcrumb-padding-y: 0;
  --brainwaveio-breadcrumb-margin-bottom: 0;
  --brainwaveio-breadcrumb-bg: transparent;
  --brainwaveio-breadcrumb-border-radius: ;
  --brainwaveio-breadcrumb-divider-color: #748194;
  --brainwaveio-breadcrumb-item-padding-x: 0.5rem;
  --brainwaveio-breadcrumb-item-active-color: #748194;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: var(--brainwaveio-breadcrumb-padding-y) var(--brainwaveio-breadcrumb-padding-x);
  margin-bottom: var(--brainwaveio-breadcrumb-margin-bottom);
  font-size: var(--brainwaveio-breadcrumb-font-size);
  list-style: none;
  background-color: var(--brainwaveio-breadcrumb-bg);
  border-radius: var(--brainwaveio-breadcrumb-border-radius);
}

.breadcrumb-item + .breadcrumb-item {
  padding-left: var(--brainwaveio-breadcrumb-item-padding-x);
}
.breadcrumb-item + .breadcrumb-item::before {
  float: left;
  padding-right: var(--brainwaveio-breadcrumb-item-padding-x);
  color: var(--brainwaveio-breadcrumb-divider-color);
  content: var(--brainwaveio-breadcrumb-divider, "/") /* rtl: var(--brainwaveio-breadcrumb-divider, "/") */;
}
.breadcrumb-item.active {
  color: var(--brainwaveio-breadcrumb-item-active-color);
}

.pagination {
  --brainwaveio-pagination-padding-x: 0.75rem;
  --brainwaveio-pagination-padding-y: 0.5rem;
  --brainwaveio-pagination-font-size: 1rem;
  --brainwaveio-pagination-color: var(--brainwaveio-emphasis-color);
  --brainwaveio-pagination-bg: var(--brainwaveio-quaternary-bg);
  --brainwaveio-pagination-border-width: var(--brainwaveio-border-width);
  --brainwaveio-pagination-border-color: var(--brainwaveio-gray-200);
  --brainwaveio-pagination-border-radius: var(--brainwaveio-border-radius);
  --brainwaveio-pagination-hover-color: #fff;
  --brainwaveio-pagination-hover-bg: #F74D4D;
  --brainwaveio-pagination-hover-border-color: #F74D4D;
  --brainwaveio-pagination-focus-color: var(--brainwaveio-gray-700);
  --brainwaveio-pagination-focus-bg: var(--brainwaveio-gray-100);
  --brainwaveio-pagination-focus-box-shadow: none;
  --brainwaveio-pagination-active-color: #fff;
  --brainwaveio-pagination-active-bg: #F74D4D;
  --brainwaveio-pagination-active-border-color: #F74D4D;
  --brainwaveio-pagination-disabled-color: var(--brainwaveio-gray-700);
  --brainwaveio-pagination-disabled-bg: var(--brainwaveio-gray-100);
  --brainwaveio-pagination-disabled-border-color: var(--brainwaveio-gray-200);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none;
}

.page-link {
  position: relative;
  display: block;
  padding: var(--brainwaveio-pagination-padding-y) var(--brainwaveio-pagination-padding-x);
  font-size: var(--brainwaveio-pagination-font-size);
  color: var(--brainwaveio-pagination-color);
  background-color: var(--brainwaveio-pagination-bg);
  border: var(--brainwaveio-pagination-border-width) solid var(--brainwaveio-pagination-border-color);
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .page-link {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
.page-link:hover {
  z-index: 2;
  color: var(--brainwaveio-pagination-hover-color);
  text-decoration: none;
  background-color: var(--brainwaveio-pagination-hover-bg);
  border-color: var(--brainwaveio-pagination-hover-border-color);
}
.page-link:focus {
  z-index: 3;
  color: var(--brainwaveio-pagination-focus-color);
  background-color: var(--brainwaveio-pagination-focus-bg);
  outline: 0;
  -webkit-box-shadow: var(--brainwaveio-pagination-focus-box-shadow);
  box-shadow: var(--brainwaveio-pagination-focus-box-shadow);
}
.page-link.active, .active > .page-link {
  z-index: 3;
  color: var(--brainwaveio-pagination-active-color);
  background-color: var(--brainwaveio-pagination-active-bg);
  border-color: var(--brainwaveio-pagination-active-border-color);
}
.page-link.disabled, .disabled > .page-link {
  color: var(--brainwaveio-pagination-disabled-color);
  pointer-events: none;
  background-color: var(--brainwaveio-pagination-disabled-bg);
  border-color: var(--brainwaveio-pagination-disabled-border-color);
}

.page-item:not(:first-child) .page-link {
  margin-left: calc(var(--brainwaveio-border-width) * -1);
}
.page-item:first-child .page-link {
  border-top-left-radius: var(--brainwaveio-pagination-border-radius);
  border-bottom-left-radius: var(--brainwaveio-pagination-border-radius);
}
.page-item:last-child .page-link {
  border-top-right-radius: var(--brainwaveio-pagination-border-radius);
  border-bottom-right-radius: var(--brainwaveio-pagination-border-radius);
}

.pagination-lg {
  --brainwaveio-pagination-padding-x: 1.5rem;
  --brainwaveio-pagination-padding-y: 0.75rem;
  --brainwaveio-pagination-font-size: 1.2rem;
  --brainwaveio-pagination-border-radius: var(--brainwaveio-border-radius-lg);
}

.pagination-sm {
  --brainwaveio-pagination-padding-x: 0.5rem;
  --brainwaveio-pagination-padding-y: 0.25rem;
  --brainwaveio-pagination-font-size: 0.875rem;
  --brainwaveio-pagination-border-radius: var(--brainwaveio-border-radius-sm);
}

.badge {
  --brainwaveio-badge-padding-x: 0.711111em;
  --brainwaveio-badge-padding-y: 0.355555em;
  --brainwaveio-badge-font-size: 0.75em;
  --brainwaveio-badge-font-weight: 600;
  --brainwaveio-badge-color: #fff;
  --brainwaveio-badge-border-radius: var(--brainwaveio-border-radius);
  display: inline-block;
  padding: var(--brainwaveio-badge-padding-y) var(--brainwaveio-badge-padding-x);
  font-size: var(--brainwaveio-badge-font-size);
  font-weight: var(--brainwaveio-badge-font-weight);
  line-height: 1;
  color: var(--brainwaveio-badge-color);
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: var(--brainwaveio-badge-border-radius);
}
.badge:empty {
  display: none;
}

.btn .badge {
  position: relative;
  top: -1px;
}

.alert {
  --brainwaveio-alert-bg: transparent;
  --brainwaveio-alert-padding-x: 0.5rem;
  --brainwaveio-alert-padding-y: 0.5rem;
  --brainwaveio-alert-margin-bottom: 1rem;
  --brainwaveio-alert-color: inherit;
  --brainwaveio-alert-border-color: transparent;
  --brainwaveio-alert-border: var(--brainwaveio-border-width) solid var(--brainwaveio-alert-border-color);
  --brainwaveio-alert-border-radius: var(--brainwaveio-border-radius);
  --brainwaveio-alert-link-color: inherit;
  position: relative;
  padding: var(--brainwaveio-alert-padding-y) var(--brainwaveio-alert-padding-x);
  margin-bottom: var(--brainwaveio-alert-margin-bottom);
  color: var(--brainwaveio-alert-color);
  background-color: var(--brainwaveio-alert-bg);
  border: var(--brainwaveio-alert-border);
  border-radius: var(--brainwaveio-alert-border-radius);
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
  color: var(--brainwaveio-alert-link-color);
}

.alert-dismissible {
  padding-right: 1.5rem;
}
.alert-dismissible .btn-close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 0.625rem 0.5rem;
}

.alert-primary {
  --brainwaveio-alert-color: var(--brainwaveio-primary-text-emphasis);
  --brainwaveio-alert-bg: var(--brainwaveio-primary-bg-subtle);
  --brainwaveio-alert-border-color: var(--brainwaveio-primary-border-subtle);
  --brainwaveio-alert-link-color: var(--brainwaveio-primary-text-emphasis);
}

.alert-secondary {
  --brainwaveio-alert-color: var(--brainwaveio-secondary-text-emphasis);
  --brainwaveio-alert-bg: var(--brainwaveio-secondary-bg-subtle);
  --brainwaveio-alert-border-color: var(--brainwaveio-secondary-border-subtle);
  --brainwaveio-alert-link-color: var(--brainwaveio-secondary-text-emphasis);
}

.alert-success {
  --brainwaveio-alert-color: var(--brainwaveio-success-text-emphasis);
  --brainwaveio-alert-bg: var(--brainwaveio-success-bg-subtle);
  --brainwaveio-alert-border-color: var(--brainwaveio-success-border-subtle);
  --brainwaveio-alert-link-color: var(--brainwaveio-success-text-emphasis);
}

.alert-info {
  --brainwaveio-alert-color: var(--brainwaveio-info-text-emphasis);
  --brainwaveio-alert-bg: var(--brainwaveio-info-bg-subtle);
  --brainwaveio-alert-border-color: var(--brainwaveio-info-border-subtle);
  --brainwaveio-alert-link-color: var(--brainwaveio-info-text-emphasis);
}

.alert-warning {
  --brainwaveio-alert-color: var(--brainwaveio-warning-text-emphasis);
  --brainwaveio-alert-bg: var(--brainwaveio-warning-bg-subtle);
  --brainwaveio-alert-border-color: var(--brainwaveio-warning-border-subtle);
  --brainwaveio-alert-link-color: var(--brainwaveio-warning-text-emphasis);
}

.alert-danger {
  --brainwaveio-alert-color: var(--brainwaveio-danger-text-emphasis);
  --brainwaveio-alert-bg: var(--brainwaveio-danger-bg-subtle);
  --brainwaveio-alert-border-color: var(--brainwaveio-danger-border-subtle);
  --brainwaveio-alert-link-color: var(--brainwaveio-danger-text-emphasis);
}

.alert-light {
  --brainwaveio-alert-color: var(--brainwaveio-light-text-emphasis);
  --brainwaveio-alert-bg: var(--brainwaveio-light-bg-subtle);
  --brainwaveio-alert-border-color: var(--brainwaveio-light-border-subtle);
  --brainwaveio-alert-link-color: var(--brainwaveio-light-text-emphasis);
}

.alert-dark {
  --brainwaveio-alert-color: var(--brainwaveio-dark-text-emphasis);
  --brainwaveio-alert-bg: var(--brainwaveio-dark-bg-subtle);
  --brainwaveio-alert-border-color: var(--brainwaveio-dark-border-subtle);
  --brainwaveio-alert-link-color: var(--brainwaveio-dark-text-emphasis);
}

@-webkit-keyframes progress-bar-stripes {
  0% {
    background-position-x: 1rem;
  }
}

@keyframes progress-bar-stripes {
  0% {
    background-position-x: 1rem;
  }
}
.progress,
.progress-stacked {
  --brainwaveio-progress-height: 1rem;
  --brainwaveio-progress-font-size: 0.75rem;
  --brainwaveio-progress-bg: var(--brainwaveio-gray-200);
  --brainwaveio-progress-border-radius: var(--brainwaveio-border-radius);
  --brainwaveio-progress-box-shadow: var(--brainwaveio-box-shadow-inset);
  --brainwaveio-progress-bar-color: #fff;
  --brainwaveio-progress-bar-bg: #F74D4D;
  --brainwaveio-progress-bar-transition: width 0.6s ease;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: var(--brainwaveio-progress-height);
  overflow: hidden;
  font-size: var(--brainwaveio-progress-font-size);
  background-color: var(--brainwaveio-progress-bg);
  border-radius: var(--brainwaveio-progress-border-radius);
  -webkit-box-shadow: var(--brainwaveio-progress-box-shadow);
  box-shadow: var(--brainwaveio-progress-box-shadow);
}

.progress-bar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  overflow: hidden;
  color: var(--brainwaveio-progress-bar-color);
  text-align: center;
  white-space: nowrap;
  background-color: var(--brainwaveio-progress-bar-bg);
  -webkit-transition: var(--brainwaveio-progress-bar-transition);
  -o-transition: var(--brainwaveio-progress-bar-transition);
  transition: var(--brainwaveio-progress-bar-transition);
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}

.progress-bar-striped {
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: var(--brainwaveio-progress-height) var(--brainwaveio-progress-height);
}

.progress-stacked > .progress {
  overflow: visible;
}

.progress-stacked > .progress > .progress-bar {
  width: 100%;
}

.progress-bar-animated {
  -webkit-animation: 1s linear infinite progress-bar-stripes;
  animation: 1s linear infinite progress-bar-stripes;
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    -webkit-animation: none;
    animation: none;
  }
}

.list-group {
  --brainwaveio-list-group-color: var(--brainwaveio-gray-800);
  --brainwaveio-list-group-bg: var(--brainwaveio-list-group-bg-global);
  --brainwaveio-list-group-border-color: var(--brainwaveio-border-color);
  --brainwaveio-list-group-border-width: var(--brainwaveio-border-width);
  --brainwaveio-list-group-border-radius: var(--brainwaveio-border-radius);
  --brainwaveio-list-group-item-padding-x: 0.5rem;
  --brainwaveio-list-group-item-padding-y: 0.25rem;
  --brainwaveio-list-group-action-color: var(--brainwaveio-secondary-color);
  --brainwaveio-list-group-action-hover-color: var(--brainwaveio-gray-700);
  --brainwaveio-list-group-action-hover-bg: var(--brainwaveio-body-bg);
  --brainwaveio-list-group-action-active-color: var(--brainwaveio-body-color);
  --brainwaveio-list-group-action-active-bg: var(--brainwaveio-gray-200);
  --brainwaveio-list-group-disabled-color: var(--brainwaveio-gray-600);
  --brainwaveio-list-group-disabled-bg: var(--brainwaveio-card-cap-bg);
  --brainwaveio-list-group-active-color: #fff;
  --brainwaveio-list-group-active-bg: #F74D4D;
  --brainwaveio-list-group-active-border-color: #F74D4D;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: var(--brainwaveio-list-group-border-radius);
}

.list-group-numbered {
  list-style-type: none;
  counter-reset: section;
}
.list-group-numbered > .list-group-item::before {
  content: counters(section, ".") ". ";
  counter-increment: section;
}

.list-group-item-action {
  width: 100%;
  color: var(--brainwaveio-list-group-action-color);
  text-align: inherit;
}
.list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: var(--brainwaveio-list-group-action-hover-color);
  text-decoration: none;
  background-color: var(--brainwaveio-list-group-action-hover-bg);
}
.list-group-item-action:active {
  color: var(--brainwaveio-list-group-action-active-color);
  background-color: var(--brainwaveio-list-group-action-active-bg);
}

.list-group-item {
  position: relative;
  display: block;
  padding: var(--brainwaveio-list-group-item-padding-y) var(--brainwaveio-list-group-item-padding-x);
  color: var(--brainwaveio-list-group-color);
  background-color: var(--brainwaveio-list-group-bg);
  border: var(--brainwaveio-list-group-border-width) solid var(--brainwaveio-list-group-border-color);
}
.list-group-item:first-child {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
}
.list-group-item:last-child {
  border-bottom-right-radius: inherit;
  border-bottom-left-radius: inherit;
}
.list-group-item.disabled, .list-group-item:disabled {
  color: var(--brainwaveio-list-group-disabled-color);
  pointer-events: none;
  background-color: var(--brainwaveio-list-group-disabled-bg);
}
.list-group-item.active {
  z-index: 2;
  color: var(--brainwaveio-list-group-active-color);
  background-color: var(--brainwaveio-list-group-active-bg);
  border-color: var(--brainwaveio-list-group-active-border-color);
}
.list-group-item + .list-group-item {
  border-top-width: 0;
}
.list-group-item + .list-group-item.active {
  margin-top: calc(-1 * var(--brainwaveio-list-group-border-width));
  border-top-width: var(--brainwaveio-list-group-border-width);
}

.list-group-horizontal {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
}
.list-group-horizontal > .list-group-item:first-child:not(:last-child) {
  border-bottom-left-radius: var(--brainwaveio-list-group-border-radius);
  border-top-right-radius: 0;
}
.list-group-horizontal > .list-group-item:last-child:not(:first-child) {
  border-top-right-radius: var(--brainwaveio-list-group-border-radius);
  border-bottom-left-radius: 0;
}
.list-group-horizontal > .list-group-item.active {
  margin-top: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item {
  border-top-width: var(--brainwaveio-list-group-border-width);
  border-left-width: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item.active {
  margin-left: calc(-1 * var(--brainwaveio-list-group-border-width));
  border-left-width: var(--brainwaveio-list-group-border-width);
}

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .list-group-horizontal-sm > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--brainwaveio-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--brainwaveio-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item {
    border-top-width: var(--brainwaveio-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--brainwaveio-list-group-border-width));
    border-left-width: var(--brainwaveio-list-group-border-width);
  }
}
@media (min-width: 768px) {
  .list-group-horizontal-md {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .list-group-horizontal-md > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--brainwaveio-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--brainwaveio-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item {
    border-top-width: var(--brainwaveio-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--brainwaveio-list-group-border-width));
    border-left-width: var(--brainwaveio-list-group-border-width);
  }
}
@media (min-width: 992px) {
  .list-group-horizontal-lg {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .list-group-horizontal-lg > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--brainwaveio-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--brainwaveio-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item {
    border-top-width: var(--brainwaveio-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--brainwaveio-list-group-border-width));
    border-left-width: var(--brainwaveio-list-group-border-width);
  }
}
@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .list-group-horizontal-xl > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--brainwaveio-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--brainwaveio-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item {
    border-top-width: var(--brainwaveio-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--brainwaveio-list-group-border-width));
    border-left-width: var(--brainwaveio-list-group-border-width);
  }
}
.list-group-flush {
  border-radius: 0;
}
.list-group-flush > .list-group-item {
  border-width: 0 0 var(--brainwaveio-list-group-border-width);
}
.list-group-flush > .list-group-item:last-child {
  border-bottom-width: 0;
}

.list-group-item-primary {
  --brainwaveio-list-group-color: var(--brainwaveio-primary-text-emphasis);
  --brainwaveio-list-group-bg: var(--brainwaveio-primary-bg-subtle);
  --brainwaveio-list-group-border-color: var(--brainwaveio-primary-border-subtle);
  --brainwaveio-list-group-action-hover-color: var(--brainwaveio-emphasis-color);
  --brainwaveio-list-group-action-hover-bg: var(--brainwaveio-primary-border-subtle);
  --brainwaveio-list-group-action-active-color: var(--brainwaveio-emphasis-color);
  --brainwaveio-list-group-action-active-bg: var(--brainwaveio-primary-border-subtle);
  --brainwaveio-list-group-active-color: var(--brainwaveio-primary-bg-subtle);
  --brainwaveio-list-group-active-bg: var(--brainwaveio-primary-text-emphasis);
  --brainwaveio-list-group-active-border-color: var(--brainwaveio-primary-text-emphasis);
}

.list-group-item-secondary {
  --brainwaveio-list-group-color: var(--brainwaveio-secondary-text-emphasis);
  --brainwaveio-list-group-bg: var(--brainwaveio-secondary-bg-subtle);
  --brainwaveio-list-group-border-color: var(--brainwaveio-secondary-border-subtle);
  --brainwaveio-list-group-action-hover-color: var(--brainwaveio-emphasis-color);
  --brainwaveio-list-group-action-hover-bg: var(--brainwaveio-secondary-border-subtle);
  --brainwaveio-list-group-action-active-color: var(--brainwaveio-emphasis-color);
  --brainwaveio-list-group-action-active-bg: var(--brainwaveio-secondary-border-subtle);
  --brainwaveio-list-group-active-color: var(--brainwaveio-secondary-bg-subtle);
  --brainwaveio-list-group-active-bg: var(--brainwaveio-secondary-text-emphasis);
  --brainwaveio-list-group-active-border-color: var(--brainwaveio-secondary-text-emphasis);
}

.list-group-item-success {
  --brainwaveio-list-group-color: var(--brainwaveio-success-text-emphasis);
  --brainwaveio-list-group-bg: var(--brainwaveio-success-bg-subtle);
  --brainwaveio-list-group-border-color: var(--brainwaveio-success-border-subtle);
  --brainwaveio-list-group-action-hover-color: var(--brainwaveio-emphasis-color);
  --brainwaveio-list-group-action-hover-bg: var(--brainwaveio-success-border-subtle);
  --brainwaveio-list-group-action-active-color: var(--brainwaveio-emphasis-color);
  --brainwaveio-list-group-action-active-bg: var(--brainwaveio-success-border-subtle);
  --brainwaveio-list-group-active-color: var(--brainwaveio-success-bg-subtle);
  --brainwaveio-list-group-active-bg: var(--brainwaveio-success-text-emphasis);
  --brainwaveio-list-group-active-border-color: var(--brainwaveio-success-text-emphasis);
}

.list-group-item-info {
  --brainwaveio-list-group-color: var(--brainwaveio-info-text-emphasis);
  --brainwaveio-list-group-bg: var(--brainwaveio-info-bg-subtle);
  --brainwaveio-list-group-border-color: var(--brainwaveio-info-border-subtle);
  --brainwaveio-list-group-action-hover-color: var(--brainwaveio-emphasis-color);
  --brainwaveio-list-group-action-hover-bg: var(--brainwaveio-info-border-subtle);
  --brainwaveio-list-group-action-active-color: var(--brainwaveio-emphasis-color);
  --brainwaveio-list-group-action-active-bg: var(--brainwaveio-info-border-subtle);
  --brainwaveio-list-group-active-color: var(--brainwaveio-info-bg-subtle);
  --brainwaveio-list-group-active-bg: var(--brainwaveio-info-text-emphasis);
  --brainwaveio-list-group-active-border-color: var(--brainwaveio-info-text-emphasis);
}

.list-group-item-warning {
  --brainwaveio-list-group-color: var(--brainwaveio-warning-text-emphasis);
  --brainwaveio-list-group-bg: var(--brainwaveio-warning-bg-subtle);
  --brainwaveio-list-group-border-color: var(--brainwaveio-warning-border-subtle);
  --brainwaveio-list-group-action-hover-color: var(--brainwaveio-emphasis-color);
  --brainwaveio-list-group-action-hover-bg: var(--brainwaveio-warning-border-subtle);
  --brainwaveio-list-group-action-active-color: var(--brainwaveio-emphasis-color);
  --brainwaveio-list-group-action-active-bg: var(--brainwaveio-warning-border-subtle);
  --brainwaveio-list-group-active-color: var(--brainwaveio-warning-bg-subtle);
  --brainwaveio-list-group-active-bg: var(--brainwaveio-warning-text-emphasis);
  --brainwaveio-list-group-active-border-color: var(--brainwaveio-warning-text-emphasis);
}

.list-group-item-danger {
  --brainwaveio-list-group-color: var(--brainwaveio-danger-text-emphasis);
  --brainwaveio-list-group-bg: var(--brainwaveio-danger-bg-subtle);
  --brainwaveio-list-group-border-color: var(--brainwaveio-danger-border-subtle);
  --brainwaveio-list-group-action-hover-color: var(--brainwaveio-emphasis-color);
  --brainwaveio-list-group-action-hover-bg: var(--brainwaveio-danger-border-subtle);
  --brainwaveio-list-group-action-active-color: var(--brainwaveio-emphasis-color);
  --brainwaveio-list-group-action-active-bg: var(--brainwaveio-danger-border-subtle);
  --brainwaveio-list-group-active-color: var(--brainwaveio-danger-bg-subtle);
  --brainwaveio-list-group-active-bg: var(--brainwaveio-danger-text-emphasis);
  --brainwaveio-list-group-active-border-color: var(--brainwaveio-danger-text-emphasis);
}

.list-group-item-light {
  --brainwaveio-list-group-color: var(--brainwaveio-light-text-emphasis);
  --brainwaveio-list-group-bg: var(--brainwaveio-light-bg-subtle);
  --brainwaveio-list-group-border-color: var(--brainwaveio-light-border-subtle);
  --brainwaveio-list-group-action-hover-color: var(--brainwaveio-emphasis-color);
  --brainwaveio-list-group-action-hover-bg: var(--brainwaveio-light-border-subtle);
  --brainwaveio-list-group-action-active-color: var(--brainwaveio-emphasis-color);
  --brainwaveio-list-group-action-active-bg: var(--brainwaveio-light-border-subtle);
  --brainwaveio-list-group-active-color: var(--brainwaveio-light-bg-subtle);
  --brainwaveio-list-group-active-bg: var(--brainwaveio-light-text-emphasis);
  --brainwaveio-list-group-active-border-color: var(--brainwaveio-light-text-emphasis);
}

.list-group-item-dark {
  --brainwaveio-list-group-color: var(--brainwaveio-dark-text-emphasis);
  --brainwaveio-list-group-bg: var(--brainwaveio-dark-bg-subtle);
  --brainwaveio-list-group-border-color: var(--brainwaveio-dark-border-subtle);
  --brainwaveio-list-group-action-hover-color: var(--brainwaveio-emphasis-color);
  --brainwaveio-list-group-action-hover-bg: var(--brainwaveio-dark-border-subtle);
  --brainwaveio-list-group-action-active-color: var(--brainwaveio-emphasis-color);
  --brainwaveio-list-group-action-active-bg: var(--brainwaveio-dark-border-subtle);
  --brainwaveio-list-group-active-color: var(--brainwaveio-dark-bg-subtle);
  --brainwaveio-list-group-active-bg: var(--brainwaveio-dark-text-emphasis);
  --brainwaveio-list-group-active-border-color: var(--brainwaveio-dark-text-emphasis);
}

.btn-close {
  --brainwaveio-btn-close-color: #000;
  --brainwaveio-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="%23000"%3e%3cpath d="M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z"/%3e%3c/svg%3e");
  --brainwaveio-btn-close-opacity: 0.5;
  --brainwaveio-btn-close-hover-opacity: 0.75;
  --brainwaveio-btn-close-focus-shadow: 0 0 0 0.25rem rgba(247, 77, 77, 0.25);
  --brainwaveio-btn-close-focus-opacity: 1;
  --brainwaveio-btn-close-disabled-opacity: 0.25;
  --brainwaveio-btn-close-white-filter: invert(1) grayscale(100%) brightness(200%);
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
  width: 1em;
  height: 1em;
  padding: 0.25em 0.25em;
  color: var(--brainwaveio-btn-close-color);
  background: transparent var(--brainwaveio-btn-close-bg) center/1em auto no-repeat;
  border: 0;
  border-radius: 0.625rem;
  opacity: var(--brainwaveio-btn-close-opacity);
}
.btn-close:hover {
  color: var(--brainwaveio-btn-close-color);
  text-decoration: none;
  opacity: var(--brainwaveio-btn-close-hover-opacity);
}
.btn-close:focus {
  outline: 0;
  -webkit-box-shadow: var(--brainwaveio-btn-close-focus-shadow);
  box-shadow: var(--brainwaveio-btn-close-focus-shadow);
  opacity: var(--brainwaveio-btn-close-focus-opacity);
}
.btn-close:disabled, .btn-close.disabled {
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  opacity: var(--brainwaveio-btn-close-disabled-opacity);
}

.btn-close-white {
  -webkit-filter: var(--brainwaveio-btn-close-white-filter);
  filter: var(--brainwaveio-btn-close-white-filter);
}

[data-bs-theme=dark] .btn-close {
  -webkit-filter: var(--brainwaveio-btn-close-white-filter);
  filter: var(--brainwaveio-btn-close-white-filter);
}

.toast {
  --brainwaveio-toast-zindex: 1090;
  --brainwaveio-toast-padding-x: 0.75rem;
  --brainwaveio-toast-padding-y: 0.5rem;
  --brainwaveio-toast-spacing: 2rem;
  --brainwaveio-toast-max-width: 350px;
  --brainwaveio-toast-font-size: 0.875rem;
  --brainwaveio-toast-color: var(--brainwaveio-gray-600);
  --brainwaveio-toast-bg: var(--brainwaveio-toast-bg-global);
  --brainwaveio-toast-border-width: var(--brainwaveio-border-width);
  --brainwaveio-toast-border-color: var(--brainwaveio-border-color-translucent);
  --brainwaveio-toast-border-radius: var(--brainwaveio-border-radius);
  --brainwaveio-toast-box-shadow: var(--brainwaveio-box-shadow);
  --brainwaveio-toast-header-color: var(--brainwaveio-gray-600);
  --brainwaveio-toast-header-bg: var(--brainwaveio-toast-bg-global);
  --brainwaveio-toast-header-border-color: rgba(0, 0, 0, 0.05);
  width: var(--brainwaveio-toast-max-width);
  max-width: 100%;
  font-size: var(--brainwaveio-toast-font-size);
  color: var(--brainwaveio-toast-color);
  pointer-events: auto;
  background-color: var(--brainwaveio-toast-bg);
  background-clip: padding-box;
  border: var(--brainwaveio-toast-border-width) solid var(--brainwaveio-toast-border-color);
  -webkit-box-shadow: var(--brainwaveio-toast-box-shadow);
  box-shadow: var(--brainwaveio-toast-box-shadow);
  border-radius: var(--brainwaveio-toast-border-radius);
}
.toast.showing {
  opacity: 0;
}
.toast:not(.show) {
  display: none;
}

.toast-container {
  --brainwaveio-toast-zindex: 1090;
  position: absolute;
  z-index: var(--brainwaveio-toast-zindex);
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
  max-width: 100%;
  pointer-events: none;
}
.toast-container > :not(:last-child) {
  margin-bottom: var(--brainwaveio-toast-spacing);
}

.toast-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding: var(--brainwaveio-toast-padding-y) var(--brainwaveio-toast-padding-x);
  color: var(--brainwaveio-toast-header-color);
  background-color: var(--brainwaveio-toast-header-bg);
  background-clip: padding-box;
  border-bottom: var(--brainwaveio-toast-border-width) solid var(--brainwaveio-toast-header-border-color);
  border-top-left-radius: calc(var(--brainwaveio-toast-border-radius) - var(--brainwaveio-toast-border-width));
  border-top-right-radius: calc(var(--brainwaveio-toast-border-radius) - var(--brainwaveio-toast-border-width));
}
.toast-header .btn-close {
  margin-right: calc(-0.5 * var(--brainwaveio-toast-padding-x));
  margin-left: var(--brainwaveio-toast-padding-x);
}

.toast-body {
  padding: var(--brainwaveio-toast-padding-x);
  word-wrap: break-word;
}

.modal {
  --brainwaveio-modal-zindex: 1055;
  --brainwaveio-modal-width: 500px;
  --brainwaveio-modal-padding: 0.5rem;
  --brainwaveio-modal-margin: 0.5rem;
  --brainwaveio-modal-color: ;
  --brainwaveio-modal-bg: var(--brainwaveio-emphasis-bg);
  --brainwaveio-modal-border-color: var(--brainwaveio-border-color-translucent);
  --brainwaveio-modal-border-width: var(--brainwaveio-border-width);
  --brainwaveio-modal-border-radius: 0.75rem;
  --brainwaveio-modal-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
  --brainwaveio-modal-inner-border-radius: calc(0.75rem - (var(--brainwaveio-border-width)));
  --brainwaveio-modal-header-padding-x: 0.5rem;
  --brainwaveio-modal-header-padding-y: 0.5rem;
  --brainwaveio-modal-header-padding: 0.5rem 0.5rem;
  --brainwaveio-modal-header-border-color: var(--brainwaveio-border-color);
  --brainwaveio-modal-header-border-width: var(--brainwaveio-border-width);
  --brainwaveio-modal-title-line-height: 1.084;
  --brainwaveio-modal-footer-gap: 0.5rem;
  --brainwaveio-modal-footer-bg: ;
  --brainwaveio-modal-footer-border-color: var(--brainwaveio-border-color);
  --brainwaveio-modal-footer-border-width: var(--brainwaveio-border-width);
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--brainwaveio-modal-zindex);
  display: none;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  outline: 0;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: var(--brainwaveio-modal-margin);
  pointer-events: none;
}
.modal.fade .modal-dialog {
  -webkit-transition: -webkit-transform 0.3s ease-out;
  transition: -webkit-transform 0.3s ease-out;
  -o-transition: transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
  transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
  -webkit-transform: translate(0, -50px);
  -ms-transform: translate(0, -50px);
  transform: translate(0, -50px);
}
@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
.modal.show .modal-dialog {
  -webkit-transform: none;
  -ms-transform: none;
  transform: none;
}
.modal.modal-static .modal-dialog {
  -webkit-transform: scale(1.02);
  -ms-transform: scale(1.02);
  transform: scale(1.02);
}

.modal-dialog-scrollable {
  height: calc(100% - var(--brainwaveio-modal-margin) * 2);
}
.modal-dialog-scrollable .modal-content {
  max-height: 100%;
  overflow: hidden;
}
.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}

.modal-dialog-centered {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  min-height: calc(100% - var(--brainwaveio-modal-margin) * 2);
}

.modal-content {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  color: var(--brainwaveio-modal-color);
  pointer-events: auto;
  background-color: var(--brainwaveio-modal-bg);
  background-clip: padding-box;
  border: var(--brainwaveio-modal-border-width) solid var(--brainwaveio-modal-border-color);
  border-radius: var(--brainwaveio-modal-border-radius);
  -webkit-box-shadow: var(--brainwaveio-modal-box-shadow);
  box-shadow: var(--brainwaveio-modal-box-shadow);
  outline: 0;
}

.modal-backdrop {
  --brainwaveio-backdrop-zindex: 1050;
  --brainwaveio-backdrop-bg: #000;
  --brainwaveio-backdrop-opacity: 0.5;
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--brainwaveio-backdrop-zindex);
  width: 100vw;
  height: 100vh;
  background-color: var(--brainwaveio-backdrop-bg);
}
.modal-backdrop.fade {
  opacity: 0;
}
.modal-backdrop.show {
  opacity: var(--brainwaveio-backdrop-opacity);
}

.modal-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-negative: 0;
  flex-shrink: 0;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: var(--brainwaveio-modal-header-padding);
  border-bottom: var(--brainwaveio-modal-header-border-width) solid var(--brainwaveio-modal-header-border-color);
  border-top-left-radius: var(--brainwaveio-modal-inner-border-radius);
  border-top-right-radius: var(--brainwaveio-modal-inner-border-radius);
}
.modal-header .btn-close {
  padding: calc(var(--brainwaveio-modal-header-padding-y) * 0.5) calc(var(--brainwaveio-modal-header-padding-x) * 0.5);
  margin: calc(-0.5 * var(--brainwaveio-modal-header-padding-y)) calc(-0.5 * var(--brainwaveio-modal-header-padding-x)) calc(-0.5 * var(--brainwaveio-modal-header-padding-y)) auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: var(--brainwaveio-modal-title-line-height);
}

.modal-body {
  position: relative;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: var(--brainwaveio-modal-padding);
}

.modal-footer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-negative: 0;
  flex-shrink: 0;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding: calc(var(--brainwaveio-modal-padding) - var(--brainwaveio-modal-footer-gap) * 0.5);
  background-color: var(--brainwaveio-modal-footer-bg);
  border-top: var(--brainwaveio-modal-footer-border-width) solid var(--brainwaveio-modal-footer-border-color);
  border-bottom-right-radius: var(--brainwaveio-modal-inner-border-radius);
  border-bottom-left-radius: var(--brainwaveio-modal-inner-border-radius);
}
.modal-footer > * {
  margin: calc(var(--brainwaveio-modal-footer-gap) * 0.5);
}

@media (min-width: 576px) {
  .modal {
    --brainwaveio-modal-margin: 1.75rem;
    --brainwaveio-modal-box-shadow: 0 7px 14px 0 rgba(65, 69, 88, 0.1), 0 3px 6px 0 rgba(0, 0, 0, 0.07);
  }
  .modal-dialog {
    max-width: var(--brainwaveio-modal-width);
    margin-right: auto;
    margin-left: auto;
  }
  .modal-sm {
    --brainwaveio-modal-width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    --brainwaveio-modal-width: 800px;
  }
}
@media (min-width: 1200px) {
  .modal-xl {
    --brainwaveio-modal-width: 1140px;
  }
}
.modal-fullscreen {
  width: 100vw;
  max-width: none;
  height: 100%;
  margin: 0;
}
.modal-fullscreen .modal-content {
  height: 100%;
  border: 0;
  border-radius: 0;
}
.modal-fullscreen .modal-header,
.modal-fullscreen .modal-footer {
  border-radius: 0;
}
.modal-fullscreen .modal-body {
  overflow-y: auto;
}

@media (max-width: 575.98px) {
  .modal-fullscreen-sm-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-sm-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-header,
  .modal-fullscreen-sm-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 767.98px) {
  .modal-fullscreen-md-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-md-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-header,
  .modal-fullscreen-md-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 991.98px) {
  .modal-fullscreen-lg-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-lg-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-header,
  .modal-fullscreen-lg-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 1199.98px) {
  .modal-fullscreen-xl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-header,
  .modal-fullscreen-xl-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-body {
    overflow-y: auto;
  }
}
.tooltip {
  --brainwaveio-tooltip-zindex: 1080;
  --brainwaveio-tooltip-max-width: 200px;
  --brainwaveio-tooltip-padding-x: 0.25rem;
  --brainwaveio-tooltip-padding-y: 0.5rem;
  --brainwaveio-tooltip-margin: ;
  --brainwaveio-tooltip-font-size: 0.875rem;
  --brainwaveio-tooltip-color: #fff;
  --brainwaveio-tooltip-bg: #000;
  --brainwaveio-tooltip-border-radius: var(--brainwaveio-border-radius);
  --brainwaveio-tooltip-opacity: 0.9;
  --brainwaveio-tooltip-arrow-width: 0.8rem;
  --brainwaveio-tooltip-arrow-height: 0.4rem;
  z-index: var(--brainwaveio-tooltip-zindex);
  display: block;
  margin: var(--brainwaveio-tooltip-margin);
  font-family: "Figtree", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-style: normal;
  font-weight: 400;
  line-height: 1.084;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: var(--brainwaveio-tooltip-font-size);
  word-wrap: break-word;
  opacity: 0;
}
.tooltip.show {
  opacity: var(--brainwaveio-tooltip-opacity);
}
.tooltip .tooltip-arrow {
  display: block;
  width: var(--brainwaveio-tooltip-arrow-width);
  height: var(--brainwaveio-tooltip-arrow-height);
}
.tooltip .tooltip-arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow {
  bottom: calc(-1 * var(--brainwaveio-tooltip-arrow-height));
}
.bs-tooltip-top .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before {
  top: -1px;
  border-width: var(--brainwaveio-tooltip-arrow-height) calc(var(--brainwaveio-tooltip-arrow-width) * 0.5) 0;
  border-top-color: var(--brainwaveio-tooltip-bg);
}

/* rtl:begin:ignore */
.bs-tooltip-end .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow {
  left: calc(-1 * var(--brainwaveio-tooltip-arrow-height));
  width: var(--brainwaveio-tooltip-arrow-height);
  height: var(--brainwaveio-tooltip-arrow-width);
}
.bs-tooltip-end .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before {
  right: -1px;
  border-width: calc(var(--brainwaveio-tooltip-arrow-width) * 0.5) var(--brainwaveio-tooltip-arrow-height) calc(var(--brainwaveio-tooltip-arrow-width) * 0.5) 0;
  border-right-color: var(--brainwaveio-tooltip-bg);
}

/* rtl:end:ignore */
.bs-tooltip-bottom .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow {
  top: calc(-1 * var(--brainwaveio-tooltip-arrow-height));
}
.bs-tooltip-bottom .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before {
  bottom: -1px;
  border-width: 0 calc(var(--brainwaveio-tooltip-arrow-width) * 0.5) var(--brainwaveio-tooltip-arrow-height);
  border-bottom-color: var(--brainwaveio-tooltip-bg);
}

/* rtl:begin:ignore */
.bs-tooltip-start .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow {
  right: calc(-1 * var(--brainwaveio-tooltip-arrow-height));
  width: var(--brainwaveio-tooltip-arrow-height);
  height: var(--brainwaveio-tooltip-arrow-width);
}
.bs-tooltip-start .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before {
  left: -1px;
  border-width: calc(var(--brainwaveio-tooltip-arrow-width) * 0.5) 0 calc(var(--brainwaveio-tooltip-arrow-width) * 0.5) var(--brainwaveio-tooltip-arrow-height);
  border-left-color: var(--brainwaveio-tooltip-bg);
}

/* rtl:end:ignore */
.tooltip-inner {
  max-width: var(--brainwaveio-tooltip-max-width);
  padding: var(--brainwaveio-tooltip-padding-y) var(--brainwaveio-tooltip-padding-x);
  color: var(--brainwaveio-tooltip-color);
  text-align: center;
  background-color: var(--brainwaveio-tooltip-bg);
  border-radius: var(--brainwaveio-tooltip-border-radius);
}

.popover {
  --brainwaveio-popover-zindex: 1070;
  --brainwaveio-popover-max-width: 276px;
  --brainwaveio-popover-font-size: 0.875rem;
  --brainwaveio-popover-bg: var(--brainwaveio-quaternary-bg);
  --brainwaveio-popover-border-width: var(--brainwaveio-border-width);
  --brainwaveio-popover-border-color: rgba(var(--brainwaveio-emphasis-color-rgb), 0.2);
  --brainwaveio-popover-border-radius: var(--brainwaveio-border-radius-lg);
  --brainwaveio-popover-inner-border-radius: calc(var(--brainwaveio-border-radius-lg) - var(--brainwaveio-border-width));
  --brainwaveio-popover-box-shadow: var(--brainwaveio-box-shadow);
  --brainwaveio-popover-header-padding-x: 0.5rem;
  --brainwaveio-popover-header-padding-y: 0.5rem;
  --brainwaveio-popover-header-font-size: 1rem;
  --brainwaveio-popover-header-color: var(--brainwaveio-gray-1100);
  --brainwaveio-popover-header-bg: var(--brainwaveio-popover-header-bg-global);
  --brainwaveio-popover-body-padding-x: 0.5rem;
  --brainwaveio-popover-body-padding-y: 0.5rem;
  --brainwaveio-popover-body-color: #4d5969;
  --brainwaveio-popover-arrow-width: 1rem;
  --brainwaveio-popover-arrow-height: 0.5rem;
  --brainwaveio-popover-arrow-border: var(--brainwaveio-popover-border-color);
  z-index: var(--brainwaveio-popover-zindex);
  display: block;
  max-width: var(--brainwaveio-popover-max-width);
  font-family: "Figtree", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-style: normal;
  font-weight: 400;
  line-height: 1.084;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: var(--brainwaveio-popover-font-size);
  word-wrap: break-word;
  background-color: var(--brainwaveio-popover-bg);
  background-clip: padding-box;
  border: var(--brainwaveio-popover-border-width) solid var(--brainwaveio-popover-border-color);
  border-radius: var(--brainwaveio-popover-border-radius);
  -webkit-box-shadow: var(--brainwaveio-popover-box-shadow);
  box-shadow: var(--brainwaveio-popover-box-shadow);
}
.popover .popover-arrow {
  display: block;
  width: var(--brainwaveio-popover-arrow-width);
  height: var(--brainwaveio-popover-arrow-height);
}
.popover .popover-arrow::before, .popover .popover-arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
  border-width: 0;
}

.bs-popover-top > .popover-arrow, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow {
  bottom: calc(-1 * (var(--brainwaveio-popover-arrow-height)) - var(--brainwaveio-popover-border-width));
}
.bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::before, .bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::after {
  border-width: var(--brainwaveio-popover-arrow-height) calc(var(--brainwaveio-popover-arrow-width) * 0.5) 0;
}
.bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::before {
  bottom: 0;
  border-top-color: var(--brainwaveio-popover-arrow-border);
}
.bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::after {
  bottom: var(--brainwaveio-popover-border-width);
  border-top-color: var(--brainwaveio-popover-bg);
}

/* rtl:begin:ignore */
.bs-popover-end > .popover-arrow, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow {
  left: calc(-1 * (var(--brainwaveio-popover-arrow-height)) - var(--brainwaveio-popover-border-width));
  width: var(--brainwaveio-popover-arrow-height);
  height: var(--brainwaveio-popover-arrow-width);
}
.bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::before, .bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::after {
  border-width: calc(var(--brainwaveio-popover-arrow-width) * 0.5) var(--brainwaveio-popover-arrow-height) calc(var(--brainwaveio-popover-arrow-width) * 0.5) 0;
}
.bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::before {
  left: 0;
  border-right-color: var(--brainwaveio-popover-arrow-border);
}
.bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::after {
  left: var(--brainwaveio-popover-border-width);
  border-right-color: var(--brainwaveio-popover-bg);
}

/* rtl:end:ignore */
.bs-popover-bottom > .popover-arrow, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow {
  top: calc(-1 * (var(--brainwaveio-popover-arrow-height)) - var(--brainwaveio-popover-border-width));
}
.bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::before, .bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::after {
  border-width: 0 calc(var(--brainwaveio-popover-arrow-width) * 0.5) var(--brainwaveio-popover-arrow-height);
}
.bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::before {
  top: 0;
  border-bottom-color: var(--brainwaveio-popover-arrow-border);
}
.bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::after {
  top: var(--brainwaveio-popover-border-width);
  border-bottom-color: var(--brainwaveio-popover-bg);
}
.bs-popover-bottom .popover-header::before, .bs-popover-auto[data-popper-placement^=bottom] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: var(--brainwaveio-popover-arrow-width);
  margin-left: calc(-0.5 * var(--brainwaveio-popover-arrow-width));
  content: "";
  border-bottom: var(--brainwaveio-popover-border-width) solid var(--brainwaveio-popover-header-bg);
}

/* rtl:begin:ignore */
.bs-popover-start > .popover-arrow, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow {
  right: calc(-1 * (var(--brainwaveio-popover-arrow-height)) - var(--brainwaveio-popover-border-width));
  width: var(--brainwaveio-popover-arrow-height);
  height: var(--brainwaveio-popover-arrow-width);
}
.bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::before, .bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::after {
  border-width: calc(var(--brainwaveio-popover-arrow-width) * 0.5) 0 calc(var(--brainwaveio-popover-arrow-width) * 0.5) var(--brainwaveio-popover-arrow-height);
}
.bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::before {
  right: 0;
  border-left-color: var(--brainwaveio-popover-arrow-border);
}
.bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::after {
  right: var(--brainwaveio-popover-border-width);
  border-left-color: var(--brainwaveio-popover-bg);
}

/* rtl:end:ignore */
.popover-header {
  padding: var(--brainwaveio-popover-header-padding-y) var(--brainwaveio-popover-header-padding-x);
  margin-bottom: 0;
  font-size: var(--brainwaveio-popover-header-font-size);
  color: var(--brainwaveio-popover-header-color);
  background-color: var(--brainwaveio-popover-header-bg);
  border-bottom: var(--brainwaveio-popover-border-width) solid var(--brainwaveio-popover-border-color);
  border-top-left-radius: var(--brainwaveio-popover-inner-border-radius);
  border-top-right-radius: var(--brainwaveio-popover-inner-border-radius);
}
.popover-header:empty {
  display: none;
}

.popover-body {
  padding: var(--brainwaveio-popover-body-padding-y) var(--brainwaveio-popover-body-padding-x);
  color: var(--brainwaveio-popover-body-color);
}

.carousel {
  position: relative;
}

.carousel.pointer-event {
  -ms-touch-action: pan-y;
  touch-action: pan-y;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: -webkit-transform 0.8s ease-in-out;
  transition: -webkit-transform 0.8s ease-in-out;
  -o-transition: transform 0.8s ease-in-out;
  transition: transform 0.8s ease-in-out;
  transition: transform 0.8s ease-in-out, -webkit-transform 0.8s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

.carousel-item-next:not(.carousel-item-start),
.active.carousel-item-end {
  -webkit-transform: translateX(100%);
  -ms-transform: translateX(100%);
  transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-end),
.active.carousel-item-start {
  -webkit-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  transform: translateX(-100%);
}

.carousel-fade .carousel-item {
  opacity: 0;
  -webkit-transition-property: opacity;
  -o-transition-property: opacity;
  transition-property: opacity;
  -webkit-transform: none;
  -ms-transform: none;
  transform: none;
}
.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-start,
.carousel-fade .carousel-item-prev.carousel-item-end {
  z-index: 1;
  opacity: 1;
}
.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
  z-index: 0;
  opacity: 0;
  -webkit-transition: opacity 0s 0.8s;
  -o-transition: opacity 0s 0.8s;
  transition: opacity 0s 0.8s;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-fade .active.carousel-item-start,
  .carousel-fade .active.carousel-item-end {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 15%;
  padding: 0;
  color: #fff;
  text-align: center;
  background: none;
  border: 0;
  opacity: 0.5;
  -webkit-transition: opacity 0.15s ease;
  -o-transition: opacity 0.15s ease;
  transition: opacity 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-control-prev,
  .carousel-control-next {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 100% 100%;
}

/* rtl:options: {
  "autoRename": true,
  "stringMap":[ {
    "name"    : "prev-next",
    "search"  : "prev",
    "replace" : "next"
  } ]
} */
.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="%23fff"%3e%3cpath d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="%23fff"%3e%3cpath d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/%3e%3c/svg%3e");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  padding: 0;
  margin-right: 15%;
  margin-bottom: 1rem;
  margin-left: 15%;
}
.carousel-indicators [data-bs-target] {
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
  -webkit-box-flex: 0;
  -ms-flex: 0 1 auto;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  padding: 0;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: 0.5;
  -webkit-transition: opacity 0.6s ease;
  -o-transition: opacity 0.6s ease;
  transition: opacity 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-indicators [data-bs-target] {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
.carousel-indicators .active {
  opacity: 1;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 1.25rem;
  left: 15%;
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  color: #fff;
  text-align: center;
}

.carousel-dark .carousel-control-prev-icon,
.carousel-dark .carousel-control-next-icon {
  -webkit-filter: invert(1) grayscale(100);
  filter: invert(1) grayscale(100);
}
.carousel-dark .carousel-indicators [data-bs-target] {
  background-color: #000;
}
.carousel-dark .carousel-caption {
  color: #000;
}

[data-bs-theme=dark] .carousel .carousel-control-prev-icon,
[data-bs-theme=dark] .carousel .carousel-control-next-icon, [data-bs-theme=dark].carousel .carousel-control-prev-icon,
[data-bs-theme=dark].carousel .carousel-control-next-icon {
  -webkit-filter: invert(1) grayscale(100);
  filter: invert(1) grayscale(100);
}
[data-bs-theme=dark] .carousel .carousel-indicators [data-bs-target], [data-bs-theme=dark].carousel .carousel-indicators [data-bs-target] {
  background-color: #000;
}
[data-bs-theme=dark] .carousel .carousel-caption, [data-bs-theme=dark].carousel .carousel-caption {
  color: #000;
}

.spinner-grow,
.spinner-border {
  display: inline-block;
  width: var(--brainwaveio-spinner-width);
  height: var(--brainwaveio-spinner-height);
  vertical-align: var(--brainwaveio-spinner-vertical-align);
  border-radius: 50%;
  -webkit-animation: var(--brainwaveio-spinner-animation-speed) linear infinite var(--brainwaveio-spinner-animation-name);
  animation: var(--brainwaveio-spinner-animation-speed) linear infinite var(--brainwaveio-spinner-animation-name);
}

@-webkit-keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg) /* rtl:ignore */;
    transform: rotate(360deg) /* rtl:ignore */;
  }
}

@keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg) /* rtl:ignore */;
    transform: rotate(360deg) /* rtl:ignore */;
  }
}
.spinner-border {
  --brainwaveio-spinner-width: 2rem;
  --brainwaveio-spinner-height: 2rem;
  --brainwaveio-spinner-vertical-align: -0.125em;
  --brainwaveio-spinner-border-width: 0.25em;
  --brainwaveio-spinner-animation-speed: 0.75s;
  --brainwaveio-spinner-animation-name: spinner-border;
  border: var(--brainwaveio-spinner-border-width) solid currentcolor;
  border-right-color: transparent;
}

.spinner-border-sm {
  --brainwaveio-spinner-width: 1.35rem;
  --brainwaveio-spinner-height: 1.35rem;
  --brainwaveio-spinner-border-width: 0.2em;
}

@-webkit-keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  50% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  50% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
.spinner-grow {
  --brainwaveio-spinner-width: 2rem;
  --brainwaveio-spinner-height: 2rem;
  --brainwaveio-spinner-vertical-align: -0.125em;
  --brainwaveio-spinner-animation-speed: 0.75s;
  --brainwaveio-spinner-animation-name: spinner-grow;
  background-color: currentcolor;
  opacity: 0;
}

.spinner-grow-sm {
  --brainwaveio-spinner-width: 1.35rem;
  --brainwaveio-spinner-height: 1.35rem;
}

@media (prefers-reduced-motion: reduce) {
  .spinner-border,
  .spinner-grow {
    --brainwaveio-spinner-animation-speed: 1.5s;
  }
}
.offcanvas, .offcanvas-xl, .offcanvas-lg, .offcanvas-md, .offcanvas-sm {
  --brainwaveio-offcanvas-zindex: 1045;
  --brainwaveio-offcanvas-width: 400px;
  --brainwaveio-offcanvas-height: 30vh;
  --brainwaveio-offcanvas-padding-x: 0.5rem;
  --brainwaveio-offcanvas-padding-y: 0.5rem;
  --brainwaveio-offcanvas-color: var(--brainwaveio-body-color);
  --brainwaveio-offcanvas-bg: var(--brainwaveio-quaternary-bg);
  --brainwaveio-offcanvas-border-width: var(--brainwaveio-border-width);
  --brainwaveio-offcanvas-border-color: var(--brainwaveio-border-color-translucent);
  --brainwaveio-offcanvas-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
  --brainwaveio-offcanvas-transition: transform 0.3s ease-in-out;
  --brainwaveio-offcanvas-title-line-height: 1.084;
}

@media (max-width: 575.98px) {
  .offcanvas-sm {
    position: fixed;
    bottom: 0;
    z-index: var(--brainwaveio-offcanvas-zindex);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    max-width: 100%;
    color: var(--brainwaveio-offcanvas-color);
    visibility: hidden;
    background-color: var(--brainwaveio-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    -webkit-box-shadow: var(--brainwaveio-offcanvas-box-shadow);
    box-shadow: var(--brainwaveio-offcanvas-box-shadow);
    -webkit-transition: var(--brainwaveio-offcanvas-transition);
    -o-transition: var(--brainwaveio-offcanvas-transition);
    transition: var(--brainwaveio-offcanvas-transition);
  }
}
@media (max-width: 575.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-sm {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
@media (max-width: 575.98px) {
  .offcanvas-sm.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--brainwaveio-offcanvas-width);
    border-right: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
    -webkit-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    transform: translateX(-100%);
  }
  .offcanvas-sm.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--brainwaveio-offcanvas-width);
    border-left: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
    -webkit-transform: translateX(100%);
    -ms-transform: translateX(100%);
    transform: translateX(100%);
  }
  .offcanvas-sm.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--brainwaveio-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
    -webkit-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    transform: translateY(-100%);
  }
  .offcanvas-sm.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--brainwaveio-offcanvas-height);
    max-height: 100%;
    border-top: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
    -webkit-transform: translateY(100%);
    -ms-transform: translateY(100%);
    transform: translateY(100%);
  }
  .offcanvas-sm.showing, .offcanvas-sm.show:not(.hiding) {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
  }
  .offcanvas-sm.showing, .offcanvas-sm.hiding, .offcanvas-sm.show {
    visibility: visible;
  }
}
@media (min-width: 576px) {
  .offcanvas-sm {
    --brainwaveio-offcanvas-height: auto;
    --brainwaveio-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-sm .offcanvas-header {
    display: none;
  }
  .offcanvas-sm .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}

@media (max-width: 767.98px) {
  .offcanvas-md {
    position: fixed;
    bottom: 0;
    z-index: var(--brainwaveio-offcanvas-zindex);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    max-width: 100%;
    color: var(--brainwaveio-offcanvas-color);
    visibility: hidden;
    background-color: var(--brainwaveio-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    -webkit-box-shadow: var(--brainwaveio-offcanvas-box-shadow);
    box-shadow: var(--brainwaveio-offcanvas-box-shadow);
    -webkit-transition: var(--brainwaveio-offcanvas-transition);
    -o-transition: var(--brainwaveio-offcanvas-transition);
    transition: var(--brainwaveio-offcanvas-transition);
  }
}
@media (max-width: 767.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-md {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
@media (max-width: 767.98px) {
  .offcanvas-md.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--brainwaveio-offcanvas-width);
    border-right: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
    -webkit-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    transform: translateX(-100%);
  }
  .offcanvas-md.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--brainwaveio-offcanvas-width);
    border-left: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
    -webkit-transform: translateX(100%);
    -ms-transform: translateX(100%);
    transform: translateX(100%);
  }
  .offcanvas-md.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--brainwaveio-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
    -webkit-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    transform: translateY(-100%);
  }
  .offcanvas-md.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--brainwaveio-offcanvas-height);
    max-height: 100%;
    border-top: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
    -webkit-transform: translateY(100%);
    -ms-transform: translateY(100%);
    transform: translateY(100%);
  }
  .offcanvas-md.showing, .offcanvas-md.show:not(.hiding) {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
  }
  .offcanvas-md.showing, .offcanvas-md.hiding, .offcanvas-md.show {
    visibility: visible;
  }
}
@media (min-width: 768px) {
  .offcanvas-md {
    --brainwaveio-offcanvas-height: auto;
    --brainwaveio-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-md .offcanvas-header {
    display: none;
  }
  .offcanvas-md .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}

@media (max-width: 991.98px) {
  .offcanvas-lg {
    position: fixed;
    bottom: 0;
    z-index: var(--brainwaveio-offcanvas-zindex);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    max-width: 100%;
    color: var(--brainwaveio-offcanvas-color);
    visibility: hidden;
    background-color: var(--brainwaveio-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    -webkit-box-shadow: var(--brainwaveio-offcanvas-box-shadow);
    box-shadow: var(--brainwaveio-offcanvas-box-shadow);
    -webkit-transition: var(--brainwaveio-offcanvas-transition);
    -o-transition: var(--brainwaveio-offcanvas-transition);
    transition: var(--brainwaveio-offcanvas-transition);
  }
}
@media (max-width: 991.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-lg {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
@media (max-width: 991.98px) {
  .offcanvas-lg.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--brainwaveio-offcanvas-width);
    border-right: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
    -webkit-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    transform: translateX(-100%);
  }
  .offcanvas-lg.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--brainwaveio-offcanvas-width);
    border-left: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
    -webkit-transform: translateX(100%);
    -ms-transform: translateX(100%);
    transform: translateX(100%);
  }
  .offcanvas-lg.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--brainwaveio-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
    -webkit-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    transform: translateY(-100%);
  }
  .offcanvas-lg.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--brainwaveio-offcanvas-height);
    max-height: 100%;
    border-top: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
    -webkit-transform: translateY(100%);
    -ms-transform: translateY(100%);
    transform: translateY(100%);
  }
  .offcanvas-lg.showing, .offcanvas-lg.show:not(.hiding) {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
  }
  .offcanvas-lg.showing, .offcanvas-lg.hiding, .offcanvas-lg.show {
    visibility: visible;
  }
}
@media (min-width: 992px) {
  .offcanvas-lg {
    --brainwaveio-offcanvas-height: auto;
    --brainwaveio-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-lg .offcanvas-header {
    display: none;
  }
  .offcanvas-lg .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}

@media (max-width: 1199.98px) {
  .offcanvas-xl {
    position: fixed;
    bottom: 0;
    z-index: var(--brainwaveio-offcanvas-zindex);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    max-width: 100%;
    color: var(--brainwaveio-offcanvas-color);
    visibility: hidden;
    background-color: var(--brainwaveio-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    -webkit-box-shadow: var(--brainwaveio-offcanvas-box-shadow);
    box-shadow: var(--brainwaveio-offcanvas-box-shadow);
    -webkit-transition: var(--brainwaveio-offcanvas-transition);
    -o-transition: var(--brainwaveio-offcanvas-transition);
    transition: var(--brainwaveio-offcanvas-transition);
  }
}
@media (max-width: 1199.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-xl {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
@media (max-width: 1199.98px) {
  .offcanvas-xl.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--brainwaveio-offcanvas-width);
    border-right: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
    -webkit-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    transform: translateX(-100%);
  }
  .offcanvas-xl.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--brainwaveio-offcanvas-width);
    border-left: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
    -webkit-transform: translateX(100%);
    -ms-transform: translateX(100%);
    transform: translateX(100%);
  }
  .offcanvas-xl.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--brainwaveio-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
    -webkit-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    transform: translateY(-100%);
  }
  .offcanvas-xl.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--brainwaveio-offcanvas-height);
    max-height: 100%;
    border-top: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
    -webkit-transform: translateY(100%);
    -ms-transform: translateY(100%);
    transform: translateY(100%);
  }
  .offcanvas-xl.showing, .offcanvas-xl.show:not(.hiding) {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
  }
  .offcanvas-xl.showing, .offcanvas-xl.hiding, .offcanvas-xl.show {
    visibility: visible;
  }
}
@media (min-width: 1200px) {
  .offcanvas-xl {
    --brainwaveio-offcanvas-height: auto;
    --brainwaveio-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-xl .offcanvas-header {
    display: none;
  }
  .offcanvas-xl .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}

.offcanvas {
  position: fixed;
  bottom: 0;
  z-index: var(--brainwaveio-offcanvas-zindex);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  max-width: 100%;
  color: var(--brainwaveio-offcanvas-color);
  visibility: hidden;
  background-color: var(--brainwaveio-offcanvas-bg);
  background-clip: padding-box;
  outline: 0;
  -webkit-box-shadow: var(--brainwaveio-offcanvas-box-shadow);
  box-shadow: var(--brainwaveio-offcanvas-box-shadow);
  -webkit-transition: var(--brainwaveio-offcanvas-transition);
  -o-transition: var(--brainwaveio-offcanvas-transition);
  transition: var(--brainwaveio-offcanvas-transition);
}
@media (prefers-reduced-motion: reduce) {
  .offcanvas {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}
.offcanvas.offcanvas-start {
  top: 0;
  left: 0;
  width: var(--brainwaveio-offcanvas-width);
  border-right: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
  -webkit-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  transform: translateX(-100%);
}
.offcanvas.offcanvas-end {
  top: 0;
  right: 0;
  width: var(--brainwaveio-offcanvas-width);
  border-left: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
  -webkit-transform: translateX(100%);
  -ms-transform: translateX(100%);
  transform: translateX(100%);
}
.offcanvas.offcanvas-top {
  top: 0;
  right: 0;
  left: 0;
  height: var(--brainwaveio-offcanvas-height);
  max-height: 100%;
  border-bottom: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
  -webkit-transform: translateY(-100%);
  -ms-transform: translateY(-100%);
  transform: translateY(-100%);
}
.offcanvas.offcanvas-bottom {
  right: 0;
  left: 0;
  height: var(--brainwaveio-offcanvas-height);
  max-height: 100%;
  border-top: var(--brainwaveio-offcanvas-border-width) solid var(--brainwaveio-offcanvas-border-color);
  -webkit-transform: translateY(100%);
  -ms-transform: translateY(100%);
  transform: translateY(100%);
}
.offcanvas.showing, .offcanvas.show:not(.hiding) {
  -webkit-transform: none;
  -ms-transform: none;
  transform: none;
}
.offcanvas.showing, .offcanvas.hiding, .offcanvas.show {
  visibility: visible;
}

.offcanvas-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}
.offcanvas-backdrop.fade {
  opacity: 0;
}
.offcanvas-backdrop.show {
  opacity: 0.5;
}

.offcanvas-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: var(--brainwaveio-offcanvas-padding-y) var(--brainwaveio-offcanvas-padding-x);
}
.offcanvas-header .btn-close {
  padding: calc(var(--brainwaveio-offcanvas-padding-y) * 0.5) calc(var(--brainwaveio-offcanvas-padding-x) * 0.5);
  margin-top: calc(-0.5 * var(--brainwaveio-offcanvas-padding-y));
  margin-right: calc(-0.5 * var(--brainwaveio-offcanvas-padding-x));
  margin-bottom: calc(-0.5 * var(--brainwaveio-offcanvas-padding-y));
}

.offcanvas-title {
  margin-bottom: 0;
  line-height: var(--brainwaveio-offcanvas-title-line-height);
}

.offcanvas-body {
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  padding: var(--brainwaveio-offcanvas-padding-y) var(--brainwaveio-offcanvas-padding-x);
  overflow-y: auto;
}

.placeholder {
  display: inline-block;
  min-height: 1em;
  vertical-align: middle;
  cursor: wait;
  background-color: currentcolor;
  opacity: 0.5;
}
.placeholder.btn::before {
  display: inline-block;
  content: "";
}

.placeholder-xs {
  min-height: 0.6em;
}

.placeholder-sm {
  min-height: 0.8em;
}

.placeholder-lg {
  min-height: 1.2em;
}

.placeholder-glow .placeholder {
  -webkit-animation: placeholder-glow 2s ease-in-out infinite;
  animation: placeholder-glow 2s ease-in-out infinite;
}

@-webkit-keyframes placeholder-glow {
  50% {
    opacity: 0.2;
  }
}

@keyframes placeholder-glow {
  50% {
    opacity: 0.2;
  }
}
.placeholder-wave {
  -webkit-mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
  mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
  -webkit-mask-size: 200% 100%;
  mask-size: 200% 100%;
  -webkit-animation: placeholder-wave 2s linear infinite;
  animation: placeholder-wave 2s linear infinite;
}

@-webkit-keyframes placeholder-wave {
  100% {
    -webkit-mask-position: -200% 0%;
    mask-position: -200% 0%;
  }
}

@keyframes placeholder-wave {
  100% {
    -webkit-mask-position: -200% 0%;
    mask-position: -200% 0%;
  }
}
.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.text-bg-primary {
  color: #fff !important;
  background-color: RGBA(var(--brainwaveio-primary-rgb), var(--brainwaveio-bg-opacity, 1)) !important;
}

.text-bg-secondary {
  color: #fff !important;
  background-color: RGBA(var(--brainwaveio-secondary-rgb), var(--brainwaveio-bg-opacity, 1)) !important;
}

.text-bg-success {
  color: #4d5969 !important;
  background-color: RGBA(var(--brainwaveio-success-rgb), var(--brainwaveio-bg-opacity, 1)) !important;
}

.text-bg-info {
  color: #fff !important;
  background-color: RGBA(var(--brainwaveio-info-rgb), var(--brainwaveio-bg-opacity, 1)) !important;
}

.text-bg-warning {
  color: #4d5969 !important;
  background-color: RGBA(var(--brainwaveio-warning-rgb), var(--brainwaveio-bg-opacity, 1)) !important;
}

.text-bg-danger {
  color: #fff !important;
  background-color: RGBA(var(--brainwaveio-danger-rgb), var(--brainwaveio-bg-opacity, 1)) !important;
}

.text-bg-light {
  color: #4d5969 !important;
  background-color: RGBA(var(--brainwaveio-light-rgb), var(--brainwaveio-bg-opacity, 1)) !important;
}

.text-bg-dark {
  color: #fff !important;
  background-color: RGBA(var(--brainwaveio-dark-rgb), var(--brainwaveio-bg-opacity, 1)) !important;
}

.link-primary {
  color: RGBA(var(--brainwaveio-primary-rgb), var(--brainwaveio-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-primary-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--brainwaveio-primary-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
}
.link-primary:hover, .link-primary:focus {
  color: RGBA(198, 62, 62, var(--brainwaveio-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(198, 62, 62, var(--brainwaveio-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(198, 62, 62, var(--brainwaveio-link-underline-opacity, 1)) !important;
}

.link-secondary {
  color: RGBA(var(--brainwaveio-secondary-rgb), var(--brainwaveio-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-secondary-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--brainwaveio-secondary-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
}
.link-secondary:hover, .link-secondary:focus {
  color: RGBA(37, 38, 41, var(--brainwaveio-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(37, 38, 41, var(--brainwaveio-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(37, 38, 41, var(--brainwaveio-link-underline-opacity, 1)) !important;
}

.link-success {
  color: RGBA(var(--brainwaveio-success-rgb), var(--brainwaveio-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-success-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--brainwaveio-success-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
}
.link-success:hover, .link-success:focus {
  color: RGBA(134, 221, 157, var(--brainwaveio-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(134, 221, 157, var(--brainwaveio-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(134, 221, 157, var(--brainwaveio-link-underline-opacity, 1)) !important;
}

.link-info {
  color: RGBA(var(--brainwaveio-info-rgb), var(--brainwaveio-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-info-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--brainwaveio-info-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
}
.link-info:hover, .link-info:focus {
  color: RGBA(57, 47, 192, var(--brainwaveio-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(57, 47, 192, var(--brainwaveio-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(57, 47, 192, var(--brainwaveio-link-underline-opacity, 1)) !important;
}

.link-warning {
  color: RGBA(var(--brainwaveio-warning-rgb), var(--brainwaveio-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-warning-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--brainwaveio-warning-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
}
.link-warning:hover, .link-warning:focus {
  color: RGBA(255, 225, 167, var(--brainwaveio-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(255, 225, 167, var(--brainwaveio-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(255, 225, 167, var(--brainwaveio-link-underline-opacity, 1)) !important;
}

.link-danger {
  color: RGBA(var(--brainwaveio-danger-rgb), var(--brainwaveio-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-danger-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--brainwaveio-danger-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
}
.link-danger:hover, .link-danger:focus {
  color: RGBA(198, 22, 22, var(--brainwaveio-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(198, 22, 22, var(--brainwaveio-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(198, 22, 22, var(--brainwaveio-link-underline-opacity, 1)) !important;
}

.link-light {
  color: RGBA(var(--brainwaveio-light-rgb), var(--brainwaveio-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-light-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--brainwaveio-light-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
}
.link-light:hover, .link-light:focus {
  color: RGBA(250, 251, 253, var(--brainwaveio-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(250, 251, 253, var(--brainwaveio-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(250, 251, 253, var(--brainwaveio-link-underline-opacity, 1)) !important;
}

.link-dark {
  color: RGBA(var(--brainwaveio-dark-rgb), var(--brainwaveio-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-dark-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--brainwaveio-dark-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
}
.link-dark:hover, .link-dark:focus {
  color: RGBA(37, 38, 41, var(--brainwaveio-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(37, 38, 41, var(--brainwaveio-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(37, 38, 41, var(--brainwaveio-link-underline-opacity, 1)) !important;
}

.link-body-emphasis {
  color: RGBA(var(--brainwaveio-emphasis-color-rgb), var(--brainwaveio-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-emphasis-color-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--brainwaveio-emphasis-color-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
}
.link-body-emphasis:hover, .link-body-emphasis:focus {
  color: RGBA(var(--brainwaveio-emphasis-color-rgb), var(--brainwaveio-link-opacity, 0.75)) !important;
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-emphasis-color-rgb), var(--brainwaveio-link-underline-opacity, 0.75)) !important;
  text-decoration-color: RGBA(var(--brainwaveio-emphasis-color-rgb), var(--brainwaveio-link-underline-opacity, 0.75)) !important;
}

.focus-ring:focus {
  outline: 0;
  -webkit-box-shadow: var(--brainwaveio-focus-ring-x, 0) var(--brainwaveio-focus-ring-y, 0) var(--brainwaveio-focus-ring-blur, 0) var(--brainwaveio-focus-ring-width) var(--brainwaveio-focus-ring-color);
  box-shadow: var(--brainwaveio-focus-ring-x, 0) var(--brainwaveio-focus-ring-y, 0) var(--brainwaveio-focus-ring-blur, 0) var(--brainwaveio-focus-ring-width) var(--brainwaveio-focus-ring-color);
}

.icon-link {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  gap: 0.375rem;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-text-decoration-color: rgba(var(--brainwaveio-link-color-rgb), var(--brainwaveio-link-opacity, 0.5));
  text-decoration-color: rgba(var(--brainwaveio-link-color-rgb), var(--brainwaveio-link-opacity, 0.5));
  text-underline-offset: 0.25em;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.icon-link > .bi {
  -ms-flex-negative: 0;
  flex-shrink: 0;
  width: 1em;
  height: 1em;
  fill: currentcolor;
  -webkit-transition: 0.2s ease-in-out transform;
  -o-transition: 0.2s ease-in-out transform;
  transition: 0.2s ease-in-out transform;
}
@media (prefers-reduced-motion: reduce) {
  .icon-link > .bi {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}

.icon-link-hover:hover > .bi, .icon-link-hover:focus-visible > .bi {
  -webkit-transform: var(--brainwaveio-icon-link-transform, translate3d(0.25em, 0, 0));
  transform: var(--brainwaveio-icon-link-transform, translate3d(0.25em, 0, 0));
}

.ratio {
  position: relative;
  width: 100%;
}
.ratio::before {
  display: block;
  padding-top: var(--brainwaveio-aspect-ratio);
  content: "";
}
.ratio > * {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.ratio-1x1 {
  --brainwaveio-aspect-ratio: 100%;
}

.ratio-4x3 {
  --brainwaveio-aspect-ratio: 75%;
}

.ratio-16x9 {
  --brainwaveio-aspect-ratio: 56.25%;
}

.ratio-21x9 {
  --brainwaveio-aspect-ratio: 42.8571428571%;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

.sticky-top {
  position: sticky;
  top: 0;
  z-index: 1015;
}

.sticky-bottom {
  position: sticky;
  bottom: 0;
  z-index: 1015;
}

@media (min-width: 576px) {
  .sticky-sm-top {
    position: sticky;
    top: 0;
    z-index: 1015;
  }
  .sticky-sm-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1015;
  }
}
@media (min-width: 768px) {
  .sticky-md-top {
    position: sticky;
    top: 0;
    z-index: 1015;
  }
  .sticky-md-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1015;
  }
}
@media (min-width: 992px) {
  .sticky-lg-top {
    position: sticky;
    top: 0;
    z-index: 1015;
  }
  .sticky-lg-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1015;
  }
}
@media (min-width: 1200px) {
  .sticky-xl-top {
    position: sticky;
    top: 0;
    z-index: 1015;
  }
  .sticky-xl-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1015;
  }
}
.hstack {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-item-align: stretch;
  align-self: stretch;
}

.vstack {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-item-align: stretch;
  align-self: stretch;
}

.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}
.visually-hidden:not(caption),
.visually-hidden-focusable:not(:focus):not(:focus-within):not(caption) {
  position: absolute !important;
}

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  content: "";
}

.text-truncate {
  overflow: hidden;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.vr {
  display: inline-block;
  -ms-flex-item-align: stretch;
  align-self: stretch;
  width: var(--brainwaveio-border-width);
  min-height: 1em;
  background-color: currentcolor;
  opacity: var(--brainwaveio-hr-opacity);
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.float-start {
  float: left !important;
}

.float-end {
  float: right !important;
}

.float-none {
  float: none !important;
}

.object-fit-contain {
  -o-object-fit: contain !important;
  object-fit: contain !important;
}

.object-fit-cover {
  -o-object-fit: cover !important;
  object-fit: cover !important;
}

.object-fit-fill {
  -o-object-fit: fill !important;
  object-fit: fill !important;
}

.object-fit-scale {
  -o-object-fit: scale-down !important;
  object-fit: scale-down !important;
}

.object-fit-none {
  -o-object-fit: none !important;
  object-fit: none !important;
}

.opacity-0 {
  opacity: 0 !important;
}

.opacity-25 {
  opacity: 0.25 !important;
}

.opacity-50 {
  opacity: 0.5 !important;
}

.opacity-65 {
  opacity: 0.65 !important;
}

.opacity-70 {
  opacity: 0.7 !important;
}

.opacity-75 {
  opacity: 0.75 !important;
}

.opacity-100 {
  opacity: 1 !important;
}

.overflow-auto {
  overflow: auto !important;
}

.overflow-hidden {
  overflow: hidden !important;
}

.overflow-visible {
  overflow: visible !important;
}

.overflow-scroll {
  overflow: scroll !important;
}

.overflow-x-auto {
  overflow-x: auto !important;
}

.overflow-x-hidden {
  overflow-x: hidden !important;
}

.overflow-x-visible {
  overflow-x: visible !important;
}

.overflow-x-scroll {
  overflow-x: scroll !important;
}

.overflow-y-auto {
  overflow-y: auto !important;
}

.overflow-y-hidden {
  overflow-y: hidden !important;
}

.overflow-y-visible {
  overflow-y: visible !important;
}

.overflow-y-scroll {
  overflow-y: scroll !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-grid {
  display: grid !important;
}

.d-inline-grid {
  display: inline-grid !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important;
}

.d-inline-flex {
  display: -webkit-inline-box !important;
  display: -ms-inline-flexbox !important;
  display: inline-flex !important;
}

.d-none {
  display: none !important;
}

.shadow {
  -webkit-box-shadow: 0 7px 14px 0 rgba(65, 69, 88, 0.1), 0 3px 6px 0 rgba(0, 0, 0, 0.07) !important;
  box-shadow: 0 7px 14px 0 rgba(65, 69, 88, 0.1), 0 3px 6px 0 rgba(0, 0, 0, 0.07) !important;
}

.shadow-sm {
  -webkit-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow-lg {
  -webkit-box-shadow: 0 1rem 4rem rgba(0, 0, 0, 0.175) !important;
  box-shadow: 0 1rem 4rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}

.focus-ring-primary {
  --brainwaveio-focus-ring-color: rgba(var(--brainwaveio-primary-rgb), var(--brainwaveio-focus-ring-opacity));
}

.focus-ring-secondary {
  --brainwaveio-focus-ring-color: rgba(var(--brainwaveio-secondary-rgb), var(--brainwaveio-focus-ring-opacity));
}

.focus-ring-success {
  --brainwaveio-focus-ring-color: rgba(var(--brainwaveio-success-rgb), var(--brainwaveio-focus-ring-opacity));
}

.focus-ring-info {
  --brainwaveio-focus-ring-color: rgba(var(--brainwaveio-info-rgb), var(--brainwaveio-focus-ring-opacity));
}

.focus-ring-warning {
  --brainwaveio-focus-ring-color: rgba(var(--brainwaveio-warning-rgb), var(--brainwaveio-focus-ring-opacity));
}

.focus-ring-danger {
  --brainwaveio-focus-ring-color: rgba(var(--brainwaveio-danger-rgb), var(--brainwaveio-focus-ring-opacity));
}

.focus-ring-light {
  --brainwaveio-focus-ring-color: rgba(var(--brainwaveio-light-rgb), var(--brainwaveio-focus-ring-opacity));
}

.focus-ring-dark {
  --brainwaveio-focus-ring-color: rgba(var(--brainwaveio-dark-rgb), var(--brainwaveio-focus-ring-opacity));
}

.position-static {
  position: static !important;
}

.position-absolute {
  position: absolute !important;
}

.position-relative {
  position: relative !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: sticky !important;
}

.top-0 {
  top: 0 !important;
}

.top-50 {
  top: 50% !important;
}

.top-100 {
  top: 100% !important;
}

.bottom-0 {
  bottom: 0 !important;
}

.bottom-50 {
  bottom: 50% !important;
}

.bottom-100 {
  bottom: 100% !important;
}

.start-0 {
  left: 0 !important;
}

.start-50 {
  left: 50% !important;
}

.start-100 {
  left: 100% !important;
}

.end-0 {
  right: 0 !important;
}

.end-50 {
  right: 50% !important;
}

.end-100 {
  right: 100% !important;
}

.translate-middle {
  -webkit-transform: translate(-50%, -50%) !important;
  -ms-transform: translate(-50%, -50%) !important;
  transform: translate(-50%, -50%) !important;
}

.translate-middle-x {
  -webkit-transform: translateX(-50%) !important;
  -ms-transform: translateX(-50%) !important;
  transform: translateX(-50%) !important;
}

.translate-middle-y {
  -webkit-transform: translateY(-50%) !important;
  -ms-transform: translateY(-50%) !important;
  transform: translateY(-50%) !important;
}

.border {
  border: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
}

.border-0 {
  border: 0 !important;
}

.border-top {
  border-top: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
}

.border-end {
  border-right: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
}

.border-bottom {
  border-bottom: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
}

.border-start {
  border-left: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
}

.border-1 {
  --brainwaveio-border-width: 1px;
}

.border-2 {
  --brainwaveio-border-width: 2px;
}

.border-3 {
  --brainwaveio-border-width: 3px;
}

.border-4 {
  --brainwaveio-border-width: 4px;
}

.border-5 {
  --brainwaveio-border-width: 5px;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.w-auto {
  width: auto !important;
}

.mw-100 {
  max-width: 100% !important;
}

.vw-25 {
  width: 25vw !important;
}

.vw-50 {
  width: 50vw !important;
}

.vw-75 {
  width: 75vw !important;
}

.vw-100 {
  width: 100vw !important;
}

.min-vw-100 {
  min-width: 100vw !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.h-auto {
  height: auto !important;
}

.mh-100 {
  max-height: 100% !important;
}

.vh-25 {
  height: 25vh !important;
}

.vh-50 {
  height: 50vh !important;
}

.vh-75 {
  height: 75vh !important;
}

.vh-100 {
  height: 100vh !important;
}

.min-vh-25 {
  min-height: 25vh !important;
}

.min-vh-50 {
  min-height: 50vh !important;
}

.min-vh-75 {
  min-height: 75vh !important;
}

.min-vh-100 {
  min-height: 100vh !important;
}

.flex-fill {
  -webkit-box-flex: 1 !important;
  -ms-flex: 1 1 auto !important;
  flex: 1 1 auto !important;
}

.flex-row {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: row !important;
  flex-direction: row !important;
}

.flex-column {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: column !important;
  flex-direction: column !important;
}

.flex-row-reverse {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: row-reverse !important;
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: column-reverse !important;
  flex-direction: column-reverse !important;
}

.flex-grow-0 {
  -webkit-box-flex: 0 !important;
  -ms-flex-positive: 0 !important;
  flex-grow: 0 !important;
}

.flex-grow-1 {
  -webkit-box-flex: 1 !important;
  -ms-flex-positive: 1 !important;
  flex-grow: 1 !important;
}

.flex-shrink-0 {
  -ms-flex-negative: 0 !important;
  flex-shrink: 0 !important;
}

.flex-shrink-1 {
  -ms-flex-negative: 1 !important;
  flex-shrink: 1 !important;
}

.flex-wrap {
  -ms-flex-wrap: wrap !important;
  flex-wrap: wrap !important;
}

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
  flex-wrap: wrap-reverse !important;
}

.justify-content-start {
  -webkit-box-pack: start !important;
  -ms-flex-pack: start !important;
  justify-content: flex-start !important;
}

.justify-content-end {
  -webkit-box-pack: end !important;
  -ms-flex-pack: end !important;
  justify-content: flex-end !important;
}

.justify-content-center {
  -webkit-box-pack: center !important;
  -ms-flex-pack: center !important;
  justify-content: center !important;
}

.justify-content-between {
  -webkit-box-pack: justify !important;
  -ms-flex-pack: justify !important;
  justify-content: space-between !important;
}

.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important;
}

.justify-content-evenly {
  -webkit-box-pack: space-evenly !important;
  -ms-flex-pack: space-evenly !important;
  justify-content: space-evenly !important;
}

.align-items-start {
  -webkit-box-align: start !important;
  -ms-flex-align: start !important;
  align-items: flex-start !important;
}

.align-items-end {
  -webkit-box-align: end !important;
  -ms-flex-align: end !important;
  align-items: flex-end !important;
}

.align-items-center {
  -webkit-box-align: center !important;
  -ms-flex-align: center !important;
  align-items: center !important;
}

.align-items-baseline {
  -webkit-box-align: baseline !important;
  -ms-flex-align: baseline !important;
  align-items: baseline !important;
}

.align-items-stretch {
  -webkit-box-align: stretch !important;
  -ms-flex-align: stretch !important;
  align-items: stretch !important;
}

.align-content-start {
  -ms-flex-line-pack: start !important;
  align-content: flex-start !important;
}

.align-content-end {
  -ms-flex-line-pack: end !important;
  align-content: flex-end !important;
}

.align-content-center {
  -ms-flex-line-pack: center !important;
  align-content: center !important;
}

.align-content-between {
  -ms-flex-line-pack: justify !important;
  align-content: space-between !important;
}

.align-content-around {
  -ms-flex-line-pack: distribute !important;
  align-content: space-around !important;
}

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
  align-content: stretch !important;
}

.align-self-auto {
  -ms-flex-item-align: auto !important;
  align-self: auto !important;
}

.align-self-start {
  -ms-flex-item-align: start !important;
  align-self: flex-start !important;
}

.align-self-end {
  -ms-flex-item-align: end !important;
  align-self: flex-end !important;
}

.align-self-center {
  -ms-flex-item-align: center !important;
  align-self: center !important;
}

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
  align-self: baseline !important;
}

.align-self-stretch {
  -ms-flex-item-align: stretch !important;
  align-self: stretch !important;
}

.order-first {
  -webkit-box-ordinal-group: 0 !important;
  -ms-flex-order: -1 !important;
  order: -1 !important;
}

.order-0 {
  -webkit-box-ordinal-group: 1 !important;
  -ms-flex-order: 0 !important;
  order: 0 !important;
}

.order-1 {
  -webkit-box-ordinal-group: 2 !important;
  -ms-flex-order: 1 !important;
  order: 1 !important;
}

.order-2 {
  -webkit-box-ordinal-group: 3 !important;
  -ms-flex-order: 2 !important;
  order: 2 !important;
}

.order-3 {
  -webkit-box-ordinal-group: 4 !important;
  -ms-flex-order: 3 !important;
  order: 3 !important;
}

.order-4 {
  -webkit-box-ordinal-group: 5 !important;
  -ms-flex-order: 4 !important;
  order: 4 !important;
}

.order-5 {
  -webkit-box-ordinal-group: 6 !important;
  -ms-flex-order: 5 !important;
  order: 5 !important;
}

.order-last {
  -webkit-box-ordinal-group: 7 !important;
  -ms-flex-order: 6 !important;
  order: 6 !important;
}

.m-0 {
  margin: 0 !important;
}

.m-1 {
  margin: 0.5rem !important;
}

.m-2 {
  margin: 1rem !important;
}

.m-3 {
  margin: 2rem !important;
}

.m-4 {
  margin: 2.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.m-6 {
  margin: 3.5rem !important;
}

.m-7 {
  margin: 4rem !important;
}

.m-8 {
  margin: 4.5rem !important;
}

.m-9 {
  margin: 6rem !important;
}

.m-10 {
  margin: 7rem !important;
}

.m-11 {
  margin: 8rem !important;
}

.m-12 {
  margin: 9rem !important;
}

.m-13 {
  margin: 9.5rem !important;
}

.m-x1 {
  margin: 1.5rem !important;
}

.m-auto {
  margin: auto !important;
}

.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important;
}

.mx-1 {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important;
}

.mx-2 {
  margin-right: 1rem !important;
  margin-left: 1rem !important;
}

.mx-3 {
  margin-right: 2rem !important;
  margin-left: 2rem !important;
}

.mx-4 {
  margin-right: 2.5rem !important;
  margin-left: 2.5rem !important;
}

.mx-5 {
  margin-right: 3rem !important;
  margin-left: 3rem !important;
}

.mx-6 {
  margin-right: 3.5rem !important;
  margin-left: 3.5rem !important;
}

.mx-7 {
  margin-right: 4rem !important;
  margin-left: 4rem !important;
}

.mx-8 {
  margin-right: 4.5rem !important;
  margin-left: 4.5rem !important;
}

.mx-9 {
  margin-right: 6rem !important;
  margin-left: 6rem !important;
}

.mx-10 {
  margin-right: 7rem !important;
  margin-left: 7rem !important;
}

.mx-11 {
  margin-right: 8rem !important;
  margin-left: 8rem !important;
}

.mx-12 {
  margin-right: 9rem !important;
  margin-left: 9rem !important;
}

.mx-13 {
  margin-right: 9.5rem !important;
  margin-left: 9.5rem !important;
}

.mx-x1 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important;
}

.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important;
}

.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.my-1 {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important;
}

.my-2 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important;
}

.my-3 {
  margin-top: 2rem !important;
  margin-bottom: 2rem !important;
}

.my-4 {
  margin-top: 2.5rem !important;
  margin-bottom: 2.5rem !important;
}

.my-5 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important;
}

.my-6 {
  margin-top: 3.5rem !important;
  margin-bottom: 3.5rem !important;
}

.my-7 {
  margin-top: 4rem !important;
  margin-bottom: 4rem !important;
}

.my-8 {
  margin-top: 4.5rem !important;
  margin-bottom: 4.5rem !important;
}

.my-9 {
  margin-top: 6rem !important;
  margin-bottom: 6rem !important;
}

.my-10 {
  margin-top: 7rem !important;
  margin-bottom: 7rem !important;
}

.my-11 {
  margin-top: 8rem !important;
  margin-bottom: 8rem !important;
}

.my-12 {
  margin-top: 9rem !important;
  margin-bottom: 9rem !important;
}

.my-13 {
  margin-top: 9.5rem !important;
  margin-bottom: 9.5rem !important;
}

.my-x1 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important;
}

.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important;
}

.mt-0 {
  margin-top: 0 !important;
}

.mt-1 {
  margin-top: 0.5rem !important;
}

.mt-2 {
  margin-top: 1rem !important;
}

.mt-3 {
  margin-top: 2rem !important;
}

.mt-4 {
  margin-top: 2.5rem !important;
}

.mt-5 {
  margin-top: 3rem !important;
}

.mt-6 {
  margin-top: 3.5rem !important;
}

.mt-7 {
  margin-top: 4rem !important;
}

.mt-8 {
  margin-top: 4.5rem !important;
}

.mt-9 {
  margin-top: 6rem !important;
}

.mt-10 {
  margin-top: 7rem !important;
}

.mt-11 {
  margin-top: 8rem !important;
}

.mt-12 {
  margin-top: 9rem !important;
}

.mt-13 {
  margin-top: 9.5rem !important;
}

.mt-x1 {
  margin-top: 1.5rem !important;
}

.mt-auto {
  margin-top: auto !important;
}

.me-0 {
  margin-right: 0 !important;
}

.me-1 {
  margin-right: 0.5rem !important;
}

.me-2 {
  margin-right: 1rem !important;
}

.me-3 {
  margin-right: 2rem !important;
}

.me-4 {
  margin-right: 2.5rem !important;
}

.me-5 {
  margin-right: 3rem !important;
}

.me-6 {
  margin-right: 3.5rem !important;
}

.me-7 {
  margin-right: 4rem !important;
}

.me-8 {
  margin-right: 4.5rem !important;
}

.me-9 {
  margin-right: 6rem !important;
}

.me-10 {
  margin-right: 7rem !important;
}

.me-11 {
  margin-right: 8rem !important;
}

.me-12 {
  margin-right: 9rem !important;
}

.me-13 {
  margin-right: 9.5rem !important;
}

.me-x1 {
  margin-right: 1.5rem !important;
}

.me-auto {
  margin-right: auto !important;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.mb-1 {
  margin-bottom: 0.5rem !important;
}

.mb-2 {
  margin-bottom: 1rem !important;
}

.mb-3 {
  margin-bottom: 2rem !important;
}

.mb-4 {
  margin-bottom: 2.5rem !important;
}

.mb-5 {
  margin-bottom: 3rem !important;
}

.mb-6 {
  margin-bottom: 3.5rem !important;
}

.mb-7 {
  margin-bottom: 4rem !important;
}

.mb-8 {
  margin-bottom: 4.5rem !important;
}

.mb-9 {
  margin-bottom: 6rem !important;
}

.mb-10 {
  margin-bottom: 7rem !important;
}

.mb-11 {
  margin-bottom: 8rem !important;
}

.mb-12 {
  margin-bottom: 9rem !important;
}

.mb-13 {
  margin-bottom: 9.5rem !important;
}

.mb-x1 {
  margin-bottom: 1.5rem !important;
}

.mb-auto {
  margin-bottom: auto !important;
}

.ms-0 {
  margin-left: 0 !important;
}

.ms-1 {
  margin-left: 0.5rem !important;
}

.ms-2 {
  margin-left: 1rem !important;
}

.ms-3 {
  margin-left: 2rem !important;
}

.ms-4 {
  margin-left: 2.5rem !important;
}

.ms-5 {
  margin-left: 3rem !important;
}

.ms-6 {
  margin-left: 3.5rem !important;
}

.ms-7 {
  margin-left: 4rem !important;
}

.ms-8 {
  margin-left: 4.5rem !important;
}

.ms-9 {
  margin-left: 6rem !important;
}

.ms-10 {
  margin-left: 7rem !important;
}

.ms-11 {
  margin-left: 8rem !important;
}

.ms-12 {
  margin-left: 9rem !important;
}

.ms-13 {
  margin-left: 9.5rem !important;
}

.ms-x1 {
  margin-left: 1.5rem !important;
}

.ms-auto {
  margin-left: auto !important;
}

.m-n1 {
  margin: -0.5rem !important;
}

.m-n2 {
  margin: -1rem !important;
}

.m-n3 {
  margin: -2rem !important;
}

.m-n4 {
  margin: -2.5rem !important;
}

.m-n5 {
  margin: -3rem !important;
}

.m-n6 {
  margin: -3.5rem !important;
}

.m-n7 {
  margin: -4rem !important;
}

.m-n8 {
  margin: -4.5rem !important;
}

.m-n9 {
  margin: -6rem !important;
}

.m-n10 {
  margin: -7rem !important;
}

.m-n11 {
  margin: -8rem !important;
}

.m-n12 {
  margin: -9rem !important;
}

.m-n13 {
  margin: -9.5rem !important;
}

.m-nx1 {
  margin: -1.5rem !important;
}

.mx-n1 {
  margin-right: -0.5rem !important;
  margin-left: -0.5rem !important;
}

.mx-n2 {
  margin-right: -1rem !important;
  margin-left: -1rem !important;
}

.mx-n3 {
  margin-right: -2rem !important;
  margin-left: -2rem !important;
}

.mx-n4 {
  margin-right: -2.5rem !important;
  margin-left: -2.5rem !important;
}

.mx-n5 {
  margin-right: -3rem !important;
  margin-left: -3rem !important;
}

.mx-n6 {
  margin-right: -3.5rem !important;
  margin-left: -3.5rem !important;
}

.mx-n7 {
  margin-right: -4rem !important;
  margin-left: -4rem !important;
}

.mx-n8 {
  margin-right: -4.5rem !important;
  margin-left: -4.5rem !important;
}

.mx-n9 {
  margin-right: -6rem !important;
  margin-left: -6rem !important;
}

.mx-n10 {
  margin-right: -7rem !important;
  margin-left: -7rem !important;
}

.mx-n11 {
  margin-right: -8rem !important;
  margin-left: -8rem !important;
}

.mx-n12 {
  margin-right: -9rem !important;
  margin-left: -9rem !important;
}

.mx-n13 {
  margin-right: -9.5rem !important;
  margin-left: -9.5rem !important;
}

.mx-nx1 {
  margin-right: -1.5rem !important;
  margin-left: -1.5rem !important;
}

.my-n1 {
  margin-top: -0.5rem !important;
  margin-bottom: -0.5rem !important;
}

.my-n2 {
  margin-top: -1rem !important;
  margin-bottom: -1rem !important;
}

.my-n3 {
  margin-top: -2rem !important;
  margin-bottom: -2rem !important;
}

.my-n4 {
  margin-top: -2.5rem !important;
  margin-bottom: -2.5rem !important;
}

.my-n5 {
  margin-top: -3rem !important;
  margin-bottom: -3rem !important;
}

.my-n6 {
  margin-top: -3.5rem !important;
  margin-bottom: -3.5rem !important;
}

.my-n7 {
  margin-top: -4rem !important;
  margin-bottom: -4rem !important;
}

.my-n8 {
  margin-top: -4.5rem !important;
  margin-bottom: -4.5rem !important;
}

.my-n9 {
  margin-top: -6rem !important;
  margin-bottom: -6rem !important;
}

.my-n10 {
  margin-top: -7rem !important;
  margin-bottom: -7rem !important;
}

.my-n11 {
  margin-top: -8rem !important;
  margin-bottom: -8rem !important;
}

.my-n12 {
  margin-top: -9rem !important;
  margin-bottom: -9rem !important;
}

.my-n13 {
  margin-top: -9.5rem !important;
  margin-bottom: -9.5rem !important;
}

.my-nx1 {
  margin-top: -1.5rem !important;
  margin-bottom: -1.5rem !important;
}

.mt-n1 {
  margin-top: -0.5rem !important;
}

.mt-n2 {
  margin-top: -1rem !important;
}

.mt-n3 {
  margin-top: -2rem !important;
}

.mt-n4 {
  margin-top: -2.5rem !important;
}

.mt-n5 {
  margin-top: -3rem !important;
}

.mt-n6 {
  margin-top: -3.5rem !important;
}

.mt-n7 {
  margin-top: -4rem !important;
}

.mt-n8 {
  margin-top: -4.5rem !important;
}

.mt-n9 {
  margin-top: -6rem !important;
}

.mt-n10 {
  margin-top: -7rem !important;
}

.mt-n11 {
  margin-top: -8rem !important;
}

.mt-n12 {
  margin-top: -9rem !important;
}

.mt-n13 {
  margin-top: -9.5rem !important;
}

.mt-nx1 {
  margin-top: -1.5rem !important;
}

.me-n1 {
  margin-right: -0.5rem !important;
}

.me-n2 {
  margin-right: -1rem !important;
}

.me-n3 {
  margin-right: -2rem !important;
}

.me-n4 {
  margin-right: -2.5rem !important;
}

.me-n5 {
  margin-right: -3rem !important;
}

.me-n6 {
  margin-right: -3.5rem !important;
}

.me-n7 {
  margin-right: -4rem !important;
}

.me-n8 {
  margin-right: -4.5rem !important;
}

.me-n9 {
  margin-right: -6rem !important;
}

.me-n10 {
  margin-right: -7rem !important;
}

.me-n11 {
  margin-right: -8rem !important;
}

.me-n12 {
  margin-right: -9rem !important;
}

.me-n13 {
  margin-right: -9.5rem !important;
}

.me-nx1 {
  margin-right: -1.5rem !important;
}

.mb-n1 {
  margin-bottom: -0.5rem !important;
}

.mb-n2 {
  margin-bottom: -1rem !important;
}

.mb-n3 {
  margin-bottom: -2rem !important;
}

.mb-n4 {
  margin-bottom: -2.5rem !important;
}

.mb-n5 {
  margin-bottom: -3rem !important;
}

.mb-n6 {
  margin-bottom: -3.5rem !important;
}

.mb-n7 {
  margin-bottom: -4rem !important;
}

.mb-n8 {
  margin-bottom: -4.5rem !important;
}

.mb-n9 {
  margin-bottom: -6rem !important;
}

.mb-n10 {
  margin-bottom: -7rem !important;
}

.mb-n11 {
  margin-bottom: -8rem !important;
}

.mb-n12 {
  margin-bottom: -9rem !important;
}

.mb-n13 {
  margin-bottom: -9.5rem !important;
}

.mb-nx1 {
  margin-bottom: -1.5rem !important;
}

.ms-n1 {
  margin-left: -0.5rem !important;
}

.ms-n2 {
  margin-left: -1rem !important;
}

.ms-n3 {
  margin-left: -2rem !important;
}

.ms-n4 {
  margin-left: -2.5rem !important;
}

.ms-n5 {
  margin-left: -3rem !important;
}

.ms-n6 {
  margin-left: -3.5rem !important;
}

.ms-n7 {
  margin-left: -4rem !important;
}

.ms-n8 {
  margin-left: -4.5rem !important;
}

.ms-n9 {
  margin-left: -6rem !important;
}

.ms-n10 {
  margin-left: -7rem !important;
}

.ms-n11 {
  margin-left: -8rem !important;
}

.ms-n12 {
  margin-left: -9rem !important;
}

.ms-n13 {
  margin-left: -9.5rem !important;
}

.ms-nx1 {
  margin-left: -1.5rem !important;
}

.p-0 {
  padding: 0 !important;
}

.p-1 {
  padding: 0.5rem !important;
}

.p-2 {
  padding: 1rem !important;
}

.p-3 {
  padding: 2rem !important;
}

.p-4 {
  padding: 2.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.p-6 {
  padding: 3.5rem !important;
}

.p-7 {
  padding: 4rem !important;
}

.p-8 {
  padding: 4.5rem !important;
}

.p-9 {
  padding: 6rem !important;
}

.p-10 {
  padding: 7rem !important;
}

.p-11 {
  padding: 8rem !important;
}

.p-12 {
  padding: 9rem !important;
}

.p-13 {
  padding: 9.5rem !important;
}

.p-x1 {
  padding: 1.5rem !important;
}

.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important;
}

.px-1 {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important;
}

.px-2 {
  padding-right: 1rem !important;
  padding-left: 1rem !important;
}

.px-3 {
  padding-right: 2rem !important;
  padding-left: 2rem !important;
}

.px-4 {
  padding-right: 2.5rem !important;
  padding-left: 2.5rem !important;
}

.px-5 {
  padding-right: 3rem !important;
  padding-left: 3rem !important;
}

.px-6 {
  padding-right: 3.5rem !important;
  padding-left: 3.5rem !important;
}

.px-7 {
  padding-right: 4rem !important;
  padding-left: 4rem !important;
}

.px-8 {
  padding-right: 4.5rem !important;
  padding-left: 4.5rem !important;
}

.px-9 {
  padding-right: 6rem !important;
  padding-left: 6rem !important;
}

.px-10 {
  padding-right: 7rem !important;
  padding-left: 7rem !important;
}

.px-11 {
  padding-right: 8rem !important;
  padding-left: 8rem !important;
}

.px-12 {
  padding-right: 9rem !important;
  padding-left: 9rem !important;
}

.px-13 {
  padding-right: 9.5rem !important;
  padding-left: 9.5rem !important;
}

.px-x1 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important;
}

.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}

.py-1 {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important;
}

.py-2 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important;
}

.py-3 {
  padding-top: 2rem !important;
  padding-bottom: 2rem !important;
}

.py-4 {
  padding-top: 2.5rem !important;
  padding-bottom: 2.5rem !important;
}

.py-5 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important;
}

.py-6 {
  padding-top: 3.5rem !important;
  padding-bottom: 3.5rem !important;
}

.py-7 {
  padding-top: 4rem !important;
  padding-bottom: 4rem !important;
}

.py-8 {
  padding-top: 4.5rem !important;
  padding-bottom: 4.5rem !important;
}

.py-9 {
  padding-top: 6rem !important;
  padding-bottom: 6rem !important;
}

.py-10 {
  padding-top: 7rem !important;
  padding-bottom: 7rem !important;
}

.py-11 {
  padding-top: 8rem !important;
  padding-bottom: 8rem !important;
}

.py-12 {
  padding-top: 9rem !important;
  padding-bottom: 9rem !important;
}

.py-13 {
  padding-top: 9.5rem !important;
  padding-bottom: 9.5rem !important;
}

.py-x1 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important;
}

.pt-0 {
  padding-top: 0 !important;
}

.pt-1 {
  padding-top: 0.5rem !important;
}

.pt-2 {
  padding-top: 1rem !important;
}

.pt-3 {
  padding-top: 2rem !important;
}

.pt-4 {
  padding-top: 2.5rem !important;
}

.pt-5 {
  padding-top: 3rem !important;
}

.pt-6 {
  padding-top: 3.5rem !important;
}

.pt-7 {
  padding-top: 4rem !important;
}

.pt-8 {
  padding-top: 4.5rem !important;
}

.pt-9 {
  padding-top: 6rem !important;
}

.pt-10 {
  padding-top: 7rem !important;
}

.pt-11 {
  padding-top: 8rem !important;
}

.pt-12 {
  padding-top: 9rem !important;
}

.pt-13 {
  padding-top: 9.5rem !important;
}

.pt-x1 {
  padding-top: 1.5rem !important;
}

.pe-0 {
  padding-right: 0 !important;
}

.pe-1 {
  padding-right: 0.5rem !important;
}

.pe-2 {
  padding-right: 1rem !important;
}

.pe-3 {
  padding-right: 2rem !important;
}

.pe-4 {
  padding-right: 2.5rem !important;
}

.pe-5 {
  padding-right: 3rem !important;
}

.pe-6 {
  padding-right: 3.5rem !important;
}

.pe-7 {
  padding-right: 4rem !important;
}

.pe-8 {
  padding-right: 4.5rem !important;
}

.pe-9 {
  padding-right: 6rem !important;
}

.pe-10 {
  padding-right: 7rem !important;
}

.pe-11 {
  padding-right: 8rem !important;
}

.pe-12 {
  padding-right: 9rem !important;
}

.pe-13 {
  padding-right: 9.5rem !important;
}

.pe-x1 {
  padding-right: 1.5rem !important;
}

.pb-0 {
  padding-bottom: 0 !important;
}

.pb-1 {
  padding-bottom: 0.5rem !important;
}

.pb-2 {
  padding-bottom: 1rem !important;
}

.pb-3 {
  padding-bottom: 2rem !important;
}

.pb-4 {
  padding-bottom: 2.5rem !important;
}

.pb-5 {
  padding-bottom: 3rem !important;
}

.pb-6 {
  padding-bottom: 3.5rem !important;
}

.pb-7 {
  padding-bottom: 4rem !important;
}

.pb-8 {
  padding-bottom: 4.5rem !important;
}

.pb-9 {
  padding-bottom: 6rem !important;
}

.pb-10 {
  padding-bottom: 7rem !important;
}

.pb-11 {
  padding-bottom: 8rem !important;
}

.pb-12 {
  padding-bottom: 9rem !important;
}

.pb-13 {
  padding-bottom: 9.5rem !important;
}

.pb-x1 {
  padding-bottom: 1.5rem !important;
}

.ps-0 {
  padding-left: 0 !important;
}

.ps-1 {
  padding-left: 0.5rem !important;
}

.ps-2 {
  padding-left: 1rem !important;
}

.ps-3 {
  padding-left: 2rem !important;
}

.ps-4 {
  padding-left: 2.5rem !important;
}

.ps-5 {
  padding-left: 3rem !important;
}

.ps-6 {
  padding-left: 3.5rem !important;
}

.ps-7 {
  padding-left: 4rem !important;
}

.ps-8 {
  padding-left: 4.5rem !important;
}

.ps-9 {
  padding-left: 6rem !important;
}

.ps-10 {
  padding-left: 7rem !important;
}

.ps-11 {
  padding-left: 8rem !important;
}

.ps-12 {
  padding-left: 9rem !important;
}

.ps-13 {
  padding-left: 9.5rem !important;
}

.ps-x1 {
  padding-left: 1.5rem !important;
}

.gap-0 {
  gap: 0 !important;
}

.gap-1 {
  gap: 0.5rem !important;
}

.gap-2 {
  gap: 1rem !important;
}

.gap-3 {
  gap: 2rem !important;
}

.gap-4 {
  gap: 2.5rem !important;
}

.gap-5 {
  gap: 3rem !important;
}

.gap-6 {
  gap: 3.5rem !important;
}

.gap-7 {
  gap: 4rem !important;
}

.gap-8 {
  gap: 4.5rem !important;
}

.gap-9 {
  gap: 6rem !important;
}

.gap-10 {
  gap: 7rem !important;
}

.gap-11 {
  gap: 8rem !important;
}

.gap-12 {
  gap: 9rem !important;
}

.gap-13 {
  gap: 9.5rem !important;
}

.gap-x1 {
  gap: 1.5rem !important;
}

.row-gap-0 {
  row-gap: 0 !important;
}

.row-gap-1 {
  row-gap: 0.5rem !important;
}

.row-gap-2 {
  row-gap: 1rem !important;
}

.row-gap-3 {
  row-gap: 2rem !important;
}

.row-gap-4 {
  row-gap: 2.5rem !important;
}

.row-gap-5 {
  row-gap: 3rem !important;
}

.row-gap-6 {
  row-gap: 3.5rem !important;
}

.row-gap-7 {
  row-gap: 4rem !important;
}

.row-gap-8 {
  row-gap: 4.5rem !important;
}

.row-gap-9 {
  row-gap: 6rem !important;
}

.row-gap-10 {
  row-gap: 7rem !important;
}

.row-gap-11 {
  row-gap: 8rem !important;
}

.row-gap-12 {
  row-gap: 9rem !important;
}

.row-gap-13 {
  row-gap: 9.5rem !important;
}

.row-gap-x1 {
  row-gap: 1.5rem !important;
}

.column-gap-0 {
  -webkit-column-gap: 0 !important;
  -moz-column-gap: 0 !important;
  column-gap: 0 !important;
}

.column-gap-1 {
  -webkit-column-gap: 0.5rem !important;
  -moz-column-gap: 0.5rem !important;
  column-gap: 0.5rem !important;
}

.column-gap-2 {
  -webkit-column-gap: 1rem !important;
  -moz-column-gap: 1rem !important;
  column-gap: 1rem !important;
}

.column-gap-3 {
  -webkit-column-gap: 2rem !important;
  -moz-column-gap: 2rem !important;
  column-gap: 2rem !important;
}

.column-gap-4 {
  -webkit-column-gap: 2.5rem !important;
  -moz-column-gap: 2.5rem !important;
  column-gap: 2.5rem !important;
}

.column-gap-5 {
  -webkit-column-gap: 3rem !important;
  -moz-column-gap: 3rem !important;
  column-gap: 3rem !important;
}

.column-gap-6 {
  -webkit-column-gap: 3.5rem !important;
  -moz-column-gap: 3.5rem !important;
  column-gap: 3.5rem !important;
}

.column-gap-7 {
  -webkit-column-gap: 4rem !important;
  -moz-column-gap: 4rem !important;
  column-gap: 4rem !important;
}

.column-gap-8 {
  -webkit-column-gap: 4.5rem !important;
  -moz-column-gap: 4.5rem !important;
  column-gap: 4.5rem !important;
}

.column-gap-9 {
  -webkit-column-gap: 6rem !important;
  -moz-column-gap: 6rem !important;
  column-gap: 6rem !important;
}

.column-gap-10 {
  -webkit-column-gap: 7rem !important;
  -moz-column-gap: 7rem !important;
  column-gap: 7rem !important;
}

.column-gap-11 {
  -webkit-column-gap: 8rem !important;
  -moz-column-gap: 8rem !important;
  column-gap: 8rem !important;
}

.column-gap-12 {
  -webkit-column-gap: 9rem !important;
  -moz-column-gap: 9rem !important;
  column-gap: 9rem !important;
}

.column-gap-13 {
  -webkit-column-gap: 9.5rem !important;
  -moz-column-gap: 9.5rem !important;
  column-gap: 9.5rem !important;
}

.column-gap-x1 {
  -webkit-column-gap: 1.5rem !important;
  -moz-column-gap: 1.5rem !important;
  column-gap: 1.5rem !important;
}

.font-monospace {
  font-family: var(--brainwaveio-font-monospace) !important;
}

.font-sans-serif {
  font-family: var(--brainwaveio-font-sans-serif) !important;
}

.font-base {
  font-family: var(--brainwaveio-font-base) !important;
}

.fs-10 {
  font-size: 0.875rem !important;
}

.fs-9 {
  font-size: 1rem !important;
}

.fs-8 {
  font-size: 1.25rem !important;
}

.fs-7 {
  font-size: 1.5rem !important;
}

.fs-6 {
  font-size: 1.875rem !important;
}

.fs-5 {
  font-size: 2.125rem !important;
}

.fs-4 {
  font-size: 2.5rem !important;
}

.fs-3 {
  font-size: 3rem !important;
}

.fs-2 {
  font-size: 3.5rem !important;
}

.fs-1 {
  font-size: 3.75rem !important;
}

.fst-italic {
  font-style: italic !important;
}

.fst-normal {
  font-style: normal !important;
}

.fw-thin {
  font-weight: 100 !important;
}

.fw-lighter {
  font-weight: 200 !important;
}

.fw-light {
  font-weight: 300 !important;
}

.fw-normal {
  font-weight: 400 !important;
}

.fw-medium {
  font-weight: 500 !important;
}

.fw-semi-bold {
  font-weight: 600 !important;
}

.fw-bold {
  font-weight: 700 !important;
}

.fw-bolder {
  font-weight: 800 !important;
}

.fw-black {
  font-weight: 900 !important;
}

.lh-1 {
  line-height: 1 !important;
}

.lh-sm {
  line-height: 1.2 !important;
}

.lh-base {
  line-height: 1.084 !important;
}

.lh-lg {
  line-height: 1.6 !important;
}

.lh-xl {
  line-height: 1.8 !important;
}

.text-start {
  text-align: left !important;
}

.text-end {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

.text-justify {
  text-align: justify !important;
}

.text-decoration-none {
  text-decoration: none !important;
}

.text-decoration-underline {
  text-decoration: underline !important;
}

.text-decoration-line-through {
  text-decoration: line-through !important;
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.text-wrap {
  white-space: normal !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

/* rtl:begin:remove */
.text-break {
  word-wrap: break-word !important;
  word-break: break-word !important;
}

/* rtl:end:remove */
.text-primary {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-primary-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-secondary {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-secondary-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-success {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-success-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-info {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-info-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-warning {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-warning-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-danger {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-danger-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-light {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-light-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-dark {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-dark-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-facebook {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-facebook-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-google-plus {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-google-plus-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-twitter {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-twitter-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-linkedin {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-linkedin-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-youtube {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-youtube-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-github {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-github-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-black {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-black-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-white {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-white-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-body {
  --brainwaveio-text-opacity: 1;
  color: #4d5969 !important;
}

.text-100 {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-gray-100-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-200 {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-gray-200-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-300 {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-gray-300-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-400 {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-gray-400-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-500 {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-gray-500-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-600 {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-gray-600-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-700 {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-gray-700-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-800 {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-gray-800-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-900 {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-gray-900-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-1000 {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-gray-1000-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-1100 {
  --brainwaveio-text-opacity: 1;
  color: rgba(var(--brainwaveio-gray-1100-rgb), var(--brainwaveio-text-opacity)) !important;
}

.text-white-50 {
  --brainwaveio-text-opacity: 1;
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-black-50 {
  --brainwaveio-text-opacity: 1;
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-reset {
  --brainwaveio-text-opacity: 1;
  color: inherit !important;
}

.text-opacity-25 {
  --brainwaveio-text-opacity: 0.25;
}

.text-opacity-50 {
  --brainwaveio-text-opacity: 0.5;
}

.text-opacity-65 {
  --brainwaveio-text-opacity: 0.65;
}

.text-opacity-70 {
  --brainwaveio-text-opacity: 0.7;
}

.text-opacity-75 {
  --brainwaveio-text-opacity: 0.75;
}

.text-opacity-100 {
  --brainwaveio-text-opacity: 1;
}

.text-primary-emphasis {
  color: var(--brainwaveio-primary-text-emphasis) !important;
}

.text-secondary-emphasis {
  color: var(--brainwaveio-secondary-text-emphasis) !important;
}

.text-success-emphasis {
  color: var(--brainwaveio-success-text-emphasis) !important;
}

.text-info-emphasis {
  color: var(--brainwaveio-info-text-emphasis) !important;
}

.text-warning-emphasis {
  color: var(--brainwaveio-warning-text-emphasis) !important;
}

.text-danger-emphasis {
  color: var(--brainwaveio-danger-text-emphasis) !important;
}

.text-light-emphasis {
  color: var(--brainwaveio-light-text-emphasis) !important;
}

.text-dark-emphasis {
  color: var(--brainwaveio-dark-text-emphasis) !important;
}

.link-opacity-10 {
  --brainwaveio-link-opacity: 0.1;
}

.link-opacity-10-hover:hover {
  --brainwaveio-link-opacity: 0.1;
}

.link-opacity-25 {
  --brainwaveio-link-opacity: 0.25;
}

.link-opacity-25-hover:hover {
  --brainwaveio-link-opacity: 0.25;
}

.link-opacity-50 {
  --brainwaveio-link-opacity: 0.5;
}

.link-opacity-50-hover:hover {
  --brainwaveio-link-opacity: 0.5;
}

.link-opacity-75 {
  --brainwaveio-link-opacity: 0.75;
}

.link-opacity-75-hover:hover {
  --brainwaveio-link-opacity: 0.75;
}

.link-opacity-100 {
  --brainwaveio-link-opacity: 1;
}

.link-opacity-100-hover:hover {
  --brainwaveio-link-opacity: 1;
}

.link-offset-1 {
  text-underline-offset: 0.125em !important;
}

.link-offset-1-hover:hover {
  text-underline-offset: 0.125em !important;
}

.link-offset-2 {
  text-underline-offset: 0.25em !important;
}

.link-offset-2-hover:hover {
  text-underline-offset: 0.25em !important;
}

.link-offset-3 {
  text-underline-offset: 0.375em !important;
}

.link-offset-3-hover:hover {
  text-underline-offset: 0.375em !important;
}

.link-underline-primary {
  --brainwaveio-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--brainwaveio-primary-rgb), var(--brainwaveio-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--brainwaveio-primary-rgb), var(--brainwaveio-link-underline-opacity)) !important;
}

.link-underline-secondary {
  --brainwaveio-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--brainwaveio-secondary-rgb), var(--brainwaveio-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--brainwaveio-secondary-rgb), var(--brainwaveio-link-underline-opacity)) !important;
}

.link-underline-success {
  --brainwaveio-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--brainwaveio-success-rgb), var(--brainwaveio-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--brainwaveio-success-rgb), var(--brainwaveio-link-underline-opacity)) !important;
}

.link-underline-info {
  --brainwaveio-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--brainwaveio-info-rgb), var(--brainwaveio-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--brainwaveio-info-rgb), var(--brainwaveio-link-underline-opacity)) !important;
}

.link-underline-warning {
  --brainwaveio-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--brainwaveio-warning-rgb), var(--brainwaveio-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--brainwaveio-warning-rgb), var(--brainwaveio-link-underline-opacity)) !important;
}

.link-underline-danger {
  --brainwaveio-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--brainwaveio-danger-rgb), var(--brainwaveio-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--brainwaveio-danger-rgb), var(--brainwaveio-link-underline-opacity)) !important;
}

.link-underline-light {
  --brainwaveio-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--brainwaveio-light-rgb), var(--brainwaveio-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--brainwaveio-light-rgb), var(--brainwaveio-link-underline-opacity)) !important;
}

.link-underline-dark {
  --brainwaveio-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--brainwaveio-dark-rgb), var(--brainwaveio-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--brainwaveio-dark-rgb), var(--brainwaveio-link-underline-opacity)) !important;
}

.link-underline {
  --brainwaveio-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--brainwaveio-link-color-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
  text-decoration-color: rgba(var(--brainwaveio-link-color-rgb), var(--brainwaveio-link-underline-opacity, 1)) !important;
}

.link-underline-opacity-0 {
  --brainwaveio-link-underline-opacity: 0;
}

.link-underline-opacity-0-hover:hover {
  --brainwaveio-link-underline-opacity: 0;
}

.link-underline-opacity-10 {
  --brainwaveio-link-underline-opacity: 0.1;
}

.link-underline-opacity-10-hover:hover {
  --brainwaveio-link-underline-opacity: 0.1;
}

.link-underline-opacity-25 {
  --brainwaveio-link-underline-opacity: 0.25;
}

.link-underline-opacity-25-hover:hover {
  --brainwaveio-link-underline-opacity: 0.25;
}

.link-underline-opacity-50 {
  --brainwaveio-link-underline-opacity: 0.5;
}

.link-underline-opacity-50-hover:hover {
  --brainwaveio-link-underline-opacity: 0.5;
}

.link-underline-opacity-75 {
  --brainwaveio-link-underline-opacity: 0.75;
}

.link-underline-opacity-75-hover:hover {
  --brainwaveio-link-underline-opacity: 0.75;
}

.link-underline-opacity-100 {
  --brainwaveio-link-underline-opacity: 1;
}

.link-underline-opacity-100-hover:hover {
  --brainwaveio-link-underline-opacity: 1;
}

.bg-primary {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-primary-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-secondary {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-secondary-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-success {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-success-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-info {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-info-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-warning {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-warning-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-danger {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-danger-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-light {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-light-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-dark {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-dark-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-black {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-black-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-white {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-white-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-body {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-body-bg-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-100 {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-gray-100-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-200 {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-gray-200-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-300 {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-gray-300-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-400 {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-gray-400-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-500 {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-gray-500-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-600 {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-gray-600-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-700 {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-gray-700-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-800 {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-gray-800-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-900 {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-gray-900-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-1000 {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-gray-1000-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-1100 {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-gray-1100-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-transparent {
  --brainwaveio-bg-opacity: 1;
  background-color: transparent !important;
}

.bg-body-secondary {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-secondary-bg-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-body-tertiary {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-tertiary-bg-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-body-emphasis {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-emphasis-bg-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-body-quaternary {
  --brainwaveio-bg-opacity: 1;
  background-color: rgba(var(--brainwaveio-quaternary-bg-rgb), var(--brainwaveio-bg-opacity)) !important;
}

.bg-opacity-10 {
  --brainwaveio-bg-opacity: 0.1;
}

.bg-opacity-25 {
  --brainwaveio-bg-opacity: 0.25;
}

.bg-opacity-50 {
  --brainwaveio-bg-opacity: 0.5;
}

.bg-opacity-75 {
  --brainwaveio-bg-opacity: 0.75;
}

.bg-opacity-100 {
  --brainwaveio-bg-opacity: 1;
}

.bg-primary-subtle {
  background-color: var(--brainwaveio-primary-bg-subtle) !important;
}

.bg-secondary-subtle {
  background-color: var(--brainwaveio-secondary-bg-subtle) !important;
}

.bg-success-subtle {
  background-color: var(--brainwaveio-success-bg-subtle) !important;
}

.bg-info-subtle {
  background-color: var(--brainwaveio-info-bg-subtle) !important;
}

.bg-warning-subtle {
  background-color: var(--brainwaveio-warning-bg-subtle) !important;
}

.bg-danger-subtle {
  background-color: var(--brainwaveio-danger-bg-subtle) !important;
}

.bg-light-subtle {
  background-color: var(--brainwaveio-light-bg-subtle) !important;
}

.bg-dark-subtle {
  background-color: var(--brainwaveio-dark-bg-subtle) !important;
}

.bg-gradient {
  background-image: var(--brainwaveio-gradient) !important;
}

.user-select-all {
  -webkit-user-select: all !important;
  -moz-user-select: all !important;
  -ms-user-select: all !important;
  user-select: all !important;
}

.user-select-auto {
  -webkit-user-select: auto !important;
  -moz-user-select: auto !important;
  -ms-user-select: auto !important;
  user-select: auto !important;
}

.user-select-none {
  -webkit-user-select: none !important;
  -moz-user-select: none !important;
  -ms-user-select: none !important;
  user-select: none !important;
}

.pe-none {
  pointer-events: none !important;
}

.pe-auto {
  pointer-events: auto !important;
}

.rounded {
  border-radius: var(--brainwaveio-border-radius) !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.rounded-1 {
  border-radius: var(--brainwaveio-border-radius-sm) !important;
}

.rounded-2 {
  border-radius: var(--brainwaveio-border-radius) !important;
}

.rounded-3 {
  border-radius: var(--brainwaveio-border-radius-lg) !important;
}

.rounded-4 {
  border-radius: var(--brainwaveio-border-radius-xl) !important;
}

.rounded-5 {
  border-radius: var(--brainwaveio-border-radius-xxl) !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.rounded-pill {
  border-radius: var(--brainwaveio-border-radius-pill) !important;
}

.rounded-top {
  border-top-left-radius: var(--brainwaveio-border-radius) !important;
  border-top-right-radius: var(--brainwaveio-border-radius) !important;
}

.rounded-top-0 {
  border-top-left-radius: 0 !important;
  border-top-right-radius: 0 !important;
}

.rounded-top-1 {
  border-top-left-radius: var(--brainwaveio-border-radius-sm) !important;
  border-top-right-radius: var(--brainwaveio-border-radius-sm) !important;
}

.rounded-top-2 {
  border-top-left-radius: var(--brainwaveio-border-radius) !important;
  border-top-right-radius: var(--brainwaveio-border-radius) !important;
}

.rounded-top-3 {
  border-top-left-radius: var(--brainwaveio-border-radius-lg) !important;
  border-top-right-radius: var(--brainwaveio-border-radius-lg) !important;
}

.rounded-top-4 {
  border-top-left-radius: var(--brainwaveio-border-radius-xl) !important;
  border-top-right-radius: var(--brainwaveio-border-radius-xl) !important;
}

.rounded-top-5 {
  border-top-left-radius: var(--brainwaveio-border-radius-xxl) !important;
  border-top-right-radius: var(--brainwaveio-border-radius-xxl) !important;
}

.rounded-top-circle {
  border-top-left-radius: 50% !important;
  border-top-right-radius: 50% !important;
}

.rounded-top-pill {
  border-top-left-radius: var(--brainwaveio-border-radius-pill) !important;
  border-top-right-radius: var(--brainwaveio-border-radius-pill) !important;
}

.rounded-end {
  border-top-right-radius: var(--brainwaveio-border-radius) !important;
  border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
}

.rounded-end-0 {
  border-top-right-radius: 0 !important;
  border-bottom-right-radius: 0 !important;
}

.rounded-end-1 {
  border-top-right-radius: var(--brainwaveio-border-radius-sm) !important;
  border-bottom-right-radius: var(--brainwaveio-border-radius-sm) !important;
}

.rounded-end-2 {
  border-top-right-radius: var(--brainwaveio-border-radius) !important;
  border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
}

.rounded-end-3 {
  border-top-right-radius: var(--brainwaveio-border-radius-lg) !important;
  border-bottom-right-radius: var(--brainwaveio-border-radius-lg) !important;
}

.rounded-end-4 {
  border-top-right-radius: var(--brainwaveio-border-radius-xl) !important;
  border-bottom-right-radius: var(--brainwaveio-border-radius-xl) !important;
}

.rounded-end-5 {
  border-top-right-radius: var(--brainwaveio-border-radius-xxl) !important;
  border-bottom-right-radius: var(--brainwaveio-border-radius-xxl) !important;
}

.rounded-end-circle {
  border-top-right-radius: 50% !important;
  border-bottom-right-radius: 50% !important;
}

.rounded-end-pill {
  border-top-right-radius: var(--brainwaveio-border-radius-pill) !important;
  border-bottom-right-radius: var(--brainwaveio-border-radius-pill) !important;
}

.rounded-bottom {
  border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
  border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
}

.rounded-bottom-0 {
  border-bottom-right-radius: 0 !important;
  border-bottom-left-radius: 0 !important;
}

.rounded-bottom-1 {
  border-bottom-right-radius: var(--brainwaveio-border-radius-sm) !important;
  border-bottom-left-radius: var(--brainwaveio-border-radius-sm) !important;
}

.rounded-bottom-2 {
  border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
  border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
}

.rounded-bottom-3 {
  border-bottom-right-radius: var(--brainwaveio-border-radius-lg) !important;
  border-bottom-left-radius: var(--brainwaveio-border-radius-lg) !important;
}

.rounded-bottom-4 {
  border-bottom-right-radius: var(--brainwaveio-border-radius-xl) !important;
  border-bottom-left-radius: var(--brainwaveio-border-radius-xl) !important;
}

.rounded-bottom-5 {
  border-bottom-right-radius: var(--brainwaveio-border-radius-xxl) !important;
  border-bottom-left-radius: var(--brainwaveio-border-radius-xxl) !important;
}

.rounded-bottom-circle {
  border-bottom-right-radius: 50% !important;
  border-bottom-left-radius: 50% !important;
}

.rounded-bottom-pill {
  border-bottom-right-radius: var(--brainwaveio-border-radius-pill) !important;
  border-bottom-left-radius: var(--brainwaveio-border-radius-pill) !important;
}

.rounded-start {
  border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
  border-top-left-radius: var(--brainwaveio-border-radius) !important;
}

.rounded-start-0 {
  border-bottom-left-radius: 0 !important;
  border-top-left-radius: 0 !important;
}

.rounded-start-1 {
  border-bottom-left-radius: var(--brainwaveio-border-radius-sm) !important;
  border-top-left-radius: var(--brainwaveio-border-radius-sm) !important;
}

.rounded-start-2 {
  border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
  border-top-left-radius: var(--brainwaveio-border-radius) !important;
}

.rounded-start-3 {
  border-bottom-left-radius: var(--brainwaveio-border-radius-lg) !important;
  border-top-left-radius: var(--brainwaveio-border-radius-lg) !important;
}

.rounded-start-4 {
  border-bottom-left-radius: var(--brainwaveio-border-radius-xl) !important;
  border-top-left-radius: var(--brainwaveio-border-radius-xl) !important;
}

.rounded-start-5 {
  border-bottom-left-radius: var(--brainwaveio-border-radius-xxl) !important;
  border-top-left-radius: var(--brainwaveio-border-radius-xxl) !important;
}

.rounded-start-circle {
  border-bottom-left-radius: 50% !important;
  border-top-left-radius: 50% !important;
}

.rounded-start-pill {
  border-bottom-left-radius: var(--brainwaveio-border-radius-pill) !important;
  border-top-left-radius: var(--brainwaveio-border-radius-pill) !important;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

.z-n1 {
  z-index: -1 !important;
}

.z-0 {
  z-index: 0 !important;
}

.z-1 {
  z-index: 1 !important;
}

.z-2 {
  z-index: 2 !important;
}

.z-3 {
  z-index: 3 !important;
}

.cursor-default {
  cursor: default !important;
}

.cursor-pointer {
  cursor: pointer !important;
}

.transition-base {
  -webkit-transition: all 0.2s ease-in-out !important;
  -o-transition: all 0.2s ease-in-out !important;
  transition: all 0.2s ease-in-out !important;
}

.transition-none {
  -webkit-transition: none !important;
  -o-transition: none !important;
  transition: none !important;
}

.ls-1 {
  letter-spacing: 0.3px !important;
}

.ls-2 {
  letter-spacing: 1.63px !important;
}

.max-vh-25 {
  max-height: 25vh !important;
}

.max-vh-50 {
  max-height: 50vh !important;
}

.max-vh-75 {
  max-height: 75vh !important;
}

.max-vh-100 {
  max-height: 100vh !important;
}

.border-top-0 {
  border-top-width: 0 !important;
}

.border-top-1 {
  border-top-width: 1px !important;
}

.border-top-2 {
  border-top-width: 2px !important;
}

.border-top-3 {
  border-top-width: 3px !important;
}

.border-top-4 {
  border-top-width: 4px !important;
}

.border-top-5 {
  border-top-width: 5px !important;
}

.border-end-0 {
  border-right-width: 0 !important;
}

.border-end-1 {
  border-right-width: 1px !important;
}

.border-end-2 {
  border-right-width: 2px !important;
}

.border-end-3 {
  border-right-width: 3px !important;
}

.border-end-4 {
  border-right-width: 4px !important;
}

.border-end-5 {
  border-right-width: 5px !important;
}

.border-start-0 {
  border-left-width: 0 !important;
}

.border-start-1 {
  border-left-width: 1px !important;
}

.border-start-2 {
  border-left-width: 2px !important;
}

.border-start-3 {
  border-left-width: 3px !important;
}

.border-start-4 {
  border-left-width: 4px !important;
}

.border-start-5 {
  border-left-width: 5px !important;
}

.border-bottom-0 {
  border-bottom-width: 0 !important;
}

.border-bottom-1 {
  border-bottom-width: 1px !important;
}

.border-bottom-2 {
  border-bottom-width: 2px !important;
}

.border-bottom-3 {
  border-bottom-width: 3px !important;
}

.border-bottom-4 {
  border-bottom-width: 4px !important;
}

.border-bottom-5 {
  border-bottom-width: 5px !important;
}

.border-x-0 {
  border-left-width: 0 !important;
  border-right-width: 0 !important;
}

.border-x-1 {
  border-left-width: 1px !important;
  border-right-width: 1px !important;
}

.border-x-2 {
  border-left-width: 2px !important;
  border-right-width: 2px !important;
}

.border-x-3 {
  border-left-width: 3px !important;
  border-right-width: 3px !important;
}

.border-x-4 {
  border-left-width: 4px !important;
  border-right-width: 4px !important;
}

.border-x-5 {
  border-left-width: 5px !important;
  border-right-width: 5px !important;
}

.border-y-0 {
  border-top-width: 0 !important;
  border-bottom-width: 0 !important;
}

.border-y-1 {
  border-top-width: 1px !important;
  border-bottom-width: 1px !important;
}

.border-y-2 {
  border-top-width: 2px !important;
  border-bottom-width: 2px !important;
}

.border-y-3 {
  border-top-width: 3px !important;
  border-bottom-width: 3px !important;
}

.border-y-4 {
  border-top-width: 4px !important;
  border-bottom-width: 4px !important;
}

.border-y-5 {
  border-top-width: 5px !important;
  border-bottom-width: 5px !important;
}

.border-dotted {
  --brainwaveio-border-style: dotted !important;
}

.border-dashed {
  --brainwaveio-border-style: dashed !important;
}

.border-none {
  --brainwaveio-border-style: none !important;
}

.border-hidden {
  --brainwaveio-border-style: hidden !important;
}

@media (min-width: 576px) {
  .float-sm-start {
    float: left !important;
  }
  .float-sm-end {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
  .object-fit-sm-contain {
    -o-object-fit: contain !important;
    object-fit: contain !important;
  }
  .object-fit-sm-cover {
    -o-object-fit: cover !important;
    object-fit: cover !important;
  }
  .object-fit-sm-fill {
    -o-object-fit: fill !important;
    object-fit: fill !important;
  }
  .object-fit-sm-scale {
    -o-object-fit: scale-down !important;
    object-fit: scale-down !important;
  }
  .object-fit-sm-none {
    -o-object-fit: none !important;
    object-fit: none !important;
  }
  .opacity-sm-0 {
    opacity: 0 !important;
  }
  .opacity-sm-25 {
    opacity: 0.25 !important;
  }
  .opacity-sm-50 {
    opacity: 0.5 !important;
  }
  .opacity-sm-65 {
    opacity: 0.65 !important;
  }
  .opacity-sm-70 {
    opacity: 0.7 !important;
  }
  .opacity-sm-75 {
    opacity: 0.75 !important;
  }
  .opacity-sm-100 {
    opacity: 1 !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-grid {
    display: grid !important;
  }
  .d-sm-inline-grid {
    display: inline-grid !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
  .d-sm-none {
    display: none !important;
  }
  .position-sm-static {
    position: static !important;
  }
  .position-sm-absolute {
    position: absolute !important;
  }
  .position-sm-relative {
    position: relative !important;
  }
  .position-sm-fixed {
    position: fixed !important;
  }
  .position-sm-sticky {
    position: sticky !important;
  }
  .translate-middle-sm {
    -webkit-transform: translate(-50%, -50%) !important;
    -ms-transform: translate(-50%, -50%) !important;
    transform: translate(-50%, -50%) !important;
  }
  .translate-middle-sm-x {
    -webkit-transform: translateX(-50%) !important;
    -ms-transform: translateX(-50%) !important;
    transform: translateX(-50%) !important;
  }
  .translate-middle-sm-y {
    -webkit-transform: translateY(-50%) !important;
    -ms-transform: translateY(-50%) !important;
    transform: translateY(-50%) !important;
  }
  .border-sm {
    border: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-sm-0 {
    border: 0 !important;
  }
  .border-top-sm {
    border-top: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-end-sm {
    border-right: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-bottom-sm {
    border-bottom: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-start-sm {
    border-left: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-sm-1 {
    --brainwaveio-border-width: 1px;
  }
  .border-sm-2 {
    --brainwaveio-border-width: 2px;
  }
  .border-sm-3 {
    --brainwaveio-border-width: 3px;
  }
  .border-sm-4 {
    --brainwaveio-border-width: 4px;
  }
  .border-sm-5 {
    --brainwaveio-border-width: 5px;
  }
  .w-sm-25 {
    width: 25% !important;
  }
  .w-sm-50 {
    width: 50% !important;
  }
  .w-sm-75 {
    width: 75% !important;
  }
  .w-sm-100 {
    width: 100% !important;
  }
  .w-sm-auto {
    width: auto !important;
  }
  .vw-sm-25 {
    width: 25vw !important;
  }
  .vw-sm-50 {
    width: 50vw !important;
  }
  .vw-sm-75 {
    width: 75vw !important;
  }
  .vw-sm-100 {
    width: 100vw !important;
  }
  .h-sm-25 {
    height: 25% !important;
  }
  .h-sm-50 {
    height: 50% !important;
  }
  .h-sm-75 {
    height: 75% !important;
  }
  .h-sm-100 {
    height: 100% !important;
  }
  .h-sm-auto {
    height: auto !important;
  }
  .vh-sm-25 {
    height: 25vh !important;
  }
  .vh-sm-50 {
    height: 50vh !important;
  }
  .vh-sm-75 {
    height: 75vh !important;
  }
  .vh-sm-100 {
    height: 100vh !important;
  }
  .min-vh-sm-25 {
    min-height: 25vh !important;
  }
  .min-vh-sm-50 {
    min-height: 50vh !important;
  }
  .min-vh-sm-75 {
    min-height: 75vh !important;
  }
  .min-vh-sm-100 {
    min-height: 100vh !important;
  }
  .flex-sm-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-sm-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-sm-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-sm-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-sm-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-sm-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .justify-content-sm-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important;
  }
  .align-items-sm-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-sm-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
  .order-sm-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important;
  }
  .order-sm-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important;
  }
  .order-sm-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important;
  }
  .order-sm-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important;
  }
  .order-sm-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important;
  }
  .order-sm-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important;
  }
  .order-sm-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important;
  }
  .order-sm-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important;
  }
  .m-sm-0 {
    margin: 0 !important;
  }
  .m-sm-1 {
    margin: 0.5rem !important;
  }
  .m-sm-2 {
    margin: 1rem !important;
  }
  .m-sm-3 {
    margin: 2rem !important;
  }
  .m-sm-4 {
    margin: 2.5rem !important;
  }
  .m-sm-5 {
    margin: 3rem !important;
  }
  .m-sm-6 {
    margin: 3.5rem !important;
  }
  .m-sm-7 {
    margin: 4rem !important;
  }
  .m-sm-8 {
    margin: 4.5rem !important;
  }
  .m-sm-9 {
    margin: 6rem !important;
  }
  .m-sm-10 {
    margin: 7rem !important;
  }
  .m-sm-11 {
    margin: 8rem !important;
  }
  .m-sm-12 {
    margin: 9rem !important;
  }
  .m-sm-13 {
    margin: 9.5rem !important;
  }
  .m-sm-x1 {
    margin: 1.5rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mx-sm-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-sm-1 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-sm-2 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-sm-3 {
    margin-right: 2rem !important;
    margin-left: 2rem !important;
  }
  .mx-sm-4 {
    margin-right: 2.5rem !important;
    margin-left: 2.5rem !important;
  }
  .mx-sm-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-sm-6 {
    margin-right: 3.5rem !important;
    margin-left: 3.5rem !important;
  }
  .mx-sm-7 {
    margin-right: 4rem !important;
    margin-left: 4rem !important;
  }
  .mx-sm-8 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important;
  }
  .mx-sm-9 {
    margin-right: 6rem !important;
    margin-left: 6rem !important;
  }
  .mx-sm-10 {
    margin-right: 7rem !important;
    margin-left: 7rem !important;
  }
  .mx-sm-11 {
    margin-right: 8rem !important;
    margin-left: 8rem !important;
  }
  .mx-sm-12 {
    margin-right: 9rem !important;
    margin-left: 9rem !important;
  }
  .mx-sm-13 {
    margin-right: 9.5rem !important;
    margin-left: 9.5rem !important;
  }
  .mx-sm-x1 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-sm-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-sm-1 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-sm-2 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-sm-3 {
    margin-top: 2rem !important;
    margin-bottom: 2rem !important;
  }
  .my-sm-4 {
    margin-top: 2.5rem !important;
    margin-bottom: 2.5rem !important;
  }
  .my-sm-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-sm-6 {
    margin-top: 3.5rem !important;
    margin-bottom: 3.5rem !important;
  }
  .my-sm-7 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important;
  }
  .my-sm-8 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important;
  }
  .my-sm-9 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }
  .my-sm-10 {
    margin-top: 7rem !important;
    margin-bottom: 7rem !important;
  }
  .my-sm-11 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important;
  }
  .my-sm-12 {
    margin-top: 9rem !important;
    margin-bottom: 9rem !important;
  }
  .my-sm-13 {
    margin-top: 9.5rem !important;
    margin-bottom: 9.5rem !important;
  }
  .my-sm-x1 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-sm-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-sm-0 {
    margin-top: 0 !important;
  }
  .mt-sm-1 {
    margin-top: 0.5rem !important;
  }
  .mt-sm-2 {
    margin-top: 1rem !important;
  }
  .mt-sm-3 {
    margin-top: 2rem !important;
  }
  .mt-sm-4 {
    margin-top: 2.5rem !important;
  }
  .mt-sm-5 {
    margin-top: 3rem !important;
  }
  .mt-sm-6 {
    margin-top: 3.5rem !important;
  }
  .mt-sm-7 {
    margin-top: 4rem !important;
  }
  .mt-sm-8 {
    margin-top: 4.5rem !important;
  }
  .mt-sm-9 {
    margin-top: 6rem !important;
  }
  .mt-sm-10 {
    margin-top: 7rem !important;
  }
  .mt-sm-11 {
    margin-top: 8rem !important;
  }
  .mt-sm-12 {
    margin-top: 9rem !important;
  }
  .mt-sm-13 {
    margin-top: 9.5rem !important;
  }
  .mt-sm-x1 {
    margin-top: 1.5rem !important;
  }
  .mt-sm-auto {
    margin-top: auto !important;
  }
  .me-sm-0 {
    margin-right: 0 !important;
  }
  .me-sm-1 {
    margin-right: 0.5rem !important;
  }
  .me-sm-2 {
    margin-right: 1rem !important;
  }
  .me-sm-3 {
    margin-right: 2rem !important;
  }
  .me-sm-4 {
    margin-right: 2.5rem !important;
  }
  .me-sm-5 {
    margin-right: 3rem !important;
  }
  .me-sm-6 {
    margin-right: 3.5rem !important;
  }
  .me-sm-7 {
    margin-right: 4rem !important;
  }
  .me-sm-8 {
    margin-right: 4.5rem !important;
  }
  .me-sm-9 {
    margin-right: 6rem !important;
  }
  .me-sm-10 {
    margin-right: 7rem !important;
  }
  .me-sm-11 {
    margin-right: 8rem !important;
  }
  .me-sm-12 {
    margin-right: 9rem !important;
  }
  .me-sm-13 {
    margin-right: 9.5rem !important;
  }
  .me-sm-x1 {
    margin-right: 1.5rem !important;
  }
  .me-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-0 {
    margin-bottom: 0 !important;
  }
  .mb-sm-1 {
    margin-bottom: 0.5rem !important;
  }
  .mb-sm-2 {
    margin-bottom: 1rem !important;
  }
  .mb-sm-3 {
    margin-bottom: 2rem !important;
  }
  .mb-sm-4 {
    margin-bottom: 2.5rem !important;
  }
  .mb-sm-5 {
    margin-bottom: 3rem !important;
  }
  .mb-sm-6 {
    margin-bottom: 3.5rem !important;
  }
  .mb-sm-7 {
    margin-bottom: 4rem !important;
  }
  .mb-sm-8 {
    margin-bottom: 4.5rem !important;
  }
  .mb-sm-9 {
    margin-bottom: 6rem !important;
  }
  .mb-sm-10 {
    margin-bottom: 7rem !important;
  }
  .mb-sm-11 {
    margin-bottom: 8rem !important;
  }
  .mb-sm-12 {
    margin-bottom: 9rem !important;
  }
  .mb-sm-13 {
    margin-bottom: 9.5rem !important;
  }
  .mb-sm-x1 {
    margin-bottom: 1.5rem !important;
  }
  .mb-sm-auto {
    margin-bottom: auto !important;
  }
  .ms-sm-0 {
    margin-left: 0 !important;
  }
  .ms-sm-1 {
    margin-left: 0.5rem !important;
  }
  .ms-sm-2 {
    margin-left: 1rem !important;
  }
  .ms-sm-3 {
    margin-left: 2rem !important;
  }
  .ms-sm-4 {
    margin-left: 2.5rem !important;
  }
  .ms-sm-5 {
    margin-left: 3rem !important;
  }
  .ms-sm-6 {
    margin-left: 3.5rem !important;
  }
  .ms-sm-7 {
    margin-left: 4rem !important;
  }
  .ms-sm-8 {
    margin-left: 4.5rem !important;
  }
  .ms-sm-9 {
    margin-left: 6rem !important;
  }
  .ms-sm-10 {
    margin-left: 7rem !important;
  }
  .ms-sm-11 {
    margin-left: 8rem !important;
  }
  .ms-sm-12 {
    margin-left: 9rem !important;
  }
  .ms-sm-13 {
    margin-left: 9.5rem !important;
  }
  .ms-sm-x1 {
    margin-left: 1.5rem !important;
  }
  .ms-sm-auto {
    margin-left: auto !important;
  }
  .m-sm-n1 {
    margin: -0.5rem !important;
  }
  .m-sm-n2 {
    margin: -1rem !important;
  }
  .m-sm-n3 {
    margin: -2rem !important;
  }
  .m-sm-n4 {
    margin: -2.5rem !important;
  }
  .m-sm-n5 {
    margin: -3rem !important;
  }
  .m-sm-n6 {
    margin: -3.5rem !important;
  }
  .m-sm-n7 {
    margin: -4rem !important;
  }
  .m-sm-n8 {
    margin: -4.5rem !important;
  }
  .m-sm-n9 {
    margin: -6rem !important;
  }
  .m-sm-n10 {
    margin: -7rem !important;
  }
  .m-sm-n11 {
    margin: -8rem !important;
  }
  .m-sm-n12 {
    margin: -9rem !important;
  }
  .m-sm-n13 {
    margin: -9.5rem !important;
  }
  .m-sm-nx1 {
    margin: -1.5rem !important;
  }
  .mx-sm-n1 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-sm-n2 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-sm-n3 {
    margin-right: -2rem !important;
    margin-left: -2rem !important;
  }
  .mx-sm-n4 {
    margin-right: -2.5rem !important;
    margin-left: -2.5rem !important;
  }
  .mx-sm-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .mx-sm-n6 {
    margin-right: -3.5rem !important;
    margin-left: -3.5rem !important;
  }
  .mx-sm-n7 {
    margin-right: -4rem !important;
    margin-left: -4rem !important;
  }
  .mx-sm-n8 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important;
  }
  .mx-sm-n9 {
    margin-right: -6rem !important;
    margin-left: -6rem !important;
  }
  .mx-sm-n10 {
    margin-right: -7rem !important;
    margin-left: -7rem !important;
  }
  .mx-sm-n11 {
    margin-right: -8rem !important;
    margin-left: -8rem !important;
  }
  .mx-sm-n12 {
    margin-right: -9rem !important;
    margin-left: -9rem !important;
  }
  .mx-sm-n13 {
    margin-right: -9.5rem !important;
    margin-left: -9.5rem !important;
  }
  .mx-sm-nx1 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .my-sm-n1 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-sm-n2 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-sm-n3 {
    margin-top: -2rem !important;
    margin-bottom: -2rem !important;
  }
  .my-sm-n4 {
    margin-top: -2.5rem !important;
    margin-bottom: -2.5rem !important;
  }
  .my-sm-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .my-sm-n6 {
    margin-top: -3.5rem !important;
    margin-bottom: -3.5rem !important;
  }
  .my-sm-n7 {
    margin-top: -4rem !important;
    margin-bottom: -4rem !important;
  }
  .my-sm-n8 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important;
  }
  .my-sm-n9 {
    margin-top: -6rem !important;
    margin-bottom: -6rem !important;
  }
  .my-sm-n10 {
    margin-top: -7rem !important;
    margin-bottom: -7rem !important;
  }
  .my-sm-n11 {
    margin-top: -8rem !important;
    margin-bottom: -8rem !important;
  }
  .my-sm-n12 {
    margin-top: -9rem !important;
    margin-bottom: -9rem !important;
  }
  .my-sm-n13 {
    margin-top: -9.5rem !important;
    margin-bottom: -9.5rem !important;
  }
  .my-sm-nx1 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .mt-sm-n1 {
    margin-top: -0.5rem !important;
  }
  .mt-sm-n2 {
    margin-top: -1rem !important;
  }
  .mt-sm-n3 {
    margin-top: -2rem !important;
  }
  .mt-sm-n4 {
    margin-top: -2.5rem !important;
  }
  .mt-sm-n5 {
    margin-top: -3rem !important;
  }
  .mt-sm-n6 {
    margin-top: -3.5rem !important;
  }
  .mt-sm-n7 {
    margin-top: -4rem !important;
  }
  .mt-sm-n8 {
    margin-top: -4.5rem !important;
  }
  .mt-sm-n9 {
    margin-top: -6rem !important;
  }
  .mt-sm-n10 {
    margin-top: -7rem !important;
  }
  .mt-sm-n11 {
    margin-top: -8rem !important;
  }
  .mt-sm-n12 {
    margin-top: -9rem !important;
  }
  .mt-sm-n13 {
    margin-top: -9.5rem !important;
  }
  .mt-sm-nx1 {
    margin-top: -1.5rem !important;
  }
  .me-sm-n1 {
    margin-right: -0.5rem !important;
  }
  .me-sm-n2 {
    margin-right: -1rem !important;
  }
  .me-sm-n3 {
    margin-right: -2rem !important;
  }
  .me-sm-n4 {
    margin-right: -2.5rem !important;
  }
  .me-sm-n5 {
    margin-right: -3rem !important;
  }
  .me-sm-n6 {
    margin-right: -3.5rem !important;
  }
  .me-sm-n7 {
    margin-right: -4rem !important;
  }
  .me-sm-n8 {
    margin-right: -4.5rem !important;
  }
  .me-sm-n9 {
    margin-right: -6rem !important;
  }
  .me-sm-n10 {
    margin-right: -7rem !important;
  }
  .me-sm-n11 {
    margin-right: -8rem !important;
  }
  .me-sm-n12 {
    margin-right: -9rem !important;
  }
  .me-sm-n13 {
    margin-right: -9.5rem !important;
  }
  .me-sm-nx1 {
    margin-right: -1.5rem !important;
  }
  .mb-sm-n1 {
    margin-bottom: -0.5rem !important;
  }
  .mb-sm-n2 {
    margin-bottom: -1rem !important;
  }
  .mb-sm-n3 {
    margin-bottom: -2rem !important;
  }
  .mb-sm-n4 {
    margin-bottom: -2.5rem !important;
  }
  .mb-sm-n5 {
    margin-bottom: -3rem !important;
  }
  .mb-sm-n6 {
    margin-bottom: -3.5rem !important;
  }
  .mb-sm-n7 {
    margin-bottom: -4rem !important;
  }
  .mb-sm-n8 {
    margin-bottom: -4.5rem !important;
  }
  .mb-sm-n9 {
    margin-bottom: -6rem !important;
  }
  .mb-sm-n10 {
    margin-bottom: -7rem !important;
  }
  .mb-sm-n11 {
    margin-bottom: -8rem !important;
  }
  .mb-sm-n12 {
    margin-bottom: -9rem !important;
  }
  .mb-sm-n13 {
    margin-bottom: -9.5rem !important;
  }
  .mb-sm-nx1 {
    margin-bottom: -1.5rem !important;
  }
  .ms-sm-n1 {
    margin-left: -0.5rem !important;
  }
  .ms-sm-n2 {
    margin-left: -1rem !important;
  }
  .ms-sm-n3 {
    margin-left: -2rem !important;
  }
  .ms-sm-n4 {
    margin-left: -2.5rem !important;
  }
  .ms-sm-n5 {
    margin-left: -3rem !important;
  }
  .ms-sm-n6 {
    margin-left: -3.5rem !important;
  }
  .ms-sm-n7 {
    margin-left: -4rem !important;
  }
  .ms-sm-n8 {
    margin-left: -4.5rem !important;
  }
  .ms-sm-n9 {
    margin-left: -6rem !important;
  }
  .ms-sm-n10 {
    margin-left: -7rem !important;
  }
  .ms-sm-n11 {
    margin-left: -8rem !important;
  }
  .ms-sm-n12 {
    margin-left: -9rem !important;
  }
  .ms-sm-n13 {
    margin-left: -9.5rem !important;
  }
  .ms-sm-nx1 {
    margin-left: -1.5rem !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .p-sm-1 {
    padding: 0.5rem !important;
  }
  .p-sm-2 {
    padding: 1rem !important;
  }
  .p-sm-3 {
    padding: 2rem !important;
  }
  .p-sm-4 {
    padding: 2.5rem !important;
  }
  .p-sm-5 {
    padding: 3rem !important;
  }
  .p-sm-6 {
    padding: 3.5rem !important;
  }
  .p-sm-7 {
    padding: 4rem !important;
  }
  .p-sm-8 {
    padding: 4.5rem !important;
  }
  .p-sm-9 {
    padding: 6rem !important;
  }
  .p-sm-10 {
    padding: 7rem !important;
  }
  .p-sm-11 {
    padding: 8rem !important;
  }
  .p-sm-12 {
    padding: 9rem !important;
  }
  .p-sm-13 {
    padding: 9.5rem !important;
  }
  .p-sm-x1 {
    padding: 1.5rem !important;
  }
  .px-sm-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-sm-1 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-sm-2 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-sm-3 {
    padding-right: 2rem !important;
    padding-left: 2rem !important;
  }
  .px-sm-4 {
    padding-right: 2.5rem !important;
    padding-left: 2.5rem !important;
  }
  .px-sm-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .px-sm-6 {
    padding-right: 3.5rem !important;
    padding-left: 3.5rem !important;
  }
  .px-sm-7 {
    padding-right: 4rem !important;
    padding-left: 4rem !important;
  }
  .px-sm-8 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important;
  }
  .px-sm-9 {
    padding-right: 6rem !important;
    padding-left: 6rem !important;
  }
  .px-sm-10 {
    padding-right: 7rem !important;
    padding-left: 7rem !important;
  }
  .px-sm-11 {
    padding-right: 8rem !important;
    padding-left: 8rem !important;
  }
  .px-sm-12 {
    padding-right: 9rem !important;
    padding-left: 9rem !important;
  }
  .px-sm-13 {
    padding-right: 9.5rem !important;
    padding-left: 9.5rem !important;
  }
  .px-sm-x1 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .py-sm-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-sm-1 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-sm-2 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-sm-3 {
    padding-top: 2rem !important;
    padding-bottom: 2rem !important;
  }
  .py-sm-4 {
    padding-top: 2.5rem !important;
    padding-bottom: 2.5rem !important;
  }
  .py-sm-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .py-sm-6 {
    padding-top: 3.5rem !important;
    padding-bottom: 3.5rem !important;
  }
  .py-sm-7 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important;
  }
  .py-sm-8 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
  .py-sm-9 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }
  .py-sm-10 {
    padding-top: 7rem !important;
    padding-bottom: 7rem !important;
  }
  .py-sm-11 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important;
  }
  .py-sm-12 {
    padding-top: 9rem !important;
    padding-bottom: 9rem !important;
  }
  .py-sm-13 {
    padding-top: 9.5rem !important;
    padding-bottom: 9.5rem !important;
  }
  .py-sm-x1 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .pt-sm-0 {
    padding-top: 0 !important;
  }
  .pt-sm-1 {
    padding-top: 0.5rem !important;
  }
  .pt-sm-2 {
    padding-top: 1rem !important;
  }
  .pt-sm-3 {
    padding-top: 2rem !important;
  }
  .pt-sm-4 {
    padding-top: 2.5rem !important;
  }
  .pt-sm-5 {
    padding-top: 3rem !important;
  }
  .pt-sm-6 {
    padding-top: 3.5rem !important;
  }
  .pt-sm-7 {
    padding-top: 4rem !important;
  }
  .pt-sm-8 {
    padding-top: 4.5rem !important;
  }
  .pt-sm-9 {
    padding-top: 6rem !important;
  }
  .pt-sm-10 {
    padding-top: 7rem !important;
  }
  .pt-sm-11 {
    padding-top: 8rem !important;
  }
  .pt-sm-12 {
    padding-top: 9rem !important;
  }
  .pt-sm-13 {
    padding-top: 9.5rem !important;
  }
  .pt-sm-x1 {
    padding-top: 1.5rem !important;
  }
  .pe-sm-0 {
    padding-right: 0 !important;
  }
  .pe-sm-1 {
    padding-right: 0.5rem !important;
  }
  .pe-sm-2 {
    padding-right: 1rem !important;
  }
  .pe-sm-3 {
    padding-right: 2rem !important;
  }
  .pe-sm-4 {
    padding-right: 2.5rem !important;
  }
  .pe-sm-5 {
    padding-right: 3rem !important;
  }
  .pe-sm-6 {
    padding-right: 3.5rem !important;
  }
  .pe-sm-7 {
    padding-right: 4rem !important;
  }
  .pe-sm-8 {
    padding-right: 4.5rem !important;
  }
  .pe-sm-9 {
    padding-right: 6rem !important;
  }
  .pe-sm-10 {
    padding-right: 7rem !important;
  }
  .pe-sm-11 {
    padding-right: 8rem !important;
  }
  .pe-sm-12 {
    padding-right: 9rem !important;
  }
  .pe-sm-13 {
    padding-right: 9.5rem !important;
  }
  .pe-sm-x1 {
    padding-right: 1.5rem !important;
  }
  .pb-sm-0 {
    padding-bottom: 0 !important;
  }
  .pb-sm-1 {
    padding-bottom: 0.5rem !important;
  }
  .pb-sm-2 {
    padding-bottom: 1rem !important;
  }
  .pb-sm-3 {
    padding-bottom: 2rem !important;
  }
  .pb-sm-4 {
    padding-bottom: 2.5rem !important;
  }
  .pb-sm-5 {
    padding-bottom: 3rem !important;
  }
  .pb-sm-6 {
    padding-bottom: 3.5rem !important;
  }
  .pb-sm-7 {
    padding-bottom: 4rem !important;
  }
  .pb-sm-8 {
    padding-bottom: 4.5rem !important;
  }
  .pb-sm-9 {
    padding-bottom: 6rem !important;
  }
  .pb-sm-10 {
    padding-bottom: 7rem !important;
  }
  .pb-sm-11 {
    padding-bottom: 8rem !important;
  }
  .pb-sm-12 {
    padding-bottom: 9rem !important;
  }
  .pb-sm-13 {
    padding-bottom: 9.5rem !important;
  }
  .pb-sm-x1 {
    padding-bottom: 1.5rem !important;
  }
  .ps-sm-0 {
    padding-left: 0 !important;
  }
  .ps-sm-1 {
    padding-left: 0.5rem !important;
  }
  .ps-sm-2 {
    padding-left: 1rem !important;
  }
  .ps-sm-3 {
    padding-left: 2rem !important;
  }
  .ps-sm-4 {
    padding-left: 2.5rem !important;
  }
  .ps-sm-5 {
    padding-left: 3rem !important;
  }
  .ps-sm-6 {
    padding-left: 3.5rem !important;
  }
  .ps-sm-7 {
    padding-left: 4rem !important;
  }
  .ps-sm-8 {
    padding-left: 4.5rem !important;
  }
  .ps-sm-9 {
    padding-left: 6rem !important;
  }
  .ps-sm-10 {
    padding-left: 7rem !important;
  }
  .ps-sm-11 {
    padding-left: 8rem !important;
  }
  .ps-sm-12 {
    padding-left: 9rem !important;
  }
  .ps-sm-13 {
    padding-left: 9.5rem !important;
  }
  .ps-sm-x1 {
    padding-left: 1.5rem !important;
  }
  .gap-sm-0 {
    gap: 0 !important;
  }
  .gap-sm-1 {
    gap: 0.5rem !important;
  }
  .gap-sm-2 {
    gap: 1rem !important;
  }
  .gap-sm-3 {
    gap: 2rem !important;
  }
  .gap-sm-4 {
    gap: 2.5rem !important;
  }
  .gap-sm-5 {
    gap: 3rem !important;
  }
  .gap-sm-6 {
    gap: 3.5rem !important;
  }
  .gap-sm-7 {
    gap: 4rem !important;
  }
  .gap-sm-8 {
    gap: 4.5rem !important;
  }
  .gap-sm-9 {
    gap: 6rem !important;
  }
  .gap-sm-10 {
    gap: 7rem !important;
  }
  .gap-sm-11 {
    gap: 8rem !important;
  }
  .gap-sm-12 {
    gap: 9rem !important;
  }
  .gap-sm-13 {
    gap: 9.5rem !important;
  }
  .gap-sm-x1 {
    gap: 1.5rem !important;
  }
  .row-gap-sm-0 {
    row-gap: 0 !important;
  }
  .row-gap-sm-1 {
    row-gap: 0.5rem !important;
  }
  .row-gap-sm-2 {
    row-gap: 1rem !important;
  }
  .row-gap-sm-3 {
    row-gap: 2rem !important;
  }
  .row-gap-sm-4 {
    row-gap: 2.5rem !important;
  }
  .row-gap-sm-5 {
    row-gap: 3rem !important;
  }
  .row-gap-sm-6 {
    row-gap: 3.5rem !important;
  }
  .row-gap-sm-7 {
    row-gap: 4rem !important;
  }
  .row-gap-sm-8 {
    row-gap: 4.5rem !important;
  }
  .row-gap-sm-9 {
    row-gap: 6rem !important;
  }
  .row-gap-sm-10 {
    row-gap: 7rem !important;
  }
  .row-gap-sm-11 {
    row-gap: 8rem !important;
  }
  .row-gap-sm-12 {
    row-gap: 9rem !important;
  }
  .row-gap-sm-13 {
    row-gap: 9.5rem !important;
  }
  .row-gap-sm-x1 {
    row-gap: 1.5rem !important;
  }
  .column-gap-sm-0 {
    -webkit-column-gap: 0 !important;
    -moz-column-gap: 0 !important;
    column-gap: 0 !important;
  }
  .column-gap-sm-1 {
    -webkit-column-gap: 0.5rem !important;
    -moz-column-gap: 0.5rem !important;
    column-gap: 0.5rem !important;
  }
  .column-gap-sm-2 {
    -webkit-column-gap: 1rem !important;
    -moz-column-gap: 1rem !important;
    column-gap: 1rem !important;
  }
  .column-gap-sm-3 {
    -webkit-column-gap: 2rem !important;
    -moz-column-gap: 2rem !important;
    column-gap: 2rem !important;
  }
  .column-gap-sm-4 {
    -webkit-column-gap: 2.5rem !important;
    -moz-column-gap: 2.5rem !important;
    column-gap: 2.5rem !important;
  }
  .column-gap-sm-5 {
    -webkit-column-gap: 3rem !important;
    -moz-column-gap: 3rem !important;
    column-gap: 3rem !important;
  }
  .column-gap-sm-6 {
    -webkit-column-gap: 3.5rem !important;
    -moz-column-gap: 3.5rem !important;
    column-gap: 3.5rem !important;
  }
  .column-gap-sm-7 {
    -webkit-column-gap: 4rem !important;
    -moz-column-gap: 4rem !important;
    column-gap: 4rem !important;
  }
  .column-gap-sm-8 {
    -webkit-column-gap: 4.5rem !important;
    -moz-column-gap: 4.5rem !important;
    column-gap: 4.5rem !important;
  }
  .column-gap-sm-9 {
    -webkit-column-gap: 6rem !important;
    -moz-column-gap: 6rem !important;
    column-gap: 6rem !important;
  }
  .column-gap-sm-10 {
    -webkit-column-gap: 7rem !important;
    -moz-column-gap: 7rem !important;
    column-gap: 7rem !important;
  }
  .column-gap-sm-11 {
    -webkit-column-gap: 8rem !important;
    -moz-column-gap: 8rem !important;
    column-gap: 8rem !important;
  }
  .column-gap-sm-12 {
    -webkit-column-gap: 9rem !important;
    -moz-column-gap: 9rem !important;
    column-gap: 9rem !important;
  }
  .column-gap-sm-13 {
    -webkit-column-gap: 9.5rem !important;
    -moz-column-gap: 9.5rem !important;
    column-gap: 9.5rem !important;
  }
  .column-gap-sm-x1 {
    -webkit-column-gap: 1.5rem !important;
    -moz-column-gap: 1.5rem !important;
    column-gap: 1.5rem !important;
  }
  .fs-sm-10 {
    font-size: 0.875rem !important;
  }
  .fs-sm-9 {
    font-size: 1rem !important;
  }
  .fs-sm-8 {
    font-size: 1.25rem !important;
  }
  .fs-sm-7 {
    font-size: 1.5rem !important;
  }
  .fs-sm-6 {
    font-size: 1.875rem !important;
  }
  .fs-sm-5 {
    font-size: 2.125rem !important;
  }
  .fs-sm-4 {
    font-size: 2.5rem !important;
  }
  .fs-sm-3 {
    font-size: 3rem !important;
  }
  .fs-sm-2 {
    font-size: 3.5rem !important;
  }
  .fs-sm-1 {
    font-size: 3.75rem !important;
  }
  .lh-sm-1 {
    line-height: 1 !important;
  }
  .lh-sm-sm {
    line-height: 1.2 !important;
  }
  .lh-sm-base {
    line-height: 1.084 !important;
  }
  .lh-sm-lg {
    line-height: 1.6 !important;
  }
  .lh-sm-xl {
    line-height: 1.8 !important;
  }
  .text-sm-start {
    text-align: left !important;
  }
  .text-sm-end {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
  .text-sm-justify {
    text-align: justify !important;
  }
  .rounded-sm {
    border-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-sm-0 {
    border-radius: 0 !important;
  }
  .rounded-sm-1 {
    border-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-sm-2 {
    border-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-sm-3 {
    border-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-sm-4 {
    border-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-sm-5 {
    border-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-sm-circle {
    border-radius: 50% !important;
  }
  .rounded-sm-pill {
    border-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .rounded-top-sm {
    border-top-left-radius: var(--brainwaveio-border-radius) !important;
    border-top-right-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-top-sm-0 {
    border-top-left-radius: 0 !important;
    border-top-right-radius: 0 !important;
  }
  .rounded-top-sm-1 {
    border-top-left-radius: var(--brainwaveio-border-radius-sm) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-top-sm-2 {
    border-top-left-radius: var(--brainwaveio-border-radius) !important;
    border-top-right-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-top-sm-3 {
    border-top-left-radius: var(--brainwaveio-border-radius-lg) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-top-sm-4 {
    border-top-left-radius: var(--brainwaveio-border-radius-xl) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-top-sm-5 {
    border-top-left-radius: var(--brainwaveio-border-radius-xxl) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-top-sm-circle {
    border-top-left-radius: 50% !important;
    border-top-right-radius: 50% !important;
  }
  .rounded-top-sm-pill {
    border-top-left-radius: var(--brainwaveio-border-radius-pill) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .rounded-end-sm {
    border-top-right-radius: var(--brainwaveio-border-radius) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-end-sm-0 {
    border-top-right-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
  }
  .rounded-end-sm-1 {
    border-top-right-radius: var(--brainwaveio-border-radius-sm) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-end-sm-2 {
    border-top-right-radius: var(--brainwaveio-border-radius) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-end-sm-3 {
    border-top-right-radius: var(--brainwaveio-border-radius-lg) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-end-sm-4 {
    border-top-right-radius: var(--brainwaveio-border-radius-xl) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-end-sm-5 {
    border-top-right-radius: var(--brainwaveio-border-radius-xxl) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-end-sm-circle {
    border-top-right-radius: 50% !important;
    border-bottom-right-radius: 50% !important;
  }
  .rounded-end-sm-pill {
    border-top-right-radius: var(--brainwaveio-border-radius-pill) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .rounded-bottom-sm {
    border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-bottom-sm-0 {
    border-bottom-right-radius: 0 !important;
    border-bottom-left-radius: 0 !important;
  }
  .rounded-bottom-sm-1 {
    border-bottom-right-radius: var(--brainwaveio-border-radius-sm) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-bottom-sm-2 {
    border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-bottom-sm-3 {
    border-bottom-right-radius: var(--brainwaveio-border-radius-lg) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-bottom-sm-4 {
    border-bottom-right-radius: var(--brainwaveio-border-radius-xl) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-bottom-sm-5 {
    border-bottom-right-radius: var(--brainwaveio-border-radius-xxl) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-bottom-sm-circle {
    border-bottom-right-radius: 50% !important;
    border-bottom-left-radius: 50% !important;
  }
  .rounded-bottom-sm-pill {
    border-bottom-right-radius: var(--brainwaveio-border-radius-pill) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .rounded-start-sm {
    border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
    border-top-left-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-start-sm-0 {
    border-bottom-left-radius: 0 !important;
    border-top-left-radius: 0 !important;
  }
  .rounded-start-sm-1 {
    border-bottom-left-radius: var(--brainwaveio-border-radius-sm) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-start-sm-2 {
    border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
    border-top-left-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-start-sm-3 {
    border-bottom-left-radius: var(--brainwaveio-border-radius-lg) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-start-sm-4 {
    border-bottom-left-radius: var(--brainwaveio-border-radius-xl) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-start-sm-5 {
    border-bottom-left-radius: var(--brainwaveio-border-radius-xxl) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-start-sm-circle {
    border-bottom-left-radius: 50% !important;
    border-top-left-radius: 50% !important;
  }
  .rounded-start-sm-pill {
    border-bottom-left-radius: var(--brainwaveio-border-radius-pill) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .ls-sm-1 {
    letter-spacing: 0.3px !important;
  }
  .ls-sm-2 {
    letter-spacing: 1.63px !important;
  }
  .max-vh-sm-25 {
    max-height: 25vh !important;
  }
  .max-vh-sm-50 {
    max-height: 50vh !important;
  }
  .max-vh-sm-75 {
    max-height: 75vh !important;
  }
  .max-vh-sm-100 {
    max-height: 100vh !important;
  }
  .border-top-sm-0 {
    border-top-width: 0 !important;
  }
  .border-top-sm-1 {
    border-top-width: 1px !important;
  }
  .border-top-sm-2 {
    border-top-width: 2px !important;
  }
  .border-top-sm-3 {
    border-top-width: 3px !important;
  }
  .border-top-sm-4 {
    border-top-width: 4px !important;
  }
  .border-top-sm-5 {
    border-top-width: 5px !important;
  }
  .border-end-sm-0 {
    border-right-width: 0 !important;
  }
  .border-end-sm-1 {
    border-right-width: 1px !important;
  }
  .border-end-sm-2 {
    border-right-width: 2px !important;
  }
  .border-end-sm-3 {
    border-right-width: 3px !important;
  }
  .border-end-sm-4 {
    border-right-width: 4px !important;
  }
  .border-end-sm-5 {
    border-right-width: 5px !important;
  }
  .border-start-sm-0 {
    border-left-width: 0 !important;
  }
  .border-start-sm-1 {
    border-left-width: 1px !important;
  }
  .border-start-sm-2 {
    border-left-width: 2px !important;
  }
  .border-start-sm-3 {
    border-left-width: 3px !important;
  }
  .border-start-sm-4 {
    border-left-width: 4px !important;
  }
  .border-start-sm-5 {
    border-left-width: 5px !important;
  }
  .border-bottom-sm-0 {
    border-bottom-width: 0 !important;
  }
  .border-bottom-sm-1 {
    border-bottom-width: 1px !important;
  }
  .border-bottom-sm-2 {
    border-bottom-width: 2px !important;
  }
  .border-bottom-sm-3 {
    border-bottom-width: 3px !important;
  }
  .border-bottom-sm-4 {
    border-bottom-width: 4px !important;
  }
  .border-bottom-sm-5 {
    border-bottom-width: 5px !important;
  }
  .border-x-sm-0 {
    border-left-width: 0 !important;
    border-right-width: 0 !important;
  }
  .border-x-sm-1 {
    border-left-width: 1px !important;
    border-right-width: 1px !important;
  }
  .border-x-sm-2 {
    border-left-width: 2px !important;
    border-right-width: 2px !important;
  }
  .border-x-sm-3 {
    border-left-width: 3px !important;
    border-right-width: 3px !important;
  }
  .border-x-sm-4 {
    border-left-width: 4px !important;
    border-right-width: 4px !important;
  }
  .border-x-sm-5 {
    border-left-width: 5px !important;
    border-right-width: 5px !important;
  }
  .border-y-sm-0 {
    border-top-width: 0 !important;
    border-bottom-width: 0 !important;
  }
  .border-y-sm-1 {
    border-top-width: 1px !important;
    border-bottom-width: 1px !important;
  }
  .border-y-sm-2 {
    border-top-width: 2px !important;
    border-bottom-width: 2px !important;
  }
  .border-y-sm-3 {
    border-top-width: 3px !important;
    border-bottom-width: 3px !important;
  }
  .border-y-sm-4 {
    border-top-width: 4px !important;
    border-bottom-width: 4px !important;
  }
  .border-y-sm-5 {
    border-top-width: 5px !important;
    border-bottom-width: 5px !important;
  }
}
@media (min-width: 768px) {
  .float-md-start {
    float: left !important;
  }
  .float-md-end {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
  .object-fit-md-contain {
    -o-object-fit: contain !important;
    object-fit: contain !important;
  }
  .object-fit-md-cover {
    -o-object-fit: cover !important;
    object-fit: cover !important;
  }
  .object-fit-md-fill {
    -o-object-fit: fill !important;
    object-fit: fill !important;
  }
  .object-fit-md-scale {
    -o-object-fit: scale-down !important;
    object-fit: scale-down !important;
  }
  .object-fit-md-none {
    -o-object-fit: none !important;
    object-fit: none !important;
  }
  .opacity-md-0 {
    opacity: 0 !important;
  }
  .opacity-md-25 {
    opacity: 0.25 !important;
  }
  .opacity-md-50 {
    opacity: 0.5 !important;
  }
  .opacity-md-65 {
    opacity: 0.65 !important;
  }
  .opacity-md-70 {
    opacity: 0.7 !important;
  }
  .opacity-md-75 {
    opacity: 0.75 !important;
  }
  .opacity-md-100 {
    opacity: 1 !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-grid {
    display: grid !important;
  }
  .d-md-inline-grid {
    display: inline-grid !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-md-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
  .d-md-none {
    display: none !important;
  }
  .position-md-static {
    position: static !important;
  }
  .position-md-absolute {
    position: absolute !important;
  }
  .position-md-relative {
    position: relative !important;
  }
  .position-md-fixed {
    position: fixed !important;
  }
  .position-md-sticky {
    position: sticky !important;
  }
  .translate-middle-md {
    -webkit-transform: translate(-50%, -50%) !important;
    -ms-transform: translate(-50%, -50%) !important;
    transform: translate(-50%, -50%) !important;
  }
  .translate-middle-md-x {
    -webkit-transform: translateX(-50%) !important;
    -ms-transform: translateX(-50%) !important;
    transform: translateX(-50%) !important;
  }
  .translate-middle-md-y {
    -webkit-transform: translateY(-50%) !important;
    -ms-transform: translateY(-50%) !important;
    transform: translateY(-50%) !important;
  }
  .border-md {
    border: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-md-0 {
    border: 0 !important;
  }
  .border-top-md {
    border-top: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-end-md {
    border-right: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-bottom-md {
    border-bottom: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-start-md {
    border-left: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-md-1 {
    --brainwaveio-border-width: 1px;
  }
  .border-md-2 {
    --brainwaveio-border-width: 2px;
  }
  .border-md-3 {
    --brainwaveio-border-width: 3px;
  }
  .border-md-4 {
    --brainwaveio-border-width: 4px;
  }
  .border-md-5 {
    --brainwaveio-border-width: 5px;
  }
  .w-md-25 {
    width: 25% !important;
  }
  .w-md-50 {
    width: 50% !important;
  }
  .w-md-75 {
    width: 75% !important;
  }
  .w-md-100 {
    width: 100% !important;
  }
  .w-md-auto {
    width: auto !important;
  }
  .vw-md-25 {
    width: 25vw !important;
  }
  .vw-md-50 {
    width: 50vw !important;
  }
  .vw-md-75 {
    width: 75vw !important;
  }
  .vw-md-100 {
    width: 100vw !important;
  }
  .h-md-25 {
    height: 25% !important;
  }
  .h-md-50 {
    height: 50% !important;
  }
  .h-md-75 {
    height: 75% !important;
  }
  .h-md-100 {
    height: 100% !important;
  }
  .h-md-auto {
    height: auto !important;
  }
  .vh-md-25 {
    height: 25vh !important;
  }
  .vh-md-50 {
    height: 50vh !important;
  }
  .vh-md-75 {
    height: 75vh !important;
  }
  .vh-md-100 {
    height: 100vh !important;
  }
  .min-vh-md-25 {
    min-height: 25vh !important;
  }
  .min-vh-md-50 {
    min-height: 50vh !important;
  }
  .min-vh-md-75 {
    min-height: 75vh !important;
  }
  .min-vh-md-100 {
    min-height: 100vh !important;
  }
  .flex-md-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-md-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-md-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-md-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-md-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-md-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .justify-content-md-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important;
  }
  .align-items-md-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-md-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-md-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-md-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
  .order-md-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important;
  }
  .order-md-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important;
  }
  .order-md-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important;
  }
  .order-md-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important;
  }
  .order-md-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important;
  }
  .order-md-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important;
  }
  .order-md-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important;
  }
  .order-md-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important;
  }
  .m-md-0 {
    margin: 0 !important;
  }
  .m-md-1 {
    margin: 0.5rem !important;
  }
  .m-md-2 {
    margin: 1rem !important;
  }
  .m-md-3 {
    margin: 2rem !important;
  }
  .m-md-4 {
    margin: 2.5rem !important;
  }
  .m-md-5 {
    margin: 3rem !important;
  }
  .m-md-6 {
    margin: 3.5rem !important;
  }
  .m-md-7 {
    margin: 4rem !important;
  }
  .m-md-8 {
    margin: 4.5rem !important;
  }
  .m-md-9 {
    margin: 6rem !important;
  }
  .m-md-10 {
    margin: 7rem !important;
  }
  .m-md-11 {
    margin: 8rem !important;
  }
  .m-md-12 {
    margin: 9rem !important;
  }
  .m-md-13 {
    margin: 9.5rem !important;
  }
  .m-md-x1 {
    margin: 1.5rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mx-md-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-md-1 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-md-2 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-md-3 {
    margin-right: 2rem !important;
    margin-left: 2rem !important;
  }
  .mx-md-4 {
    margin-right: 2.5rem !important;
    margin-left: 2.5rem !important;
  }
  .mx-md-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-md-6 {
    margin-right: 3.5rem !important;
    margin-left: 3.5rem !important;
  }
  .mx-md-7 {
    margin-right: 4rem !important;
    margin-left: 4rem !important;
  }
  .mx-md-8 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important;
  }
  .mx-md-9 {
    margin-right: 6rem !important;
    margin-left: 6rem !important;
  }
  .mx-md-10 {
    margin-right: 7rem !important;
    margin-left: 7rem !important;
  }
  .mx-md-11 {
    margin-right: 8rem !important;
    margin-left: 8rem !important;
  }
  .mx-md-12 {
    margin-right: 9rem !important;
    margin-left: 9rem !important;
  }
  .mx-md-13 {
    margin-right: 9.5rem !important;
    margin-left: 9.5rem !important;
  }
  .mx-md-x1 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-md-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-md-1 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-md-2 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-md-3 {
    margin-top: 2rem !important;
    margin-bottom: 2rem !important;
  }
  .my-md-4 {
    margin-top: 2.5rem !important;
    margin-bottom: 2.5rem !important;
  }
  .my-md-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-md-6 {
    margin-top: 3.5rem !important;
    margin-bottom: 3.5rem !important;
  }
  .my-md-7 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important;
  }
  .my-md-8 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important;
  }
  .my-md-9 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }
  .my-md-10 {
    margin-top: 7rem !important;
    margin-bottom: 7rem !important;
  }
  .my-md-11 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important;
  }
  .my-md-12 {
    margin-top: 9rem !important;
    margin-bottom: 9rem !important;
  }
  .my-md-13 {
    margin-top: 9.5rem !important;
    margin-bottom: 9.5rem !important;
  }
  .my-md-x1 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-md-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-md-0 {
    margin-top: 0 !important;
  }
  .mt-md-1 {
    margin-top: 0.5rem !important;
  }
  .mt-md-2 {
    margin-top: 1rem !important;
  }
  .mt-md-3 {
    margin-top: 2rem !important;
  }
  .mt-md-4 {
    margin-top: 2.5rem !important;
  }
  .mt-md-5 {
    margin-top: 3rem !important;
  }
  .mt-md-6 {
    margin-top: 3.5rem !important;
  }
  .mt-md-7 {
    margin-top: 4rem !important;
  }
  .mt-md-8 {
    margin-top: 4.5rem !important;
  }
  .mt-md-9 {
    margin-top: 6rem !important;
  }
  .mt-md-10 {
    margin-top: 7rem !important;
  }
  .mt-md-11 {
    margin-top: 8rem !important;
  }
  .mt-md-12 {
    margin-top: 9rem !important;
  }
  .mt-md-13 {
    margin-top: 9.5rem !important;
  }
  .mt-md-x1 {
    margin-top: 1.5rem !important;
  }
  .mt-md-auto {
    margin-top: auto !important;
  }
  .me-md-0 {
    margin-right: 0 !important;
  }
  .me-md-1 {
    margin-right: 0.5rem !important;
  }
  .me-md-2 {
    margin-right: 1rem !important;
  }
  .me-md-3 {
    margin-right: 2rem !important;
  }
  .me-md-4 {
    margin-right: 2.5rem !important;
  }
  .me-md-5 {
    margin-right: 3rem !important;
  }
  .me-md-6 {
    margin-right: 3.5rem !important;
  }
  .me-md-7 {
    margin-right: 4rem !important;
  }
  .me-md-8 {
    margin-right: 4.5rem !important;
  }
  .me-md-9 {
    margin-right: 6rem !important;
  }
  .me-md-10 {
    margin-right: 7rem !important;
  }
  .me-md-11 {
    margin-right: 8rem !important;
  }
  .me-md-12 {
    margin-right: 9rem !important;
  }
  .me-md-13 {
    margin-right: 9.5rem !important;
  }
  .me-md-x1 {
    margin-right: 1.5rem !important;
  }
  .me-md-auto {
    margin-right: auto !important;
  }
  .mb-md-0 {
    margin-bottom: 0 !important;
  }
  .mb-md-1 {
    margin-bottom: 0.5rem !important;
  }
  .mb-md-2 {
    margin-bottom: 1rem !important;
  }
  .mb-md-3 {
    margin-bottom: 2rem !important;
  }
  .mb-md-4 {
    margin-bottom: 2.5rem !important;
  }
  .mb-md-5 {
    margin-bottom: 3rem !important;
  }
  .mb-md-6 {
    margin-bottom: 3.5rem !important;
  }
  .mb-md-7 {
    margin-bottom: 4rem !important;
  }
  .mb-md-8 {
    margin-bottom: 4.5rem !important;
  }
  .mb-md-9 {
    margin-bottom: 6rem !important;
  }
  .mb-md-10 {
    margin-bottom: 7rem !important;
  }
  .mb-md-11 {
    margin-bottom: 8rem !important;
  }
  .mb-md-12 {
    margin-bottom: 9rem !important;
  }
  .mb-md-13 {
    margin-bottom: 9.5rem !important;
  }
  .mb-md-x1 {
    margin-bottom: 1.5rem !important;
  }
  .mb-md-auto {
    margin-bottom: auto !important;
  }
  .ms-md-0 {
    margin-left: 0 !important;
  }
  .ms-md-1 {
    margin-left: 0.5rem !important;
  }
  .ms-md-2 {
    margin-left: 1rem !important;
  }
  .ms-md-3 {
    margin-left: 2rem !important;
  }
  .ms-md-4 {
    margin-left: 2.5rem !important;
  }
  .ms-md-5 {
    margin-left: 3rem !important;
  }
  .ms-md-6 {
    margin-left: 3.5rem !important;
  }
  .ms-md-7 {
    margin-left: 4rem !important;
  }
  .ms-md-8 {
    margin-left: 4.5rem !important;
  }
  .ms-md-9 {
    margin-left: 6rem !important;
  }
  .ms-md-10 {
    margin-left: 7rem !important;
  }
  .ms-md-11 {
    margin-left: 8rem !important;
  }
  .ms-md-12 {
    margin-left: 9rem !important;
  }
  .ms-md-13 {
    margin-left: 9.5rem !important;
  }
  .ms-md-x1 {
    margin-left: 1.5rem !important;
  }
  .ms-md-auto {
    margin-left: auto !important;
  }
  .m-md-n1 {
    margin: -0.5rem !important;
  }
  .m-md-n2 {
    margin: -1rem !important;
  }
  .m-md-n3 {
    margin: -2rem !important;
  }
  .m-md-n4 {
    margin: -2.5rem !important;
  }
  .m-md-n5 {
    margin: -3rem !important;
  }
  .m-md-n6 {
    margin: -3.5rem !important;
  }
  .m-md-n7 {
    margin: -4rem !important;
  }
  .m-md-n8 {
    margin: -4.5rem !important;
  }
  .m-md-n9 {
    margin: -6rem !important;
  }
  .m-md-n10 {
    margin: -7rem !important;
  }
  .m-md-n11 {
    margin: -8rem !important;
  }
  .m-md-n12 {
    margin: -9rem !important;
  }
  .m-md-n13 {
    margin: -9.5rem !important;
  }
  .m-md-nx1 {
    margin: -1.5rem !important;
  }
  .mx-md-n1 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-md-n2 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-md-n3 {
    margin-right: -2rem !important;
    margin-left: -2rem !important;
  }
  .mx-md-n4 {
    margin-right: -2.5rem !important;
    margin-left: -2.5rem !important;
  }
  .mx-md-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .mx-md-n6 {
    margin-right: -3.5rem !important;
    margin-left: -3.5rem !important;
  }
  .mx-md-n7 {
    margin-right: -4rem !important;
    margin-left: -4rem !important;
  }
  .mx-md-n8 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important;
  }
  .mx-md-n9 {
    margin-right: -6rem !important;
    margin-left: -6rem !important;
  }
  .mx-md-n10 {
    margin-right: -7rem !important;
    margin-left: -7rem !important;
  }
  .mx-md-n11 {
    margin-right: -8rem !important;
    margin-left: -8rem !important;
  }
  .mx-md-n12 {
    margin-right: -9rem !important;
    margin-left: -9rem !important;
  }
  .mx-md-n13 {
    margin-right: -9.5rem !important;
    margin-left: -9.5rem !important;
  }
  .mx-md-nx1 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .my-md-n1 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-md-n2 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-md-n3 {
    margin-top: -2rem !important;
    margin-bottom: -2rem !important;
  }
  .my-md-n4 {
    margin-top: -2.5rem !important;
    margin-bottom: -2.5rem !important;
  }
  .my-md-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .my-md-n6 {
    margin-top: -3.5rem !important;
    margin-bottom: -3.5rem !important;
  }
  .my-md-n7 {
    margin-top: -4rem !important;
    margin-bottom: -4rem !important;
  }
  .my-md-n8 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important;
  }
  .my-md-n9 {
    margin-top: -6rem !important;
    margin-bottom: -6rem !important;
  }
  .my-md-n10 {
    margin-top: -7rem !important;
    margin-bottom: -7rem !important;
  }
  .my-md-n11 {
    margin-top: -8rem !important;
    margin-bottom: -8rem !important;
  }
  .my-md-n12 {
    margin-top: -9rem !important;
    margin-bottom: -9rem !important;
  }
  .my-md-n13 {
    margin-top: -9.5rem !important;
    margin-bottom: -9.5rem !important;
  }
  .my-md-nx1 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .mt-md-n1 {
    margin-top: -0.5rem !important;
  }
  .mt-md-n2 {
    margin-top: -1rem !important;
  }
  .mt-md-n3 {
    margin-top: -2rem !important;
  }
  .mt-md-n4 {
    margin-top: -2.5rem !important;
  }
  .mt-md-n5 {
    margin-top: -3rem !important;
  }
  .mt-md-n6 {
    margin-top: -3.5rem !important;
  }
  .mt-md-n7 {
    margin-top: -4rem !important;
  }
  .mt-md-n8 {
    margin-top: -4.5rem !important;
  }
  .mt-md-n9 {
    margin-top: -6rem !important;
  }
  .mt-md-n10 {
    margin-top: -7rem !important;
  }
  .mt-md-n11 {
    margin-top: -8rem !important;
  }
  .mt-md-n12 {
    margin-top: -9rem !important;
  }
  .mt-md-n13 {
    margin-top: -9.5rem !important;
  }
  .mt-md-nx1 {
    margin-top: -1.5rem !important;
  }
  .me-md-n1 {
    margin-right: -0.5rem !important;
  }
  .me-md-n2 {
    margin-right: -1rem !important;
  }
  .me-md-n3 {
    margin-right: -2rem !important;
  }
  .me-md-n4 {
    margin-right: -2.5rem !important;
  }
  .me-md-n5 {
    margin-right: -3rem !important;
  }
  .me-md-n6 {
    margin-right: -3.5rem !important;
  }
  .me-md-n7 {
    margin-right: -4rem !important;
  }
  .me-md-n8 {
    margin-right: -4.5rem !important;
  }
  .me-md-n9 {
    margin-right: -6rem !important;
  }
  .me-md-n10 {
    margin-right: -7rem !important;
  }
  .me-md-n11 {
    margin-right: -8rem !important;
  }
  .me-md-n12 {
    margin-right: -9rem !important;
  }
  .me-md-n13 {
    margin-right: -9.5rem !important;
  }
  .me-md-nx1 {
    margin-right: -1.5rem !important;
  }
  .mb-md-n1 {
    margin-bottom: -0.5rem !important;
  }
  .mb-md-n2 {
    margin-bottom: -1rem !important;
  }
  .mb-md-n3 {
    margin-bottom: -2rem !important;
  }
  .mb-md-n4 {
    margin-bottom: -2.5rem !important;
  }
  .mb-md-n5 {
    margin-bottom: -3rem !important;
  }
  .mb-md-n6 {
    margin-bottom: -3.5rem !important;
  }
  .mb-md-n7 {
    margin-bottom: -4rem !important;
  }
  .mb-md-n8 {
    margin-bottom: -4.5rem !important;
  }
  .mb-md-n9 {
    margin-bottom: -6rem !important;
  }
  .mb-md-n10 {
    margin-bottom: -7rem !important;
  }
  .mb-md-n11 {
    margin-bottom: -8rem !important;
  }
  .mb-md-n12 {
    margin-bottom: -9rem !important;
  }
  .mb-md-n13 {
    margin-bottom: -9.5rem !important;
  }
  .mb-md-nx1 {
    margin-bottom: -1.5rem !important;
  }
  .ms-md-n1 {
    margin-left: -0.5rem !important;
  }
  .ms-md-n2 {
    margin-left: -1rem !important;
  }
  .ms-md-n3 {
    margin-left: -2rem !important;
  }
  .ms-md-n4 {
    margin-left: -2.5rem !important;
  }
  .ms-md-n5 {
    margin-left: -3rem !important;
  }
  .ms-md-n6 {
    margin-left: -3.5rem !important;
  }
  .ms-md-n7 {
    margin-left: -4rem !important;
  }
  .ms-md-n8 {
    margin-left: -4.5rem !important;
  }
  .ms-md-n9 {
    margin-left: -6rem !important;
  }
  .ms-md-n10 {
    margin-left: -7rem !important;
  }
  .ms-md-n11 {
    margin-left: -8rem !important;
  }
  .ms-md-n12 {
    margin-left: -9rem !important;
  }
  .ms-md-n13 {
    margin-left: -9.5rem !important;
  }
  .ms-md-nx1 {
    margin-left: -1.5rem !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .p-md-1 {
    padding: 0.5rem !important;
  }
  .p-md-2 {
    padding: 1rem !important;
  }
  .p-md-3 {
    padding: 2rem !important;
  }
  .p-md-4 {
    padding: 2.5rem !important;
  }
  .p-md-5 {
    padding: 3rem !important;
  }
  .p-md-6 {
    padding: 3.5rem !important;
  }
  .p-md-7 {
    padding: 4rem !important;
  }
  .p-md-8 {
    padding: 4.5rem !important;
  }
  .p-md-9 {
    padding: 6rem !important;
  }
  .p-md-10 {
    padding: 7rem !important;
  }
  .p-md-11 {
    padding: 8rem !important;
  }
  .p-md-12 {
    padding: 9rem !important;
  }
  .p-md-13 {
    padding: 9.5rem !important;
  }
  .p-md-x1 {
    padding: 1.5rem !important;
  }
  .px-md-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-md-1 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-md-2 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-md-3 {
    padding-right: 2rem !important;
    padding-left: 2rem !important;
  }
  .px-md-4 {
    padding-right: 2.5rem !important;
    padding-left: 2.5rem !important;
  }
  .px-md-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .px-md-6 {
    padding-right: 3.5rem !important;
    padding-left: 3.5rem !important;
  }
  .px-md-7 {
    padding-right: 4rem !important;
    padding-left: 4rem !important;
  }
  .px-md-8 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important;
  }
  .px-md-9 {
    padding-right: 6rem !important;
    padding-left: 6rem !important;
  }
  .px-md-10 {
    padding-right: 7rem !important;
    padding-left: 7rem !important;
  }
  .px-md-11 {
    padding-right: 8rem !important;
    padding-left: 8rem !important;
  }
  .px-md-12 {
    padding-right: 9rem !important;
    padding-left: 9rem !important;
  }
  .px-md-13 {
    padding-right: 9.5rem !important;
    padding-left: 9.5rem !important;
  }
  .px-md-x1 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .py-md-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-md-1 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-md-2 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-md-3 {
    padding-top: 2rem !important;
    padding-bottom: 2rem !important;
  }
  .py-md-4 {
    padding-top: 2.5rem !important;
    padding-bottom: 2.5rem !important;
  }
  .py-md-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .py-md-6 {
    padding-top: 3.5rem !important;
    padding-bottom: 3.5rem !important;
  }
  .py-md-7 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important;
  }
  .py-md-8 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
  .py-md-9 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }
  .py-md-10 {
    padding-top: 7rem !important;
    padding-bottom: 7rem !important;
  }
  .py-md-11 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important;
  }
  .py-md-12 {
    padding-top: 9rem !important;
    padding-bottom: 9rem !important;
  }
  .py-md-13 {
    padding-top: 9.5rem !important;
    padding-bottom: 9.5rem !important;
  }
  .py-md-x1 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .pt-md-0 {
    padding-top: 0 !important;
  }
  .pt-md-1 {
    padding-top: 0.5rem !important;
  }
  .pt-md-2 {
    padding-top: 1rem !important;
  }
  .pt-md-3 {
    padding-top: 2rem !important;
  }
  .pt-md-4 {
    padding-top: 2.5rem !important;
  }
  .pt-md-5 {
    padding-top: 3rem !important;
  }
  .pt-md-6 {
    padding-top: 3.5rem !important;
  }
  .pt-md-7 {
    padding-top: 4rem !important;
  }
  .pt-md-8 {
    padding-top: 4.5rem !important;
  }
  .pt-md-9 {
    padding-top: 6rem !important;
  }
  .pt-md-10 {
    padding-top: 7rem !important;
  }
  .pt-md-11 {
    padding-top: 8rem !important;
  }
  .pt-md-12 {
    padding-top: 9rem !important;
  }
  .pt-md-13 {
    padding-top: 9.5rem !important;
  }
  .pt-md-x1 {
    padding-top: 1.5rem !important;
  }
  .pe-md-0 {
    padding-right: 0 !important;
  }
  .pe-md-1 {
    padding-right: 0.5rem !important;
  }
  .pe-md-2 {
    padding-right: 1rem !important;
  }
  .pe-md-3 {
    padding-right: 2rem !important;
  }
  .pe-md-4 {
    padding-right: 2.5rem !important;
  }
  .pe-md-5 {
    padding-right: 3rem !important;
  }
  .pe-md-6 {
    padding-right: 3.5rem !important;
  }
  .pe-md-7 {
    padding-right: 4rem !important;
  }
  .pe-md-8 {
    padding-right: 4.5rem !important;
  }
  .pe-md-9 {
    padding-right: 6rem !important;
  }
  .pe-md-10 {
    padding-right: 7rem !important;
  }
  .pe-md-11 {
    padding-right: 8rem !important;
  }
  .pe-md-12 {
    padding-right: 9rem !important;
  }
  .pe-md-13 {
    padding-right: 9.5rem !important;
  }
  .pe-md-x1 {
    padding-right: 1.5rem !important;
  }
  .pb-md-0 {
    padding-bottom: 0 !important;
  }
  .pb-md-1 {
    padding-bottom: 0.5rem !important;
  }
  .pb-md-2 {
    padding-bottom: 1rem !important;
  }
  .pb-md-3 {
    padding-bottom: 2rem !important;
  }
  .pb-md-4 {
    padding-bottom: 2.5rem !important;
  }
  .pb-md-5 {
    padding-bottom: 3rem !important;
  }
  .pb-md-6 {
    padding-bottom: 3.5rem !important;
  }
  .pb-md-7 {
    padding-bottom: 4rem !important;
  }
  .pb-md-8 {
    padding-bottom: 4.5rem !important;
  }
  .pb-md-9 {
    padding-bottom: 6rem !important;
  }
  .pb-md-10 {
    padding-bottom: 7rem !important;
  }
  .pb-md-11 {
    padding-bottom: 8rem !important;
  }
  .pb-md-12 {
    padding-bottom: 9rem !important;
  }
  .pb-md-13 {
    padding-bottom: 9.5rem !important;
  }
  .pb-md-x1 {
    padding-bottom: 1.5rem !important;
  }
  .ps-md-0 {
    padding-left: 0 !important;
  }
  .ps-md-1 {
    padding-left: 0.5rem !important;
  }
  .ps-md-2 {
    padding-left: 1rem !important;
  }
  .ps-md-3 {
    padding-left: 2rem !important;
  }
  .ps-md-4 {
    padding-left: 2.5rem !important;
  }
  .ps-md-5 {
    padding-left: 3rem !important;
  }
  .ps-md-6 {
    padding-left: 3.5rem !important;
  }
  .ps-md-7 {
    padding-left: 4rem !important;
  }
  .ps-md-8 {
    padding-left: 4.5rem !important;
  }
  .ps-md-9 {
    padding-left: 6rem !important;
  }
  .ps-md-10 {
    padding-left: 7rem !important;
  }
  .ps-md-11 {
    padding-left: 8rem !important;
  }
  .ps-md-12 {
    padding-left: 9rem !important;
  }
  .ps-md-13 {
    padding-left: 9.5rem !important;
  }
  .ps-md-x1 {
    padding-left: 1.5rem !important;
  }
  .gap-md-0 {
    gap: 0 !important;
  }
  .gap-md-1 {
    gap: 0.5rem !important;
  }
  .gap-md-2 {
    gap: 1rem !important;
  }
  .gap-md-3 {
    gap: 2rem !important;
  }
  .gap-md-4 {
    gap: 2.5rem !important;
  }
  .gap-md-5 {
    gap: 3rem !important;
  }
  .gap-md-6 {
    gap: 3.5rem !important;
  }
  .gap-md-7 {
    gap: 4rem !important;
  }
  .gap-md-8 {
    gap: 4.5rem !important;
  }
  .gap-md-9 {
    gap: 6rem !important;
  }
  .gap-md-10 {
    gap: 7rem !important;
  }
  .gap-md-11 {
    gap: 8rem !important;
  }
  .gap-md-12 {
    gap: 9rem !important;
  }
  .gap-md-13 {
    gap: 9.5rem !important;
  }
  .gap-md-x1 {
    gap: 1.5rem !important;
  }
  .row-gap-md-0 {
    row-gap: 0 !important;
  }
  .row-gap-md-1 {
    row-gap: 0.5rem !important;
  }
  .row-gap-md-2 {
    row-gap: 1rem !important;
  }
  .row-gap-md-3 {
    row-gap: 2rem !important;
  }
  .row-gap-md-4 {
    row-gap: 2.5rem !important;
  }
  .row-gap-md-5 {
    row-gap: 3rem !important;
  }
  .row-gap-md-6 {
    row-gap: 3.5rem !important;
  }
  .row-gap-md-7 {
    row-gap: 4rem !important;
  }
  .row-gap-md-8 {
    row-gap: 4.5rem !important;
  }
  .row-gap-md-9 {
    row-gap: 6rem !important;
  }
  .row-gap-md-10 {
    row-gap: 7rem !important;
  }
  .row-gap-md-11 {
    row-gap: 8rem !important;
  }
  .row-gap-md-12 {
    row-gap: 9rem !important;
  }
  .row-gap-md-13 {
    row-gap: 9.5rem !important;
  }
  .row-gap-md-x1 {
    row-gap: 1.5rem !important;
  }
  .column-gap-md-0 {
    -webkit-column-gap: 0 !important;
    -moz-column-gap: 0 !important;
    column-gap: 0 !important;
  }
  .column-gap-md-1 {
    -webkit-column-gap: 0.5rem !important;
    -moz-column-gap: 0.5rem !important;
    column-gap: 0.5rem !important;
  }
  .column-gap-md-2 {
    -webkit-column-gap: 1rem !important;
    -moz-column-gap: 1rem !important;
    column-gap: 1rem !important;
  }
  .column-gap-md-3 {
    -webkit-column-gap: 2rem !important;
    -moz-column-gap: 2rem !important;
    column-gap: 2rem !important;
  }
  .column-gap-md-4 {
    -webkit-column-gap: 2.5rem !important;
    -moz-column-gap: 2.5rem !important;
    column-gap: 2.5rem !important;
  }
  .column-gap-md-5 {
    -webkit-column-gap: 3rem !important;
    -moz-column-gap: 3rem !important;
    column-gap: 3rem !important;
  }
  .column-gap-md-6 {
    -webkit-column-gap: 3.5rem !important;
    -moz-column-gap: 3.5rem !important;
    column-gap: 3.5rem !important;
  }
  .column-gap-md-7 {
    -webkit-column-gap: 4rem !important;
    -moz-column-gap: 4rem !important;
    column-gap: 4rem !important;
  }
  .column-gap-md-8 {
    -webkit-column-gap: 4.5rem !important;
    -moz-column-gap: 4.5rem !important;
    column-gap: 4.5rem !important;
  }
  .column-gap-md-9 {
    -webkit-column-gap: 6rem !important;
    -moz-column-gap: 6rem !important;
    column-gap: 6rem !important;
  }
  .column-gap-md-10 {
    -webkit-column-gap: 7rem !important;
    -moz-column-gap: 7rem !important;
    column-gap: 7rem !important;
  }
  .column-gap-md-11 {
    -webkit-column-gap: 8rem !important;
    -moz-column-gap: 8rem !important;
    column-gap: 8rem !important;
  }
  .column-gap-md-12 {
    -webkit-column-gap: 9rem !important;
    -moz-column-gap: 9rem !important;
    column-gap: 9rem !important;
  }
  .column-gap-md-13 {
    -webkit-column-gap: 9.5rem !important;
    -moz-column-gap: 9.5rem !important;
    column-gap: 9.5rem !important;
  }
  .column-gap-md-x1 {
    -webkit-column-gap: 1.5rem !important;
    -moz-column-gap: 1.5rem !important;
    column-gap: 1.5rem !important;
  }
  .fs-md-10 {
    font-size: 0.875rem !important;
  }
  .fs-md-9 {
    font-size: 1rem !important;
  }
  .fs-md-8 {
    font-size: 1.25rem !important;
  }
  .fs-md-7 {
    font-size: 1.5rem !important;
  }
  .fs-md-6 {
    font-size: 1.875rem !important;
  }
  .fs-md-5 {
    font-size: 2.125rem !important;
  }
  .fs-md-4 {
    font-size: 2.5rem !important;
  }
  .fs-md-3 {
    font-size: 3rem !important;
  }
  .fs-md-2 {
    font-size: 3.5rem !important;
  }
  .fs-md-1 {
    font-size: 3.75rem !important;
  }
  .lh-md-1 {
    line-height: 1 !important;
  }
  .lh-md-sm {
    line-height: 1.2 !important;
  }
  .lh-md-base {
    line-height: 1.084 !important;
  }
  .lh-md-lg {
    line-height: 1.6 !important;
  }
  .lh-md-xl {
    line-height: 1.8 !important;
  }
  .text-md-start {
    text-align: left !important;
  }
  .text-md-end {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
  .text-md-justify {
    text-align: justify !important;
  }
  .rounded-md {
    border-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-md-0 {
    border-radius: 0 !important;
  }
  .rounded-md-1 {
    border-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-md-2 {
    border-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-md-3 {
    border-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-md-4 {
    border-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-md-5 {
    border-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-md-circle {
    border-radius: 50% !important;
  }
  .rounded-md-pill {
    border-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .rounded-top-md {
    border-top-left-radius: var(--brainwaveio-border-radius) !important;
    border-top-right-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-top-md-0 {
    border-top-left-radius: 0 !important;
    border-top-right-radius: 0 !important;
  }
  .rounded-top-md-1 {
    border-top-left-radius: var(--brainwaveio-border-radius-sm) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-top-md-2 {
    border-top-left-radius: var(--brainwaveio-border-radius) !important;
    border-top-right-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-top-md-3 {
    border-top-left-radius: var(--brainwaveio-border-radius-lg) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-top-md-4 {
    border-top-left-radius: var(--brainwaveio-border-radius-xl) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-top-md-5 {
    border-top-left-radius: var(--brainwaveio-border-radius-xxl) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-top-md-circle {
    border-top-left-radius: 50% !important;
    border-top-right-radius: 50% !important;
  }
  .rounded-top-md-pill {
    border-top-left-radius: var(--brainwaveio-border-radius-pill) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .rounded-end-md {
    border-top-right-radius: var(--brainwaveio-border-radius) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-end-md-0 {
    border-top-right-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
  }
  .rounded-end-md-1 {
    border-top-right-radius: var(--brainwaveio-border-radius-sm) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-end-md-2 {
    border-top-right-radius: var(--brainwaveio-border-radius) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-end-md-3 {
    border-top-right-radius: var(--brainwaveio-border-radius-lg) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-end-md-4 {
    border-top-right-radius: var(--brainwaveio-border-radius-xl) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-end-md-5 {
    border-top-right-radius: var(--brainwaveio-border-radius-xxl) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-end-md-circle {
    border-top-right-radius: 50% !important;
    border-bottom-right-radius: 50% !important;
  }
  .rounded-end-md-pill {
    border-top-right-radius: var(--brainwaveio-border-radius-pill) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .rounded-bottom-md {
    border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-bottom-md-0 {
    border-bottom-right-radius: 0 !important;
    border-bottom-left-radius: 0 !important;
  }
  .rounded-bottom-md-1 {
    border-bottom-right-radius: var(--brainwaveio-border-radius-sm) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-bottom-md-2 {
    border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-bottom-md-3 {
    border-bottom-right-radius: var(--brainwaveio-border-radius-lg) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-bottom-md-4 {
    border-bottom-right-radius: var(--brainwaveio-border-radius-xl) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-bottom-md-5 {
    border-bottom-right-radius: var(--brainwaveio-border-radius-xxl) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-bottom-md-circle {
    border-bottom-right-radius: 50% !important;
    border-bottom-left-radius: 50% !important;
  }
  .rounded-bottom-md-pill {
    border-bottom-right-radius: var(--brainwaveio-border-radius-pill) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .rounded-start-md {
    border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
    border-top-left-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-start-md-0 {
    border-bottom-left-radius: 0 !important;
    border-top-left-radius: 0 !important;
  }
  .rounded-start-md-1 {
    border-bottom-left-radius: var(--brainwaveio-border-radius-sm) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-start-md-2 {
    border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
    border-top-left-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-start-md-3 {
    border-bottom-left-radius: var(--brainwaveio-border-radius-lg) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-start-md-4 {
    border-bottom-left-radius: var(--brainwaveio-border-radius-xl) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-start-md-5 {
    border-bottom-left-radius: var(--brainwaveio-border-radius-xxl) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-start-md-circle {
    border-bottom-left-radius: 50% !important;
    border-top-left-radius: 50% !important;
  }
  .rounded-start-md-pill {
    border-bottom-left-radius: var(--brainwaveio-border-radius-pill) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .ls-md-1 {
    letter-spacing: 0.3px !important;
  }
  .ls-md-2 {
    letter-spacing: 1.63px !important;
  }
  .max-vh-md-25 {
    max-height: 25vh !important;
  }
  .max-vh-md-50 {
    max-height: 50vh !important;
  }
  .max-vh-md-75 {
    max-height: 75vh !important;
  }
  .max-vh-md-100 {
    max-height: 100vh !important;
  }
  .border-top-md-0 {
    border-top-width: 0 !important;
  }
  .border-top-md-1 {
    border-top-width: 1px !important;
  }
  .border-top-md-2 {
    border-top-width: 2px !important;
  }
  .border-top-md-3 {
    border-top-width: 3px !important;
  }
  .border-top-md-4 {
    border-top-width: 4px !important;
  }
  .border-top-md-5 {
    border-top-width: 5px !important;
  }
  .border-end-md-0 {
    border-right-width: 0 !important;
  }
  .border-end-md-1 {
    border-right-width: 1px !important;
  }
  .border-end-md-2 {
    border-right-width: 2px !important;
  }
  .border-end-md-3 {
    border-right-width: 3px !important;
  }
  .border-end-md-4 {
    border-right-width: 4px !important;
  }
  .border-end-md-5 {
    border-right-width: 5px !important;
  }
  .border-start-md-0 {
    border-left-width: 0 !important;
  }
  .border-start-md-1 {
    border-left-width: 1px !important;
  }
  .border-start-md-2 {
    border-left-width: 2px !important;
  }
  .border-start-md-3 {
    border-left-width: 3px !important;
  }
  .border-start-md-4 {
    border-left-width: 4px !important;
  }
  .border-start-md-5 {
    border-left-width: 5px !important;
  }
  .border-bottom-md-0 {
    border-bottom-width: 0 !important;
  }
  .border-bottom-md-1 {
    border-bottom-width: 1px !important;
  }
  .border-bottom-md-2 {
    border-bottom-width: 2px !important;
  }
  .border-bottom-md-3 {
    border-bottom-width: 3px !important;
  }
  .border-bottom-md-4 {
    border-bottom-width: 4px !important;
  }
  .border-bottom-md-5 {
    border-bottom-width: 5px !important;
  }
  .border-x-md-0 {
    border-left-width: 0 !important;
    border-right-width: 0 !important;
  }
  .border-x-md-1 {
    border-left-width: 1px !important;
    border-right-width: 1px !important;
  }
  .border-x-md-2 {
    border-left-width: 2px !important;
    border-right-width: 2px !important;
  }
  .border-x-md-3 {
    border-left-width: 3px !important;
    border-right-width: 3px !important;
  }
  .border-x-md-4 {
    border-left-width: 4px !important;
    border-right-width: 4px !important;
  }
  .border-x-md-5 {
    border-left-width: 5px !important;
    border-right-width: 5px !important;
  }
  .border-y-md-0 {
    border-top-width: 0 !important;
    border-bottom-width: 0 !important;
  }
  .border-y-md-1 {
    border-top-width: 1px !important;
    border-bottom-width: 1px !important;
  }
  .border-y-md-2 {
    border-top-width: 2px !important;
    border-bottom-width: 2px !important;
  }
  .border-y-md-3 {
    border-top-width: 3px !important;
    border-bottom-width: 3px !important;
  }
  .border-y-md-4 {
    border-top-width: 4px !important;
    border-bottom-width: 4px !important;
  }
  .border-y-md-5 {
    border-top-width: 5px !important;
    border-bottom-width: 5px !important;
  }
}
@media (min-width: 992px) {
  .float-lg-start {
    float: left !important;
  }
  .float-lg-end {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
  .object-fit-lg-contain {
    -o-object-fit: contain !important;
    object-fit: contain !important;
  }
  .object-fit-lg-cover {
    -o-object-fit: cover !important;
    object-fit: cover !important;
  }
  .object-fit-lg-fill {
    -o-object-fit: fill !important;
    object-fit: fill !important;
  }
  .object-fit-lg-scale {
    -o-object-fit: scale-down !important;
    object-fit: scale-down !important;
  }
  .object-fit-lg-none {
    -o-object-fit: none !important;
    object-fit: none !important;
  }
  .opacity-lg-0 {
    opacity: 0 !important;
  }
  .opacity-lg-25 {
    opacity: 0.25 !important;
  }
  .opacity-lg-50 {
    opacity: 0.5 !important;
  }
  .opacity-lg-65 {
    opacity: 0.65 !important;
  }
  .opacity-lg-70 {
    opacity: 0.7 !important;
  }
  .opacity-lg-75 {
    opacity: 0.75 !important;
  }
  .opacity-lg-100 {
    opacity: 1 !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-grid {
    display: grid !important;
  }
  .d-lg-inline-grid {
    display: inline-grid !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
  .d-lg-none {
    display: none !important;
  }
  .position-lg-static {
    position: static !important;
  }
  .position-lg-absolute {
    position: absolute !important;
  }
  .position-lg-relative {
    position: relative !important;
  }
  .position-lg-fixed {
    position: fixed !important;
  }
  .position-lg-sticky {
    position: sticky !important;
  }
  .translate-middle-lg {
    -webkit-transform: translate(-50%, -50%) !important;
    -ms-transform: translate(-50%, -50%) !important;
    transform: translate(-50%, -50%) !important;
  }
  .translate-middle-lg-x {
    -webkit-transform: translateX(-50%) !important;
    -ms-transform: translateX(-50%) !important;
    transform: translateX(-50%) !important;
  }
  .translate-middle-lg-y {
    -webkit-transform: translateY(-50%) !important;
    -ms-transform: translateY(-50%) !important;
    transform: translateY(-50%) !important;
  }
  .border-lg {
    border: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-lg-0 {
    border: 0 !important;
  }
  .border-top-lg {
    border-top: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-end-lg {
    border-right: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-bottom-lg {
    border-bottom: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-start-lg {
    border-left: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-lg-1 {
    --brainwaveio-border-width: 1px;
  }
  .border-lg-2 {
    --brainwaveio-border-width: 2px;
  }
  .border-lg-3 {
    --brainwaveio-border-width: 3px;
  }
  .border-lg-4 {
    --brainwaveio-border-width: 4px;
  }
  .border-lg-5 {
    --brainwaveio-border-width: 5px;
  }
  .w-lg-25 {
    width: 25% !important;
  }
  .w-lg-50 {
    width: 50% !important;
  }
  .w-lg-75 {
    width: 75% !important;
  }
  .w-lg-100 {
    width: 100% !important;
  }
  .w-lg-auto {
    width: auto !important;
  }
  .vw-lg-25 {
    width: 25vw !important;
  }
  .vw-lg-50 {
    width: 50vw !important;
  }
  .vw-lg-75 {
    width: 75vw !important;
  }
  .vw-lg-100 {
    width: 100vw !important;
  }
  .h-lg-25 {
    height: 25% !important;
  }
  .h-lg-50 {
    height: 50% !important;
  }
  .h-lg-75 {
    height: 75% !important;
  }
  .h-lg-100 {
    height: 100% !important;
  }
  .h-lg-auto {
    height: auto !important;
  }
  .vh-lg-25 {
    height: 25vh !important;
  }
  .vh-lg-50 {
    height: 50vh !important;
  }
  .vh-lg-75 {
    height: 75vh !important;
  }
  .vh-lg-100 {
    height: 100vh !important;
  }
  .min-vh-lg-25 {
    min-height: 25vh !important;
  }
  .min-vh-lg-50 {
    min-height: 50vh !important;
  }
  .min-vh-lg-75 {
    min-height: 75vh !important;
  }
  .min-vh-lg-100 {
    min-height: 100vh !important;
  }
  .flex-lg-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-lg-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-lg-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-lg-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-lg-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-lg-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .justify-content-lg-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important;
  }
  .align-items-lg-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-lg-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
  .order-lg-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important;
  }
  .order-lg-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important;
  }
  .order-lg-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important;
  }
  .order-lg-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important;
  }
  .order-lg-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important;
  }
  .order-lg-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important;
  }
  .order-lg-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important;
  }
  .order-lg-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important;
  }
  .m-lg-0 {
    margin: 0 !important;
  }
  .m-lg-1 {
    margin: 0.5rem !important;
  }
  .m-lg-2 {
    margin: 1rem !important;
  }
  .m-lg-3 {
    margin: 2rem !important;
  }
  .m-lg-4 {
    margin: 2.5rem !important;
  }
  .m-lg-5 {
    margin: 3rem !important;
  }
  .m-lg-6 {
    margin: 3.5rem !important;
  }
  .m-lg-7 {
    margin: 4rem !important;
  }
  .m-lg-8 {
    margin: 4.5rem !important;
  }
  .m-lg-9 {
    margin: 6rem !important;
  }
  .m-lg-10 {
    margin: 7rem !important;
  }
  .m-lg-11 {
    margin: 8rem !important;
  }
  .m-lg-12 {
    margin: 9rem !important;
  }
  .m-lg-13 {
    margin: 9.5rem !important;
  }
  .m-lg-x1 {
    margin: 1.5rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-lg-1 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-lg-2 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-lg-3 {
    margin-right: 2rem !important;
    margin-left: 2rem !important;
  }
  .mx-lg-4 {
    margin-right: 2.5rem !important;
    margin-left: 2.5rem !important;
  }
  .mx-lg-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-lg-6 {
    margin-right: 3.5rem !important;
    margin-left: 3.5rem !important;
  }
  .mx-lg-7 {
    margin-right: 4rem !important;
    margin-left: 4rem !important;
  }
  .mx-lg-8 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important;
  }
  .mx-lg-9 {
    margin-right: 6rem !important;
    margin-left: 6rem !important;
  }
  .mx-lg-10 {
    margin-right: 7rem !important;
    margin-left: 7rem !important;
  }
  .mx-lg-11 {
    margin-right: 8rem !important;
    margin-left: 8rem !important;
  }
  .mx-lg-12 {
    margin-right: 9rem !important;
    margin-left: 9rem !important;
  }
  .mx-lg-13 {
    margin-right: 9.5rem !important;
    margin-left: 9.5rem !important;
  }
  .mx-lg-x1 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-lg-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-lg-1 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-lg-2 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-lg-3 {
    margin-top: 2rem !important;
    margin-bottom: 2rem !important;
  }
  .my-lg-4 {
    margin-top: 2.5rem !important;
    margin-bottom: 2.5rem !important;
  }
  .my-lg-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-lg-6 {
    margin-top: 3.5rem !important;
    margin-bottom: 3.5rem !important;
  }
  .my-lg-7 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important;
  }
  .my-lg-8 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important;
  }
  .my-lg-9 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }
  .my-lg-10 {
    margin-top: 7rem !important;
    margin-bottom: 7rem !important;
  }
  .my-lg-11 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important;
  }
  .my-lg-12 {
    margin-top: 9rem !important;
    margin-bottom: 9rem !important;
  }
  .my-lg-13 {
    margin-top: 9.5rem !important;
    margin-bottom: 9.5rem !important;
  }
  .my-lg-x1 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-lg-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-lg-0 {
    margin-top: 0 !important;
  }
  .mt-lg-1 {
    margin-top: 0.5rem !important;
  }
  .mt-lg-2 {
    margin-top: 1rem !important;
  }
  .mt-lg-3 {
    margin-top: 2rem !important;
  }
  .mt-lg-4 {
    margin-top: 2.5rem !important;
  }
  .mt-lg-5 {
    margin-top: 3rem !important;
  }
  .mt-lg-6 {
    margin-top: 3.5rem !important;
  }
  .mt-lg-7 {
    margin-top: 4rem !important;
  }
  .mt-lg-8 {
    margin-top: 4.5rem !important;
  }
  .mt-lg-9 {
    margin-top: 6rem !important;
  }
  .mt-lg-10 {
    margin-top: 7rem !important;
  }
  .mt-lg-11 {
    margin-top: 8rem !important;
  }
  .mt-lg-12 {
    margin-top: 9rem !important;
  }
  .mt-lg-13 {
    margin-top: 9.5rem !important;
  }
  .mt-lg-x1 {
    margin-top: 1.5rem !important;
  }
  .mt-lg-auto {
    margin-top: auto !important;
  }
  .me-lg-0 {
    margin-right: 0 !important;
  }
  .me-lg-1 {
    margin-right: 0.5rem !important;
  }
  .me-lg-2 {
    margin-right: 1rem !important;
  }
  .me-lg-3 {
    margin-right: 2rem !important;
  }
  .me-lg-4 {
    margin-right: 2.5rem !important;
  }
  .me-lg-5 {
    margin-right: 3rem !important;
  }
  .me-lg-6 {
    margin-right: 3.5rem !important;
  }
  .me-lg-7 {
    margin-right: 4rem !important;
  }
  .me-lg-8 {
    margin-right: 4.5rem !important;
  }
  .me-lg-9 {
    margin-right: 6rem !important;
  }
  .me-lg-10 {
    margin-right: 7rem !important;
  }
  .me-lg-11 {
    margin-right: 8rem !important;
  }
  .me-lg-12 {
    margin-right: 9rem !important;
  }
  .me-lg-13 {
    margin-right: 9.5rem !important;
  }
  .me-lg-x1 {
    margin-right: 1.5rem !important;
  }
  .me-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-0 {
    margin-bottom: 0 !important;
  }
  .mb-lg-1 {
    margin-bottom: 0.5rem !important;
  }
  .mb-lg-2 {
    margin-bottom: 1rem !important;
  }
  .mb-lg-3 {
    margin-bottom: 2rem !important;
  }
  .mb-lg-4 {
    margin-bottom: 2.5rem !important;
  }
  .mb-lg-5 {
    margin-bottom: 3rem !important;
  }
  .mb-lg-6 {
    margin-bottom: 3.5rem !important;
  }
  .mb-lg-7 {
    margin-bottom: 4rem !important;
  }
  .mb-lg-8 {
    margin-bottom: 4.5rem !important;
  }
  .mb-lg-9 {
    margin-bottom: 6rem !important;
  }
  .mb-lg-10 {
    margin-bottom: 7rem !important;
  }
  .mb-lg-11 {
    margin-bottom: 8rem !important;
  }
  .mb-lg-12 {
    margin-bottom: 9rem !important;
  }
  .mb-lg-13 {
    margin-bottom: 9.5rem !important;
  }
  .mb-lg-x1 {
    margin-bottom: 1.5rem !important;
  }
  .mb-lg-auto {
    margin-bottom: auto !important;
  }
  .ms-lg-0 {
    margin-left: 0 !important;
  }
  .ms-lg-1 {
    margin-left: 0.5rem !important;
  }
  .ms-lg-2 {
    margin-left: 1rem !important;
  }
  .ms-lg-3 {
    margin-left: 2rem !important;
  }
  .ms-lg-4 {
    margin-left: 2.5rem !important;
  }
  .ms-lg-5 {
    margin-left: 3rem !important;
  }
  .ms-lg-6 {
    margin-left: 3.5rem !important;
  }
  .ms-lg-7 {
    margin-left: 4rem !important;
  }
  .ms-lg-8 {
    margin-left: 4.5rem !important;
  }
  .ms-lg-9 {
    margin-left: 6rem !important;
  }
  .ms-lg-10 {
    margin-left: 7rem !important;
  }
  .ms-lg-11 {
    margin-left: 8rem !important;
  }
  .ms-lg-12 {
    margin-left: 9rem !important;
  }
  .ms-lg-13 {
    margin-left: 9.5rem !important;
  }
  .ms-lg-x1 {
    margin-left: 1.5rem !important;
  }
  .ms-lg-auto {
    margin-left: auto !important;
  }
  .m-lg-n1 {
    margin: -0.5rem !important;
  }
  .m-lg-n2 {
    margin: -1rem !important;
  }
  .m-lg-n3 {
    margin: -2rem !important;
  }
  .m-lg-n4 {
    margin: -2.5rem !important;
  }
  .m-lg-n5 {
    margin: -3rem !important;
  }
  .m-lg-n6 {
    margin: -3.5rem !important;
  }
  .m-lg-n7 {
    margin: -4rem !important;
  }
  .m-lg-n8 {
    margin: -4.5rem !important;
  }
  .m-lg-n9 {
    margin: -6rem !important;
  }
  .m-lg-n10 {
    margin: -7rem !important;
  }
  .m-lg-n11 {
    margin: -8rem !important;
  }
  .m-lg-n12 {
    margin: -9rem !important;
  }
  .m-lg-n13 {
    margin: -9.5rem !important;
  }
  .m-lg-nx1 {
    margin: -1.5rem !important;
  }
  .mx-lg-n1 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-lg-n2 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-lg-n3 {
    margin-right: -2rem !important;
    margin-left: -2rem !important;
  }
  .mx-lg-n4 {
    margin-right: -2.5rem !important;
    margin-left: -2.5rem !important;
  }
  .mx-lg-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .mx-lg-n6 {
    margin-right: -3.5rem !important;
    margin-left: -3.5rem !important;
  }
  .mx-lg-n7 {
    margin-right: -4rem !important;
    margin-left: -4rem !important;
  }
  .mx-lg-n8 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important;
  }
  .mx-lg-n9 {
    margin-right: -6rem !important;
    margin-left: -6rem !important;
  }
  .mx-lg-n10 {
    margin-right: -7rem !important;
    margin-left: -7rem !important;
  }
  .mx-lg-n11 {
    margin-right: -8rem !important;
    margin-left: -8rem !important;
  }
  .mx-lg-n12 {
    margin-right: -9rem !important;
    margin-left: -9rem !important;
  }
  .mx-lg-n13 {
    margin-right: -9.5rem !important;
    margin-left: -9.5rem !important;
  }
  .mx-lg-nx1 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .my-lg-n1 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-lg-n2 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-lg-n3 {
    margin-top: -2rem !important;
    margin-bottom: -2rem !important;
  }
  .my-lg-n4 {
    margin-top: -2.5rem !important;
    margin-bottom: -2.5rem !important;
  }
  .my-lg-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .my-lg-n6 {
    margin-top: -3.5rem !important;
    margin-bottom: -3.5rem !important;
  }
  .my-lg-n7 {
    margin-top: -4rem !important;
    margin-bottom: -4rem !important;
  }
  .my-lg-n8 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important;
  }
  .my-lg-n9 {
    margin-top: -6rem !important;
    margin-bottom: -6rem !important;
  }
  .my-lg-n10 {
    margin-top: -7rem !important;
    margin-bottom: -7rem !important;
  }
  .my-lg-n11 {
    margin-top: -8rem !important;
    margin-bottom: -8rem !important;
  }
  .my-lg-n12 {
    margin-top: -9rem !important;
    margin-bottom: -9rem !important;
  }
  .my-lg-n13 {
    margin-top: -9.5rem !important;
    margin-bottom: -9.5rem !important;
  }
  .my-lg-nx1 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .mt-lg-n1 {
    margin-top: -0.5rem !important;
  }
  .mt-lg-n2 {
    margin-top: -1rem !important;
  }
  .mt-lg-n3 {
    margin-top: -2rem !important;
  }
  .mt-lg-n4 {
    margin-top: -2.5rem !important;
  }
  .mt-lg-n5 {
    margin-top: -3rem !important;
  }
  .mt-lg-n6 {
    margin-top: -3.5rem !important;
  }
  .mt-lg-n7 {
    margin-top: -4rem !important;
  }
  .mt-lg-n8 {
    margin-top: -4.5rem !important;
  }
  .mt-lg-n9 {
    margin-top: -6rem !important;
  }
  .mt-lg-n10 {
    margin-top: -7rem !important;
  }
  .mt-lg-n11 {
    margin-top: -8rem !important;
  }
  .mt-lg-n12 {
    margin-top: -9rem !important;
  }
  .mt-lg-n13 {
    margin-top: -9.5rem !important;
  }
  .mt-lg-nx1 {
    margin-top: -1.5rem !important;
  }
  .me-lg-n1 {
    margin-right: -0.5rem !important;
  }
  .me-lg-n2 {
    margin-right: -1rem !important;
  }
  .me-lg-n3 {
    margin-right: -2rem !important;
  }
  .me-lg-n4 {
    margin-right: -2.5rem !important;
  }
  .me-lg-n5 {
    margin-right: -3rem !important;
  }
  .me-lg-n6 {
    margin-right: -3.5rem !important;
  }
  .me-lg-n7 {
    margin-right: -4rem !important;
  }
  .me-lg-n8 {
    margin-right: -4.5rem !important;
  }
  .me-lg-n9 {
    margin-right: -6rem !important;
  }
  .me-lg-n10 {
    margin-right: -7rem !important;
  }
  .me-lg-n11 {
    margin-right: -8rem !important;
  }
  .me-lg-n12 {
    margin-right: -9rem !important;
  }
  .me-lg-n13 {
    margin-right: -9.5rem !important;
  }
  .me-lg-nx1 {
    margin-right: -1.5rem !important;
  }
  .mb-lg-n1 {
    margin-bottom: -0.5rem !important;
  }
  .mb-lg-n2 {
    margin-bottom: -1rem !important;
  }
  .mb-lg-n3 {
    margin-bottom: -2rem !important;
  }
  .mb-lg-n4 {
    margin-bottom: -2.5rem !important;
  }
  .mb-lg-n5 {
    margin-bottom: -3rem !important;
  }
  .mb-lg-n6 {
    margin-bottom: -3.5rem !important;
  }
  .mb-lg-n7 {
    margin-bottom: -4rem !important;
  }
  .mb-lg-n8 {
    margin-bottom: -4.5rem !important;
  }
  .mb-lg-n9 {
    margin-bottom: -6rem !important;
  }
  .mb-lg-n10 {
    margin-bottom: -7rem !important;
  }
  .mb-lg-n11 {
    margin-bottom: -8rem !important;
  }
  .mb-lg-n12 {
    margin-bottom: -9rem !important;
  }
  .mb-lg-n13 {
    margin-bottom: -9.5rem !important;
  }
  .mb-lg-nx1 {
    margin-bottom: -1.5rem !important;
  }
  .ms-lg-n1 {
    margin-left: -0.5rem !important;
  }
  .ms-lg-n2 {
    margin-left: -1rem !important;
  }
  .ms-lg-n3 {
    margin-left: -2rem !important;
  }
  .ms-lg-n4 {
    margin-left: -2.5rem !important;
  }
  .ms-lg-n5 {
    margin-left: -3rem !important;
  }
  .ms-lg-n6 {
    margin-left: -3.5rem !important;
  }
  .ms-lg-n7 {
    margin-left: -4rem !important;
  }
  .ms-lg-n8 {
    margin-left: -4.5rem !important;
  }
  .ms-lg-n9 {
    margin-left: -6rem !important;
  }
  .ms-lg-n10 {
    margin-left: -7rem !important;
  }
  .ms-lg-n11 {
    margin-left: -8rem !important;
  }
  .ms-lg-n12 {
    margin-left: -9rem !important;
  }
  .ms-lg-n13 {
    margin-left: -9.5rem !important;
  }
  .ms-lg-nx1 {
    margin-left: -1.5rem !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .p-lg-1 {
    padding: 0.5rem !important;
  }
  .p-lg-2 {
    padding: 1rem !important;
  }
  .p-lg-3 {
    padding: 2rem !important;
  }
  .p-lg-4 {
    padding: 2.5rem !important;
  }
  .p-lg-5 {
    padding: 3rem !important;
  }
  .p-lg-6 {
    padding: 3.5rem !important;
  }
  .p-lg-7 {
    padding: 4rem !important;
  }
  .p-lg-8 {
    padding: 4.5rem !important;
  }
  .p-lg-9 {
    padding: 6rem !important;
  }
  .p-lg-10 {
    padding: 7rem !important;
  }
  .p-lg-11 {
    padding: 8rem !important;
  }
  .p-lg-12 {
    padding: 9rem !important;
  }
  .p-lg-13 {
    padding: 9.5rem !important;
  }
  .p-lg-x1 {
    padding: 1.5rem !important;
  }
  .px-lg-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-lg-1 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-lg-2 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-lg-3 {
    padding-right: 2rem !important;
    padding-left: 2rem !important;
  }
  .px-lg-4 {
    padding-right: 2.5rem !important;
    padding-left: 2.5rem !important;
  }
  .px-lg-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .px-lg-6 {
    padding-right: 3.5rem !important;
    padding-left: 3.5rem !important;
  }
  .px-lg-7 {
    padding-right: 4rem !important;
    padding-left: 4rem !important;
  }
  .px-lg-8 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important;
  }
  .px-lg-9 {
    padding-right: 6rem !important;
    padding-left: 6rem !important;
  }
  .px-lg-10 {
    padding-right: 7rem !important;
    padding-left: 7rem !important;
  }
  .px-lg-11 {
    padding-right: 8rem !important;
    padding-left: 8rem !important;
  }
  .px-lg-12 {
    padding-right: 9rem !important;
    padding-left: 9rem !important;
  }
  .px-lg-13 {
    padding-right: 9.5rem !important;
    padding-left: 9.5rem !important;
  }
  .px-lg-x1 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .py-lg-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-lg-1 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-lg-2 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-lg-3 {
    padding-top: 2rem !important;
    padding-bottom: 2rem !important;
  }
  .py-lg-4 {
    padding-top: 2.5rem !important;
    padding-bottom: 2.5rem !important;
  }
  .py-lg-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .py-lg-6 {
    padding-top: 3.5rem !important;
    padding-bottom: 3.5rem !important;
  }
  .py-lg-7 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important;
  }
  .py-lg-8 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
  .py-lg-9 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }
  .py-lg-10 {
    padding-top: 7rem !important;
    padding-bottom: 7rem !important;
  }
  .py-lg-11 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important;
  }
  .py-lg-12 {
    padding-top: 9rem !important;
    padding-bottom: 9rem !important;
  }
  .py-lg-13 {
    padding-top: 9.5rem !important;
    padding-bottom: 9.5rem !important;
  }
  .py-lg-x1 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .pt-lg-0 {
    padding-top: 0 !important;
  }
  .pt-lg-1 {
    padding-top: 0.5rem !important;
  }
  .pt-lg-2 {
    padding-top: 1rem !important;
  }
  .pt-lg-3 {
    padding-top: 2rem !important;
  }
  .pt-lg-4 {
    padding-top: 2.5rem !important;
  }
  .pt-lg-5 {
    padding-top: 3rem !important;
  }
  .pt-lg-6 {
    padding-top: 3.5rem !important;
  }
  .pt-lg-7 {
    padding-top: 4rem !important;
  }
  .pt-lg-8 {
    padding-top: 4.5rem !important;
  }
  .pt-lg-9 {
    padding-top: 6rem !important;
  }
  .pt-lg-10 {
    padding-top: 7rem !important;
  }
  .pt-lg-11 {
    padding-top: 8rem !important;
  }
  .pt-lg-12 {
    padding-top: 9rem !important;
  }
  .pt-lg-13 {
    padding-top: 9.5rem !important;
  }
  .pt-lg-x1 {
    padding-top: 1.5rem !important;
  }
  .pe-lg-0 {
    padding-right: 0 !important;
  }
  .pe-lg-1 {
    padding-right: 0.5rem !important;
  }
  .pe-lg-2 {
    padding-right: 1rem !important;
  }
  .pe-lg-3 {
    padding-right: 2rem !important;
  }
  .pe-lg-4 {
    padding-right: 2.5rem !important;
  }
  .pe-lg-5 {
    padding-right: 3rem !important;
  }
  .pe-lg-6 {
    padding-right: 3.5rem !important;
  }
  .pe-lg-7 {
    padding-right: 4rem !important;
  }
  .pe-lg-8 {
    padding-right: 4.5rem !important;
  }
  .pe-lg-9 {
    padding-right: 6rem !important;
  }
  .pe-lg-10 {
    padding-right: 7rem !important;
  }
  .pe-lg-11 {
    padding-right: 8rem !important;
  }
  .pe-lg-12 {
    padding-right: 9rem !important;
  }
  .pe-lg-13 {
    padding-right: 9.5rem !important;
  }
  .pe-lg-x1 {
    padding-right: 1.5rem !important;
  }
  .pb-lg-0 {
    padding-bottom: 0 !important;
  }
  .pb-lg-1 {
    padding-bottom: 0.5rem !important;
  }
  .pb-lg-2 {
    padding-bottom: 1rem !important;
  }
  .pb-lg-3 {
    padding-bottom: 2rem !important;
  }
  .pb-lg-4 {
    padding-bottom: 2.5rem !important;
  }
  .pb-lg-5 {
    padding-bottom: 3rem !important;
  }
  .pb-lg-6 {
    padding-bottom: 3.5rem !important;
  }
  .pb-lg-7 {
    padding-bottom: 4rem !important;
  }
  .pb-lg-8 {
    padding-bottom: 4.5rem !important;
  }
  .pb-lg-9 {
    padding-bottom: 6rem !important;
  }
  .pb-lg-10 {
    padding-bottom: 7rem !important;
  }
  .pb-lg-11 {
    padding-bottom: 8rem !important;
  }
  .pb-lg-12 {
    padding-bottom: 9rem !important;
  }
  .pb-lg-13 {
    padding-bottom: 9.5rem !important;
  }
  .pb-lg-x1 {
    padding-bottom: 1.5rem !important;
  }
  .ps-lg-0 {
    padding-left: 0 !important;
  }
  .ps-lg-1 {
    padding-left: 0.5rem !important;
  }
  .ps-lg-2 {
    padding-left: 1rem !important;
  }
  .ps-lg-3 {
    padding-left: 2rem !important;
  }
  .ps-lg-4 {
    padding-left: 2.5rem !important;
  }
  .ps-lg-5 {
    padding-left: 3rem !important;
  }
  .ps-lg-6 {
    padding-left: 3.5rem !important;
  }
  .ps-lg-7 {
    padding-left: 4rem !important;
  }
  .ps-lg-8 {
    padding-left: 4.5rem !important;
  }
  .ps-lg-9 {
    padding-left: 6rem !important;
  }
  .ps-lg-10 {
    padding-left: 7rem !important;
  }
  .ps-lg-11 {
    padding-left: 8rem !important;
  }
  .ps-lg-12 {
    padding-left: 9rem !important;
  }
  .ps-lg-13 {
    padding-left: 9.5rem !important;
  }
  .ps-lg-x1 {
    padding-left: 1.5rem !important;
  }
  .gap-lg-0 {
    gap: 0 !important;
  }
  .gap-lg-1 {
    gap: 0.5rem !important;
  }
  .gap-lg-2 {
    gap: 1rem !important;
  }
  .gap-lg-3 {
    gap: 2rem !important;
  }
  .gap-lg-4 {
    gap: 2.5rem !important;
  }
  .gap-lg-5 {
    gap: 3rem !important;
  }
  .gap-lg-6 {
    gap: 3.5rem !important;
  }
  .gap-lg-7 {
    gap: 4rem !important;
  }
  .gap-lg-8 {
    gap: 4.5rem !important;
  }
  .gap-lg-9 {
    gap: 6rem !important;
  }
  .gap-lg-10 {
    gap: 7rem !important;
  }
  .gap-lg-11 {
    gap: 8rem !important;
  }
  .gap-lg-12 {
    gap: 9rem !important;
  }
  .gap-lg-13 {
    gap: 9.5rem !important;
  }
  .gap-lg-x1 {
    gap: 1.5rem !important;
  }
  .row-gap-lg-0 {
    row-gap: 0 !important;
  }
  .row-gap-lg-1 {
    row-gap: 0.5rem !important;
  }
  .row-gap-lg-2 {
    row-gap: 1rem !important;
  }
  .row-gap-lg-3 {
    row-gap: 2rem !important;
  }
  .row-gap-lg-4 {
    row-gap: 2.5rem !important;
  }
  .row-gap-lg-5 {
    row-gap: 3rem !important;
  }
  .row-gap-lg-6 {
    row-gap: 3.5rem !important;
  }
  .row-gap-lg-7 {
    row-gap: 4rem !important;
  }
  .row-gap-lg-8 {
    row-gap: 4.5rem !important;
  }
  .row-gap-lg-9 {
    row-gap: 6rem !important;
  }
  .row-gap-lg-10 {
    row-gap: 7rem !important;
  }
  .row-gap-lg-11 {
    row-gap: 8rem !important;
  }
  .row-gap-lg-12 {
    row-gap: 9rem !important;
  }
  .row-gap-lg-13 {
    row-gap: 9.5rem !important;
  }
  .row-gap-lg-x1 {
    row-gap: 1.5rem !important;
  }
  .column-gap-lg-0 {
    -webkit-column-gap: 0 !important;
    -moz-column-gap: 0 !important;
    column-gap: 0 !important;
  }
  .column-gap-lg-1 {
    -webkit-column-gap: 0.5rem !important;
    -moz-column-gap: 0.5rem !important;
    column-gap: 0.5rem !important;
  }
  .column-gap-lg-2 {
    -webkit-column-gap: 1rem !important;
    -moz-column-gap: 1rem !important;
    column-gap: 1rem !important;
  }
  .column-gap-lg-3 {
    -webkit-column-gap: 2rem !important;
    -moz-column-gap: 2rem !important;
    column-gap: 2rem !important;
  }
  .column-gap-lg-4 {
    -webkit-column-gap: 2.5rem !important;
    -moz-column-gap: 2.5rem !important;
    column-gap: 2.5rem !important;
  }
  .column-gap-lg-5 {
    -webkit-column-gap: 3rem !important;
    -moz-column-gap: 3rem !important;
    column-gap: 3rem !important;
  }
  .column-gap-lg-6 {
    -webkit-column-gap: 3.5rem !important;
    -moz-column-gap: 3.5rem !important;
    column-gap: 3.5rem !important;
  }
  .column-gap-lg-7 {
    -webkit-column-gap: 4rem !important;
    -moz-column-gap: 4rem !important;
    column-gap: 4rem !important;
  }
  .column-gap-lg-8 {
    -webkit-column-gap: 4.5rem !important;
    -moz-column-gap: 4.5rem !important;
    column-gap: 4.5rem !important;
  }
  .column-gap-lg-9 {
    -webkit-column-gap: 6rem !important;
    -moz-column-gap: 6rem !important;
    column-gap: 6rem !important;
  }
  .column-gap-lg-10 {
    -webkit-column-gap: 7rem !important;
    -moz-column-gap: 7rem !important;
    column-gap: 7rem !important;
  }
  .column-gap-lg-11 {
    -webkit-column-gap: 8rem !important;
    -moz-column-gap: 8rem !important;
    column-gap: 8rem !important;
  }
  .column-gap-lg-12 {
    -webkit-column-gap: 9rem !important;
    -moz-column-gap: 9rem !important;
    column-gap: 9rem !important;
  }
  .column-gap-lg-13 {
    -webkit-column-gap: 9.5rem !important;
    -moz-column-gap: 9.5rem !important;
    column-gap: 9.5rem !important;
  }
  .column-gap-lg-x1 {
    -webkit-column-gap: 1.5rem !important;
    -moz-column-gap: 1.5rem !important;
    column-gap: 1.5rem !important;
  }
  .fs-lg-10 {
    font-size: 0.875rem !important;
  }
  .fs-lg-9 {
    font-size: 1rem !important;
  }
  .fs-lg-8 {
    font-size: 1.25rem !important;
  }
  .fs-lg-7 {
    font-size: 1.5rem !important;
  }
  .fs-lg-6 {
    font-size: 1.875rem !important;
  }
  .fs-lg-5 {
    font-size: 2.125rem !important;
  }
  .fs-lg-4 {
    font-size: 2.5rem !important;
  }
  .fs-lg-3 {
    font-size: 3rem !important;
  }
  .fs-lg-2 {
    font-size: 3.5rem !important;
  }
  .fs-lg-1 {
    font-size: 3.75rem !important;
  }
  .lh-lg-1 {
    line-height: 1 !important;
  }
  .lh-lg-sm {
    line-height: 1.2 !important;
  }
  .lh-lg-base {
    line-height: 1.084 !important;
  }
  .lh-lg-lg {
    line-height: 1.6 !important;
  }
  .lh-lg-xl {
    line-height: 1.8 !important;
  }
  .text-lg-start {
    text-align: left !important;
  }
  .text-lg-end {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
  .text-lg-justify {
    text-align: justify !important;
  }
  .rounded-lg {
    border-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-lg-0 {
    border-radius: 0 !important;
  }
  .rounded-lg-1 {
    border-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-lg-2 {
    border-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-lg-3 {
    border-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-lg-4 {
    border-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-lg-5 {
    border-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-lg-circle {
    border-radius: 50% !important;
  }
  .rounded-lg-pill {
    border-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .rounded-top-lg {
    border-top-left-radius: var(--brainwaveio-border-radius) !important;
    border-top-right-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-top-lg-0 {
    border-top-left-radius: 0 !important;
    border-top-right-radius: 0 !important;
  }
  .rounded-top-lg-1 {
    border-top-left-radius: var(--brainwaveio-border-radius-sm) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-top-lg-2 {
    border-top-left-radius: var(--brainwaveio-border-radius) !important;
    border-top-right-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-top-lg-3 {
    border-top-left-radius: var(--brainwaveio-border-radius-lg) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-top-lg-4 {
    border-top-left-radius: var(--brainwaveio-border-radius-xl) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-top-lg-5 {
    border-top-left-radius: var(--brainwaveio-border-radius-xxl) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-top-lg-circle {
    border-top-left-radius: 50% !important;
    border-top-right-radius: 50% !important;
  }
  .rounded-top-lg-pill {
    border-top-left-radius: var(--brainwaveio-border-radius-pill) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .rounded-end-lg {
    border-top-right-radius: var(--brainwaveio-border-radius) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-end-lg-0 {
    border-top-right-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
  }
  .rounded-end-lg-1 {
    border-top-right-radius: var(--brainwaveio-border-radius-sm) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-end-lg-2 {
    border-top-right-radius: var(--brainwaveio-border-radius) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-end-lg-3 {
    border-top-right-radius: var(--brainwaveio-border-radius-lg) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-end-lg-4 {
    border-top-right-radius: var(--brainwaveio-border-radius-xl) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-end-lg-5 {
    border-top-right-radius: var(--brainwaveio-border-radius-xxl) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-end-lg-circle {
    border-top-right-radius: 50% !important;
    border-bottom-right-radius: 50% !important;
  }
  .rounded-end-lg-pill {
    border-top-right-radius: var(--brainwaveio-border-radius-pill) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .rounded-bottom-lg {
    border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-bottom-lg-0 {
    border-bottom-right-radius: 0 !important;
    border-bottom-left-radius: 0 !important;
  }
  .rounded-bottom-lg-1 {
    border-bottom-right-radius: var(--brainwaveio-border-radius-sm) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-bottom-lg-2 {
    border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-bottom-lg-3 {
    border-bottom-right-radius: var(--brainwaveio-border-radius-lg) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-bottom-lg-4 {
    border-bottom-right-radius: var(--brainwaveio-border-radius-xl) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-bottom-lg-5 {
    border-bottom-right-radius: var(--brainwaveio-border-radius-xxl) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-bottom-lg-circle {
    border-bottom-right-radius: 50% !important;
    border-bottom-left-radius: 50% !important;
  }
  .rounded-bottom-lg-pill {
    border-bottom-right-radius: var(--brainwaveio-border-radius-pill) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .rounded-start-lg {
    border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
    border-top-left-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-start-lg-0 {
    border-bottom-left-radius: 0 !important;
    border-top-left-radius: 0 !important;
  }
  .rounded-start-lg-1 {
    border-bottom-left-radius: var(--brainwaveio-border-radius-sm) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-start-lg-2 {
    border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
    border-top-left-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-start-lg-3 {
    border-bottom-left-radius: var(--brainwaveio-border-radius-lg) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-start-lg-4 {
    border-bottom-left-radius: var(--brainwaveio-border-radius-xl) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-start-lg-5 {
    border-bottom-left-radius: var(--brainwaveio-border-radius-xxl) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-start-lg-circle {
    border-bottom-left-radius: 50% !important;
    border-top-left-radius: 50% !important;
  }
  .rounded-start-lg-pill {
    border-bottom-left-radius: var(--brainwaveio-border-radius-pill) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .ls-lg-1 {
    letter-spacing: 0.3px !important;
  }
  .ls-lg-2 {
    letter-spacing: 1.63px !important;
  }
  .max-vh-lg-25 {
    max-height: 25vh !important;
  }
  .max-vh-lg-50 {
    max-height: 50vh !important;
  }
  .max-vh-lg-75 {
    max-height: 75vh !important;
  }
  .max-vh-lg-100 {
    max-height: 100vh !important;
  }
  .border-top-lg-0 {
    border-top-width: 0 !important;
  }
  .border-top-lg-1 {
    border-top-width: 1px !important;
  }
  .border-top-lg-2 {
    border-top-width: 2px !important;
  }
  .border-top-lg-3 {
    border-top-width: 3px !important;
  }
  .border-top-lg-4 {
    border-top-width: 4px !important;
  }
  .border-top-lg-5 {
    border-top-width: 5px !important;
  }
  .border-end-lg-0 {
    border-right-width: 0 !important;
  }
  .border-end-lg-1 {
    border-right-width: 1px !important;
  }
  .border-end-lg-2 {
    border-right-width: 2px !important;
  }
  .border-end-lg-3 {
    border-right-width: 3px !important;
  }
  .border-end-lg-4 {
    border-right-width: 4px !important;
  }
  .border-end-lg-5 {
    border-right-width: 5px !important;
  }
  .border-start-lg-0 {
    border-left-width: 0 !important;
  }
  .border-start-lg-1 {
    border-left-width: 1px !important;
  }
  .border-start-lg-2 {
    border-left-width: 2px !important;
  }
  .border-start-lg-3 {
    border-left-width: 3px !important;
  }
  .border-start-lg-4 {
    border-left-width: 4px !important;
  }
  .border-start-lg-5 {
    border-left-width: 5px !important;
  }
  .border-bottom-lg-0 {
    border-bottom-width: 0 !important;
  }
  .border-bottom-lg-1 {
    border-bottom-width: 1px !important;
  }
  .border-bottom-lg-2 {
    border-bottom-width: 2px !important;
  }
  .border-bottom-lg-3 {
    border-bottom-width: 3px !important;
  }
  .border-bottom-lg-4 {
    border-bottom-width: 4px !important;
  }
  .border-bottom-lg-5 {
    border-bottom-width: 5px !important;
  }
  .border-x-lg-0 {
    border-left-width: 0 !important;
    border-right-width: 0 !important;
  }
  .border-x-lg-1 {
    border-left-width: 1px !important;
    border-right-width: 1px !important;
  }
  .border-x-lg-2 {
    border-left-width: 2px !important;
    border-right-width: 2px !important;
  }
  .border-x-lg-3 {
    border-left-width: 3px !important;
    border-right-width: 3px !important;
  }
  .border-x-lg-4 {
    border-left-width: 4px !important;
    border-right-width: 4px !important;
  }
  .border-x-lg-5 {
    border-left-width: 5px !important;
    border-right-width: 5px !important;
  }
  .border-y-lg-0 {
    border-top-width: 0 !important;
    border-bottom-width: 0 !important;
  }
  .border-y-lg-1 {
    border-top-width: 1px !important;
    border-bottom-width: 1px !important;
  }
  .border-y-lg-2 {
    border-top-width: 2px !important;
    border-bottom-width: 2px !important;
  }
  .border-y-lg-3 {
    border-top-width: 3px !important;
    border-bottom-width: 3px !important;
  }
  .border-y-lg-4 {
    border-top-width: 4px !important;
    border-bottom-width: 4px !important;
  }
  .border-y-lg-5 {
    border-top-width: 5px !important;
    border-bottom-width: 5px !important;
  }
}
@media (min-width: 1200px) {
  .float-xl-start {
    float: left !important;
  }
  .float-xl-end {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
  .object-fit-xl-contain {
    -o-object-fit: contain !important;
    object-fit: contain !important;
  }
  .object-fit-xl-cover {
    -o-object-fit: cover !important;
    object-fit: cover !important;
  }
  .object-fit-xl-fill {
    -o-object-fit: fill !important;
    object-fit: fill !important;
  }
  .object-fit-xl-scale {
    -o-object-fit: scale-down !important;
    object-fit: scale-down !important;
  }
  .object-fit-xl-none {
    -o-object-fit: none !important;
    object-fit: none !important;
  }
  .opacity-xl-0 {
    opacity: 0 !important;
  }
  .opacity-xl-25 {
    opacity: 0.25 !important;
  }
  .opacity-xl-50 {
    opacity: 0.5 !important;
  }
  .opacity-xl-65 {
    opacity: 0.65 !important;
  }
  .opacity-xl-70 {
    opacity: 0.7 !important;
  }
  .opacity-xl-75 {
    opacity: 0.75 !important;
  }
  .opacity-xl-100 {
    opacity: 1 !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-grid {
    display: grid !important;
  }
  .d-xl-inline-grid {
    display: inline-grid !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
  .d-xl-none {
    display: none !important;
  }
  .position-xl-static {
    position: static !important;
  }
  .position-xl-absolute {
    position: absolute !important;
  }
  .position-xl-relative {
    position: relative !important;
  }
  .position-xl-fixed {
    position: fixed !important;
  }
  .position-xl-sticky {
    position: sticky !important;
  }
  .translate-middle-xl {
    -webkit-transform: translate(-50%, -50%) !important;
    -ms-transform: translate(-50%, -50%) !important;
    transform: translate(-50%, -50%) !important;
  }
  .translate-middle-xl-x {
    -webkit-transform: translateX(-50%) !important;
    -ms-transform: translateX(-50%) !important;
    transform: translateX(-50%) !important;
  }
  .translate-middle-xl-y {
    -webkit-transform: translateY(-50%) !important;
    -ms-transform: translateY(-50%) !important;
    transform: translateY(-50%) !important;
  }
  .border-xl {
    border: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-xl-0 {
    border: 0 !important;
  }
  .border-top-xl {
    border-top: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-end-xl {
    border-right: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-bottom-xl {
    border-bottom: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-start-xl {
    border-left: var(--brainwaveio-border-width) var(--brainwaveio-border-style) var(--brainwaveio-border-color) !important;
  }
  .border-xl-1 {
    --brainwaveio-border-width: 1px;
  }
  .border-xl-2 {
    --brainwaveio-border-width: 2px;
  }
  .border-xl-3 {
    --brainwaveio-border-width: 3px;
  }
  .border-xl-4 {
    --brainwaveio-border-width: 4px;
  }
  .border-xl-5 {
    --brainwaveio-border-width: 5px;
  }
  .w-xl-25 {
    width: 25% !important;
  }
  .w-xl-50 {
    width: 50% !important;
  }
  .w-xl-75 {
    width: 75% !important;
  }
  .w-xl-100 {
    width: 100% !important;
  }
  .w-xl-auto {
    width: auto !important;
  }
  .vw-xl-25 {
    width: 25vw !important;
  }
  .vw-xl-50 {
    width: 50vw !important;
  }
  .vw-xl-75 {
    width: 75vw !important;
  }
  .vw-xl-100 {
    width: 100vw !important;
  }
  .h-xl-25 {
    height: 25% !important;
  }
  .h-xl-50 {
    height: 50% !important;
  }
  .h-xl-75 {
    height: 75% !important;
  }
  .h-xl-100 {
    height: 100% !important;
  }
  .h-xl-auto {
    height: auto !important;
  }
  .vh-xl-25 {
    height: 25vh !important;
  }
  .vh-xl-50 {
    height: 50vh !important;
  }
  .vh-xl-75 {
    height: 75vh !important;
  }
  .vh-xl-100 {
    height: 100vh !important;
  }
  .min-vh-xl-25 {
    min-height: 25vh !important;
  }
  .min-vh-xl-50 {
    min-height: 50vh !important;
  }
  .min-vh-xl-75 {
    min-height: 75vh !important;
  }
  .min-vh-xl-100 {
    min-height: 100vh !important;
  }
  .flex-xl-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-xl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-xl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-xl-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-xl-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-xl-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .justify-content-xl-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important;
  }
  .align-items-xl-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-xl-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
  .order-xl-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important;
  }
  .order-xl-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important;
  }
  .order-xl-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important;
  }
  .order-xl-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important;
  }
  .order-xl-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important;
  }
  .order-xl-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important;
  }
  .order-xl-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important;
  }
  .order-xl-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important;
  }
  .m-xl-0 {
    margin: 0 !important;
  }
  .m-xl-1 {
    margin: 0.5rem !important;
  }
  .m-xl-2 {
    margin: 1rem !important;
  }
  .m-xl-3 {
    margin: 2rem !important;
  }
  .m-xl-4 {
    margin: 2.5rem !important;
  }
  .m-xl-5 {
    margin: 3rem !important;
  }
  .m-xl-6 {
    margin: 3.5rem !important;
  }
  .m-xl-7 {
    margin: 4rem !important;
  }
  .m-xl-8 {
    margin: 4.5rem !important;
  }
  .m-xl-9 {
    margin: 6rem !important;
  }
  .m-xl-10 {
    margin: 7rem !important;
  }
  .m-xl-11 {
    margin: 8rem !important;
  }
  .m-xl-12 {
    margin: 9rem !important;
  }
  .m-xl-13 {
    margin: 9.5rem !important;
  }
  .m-xl-x1 {
    margin: 1.5rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mx-xl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xl-1 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xl-2 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xl-3 {
    margin-right: 2rem !important;
    margin-left: 2rem !important;
  }
  .mx-xl-4 {
    margin-right: 2.5rem !important;
    margin-left: 2.5rem !important;
  }
  .mx-xl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xl-6 {
    margin-right: 3.5rem !important;
    margin-left: 3.5rem !important;
  }
  .mx-xl-7 {
    margin-right: 4rem !important;
    margin-left: 4rem !important;
  }
  .mx-xl-8 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important;
  }
  .mx-xl-9 {
    margin-right: 6rem !important;
    margin-left: 6rem !important;
  }
  .mx-xl-10 {
    margin-right: 7rem !important;
    margin-left: 7rem !important;
  }
  .mx-xl-11 {
    margin-right: 8rem !important;
    margin-left: 8rem !important;
  }
  .mx-xl-12 {
    margin-right: 9rem !important;
    margin-left: 9rem !important;
  }
  .mx-xl-13 {
    margin-right: 9.5rem !important;
    margin-left: 9.5rem !important;
  }
  .mx-xl-x1 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xl-1 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xl-2 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xl-3 {
    margin-top: 2rem !important;
    margin-bottom: 2rem !important;
  }
  .my-xl-4 {
    margin-top: 2.5rem !important;
    margin-bottom: 2.5rem !important;
  }
  .my-xl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xl-6 {
    margin-top: 3.5rem !important;
    margin-bottom: 3.5rem !important;
  }
  .my-xl-7 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important;
  }
  .my-xl-8 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important;
  }
  .my-xl-9 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }
  .my-xl-10 {
    margin-top: 7rem !important;
    margin-bottom: 7rem !important;
  }
  .my-xl-11 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important;
  }
  .my-xl-12 {
    margin-top: 9rem !important;
    margin-bottom: 9rem !important;
  }
  .my-xl-13 {
    margin-top: 9.5rem !important;
    margin-bottom: 9.5rem !important;
  }
  .my-xl-x1 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xl-0 {
    margin-top: 0 !important;
  }
  .mt-xl-1 {
    margin-top: 0.5rem !important;
  }
  .mt-xl-2 {
    margin-top: 1rem !important;
  }
  .mt-xl-3 {
    margin-top: 2rem !important;
  }
  .mt-xl-4 {
    margin-top: 2.5rem !important;
  }
  .mt-xl-5 {
    margin-top: 3rem !important;
  }
  .mt-xl-6 {
    margin-top: 3.5rem !important;
  }
  .mt-xl-7 {
    margin-top: 4rem !important;
  }
  .mt-xl-8 {
    margin-top: 4.5rem !important;
  }
  .mt-xl-9 {
    margin-top: 6rem !important;
  }
  .mt-xl-10 {
    margin-top: 7rem !important;
  }
  .mt-xl-11 {
    margin-top: 8rem !important;
  }
  .mt-xl-12 {
    margin-top: 9rem !important;
  }
  .mt-xl-13 {
    margin-top: 9.5rem !important;
  }
  .mt-xl-x1 {
    margin-top: 1.5rem !important;
  }
  .mt-xl-auto {
    margin-top: auto !important;
  }
  .me-xl-0 {
    margin-right: 0 !important;
  }
  .me-xl-1 {
    margin-right: 0.5rem !important;
  }
  .me-xl-2 {
    margin-right: 1rem !important;
  }
  .me-xl-3 {
    margin-right: 2rem !important;
  }
  .me-xl-4 {
    margin-right: 2.5rem !important;
  }
  .me-xl-5 {
    margin-right: 3rem !important;
  }
  .me-xl-6 {
    margin-right: 3.5rem !important;
  }
  .me-xl-7 {
    margin-right: 4rem !important;
  }
  .me-xl-8 {
    margin-right: 4.5rem !important;
  }
  .me-xl-9 {
    margin-right: 6rem !important;
  }
  .me-xl-10 {
    margin-right: 7rem !important;
  }
  .me-xl-11 {
    margin-right: 8rem !important;
  }
  .me-xl-12 {
    margin-right: 9rem !important;
  }
  .me-xl-13 {
    margin-right: 9.5rem !important;
  }
  .me-xl-x1 {
    margin-right: 1.5rem !important;
  }
  .me-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xl-1 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xl-2 {
    margin-bottom: 1rem !important;
  }
  .mb-xl-3 {
    margin-bottom: 2rem !important;
  }
  .mb-xl-4 {
    margin-bottom: 2.5rem !important;
  }
  .mb-xl-5 {
    margin-bottom: 3rem !important;
  }
  .mb-xl-6 {
    margin-bottom: 3.5rem !important;
  }
  .mb-xl-7 {
    margin-bottom: 4rem !important;
  }
  .mb-xl-8 {
    margin-bottom: 4.5rem !important;
  }
  .mb-xl-9 {
    margin-bottom: 6rem !important;
  }
  .mb-xl-10 {
    margin-bottom: 7rem !important;
  }
  .mb-xl-11 {
    margin-bottom: 8rem !important;
  }
  .mb-xl-12 {
    margin-bottom: 9rem !important;
  }
  .mb-xl-13 {
    margin-bottom: 9.5rem !important;
  }
  .mb-xl-x1 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xl-auto {
    margin-bottom: auto !important;
  }
  .ms-xl-0 {
    margin-left: 0 !important;
  }
  .ms-xl-1 {
    margin-left: 0.5rem !important;
  }
  .ms-xl-2 {
    margin-left: 1rem !important;
  }
  .ms-xl-3 {
    margin-left: 2rem !important;
  }
  .ms-xl-4 {
    margin-left: 2.5rem !important;
  }
  .ms-xl-5 {
    margin-left: 3rem !important;
  }
  .ms-xl-6 {
    margin-left: 3.5rem !important;
  }
  .ms-xl-7 {
    margin-left: 4rem !important;
  }
  .ms-xl-8 {
    margin-left: 4.5rem !important;
  }
  .ms-xl-9 {
    margin-left: 6rem !important;
  }
  .ms-xl-10 {
    margin-left: 7rem !important;
  }
  .ms-xl-11 {
    margin-left: 8rem !important;
  }
  .ms-xl-12 {
    margin-left: 9rem !important;
  }
  .ms-xl-13 {
    margin-left: 9.5rem !important;
  }
  .ms-xl-x1 {
    margin-left: 1.5rem !important;
  }
  .ms-xl-auto {
    margin-left: auto !important;
  }
  .m-xl-n1 {
    margin: -0.5rem !important;
  }
  .m-xl-n2 {
    margin: -1rem !important;
  }
  .m-xl-n3 {
    margin: -2rem !important;
  }
  .m-xl-n4 {
    margin: -2.5rem !important;
  }
  .m-xl-n5 {
    margin: -3rem !important;
  }
  .m-xl-n6 {
    margin: -3.5rem !important;
  }
  .m-xl-n7 {
    margin: -4rem !important;
  }
  .m-xl-n8 {
    margin: -4.5rem !important;
  }
  .m-xl-n9 {
    margin: -6rem !important;
  }
  .m-xl-n10 {
    margin: -7rem !important;
  }
  .m-xl-n11 {
    margin: -8rem !important;
  }
  .m-xl-n12 {
    margin: -9rem !important;
  }
  .m-xl-n13 {
    margin: -9.5rem !important;
  }
  .m-xl-nx1 {
    margin: -1.5rem !important;
  }
  .mx-xl-n1 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-xl-n2 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-xl-n3 {
    margin-right: -2rem !important;
    margin-left: -2rem !important;
  }
  .mx-xl-n4 {
    margin-right: -2.5rem !important;
    margin-left: -2.5rem !important;
  }
  .mx-xl-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .mx-xl-n6 {
    margin-right: -3.5rem !important;
    margin-left: -3.5rem !important;
  }
  .mx-xl-n7 {
    margin-right: -4rem !important;
    margin-left: -4rem !important;
  }
  .mx-xl-n8 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important;
  }
  .mx-xl-n9 {
    margin-right: -6rem !important;
    margin-left: -6rem !important;
  }
  .mx-xl-n10 {
    margin-right: -7rem !important;
    margin-left: -7rem !important;
  }
  .mx-xl-n11 {
    margin-right: -8rem !important;
    margin-left: -8rem !important;
  }
  .mx-xl-n12 {
    margin-right: -9rem !important;
    margin-left: -9rem !important;
  }
  .mx-xl-n13 {
    margin-right: -9.5rem !important;
    margin-left: -9.5rem !important;
  }
  .mx-xl-nx1 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .my-xl-n1 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-xl-n2 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-xl-n3 {
    margin-top: -2rem !important;
    margin-bottom: -2rem !important;
  }
  .my-xl-n4 {
    margin-top: -2.5rem !important;
    margin-bottom: -2.5rem !important;
  }
  .my-xl-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .my-xl-n6 {
    margin-top: -3.5rem !important;
    margin-bottom: -3.5rem !important;
  }
  .my-xl-n7 {
    margin-top: -4rem !important;
    margin-bottom: -4rem !important;
  }
  .my-xl-n8 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important;
  }
  .my-xl-n9 {
    margin-top: -6rem !important;
    margin-bottom: -6rem !important;
  }
  .my-xl-n10 {
    margin-top: -7rem !important;
    margin-bottom: -7rem !important;
  }
  .my-xl-n11 {
    margin-top: -8rem !important;
    margin-bottom: -8rem !important;
  }
  .my-xl-n12 {
    margin-top: -9rem !important;
    margin-bottom: -9rem !important;
  }
  .my-xl-n13 {
    margin-top: -9.5rem !important;
    margin-bottom: -9.5rem !important;
  }
  .my-xl-nx1 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .mt-xl-n1 {
    margin-top: -0.5rem !important;
  }
  .mt-xl-n2 {
    margin-top: -1rem !important;
  }
  .mt-xl-n3 {
    margin-top: -2rem !important;
  }
  .mt-xl-n4 {
    margin-top: -2.5rem !important;
  }
  .mt-xl-n5 {
    margin-top: -3rem !important;
  }
  .mt-xl-n6 {
    margin-top: -3.5rem !important;
  }
  .mt-xl-n7 {
    margin-top: -4rem !important;
  }
  .mt-xl-n8 {
    margin-top: -4.5rem !important;
  }
  .mt-xl-n9 {
    margin-top: -6rem !important;
  }
  .mt-xl-n10 {
    margin-top: -7rem !important;
  }
  .mt-xl-n11 {
    margin-top: -8rem !important;
  }
  .mt-xl-n12 {
    margin-top: -9rem !important;
  }
  .mt-xl-n13 {
    margin-top: -9.5rem !important;
  }
  .mt-xl-nx1 {
    margin-top: -1.5rem !important;
  }
  .me-xl-n1 {
    margin-right: -0.5rem !important;
  }
  .me-xl-n2 {
    margin-right: -1rem !important;
  }
  .me-xl-n3 {
    margin-right: -2rem !important;
  }
  .me-xl-n4 {
    margin-right: -2.5rem !important;
  }
  .me-xl-n5 {
    margin-right: -3rem !important;
  }
  .me-xl-n6 {
    margin-right: -3.5rem !important;
  }
  .me-xl-n7 {
    margin-right: -4rem !important;
  }
  .me-xl-n8 {
    margin-right: -4.5rem !important;
  }
  .me-xl-n9 {
    margin-right: -6rem !important;
  }
  .me-xl-n10 {
    margin-right: -7rem !important;
  }
  .me-xl-n11 {
    margin-right: -8rem !important;
  }
  .me-xl-n12 {
    margin-right: -9rem !important;
  }
  .me-xl-n13 {
    margin-right: -9.5rem !important;
  }
  .me-xl-nx1 {
    margin-right: -1.5rem !important;
  }
  .mb-xl-n1 {
    margin-bottom: -0.5rem !important;
  }
  .mb-xl-n2 {
    margin-bottom: -1rem !important;
  }
  .mb-xl-n3 {
    margin-bottom: -2rem !important;
  }
  .mb-xl-n4 {
    margin-bottom: -2.5rem !important;
  }
  .mb-xl-n5 {
    margin-bottom: -3rem !important;
  }
  .mb-xl-n6 {
    margin-bottom: -3.5rem !important;
  }
  .mb-xl-n7 {
    margin-bottom: -4rem !important;
  }
  .mb-xl-n8 {
    margin-bottom: -4.5rem !important;
  }
  .mb-xl-n9 {
    margin-bottom: -6rem !important;
  }
  .mb-xl-n10 {
    margin-bottom: -7rem !important;
  }
  .mb-xl-n11 {
    margin-bottom: -8rem !important;
  }
  .mb-xl-n12 {
    margin-bottom: -9rem !important;
  }
  .mb-xl-n13 {
    margin-bottom: -9.5rem !important;
  }
  .mb-xl-nx1 {
    margin-bottom: -1.5rem !important;
  }
  .ms-xl-n1 {
    margin-left: -0.5rem !important;
  }
  .ms-xl-n2 {
    margin-left: -1rem !important;
  }
  .ms-xl-n3 {
    margin-left: -2rem !important;
  }
  .ms-xl-n4 {
    margin-left: -2.5rem !important;
  }
  .ms-xl-n5 {
    margin-left: -3rem !important;
  }
  .ms-xl-n6 {
    margin-left: -3.5rem !important;
  }
  .ms-xl-n7 {
    margin-left: -4rem !important;
  }
  .ms-xl-n8 {
    margin-left: -4.5rem !important;
  }
  .ms-xl-n9 {
    margin-left: -6rem !important;
  }
  .ms-xl-n10 {
    margin-left: -7rem !important;
  }
  .ms-xl-n11 {
    margin-left: -8rem !important;
  }
  .ms-xl-n12 {
    margin-left: -9rem !important;
  }
  .ms-xl-n13 {
    margin-left: -9.5rem !important;
  }
  .ms-xl-nx1 {
    margin-left: -1.5rem !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .p-xl-1 {
    padding: 0.5rem !important;
  }
  .p-xl-2 {
    padding: 1rem !important;
  }
  .p-xl-3 {
    padding: 2rem !important;
  }
  .p-xl-4 {
    padding: 2.5rem !important;
  }
  .p-xl-5 {
    padding: 3rem !important;
  }
  .p-xl-6 {
    padding: 3.5rem !important;
  }
  .p-xl-7 {
    padding: 4rem !important;
  }
  .p-xl-8 {
    padding: 4.5rem !important;
  }
  .p-xl-9 {
    padding: 6rem !important;
  }
  .p-xl-10 {
    padding: 7rem !important;
  }
  .p-xl-11 {
    padding: 8rem !important;
  }
  .p-xl-12 {
    padding: 9rem !important;
  }
  .p-xl-13 {
    padding: 9.5rem !important;
  }
  .p-xl-x1 {
    padding: 1.5rem !important;
  }
  .px-xl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xl-1 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xl-2 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xl-3 {
    padding-right: 2rem !important;
    padding-left: 2rem !important;
  }
  .px-xl-4 {
    padding-right: 2.5rem !important;
    padding-left: 2.5rem !important;
  }
  .px-xl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .px-xl-6 {
    padding-right: 3.5rem !important;
    padding-left: 3.5rem !important;
  }
  .px-xl-7 {
    padding-right: 4rem !important;
    padding-left: 4rem !important;
  }
  .px-xl-8 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important;
  }
  .px-xl-9 {
    padding-right: 6rem !important;
    padding-left: 6rem !important;
  }
  .px-xl-10 {
    padding-right: 7rem !important;
    padding-left: 7rem !important;
  }
  .px-xl-11 {
    padding-right: 8rem !important;
    padding-left: 8rem !important;
  }
  .px-xl-12 {
    padding-right: 9rem !important;
    padding-left: 9rem !important;
  }
  .px-xl-13 {
    padding-right: 9.5rem !important;
    padding-left: 9.5rem !important;
  }
  .px-xl-x1 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .py-xl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xl-1 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xl-2 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xl-3 {
    padding-top: 2rem !important;
    padding-bottom: 2rem !important;
  }
  .py-xl-4 {
    padding-top: 2.5rem !important;
    padding-bottom: 2.5rem !important;
  }
  .py-xl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .py-xl-6 {
    padding-top: 3.5rem !important;
    padding-bottom: 3.5rem !important;
  }
  .py-xl-7 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important;
  }
  .py-xl-8 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
  .py-xl-9 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }
  .py-xl-10 {
    padding-top: 7rem !important;
    padding-bottom: 7rem !important;
  }
  .py-xl-11 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important;
  }
  .py-xl-12 {
    padding-top: 9rem !important;
    padding-bottom: 9rem !important;
  }
  .py-xl-13 {
    padding-top: 9.5rem !important;
    padding-bottom: 9.5rem !important;
  }
  .py-xl-x1 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .pt-xl-0 {
    padding-top: 0 !important;
  }
  .pt-xl-1 {
    padding-top: 0.5rem !important;
  }
  .pt-xl-2 {
    padding-top: 1rem !important;
  }
  .pt-xl-3 {
    padding-top: 2rem !important;
  }
  .pt-xl-4 {
    padding-top: 2.5rem !important;
  }
  .pt-xl-5 {
    padding-top: 3rem !important;
  }
  .pt-xl-6 {
    padding-top: 3.5rem !important;
  }
  .pt-xl-7 {
    padding-top: 4rem !important;
  }
  .pt-xl-8 {
    padding-top: 4.5rem !important;
  }
  .pt-xl-9 {
    padding-top: 6rem !important;
  }
  .pt-xl-10 {
    padding-top: 7rem !important;
  }
  .pt-xl-11 {
    padding-top: 8rem !important;
  }
  .pt-xl-12 {
    padding-top: 9rem !important;
  }
  .pt-xl-13 {
    padding-top: 9.5rem !important;
  }
  .pt-xl-x1 {
    padding-top: 1.5rem !important;
  }
  .pe-xl-0 {
    padding-right: 0 !important;
  }
  .pe-xl-1 {
    padding-right: 0.5rem !important;
  }
  .pe-xl-2 {
    padding-right: 1rem !important;
  }
  .pe-xl-3 {
    padding-right: 2rem !important;
  }
  .pe-xl-4 {
    padding-right: 2.5rem !important;
  }
  .pe-xl-5 {
    padding-right: 3rem !important;
  }
  .pe-xl-6 {
    padding-right: 3.5rem !important;
  }
  .pe-xl-7 {
    padding-right: 4rem !important;
  }
  .pe-xl-8 {
    padding-right: 4.5rem !important;
  }
  .pe-xl-9 {
    padding-right: 6rem !important;
  }
  .pe-xl-10 {
    padding-right: 7rem !important;
  }
  .pe-xl-11 {
    padding-right: 8rem !important;
  }
  .pe-xl-12 {
    padding-right: 9rem !important;
  }
  .pe-xl-13 {
    padding-right: 9.5rem !important;
  }
  .pe-xl-x1 {
    padding-right: 1.5rem !important;
  }
  .pb-xl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xl-1 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xl-2 {
    padding-bottom: 1rem !important;
  }
  .pb-xl-3 {
    padding-bottom: 2rem !important;
  }
  .pb-xl-4 {
    padding-bottom: 2.5rem !important;
  }
  .pb-xl-5 {
    padding-bottom: 3rem !important;
  }
  .pb-xl-6 {
    padding-bottom: 3.5rem !important;
  }
  .pb-xl-7 {
    padding-bottom: 4rem !important;
  }
  .pb-xl-8 {
    padding-bottom: 4.5rem !important;
  }
  .pb-xl-9 {
    padding-bottom: 6rem !important;
  }
  .pb-xl-10 {
    padding-bottom: 7rem !important;
  }
  .pb-xl-11 {
    padding-bottom: 8rem !important;
  }
  .pb-xl-12 {
    padding-bottom: 9rem !important;
  }
  .pb-xl-13 {
    padding-bottom: 9.5rem !important;
  }
  .pb-xl-x1 {
    padding-bottom: 1.5rem !important;
  }
  .ps-xl-0 {
    padding-left: 0 !important;
  }
  .ps-xl-1 {
    padding-left: 0.5rem !important;
  }
  .ps-xl-2 {
    padding-left: 1rem !important;
  }
  .ps-xl-3 {
    padding-left: 2rem !important;
  }
  .ps-xl-4 {
    padding-left: 2.5rem !important;
  }
  .ps-xl-5 {
    padding-left: 3rem !important;
  }
  .ps-xl-6 {
    padding-left: 3.5rem !important;
  }
  .ps-xl-7 {
    padding-left: 4rem !important;
  }
  .ps-xl-8 {
    padding-left: 4.5rem !important;
  }
  .ps-xl-9 {
    padding-left: 6rem !important;
  }
  .ps-xl-10 {
    padding-left: 7rem !important;
  }
  .ps-xl-11 {
    padding-left: 8rem !important;
  }
  .ps-xl-12 {
    padding-left: 9rem !important;
  }
  .ps-xl-13 {
    padding-left: 9.5rem !important;
  }
  .ps-xl-x1 {
    padding-left: 1.5rem !important;
  }
  .gap-xl-0 {
    gap: 0 !important;
  }
  .gap-xl-1 {
    gap: 0.5rem !important;
  }
  .gap-xl-2 {
    gap: 1rem !important;
  }
  .gap-xl-3 {
    gap: 2rem !important;
  }
  .gap-xl-4 {
    gap: 2.5rem !important;
  }
  .gap-xl-5 {
    gap: 3rem !important;
  }
  .gap-xl-6 {
    gap: 3.5rem !important;
  }
  .gap-xl-7 {
    gap: 4rem !important;
  }
  .gap-xl-8 {
    gap: 4.5rem !important;
  }
  .gap-xl-9 {
    gap: 6rem !important;
  }
  .gap-xl-10 {
    gap: 7rem !important;
  }
  .gap-xl-11 {
    gap: 8rem !important;
  }
  .gap-xl-12 {
    gap: 9rem !important;
  }
  .gap-xl-13 {
    gap: 9.5rem !important;
  }
  .gap-xl-x1 {
    gap: 1.5rem !important;
  }
  .row-gap-xl-0 {
    row-gap: 0 !important;
  }
  .row-gap-xl-1 {
    row-gap: 0.5rem !important;
  }
  .row-gap-xl-2 {
    row-gap: 1rem !important;
  }
  .row-gap-xl-3 {
    row-gap: 2rem !important;
  }
  .row-gap-xl-4 {
    row-gap: 2.5rem !important;
  }
  .row-gap-xl-5 {
    row-gap: 3rem !important;
  }
  .row-gap-xl-6 {
    row-gap: 3.5rem !important;
  }
  .row-gap-xl-7 {
    row-gap: 4rem !important;
  }
  .row-gap-xl-8 {
    row-gap: 4.5rem !important;
  }
  .row-gap-xl-9 {
    row-gap: 6rem !important;
  }
  .row-gap-xl-10 {
    row-gap: 7rem !important;
  }
  .row-gap-xl-11 {
    row-gap: 8rem !important;
  }
  .row-gap-xl-12 {
    row-gap: 9rem !important;
  }
  .row-gap-xl-13 {
    row-gap: 9.5rem !important;
  }
  .row-gap-xl-x1 {
    row-gap: 1.5rem !important;
  }
  .column-gap-xl-0 {
    -webkit-column-gap: 0 !important;
    -moz-column-gap: 0 !important;
    column-gap: 0 !important;
  }
  .column-gap-xl-1 {
    -webkit-column-gap: 0.5rem !important;
    -moz-column-gap: 0.5rem !important;
    column-gap: 0.5rem !important;
  }
  .column-gap-xl-2 {
    -webkit-column-gap: 1rem !important;
    -moz-column-gap: 1rem !important;
    column-gap: 1rem !important;
  }
  .column-gap-xl-3 {
    -webkit-column-gap: 2rem !important;
    -moz-column-gap: 2rem !important;
    column-gap: 2rem !important;
  }
  .column-gap-xl-4 {
    -webkit-column-gap: 2.5rem !important;
    -moz-column-gap: 2.5rem !important;
    column-gap: 2.5rem !important;
  }
  .column-gap-xl-5 {
    -webkit-column-gap: 3rem !important;
    -moz-column-gap: 3rem !important;
    column-gap: 3rem !important;
  }
  .column-gap-xl-6 {
    -webkit-column-gap: 3.5rem !important;
    -moz-column-gap: 3.5rem !important;
    column-gap: 3.5rem !important;
  }
  .column-gap-xl-7 {
    -webkit-column-gap: 4rem !important;
    -moz-column-gap: 4rem !important;
    column-gap: 4rem !important;
  }
  .column-gap-xl-8 {
    -webkit-column-gap: 4.5rem !important;
    -moz-column-gap: 4.5rem !important;
    column-gap: 4.5rem !important;
  }
  .column-gap-xl-9 {
    -webkit-column-gap: 6rem !important;
    -moz-column-gap: 6rem !important;
    column-gap: 6rem !important;
  }
  .column-gap-xl-10 {
    -webkit-column-gap: 7rem !important;
    -moz-column-gap: 7rem !important;
    column-gap: 7rem !important;
  }
  .column-gap-xl-11 {
    -webkit-column-gap: 8rem !important;
    -moz-column-gap: 8rem !important;
    column-gap: 8rem !important;
  }
  .column-gap-xl-12 {
    -webkit-column-gap: 9rem !important;
    -moz-column-gap: 9rem !important;
    column-gap: 9rem !important;
  }
  .column-gap-xl-13 {
    -webkit-column-gap: 9.5rem !important;
    -moz-column-gap: 9.5rem !important;
    column-gap: 9.5rem !important;
  }
  .column-gap-xl-x1 {
    -webkit-column-gap: 1.5rem !important;
    -moz-column-gap: 1.5rem !important;
    column-gap: 1.5rem !important;
  }
  .fs-xl-10 {
    font-size: 0.875rem !important;
  }
  .fs-xl-9 {
    font-size: 1rem !important;
  }
  .fs-xl-8 {
    font-size: 1.25rem !important;
  }
  .fs-xl-7 {
    font-size: 1.5rem !important;
  }
  .fs-xl-6 {
    font-size: 1.875rem !important;
  }
  .fs-xl-5 {
    font-size: 2.125rem !important;
  }
  .fs-xl-4 {
    font-size: 2.5rem !important;
  }
  .fs-xl-3 {
    font-size: 3rem !important;
  }
  .fs-xl-2 {
    font-size: 3.5rem !important;
  }
  .fs-xl-1 {
    font-size: 3.75rem !important;
  }
  .lh-xl-1 {
    line-height: 1 !important;
  }
  .lh-xl-sm {
    line-height: 1.2 !important;
  }
  .lh-xl-base {
    line-height: 1.084 !important;
  }
  .lh-xl-lg {
    line-height: 1.6 !important;
  }
  .lh-xl-xl {
    line-height: 1.8 !important;
  }
  .text-xl-start {
    text-align: left !important;
  }
  .text-xl-end {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
  .text-xl-justify {
    text-align: justify !important;
  }
  .rounded-xl {
    border-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-xl-0 {
    border-radius: 0 !important;
  }
  .rounded-xl-1 {
    border-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-xl-2 {
    border-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-xl-3 {
    border-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-xl-4 {
    border-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-xl-5 {
    border-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-xl-circle {
    border-radius: 50% !important;
  }
  .rounded-xl-pill {
    border-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .rounded-top-xl {
    border-top-left-radius: var(--brainwaveio-border-radius) !important;
    border-top-right-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-top-xl-0 {
    border-top-left-radius: 0 !important;
    border-top-right-radius: 0 !important;
  }
  .rounded-top-xl-1 {
    border-top-left-radius: var(--brainwaveio-border-radius-sm) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-top-xl-2 {
    border-top-left-radius: var(--brainwaveio-border-radius) !important;
    border-top-right-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-top-xl-3 {
    border-top-left-radius: var(--brainwaveio-border-radius-lg) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-top-xl-4 {
    border-top-left-radius: var(--brainwaveio-border-radius-xl) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-top-xl-5 {
    border-top-left-radius: var(--brainwaveio-border-radius-xxl) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-top-xl-circle {
    border-top-left-radius: 50% !important;
    border-top-right-radius: 50% !important;
  }
  .rounded-top-xl-pill {
    border-top-left-radius: var(--brainwaveio-border-radius-pill) !important;
    border-top-right-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .rounded-end-xl {
    border-top-right-radius: var(--brainwaveio-border-radius) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-end-xl-0 {
    border-top-right-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
  }
  .rounded-end-xl-1 {
    border-top-right-radius: var(--brainwaveio-border-radius-sm) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-end-xl-2 {
    border-top-right-radius: var(--brainwaveio-border-radius) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-end-xl-3 {
    border-top-right-radius: var(--brainwaveio-border-radius-lg) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-end-xl-4 {
    border-top-right-radius: var(--brainwaveio-border-radius-xl) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-end-xl-5 {
    border-top-right-radius: var(--brainwaveio-border-radius-xxl) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-end-xl-circle {
    border-top-right-radius: 50% !important;
    border-bottom-right-radius: 50% !important;
  }
  .rounded-end-xl-pill {
    border-top-right-radius: var(--brainwaveio-border-radius-pill) !important;
    border-bottom-right-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .rounded-bottom-xl {
    border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-bottom-xl-0 {
    border-bottom-right-radius: 0 !important;
    border-bottom-left-radius: 0 !important;
  }
  .rounded-bottom-xl-1 {
    border-bottom-right-radius: var(--brainwaveio-border-radius-sm) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-bottom-xl-2 {
    border-bottom-right-radius: var(--brainwaveio-border-radius) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-bottom-xl-3 {
    border-bottom-right-radius: var(--brainwaveio-border-radius-lg) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-bottom-xl-4 {
    border-bottom-right-radius: var(--brainwaveio-border-radius-xl) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-bottom-xl-5 {
    border-bottom-right-radius: var(--brainwaveio-border-radius-xxl) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-bottom-xl-circle {
    border-bottom-right-radius: 50% !important;
    border-bottom-left-radius: 50% !important;
  }
  .rounded-bottom-xl-pill {
    border-bottom-right-radius: var(--brainwaveio-border-radius-pill) !important;
    border-bottom-left-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .rounded-start-xl {
    border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
    border-top-left-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-start-xl-0 {
    border-bottom-left-radius: 0 !important;
    border-top-left-radius: 0 !important;
  }
  .rounded-start-xl-1 {
    border-bottom-left-radius: var(--brainwaveio-border-radius-sm) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-sm) !important;
  }
  .rounded-start-xl-2 {
    border-bottom-left-radius: var(--brainwaveio-border-radius) !important;
    border-top-left-radius: var(--brainwaveio-border-radius) !important;
  }
  .rounded-start-xl-3 {
    border-bottom-left-radius: var(--brainwaveio-border-radius-lg) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-lg) !important;
  }
  .rounded-start-xl-4 {
    border-bottom-left-radius: var(--brainwaveio-border-radius-xl) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-xl) !important;
  }
  .rounded-start-xl-5 {
    border-bottom-left-radius: var(--brainwaveio-border-radius-xxl) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-xxl) !important;
  }
  .rounded-start-xl-circle {
    border-bottom-left-radius: 50% !important;
    border-top-left-radius: 50% !important;
  }
  .rounded-start-xl-pill {
    border-bottom-left-radius: var(--brainwaveio-border-radius-pill) !important;
    border-top-left-radius: var(--brainwaveio-border-radius-pill) !important;
  }
  .ls-xl-1 {
    letter-spacing: 0.3px !important;
  }
  .ls-xl-2 {
    letter-spacing: 1.63px !important;
  }
  .max-vh-xl-25 {
    max-height: 25vh !important;
  }
  .max-vh-xl-50 {
    max-height: 50vh !important;
  }
  .max-vh-xl-75 {
    max-height: 75vh !important;
  }
  .max-vh-xl-100 {
    max-height: 100vh !important;
  }
  .border-top-xl-0 {
    border-top-width: 0 !important;
  }
  .border-top-xl-1 {
    border-top-width: 1px !important;
  }
  .border-top-xl-2 {
    border-top-width: 2px !important;
  }
  .border-top-xl-3 {
    border-top-width: 3px !important;
  }
  .border-top-xl-4 {
    border-top-width: 4px !important;
  }
  .border-top-xl-5 {
    border-top-width: 5px !important;
  }
  .border-end-xl-0 {
    border-right-width: 0 !important;
  }
  .border-end-xl-1 {
    border-right-width: 1px !important;
  }
  .border-end-xl-2 {
    border-right-width: 2px !important;
  }
  .border-end-xl-3 {
    border-right-width: 3px !important;
  }
  .border-end-xl-4 {
    border-right-width: 4px !important;
  }
  .border-end-xl-5 {
    border-right-width: 5px !important;
  }
  .border-start-xl-0 {
    border-left-width: 0 !important;
  }
  .border-start-xl-1 {
    border-left-width: 1px !important;
  }
  .border-start-xl-2 {
    border-left-width: 2px !important;
  }
  .border-start-xl-3 {
    border-left-width: 3px !important;
  }
  .border-start-xl-4 {
    border-left-width: 4px !important;
  }
  .border-start-xl-5 {
    border-left-width: 5px !important;
  }
  .border-bottom-xl-0 {
    border-bottom-width: 0 !important;
  }
  .border-bottom-xl-1 {
    border-bottom-width: 1px !important;
  }
  .border-bottom-xl-2 {
    border-bottom-width: 2px !important;
  }
  .border-bottom-xl-3 {
    border-bottom-width: 3px !important;
  }
  .border-bottom-xl-4 {
    border-bottom-width: 4px !important;
  }
  .border-bottom-xl-5 {
    border-bottom-width: 5px !important;
  }
  .border-x-xl-0 {
    border-left-width: 0 !important;
    border-right-width: 0 !important;
  }
  .border-x-xl-1 {
    border-left-width: 1px !important;
    border-right-width: 1px !important;
  }
  .border-x-xl-2 {
    border-left-width: 2px !important;
    border-right-width: 2px !important;
  }
  .border-x-xl-3 {
    border-left-width: 3px !important;
    border-right-width: 3px !important;
  }
  .border-x-xl-4 {
    border-left-width: 4px !important;
    border-right-width: 4px !important;
  }
  .border-x-xl-5 {
    border-left-width: 5px !important;
    border-right-width: 5px !important;
  }
  .border-y-xl-0 {
    border-top-width: 0 !important;
    border-bottom-width: 0 !important;
  }
  .border-y-xl-1 {
    border-top-width: 1px !important;
    border-bottom-width: 1px !important;
  }
  .border-y-xl-2 {
    border-top-width: 2px !important;
    border-bottom-width: 2px !important;
  }
  .border-y-xl-3 {
    border-top-width: 3px !important;
    border-bottom-width: 3px !important;
  }
  .border-y-xl-4 {
    border-top-width: 4px !important;
    border-bottom-width: 4px !important;
  }
  .border-y-xl-5 {
    border-top-width: 5px !important;
    border-bottom-width: 5px !important;
  }
}
@media print {
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-grid {
    display: grid !important;
  }
  .d-print-inline-grid {
    display: inline-grid !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-print-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
  .d-print-none {
    display: none !important;
  }
}
/*-----------------------------------------------
|   Theme Styles
-----------------------------------------------*/
/*-----------------------------------------------
|   Reboot
-----------------------------------------------*/
::-webkit-input-placeholder {
  opacity: 1;
  color: var(--brainwaveio-gray-400);
}
::-moz-placeholder {
  opacity: 1;
  color: var(--brainwaveio-gray-400);
}
:-ms-input-placeholder {
  opacity: 1;
  color: var(--brainwaveio-gray-400);
}
::-ms-input-placeholder {
  opacity: 1;
  color: var(--brainwaveio-gray-400);
}
::placeholder {
  opacity: 1;
  color: var(--brainwaveio-gray-400);
}

::-moz-selection {
  background-color: var(--brainwaveio-success);
  color: #fff;
}

::selection {
  background-color: var(--brainwaveio-success);
  color: #fff;
}

[id] {
  scroll-margin-top: calc(var(--brainwaveio-top-nav-height) + 1.5rem);
}

body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
}

pre,
code {
  -webkit-font-smoothing: auto;
  -moz-osx-font-smoothing: auto;
}

input,
button,
select,
optgroup,
textarea,
label,
.alert,
.badge,
.blockquote-footer,
.btn,
.navbar,
.pagination,
.valid-feedback,
.invalid-feedback {
  font-family: var(--brainwaveio-font-sans-serif);
}

pre {
  margin: 0;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

strong {
  font-weight: 600;
}

label {
  font-size: 0.875rem;
  font-weight: 500;
  margin-bottom: 1rem;
  letter-spacing: 0.02em;
}

pre,
code,
kbd,
samp {
  font-size: 0.875rem;
}

[dir=rtl] pre, [dir=rtl] code, [dir=rtl] kbd, [dir=rtl] samp {
  direction: rtl;
}

[data-bs-theme=dark] .d-dark-none {
  display: none;
}

html:not([data-bs-theme=dark]) .d-light-none {
  display: none;
}

a {
  color: rgba(var(--brainwaveio-link-color-rgb), var(--brainwaveio-link-opacity, 1));
  text-decoration: none;
}
a:hover {
  --brainwaveio-link-color-rgb: var(--brainwaveio-link-hover-color-rgb);
  text-decoration: none;
}

/*-----------------------------------------------
|   Headers
-----------------------------------------------*/
h5, .h5, h6, .h6 {
  margin-bottom: 0.5rem;
}

/*-----------------------------------------------
|   Drop cap
-----------------------------------------------*/
.dropcap::first-letter {
  font-size: 3em;
  float: left;
  line-height: 0.92;
  margin-right: 0.375rem;
}

/*-----------------------------------------------
|   Letter Spacing
-----------------------------------------------*/
/*-----------------------------------------------
|   List
-----------------------------------------------*/
.bullet-inside {
  list-style-position: inside;
}

.style-check li {
  position: relative;
  list-style-type: none;
  padding-left: 0.25rem;
}
.style-check li:before {
  content: url(data:image/svg+xml;base64,PHN2ZyBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1mYS1wcm9jZXNzZWQ9IiIgZGF0YS1wcmVmaXg9ImZhbCIgZGF0YS1pY29uPSJjaGVjayIgcm9sZT0iaW1nIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA0NDggNTEyIiBjbGFzcz0ic3ZnLWlubGluZS0tZmEgZmEtY2hlY2sgZmEtdy0xNCIgc3R5bGU9ImZvbnQtc2l6ZTogNDhweDsiPjxwYXRoIGZpbGw9ImN1cnJlbnRDb2xvciIgZD0iTTQxMy41MDUgOTEuOTUxTDEzMy40OSAzNzEuOTY2bC05OC45OTUtOTguOTk1Yy00LjY4Ni00LjY4Ni0xMi4yODQtNC42ODYtMTYuOTcxIDBMNi4yMTEgMjg0LjI4NGMtNC42ODYgNC42ODYtNC42ODYgMTIuMjg0IDAgMTYuOTcxbDExOC43OTQgMTE4Ljc5NGM0LjY4NiA0LjY4NiAxMi4yODQgNC42ODYgMTYuOTcxIDBsMjk5LjgxMy0yOTkuODEzYzQuNjg2LTQuNjg2IDQuNjg2LTEyLjI4NCAwLTE2Ljk3MWwtMTEuMzE0LTExLjMxNGMtNC42ODYtNC42ODYtMTIuMjg0LTQuNjg2LTE2Ljk3IDB6IiBjbGFzcz0iIj48L3BhdGg+PC9zdmc+);
  padding-right: 0.1875rem;
  position: absolute;
  top: 0.0625rem;
  left: -1rem;
  background-repeat: no-repeat;
  width: 1rem;
}

/*-----------------------------------------------
|   Blockquote
-----------------------------------------------*/
.blockquote-content {
  font-style: italic;
  position: relative;
}
.blockquote-content:before {
  position: absolute;
  left: -3rem;
  top: -0.5rem;
  line-height: 1;
  content: "“";
  display: inline-block;
  color: #F4F7FA;
  font-size: 3rem;
}

.blockquote-footer::before {
  -webkit-transform: translateY(0.125rem);
  -ms-transform: translateY(0.125rem);
  transform: translateY(0.125rem);
  font-weight: 400;
  display: inline-block;
}

.line-clamp-1 {
  display: -webkit-box;
  -webkit-line-clamp: 1;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.line-clamp-2 {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.line-clamp-3 {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.line-clamp-4 {
  display: -webkit-box;
  -webkit-line-clamp: 4;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.line-clamp-5 {
  display: -webkit-box;
  -webkit-line-clamp: 5;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

@media (max-width: 575.98px) {
  .container {
    padding-left: 1.5rem !important;
    padding-right: 1.5rem !important;
  }
}

.btn {
  --brainwaveio-btn-border-width: var(--brainwaveio-border-width);
}

.btn:disabled {
  -webkit-box-shadow: var(--brainwaveio-btn-box-shadow);
  box-shadow: var(--brainwaveio-btn-box-shadow);
}

.store-button {
  border-radius: 6px;
  background-color: transparent;
  position: static;
  z-index: 100;
}

.scroll-to-top {
  position: fixed;
  right: 2%;
  bottom: 5%;
  padding: 0;
  height: 40px;
  width: 40px;
  -webkit-transition: opacity 0.2s ease-in;
  -o-transition: opacity 0.2s ease-in;
  transition: opacity 0.2s ease-in;
  z-index: 1120;
}
.scroll-to-top span {
  font-size: 23px;
}
.scroll-to-top:hover {
  background-color: #ad3636 !important;
}

/* -------------------------------------------------------------------------- */
/*                                   Accordion                                */
/* -------------------------------------------------------------------------- */
.accordion {
  border-top: 5px solid transparent;
  border-radius: var(--brainwaveio-border-radius);
}

.accordion-button:not(.collapsed) {
  -webkit-box-shadow: none;
  box-shadow: none;
}

.accordion-item {
  border: none;
  border-bottom: 1px solid var(--brainwaveio-gray-500);
}
.accordion-item:last-of-type {
  border-bottom-left-radius: var(--brainwaveio-border-radius);
  border-bottom-right-radius: var(--brainwaveio-border-radius);
}
.accordion-item:last-of-type .accordion-button.collapsed {
  border-bottom-left-radius: var(--brainwaveio-border-radius);
  border-bottom-right-radius: var(--brainwaveio-border-radius);
}

/* -------------------------------------------------------------------------- */
/*                                    Text                                    */
/* -------------------------------------------------------------------------- */
.text-smallcaps {
  font-variant: small-caps;
}

.text-superscript {
  vertical-align: super;
}

/*-----------------------------------------------
|   Error Page
-----------------------------------------------*/
.fs-error {
  font-size: 7rem;
}
@media (min-width: 576px) {
  .fs-error {
    font-size: 10rem;
  }
}

/*-----------------------------------------------
|   Backgrounds
-----------------------------------------------*/
.bg-holder {
  position: absolute;
  width: 100%;
  min-height: 100%;
  top: 0;
  left: 0;
  background-size: cover;
  background-position: center;
  overflow: hidden;
  will-change: transform, opacity, filter;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  background-repeat: no-repeat;
  z-index: 0;
}
.bg-holder.bg-right {
  left: auto;
  right: 0;
}
.bg-holder.overlay:before {
  position: absolute;
  content: "";
  background: rgba(0, 0, 0, 0.25);
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
.bg-holder.overlay-0:before {
  background: rgba(0, 0, 0, 0.7);
}
.bg-holder.overlay-1:before {
  background: rgba(0, 0, 0, 0.55);
}
.bg-holder.overlay-2:before {
  background: rgba(0, 0, 0, 0.4);
}
.bg-holder .bg-video {
  position: absolute;
  display: block;
  z-index: -1;
  top: 0;
  left: 0;
  -o-object-fit: cover;
  object-fit: cover;
  height: 100%;
  min-width: 100%;
}
.bg-holder .bg-youtube {
  position: absolute !important;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
}

.bg-fixed {
  background-attachment: fixed;
}

.bg-glass {
  background-color: rgba(255, 255, 255, 0.9);
}

.bg-card {
  background-size: contain;
  background-position: right;
  border-top-right-radius: 0.375rem;
  border-bottom-right-radius: 0.375rem;
}
[dir=rtl] .bg-card {
  background-position: left;
  -webkit-transform: scaleX(-1);
  -ms-transform: scaleX(-1);
  transform: scaleX(-1);
  border-top-left-radius: 0.375rem;
  border-bottom-left-radius: 0.375rem;
}

/*-----------------------------------------------
|   Background gradient
-----------------------------------------------*/
.bg-line-chart-gradient {
  background-image: var(--brainwaveio-line-chart-gradient);
  background-position: center;
}

.bg-card-gradient {
  background-image: var(--brainwaveio-card-gradient);
  background-position: center;
}

.bg-progress-gradient {
  background-image: var(--brainwaveio-progress-gradient);
  background-position: center;
}

.bg-auth-circle-shape,
.bg-auth-circle-shape-2 {
  display: none;
}
@media (min-width: 992px) {
  .bg-auth-circle-shape,
  .bg-auth-circle-shape-2 {
    display: block;
  }
}

.bg-auth-circle-shape {
  position: absolute;
  right: -8.75rem;
  top: -5.125rem;
}

.bg-auth-circle-shape-2 {
  position: absolute;
  left: -6.25rem;
  bottom: -2.4375rem;
}

.bg-auth-card-shape {
  background-position: 0 100%;
}
@media (min-width: 768px) {
  .bg-auth-card-shape {
    background-position: 0 133%;
  }
}

.bg-shape {
  position: relative;
  overflow: hidden;
  background-color: var(--brainwaveio-bg-shape-bg);
}
.bg-shape:after, .bg-shape:before {
  position: absolute;
  content: "";
  border-radius: 50%;
}
.bg-shape:after {
  background-image: var(--brainwaveio-bg-shape-bg-ltd);
}
.bg-shape:before {
  background-image: var(--brainwaveio-bg-shape-bg-dtl);
}

.bg-circle-shape:after {
  height: 15.625rem;
  width: 115%;
  left: 32%;
  top: -188%;
}
.bg-circle-shape:before {
  height: 332%;
  width: 45%;
  left: -9%;
  top: 0.5625rem;
}

.modal-shape-header:before {
  height: 28.9375rem;
  width: 155%;
  right: 23%;
  top: -357%;
}
.modal-shape-header:after {
  height: 289%;
  width: 45%;
  right: -10%;
  top: 2.5rem;
}

.showcase-page-gradient {
  background: -o-linear-gradient(92.3deg, #024787 -88.88%, rgba(0, 79, 197, 0) 27.93%);
  background: linear-gradient(357.7deg, #024787 -88.88%, rgba(0, 79, 197, 0) 27.93%);
}

.bg-transparent-50 {
  background-color: rgba(var(--brainwaveio-quaternary-bg-rgb), 0.5);
}

.bg-attachment {
  position: relative;
  height: 3.5625rem;
  width: 6.25rem;
  border-radius: 0.625rem;
  overflow: hidden;
  background: var(--brainwaveio-kanban-bg-attachment-bg);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  color: var(--brainwaveio-kanban-footer-color);
}
.bg-attachment .icon-play {
  position: relative;
  color: var(--brainwaveio-gray-200);
}
.bg-attachment:hover, .bg-attachment:focus {
  color: var(--brainwaveio-gray-700) !important;
}
.bg-attachment:hover .icon-play, .bg-attachment:focus .icon-play {
  color: var(--brainwaveio-gray-300);
}

.bg-attachment-square {
  width: 3.5625rem !important;
}

/* -------------------------------------------------------------------------- */
/*                                   Borders                                  */
/* -------------------------------------------------------------------------- */
.overflow-hidden[class*=rounded] {
  -webkit-mask-image: radial-gradient(#fff, #000);
  mask-image: radial-gradient(#fff, #000);
}

.border-primary {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-primary-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-secondary {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-secondary-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-success {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-success-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-info {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-info-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-warning {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-warning-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-danger {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-danger-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-light {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-light-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-dark {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-dark-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-white {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-white-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-100 {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-gray-100-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-200 {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-gray-200-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-300 {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-gray-300-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-400 {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-gray-400-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-500 {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-gray-500-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-600 {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-gray-600-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-700 {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-gray-700-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-800 {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-gray-800-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-900 {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-gray-900-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-1000 {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-gray-1000-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-1100 {
  --brainwaveio-border-opacity: 1;
  border-color: rgba(var(--brainwaveio-gray-1100-rgb), var(--brainwaveio-border-opacity)) !important;
}

.border-primary-subtle {
  border-color: var(--brainwaveio-primary-border-subtle) !important;
}

.border-secondary-subtle {
  border-color: var(--brainwaveio-secondary-border-subtle) !important;
}

.border-success-subtle {
  border-color: var(--brainwaveio-success-border-subtle) !important;
}

.border-info-subtle {
  border-color: var(--brainwaveio-info-border-subtle) !important;
}

.border-warning-subtle {
  border-color: var(--brainwaveio-warning-border-subtle) !important;
}

.border-danger-subtle {
  border-color: var(--brainwaveio-danger-border-subtle) !important;
}

.border-light-subtle {
  border-color: var(--brainwaveio-light-border-subtle) !important;
}

.border-dark-subtle {
  border-color: var(--brainwaveio-dark-border-subtle) !important;
}

.border-opacity-10 {
  --brainwaveio-border-opacity: 0.1;
}

.border-opacity-25 {
  --brainwaveio-border-opacity: 0.25;
}

.border-opacity-50 {
  --brainwaveio-border-opacity: 0.5;
}

.border-opacity-75 {
  --brainwaveio-border-opacity: 0.75;
}

.border-opacity-100 {
  --brainwaveio-border-opacity: 1;
}

/* -------------------------------------------------------------------------- */
/*                                  Position                                  */
/* -------------------------------------------------------------------------- */
.container,
.container-fluid,
.container-sm,
.container-md,
.container-lg,
.container-xl {
  position: relative;
}

.all-0 {
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.absolute-centered {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translateX(-50%) translateY(-50%);
  -ms-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

/* -------------------------------------------------------------------------- */
/*                                    Flex                                    */
/* -------------------------------------------------------------------------- */
.flex-center {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
}

.flex-between-center {
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.flex-end-center {
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.flex-between-end {
  -webkit-box-align: end;
  -ms-flex-align: end;
  align-items: flex-end;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.flex-1 {
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1;
}

.link-100 {
  color: RGBA(var(--brainwaveio-gray-100-rgb), var(--brainwaveio-link-opacity, 1));
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-gray-100-rgb), var(--brainwaveio-link-underline-opacity, 1));
  text-decoration-color: RGBA(var(--brainwaveio-gray-100-rgb), var(--brainwaveio-link-underline-opacity, 1));
}
.link-100:hover, .link-100:focus {
  color: var(--brainwaveio-gray-link-hover-100);
  -webkit-text-decoration-color: var(--brainwaveio-gray-link-hover-100);
  text-decoration-color: var(--brainwaveio-gray-link-hover-100);
}

.link-200 {
  color: RGBA(var(--brainwaveio-gray-200-rgb), var(--brainwaveio-link-opacity, 1));
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-gray-200-rgb), var(--brainwaveio-link-underline-opacity, 1));
  text-decoration-color: RGBA(var(--brainwaveio-gray-200-rgb), var(--brainwaveio-link-underline-opacity, 1));
}
.link-200:hover, .link-200:focus {
  color: var(--brainwaveio-gray-link-hover-200);
  -webkit-text-decoration-color: var(--brainwaveio-gray-link-hover-200);
  text-decoration-color: var(--brainwaveio-gray-link-hover-200);
}

.link-300 {
  color: RGBA(var(--brainwaveio-gray-300-rgb), var(--brainwaveio-link-opacity, 1));
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-gray-300-rgb), var(--brainwaveio-link-underline-opacity, 1));
  text-decoration-color: RGBA(var(--brainwaveio-gray-300-rgb), var(--brainwaveio-link-underline-opacity, 1));
}
.link-300:hover, .link-300:focus {
  color: var(--brainwaveio-gray-link-hover-300);
  -webkit-text-decoration-color: var(--brainwaveio-gray-link-hover-300);
  text-decoration-color: var(--brainwaveio-gray-link-hover-300);
}

.link-400 {
  color: RGBA(var(--brainwaveio-gray-400-rgb), var(--brainwaveio-link-opacity, 1));
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-gray-400-rgb), var(--brainwaveio-link-underline-opacity, 1));
  text-decoration-color: RGBA(var(--brainwaveio-gray-400-rgb), var(--brainwaveio-link-underline-opacity, 1));
}
.link-400:hover, .link-400:focus {
  color: var(--brainwaveio-gray-link-hover-400);
  -webkit-text-decoration-color: var(--brainwaveio-gray-link-hover-400);
  text-decoration-color: var(--brainwaveio-gray-link-hover-400);
}

.link-500 {
  color: RGBA(var(--brainwaveio-gray-500-rgb), var(--brainwaveio-link-opacity, 1));
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-gray-500-rgb), var(--brainwaveio-link-underline-opacity, 1));
  text-decoration-color: RGBA(var(--brainwaveio-gray-500-rgb), var(--brainwaveio-link-underline-opacity, 1));
}
.link-500:hover, .link-500:focus {
  color: var(--brainwaveio-gray-link-hover-500);
  -webkit-text-decoration-color: var(--brainwaveio-gray-link-hover-500);
  text-decoration-color: var(--brainwaveio-gray-link-hover-500);
}

.link-600 {
  color: RGBA(var(--brainwaveio-gray-600-rgb), var(--brainwaveio-link-opacity, 1));
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-gray-600-rgb), var(--brainwaveio-link-underline-opacity, 1));
  text-decoration-color: RGBA(var(--brainwaveio-gray-600-rgb), var(--brainwaveio-link-underline-opacity, 1));
}
.link-600:hover, .link-600:focus {
  color: var(--brainwaveio-gray-link-hover-600);
  -webkit-text-decoration-color: var(--brainwaveio-gray-link-hover-600);
  text-decoration-color: var(--brainwaveio-gray-link-hover-600);
}

.link-700 {
  color: RGBA(var(--brainwaveio-gray-700-rgb), var(--brainwaveio-link-opacity, 1));
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-gray-700-rgb), var(--brainwaveio-link-underline-opacity, 1));
  text-decoration-color: RGBA(var(--brainwaveio-gray-700-rgb), var(--brainwaveio-link-underline-opacity, 1));
}
.link-700:hover, .link-700:focus {
  color: var(--brainwaveio-gray-link-hover-700);
  -webkit-text-decoration-color: var(--brainwaveio-gray-link-hover-700);
  text-decoration-color: var(--brainwaveio-gray-link-hover-700);
}

.link-800 {
  color: RGBA(var(--brainwaveio-gray-800-rgb), var(--brainwaveio-link-opacity, 1));
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-gray-800-rgb), var(--brainwaveio-link-underline-opacity, 1));
  text-decoration-color: RGBA(var(--brainwaveio-gray-800-rgb), var(--brainwaveio-link-underline-opacity, 1));
}
.link-800:hover, .link-800:focus {
  color: var(--brainwaveio-gray-link-hover-800);
  -webkit-text-decoration-color: var(--brainwaveio-gray-link-hover-800);
  text-decoration-color: var(--brainwaveio-gray-link-hover-800);
}

.link-900 {
  color: RGBA(var(--brainwaveio-gray-900-rgb), var(--brainwaveio-link-opacity, 1));
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-gray-900-rgb), var(--brainwaveio-link-underline-opacity, 1));
  text-decoration-color: RGBA(var(--brainwaveio-gray-900-rgb), var(--brainwaveio-link-underline-opacity, 1));
}
.link-900:hover, .link-900:focus {
  color: var(--brainwaveio-gray-link-hover-900);
  -webkit-text-decoration-color: var(--brainwaveio-gray-link-hover-900);
  text-decoration-color: var(--brainwaveio-gray-link-hover-900);
}

.link-1000 {
  color: RGBA(var(--brainwaveio-gray-1000-rgb), var(--brainwaveio-link-opacity, 1));
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-gray-1000-rgb), var(--brainwaveio-link-underline-opacity, 1));
  text-decoration-color: RGBA(var(--brainwaveio-gray-1000-rgb), var(--brainwaveio-link-underline-opacity, 1));
}
.link-1000:hover, .link-1000:focus {
  color: var(--brainwaveio-gray-link-hover-1000);
  -webkit-text-decoration-color: var(--brainwaveio-gray-link-hover-1000);
  text-decoration-color: var(--brainwaveio-gray-link-hover-1000);
}

.link-1100 {
  color: RGBA(var(--brainwaveio-gray-1100-rgb), var(--brainwaveio-link-opacity, 1));
  -webkit-text-decoration-color: RGBA(var(--brainwaveio-gray-1100-rgb), var(--brainwaveio-link-underline-opacity, 1));
  text-decoration-color: RGBA(var(--brainwaveio-gray-1100-rgb), var(--brainwaveio-link-underline-opacity, 1));
}
.link-1100:hover, .link-1100:focus {
  color: var(--brainwaveio-gray-link-hover-1100);
  -webkit-text-decoration-color: var(--brainwaveio-gray-link-hover-1100);
  text-decoration-color: var(--brainwaveio-gray-link-hover-1100);
}

.navbar {
  -webkit-backdrop-filter: blur(30px);
  backdrop-filter: blur(30px);
}

.navbar-nav {
  width: 100%;
}
@media (min-width: 768px) {
  .navbar-nav {
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
  }
}

.nav-item {
  border-bottom: 1px solid rgba(255, 255, 255, 0.5);
}
.nav-item:last-child {
  border-bottom: none;
}
@media (min-width: 768px) {
  .nav-item {
    border: none;
  }
}

/*-----------------------------------------------
|   Form
-----------------------------------------------*/
.email-input {
  padding: 15px 22px !important;
  border-radius: 8px !important;
  border: 1px solid #E7E9ED !important;
  color: rgba(0, 0, 0, 0.7);
  font-size: 1rem;
  -webkit-transition: all 0.15s ease-in;
  -o-transition: all 0.15s ease-in;
  transition: all 0.15s ease-in;
  width: 100%;
}
.email-input:focus {
  color: #31374a !important;
  background-color: #fff !important;
  border-color: #5de7a2 !important;
  outline: 0 !important;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0), inset 0 0 0 30px #fff, 0 0 0 0.25rem rgba(104, 213, 133, 0.25) !important;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0), inset 0 0 0 30px #fff, 0 0 0 0.25rem rgba(104, 213, 133, 0.25) !important;
}
.email-input::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 1rem;
}
.email-input::-moz-placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 1rem;
}
.email-input:-ms-input-placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 1rem;
}
.email-input::-ms-input-placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 1rem;
}
.email-input::placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 1rem;
}

.hero-section .hero-background {
  background-image: url("../img/illustrations/BG.webp");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  min-height: 60rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  z-index: 0;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}
.hero-section .chat-image {
  width: 90%;
}
.hero-section .dots {
  top: -5%;
  right: 15%;
  z-index: -10;
}
@media (min-width: 768px) {
  .hero-section .chat-image {
    width: 60%;
  }
}
@media (min-width: 992px) {
  .hero-section {
    z-index: 0;
  }
  .hero-section .chat-image {
    width: 100%;
  }
  .hero-section .dots {
    right: -8%;
  }
}
@media (min-width: 1200px) {
  .hero-section .chat-image {
    width: 80%;
  }
  .hero-section .dots {
    right: 0%;
  }
}

.wave {
  width: 110% !important;
  margin-left: -1.25rem;
  margin-right: -1.25rem;
}

.timeline .timeline-step-1, .timeline .timeline-step-2 {
  position: relative;
  z-index: 0;
  overflow: visible;
}
.timeline .timeline-step-1 .timeline-item::before, .timeline .timeline-step-2 .timeline-item::before {
  content: "";
  position: absolute;
  height: 100%;
  border-left: 3px dashed #D5D7DD;
  left: 50%;
  bottom: -50%;
  z-index: -1;
}
@media (min-width: 576px) {
  .timeline .timeline-step-1 .timeline-item::before, .timeline .timeline-step-2 .timeline-item::before {
    bottom: -80%;
  }
}
@media (min-width: 992px) {
  .timeline .timeline-step-1 .timeline-item, .timeline .timeline-step-2 .timeline-item {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }
  .timeline .timeline-step-1 .timeline-item::before, .timeline .timeline-step-2 .timeline-item::before {
    content: "";
    position: absolute;
    width: 100%;
    border-left: none;
    height: -webkit-fit-content;
    height: -moz-fit-content;
    height: fit-content;
    border-bottom: 3px dashed #D5D7DD;
    -o-border-image: url("../img/illustrations/border.webp") 20 round;
    border-image: url("../img/illustrations/border.webp") 20 round;
    left: 50%;
    bottom: 50%;
    z-index: -1;
  }
}
.timeline .timeline-icon {
  width: 4.563rem;
  height: 4.563rem;
}
@media (min-width: 992px) {
  .timeline .timeline-content {
    min-height: 8.438rem;
  }
}

.experience {
  background: -webkit-gradient(linear, left top, left bottom, from(#313C59), to(#161C2D));
  background: -o-linear-gradient(top, #313C59, #161C2D);
  background: linear-gradient(to bottom, #313C59, #161C2D);
}
.experience .dots {
  left: -5%;
  bottom: -5%;
  z-index: -1;
}

.play-button {
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  width: 50px;
  height: 50px;
  z-index: 999;
  padding: 0;
}
@media (min-width: 768px) {
  .play-button {
    width: 5rem;
    height: 5rem;
  }
}

.horizontal-rule {
  width: 10.06rem;
  height: 3px;
  background-color: rgba(255, 255, 255, 0.15);
}

.underline {
  position: relative;
  z-index: 0;
}

.underline::after {
  content: "";
  position: absolute;
  width: 100%;
  height: 4px;
  right: 0;
  left: -5px;
  bottom: 20%;
  background-color: #68D585;
  z-index: -1;
}

.pricing-card {
  width: 100%;
  max-width: 21.875rem;
}

.check-icon {
  height: 1.875rem;
  width: 1.875rem;
}

.swiper-theme-container {
  height: 21.875rem !important;
  width: 37.5rem !important;
  overflow: hidden;
}
.swiper-theme-container .swiper {
  height: 100%;
  width: 100%;
  margin: auto;
}
@media (min-width: 768px) {
  .swiper-theme-container {
    width: 45.65rem !important;
  }
}
@media (min-width: 992px) {
  .swiper-theme-container {
    width: 45.65rem !important;
    height: 37.5rem !important;
    margin: auto;
  }
}

.swiper-slide {
  margin: auto;
  border: 1px solid #57595E;
  color: #161C2D;
  border-radius: var(--brainwaveio-border-radius-lg);
  overflow: hidden;
  background-color: rgba(255, 255, 255, 0.5);
  -webkit-transition: background-color 0.2s ease-in-out;
  -o-transition: background-color 0.2s ease-in-out;
  transition: background-color 0.2s ease-in-out;
}
.swiper-slide:hover, .swiper-slide:focus {
  background-color: #fff;
}
.swiper-slide .card-image {
  width: 5.6rem;
  height: 5.6rem;
  border: 2px solid #979797;
}
@media (min-width: 992px) {
  .swiper-slide .card-image {
    width: 6.938rem;
    height: 6.938rem;
  }
}

.swiper-slide-active {
  background-color: #fff;
}

.swiper-slide-next, .swiper-slide-prev {
  background-color: rgba(255, 255, 255, 0.7);
  -webkit-transition: background-color 0.2s ease-in-out;
  -o-transition: background-color 0.2s ease-in-out;
  transition: background-color 0.2s ease-in-out;
}
.swiper-slide-next:hover, .swiper-slide-next:focus, .swiper-slide-prev:hover, .swiper-slide-prev:focus {
  background-color: #fff;
}

/* -------------------------------------------------------------------------- */
/*                                 Video player                               */
/* -------------------------------------------------------------------------- */
.video-player-paused .overlay {
  opacity: 0.1;
  z-index: 100;
  -webkit-transition: opacity 0.5s ease-in-out;
  -o-transition: opacity 0.5s ease-in-out;
  transition: opacity 0.5s ease-in-out;
}
.video-player-paused .pause-icon {
  display: none;
}
.video-player-paused .play-icon {
  display: inline;
}
.video-player-paused:hover .overlay {
  opacity: 0.4;
}

.video-player-play .overlay {
  opacity: 0;
}
.video-player-play .play-button {
  display: none;
}
.video-player-play .play-icon {
  display: none;
}
.video-player-play .pause-icon {
  display: inline;
}
.video-player-play:hover .overlay {
  opacity: 0.4;
}
.video-player-play:hover .play-button {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

footer .icons {
  -webkit-transition: color 0.2s ease-in-out;
  -o-transition: color 0.2s ease-in-out;
  transition: color 0.2s ease-in-out;
}

</style>

'



?>