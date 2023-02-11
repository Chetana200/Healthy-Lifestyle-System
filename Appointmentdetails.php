<?php
echo"<body bgcolor='pink'>";
echo"</body>";

//$doc_id=$_GET['doc_id'];
$db=pg_connect("host=localhost port=5432 dbname=project user=postgres password=postgres" )or die("Cannot connect");
$query=pg_query(" Select * from appoint ")or die("Cannot Select");
echo"<table border=2 height=50 width=50>";
if(pg_num_rows($query)>0)
{
	echo"Appointment Details are as Follows";
echo"<tr><th>Appointment_id</th><th>Date</th><th>BMI_Value</th><th>BMI_type</th><th>Patient_Name</th></tr>";
while($data=pg_fetch_row($query))
{
        echo"<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td></tr>";
}
}
echo"</table>";
pg_close($db);
echo("<center><button onclick= \"location.href='FeedbackDetails.php'\"><h2>Feedback Details!!!!!!!!</h2></button><br><br></center>");
?>
	



