

<!DOCTYPE html>
<html>

<head>
    <title>Login | Leave Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-color: #f1f1f1;
        }

        .form-container {
            background-color: #ffffff;
            border: 1px solid #ccc;
            margin-top: 100px;
            padding: 20px;
            border-radius: 5px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-container input[type=text],
        .form-container input[type=password] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 4px;
        }

        .form-container button {
            background-color: #4CAF50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }

        .form-container button:hover {
            background-color: #45a049;
        }

        .form-container a {
            color: dodgerblue;
        }

        .form-container p {
            margin-top: 20px;
        }

        .aa {
  box-shadow: 0 18px 18px rgba(0, 0, 0, 0.2);
}

    </style>
</head>

<body>

    <div class="container">
        <!-- Navigation bar -->
        

        <div class="row justify-content-center ">
            <div class="col-md-4">
                <div class="form-container aa">
                    <h2> Admin Login</h2>
                    <form action="ad_loginconn.php" method="post" class="">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" name="pass" placeholder="Enter password"
                                name="pwd">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

</body>

</html>