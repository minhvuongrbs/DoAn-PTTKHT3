<?php
$id=$_GET['id'];
$host="localhost";
$database="quanlycongdan";
$username="root";
$password="";
$pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);

$sql1="Select * From citizen where CitID='$id'";

$query1=$pdo->query($sql1);

$query1->setFetchMode(PDO::FETCH_ASSOC);

$query1->execute();

$status=false;

while($row=$query1->fetch()){
    $status=$row['Status'];
}
if($status){
$sql="Update citizen set Status=false where CitId='$id'";

$query=$pdo->prepare($sql);

$query->execute();
}
else{
    $sql="Update citizen set Status=true where CitId='$id'";
    
    $query=$pdo->prepare($sql);
    
    $query->execute();
}
header("Location:quan_ly_cong_dan.php");
