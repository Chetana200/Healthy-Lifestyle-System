<?php
$host="host=localhost";
$port="port=5432";
$dbname="dbname=project";
$cre="user=postgres password=postgres";
//$p="301";
/*$pname="Chetana";
$d="3/1/8";
$pm="UPI";
$pa="190";*/
$random_id=rand(1000,6000);
$pname=$_GET['first_name'];
$d=$_GET['p_date'];
$pm=$_GET['p_mode'];
$pa=$_GET['p_amt'];
 
echo"<body bgcolor='yellow'>";
echo"</body>";

$db=pg_connect("$host $port $dbname $cre");
if($db)
{
        //echo"Connection succeed\n<br>";

                {
                        $qq="insert into Payment values('$random_id','$pname','$d','$pm','$pa')";
                        $res=pg_query($db,$qq);
                        if($res)
                               echo"Payment details!!!!!!!!!!!!! \n<br>";
                        else
                                echo"Unsucessful \n<br>";
                        $aa="select * from Payment where pay_id='$random_id' ";
                        $res1=pg_query($db,$aa);
                        echo"<html><body><center><h2>Payment  Details<br><br>";
                        echo"<table border=1><tr><th>Payment_id</th><th>Patient_name</th><th>Payment_Date</th><th>Payment_mode</th><th>Ammount</th></tr>";
                        while($row=pg_fetch_row($res1))
                        { echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
                        }
                        echo"</table></h2></center></body></html>";
        }
 

        pg_close($db);
}
echo"<a href='Feedback.html'>Please fill the Feedback!!!!!!!!!!!</a>";

?>
