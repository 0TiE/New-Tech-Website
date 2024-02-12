<!DOCTYPE html>
<html>

<head>
    <title>New Tech | index</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />


    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <div class="container-fluid vh-100 d-flex justify-content-center">
        <div class="row align-content-center">

            <!-- Login -->
            <div class=" col-12">
                <div class="col-6  index">
                    <h2 class="text-decoration-underline">Login</h2>
                    <br />
                    <div class="col-6">
                        <label class="form-label">email</label>
                        <input class="form-control " type="email" />
                    </div>
                    <div class="col-6">
                        <label class="form-label">password</label>
                        <input class="form-control " type="password" />
                    </div>
                    <div class="col-6 ">
                        <br />
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" value="1" />
                            <label class="form-check-lable">Remember Me</label>
                        </div>
                        <br />
                        <div> <a href="" class="text-info">Forgot Password ?</a></div>
                    </div>
                    <br />
                    <div class="col-12 col-lg-6 d-grid">
                        <button class="btn btn-warning">Login Now</button>
                        <br />
                        <button class="btn btn-dark" onclick="register();">Register now</button>
                    </div>
                </div>
            </div>
            <div class="col-12  fixed-bottom">
                <p class="text-center">&copy; 2021 NewTech.lk All Rights Reserved</p>
            </div>
            <!-- Login -->

        </div>
    </div>
    <script src="Script.js"></script>
</body>

</html>