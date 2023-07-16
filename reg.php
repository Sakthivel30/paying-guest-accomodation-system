<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];

$gender=$_POST['gender'];
$tenant=$_POST['tenant'];

$email=$_POST['email'];
$contno=$_POST['contactno'];
$address=$_POST['address'];
$hostel=$_POST['text1'];
$room=$_POST['room'];
$checkin=$_POST['cin'];
$Aadharno=$_POST['Aadharno'];
$password=$_POST['password'];


//database connection
$conn = new mysqli('localhost','root','','phpcrud');
if($conn->connect_error){
   die('connection failed :' .$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into users(firstname,lastname,gender,tenant,email,contactno,address,hostel,room,duration,Aadharno,password) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('sssssissssis',$fname,$lname,$gender,$tenant,$email,$contno,$address,$hostel,$room,$checkin,$Aadharno,$password);
   $stmt->execute();

   echo "<script>alert('Booking Sucessfully');</script>";
   echo "<script type='text/javascript'> document.location ='in.php'; </script>";
 
   $stmt->close();
   $conn->close();
}