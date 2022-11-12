<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style1.css">
        <script rel="script" type="text/javascript" src="formChecker.js"></script>
    </head>
    <body data-new-gr-c-s-check-loaded="14.1086.0" data-gr-ext-installed="">
        <table border=" 1" width="70%" align="center">
            <tbody>
                <tr align="center">
                    <?php
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    echo "<td colspan='4'>Welcome Dear User[$username] with password [$password]</td>";
                ?>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>Quantity</td>
                    <td>Cost Per Item</td>
                    <td>Sub Total</td>
                </tr>
                <tr>
                    <td>Item 1</td>
                    <?php
                    $item1 = $_POST['item1'];
                    $price1 = $item1 * 599.00;
                    echo "<td>$item1</td>
                    <td>$799.00</td>
                    <td>$$price1.00</td>";
                    ?>
                </tr>
                <tr>
                    <td>Item 2</td>
                    <?php
                    $item2 = $_POST['item2'];
                    $price2 = $item2 * 239.00;
                    echo "<td>$item2</td>
                    <td>$999.00</td>
                    <td>$$price2.00</td>";
                    ?>
                </tr>
                <tr>
                    <td>Item 3</td>
                    <?php
                    $item3 = $_POST['item3'];
                    $price3 = $item3 * 1499.00;
                    echo "<td>$item3</td>
                    <td>$2099.00</td>
                    <td>$$price3.00</td>";
                    ?>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <?php
                    $shipping = $_POST['shipping'];
                    $shippingPrice = 0;
                    if($shipping == "Free seven days"){$shippingPrice = 0;}
                    if($shipping == "$50.00 overnight"){$shippingPrice = 50;}
                    if($shipping == "$5.00 three days"){$shippingPrice = 5;}
                    echo "<td colspan='2'>$shipping</td>
                    <td>$$shippingPrice.00</td>";
                    ?>
                </tr>
                <tr>
                    <td colspan="3">Total Cost</td>
                    <?php
                    $total = $price1 + $price2 + $price3 + $shippingPrice;
                    echo "<td>$$total.00</td>";
                    ?>
                </tr>
            </tbody>
        </table>
        <a href="customerFrontend.html"><input type="button" value="Reset" style="width:4.75%; margin-left:80%"></a></br>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Harry_Potter_wordmark.svg/800px-Harry_Potter_wordmark.svg.png" style="margin-left: 25%; margin-top:50px">       

    </body>

</html>
