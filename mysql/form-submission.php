<?php 

    $firstname="";
 	$err_firstname="";
	$lastname="";
	$err_lastname="";
	$gender="";
 	$err_gender="";
	$birthday="";
	$err_birthday="";
	$birthmonth="";
	$err_birthmonth="";
	$birthyear="";
	$err_birthyear="";
	$phonenumber="";
	$err_phonenumber="";
    $username="";
 	$err_username="";
	$email="";
	$err_email="";
 	$password="";
 	$err_password="";
    $conpassword="";
 	$err_conpassword="";
	 
	 $arrDay =array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
	 $arrMonth=array("January","February","March","April","May","June","July","August","September","October","November","December");
    $hasError =false;

	if(isset($_POST["submit"])){


		if(empty($_POST["firstname"])){
			$hasError = true;
			$err_firstname ="First Name  Required";
		}

		else if(strlen($_POST["firstname"]) < 4){
			$hasError = true;
			$err_firstname ="Firstname must contain atleast 4 characters.";

		}

		else{
			$firstname = htmlspecialchars($_POST["firstname"]);
		}


		if(empty($_POST["lastname"])){
			$hasError = true;
			$err_lastname ="Last Name Required";
		}

		else if(strlen($_POST["lastname"]) < 4){
			$hasError = true;
			$err_lastname ="Lastname must contain atleast 4 characters.";

		}

		else{
			$lastname = htmlspecialchars($_POST["lastname"]);
		}
		if (!isset($_POST["birthday"])){
			$hasError = true;
			$err_birthday="Birth Day Required!";
		}
		else{
			$birthday =htmlspecialchars($_POST["birthday"]);
		}

        if (!isset($_POST["birthmonth"])){
			$hasError = true;
			$err_birthmonth="Birth Month Required!";
		}
		else{
			$birthmonth =htmlspecialchars($_POST["birthmonth"]);
		}

        if (!isset($_POST["birthyear"])){
			$hasError = true;
			$err_birthyear="Birth Year Required!";
		}
		else{
			$birthyear =htmlspecialchars($_POST["birthyear"]);
		}

		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender= "Gender Required!";
		}else{
			$gender = htmlspecialchars($_POST["gender"]);
		}
		if(empty($_POST["phonenumber"])){
			$hasError = true;
			$err_phonenumber ="Phone Number Required";
		}
		else if(!is_numeric($_POST["phonenumber"])){
			$hasError = true;
			$err_phonenumber ="Number must be numeric characters ";

		}
		else{
			$phonenumber = htmlspecialchars($_POST["phonenumber"]);
		}
		if(empty($_POST["username"])){
			$hasError = true;
			$err_username ="Username Required";
		} 
        else if( strpos($_POST["username"]," ")){
			$hasError = true;
			$err_username ="Username can't have space characters";

		}
		else if(strlen($_POST["username"]) <= 5){
			$hasError = true;
			$err_username ="Username must contain >5characters";

		}
		else{
			$username = htmlspecialchars($_POST["username"]);
		}

        if(empty($_POST["password"])){
			$hasError = true;
			$err_password ="Password Required";
		
		} 

		else if(strlen($_POST["password"]) < 3){
			$hasError = true;
			$err_username ="Password must contain atleast 3 characters";

		}
<<<<<<< HEAD
		else if(!strpos($_POST["password"],"#") and !strpos($_POST["password"],"?") ){
			

			$hasError = true;
			$err_password ="password must have a # or ?";

		}
		else if(!strpos($_POST["password"],"0") and !strpos($_POST["password"],"1") and !strpos($_POST["password"],"2") and !strpos($_POST["password"],"3")
		and !strpos($_POST["password"],"4") and !strpos($_POST["password"],"5") and !strpos($_POST["password"],"6") and !strpos($_POST["password"],"7") 
		and !strpos($_POST["password"],"8") and !strpos($_POST["password"],"9"))
		{


			$hasError = true;
			$err_password ="Password must contain  atleast one numeric value. ";

		}

=======
>>>>>>> 9673b73b8bb680dcf741a1cdf323d53242970995

        else{
			$password = htmlspecialchars($_POST["password"]);
		}

        if(empty($_POST["conpassword"])){
			$hasError = true;
			$err_conpassword ="Confirm password Required";
		} 
        else if($_POST["password"] != $_POST["conpassword"]){
            $hasError = true;
			$err_conpassword ="incorrect password.";

        }
        else{
			$conpassword = htmlspecialchars($_POST["conpassword"]);
		}
		if(empty($_POST["email"])){
			$hasError = true;
			$err_email ="Email Required";
		}
        else if( strpos($_POST["email"],"@") ){

            if(strpos($_POST["email"],".")){
            $email = htmlspecialchars($_POST["email"]);
            }
            else{
                $hasError = true;
                $err_email ="Email should have at least one .(dot) after @";
            }
		}
        else{
			
            $hasError = true;
			$err_email ="Email should have @ and at least one .(dot) after @";
		}


		if(!$hasError){
			echo "<h1>Form details</h1>";
			echo $_POST["firstname"]."<br>";
			echo $_POST["lastname"]."<br>";
			echo $_POST["phonenumber"]."<br>";
			echo $_POST["birthday"]."<br>";
			echo $_POST["birthmonth"]."<br>";
			echo $_POST["birthyear"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["conpassword"]."<br>";
		}

	}
	?>
<<<<<<< HEAD
<html>
	<head>
		<title>  
Registration Form  
=======

<html>
	<head>
		<title>  
