<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="BG.jpg" >
<Header style="background-color: mediumpurple;">
        <h1> Introduce the Student marks </h1>
        <a href="index.html"> Form </a>
        <a href="Table.php"> Table </a>
        <hr>
    </Header>
<?php
   
   $connection = mysqli_connect("localhost","root","","mydb");
 

    $fname = $_POST['First_Name'];
    $Mark1 = $_POST['Mark1'];
    $Mark2 = $_POST['Mark2'];

    $sql = "INSERT INTO Marks (First_Name, Mark1, Mark2) VALUES ('$fname', '$Mark1', '$Mark2')";

    if (mysqli_query($connection, $sql)){
        echo "<br>New record created successfully";
    }

    
?>
     <footer style="background-color: mediumpurple;">
        <hr>
        author : Andres Martinez <br>
        &copy; copyright reserved <br>
        <small><a>200590062@student.georgianc.on.ca </a> </small> 

    </footer>
</body>
</html>
