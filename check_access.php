<?php    
if(isset($_POST['c_id']))
{
	$servername = "localhost";
    $username = "ravish";
    $password = "";
    $cpass=$_POST['c_pass'];
    $cid=$_POST['c_id'];
	$conn = new mysqli($servername,  $username, $password,"event_project");
	if(!($conn->connect_error))
	{
		$rt = $conn->query("SELECT c_pass from access_table where c_id=$cid");
        if ($rt->num_rows>0)
        {
        	$row=$rt->fetch_assoc();
        	if($row['c_pass']==$cpass)
            	echo 'success';
            else
            	echo "failure";
        }
        else
        	echo "failure";
	}
	else
		echo 'connection failed';
}
?>