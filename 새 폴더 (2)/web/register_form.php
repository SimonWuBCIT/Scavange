<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="login.css">
	<link href="testProj.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>SCAVANGE</title>
</head>
<body style="font-size:17px; font-family: Courier New, Arial, sans-serif;">

<div id="container">

	<div id="header" >
		<h1 class="myTitle" style="font-size:70px; letter-spacing: 10px;"><strong>S C A V A N G E</strong></h1>
		<!--<div class="logoSection">
			<img class="myLogo" src="Logo(white).png" width="128" height="128">
		</div>-->
	</div>
	<div id="headerContain">
	</div>

<div id="mainContain">

	<div id="navContain">
		<div id="nav" style="font-size: 25px;">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="recipe.html">Recipes</a></li>
				<li><a href="share.html">Share</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="#" id="myBtn">Login</a></li>
			</ul>


  <!-- Modal -->
	<div class="jae_login">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content" id="login_jae">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>

              <button type="submit" class="btn btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member?<a href="#" class="jae_a" style="color:blue; text-align:right;">Sign Up</a></p>
        </div>
      </div>

    </div>
  </div>
</div>


</div>
		</div>

	<div id="main" style="letter-spacing: 1px;">
    <!---FROM this line----------------------------------------------------------------------------------------->
    <!---FROM this line----------------------------------------------------------------------------------------->
    <!---FROM this line----------------------------------------------------------------------------------------->


    <div class="container">
      <form class="form-horizontal" action="register.php" method="post">
        <div class="control-group">
          <label class="control-label" for="inputEmail">Name</label>
          <div class="controls">
            <input type="text" id="inputEmail" placeholder="Email" name="usern">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputEmail">Email</label>
          <div class="controls">
            <input type="text" id="inputEmail" placeholder="Email" name="usere">
          </div>
        </div>
    <div class="control-group">
      <label class="control-label" for="inputPassword">Password</label>
      <div class="controls">
        <input type="password" id="inputPassword" placeholder="Password" name="userp">
      </div>
    </div>
    <div class="control-group">
      <div class="controls">

        <button type="submit" class="btn">Sign up</button>
      </div>
    </div>
    </form>
    </div>




    <!---TO this line----------------------------------------------------------------------------------------->
    <!---TO this line----------------------------------------------------------------------------------------->
    <!---TO this line----------------------------------------------------------------------------------------->
	</div>

	</div>

</div>

<div id="footerContain">
	<div id="footer">
		<p> Copyright &copy; 2017 </p>
	</div>
</div>

</div>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
