<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FLogistics Company</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Free HTML Templates">
    <meta name="description" content="Free HTML Templates">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Topbar Start -->
    @include('components.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('components.navbar')
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-primary mb-4">Safe & Faster</h1>
            <h1 class="text-white display-3 mb-5">Logistics Services</h1>
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Tracking Id">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-3">Track & Trace</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header End -->


    <!-- About Start -->
    @include('components.about')
    <!-- About End -->


    <!--  Quote Request Start -->
    @include('components.quote')
    <!-- Quote Request End -->





    <!-- Features Start -->
    @include('components.feature')
    <!-- Features End -->


    <!-- Pricing Plan Start -->
    @include('components.price')
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    @include('components.team')
    <!-- Team End -->


    <!-- Testimonial Start -->
    @include('components.testimonial')
    <!-- Testimonial End -->


    <!-- Blog Start -->
    @include('components.blog')
    <!-- Blog End -->


    <!-- Footer Start -->
    @include('components.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    @include('components.backtotop')


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
