<?php
  // Include header
  include('../hlavicka/header.php');
?>

<?php

// Function to calculate the subtotal based on the items in the shopping cart
function calculateSubtotal() {
    $subtotal = 0;

    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        // Loop through the items in the cart and calculate the subtotal
        foreach ($_SESSION['cart'] as $product_id => $quantity) {
            // Here, you can retrieve the product price based on the product ID
            // and multiply it by the quantity to calculate the subtotal
            $product_price = getProductPrice($product_id);
            $subtotal += $product_price * $quantity;
        }
    }

    return $subtotal;
}

// Function to retrieve the product price based on the product ID
function getProductPrice($product_id) {
    // Replace this with your own logic to fetch the product price from the database or any other source
    // For demonstration purposes, let's assume we have a fixed price of $10 for all products
    return 10;
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: transparent;
        }

        .container {
            display: flex;
            background-color: transparent;
            padding: 200px;
        }

        .cart-container {
            flex-basis: 70%;
            background-color: #6c757d;
            padding: 20px;
            margin-right: 20px;
        }

        .checkout-container {
            flex-basis: 30%;
            background-color: #6c757d;
            padding: 20px;
        }

        .cart-container table {
            width: 100%;
            border-collapse: collapse;
            background-color: #f2f2f2;
        }

        .cart-container th,
        .cart-container td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        .cart-container th {
            text-align: left;
        }

        .actions {
            text-align: center;
        }

        .actions a {
            color: red;
            text-decoration: none;
        }

        .checkout {
            text-align: right;
            margin-top: 20px;
        }

        .checkout button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #6c757d;
            color: white;
            border: none;
            cursor: pointer;
        }

        .checkout button:hover {
            background-color: #495057;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="cart-container">
            <h1>Shopping Cart</h1>
            <?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach($_SESSION['cart'] as $product_id => $quantity): ?>
                        <tr>
                            <td>Product ID: <?php echo $product_id; ?></td>
                            <td><?php echo $quantity; ?></td>
                            <td class="actions">
                                <a href="?remove=<?php echo $product_id; ?>">Remove</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <p><a href="?clear=true">Clear Cart</a></p>
            <?php else: ?>
                <p>Your shopping cart is empty.</p>
            <?php endif; ?>
        </div>
        <div class="checkout-container">
            <p>Subtotal: $<?php echo calculateSubtotal(); ?></p>
            <div class="checkout">
                <button type="button" onclick="checkout()">Checkout</button>
            </div>
        </div>
    </div>

    <script>
        function checkout() {
            // Perform the checkout process
            // You can add your own logic here, such as redirecting to a payment gateway
            alert("Checkout initiated. Redirecting to the payment gateway...");
        }
    </script>
</body>