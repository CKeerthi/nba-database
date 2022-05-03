<?php
$servername = "localhost";
$username = "debian-sys-maint";
$password = "aqs2fmOLpIgxrZhr";

// Create connection
$conn = new mysqli("localhost","root","","data");

$result = $conn->query("SELECT * FROM TABLE1");
?>
<!doctype html>
<html>
<body>
<h1 align="center">NBA Players</h1>
<table border="1" align="center" style="line-height:25px;">
<tr>
<th>NAME</th>
<th>TEAM</th>
<th>POSITION</th>
<th>AGE</th>
<th>GP</th>
<th>MPG</th>
<th>USGP</th>
<th>FTA</th>
<th>FT%</th>
<th>2PA</th>
<th>2P%</th>
<th>3PA</th>
<th>3P%</th>
<th>PPG</th>
<th>RPG</th>
<th>APG</th>
<th>SPG</th>
<th>BPG</th>
<th>TOPG</th>
</tr>

<?php
//Fetch Data form database
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
    ?>
        <tr>
        <td><?php echo $row['NAME']; ?></td>
        <td><?php echo $row['LL TEAM']; ?></td>
        <td><?php echo $row['POS']; ?></td>
        <td><?php echo $row['AGE']; ?></td>
        <td><?php echo $row['GP']; ?></td>
        <td><?php echo $row['MPG']; ?></td>
        <td><?php echo $row['USGP']; ?></td>
        <td><?php echo $row['FTA']; ?></td>
        <td><?php echo $row['FTP']; ?></td>
        <td><?php echo $row['2PA']; ?></td>
        <td><?php echo $row['2PP']; ?></td>
        <td><?php echo $row['3PA']; ?></td>
        <td><?php echo $row['3PP']; ?></td>
        <td><?php echo $row['PPG']; ?></td>
        <td><?php echo $row['RPG']; ?></td>
        <td><?php echo $row['APG']; ?></td>
        <td><?php echo $row['SPG']; ?></td>
        <td><?php echo $row['BPG']; ?></td>
        <td><?php echo $row['TOPG']; ?></td>
        </tr>
    <?php
    }
}else{
    ?>
    <tr>
    <th colspan="2">No players found</th>
    </tr>
    <?php
}
$conn->close();

?>
</table>
</body>
</html>
