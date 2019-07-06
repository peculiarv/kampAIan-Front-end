<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Welcome to Rivard's Catering Reservation Website</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="icon" href="imgs/logo/LogoTrans.png" sizes="64x64" type="image/png">

		<link href="css/bootstrap.css" rel="stylesheet"/>

		<link href="css/bootstrap-theme.css" rel="stylesheet" />

		<script src="js/jquery-3.1.0.min.js"></script>

		<link rel="stylesheet" type="text/css" href="css/styles.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}


/* Set a style for all buttons */
button {
  background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}



.container {
	width: 500px;
  padding: 16px;
  margin-top: 100px;
	

}

span.psw {
  float: right;
  padding-top: 16px;
}


/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.form-control {
	border: 1px solid black;
	margin-top: 30px;
	margin-bottom: 30px;
	border-radius:100px;
	padding: 10px;
}
.btnred {
 background-color: red;
 border-radius:100px;
}	

.btn {
	padding:10px;
	border-radius: 100px;
}

</style>
</head>
<body>
<div class="container">
 

<form>
  <div class="jumbotron">
  <h1 align="center" >kampAIan</h1> 

</div>

  
    <div class="container1">
 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
<div class="container1">
<button type="submit" class="btn btnred btn-primary">Login</button>
 <button type="submit" class="btn btn-secondary">Cancel</button>
 
 

</div>
</form>
</div>
</body>
</html>