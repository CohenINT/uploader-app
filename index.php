<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>load files</title>

<link rel="stylesheet" href="css\bootstrap.css"/>
<link rel="stylesheet" href="css\index.css"/>


</head>
<body>
    
<div class="container cntr mt-5">




 <form method="POST" enctype="multipart/form-data" action ="load.php">



<div class="row mt-5" id="background_photo_parent">
 <div class="bg-img mt-5 col-12">
 
 </div>
 </div>
<div id="file_upload" class="form-group mt-5 row justify-content-center">
<input type="submit" id="upload_now"  name="submit" style="font-size:44px;" class="btn btn-primary col-lg-3 col-sm-3" value="Upload"/>


</div>

<div class="row" id="file_max">
<div class="col-12 p-2 text-center"> <b style="font-size:20px;"><strong><mark>up to 10 MB.</mark></strong></b></div>
</div>
<div class="form-group row justify-content-around mt-5" id="file_link">
<input type="file" class="fileSelect btn btn-primary col-lg-5 col-sm-4 text-right" name="file" id="fileSelect" value="Submit"/>

</div>

</form>






</div>
<script src="js\jquery-3.4.1.js"></script>
<script src="js\popper.min.js"></script>
<script src="js\bootstrap.js"></script>

<script src="js\index.js"></script>


</body>
</html>