 <?php
$param = $_GET['param'];
echo "param is: " . $param . "<br>";
if ($param == "hello") {
    echo "hi there!<br>";
} else {
    $num = $param * 3;
    echo "number:" . $num . "<br>";
}
echo "<br>";
echo "<img src=\"lab3_DFD.gif\"/>";
?> 
