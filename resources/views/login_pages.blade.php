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
    
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    
    <title>Login</title>
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
            background-color: #0B2447;
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
    
    <div class="page-wrapper" id="wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            
            <div class="d-flex align-items-center justify-content-center w-100">
                
                <div class="row d-flex justify-content-center w-100">
                    
                    <div class="col-md-8 col-lg-6 col-xxl-4">
                        @include('layout/alert')
                        <div class="card mb-0 px-auto rounded-5" style="padding: 0px 80px 0px 80px;">
                            <div class="card-body">
                                
                                <div class="sidebar-heading text-center py-4 fs-5 fw-bold text-uppercase">
                                    <div class="col">
                                        <i class="fa-sharp fa-solid fa-shield-halved fa-2xl">
                                        </i>
                                    </div>
                                    <div class="col">
                
                                    
                                        Home-Secure
                                    </div>
                                </div>
                                <form action="/login/cctv" method="POST">
                                @csrf
                                    <div class="mb-3 input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
                                        <input type="text" name="username" class="form-control " placeholder="Username"
                                            aria-label="Username" aria-describedby="addon-wrapping" >
                                    </div>
                                    <div class="mb-3 input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-lock"></i></span>
                                        <input type="password" name="password" class="form-control" placeholder="Password"
                                            aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                
                                    
                                    <button name="submit" class="btn btn-primary w-100 py-8 fs-4 mb-3 rounded-2" type="submit" style="background-color:#0B2447;">Sign
                                        In</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">Don't have account?</p>
                                        
                                    </div>
                                    <a href="/register" class="btn btn-primary w-100 py-8 fs-4 mt-3 rounded-2" style="background-color:#0B2447;">Sign
                                        Up</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
