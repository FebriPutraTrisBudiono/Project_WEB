<?php
session_start();

include 'koneksi.php';

// add, remove, empty
if (!empty($_GET['action'])) {
    switch ($_GET['action']) {
        // add product to cart
        case 'add':
            if (!empty($_POST['quantity'])) {
                $pid = $_GET['pid'];
                $query = "SELECT * FROM products WHERE id=" . $pid;
                $result = mysqli_query($koneksi, $query);
                while ($product = mysqli_fetch_array($result)) {
                    $itemArray = [
                        $product['code'] => [
                            'name' => $product['name'],
                            'code' => $product['code'],
                            'quantity' => $_POST['quantity'],
                            'price' => $product['price'],
                            'image' => $product['image']
                        ]
                    ];
                    if (isset($_SESSION['cart_item']) &&!empty($_SESSION['cart_item'])) {
                        if (in_array($product['code'], array_keys($_SESSION['cart_item']))) {
                            foreach ($_SESSION['cart_item'] as $key => $value) {
                                if ($product['code'] == $key) {
                                    if (empty($_SESSION['cart_item'][$key]["quantity"])) {
                                        $_SESSION['cart_item'][$key]['quantity'] = 0;
                                    }
                                    $_SESSION['cart_item'][$key]['quantity'] += $_POST['quantity'];
                                }
                            }
                        } else {
                            $_SESSION['cart_item'] += $itemArray;
                        }
                    } else {
                        $_SESSION['cart_item'] = $itemArray;
                    }
                }
            }
            break;
        case 'remove':
            if (!empty($_SESSION['cart_item'])) {
                foreach ($_SESSION['cart_item'] as $key => $value) {
                    if ($_GET['code'] == $key) {
                        unset($_SESSION['cart_item'][$key]);
                    }
                    if (empty($_SESSION['cart_item'])) {
                        unset($_SESSION['cart_item']);
                    }
                }
            }
            break;
        case 'empty':
            unset($_SESSION['cart_item']);
            break;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Halaman admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>AlfanAnekaMacamBibit</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

</head>

<body>
<br>

<div class="container py-5">


    <!-- first done this -->
    <div class="row">
        <div class="col-md-12">
            <h1>Products List</h1>
            <div class="d-flex">
                <div class="card-deck">
                    <?php
                    $query = "SELECT * FROM products";
                    $product = mysqli_query($koneksi, $query);
                    if (!empty($product)) {
                        while ($row = mysqli_fetch_array($product)) { ?>
                            <form action="keranjang.php?action=add&pid=<?= $row['id']; ?>" method="post">
                                <div class="card" style="width:18rem">
                                    <img class="card-img-top"
                                         src="produk/<?php echo $row['image']; ?>"
                                         alt="<?= $row['name']; ?>"
                                         width="150">
                                    <div class="card-header d-flex justify-content-between">
                                        <span><?= $row['name']; ?></span>
                                        <span>₹<?= number_format($row['price'], 2); ?></span>
                                    </div>
                                    <div class="card-body d-flex justify-content-between">
                                        <input type="text" name="quantity" value="1" size="2">
                                        <input type="submit" value="Add to Cart" class="btn btn-success btn-sm">
                                    </div>
                                </div>
                            </form>
                        <?php }
                    } else {
                        echo "no products available";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
</body>

</html>