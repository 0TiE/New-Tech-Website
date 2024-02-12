<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
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
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                My Shop
                                            </a>
                                            <ul class="dropdown-menu ">
                                            <li><a class="dropdown-item" href="#">My Products</a></li>
                                                <li><a class="dropdown-item" href="watchlist.php">Watchlist</a></li>
                                                <li><a class="dropdown-item" href="purchasedhistory.php">Purchase History</a></li>
                                                <li><a class="dropdown-item" href="cart.php">Cart</a></li>
                                                <li><a class="dropdown-item" href="#">#</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                </div>

                        </nav>

                    </div>

                    <div class="col-4">
                        <input class="form-control" placeholder="Search.." />
                    </div>
                    <div class="col-1">
                        <button class="btn btn-light" href="advancesearch.php"><a href="advancesearch.php" class="text-decoration-none text-dark">Advance</a></button>
                    </div>
                    <div class="col-3 text-end">
                        <i class="bi bi-bookmark-fill L1" style="font-size: 22px;"></i>
                        <a href="cart.php" class="text-dark"><i class="bi bi-cart-fill L1 " style="font-size: 22px;"></i></a>
                        <span class="L1 "><b>Rs.0.00</b></span>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>