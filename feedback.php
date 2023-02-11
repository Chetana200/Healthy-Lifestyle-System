<?php
$host="host=localhost";
$port="port=5432";
$dbname="dbname=project";
$cre="user=postgres password=postgres";

/*$f="409";
$pname="Aditya";
$fy="yes";
$d="3";
$w="7";
$c="no";
//$doc_id="101";
 */
$random_id=rand(1000,6000);
$pname=$_GET['first_name'];
$fy=$_GET['f_type'];
$w=$_GET['w_lost'];
$d=$_GET['duration'];
$c=$_GET['change_diet'];
echo"<body bgcolor='yellow'>";
echo"</body>";

$db=pg_connect("$host $port $dbname $cre");
if($db)
{
        //echo"Connection succeed\n<br>";

                {
                        $qq="insert into Feedback values('$random_id','$pname','$fy','$w','$d','$c')";
                        $res=pg_query($db,$qq);
                        if($res)
                               echo"Feedback details!!!!!!!!!!!!! \n<br>";
                        else
                                echo"Unsucessful \n<br>";
                        $aa="select * from Feedback where f_id='$random_id'";
                        $res1=pg_query($db,$aa);
                        echo"<html><body><center><h2>Feedback  Details<br><br>";
                        echo"<table border=1><tr><th>Feedback_id</th><th>Patient_name</th><th>Satisfied or not</th><th>Weight_Loss</th><th>Duration</th><th>Change_diet_or_not</th></tr>";
                        while($row=pg_fetch_row($res1))
                        { echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
                        }
                        echo"</table></h2></center></body></html>";
        }
 

        pg_close($db);
}
echo("<center><button onclick= \"location.href='project.html'\"><h2>Logout</h2></button><br><br></center>");
?>
