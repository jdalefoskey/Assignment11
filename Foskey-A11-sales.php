<!DOCTYPE html>
<html>
<head>
	<!--Author: Johnny Foskey
		Date:  04/06/21
		File:	  Foskey-A11-sales.php
		Purpose: To calculate array average sales
	
	sales.php algorithm:
		Received the button click
		Open/Read sales-data.txt file
		While not the end of the file,
		create array = smith.sales
		create array = jones.sales
		calculate array length
		calculate array average 
		
	Display: salesPerson, numberOfSales, totalSalesAmount, salesAverage
	END
	-->
	<title>Sales Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
 $smithSales = [];
 $jonesSales = [];
 // open the file
 $salesData = fopen('sales-data.txt', 'r');

 while (!feof($salesData)) {
     $sales = fgets($salesData);
     $sales = explode(':', $sales);
     list($salesPerson, $salesDollars) = $sales;

     if ($salesPerson == 'Smith') {
         //here we are pushing Smith sales into an array called smithSales
         $smithSales[] = floatval($salesDollars);
     } else {
         $jonesSales[] = floatval($salesDollars); // here we pust the non- Smith sales into an array called jonesSales
     }
 }
 fclose($salesData);

//  closing the file after we are done
?>
	<!-- Update the link below with the name of your html file -->
	<a href="Foskey-A11-sales.html">Return to form</a>

</body>
</html>
