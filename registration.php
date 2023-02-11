 <?php
$host="host=localhost";
$port="port=5432";
$dbname="dbname=project";
$cre="user=postgres password=postgres";
$fn=$_GET['first_name'];
$mn=$_GET['middle_name'];
$ln=$_GET['last_name'];
$d=$_GET['bdate'];
$g=$_GET['gender'];
$c=$_GET['city'];
$p=$_GET['phone'];
$h=$_GET['history'];
$pw=$_GET['password'];
echo"<body bgcolor='orange'>";
echo"</body>";

$db=pg_connect("$host $port $dbname $cre");
if($db)
{
       echo"Welcome to Healthy Lifesstyles\n<br>";


                        $qq="insert into Patient1 values('$fn','$mn','$ln','$d','$g','$c','$p','$h','$pw')";
                        $res=pg_query($db,$qq);
                        if($res)
                               echo"REGISTRATION DONE Successfully \n<br>";
                        else
                                echo"Record insertion was successful for patient\n<br>";
                        $aa="Select * from Patient1 where first_name='$fn'";
                        $res1=pg_query($db,$aa);
                        echo"<html><body><center><h2>Patient Details<br><br>";
                        echo"<table border=1><tr><th>firstname</th><th>middlename</th><th>lastname</th><th>date</th><th>gender</th><th>city</th><th>phone</th><th>history</th><th>password</th></tr>";
                        while($row=pg_fetch_row($res1))
                        {
 echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td></tr>";
                        }
                        echo"</table></h2></center></body></html>";
pg_free_result($res1);
pg_close($db);
}
else
{
        echo"connection failed";
}
?>
