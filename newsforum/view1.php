<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

require_once ('paginationtest_class.php');


$obj = new paginationtest_class();

print_r($obj->showsome());

$res = $obj->showsome();

 echo  $obj->tryout();

  $records_total = $obj->paginationbelow();

while ($data = mysqli_fetch_assoc($res)){
			echo "<a href='paginationtest_class.php?details=".$data['id']."'><p>".$data['stuff2']."</p></a>";
			
		}
		$limit = 10;
		$total_pages = ceil($records_total / $limit);
		echo $total_pages;



?>

</body>
</html>