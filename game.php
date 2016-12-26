<doctype! html>
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
<h1> Math Game </h1>
<p id="p1">
	Choose the correct answer:
</p>
<form name="myForm" action="validateMath.php" method="post" > 

<p>
<p class="q"><strong>Question 1 </strong></p>
<header style="font-size:25">What is the answer of 3+1 ?</header>
	<br><br>
	<input  type="radio" name="choice1" value= "a" required > <span> 4 </span> <br> <br>
	<input  type="radio" name="choice1" value= "b" > <span> 6 </span> <br> 
	<br><br><br><br><br><br><br><br>

<p class="q"><strong>Question 2 </strong></p>
<header style="font-size:25">What is the answer of 10-3 ? </header>
    <br><br>
	<input  type="radio" name="choice2" value= "a" required > <span> 5 </span> <br> <br>
	<input  type="radio" name="choice2" value= "b" > <span> 7 </span> <br> 
	<br><br><br><br><br><br><br><br>

<p class="q"><strong>Question 3 </strong></p>
<header style="font-size:25">What is the answer of 8+2 ?</header>
    <br><br>
	<input  type="radio" name="choice3" value= "a" required > <span> 10 </span> <br> <br>
	<input  type="radio" name="choice3" value= "b" > <span> 11 </span> <br> 
	<br><br><br><br><br><br><br><br>

<p class="q"><strong>Question 4 </strong></p>
<header style="font-size:25">What is the answer of 6*3 ?</header>
    <br><br>
	<input  type="radio" name="choice4" value= "a" required > <span> 9 </span> <br> <br>
	<input  type="radio" name="choice4" value= "b" > <span> 18 </span> <br> 
	<br><br><br><br><br><br><br><br>

<p class="q"><strong>Question 5 </strong></p>
<header style="font-size:25">What is the answer of 4/2 ?</header>
    <br><br>
	<input  type="radio" name="choice5" value= "a" required > <span> 1 </span> <br> <br>
	<input  type="radio" name="choice5" value= "b" > <span> 2 </span> <br> 
	<br><br><br><br><br><br><br><br>
</p>

<input type="Submit" value="Done" >

</form> 

</body>
</html>