<?php
$host="host=localhost";
$port="port=5432";
$dbname="dbname=project";
$cre="user=postgres password=postgres";
/*$a="1011";
$d="3/1/10";
$v="21";
$bt="normal";
$di="101";
$fn="Chetana";*/
$random_id=rand(1000,6000);
$d=$_GET['date'];
$v=$_GET['bmivalue'];
$bt=$_GET['bmitype'];
$fn=$_GET['first_name'];
echo"<body bgcolor='pink'>";
echo"</body>";

$db=pg_connect("$host $port $dbname $cre");
if($db)
{
        //echo"Connection succeed\n<br>";

                {
                        $qq="insert into appoint values('$random_id','$d','$v','$bt','$fn')";
                        $res=pg_query($db,$qq);
                        if($res)
                               echo"Appointment Booked Successfully \n<br>";
                        else
                                echo"Appointment Booking was unsuccessful \n<br>";
                        $aa="select * from appoint where appid='$random_id'";
                        $res1=pg_query($db,$aa);
                        echo"<html><body><center><h2>Appointment Details<br><br>";
                        echo"<table border=1><tr><th>apid</th><th>date</th><th>bmivalue</th><th>bmitype</th><th>Name</th></tr>";
                        while($row=pg_fetch_row($res1))
                        { echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
                        }
                        echo"</table></h2></center></body></html>";
     }
 

        pg_close($db);
}
echo"<a href='DietDetails.html'>Click Here to get Your DietPlanDetails!!!!</a>";
?>
