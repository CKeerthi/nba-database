<?php
$name = $_POST['name'];
$conn = new mysqli("localhost","root","passpass","data"); //mysqli connect
$result = $conn->prepare("SELECT * FROM cp476tp WHERE NAME=?");
$result->bind_param("s",$name);
$result->execute();
$result = $result->get_result();
?>
<!doctype html>
<html>
<form action="update3.php" method="post">
<body>
<h1 align="center">Current NBA Player</h1>
<table border="1" align="center" style="line-height:25px;">
<!-- Creating a table to display all the player stats -->
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
if($result->num_rows > 0){ //get the results from the sql query
    while($row = $result->fetch_assoc()){
    ?>
        <tr>
        <td><?php echo $row['NAME']; ?></td>
        <td><?php echo $row['TEAM']; ?></td>
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
    ?>
    </table>
    <br>
    <h1 align="center">Update NBA Player</h1>
    <table border="1" align="center" style="line-height:25px;">
    <!-- Creating a table to display all the player stats -->
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
    <tr>
    <td><input type="text" id="name" name="name" size="15"></td>
    <td><input type="text" id="team" name="team" size="5"></td>
    <td><input type="text" id="pos" name="pos" size="6"></td>
    <td><input type="text" id="age" name="age" size="2"></td>
    <td><input type="text" id="gp" name="gp" size="2"></td>
    <td><input type="text" id="mpg" name="mpg" size="2"></td>
    <td><input type="text" id="usgp" name="usgp" size="2"></td>
    <td><input type="text" id="fta" name="fta" size="2"></td>
    <td><input type="text" id="ftp" name="ftp" size="2"></td>
    <td><input type="text" id="2pa" name="2pa" size="2"></td>
    <td><input type="text" id="2pp" name="2pp" size="2"></td>
    <td><input type="text" id="3pa" name="3pa" size="2"></td>
    <td><input type="text" id="3pp" name="3pp" size="2"></td>
    <td><input type="text" id="ppg" name="ppg" size="2"></td>
    <td><input type="text" id="rpg" name="rpg" size="2"></td>
    <td><input type="text" id="apg" name="apg" size="2"></td>
    <td><input type="text" id="spg" name="spg" size="2"></td>
    <td><input type="text" id="bpg" name="bpg" size="2"></td>
    <td><input type="text" id="topg" name="topg" size="2"></td>
    </tr>
    </table>
    <br>
    <input type="submit" value="Update"/>
    <?php
}else{
    ?>
    <tr>
    <th colspan="2">No players found</th>
    </tr>
    <?php
}
$conn->close();
?>