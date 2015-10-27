<?php

mysql_connect("localhost:8889","root","root");
mysql_select_db("examen"); 

echo $_POST["name"];
echo $_POST["email"];
echo $_POST["sitedata"];

$name=$_POST['name'];
$email=$_POST['email'];
$sitedata=$_POST['sitedata'];

$data = "INSERT INTO Clients (name, email, sitedata) VALUES ('$name', '$email', '$sitedata')";

$result = mysql_query($data);
if($result){
    echo("<br>Input data is succeed");
} else{
    echo("<br>Input data is fail");
}

?>
