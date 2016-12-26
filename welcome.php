<!doctype html>
<html>
<style>
body {
background-image: url("math4.jpg");
background-size: 1500px 800px;
background-repeat: no-repeat;
font-size: 20px;
color: yellow; }
h1{
color: DarkBlue;
}
.class1
{
font-size: 100px;
text-align: center;
font-style: italic;
font-weight: bold;
color: white;
}
.class2
{
text-align: center;
font-size: 30px;
font-style: italic;
font-weight: bold;
color: Blue;
}
a:link, a:visited {
    background-color: crimson;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: red;
}
</style>
<body>
<p class= "class1"> Welcome</p>
<div class = "class2">
<input class = "class2" style= "border: 5px solid Blue" type="button" value="Math Game" onclick="location.href='http://localhost/agile2/game.php';"> </br></br>
<input class = "class2"  style= "border: 5px solid Blue" type="button" value="English Game" onclick="location.href='http://localhost/agile2/egame.php';"> </br></br>
<input class = "class2" style= "border: 5px solid Blue" type="button" value=Logout onclick="location.href='http://localhost/agile2/logout.php';">
</div>
</body>
</html>