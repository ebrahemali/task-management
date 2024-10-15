<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Pichforest" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <title>Task Mangment</title>

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>


<body>
    <div id="app">
        <div class="authentication-bg min-vh-100">
            <div class="bg-overlay bg-light"></div>
            <div class="container">


                <main class="py-4">
                    @yield('content')
                </main>

           
        </div>
    </div>
    </div><!-- end col -->



    <!-- Bootstrap JS -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Metismenu Js -->
    <script src="assets/libs/metismenujs/metismenujs.min.js"></script>

    <!-- Simplebar Js -->
    <script src="assets/libs/simplebar/simplebar.min.js"></script>

    <!-- Feather Js -->
    <script src="assets/libs/feather-icons/feather.min.js"></script>


    <script src="assets/js/pages/pass-add.init.js"></script>
</body>

</html>