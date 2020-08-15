<!DOCTYPE html>
<html>
<head>
	<title>registration form</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
  <script type="text/javascript" src="bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">


  <style type="text/css">

  	.container{
  		border: 1px solid;
  		width: 30%;
  		margin-top: 7px;
  		background-color: cyan;
  		border-radius: 2px ;
  	}



  </style>
<script type="text/javascript">
   function validateForm() {
  var name = document.forms["registration"]["usern"].value;
  var add = document.forms["registration"]["address"].value;
  var mail = document.forms["registration"]["email"].value;
  var phone = document.forms["registration"]["phone"].value;

  if (name == "") {
    alert("Name must be filled out");
    return false;
  }else if(add == ""){
    alert("Address must be filled out");
  }else if(mail == ""){
    alert("Email must be filled out");
  }else if( phone.length==""){
    alert("Number must be filled out");
  }else if(phone.length<10 || phone.length>10){
    alert("Number must be equal to 10");
  }
}
 
  
</script>
  

</head>
</script>
<body>

	<div class="container">
   <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
  <h4 style="font-style: italic;font-family: time new romans;text-align: center;">REGISTRATION FORM</h4>
  <form action="regHandler.php" method="POST" name="registration" onsubmit="return validateForm()">
    <div class="form-group">
      <label for="usern">Full Name:</label>
      <input type="text" class="form-control" id="usre" placeholder="Enter User Name" name="usern">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="adrs" placeholder="Enter Address" name="address" >
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="phone">Phone Number:</label>
      <input type="tel" class="form-control" id="num" placeholder="Enter Phone number" name="phone">
    </div>
    <div class="form-group">
       <div class="form-check-inline">
      <label class="form-check-label" for="gender">Gender:</label>

        <input type="radio" class="form-check-input" id="f" name="optradio" value="Female" checked>Female
        <input type="radio" class="form-check-input" id="m" name="optradio" value="Male">Male
  
    </div>
  </div>
    <button  type="submit" class="btn btn-primary" style="margin-left: 20px;width: 50%" name="save">Save</button>
  </form>
</div>
</div>
</div>


</body>
</html>