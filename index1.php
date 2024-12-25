<h1>File index.php</h1>
<?php

echo "Hello World<br>";
print("Hello World<br>");
print_r("Hello World<br>");
var_dump("Hello World<br>");

$myvar;
$myvar = "Hello World";
$myvar = 1;
echo "<h1>".$myvar."</h1>";
echo "<br>";

$x = 1;
function x(){
   global $x;
   $x = 2;
}
echo $x;
echo "<br>";
x();
echo $x;
echo "<br>";
echo "1" + "1";
echo "<br>";
$x = "1";
echo ++$x;
echo $x;
echo "<br>";

$my_arry = array(1,2,3,4,5, "myindex" => 6);
for($i=0; $i < sizeof($my_arry); $i++){
?>
    <h1><?php echo $my_arry[$i]; ?></h1>
    <?php
} // end for
?>




<?php
print_r($my_arry);
echo "<br>";
$my_arry2[] = 1;
$my_arry2[] = 2;
$my_arry2[] = 3;
print_r($my_arry2);

if(FALSE){
    echo "if false";
}else
if(TRUE and FALSE){
    echo "else if true";
}else{
    echo "else +1111111111";
}
echo "<br>";
/**FILE index.php */
# Comment
// Comment
?>
<h1><?php echo $myvar; ?></h>