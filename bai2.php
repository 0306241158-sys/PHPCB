<!DOCTYPE html>
<html>
<head>
    <title>Danh sách thành phố</title>
</head>
<body>

<?php

$cities = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London"];


echo "<h2>Các thành phố (ngăn cách bởi dấu phẩy):</h2>";
echo implode(", ", $cities);

sort($cities);
echo "<h2>Danh sách thành phố đã sắp xếp:</h2>";
echo "<ul>";
foreach ($cities as $city) {
    echo "<li>$city</li>";
}
echo "</ul>";


array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");
sort($cities);

echo "<h2>Danh sách sau khi thêm và sắp xếp lại:</h2>";
echo "<ul>";
foreach ($cities as $city) {
    echo "<li>$city</li>";
}
echo "</ul>";
?>

</body>
</html>
