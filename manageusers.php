<!DOCTYPE html>

<html>

<head>
    <title>New Tech | Admin | Manage Users</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <div class="col-12 bg-light text-center rounded">
                <label class="form-label fs-2 fw-bold text-dark">Manage All Users</label>
            </div>

            <div class="col-12 bg-light rounded">
                <div class="row">
                    <div class="offset-3 col-6 mb-3">
                        <div class="row">
                            <div class="col-9">
                                <input type="text" class="form-control" id="searchtext" />
                            </div>
                            <div class="col-3">
                                <button class="btn btn-light">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-3 mb-2">
                <div class="row">

                    <div class="col-1">
                    </div>

                    <div class="col-2  bg-light pt-2 pb-2 ">
                        <span class="fw-bold">Profile Image</span>
                    </div>

                    <div class="col-2 bg-secondary pt-2 pb-2 ">
                        <span class="fw-bold text-white">Email</span>
                    </div>

                    <div class="col-2 bg-light pt-2 pb-2">
                        <span class="fw-bold">User Name</span>
                    </div>

                    <div class="col-2 bg-primary pt-2 pb-2 ">
                        <span class=" fw-bold text-white">Mobile</span>
                    </div>

                    <div class="col-2 bg-light pt-2 pb-2 ">
                        <span class="fw-bold">Register Date</span>
                    </div>

                    <div class="col-1 bg-white"></div>

                </div>
            </div>






            <div class="col-12 mb-2">
                <div class="row">



                    <div class="col-1">
                    </div>

                    <div class="col-2  bg-light pt-2 pb-2 ">
                        <span class="fw-bold"></span>
                    </div>

                    <div class="col-2 bg-secondary pt-2 pb-2 ">
                        <span class="fw-bold text-white">@gmail.com</span>
                    </div>

                    <div class="col-2 bg-light pt-2 pb-2">
                        <span class="fw-bold">abc</span>
                    </div>

                    <div class="col-2 bg-primary pt-2 pb-2 ">
                        <span class=" fw-bold text-white">0775869473</span>
                    </div>

                    <div class="col-2 bg-light pt-2 pb-2 ">
                        <span class="fw-bold">2022-07-29 22:01:11</span>
                    </div>

                    <div class="col-1 bg-white"></div>


                    <!-- pagination -->
                    <div class="col-12 text-center fs-5 fw-bold mt-2 offset-4">
                        <div class="pagination">
                            <a href="#">&laquo;</a>
                            <a href="#"class="active">1</a>
                            <a href="#" >2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">6</a>
                            <a href="#">&raquo;</a>

                        </div>
                    </div>
                    <!-- pagination -->
                </div>

            </div>


            <?php require "footer.php"; ?>
        </div>
    </div>

    <script src="script.js"></script>

</body>

</html>