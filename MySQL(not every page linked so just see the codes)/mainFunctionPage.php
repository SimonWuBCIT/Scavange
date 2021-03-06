<?php
include('functions.php');
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>SCAVANGE TEMPLATE</title>
		<link rel="stylesheet" href="CSS/backbone.css">
		<link rel="stylesheet" href="CSS/mainFunctionStyle.css">
		<script src="Javascript/navscripts.js"></script>
		<script src="Javascript/mainFunctionScript.js"></script>
		<script src="Javascript/multiOnLoadEvent.js"></script>
	</head>
	<body>
		<div class="topBar">
			<div class="navIcon" onclick="showNavBar()">
				<img src="Images/basket.png" width="100" height="100">
			</div>
			<div id="myTitle">
				<h1 class="topBarTitle">&nbsp;&nbsp;SCAVANGE</h1>
			</div>
		</div>
		<div id="navigationBar" class="navBar hidden">
			<ul class="navBarList">
				<!--<li class="navBarPlaceholder"></li>-->
				<a class="navLink" href="mainFunctionPage.php"><li class="navBarItem">Home</li></a>
				<a class="navLink" href="mobile_recipe.html"><li class="navBarItem">Recipes</li></a>
				<a class="navLink" href="mobileUpload.html"><li class="navBarItem">Share</li></a>
				<?php
					if(isLoggedIn()){
						echo '<a class="navLink" href="logout.php"><li class="navBarItem">Logout</li></a>';
					} else{
						echo '<a class="navLink" href="mobile_login.html"><li class="navBarItem">Login</li></a>';
					}
				 ?>

				<a class="navLink" href="mobile_aboutus.html"><li class="navBarItem">About Us</li></a>
				<a class="navLink" href="mobile_affilated.html"><li class="navBarItem">Affilates</li></a>
			</ul>
		</div>
		<div id="navigationBarAlt">
			<ul class="navBarListAlt">
				<a class="navLink" href="mainFunctionPage.html"><li class="navBarItemAlt">Home</li></a>
				<a class="navLink" href="mobile_recipe.html"><li class="navBarItemAlt">Recipes</li></a>
				<a class="navLink" href="mobileUpload.html"><li class="navBarItemAlt">Share</li></a>
				<?php
					if(isLoggedIn()){
						echo '<a class="navLink" href="logout.php"><li class="navBarItem">Logout</li></a>';
					} else{
						echo '<a class="navLink" href="mobile_login.html"><li class="navBarItem">Login</li></a>';
					}
				 ?>
				<a class="navLink" href="mobile_aboutus.html"><li class="navBarItemAlt">About Us</li></a>
				<a class="navLink" href="mobile_affilated.html"><li class="navBarItem">Affilates</li></a>
			</ul>
		</div>
		<div id="contentBox">
			<br><br>
			<div class="formBox">
				<form class="ingredientSearch">
					<label for="ingredientText">Enter your ingredients below:<br><br></label>
					<input type="text" id="ingredientText" name="ingredientText">
					<input type="button" id="addButton" name="addButton" value="Add" onclick="addIngredient()">
				</form>
				<br>
				<h4 class="subheadingText">Your Current Ingredients:</h4>
				<br>
				<form class="ingredientForm">
					<textarea id="realList" class="ingredientListAlt" ></textarea>
					<div id="masterList" class="ingredientList">
						<!--<p id="myList"></p>-->
					</div>
					<div id="submitSection">
						<input type="submit" id="submitButton" name="submitButton">
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
