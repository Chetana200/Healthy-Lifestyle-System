<?php
//$bmi_type="Normal";
//$first_name="Chetana";
$bmi_type=$_GET['bmi_type'];
$first_name=$_GET['first_name'];
echo"<body bgcolor='pink'>";
echo"</body>";

$db=pg_connect("host=localhost port=5432 dbname=project user=postgres password=postgres" )or die("Cannot connect");
$query=pg_query(" Select * from Dietplan1 where  first_name='$first_name' and diet_type='$bmi_type'")or die("Cannot Select");
echo"<table border=2 height=50 width=50>";
if(pg_num_rows($query)>0)
{
	echo"Your Diet plan Details are as follows";
echo"<tr><th>Dietplan_id</th><th>Dietplan_name</th><th>Diet_type</th><th>Morning diet</th><th>Afternoon Diet</th><th>Evening Diet</th><th>DietPlan_Cost</th><th>Name</th></tr>";
while($data=pg_fetch_row($query))
{
        echo"<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td><td>$data[6]</td><td>$data[7]</td></tr>";
}
}
echo"</table>";
pg_close($db);

echo("<center><button onclick= \"location.href='frame.html'\"><h5>Click here to get nutritive recipes!!!!!!!!</h5></button><br><br></center>");
echo("<center><button onclick= \"location.href='Payment.html'\"><h5>Payment</h5></button><br><br></center>");

?>



