<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-10">
	<title>Home</title>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"method="POST">
		<h1>PAGE 3[Transaction History]</h1>
	    <h3>Digital Wallet</h3>
	    <a href="Home.php">1.Home</a> 
	    <a href="Beneficiary.php">2.Add Beneficiary</a> 
	    <a href="Transaction_History.php">3.Transaction History</a>
	    <br><br>
	    <tr>
				<td><span><b> Date</b></span></td>
	
				<td>
				<select name="day">
					<option disabled selected>Day</option>
					<?php
						for($day=1;$day<=31;$day++)
						{
							echo "<option>$day</option>";
						}
					?>
					</select>
					<select name="month">
					<option disabled selected>Month</option>
					<?php
						$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($month=0;$month<count($mon);$month++)
						{
							echo "<option>$mon[$month]</option>";
						}
					?>
				</select>
				<select name="year">
					<option disabled selected>Year</option>
					<?php
						for($year=1970;$year<=2030;$year++)
						{
							echo "<option>$year</option>";
						}
					?>
			
	   <input type="submit" name="search" value="search">
	</form>
			</head>
<body>

<?php
	$day="";
	$err_day="";
	$mon="";
	$err_month="";
	$year="";
	$err_year="";
if(isset($_POST["submit"]))
	if(!isset($_POST["day"]))
		 {
			 $err_day="DATE need to be selected";
		 }
		 else
		 {
			 $day=$_POST["day"];
		 }
		 
		 if(!isset($_POST["mon"]))
		 {
			 $err_month=" ";
		 }
		 else
		 {
			 $month=$_POST["mon"];
		 }
		 
		 if(!isset($_POST["year"]))
		 {
			 $err_year=" ";
		 }
		 else
		 {
			 $year=$_POST["year"];
		 }
		 
		 function validation($data){
		$data = trim($data);
		$data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
		}
		?>