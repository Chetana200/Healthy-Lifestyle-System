<?php
$username=$_GET['username'];
$password=$_GET['password'];
//$username="chetana";
//$password="123456";
echo"<body bgcolor='pink'>";
echo"</body>";
$db=pg_connect("host=localhost port=5432 dbname=project user=postgres password=postgres" )or die("Cannot connect");


        $query="Select * from Patient1 where first_name='$username' and password='$password'";
$res=pg_query($db,$query);
$count=pg_num_rows($res);
if($count>0)
{
	echo"<h1>Logged in</h1>";
echo"<html><body><center>Patient Details<br><br>";
echo"<table border=1><tr><th>Patient_FirstName</th><th>Patient_MiddleName</th><th>Patient_LastName<th>BirthDate</th><th>Gender</th><th>City</th><th>Contact</th>";
while($row=pg_fetch_row($res))
{
echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td></tr>";
}
echo"</table></h2></center></body><html>";
//echo" Book your Appointment <b style="color:red"><a href="Appointment.html">click here</a>//</body></html>";
}
else
{
	echo"<h1>Not Looged In</h1>";
}

pg_close($db);
echo"<a href='Appointment.html'>Book Appointment</a>";
?>

