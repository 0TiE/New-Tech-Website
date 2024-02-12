<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body class="x">
    <div class="container-fluid">

        <div class="row pb-2 pt-2 bg-light">
            <div class="col-2">

            </div>
            <div class="col-5  text-end fw-bold">
                <p class="fs-3"> N E W T E C H </p>
            </div>
            <div class="col-5 text-end fw-bold">
                <button class="btn btn-warning" onclick="login();">Login Now</button>
                OR
                <button class="btn btn-dark" onclick="register();">Register now</button>
            </div>


            <div class="col-12">

                <div class="row pb-3 pt-3 bg-white">
                    <div class="col-4 ">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-info" style="border-radius:50px ;">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">Shop</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Categories
                                            </a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="#">All Categories</a></li>
                                                <li><a class="dropdown-item" href="#">Batteries</a></li>
                                                <li><a class="dropdown-item" href="#">Transformeres</a></li>
                                                <li><a class="dropdown-item" href="#">Fuse</a></li>
                                                <li><a class="dropdown-item" href="#">Relays</a></li>
                                                <li><a class="dropdown-item" href="#">Switches</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </nav>
                    </div>

                    <div class="col-4">
                        <input class="form-control" placeholder="Search.." />
                    </div>
                    <div class="col-1">
                        <button class="btn btn-light" href="advancesearch.php">Search</button>
                    </div>
                    <div class="col-3 text-end">
                        <i class="bi bi-bookmark-fill L1" style="font-size: 22px;"></i>
                        <a href="cart.php" class="text-dark"><i class="bi bi-cart-fill L1 " style="font-size: 22px;"></i></a>
                        <span class="L1 "><b>Rs.0.00</b></span>

                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-5">
            <nav>
                <ol class="d-flex flex-wrap mb-0 list-unstyled bg-white rounded ">
                    <li class="breadcrumb-item ">
                        <a href="Home.php" class="text-decoration-none text-dark">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#" class="text-decoration-none text-black-50 fw-bold">Cart</a>
                    </li>
                </ol>
            </nav>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr class="border border-1 border-white">
                            <th>Product Name & Deatils</th>
                            <th>Price</th>

                            <th class="text-end">Quantity</th>
                            <th class="text-end">Total</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height: 72px;">
                            <td class=" text-dark ">
                                <div class="card mt-2 mb-2 align-content-center" style="width: 9rem;">
                                    <img src="images/concept-electrician-electrical-tools-top-view.jpg" class="card-card-img-top" alt="...">

                                </div>
                                <span class="fw-bold p-3 ">product name</span><br />
                                <span class="fw-bold p-3 ">Details</span><br />
                            </td>
                            <td>
                                <span class="fw-bold p-3 ">Rs.X00000.00</span><br />

                            </td>
                            <td class="fs-6 text-end  bg-info pt-3">01</td>
                            <td class="fs-6 text-end pt-3 bg-secondary text-white ">Rs. X00000 .00</td>

                            <td class="fs-6 text-center  border-dark pt-3 fs-5 fw-bolder text-danger"><button class="btn btn-danger"> X Remove</button></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr style="height: 72px;">
                            <td class=" text-dark ">
                                <div class="card mt-2 mb-2 align-content-center" style="width: 9rem;">
                                    <img src="images/concept-electrician-electrical-tools-top-view (1).jpg" class="card-card-img-top" alt="...">

                                </div>
                                <span class="fw-bold p-3 ">product name</span><br />
                                <span class="fw-bold p-3 ">Details</span><br />
                            </td>
                            <td>
                                <span class="fw-bold p-3 ">Rs.X00000.00</span><br />

                            </td>
                            <td class="fs-6 text-end  bg-info pt-3">01</td>
                            <td class="fs-6 text-end pt-3 bg-secondary text-white ">Rs. X00000 .00</td>

                            <td class="fs-6 text-center   border-0  pt-3 fs-5 fw-bolder text-danger"><button class="btn btn-danger"> X Remove</button></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="border-0"></td>
                            <td class="fs-5 text-end">Net Total</td>
                            <td class="text-end">Rs. X0000 .00</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="border-0"></td>
                            <td class="fs-5 text-end border-dark">Discount</td>
                            <td class="text-end border-dark">Rs. 00 .00</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="border-0"></td>
                            <td class="fs-5 text-end border-secondary text-secondary fw-bold">Total Price</td>
                            <td class="text-end border-secondary text-secondary fs-5 fw-bold ">Rs. X0000 .00</td>
                        </tr>
                    </tfoot>
                </table>

                <div class="col-12  g-5 text-end">
                        <button class="btn btn-warning"><i class="bi bi-cart-fill L1 " style="font-size: 22px;"></i> Back to Shopping</button>
                        
                        <button class="btn btn-success">CheckOut</button>
                    </div>
            </div>

        </div>

    </div>
    <?php require "footer.php" ?> </php>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>