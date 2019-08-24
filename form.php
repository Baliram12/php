<!DOCTYPE html>
<html>
<head>
	<title>Table Form</title>
</head>
<body>
<?php require_once'form1.php'?>	
<?php

$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'registration');
$sql="select * from table";
$result=mysqli_query($conn,$sql);
?>
 <?php 

    function pre_r($array){
    	echo'<pre>';
    	print_r($array);
    	echo'<pre>';
    }
    ?>



<form method="post" action="form1.php">
<h2> Registration Form</h2>
Name:<input type="text" name="name"><br><br>
Phone:<input type="" name="phone"><br><br>
Email:<input type="text" name="email"><br><br>
Date of Birth:<input type="date" name="dob" min="1997-04-01" max="2017-04-30"><br><br>
Country:<select  name="country">
   <option value="select">Select</option>
   <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="Iceland">Iceland</option>
   <option value="India">India</option>
   <option value="Indonesia">Indonesia</option>
   <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jersey">Jersey</option>
   <option value="Jordan">Jordan</option></select><br><br>
State:<select  name="state">
   <option value="select">Select</option>
   <option value="Andhra Pradesh">Andhra Pradesh</option>
   <option value="Arunachal Pradesh">Arunachal Pradesh</option>
   <option value="Assam">Assam</option>
   <option value="Bihar">Bihar</option>
   <option value="Chhattisgarh">Chhattisgarh</option>
   <option value="Goa">Goa</option>
   <option value="Gujarat">Gujarat</option>
   <option value="Haryana">Haryana</option>
   <option value="Himachal Pradesh">Himachal Pradesh</option>
   <option value="Jammu and Kashmir">Jammu and Kashmir</option>
   <option value="Jharkhand">Jharkhand</option>
   <option value="Karnataka">Karnataka</option>
   <option value="Kerala">Kerala</option>
   <option value="Madhya Pradesh">Madhya Pradesh</option>
   <option value="Maharashtra">Maharashtra</option>
   <option value="Manipur">Manipur</option>
   <option value="Meghalaya">Meghalaya</option>
   <option value="Mizoram">Mizoram</option>
   <option value="Nagaland">Nagaland</option>
   <option value="Odisha">Odisha</option>
   <option value="Punjab">Punjab</option>
   <option value="Rajasthan">Rajasthan</option>
   <option value="Sikkim">Sikkim</option>
   <option value="Tamil Nadu">Tamil Nadu</option>
   <option value="Telangana">Telangana</option>
   <option value="Tripura">Tripura</option>
   <option value="Uttar Pradesh">Uttar Pradesh</option>
   <option value="Uttarakhand">Uttarakhand</option>
   <option value="West Bengal">West Bengal</option></select><br><br>
City:<select  name="city">
   <option value="select">Select</option>
   <option value="Hyderabad ">Hyderabad </option>
   <option value="Bengaluru">Bengaluru</option>
   <option value="	Itanagar">Itanagar</option>
   <option value="	Dispur">Dispur</option>
   <option value="Patna">Patna</option>
   <option value="Raipur">Raipur</option>
   <option value="	Panaji">Panaji</option>
   <option value="Gandhinagar">Gandhinagar</option>
   <option value="	Chandigarh">Chandigarh</option></select><br><br>
Address:<input type="text" name="address"><br><br>
<button type="submit" name="submit" value="submit">Submit Here</button>
</form>
<form>
<h2>Registration Data Record</h2>
<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>phone</th>
		<th>email</th>
		<th>date of birth</th>
		<th>country</th>
		<th>state</th>
		<th>city</th>
		<th>address</th>
		<th>edit</th>
		<th>delete</th>
	</tr>
       <tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['phone'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['dob'];?></td>
        <td><?php echo $row['country'];?></td>
        <td><?php echo $row['state'];?></td>
        <td><?php echo $row['city'];?></td>
        <td><?php echo $row['address'];?></td>
    	<td><a href="edit.php?edit=<?php echo $row['id'];?>"> Edit </a></td>
    	<td><a href="?delete=<?php echo $row['id'];?>"> Delete </a></td>
    	</tr>
</table>
</form>
</body>
</html>