<?php
$host="host=localhost";
$port="port=5432";
$dbname="dbname=project";
$cre="user=postgres password=postgres";

$d=$_GET['diet_code'];
$dn=$_GET['diet_name'];
$dt=$_GET['diet_type'];
$m=$_GET['morning_diet'];
$a=$_GET['afternoon_diet'];
$e=$_GET['evening_diet'];
$c=$_GET['cost'];
$fm=$_GET['first_name'];
/*$d="134234";
$doc="101";
$dn="Ketto";
$dt="Normal";
$m="Oats";
$a="Rice";
$e="soup";
$c="200";
$fm="Chetana";*/
echo"<body bgcolor='yellow'>";
echo"</body>";

$db=pg_connect("$host $port $dbname $cre");
if($db)
{
        //echo"Connection succeed\n<br>";

                {
                        $qq="insert into DietPlan1 values('$d','$dn','$dt','$m','$a','$e','$c','$fm')";
                        $res=pg_query($db,$qq);
                        if($res)
                               echo"Diet Plans!!!!!!!!!!!!!!!!!! \n<br>";
                        else
                                echo"Unsucessful \n<br>";
                        $aa="select * from DietPlan1";
                        $res1=pg_query($db,$aa);
                        echo"<html><body><center><h2>Diet Plan Details<br><br>";
                        echo"<table border=1><tr><th>Diet_code</th><th>Diet_name</th><th>Diet_type</th><th>Morning_Diet</th><th>AfterNoon_Diet</th><th>Evening_Diet</th><th>DietPlan_Cost</th><th>Patient Name</th></tr>";
                        while($row=pg_fetch_row($res1))
                        { echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>";
                        }
                        echo"</table></h2></center></body></html>";
        }
 

        pg_close($db);
}
//echo"<a href='Appointmentdetails.php'>To see the Appointments Click here!!!!!!!!!!!!</a>";
//echo("<center><button onclick= \"location.href='Appointmentdetails.php'\"><h4>Appointment Details!!!!!!!</h4></button><br><br></center>");
?>
