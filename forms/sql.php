<?php
	include 'connection.php';
	$category_id=$_POST["category_id"];
	$result = mysqli_query($conn,"SELECT * FROM tbl_subcat where catid=$category_id");
?>
<option value="">Select SubCategory</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
	<option value="<?php echo $row["subid"];?>"><?php echo $row["s_name"];?></option>
<?php
}
?>