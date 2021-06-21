<!DOCTYPE html>
<html>
<head>
	<title>Form Registration </title>
</head>
<body>

	<h1>Form Registration</h1>

	<?php 

		$FirstName = $_POST['fname'];
		$LastName = $_POST['lname'];
		$Gender = $_POST['gender'];
		$DOBE = $_POST['DOBE'];
		$Religion = $_POST['religion'];
		$Email = $_POST['email'];
		$Phone = $_POST['phone'];
		$UserName = $_POST['uname'];
		$Password = $_POST['password'];
		$PresentAddress = $_POST['presentaddress'];
		$PermanentAddress = $_POST['permanentaddress'];

    	echo "First Name: $FirstName Last Name: $LastName  Gender: $Gender Email: $Email User Name: $UserName";

	
        $f = fopen("text.txt","a");
        fwrite($f, "First Name= ".$FirstName ."\n");
        fwrite($f, "Last Name= ".$LastName ."\n");
        fwrite($f, "Gender= ".$Gender ."\n\n");
        fwrite($f, "DOBE= ".$DOBE. "\n");
        fwrite($f, "Religion= ".$Religion. "\n");
        fwrite($f, "Email= ".$Email. "\n");
        fwrite($f, "Phone= ".$Phone. "\n");
        fwrite($f, "User Name=".$UserName. "\n");
        fwrite($f, "Password=".$Password. "\n");
        fwrite($f, "PresentAddress=".$PresentAddress. "\n");
        fwrite($f, "PermanenttAddress=".$PermanentAddress. "\n");
        

        fclose($f);

        
	?>#File-I-O
#File-I-O
#FILE-IO
