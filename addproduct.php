<!DOCTYPE html>

<html>

<head>

    <title>New Tech|Add Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="addproduct.css" />
    <link rel="stylesheet" href="style.css" />

</head>

<body>

    <div class="container-fluid">
        <div class="row gy-3">

            <!-- heading -->
            <div id="addproductbox" class="mt-4">
                <div class="col-12 mb-2">
                    <h2 class="h2 display-5 text-center text-primary fw-bold">Product Listing</h2>
                </div>
                <!-- heading -->
                <div class="col-12">
                    <hr />
                </div>
                <!-- category,brand,nodel -->

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label lbl1">Select Product Category</label>
                                </div>
                                <div class="col-12 mb-3">
                                    <select class="form-select" id="ca">
                                        <option value="0">Select Category</option>


                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label lbl1">Select Product Brand</label>
                                </div>
                                <div class="col-12 mb-3">
                                    <select class="form-select" id="br">
                                        <option value="0">Select Brands</option>


                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label lbl1">Select Product Model</label>
                                </div>
                                <div class="col-12 mb-3">
                                    <select class="form-select" id="mo">
                                        <option value="0">Select Model</option>


                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- category,brand,nodel -->

                <hr />

                <!-- title -->

                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label lbl1">Add a Title to your Product</label>
                        </div>
                        <div class="offset-lg-2 col-12 col-lg-8">
                            <input class="form-control" type="text" id="ti" />
                        </div>
                    </div>
                </div>

                <!-- title -->

                <hr />

                <!-- condition,color,qtv -->

                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-lable lbl1">Select Product Condition</label>
                                </div>
                                <div class="offset-1 col-11 col-lg-3 ms-5 form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="bn" checked>
                                    <label class="form-check-label" for="bn">
                                        Brand New
                                    </label>
                                </div>
                                <div class="offset-1 col-11 col-lg-3 ms-5 form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="us">
                                    <label class="form-check-label" for="us">
                                        Used
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-lable lbl1">Select Product Colour</label>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                            <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr1" checked>
                                            <label class="form-check-label" for="clr1">
                                                Gold
                                            </label>
                                        </div>
                                        <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                            <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr2">
                                            <label class="form-check-label" for="clr2">
                                                Silver
                                            </label>
                                        </div>
                                        <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                            <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr3">
                                            <label class="form-check-label" for="clr3">
                                                Graphite
                                            </label>
                                        </div>
                                        <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                            <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr4">
                                            <label class="form-check-label" for="clr4">
                                                Pasific Blue
                                            </label>
                                        </div>
                                        <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                            <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr5">
                                            <label class="form-check-label" for="clr5">
                                                Jet Black
                                            </label>
                                        </div>
                                        <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                            <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr6">
                                            <label class="form-check-label" for="clr6">
                                                Rose Gold
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-lable lbl1">Add Product Quantity</label>
                                    <input class="form-control" type="number" value="0" min="0" id="qty" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- condition,color,qtv -->

                <hr class="hrbreak1" />

                <!-- cost,payment method -->

                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label lbl1">Cost per Item</label>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Rs.</span>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="cost">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label lbl1">Approved Payment Methods</label>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="offset-2 col-2 pm1"></div>
                                        <div class="col-2 pm2"></div>
                                        <div class="col-2 pm3"></div>
                                        <div class="col-2 pm4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- cost,payment method -->

                <hr class="hrbreak1" />

                <!-- delivery cost -->

                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label lbl1">Delivery Cost</label>
                        </div>
                        <div class="offset-lg-1 col-12 col-lg-3 mt-lg-3">
                            <label class="form-label">Delivery Cost Within Colombo</label>
                        </div>
                        <div class="col-12 col-lg-7 mt-lg-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Rs.</span>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="dwc">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label lbl1"></label>
                        </div>
                        <div class="offset-lg-1 col-12 col-lg-3 mt-lg-3">
                            <label class="form-label">Delivery Cost Out of Colombo</label>
                        </div>
                        <div class="col-12 col-lg-7 mt-lg-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Rs.</span>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="doc">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- delivery cost -->

                <hr class="hrbreak1" />

                <!-- description -->

                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label lbl1">Product Description</label>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" cols="100" rows="30" style="background-color: ghostwhite;" id="desc"></textarea>
                        </div>
                    </div>
                </div>

                <!-- description -->

                <!-- product img -->

                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label lbl1">Add Product Image</label>
                        </div>
                        <div class="col-12">
                            <div class="row">

                                <div class="col-6 col-md-4">
                                    <img class="col-12 col-lg-6 ms-2 img-thumbnail" id="prev" src="resources/addproductimg.svg" />
                                    <div class="col-12 mb-3">
                                        <div class="row">
                                            <div class="col-12 col-lg-12 mt-2">
                                                <div class="row">
                                                    <div class="col-12 col-lg-10">
                                                        <input class="d-none" type="file" accept="img/*" id="imguploader" />
                                                        <label class="btn btn-primary col-12 col-lg-8" for="imguploader" onclick="changeImage();">Upload</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <img class="col-12 col-lg-6 ms-2 img-thumbnail" id="prev2" src="resources/addproductimg.svg" />
                                    <div class="col-12 mb-3">
                                        <div class="row">
                                            <div class="col-12 col-lg-10 mt-2">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <input class="d-none" type="file" accept="img/*" id="imguploader2" />
                                                        <label class="btn btn-primary col-12 col-lg-8" for="imguploader2" onclick="changeImage2();">Upload</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <img class="col-12 col-lg-6 ms-2 img-thumbnail" id="prev3" src="resources/addproductimg.svg" />
                                    <div class="col-12 mb-3">
                                        <div class="row">
                                            <div class="col-12 col-lg-12 mt-2">
                                                <div class="row">
                                                    <div class="col-12 col-lg-10">
                                                        <input class="d-none" type="file" accept="img/*" id="imguploader3" />
                                                        <label class="btn btn-primary col-12 col-lg-8" for="imguploader3" onclick="changeImage3();">Upload</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- product img -->

                <hr class="hrbreak1" />

                <!-- notice -->

                <div class="col-12">
                    <label class="form-label lbl1">Notice...</label>
                    <br />
                    <label class="form-label">We are taking 5% of the product price from every product as a service charge</label>
                </div>

                <!-- notice -->

                <!-- save btn -->
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="offset-0 col-12 col-lg-4 d-grid">
                            <button class="btn btn-success searchbtn" onclick="addProduct();">Add Product</button>
                        </div>
                        <div class="col-12 col-lg-4 mt-2 mt-lg-0 d-grid">
                            <button class="btn btn-dark searchbtn" onclick="changeproductview();">Update Product</button>
                        </div>
                    </div>
                </div>
                <!-- save btn -->
                <!-- ////////////////////////////////////////////////////////////////////////////// -->
            </div>






            <hr class="hrbreak1" />

            <!-- title -->

            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <label class="form-label lbl1">Add a Title to your Product</label>
                    </div>
                    <div class="offset-lg-2 col-12 col-lg-8">
                        <input class="form-control" type="text" id="ti" />
                    </div>
                </div>
            </div>

            <!-- title -->

            <hr class="hrbreak1" />

            <!-- condition,color,qtv -->

            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <label class="form-lable lbl1">Select Product Condition</label>
                            </div>
                            <div class="offset-1 col-11 col-lg-3 ms-5 form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="bn" checked>
                                <label class="form-check-label" for="bn">
                                    Brand New
                                </label>
                            </div>
                            <div class="offset-1 col-11 col-lg-3 ms-5 form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="us">
                                <label class="form-check-label" for="us">
                                    Used
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <label class="form-lable lbl1">Select Product Colour</label>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                        <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr1" checked>
                                        <label class="form-check-label" for="clr1">
                                            Gold
                                        </label>
                                    </div>
                                    <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                        <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr2">
                                        <label class="form-check-label" for="clr2">
                                            Silver
                                        </label>
                                    </div>
                                    <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                        <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr3">
                                        <label class="form-check-label" for="clr3">
                                            Graphite
                                        </label>
                                    </div>
                                    <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                        <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr4">
                                        <label class="form-check-label" for="clr4">
                                            Pasific Blue
                                        </label>
                                    </div>
                                    <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                        <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr5">
                                        <label class="form-check-label" for="clr5">
                                            Jet Black
                                        </label>
                                    </div>
                                    <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                        <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr6">
                                        <label class="form-check-label" for="clr6">
                                            Rose Gold
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <label class="form-lable lbl1">Add Product Quantity</label>
                                <input class="form-control" type="number" value="0" min="0" id="qty" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- condition,color,qtv -->

            <hr class="hrbreak1" />

            <!-- cost,payment method -->

            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <label class="form-label lbl1">Cost per Item</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Rs.</span>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="cost">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <label class="form-label lbl1">Approved Payment Methods</label>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="offset-2 col-2 pm1"></div>
                                    <div class="col-2 pm2"></div>
                                    <div class="col-2 pm3"></div>
                                    <div class="col-2 pm4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- cost,payment method -->

            <hr class="hrbreak1" />

            <!-- delivery cost -->

            <div class="col-12 col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <label class="form-label lbl1">Delivery Cost</label>
                    </div>
                    <div class="offset-lg-1 col-12 col-lg-3 mt-lg-3">
                        <label class="form-label">Delivery Cost Within Colombo</label>
                    </div>
                    <div class="col-12 col-lg-7 mt-lg-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rs.</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="dwc">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <label class="form-label lbl1"></label>
                    </div>
                    <div class="offset-lg-1 col-12 col-lg-3 mt-lg-3">
                        <label class="form-label">Delivery Cost Out of Colombo</label>
                    </div>
                    <div class="col-12 col-lg-7 mt-lg-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rs.</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="doc">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- delivery cost -->

            <hr class="hrbreak1" />

            <!-- description -->

            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <label class="form-label lbl1">Product Description</label>
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" cols="100" rows="30" style="background-color: ghostwhite;" id="desc"></textarea>
                    </div>
                </div>
            </div>

            <!-- description -->

            <!-- product img -->

            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <label class="form-label lbl1">Add Product Image</label>
                    </div>
                    <img class="col-4 col-lg-2 ms-2 img-thumbnail" id="prev" src="resources/addproductimg.svg" />
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-12 col-lg-6 mt-2">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input class="d-none" type="file" accept="img/*" id="imguploader" />
                                        <label class="btn btn-primary col-4 col-lg-8" for="imguploader">Uploaddd</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- product img -->

            <hr class="hrbreak1" />

            <!-- notice -->

            <div class="col-12">
                <label class="form-label lbl1">Notice...</label>
                <br />
                <label class="form-label">We are taking 5% of the product price from every product as a service charge</label>
            </div>

            <!-- notice -->

            <!-- save btn -->
            <div class="col-12 mb-3">
                <div class="row">
                    <div class="offset-0 offset-lg-4 col-12 col-lg-4 d-grid">
                        <button class="btn btn-success searchbtn">Update Product</button>
                    </div>
                    <div class="col-12 col-lg-4 mt-2 mt-lg-0 d-grid">
                        <button class="btn btn-dark searchbtn">Add Product</button>
                    </div>
                </div>
            </div>
            <!-- save btn -->
        </div>



    </div>


    <!-- footer -->
    <?php
    require "footer.php";
    ?>
    <!-- footer -->

    <script src="bootstrap.bundle.js"></script>
</body>

</html>