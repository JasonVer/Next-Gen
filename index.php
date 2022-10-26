<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login to I am social</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./public/Css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h1>Hello fellow IMS user</h1>
		<p>“Distracted from distraction by distraction” <br>
			<a href="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmedia1.tenor.com%2Fimages%2Fe37bfd867b7292e219c745ff399449db%2Ftenor.gif%3Fitemid%3D12990580&f=1&nofb=1&ipt=9c8ac37ebb4db2f89dcabbcff5db416f51cc5a210adfe797309f635a9f7a8497&ipo=images" target="_blank" rel="noopener" style="text-decoration:none;">.</a>
			― T.S. Eliot </p>
		<span>
			<p>Your privacy is our concern!</p>
		</span>
		</div>
	</div>
	
	
		<div class="right">
		<h5>Login</h5>
		<p>Don't have an account? <a href="./public/signup.php">Create Your Account</a> it takes less than a minute</p>
        <form name="f1" action="./public/FeedPlaceHolder.php" method="POST">
		<div class="inputs">
			<input type="text" placeholder="user name" id ="username" name  = "username">
			<br>
			<input type="password" placeholder="password" id ="password" name  = "password">
		</div>
			
			<br><br>
			
		<div class="remember-me--forget-password">
				<!-- Angular -->
	<label>
		<input type="checkbox" name="item" checked/>
		<span class="text-checkbox">Remember me</span>
	</label>
			<p>forget password?</p>
		</div>
			
			<br>
            <!-- <input type =  "submit" id = "btn" value = "Login" /> -->
			<button type =  "submit" id = "btn">Login</button>
            </form>
	</div>
	
</div>
<!-- partial -->
  
</body>
</html>
