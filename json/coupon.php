<?php 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "bionineweb";

 $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// if(isset($_POST['action']) && $_POST['action']=='load_discount'){
//     $coupon_code = $_POST['cupon'];
//     $price = $_POST['price'];

//     // Assuming $connection is your database connection
//     $query = "SELECT * FROM `cupon` WHERE `cupon_code`='$coupon_code' AND `status`=1";
//     $result = mysqli_query($connection, $query);

//     if(mysqli_num_rows($result) > 0) {
//         $row = mysqli_fetch_assoc($result);
//         $discount = $row['discount'];
//         $discounted_price = $price - $discount;

//         // Check if discounted price is at or below $500
//         if ($discounted_price <= 500) {
//             echo $discounted_price;
//         } else {
//             echo "Discounted price exceeds $500";
//         }
//     } else {
//         echo "Invalid coupon code";
//     }
// }
// ?>


// <?php
// <?php

// Function to calculate total amount with coupon discount
function calculateTotalAmount($pdt, $cupon) {
    $totalAmount = 0;
    foreach ($product_item as $pdt) {
        $totalAmount += $pdt['price'];
    }

    // Check if coupon is valid and apply discount
    if ($cupon === "fruitsbazar" && count($pdt) >= 5) {
        $amount = 500;
    }

    return $totalAmount;
}

// Example usage
$product_item = array(
    array("name" => "Product 1", "pdt_price" => ),
    array("name" => "Product 2", "pdt_price" => ),
    array("name" => "Product 3", "pdt_price" => ),
    array("name" => "Product 4", "pdt_price" => ),
    array("name" => "Product 5", "pdt_price" => )
);

$cupon = "fruitsbazar"; // Coupon code

$subtotal = calculateTotalAmount($pdt, $cupon);
echo "Total amount after applying coupon: Rs. 500";
?>
