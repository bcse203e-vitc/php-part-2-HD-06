<html>
<body>
<?php
$lines = file("products.txt", FILE_IGNORE_NEW_LINES);
$products = [];

foreach ($lines as $line) {
    list($name, $price) = explode(",", $line);
    $products[] = ["name" => $name, "price" => (int)$price];
}

usort($products, fn($a, $b) => $a['price'] <=> $b['price']);

echo "<h3>Products Sorted by Price</h3>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Product Name</th><th>Price</th></tr>";
foreach ($products as $p) {
    echo "<tr><td>{$p['name']}</td><td>{$p['price']}</td></tr>";
}
echo "</table>";
?>
</body>
</html>
