<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="header.css">
    <title>Shopping Cart</title>
</head>

<body>
    <div class="container">
        <h2>Shopping Cart</h2>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example product -->
                <tr>
                    <td>Product 1</td>
                    <td>€10.00</td>
                    <td>
                        <select class="quantity-select" onchange="updateTotal(this)">
                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                <option value="<?php echo $i; ?>">
                                    <?php echo $i; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </td>
                    <td class="total" style="width: 80px;">€20.00</td> <!-- Adjusted width -->
                    <td><button class="btn btn-danger">Remove</button></td>
                </tr>
                <!-- Add more rows for additional products -->
            </tbody>
        </table>
        <div class="total">
            <h3>Total price: <span id="total-price">€20.00</span></h3>
        </div>
        <div class="btn-container">
            <button class="btn btn-primary">Continue Shopping</button>
            <button class="btn btn-primary">Checkout</button>
        </div>
    </div>

    <script>
        function updateTotal(select) {
            // Get the price of the product
            var price = parseFloat(select.parentNode.previousElementSibling.textContent.replace('€', ''));

            // Get the selected quantity
            var quantity = parseInt(select.value);

            // Calculate the total price
            var total = price * quantity;

            // Update the total price in the table
            select.parentNode.nextElementSibling.textContent = '€' + total.toFixed(2);

            // Update the total price in the total section
            document.getElementById('total-price').textContent = '€' + total.toFixed(2);
        }
    </script>
</body>

</html>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0; 
    }

    .container {
        max-width: 800px;
        margin: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border-bottom: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .total {
        text-align: right;
        margin-top: 20px;
    }

    .btn {
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .btn:hover {
        background-color: #45a049;
    }
</style>