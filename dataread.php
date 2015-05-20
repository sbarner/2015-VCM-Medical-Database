<html>
<head>
<title>Read Data From Contacts</title>
</head>

<body>

<?
// Set the login variables
$username="root";
$password="root";
$database="data1";
// Connect to the database
mysql_connect(localhost,$username,$password);
// Select the proper database or exit with error message
@mysql_select_db($database) or die( "Unable to select database");

// Set variable to select all records in contacts table
$query="SELECT * FROM contacts";
/* Run the SELECT as a query and load results into variable 'result'
* result is now an array containing the entire contents of the
* result table */
$result=mysql_query($query);
// Count rows in table and save as 'num'
$num=mysql_numrows($result);
// Close the database connection
mysql_close();

// Send some HTML out to the browser.
echo "<h1><b><center>Database Output</center></b></h1><br><br>";

// Loop to read in values from array and load variables
$i=0;
while ($i < $num) {

$first=mysql_result($result,$i,"first");
$last=mysql_result($result,$i,"last");
$phone=mysql_result($result,$i,"phone");
$mobile=mysql_result($result,$i,"mobile");
$fax=mysql_result($result,$i,"fax");
$email=mysql_result($result,$i,"email");
$web=mysql_result($result,$i,"web");

/* It'd be real nice to do something with the data before going 
* on to the next record, so let's just send it to the browser... */
echo "<b>$first $last</b><br>Phone: $phone<br>Mobile: $mobile<br>Fax: $fax<br>E-mail: $email<br>Web: $web<br><hr><br>";

$i++;
}

// Note that we didn't use the term "noob" anywhere in the code!

?>

<h1><b><center>Yippee Skippy!!!</center></b></h1>

</body>
</html>