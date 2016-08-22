<?php  
if(isset($_POST['action']))
{
	switch ($_POST['action']) {
		case 'Student':
			stdFn("Student");
			break;
		case 'Staff':
			stdFn("Staff");
			break;
		default:
			# code...
			break;
	}
}
function stdFn($std) 
{
    $servername = "localhost";
    $username = "ravish";
    $password = "";
    $cid=$_POST['clg_id'];
	$conn = new mysqli($servername,  $username, $password,"event_project");
	if(!($conn->connect_error))
	{
		$result = $conn->query("SELECT * FROM `register_table` where college_id='$cid' and category='$std' LIMIT 0, 30");
        if ($result->num_rows>0)
            echo $std;
	}
	else
		echo 'connection failed';
    exit;
}
?>

