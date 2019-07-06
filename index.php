<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="imgs/logo/logored.png" sizes="64x64" type="image/png">

<style>
body {
	font-family: Arial, Helvetica, sans-serif;
	background-color: #f70303;
	}

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
  margin: auto;

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
</style>
</head>
<body>

<h2>Hello World</h2>

  <img src="imgs/logo/logored.png" width="150" height="150">


    <div class="container">
     

   
       <button type="submit">Create Account</button>
	   <h2 align="center">or</h2>
      <button type="submit">Login</button>
     
    </div>




</body>
</html>