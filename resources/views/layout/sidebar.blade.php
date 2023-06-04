<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="gaya.css?v=<?php echo time(); ?>"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">


    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link href="{{ asset('vendors/styles/core.css.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/styles/icon-font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/styles/style.css') }}" rel="stylesheet">
    <title>Document</title>
    <style>
        :root {
            --main-bg-color: #19376D;
            --main-text-color: #0B2447;
            --second-text-color: #576CBC;
            --second-bg-color: #8A9AD6;
        }

        .primary-text {
            color: var(--main-text-color);
        }

        .putih {
            color: white;
        }

        .secondsecond {
            color: white;
        }

        .second-text {
            color: var(--second-text-color);
        }

        .primary-bg {
            color: var(--main-bg-color);
        }

        .secondary-bg {
            color: var(--second-bg-color);
        }

        .rounded-full {
            border-radius: 100%;
        }

        #wrapper {
            overflow-x: hidden;
            background-color: var(--second-bg-color);
        }

        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            transition: margin 0.70s ease-out;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
        }

        #sidebar-wrapper .list-group {
            width: 15rem;
        }

        #page-content-wrapper {
            min-width: 100vw;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
        }

        #toggleMenu {
            cursor: pointer;
        }

        .bg-darkes {
            background-color: #0B2447;
        }

        .list-group-item {
            border: none;
            padding: 20px 30px;
        }

        .list-group-item .active {
            background-color: #b7c4d8;
            color: var(--main-text-color);
            font-weight: bold;
            border: none;
        }

        .activated {
            background-color: #8A9AD6;
        }

        .list-group-item-dark {
            background-color: #0B2447;
        }

        @media (min-width:768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }

            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }

            #wrapper.toggled #sidebar-wrapper {
                margin-left: -15rem;
            }
        }
    </style>
</head>

<body>
    
        <div class="bg-darkes" id="sidebar-wrapper">
            <div class="container">
                <div class="row">
                    <div class="sidebar-heading text-center py-4 putih fs-5 fw-bold text-uppercase">
                        <div class="col">
                            <i class="fa-sharp fa-solid fa-shield-halved">
                            </i>
                        </div>
                        <div class="col">
                            Home-Secure
                        </div>
                    </div>
                </div>
            </div>

            <div class="list-group list-group-flush my-0">
                <a href="/cctv"
                    class="list-group-item list-group-item-action bg-transparant secondsecond fw-bold {{ ($title === "Monitoring CCTV") ? 'activated' : 'list-group-item-dark' }} ">
                    <i class="fa-sharp fa-solid fa-camera"></i> Monitoring CCTV
                </a>
                <a href="/portal"
                    class="list-group-item list-group-item-action bg-transparant secondsecond fw-bold {{ ($title === "Portal Otomatis") ? 'activated' : 'list-group-item-dark' }}">
                    <i class="fa-sharp fa-solid fa-door-open"></i> Portal Otomatis
                </a>
                <a href="/forum"
                    class="list-group-item list-group-item-action bg-transparant secondsecond fw-bold {{ ($title === "Forum Publik") ? 'activated' : 'list-group-item-dark' }}">
                    <i class="fa-sharp fa-solid fa-comments"></i> Forum Publik
                </a>
                <a href="/callcenter"
                    class="list-group-item list-group-item-action bg-transparant secondsecond fw-bold {{ ($title === "call center") ? 'activated' : 'list-group-item-dark' }}">
                    <i class="fa-solid fa-square-phone-flip"></i> Call Center
                </a>
                <a href="/login"
                    class="list-group-item list-group-item-action secondsecond fw-bold list-group-item-dark">
                    <i class="fa-solid fa-right-from-bracket"></i> Log Out
                </a>
            </div>
        </div>
       
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper")
        var toggleButton = document.getElementById("toggleMenu")

        toggleButton.onclick = function() {
            el.classList.toggle("toggled")
        }
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</body>

</html>
