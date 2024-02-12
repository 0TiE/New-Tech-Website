<!DOCTYPE html>

<html>

<head>
    <title>New Tech | Admin panel</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <div class="col-2">
                <div class="row">
                    <div class="align-items-start col-12">
                        <div class="row g-1 text-center">

                            <div class="col-12 mt-5">

                            </div>
                            <div class="nav flex-column nav-pills me-3 mt-3" role="tablist" aria-orientation="vertical">
                                <nav class="nav flex-column">
                                    <a class="nav-link active fs-5" aria-current="page" href="#">Dashboard</a>
                                    <a class="nav-link fs-5" href="manageusers.php">Manage Users</a>
                                    <a class="nav-link fs-5" href="manageproduct.php">Manage Products</a>
                                </nav>
                            </div>


                        </div>
                    </div>

                </div>
            </div>

            <div class="col-10">
                <div class="row">
                    <div class="fw-bold mb-3 text-dark">
                        <h2 class="fw-bold">Dashboard</h2>
                    </div>
                    <div class="col-12">
                        <hr />
                    </div>
                    <div class="col-12">
                        <div class="row g-1">

                            <div class="col-4 px-1">
                                <div class="row g-1">
                                    <div class="col-12 bg-primary text-white text-center rounded" style="height: 100x;">
                                        <br />
                                        <span class="fs-4 fw-bold">Daily Earnings</span>
                                        <br />
                                        <span class="fs-5">Rs..00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class="row g-1">
                                    <div class="col-12 bg-white text-dark text-center rounded" style="height: 100x;">
                                        <br />
                                        <span class="fs-4 fw-bold">Monthly Earnings</span>
                                        <br />
                                        <span class="fs-5">Rs..00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class="row g-1">
                                    <div class="col-12 bg-dark text-white text-center rounded" style="height: 100x;">
                                        <br />
                                        <span class="fs-4 fw-bold">Today Sellings</span>
                                        <br />
                                        <span class="fs-5"> Item</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class="row g-1">
                                    <div class="col-12 bg-secondary text-white text-center rounded" style="height: 100x;">
                                        <br />
                                        <span class="fs-4 fw-bold">Monthly Sellings</span>
                                        <br />
                                        <span class="fs-5"> Item</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class="row g-1">
                                    <div class="col-12 bg-success text-white text-center rounded" style="height: 100x;">
                                        <br />
                                        <span class="fs-4 fw-bold">Total Sellings</span>
                                        <br />
                                        <span class="fs-5"> Items</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class="row g-1">
                                    <div class="col-12 bg-danger text-white text-center rounded" style="height: 100x;">
                                        <br />
                                        <span class="fs-4 fw-bold">Total Engagements</span>
                                        <br />


                                        <span class="fs-5"> Members</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12">
                        <hr />
                    </div>

                    <div class="col-12 bg-secondary">
                        <div class="row">
                            <div class="col-2 text-center mt-3 mb-3">
                                <label class="form-label fs-4 fw-bold text-white">Total Active Time</label>
                            </div>

                            </label>
                        </div>
                    </div>
                </div>

                <div class="offset-1 col-4 mt-3 mb-3 rounded bg-light">
                    <div class="row g-1">

                        <div class="col-12 text-center">
                            <label class="form-label fs-4 fw-bold">Mostly Sold Item</label>
                        </div>



                        <div class="col-12 text-center">
                            <span class="fs-5 fw-bold"></span>
                            <br />
                            <span class="fs-6"> Items</span>
                            <br />
                            <span class="fs-6">Rs..00</span>
                        </div>
                        <div class="col-12">
                            <div class="firstplace"></div>
                        </div>



                    </div>
                </div>

                <div class="offset-1 col-4 mt-3 mb-3 rounded bg-light">
                    <div class="row g-1">

                        <div class="col-12 text-center">
                            <label class="form-label fs-4 fw-bold">Most Famous Seller</label>
                        </div>




                        <div class="col-12 text-center">
                            <span class="fs-5 fw-bold"></span>
                            <br />
                            <span class="fs-6">Most Famous Seller</span>
                            <br />
                            <span class="fs-6">Name</span>
                        </div>


                    </div>
                </div>

            </div>
        </div>

    </div>
    </div>
    <?php require "footer.php"; ?>
    <script src="script.js"></script>
</body>

</html>