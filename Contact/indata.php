
    <?php
    echo "hi insurance"
    ?>

<?php
$con= mysqli_connect("localhost","root","","insurance");
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name=$_POST["name"];
  $email=$_POST["email"];
  $message=$_POST["message"];

if (!empty($name) && !empty($email) && !empty($message) && !is_numeric($name)) {
 $query ="insert into contact (name, email, message) values ('$name','$email','$message')";
 
 mysqli_query($con,$query);
 
// $alert= " <script> alert('Done By Success!') </script>";
//   echo $alert;
  header("Location: index.html");
 die;
}
}else {
  echo "Please Enter Valid Information";
}

?>