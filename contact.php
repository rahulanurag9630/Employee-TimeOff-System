
<?php include 'm_nav.php'  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us | Employee Time Off System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>
<body>
    

    <div class="container my-5">
        <h1 class="text-center mb-5">Contact Us</h1>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow mb-5">
                    <div class="card-body">
                        <form action="contactconn.php" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                    else.</small>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-3">
                    <img class="card-img-top" src="https://via.placeholder.com/300x200" alt="Developer 1">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">Lorem
                        ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.</p>
<p class="card-text">Phone: 555-555-5555</p>
<p class="card-text">Email: john.doe@example.com</p>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="card mb-3">
<img class="card-img-top" src="https://via.placeholder.com/300x200" alt="Developer 2">
<div class="card-body">
<h5 class="card-title">Jane Smith</h5>
<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.</p>
<p class="card-text">Phone: 555-555-5555</p>
<p class="card-text">Email: jane.smith@example.com</p>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="card mb-3">
<img class="card-img-top" src="https://via.placeholder.com/300x200" alt="Developer 3">
<div class="card-body">
<h5 class="card-title">Tom Brown</h5>
<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.</p>
<p class="card-text">Phone: 555-555-5555</p>
<p class="card-text">Email: tom.brown@example.com</p>
</div>
</div>
</div>
</div>
</div>
</body>
</html>