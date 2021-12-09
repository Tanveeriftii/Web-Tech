<!DOCTYPE html>
<html>
<body>
<h1>Page 2 [Add beneficiary]</h1>
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
<h2>Add beneficiary :</h2>

<form action="Home.php" method="post">
beneficiary Name : <input type="text" name="beneficiary Name"><br> </br>
Mobile No:  <input type="text" name="Mobile No"><br> </br>
<input type="submit">
</form>
</body>
</html>