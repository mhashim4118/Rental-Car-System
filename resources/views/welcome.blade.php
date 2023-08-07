<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaraRent | A Best Website for Getting Best Rental Experience</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }

        body {
            font-family: Varela Round;
            background: #f1f1f1;
        }

        a {
            text-decoration: none;
        }

        /* Card Styles */

        .card-sl {
            border-radius: 8px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .card-image img {
            max-height: 100%;
            max-width: 100%;
            border-radius: 8px 8px 0px 0;
        }

        .card-action {
            position: relative;
            float: right;
            margin-top: -25px;
            margin-right: 20px;
            z-index: 2;
            color: #E26D5C;
            background: #fff;
            border-radius: 100%;
            padding: 15px;
            font-size: 15px;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 2px 0 rgba(0, 0, 0, 0.19);
        }

        .card-action:hover {
            color: #fff;
            background: #E26D5C;
            -webkit-animation: pulse 1.5s infinite;
        }

        .card-heading {
            font-size: 18px;
            font-weight: bold;
            background: #fff;
            padding: 10px 15px;
        }

        .card-text {
            padding: 10px 15px;
            background: #fff;
            font-size: 14px;
            color: #636262;
        }

        .card-button {
            display: flex;
            justify-content: center;
            padding: 10px 0;
            width: 100%;
            background-color: #1F487E;
            color: #fff;
            border-radius: 0 0 8px 8px;
            text-decoration: none;
        }

        /* .card-button:hover {
            text-decoration: none;
            background-color: #1D3461;
            color: #fff;

        } */


        @-webkit-keyframes pulse {
            0% {
                -moz-transform: scale(0.9);
                -ms-transform: scale(0.9);
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
            }

            70% {
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -webkit-transform: scale(1);
                transform: scale(1);
                box-shadow: 0 0 0 50px rgba(90, 153, 212, 0);
            }

            100% {
                -moz-transform: scale(0.9);
                -ms-transform: scale(0.9);
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
                box-shadow: 0 0 0 0 rgba(90, 153, 212, 0);
            }
        }

        /* Tab code*/
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
            /* color: white; */
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #0a0a0a;
            color: white;
        }

        /* Style the tab content */
        .tabcontent,
        .tabcontent1 {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

        img.rounded-circle {
            height: 50%;
            margin-top: 10%;
            margin-left: 30%;
        }

        .col-md-8.col-lg-9.col-xl-8 {
            margin-top: 6%;
            margin-left: 7%;
        }

        .d5 {
            background: linear-gradient(grey, white)
        }

        .tg {
            background: linear-gradient(black, white, silver)
        }

        .container-fluid.tg {
            padding-top: 6%;
            padding-bottom: 6%;
        }

        .s1 {
            padding-left: 42%;
        }

        .col-md-7 {
            padding-left: 2%;
        }

        p.text-center {
            padding-left: 25%;
            padding-right: 28%;
        }

        input[type="text"] {
            width: 50%;
            margin-left: 22%;

        }

        .container.oh {
            padding-top: 5%;
            padding-bottom: 5%;
        }
    </style>
</head>

<body class="">
    <x-header />
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            {{-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button> --}}
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active bg-image shadow-1-strong">
                <img src="{{asset('images\i1.jpeg')}}" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block mask" style="background-color: rgba(0, 0, 0, 0.6)">
                    <h5>{{__('welcome.heading1')}}</h5>
                    <h1>{{__('welcome.heading2')}}</h1>
                    <a href="/vehicles" class="btn btn-danger">{{__('welcome.button1')}}</a>
                </div>
            </div>

            <div class="carousel-item bg-image shadow-1-strong">
                <img src="{{asset('images\i3.jpeg')}}" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block mask" style="background-color: rgba(0, 0, 0, 0.6)">
                    <h5>{{__('welcome.heading3')}}</h5>
                    <h1 class="text-info">{{__('welcome.heading4')}}</h1>
                    <p>{{__('welcome.heading5')}}</p>
                    <p>{{__('welcome.heading6')}}</p>
                    <a href="/bookingform " class="btn btn-warning">{{__('welcome.button2')}}</a>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="caption-icon text-center">
                            <i class="fa fa-8x fa-support" style=""></i>
                        </div>
                        <br>
                        <div class="caption-title text-center">
                            <b>{{__('welcome.icon1')}}</b>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="caption-icon text-center">
                            <i class="fa fa-8x fa-calendar-alt"></i>
                        </div>
                        <br>
                        <div class="caption-title text-center">
                            <b>{{__('welcome.icon2')}}</b>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="caption-icon text-center">
                            <i class="fa fa-8x fa-map-marker-alt"></i>
                        </div>
                        <br>
                        <div class="caption-title text-center">
                            <b>{{__('welcome.icon3')}}</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <div class="container-fluid bg-dark">
        <div class="container">
            <div class="row featurette" bis_skin_checked="1">
                <div class="col-md-7 pt-5" bis_skin_checked="1">

                    <h2 class="featurette-heading fw-normal lh-1 text-white">{{__('welcome.heading7')}}</h2>
                    <h1 class="text-white">{{__('welcome.heading8')}}</h1>
                    <p class="text-white">{{__('welcome.paragraph1')}}</p>
                    <p class="text-white">
                        <i class="fa fa-check-circle text-white"></i> {{__('welcome.point1')}}
                    </p>
                    <p class="text-white">
                        <i class="fa fa-check-circle text-white"></i> {{__('welcome.point2')}}
                    </p>
                    <div class="mb-3">
                        <a href="/vehicles" class="btn btn-danger w-25">{{__('welcome.button3')}}</a>
                        <a href="/vehicles" class="btn btn-warning w-25">{{__('welcome.button4')}}</a>
                    </div>
                </div>
                <div class="col-md-5 mt-3 mb-3" bis_skin_checked="1">

                    <img src="{{asset('images\d3.jpeg')}}" alt="">
                </div>
            </div>
        </div>
    </div>




    </div>



    <script>
        function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
    </script>

    <div class="container-fluid bg-light d5">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner pt-2 pb-5">
                    <!-- Single item -->
                    <div class="carousel-item active">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8 col-lg-9 col-xl-8">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="{{asset('images\person_1.jpg')}}"
                                            class="rounded-circle mb-4 mb-lg-0 shadow-2" alt="woman avatar" width="90"
                                            height="90">
                                    </div>
                                    <div class="flex-grow-1 ms-4 ps-3">
                                        <figure>
                                            <blockquote class="blockquote mb-4">
                                                <p>
                                                    <i class="fas fa-quote-left fa-lg text-warning me-2"></i>
                                                    <span class="font-italic text-dark">Lorem ipsum dolor sit amet
                                                        consectetur
                                                        adipisicing
                                                        elit. Pariatur sint nesciunt ad itaque aperiam expedita officiis
                                                        incidunt
                                                        minus facere, molestias quisquam impedit inventore.</span>
                                                </p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer text-warning">
                                                Miranda Smith in <cite title="Source Title">The Guardian</cite>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8 col-lg-9 col-xl-8">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="{{asset('images\person_2.jpg')}}"
                                            class="rounded-circle mb-4 mb-lg-0 shadow-2" alt="woman avatar" width="90"
                                            height="90">
                                    </div>
                                    <div class="flex-grow-1 ms-4 ps-3">
                                        <figure>
                                            <blockquote class="blockquote mb-4">
                                                <p>
                                                    <i class="fas fa-quote-left fa-lg text-warning me-2"></i>
                                                    <span class="font-italic text-dark">Lorem ipsum dolor sit amet
                                                        consectetur
                                                        adipisicing
                                                        elit. Pariatur sint nesciunt ad itaque aperiam expedita officiis
                                                        incidunt
                                                        minus facere, molestias quisquam impedit inventore.</span>
                                                </p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer text-warning">
                                                Miranda Smith in <cite title="Source Title">The Guardian</cite>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8 col-lg-9 col-xl-8">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="{{asset('images\person_3.jpg')}}"
                                            class="rounded-circle mb-4 mb-lg-0 shadow-2" alt="woman avatar" width="90"
                                            height="90">
                                    </div>
                                    <div class="flex-grow-1 ms-4 ps-3">
                                        <figure>
                                            <blockquote class="blockquote mb-4">
                                                <p>
                                                    <i class="fas fa-quote-left fa-lg text-warning me-2"></i>
                                                    <span class="font-italic text-dark">Lorem ipsum dolor sit amet
                                                        consectetur
                                                        adipisicing
                                                        elit. Pariatur sint nesciunt ad itaque aperiam expedita officiis
                                                        incidunt
                                                        minus facere, molestias quisquam impedit inventore.</span>
                                                </p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer text-warning">
                                                Miranda Smith in <cite title="Source Title">The Guardian</cite>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="container pt-2 pb-3" style="margin-top:5%;">
            <h5 class="text-center text-dark">Select What You Want</h5>
            <h1 class="text-center text-dark font-weight-bolder display-8"><b>OUR AWESOME RENTAL FLEET CARS</b></h1>
            <div class="tab" style="font-family: inherit;">
                <button class="tablinks1 active" onclick="openCity1(event, 'London1')">Economy</button>
                <button class="tablinks1" onclick="openCity1(event, 'Paris1')">Business</button>
                <button class="tablinks1" onclick="openCity1(event, 'Tokyo1')">Luxury</button>
            </div>

            <div id="London1" class="tabcontent1" style="display: block;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-sl">
                            <div class="card-image">
                                <img src="{{asset('images\s1.jpeg')}}" />
                            </div>

                            <a class="card-action bg-dark" href="#"><i class="fa fa-heart"></i></a>
                            <div class="card-heading">
                                Audi Q8
                            </div>
                            <div class="card-text">
                                Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in
                                2018.
                            </div>
                            <div class="card-text">
                                Starting from $67,400
                            </div>
                            {{-- <a href="/vehicles" class="card-button bg-dark"> RENT IT</a> --}}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-sl">
                            <div class="card-image">
                                <img src="{{asset('images\s2.jpeg')}}" />
                            </div>

                            <a class="card-action bg-dark" href="#"><i class="fa fa-heart"></i></a>
                            <div class="card-heading">
                                Audi Q8
                            </div>
                            <div class="card-text">
                                Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in
                                2018.
                            </div>
                            <div class="card-text">
                                Starting from $67,400
                            </div>
                            {{-- <a href="/vehicles" class="card-button bg-dark"> RENT IT</a> --}}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-sl">
                            <div class="card-image">
                                <img src="{{asset('images\s3.jpeg')}}" />
                            </div>

                            <a class="card-action bg-dark" href="#"><i class="fa fa-heart"></i></a>
                            <div class="card-heading">
                                Audi Q8
                            </div>
                            <div class="card-text">
                                Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in
                                2018.
                            </div>
                            <div class="card-text">
                                Starting from $67,400
                            </div>
                            {{-- <a href="/vehicles" class="card-button bg-dark"> RENT IT</a> --}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- <h3>London</h3>
            <p>London is the capital city of England.</p> --}}
            <div id="Paris1" class="tabcontent1">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-sl">
                            <div class="card-image">
                                <img src="{{asset('images\s3.jpeg')}}" />
                            </div>

                            <a class="card-action bg-dark" href="#"><i class="fa fa-heart"></i></a>
                            <div class="card-heading">
                                Audi Q8
                            </div>
                            <div class="card-text">
                                Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in
                                2018.
                            </div>
                            <div class="card-text">
                                Starting from $67,400
                            </div>
                            {{-- <a href="/vehicles" class="card-button bg-dark"> RENT IT</a> --}}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-sl">
                            <div class="card-image">
                                <img src="{{asset('images\s1.jpeg')}}" />
                            </div>

                            <a class="card-action bg-dark" href="#"><i class="fa fa-heart"></i></a>
                            <div class="card-heading">
                                Audi Q8
                            </div>
                            <div class="card-text">
                                Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in
                                2018.
                            </div>
                            <div class="card-text">
                                Starting from $67,400
                            </div>
                            {{-- <a href="/vehicles" class="card-button bg-dark"> RENT IT</a> --}}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-sl">
                            <div class="card-image">
                                <img src="{{asset('images\s2.jpeg')}}" />
                            </div>

                            <a class="card-action bg-dark" href="#"><i class="fa fa-heart"></i></a>
                            <div class="card-heading">
                                Audi Q8
                            </div>
                            <div class="card-text">
                                Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in
                                2018.
                            </div>
                            <div class="card-text">
                                Starting from $67,400
                            </div>
                            {{-- <a href="/vehicles" class="card-button bg-dark"> RENT IT</a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div id="Tokyo1" class="tabcontent1">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-sl">
                            <div class="card-image">
                                <img src="{{asset('images\s2.jpeg')}}" />
                            </div>

                            <a class="card-action bg-dark" href="#"><i class="fa fa-heart"></i></a>
                            <div class="card-heading">
                                Audi Q8
                            </div>
                            <div class="card-text">
                                Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in
                                2018.
                            </div>
                            <div class="card-text">
                                Starting from $67,400
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-sl">
                            <div class="card-image">
                                <img src="{{asset('images\s3.jpeg')}}" />
                            </div>

                            <a class="card-action bg-dark" href="#"><i class="fa fa-heart"></i></a>
                            <div class="card-heading">
                                Audi Q8
                            </div>
                            <div class="card-text">
                                Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in
                                2018.
                            </div>
                            <div class="card-text">
                                Starting from $67,400
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card-sl">
                            <div class="card-image">
                                <img src="{{asset('images\s1.jpeg')}}" />
                            </div>

                            <a class="card-action bg-dark" href="#"><i class="fa fa-heart"></i></a>
                            <div class="card-heading">
                                Audi Q8
                            </div>
                            <div class="card-text">
                                Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in
                                2018.
                            </div>
                            <div class="card-text">
                                Starting from $67,400
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        function openCity1(evt, cityName1) {
  var i, tabcontent1, tablinks1;
  tabcontent1 = document.getElementsByClassName("tabcontent1");
  for (i = 0; i < tabcontent1.length; i++) {
    tabcontent1[i].style.display = "none";
  }
  tablinks1 = document.getElementsByClassName("tablinks1");
  for (i = 0; i < tablinks1.length; i++) {
    tablinks1[i].className = tablinks1[i].className.replace(" active", "");
  }
  document.getElementById(cityName1).style.display = "block";
  evt.currentTarget.className += " active";
}
    </script>
    </div>

    <div class="container-fluid tg">
        <div class="container">
            <div class="row r1">
                <div class="col-3">
                    <div class="caption-icon text-center">
                        <i class="fa fa-4x fa-heart" style=""></i>
                    </div>
                    <br>
                    <div class="caption-title text-center">
                        <b>5657</b>
                        <div class="caption-subtitle text-center">
                            <b>HAPPY COSTOMERS</b>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="caption-icon text-center">
                        <i class="fa fa-4x fa-car" style=""></i>
                    </div>
                    <br>
                    <div class="caption-title text-center">
                        <b>657</b>
                        <div class="caption-subtitle text-center">
                            <b>TOTAL CAR COUNT</b>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="caption-icon text-center">
                        <i class="fa fa-4x fa-flag" style=""></i>
                    </div>
                    <br>
                    <div class="caption-title text-center">
                        <b>1.255.657</b>
                    </div>
                    <div class="caption-subtitle text-center">
                        <b>TOTAL KM/MIL</b>
                    </div>
                </div>
                <div class="col-3">
                    <div class="caption-icon text-center">
                        <i class="fa fa-4x fa-comments" style=""></i>
                    </div>
                    <br>
                    <div class="caption-title text-center">
                        <b>1255</b>
                    </div>
                    <div class="caption-subtitle text-center">
                        <b>CALL CENTER SOLUTIONS</b>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="container faq pt-2 pb-2">
            <h5 class="text-center text-dark">See What People Ask To Us</h5>
            <h1 class="text-center text-dark font-weight-bolder display-8"><b>FAQS</b></h1>
            <div class="row">
                <div class="col-6">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    How can I drop the rental car?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                    accordion
                                    body.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Where can I rent a car?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion
                                    body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    If I crash a car. What happens?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion
                                    body. Nothing more exciting happening here in terms of content, but just filling up
                                    the
                                    space to make it look, at least at first glance, a bit more representative of how
                                    this
                                    would look in a real-world application.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefour" aria-expanded="false"
                                    aria-controls="flush-collapsefour">
                                    How can I drop the rental car?
                                </button>
                            </h2>
                            <div id="flush-collapsefour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                    accordion
                                    body.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefive" aria-expanded="false"
                                    aria-controls="flush-collapsefive">
                                    Where can I rent a car?
                                </button>
                            </h2>
                            <div id="flush-collapsefive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion
                                    body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsesix" aria-expanded="false"
                                    aria-controls="flush-collapsesix">
                                    If I crash a car. What happens?
                                </button>
                            </h2>
                            <div id="flush-collapsesix" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion
                                    body. Nothing more exciting happening here in terms of content, but just filling up
                                    the
                                    space to make it look, at least at first glance, a bit more representative of how
                                    this
                                    would look in a real-world application.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container pt-2 pb-2">
            <div class="row">
                <h5 class="text-center text-dark">Rental Magazine Here </h5>
                <h1 class="text-center text-dark font-weight-bolder display-8"><b>RECENT BLOG POST</b></h1>
                <div class="col-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('images\b1.jpeg')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Standard Blog Post with Image Slider Header 1</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text text-danger">15 JAN
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('images\b2.jpeg')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Standard Blog Post with Image Slider Header 1-1</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text text-danger">15 JAN
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="s1">
                <a href="/blogs" class="btn btn-danger text-white">See All Post</a>
            </div>
        </div>
    </div>


    <div class="container-fluid bg-light">
        <div class="container oh">
            <h5 class="text-center text-dark">You Can Follow Us By E-Mail</h5>
            <h1 class="text-center text-dark font-weight-bolder display-8"><b>SUBSCRIBE</b></h1>
            <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe fuga at, veniam
                tempora
                dolorum error molestias. Accusantium cupiditate, asperiores hic officiis fugiat eaque fuga amet vitae,
                quidem quisquam minus dicta.</p>
            <form action="" class="d-flex">
                <input type="text" name="" id="" class="form-control" width="50%" placeholder="Enter Your Email"><a
                    href="" class="btn btn-danger text-white">SUBSCRIBE</a>
            </form>
        </div>

    </div>

    <div class="container pt-2 pb-2">
        <h5 class="text-center text-dark">Do You Have any Question Or Anything Else</h5>
        <h1 class="text-center text-dark font-weight-bolder display-8"><b>COSTUMER SERVICE</b></h1>
        <div class="row">
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images\person_2.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>

                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images\person_3.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>

                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images\person_4.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>

                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images\person_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</body>

</html>