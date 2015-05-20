<html>
<body>

<?
// Set the login variables
$username="root";
$password="mysqlpassword";
$database="data1";

// Connect to the database
mysql_connect(localhost,$username,$password);

// Select the proper database or exit with error message
@mysql_select_db($database) or die( "Unable to select database");

/* Set the values to be entered to a variable.
* contacts is the name of the table.
* Order of values is in field order: 
* id, first, last, phone, mobile, fax, email, web
* id is blank, as it will be filled in automagically (remember autoincrement?)
*/
$query = "INSERT INTO contacts VALUES ('','Sally','Brown','012-345-6789','987-654-3210','234-432-2345','sallybrown@sbschools.net','http://www.sallybrown.com')";

// Send the data to the database table
mysql_query($query);

//Close the database connection
mysql_close();
 ?>

</body>
</html>