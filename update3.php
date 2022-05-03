<?php
$name = $_POST['name'];
$team  = $_POST['team'];
$pos = $_POST['pos'];
$age = $_POST['age'];
$gp = $_POST['gp'];
$mpg = $_POST['mpg'];
$usgp = $_POST['usgp'];
$fta = $_POST['fta'];
$ftp = $_POST['ftp'];
$twopa = $_POST['2pa'];
$twopp = $_POST['2pp'];
$threepa = $_POST['3pa'];
$threepp = $_POST['3pp'];
$ppg = $_POST['ppg'];
$rpg = $_POST['rpg'];
$apg = $_POST['apg'];
$spg = $_POST['spg'];
$bpg = $_POST['bpg'];
$topg = $_POST['topg'];

$conn = new mysqli("localhost","root","passpass","data");

$sql = $conn->prepare("UPDATE cp476tp SET TEAM=?, POS=?, AGE=?, GP=?, MPG=?, USGP=?, 
FTA=?, FTP=?, 2PA=?, 2PP=?, 3PA=?, 3PP=?, PPG=?, RPG=?, APG=?, SPG=?, BPG=?, TOPG=? WHERE NAME=?");
$sql->bind_param("ssdiddidididdddddds",$team,$pos,$age,$gp,$mpg,$usgp,
$fta,$ftp,$twopa,$twopp,$threepa,$threepp,$ppg,$rpg,$apg,$spg,$bpg,$topg,$name);
if ($sql->execute() === TRUE){
    echo "Record updated successfully";
}else{
    echo "error";
}


$conn->close();


?>