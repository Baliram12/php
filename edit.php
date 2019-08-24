<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>
	<?php require_once 'form1.php'; ?>
	<form method="post" action="">
<h2> Please Edit Here</h2>
Name:<input type="text" name="name" value="<?php echo $name; ?>"><br><br>
Phone:<input type="" name="phone" value="<?php echo $phone; ?>"><br><br>
Email:<input type="text" name="email" value="<?php echo $email; ?>"><br><br>
Date of Birth:<input type="date" name="dob"value="<?php echo $dob; ?>"min="1997-04-01" max="2017-04-30"><br><br>
Country:<select  name="country">
   <option value="select">Select</option>
   <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="Iceland">Iceland</option>
   <option value="India">India</option>
   <option value="Indonesia">Indonesia</option>
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
Address:<input type="text" name="address" value="<?php echo $address; ?>"><br><br>
<button type="submit" name="update" value="<?php echo $_GET['edit']?>">Update</button>
</form>
</body>
</html>