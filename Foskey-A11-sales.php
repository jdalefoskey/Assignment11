<!DOCTYPE html>
<html>

<head>
	<!--Author: Johnny Foskey
		Date:  04/06/21
		File:	  Foskey-A11-sales.php
		Purpose: To calculate array average sales
	
		Foskey-A11-sales.php algorithm:
			Received the button click
			Open/Read sales-data.txt file
			While not the end of the file,
			create array = smithSales
			create array = jonesSales
			Close File
			calculate sum of array items
			calculate the average of array items
			Display: salesPerson, totalSalesMade, totalSalesAmount, salesAverage
	END
	-->
	<title>Sales Report</title>
	<link rel="stylesheet" type="text/css" href="sample.css">
</head>

<body>

	<?php

	// creating our empty arrays to use
	$smithSales = [];
	$jonesSales = [];

	// open the file
	$salesData = fopen('sales-data.txt', 'r');
	// while loop 
	while (!feof($salesData)) {
		$sales = fgets($salesData);
		$sales = explode(':', $sales);
		list($salesPerson, $salesDollars) = $sales;

		if ($salesPerson == 'Smith') {
			//here we are pushing Smith sales into an array called smithSales
			$smithSales[] = floatval($salesDollars);
		} else {
			$jonesSales[] = floatval($salesDollars); // here we pust the non Smith sales into an array called jonesSales
		}
	}
	//  closing the file after we are done
	fclose($salesData);

	// Smith for loop
	$smithSum = 0;
	for ($i = 0; $i < sizeof($smithSales); $i = $i + 1) {
		$smithSum = $smithSum + $smithSales[$i];
	}
	$smithCount = sizeof($smithSales);
	$smithAverage = floatval($smithSum / sizeof($smithSales));

	// Jones for loop
	$jonesSum = 0;
	for ($i = 0; $i < sizeof($jonesSales); $i = $i + 1) {
		$jonesSum = $jonesSum + $jonesSales[$i];
	}
	$jonesCount = sizeof($jonesSales);
	$jonesAverage = floatval($jonesSum / sizeof($jonesSales));



	//print our results from the forloops
	print("<p>Smith achieved $smithCount sales with a total value of $$smithSum, and an average sale value of $$smithAverage.</p>");
	print("<p>Jones achieved $jonesCount sales with a total value of $$jonesSum, and an average sale value of $$jonesAverage.</p>");
	?>
	<!-- Link back to html page -->
	<a href="Foskey-A11-sales.html">Return to form</a>

</body>

</html>