MYSQL
>>>>>>> 9673b73b8bb680dcf741a1cdf323d53242970995
</title> 
</head>
<body bgcolor="white">  
<br>  
<<<<<<< HEAD
<form action="" method="post">
=======
<form action="InsertData.php" method="post">
>>>>>>> 9673b73b8bb680dcf741a1cdf323d53242970995
<fieldset>
<label> 1.Basic Information: </label> 
<br>          
<tr>
					<td>FirstName</td>
					<td>: <input type="text" name="Firstname" value="<?php echo $firstname; ?>" placeholder=""> </td>
					<td><span> <?php echo $err_firstname;?> </span></td>
</tr> 
<br>      
<tr>
					<td>LastName</td>
					<td>: <input type="text" name="Lastname" value="<?php echo $lastname; ?>" placeholder=""> </td>
					<td><span> <?php echo $err_lastname;?> </span></td>
</tr>
<br> 
 <tr>
					<td>Gender</td>
					<td>: <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male 
					<input name="gender" type="radio" value="Female" <?php if($gender=="Female") echo "checked"; ?> > Female 
					<input type="radio" value="Other" <?php if($gender=="Other") echo "checked"; ?> name="gender"> Other </td>
					<td><span> <?php echo $err_gender;?> </span></td>
</tr>
<br> 				
<tr>
				<td>Birth Date:</td>
                <td> 
                    <select name="birthday">
						
						<option disabled selected>Day</option>
						<?php
							foreach($arrDay as $a){
								if($a == $birthday) 
									echo "<option selected>$a</option>";
								else
									echo "<option>$a</option>";
							}
						?>
					</select>
					<span> <?php echo $err_birthday; ?> </span>
                    <select name="birthmonth">
						
					<option disabled selected>Month</option>
					<?php
							foreach($arrMonth as $a){
								if($a == $birthmonth) 
									echo "<option selected>$a</option>";
								else
									echo "<option>$a</option>";
							}
					?>
					</select>
					<span> <?php echo $err_birthmonth; ?> </span>
                    <select name="birthyear" value="<?php echo $birthyear; ?>">
						
                        <option disabled selected>Year</option>
                        <?php
						
						for($i=1945;$i<=2021;$i++){
							

							if($i == $birthyear){
							echo "<option selected>$i</option>";}
							else
								{	echo "<option>$i</option>";}
							
						}
                        ?>
                        </select>
                    
                </td>					
                    <td><span> <?php  echo $err_birthyear; ?> </span></td>

                </tr>
				<br> 
<fieldset>
<legend>Religion</legend>
<select class="form-control dropdown" id="religion" name="religion">
<option value="" selected="selected" disabled="disabled">-- select one --</option>
<option value="Hindu">Hindu</option>
<option value="Islam">Islam</option>
<option value="christan">christan</option>
<option value="Other">Other</option>
</select>
</fieldset>
</fieldset>
<fieldset>
<br> <br> 
<label> 2.Contact Information: </label>
<label>    
<tr>
					<td>Phone: </td>
					<td> <input type="text" name="phonenumber" value="<?php echo $phonenumber; ?>" placeholder="Number">  </td>
					<td><span> <?php echo $err_phonenumber;?> </span></td>
                   
					
</tr>
<br> 
Present Address: 
<br>  
<textarea cols="80" rows="5" value="address">  
</textarea>  
<br> <br> 
Permanent Address:  
<br>  
<textarea cols="80" rows="5" value="address">  
</textarea>  
<br> <br>
<tr>
					<td>Email</td>
					<td>: <input type="text" name="email" value="<?php echo $email; ?>"  placeholder="">  </td>
					<td><span> <?php echo $err_email;?> </span></td>
                   
					
				</tr>
				<br> <br> 
Personal website link:
<a href="url">www.aiub.edu</a>
</fieldset> 
<br>
<fieldset>
<label> 3.Account Information: </label> 
<tr>
					<td>Username</td>
					<td>: <input type="text" name="username" value="<?php echo $username; ?>" placeholder="">  </td>
					<td><span> <?php echo $err_username;?> </span></td>
				
</tr>
<<<<<<< HEAD
<tr>
					<td>Password</td>
					<td>: <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Password">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
					
				</tr>
<br>

<tr>
					<td>Username</td>
					<td>: <input type="text" name="username" value="<?php echo $username; ?>" placeholder="">  </td>
					<td><span> <?php echo $err_username;?> </span></td>
				
				</tr>


                <tr>
					<td>Email</td>
					<td>: <input type="text" name="email" value="<?php echo $email; ?>"  placeholder="">  </td>
					<td><span> <?php echo $err_email;?> </span></td>
                   
					
				</tr>
=======
<br>
>>>>>>> 9673b73b8bb680dcf741a1cdf323d53242970995
                <tr>
					<td>Password</td>
					<td>: <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Password">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
					
				</tr>
<<<<<<< HEAD
=======
				<br>
>>>>>>> 9673b73b8bb680dcf741a1cdf323d53242970995
                <tr>
					<td>Confirm Password</td>
					<td> <input type="password" name="conpassword" value="<?php echo $conpassword; ?>" placeholder="Confirm Password">  </td>
					<td><span> <?php echo $err_conpassword;?> </span></td>
<<<<<<< HEAD
                    
					
</tr>
  <tr>
  <input type="button" value="Submit"/>  
=======
		<tr> <br>
					<td>Email</td>
					<td>: <input type="text" name="email" value="<?php echo $email; ?>"  placeholder="">  </td>
					<td><span> <?php echo $err_email;?> </span></td>

		</tr><br>
					
</tr>
  <tr>
  <tr>
                    <td align="left"><input type="submit" name="submit" value="Submit"></td>
                </tr>
>>>>>>> 9673b73b8bb680dcf741a1cdf323d53242970995
</form>  
</body>  
</html>  
