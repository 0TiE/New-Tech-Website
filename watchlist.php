<!DOCTYPE html>
<html>

<head>
    <title>New Tech | Watchlist</title>


    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</head>

<body>
    <div class="container-fluid">
        <?php require "header.php" ?>
        <div class="row mt-1 mb-1">
            <div class="col-12 text text-center fw-bold">

                <p class="fs-2"> Watch List</p>
            </div>
            <div class="col-1"></div>
            <div class="col-10">
                <table class="table">
                    <thead>
                        <tr class="border border-1 border-white">
                            <th></th>

                            <th>Prduct Name</th>
                            <th class="text-end">Unit Price</th>
                            <th class="text-end">Stock Status</th>
                            <th class="text-end">Actions</i></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height: 72px;">

                            <td>
                                <div class="card mt-2 mb-2 align-content-center" style="width: 9rem;">
                                    <img src="images/concept-electrician-electrical-tools-top-view.jpg" class="card-card-img-top" alt="...">
                                </div>
                            </td>
                            <td class="text-dark fw-5 fs-4">______</td>
                            <td class="fs-6 text-end pt-3 bg-secondary text-white ">Rs. 100000 .00</td>
                            <td class="text-end pt-3">In Stock</td>
                            <td class="text-end pt-3"><button class="btn btn-dark" style="background-color: purple;">ADD TO CART</button></td>
                            <td class="text-end pt-3"><button class="btn btn-danger">Remove</button></td>
                        </tr>
                        </tr>
                        <tr style="height: 72px;">

                            <td>
                                <div class="card mt-2 mb-2 align-content-center" style="width: 9rem;">
                                    <img src="images/concept-electrician-electrical-tools-top-view (1).jpg" class="card-card-img-top" alt="...">
                                </div>
                            </td>
                            <td class="text-dark fw-5 fs-4">______</td>
                            <td class="fs-6 text-end pt-3 bg-secondary text-white ">Rs. 250000 .00</td>
                            <td class="text-end pt-3">In Stock</td>
                            <td class="text-end pt-3"><button class="btn btn-dark" style="background-color: purple;">ADD TO CART</button></td>
                            <td class="text-end pt-3"><button class="btn btn-danger">Remove</button></td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <?php require "footer.php" ?>
    <script src="script.js"></script>
</body>
<script src="script.js"></script>

</html>