<?php  
if(isset($_POST['cat']))
{
	switch ($_POST['cat']) {
		case 'Student':
			insert_db("Student");
			break;
		case 'Staff':
			insert_db("Staff");
			break;
		default:
			# code...
			break;
	}
}
function insert_db($cat)
{
	$servername = "localhost";
    $username = "ravish";
    $password = "";
    $college_id=$_POST['college_id'];
    $cname=$_POST['cname'];
    $tno=$_POST['tno'];
    $catt=$_POST['cat'];
    $rep=$_POST['rep'];
    $rep_ct=$_POST['rep_ct'];
	$conn = new mysqli($servername,  $username, $password,"event_project");
	if(!($conn->connect_error))
	{
		$result = $conn->query("insert into register_table values('$college_id', '$cname','$tno','$catt','$rep','$rep_ct') ");
		if($result)
			echo "success";
	}
	else
		echo "connection failed";
}
?>