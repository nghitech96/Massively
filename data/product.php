<?php

$posTitle = "LIST OF PRODUCT";
$posContent = new Product();

class Product {
    function display() {
        $products = array(
            array("Product 1", 50, "../images/binhtra.jpg"),
            array("Product 2", 30, "../images/gioxach.jpg"),
            array("Product 3", 70, "../images/lysu.jpg")
          );
          
          // Loop through the products array and output the information
          foreach ($products as $product) {
            echo "<div>";
            echo "<img src='" . $product[2] . "'/>";
            echo "<h2>" . $product[0] . "</h2>";
            echo "<p>Price: $" . $product[1] . "</p>";
            echo "</div>";
        }
    }
}
    
// Define the products array
?>
