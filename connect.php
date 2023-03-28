<?php
  $name=$_POST['name'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $pincode=$_POST['pincode'];
  $card_type=$_POST['card_type'];
  $card_number=$_POST['card_number'];
  $exp_date=$_POST['exp_date'];
  $cvv=$_POST['cvv'];

?>

<!-- Database connection -->
$conn = new mysqli('localhost','root,'','user');

if($conn->connect_error){
  die('Connection Failed : '.$conn->connect_error);
}
else{
  $stmt = $conn->prepare("Insert in registration(name,gender,address,email,pincode,card_type,card_number,exp_date,cvv)
          values(?,?,?,?,?,?,?,?,?)");
  $stmt = bind->param("s,s,s,s,i,s,i,i,i",$name, $gender, $address, $email, $pincode, $card_type, $card_number, $exp_date, $cvv)        
  $stmt = execute();
  echo "Payment Successfull...."
  $stmt = close();
  $conn = close();
} 