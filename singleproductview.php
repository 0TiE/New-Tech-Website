<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>New Tech | Single Product View</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" />

</head>

<body class="x">
    <div class="container-fluid ">
        
        <div class="row mb-4">
            <?php require "header.php" ?>
            <div class="col-12 offset-1 ">
                <div class="row mt-3 mb-3 ">
                    <div class="col-12">
                        <div class="row mb-5 ">
                            <nav>
                                <ol class="d-flex flex-wrap mb-0 list-unstyled bg-white rounded ">
                                    <li class="breadcrumb-item ">
                                        <a href="Home.php" class="text-decoration-none text-dark">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#" class="text-decoration-none text-black-50 fw-bold">Single Product View</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                    <div class="col-4 order-1 ">
                        <div class="align-items-center border border-1 border-secondary">
                            <div style="background-image: url('images/empty.svg'); background-repeat: no-repeat; background-size:contain; height:450px; ">
                            </div>
                        </div>
                    </div>
                    <div class="col-2 order-2 ">
                        <ul>
                            <li class="d-flex flex-column justify-content-center align-items-center border border-1 border-secondary mb-1">
                                <img src="images/empty.svg" height="138px" class="mt-1 mb-1" />
                            </li>
                            <li class="d-flex flex-column justify-content-center align-items-center border border-1 border-secondary mb-1">
                                <img src="images/empty.svg" height="138px" class="mt-1 mb-1" />
                            </li>
                            <li class="d-flex flex-column justify-content-center align-items-center border border-1 border-secondary mb-1">
                                <img src="images/empty.svg" height="138px" class="mt-1 mb-1" />
                            </li>
                        </ul>
                    </div>


                    <div class="col-4 order-3 ">
                        <div class="row offset-1">
                            <div class="col-12">
                                <label class="form-lable fs-3 fw-bold mt-0">Product name</label>
                                <br />
                                <label class="form-lable fs-4  fw-bold text-danger mt-0">Price</label>
                            </div>

                            <div class="col-12">
                                <div class="row mt-5">
                                    <div class="col-2  d-grid">
                                        <select>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="col-4  d-grid">
                                        <label>Qty</label>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mt-5 g-2">
                                    <div class="col-6  d-grid">
                                        <button class="btn btn-secondary" style="background-color:rebeccapurple;">Add To Cart</button>
                                    </div>
                                    <div class="col-6  d-grid">
                                        <button class="btn btn-success">Buy Now</button>
                                    </div>
                                    <div class="col-6 d-grid offset-3">
                                        <button class="btn btn-secondary" style="background-color:brown;">Add To Watchlist</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  mt-5 g-2">
                    <div class="col-2 text-info">Prodct details</div>
                    <div class="col-2">Specification</div>
                    <div class="col-2">Delivery info</div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 d-inline-block">
                        <label class="fw-bold fs-4 mt-1">Product name</label><br />
                        <label class="fw-bold fs-6 mt-1 text-info">(For More Infomation Please Contact)</label>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <?php require "footer.php" ?>

    <script src="script.js"></script>
</body>

</html>