<?php

// 1-  
phpinfo();


//         2- 

echo "</br>";
define ("PAGENAME" , "first" );
echo PAGENAME;


//         3-
echo "</br>";
echo $_SERVER['SERVER_NAME']; 

echo "</br>";
echo $_SERVER['SERVER_ADDR'];

echo "</br>";
echo $_SERVER['SERVER_PORT'];

echo "</br>";
$fileName =  basename($_SERVER["PHP_SELF"]) ;
echo $fileName;

echo "</br>";
echo $_SERVER['SCRIPT_NAME'];


echo "</br>";



//           5- 

$age = 1;

switch ($age) {
    case $age<5:
        echo "Stay at home";
        break;
    case $age == 5:
        echo "Kindergarden";
    break;
    
    default:
        echo "Go to grade";
        break;
}
?>