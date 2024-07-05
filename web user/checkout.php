<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Sitahu</title>
    <!-- Include CSS links, Bootstrap, or any other stylesheets -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row w-100">
                <div class="col-lg-12 col-md-12 col-12">
                    <h3 class="display-5 mb-2 text-center">Shopping Cart</h3>
                    <p class="mb-5 text-center">
                        <i class="text-info font-weight-bold">3</i> items in your cart
                    </p>
                    <table id="shoppingCart" class="table table-condensed table-responsive">
                        <thead>
                            <tr>
                                <th style="width:60%">Product</th>
                                <th style="width:12%">Price</th>
                                <th style="width:10%">Quantity</th>
                                <th style="width:16%">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-md-3 text-left">
                                            <img src="img/walik3.jpg" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                        </div>
                                        <div class="col-md-9 text-left mt-sm-2">
                                            <h4>Tahu Walik</h4>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">Rp. 1.000</td>
                                <td data-th="Quantity">
                                    <input type="number" class="form-control form-control-lg text-center quantity-input" value="1" onchange="calculateTotal(this)">
                                </td>
                                <td data-th="Total" class="subtotal">Rp. 1.000</td>
                            </tr>
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-md-3 text-left">
                                            <img src="img/p1.jpeg" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                        </div>
                                        <div class="col-md-9 text-left mt-sm-2">
                                            <h4>Tahu Putih</h4>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">Rp 2.500</td>
                                <td data-th="Quantity">
                                    <input type="number" class="form-control form-control-lg text-center quantity-input" value="1" onchange="calculateTotal(this)">
                                </td>
                                <td data-th="Total" class="subtotal">Rp 2.500</td>
                            </tr>
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-md-3 text-left">
                                            <img src="img/aci.jpg" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                        </div>
                                        <div class="col-md-9 text-left mt-sm-2">
                                            <h4>Tahu Aci</h4>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">Rp. 3.500</td>
                                <td data-th="Quantity">
                                    <input type="number" class="form-control form-control-lg text-center quantity-input" value="1" onchange="calculateTotal(this)">
                                </td>
                                <td data-th="Total" class="subtotal">Rp. 3.500</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="float-right text-right">
                        <h4>Subtotal:</h4>
                        <h1 id="cartSubtotal">Rp. 7.000</h1>
                    </div>
                </div>
            </div>
            <div class="row mt-4 d-flex align-items-center">
                <div class="col-sm-6 order-md-2 text-right">
                    <a href="checkout_fnl.php" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Checkout</a>
                </div>
                <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
                    <a href="index.html">
                        <i class="fas fa-arrow-left mr-2"></i> Continue Shopping</a>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function calculateTotal(input) {
            var price = parseFloat(input.parentNode.previousElementSibling.textContent.replace('Rp.', '').replace('.', '').trim());
            var qty = parseInt(input.value);
            var subtotal = price * qty;
            input.parentNode.nextElementSibling.textContent = 'Rp. ' + subtotal.toLocaleString();
            updateCartSubtotal();
        }

        function updateCartSubtotal() {
            var subtotalElements = document.querySelectorAll('.subtotal');
            var subtotal = 0;
            subtotalElements.forEach(function(element) {
                subtotal += parseFloat(element.textContent.replace('Rp.', '').replace('.', '').trim());
            });
            document.getElementById('cartSubtotal').textContent = 'Rp. ' + subtotal.toLocaleString();
        }
    </script>
</body>

</html>