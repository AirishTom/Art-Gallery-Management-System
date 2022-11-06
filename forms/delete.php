<?php
include("connection.php");
if(isset($_GET["art_id"]))
{
	$art_id=$_GET["art_id"];
	mysqli_query($conn, "DELETE  FROM `tbl_art` where art_id=$art_id");
	echo "<script>alert(' Art Details  Deleted Successfully!!');window.location='viewart.php'</script>";
}
?>

