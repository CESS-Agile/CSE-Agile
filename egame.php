<!doctype html>
<html>
<head>
<style>
body{
background-image: url("bg4.jpg");
background-size: 1500px 800px;
background-repeat: repeat;
}

h1 {
color: DarkBlue;
text-align: center;
}

#p1 {
color: DarkBlue;
font-weight: bold;
font-size: 20px;
}

span {
font-size: 25px;
}

.q{
font-size: 20px;
}

</style>
</head>

<body> 
<br>
<h1> English Game </h1>
<p id="p1">
	Choose the correct answer:
</p>
<form action="score.php" method="post" > 

<p>
<p class="q"><strong>Question 1 </strong></p>
<img src="tree.jpg" alt="Smiley face" style="float:left; width:200px; height:200px;"> 
	<br><br>
	<input  type="radio" name="choice1" value= "a" required > <span> Car </span> <br> <br>
	<input  type="radio" name="choice1" value= "b" > <span> Tree </span> <br> 
	<br><br><br><br><br><br><br><br>

<p class="q"><strong>Question 2 </strong></p>
<img src="flower.jpg" alt="Smiley face" style="float:left; width:200px; height:200px;">
    <br><br>
	<input  type="radio" name="choice2" value= "a" required > <span> Frog </span> <br> <br>
	<input  type="radio" name="choice2" value= "b" > <span> Flower </span> <br> 
	<br><br><br><br><br><br><br><br>

<p class="q"><strong>Question 3 </strong></p>
<img src="circle.png" alt="Smiley face" style="float:left; width:200px; height:200px;">
    <br><br>
	<input  type="radio" name="choice3" value= "a" required > <span> Circle </span> <br> <br>
	<input  type="radio" name="choice3" value= "b" > <span> Square </span> <br> 
	<br><br><br><br><br><br><br><br>

<p class="q"><strong>Question 4 </strong></p>
<img src="sun.jpg" alt="Smiley face" style="float:left; width:200px; height:200px;">
    <br><br>
	<input  type="radio" name="choice4" value= "a" required > <span> Moon </span> <br> <br>
	<input  type="radio" name="choice4" value= "b" > <span> Sun </span> <br> 
	<br><br><br><br><br><br><br><br>

<p class="q"><strong>Question 5 </strong></p>
<img src="red.jpg" alt="Smiley face" style="float:left; width:200px; height:200px;">
    <br><br>
	<input  type="radio" name="choice5" value= "a" required > <span> Red </span> <br> <br>
	<input  type="radio" name="choice5" value= "b" > <span> Blue </span> <br> 
	<br><br><br><br><br><br><br><br>
</p>

<input type="Submit" value="Done" >

</form> 

</body>
</html>