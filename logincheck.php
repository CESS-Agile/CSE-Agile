<?php
   session_start();

  $con=mysqli_connect("localhost","root","","agile");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$Username = mysqli_real_escape_string($con,$_POST['Username']);
$Password = mysqli_real_escape_string($con,$_POST['Password']);

 $query = "SELECT ID FROM user WHERE Username='$Username' and  Password='$Password'";
    $res = mysqli_query($con,$query);
    $rows = mysqli_num_rows($res);
    if ($rows==1) 
    {
        $_SESSION['Username'] = $_POST['Username'];
        header("Location: http://localhost/agile2/welcome.php");
    }
    else 
    {
        echo "username and password not found";

}
mysqli_close($con);

?>

 