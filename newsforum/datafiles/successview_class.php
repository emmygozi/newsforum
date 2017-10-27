

	
<?php
/**
* 
*/
class successview_class
{

function uploadpost(){
	if (!isset($_SESSION)) {
		session_start();
	}





	if ( (isset($_FILES['fileupload'])) || (isset($_POST))) {

		 $_SESSION['accessgranted'] = "Access Granted";
		}
  # code...
	if (isset($_SESSION['accessgranted'])) {
				# code...
					
  $folder = "../imageupload/";
  $errors = array(); // erros come in an ArrayAccess

  $file_name = $_FILES['fileupload']['name'];
  $file_size = $_FILES['fileupload']['size'];
  $file_temp = $_FILES['fileupload']['tmp_name'];
  $file_type = $_FILES['fileupload']['type'];

  //get the file extension
  $file_ext = strtolower(end(explode('.', $file_name)));

  $extensions = array("jpeg","jpg","png");

  if (in_array($file_ext, $extensions) === false) {
    # code...
    $errors[] = "Extension not allowed, please choose a JPEG or  PNG file.";
    print_r($errors);
  }

  if ($file_size > 2097152) {
    # code...
    $errors[]="File must be exactly 2 MB";
  }

  if (empty($errors) == true) {
    # code...
    move_uploaded_file($file_temp, $folder.$file_name);
    echo "Success";
  }else {
    print_r($errors);
    
  }



}else{
	  header("Location:index2.php");
}


}



	
}

$obj1 = new successview_class();

echo $obj1->uploadpost();

 ?>
