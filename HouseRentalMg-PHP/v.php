<?php
include("connection.php");
$tid=isset($_GET['tid'])? $_GET['tid']: "";
$hid=isset($_GET['hid'])? $_GET['hid']: "";
$query="select agreement from booking where tenant_id=$tid and house_id=$hid";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
 echo $result['agreement'];
?>