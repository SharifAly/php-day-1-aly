<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Intermediate</title>
</head>
<body>
  <?php 
  $cartoonOne = array("Disney"=>"Mickey Mouse", "Marvel"=>"Iron Man", "South Park"=>"Erik Cartman", "Simpons"=> "Homer", "Dragon Ball Z"=>"Goku");
  foreach($cartoonOne as $val => $val_value) {
  echo "<h3>One Dimensional Array</h3> <br><br>";
  echo "Key = " . $val . " , Value = " . $val_value . "<hr>";
  echo "<br>";
}
$cartoonMore = array (
  array("Disney", "Mickey Mouse"),
  array("Marvel","Iron Man"),
  array("South Park","Erik Cartman"),
  array("Simpons","Homer"));
for ($row = 0; $row < 4; $row++) {
  echo "<h3>More Dimensional Array</h3> <br><br>";
  echo "<p><b>Number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 2; $col++) {
    echo "<li>".$cartoonMore[$row][$col]."</li>";
  }
  echo "</ul>";
}
  ?>
</body>
</html>