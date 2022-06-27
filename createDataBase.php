

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  //connexion au serveur
$serverName='localhost';
$userName='khalil';
$password='admin';
$db='';
$conn=mysqli_connect($serverName,$userName,$password);
if(!$conn){
    die(mysqli_connect_error());
}
//creation de la base de données
if(isset($_GET["DbName"])):
    $db=$_GET["DbName"];
    $sql='CREATE DATABASE IF NOT EXISTS '.$db;

    $result=mysqli_query($conn,$sql);
    if($result):
        echo "base de données créer";
    else:
        die(mysqli_error($conn));
    endif;
endif;

?>  
</body>
</html>
