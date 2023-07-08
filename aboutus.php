<?php $current_page = basename($_SERVER['PHP_SELF']);
include 'm_nav.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About Us - Employee Time-Off System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
        .img {
            height: 7%;
            width: 20%;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <div class="container">

        <!-- About Us Section -->
        <section id="about-us" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-uppercase mb-4">About Us</h2>
                        <p class="lead mb-5">Employee Time-Off System is a web-based application that allows employees
                            to
                            request time off and managers to approve or reject those requests. Our system provides an
                            easy
                            and efficient way for employees to manage their time off requests and for managers to keep
                            track
                            of employee absences.</p>
                        <p class="mb-0">We are committed to providing our clients with the best possible service and
                            support. Our team is made up of experienced professionals who are dedicated to delivering
                            high-quality solutions to our clients.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="group.jpg" alt="About Us Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section id="team" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-uppercase mb-5 text-center">Our Team</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img class="card-img-top" src="annu.jpeg" alt="Team Member">
                            <div class="card-body">
                                <h5 class="card-title">Anurag Singh</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img class="card-img-top" src="https://via.placeholder.com/350x350" alt="Team Member">
                            <div class="card-body">
                                <h5 class="card-title">ShiShir Pathak</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img class="card-img-top" src="vipul1.jpeg" style="height: 340px;"  alt="Team Member">
                            <div class="card-body">
                                <h5 class="card-title">Vipul Kumar</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <footer class="bg-light py-3">
            <div class="container text-center">
                <p>&copy; 2023 Employee Time-Off System. All Rights Reserved.</p>
            </div>
        </footer>
    </div>
    <!-- End Footer -->

    <!-- Include jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>