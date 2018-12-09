<?php

$usr = $_POST['usr']; 
$fml = $_POST['fml']; 
$fnm = $_POST['fnm']; 
$kur = $_POST['kur'];
$spec = $_POST['spec'];
$grp = $_POST['grp']; 
if (!empty($usr) || !empty($fml) || !empty($fnm) || !empty($kur) ||
!empty($spec) || !empty($grp)) {
 $host = "localhost";
    $dbUsername= "root";
    $dbPassword = "";
    $dbname = "testdb";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     
     $INSERT = "INSERT Into dbtest (usr, fml, fnm, kur, spec, grp) values(?, ?, ?, ?, ?, ?)";
     
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssissi", $usr, $fml, $fnm, $kur, $spec, $grp);
      $stmt->execute();
      
     } 
     
     $stmt->close();
     $conn->close();
    }
    else {
 echo "All field are required";
 die();
}
 
?>

<title>Groop Formation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="kursovarabota3.css">

</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#">ТУ-ВарнаС</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>


<form action="db2.php" method="post">
<div align="center">
    <div class="wrap-login100" >

    
  
  
    <div class="container">
      <p>Дисциплина 1:</p>
 <select class="huqmiqnko" name="spec1" id="spec1">
        <option value="+51"> </option>
       <option value="Искуствен Интелект">Искуствен Интелект</option>
        <option value="Електронна Търговия">Електронна Търговия </option>
        <option value="Офис Технологии">Офис Технологии</option>
        <option value="Мултимедийни Системи и Технологии">Мултимедийни Системи и Технологии</option>
        <option value="Информационен Мениджмънт">Информационен Мениджмънт</option>
        <option value="Web Приложения">Web Приложения</option>
      </select>
</div>
     
    
  
  <br />
  
    <div class="container" ">
      <p>Дисциплина 2:</p>
 <select class="huqmiqnko" name="spec2" id="spec2">
        <option value="+51"> </option>
       <option value="Искуствен Интелект">Искуствен Интелект</option>
        <option value="Електронна Търговия">Електронна Търговия </option>
        <option value="Офис Технологии">Офис Технологии</option>
        <option value="Мултимедийни Системи и Технологии">Мултимедийни Системи и Технологии</option>
        <option value="Информационен Мениджмънт">Информационен Мениджмънт</option>
        <option value="Web Приложения">Web Приложения</option>
      </select>
</div>
     
    
  
  <br />
      <div class="container">
        <p>Дисциплина 3:</p>
 <select class="huqmiqnko"name="spec3" id="spec3"> 
        <option value="+51"> </option>
       <option value="Искуствен Интелект">Искуствен Интелект</option>
        <option value="Електронна Търговия">Електронна Търговия </option>
        <option value="Офис Технологии">Офис Технологии</option>
        <option value="Мултимедийни Системи и Технологии">Мултимедийни Системи и Технологии</option>
        <option value="Информационен Мениджмънт">Информационен Мениджмънт</option>
        <option value="Web Приложения">Web Приложения</option>
      </select>
</div>
     
    
  
  <br />
      <div class="container">
        <p>Дисциплина 4:</p>
 <select class="huqmiqnko"name="spec4" id="spec4">
         <option value="+51"> </option>
       <option value="Искуствен Интелект">Искуствен Интелект</option>
        <option value="Електронна Търговия">Електронна Търговия </option>
        <option value="Офис Технологии">Офис Технологии</option>
        <option value="Мултимедийни Системи и Технологии">Мултимедийни Системи и Технологии</option>
        <option value="Информационен Мениджмънт">Информационен Мениджмънт</option>
        <option value="Web Приложения">Web Приложения</option>
      </select>
</div>
     
    
  
  <br />
    
  <button type="submit" id="submit"  class="btn btn-success" >Изпрати</button>


</div>

</div>

</form>s

</body>