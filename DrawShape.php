<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Seatword #1</title>
  </head>
  <body>
    <form method="POST" action="">
      <label for="input"><b>Enter a number of inputs:</b></label>
      <input type="number" name="input" min="3" required />
  		<input type="submit" class="button" name="button" value="ENTER"/>
    </form>
  </body>
</html>

<?php
if (isset($_POST['input'])) {
  $num = intval($_POST['input']);
  drawLine($num);
  echo"<br>";
  drawStripedLine($num);
  echo"<br>";
  drawParallelogram($num);
  echo"<br>";
  drawSquare($num);
  echo"<br>";
  drawTriangleReverse($num);
  echo"<br>";
  drawTriangle($num);
}

function drawLine($size){

for ($i = 0; $i < $size; $i++) {
    echo "*";
}
echo "<br>";
}

function drawStripedLine($size){

for ($i = 1; $i <= $size; $i++) {
    if($i % 2 == 0) {
        echo"_";
    }
    else {
        echo"*";
    }
}
echo "<br>";
}

function drawSquare($size)
{
for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        echo "*";
    }
    echo "<br>";
}
}

function drawParallelogram($size) {

$min = $size;
$max = $size + ($size - 1);

for ($i = 1; $i <= $size; $i++) {
    for($j = 1; $j <= $size + ($size - 1); $j++) {
        if($j >= $min && $j <= $max) {
            echo "*";
        }
        else {
            echo "_";
        }
    }
    echo "<br>";
    $min--;
    $max--;
}

}

function drawTriangle($size){

for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    for ($k = $size - $i; $k >= 1; $k--) {
        echo "_";
    }
    echo "<br>";
}
}

function drawTriangleReverse($size)
{
for ($i = $size; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    for ($k = $size - $i; $k >= 1; $k--) {
        echo "_";
    }
    echo "<br>";
}
}

?>
