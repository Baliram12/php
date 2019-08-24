<?php
session_start();
$conn =mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'registration');
if(isset($_POST['submit'])){
$name = $_POST['name'];	
$phone = $_POST['phone'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$address = $_POST['address'];
$sql= "select * from table where email = '$email'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num == 1){
	echo"Email Already";
}
else
{
	$reg = "insert into table(name,phone,email,dob,country,state,city,address) values ('$name','$phone','$email','$dob','$country','$state','$city','$address')";
	mysqli_query($conn,$reg);
	echo"Data is insert into Table Successful";
}
}

if(isset($_REQUEST['delete'])){

	$id = $_REQUEST['delete'];
	$sql="DELETE FROM table WHERE id = '$id'";
	mysqli_query($conn,$sql);
}
$name="";
$phone="";
$email="";
$dob="";
$country="";
$state="";
$city="";
$address="";
if (isset($_REQUEST['edit'])) {


		 $id = $_REQUEST['edit'];
		 $sql = "SELECT * FROM table WHERE id=$id";
		 $result = mysqli_query($conn,$sql);
		  $row = mysqli_fetch_array($result);
			$name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $dob = $_POST['dob'];
            $country = $_POST['country'];
            $state = $_POST['state'];
            $city = $_POST['city'];
            $address = $_POST['address'];


		}

  if(isset($_REQUEST['update'])){
  	$id = $_REQUEST['update'];
  	        $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $dob = $_POST['dob'];
            $country = $_POST['country'];
            $state = $_POST['state'];
            $city = $_POST['city'];
            $address = $_POST['address'];
  	$sql = "UPDATE table SET name='$name',phone='$phone', email='$email',dob='$dob',country='$country',state='$state',city='$city', address='$address' WHERE id='$id'";
  	mysqli_query($conn,$sql);
  }
?>