## Assignment 11

For EVERY program from here forward, use all the features we have learned so far. For example: an algorithm in pseudocode, submit and reset buttons, a link from PHP back to html, images, colors, css files, indentation, comments etc.  See Grading Rubric under Course Documents before you turn in your code. And make sure it works!
You have been provided a data file called sales-data.txt. This contains the value of each sale made by two salespeople named Smith and Jones. Each line in the file contains a sale person’s name followed by a colon, followed by the value of a single sale. (for example, Smith:345.50 means that Smith made a sale worth 345.50.)
You have also been provided the sales.html file. The code in sales.html does not need to be changed except to update the name of the PHP file. The sales.html file contains a form with a submit button. There are no user inputs needed. 
 You have also been provided the sales.php file. Rename it to <lastname>-A11-sales.php and of course, include the pseudocode at the top. This program should contain the following logic:

 Use a while (!EOF) loop to read in the sales records from the input file, sales-data.txt. As each record is read in, use list and explode to parse the record into $name and $salesAmount, and place the sales amount from the record in one of the following arrays:
$smithSales    if ($name == "Smith")
$jonesSales    if ($name == "Jones")
  (see a similar example on page 382 in the book)

 You will need to use the floatval() function when storing the sales amounts in the array. For example
$smithSales[] = floatval($salesAmount);
If you get an error that says "A non well formed numeric value encountered" it is because you forgot to use floatval.
Don’t forget to close the input file when you are done reading all the data.
After the while loop, use two separate FOR loops that will process each array of values. Calculate the total sales for each salesperson and their average. Use the sizeof() function in the FOR loop header to obtain the size of each array. (see the bottom of page 371 in the book for summing and averaging values in an array)
Display the total sales value, the number of sales, and average sale for each salesperson as follows (be sure to use dollar signs and round to 2 decimals):
Smith achieved 6 sales with a total value of $2,469.15, and an average sale value of $411.53.
Jones achieved 4 sales with a total value of $2,411.15, and an average sale value of $602.79.

 Include a link back to <lastname>-sales.html
 Submit your <lastname>-A11-sales.html, <lastname>-A11-sales.php, <lastname>-image and <lastname>-css files here. Use only these file names for your code files. You may name your css and image files anything that makes sense as long as they start with your last name. 