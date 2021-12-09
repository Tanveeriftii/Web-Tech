<!DOCTYPE html>
<html>
<body>
<h1>Page 1 [Home]</h1>
<h2>Digital Wallet</h2>
<?php
echo "1."; 
?> 
<a href="Home.php"> Home </a>
<?php
echo "2."; 
?> 
<a href="Add beneficiary.php"> Add beneficiary </a>
<?php
echo "3."; 
?> 
<a href="Transaction History.php"> Transaction History </a>
<h2>Fund Transfer:</h2>
Select Catagory:  
<select>  
  <option value="Select">Select a value</option>}  
  <option value="NEFT">NEFT</option>  
  <option value="RTGS">RTGS</option>  
  <option value="IMPS">IMPS</option>  
  <option value="UPI">UPI</option>  
  <option value="Cheque">Cheque</option>  
  <option value="Others">Others</option>  
</select> <br> </br>  
To:  
<select>  
  <option value="Select">Select a value</option>}  
  <option value="X">X</option>  
  <option value="Y">Y</option>  
  <option value="Z">Z</option>    
  <option value="Others">Others</option>  
</select> <br> </br>  
<form action="Home.php" method="post">
Amount: <input type="text" name="Amount"><br> </br>
<input type="submit">
</form>
</body>
</html>