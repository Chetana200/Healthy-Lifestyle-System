<?php
echo"<body bgcolor='pink'>";
echo"</body>";
//$doc_id=$_GET['doc_id'];
$db=pg_connect("host=localhost port=5432 dbname=project user=postgres password=postgres" )or die("Cannot connect");
$query=pg_query(" Select * from Feedback")or die("Cannot Select");
echo"<table border=2 height=50 width=50>";
if(pg_num_rows($query)>0)
{
	echo"Feedback Recieved from Patient";
 echo"<table border=1><tr><th>Feedback_id</th><th>Patient_name</th><th>Satisfied or not</th><th>Weight_Loss</th><th>Duration</th><th>Change or not</th></tr>";
while($data=pg_fetch_row($query))
{
        echo"<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td></tr>";
}
}
echo"</table>";
pg_close($db);
echo("<center><button onclick= \"location.href='project.html'\"><h2>Logout</h2></button><br><br></center>");

?>

