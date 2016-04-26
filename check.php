<?php
if(isset($_POST['register'])){
?>
<table>
	<tr>
	<td>Name</td>
	<td><?php echo $_FILES['photo']['name']?></td>
	</tr>
	<tr>
	<td>Type</td>
	<td><?php echo $_FILES['photo']['type']?></td>
	</tr>
	<tr>
	<td>Tmp Name</td>
	<td><?php echo $_FILES['photo']['tmp_name']?></td>
	</tr>
	<tr>
	<td>Size</td>
	<td><?php echo ($_FILES['photo']['size']/1024)."kb";?></td>
	</tr>
	<tr>
	<td>Error</td>
	<td><?php if($_FILES['photo']['error'] == 0)
	echo "No error";
	}else{ 
	echo $_FILES['photo']['error'];
	}?></td>
	</tr>
</table>
<?php

$source= $_FILES['photo']['tmp_name'];

$dest="upload/".rand().$_FILES['photo']['name'];

move_uploaded_file($source,$dest);
	
}
else{
	
	
	header("location:index.php");
}
?>