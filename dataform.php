<html>
<head>
<title>Data Entry Form</title>
</head>

<body>
<!-- Form to accept data -->
<form action="dataform.php" method="post">
First Name: <input type="text" name="first"><br>
Last Name: <input type="text" name="last"><br>
Phone: <input type="text" name="phone"><br>
Mobile: <input type="text" name="mobile"><br>
Fax: <input type="text" name="fax"><br>
E-mail: <input type="text" name="email"><br>
Web: <input type="text" name="web"><br>
<input type="Submit">
</form>

<?
// Set the login variables
$username="root";
$password="root";
$database="data1";

//Load up the variables
$first=$_POST['first'];
$last=$_POST['last'];
$phone=$_POST['phone'];
$mobile=$_POST['mobile'];
$fax=$_POST['fax'];
$email=$_POST['email'];
$web=$_POST['web'];

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
$query = "INSERT INTO contacts VALUES ('','$first','$last','$phone','$mobile','$fax','$email','$web')";

// Send the data to the database table
mysql_query($query);

//Close the database connection
mysql_close();
 ?>

</body>
</html>