<!--Form start -->
<!DOCTYPE html>
<html>
<head>
  <title>Send mail</title>
  <link href="boots/css/bootstrap.min.css" rel="stylesheet"/>


<style type="text/css">


</style>
</head>
<body>
  <div class="container-fluid">

  <form action="datafiles/successview_class.php" enctype="multipart/form-data" method="post" id="fileupload1" >

    <div class="row">
      <div class="col-md-4">
  <div class="form-group">
     <label for="subject"><b>Your File</b></label>
     <input type="file" class="form-control" id="file_upload" placeholder="Enter Email" name="fileupload" required>
  </div>
  </div>
  </div>


  <div class="form-group">
   <button type="submit" name="send"   class="btn btn-success btn-sm">Upload Picture</button>
   <button type="reset" id="dontsend"   class="btn btn-info btn-sm">Clear Picture</button>
 </div>

  </form>

  </div>
  <script src="boots/js/jquery-3.2.1.min.js"></script>
  <script src="boots/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      //backup reset method
      $('#dontsend').click(function(){
      $('#fileupload1').reset();
    });
    
    });
    
  </script>
</body>
</html>
