<?php
echo"<body bgcolor='yellow'>";
echo"</body>";
if ($_GET['submit'])
 {
//$mass=60;
//$height=6; 
    $mass = $_GET['mass'];
    $height = $_GET['height'];

    $height2 = ($height*$height);
    $bmi = $mass/$height2; 

    if ($bmi <= 18.5) {
        $output = "UNDERWEIGHT";

        } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
        $output = "NORMAL WEIGHT";

        } else if ($bmi > 24.9 AND $bmi<=29.9) {
        $output = "OVERWEIGHT";

        } else if ($bmi > 30.0) {
        $output = "OBESE";
    }
   echo "Your BMI value is  " . $bmi . "  and you are : "; 
    echo "$output";
}
  
?>

