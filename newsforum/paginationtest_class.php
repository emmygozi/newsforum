<!DOCTYPE html>
<html>
<head>
	<title>pagination test</title>

					<link href="boots/css/bootstrap.min.css" rel="stylesheet"/>
					<script src="boots/js/jquery-3.2.1.min.js"></script>
					<script src="boots/js/bootstrap.min.js"></script>

</head>
<body>

</body>


<?php
class paginationtest_class{
private $matric ;

protected $conn;
var $error = array();



function __construct(){
	//echo "I am a constructot, I will always be executed";
	if (!isset($_SESSION)) {
		session_start();
	}
	
	$this->conn = mysqli_connect('localhost','root', 'moatXF@ctor1', 'testpagination');
	if (!$this->conn) {
		$this->error = "Error Connecting to Db";
	}



}


public function tryout(){
	if (isset($_GET['details']))
    {
      //  details($_GET['details']);
    	$gh = $_GET['details'];
    	$tn =	$this->details($gh);
    	return $tn;
    }
}


function showdata(){
	$res = mysqli_query($this->conn, "SELECT * FROM news");
	$no = mysqli_num_rows($res);
	if ($no > 0) {
		while ($data = mysqli_fetch_assoc($res)){
				echo "<p>".$data['stuffs']."</p>";
			
		}
	}

}


function details($id){
	$f = $id."is here";
	//echo $f;

	return $f;

}

function paginationbelow(){
	$y = $this->showsome();
	if (isset($y)) {
		$sql2 = "SELECT COUNT(id) FROM news2";  

	$rs_result = mysqli_query($this->conn,$sql2);  
    $row = mysqli_fetch_row($rs_result);  
    $total_records = $row[0]; 	
    return $total_records;		
	}
}


function showsome(){
	$limit = 10;

	if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
	$offsetvalue = ($page-1) * $limit;  

	$sql = "SELECT * from news2 order by entrytime desc, id desc limit ".$offsetvalue.",".$limit;
	$res = mysqli_query($this->conn, $sql)or die(mysqli_error($this->conn));
	$no = mysqli_num_rows($res);
	if ($no > 0) {
		//return $res;
		while ($data = mysqli_fetch_assoc($res)){
			echo "<div class='row' style='margin-bottom: 1em; background-color: blue;height: 15em;margin-top: 1em;text-align:center;vertical-align:center;'>
			<a href='paginationtest_class.php?details=".$data['id']."'>
			<div style='height: 15em;background-color:yellow;'>
		
			<div style='font-size: 4em;text-align:center;vertical-align:center;line-height:3.5em;'>".$data['stuff2']."</div> </div>
			</a>
		
	</div>";
			
		}


	}

	
	$sql2 = "SELECT COUNT(id) FROM news2";  

	$rs_result = mysqli_query($this->conn,$sql2);  
    $row = mysqli_fetch_row($rs_result);  
    $total_records = $row[0];  
    $total_pages = ceil($total_records / $limit); 

   
 

   $pagLink = "<div class='pagination'>";  
    for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a id='content' href='paginationtest_class.php?page=".$i."'>".$i."</a></li>"; 

     };  
    echo $pagLink . "</div>";  
    
 /*
    if($page <=1 ){

echo "<span id='page_links' style='font-weight: bold;'>Prev</span>";

}

else

{

$j = $page - 1;

echo "<span><a id='page_a_link' href='paginationtest_class.php?page=$j'>< Prev</a></span>";

}

for($i=1; $i <= $total_pages; $i++)

{

if($i<>$page)

{

echo "<span><a id='page_a_link' href='paginationtest_class.php?page=$i'>$i</a></span>";

}

else

{

echo "<span id='page_links' style='font-weight: bold;'>$i</span>";

}

}

if($page == $total_pages )

{

echo "<span id='page_links' style='font-weight: bold;display:hidden'>Next ></span>";

}

else

{

$j = $page + 1;

echo "<span><a id='page_a_link' href='paginationtest_class.php?page=$j'>Next</a></span>";

}

echo $total_pages."  ".$page;

**/

     }

}

$obj = new paginationtest_class();
//echo $obj->showdata();
echo $obj->showsome();

echo $obj->tryout();

echo $obj->uploadpost();


?>
</html>