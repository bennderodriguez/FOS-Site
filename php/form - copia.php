<?php

include 'conexion.php';

//echo $DD= insert("Bernabe","bernabe.gutierrez@gmail.com", "Cotizacion", "Sertivicios TI favor contactarme");

echo $name= $_POST["name"];
echo $mail= $_POST["email"];
echo $subject= $_POST["subject"];
echo $message= $_POST["message"];

insert($name, $mail, $subject, $message);

 function insert($name, $mail, $subject, $message) {
$conn = cnx();	

	try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO contact
	(name, mail, subject, message)
    VALUES ('$name', '$mail', '$subject', '$message')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
	header("Refresh: 0; url=../index.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
	$msg = 2; 
    }

$conn = null;


	
} 


?>