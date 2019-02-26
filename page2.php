<php?
$cust_name = htmlentities($_POST{'cust_name'});
$cust_email = htmlentities($_POST{'cust_email'});
?>
<html>
<head>
<title>multipage form - page two </title>

</head>
<body>
<h1>heading</h1>
<p>Please fill in the following information </p>

<FORM METHOD = "POST" ACTION="final.php">


Address:<INPUT TYPE="text"SIZE="50" name="cust_Address"><br>
Phone<INPUT TYPE="text"SIZE="20" name="cust_phone"><br>
<INPUT TYPE="hidden" name="cust_name" value="<?php echo $cust_name;?>">
<INPUT TYPE="hidden" name="cust_email" value="<?php echo $cust_email;?>">
<INPUT TYPE="submit" name="submit2" value="Proceed">
</Form>



</body>


</html>