<!DOCTYPE html>
<html>
<body>
<h1>Page 3 [Transaction History]</h1>
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
<br> <br>
<form method="post" action="search.php">
   <div>
      <label>From : </label>
      <input type="date" name="date_from" value="<?php echo date('Y-m-d'); ?>"  />
      <label>To : </label>
      <input type="date" name="date_to" value="<?php echo date('Y-m-d'); ?>"  />
   <button type="submit" name="search">Search</button>
   </div>
</form>
<h2>Total Record :</h2>

<div class="container">
             
<td style='width: 150px; border: 1px solid black;'>
    <thead>
      <tr>
        <th>Transaction Catagory</th>
        <th>To</th>
		    <th>Amount </th>
        <th>transferred On</th>
		
      </tr>
    </thead>
  </table>
  </td>
</div>

</body>

</html>