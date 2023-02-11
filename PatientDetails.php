<?php
echo"<body bgcolor='pink'>";
echo"</body>";
//$doc_id="101";
$db=pg_connect("host=localhost port=5432 dbname=project user=postgres password=postgres" )or die("Cannot connect");
$query=pg_query(" Select * from Patient1")or die("Cannot Select");
echo"<table border=2 height=50 width=50>";
if(pg_num_rows($query)>0)
{
	echo"Patient Details are!!!!!!!!!!!";
echo"<tr><th>First_Name</th><th>Middle_Name</th><th>Last_Name</th><th>Birth_Date</th><th>Gender</th><th>City</th><th>Contact_no</th><th>Medical_History</th></tr>";
while($data=pg_fetch_row($query))
{
        echo"<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td><td>$data[6]</td><td>$data[7]</td></tr>";
}
}
echo"</table>";
pg_close($db);

?>




