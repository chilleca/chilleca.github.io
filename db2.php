<?php

$spec1 = $_POST['spec1']; 
$spec2 = $_POST['spec2']; 
$spec3 = $_POST['spec3']; 
$spec4 = $_POST['spec4'];
 

 $host = "localhost";
    $dbUsername= "root";
    $dbPassword = "";
    $dbname = "testdb";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     
     $INSERT = "INSERT Into subject (spec1, spec2, spec3, spec4) values(?, ?, ?, ?)";
     
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $spec1, $spec2, $spec3, $spec4);
      $stmt->execute();
      
     } 
     
     $stmt->close();
     $conn->close();
    
    
 
?>

<head>

  <title>Groop Formation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="design11.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
 
</head>
<body>


  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div= class="navbar-header">
      <h2  href="#"><span class="glyphicon glyphicon-log-in"></span>ТУ-Варна</h2>
    </div> 
  </div>
  </nav>
  <div align="center">
  <div class="container">
  <button type="button" id="1" onclick="reply_click()" class="btn btn-outline-warning">Избор</br>на</br>дисциплина</button>
  <button type="button" class="btn btn-outline-warning">Групи</button>
  </div>
  </div>


  <div class="footer">
  <p><h6>MNK Copyright 2019</h6></p>
</div>
  



</body>
</html>