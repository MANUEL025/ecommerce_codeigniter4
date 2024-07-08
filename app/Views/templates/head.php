<!-- app/Views/templates/head.php -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?= isset($title) ? esc($title) : 'Construhogar' ?></title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
<link rel="stylesheet" href="/assets/css/estilos.css">
<link rel="icon" type="image/png" href="/assets/image/logito.ico">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
    :root {
        --color-principal: #012535;
        --color-primary-hover: #012535;
        --color-verde: #37a0dd;
        --color-negro: #444A47;
        --color-fondo: #F7F9FD;
        --color-footer: #151515;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    * {
        padding: 0px;
        margin: 0;
    }

    body {
        font-family: 'Poppins', sans-serif;
    }

    .hm-wrapper {
        position: relative;
    }

    .hm-wrapper,
    body {
        min-height: 100%;
    }

    a {
        text-decoration: none;
    }

    ul,
    ol {
        list-style: none;
    }

    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        vertical-align: middle;
        border-style: none;
    }

    .bg-fondo {
        background: var(--color-fondo);
    }

    .container {
        width: 112px;
        padding: 0 10px;
        margin: 0 auto;
    }

    @media screen and (min-width: 1px) {
        .container {
            width: auto;
            max-width: 1122px !important;
        }
    }

    .uppercase {
        text-transform: uppercase !important;
    }

    .hm-btn {
        display: inline-block;
        position: relative;
        padding: 12px 25px;
        background: transparent;
        border: none;
        cursor: pointer;
        font-size: 14px;
        outline: 0;
    }

    .btn-primary {
        background: var(--color-principal);
        color: #fff;
        border-radius: 25px;
        text-align: center;
    }

    .btn-primary:hover {
        background: var(--color-primary-hover);
    }

    .logo {
        width: 50px;
        text-align: right;
        flex: 0 0 auto;
        height: auto;
    }

    .container1 {
        display: flex;
        align-items: center;
    }

    .tex-logo {
        flex: 1 1 auto;
        padding: 10px;
    }

    .header-menu-movil {
        display: none;
    }

    .hm-header {
        position: relative;
        height: 64px;
        background: #fff;
        line-height: 64px;
        -webkit-transition: all .6s ease-in-out;
        -moz-transition: all .6s ease-in-out;
        -ms-transition: all .6s ease-in-out;
        -o-transition: all .6s ease-in-out;
        transition: all .6s ease-in-out;
        margin-top: 10px;
        margin-bottom: 20px;
        box-sizing: border-box;
    }

    .hm-header .container {
        height: 100%;
    }

    .hm-header.header-fixed {
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
        box-shadow: 0px 3px 6px rgba(0, 0, 0, 8%);
        z-index: 99;
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .header-menu {
        display: flex;
        height: 120%;
        justify-content: space-between;
        align-items: center;
    }

    .header-menu .hm-logo {
        width: 112px;
    }

    .hm-menu {
        display: flex;
        position: relative;
    }

    .hm-menu ul {
        display: flex;
    }

    .hm-menu ul li a {
        color: var(--color-negro);
        font-size: 15px;
        margin-right: 30px;
        display: inline-block;
    }

    .hm-menu ul li a:hover {
        color: rgb(52, 163, 18);
    }

    .hm-menu ul li a:active {
        font-weight: bold;
    }

    .hm-menu .hm-icon-cart {
        margin-left: 10px;
    }

    .hm-menu .hm-icon-cart a {
        font-size: 33px;
        color: var(--color-negro);
        position: relative;
    }

    .hm-menu .hm-icon-cart a span {
        position: absolute;
        width: 20px;
        height: 20px;
        line-height: 20px;
        text-align: center;
        top: 2px;
        right: -2px;
        font-size: 10px;
        border-radius: 50%;
        background: var(--color-principal);
        color: #fff;
    }

    .hm-banner {
        position: relative;
        width: 100%;
        height: 600px;
        min-height: 600px;
        overflow: hidden;
    }

    .hm-banner a {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: 20;
    }

    .hm-banner .img-banner {
        height: 100%;
    }

    .hm-page-block {
        position: relative;
        padding: 60px 0px;
    }

    .header-title {
        margin-bottom: 50px;
    }

    .header-title h1 {
        color: var(--color-negro);
        position: relative;
        text-align: center;
        font-size: 30px;
        font-weight: 600;
        padding-bottom: 16px;
    }

    .header-title h1::after {
        content: '';
        width: 76px;
        height: 5px;
        background: var(--color-principal);
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        position: absolute;
        border-radius: 3px;
    }

    .hm-grid-category,
    .grid-product {
        display: grid;
        grid-template-columns: repeat(4, calc(25% - 2rem*3/4));
        row-gap: 2rem;
        column-gap: 2rem;
        max-width: 1122px;
    }

    .hm-grid-category .grid-item {
        position: relative;
        border-radius: 5px;
        overflow: hidden;
        max-height: 360px;
    }

    .hm-grid-category .grid-item img,
    .grid-product .product-item .p-portada img {
        transition: all .3s ease-in;
    }

    .hm-grid-category .grid-item img:hover,
    .grid-product .product-item .p-portada img:hover {
        transform: scale(1.07);
    }

    .hm-grid-category .grid-item:hover .c-info {
        transform: translateY(0%);
    }

    .hm-grid-category .grid-item .c-info {
        position: absolute;
        width: 100%;
        bottom: 0;
        left: 0;
        color: #fff;
        padding: 20px;
        background: rgba(0, 0, 0, 40%);
        transform: translateY(100%);
        transition: all .3s ease-in;
    }

    .hm-grid-category .grid-item .c-info h3 {
        font-size: 16px;
        font-weight: 400;
        text-align: center;
    }

    .hm-tabs {
        display: flex;
        justify-content: center;
        align-content: center;
        flex-wrap: wrap;
        flex-direction: row;
    }

    .hm-tabs .hm-tab-link {
        margin: 0px 20px;
        background: #fff;
        border: 1px solid #EEF5F9;
        padding: 10px 30px;
        border-radius: 22px;
        color: #7C807E;
        cursor: pointer;
        transition: all .3s;
    }

    .hm-tabs .hm-tab-link.active,
    .hm-tabs .hm-tab-link:hover {
        background: var(--color-principal);
        color: #fff;
    }

    .hm-tabs .hm-tab-link.active .tabs-content {
        background: red;
    }

    .tabs-content {
        display: none;
        padding-top: 50px;
    }

    .tabs-content.tab-active {
        display: block;
    }

    .grid-product .product-item {
        overflow: hidden;
        background: #fff;
        border: 1px solid #EEF5F9;
        border-radius: 5px;
    }

    .grid-product .product-item:hover {
        box-shadow: 0px 8px 24px rgba(220, 229, 245, 63%);
    }

    .grid-product .product-item .p-portada {
        width: 100%;
        height: 265px;
        position: relative;
        overflow: hidden;
    }

    .grid-product .product-item .p-portada .stin {
        position: absolute;
        left: 12px;
        bottom: 12px;
        background: var(--color-fondo);
        font-size: 13px;
        padding: 5px 10px;
        border-radius: 16px;
    }

    .grid-product .product-item .p-portada .stin.stin-new {
        background: var(--color-verde);
        color: #fff;
    }

    .grid-product .product-item .p-portada .stin.stin-oferta {
        background: var(--color-principal);
        color: #fff;
    }

    .grid-product .product-item .p-info {
        padding: 20px 16px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: calc(100% - 265px);
    }

    .grid-product .product-item .p-info h3 {
        font-size: 18px;
        font-weight: 600;
        color: var(--color-negro);
        line-height: 26px;
        margin-bottom: 16px;
    }

    .grid-product .product-item .p-info .precio {
        margin-bottom: 30px;
        display: flex;
        align-items: center;
    }

    .grid-product .product-item .p-info .precio span {
        font-size: 24px;
        font-weight: 700;
        color: var(--color-negro);
    }

    .grid-product .product-item .p-info .precio span.thash {
        font-size: 16px;
        font-weight: 400;
        margin-left: 10px;
        color: #A7A7A7;
        text-decoration: line-through;
    }

    .grid-product .product-item .p-info .hm-btn {
        width: 100%;
    }

    footer {
        background: #151515;
        padding: 80px 0px;
    }

    footer .foo-row {
        display: flex;
        justify-content: space-between;
    }

    footer .foo-row .foo-col {
        width: 50%;
    }

    footer .foo-row .foo-col:last-child {
        margin-left: 50px;
    }

    footer .foo-row .foo-col:first-child {
        margin-right: 50px;
    }

    footer .foo-row .foo-col h2 {
        color: #E3E3E3;
        line-height: 40px;
        font-size: 33px;
        font-weight: 500;
        margin-bottom: 20px;
    }

    footer form .f-input {
        width: 100%;
        position: relative;
    }

    footer form .f-input input {
        width: 100%;
        display: block;
        padding: 16px 30px;
        background: #2C2B2B;
        border: none;
        padding-right: 50px;
        font-size: 15px;
        border-radius: 25px;
        outline: 0;
        color: #A7A1A1;
    }

    footer form .f-input .hm-btn-round {
        position: absolute;
        right: 0px;
        top: 50%;
        transform: translateY(-50%);
        width: 42px;
        height: 42px;
        border: none;
        font-size: 18px;
        margin-right: 3px;
        cursor: pointer;
    }

    footer .foo-row .foo-col ul {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    footer .foo-row .foo-col ul li {
        width: 50%;
        margin-bottom: 16px;
    }

    footer .foo-row .foo-col ul li a {
        color: #E3E3E3;
        font-size: 15px;
    }

    footer .foo-row .foo-col ul li a:hover {
        color: var(--color-principal);
        text-decoration: underline;
    }

    .foo-copy {
        background: #000000;
        padding: 40px 0px;
    }

    .foo-copy p {
        text-align: center;
        color: #E3E3E3;
        font-size: 14px;
        font-weight: 300;
    }

    @media screen and (max-width: 1024px) {
        .grid-product {
            grid-template-columns: repeat(3, calc(33.33% - 2rem*2/3));
            column-gap: 2rem;
            row-gap: 2rem;
        }
    }

    .hm-header .icon-menu {
        display: none;
    }

    @media screen and (max-width: 800px) {
        .hm-banner {
            height: 400px;
            min-height: 400px;
        }

        .hm-grid-category,
        .grid-product {
            grid-template-columns: repeat(2, calc(50% - 2rem*1/2));
            column-gap: 2rem;
            row-gap: 2rem;
        }

        .hm-header .hm-menu ul {
            display: none;
        }

        .hm-header .icon-menu {
            display: block;
            margin-left: 20px;
        }

        .hm-header .icon-menu button {
            background: transparent;
            border: none;
            font-size: 22px;
            color: var(--color-negro);
        }

        footer .foo-row {
            flex-direction: column;
        }

        footer .foo-row .foo-col {
            width: 100%;
            margin-left: 0px !important;
            margin-right: 0px !important;
        }

        footer .foo-row .foo-col ul {
            display: none;
        }

        .hm-tabs .hm-tab-link {
            margin: 0px 10px;
            margin-bottom: 10px;
        }

        .header-menu-movil {
            background: var(--color-principal);
            position: fixed;
            display: block;
            padding: 40px;
            top: 0;
            right: 0;
            width: 100%;
            height: 100vh;
            z-index: 1000;
            transition: all .3s ease;
            transform: translate(-100%);
        }

        .header-menu-movil.active {
            transform: translate(0%);
        }

        .header-menu-movil .cerrar-menu {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 45px;
            height: 45px;
            line-height: 45px;
            border-radius: 50%;
            border: none;
            background: #fff;
            font-size: 18px;
            color: var(--color-negro);
        }

        .header-menu-movil ul li {
            position: relative;
            margin: 10px 0px;
        }

        .header-menu-movil ul li a {
            display: inline-block;
            color: #fff;
        }
    }

    @media screen and (max-width: 400px) {
        .hm-banner {
            height: 320px;
            min-height: 320px;
        }

        .hm-grid-category {
            grid-template-columns: repeat(2, calc(50% - 1rem*1/2));
            column-gap: 1rem;
            row-gap: 1rem;
        }

        .grid-product {
            grid-template-columns: repeat(1, 100%);
            column-gap: 1rem;
        }

        .hm-tabs .hm-tab-link {
            margin: 0px 10px;
            margin-bottom: 10px;
        }
    }

    .container5 {
        max-width: 800px;
        margin: 0 auto;
        padding: 2rem;
        display: flex;
        flex-direction: column;
    }

    .abot-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .abot-section:nth-child(2) {
        flex-direction: row-reverse;
    }

    .abot-section div {
        flex: 1;
        padding: 10px;
    }

    .abot-section img {
        max-width: 300px;
        border-radius: 10px;
        margin-left: 2rem;
    }

    .abot-section h1,
    .abot-section p {
        flex: 1;
        text-align: center;
    }

    .abot-section h1 {
        font-size: 1.5rem;
        margin: 0;
        text-align: center;
    }

    .abot-section p {
        font-size: 1.2rem;
        line-height: 1.6;
        margin: 0;
    }

    .colabor {
        flex: 1;
        text-align: center;
    }

    .colabor img {
        border-radius: 50%;
        max-width: 150px;
    }

    @media (max-width: 600px) {
        .abat-section {
            flex-direction: column;
        }
    }

    .team {
        margin: 75px 0;
    }

    .team h1 {
        text-align: center;
        font-weight: bold;
        letter-spacing: 2px;
        color: rgb(8, 71, 42);
        padding-bottom: 10px;
    }

    .team h1::after {
        content: "";
        background: #296e23;
        display: block;
        height: 3px;
        width: 250px;
        margin: 10px auto;
    }

    .profile {
        margin-top: 25px;
    }

    .profile .img-box {
        opacity: 1;
        display: block;
        position: relative;
    }

    .profile h2 {
        font-size: 20px;
        font-weight: bold;
        margin-top: 15px;
    }

    .profile h3 {
        font-size: 15px;
        font-weight: bold;
        margin-top: 15px;
    }

    .img-box::after {
        content: "";
        opacity: 0;
        background-color: rgba(0, 0, 0, 0.6);
        position: absolute;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
    }

    .img-box ul {
        margin: 0;
        padding: 20 px 0;
        position: absolute;
        z-index: 1;
        bottom: 0;
        display: block;
        left: 50%;
        transform: translateX(-50%);
        opacity: 1;
    }

    .img-box li {
        width: 30px;
        height: 30px;
        border: 1px solid #fff;
        border-radius: 100%;
        margin: 3px;
        padding: 7px;
        display: inline-block;
    }

    .team {
        text-align: center;
        align-items: center;
    }

    .datos {
        text-align: center;
    }

    .wrapper2 {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container6 {
        align-items: center;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .contact-form {
        display: flex;
        flex-direction: column;
    }

    .contact-form h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .contact-form label {
        margin-bottom: 5px;
    }

    .contact-form input,
    .contact-form textarea {
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
    }

    .contact-form button {
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
    }

    .contact-form button:hover {
        background-color: #555;
    }
</style>
