<?php

namespace App\Controllers;

class Operations extends BaseController {

    // Ito yung initial default na link pag tinype Localhost/TS1LastName
    public function index() {
        echo "<pre><br>";
        echo "+===================================== INDEX FUNCTION ======================================+<br>";
        echo "<strong>  Student Number:</strong> 202210168<br>";
        echo "<strong>  Full Name:</strong> Carl Allen Labramonte Torno<br>";
        echo "<strong>  Degree Program:</strong> BS Information Technology with Specialization in Web & Mobile Applications<br>";
        echo "<strong>  Year Level:</strong> 3rd Year<br>";
        echo "<strong>  Section:</strong> TW32<br>";
        echo "+===========================================================================================+<br>";
        echo "</pre>";
    }

     // for ano localhost/TS1LastName/operations/displayinfo/tapos yung input yung deets
    public function displayInfo($studNum = '', $fName = '', $program = '', $yearLvl ='', $sec = '') {
        echo "<pre><br>";
        echo "+================================= DISPLAY INFO FUNCTION ==================================+<br>";
        echo "<strong>  Student Number:</strong> ". $studNum ."<br>";
        echo "<strong>  Full Name:</strong> ". $fName ."<br>";
        echo "<strong>  Degree Program:</strong> ". $program ."<br>";
        echo "<strong>  Year Level:</strong> ". $yearLvl ."<br>";
        echo "<strong>  Section:</strong> ". $sec ."<br>";
        echo "+==========================================================================================+<br>";
        echo "</pre>";
    }

    // for ano localhost/TS1LastName/operations/compuote/tapos yung input like 11/21
    public function compute($num1 = 0, $num2 = 0){
        $sum = $num1 + $num2;
        $diff = $num1 - $num2;
        $pro = $num1 * $num2;
        
        // verifying if num 2 is a 0 value cause it will result error or undefined to qoutient and remainder
        $qou = ($num2 == 0) ? 'Math Error: Undefined' : $num1 / $num2 ;
        $mod = ($num2 == 0) ? 'Math Error: Undefined' : $num1 % $num2 ;
        
        echo "<pre><br>";
        echo "+=================== COMPUTE FUNCTION ===================+<br>";
        echo "<strong>  Given:</strong><br>";
        echo "<strong>   First Number:</strong> " . $num1 . "<br>";
        echo "<strong>   Second Number:</strong> " . $num2 . "<br>";

        echo "<br><strong>  Computations:</strong><br>";
        echo "<strong>   Sum:</strong> " . $sum . "<br>";
        echo "<strong>   Difference:</strong> " . $diff . "<br>";
        echo "<strong>   Product:</strong> " . $pro . "<br>";
        echo "<strong>   Quotient:</strong> " . $qou . "<br>";
        echo "<strong>   Remainder:</strong> " . $mod. "<br>";;
        echo "+========================================================+<br>";
        echo "</pre>";
    }
}
?>
