<?php
include_once 'includes/untitled5.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
    $sql = "Select *from chinese;";
    $results = mysql_query($conn, $sql);
    $resultCheck = mysqli_num_row($results);
    if ($resultCheck>0) {
          while ($row = mysqli_fetch_assoc($results) {
           	echo $row['chinese_iname'] . "<br>";
           } 
    	# code...
    }
?>

</body>
</html>